<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            BOOK-REQUEST
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
         input:hover{
            background-color:lightseagreen;
            border:4px solid cyan
        }
    </style>
    <body>
        <div class="wrapper">
        <header class="head4">
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
            <div class="reg">
                <br><br><br>
            <div class="box1">
                <h1 style="text-align:center;font-size:35px;font-family:Lucida Console;">Library Management</h1>
                <br><br>
                <h1 style="text-align:center;font-size:25px;">Student Book-Request</h1><br>
                <form  name="register" action="" method="POST">
                    <br>
                    <div class="form1">
                        BOOK NAME:<br> <input type="text" name="bname" placeholder="book name"><br><br>
                        AUTHOR NAME:<br> <input type="text" name="aname" placeholder="author name"><br><br>
                        EDITION:<br> <input type="text" name="no" placeholder="User name"><br><br>
                        <input type="submit" name="submit" value="Submit">
                </div>
            </form>
            </div>
        </div>
        </section>
        <?php
            if(isset($_POST['submit']))
            {
                $count=0;
                $sql="select bookname from books;";
                $res=mysqli_query($dp,$sql);
                while($row=mysqli_fetch_assoc($res))
                {
                    if($row['bookname']==$_POST['bname'])
                    {
                        $count=$count+1;
                    }
                }
                if($count==0)
                {mysqli_query($dp,"insert into studrequest (bookname,author_name,edition) values('$_POST[bname]','$_POST[aname]','$_POST[no]');");
        ?>   
            <script>
                    alert("your request is successful");
            </script>  
            <?php
                }
                else{
            ?>
                <script>
                    alert("The book is already exist");
                </script>
        <?php   
                }  
            }
        ?>   
    </body>
</html>