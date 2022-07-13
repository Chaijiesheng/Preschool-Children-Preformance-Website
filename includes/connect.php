<?php
require 'database.php';
$username = $_POST['username'];
$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

// Database connection
$conn = new mysqli('localhost:3307', 'root', '', 'pcpwbs');
if ($conn->connect_error) {
	echo "$conn->connect_error";
	die("Connection Failed : " . $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into users(username, first_name, last_name, email, password, phone) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssi", $username, $firstName, $lastName, $email, $password, $phone);
	$execval = $stmt->execute();
	echo $execval;
	echo "Registration successfully...";
	$stmt->close();
	$conn->close();
}
