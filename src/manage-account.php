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
         <div class="row mt-5">
             <div class="col-sm-2"></div>
             <div class="col-sm-8 ml-4 mt-4">
                 <div class="card">
                     <div class="card-header">
                         <h5>Informații personale</h5>
                     </div>
                     <div class="card-body">
                         <form action="commands.php" method="post" class="form-horizontal">
                         <input name="command" type="hidden" value="manage_account" />
                             <div class="form-group row">
                                 <label for="nume" class="col-lg-3 col-form-label">Nume</label>
                                 <div class="col-lg-9">
                                 <input type="text" class="form-control" name="manage_nume" value="<?php echo $_SESSION['nume'] ?>"/>
                                </div>
                             </div>
                             <div class="form-group row">
                                 <label for="prenume" class="col-lg-3 col-form-label">Prenume</label>
                                 <div class="col-lg-9">
                                 <input type="text" class="form-control" name="manage_prenume" value="<?php echo $_SESSION['prenume'] ?>"/>
                             </div>
                             </div>
                             <div class="form-group row">
                                 <label for="profesie" class="col-lg-3 col-form-label">Profesie</label>
                                 <div class="col-lg-9">
                                 <select class="form-control"  name="manage_profesie" value="<?php echo $_SESSION['profesie'] ?>">
                                 <option value = "elev">Elev</option>
                                 <option value = "student">Student</option>
                                 <option value = "angajat">Angajat</option>
                                 </select>
                             </div>
                            </div>
                             <div class="form-group text-right">
                                 <input type="submit" class="btn" value="Salveaza modificarile">
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