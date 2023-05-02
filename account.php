<?php
    require 'workout.php';
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

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #5BB5FB;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .navbar {
        display: flex;
        justify-content: space-around;
        align-items: center;
        width: 100%;
        background-color: black;
        color: #fff;
        padding: 20px;
        margin-bottom: 20px;
    }

    .navbar a {
        color: #fff;
        text-decoration: none;
    }

    .navbar img {
        height: 50px;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
        margin-bottom: 40px;
    }

    .user-info, .recommended-exercises {
        text-align: center;
        background-color: #5BB5FB;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    .buttons {
        text-align: center;
        margin-bottom: 20px;
    }

    button {
        font-size: 16px;
        padding: 10px 20px;
        background-color: #025577;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-bottom: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    button a {
        text-decoration: none;
        color: #fff;
    }

    button:hover {
        background-color: #01384a;
    }

    h3 {
        margin-bottom: 20px;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: black;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown-content a {
        color: white;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #5BB5FB;
    }

    .dropbtn {
        background-color: black;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        padding-bottom: 2px;
    }
</style>
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

<div>
    <?php

    $data = retrieveUserInfo($_SESSION["user"]);
    if ($data != null) {
        echo "Gender: " . $data["gender"] . "<br>";
        echo "Age: " . $data["age"] . "<br>";
        echo "Weight: " . $data["weight"] . "<br>";
        echo "Height: " . $data["height"] . "<br>";

        $heightInMeters = $data['height'] / 100; // Convert height from cm to meters
        $weightInKg = $data['weight'] * 0.453592; // Convert weight from lbs to kg
        $bmi = round($weightInKg / pow($heightInMeters, 2), 1);

        echo "BMI: " . $bmi . "<br>";
        echo "Skill Level: " . $data["exercise_level"] . "<br>";
        echo "Current Goals: " . $data["goals"] . "<br>";
    }
    ?>
    <br>

    <h3>Here are your recommended exercises:</h3>

    <?php
    if ($_SESSION['routine']) {
        consoleLog($_SESSION['user']);
        $data = listExercises($_SESSION["user"]);
        if ($data != null) {
            foreach ($data as $exercise) {
                echo $exercise . "<br>";
            }
        }
    } else {
        echo "You haven't created any routines!";
    }
    ?>
</div>

<button><a href="?logout">Logout</a></button>
<button><a href="?confirm-account-deletion">Delete account</a></button>

<div>
</div>

</body>

</html>
