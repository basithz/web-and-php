<!-- code for html -->
<html>
    <head>
        <title>dbform2</title>
        <script>
            function verify()
            {
                let x=document.forms["myform"]["sname"].value;
                if(x=="")
                {
                 alert("Enter your second name!!!");
                }
            }
            
        </script>
        <style>
            input{
               width: 30%;
               padding: 10px;
               background-color: lightblue;
            }
        </style>
    </head>
    <body style="background-color:rgba(64, 114, 180, 0.884);">
        <h3><u style="text-decoration-color:blue">Regisrtaion</u></h3>
      <center>  <form name="myform" method="post" onsubmit="return verify()">
            <table boreder="0" >
            <input type="text" id="1" name="fname" placeholder="Enter your First name"  required><br>
            <input type="text" id="2" name="sname" placeholder="Enter your second name" ><br>
            <input type="number" id="3" name="ph" placeholder="Enetr your Mob.no"><br>
            <input type="email" id="4" name="mail" placeholder="Enter your mail" required=""><br><!-- comment -->
            <input type="password"id="5" name="pswd" palceholder="enter your passwors" required><br>
            <input type="submit" id="6" value="Sign Up" name="sub">
            </table>
          </form></center>
    </body>
</html>
<?php
$a=new mysqli("localhost","root","");
if($a->connect_error){
    die("connection failed".$a->connect_error);
}
else {
    echo("connection succesfull");
}
$d="create database NMACE";
if($a->query($d)==true)
{
    echo"database created succesfully";
}
 else {
echo"database creation failed";    
}
?>


