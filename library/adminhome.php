<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            ADMIN HOME PAGE
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style tytpe="text/css">
        ul li:hover{
            background-color:black;
            border:4px solid lime;
            border-radius: 20px;
            padding:2px 12px
        }
    </style>
    <body>
        <div class="wrapper">
        <header class="head6">
        <div class="logo">
            <img src="logo1.png" alt="right" height="60px" width="100px">
            <h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
            <nav>
                <ul>
                    <li><a href="admin_book_update.php">BOOK-UPDATE</a></li>
                    <li><a href="adminbooks2.php">UPDATED-BOOKS</a></li>
                    <li><a href="admin_requested_books.php">REQUESTED-BOOKS</a></li>
                    <li><a href="studinfo.php">STUDENT-INFO</a></li>
                    <li><a href="new.html">LOGOUT</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <div class="sec4-img">
                
                </div>
        </section>
        <footer>
            <p style="color: white;text-align:center">
             Emailno:online.libray@133gmail.com<br><br>
             mobile no:9381429278
            </p>
        </footer>
        </div>
    </body>
</html>