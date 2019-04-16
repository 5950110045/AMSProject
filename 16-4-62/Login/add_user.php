<?php
	require('../Login/connect.php');
	$mem_id  =$_POST["mem_id"];
    $mem_user=$_POST["user"];
	$mem_pass =$_POST["pass"];
	$mem_name=$_POST["fname"];
	$mem_lastname=$_POST["lname"];
	$mem_tel =$_POST["mem_tel"];
	$usertype =$_POST["usertype"];
    $sql="INSERT INTO user(mem_id,mem_user,mem_pass,mem_name,mem_lastname,usertype,mem_tel) values('$mem_id','$mem_user','$mem_pass','$mem_name','$mem_lastname','$usertype','$mem_tel')";


	if ($con->query($sql)) {
	echo "$sql <br>";
	echo "record added!";
}else{
	
	echo "$sql<br>";
	//print_r($this->pdo->errorInfo());
	echo "Error insert record:Failed";
}

    $con=null;
	
	header( "location:../admin/member_manage.php");
	?>