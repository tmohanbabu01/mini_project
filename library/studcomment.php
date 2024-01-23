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
            STUDENT FEEDBACK
        </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    </head>
    <style tytpe="text/css">
        ul li:hover{
            background-color:black;
            border:4px solid yellow;
            border-radius: 20px;
            padding:2px 12px
        }
    </style>
    <body style="background-color:rgb(196, 236, 255)">
        
        <div class="wrapper">
        <header class="head11">
        <div class="logo">
            <img src="logo1.png" alt="right" height="60px" width="100px">
            <h1 style="color: black;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
            <nav>
                <ul>
                    <li><a href="studinfo.php">HOME</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <br><br>
    <h2 style="color: #FE4003;">FEEDBACK FROM STUDENTS</h2>
	<?php
        $res=mysqli_query($dp,"SELECT * from comment order by comment;");
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color:#FEE135;'>";
				//Table header
				echo "<th style='color:black'>"; echo "*******COMMENTS******";	echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['comment']; echo "</td>";
				echo "</tr>";
			}
		echo "</table>";
        ?>
        </section>
    </body>
</html>