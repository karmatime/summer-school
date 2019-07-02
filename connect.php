
<?php
  require_once "config.php";

  $username_connect = "GeorgescuEduard";
  $password_connect = "losemymind";

  $conexiune = mysqli_connect(DB_HOST,$username_connect, $password_connect);
  
  if (!$conexiune)  {
    die('Eroare conectare la MySQL: ' . mysqli_connect_error());
  }
	    
  mysqli_select_db($conexiune, DB_NAME) or die("Eroare la selectarea bazei de date " . mysqli_error($conexiune));  
?>