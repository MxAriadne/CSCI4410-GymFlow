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

<h1>Hello, <?php echo $_SESSION["user"] ?>.</h1>

<button><a href="?logout">Logout</a></button>
<button><a href="?confirm-account-deletion">Delete account</a></button>

</body>

</html>
