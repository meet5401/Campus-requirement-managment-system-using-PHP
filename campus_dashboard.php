<!DOCTYPE html>
<html>
<head>
	<title>Campus Dashboard</title>
	
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="boostrap-4.4.1/js/juqery_latest.js"></script>
	<style type="text/css">
		#header{
			height: 10%;
			width: 100%;
			top: 2%;
			background-image: url("h2.jpg");
			position: fixed;
			color: white;
		}
		#left_side{
			height: 75%;
			width: 15%;
			top: 10%;
			position: fixed;
			
		}
		#right_side{
			height: 75%;
			width: 80%;
			background-image: url("cam3.jpg");
			background-color: white;	
			position: fixed;
			left: 17%;
			top: 21%;
			color: white;
			border: solid 1px black;
		}
		#top_span{
			top: 15%;
			width: 80%;
			left: 17%;
			position: fixed;
			color: darkblue;
		}
	</style>
	<?php
		session_start();
		$connection = mysqli_connect('localhost','root','','mydb1','3308');
	?>
</head>
<body style="background-color:white" >
	<div id="header">
		<center><br><strong>Campus Recruitment Managment System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>Email: <?php echo $_SESSION['email'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile: <?php echo $_SESSION['mobile'];?>
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a>
		</center>		
	</div>
	<span id="top_span"><marquee>Welcome to Campus site...</marquee></span>
	<div id="left_side"><br><br><br>
		<form action="" method="post">
			<table>
			
      <!--  <button type="button" class="toggle-btn" onclick="login()">Log In</button>-->
     <!--   <button type="button" class="toggle-btn" onclick="signup()">Sign Up</button> --> 
      
				<tr>
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="search_student" value="Search Student"><br><br>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="search_company" value="Search Company"><br><br>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="edit_student" value="Edit Student"><br><br>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="edit_company" value="Edit Company"><br><br>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="add_student" value="Add Student"><br><br>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="add_company" value="Add Company"><br><br>
					</td>
				</tr>
				<tr>
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="delete_student" value="Delete Student"><br><br>
					</td>
				</tr>
				
				
				
				<tr>
					<td>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="delete_company" value="Delete Company"><br><br>
					</td>
				</tr>
				</div>
			</table>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
			<?php
				if(isset($_POST['search_student']))
				{
					?>
					<center>
						<form action="" method="post">
							Enter Name:
							<input type="text" name="name">
							<input type="submit" name="search_by_id_for_search" value="Search">
						</form>
					</center>
					<?php
				}	
				if(isset($_POST['search_by_id_for_search']))
				{
					$query = "select * from stud where name = '$_POST[name]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
					?>
						<center>
						<table>
							<h4 style="color: lightpink">Student Info:</h4><br>
							<!--<th style="text-align: center;">
							Student Info:</th>-->

							<tr>
								<td><b>ID:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['id'];?>" disabled>
								</td>	
							</tr>	
							<tr>
								<td><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['name'];?>" disabled>
								</td>	
							</tr>
							<tr>
								<td><b>Field:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['field'];?>" disabled>
								</td>	
							</tr>
							<tr>
								<td><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['email'];?>" disabled>
								</td>	
							</tr>
							<tr>
								<td><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['password'];?>" disabled>
								</td>	
							</tr>
							<tr>
								<td><b>Mobile:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['mobile'];?>" disabled>
								</td>	
							</tr>
								<tr>
								<td><b>CPI:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['cpi'];?>" disabled>
								</td>	
							</tr>
						</table>
					</center>
					
						<?php	
					}
				}
			?>	
			<?php
				if(isset($_POST['search_company']))
				{
					?>
					<center>
						<form action="" method="post">
							Enter Name:
							<input type="text" name="name">
							<input type="submit" name="search_by_name_for_search" value="Search">
						</form>
					</center>
					<?php
				}	
				if(isset($_POST['search_by_name_for_search']))
				{
					$query = "select * from comp where name = '$_POST[name]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
					?>
						<center>
						<table>
							<h4 style="color: pink">Company Info:</h4><br>
							<!--<th style="text-align: center;">
							Company Info:</th>-->

							<tr>
								<td><b>ID:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['id'];?>" disabled>
								</td>	
							</tr>	
							<tr>
								<td><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['name'];?>" disabled>
								</td>	
							</tr>
							<tr>
								<td><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['email'];?>" disabled>
								</td>	
							</tr>
							<tr>
								<td><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['password'];?>" disabled>
								</td>	
							</tr>
							<tr>
								<td><b>Required Field&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['required_field'];?>" disabled>
								</td>	
							</tr>
							<tr>
								<td><b>Job Locattion:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['job_location'];?>" disabled>
								</td>	
							</tr>
								<tr>
								<td><b>Experince:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" value="<?php echo $row['experience'];?>" disabled>
								</td>	
							</tr>
						</table>
					</center>
					
						<?php	
					}
				}
			?>	
			<!--<div id="demo">-->
		
			<?php
				if(isset($_POST['edit_student']))
				{
					?>
					<center>
						<form action="" method="post">
							Enter Name:
							<input type="text" name="name">
							<input type="submit" name="search_by_id_for_edit" value="Search">
						</form>
					</center>
					<?php
				}	
				if(isset($_POST['search_by_id_for_edit']))
				{
					$query = "select * from stud where name = '$_POST[name]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<form action="" method="post">
							<center>
							<table>
								<h4 style="color: pink">Edit Student's Detail:</h4>
							<tr>
								<td><b>ID:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="id" value="<?php echo $row['id'];?>">
								</td>	
							</tr>	
							<tr>
								<td><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="name" value="<?php echo $row['name'];?>">
								</td>	
							</tr>
							<tr>
								<td><b>Field:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="field" value="<?php echo $row['field'];?>">
								</td>	
							</tr>
							<tr>
								<td><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="email" value="<?php echo $row['email'];?>">
								</td>	
							</tr>
							<tr>
								<td><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="password" value="<?php echo $row['password'];?>">
								</td>	
							</tr>
							<tr>
								<td><b>Mobile:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="mobile" value="<?php echo $row['mobile'];?>">
								</td>	
							</tr>
							<tr>
								<td><b>CPI:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="cpi" value="<?php echo $row['cpi'];?>">
								</td>	
							</tr><br>
							<tr>
								<td></td>
								<td><br><input type="submit" name="edit" value="Save"></td>
								
								<!-- <a href="campus_edit_candidate.php">Edit Name</a> -->
							</tr>
						</table>
					</center>
						</form>
		
						<?php	
					}
				}
			?>	
	       		<?php
					 if(isset($_POST['edit'])){
						$connection = mysqli_connect('localhost','root','','mydb1','3308');
						$query = "update stud set name='$_POST[name]',field='$_POST[field]',email='$_POST[email]',password='$_POST[password]',mobile='$_POST[mobile]',cpi='$_POST[cpi]' where id = $_POST[id] ";
						$query_run = mysqli_query($connection,$query);
						$connection = mysqli_connect('localhost','root','','mydb1','3308');
						$query = "update stuinfo set name='$_POST[name]',email='$_POST[email]',field='$_POST[field]',cpi='$_POST[cpi]',mobile='$_POST[mobile]' where id = $_POST[id] ";
						$query_run = mysqli_query($connection,$query);

						
				}
					
					?>	
					<!--inclued("Location: campus_edit_candidate.php");-->
					
			<?php
				if(isset($_POST['edit_company']))
				{
					?>
					<center>
						<form action="" method="post">
							Enter Name:
							<input type="text" name="name">
							<input type="submit" name="search_by_name_for_edit" value="Search">
						</form>
					</center>
					<?php
				}	
				if(isset($_POST['search_by_name_for_edit']))
				{
					$query = "select * from comp where name = '$_POST[name]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<form action="" method="post">
							<center>
								<table>
								<h4 style="color: pink">Edit Company's Detail:</h4>
							<tr>
								<td><b>ID:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="id" value="<?php echo $row['id'];?>">
								</td>	
							</tr>	
							<tr>
								<td><b>Name:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="name" value="<?php echo $row['name'];?>">
								</td>	
							</tr>
							<tr>
								<td><b>Email:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="email" value="<?php echo $row['email'];?>">
								</td>	
							</tr>
							<tr>
								<td><b>Password:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="password" value="<?php echo $row['password'];?>">
								</td>	
							</tr>
							<tr>
								<td><b>Required Field:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="required_field" value="<?php echo $row['required_field'];?>">
								</td>	
							</tr>
							<tr>
								<td><b>Job Location:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="job_location" value="<?php echo $row['job_location'];?>">
								</td>	
							</tr>
							<tr>
								<td><b>Experience:&nbsp;&nbsp;&nbsp;&nbsp;</b>									
								</td>
								<td>
									<input type="text" name="experience" value="<?php echo $row['experience'];?>">
								</td>	
							</tr><br>
							<tr>
								<td></td>
								<td><br><input type="submit" name="editc" value="Save"></td>
								
								<!-- <a href="campus_edit_candidate.php">Edit Name</a> -->
							</tr>
						</table>
					</center>
						</form>
		
						<?php	
					}
				}
			?>	
	       		<?php
					 if(isset($_POST['editc'])){
						$connection = mysqli_connect('localhost','root','','mydb1','3308');
						$query = "update comp set name='$_POST[name]',email='$_POST[email]',password='$_POST[password]',required_field='$_POST[required_field]',job_location='$_POST[job_location]',experience='$_POST[experience]' where id = $_POST[id] ";
						$query_run = mysqli_query($connection,$query);
						$connection = mysqli_connect('localhost','root','','mydb1','3308');
						$query = "update cominfo set name='$_POST[name]',email='$_POST[email]',required_field='$_POST[required_field]',job_location='$_POST[job_location]',experience='$_POST[experience]' where id = $_POST[id] ";
						$query_run = mysqli_query($connection,$query);

						
				}
					
					?>	
					
				
				
				<?php
					if(isset($_POST['add_student'])){
						?>
						<center>
							<!--<h4>Fill the given Details:</h4>-->
						</center>
						<form action="" method="post">
							<center>
							<div style="float: left;width: 50%;">
								
									<table>
								<h4 style="color: pink">&nbsp;&nbsp;&nbsp;Fill both the Forms<br>&nbsp;&nbsp;&nbsp;&nbsp; to Add Student:</h4><br>
								<!--<tr>
									<td>ID:</td>
									<td>
										<input type="text" name="id" required>
									</td>
								</tr>-->
								<tr>
									<td>Name:</td>
									<td>
										<input type="text" name="name" required>
									</td>
								</tr>
								<tr>
									<td>Field:</td>
									<td>
										<input type="text" name="field" required>
									</td>
								</tr>
								<tr>
									<td>Email:</td>
									<td>
										<input type="text" name="email" required>
									</td>
								</tr>
								<tr>
									<td>Password:</td>
									<td>
										<input type="text" name="password" required>
									</td>
								</tr>
								<tr>
									<td>Mobile:</td>
									<td>
										<input type="text" name="mobile" required>
									</td>
								</tr>
								<tr>
									<td>CPI:</td>
									<td>
										<input type="text" name="cpi" required>
									</td>
								</tr>
								<!--<tr><td></td>
									<td><br><input type="submit" name="add" value="Add Student"></td>-->
									<!--<a href="add_student.php">Add Name</a>-->
								</tr>
							</table>
						</div>
					</center>
						
						

						<?php
					
				?>
				<?php
					
				?>
					<center>
					<div style="float: right;width: 50%;">
									<table>
			
								<h4 style="color: pink">Fill both the Forms<br>to Add Student:</h4><br>
								<!--<tr>
									<td>ID:</td>
									<td>
										<input type="text" name="id" required>
									</td>
								</tr>-->
								<tr>
									<td>Name:</td>
									<td>
										<input type="text" name="name" required>
									</td>
								</tr>
								<tr>
									<td>Email:</td>
									<td>
										<input type="text" name="email" required>
									</td>
								</tr>
								<tr>
									<td>Field:</td>
									<td>
										<input type="text" name="field" required>
									</td>
								</tr>
								<!--<tr>
									<td>Password:</td>
									<td>
										<input type="text" name="password" required>
									</td>
								</tr>-->
								<tr>
									<td>CPI:</td>
									<td>
										<input type="text" name="cpi" required>
									</td>
								</tr>
								<tr>
									<td>Mobile:</td>
									<td>
										<input type="text" name="mobile" required>
									</td>
								</tr>
								<tr><td></td>
									<td><br><input type="submit" name="addss" value="Add Student"></td>
									<!--<a href="add_student.php">Add Name</a>-->
								</tr>

							</table>
						</div>
					</center>
					
						
					</form>
						
						<?php
					}
				?>
				<?php
					if(isset($_POST['addss'])){
	

					$connection = mysqli_connect('localhost','root','','mydb1','3308');
					$query = "insert into stud values ('','$_POST[name]','$_POST[field]','$_POST[email]','$_POST[password]','$_POST[mobile]','$_POST[cpi]')";
	
	 				$query_run = mysqli_query($connection,$query);
					$connection = mysqli_connect('localhost','root','','mydb1','3308');
					$query = "insert into stuinfo values ('','$_POST[name]','$_POST[email]','$_POST[field]','$_POST[cpi]','$_POST[mobile]')";
	
	 				$query_run = mysqli_query($connection,$query);

	 				
	 				
	 				
	 				}
				?>


				
				<?php
					if(isset($_POST['add_company'])){
						?>
						<center>
							<!--<h4>Fill the given Details:</h4>-->
						</center>
						<form action="" method="post">
							<center>
							<div style="float: left;width: 50%;">
								
									<table>
								<h4 style="color: pink">&nbsp;&nbsp;&nbsp;Fill both the Forms<br>&nbsp;&nbsp;&nbsp;&nbsp; to Add Company:</h4><br>
							
								
								<!--<tr>
									<td>ID:</td>
									<td>
										<input type="text" name="id" required>
									</td>
								</tr>-->
								<tr>
									<td>Name:</td>
									<td>
										<input type="text" name="name" required>
									</td>
								</tr>
								<tr>
									<td>Email:</td>
									<td>
										<input type="text" name="email" required>
									</td>
								</tr>
								<tr>
									<td>Password:</td>
									<td>
										<input type="text" name="password" required>
									</td>
								</tr>
								<tr>
									<td>Required field:</td>
									<td>
										<input type="text" name="required_field" required>
									</td>
								</tr>
								<tr>
									<td>Joa Location:</td>
									<td>
										<input type="text" name="job_location" required>
									</td>
								</tr>
								<tr>
									<td>Experience:</td>
									<td>
										<input type="text" name="experience" required>
									</td>
								</tr>
								<!--<tr><td></td>
									<td><input type="submit" name="addcc" value="Add Student"></td>-->
									
								</tr>
							</table>
						</div>
					</center>
						
						<?php
					
				?>
				<center>
							<div style="float: right;width: 50%;">
								
									<table>
								<h4 style="color: pink">&nbsp;&nbsp;&nbsp;Fill both the Forms<br>&nbsp;&nbsp;&nbsp;&nbsp; to Add Company:</h4><br>
							
								
								<!--<tr>
									<td>ID:</td>
									<td>
										<input type="text" name="id" required>
									</td>
								</tr>-->
								<tr>
									<td>Name:</td>
									<td>
										<input type="text" name="name" required>
									</td>
								</tr>
								<tr>
									<td>Email:</td>
									<td>
										<input type="text" name="email" required>
									</td>
								</tr>
								<!--<tr>
									<td>Password:</td>
									<td>
										<input type="text" name="password" required>
									</td>
								</tr>-->

								<tr>
									<td>Required field:</td>
									<td>
										<input type="text" name="required_field" required>
									</td>
								</tr>
								<tr>
									<td>Joa Location:</td>
									<td>
										<input type="text" name="job_location" required>
									</td>
								</tr>
								<tr>
									<td>Experience:</td>
									<td>
										<input type="text" name="experience" required>
									</td>
								</tr>
								<tr><td></td>
									<td><br><input type="submit" name="addcc" value="Add Company"></td>
									
								</tr>
							</table>
						</div>
					</center>
				</form>
				<?php
			   }

			?>

				<?php
					if(isset($_POST['addcc'])){
	
					$connection = mysqli_connect('localhost','root','','mydb1','3308');
					$query = "insert into comp values ('','$_POST[name]','$_POST[email]','$_POST[password]','$_POST[required_field]','$_POST[job_location]','$_POST[experience]')";	
	 				$query_run = mysqli_query($connection,$query);
	 				$connection = mysqli_connect('localhost','root','','mydb1','3308');
					$query = "insert into cominfo values ('','$_POST[name]','$_POST[email]','$_POST[required_field]','$_POST[job_location]','$_POST[experience]')";	
	 				$query_run = mysqli_query($connection,$query);
	 				
	 				}
				?>
				<!--<?php
					if(isset($_POST['delete_student'])){
						?>
						<center>
							<h4>Enter Name to delete Student:</h4><br><br>
							<form action="" method="post">
								Name :
								<input type='text' name='name'>
								<input type='submit' name='name' value='Delete Student'>
								<?php
							if(isset($_POST['name'])){
							$connection = mysqli_connect('localhost','root','','mydb1','3308');
							$query = "delete from stud where name = $_POST[name]";
	 
     				    	$query_run = mysqli_query($connection,$query);
     				    	    				    	}
						?>-->
								

							</form>
						</center>
						
						<?php
					}
				?>
    	</div>
    </div>

</body>
</html>
