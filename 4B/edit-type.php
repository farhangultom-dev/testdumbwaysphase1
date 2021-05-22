<?php

// Menyimpan id yg akan diupdate kedalam variabel
$id = $_GET['id'];

$get_type_query = mysqli_query($db, "SELECT * FROM type_tb WHERE id='$id';");

if (mysqli_num_rows($get_type_query) <= 0) {
    header('Location: index.php?hal=tambah-type');
}

$res = mysqli_fetch_assoc($get_type_query);

?>
<h2>Edit Type</h2>
<hr>
<br><br>
<form action="?hal=process-edit-type" method="POST">
    <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
    <table class="form">
        <tbody>
            <tr>
                <td><label for="nama_category">Nama Type</label></td>
                <td>:</td>
                <td><input type="text" name="nama_type" id="nama_type" value="<?php echo $res['nama']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input style="float: right;" type="submit" class="btn" name="edit_type" value="Perbaharui"></td>
            </tr>
        </tbody>
    </table>
</form>