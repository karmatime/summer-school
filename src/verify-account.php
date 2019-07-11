<?php
include "header.php";

if(!isset($_SESSION['email'])){
    header("Location: login.php");
  }
  else if($_SESSION['verificare'] == 1){
?>
      <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
                <div class="col-sm-8 ml-4 mt-4">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Contul este verificat.</h4>
                        </div>
                                       
                    </div>
                </div>
            </div>
        </div>


<?php
  }
  else{

  
?>

<style>
    
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
                        <h5>Confirmare email</h5>
                    </div>
                    <div class="card-body">
                        <form action="commands.php" method="post">
                        <input name="command" type="hidden" value="verify" />
                            <div class="form-group">
                                <label for="cod">Cod de verificare</label>
                                <input type="text" class="form-control" name="verify_input" required>
                                <small class="text-muted">Codul de verificare va fi trimis către adresa de email menționată.</small>
                                <a href="commands.php?command=mail">(send code)</a>
                                <br>
                            </div>
                            <div class="form-group text-right">
                            <input class="btn" type="submit" value="Verificare"/>
                            </div>
                        </form>                       
                    </div>
                </div>
            </div>
        </div>

    </div>  
<?php
}
include "footer.php"
?>