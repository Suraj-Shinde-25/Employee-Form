<?php
    $empId = $_REQUEST['empId'];

    $hostname = 'localhost'; 
    $username = 'root'; 
    $userpass = ''; 
    $dbname = 'suraj';

    $conn = mysqli_connect($hostname,$username,$userpass,$dbname);
    $sql = "DELETE FROM employees WHERE eId='$empId';";
    mysqli_query($conn,$sql);
    if ($sql) {
        echo "Employee Remove Successfully";
    } else {
        echo "Employee Not Found";
    }
    
?>