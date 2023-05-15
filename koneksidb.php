<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "formulir";

// Membuat Koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);

// Cek Koneksi
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
?>