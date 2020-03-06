<?php
require 'condb.php';
$username = $_GET['id'];
$sql="SELECT * FROM teacher WHERE Username='$username'";
$re = mysqli_query($con,$sql)or die("Error: " . mysqli_error($con));
$row = mysqli_fetch_array($re);
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
<form action="updateTeacher.php" method="post" name="add" class="form-horizontal" id="add" enctype="multipart/form-data">
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
                        <a href="homeeditteacher.php?id=<?php echo $username ?>"><i class="fa fa-edit fa-fw"></i>ข้อมูลส่วนตัว</a>
                    </li>
                    <li class="selected">
                        <a href="formteacher.php?id=<?php echo $username ?>"><i class="fa fa-edit fa-fw"></i>แก้ไข</a>
                    </li>

                  
                   
                    <p class=”text-info”>
                    
                </ul>
                <!-- end side-menu -->
            </div>
            
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
                                    
                                            
                                        <div class="col-sm-12" >
                                            <hr>
                                            <label>คำนำหน้า</label>
                                            <br />
                                            <input type="radio"  name="Title" value="นาย" <?php if($row['Title']=='นาย'){
                                                echo 'checked="checked"';   
                                            }?>>นาย  <br />
                                            <input type="radio"  name="Title" value="นาง" <?php if($row['Title']=='นาง'){
                                                echo 'checked="checked"';   
                                            }?>>นาง <br />
                                            <input type="radio"  name="Title" value="นางสาว" <?php if($row['Title']=='นางสาว'){
                                                echo 'checked="checked"';   
                                            }?>>นางสาว <br />
                                            <input type="radio"  name="Title" value="ดร." <?php if($row['Title']=='ดร.'){
                                                echo 'checked="checked"';   
                                            }?>>ดร.
                                            </div>

                                                
                                                <div class="col-sm-8" >
                                                <hr>
                                                    <label>ชื่อ-นามสกุล</label>
                                                    <input class="form-control" type="text" name="tName_Surname" value="<?php echo $row['Name_Surname']; ?>" >
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                <hr>
                                                    <label>ตำแหน่งบริหาร</label>
                                                    <input class="form-control"type="text" name="tjobposition" value="<?php echo $row['jobposition']; ?>" >
                                                </div>

                                                <div class="col-sm-6">
                                                <hr>
                                                    <label>idTeacher</label>
                                                    <input class="form-control"type="text" name="tidTeacher" value="<?php echo $row['idTeacher']; ?>" >
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                <hr>
                                                    <label>เบอร์โทร</label>
                                                    <input class="form-control" type="text" name="tphone"  value="<?php echo $row['phone']; ?>" >
                                                </div>

                                                <div class="col-sm-6">
                                                <hr>
                                                    <label>Facebook</label>
                                                    <input class="form-control" type="text" name="tFacebook" value="<?php echo $row['Facebook']; ?>">
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                <hr>
                                                    <label>IDline</label>
                                                    <input class="form-control" type="text" name="tIdLine" value="<?php echo $row['IdLine']; ?>">
                                                </div>
                                                
                                                
                                                <div class="col-sm-8">
                                                <hr>
                                                    <label>อีเมล</label>
                                                    <input class="form-control" type="text" name="tUsername" value="<?php echo $row['Username']; ?>"> 
                                                </div>
                                                
                                                <div class="col-sm-4">
                                                <hr>
                                                    <label>รหัสผ่าน</label>
                                                    <input class="form-control" type="text" name="tPassword" value="<?php echo $row['Password']; ?>">
                                                </div>
                                                
                                                
                                                
                                </div>

                                <div class="user-info" >
                                        <center><img src="assets/img/<?php echo $row['img'];?>" width="300"  height="300"  ></center>                                     
                                        
                                        <font size='5' >
                                       <br/><b> <?php  echo $row['Title']; ?>
                                         <?php echo $row['Name_Surname']; ?><br/> 
                                         </font>
                                        <div class="col-sm-12">
                                        <hr>
                                                <br/><label>อัพโหลดภาพ</label>
                                                <input type="file" name="img" value=" ">
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