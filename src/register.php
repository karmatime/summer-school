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
                <h5 >Inscriere</h5></div>
            <div class="card-body">
          <form action="commands.php" method="post">
          <input name="command" type="hidden" value="register" />
             <div class="form-group">
                <label for="nume">Nume</label>
                <input type="text" class="form-control" name="nume" placeholder="Nume" required> 
             </div>
             <div class="form-group">
                 <label for="prenume">Prenume</label>
                 <input type="text" class="form-control" 
                 id="prenume" name="prenume" placeholder="Prenume" required>
             </div>
             <div class="form-group">
                 <label for="email">
                     Email
                 </label>
                 <input type="email" class="form-control " name="email" placeholder="Email" required>
             </div>
             <div class="form-group">
                 <label for="profesie">Profesie</label>
                 <select class="form-control" name="profesie" required>
                     <option>Elev</option>
                     <option>Student</option>
                     <option>Angajat</option>
                 </select>
             </div>
             <div class="form-group">
                 <label for="password">Password</label>
                 <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                 <small class="form-text text-muted">Parola trebuie sa contine cel putin 6 caractere. Nu este permisa folosirea caracterelor speciale.</small>
             </div>
             <div class="form-group">
                 <label for="confirmp">Confirm password</label>
                 <input type="password" class="form-control" name="confirm_password" placeholder="Password" required>
             </div>
             <div class="form-group text-right mr-5">
             <input class="btn" type="submit" value="Inregistrare"/>
             </div>
          </form>
        </div>
        <div class="card-footer text-center">
            <p >Ai cont?<a href="login.php">Logare</a></p>
        </div>
        </div>
    </div>
</div> 
<?php
include "footer.php";
?>
