<?php

$serverName = "localhost";
$dbUserName = "root";
$dbPassWord = "";
$dbName = "php01";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassWord, $dbName);

if (!$conn) {
   die('Connection error: ' . mysqli_connect_error());
}