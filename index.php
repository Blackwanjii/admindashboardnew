<?php

require_once('logics/dbconnection.php');
//counting total number of students
$queryEnrolledStudents=mysqli_query($conn, "SELECT * FROM enrollment");
$countallstudents=mysqli_num_rows($queryEnrolledStudents);

//count by gender
$queryenrolledfemale=mysqli_query($conn, "SELECT * FROM enrollment WHERE gender='female'");
$countallfemales= mysqli_num_rows($queryenrolledfemale);



?>








<!DOCTYPE html>

<html>
<head>
	<title>Home</title>
	<?php  include('includes/headers.php') ?>
	
</head>
<body>
	 <!-- All our code. write here   -->
    <?php include('includes/navbar.php');?>
	 
	<?php include('includes/sidebar.php'); ?>

	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa-3x"></i></span>
						<span class="float-right badge bg-dark rounded-pill text-white"><?php echo $countallfemales?></span>
					</div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Available courses</span>
					</div>
					<div class="card-body"><span>
						<i class="fa fa-folder-open fa-3x "></i></span>
						<span class="float-right">00</span></div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Campuses</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-graduation-cap fa-3x"></i></span>
						<span class="float-right">00</span></div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-3">
					<div class="card-header bg-dark text-white text-center">
						<span>Top content</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-user fa-3x "></i></span>
						<span class="float-right">00</span></div>
					<div class="card-footer"></div>
				</div>
				<div class="col-lg-12">
					<div class="card-header bg-dark text-white text-center">
						<span>Student Analysis</span>
					</div>
					<div class="card-body">
						<span><i class="fa fa-line-chart fa-3x"></i></span>
						<span class="float-right">00</span></div>
					<div class="card-footer"></div>
				</div>
			</div>
		</div>
	</div>
<?php include('includes/scripts.php') ?>
</body>
</html>