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
</div>

<button><a href="?logout">Logout</a></button>
<button><a href="?confirm-account-deletion">Delete account</a></button>

<div>
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

</body>

</html>
