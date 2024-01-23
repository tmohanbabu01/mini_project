
<?php
include "connection.php";
if(isset($_POST['name']))
{
    $fid=$_POST[id];
    $n=$_POST[name];
    $u=$_POST[username];
    $p=$_POST[password];
    $m=$_POST[mail];
    $ph=$_POST[phone];
    $count=0;
    $sql="select username from admin;";
    $res=mysqli_query($dp,$sql);
    while($row=mysqli_fetch_assoc($res))
    {
        if($row['username']==$_POST['username'])
        {
            $count=$count+1;
        }
    }
    if($count==0)
    {mysqli_query($dp,"insert into admin values('$fid','$n','$u','$p','$m','$ph');");
?>              
<script>
    alert("registration successful");
    window.location="adminhome.php";
</script>  
            <?php
                }   
                else{
            ?>
                <script>
                    alert("The usename already exist");
                    window.location='register2.php';
                </script>
        <?php   
                }  
            }
        ?>            