<?php
    require 'config/dbconnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>
<div class="row">
    <div class="content">
        <h2>Terms and Conditions</h2>Add commentMore actions
<p>HTML forms enable you to gather user input in various formats, making it easier to collect structured data. The form above includes fields for text, email, phone number, password, color selection, date and time selection, number input, range input, file upload, a text area for messages, checkboxes, radio buttons, and a dropdown menu—each designed to capture specific information efficiently.</p>
<p>This is the Sign In page. It allows users to log in to their accounts using their username and password. If you don't have an account, you can sign up using the provided link.</p>
    </div>
    <div class="sidebar">
                <h2>Sign In</h2>

<form action="" method="post">
    <input type="text" placeholder="Enter your username" required/><br>
    <input type="password" placeholder="Enter your password" required /><br>
<form action="proc/processes.php" method="post">
    <input type="text" name="username" placeholder="Enter your username" autofocus required/><br>
    <input type="password" name="passphrase" placeholder="Enter your passphrase" required /><br>
<br>
    <input type="submit" value="Sign In" />
    <input type="submit" name="signin" value="Sign In" />
    <a href="signup.php">Don't have an account? Sign Up</a>
</form>
        <h2>Side Bar</h2>
    
        <p>We are a dedicated team of professionals committed to delivering the best services to our clients. 
        Our mission is to provide innovative solutions that meet the needs of our customers and exceed their expectations.</p> 
    </div>
</div>
<?php
    require 'includes/footer.php';
?>

</body>
</html>
   