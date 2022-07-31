<?php 
include "dbconnect.php"; 
//if (isset($_GET['id'])) {
    $user_id = $_GET['SN'];
    $sql = "DELETE FROM products WHERE SN='$user_id'";
     $result = mysqli_query($conn,$sql);
     if ($result == true) 
     {
        echo ("<script LANGUAGE='JavaScript'>
                 window.alert('Succesfully deleted');
                 window.location.href='view.php';
                 </script>");
    }
    else
    {
        echo "Error:" . $sql . "<br>" . mysqli_error($conn);
    }
//}
?>