<?php
include "connection.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            STUDENT HOME PAGE
        </title>
        <link rel="stylesheet" href="style.css">
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
        <header class="head2">
        <div class="logo">
            <img src="logo1.png" alt="right" height="60px" width="100px">
            <h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
            <nav>
                <ul>
                    <li><a href="books.php">BOOKS</a></li>
                    <li><a href="stud-bookrequest.php">BOOK-REQUEST</a></li>
                    <li><a href="CARDS/cards.html">BOOK-STORE</a></li>
                    <li><a href="feedback.php">FEEDBACK</a></li>
                    <li><a href="studlogin.php">LOGOUT</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <div class="sec2-img">
                
                </div>
        </section>
        <footer>
            
        </footer>
        </div>
    </body>
</html>