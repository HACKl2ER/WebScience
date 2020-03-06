<?php $student_level = $_GET['level']; ?>
 <style>
 #img_container img{
  height: 220px;
  margin: auto auto;
  display: block;
}
</style>

			<div class="container">
				<div class="row text-center">
					<h3 class="section-sub-title">ชั้นปีที่ <?php echo 543+2020-(2500+$student_level)?></h3>
				</div>
 
 
	<div class="container">
		<div class="boxed boxedp4">
			<div class="row blog-grid">
				<?php


					include('conn.php');

					$sql = "SELECT * FROM `student` WHERE `IdStudent` LIKE '$student_level%'";
					$result = $conn->query($sql);
					$identity = 0;

					if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
					$identity = $identity + 1;
				?>

				<?php $str = $row["IdStudent"]; ?>
				<div class="col-md-4">
					<div class="course-box">
						<div class="">
							<img width="300px" height="240px" src="img/cs<?php echo $student_level; ?>/<?php echo $row["IdStudent"]; ?>.jpg" onerror="this.oneerror=null ; this.src='img/img_not_found.png'" alt="not found image">
								<div class="magnifier">
									<a href="blog-single.html" title="">
										<i class="flaticon-add"/>
									</a>
								</div>
							</div>
							<!-- end image-wrap -->
							<div class="course-details">
								<h4>
                  <a href="#" data-toggle="modal" data-target="#id0<?php echo $identity; ?>">
                      <strong ><?php echo $row["title"]; echo $row["name"]; ?><br></strong>
                  </a>

                </h4>
                <p><strong>รหัส :</strong> <?php echo $row["IdStudent"]; ?> </p>
                <p><strong>เบอร์โทร : </strong> <?php echo $row["phone"]; ?></p>
                <p><strong>อีเมลล์ : </strong> <?php echo $row["Username"]; ?></p>

                  <!-- Modal -->
                  <div class="modal fade" id="id0<?php echo $identity; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <br>
                        <div id="img_container">
                        <img width="300px" height="220px" src="img/cs<?php echo $student_level; ?>/<?php echo $row["IdStudent"]; ?>.jpg" align-item="centered" onerror="this.oneerror=null ; this.src='img/img_not_found.png'" alt="not found image">
                        </div>

                        <div class="modal-body">

                          <p><strong>ชื่อ :</strong> <?php echo $row["name"]; ?> </p>
                          <p><strong>รหัส : </strong> <?php echo $row["IdStudent"]; ?></p>
                          <p><strong>เบอร์โทร :</strong> <?php echo $row["phone"]; ?> </p>
                          <p><strong>ID Line : </strong> <?php echo $row["IdLine"]; ?></p>
                          <p><strong>Grade : </strong> <?php echo $row["grade"]; ?></p>
                          <p><strong>Facebook : </strong> <?php echo $row["Facebook"]; ?></p>
                          <p><strong>Address : </strong> <?php echo $row["address"]; ?></p>
                          <p><strong>Email : </strong> <?php echo $row["username"]; ?></p>
                          <p><strong>จบจาก</strong>-</p>
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

						<!-- end box -->

						<!-- end col -->
					</div>
				</div>

			</div>
		</section>
    <!-- Button trigger modal -->
