<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            BOOK-UPDATE
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style tytpe="text/css">
        ul li:hover{
            background-color:black;
            border:4px solid crimson;
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
        <header class="head7">
        <div class="logo">
            <img src="logo1.png" alt="right" height="60px" width="100px">
            <h1 style="color: white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
            <nav>
                <ul>
                    <li><a href="adminhome.php">HOME</a></li>
                    <li><a href="adminlogin.php">ADMIN-LOGIN</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <div class="reg4">
                <br><br><br>
            <div class="box4">
                <h1 style="text-align:center;font-size:35px;font-family:Lucida Console;">Library Management</h1>
                <br><br>
                <h1 style="text-align:center;font-size:25px;">Book Update  Form</h1><br>
                <form  name="register" action="" method="POST" enctype="multipart/form-data" >
                    <br>
                    <div class="form4">
                        BOOK ID:<br> <input type="text" name="bid" placeholder="Book Id"><br><br>
                        BOOK NAME:<br> <input type="text" name="bname" placeholder="Book Name"><br><br>
                        AUTHOR NAME:<br> <input type="text" name="aname" placeholder="Author Name"><br><br>
                        EDITION: <BR> <input type="text" name="edition" placeholder="Edition No"><br><br>
                        STATUS:<br> <input type="text" name="status" placeholder="Status"><br><br>
                        QUANTITY: <BR> <input type="text" name="quantity" placeholder="Quantity"><br><br>
                        DEPARTMENT:<br> <input type="text" name="department" placeholder="Department"><br><br>
                        FILE UPLOAD: <br> <input type="file" name="pdffile">
                        <input type="submit" name="submit" value="Submit">
                </div>
            </form>
            </div>
        </div>
        </section>
        <?php
         
            if(isset($_POST['submit']))
            {
                mysqli_query($dp,"insert into books values('$_POST[bid]','$_POST[bname]','$_POST[aname]','$_POST[edition]','$_POST[status]','$_POST[quantity]','$_POST[department]');");

        ?>   
            <script>
                    alert("submitted successful");
                    window.location="adminbooks2.php";
            </script>  
            <?php
                 
                }  
             ?>
             <?php
                  $filename=$_FILES['pdffile']['name'];
                  $filetemp=$_FILES['pdffile']['tmp_name'];
             
                   move_uploaded_file($filetemp,'pdf/'.$filename);
                   $bookid=$_POST['bid'];
                   mysqli_query($dp,"delete from studrequest where bid='$bookid';");

        ?>   
    </body>
</html>