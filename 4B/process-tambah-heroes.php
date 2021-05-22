<?php

// Cek jika tombol simpan pada form tambah sudah di klik
if (!isset($_POST['tambah_heroes'])) {
    // Kembali ke halaman form tambah
    header('Location: index.php?hal=tambah-heroes');
    die();
}

$nama_file = $_FILES['image']['name'];
$ukuran_file = $_FILES['image']['size'];
$tipe_file = $_FILES['image']['type'];
$tmp_file = $_FILES['image']['tmp_name'];

$path = "image/" . $nama_file;

// Menyimpan data POST yang dikirim dari form tambah kedalam variabel
$nama_heroes = $_POST['nama_heroes'];
$type = $_POST['type'];

if ($tipe_file == "image/jpeg" || $tipe_file == "image/jpg" || $tipe_file == "image/png") {
    if ($ukuran_file <= 1000000) {
        if (move_uploaded_file($tmp_file, $path)) {
            $query;
        }
    }
}

$query = "INSERT INTO heroes_tb(nama, type_id, photo) VALUES ('$nama_heroes', $type, '$nama_file')";
$execQuery = mysqli_query($db, $query) or die('Kesalahan pada Perintah Query: ' . mysqli_error($db));

// Menyiapkan Perintah Query untuk menyimpan data inputan
// Eksekusi Perintah Query untuk menyimpan data kedalam database
// Jika Query gagal di eksekusi maka akan tampil pesan Error

// Kembali ke halaman utama
header('Location: index.php');
