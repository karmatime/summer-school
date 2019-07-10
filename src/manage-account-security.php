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
                        <h5>Schimba parola</h5>
                    </div>
                    <div class="card-body">
                        <form action="commands.php" method="post">
                        <input name="command" type="hidden" value="manage_account_security" />
                            <div class="form-group">
                                <label for="password">Parola noua</label>
                                <input type="password" class="form-control" name="manage_new_password"  placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="manage_confirm_password">Confirmă parola</label>
                                <input type="password" class="form-control" name="manage_confirm_password" placeholder="Password" required>
                            </div>
                            <div class="form-group text-right">
                            <input class="btn" type="submit" value="Actualizează"/>
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