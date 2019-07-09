<?php
include "header.php";

if($_SESSION['rol']== 1){

$id = $_REQUEST["id"];

$sql = "SELECT * FROM news WHERE id=$id"; 
$result = mysqli_query($conexiune, $sql);

$row = mysqli_fetch_array($result);

  $subject = $row['subject'];
  $details = $row['details'];

?>
  
  <form action="commands.php" method="post">
    <input name="command" type="hidden" value="updatenews" />
    <input name="id" type="hidden" value="<?php echo $id;?>" />
  
    <textarea name="SubjectEdit" rows="1" cols="80"><?php echo $subject ?></textarea>
    <br>
    <textarea name="DetailsEdit" rows="20" cols="80"><?php echo $details ?></textarea>

    <input type="submit" value="Update"/>
  </form>
 
<?php           
include "footer.php";
}
if($_SESSION['rol']!= 1) {
  echo "<script type='text/javascript'>alert('You dont have access!');</script>";
}
?>