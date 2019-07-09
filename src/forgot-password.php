<?php
include "header.php";        
?>
<form action="commands.php" method="post">
          <input name="command" type="hidden" value="forgotpassword" />
        
          Email: <input name="forgotemail" type="text">
         
          <input type="submit" value="Send"/>
        </form>

<?php
include "footer.php";
?>