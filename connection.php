<?php
    if(array_key_exists('button1', $_POST)) {
        button1();
    }
    else if(array_key_exists('button2', $_POST)) {
        button2();
    }
    function button1() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = new mysqli($servername, $username, $password);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $sql = "CREATE DATABASE suraj";
        if ($conn->query($sql) === TRUE) {
          echo "Database created successfully";
        } else {
          echo "Error creating database: " . $conn->error;
        }
        $conn->close();
    }
    function button2() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "suraj";
        $conn = new mysqli($servername, $username, $password,$db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "CREATE TABLE employees (
            eId INT(2)  PRIMARY KEY, 
            fName VARCHAR(30) NOT NULL,
            lName VARCHAR(30) NOT NULL,
            contactno INT(20),
            designation VARCHAR(20),
            department VARCHAR(20),
            salary int(30)
        )";
        if ($conn->query($sql) === TRUE) {
            echo "Table created successfully";
        } else {
            echo "Error creating Table: " . $conn->error;
        }
    }
?>