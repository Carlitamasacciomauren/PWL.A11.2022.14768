<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB = "toko_lita";

$koneksi = new mysqli ($servername, $username, $password, $myDB);
if ($koneksi->connect_error)
die("koneksi ke server_database gagal" . $conn->connect_error);
?>