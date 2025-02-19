<?php
include 'config/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (isset($_POST['login'])) {
            // Login functionality
            $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
            if ($stmt) {
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($stored_password);
                    $stmt->fetch();

                    if (password_verify($password, $stored_password)) {
                        echo "Login successful!";
                        // Redirect to a logged-in page or dashboard
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
        } elseif (isset($_POST['register'])) {
            // Registration functionality
            $confirm_password = $_POST['confirm_password'];

            // Check if passwords match
            if ($password !== $confirm_password) {
                echo "Passwords do not match.";
                exit();
            }

            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            if ($stmt) {
                $stmt->bind_param("ss", $username, $hashed_password);

                // Execute the statement
                if ($stmt->execute()) {
                    echo "<script>alert('New record created successfully'); window.location.href='login.html';</script>";
                } else {
                    echo "Error: " . $stmt->error;
                }

                // Close the statement
                $stmt->close();
            } else {
                echo "Error preparing statement: " . $conn->error;
            }
        }
    } else {
        echo "Username and password are required.";
    }
}

// Close the connection
$conn->close();
?>