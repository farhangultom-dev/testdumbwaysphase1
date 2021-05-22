<?php

// Menyimpan id yg akan diupdate kedalam variabel
$id = $_GET['id'];

$get_heroes_query = mysqli_query($db, "SELECT * FROM heroes_tb WHERE id='$id';");

if (mysqli_num_rows($get_heroes_query) <= 0) {
    header('Location: index.php');
}

$data = mysqli_fetch_assoc($get_heroes_query);

?>

<form action="?hal=process-edit-heroes" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <table class="form">
        <tbody>
            <tr>
                <td><label for="nama_buku">Nama Heroes</label></td>
                <td>:</td>
                <td><input type="text" name="nama_heroes" id="nama_heroes" value="<?php echo $data['nama']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="category">Type</label></td>
                <td>:</td>
                <td>
                    <?php
                    $get_cat_query = mysqli_query($db, "SELECT * FROM type_tb;");
                    ?>
                    <select name="type" id="type" required>
                        <option value="">--Pilih--</option>
                        <?php
                        while ($res = mysqli_fetch_assoc($get_cat_query)) {
                            if ($res['id'] == $data['type_id']) {
                                echo "<option value='$res[id]' selected>$res[nama]</option>";
                            } else {
                                echo "<option value='$res[id]'>$res[nama]</option>";
                            }
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="img">Image</label></td>
                <td>:</td>
                <td><input type="file" name="image" id="image" value="<?php echo "image/" . $data['photo']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input style="float: right;" type="submit" class="btn" name="edit_heroes" value="Simpan"></td>
            </tr>
        </tbody>
    </table>
</form>