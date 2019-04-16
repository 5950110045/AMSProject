<?php
	require('../Login/connect.php');
	$receipt_id  =$_POST["receipt_id"];
    $atc_id=$_POST["atc_id"];
	$amount =$_POST["amount"];
	date_default_timezone_set('Asia/Bangkok');
	$a_date = date('Y-m-d H:i:s');
    $sql="INSERT INTO receipt(receipt_id,atc_id,receipt_date,amount) values('$receipt_id','$atc_id','$a_date','$amount')";


	if ($con->query($sql)) {
		$sql1 ="update article join receipt on article.atc_id = receipt.atc_id set article.atc_all = article.atc_all + receipt.amount where receipt.atc_id ='$atc_id'";
		$con->query($sql1);
	echo "$sql <br>";
	echo "$sql1 <br>";
	echo "record added!";
}else{
	
	echo "$sql<br>";
	//print_r($this->pdo->errorInfo());
	echo "Error insert record:Failed";
}

    $con=null;
	
	header( "location:../admin/receipt.php");
	?>