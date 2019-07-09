<html>
    <head>
        <title>Summer School</title>
</head>
<body>

<?php
include "connect.php";
        session_id("main");
        session_start();

        if(isset($_SESSION['email'])){
            ?>
            <form action="commands.php" method="post">
            <input name="command" type="hidden" value="logout" />
            <input type="submit" value="Logout"/>
          </form>
          <?php
          echo $_SESSION['email'];
        }
        ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<?php
?>

  <a href='home.php'>Home</a>      

  <a href='commands.php?command=logout'>Logout</a>

  <a href='login.php'>Login</a>

  <a href='register.php'>Register</a>

  <a href='courses.php'>Courses</a>

  <a href='addcourse.php'>Add Courses</a>

  <a href='coursedetails.php'>Course details</a>

  <a href='editcourse.php'>Edit course</a>

  <a href='register.php'>Register</a>
  
  <a href='news.php'>News</a>

  <a href='editnews.php'>Edit News</a>

  <a href='addnews.php'> Add News</a>

  <a href='manage-account.php'> Manage account</a>

  <a href='manage-account-security.php'> Manage accounts security</a>

  <a href='manage-all.php'> Manage accounts(admin)</a>
 
  <a href='verify-account.php'>Verify account</a>

  <a href='send-mail.php'>Send mail</a>

  <a href='forget-password.php'>Forgot Password</a>

  <a href='reset-password.php'>Reset Password</a>

