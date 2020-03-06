<?php
require 'condb.php';
$username = $_GET['id'];
$sql="SELECT * FROM student WHERE Username='$username'";
$re = mysqli_query($con,$sql)or die("Error: " . mysqli_error($con));
$row = mysqli_fetch_array($re);
$idschool=$row['idschool'];
$sql="SELECT * FROM school WHERE idschool='$idschool'";
$re = mysqli_query($con,$sql)or die("Error: " . mysqli_error($con));
$rows = mysqli_fetch_array($re);

$sql="SELECT * FROM school ";
$res = mysqli_query($con,$sql)or die("Error: " . mysqli_error($con));

?>
<?php
    $username =$_GET['id'];
?>

<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMPUTER SCIENCE SSKRU</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet">
   <link href="assets/css/style.css" rel="stylesheet">
      <link href="assets/css/main-style.css" rel="stylesheet">



</head>

<body class=" pace-done" style=""><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
    <form action="updateStudent.php" method="post" name="add" class="form-horizontal" id="add" enctype="multipart/form-data">
    <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
        <left><img src="assets/img/user8.png "  width="250"  height="60"  ></left>
            <!-- navbar-header -->
        
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown open">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" >
                        <i class="fa fa-user fa-3x" ></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="logout.php" class="list-grop-item list-grop-item action onclick=" return></i>ออกจากระบบ</a>
                        
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section" align = 'center' >
                            
                            <div class="user-info">
                                     
                                     <center><img src="assets/img/user10.png"  width="150"  height="140"  ></center>
                                     
                                
                                
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    
                    <li class="selected">
                        <a href="homeeditstudent.php?id=<?php echo $username ?>" ><i class="fa fa-edit fa-fw"></i>ข้อมูลส่วนตัว</a>
                    </li>

                    <li class="selected">
                        <a href="edit.php?id=<?php echo $username ?>"><i class="fa fa-edit fa-fw"></i>แก้ไข</a>
                    </li>

                    <li class="selected">
                        <a href="issue.php?id=<?php echo $username ?>"><i class="fa fa-edit fa-fw"></i>รายงานปัญหา</a>
                    </li>
                   
                    <p class=”text-info”>
                    
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header" align = 'center' > แก้ไขข้อมูลส่วนตัว</h1> 
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading" >
                            
                        </div>
                        <div class="panel-body" >
                                
                            
                                <div class="col-lg-6">
                                
                                <div class="col-sm-12" >
                                    <hr>
                                    <label>คำนำหน้า</label>
                                    <br />
                                    <input type="radio"  name="stitle" value="นาย" <?php if($row['title']=='นาย'){
                                        echo 'checked="checked"';   
                                    }?>>นาย  <br />
                                    <input type="radio"  name="stitle" value="นาง" <?php if($row['title']=='นาง'){
                                        echo 'checked="checked"';   
                                    }?>>นาง <br />
                                    <input type="radio"  name="stitle" value="นางสาว" <?php if($row['title']=='นางสาว'){
                                        echo 'checked="checked"';   
                                    }?>>นางสาว 
                                    </div>

                                    

                                        <div class="col-sm-12" >
                                        <hr>
                                            <label>ชื่อ-นามสกุล</label>
                                            <input type="text" class="form-control" name="sname" value="<?php echo $row['name']; ?>" >
                                            
                                        </div>
                                        <div class="col-sm-8">
                                        <hr>
                                            <label>รหัสนักศึกษา</label>
                                            <input type="text" class="form-control" name="sIdStudent"  value="<?php echo $row['IdStudent']; ?>"  >
                                        </div>

                                    
                                        <div class="col-sm-4" >
                                        <hr>
                                            <label>ชั้นปีที่</label>
                                            <input type="text" class="form-control" name="sclass"  value="<?php echo $row['Class']; ?>"  >
                                            
                                        </div>
            
                                        <div class="col-sm-5">
                                        <hr>
                                            <label>เบอร์โทร</label>
                                            <input type="text" class="form-control" name="sphone"  value="<?php echo $row['phone']; ?>"  >

                                        </div>
                                        <div class="col-sm-7">
                                        <hr>
                                            <label>Facebook</label>
                                            <input type="text" class="form-control" name="sFacebook" value="<?php echo $row['Facebook']; ?>" >
                                        </div>
                                        
                                        <div class="col-sm-5">
                                        <hr>
                                            <label>ID line</label>
                                            <input type="text" class="form-control" name="sIdLine"  value="<?php echo $row['IdLine']; ?>"  >
                                        </div>

                                        <div class="col-sm-7">
                                        <hr>
                                            <label>ชื่อผู้ใช้</label>
                                            <input type="text" class="form-control" name="sUsername"  value="<?php echo $row['Username']; ?>" >
                                        </div>

                                        <div class="col-sm-6">
                                        <hr>
                                            <label>รหัสผ่าน </label>
                                            <input type="text" class="form-control" name="sPassword"  value="<?php echo $row['Password']; ?>" >
                                        </div>

                                        <div class="col-sm-12">
                                        <hr>
                                            <label>จบจากโรงเรียน</label>
                                            <input type="text" class="form-control" name="sNameSchool" value="<?php echo $rows['NameSchool']; ?>">  
                                        </div>
                                        
                                        <div class="col-sm-12">
                                        <hr>
                                        <select id="cmbMake" name="Make"  class="form-control"  onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
                                        <option value="">เลือกโรงเรียน</option>
                                        <?php
                                        while($s = mysqli_fetch_array($res)) {
                                        ?>
                                        <option value=""><?php echo $s['NameSchool'];?></option>

                                                <?php } ?>
                                        </select>
                                        <input type="hidden" name="selected_school" id="selected_text" value="" />
                                                                </div>

                                        <div class="col-sm-12">
                                        <hr>
                                            <label>เบอร์โทรโรงเรียน</label> 
                                            <input type="text" class="form-control" name="sphoneSchool"  value="<?php echo $rows['phoneSchool']; ?>" >
                                        </div>
                                            
                                        <div class="col-sm-12">
                                        <hr>
                                            <label>ที่อยู่ปัจจุบัน</label>
                                            <input type="text" class="form-control" name="saddress"  value="<?php echo $row['address']; ?>" >
                                        </div>

                                        <div class="col-sm-3">
                                        <hr>
                                            <label>เกรดเฉลี่ย</label>
                                            <input type="text" class="form-control" name="sgread"  value="<?php echo $row['grade']; ?>" >
                                        </div>

                                      
                                        
                                </div>
                                <div class="user-info" >
                                        <center><img src="assets/img/<?php echo $row['img'];?>" width="300"  height="300"  ></center>                                     
                                        
                                        <font size='5' >
                                       <br/><b> <?php  echo $row['title']; ?>
                                         <?php echo $row['name']; ?><br/> 
                                         </font>
                                        <div class="col-sm-12">
                                        <hr>
                                                <br/><label>อัพโหลดภาพ</label>
                                                <input type="file" name="img" value="<?php echo $row['img']; ?>" >
                                        </div>
                                        </div>
                       
                            </div>
                        
                        </div>
                
                    </div>
                    <button type="submit" class="btn btn-success" id="btn" action="test.php" >ส่งค่า</button>
                    
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>



</form>
</body></html>