<?php
// Cek jika tombol update pada form update sudah di klik
if (!isset($_POST['edit_type'])) {
    // Kembali ke halaman form
    header('Location: index.php?hal=edit-type');
    die();
}

// Menyimpan id yg akan diupdate kedalam variabel
$id = $_POST['id'];
$type_name = $_POST['nama_type'];

// Menyiapkan Perintah Query untuk meng-update data
$query = "UPDATE type_tb SET nama = '$type_name' WHERE id = '$id'";
// Eksekusi Perintah Query untuk menyimpan data kedalam database
$execQuery = mysqli_query($db, $query) or die('Kesalahan pada Perintah Query: ' . mysqli_error($db)); // Jika Query gagal di eksekusi maka akan tampil pesan Error

header('Location: index.php?hal=tambah-type');
