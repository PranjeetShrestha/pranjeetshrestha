<?php 
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
	include 'dbconnect.php';
  @$name=$_REQUEST["nam"];
  @$username=$_REQUEST["username"];
  @$password=$_REQUEST["password"];
  @$password1=$_REQUEST["password1"];
 
//$exists=false;
$existSql="SELECT * FROM `register` WHERE username='$username'";
$result=mysqli_query($conn,$existSql);
$numExistRows=mysqli_num_rows($result);
if($numExistRows>0){
  $showError='Username already exists';
}
else{

if(($password==$password1)){
  $sql="insert into register (name,username,password) values ('$name','$username','$password')";
  $result=mysqli_query($conn,$sql);
  if ($result){
$showAlert=true;

  }
}
else{
  $showError='Password donot match';
}
}
/*
  
  if($conn->query($sql)===true)
  {
  
  }
 
*/
$conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign up</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></head>

<body>
   <style>
 body{
  background-color :#5AFDF6A3;
 }
 .field{
    color:white ;
   background-color:#000000E3;
    margin:50px;
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
.box:hover {
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
.login u a{
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
    width:19%;
   }
   .box:hover{
    width:40%;
   }
   .submit:hover{
    width:19%;
   }
  </style>

<?php
require 'navbar.php'
?>
<?php

if($showAlert){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You can now login.
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
 <span class="header">REGISTER</span>
 <br>
<span class="desc">
  Fill up the details 
</span>
<br><br>
  <form method="post" class="form" name="myForm" onsubmit="return validateForm()">
    <input name="nam" type="name" placeholder ="Full name" class="box" minlength="3" maxlength="30">
    <br>
    <span id="nameError" class="error"> </span>
    <br>
    <input name="username"  type="text" placeholder ="Username" class="box" minlength="4" maxlength="25"><br>
    <span id="usernameError" class="error"> </span>
    <br>
    
    <input name="password"  type="password" placeholder="Password " class="box" minlength="8" maxlength="25" ><br>
    <span id="passwordError" class="error"> </span>
    <br>  <input name="password1"  type="password" placeholder="Re-enter Password " class="box" ><br>
    <span id="password1Error" class="error"> </span> 
    <br>
    
    <input  type="submit" class="submit" value="Sign Up" readonly >
  </form>
 <br>
  <span>
    Have already an account?<br>
    <span class="login">
      <u><a class href="login.php">Login</a></u>
    </span>
  </span>
  <br><br>
 
</fieldset>
<?php
require 'footer.php'
?>
<script>

  function validateForm(){
    
var nam=document.myForm.nam. value;
    var username=document.myForm.username. value;
    var password=document.myForm.password.value ;
    var password1=document.myForm.password1.value ;
    if(nam==null || nam=="")
    {
      document.getElementById("nameError").innerHTML="Enter Name";
      return false;
    }
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
    if(password1==null || password1=="")
    {
      document.getElementById("password1Error").innerHTML="Re-Enter Password";
      return false;
    }
    usernameLength=username.length
    for(i=0;i<usernameLength;i++){
    if(username[i]=='!' || username[i]=='@' || username[i]=='#' || username[i]=='$' || 
    username[i]=='&'  )
    {
      document.getElementById("usernameError").innerHTML="Special character not allowed";
      return false;
    }

  }
 
  } 
  
</script>

</body>

</html>