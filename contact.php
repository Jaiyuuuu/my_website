<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Contact Us</title>
    <style>
        body {
            background-color: #7c9c68;
            background-image: url("Family.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: #333;
            height: 180vh;
            overflow-y: auto;
        }
        body {
            margin-top: 80px;
        }
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .stray-cats-text {
            font-size: 3rem;
            color: #fff;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
            letter-spacing: 2px;
            transition: transform 0.3s ease;
        }
        .stray-cats-text:hover {
            transform: scale(1.1);
        }
        .header {
            background: linear-gradient(to right, #2e6125, hsl(0, 0%, 100%));
            color: #fff;
            text-align: center;
            padding: 2rem;
            border-bottom: 4px solid #334625;
            margin-top: 20px;
            position: relative;
        }
        .header h1 {
            font-size: 3rem;
            margin: 0;
        }
        .header p {
            font-size: 1.2rem;
        }
        .section {
            padding: 3rem 1rem;
        }
        form {
            max-height: 70vh;
            overflow-y: auto;
            max-width: 700px;
            margin: 0 auto;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        form h2 {
            font-size: 2rem;
            color: #4e6b3a;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .navbar-nav .nav-link {
            font-size: 1rem;
            font-weight: 600;
            color: #fff;
            margin: 0.3rem;
            transition: transform 0.3s, background 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: #fff;
            background: rgba(87, 176, 67, 1);
            transform: translateY(-3px);
        }
        .navbar-toggler-icon {
            background-color: #D3B49F;
            border-radius: 5px;
        }
        .navbar {
            background-color: #233119;
        }
        h1 {
            font-size: 4rem;
            color: #ffffff;
        }
        footer {
            background-color: #233119;
            color: #fff;
            padding-top: 12px;
            text-align: center;
            font-size: 0.9rem;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
        }
        footer a {
            color: #87c17d;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        footer a:hover {
            color: #b8f3b8;
        }
        .social-links a {
            color: #fff;
            margin: 0.5rem;
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }
        .social-links a:hover {
            color: #87b49d;
        }
        .section {
            padding: 20px;
            margin-top: 10px;
            position: relative;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        .row {
            display: flex;
            justify-content: space-between;
            color: #ffffff;
        }
        .left-column, .bottom-column {
            width: 48%;
        }
        h2, h3 {
            margin-top: 0;
        }
        .social-links a {
            display: block;
            margin: 5px 0;
        }
    </style>
</head>
<body>

<section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span class="stray-cats-text">Cat Chers Incorporation</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Adopt</a></li>
                    <li class="nav-item"><a class="nav-link" href="foster.html">Foster</a></li>
                    <li class="nav-item"><a class="nav-link" href="involve.html">Get Involve</a></li>
                    <li class="nav-item"><a class="nav-link" href="resources.html">Resources</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
</section>

<div class="header">
    <h1>Contact Us</h1>
    <p>We'd love to hear from you! Whether you have a question, need assistance, or want to get involved, reach out to us.</p>
</div>

<section class="section">
    <div class="container">
        <h2 class="text-center">User Comments</h2>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myfirstdatabase";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        
            while($row = $result->fetch_assoc()) {
                echo "<div class='comment-box'>";
                echo "<strong>Username:</strong> " . htmlspecialchars($row["username"]) . "<br>";
                echo "<strong>Comment:</strong> " . htmlspecialchars($row["comment"]) . "<br>";
                echo "</div>";
                echo "<p>No comments found.</p>";
            }
    
        }
        $conn->close();
        ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <form>
            <h3>Send Us a Message</h3>
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your Full Name" aria-label="Full Name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Your Email Address" aria-label="Email Address" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Your Phone Number (optional)" aria-label="Phone Number">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <select class="form-select" id="subject" aria-label="Subject Selection">
                    <option value="general-inquiry">General Inquiry</option>
                    <option value="volunteer">Volunteer Inquiry</option>
                    <option value="donate">Donation Inquiry</option>
                    <option value="partnership">Partnership Inquiry</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" rows="4" placeholder="Please write your message here..." aria-label="Message" required></textarea>
            </div>
            <button type="submit" class="btn btn-success w-100">Send Message</button>
        </form>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="container">
                <h2>Our Location</h2>
                <p>Visit us at:</p>
                <p><strong>Cat Chers Inc.</strong><br>123 Feline Lane<br>Cat Town, CT 12345</p>
                <h3>Business Hours:</h3>
                <p>Monday - Friday: 9:00 AM - 5:00 PM<br>Saturday: 10:00 AM - 2:00 PM<br>Sunday: Closed</p>
            </div>
            <div class="container">
                <h3>Contact Us</h3>
                <p>Phone: <strong>(123) 456-7890</strong></p>
                <h3>Follow Us:</h3>
                <div class="social-links">
                    <a href="https://www.facebook.com/yourpage" target="_blank"><i class="fab fa-facebook"></i> Facebook</a>
                    <a href="https://www.instagram.com/yourpage" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2024 Cat Chers Inc. | All Rights Reserved</p>
    </div>
</footer>

</body>
</html>
