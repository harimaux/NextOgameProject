<?php


if (!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinyls Online - Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="indexBackground">

    </div>

    <?php

    if (!isset($_SESSION['username'])) {
        ?>

    <div class="indexFormBox">

        <form action="login_script.php" method="POST">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="login_user" value="Login">
        </form>

        <p>Don't have an account yet? <span><a href="register.php">Register</a></span></p>
    </div>
    <?php } else { ?>

    <div class="indexFormBox">
        <a href="logout.php">Logout</a>
    </div>


    <?php
    }

    ?>



</body>

</html>