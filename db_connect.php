<?php
$servername = "localhost";
$username = "dodosofresh";
$password = "Pass#2111";
$dbname = "mysql";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>