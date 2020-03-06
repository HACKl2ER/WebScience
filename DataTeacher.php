<style>
 #img_container img{
  height: 220px;
  margin: auto auto;
  display: block;
}
</style>

 <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tagline-message page-title text-center">
                                                <h3>
                                                <font size="10">คณาจารย์</font>
</h3>
                                                <ul class="breadcrumb">
                                                    <li>
                                                        <a href="javascript:void(0)"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>

 <section class="section gb nopadtop">
	<div class="container">
		<div class="boxed boxedp4">
			<div class="row blog-grid">
        <?php
          include('conn.php');
          $sql = "SELECT * FROM `teacher` WHERE `idTeacher` LIKE 'cs00$date_level%'";
          $result = $conn->query($sql);
					$identity = 0;

					if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
					$identity = $identity + 1;
				?>

				<?php $str = $row["idTeacher"]; ?>
				<div class="col-md-4">
					<div class="course-box">
						<div class="">
							<img width="300px" height="240px" src="<?php echo $row['img']; ?>" onerror="this.oneerror=null ; this.src='img/img_not_found.png'" alt="not found image">
								<div class="magnifier">
									<a href="blog-single.html" title="">
										<i class="flaticon-add"/>
									</a>
								</div>
							</div>
							<!-- end image-wrap -->
							<div class="course-details">
								<h4>
                  <a href="#"data-toggle="modal" data-target="#id0<?php echo $identity; ?>">
                      <strong><?php echo $row["Title"]; echo $row["Name_Surname"]; ?><br></strong>
                  </a>

                </h4>
                <p><strong>ตำแหน่งงาน :</strong> <?php echo $row["jobposition"]; ?> </p>
                <p><strong>เบอร์โทร : </strong> <?php echo $row["phone"]; ?></p>

                  <!-- Modal -->
                  <div class="modal fade" id="id0<?php echo $identity; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <br>
                        <div id="img_container">
                        <img width="300px" height="220px" src="<?php echo $row['img'];?>" align-item="centered" onerror="this.oneerror=null ; this.src='img/img_not_found.png'" alt="not found image">
                        </div>

                        <div class="modal-body">

                          <p><strong>ชื่อ :</strong> <?php echo $row["Name_Surname"]; ?> </p>
                          <p><strong>ตำแหน่งงาน :</strong> <?php echo $row["jobposition"]; ?> </p>
                          <p><strong>เบอร์โทร : </strong> <?php echo $row["phone"]; ?></p>
                          <p><strong>ID Line : </strong> <?php echo $row["IdLine"]; ?></p>
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