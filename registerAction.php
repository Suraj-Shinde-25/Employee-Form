<?php
    $fName = $_REQUEST['firstname'];
    $lName = $_REQUEST['lastname'];
    $employeeId = $_REQUEST['employeeid'];
    $mobNo = $_REQUEST['mobno'];
    $designation = $_REQUEST['designation'];
    $department = $_REQUEST['department'];
    $salary = $_REQUEST['salary'];

    $hostname = 'localhost'; 
    $username = 'root'; 
    $userpass = ''; 
    $dbname = 'suraj'; 

    $conn = mysqli_connect($hostname,$username,$userpass,$dbname);
    $sql = "insert into employees(eId,fName,lName,contactno,designation,department,salary) 
            VALUES ('$employeeId','$fName','$lName','$mobNo','$designation','$department','$salary')";
    mysqli_query($conn,$sql);
    echo "Registration Successfully completed";
?>