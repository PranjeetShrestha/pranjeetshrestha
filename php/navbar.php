<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<body>
    <?php

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
$loggedin=true;
}
else{
  $loggedin=false;
}
 echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="welcome.php">GTZ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>';
      if($loggedin)
{
      echo'<li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Sign-up</a>
      </li>';
}
      if(!$loggedin){
      echo'<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Games
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ff.php">Free Fire</a>
          <a class="dropdown-item" href="pubg.php">PUBG</a>
          <div class="dropdown-divider"></div>
          <div>Other</div>
          <a class="dropdown-item" href="tiktok.php">TikTok</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="logout.php">Logout</a>
      </li>';
      }
      echo'</ul>
   
  </div>
</nav>';
      
?>

</body>
</html>