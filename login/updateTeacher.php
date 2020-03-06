<?php
    require "condb.php";
    $idTeacher = $_POST['tidTeacher'];
    $Title =$_POST['Title'];
    $Name_Surname =$_POST['tName_Surname'];
    $jobposition =$_POST['tjobposition'];
    $phone =$_POST['tphone'];
    $Facebook =$_POST['tFacebook'];
    $IdLine =$_POST['tIdLine'];
    $Username =$_POST['tUsername'];
    $Password =$_POST['tPassword'];

    $nameImage=$_FILES['img']['name'];
    $image_path ="assets/img/";
    $e=move_uploaded_file($_FILES["img"]["tmp_name"],$image_path.$_FILES["img"]["name"]);
    $image=$nameImage;

  

    if($image==''){
      $sql="SELECT * FROM teacher WHERE idTeacher='$idTeacher'";
      $re = mysqli_query($con,$sql)or die("Error: " . mysqli_error($con));
      $row = mysqli_fetch_array($re);
      $image=$row['img'];
    }
  

    $edit_teacher ="UPDATE teacher SET
    idTeacher='$idTeacher',
    Title='$Title',
    Name_Surname='$Name_Surname',
    jobposition='$jobposition',
    phone='$phone',
    Facebook='$Facebook',
    IdLine='$IdLine',
    Username='$Username',
    Password='$Password',
    img='$image'
    where idTeacher='$idTeacher'
    ";
  if (mysqli_query($con, $edit_teacher)){
    echo"<body onload=\"window.alert('ระบบได้แก้ไขข้อมูลให้แล้วค่ะ'); return history.back();\">";
}
else{
    echo mysqli_error($con);
}


 
?>