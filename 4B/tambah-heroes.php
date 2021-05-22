<h2>Tambah Heroes</h2>
<hr>
<br><br>
<form action="?hal=process-tambah-heroes" method="POST" enctype="multipart/form-data">
    <table class="form">
        <tbody>
            <tr>
                <td><label for="nama_heroes">Nama Heroes</label></td>
                <td>:</td>
                <td><input type="text" name="nama_heroes" id="nama_heroes" required></td>
            </tr>
            <tr>
                <td><label for="category">Type</label></td>
                <td>:</td>
                <td>
                    <?php
                    $get_type_query = mysqli_query($db, "SELECT * FROM type_tb;");
                    ?>
                    <select name="type" id="type" required>
                        <option value="">--Pilih--</option>
                        <?php
                        while ($res = mysqli_fetch_assoc($get_type_query)) {
                            echo "<option value='$res[id]'>$res[nama]</option>";
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="img">Photo</label></td>
                <td>:</td>
                <td><input type="file" name="image" id="image"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input style="float: right;" type="submit" class="btn" name="tambah_heroes" value="Simpan"></td>
            </tr>
        </tbody>
    </table>
</form>

<h2>List Heroes</h2>
<hr>

<?php
$get_heroes_query = mysqli_query($db, "SELECT heroes_tb.id, heroes_tb.nama AS nama_heroes, type_tb.nama AS type_heroes, heroes_tb.photo AS img FROM heroes_tb INNER JOIN type_tb ON heroes_tb.type_id=type_tb.id;");
?>

<table class="table-list">
    <thead>
        <th style="width:15px">No</th>
        <th style="width:300px">Nama</th>
        <th style="width:300px">Type</th>
        <th style="width:300px">Gambar</th>
        <th style="width:300px">Action</th>
    </thead>
    <tbody>
        <?php
        $no = 1;
        while ($res = mysqli_fetch_assoc($get_heroes_query)) {
            echo '
        <tr>
          <td>' . $no++ . '</td>
          <td>' . $res['nama_heroes'] . '</td>
          <td>' . $res['type_heroes'] . '</td>
          <td><img class="rounded" src="image/' . $res['img'] . '" alt="Image"></td>
          <td>
            <a style="background: #b3b31c;" href="?hal=edit-heroes&id=' . $res['id'] . '">Edit</a>
            <a style="background: #d34f4f;" href="?hal=process-delete-heroes&id=' . $res['id'], $res['img'] . '">Delete</a>
          </td>
        </tr>
      ';
        }
        ?>
    </tbody>
</table>