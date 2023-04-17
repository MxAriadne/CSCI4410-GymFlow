<?php
/*
 * calories.php
 * Contains variables and functions needed for the calorie counter.
 *
 */

// Borrowing the common functions from plugin.php
require "plugin.php";

// Date is the unique key for the calorie tracker SQL schema
$date = date("Y/m/d");

// Since the calorie counter data is tied to the users account,
// we need to be able to retrieve their username from session_id
$user = $_SESSION['user'];

function retrieveCalories()
{
    $mysqli = sqlConnect();
    if ($mysqli) {

        // SQL command to pull all records from calories under this users account
        $stmt = $mysqli->prepare("SELECT * FROM calories WHERE username = ?");
        $stmt->bind_param("s", $GLOBALS['user']);
        $stmt->execute();
        // Save result
        $result = $stmt->get_result();
        // Save associative array in $data
        $data = $result->fetch_assoc();
        // Make sure the array isn't null
        if ($data == null) {
            consoleLog("Calories have never been recorded for this user.");
            return null;
        } else {
            return $data;
        }
    }
}

function addMeal($meal, $calories)
{
    $mysqli = sqlConnect();
    if ($mysqli) {

        // SQL command to pull all records from calories under this users account
        $stmt = $mysqli->prepare("INSERT INTO meal (ITEM, CALORIES) VALUES(?, ?)");
        $stmt->bind_param("si", $meal, $calories);
        $stmt->execute();
        $stmt = $mysqli->prepare("INSERT INTO calories (ITEM, CALORIES) VALUES(?, ?)");
        $stmt->bind_param("si", $meal, $calories);
        $stmt->execute();
        if ($stmt -> affected_rows == 0) {
            consoleLog("An error occurred. Please try again :c");
        } else {
            consoleLog("Successfully added to database.");
        }
    }
}
