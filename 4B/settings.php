<?php

// Untuk Koneksi Database
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'db_heroes';

// Menjalankan koneksi dengan database
$db = new mysqli($host, $user, $pass, $dbname);

// Cek jika koneksi ke Database Gagal
if (!$db) {
    // Menampilkan pesan error
    die("Gagal Terhubung Dengan Database" . mysqli_connect_error());
}
