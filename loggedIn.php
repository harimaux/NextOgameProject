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

<p class="login_note">Hi <?php echo $_SESSION['username']; ?>. You are logged in.</p><br>
<a href="logout.php">Log Out</a>
    
</body>
</html>