<!-- filepath: /Applications/XAMPP/xamppfiles/htdocs/Astro-Medicare-Laboratory/home.php -->
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
    <title>Lab Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="home.php">Astro Medicare Laboratory</a>
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
                            <button type="submit" class="btn text-white">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/lab1.jpg" class="d-block w-100" alt="Lab Equipment">
                <div class="carousel-caption">
                    <h2>Advanced Diagnostic Lab</h2>
                    <p>We use state-of-the-art equipment for accurate test results.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/lab2.jpg" class="d-block w-100" alt="Doctor Consulting">
                <div class="carousel-caption">
                    <h2>Expert Medical Consultation</h2>
                    <p>Get expert advice from top professionals.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/lab3.jpg" class="d-block w-100" alt="Blood Test">
                <div class="carousel-caption">
                    <h2>Quick & Reliable Test Results</h2>
                    <p>Your health is our priority.</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <section class="container text-center mt-5">
        <h1>Welcome to Our Lab</h1>
        <p class="lead">Your trusted partner for medical diagnostics.</p>
        <a href="appointment.html" class="btn btn-primary">Book a Test</a>
    </section>

    <section class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body text-center p-4">
                        <h4 class="card-title text-primary fw-bold">Comprehensive Diagnostics</h4>
                        <p class="card-text">
                            Offering a complete range of diagnostic services, including routine blood and urine analyses, 
                            as well as specialized tests such as hormone level assessments and allergy screenings.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body text-center p-4">
                        <h4 class="card-title text-success fw-bold">Advanced Aesthetic Testing</h4>
                        <p class="card-text">
                            Equipped with cutting-edge technology for skin and hair analysis, 
                            allowing patients to track the effectiveness of aesthetic treatments.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body text-center p-4">
                        <h4 class="card-title text-danger fw-bold">Personalized Health Insights</h4>
                        <p class="card-text">
                            Integrating laboratory data with personalized care plans to enhance both medical diagnostics 
                            and aesthetic improvements.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card shadow-lg border-0 h-100">
                    <div class="card-body text-center p-4">
                        <h4 class="card-title text-warning fw-bold">State-of-the-Art Technology</h4>
                        <p class="card-text">
                            Utilizing the latest medical advancements to provide precise and reliable test results for 
                            informed healthcare decisions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <h4 class="mb-3 text-center">Special Offers</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/test1.jpg" class="card-img-top offer-img" alt="Offer 1">
                    <div class="card-body">
                        <h5 class="card-title">50% off on CBC Test</h5>
                        <p class="card-text">Get a 50% discount on CBC tests when you book today!</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="assets/test2.jpg" class="card-img-top offer-img" alt="Offer 2">
                    <div class="card-body">
                        <h5 class="card-title">Free Consultation</h5>
                        <p class="card-text">Free consultation with every test booked online! Visit us to learn more.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="assets/test3.jpg" class="card-img-top offer-img" alt="Offer 3">
                    <div class="card-body">
                        <h5 class="card-title">Flat ₹100 off on Blood Tests</h5>
                        <p class="card-text">Get ₹100 off on all blood tests when you schedule an appointment now.</p>
                        <a href="#" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container">
        <h2 class="text-center fw-bold text-primary mb-4">Test Price List <small class="text-muted">(Effective From: 17/02/2025)</small></h2>
    
        <div class="table-responsive">
            <div class="container bg-white p-4 rounded shadow-lg">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered text-center align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Test</th>
                                <th scope="col">Amount (₹)</th>
                            </tr>
                        </thead>
                        <tbody id="table-body" class="table-light">
                            <tr><td>LDH</td> <td>250.00</td></tr>
                            <tr><td>BLOOD R/E (HB, TC, DC, ESR - Each Test)</td> <td>150.00</td></tr>
                            <tr><td>CBC</td> <td>180.00</td></tr>
                            <tr><td>PLATELETS COUNT</td> <td>200.00</td></tr>
                            <tr><td>VDRL (Rapid Test)</td> <td>200.00</td></tr>
                            <tr><td>HBs Ag (Rapid Test)</td> <td>300.00</td></tr>
                            <tr><td>HIV-1&2 (Rapid Test)</td> <td>350.00</td></tr>
                            <tr><td>WIDAL (Tube Test)</td> <td>400.00</td></tr>
                            <tr><td>Blood Group & RH</td> <td>100.00</td></tr>
                            <tr><td>Serum Calcium</td> <td>100.00</td></tr>
                            <tr><td>Renal Function Tests (RFT)</td> <td>270.00</td></tr>
                            <tr><td>ECG</td> <td>150.00</td></tr>
                            <tr><td>Serum Creatinine</td> <td>100.00</td></tr>
                            <tr><td>Liver Function Tests (LFT)</td> <td>380.00</td></tr>
                            <tr><td>X-Ray (Chest)</td> <td>170.00</td></tr>
                            <tr><td>Dental X-Ray</td> <td>100.00</td></tr>
                            <tr><td>Vitamin D3</td> <td>950.00</td></tr>
                            <tr><td>Blood C/S</td> <td>500.00</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    
    <section class="container text-center">
        <h3>Our Location</h3>
        <p class="mb-2"><strong>📍 Location:</strong> KC Complex, Punnad, Kerala 670703</p>
    
        <div class="ratio ratio-16x9 mb-4">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.7638461347216!2d75.69164867411657!3d11.993978988372597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba43dd2be8a28c3%3A0xabc123456789!2sKC%20Complex%2C%20Punnad%2C%20Kerala%20670703!5e0!3m2!1sen!2sin!4v1700000000000"
                width="400"
                height="300"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <div class="card shadow-lg p-4 rounded-lg mx-auto" style="max-width: 500px;">
            <h4 class="mb-3">Get in Touch</h4>
            <p class="mb-2"><strong>📞 Phone:</strong> <a href="tel:+919747733590" class="text-decoration-none text-dark">+91 98765 43210</a></p>
            <p class="mb-2"><strong>🕒 Consultation Time:</strong> 7:30 AM - 5:30 PM</p>
        </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>