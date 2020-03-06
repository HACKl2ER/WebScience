<?php session_start();  
include('condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
  $tTitle = $_SESSION['tTitle'];
  $tName = $_SESSION['tName'];
  $tPosition = $_SESSION['tPosition'];
  $tTelephoneNumber = $_SESSION['tTelephoneNumber'];
  $tFacebook = $_SESSION['tFacebook'];
  $tIDLine = $_SESSION['tIDLine'];
  $tResearch = $_SESSION['tResearch'];
 	if($level!='member'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="logout.php">
	<h1>ผู้ใช้ทั่วไป</h1>
	<h3> สวัสดี คุณ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h3>
	<input type="submit" value="ออกจากระบบ">
	</form>
</body>
</html>