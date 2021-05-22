<?php
// Cek jika tombol update pada form update sudah di klik
if (!isset($_POST['edit_heroes'])) {
    // Kembali ke halaman form
    header('Location: index.php');
    die();
}

// Menyimpan id yg akan diupdate kedalam variabel
$id = $_POST['id'];
$nama_heroes = $_POST['nama_heroes'];
$type_id = $_POST['type'];
$img = isset($_POST['image']) && !empty($_POST['image']) ? $_POST['image'] : '';

// Menyiapkan Perintah Query untuk meng-update data
$query = "UPDATE heroes_tb SET nama = '$nama_heroes', type_id = '$type_id', photo = '$img' WHERE id = '$id';";
// Eksekusi Perintah Query untuk menyimpan data kedalam database
$execQuery = mysqli_query($db, $query) or die('Kesalahan pada Perintah Query: ' . mysqli_error($db)); // Jika Query gagal di eksekusi maka akan tampil pesan Error

header('Location: index.php');
