<?php

// Cek jika tombol simpan pada form tambah sudah di klik
if (!isset($_POST['tambah_type'])) {
    // Kembali ke halaman form tambah
    header('Location: index.php?hal=tambah-type');
    die();
}

// Menyimpan data POST yang dikirim dari form tambah kedalam variabel
$nama_type = $_POST['nama_type'];

// Menyiapkan Perintah Query untuk menyimpan data inputan
$query = "INSERT INTO type_tb (nama) VALUES ('$nama_type')";
// Eksekusi Perintah Query untuk menyimpan data kedalam database
$execQuery = mysqli_query($db, $query) or die('Kesalahan pada Perintah Query: ' . mysqli_error($db)); // Jika Query gagal di eksekusi maka akan tampil pesan Error

// Kembali ke halaman utama
header('Location: index.php?hal=tambah-type');
