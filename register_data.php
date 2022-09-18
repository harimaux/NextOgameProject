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
    <title>Register</title>

    <link href="style/style.css" rel="stylesheet">
</head>

<body>


    <?php include('conn.php');

        if (isset($_POST['submitUser'])) {

            $emailInput = mysqli_real_escape_string($connection, $_POST['email']);
            $usernameInput = mysqli_real_escape_string($connection, $_POST['username']);
            

            $passwordInput = $_POST['password'];

            $checkEmailQuery = "SELECT accountEmail FROM accounts WHERE accountEmail = '$emailInput'";
            $checkEmailResults = mysqli_query($connection, $checkEmailQuery);

            while ($row = mysqli_fetch_array($checkEmailResults)) {

                $emailInDB = $row['accountEmail'];
            }

            /* WORK IN PROGRESS HERE */

            $checkUsernameQuery = "SELECT username FROM accounts WHERE username = '$usernameInput'";
            $checkUsernameResults = mysqli_query($connection, $checkUsernameQuery);

            while ($row = mysqli_fetch_array($checkUsernameResults)) {

                $usernameInDB = $row['username'];
            }

            if (!empty($emailInDB) == $emailInput) {

    ?>

    <h3>Registration failed, email already exists - <span><a href="register.php">back to register page</a></span></h3>

    <?php
            } elseif (!empty($usernameInDB) == $usernameInput)  {
                ?>

                <h3>Registration failed, username already exists - <span><a href="register.php">back to register page</a></span></h3>
            
                <?php

            } else {

                if (defined('PASSWORD_ARGON2ID')) {
                    $hashedPass = password_hash($passwordInput, PASSWORD_ARGON2ID, array('time_cost' => 10, 'memory_cost' => '2048k', 'threads' => 6));
                } else {
                    $hashedPass = password_hash($passwordInput, PASSWORD_DEFAULT, array('time_cost' => 10, 'memory_cost' => '2048k', 'threads' => 6));
                }

                $inputQuery = "INSERT INTO accounts (accountEmail, accountPass, username) VALUES ('$emailInput', '$hashedPass', '$usernameInput')";


                if (!mysqli_query($connection, $inputQuery)) {
                    echo "Error: " . $inputQuery . "<br>" . mysqli_error($connection);
                } else {

                ?>
    
                <h3>Registration complete - <span><a href="index.php">back to login page</a></span></h3>
    
                    <?php
                }

                mysqli_close($connection);
            }
        }

    ?>


</body>

</html>