<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{

    header("location:login.php");
    exit;
}

?>
<?php
error_reporting(0);

$msg = "";
if( ($_SERVER["REQUEST_METHOD"]=="POST") && (isset($_POST['upload'])) ){
include 'dbconnect.php';
@$id=$_SESSION['id'];
@$name=$_SESSION['name'];
@$username=$_SESSION['username'];
@$AppName=$_REQUEST["AppName"];
@$gameId=$_REQUEST["login"];
@$gamePassword=$_REQUEST["password"];
@$item=$_REQUEST["pack"];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "img/" . $filename;
move_uploaded_file($tempname ,$folder);
@$status=$_REQUEST["status"];
$sql="insert into products  (username,AppName,gameId,gamePassword,item,img,status) values ('$username','$AppName','$gameId','$gamePassword','$item','$filename','$status')";
$result=mysqli_query($conn,$sql);
if ($result == true) 
{
   echo ("<script LANGUAGE='JavaScript'>
            window.alert('Succesfully submitted!!');
            window.location.href='ff.php';
            </script>");
}
$conn->close();


}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Free Fire TopUp </title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></head>

</head>
<style>
   body{
    background:#15C7A6;
   }
   .header{
            background-color: #284b63;
            color:white;
            text-align:center;
            font-size:2em;
            
        }
        .uName{
            color:yellow;
            font-weight:550;
        }
        .sub-header{
            background-color: #284b63;
            color:white;

            text-align:center;
            font-size:1.5em;
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
   @media screen and (max-width:575px) {
            .header{
                font-size:1.5em;
            }
            .sub-header{
                font-size:1.2em;
            }
        }
        @media screen and (max-width:315px) {
            .header{
                font-size:1.3em;
            }
            .sub-header{
                font-size:1em;
            }
        }


</style>
<body >
  
  <?php require'navbar.php'?>
  <div>
        <div  class="header">
        Hello <span class=uName><?php echo $_SESSION['username']?>!
    </span>
       <div>
       Welcome to TikTok Top-up 
    </div>

        </div>
        <div class="sub-header">
        Please fill the detail:

        </div>
    </div>
 
    
  <fieldset class="field"> 

 <br>
 <form method="POST" action="" enctype="multipart/form-data">
    <input type="text" class="box" name="login" placeholder="TikTok id" required><br>
    <input type="text"  class="box" name="password" placeholder="Password" required><br>
    <input type="text" name="AppName" value="Tiktok" hidden>
    <select class="box" name="pack" required>
    <option hidden disabled>Choose a plan</option >
    <option value="100">100💎=Rs90</option>
    <option value="310">310💎=Rs270</option>
    <option value="520">520💎=Rs450</option>
    <option value="1060">1060💎=Rs900</option>
    <option value="2180">2180💎=Rs1800</option>
    <option value="weekly">weekly=Rs200</option>
    <option value="monthly">monthly=Rs1000</option>
  </select> 
  <select name="status" hidden >
    <option value="pending" >pending</option>
  </select><br>
  <div>
    
Esewa id=9840956565 <br>
Name in esewa=G K Kirana Pasal <br><br>

Upload Screenshot for proof:
  </div>
  <input class="box" type="file" name="uploadfile" value="" required /><br>
  <button class="submit" type="submit" name="upload">Submit</button>
  </form>
  <br>
</fieldset>

<?php
   require "footer.php"

   ?>

  </body>
</html>