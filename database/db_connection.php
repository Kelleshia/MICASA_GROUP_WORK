<?php

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbDataBaseName = 'micasa';

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbDataBaseName) or die("<h1>Could not connect to database.</h1>");