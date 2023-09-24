<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "hotel_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the booking of the hotel is successful, then proceed to payment.
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $rooms = $_POST['rooms'];
    $t_room = $_POST['t_room'];
    $t_guest = $_POST['t_guest'];
    $arrival = $_POST['arrival'];
    $departure = $_POST['departure'];

    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO `booking`(`id`,`name`, `email`, `number`, `rooms`, `t_room`, `t_guest`, `arrival`, `departure`)
    VALUES (`$id`,'$name', '$email', '$phone', '$rooms', '$t_room', '$t_guest', '$arrival', '$departure')";

    $result = mysqli_query($conn, $sql);
    if ($result === TRUE) {
        // User added successfully, display a success message with SweetAlert
        echo "<script>alert('Booking Successful! Proceed to payment.')</script>";
        echo "<script>window.open('bb.html', '_self')</script>";
    } else {
        echo "<script>alert('Booking Failed!')</script>";
        echo "<script>window.open('bb..html', '_self')</script>";
    }
}
   



