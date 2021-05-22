<?php
$query = mysqli_query($db, "SELECT heroes_tb.id as heroes_id, heroes_tb.nama AS nama_heroes, type_tb.nama AS type_heroes, heroes_tb.photo FROM heroes_tb INNER JOIN type_tb ON heroes_tb.type_id=type_tb.id;");
?>
<h2>Heroes List</h2>
<hr>
<br><br>
<div class="books-wrapper">

  <?php

  if (mysqli_num_rows($query) <= 0) {
    echo '<h3>No Data Found!</h3>';
  } else {
    while ($res = mysqli_fetch_assoc($query)) {
      echo '
          <div class="card">
            <div class="header">
              <img src="image/' . $res['photo'] . '" alt="Image">
            </div>
            <div class="body">
              <p>Nama : ' . $res['nama_heroes'] . '</p>
              <p> Type : ' . $res['type_heroes'] . ' </p>
            </div>
            <div class="footer">
              <a href="?hal=heroes-detail&id=' . $res['heroes_id'] . '">Detail</a>
            </div>
          </div>
        ';
    }
  }
  ?>
</div>