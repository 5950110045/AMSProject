<?php session_start();?>
<?php
if (!$_SESSION["UserID"]){  //check session
 
	  Header("Location: ../Login/login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
 
}else{?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="../js/jquery-2.0.2.js" ></script>
<script type="text/javascript" src="../js/insertitemvalidation.js" ></script>
<script type="text/javascript" src="../js/unitvalidation.js" ></script>
<script type="text/javascript" src="../js/typevalidation.js" ></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div  class="container">
	<div id="header">
		<div id="logo">
			<img src="../img/logo.png" alt="" style="width:140px" /><br>
			<a href="#" style="font-size:12pt">ระบบจัดการพัสดุ</a><br>
			<span><a href="#" rel="nofollow" style="font-size:10pt">Article Management System</a></span>
		</div>
		<div id="menu">
			<ul>
				<li><a href='../admin/list_inventory.php' accesskey='1' title=''>รายการพัสดุ<br><span class='enrightlink'> Inventory List</span></a></li>
				<li class="current_page_item"><a href='../admin/list_request.php' accesskey='2' title=''>รายการขอเบิกพัสดุ<br><span class='enrightlink'>Request Article List</span></a></li>
				<li><a href='../admin/save_type.php' accesskey='31' title=''>บันทึกประเภทพัสดุ<br><span class='enrightlink'>Save Article Type</span></a></li>
				<li><a href='../admin/save_list.php' accesskey='32' title=''>บันทึก/แก้ไขรายการพัสดุ<br><span class='enrightlink'>Save Article List</span></a></li>
				<li><a href='../admin/save_unit.php' accesskey='33' title=''>บันทึกหน่วยนับพัสดุ<br><span class='enrightlink'>Save Article Unit</span></a></li>
						<li><a href='../admin/mreport_article.php' accesskey='41' title=''>รายงานพัสดุประจำเดือน<br><span class='enrightlink'>Monthly Article Report</span></a></li>
						<li><a href='../admin/yreport_article.php' accesskey='42' title=''>รายงานพัสดุประจำปี<br><span class='enrightlink'>Annual Article Report</span></a></li>
				<li><a href='../admin/member_manage.php' accesskey='43' title=''>จัดการข้อมูลสมาชิก<br><span class='enrightlink'>Member Management</span></a></li>
				<li><a href="../Login/logout.php"  onclick="return confirm('ยืนยันการออกจากระบบ')" accesskey="5" title="">ออกจากระบบ<br><span class="enrightlink">Log out</span></a></li>
				
			</ul>
		</div>
		
		
	</div>
<style>

</style>
<div style='background-color:#2980b9;text-align:right; padding-right:10px; font-color:#ffffff; height:25px; font-size:10pt; padding-top:10px;'><span style="color:#ffffff">Welcome คุณ  is </span>  
	<a href="#"><span class="enrightlink">[เจ้าหน้าที่พัสดุ]</span></a>
	<a href="../Login/logout.php"  onclick="return confirm('ยืนยันการออกจากระบบ')"><span class="enrightlink">[Log out]</span></a>
		</div>

<div id="main" style="height:100%">

		<div id="banner" style="background:url('https://eds.trang.psu.ac.th/mis/supply/stock/images/bktitle.jpg') right; height:90px">
			<div class="title" style="padding-top:25px">
				<h2>ระบบจัดการพัสดุ</h2>
				<span class="byline">Article Management System</span>
			</div>
		</div>
		
<div class="featured" ><div >

<span style="font-size:11pt; font-weight:bold;">รายการขอเบิกพัสดุ ( Request Article List)</span><br><br>
	<table style="width:100%; border: 1px solid #eeeeee; ">
		<tr><td>
			
		<fieldset style="border: 1px dotted #aaaaaa; padding-left:5px; padding-bottom:10px;padding-right:5px;">
		<p><span class="header"></span></p>
        
                </table>
			</fieldset>
		</td></tr>
	</table>
</div></div>
	<div id="copyright">
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<span>Copyright (c) 2019 Apiwat Kongsap
		</div>
	</div>
</div>
</body>
</html>
<?php }?>