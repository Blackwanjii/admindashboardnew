<?php
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn=msqli_connect($server,$username,$password,$database);

if($conn)
{
    echo 'Database connection success';
}
else 
{
    echo 'Error occured';   
}

?>