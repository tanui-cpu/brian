<div class="topnav">
    <!-- Top nav section -->
    <a href="./">Home</a>
    <a href="aboutForm.php">About</a>
    <a href="projectsForm.php">Projects</a>
    <a href="teamForm.php">Team</a>
    <a href="productsForm.php">Products</a>
    <a href="formInput.php">Form</a>
    <a href="contactForm.php">Contacts</a>

    <div class="topnav-right">
        <?php if(isset($_SESSION['consort'])) { ?>
        <a href="profile.php">Profile</a>
        <a href="proc/processes.php?logout=true">Logout</a>
        <?php } else { ?>
        <a href="signIn.php">Sign In</a>
        <a href="signUp.php">Sign Up</a>
        <?php } ?>
    </div>
</div>
<div class="header">
    <h1>
    <?php 
$title = explode('.', basename($_SERVER['PHP_SELF']));
print ucwords(reset($title));
    ?>
    </h1>
</div>