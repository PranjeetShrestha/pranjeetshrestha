<?php 
include "dbconnect.php";
$sql = "SELECT * FROM products ORDER BY SN DESC";
$result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/6ad35b2ce7.js" crossorigin="anonymous"></script>
</head>
<body>
<style>
    h2{
        text-decoration:underline;
        text-align:center;
    }
    
#display-image{
	width: 100%;
	justify-content: center;
	padding: 5px;
	margin: 15px;
}
img{
	margin: 5px;
	width: 350px;
	height: 500px;
}
   
}
</style>
    <div class="container">
       <h2>Detail of user</h2>
<table border="2px" class="table">
    <thead>
        <tr>
        <th>SN</th>
        <th> Username</th>
        <th>AppName</th>
        <th>Game id</th>
        <th>Password</th>
        <th>item</th>
        <th>Del</th>
       
    </tr>
    </thead>
    
    <tbody> 
        <?php
                while ($row = mysqli_fetch_array($result))
                 {
        ?>
                    <tr>
                    <td><?php echo $row['SN']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['AppName']; ?></td>
                    <td><?php echo $row['gameId']; ?></td>
                    <td><?php echo $row['gamePassword']; ?></td>
                    <td><?php echo $row['item']; ?></td>
                    <td><a href="delete.php?SN=<?php echo $row['SN']; ?>"><i class="fa-solid fa-trash-can">  </i></a></td>
                   
                      </tr>                       
        <?php       
                }
        ?>                
    </tbody>
</table>
<?php 
include "dbconnect.php";
$sql = "SELECT * FROM products ORDER BY SN DESC";
$result = mysqli_query($conn,$sql);
?>
<table border="2px" class="table">
    <thead>
        <tr>
        <th>SN</th>
        
       
        <th>Image</th>
        <th>Status</th>
        <th>Date and Time</th>
     
    </tr>
    </thead>
    
    <tbody> 
        <?php
                while ($row = mysqli_fetch_array($result))
                 {
        ?>
                    <tr>
                    <td><?php echo $row['SN']; ?></td>
                  

                    <td><img src="./img/<?php echo $row['img']; ?>"></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><?php echo $row['DateAndTime']; ?></td>
                      </tr>                       
        <?php       
                }
        ?>                
    </tbody>
</table>
    </div> 
</body>
</html>