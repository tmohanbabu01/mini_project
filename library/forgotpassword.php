<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            FORGOT PASSWORD
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style tytpe="text/css">
        ul li:hover{
            background-color: turquoise;
            border-radius: 20px;
            padding:3px 15px;
        }
        input:hover{
            background-color: orange;
            border: 4px solid teal;
        }
    </style>
    <body>
        <div class="wrapper">
        <header>
        <div class="logo">
            <img src="logo1.png" alt="right" height="60px" width="100px">
            <h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
            <nav>
                <ul>
                    <li><a href="new.html">HOME</a></li>
                    <li><a href="studlogin.php">STUDENT-LOGIN</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <div class="log1">
                <br><br><br>
            <div class="box1">
                <h1 style="text-align:center;font-size:35px;font-family:Lucida Console;">Library Management</h1>
                <br><br>
                <h1 style="text-align:center;font-size:25px;">CHANGE PASSWORD</h1><br>
                <form  name="login" action="" method="POST">
                    <br>
                    <div class="form1">
                      USER NAME:<br> <input type="text" name="username" placeholder="User name"><br><br>
                      PHONE:<br> <input type="tel" name="phone" placeholder="enter number"><br><br>
                      NEW PASSWORD: <BR> <input type="password" name="password" placeholder="Password"><br><br>
                       <input type="submit" name="submit" value="update">
                </div>
            </form>
            </div>
        </div>
        </section>
        <?php
        if(isset($_POST['submit']))
        {
            $user=$_POST['username'];
            $ph=$_POST['phone'];
            $np=$_POST['password'];

            $query=mysqli_query($dp,"select username , phone from student where username='$user' AND phone='$ph';");
            $num=mysqli_fetch_array($query);
            if($num>0)
            {
                $res=mysqli_query($dp,"UPDATE student SET password= '$_POST[password]' where username='$user';");
                ?>   
                <script>
                        alert("PASSWORD UPDATED SUCCESSFULLY");
                        window.location="studlogin.php";
                </script>  
                <?php
            }
            else{
                ?>
                <script>
                    alert("TRY AGAIN!!");
                </script>
                <?php   
              
            }  
        }
            ?>
    </body>
</html>