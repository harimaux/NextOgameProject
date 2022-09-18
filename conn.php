<?php

$host = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "og1";


$connection = mysqli_connect($host, $dbUser, $dbPassword, $dbName);

if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
};