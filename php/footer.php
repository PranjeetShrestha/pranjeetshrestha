<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        
        footer{
            background:#353535;
            padding:32px 0;
            text-align:center;
            color:#868686;
            font-size:12px;
        }
        footer ul{
            padding:0;
            margin:0;
            list-style: none;

        }
        footer li{
            display:inline-block;
        }
        footer li a{
            padding: 6px;
            margin:14px;
            text-decoration:none;
            color:#c3c3c3;
        }
        footer li a:hover{
            color:white;
        }
        @media screen and (max-width:400px) {
            footer{
padding:30px 0 10px 0;
            }
            footer li {
                display:block;
                margin:5px 0;
            }
        }
    </style>
</head>
<body>
    
<footer>
    <div class="container">
        <ul>
            <li><a href="welcome.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="">Contacts</a></li>
        </ul>
        <p>&copy All rights reversed</p>
    </div>
</footer>
</body>
</html>