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

<body class="    pace-done" style=""><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
    <form action="#" method="post" name="add" class="form-horizontal" id="add">
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
                        <a href="?id=<?php echo $username ?>" ><i class="fa fa-edit fa-fw"></i>ข้อมูลส่วนตัว</a>
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
                                
                            <div class="row"  enctype="multipart/form-data" >
                                <div class="col-lg-6">
                                    <form role="form">
                                        
                                    <hr>
                                        <b>คำนำหน้า</b> : <?php echo $row['title']; ?><br>
                                           
                                        <hr>
                                        <b>ชื่อ นามสกุล</b> : <?php echo $row['name']; ?><br>
                                        
                                        <hr>
                                        <b>รหัสนักศึกษา</b> : <?php echo $row['IdStudent']; ?><br>
                                        
                                        <hr>
                                        <b> ชั้นปีที่</b> :  <?php echo $row['Class']; ?><br>

                                        <hr>
                                        <b> เบอร์โทร</b> :  <?php echo $row['phone']; ?><br>
                                
                                        <hr>
                                        <b>Facebook</b> :   <?php echo $row['Facebook']; ?><br>
                                        
                                        <hr>
                                        <b>IDline</b> : <?php echo $row['IdLine']; ?><br>
                                        
                                        <hr>
                                        <b>รหัสผ่าน</b> :  <?php echo $row['Password']; ?><br>
                                        <hr>
                                        <b>Username</b> :   <?php echo $row['Username']; ?><br> 
                                        <hr>
                                        <b>จบจากโรงเรียน</b> :  <?php echo $rows['NameSchool']; ?><br>
                                        <hr>
                                        <b>ที่อยู่โรงเรียน</b> :  <?php echo $rows['AdressSchool']; ?><br>
                                        <hr>
                                        <b>เบอร์โทรโรงเรียน</b> :  <?php echo $rows['phoneSchool']; ?><br>
                                        <hr>
                                        <b>ที่อยู่ปัจจุบัน</b> :  <?php echo $row['address']; ?><br>
                                        <hr>
                                        <b>เกรดเฉลี่ย</b> :  <?php echo $row['grade']; ?><br>
                                     
                                </div>
                                <div class="user-info" >
                                <center>  <img src="assets/img/<?php echo $row['img'];?>" width="300"  height="300"  ></center>                                   
                                       
                                        <font size='5' >
                                       <br/><b> <?php  echo $row['title']; ?>
                                         <?php echo $row['name']; ?><br/> 
                                         </font>
                                        </div>
                       
                       
                            </div>
                        
                        
                        </div>
                
                    </div>
                    </form>
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