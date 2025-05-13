<?php
<!-- filepath: c:\Users\ishpr\Desktop\medicare\create_db.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS medicare";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully or already exists.<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select the database
$conn->select_db("medicare");

// Create prescriptions table
$sql = "CREATE TABLE IF NOT EXISTS prescriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    symptom TEXT NOT NULL,
    medicines TEXT NOT NULL,
    date DATE NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table 'prescriptions' created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert sample data (optional)
$sql = "INSERT INTO prescriptions (patient_name, age, gender, symptom, medicines, date)
VALUES
('John Doe', 30, 'Male', 'fever', 'Paracetamol, Ibuprofen', CURDATE()),
('Jane Smith', 25, 'Female', 'headache', 'Aspirin, Acetaminophen', CURDATE())";

if ($conn->query($sql) === TRUE) {
    echo "Sample data inserted successfully.<br>";
} else {
    echo "Error inserting sample data: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>