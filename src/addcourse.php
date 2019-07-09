<?php
include "header.php";

if($_SESSION['rol']== 1){
?>
        <h4>Add course.</h4>
        <form action="commands.php" method="post">
            <input name="command" type="hidden" value="addcourse" />
            <textarea name="NumeCurs" rows="1" cols="80"></textarea>
            <br>
            <textarea name="DetaliiCurs" rows="20" cols="80"></textarea>
            <input type="submit" value="Add"/>
          </form>
          
<?php
}
else{

    echo "<script type='text/javascript'>alert('You dont have access!');</script>";
}
        include "footer.php";
        ?>