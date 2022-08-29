<?php
require_once('connection.php');

if(isset($_POST['signup']))
{
    //fetch form data
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpass=$_POST['cpassword'];

    //check if username exist in the database
    $sqlusername=mysqli_query($conn,"SELECT * FROM account WHERE username='$username' ");
    $checkusername=mysli_num_rows($sqlusername);

    //check for email
    $sqlemail=mysqli_query($conn,"SELECT * FROM account WHERE email='$email'");
    $checkemail=mysqli_num_rows($sqlemail);

    if($checkusername !=0){
        $msg="Username already exist";
    }
    elseif ($checkemail !=0){
        $msg="Email already in use. please try a different email address";
    }
    elseif ($password !=$cpass)
    {
        $msg="Passwords do not match";
    }
    //submit data to database table
    else{
        //create insert query
        $sql=msqli_query($conn,"INSERT INTO account(username,email,password)
        VALUES('$username','$email','$password')");

        if($sql)
        {
            $msg="Data submitted successfuly";
        }
        else
        {
            $msg="Error";
        }
    }
}


?>