<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - DBT</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="topnav">
    <!-- Top nav section -->
    <a href="./">Home</a>
    <a href="aboutForm.html">About</a>
    <a href="projectsForm.html">Projects</a>
    <a href="teamForm.html">Team</a>
    <a href="productsForm.html">Products</a>
    <a href="formInput.html">Form</a>
    <a href="contactForm.html">Contacts</a>

    <div class="topnav-right">
        <a href="signIn.html">Sign In</a>
        <a href="signUp.html">Sign Up</a>
    </div>
</div>

<div class="header">
    <h1>Form Input</h1>
</div>
<div class="row">
    <div class="content">
        <h2>Talk to Us</h2>

<form action="" method="post">
    <input type="text" id="fullName" placeholder="Enter your full name" required/><br>
    <input type="email" id="emailAddress" placeholder="Enter your email address" required /><br>
    <input type="date" id="startDate" required />
    <input type="date" id="endDate" required />
    <input type="tel" placeholder="Enter your phone number" required /><br>
        <select name="" id="">
        <option value="" disabled selected>Select Subject</option>
        <option value="option1">Email Support</option>
        <option value="option2">eLearning Support</option>
        <option value="option3">Attendance Support</option>
        <option value="option5">General Feedback</option>
    </select><br>
    <textarea name="message" rows="5" cols="30" placeholder="Enter your message here..." required></textarea><br>
    <input type="submit" value="Send Message" />
    <input type="reset" value="Clear" />
</form>

<p>Form input fields are essential for gathering user data in a structured manner. The form above includes various input types such as text, email, date, and a dropdown menu to capture specific information efficiently.</p>
<p>This form is designed to facilitate communication between users and our team. It allows users to submit their queries, feedback, or requests for assistance directly through the website.</p>
<p>Feel free to reach out to us through the contact form if you have any questions or need further information. We are here to help you achieve your goals and provide the support you need.</p>

    </div>
    <div class="sidebar">
                <h2>Side Bar</h2>
        <p>We are a team of dedicated professionals committed to delivering high-quality services and products.</p>
        <p>This is the about page. It contains information about the website, its purpose, and the team behind it. 
        You can find details on our mission, vision, and values here. We aim to provide a comprehensive overview of 
        our services and how we can help you achieve your goals.</p>
    </div>
</div>
<?php include 'includes/footer.php'; ?>
</div>

</body>
</html>


       