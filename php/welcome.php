<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{

    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script></head>
<title>Welcome-<?php echo $_SESSION['username']?></title>
</head>
<body>
<?php
require 'navbar.php'
?>


<style>
        body{
           font-family:arial;
           color:black;
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
        @media screen and (max-width:575px) {
            .header{
                font-size:1.5em;
            }
           
        }
        @media screen and (max-width:315px) {
            .header{
                font-size:1.3em;
            }
            
        }

    </style>
    <div>
        <div  class="header">
      <script>
        var today = new Date()
var curHr = today.getHours()
var time = null;

if (curHr < 12) {
  var time = "Good Morning";
} else if (curHr < 18) {
  var time = "Good Afternoon";
} else {
  var time = " Good Evening";
}
document.write(time);
      </script>
      <span class=uName><?php echo $_SESSION['username']?>!
    </span>
       <div>
       Welcome to Top-up zone 
    </div>

        </div>
        <div class="sub-header">
        Please choose the app:

        </div>
    </div>
    
    <div class="card-group">
  <div class="card">
  <a href="ff.php"><img class="card-img-top" src="https://i.ibb.co/tzvHzfM/Freefire.jpg" alt="Freefire"  >
    </a> <div class="card-body">
      <h5 class="card-title">Free Fire</h5>
      <p class="card-text">Garena Free Fire, also known as Free Fire, is a battle royale game, developed by Vietnamese game company 111dots Studio and published by Garena. You can Purchase Free Fire Diamonds from us at cheapest rate.</p>
      <a href="ff.php">Click here </a>to purchase free fire diamonds.
    </div>
  </div>
  <div class="card">
  <a href="pubg.php"> <img class="card-img-top" src="https://i.ibb.co/HTJ5nt0/download.jpg" alt="PUBG" >
  </a>   
  <div class="card-body">
      <h5 class="card-title">PUBG</h5>
      <p class="card-text">PUBG: Battlegrounds is a battle royale game developed 
        and published by PUBG Studios, a subsidiary of Krafton. You can buy PUBG UC here at cheapest rate</p>
        
        <a href="pubg.php">Click here </a>to purchase PUBG UC
    </div>
  </div>
  <div class="card">
  <a href="tiktok.php"><img class="card-img-top" src="https://i.ibb.co/Jrj1Tg4/download-2.jpg" alt="TikTok image" >
  </a>   
  <div class="card-body">
      <h5 class="card-title">TikTok</h5>
      <p class="card-text">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati animi, saepe esse officiis rerum dicta.
      </p>
      <a href="tiktok.php">Click here </a>to purchase TikTok coins.
    </div>
  </div>
</div>
   <?php
   require "footer.php"

   ?>

</body>
</html>