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
    <title>Vinyls Online - Register</title>

    <link href="css/style.css" rel="stylesheet">
</head>

<body>



    <div class="register_login_background"></div>

    <div class="register_container">
        <form action="register_data.php" method="POST">
            <input type="text" name="username" placeholder="Username.." required>
            <input type="email" name="email" placeholder="Email..">
            <input type="password" name="password" placeholder="Password..">
            <div class=""><input type="submit" name="submitUser" value="Register"></div>
        </form>
    </div>

    <a href="index.php">Home</a>

</body>

</html>