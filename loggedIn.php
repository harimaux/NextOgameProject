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

        <a href="logout.php">Log Out</a><br>

        <p id="serverTime"></p>
    </div>


    




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>