<?php
$host ="localhost";
$user = "root";
$password ="";
$dbname ="article";
$CHAR_SET = "charset=utf8";

try {
	
		$con = new PDO('mysql:host='.$host.';dbname='.$dbname.';'.$CHAR_SET,$user,$password);
	
		//echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
	
	
	} catch (PDOException $e) {
	
		echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้ : ".$e->getMessage();
	
	}



?>