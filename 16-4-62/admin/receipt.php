<?php session_start();?>
<?php
if (!$_SESSION["UserID"]){  //check session
 
	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
 
}else{?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
<!--<link href="../css/fonts.css" rel="stylesheet" type="text/css" media="all" />-->

<script type="text/javascript" src="../js/jquery-2.0.2.js" ></script>
<script type="text/javascript" src="../js/insertitemvalidation.js" ></script>
<script type="text/javascript" src="../js/unitvalidation.js" ></script>
<script type="text/javascript" src="../js/typevalidation.js" ></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td,th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
th {
  background-color: #4CAF50;
}
body{
	background:#dddddd;
}
</style>
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
				<li><a href='../admin/list_request.php' accesskey='2' title=''>รายการขอเบิกพัสดุ<br><span class='enrightlink'>Request Article List</span></a></li>
				<li><a href='../admin/save_type.php' accesskey='31' title=''>บันทึกประเภทพัสดุ<br><span class='enrightlink'>Save Article Type</span></a></li>
				<li><a href='../admin/save_list.php' accesskey='32' title=''>บันทึก/แก้ไขรายการพัสดุ<br><span class='enrightlink'>Save Article List</span></a></li>
				<li class="current_page_item"><a href='../admin/receipt.php' accesskey='33' title=''>ตรวจนับรายการพัสดุ<br><span class='enrightlink'>Check Article </span></a></li>
		
				<li><a href='../admin/save_unit.php' accesskey='34' title=''>บันทึกหน่วยนับพัสดุ<br><span class='enrightlink'>Save Article Unit</span></a></li>
						<li><a href='../admin/mreport_article.php' accesskey='41' title=''>รายงานพัสดุประจำเดือน<br><span class='enrightlink'>Monthly Article Report</span></a></li>
						<li><a href='../admin/yreport_article.php' accesskey='42' title=''>รายงานพัสดุประจำปี<br><span class='enrightlink'>Annual Article Report</span></a></li>
				<li><a href='../admin/member_manage.php' accesskey='43' title=''>จัดการข้อมูลสมาชิก<br><span class='enrightlink'>Member Management</span></a></li>
				<li><a href="../Login/logout.php"  onclick="return confirm('ยืนยันการออกจากระบบ')" accesskey="5" title="">ออกจากระบบ<br><span class="enrightlink">Log out</span></a></li>
				
			</ul>
		</div>
		
		
	</div>

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

<span style="font-size:11pt; font-weight:bold;">ตรวจสอบบันทึกรายการพัสดุ (Check  Article List)</span><br><br>
	<table style="width:100%; border: 1px solid #eeeeee; ">
		<tr><td>
			
		<fieldset style="border: 1px dotted #aaaaaa; padding-left:5px; padding-bottom:10px;padding-right:5px;">
		<p><span class="header"></span></p>
		<fieldset><br>
		 <legend>ตรวจรับพัสดุ</legend>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">นำเข้ารายการพัสดุ</button><br><br>
		 
		 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		 <div class="modal-dialog" role="document">
			 <div class="modal-content">
				 <div class="modal-header">
					 <h5 class="modal-title" id="exampleModalLabel">นำเข้าพัสดุจากใบจัดซื้อ</h5>
					 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						 <span aria-hidden="true">&times;</span>
					 </button>
				 </div>
				 <div class="modal-body">
					 <form action="../admin/receipt_atc.php" method="POST">
						 <div class="form-group">
							 <label for="receipt_id" class="col-form-label">รหัสใบจัดซื้อ :</label>
							 <textarea class="form-control" name="receipt_id" id="receipt_id"></textarea>
						 </div>
						 <div class="form-group">
							 <label for="atc_id" class="col-form-label">รหัสพัสดุ<br> หมายเหตุ (รหัสพัสดุต้องมีอยุ่ในรายการพัสดุก่อน) :</label>
							 <textarea class="form-control" name="atc_id" id="atc_id"></textarea>
						 </div>
						 <div class="form-group">
							 <label for="amount" class="col-form-label">จำนวนพัสดุที่นำเข้า :</label>
							 <textarea class="form-control" name="amount" id="amount"></textarea>
						 </div>

						 <div class="modal-footer">
					 <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
					 <button type="submit" name="submit" class="btn btn-primary">บันทึก</button>
						</div>
						</div>
					 </form>
				 </div>
			 </div>
		 </div>
		 </fieldset>
	<?php
require('../Login/connect.php');

$query = "SELECT*FROM receipt ";

$result = $con->query($query) or die ("Query Failed");

//ตรวจสอบจำนวนข้อมูล
if($result->rowCount()==0){
	echo "Nothing Display";
}
print "<table border=1 align=center>\n";
echo "<tr><th>รหัสใบจัดซื้อ</th><th>รหัสพัสดุ</th><th>จำนวนพัสดุที่นำเข้า</th><th>วันเวลาที่บันทึก</th><th colspan='2'>เลือกทำงาน</th></tr>";
while($row =$result->fetch(PDO::FETCH_ASSOC)){
	//แสดงข้อมูลในแต่ละแถวของตาราง
	
	echo "<td>",$row['receipt_id'],"</td>\n";
	echo "<td>",$row['atc_id'],"</td>\n";
	echo "<td>",$row['amount'],"</td>\n";
	echo "<td>",$row['receipt_date'],"</td>\n";
	
$receipt_id = $row["receipt_id"];
//สร้าง link ไปยังโปรแกรม php ที่ทำหน้าที่แสดงข้อมูลสำหรับแก้ไขพร้อมส่งข้อมูลรหัสแผนก
echo "<td><a href=\"....php?receipt_id=$receipt_id\">แก้ไข</a></td>\n";
//สร้าง link ไปยังโปรแกรม php ที่ทำหน้าที่ลบข้อมูลรพร้อมส่งรหัสแผนกหัสแผนก
echo "<td><a href=\"...php?receipt_id=$receipt_id\" onclick=\"return confirm('Are u sure?')\">ลบ</a></td>\n";
echo "\t</tr>\n";
}
echo "</table><br>";
//แสดงจำนวนข้อมูลที่ดึงมาได้

echo "จำนวนข้อมูลทั้งหมด  :",$result->rowCount(),"รายการ<br>";
/*date_default_timezone_set('Asia/Bangkok');
$dat =date("d/m/y");
$da =date('Y-m-d H:i:s');
echo $da;*/
//จบการติดต่อกับฐานข้อมูล
$con=null;

?>
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