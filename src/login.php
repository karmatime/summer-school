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
              <div class="col-sm-8 ml-4 mt-5">
                  <div class="card">
                      <div class="card-header">
                          <h5>Logare</h5>
                      </div>
                      <div class="card-body">
                          <form action="commands.php" method="post">
                          <input name="command" type="hidden" value="login" />
                              <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                              </div>
                              <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                              </div>
                              <div class="form-group mt-3 text-right mr-5">
                              <input class="btn" type="submit" value="Login"/>
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
