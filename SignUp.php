php
    require 'config/dbconnect.php';
    require 'includes/header.php';
    require 'includes/nav.php';
?>

<div class="row">
    <div class="content">
        <h2>Sign Up</h2>

<form action="proc/processes.php" method="post">
    <input type="text" name="fullname" placeholder="Enter your full name" required autofocus/><br>
    <input type="email" name="email" placeholder="Enter your email address" required /><br>
    <input type="tel" name="phone" placeholder="Enter your phone number" maxlength="13" required /><br>

<select name="genderId" required>
    <option value="">Select your gender</option>
    <?php
    $spot_gender = "select * from gender";
    $result = $conn->query($spot_gender);
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['genderId'] . "'>" . $row['gender'] . "</option>";
    }
    ?>
</select>


<select name="roleId" required>
    <option value="">Select your role</option>
    <?php
    $spot_role = "select * from roles";
    $result = $conn->query($spot_role);
    while ($row = $result->fetch_assoc()) {
        if ($row['role'] == 'Admin') {
            continue; // Skip the Admin role
        }
        echo "<option value='" . $row['roleId'] . "'>" . $row['role'] . "</option>";
    }
    ?>
</select>

    <input type="text" placeholder="Create a username" required/><br>
    <input type="password" placeholder="Create a password" required/><br>
    <input type="password" placeholder="Confirm your password" required/><br>
<br>
    <input type="submit" value="Sign Up" />  
    <a href="signIn.html">Already have an account? Sign In</a>
</form>

     <h>Learn more about our Team and Mission</h>
        <p>We are a dedicated team of professionals committed to delivering the best services to our clients. 
        Our mission is to provide innovative solutions that meet the needs of our customers and exceed their expectations.</p> 
    </div>
    <div class="sidebar">
               <h2>Side Bar</h2>
        <p>This is the about page. It contains information about the website, its purpose, and the team behind it.</p> 
        <p>You can find details on our mission, vision, and values here. We aim to provide a comprehensive overview of 
        our services and how we can help you achieve your goals.</p>
        <p>Feel free to reach out to us through the contact form if you have any questions or need further information.</p>
    </div>
</div>
<?php
    require 'includes/footer.php';
?>
