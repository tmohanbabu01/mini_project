<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            .search
            {
                padding-left:1500px;
            }
      
        </style>
        <title>
           STUDENT INFORMATION
        </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    </head>
    <style tytpe="text/css">
        ul li:hover{
            background-color:black;
            border:4px solid bisque;
            border-radius: 20px;
            padding:2px 12px
        }
         input:hover{
            background-color:lightseagreen;
            border:4px solid cyan
        }
    </style>
    <body style="background-color:rgb(196, 236, 255)">
        
        <div class="wrapper">
        <header class="head10">
        <div class="logo">
            <img src="logo1.png" alt="right" height="60px" width="100px">
            <h1 style="color:black;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
            <nav>
                <ul>
                    <li><a href="adminhome.php">HOME</a></li>
                    <li> <a href="studinfo.php">STUDENT-INFO</a></li>
                    <li> <a href="studcomment.php">FEEDBACK-FROM-STUDENT</a></li>
                </ul>
            </nav>
        </header>
        <section><br><br>
        <div class="srch">
            <form class="navbar-form" method="post" name="form1">
                    <input class="form-control" type="text" name="search" placeholder="search student.." required="">
                    <button style="background-color: #6db6b9e6;" type="submit" name="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
            </form>
        </div>
    <br><br>
    <h2>List Of Students </h2>
	<?php

		if(isset($_POST['submit']))
		{
			$res=mysqli_query($dp,"SELECT * from student where username like '%$_POST[search]%' ");

			if(mysqli_num_rows($res)==0)
			{
				echo "Sorry! No student found. Try searching again.";
			}
			else
			{
                echo "<table class='table table-bordered table-hover' >";
                echo "<tr style='background-color: #6db6b9e6;'>";
                    //Table header
                    echo "<th>"; echo "First Name";	echo "</th>";
                    echo "<th>"; echo "Last Name";  echo "</th>";
                    echo "<th>"; echo "User Name";  echo "</th>";
                    echo "<th>"; echo "Password";  echo "</th>";
                    echo "<th>"; echo "Email";  echo "</th>";
                    echo "<th>"; echo "Phone NO:";  echo "</th>";
                echo "</tr>";

                while($row=mysqli_fetch_assoc($res))
                {
                    echo "<tr>";
                        echo "<td>"; echo $row['first']; echo "</td>";
                        echo "<td>"; echo $row['last']; echo "</td>";
                        echo "<td>"; echo $row['username']; echo "</td>";
                        echo "<td>"; echo $row['password']; echo "</td>";
                        echo "<td>"; echo $row['email']; echo "</td>";
                        echo "<td>"; echo $row['phone']; echo "</td>";

                    echo "</tr>";
                }
                echo "</table>";
			}
		}
			/*if button is not pressed.*/
		else
		{

			$res=mysqli_query($dp,"SELECT * from student; ");
                echo "<table class='table table-bordered table-hover' >";
                echo "<tr style='background-color: yellow;'>";
                    //Table header
                    echo "<th>"; echo "First Name";	echo "</th>";
                    echo "<th>"; echo "Last Name";  echo "</th>";
                    echo "<th>"; echo "User Name";  echo "</th>";
                    echo "<th>"; echo "Password";  echo "</th>";
                    echo "<th>"; echo "Email";  echo "</th>";
                    echo "<th>"; echo "Phone NO:";  echo "</th>";
                echo "</tr>";	

                while($row=mysqli_fetch_assoc($res))
                {
                    echo "<tr>";
                    echo "<td>"; echo $row['first']; echo "</td>";
                    echo "<td>"; echo $row['last']; echo "</td>";
                    echo "<td>"; echo $row['username']; echo "</td>";
                    echo "<td>"; echo $row['password']; echo "</td>";
                    echo "<td>"; echo $row['email']; echo "</td>";
                    echo "<td>"; echo $row['phone']; echo "</td>";

                    echo "</tr>";
                }
                echo "</table>";
			}
        ?>
        </section>
    </body>
</html>
