<?php
echo "hello";
$servername = "dockermysqlphp_db_1";
$username = "user";
$password = "password";
$db = "test_db";
$port = "3306";


$conn = new mysqli($servername, $username, $password,$db,$port);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

else {
    echo "connected successfully";
}

$conn->close();
?>