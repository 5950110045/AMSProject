<?php
$host ="localhost";
$user = "root";
$password ="";
$dbname ="mydb";
try{
	$con= new PDO('mysql:host=$host;dbname=$dbname',$user,$password) or die("Error: " . mysqli_error($con));
}catch(PDOException $e){
	echo $e->getMessage();
}
mysqli_query($con, "SET NAMES 'utf8' "); 
?>