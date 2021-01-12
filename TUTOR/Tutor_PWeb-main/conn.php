<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "modict";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("error bang");
}
