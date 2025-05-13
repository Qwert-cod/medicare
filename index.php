<?php
// Set the content type to HTML
header("Content-type: text/html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare - Home</title>
    <link rel="stylesheet" href="styles.php">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">MediCare</div>
            <ul class="nav-links">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="prescription.php">Prescription</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Maintaining Healthcare with MediCare</h1>
                <p>Effortlessly manage your prescriptions and medical records in one secure place.</p>
                <a href="prescription.php" class="btn">Get Started</a>
            </div>
        </section>

        <section class="features">
            <h2>Our Features</h2>
            <div class="feature-boxes">
                <div class="feature-box">
                    <h3>Intuitive Prescription Management</h3>
                    <p>Generate and track digital prescriptions effortlessly through our doctor-friendly interface.</p>
                </div>
                <div class="feature-box">
                    <h3>Secure Records</h3>
                    <p>Keep all your medical records in one secure place for easy access.</p>
                </div>
                <div class="feature-box">
                    <h3>Easy and Quick Access</h3>
                    <p>Access your prescriptions anytime, anywhere with our simple system.</p>
                </div>
            </div>
        </section>

        <section class="roles">
            <h2>User Roles</h2>
            <div class="role-cards">
                <div class="role-card">
                    <h3>Doctor</h3>
                    <p>Create prescriptions based on their symptoms</p>
                </div>
                <div class="role-card">
                    <h3>Patient</h3>
                    <p>View prescriptions and medical history</p>
                </div>
                <div class="role-card">
                    <h3>Admin</h3>
                    <p>Manage system users and overall functionality</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 MediCare | Made for NSP</p>
    </footer>
</body>
</html>