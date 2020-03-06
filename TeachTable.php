<?php $teacher_level = $_GET['level']; ?>
<?php
  include('conn.php');
  $sql = "SELECT * FROM `teacher` WHERE `idTeacher` LIKE 'cs00$teacher_level%'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

?>
<?php echo $_GET['teacher']; ?>

        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-9">
          <div id="c5" class="csc-frame csc-frame-default">

<div id="c5" class="frame frame-default frame-type-header frame-layout-0"><header><h2 class="">
    <br>
        ตารางสอน <?php echo $row["Title"]; echo $row["Name_Surname"]; ?>
        </h2></header></div><div id="c1679" class="csc-frame csc-frame-default">
<div id="c1679" class="frame frame-default frame-type-shortcut frame-layout-0"><div id="c1636" class="csc-frame csc-frame-default"><div id="c1636" class="frame frame-default frame-type-html frame-layout-0">
</div>
</div>
</div>
<br>
      <img src="ตารางสอนอาจารย์\<?php echo $row["Name_Surname"]; ?>1.png" width="800" height="601" alt="" class="img-responsive">
      <br>

			</div>


</div>

	<?php
							}
						} else {
							echo "0 results";
						}
						$conn->close();

						?>


<div id="c2200" class="csc-frame csc-frame-default">
<div id="c2200" class="frame frame-default frame-type-html frame-layout-0"><style>
.message-item {
margin-bottom: 25px;
margin-left: 40px;
position: relative;
}
.message-item .message-inner {
background: #fff;
border: 1px solid #ddd;
border-radius: 3px;
padding: 10px;
position: relative;
}
.message-item .message-inner:before {
border-right: 10px solid #ddd;
border-style: solid;
border-width: 10px;
color: rgba(0,0,0,0);
content: "";
display: block;
height: 0;
position: absolute;
left: -20px;
top: 6px;
width: 0;
}
.message-item .message-inner:after {
border-right: 10px solid #fff;
border-style: solid;
border-width: 10px;
color: rgba(0,0,0,0);
content: "";
display: block;
height: 0;
position: absolute;
left: -18px;
top: 6px;
width: 0;
}
.message-item:before {
background: #fff;
border-radius: 2px;
bottom: -30px;
box-shadow: 0 0 3px rgba(0,0,0,0.2);
content: "";
height: 100%;
left: -30px;
position: absolute;
width: 3px;
}
.message-item:after {
background: #fff;
border: 2px solid #ccc;
border-radius: 50%;
box-shadow: 0 0 5px rgba(0,0,0,0.1);
content: "";
height: 15px;
left: -36px;
position: absolute;
top: 10px;
width: 15px;
}
.clearfix:before, .clearfix:after {
content: " ";
display: table;
}
.message-item .message-head {
border-bottom: 1px solid #eee;
margin-bottom: 8px;
padding-bottom: 8px;
}
.message-item .message-head .avatar {
margin-right: 20px;
}
.message-item .message-head .user-detail {
overflow: hidden;
}
.message-item .message-head .user-detail h5 {
font-size: 16px;
font-weight: bold;
margin: 0;
}
.message-item .message-head .post-meta {
float: left;
padding: 0 15px 0 0;
}
.message-item .message-head .post-meta >div {
color: #333;
font-weight: bold;
text-align: right;
}
.post-meta > div {
color: #777;
font-size: 12px;
line-height: 22px;
}
.message-item .message-head .post-meta >div {
color: #333;
font-weight: bold;
text-align: right;
}
.post-meta > div {
color: #777;
font-size: 12px;
line-height: 22px;
}

</style><div class=""><div class=""><div class=""><div class=""><h5></h5>



           </div></div></div></div></div>

</div>
        </div> <!-- /.maincontent -->
        <div class="col-md-3 col-lg-3">
               
                <div class="sidebar-offcanvas" id="sidebar" role="navigation">
    <div class="list-group">
        <a class="list-group-item active">SSKRU LINK</a>
        <a href="http://www.sskru.ac.th/2017/" class="list-group-item">เว็บมหาลัย</a>
        <a href="http://www.elearning.sskru.ac.th/moodle/" class="list-group-item">E-LEARNING SSKRU</a>
        <a href="https://www.facebook.com/comsci.sskru/" class="list-group-item " >ข่าวสาร</a>
        <a href="http://127.0.0.1/CS60/project.php" class="list-group-item">วิจัย</a>
        <a href="https://www.facebook.com/comsci.sskru/" class="list-group-item">ภาพกิจกรรม</a>
        <a href="http://lib.sskru.ac.th/libsskru/service" class="list-group-item">เว็บไซต์ห้องสมุด</a>
        <a href="https://registable.sskru.ac.th/cv/" class="list-group-item">สมัครเรียนออลไลน์</a>
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSfg80IYFq8ATWa1WCJjFbSYi0iWc5qUaTWSFtuli718W6mK7w/viewform?embedded=true&amp;formkey=dG81aEhjc3BTcS14T2Q5YWdHUlpIZGc6MQ" class="list-group-item">สายตรงอธิการบดี</a>
        <a href="https://www.facebook.com/comsci.sskru/" class="list-group-item">ติดต่อสอบถาม</a>
    </div>
</div><!--/span-->
<div class="footer-social text-center">
								<ul>
									<li><a href="https://www.facebook.com/sskruthailand/"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/sskruthailand"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/sskru.thailand/"><i class="fa fa-instagram"></i></a></li>
									<li><a href="https://github.com/HACKl2ER/Website.git"><i class="fa fa-github"></i></a></li>
								</ul>
							</div>
                        </div>
        <!-- /.container -->
  </section>
