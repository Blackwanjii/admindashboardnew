<?php
//1. database connection
require_once('logics/dbconnection.php');
$queryStudent = mysqli_query($conn, "SELECT * FROM enrollment WHERE no='".$_GET['id']."'");
while($fetchstudents= mysqli_fetch_array($queryStudent))
{
    $fullname = $fetchstudents['fullname'];
    $email = $fetchstudents['emailaddress'];
    $phonenumber = $fetchstudents['phonenumber'];
}
?>
<!DOCTYPE html>
<html>
<?php require_once('includes/header.php')?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php')?>	
	<div class="sidebar">
		<?php require_once('includes/sidebar.php')?>
	</div>
	<div class="main-content pt-5">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">   
                            <h4 class="card-title">Personal Infomation</h4>    
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Full Name: <span class="float-right bagde bg-primary rounded-pill"><?php echo $fullname?></span></li>
                                <li class="list-group-item">Email: <span class="float-right bagde bg-success rounded-pill"><?php echo $email?></span></li>
                                <li class="list-group-item">Phone Number: <span class="float-right  bagde bg-danger rounded-pill"><?php echo $phonenumber?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">   
                            <h4 class="card-title">Personal Infomation</h4>    
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item">Gender</li>
                                <li class="list-group-item">Course</li>
                                <li class="list-group-item">Enrolled On</li>
                            </ul>
                        </div>
                    </div>
                </div>                        
            </div>
        </div>		
	</div>	
 <?php require_once('includes/scripts.php')?>	
</body>
</html>