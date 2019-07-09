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
          echo $_SESSION['nume']. " ";
          echo $_SESSION['prenume']. " ";
          echo $_SESSION['email'];
        }
        ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>
<br>

  <?php

  echo "<a href='home.php'>Home</a> ";      

  
  if(isset($_SESSION['email'])){
  echo "<a href='commands.php?command=logout'>Logout</a> ";
  }
  else{

  echo "<a href='login.php'>Login</a> ";

  echo "<a href='register.php'>Register</a> ";
  }

  echo "<a href='courses.php'>Courses</a> ";
  
  echo "<a href='news.php'>News</a> ";

  echo "<a href='program.php'>Program</a> ";

  echo "<a href='manage-account.php'> Manage account</a> ";

  echo "<a href='manage-account-security.php'> Manage accounts security</a> ";

  if($_SESSION['rol'] == 1){
  echo "<a href='manage-all.php'> Manage accounts</a> ";
  }
  echo "<a href='verify-account.php'>Verify account</a> ";

  echo "<a href='send-mail.php'>Send mail</a> ";

  echo "<a href='forgot-password.php'>Forgot Password</a> ";

  ?>
