<?php
include "header.php";
?>
<form action="commands.php" method="post">
    <input name="command" type="hidden" value="login" />
    <h3>Login</h3>    

    Email: <input name="email" type="text">
    Password: <input name="password" type="password">
   
    <input type="submit" value="Login"/>
</form>
<?php
include "footer.php";
?>
