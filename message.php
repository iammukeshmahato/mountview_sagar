<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "hotel_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['send'])) {
    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO `messages`(`name`, `email`, `message`)
    VALUES ('{$_POST['name']}', '{$_POST['email']}', '{$_POST['message']}')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        // User added successfully, display a success message with SweetAlert
        echo "<script>alert('Message Sent Successful!')</script>";
        echo "<script>window.open('contact.html', '_self')</script>";
    } else {
        echo "<script>alert('Message Failed!')</script>";
        echo "<script>window.open('contact.html', '_self')</script>";
    }
}
