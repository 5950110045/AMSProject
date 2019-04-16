<?php
require('../Login/connect.php');

$atc_id = $_REQUEST['atc_id'];

$sql = "Delete from article where atc_id='$atc_id'";

//excute sql
if($con->query($sql)){
	echo "RECORD UPDATE";
}else{
	echo "ERROR :",mysqli_error();
}
header( "location:../admin/save_list.php");
?>