<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$password = $_POST['createPassword'];
$idNumber = $_POST['idNumber'];
$kraPin = $_POST['kraPin'];
$city = $_POST['city'];
$country = $_POST['country'];

// Create a connection
$conn = mysqli_connect('127.0.0.1', 'root', '', 'database1');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
        $stmt = $conn->prepare("insert into table1 (firstName, lastName, phoneNumber, email, password, idNumber, kraPin, city, country
        values (?,?,?,?,?,?,?,?,?,i)");
        $stmt->bind_param("sssssssssi", $firstName,$lastName, $phoneNumber,$email,$password,$idNumber,$kraPin,$city,$country);
        $stmt->execute();
        echo "Login successful!";
        $stmt->close();
        $conn->close();
    }
  ?>  