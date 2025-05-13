<?php
// Set the content type to HTML
header("Content-type: text/html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare - About</title>
    <link rel="stylesheet" href="styles.php">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">MediCare</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php" class="active">About</a></li>
                <li><a href="prescription.php">Prescription</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="about-section">
            <h1>About MediCare</h1>
            <div class="about-content">
                <p>MediCare is a hands-on student initiative developed under the Non Syllabus Project (NSP). It showcases our practical understanding of web development by building a basic digital tool for managing medical prescriptions.</p>
                
                <p>This educational project focuses on helping students grasp core web development concepts—like form creation, layout design, and UI basics—using only HTML and CSS. Though simplified, it mirrors real-world applications and serves as a strong starting point.</p>
            </div>
        </section>

        <section class="team-section">
            <h2>Our Team</h2>
            <div class="team-members">
                <div class="team-member">
                    <h3>Himanshu Suthar</h3>
                    <p>PIET23CS071</p>
                </div>
                <div class="team-member">
                    <h3>Ishpreet Kaur</h3>
                    <p>PIET23CS075</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 MediCare | Made for NSP</p>
    </footer>
</body>
</html>