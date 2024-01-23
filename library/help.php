<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
       
        <title>
            HELP
        </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style tytpe="text/css">
        ul li:hover{
            background-color:black;
            border:4px solid aqua;
            border-radius: 20px;
            padding:2px 12px
        }
    </style>
    <body>
        
        <div class="wrapper">
        <header class="head12">
        <div class="logo">
            <img src="logo1.png" alt="right" height="60px" width="100px"><br><br><br>
            <h1 style="color: black;">LIBRARY TECHNICIANS AND ASSISTANTS</h1>
        </div>
            <nav>
                <ul>
                    <li><a href="studlogin.php"> <font size=4>HOME</font> </a></li>
                </ul>
            </nav>
        </header>
        
        <section>
            <br><br><br>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-dark">
                        <div class="card-header"><img src="card.png"  width="320px" height="300px" class="card-img-top"></div>
                        <div class="card-body bg-light">
                            <div class="card-title"><h5>LIBRARY</h5></div>
                            <div class="card-text">
                                <B>NAME:</B>K.R.RUSIFA <br>
				                <B>PROFESSION:</B>LIBRARY ASSISTANT <br>
                            </div>
                        </div>      
                        <div class="card-footer bg-warning">
                            <b>MAIL ID: </b><a href="mailto:rusifa@gmail.com">rusifa@gmail.com</a> <br>
                            <B>MOBILE NO::</B>9876543210<br>
                        </div>
                    </div>
                </div>  

                <div class="col-md-4">
                    <div class="card bg-black">
                        <div class="card-header"><img src="card1.png"  width="320px" height="300px" class="card-img-top"></div>
                        <div class="card-body bg-white">
                            <div class="card-title"><h5>LIBRARY</h5></div>
                            <div class="card-text">
                                <B>NAME:</B>JOHN RONALD<br>
				                <B>PROFESSION:</B>LIBRARY DIRECTOR <br>
                            </div>
                        </div>      
                        <div class="card-footer bg-warning">
                            <b>MAIL ID: </b><a href="mailto:john12@gmail.com">john12@gmail.com</a> <br>
                            <B>MOBILE NO::</B>9876543211<br>
                        </div>
                    </div>
                </div>  

                <div class="col-md-4">
                    <div class="card bg-dark">
                        <div class="card-header"><img src="card2.png"  width="320px" height="300px" class="card-img-top"></div>
                        <div class="card-body bg-white">
                            <div class="card-title"><h5>LIBRARY</h5></div>
                            <div class="card-text">
                                <B>NAME:</B>M.RITIMA JOSH<br>
				                <B>PROFESSION:</B>LIBRARY MANAGER <br>					
                            </div>
                        </div>      
                        <div class="card-footer bg-warning">
                            <b>MAIL ID: </b><a href="mailto:ritimajosh@gmail.com">ritimajosh@gmail.com</a> <br>
                            <B>MOBILE NO::</B>9876543212<br>
                        </div>
                    </div>
                </div>  
                
            </div>
        </div>
        </section>
    </body>
</html>