<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee List</title>
    <link rel="icon" href="Material/gem.png">
    <link rel="stylesheet" href="employee.css">
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            margin: 10px;
            padding: 10px;
        } 
        table td{
            overflow: hidden;
        }
        .D1{
            margin: 30px 30px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            width: 900px;
            height: 700px ;
            background-color: #79c6c1;
            text-align: center;
            border-radius: 7px;

        }
        .container{
            margin-left: 150px;
            margin-right: 150px;
            margin-top: 40px;
            margin-bottom: 40px;
            block-size: 650px auto;
            display: flex;
            justify-content: center;
        }
        .TD{
            padding: 10px;
            margin: 10px;
            display: grid;
            background-color: azure;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="D1">
            <h1>Employee List</h1>
            <div class="TD">
                <table class="table">
                    <tr>
                        <th clsss="t1">Employye Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact No</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Salary</th>
                    </tr>
                    <?php
                    $hostname = 'localhost'; 
                    $username = 'root'; 
                    $userpass = ''; 
                    $dbname = 'suraj'; 
            
                    $conn = mysqli_connect($hostname,$username,$userpass,$dbname);
                    $sql = "select * from employees";
                    $result = mysqli_query($conn,$sql);
                    while ($rows = mysqli_fetch_assoc($result)) {
                        echo "<tr> <td>".$rows['eId'].
                        "</td> <td>".$rows['fName'].
                        "</td> <td>".$rows['lName'].
                        "</td> <td>".$rows['contactno'].
                        "</td> <td>".$rows['designation'].
                        "</td> <td>".$rows['department'].
                        "</td> <td>".$rows['salary']."</td> </tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
