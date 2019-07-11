<?php
include "connect.php";

$idreset=$_GET['id'];
$codereset=$_GET['cod_verificare'];

$curentDate = date("Y-m-d H:i:s");

$exp=mysqli_query($conexiune,"SELECT exp FROM accounts WHERE id='$idreset'");
            
$raw=mysqli_fetch_array($exp);
$expireDate=$raw['exp'];
            
if($expireDate >= $curentDate){

$count=mysqli_query($conexiune,"SELECT id, cod_verificare FROM accounts WHERE id='$idreset' AND cod_verificare='$codereset'");
if(mysqli_num_rows($count) == 0){
  echo "<script type='text/javascript'>alert('Link no longer available!');</script>";
}
else{

if(!isset($idreset) || !isset($codereset)){
    echo "<script type='text/javascript'>alert('You dont have access!');</script>";
}
else{
?>
<html>
<head>
<title>Reset password</title>
</head>
<body>

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.js"></script>

<style>
    body{
        background :url("Images/background.jpg") no-repeat fixed;
        background-size:auto;
        
    }
    footer{
        bottom: 0;
        width:100%;
        color:black;
    }
    .btn:hover,.btn:active, .btn:focus,.btn{
        background-color:#25004e;
        color:#a5a5a5e7;
    }
    
    </style>

    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 ml-4 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Schimba parola</h5>
                    </div>
                    <div class="card-body">
                        <form action="commands.php" method="post">
                        <input name="command" type="hidden" value="reset_password" />
                        <input name="idreset" type="hidden" value=<?php echo $idreset;?>>
                        <input name="codereset" type="hidden" value=<?php echo $codereset;?>>
                            <div class="form-group">
                                <label for="password">Parola noua</label>
                                <input type="password" class="form-control" name="resetpassword"  placeholder="Parola" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmp">Confima parola</label>
                                <input type="password" class="form-control" name="resetconfirmpassword" placeholder="Parola" required>
                            </div>
                            <div class="form-group text-right">
                            <input type="submit" class="btn" value="Schimba parola"/>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>  
      <?php
    
        }
      }
    }
    else{
      echo "<script type='text/javascript'>alert('Link no longer available!');</script>";
    }
include "footer.php";
?>