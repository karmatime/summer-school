<?php
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
    //$cod_verificare

      if($nume == "" || $prenume == "" || $email == "" || $profesie == "" || $password == "" || $confirm_password == ""){
        echo "TextField is empty!";
      }
      else{

        if(!preg_match('/^[A-Za-z0-9][A-Za-z0-9]{5,31}$/', $password)){
          echo "Password is invalid";
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          echo "Invalid email";
        }
        else{
  
        $check= mysqli_query($conexiune,"SELECT id FROM accounts WHERE email = '$email'" );
        if(mysqli_num_rows($check) > 0){
  
          echo "Email allready exist! ";
        }
      
    
        else{

            $verified_nume = htmlspecialchars(mysqli_real_escape_string($conexiune, $nume));

            $verified_prenume = htmlspecialchars(mysqli_real_escape_string($conexiune, $prenume));

            $verified_email = htmlspecialchars(mysqli_real_escape_string($conexiune, $email));
      
            $hash = password_hash($_POST['password'],PASSWORD_DEFAULT);
      
            
      
            
            $sql="INSERT INTO accounts(nume, prenume, email, profesie, password, rol) VALUES ('$verified_nume','$verified_prenume','$verified_email','$profesie','$hash','0')";
      
            if (!mysqli_query($conexiune, $sql)) {
              die('Error: ' . mysqli_error($conexiune));
            }
          }
        }
      }

      break;

      case 'login':

      $email = $_POST["email"];
      $password = $_POST["password"];
      $just = password_hash($password, PASSWORD_DEFAULT);

      $nume= mysqli_query($conexiune,"SELECT nume FROM accounts WHERE email = '$email'" );
      $get_nume = mysqli_fetch_array($nume);
      $got_nume = $get_nume['nume'];
      $prenume= mysqli_query($conexiune,"SELECT prenume FROM accounts WHERE email = '$email'" );
      $get_prenume = mysqli_fetch_array($prenume);
      $got_prenume = $get_prenume['prenume'];

      $check_email= mysqli_query($conexiune,"SELECT email FROM accounts WHERE email = '$email'" );
      $check_password= mysqli_query($conexiune,"SELECT password FROM accounts WHERE email = '$email'" );
      $check_rol =  mysqli_query($conexiune,"SELECT rol FROM accounts WHERE email = '$email'" );

      $get_email = mysqli_fetch_array($check_email);
      $got_email = $get_email['email'];
      
      $get_hash = mysqli_fetch_array($check_password);
      $got_hash = $get_hash['password'];

      $get_rol = mysqli_fetch_array($check_rol);
      $rol = $get_rol['rol'];
     
      if($got_email == $email && password_verify($password, $got_hash) == true){

        session_start();

        $_SESSION['email'] = $email;
        $_SESSION['rol'] = $rol;

        echo("Login successful $got_nume $got_prenume");

      }
      else{
        echo "Login failed. $got_email $password $rol";
      }

      break;

  }
}
?>
