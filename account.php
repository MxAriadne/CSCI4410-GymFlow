<?php
    require 'plugin.php';
    if (!isset($_SESSION['user'])) {
        header("location: index.php");
        exit();
    }

    if (isset($_GET['logout'])) {
        logoutUser();
        header("location: index.php");
    }

    if (isset($_GET['confirm-account-deletion'])) {
        deleteAccount();
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link type="text/css" rel="stylesheet" href="gymflow.css" />
    <title>Account Details - GymFlow</title>
</head>

<body>

<div class="navbar">
   <img src="GymFlow_Logo.png" alt="Gym Flow logo">
    <a href="index.php">Homepage</a>
    <div class="dropdown">
        <button class="dropbtn">Services
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <a href="workoutcustomizer.php">Workout Customizer</a>
            <a href="caloriccounter.php">Calorie Tracker</a>
        </div>
    </div>
    <a href="schedule.php">Schedule</a>
    <a href="about.php">About Us</a>
    <a href="account.php">My Account</a>
</div>

<h1>Hello, <?php echo $_SESSION["user"] ?>.</h1>

<button><a href="?logout">Logout</a></button>
<button><a href="?confirm-account-deletion">Delete account</a></button>

</body>

</html>
