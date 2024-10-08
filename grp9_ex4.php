<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>GROUP 9</title>  
    <link rel="stylesheet" href="style.css">  
</head>  
<body>  

<div class="container">  
    <div class="logo"></div>  
    <h1>Meet Our Members</h1>  

    <div class="main-member">  
        <img src="Ayen.jpg" alt="Leader">  
        <h2>LEADER</h2>  
        <h3><span style="color: #ff4081;">Airielle</span> Marie Navea</h3>  
        <p>Age: 21</p>  
        <p>Address: Soldiers Hills Village, Putatan, Muntinlupa City</p>  
        <h4>"Run at your own pace, the world will wait for you".</h4>  
    </div>  

    <div class="team-grid">  
        <div class="member-card">  
            <img src="Jenaly.jpg" alt="Member">  
            <h3><span style="color: #ff4081;">Jenelyn</span> Bulan</h3>  
            <p>Age: 28</p>  
            <p>Address: Sitio Tuklas, Cupang</p>  
            <h4>"Try and try until you succeed".</h4>  
        </div>  
        <div class="member-card">  
            <img src="Hana.jpg" alt="Member">  
            <h3><span style="color: #ff4081;">Farhana</span> Muhaimen</h3>  
            <p>Age: 22</p>  
            <p>Address: Purok 6, Alabang City</p>  
            <h4>"If opportunity doesn't knock, build a door".</h4>  
        </div>  
        <div class="member-card">  
            <img src="Ep.jpg" alt="Member">  
            <h3><span style="color: #ff4081;">Ephraim</span> Lagdamat</h3>  
            <p>Age: 24</p>  
            <p>Address: Soldiers Compound Hills, Putatan, Muntinlupa</p>  
            <h4>"Hard work betrays none, but dreams betray many".</h4>  
        </div>  
        <div class="member-card">  
            <img src="images/Member.jpg" alt="Member">  
            <h3>Ernesto Capulong</h3>  
            <p>Age: XX</p>  
            <p>Address: XX</p>  
            <h4>"XXX".</h4>  
        </div>  
    </div>  

    <div class="contact-info">  
        <p>Phone: 000 000 111 999</p>  
        <p>Website: www.group9.com</p>  
        <p>Email: bastagroup@email.com</p>  
    </div>  

    <form method="post" class="contact-form">  
        <h3 class="contact-heading">Contact Us</h3>  
        <input type="text" name="name" placeholder="Your Name" required class="input-field">  
        <input type="email" name="email" placeholder="Your Email" required class="input-field">  
        <textarea name="message" rows="5" placeholder="Your Message" required class="textarea-field"></textarea>  
        <button type="submit" class="submit-button">Send Message</button>  
    </form>  

    <?php  
    if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $name = htmlspecialchars(trim($_POST["name"]));  
        $email = htmlspecialchars(trim($_POST["email"]));  
        $message = htmlspecialchars(trim($_POST["message"]));  

        echo "<script>alert('Message from $name: $message');</script>";  
        
        echo "<div class='submitted-info'>";  
        echo "<h2>Submitted Information:</h2>";  
        echo "<p><strong>Name:</strong> $name</p>";  
        echo "<p><strong>Email:</strong> $email</p>";  
        echo "<p><strong>Message:</strong> $message</p>";  
        echo "</div>";  
    }  
    ?>  
</div>  

<script src="script.js"></script>  
</body>  
</html>