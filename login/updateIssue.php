<?php
    require "condb.php";
    $Name = $_POST['Name'];
    $Report = $_POST['report'];
    
  $sql ="INSERT INTO report(Name, Report) VALUES('$Name','$Report')";
  if (mysqli_query($con, $sql)){
    echo"<body onload=\"window.alert('ระบบได้แก้ไขข้อมูลให้แล้วค่ะ'); return history.back();\">";
}
else{
    echo mysqli_error($con);
}
 
?>