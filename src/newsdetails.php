<?php
include "header.php";
 $id = $_REQUEST["id"];
      
 $sql = "SELECT * FROM news WHERE id=$id"; 
 $result = mysqli_query($conexiune, $sql);
 $row = mysqli_fetch_array($result);

   $subject = $row['subject'];
   $details = $row['details'];
     ?>

     <form>
     <input name="id" type="hidden" value="<?php echo $id;?>" />
   
     <textarea readonly name="Subject" rows="1" cols="80"><?php echo $subject ?></textarea>
     <br>
     <textarea readonly name="Details" rows="20" cols="80"><?php echo $details ?></textarea>
   </form>

   <?php
   include "footer.php";
 ?>