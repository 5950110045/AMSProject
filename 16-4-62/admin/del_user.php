<?php
require('../Login/connect.php');

$mem_id = $_REQUEST['mem_id'];

$sql = "Delete from user where mem_id='$mem_id'";

//excute sql
if($con->query($sql)){
	echo "RECORD UPDATE";
}else{
	echo "ERROR :",mysqli_error();
}
header( "location:../admin/member_manage.php");
?>