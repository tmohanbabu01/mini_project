<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            FEEDBACK   
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style tytpe="text/css">
         ul li:hover{
            background-color:brown;
            border:4px solid cyan;
            border-radius:15px;
            padding: 3px 12px
        }
        textarea{
                background-Color:white;
                padding:50px
                margin:left 30px;
                border-radius:15px
        }
            textarea:hover{
            background-color:palegoldenrod;
            border:6px solid lime
        }

    </style>
    <body style="background-color:gray">
        <div class="wrapper">
        <header class="head5">
        <div class="logo">
            <img src="logo1.png" alt="right" height="60px" width="100px">
            <h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
            <nav>
                <ul>
                    <li><a href="studenthome.php">HOME</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <div class="feedback">
                <br><br><br>
            <div class="box2">
                <h1 style="text-align:center;font-size:35px;font-family:Lucida Console;">Library Management</h1>
                <br><br>
                <h1 style="text-align:center;font-size:25px;">if you have any queries please comment here</h1><br>
                <form  name="register" action="" method="POST">
                    <br>
                    <div class="form2">
                       <textarea name="comment"  cols="30" rows="10" ></textarea> <br><br>
                        <input type="submit" name="submit" value="comment">
                </div>
            </form>
            </div>
        </div>
        </section>
        <?php
            if(isset($_POST['submit']))
            {
                    mysqli_query($dp,"insert into comment values('$_POST[comment]');");
        ?>   
            <script>
                    alert("feedback submitted");
            </script>  
        <?php
            }
        ?>
    </body>
</html>