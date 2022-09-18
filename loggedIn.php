<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['username'])) {
    header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!--     <div class="loggedInBackground">

    </div> -->

    <div class="loggedInUserData">
        <p class="login_note">Hi <?php echo $_SESSION['username']; ?>. You are logged in.</p><br>
        <a href="logout.php">Log Out</a>
    </div>

    <div class="serverTime">
        <?php
// set default timezone
date_default_timezone_set('Europe/London'); // CDT

$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$hour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];

echo "<div class='serverDay'>" . $date . "</div>";
echo "<div class='serverMonth'>" . $month . "</div>";
echo "<div class='serverYear'>" . $year . "</div>";
echo "<div class='serverHour'>" . $hour . "</div>";
echo "<div class='serverMin'>" . $min . "</div>";
echo "<div class='serverSec'>" . $sec . "</div>";

/* $current_date = date('d/m/Y == H:i:s');

echo "<div class='erverDate'>Current Server Date: " . $current_date . "</div>"; */


?>
    </div>

    <div class="showServerTime">
        <div class="showDay"></div>
        <p>/</p>
        <div class="showMonth"></div>
        <p>/</p>
        <div class="showYear"></div>
        <p> - </p>
        <div class="showHour"></div>
        <p>:</p>
        <div class="showMin"></div>
        <p>:</p>
        <div class="showSec"></div>
    </div>

    <?php
        date_default_timezone_set('Europe/London'); //e.g. date_default_timezone_set('Asia/Kolkata');
        echo "<div class='serverDatePHP'>" . date("H:i:s") . "</div>";
    ?>

    <script src="js/script.js"></script>

</body>

</html>