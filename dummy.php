<?php



while ($fetchRecords=mysqli_fetch_array($sql)) 
{
    # code...
    echo $fetchRecords['no'].$fetchRecords['fullname'].$fetchRecords['phonenumber'].$fetchRecords['email'].$fetchRecords['course'].$fetchRecords['gender'].$fetchRecords['created_at']."<br>";  

}


?>