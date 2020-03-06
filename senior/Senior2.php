<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Computer Science</title>

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


	<!-- CSS
	================================================== -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="css/colorbox.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

	<div class="body-inner">

		<div id="top-bar" class="top-bar">
			<div class="container">
				<div class="row">
					<!--/ Top info end -->

					<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12 top-social text-right">
						<ul class="unstyled">
							<li>
                            <a title="Facebook" href="https://www.facebook.com/sskruthailand/">
									<span class="social-icon"><i class="fa fa-facebook"></i></span>
								</a>
								<a title="Twitter" href="https://twitter.com/sskruthailand">
									<span class="social-icon"><i class="fa fa-twitter"></i></span>
								</a>
								<a title="Instagram" href="https://www.instagram.com/sskru.thailand/">
									<span class="social-icon"><i class="fa fa-instagram"></i></span>
								</a>
								<a title="Linkdin" href="https://github.com/HACKl2ER/WebScience.git">
									<span class="social-icon"><i class="fa fa-github"></i></span>
								</a>
							</li>
						</ul>
					</div>
					<!--/ Top social end -->
				</div>
				<!--/ Content row end -->
			</div>
			<!--/ Container end -->
		</div>
		<!--/ Topbar end -->

		<!-- Header start -->
		<header id="header" class="header-one">
			<div class="container">
				<div class="row">
					<div class="logo-area clearfix">
						<div class="logo col-xs-12 col-md-3">
							<a href="index.html">
								<img src="images/logo1.png" alt="" >
							</a>
						</div><!-- logo end -->

					</div><!-- logo area end -->

				</div><!-- Row end -->
			</div><!-- Container end -->

			<nav class="site-navigation navigation navdown">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="site-nav-inner pull-left">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="collapse navbar-collapse navbar-responsive-collapse">
								
									<ul class="nav navbar-nav">
										<li class="dropdown">
											<a href="http://localhost/WebScience">กลับหน้าหลัก</a>
					
										</li>
										
										<li><a href="http://localhost/WebScience/senior/Senior1.php" >รีเฟรช</a></li>
									</ul>
									<!--/ Nav ul end -->
								</div>
								<!--/ Collapse end -->
							</div><!-- Site Navbar inner end -->
						</div>
						<!--/ Col end -->
					</div>
					<!--/ Row end -->
				

							</div>
				<!--/ Container end -->
			</nav>
			<!--/ Navigation end -->
		</header>
 <?php

  	include('conn.php');

  	$year_search = $_POST['year_search'];
  	$pro_search = $_POST['pro_search'];
  		$p = '%'.$pro_search.'%';
  		$y = '%'.$year_search.'%';
  		$sql = "SELECT * FROM `senior_student`";
  			$sql.=" WHERE `YearEnd` LIKE '$y'";


  		$result = $conn->query($sql);
  	$identity = 0;

  ?>


  		<style>
  		table,th,td {
        text-align: center;
  			border: 1px solid black;
  			border-collapse: collapse;
  		}
  		</style>
  	</head>


  				<h2 align='center'>&emsp;ค้นหาข้อมูลนักศึกษา</h2>
  				<form align='center' action="senior1.php" method="post">
  				<label >&emsp;ค้นชื่อนักศึกษา: </label><input type="text" size="40px" name="pro_search" />
  				<input name="submit" type="submit" id="submit" value="ค้นข้อมูล"><br><br>
  			</form>
  			<form align='center' action="senior2.php" method="post">
  			<label>&emsp;ค้นปีที่จบ:&emsp;&emsp;&ensp;</label><input type="text" size="40px" name="year_search" />
  			<input name="submit" type="submit" id="submit" value="ค้นหา">
  				</form>
  				<br>
  				<table align='center' style="width: 500px;">
  					<tr>
  						<th>คำนำหน้าชื่อ</th>
  						<th>ชื่อ - สกุล</th>
  						<th>เบอร์โทรศัพท์</th>
  						<th >ปีที่จบ</th>
  					</tr>
  					<?php
  					if ($result->num_rows > 0) {
  					while($row = $result->fetch_assoc()) {
  					$identity = $identity + 1;
  					?>
  					<tr>
  						<td><?php echo $row['title']; ?></td>
  						<td>  <a href="#" data-toggle="modal" data-target="#id0<?php echo $identity; ?>">
  								<?php echo $row["name"]; ?>
  							</a></td>
  						<td><?php echo ($row['phone']); ?></td>
  						<td><?php echo ($row['YearEnd']); ?></td>
  					</tr>


            					<!-- Modal -->
            					<div class="modal fade" id="id0<?php echo $identity; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            						<div class="modal-dialog" role="document">
            							<div class="modal-content">
            								<br>
            								<!--<div id="img_container">
            								<img width="300px" height="220px" src="img/cs<?php echo $student_level; ?>/<?php echo $row["IdStudent"]; ?>.jpg" align-item="centered" onerror="this.oneerror=null ; this.src='img/img_not_found.png'" alt="not found image">
                          </div>-->

            								<div align="left" class="modal-body">

            									<p><strong>ชื่อ :</strong> <?php echo $row["name"]; ?> </p>
            									<p><strong>รหัส : </strong> <?php echo $row["IdStudent"]; ?></p>
            									<p><strong>เบอร์โทร :</strong> <?php echo $row["phone"]; ?> </p>
            									<p><strong>ID Line : </strong> <?php echo $row["IdLine"]; ?></p>
            									<p><strong>Facebook : </strong> <?php echo $row["Facebook"]; ?></p>
                              <p><strong>Work : </strong> <?php echo $row["work"]; ?></p>
                              <p><strong>CompanyName : </strong> <?php echo $row["CompanyName"]; ?></p>
            									<p><strong>Position : </strong> <?php echo $row["Position"]; ?></p>

            								</div>
            								<div class="modal-footer">
            									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            								</div>
            							</div>
            						</div>
            					</div>

            			</div>
            			<!-- end details -->

            			<div class="course-footer clearfix">
            			</div>
            			<!-- end footer -->
            		</div>
            	</div>



  														<?php
  														            }
  														          } else {
  														            echo "0 results";
  														          }
  														          $conn->close();
  														          ?>

  				</table>
<br><br>

<!-- initialize jQuery Library -->
<script type="text/javascript" src="js/jquery.js"></script>
<!-- Bootstrap jQuery -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<!-- Color box -->
<script type="text/javascript" src="js/jquery.colorbox.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/ini.isotope.js"></script>
<!-- Google Map API Key-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<!-- Google Map Plugin-->
<script type="text/javascript" src="js/gmap3.js"></script>
<!-- Template custom -->
<script type="text/javascript" src="js/custom.js"></script>

  