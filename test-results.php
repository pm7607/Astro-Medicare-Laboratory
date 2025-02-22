<!-- filepath: /Applications/XAMPP/xamppfiles/htdocs/Astro-Medicare-Laboratory/test-results.php -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

include 'config/db_connection.php';

$user_id = $_SESSION['user_id']; // Get user ID from session

// Query to get the appointments for the current user
$stmt = $conn->prepare("SELECT name, appointment_date, test_type FROM appointments WHERE user_id = ?");
if ($stmt) {
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->bind_result($name, $appointment_date, $test_type);
    $stmt->store_result();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Results</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="index.html">Astro Medicare Laboratory</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="appointment.php">Book Appointment</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="test-results.php">Test Results</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="contact.php">Contact Us</a></li>
                    <li class="nav-item">
                        <form action="logout.php" method="POST">
                            <button type="submit" class="btn  text-white">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container mt-5">
        <h2>View Your Test Results</h2>
        <?php if ($stmt->num_rows > 0): ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Appointment Date</th>
                        <th>Test Type</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($stmt->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($name); ?></td>
                            <td><?php echo htmlspecialchars($appointment_date); ?></td>
                            <td><?php echo htmlspecialchars($test_type); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No appointments found.</p>
        <?php endif; ?>
        <?php $stmt->close(); ?>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php $conn->close(); ?>