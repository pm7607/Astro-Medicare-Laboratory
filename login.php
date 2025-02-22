<?php
session_start();
include 'config/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (isset($_POST['login'])) {
            // Login functionality
            $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
            if ($stmt) {
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($user_id, $stored_password);
                    $stmt->fetch();

                    if ($password === $stored_password) {
                        $_SESSION['username'] = $username;
                        $_SESSION['user_id'] = $user_id; // Set user_id in session
                        echo "Login successful!";
                        // Redirect to the home page
                        header("Location: home.php");
                        exit();
                    } else {
                        echo "Invalid password.";
                    }
                } else {
                    echo "No user found with that username.";
                }

                $stmt->close();
            } else {
                echo "Error preparing statement: " . $conn->error;
            }
        }
    }
}

// Close the connection
$conn->close();
?>