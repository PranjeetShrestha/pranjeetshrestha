
<?php 
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include 'dbconnect.php';
  @$username=$_REQUEST["username"];
  @$password=$_REQUEST["password"];
if($username=="ganesh" && $password=="ganesh" )
{
  header("location: view.php");
}
  $sql="select * from register where username='$username' AND password='$password'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if ($num==1){
$login=true;
session_start();
$_SESSION['loggedin']=true;
$_SESSION['username']=$username;
header("location: welcome.php");

  }
  
else{
  $showError='Invalid';
}
}
  ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></head>

<style>
  body{
    background:#15C7A6;
    /* background-color :#5AFDF6A3;*/
      /* 
      background-image:url("https://i.ibb.co/b6WbXBh/pexels-photo-531880.jpg") ;
      background-size: cover;
      background-repeat: no-repeat ;
      */
    }
    .field{
       color:white ;
   
      background-color:#000000E3;
       margin:50px;
    /*  font-family: 'Times New Roman', Times, serif;*/
    font-family: arial;
      margin :2px;
      text-align: center;
      border:2px solid black ;
      border-radius:8px;
     }
    .header{
      font-weight:900;
      font-size: large;
    }
   .desc{
     font-weight:100;
     font-size: small;
   }
   .box{
     color:#fff;
    background-color:#00000000;
     width: 75%;
     padding: 12px 20px;
     margin: 8px 0;
     display: inline-block;
     border: 1px solid #fff;
     border-radius: 10px;
    box-sizing: border-box; 
   }
   .box:hover{
     color:black;
    background-color:white;
     width: 75%;
     padding: 12px 20px;
     margin: 8px 0;
     display: inline-block;
     border: 1px solid green;
     border-radius: 10px;
    box-sizing: border-box; 
   }
   .submit{
     text-align: center;
     color:#fff;
    background-color:#00000000;
     width: 40%;
     padding: 12px 20px;
     margin: 8px 0;
     display: inline-block;
     border: 2px solid #ccc;
     border-radius: 10px;
    box-sizing: border-box; 
   
   }
   .submit:hover{
    cursor: pointer;
     color:black;
    background-color:#fff;
     width: 40%;
     padding: 12px 20px;
     margin: 8px 0;
     display: inline-block;
     border: 2px solid #00000000;
     border-radius: 10px;
    box-sizing: border-box; 
   
   }
   
   .sign-up u a{
     color:#fff;
     font-weight: 500;
   }
   .error{
     color:red;
   }
   @media screen and (min-width:820px) {
   .box{
    width:30%;
   }
   .submit{
    width:10%;
   }
   .box:hover{
    width:30%;
   }
   .submit:hover{
    width:10%;
   }
  }
   @media screen and (min-width:480px) and (max-width:820px){
   .box{
    width:40%;
   }
   .submit{
    width:15%;
   }
   .box:hover{
    width:40%;
   }
   .submit:hover{
    width:15%;
   }
   
   
   }
</style>
</head>

<body bgcolor="green">
<?php
require 'navbar.php'
?>

<?php

if($login){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}

if($showError){
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '.$showError.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
 
<fieldset class="field">
  <br> 
  <span class="header">LOGIN</span>
  <br>
  <span class="desc">
    Please enter your Username and<br>Password
    <br> <br>
  </span>
  
  <form method="post" class="form" name="myForm" onsubmit="return validateForm()">
    
    <input name="username"  type="text" placeholder ="Username" class="box"  ><br>
    <span id="usernameError" class="error"> </span>
    <br>
    
    <input name="password"  type="password" placeholder="Password " class="box" ><br>
    <span id="passwordError" class="error"> </span>
    <br>
    
    <input  type="submit" class="submit" value="Login" readonly >
  </form>
  <br>
  <span class="register">
    Don't have an account? <br>
    <span class="sign-up">
      <u><a class href="register.php">Sign Up</a></u>
    </span>
  </span>
  <br><br>
 
</fieldset>
<?php
require "footer.php"
?>

<script>
  function validateForm(){
    
    var username=document.myForm.username. value;
    var password=document.myForm.password.value ;
    if(username==null || username=="")
    {
      document.getElementById("usernameError").innerHTML="Enter Username";
      return false;
    }
    if(password==null || password=="")
    {
      document.getElementById("passwordError").innerHTML="Enter Password";
      return false;
    }
  } 
  
</script>





</body>

</html>

