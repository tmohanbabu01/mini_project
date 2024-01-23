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
            REQUESTED-BOOKS
        </title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
    </head>
    <style tytpe="text/css">
        ul li:hover{
            background-color:black;
            border:4px solid blue;
            border-radius: 20px;
            padding:2px 12px
        }
    </style>
    <body style="background-color:rgb(196, 236, 255)">

        <div class="wrapper">
        <header class="head9">
        <div class="logo">
            <img src="logo1.png" alt="right" height="60px" width="100px">
            <h1 style="color:lighblue;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
        </div>
            <nav>
                <ul>
                    <li><a href="adminhome.php">HOME</a></li>
                    <li><a href="adminbooks2.php">BOOKS</a></li>
                </ul>
            </nav>
        </header>
        <section>
            <br><br>
    <h2 style="color:crimson;">List Of Requested Books</h2>
	<?php
			$res=mysqli_query($dp,"SELECT * from studrequest;");

			if(mysqli_num_rows($res)==0)
			{
				echo "Sorry! No requested book found. ";
			}
			else
			{
		echo "<table class='table table-bordered table-hover' >";
			echo "<tr style='background-color: #357EC2;'>";
				//Table header
               			echo "<th>"; echo "Book-Id";  echo "</th>";
				echo "<th>"; echo "Book-Name";  echo "</th>";
				echo "<th>"; echo "Authors Name";  echo "</th>";
				echo "<th>"; echo "Edition";  echo "</th>";
			echo "</tr>";	

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
               			echo "<td>"; echo $row['bid']; echo "</td>";
				echo "<td>"; echo $row['bookname']; echo "</td>";
				echo "<td>"; echo $row['author_name']; echo "</td>";
				echo "<td>"; echo $row['edition']; echo "</td>";
				echo "</tr>";
			}
		echo "</table>";
			}
			
        ?>
        </section>
    </body>
</html>
