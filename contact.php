<?php
// Set the content type to HTML
header("Content-type: text/html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare - Contact</title>
    <link rel="stylesheet" href="styles.php">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">MediCare</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="prescription.php">Prescription</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contact-section">
            <h1>Contact Us</h1>
            <div class="contact-container">
                <div class="contact-form">
                    <form>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="5" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn submit-btn">Submit</button>
                    </form>
                </div>
                
                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><strong>Email:</strong> info@medicare.edu</p>
                    <p><strong>Phone:</strong> +91 1234567890</p>
                    <p><strong>Address:</strong> 123 College Road, Education City, India</p>
                    
                    <div class="map-placeholder">
                        <p>Map Location</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 MediCare | Made for NSP</p>
    </footer>
</body>
</html>