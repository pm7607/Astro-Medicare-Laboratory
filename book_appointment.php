<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

include 'config/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id']; // Get user ID from session
    $name = $_POST['name'];
    $appointment_date = $_POST['appointment_date'];
    $test_type = $_POST['test_type'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO appointments (user_id, name, appointment_date, test_type) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("isss", $user_id, $name, $appointment_date, $test_type);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('Appointment booked successfully'); window.location.href='appointment.php';</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>