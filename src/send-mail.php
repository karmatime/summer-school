<?php
include "header.php";

if(!isset($_SESSION['email'])){
    header("Location: login.php");
  }
  else{

?>

<h4>Send mail</h4>
        <form action="commands.php" method="post">
            <input name="command" type="hidden" value="mail" />
            <input type="submit" value="Mail"/>
          </form>

<?php
  }
include "footer.php";
?>