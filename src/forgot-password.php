<?php
include "header.php";        
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
                        <h5>Am uitat parola.</h5>
                    </div>
                    <div class="card-body">
                        <form action="commands.php" method="post">
                        <input name="command" type="hidden" value="forgotpassword" />
                            <div class="form-group">
                                <label for="confirmp">Email</label>
                                <input type="email" class="form-control" name="forgotemail" placeholder="Email" required>
                            </div>
                            <div class="form-group text-right">
                                 <input type="submit" class="btn" value="Trimite mail">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

<?php
include "footer.php";
?>