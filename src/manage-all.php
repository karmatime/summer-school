<?php
include "header.php";

if($_SESSION['rol']== 1){
 
 $query = "SELECT * FROM accounts";
 $result = mysqli_query($conexiune, $query);

 if(mysqli_num_rows($result)) {
    print("<table align='center' border='1' cellspacing='1' cellpadding='15'>\n");
    while($row = mysqli_fetch_array($result)){
      print("<tr>\n");
      if($_SESSION['rol']== 1){
      echo "<td width ='85%'><a href='manage-account.php?id={$row['id']}'>".$row['nume']." ". $row['prenume']. "</a></td>";
      }
      
      print("</tr>\n");
    }
    print("</table>");
  }

}
else{
    echo "<script type='text/javascript'>alert('You dont have access!');</script>";
}
  include "footer.php";
  ?>