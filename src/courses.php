<?php
include "header.php";
 
 $query = "SELECT * FROM curs";
 $result = mysqli_query($conexiune, $query);
?>



 

<style>
            
           .card{
               background-color:light;
               color:black;
        
              
           }
           .card-header{
               height:85px;
               padding:10px;
               text-align:center;
           }
           .btn:hover, .btn:active,  .btn:focus, .btn{
        background-color:#25004e;
        color:#a5a5a5e7;
    }       
    </style>

  <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10 ">
                <h2>Cursuri</h2>
                <hr>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <br>
        
        <div class="card-deck" id="1">
            <div class="card mb-4">
                <div class="card-header"><h5>All Things JavaScript</h5></div>
                <div class="card-body">
                    <div class="card-text text-muted">
                        <p class=><b>Trainer</b>: Dragos Sebestin - NovaBooker</p>
                        <p class=><b>Difficulty</b>: Beginner - Intermediate</p>
                        <p class=><b>Format</b>: 3 courses ~ 2h</p>
                    </div>
                    <a href="cursuri/SummerSchool2019-All-Things-JavaScript.pdf" class="btn">Learn more</a>
                    <a href="commands.php?command=particip&id=6" class="btn ">Participa</a>
                        
                </div>
            </div>

            <div class="w-100 d-none d-sm-block d-md-none"></div>
            <div class="card mb-4" id="2">
                <div class="card-header"><h5>OOP Techniques in a Simple Game</h5></div>
                <div class="card-body">
                    <div class="card-text text-muted">
                        <p ><b>Trainer</b>: Radu Albastroiu - Caphyon</p>
                        <p ><b>Difficulty</b>: Beginner</p>
                        <p ><b>Format</b>: 3 courses ~ 2h</p>
                    </div>
                    <a href="cursuri/SummerSchool2019-OOP-Techniques-in-a-Simple-Game.pdf" class="btn ">Learn more</a>
                    <a href="commands.php?command=particip&id=8" class="btn">Participa</a>
                </div>
            </div>
            
            <div class="w-100 d-none d-sm-block d-md-none"></div>
            <div class="w-100 d-none d-md-block d-lg-none"></div>
            <div class="card mb-4" id="3">
                <div class="card-header"><h5>HTML,CSS &amp; JS in the Real World</h5></div>
                <div class="card-body">
                    <div class="card-text text-muted">
                        <p><b>Trainer</b>: Catalin Rosu - Caphyon</p>
                        <p><b>Difficulty</b>: Beginner - Intermediate</p>
                        <p><b>Format</b>: 3 courses ~ 2h</p>
                    </div>
                    <a href="cursuri/SummerSchool2019-HTML-CSS-JS-in-the-Real-World.pdf" class="btn ">Learn more</a>
                    <a href="commands.php?command=particip&id=10" class="btn ">Participa</a>
                </div>
            </div>

            <div class="w-100 d-none d-sm-block d-md-none"></div>
            <div class="w-100 d-none d-lg-block d-xl-none"></div>
            <div class="card mb-4" id="4">
                <div class="card-header">
                    <h5>Windows App Development with .NET WPF</h5>
                </div>
                <div class="card-body">
                    <div class="card-text text-muted">
                        <p><b>Trainers</b>: Ionut Enache &amp; Horatiu Prica - Caphyon</p>
                        <p><b>Difficulty</b>: Beginner - Intermediate</p>
                        <p><b>Format</b>: 2 courses ~ 2h</p>
                    </div>
                    <a href="cursuri/SummerSchool2019-Windows-App-Development-with-NET-WPF.pdf" class="btn ">Learn more</a>
                    <a href="commands.php?command=particip&id=9" class="btn ">Participa</a>
                </div>
            </div>

            <div class="w-100 d-none d-sm-block d-md-none"></div>
            <div class="w-100 d-none d-md-block d-lg-none"></div>
            <div class="w-100 d-none d-xl-block"></div>
            <div class="card mb-4" id="5">
                <div class="card-header">
                    <h5>REST In Node.JS At The React &amp; Angular SPA</h5>
                </div>
                <div class="card-body">
                    <card class="card-text text-muted">
                        <p ><b>Trainer</b>: Cosmin Voicu, Octavian Marculescu, Gabriel Paunica - Netrom</p>
                        <p ><b>Difficulty</b>: Beginner - Intermediate</p>
                        <p ><b>Format</b>: 6 courses ~ 2h</p>
                    </card>
                    <button class="btn" id="popup" data-placement="top">Learn more</button>
                    <a href="#" class="btn">Participa</a>
                </div>
            </div>

            <div class="w-100 d-none d-sm-block d-md-none"></div>
            <div class="card mb-4" id="6">
                <div class="card-header">
                    <h5>Java vs Python: Coding Deadmatch</h5>
                </div>
                <div class="card-body">
                    <div class="card-text text-muted">
                        <p><b>Trainer</b>: Andrei Zuica - Caphyon</p>
                        <p><b>Difficulty</b>: Beginner - Intermediate</p>
                        <p><b>Format</b>: 3 courses ~ 2h</p>
                    </div>
                    <a href="cursuri/SummerSchool2019-Java-vs-Python-Coding-Deadmatch.pdf" class="btn">Learn more</a>
                    <a href="commands.php?command=particip&id=11" class="btn ">Participa</a>
                </div>
            </div>

            <div class="w-100 d-none d-sm-block d-md-none"></div>
            <div class="w-100 d-none d-md-block d-lg-none"></div>
            <div class="w-100 d-none d-lg-block d-xl-none"></div>
            <div class="card mb-4" id="7">
                <div class="card-header">
                    <h5>Coding Pro-Practices</h5>
                </div>
                <div class="card-body">
                    <div class="card-text text-muted">
                        <p><b>Trainer</b>: Gabriel Diaconita - Caphyon</p>
                        <p><b>Difficulty</b>: Intermediate</p>
                        <p><b>Format</b>: 3 days ~ 2h</p>
                    </div>
                    <a href="cursuri/SummerSchool2019-Coding-Pro-Practices.pdf" class="btn ">Learn more</a>
                    <a href="commands.php?command=particip&id=12" class="btn ">Participa</a>
                </div>
            </div>

            <div class="w-100 d-none d-sm-block d-md-none"></div>
            <div class="card mb-4" id="8">
                <div class="card-header">
                    <h5>Sneak Peek Into Next Level QA (Test Automation)</h5>
                </div>
                <div class="card-body">
                    <div class="card-text text-muted">
                        <p><b>Trainer</b>: Antonio Valent - Caphyon</p>
                        <p><b>Difficulty</b>: Beginner - Intermediate</p>
                        <p><b>Format</b>: 2 courses ~ 2h</p>
                    </div>
                    <a href="cursuri/SummerSchool2019-Sneak-Peek-Into-Next-Level-QA.pdf" class="btn">Learn more</a>
                    <a href="commands.php?command=particip&id=14" class="btn ">Participa</a>
                </div>
            </div>

            <div class="w-100 d-none d-sm-block d-md-none"></div>
            <div class="w-100 d-none d-xl-block"></div>
            <div class="w-100 d-none d-md-block d-lg-none"></div>
            <div class="card mb-4" id="9">
                <div class="card-header">
                    <h5>You&apos;ll Neversea Algorithms Like These</h5>
                </div>
                <div class="card-body">
                    <div class="card-text text-muted">
                        <p><b>Trainer</b>: Nicolae Telechi -Caphyon</p>
                        <p><b>Difficulty</b>: Intermediate</p>
                        <p><b>Format</b>: 3 courses ~ 2h</p>
                    </div>
                    <a href="cursuri/SummerSchool2019-You-ll-Neversea-Algorithms-Like-These.pdf" class="btn ">Learn more</a>
                    <a href="commands.php?command=particip&id=13" class="btn">Participa</a>
            </div>
        </div>

        <div class="w-100 d-none d-sm-block d-md-none"></div>
        <div class="card mb-4" id="10">
            <div class="card-header">
                <h5>Curry on Functional Programming</h5>
            </div>
            <div class="card-body">
                <div class="card-text text-muted">
                    <p><b>Trainer</b>: Victor Ciura - Caphyon</p>
                    <p><b>Difficulty</b>: Intermediate</p>
                    <p><b>Format</b>: 3 courses ~ 2h</p>
                </div>
                <a href="cursuri/SummerSchool2019-Curry-On-Functional-Programming.pdf" class="btn">Learn more</a>
                <a href="commands.php?command=particip&id=15" class="btn">Participa</a>
            </div>
        </div>
    </div> 
    
    <script>
        $(document).ready(function(){
            $("#popup").popover({content:"In this course, we will learn how to create and improve a desktop application using .NET WPF (Windows Presentation Foundation).The lecture covers the importance of continuously improving your code and software architecture. More than that, we will show you how to do it. Let's discover together the design pattern that stands behind the WPF Framework and how to use modern tools to create a better product.", animation:true});
        });
    </script>
  <?php
 
  include "footer.php";
  ?>