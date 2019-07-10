<?php
include "header.php";

if(!isset($_SESSION['email'])){
    header("Location: login.php");
  }
  else if($_SESSION['verificare'] == 1){
    ?>
    <h3>Your account is verified!</h3>

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

<h4>Verify your account.</h4>
        <form action="commands.php" method="post">
            <input name="command" type="hidden" value="verify" />
            <input name="verify_input" type="text">
            <input type="submit" value="Verify"/>
          </form>

          <h4>Send mail</h4>
        <form action="commands.php" method="post">
            <input name="command" type="hidden" value="mail" />
            <input type="submit" value="Mail"/>
          </form>

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
                                <br>
                            </div>
                            <div class="form-group text-right">
                            <input class="btn" type="submit" value="Verificare"/>
                            </div>
                        </form>
                        <form action="commands.php" method="post">
                        <input name="command" type="hidden" value="mail" />
                        <input class="btn" type="submit" value="Mail"/>
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