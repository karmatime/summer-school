<?php
include "header.php";

if($_SESSION['rol']== 1){
?>
        <div>
        <h4>Add your news.</h4>
        <form action="commands.php" method="post">
            <input name="command" type="hidden" value="addnews" />
            <textarea name="Subject" rows="1" cols="80"></textarea>
            <br>
            
            <textarea name="Details" rows="20" cols="80"></textarea>
            <input type="submit" class="btn" value="Add"/>
          </form>
          <div>
          
<?php
}
else{

    echo "<script type='text/javascript'>alert('You dont have access!');</script>";
}
        include "footer.php";
        ?>