<?php

// Menyimpan id yg akan dihapus kedalam variabel
$id = $_GET['id'];


// Menyiapkan Perintah Query untuk menghapus data
$query = "DELETE FROM heroes_tb WHERE id = '$id'";
// Eksekusi Perintah Query untuk menghapus data dalam database
$execQuery = mysqli_query($db, $query) or die('Kesalahan pada Perintah Query: ' . mysqli_error($db)); // Jika Query gagal di eksekusi maka akan tampil pesan Error

header('Location: index.php');
