
<?php 
/*
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="data";
	$conn=new mysqli($servername,$username,$password,$dbname);
*/	?>

<?php
$conn = mysqli_connect("localhost", "root","","data");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
?>