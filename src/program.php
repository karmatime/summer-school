<?php
include "header.php";
 $saptamana=3;
 $ora=3;
 $zi=5;
 $print_ora="";

 $query=mysqli_query($conexiune,"SELECT id, nume FROM curs");

  for($saptamana_id=1; $saptamana_id <=$saptamana; $saptamana_id++){
    print("<table align='center' border='1' cellspacing='1' cellpadding='15'>\n");
    print("<tr><th>Ora</th><th>Luni</th><th>Marti</th><th>Miercuri</th><th>Joi</th><th>Vineri</th></tr>\n");
    print("<tr>\n");
        for($ora_id=1; $ora_id <=$ora; $ora_id++){
          
            print("<tr>\n");
            if($ora_id == 1){
              $print_ora="14:00 - 16:00";
            }
            else if($ora_id == 2){
              $print_ora="16:00 - 18:00";
            }
            else if($ora_id == 3){
              $print_ora="18:00 - 20:00";
            }
            print("<td width ='10%'>".$print_ora."</td>\n");
            for($zi_id=1; $zi_id <=$zi; $zi_id++){

                $sql=mysqli_query($conexiune, "SELECT curs_id FROM program1 WHERE saptamana='$saptamana_id' AND ora='$ora_id' AND zi='$zi_id'");
                $raw=mysqli_fetch_array($sql);
                $rs=$raw['curs_id'];

                $result=mysqli_query($conexiune, "SELECT nume FROM curs WHERE id='$rs'");
                $row=mysqli_fetch_array($result);


                echo "<td width ='10%'>".$row['nume']. "</td>";
            }
            print("</tr>\n");

        }
        print("</tr>\n");
        print("</table><br>\n");
  }

?>

<div align="center">
  <form action="commands.php" method="post">
    <input name="command" type="hidden" value="updateprogram" />
    <input name="id" type="hidden" value="<?php echo $id;?>" />
  
    Saptamana: <select name="saptamana">
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    </select>
    Zi: <select name="zi">
    <option value = "1">Luni</option>
    <option value = "2">Marti</option>
    <option value = "3">Miercuri</option>
    <option value = "4">Joi</option>
    <option value = "5">Vineri</option>
    </select>
    Ora: <select name="ora">
    <option value = "1">14:00 - 16:00</option>
    <option value = "2">16:00 - 18:00</option>
    <option value = "3">18:00 - 20:00</option>
    </select>
    Curs: 
<?php
    if(mysqli_num_rows($query)) {
    print("<select name='curs'>\n");
    while($result_query = mysqli_fetch_array($query)){
      
      echo "<option value = ".$result_query['id'].">".$result_query['nume']."</option>";
    
    }
    echo "<option value = ''></option>";
  }
  echo "</select>";
?>
    <input type="submit" value="Update"/>
  </form>
  </div>
 
 <?php

  include "footer.php";
  ?>