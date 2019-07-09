<?php
include "header.php";        
?>
<form action="commands.php" method="post">
          <input name="command" type="hidden" value="forgetpassword" />
        
          Email: <input name="forgetemail" type="text">
         
          <input type="submit" value="Send"/>
        </form>

<?php
include "footer.php";
?>