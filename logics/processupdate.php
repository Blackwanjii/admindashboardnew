<?php
//updating user records
require_once('logics/dbconnection.php');
if(isset($_POST['updaterecords']))

{
//fetch form data

    $fullname= $_POST['fullname'];
    $phonenumber=$_POST['phonenumber'];
    $email=$_POST['emailaddress'];
    $gender=$_POST['gender'];
    $course=$_POST['gender'];

    //perform the sql query

    $updaterecords=mysqli_query ($conn, "UPDATE enrollment set fullname='$fullname', phonenumber='$phonenumber', emailaddress='$email', gender='$gender',course='$gender' WHERE no='".$_GET['id']."'");
   
    if($updaterecords)
    {
        $message="Records updated successfully";
    }
    else
    {
        $message="Error occured while updating user";
    }

}

?>