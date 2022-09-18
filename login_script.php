<?php

include('conn.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $inputEmail = mysqli_real_escape_string($connection, $_POST['email']);
    $inputPassword = $_POST['password'];

    $query = "SELECT * FROM accounts WHERE accountEmail = '$inputEmail'";
    $results = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($results);

    $dbPassword = $row['accountPass'];

    if (password_verify($inputPassword, $dbPassword)) {

        $_SESSION['username'] = $row['username'];
        $_SESSION['userID'] = $row['userID'];

        header('location:loggedIn.php');

    } else {

        ?>
        <h1>Email or password incorrect</h1>
        <a href="index.php">Back to home</a><br><br>

        <?php
    }
}

mysqli_close($connection);