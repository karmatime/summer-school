<?php
include "header.php";

if(!isset($_SESSION['email'])){
    header("Location: login.php");
  }
  else if($_SESSION['verificare'] == 1){
    ?>
    <h3>Your account is verified!</h3>

<?php
  }
  else{

  
?>

<h4>Verify your account.</h4>
        <form action="commands.php" method="post">
            <input name="command" type="hidden" value="verify" />
            <input name="verify_input" type="text">
            <input type="submit" value="Verify"/>
          </form>

          <h4>Send mail</h4>
        <form action="commands.php" method="post">
            <input name="command" type="hidden" value="mail" />
            <input type="submit" value="Mail"/>
          </form>
<?php
}
include "footer.php"
?>