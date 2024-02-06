<?php
// Koneksi ke database (sesuaikan dengan informasi database Anda)
$host = "localhost";
$user = "root";
$password = "";
$database = "iplm_rev";

$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}