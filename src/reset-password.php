<?php
include "connect.php";

$idreset=$_GET['id'];
$codereset=$_GET['cod_verificare'];

$curentDate = date("Y-m-d H:i:s");

$exp=mysqli_query($conexiune,"SELECT exp FROM accounts WHERE id='$idreset'");
            
$raw=mysqli_fetch_array($exp);
$expireDate=$raw['exp'];
            
if($expireDate >= $curentDate){

$count=mysqli_query($conexiune,"SELECT id, cod_verificare FROM accounts WHERE id='$idreset' AND cod_verificare='$codereset'");
if(mysqli_num_rows($count) == 0){
  echo "<script type='text/javascript'>alert('Link no longer available!');</script>";
}
else{

if(!isset($idreset) || !isset($codereset)){
    echo "<script type='text/javascript'>alert('You dont have access!');</script>";
}
else{
?>
<form action="commands.php" method="post">
<input name="command" type="hidden" value="reset_password" />
<input name="idreset" type="hidden" value=<?php echo $idreset;?>>
<input name="codereset" type="hidden" value=<?php echo $codereset;?>>
        Password: <input name="resetpassword" type="password">
        Confirm password: <input name="resetconfirmpassword" type="password">
       
        <input type="submit" value="Reset"/>
      </form>
      <?php
    
        }
      }
    }
    else{
      echo "<script type='text/javascript'>alert('Link no longer available!');</script>";
    }
include "footer.php";
?>