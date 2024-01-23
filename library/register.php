
<!DOCTYPE html>
<html>
    <head>
        <title>
            Registration
        </title>
        <link rel="stylesheet" href="style.css">
    </head>
    <style tytpe="text/css">
         ul li:hover{
            background-color: chocolate;
            border-radius: 20px;
            padding:3px 15px;
        }
        input:hover{
            background-color:orchid ;
            border:4px solid yellow
        }
        button:hover{
            background-color:orchid ;
            border:4px solid yellow;
            border-radius: 20px;
        }
    </style>
    <body style="background-color: #52b1e7">
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
            <div class="reg">
                <br><br><br>
            <div class="box2">
                <h1 style="text-align:center;font-size:35px;font-family:Lucida Console;">Library Management</h1>
                <br><br>
                <h1 style="text-align:center;font-size:25px;">Student Registration Form</h1><br>
                <form id="registerform"  action="r1data.php"   method="POST" >
                    <br>
                    <div class="form2">
                        FIRST NAME:<br> <input type="text" name="first" id="first" placeholder="first name"><br>
                        <br>
                        LAST NAME:<br> <input type="text" name="last"  id="last" placeholder="last name"><br>
                        <br>
                        USER NAME:<br> <input type="text" name="username"  id="username" placeholder="User name"><br>
                        <br>
                        PASSWORD: <BR> <input type="password" name="password"  id="password" placeholder="Password"><br>
                        <br>
                        EMAIL:<br> <input type="text" name="mail" id="email"  placeholder="enter mail-id"><br>
                        <br>
                        PHONE NO: <BR> <input type="tel" name="phone"  id="mobile" placeholder="mobile no"><br>
                        <span id="error"></span><br>
                        <button type="submit" name="btnsubmit" >SUBMIT</button>      
                    </div>
                </form>
                <script>

                let form=document.getElementById('registerform');
                let fname=document.getElementById('first');
                let lname=document.getElementById('last');
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
                    let fn=fname.value.trim();
                    let ln=lname.value.trim();
                    let un=uname.value.trim();
                    let pass=upass.value.trim();
                    let mob1=mob.value.trim();
                    let mal=mail.value.trim();

                    if(fn==="" || fn==null){
                        error.innerText=" first name not be empty";
                    }
                     else if(ln==="" || ln==null){
                        error.innerText=" last name not be empty";
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
