<?php
$db_host = 'localhost'; // Ganti dengan host database Anda
$db_user = 'username'; // Ganti dengan username database Anda
$db_pass = 'password'; // Ganti dengan password database Anda
$db_name = 'db_berita_acara'; // Sesuaikan dengan nama database Anda

$koneksi = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}
?>