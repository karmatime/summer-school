<?php
include "header.php";

 $query = "SELECT * FROM news ORDER BY id DESC";
 $result = mysqli_query($conexiune, $query);

 if(mysqli_num_rows($result)) {
   ?>
  <div class="container">
  <div class="row mt-5">
      <div class="col-sm-1"></div>
      <div class="col-sm-10">
        <?php
    print("<table class='table table-bordered' style='background-color: #ffffff;'>\n");
    while($row = mysqli_fetch_array($result)){
      print("<tr>\n");

      echo "<td width ='85%'><a href='newsdetails.php?id={$row['id']}'>".$row['subject']. "</a></td>";
    
      if($_SESSION['rol']== 1){
      echo "<td><a href='commands.php?command=deletenews&id=" . $row['id']. "'><input type='submit' class='btn' value='Delete'></a></td>\n";
      echo "<td><a href='editnews.php?id=" . $row['id']. "'><input type='submit' class='btn' value='Edit'></a></td>\n";
      }
      print("</tr>\n");
    }
    print("</table></div></div></div>");
  }
  if($_SESSION['rol']== 1){
    ?>
    <div class="text-center">
     <form action="addnews.php" method="post">
        <input name="command" type="hidden" value="addnews" /> 
        <input type="submit" class="btn" value="Add news"/>
    </form>
  </div>
    
     <?php
     }
 
  include "footer.php";
  ?>