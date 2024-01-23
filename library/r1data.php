<?php
include "connection.php";

if(isset($_POST['first']))
{
    $f=$_POST[first];
    $l=$_POST[last];
    $u=$_POST[username];
    $p=$_POST[password];
    $m=$_POST[mail];
    $ph=$_POST[phone];
    $count=0;
    $sql="select username from student;";
    $res=mysqli_query($dp,$sql);
    while($row=mysqli_fetch_assoc($res))
    {
        if($row['username']==$_POST['username'])
        {
            $count=$count+1;
        }
    }
    if($count==0)
    {mysqli_query($dp,"insert into student values('$f','$l','$u','$p','$m','$ph');");
    ?>   
    <script>              
      alert("registration successful");
      window.location='studlogin.php';
    </script>  
    <?php
        }
        else{
        ?>
            <script>
                alert("The usename already exist");
                window.location='register.php';
            </script>
    <?php   
            }  
        }
    ?>           
       