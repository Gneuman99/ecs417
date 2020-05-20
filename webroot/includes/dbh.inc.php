<?php

$servername = getenv("MYSQL_SERVICE_HOST");
$username = getenv("DATABASE_USER");
$dBPassword = getenv("DATABASE_PASSWORD");
$dBName = getenv("DATABASE_NAME");

$conn = mysqli_connect($servername, $username, $dBPassword, $dBName);

if (!$conn){
		die("Connection failed: ".mysqli_connect_error());
}