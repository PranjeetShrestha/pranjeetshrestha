<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Landing Page</title>
</head>

<body>
  
  <style type="text/css" media="all">
    header{
     color:#ffffff;
     background-color :#284b63;
     padding:80px 0;
    text-align: center;
    }
    section{
      padding:40px 0;
    text-align: center;
    }
    
   .features{
     color:#000000;
     background:#ffffff ;
   }
   .quote{
     color:#ffffff;
     background:#549DA0;
     
   }
   footer{
     
     background:#353535;
     padding:32px 0;
     text-align:center;
     color:#868686;
   }
   
   h1{
     font-size: 48px;
     margin: 0 0 16px 0;
   }
   h2{
     font-weight: 300;
     font-size: 24px;
          margin: 0 0 16px 0;
     
   }
  .container 
  {
    margin:0 auto;
    padding : 0 20px 0 20px;
    max-width: 900px;
    
  }
  .btn{
   display :inline-block;
    color;white;
   font-weight: 500;
   font-size:20px;
   border:none;
   border-radius :5px;
   padding:12px 16px;
   background:#549DA0 ;
   cursor:pointer;
  }
  .btn:hover{
    background:#468486;
  }
 .feature{
   width:32%;
 }
 @media screen and (max-width:400px){
    .btn{
        display:block;
        font-size:18px;
    }
    h1{
        font-size:32px;
        margin:0 0 8px 0;
    }
    h2{
        font-size:18px;
    }
 }
  </style>
  
  
  
<header>
  <div class=container>
  <h1>Awesome App</h1>
  <h2>This app will change your life! </h2>
  <a class=btn >Download Now</a>
  </div>
</header>

<section class=features>
  <div class=container >
    <div class=feature>
      <img src="img_blue_pin.png" alt=""/>
      <p>An awesome App</p>
        </div>
       <div class=feature>
      <img src="img_blue_chart.png" alt=""/>
      <p>An awesome App</p>
        </div>
            <div class=feature>
      <img src="img_blue_msg.png" alt=""/>
      <p>An awesome App</p>
        </div>
</section>

<section class=quote>
  quotes
</section>




<footer>
  footer
</footer>




</body>

</html>