<html>
    <head>
        <title>Summer School</title>
</head>
<body>

<?php
include "connect.php";
        session_id("main");
        session_start();       
        ?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>

<nav class="navbar navbar-expand-md navbar-dark" >
          <a class="navbar-brand" href="home.php">
              <img src="Images/download.svg" style="width:100px">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="home.php">Acasă</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="courses.php">Cursuri</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="trainers.php">Traineri</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="program.php">Program</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="organizatori.php">Organizatori</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="news.php">Noutați</a>
                  </li>
                  <?php
                  if(!isset($_SESSION['email'])){
                    ?>
                  <li class="nav-item">
                      <a class="nav-link" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="register.php">Register</a>
                  </li>
                  <?php
                  }
                  ?>
                  <?php
                  if(isset($_SESSION['email'])){
                    ?>
                  <li class="nav-item">
                        <div class="dropdown">
                            <button type="button" class="btn btn-outline dropdown-toggle" data-toggle="dropdown">
                                Contul meu
                            </button>
                            <div class="dropdown-menu">                                                          
                                <a class="dropdown-item" href="manage-account.php">Informații personale</a>
                                <a class="dropdown-item" href="manage-account-security.php">Schimba parola</a>
                                <a class="dropdown-item" href="verify-account.php">Verificare cont</a>
                                <a class="dropdown-item" href="commands.php?command=logout">Logout</a>    
                            </div>
                        </div>
                    </li>
                    <?php
                  }
                    ?>
              </ul>
          </div>
      </nav>
