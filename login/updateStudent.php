<?php
    require "condb.php";
    $title =$_POST['stitle'];
    $name =$_POST['sname'];
    $IdStudent =$_POST['sIdStudent'];
    $class =$_POST['sclass'];
    $phone =$_POST['sphone'];
    $Facebook =$_POST['sFacebook'];
    $IdLine =$_POST['sIdLine'];
    $Username =$_POST['sUsername'];
    $Password =$_POST['sPassword'];
    $AdressSchool =$_POST['sAdressSchool'];
    $phoneSchool =$_POST['s	phoneSchool'];
    $address =$_POST['saddress'];
    $gread =$_POST['sgread'];
   

    $nameImage=$_FILES['img']['name'];
    $image_path ="assets/img/";
    $e=move_uploaded_file($_FILES["img"]["tmp_name"],$image_path.$_FILES["img"]["name"]);
    $image=$nameImage;
    echo $image;
    
    $NameSchool=$_POST['selected_school'];

    $Nschool=$NameSchool;
    $sql="SELECT * FROM school WHERE NameSchool='$Nschool'";
    $re = mysqli_query($con,$sql)or die("Error: " . mysqli_error($con));
    $rows = mysqli_fetch_array($re);
    $idschool=$rows['idschool'];

    $edit_student ="UPDATE student SET
    title='$title',
    name='$name',
    IdStudent='$IdStudent',
    Class='$class',
    phone='$phone',
    Facebook='$Facebook',
    IdLine='$IdLine',
    Username='$Username',
    Password='$Password',
    address='$address',
    grade='$gread',
    img='$image',
    idschool='$idschool'
    where IdStudent='$IdStudent'
    ";
    

  if (mysqli_query($con, $edit_student)){
      echo"<body onload=\"window.alert('ระบบได้แก้ไขข้อมูลให้แล้วค่ะ'); return history.back();\">";
  }
  else{
      echo mysqli_error($con);
  }

?>