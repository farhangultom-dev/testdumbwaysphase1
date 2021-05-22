<?php
// Halaman yang dapat diakses
$halamanArr = array(
    "home", "tambah-heroes", "process-tambah-heroes", "tambah-type", "process-tambah-type",
    "heroes-detail", "process-delete-heroes", "edit-heroes", "process-edit-heroes", "edit-type",
    "process-edit-type", "process-delete-type"
);

$isRedirectToHome = true;
foreach ($halamanArr as $h) {
    if ($h == $hal && $h != 'home') {
        $isRedirectToHome = false;
        include "$h.php";
        break;
    }
}

if ($isRedirectToHome) {
    include "home.php";
}
