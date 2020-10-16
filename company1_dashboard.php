<!DOCTYPE html>
<html>
<head>
	<title>Campus Dashboard</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="boostrap-4.4.1/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
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
		#td{
			border: solid 1px red;
			padding-left: 2px;
			text-align: center;
			width: 180px;
		}
		#id{
			border: solid 1px red;
			padding-left: 2px;
			text-align: center;
			width: 180px;
		}
	</style>
	<?php
		session_start();
		$connection = mysqli_connect('localhost','root','','mydb1','3308');
	?>
</head>
<body style="background-color:white">
	<div id="header">
		<center><br><strong>Campus Recruitment Managment System &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>Email: <?php echo $_SESSION['email'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name: <?php echo $_SESSION['name'];?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php">Logout</a>
		</center>		
	</div>
	<span id="top_span"><marquee>Welcome to Campus site...</marquee></span>
	<div id="left_side"><br><br>
		<form action="" method="post">
			<table>
				<tr>
					<td>
						 <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="show_students" value="Show Students">
					</td>
				</tr>
			</table>
		</form>
	</div>
	<div id="right_side"><br><br>
		<div id="demo">
		<?php
			if(isset($_POST['show_students'])){
			?>
			<center>
				<h3 style="color: white">Student's Info:</h3><br><br>
				<table style="border-collapse: collapse;border:1px solid black ">
					<tr>
						<td id="id"><b>ID</b></td>
						<td id="id"><b>Name</b></td>
						<td id="id"><b>Email</b></td>
						<td id="id"><b>Field</b></td>
						<td id="id"><b>CPI</b></td>
						<td id="id"><b>Mobile</b></td>

					</tr>
				</table>
			</center>
			<?php
			
						$connection = mysqli_connect('localhost','root','','mydb1','3308');
						$query = "select * from stuinfo";
						$query_run = mysqli_query($connection,$query);
						while($row = mysqli_fetch_assoc($query_run)){
						?>
						<center>
							<table style="border-collapse: collapse;border:1px solid black ">
								<tr>
									<td id="td"><?php echo $row['id'];?></td>
									<td id="td"><?php echo $row['name'];?></td>
									<td id="td"><?php echo $row['email'];?></td>
									<td id="td"><?php echo $row['field'];?></td>
									<td id="td"><?php echo $row['cpi'];?></td>
									<td id="td"><?php echo $row['mobile'];?></td>

								</tr>
							</table>
						</center>
						<?php
					}
		}
		?>
	</div>
</body>
</html>
