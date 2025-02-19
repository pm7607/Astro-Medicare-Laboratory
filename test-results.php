<!-- filepath: /Applications/XAMPP/xamppfiles/htdocs/Astro-Medicare-Laboratory/test-results.php -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
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
        <p>Login to access your test reports securely.</p>
        <a href="login.html" class="btn btn-success">Login to View Results</a>
    </section>

</body>
</html>