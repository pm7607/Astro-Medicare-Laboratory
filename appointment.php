<!-- filepath: /Applications/XAMPP/xamppfiles/htdocs/Astro-Medicare-Laboratory/appointment.php -->
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
    <title>Book Appointment</title>
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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <h2 class="text-center mb-4">Book a Test</h2>
                    <form action="book_appointment.php" method="POST">
                        <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>"> <!-- Get user ID from session -->
                        <div class="mb-3">
                            <label class="form-label d-block text-start">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-block text-start">Date</label>
                            <input type="date" class="form-control" name="appointment_date" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label d-block text-start">Select Test</label>
                            <select class="form-control" name="test_type" required>
                                <option value="Blood Test">Blood Test</option>
                                <option value="X-Ray">X-Ray</option>
                                <option value="COVID Test">COVID Test</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>