<?php

include 'TUTOR/Tutor_PWeb-main/conn.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password1'];

$sql = "SELECT * FROM user WHERE username='$username'";
$bibi = mysqli_query($conn, $sql);
$bobo = mysqli_fetch_assoc($bibi);
// die($sql);
//echo $password . "<br>" . $bobo['password'];
if (!password_verify($password, $bobo['password'])) {
	echo 'Invalid password';
	header("Location:login.php");
} else {
	header("Location:loginlogin/index.php");
	$_SESSION['user'] = $username;
}
