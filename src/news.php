<?php
include "header.php";
 
 $query = "SELECT * FROM news ORDER BY id DESC";
 $result = mysqli_query($conexiune, $query);
 if($_SESSION['rol']== 1){
?>

 <form action="addnews.php" method="post">
    <input name="command" type="hidden" value="addnews" /> 
    <input type="submit" value="Add news"/>
</form>

 <?php
 }
 if(mysqli_num_rows($result)) {
    print("<table align='center' border='1' cellspacing='1' cellpadding='15'>\n");
    while($row = mysqli_fetch_array($result)){
      print("<tr>\n");

      echo "<td width ='85%'><a href='newsdetails.php?id={$row['id']}'>".$row['subject']. "</a></td>";
    
      if($_SESSION['rol']== 1){
      echo "<td><a href='commands.php?command=deletenews&id=" . $row['id']. "'><input type='submit' value='Delete'></a></td>\n";
      echo "<td><a href='editnews.php?id=" . $row['id']. "'><input type='submit' value='Edit'></a></td>\n";
      }
      print("</tr>\n");
    }
    print("</table>");
  }
 
  include "footer.php";
  ?>