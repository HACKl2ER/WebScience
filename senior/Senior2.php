
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
  			border: 1px solid black;
  			border-collapse: collapse;
  		}
  		</style>
  	</head>

  				<h2 align='center'>&emsp;ค้นหาข้อมูลนักศึกษา</h2>
  				<form align='center' action="Senior1.php" method="post">
  				<label >&emsp;ค้นชื่อนักศึกษา: </label><input type="text" size="40px" name="pro_search" />
  				<input name="submit" type="submit" id="submit" value="ค้นข้อมูล"><br><br>
  			</form>
  			<form align='center' action="Senior2.php" method="post">
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
  						<td>  <a data-toggle="modal" data-target="#id0<?php echo $identity; ?>">
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
				 