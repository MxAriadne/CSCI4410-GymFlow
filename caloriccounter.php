<?php
    require "calories.php";
    $result = "";
    if (isset($_POST['submit'])) {
        if ($_POST['breakfast'] != null && $_POST['b-cal'] != null) {
            addMeal($_POST['breakfast'], $_POST['b-cal']);
            $result = "Successfully saved!";
        }
        if ($_POST['lunch'] != null && $_POST['l-cal'] != null) {
            addMeal($_POST['lunch'], $_POST['l-cal']);
            $result = "Successfully saved!";
        }
        if ($_POST['dinner'] != null && $_POST['d-cal'] != null) {
            addMeal($_POST['dinner'], $_POST['d-cal']);
            $result = "Successfully saved!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link type="text/css" rel="stylesheet" href="gymflow.css" />
    <title>Calorie Tracker - GymFlow</title>
</head>
<body>
    <H1>Calorie Tracker</H1>

    <div class="navbar">
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


    <div>

        <h2>Caloric intake for <?php echo date("Y/m/d"); ?></h2>

        <form>
            <label for="breakfast">Breakfast</label><br>
            <input type="text" id="breakfast" name="breakfast" placeholder="Meal items"><br>
            <input type="text" id="b-cal" name="b-cal" placeholder="Input caloric intake for this meal!">
            <br>
            <label for="lunch">Lunch</label><br>
            <input type="text" id="lunch" name="lunch" placeholder="Meal items"><br>
            <input type="text" id="b-cal" name="b-cal" placeholder="Input caloric intake for this meal!">
            <br>
            <label for="dinner">Dinner</label><br>
            <input type="text" id="dinner" name="dinner" placeholder="Meal items"><br>
            <input type="text" id="b-cal" name="b-cal" placeholder="Input caloric intake for this meal!">
            <br>
            <button type="submit" name="submit">Save</button>
            <p name="status"> <?php echo $result; ?></p>
        </form>
        <br>
        <button><a><- Previous</a></button><button><a>Next -></a></button>

    </div>

    <div>

        <?php
            function propagateHTML($date)
            {
                $body = retrieveCalories();
                foreach ($body as $value) {
                    echo $value;
                }
                echo $date;
            }
            propagateHTML(date("Y/m/d"));
        ?>

    </div>


    <h5>© 2023 GymFlow</h5>
</body>
</html>
