<h2>Tambah Type</h2>
<hr>
<br><br>
<form action="?hal=process-tambah-type" method="POST">
    <table class="form">
        <tbody>
            <tr>
                <td><label for="nama_cat">Nama Type</label></td>
                <td>:</td>
                <td><input type="text" name="nama_type" id="nama_type" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input style="float: right;" type="submit" class="btn" name="tambah_type" value="Simpan"></td>
            </tr>
        </tbody>
    </table>
</form>
<br><br>
<h2>List Type</h2>
<hr>

<?php
$get_type_query = mysqli_query($db, "SELECT * FROM type_tb;");
?>

<table class="table-list">
    <thead>
        <th style="width:15px">#</th>
        <th>Type</th>
        <th style="width:300px">Action</th>
    </thead>
    <tbody>
        <?php
        $no = 1;
        while ($res = mysqli_fetch_assoc($get_type_query)) {
            echo '
        <tr>
          <td>' . $no++ . '</td>
          <td>' . $res['nama'] . '</td>
          <td>
            <a style="background: #b3b31c;" href="?hal=edit-type&id=' . $res['id'] . '">Edit</a>
            <a style="background: #d34f4f;" href="?hal=process-delete-type&id=' . $res['id'] . '">Delete</a>
          </td>
        </tr>
      ';
        }
        ?>
    </tbody>
</table>