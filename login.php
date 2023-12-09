<?php
$accountID = $_POST['accountID'];
$accountPassword = $_POST['accountPassword'];

// Hash the password (make sure to use a secure hashing algorithm)
$hashedPassword = password_hash($accountPassword, PASSWORD_DEFAULT);

// Create a connection
$conn = new mysqli('localhost', 'root', '', 'test');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // Fix the SQL syntax error and missing parenthesis
    $stmt = $conn->prepare("INSERT INTO registration (accountID, accountPassword) VALUES (?, ?)");
    $stmt->bind_param("ss", $accountID, $hashedPassword); // Assuming both are strings (s)

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>



