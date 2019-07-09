<?php
include "header.php";
 $id = $_REQUEST["id"];
      
 $sql = "SELECT * FROM news WHERE id=$id"; 
 $result = mysqli_query($conexiune, $sql);
 if ($row = mysqli_fetch_array($result)) {

   $subject = $row['subject'];
   $details = $row['details'];

   if($details ==""){
     echo "TextField is empty!";
   }
   else{ 
     ?>
     <form action="commands.php" method="post">
     <input name="command" type="hidden" value="updatenews" />
     <input name="id" type="hidden" value="<?php echo $id;?>" />
   
     <textarea readonly name="Subject" rows="1" cols="80"><?php echo $subject ?></textarea>
     <br>
     <textarea readonly name="Details" rows="20" cols="80"><?php echo $details ?></textarea>
   </form>
   <?php
   include "footer.php";
   }
 }
 ?>