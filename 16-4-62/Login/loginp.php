<?php 
session_start();
        if(isset($_POST['Username'])){
				//connection
                  include("connect.php");
				//รับค่า user & password
                  $Username = $_POST['Username'];
                  $Password = md5($_POST['Password']);
				//query 
                  $sql="SELECT * FROM user Where Username=:bp_user and Password=:bp_passwd ";
                  $stmt = $con->prepare($sql);
				  $stmt->bindParam(':bp_user',$Username);
				  $stmt->bindParam(':bp_passwd',$Password);
                  $result = $con->query($sql);
				
                  if($result->rowCount()==1){

                      $row = $result->fetch(PDO::FETCH_ASSOC);

                      $_SESSION["UserID"] = $row["ID"];
                      $_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
                      $_SESSION["Userlevel"] = $row["Userlevel"];

                      if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: ../admin/list_inventory.php");

                      }

                      if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: ../staff/list_inventory.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: login.php"); //user & password incorrect back to login again

        }

		
		
		/*session_start();
if(isset($_SESSION['user'])){
header("location: ../admin/list_inventory.php");
}
require "connect.php";

if(isset($_POST['Username'])){
$Username = $_POST['Username'];
$password = md5($_POST['Password']);
$messeg = "";

if(empty($Username) || empty($Password)) {
    $messeg = "Username/Password con't be empty";
} else {
    $sql = "SELECT * FROM user Where Username=:bp_Username and Password=bp_Password";
    $query = $con->prepare($sql);
	$query->bindParam(':bp_Username',$Username);
	$query->bindParam(':bp_Password',$Password);
    $query->execute();

    if($query->rowCount() >= 1) {
        $_SESSION["UserID"] = $row["ID"];
        $_SESSION["User"] = $row["Firstname"]." ".$row["Lastname"];
        $_SESSION["Userlevel"] = $row["Userlevel"];
        //$_SESSION['time_start_login'] = time();
        //header("location: general message.php");
    } if($_SESSION["Userlevel"]=="A"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                        Header("Location: ../admin/list_inventory.php");

                      }

                      if ($_SESSION["Userlevel"]=="M"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                        Header("Location: ../staff/list_inventory.html");

                      }
	else {
        $messeg = "Username/Password is wrong";
    }
}
}else{
	Header("Location: login.php"); 
}*/
?>