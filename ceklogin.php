<?php
// Definisikan username dan password
$valid_username = "auditi";
$valid_password = "auditi19";

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa apakah username dan password valid
if ($username == $valid_username && $password == $valid_password) {
	// Jika valid, redirect ke halaman welcome
	header("Location: formregist.php");
	exit();
} else {
	// Jika tidak valid, redirect kembali ke halaman login
	header("Location: login.php");
	exit();
}
?>