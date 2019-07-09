<?php
include "header.php";

if($_SESSION['rol']== 1){

$id = $_REQUEST["id"];

$sql = "SELECT * FROM curs WHERE id=$id"; 
$result = mysqli_query($conexiune, $sql);

$row = mysqli_fetch_array($result);

  $nume_curs = $row['nume'];
  $detalii_curs = $row['detalii'];

?>
  
  <form action="commands.php" method="post">
    <input name="command" type="hidden" value="updatecourse" />
    <input name="id" type="hidden" value="<?php echo $id;?>" />
  
    <textarea name="NumeCursEdit" rows="1" cols="80"><?php echo $nume_curs ?></textarea>
    <br>
    <textarea name="DetaliiCursEdit" rows="20" cols="80"><?php echo $detalii_curs ?></textarea>

    <input type="submit" value="Update"/>
  </form>
 
<?php 
}          
else{
  echo "<script type='text/javascript'>alert('You dont have access!');</script>";
}
include "footer.php";
?>