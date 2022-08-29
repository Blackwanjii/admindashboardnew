<?php
  
  //database connection
  require_once('connection.php');
  //setting
  if(isset($_POST['login']))
  {
  //fetch form data
  $username=$_POST['username'];
  $password=$_POST['password'];
  $newPass=md5($password);
  
  //perform the sql query
  $sql =mysqli_query($conn,"SELECT * FROM account WHERE username ='$username'and password='$newPass'");
  $fetch= mysqli_fetch_array($sql);

  if($fetch > 0)
  {
    
    
    header('location: index.php');
  }
  else
  {
    echo "Error";
  }

  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="heady">
        <span>zalego-Admin login</span>
	</div>
    <div class="container p-5">
        <div class="row ">
            <img src="zalego.png" alt="zalego training-Admin log in" class="mx-auto">
        </div>

      <form action="login.php" method="POST"> 
        <div class="card mx-auto col-md-7">
            <div class="card-body">
                <div class="form-floating pt-3">
                    <label for="floatingInput">username</label>
                    <input type="text" class="form-control" id="floatingInput" name="username" placeholder="">
                  </div>
                  <div class="form-floating pt-3">
                    <label for="floatingPassword">Password</label>
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="">
                  </div>
                  <div class="pt-3">
                    <input class="btn btn-primary" type="submit" name="login" value="login">
                  </div>
                  <div>
                   <span>
                    Have an account ? Sign up <a href="register.php"class="navlink active">here</a>
                   </span>
                  </div>
            </div>
        </div>
      </form>   
    </div>
    <?php include('includes/scripts.php') ?>
</body>
</html>