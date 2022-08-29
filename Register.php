<?php
 $msg='';
 require_once('processRegister.php');

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
        <span>zalegoAdmin register</span>
	</div>
    <div class="container p-5">
        <div class="row ">
            <img src="zalego.png" alt="zalego-Admin" class="mx-auto">
           
        </div>
        <div class="mx-auto">
        <span><?php echo $msg ?></span>
        </div>
      <form action="register.php" method="POST">  
        <div class="card mx-auto col-md-7">
            <div class="card-body">
                <div class="form-floating pt-3">
                    <label for="floatingInput">username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="">
                  </div>
                  <div class="form-floating pt-3">
                    <label for="floatingInput">Email address</label>
                    <input type="email" class="form-control" id="email"name="email" placeholder="">
                  </div>
                  <div class="form-floating pt-3">
                    <label for="floatingPassword">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="">
                  </div>
                  <div class="form-floating pt-3">
                    <label for="floatingPassword">Confirm password</label>
                    <input type="cpassword" class="form-control" id="cpassword"  name="cpassword"placeholder="">
                  </div>
                  <div class="pt-3 form-group">
                    <input class="btn btn-primary btn-sm" name="signUp" type="submit" >
                  </div>
                  <div>
                   <span>
                    Have an account ? Sign in <a href="login.php"class="navlink active"  >here</a>
                   </span>
                  </div>
            </div>
          </div>
          </form>  
    </div>
    <?php include('includes/scripts.php') ?>
</body>
</html>