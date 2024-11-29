<?php

function OpenCon() {
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "coffeedb"; 


    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function CloseCon($conn) {
    $conn->close();
}

$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>
