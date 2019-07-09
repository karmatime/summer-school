<?php
include "header.php";
?>
<form action="commands.php" method="post">
          <input name="command" type="hidden" value="manage_account" />
        
          Nume: <input name="manage_nume" type="text" value="<?php echo $_SESSION['nume'] ?>">
          <br>
          Prenume: <input name="manage_prenume" type="text" value="<?php echo $_SESSION['prenume'] ?>">
          <br>
          Profesie: <select name="manage_profesie" value="<?php echo $_SESSION['profesie'] ?>">
            <option value = "elev">Elev</option>
            <option value = "student">Student</option>
            <option value = "angajat">Angajat</option>
            </select>
          <br>               
          <input type="submit" value="Update"/>
        </form>

<?php
include "footer.php";
?>