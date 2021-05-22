<?php
// Cek id
if (!isset($_GET['id']) && !empty($_GET['id'])) {
    header('Location: index.php');
    die();
}

// var_dump('test');
// die();

// Menyimpan id kedalam variabel
$id = $_GET['id'];

$get_heroes_query = mysqli_query($db, "SELECT heroes_tb.id AS heroes_id, heroes_tb.nama AS nama_heroes, type_tb.nama AS type_heroes, heroes_tb.photo AS img FROM heroes_tb INNER JOIN type_tb ON heroes_tb.type_id=type_tb.id WHERE heroes_tb.id = '$id';");

if (mysqli_num_rows($get_heroes_query) <= 0) {
    header('Location: index.php');
}
$res = mysqli_fetch_assoc($get_heroes_query);
?>

<h2>Detail Heroes</h2>
<hr>
<br><br>
<div class="detail-book-wrapper">
    <div class="cover">
        <img src="image/<?php echo $res['img']; ?>" alt="Image">
    </div>
    <br>
    <div class="body">
        <div class="list-info">
            <table class="detail-book-table">
                <tr>
                    <td style="width: 150px;"><b>ID</b></td>
                    <td style="width:10px">:</td>
                    <td><?php echo $res['heroes_id']; ?></td>
                </tr>
                <tr>
                    <td><b>NAMA</b></td>
                    <td>:</td>
                    <td><?php echo $res['nama_heroes']; ?></td>
                </tr>
                <tr>
                    <td><b>TYPE</b></td>
                    <td>:</td>
                    <td><?php echo $res['type_heroes']; ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="float:right;">
                        <a style="background: #d34f4f;" href="index.php">
                            <--BACK </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>