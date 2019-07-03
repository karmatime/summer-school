<?php
include "header.php";
?>
<form action="commands.php" method="post">
    <input name="command" type="hidden" value="register" />
    <h3 align="center">Register</h3>    
              
    Nume: <input name="nume" type="text">
    Prenume: <input name="prenume" type="text">
    Email: <input name="email" type="text">

    Profesie: <select name="profesie">
    <option value = "elev">Elev</option>
    <option value = "student">Student</option>
    <option value = "angajat">Angajat</option>
    </select>

    Password: <input name="password" type="password">
    Confirm password: <input name="confirm_password" type="password">

    <input type="submit" value="Register"/>
</form>
<?php
include "footer.php";
?>
