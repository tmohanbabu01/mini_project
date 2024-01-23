<?php
include "connection.php";
?>
<!DOCTYPE html>
<html> 
    <head>
        <title>
             Admin Registration
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style tytpe="text/css">
         ul li:hover{
            background-color:crimson;
            border:4px solid lightcoral;
            border-radius: 20px;
            padding:2px 12px
        }
         input:hover{
            background-color:aqua;
            border:4px solid orange
        }
        button:hover{
            background-color:aqua;
            border:4px solid orange;
            border-radius: 20px;
        }
    </style>
    <body >
        <div class="wrapper">
        <header>
        <div class="logo">
            <img src="logo1.png" alt="right" height="60px" width="100px">
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
            <div class="reg2">
                <br>
            <div class="box2">
                <h1 style="text-align:center;font-size:35px;font-family:Lucida Console;">Library Management</h1>
                <br><br>
                <h1 style="text-align:center;font-size:25px;">Admin Registration Form</h1><br>
                <form id="aform" name="register" action="r2data.php" method="POST">
                    <br>
                    <div class="form2">
                        ID NAME:<br> <input type="text" name="id" id="uid" placeholder="enter id"><br><br>
                       NAME:<br> <input type="text" name="name"  id="name" placeholder=" enter name"><br><br>
                        USER NAME:<br> <input type="text" name="username" id="username" placeholder="User name"><br><br>
                       PASSWORD: <BR> <input type="password" name="password" id="password" placeholder="Password"><br><br>
                        EMAIL:<br> <input type="email" name="mail"  id="email" placeholder="enter mail-id"><br><br>
                        PHONE NO: <BR> <input type="tel" name="phone" id="mobile" placeholder="mobile no"><br><br>
                        <span id="error"></span><br>
                        <button type="submit" name="btnsubmit" >Sign-Up</button>
                </div>
            </form>
            <script>

                let form=document.getElementById('aform');
                let idname=document.getElementById('uid');
                let aname=document.getElementById('name');
                let uname=document.getElementById('username');
                let upass=document.getElementById('password');
               
                let mob=document.getElementById('mobile');
                let mail=document.getElementById('email');

            
                
               
            
                form.addEventListener('submit',event=>{
                    event.preventDefault();
                    validate();
                });
                
                function validate()
                {
                    //fn=id name   ln=name
                    let fn=idname.value.trim();
                    let ln=aname.value.trim();
                    let un=uname.value.trim();
                    let pass=upass.value.trim();
                    let mob1=mob.value.trim();
                    let mal=mail.value.trim();

                    if(fn==="" || fn==null){
                        error.innerText="Id-name not be empty";
                    }
                    else if(!(fn.match(/^[A][D][a-zA-Z0-9]+/))){
                        error.innerText="enter valid Admin id";
                    }
                    else if(ln==="" || ln==null){
                        error.innerText="name not be empty";
                    }
                    
                    else if(un==="" || un==null){
                        error.innerText=" username not be empty";
                    }
                    else if(un.length < 3){
                        error.innerText=" username shuold conatin aleast 3";
                    }
                    else if(pass==="" || pass==null)
                    {
                        error.innerText=" password not be empty";
                    }
                    else if(pass.length < 8)
                    {
                        error.innerText=" password must be greater than 8";
                    }
                
                    else if(!(pass.match(/[a-zA-Z0-9]+/)))
                    {
                        error.innerText="  password contains atleast one letter upper,lower,digit";
                    }
                    else if(!pass.match(/[#@$^_]/)){
                        error.innerText="password should contain atleast one special character";
                    }
            
                    else if(!mob1.match(/^[6-9][0-9]{9}/)){
                        error.innerText="enter valid number";
                    }
                    else if(mob1.length != 10)
                    {
                        error.innerText="must be contain 10 numbers only";
                    }
                    else if(mal==="")   {
                        error.innerText=" mail not be empty";
                    }

                    else if(!mal.match(/[a-zA-Z0-9-_/.]+@[a-zA-Z0-9-/_]+[.]([a-z]{2,6})$/))
                    {
                        error.innerText="email is not valid ";
                    }
                    else
                    {
                        form.submit();
                    }
                    
                }
            
            </script>
            </div>
        </div>
        </section>
         
    </body>
</html>