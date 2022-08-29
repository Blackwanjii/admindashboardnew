<?php


include('logics/dbconnection.php');

$sql=mysqli_query($conn, "SELECT * FROM enrollment");




?>
<!DOCTYPE html>

<html>
<head>
	<title>Students</title>
	<?php  include('includes/header.php') ?>
	
</head>
<body>
	 <!-- All our code. write here   -->
	 <?php include('includes/navbar.php');?>
	 
	 <?php include('includes/sidebar.php'); ?>

	<div class="main-content">
		<div class="container-fluid">
		  <div class="card">
            <div class="card-body">
               <table class="table table-hover table-striped table-responsive" style="font-size:12px;">
                  <thead>
					
					<div class="card-header bg-dark text-white text-center">
						<span>Students</span>
					</div>
				
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">Full name</th>
                      <th scope="col">Phone number</th>
                      <th scope="col">Email </th>
					  <th scope="col">Course</th>
					  <th scope="col">gender</th>
					  <th scope="col">enrolled on</th>
					  <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($fetch=mysqli_fetch_array($sql)) { ?>
						<tr>
                      <th scope="row"><?php  echo $fetch['no'] ?></th>
                      <td><?php  echo $fetch['fullname'] ?></td>
                      <td><?php  echo $fetch['phone number'] ?></td>
					  <td><?php  echo $fetch['emailaddress'] ?></td>
					  <td><?php  echo $fetch['course'] ?></td>
					  <td><?php  echo $fetch['gender'] ?> </td>
					  <td><?php  echo $fetch['created_at'] ?> </td>
					  <td>
						<a href="edit-enrollment.php?id=<?php  echo $fetch['no'] ?> " class="btn btn-primary btn-sm">
						   <i class="fa fa-edit"></i>
						</a>
						
						<a href="#" class="btn btn-info btn-sm">
                            <i class="fa fa-eye"></i>
						</a>
						
						<a href="#" class="btn btn-danger btn-sm">
					        <i class="fa fa-trash"></i>    
						</a>
					</td>
                    </tr>
					<?php   }     ?>
                  </tbody>
               </table> 






            </div>
          </div>
			
		</div>
	</div>
	<?php include('includes/scripts.php') ?>
</body>
</html>