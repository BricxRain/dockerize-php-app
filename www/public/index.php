<?php

$name = 'Bricx';

// print MYSQL CREDENTIALS
echo "{$_ENV['MYSQL_HOST']} <br>";
echo "{$_ENV['MYSQL_USER']} <br>";
echo "{$_ENV['MYSQL_PASSWORD']} <br>";
echo "{$_ENV['MYSQL_DATABASE']} <br>";

echo "<br> Hello World! and {$name} <br><br>";

// mySQL server credentials
$host = $_ENV['MYSQL_HOST'];
$username = $_ENV['MYSQL_USER'];
$password = $_ENV['MYSQL_PASSWORD'];

// Create connection
$connection = new mysqli($host, $username, $password);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";