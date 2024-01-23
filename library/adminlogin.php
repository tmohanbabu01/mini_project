<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            ADMIN LOGIN
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style tytpe="text/css">
         ul li:hover{
            background-color: olive;
            border-radius: 20px;
            padding:3px 15px;
        }
        input:hover{
            background-color:lightgreen;
            border:4px solid lightcoral
        }
    </style>
    <body>
        <div class="wrapper">
        <header class="head1">
        <div class="logo">
            <img src="p2.gif" alt="right" height="60px" width="100px">
            <h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
            <nav>
                <ul>
                    <li><a href="new.html">HOME</a></li>
                    <li><a href="adminlogin.php">ADMIN-LOGIN</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <div class="log5">
                <br><br><br>
            <div class="box3">
                <h1 style="text-align:center;font-size:35px;font-family:Lucida Console;">Library Management</h1>
                <br><br>
                <h1 style="text-align:center;font-size:25px;">Admin login Form</h1><br>
                <form  name="login" action="" method="POST">
                    <br>
                    <div class="form3">
                       NAME:<br> <input type="text" name="username" placeholder="User name"><br><br>
                       PASSWORD: <BR> <input type="password" name="password" placeholder="Password"><br><br>
                       <input type="submit" name="submit" value="Log-In">
                </div>
            </form>
            <p style="color:azure"><br><br>
                <a href="adminpassword.php" style="color:white ;">Forgot Password</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;
                <a href="register2.php" style="color:white ;">NEWUSER:Sign up?</a>
            </p>
            </div>
        </div>
        </section>
        <?php
        if(isset($_POST['submit']))
        {
            $count=0;
            $res=mysqli_query($dp,"select * from admin where username='$_POST[username]'&&password='$_POST[password]';");
            $count=mysqli_num_rows($res);
            if($count==0)
            {
                ?>   
                <script>
                        alert("The username and password doesnot match");
                </script>  
                <?php
                    }
                    else{
                ?>
                    <script>
                     window.location="adminhome.php";
                    </script>
            <?php   
                    }  
                }
            ?>   
    
    </body>
</html>