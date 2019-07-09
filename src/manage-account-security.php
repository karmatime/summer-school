<?php
include "header.php";
?>
<form action="commands.php" method="post">
          <input name="command" type="hidden" value="manage_account_security" />
          New password: <input name="manage_new_password" type="password">
          <br>
          Confirm password: <input name="manage_confirm_passowrd" type="password">
          <br>
         
          <input type="submit" value="Update"/>
        </form>

<?php
include "footer.php";
?>