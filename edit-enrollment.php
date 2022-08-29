<?php
$message='';

   require_once('logics/dbconnection.php');
   $queryStudent=mysqli_query($conn,"SELECT * FROM enrollment WHERE no='".$_GET['id']."'  ");
   while($fetchStudent=mysqli_fetch_array($queryStudent))
   {
    $id=$fetchStudent['no'];
    $fullname= $fetchStudent['fullname'];
    $phonenumber=$fetchStudent['phonenumber'];
    $email=$fetchStudent['emailaddress'];
    $gender=$fetchStudent['gender'];
    $course=$fetchStudent['gender'];
   }

   require_once('logics/processupdate.php');




?>

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Edit student details</title>
    <?php  include('includes/header.php') ?>
</head>
<body>
     <!-- All our code. write here   -->
     <?php include('includes/navbar.php');?>
	 
     <?php include('includes/sidebar.php'); ?>
 
     <div class="main-content">
         <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white ">
                            <h4 class="text-center">Edit student-<?php echo $fullname?></h4>
                            <?php echo$message?>
                            <form action="edit-enrollment.php?id=<?php echo $id?>" method="POST">  
                         </div>
                        </div>
                        <div>
                        <label for="floatingInput">Fullname</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" value=<?php echo $fullname?>>
                  </div>
                  <div class="form-floating pt-3">
                    <label for="floatingInput">Phone number</label>
                    <input type="tel" class="form-control" id="phonenumber" name="phonenumber" value=<?php echo $phonenumber?>>
                  </div>
                  <div class="form-floating pt-3">
                    <label for="floatinginput">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value=<?php echo $email?>>
                </div>
                  <div class="form-floating pt-3">
                    <label for="floatinginput">Gender</label>
                    <select class="form-control" id="gender"  name="gender">
                        <option value="<?php echo $gender?>"></option>
                        <option value="MALE">Male</option>
                        <option value="FEMALE">Female</option>
                    </div>        
                  <div class="pt-3 form-group">
                    <input class="btn btn-primary btn-sm" name="signUp" type="submit" >
                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php include('includes/scripts.php') ?>
</body>
</html>