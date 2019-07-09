<?php
include "header.php";
 
 $query = "SELECT * FROM curs";
 $result = mysqli_query($conexiune, $query);
 if($_SESSION['rol'] == 1){
?>

 <form action="addcourse.php" method="post">
    <input name="command" type="hidden" value="addcourse" /> 
    <input type="submit" value="Add course"/>
</form>

 <?php
 }
 if(mysqli_num_rows($result)) {
    print("<table align='center' border='1' cellspacing='1' cellpadding='15'>\n");
    while($row = mysqli_fetch_array($result)){
      print("<tr>\n");

      echo "<td width ='85%'><a href='coursedetails.php?id={$row['id']}'>".$row['nume']. "</a></td>";
      if($_SESSION['verificare'] == 1){
      echo "<td><a href='commands.php?command=particip&id=" . $row['id']. "'><input type='submit' value='Paticip'></a></td>\n";
      }
      if($_SESSION['rol']== 1){
      echo "<td><a href='commands.php?command=deletecourse&id=" . $row['id']. "'><input type='submit' value='Delete'></a></td>\n";
      echo "<td><a href='editcourse.php?id=" . $row['id']. "'><input type='submit' value='Edit'></a></td>\n";
      }
      print("</tr>\n");
    }
    print("</table>");
  }
 
  include "footer.php";
  ?>