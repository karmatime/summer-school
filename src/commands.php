<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include "connect.php"

?>

<?php

$command = $_REQUEST["command"];
  if (isset($command)) {
  switch ($command){
      case 'register':

    $nume = $_POST["nume"];
    $prenume = $_POST["prenume"];
    $email = $_POST["email"];
    $profesie = $_POST["profesie"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomString = ''; 
  
    for ($i = 0; $i < 10; $i++) { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 

    $cod_verificare = $randomString;
    $check_email_duplicate= mysqli_query($conexiune,"SELECT id FROM accounts WHERE email = '$email'" );

      if($nume == "" || $prenume == "" || $email == "" || $profesie == "" || $password == "" || $confirm_password == ""){
        echo "<script type='text/javascript'>alert('Please fill all the required fields!');</script>";
        
      }
      else{
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $nume)){
          echo "<script type='text/javascript'>alert('Invalid first name! Special characters not allowed!');</script>";
      }
        else if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $prenume)){
          echo "<script type='text/javascript'>alert('Invalid last name! Special characters not allowed!');</script>";
        }
        else if(mysqli_num_rows($check_email_duplicate) > 0){
  
            echo "<script type='text/javascript'>alert('Email already exist!');</script>";
        }
        else if(!preg_match('/^[A-Za-z0-9][A-Za-z0-9]{5,31}$/', $password)){
            echo "<script type='text/javascript'>alert('Password is invalid! Password must have at last 6 characters. Special characters not allowed!');</script>";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<script type='text/javascript'>alert('Invalid email!');</script>";
        }
        else if($password != $confirm_password){
            echo "<script type='text/javascript'>alert('Passwords doesn't match!);</script>";
        }
         
        else{

            $verified_nume = htmlspecialchars(mysqli_real_escape_string($conexiune, $nume));

            $verified_prenume = htmlspecialchars(mysqli_real_escape_string($conexiune, $prenume));

            $verified_email = htmlspecialchars(mysqli_real_escape_string($conexiune, $email));
      
            $hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
            
            $sql="INSERT INTO accounts(nume, prenume, email, profesie, password, cod_verificare) VALUES ('$verified_nume','$verified_prenume','$verified_email','$profesie','$hash','$cod_verificare')";
      
            if (!mysqli_query($conexiune, $sql)) {
              die('Error: ' . mysqli_error($conexiune));
            }
            else{
            session_id("main");
            session_start();

            $_SESSION['id']=$results['id'];
            $_SESSION['nume']= $verified_nume;
            $_SESSION['prenume']= $verified_prenume;
            $_SESSION['email']= $verified_email;
            $_SESSION['profesie']= $profesie;
            $_SESSION['password']= $password;
            $_SESSION['verificare']= 0;
            $_SESSION['rol']=0;
            header("Location: home.php");
            }
          }
        }

      break;

      case 'login':

      $email = $_POST["email"];
      $password = $_POST["password"];

      $raw =  mysqli_query($conexiune,"SELECT * FROM accounts WHERE email = '$email'");
      $results=mysqli_fetch_array($raw);
     
      if($results['email'] == $email && password_verify($password, $results['password']) == true){
        session_id("main");
        session_start();

        $_SESSION['id']=$results['id'];
        $_SESSION['nume']= $results['nume'];
        $_SESSION['prenume']= $results['prenume'];
        $_SESSION['email']= $results['email'];
        $_SESSION['profesie']= $results['profesie'];
        $_SESSION['password']= $results['password'];
        $_SESSION['verificare']= $results['verificare'];
        $_SESSION['rol']=$results['rol'];

        header("Location: home.php");

      }
      else if($results['email'] != $email){
        echo "<script type='text/javascript'>alert('You are not registered!');</script>";
      }
      else if(password_verify($password, $results['password']) == false){
        echo "<script type='text/javascript'>alert('Invalid password!');</script>";
      }

      break;

      case "logout":
  
      include "header.php";
      unset($_SESSION['nume']);
      unset($_SESSION['prenume']);
      unset($_SESSION['email']);
      unset($_SESSION['profesie']);
      unset($_SESSION['password']);
      unset($_SESSION['verificare']);
      unset($_SESSION['rol']);
      session_destroy();

      header("Location: home.php");
  
      break;

    case 'particip':
    session_id("main");
    session_start();

    $id_curs =$_REQUEST["id"];
    $id_user =$_SESSION["id"];

    if(!isset($_SESSION['id'])){
      echo "<script type='text/javascript'>alert('You must login first!');</script>";
    }
    else{
    $raw=mysqli_query($conexiune, "SELECT * FROM user_curs WHERE user_id='$id_user' AND curs_id='$id_curs'");
    $check_duplicate_participations=mysqli_num_rows($raw);

    if($check_duplicate_participations > 0){
      echo "<script type='text/javascript'>alert('You already joined this course!');</script>";
    }
    else{

    $sql = "INSERT INTO user_curs(user_id, curs_id) VALUES ('$id_user','$id_curs')"; 
 
    if (!mysqli_query($conexiune, $sql)) {
      die('Error: ' . mysqli_error($conexiune));
      }
      header("Location: courses.php");
    }
  }
      

    break;
    
    case 'addnews':
    session_id('main');
    session_start();

    if($_SESSION['rol'] != 1){
      echo "<script type='text/javascript'>alert('You dont have access!');</script>";
    }
    else{

      $subject= $_REQUEST["Subject"];
      $details= $_REQUEST["Details"];
      
      if($subject == "" || $details == ""){
        echo "<script type='text/javascript'>alert('Please fill all required fields!');</script>";

      }
        else{

          $verified_subject = htmlspecialchars(mysqli_real_escape_string($conexiune, $subject));
          $verified_details = htmlspecialchars(mysqli_real_escape_string($conexiune, $details));

      $sql="INSERT INTO news(subject, details) VALUES ('$verified_subject','$verified_details')";
      if (!mysqli_query($conexiune, $sql)) {
        die('Error: '.mysqli_error($conexiune));
      }
        }
        header("Location: news.php");
      }
        break;

        case "deletenews":
        session_id("main");
        session_start();

        if($_SESSION['rol'] == 1){

      $id = $_REQUEST["id"];
    
      $sql = "DELETE FROM news WHERE id='$id'"; 
     
      if (!mysqli_query($conexiune, $sql)) {
        die('Error: ' . mysqli_error($conexiune));
      }
    }
    else{
      echo "<script type='text/javascript'>alert('You dont have access!');</script>";
    }
    header("Location: news.php");
      break; 

      case "deletecourse":
        session_id("main");
        session_start();

        if($_SESSION['rol'] == 1){

      $id = $_REQUEST["id"];
    
      $sql = "DELETE FROM curs WHERE id='$id'"; 
     
      if (!mysqli_query($conexiune, $sql)) {
        die('Error: ' . mysqli_error($conexiune));
      }
      header("Location: courses.php");
    }
    else{
      echo "<script type='text/javascript'>alert('You dont have access!');</script>";
    }
    
      break; 

      case "mail":

      require "../PHPMailer/PHPMailer.php";
      require "../PHPMailer/Exception.php";

      session_id("main");
      session_start();

      if(isset($_SESSION['email'])){

      $send_mail=$_SESSION['email'];

      $code= mysqli_query($conexiune,"SELECT cod_verificare FROM accounts WHERE email = '$send_mail'" );

      if (!$code) {
        die('Error: '.mysqli_error($conexiune));
      }
      $get_code = mysqli_fetch_array($code);
      $got_code = $get_code['cod_verificare'];     

      $mail = new PHPMailer();
      $mail ->setFrom("testsummerschool2019@gmail.com", "Summer School");
      $mail ->addAddress($send_mail);
      $mail ->isHTML(true);
      $mail ->Subject="Verify account.";
      $mail ->Body="$got_code";

      $mail ->send();
      }
      else{
        header("Location: login.php");
      }
      
      break;

      case "manage_account":
      session_id("main");
      session_start();

      $manage_nume=$_REQUEST['manage_nume'];
      $manage_prenume=$_REQUEST['manage_prenume'];
      $manage_profesie=$_REQUEST['manage_profesie'];
      $manage_email=$_SESSION['email'];

      if($manage_nume == "" || $manage_prenume == "" || $manage_profesie == ""){
        echo "<script type='text/javascript'>alert('Please fill all the required fields!');</script>";
        
      }
        else if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $manage_nume)){
            echo "<script type='text/javascript'>alert('Invalid name!');</script>";
        }
        else if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $manage_prenume)){
            echo "<script type='text/javascript'>alert('Invalid prenume!');</script>";
        }
        else{
          $_SESSION['nume']=$manage_nume;
          $_SESSION['prenume']=$manage_prenume;
          $_SESSION['profesie']=$manage_profesie;
          $_SESSION['password']=$manage_password;
        
       
          if (!mysqli_query($conexiune, "UPDATE accounts SET nume='$manage_nume', prenume='$manage_prenume', profesie='$manage_profesie' WHERE email='$manage_email'")) {
            die('Error: ' . mysqli_error($conexiune));
          }
          header("Location: manage-account.php");
      }
      break;

      case 'manage_account_security':
      session_id("main");
      session_start();
      
      $manage_new_password=$_POST['manage_new_password'];
      $manage_confirm_password=$_POST['manage_confirm_password'];
      $manage_email=$_SESSION['email'];

      if($manage_new_password == "" || $manage_confirm_password == ""){
        echo "<script type='text/javascript'>alert('Please fill all required fields!);</script>";

      }
      else if(!preg_match('/^[A-Za-z0-9][A-Za-z0-9]{5,31}$/', $manage_new_password)){
          echo "<script type='text/javascript'>alert('Password is invalid!');</script>";
      }
      else if($manage_new_password != $manage_confirm_password){
        echo "<script type='text/javascript'>alert('Parolele nu sunt identice!');</script>";
      }
      else{

        $manage_hash = password_hash($manage_new_password,PASSWORD_DEFAULT);
      
        
        if (!mysqli_query($conexiune, "UPDATE accounts SET password='$manage_hash' WHERE email='$manage_email'")) {
          die('Error: ' . mysqli_error($conexiune));
        }
        header("Location: home.php");
      }
      break;

      case "verify":
        session_id("main");
        session_start();

        if(isset($_SESSION['email'])){
        
        $verify_code=$_POST["verify_input"];

        $verify_email=$_SESSION['email'];
      
        $code= mysqli_query($conexiune,"SELECT cod_verificare FROM accounts WHERE email = '$verify_email'" );
        $get_code = mysqli_fetch_array($code);
        $got_code = $get_code['cod_verificare'];

        if($verify_code == $got_code){
          mysqli_query($conexiune,"UPDATE accounts SET verificare='1' WHERE email = '$verify_email'");
          $_SESSION['verificare']=1;
          header("Location: verify-account.php");
        }
      
        else{
          echo "<script type='text/javascript'>alert('Invalid code!');</script>";
        }
      }

        break;

        case "updatenews":

        $id = $_REQUEST["id"];

        $subject_edit= $_REQUEST["SubjectEdit"];
        $details_edit= $_REQUEST["DetailsEdit"];
        
        if($subject_edit == "" || $details_edit == ""){
          echo "TextField IS Empty.";
  
        }
          else{
  
            $verified_subject_edit = htmlspecialchars(mysqli_real_escape_string($conexiune, $subject_edit));
            $verified_details_edit = htmlspecialchars(mysqli_real_escape_string($conexiune, $details_edit));
  
            $sql = "UPDATE news SET subject='$verified_subject_edit', details='$verified_details_edit' WHERE id='$id'"; 
       if (!mysqli_query($conexiune, $sql)) {
        die('Error: '.mysqli_error($conexiune));
      }
          }
          header("Location: news.php");
          break;

          case 'updateprogram':

          session_id('main');
          session_start();

          if($_SESSION['rol'] != 1){
            echo "<script type='text/javascript'>alert('You dont have access!');</script>";
          }
          else{
          $saptamana=$_POST['saptamana'];
          $zi=$_POST['zi'];
          $ora=$_POST['ora'];
          $curs=$_POST['curs'];

          $sql = "UPDATE program1 SET curs_id='$curs'  WHERE saptamana='$saptamana' AND zi='$zi' AND ora='$ora'"; 
       if (!mysqli_query($conexiune, $sql)) {
        die('Error: '.mysqli_error($conexiune));
      }
      header("Location: program.php");
    }


          break;

          case "updatecourse":
          session_id('main');
          session_start();

          if($_SESSION['rol'] !=1){
            echo "<script type='text/javascript'>alert('You dont have access!');</script>";
          }
          else{

        $id = $_REQUEST["id"];

        $nume_curs_edit= $_REQUEST["NumeCursEdit"];
        $detalii_curs_edit= $_REQUEST["DetaliiCursEdit"];
        
        if($nume_curs_edit == "" || $detalii_curs_edit == ""){
          echo "<script type='text/javascript'>alert('Please fill all the required fields!');</script>";
  
        }
          else{
  
            $verified_nume_curs_edit = htmlspecialchars(mysqli_real_escape_string($conexiune, $nume_curs_edit));
            $verified_detalii_curs_edit = htmlspecialchars(mysqli_real_escape_string($conexiune, $detalii_curs_edit));
  
            $sql = "UPDATE curs SET nume='$verified_nume_curs_edit', detalii='$verified_detalii_curs_edit' WHERE id='$id'"; 
       if (!mysqli_query($conexiune, $sql)) {
        die('Error: '.mysqli_error($conexiune));
      }
          }
          header("Location: courses.php");
        }
          break;

          case 'addcourse':
          session_id('main');
          session_start();

          if($_SESSION['rol'] != 1){
            echo "<script type='text/javascript'>alert('You dont have access!');</script>";
          }
          else{

          $nume_curs= $_POST["NumeCurs"];
          $detalii_curs= $_POST["DetaliiCurs"];

          if($nume_curs == "" || $detalii_curs == ""){
            echo "<script type='text/javascript'>alert('Please fill all the required fields!');</script>";
    
          }
            else{
              $raw=mysqli_query($conexiune,"SELECT id FROM curs WHERE nume='$nume_curs'");
          $nrcourse=mysqli_num_rows($raw);
          if($nrcourse > 0){
            echo "<script type='text/javascript'>alert('Course already in database!');</script>";
          }
          else{
    
              $nume_curs_verified = htmlspecialchars(mysqli_real_escape_string($conexiune, $nume_curs));
              $detalii_curs_verified = htmlspecialchars(mysqli_real_escape_string($conexiune, $detalii_curs));
    
          $sql="INSERT INTO curs(nume, detalii) VALUES ('$nume_curs_verified','$detalii_curs_verified')";
          if (!mysqli_query($conexiune, $sql)) {
            die('Error: '.mysqli_error($conexiune));
          }
            }
          }
          header("Location: courses.php");
        }
          break;

          case 'forgotpassword':

            require "../PHPMailer/PHPMailer.php";
            require "../PHPMailer/Exception.php";

            $forgotemail=$_REQUEST['forgotemail'];
      
            $check_email= mysqli_query($conexiune,"SELECT id, cod_verificare FROM accounts WHERE email = '$forgotemail'" );
            $passcode =mysqli_fetch_array($check_email);

            $idreset=$passcode['id'];
            $codreset=$passcode['cod_verificare'];

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
            $randomString = ''; 
          
            for ($i = 0; $i < 10; $i++) { 
                $index = rand(0, strlen($characters) - 1); 
                $randomString .= $characters[$index]; 
            }
        
            $cod_verificare = $randomString;

            $currentTime = date("Y-m-d H:i:s");

            mysqli_query($conexiune,"UPDATE accounts SET cod_verificare='$cod_verificare', exp=DATE_ADD('$currentTime', INTERVAL 30 MINUTE) WHERE id='$idreset'");

            $check_email= mysqli_query($conexiune,"SELECT id, cod_verificare FROM accounts WHERE email = '$forgotemail'" );
            $raw =mysqli_fetch_array($check_email);
      
            $idreset=$raw['id'];
            $codreset=$raw['cod_verificare'];
      
            $url="http://localhost/summer-school/src/reset-password.php?id=".$idreset."&cod_verificare=".$codreset;
      
            if(mysqli_num_rows($check_email) == 0){
              echo "<script type='text/javascript'>alert('Email not registered!');</script>";
            }
            else{

              $txt = '<a href="'.$url.'">'.$url.'</a>';
               
              $mail = new PHPMailer();
              $mail ->setFrom("testsummerschool2019@gmail.com", "Summer School");
              $mail ->addAddress($forgotemail);
              $mail ->isHTML(true);
              $mail ->Subject="Reset password.";
              $mail ->Body="$txt";

              $mail ->send();
              header("Location: verify-account.php");
            }
            
            
            break;

            case 'reset_password':

            $idreset=$_POST['idreset'];
            $codereset=$_POST['codereset'];
            $resetpassword=$_POST['resetpassword'];
            $resetconfirmpassword=$_POST['resetconfirmpassword'];
              
            if(!preg_match('/^[A-Za-z0-9][A-Za-z0-9]{5,31}$/', $resetpassword)){
              echo "<script type='text/javascript'>alert('Password is invalid!');</script>";
            }
            else if($resetpassword != $resetconfirmpassword){
              echo "<script type='text/javascript'>alert('Passwords doesn't match!);</script>";
            }
            else{

            $password_reset=$resetpassword;
            $reset_hash = password_hash($password_reset,PASSWORD_DEFAULT);
    
            mysqli_query($conexiune,"UPDATE accounts SET password='$reset_hash' WHERE id='$idreset' AND cod_verificare='$codereset'");
            session_destroy();
            header("Location: home.php");
            }
          

    break;
    }
}
?>
