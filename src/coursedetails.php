<?php
include "header.php";
 $id = $_REQUEST["id"];
      
 $sql = "SELECT * FROM curs WHERE id=$id"; 
 $result = mysqli_query($conexiune, $sql);
 if ($row = mysqli_fetch_array($result)) {

   $nume_curs = $row['nume'];
   $detalii_curs = $row['detalii'];

   if($detalii_curs ==""){
     echo "TextField is empty!";
   }
   else{ 
     ?>
     <form action="commands.php" method="post">
     <input name="command" type="hidden" value="updatecourse" />
     <input name="id" type="hidden" value="<?php echo $id;?>" />
   
     <textarea readonly name="NumeCurs" rows="1" cols="80"><?php echo $nume_curs ?></textarea>
     <br>
     <textarea readonly name="DetaliiCurs" rows="20" cols="80"><?php echo $detalii_curs ?></textarea>
   </form>
   <?php
   include "footer.php";
   }
 }
 ?>