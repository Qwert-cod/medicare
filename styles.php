<?php
header("Content-type: text/css");
?>

/* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    line-height: 1.6;
    color: #333;
    background-color: #f9f9f9;
}

/* Header and Navigation */
header {
    background-color: #4a90e2;
    color: white;
    padding: 1rem 0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.logo {
    font-size: 1.8rem;
    font-weight: bold;
}

.nav-links {
    display: flex;
    list-style: none;
}

.nav-links li {
    margin-left: 20px;
}

.nav-links a {
    color: white;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.nav-links a:hover, .nav-links a.active {
    background-color: rgba(255, 255, 255, 0.2);
}

/* Main Content */
main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

section {
    margin-bottom: 40px;
}

h1, h2, h3 {
    margin-bottom: 15px;
    color: #2c3e50;
}

h1 {
    font-size: 2.2rem;
    text-align: center;
    margin-bottom: 30px;
}

h2 {
    font-size: 1.8rem;
    text-align: center;
    margin-bottom: 25px;
}

/* Hero Section */
.hero {
    background-color: #e3f2fd;
    padding: 60px 20px;
    text-align: center;
    border-radius: 8px;
    margin-bottom: 40px;
}

.hero h1 {
    margin-bottom: 15px;
    color: #2c3e50;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 25px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

/* Button Styles */
.btn {
    display: inline-block;
    background-color: #4a90e2;
    color: white;
    padding: 10px 20px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #3a7bc8;
}

/* Features Section */
.features {
    padding: 20px 0;
}

.feature-boxes {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
}

.feature-box {
    flex: 1;
    min-width: 250px;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.feature-box h3 {
    color: #4a90e2;
}

/* Roles Section */
.roles {
    padding: 20px 0;
}

.role-cards {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
}

.role-card {
    flex: 1;
    min-width: 250px;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.role-card h3 {
    color: #4a90e2;
}

/* About Page */
.about-section, .team-section {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.about-content p {
    margin-bottom: 15px;
}

.team-members {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.team-member {
    background-color: #f5f5f5;
    padding: 15px;
    border-radius: 8px;
    width: calc(50% - 20px);
    min-width: 200px;
    text-align: center;
}

/* Prescription Form */
.prescription-section {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    max-width: 800px;
    margin: 0 auto;
}

.prescription-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-group {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="number"],
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1rem;
}

.radio-group {
    display: flex;
    gap: 15px;
}

.radio-group label {
    font-weight: normal;
    margin-left: 5px;
}

.submit-btn {
    align-self: flex-start;
    margin-top: 10px;
}

/* Contact Page */
.contact-section {
    background-color: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.contact-container {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
}

.contact-form {
    flex: 1;
    min-width: 300px;
}

.contact-info {
    flex: 1;
    min-width: 300px;
    background-color: #f5f5f5;
    padding: 20px;
    border-radius: 8px;
}

.contact-info p {
    margin-bottom: 10px;
}

.map-placeholder {
    height: 200px;
    background-color: #e0e0e0;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    border-radius: 4px;
}

/* Footer */

footer {
    background-color: #2c3e50;
    color: white;
    text-align: center;
    padding: 20px 0;
    margin-top: 40px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .navbar {
        flex-direction: column;
        gap: 15px;
    }
    
    .nav-links {
        width: 100%;
        justify-content: center;
    }
    
    .feature-boxes, .role-cards {
        flex-direction: column;
    }
    
    .team-member {
        width: 100%;
    }
    
    .contact-container {
        flex-direction: column;
    }
}