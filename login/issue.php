<?php
require 'condb.php';
$username = $_GET['id'];
$sql="SELECT * FROM student WHERE Username='$username'";
$re = mysqli_query($con,$sql)or die("Error: " . mysqli_error($con));
$row = mysqli_fetch_array($re);


$sql="SELECT * FROM report";
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
    <form action="updateIssue.php" method="post" name="add" class="form-horizontal" id="add">
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
                                
                            <div class="row"  enctype="multipart/form-data" >
                                <div class="col-lg-6">
                                    <form role="form">
                                
                                        
                                        <div class="col-sm-6" >
                                        <hr>
                                            <label>ชื่อ-นามสกุล</label>
                                            <input type="text" class="form-control" name="Name" value="<?php  $rows['Name']; ?>" > <br>
                                            
                                        </div>
                                        
                                        <div class="col-sm-12" >
                                        <hr>
                                            <label>รายงานปัญหา</label>
                                            <input type="text" class="form-control" name="report" value="<?php  $rows['Report']; ?>" > <br>
                                            
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