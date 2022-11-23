<?php
require 'function.php';
$movie = query("SELECT * FROM tbmovie");

if( isset($_POST["cari"])) {
    $movie = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ulangan movie</title>
</head>
<body>
    <h1>Film populer</h1>
    <a href="tambah.php">Klik disini untuk menambah data film</a>
    <br><br>
    <form action="" method="post"> 
    <input type="text" name="keyword" size="40" autofocus
    placeholder="masukan keyword percarian..." autocomplete="off">
    <button type="submit" name="cari">cari</button>
</form>
<br></br>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Judul</th>
    <th>Durasi</th>
    <th>Bahasa</th>
    <th>Tanggal rilis</th>
    <th>negara</th>
</tr>
<?php $i = 1; ?>
<?php foreach($movie as $row):?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href="ubah.php?movie_id=<?=$row["movie_id"];?>">ubah</a> |
        <a href="hapus.php?movie_id=<?= $row["movie_id"]; ?>" onclick="return confirm('Yakin ingin menghapus?')">hapus</a>
    </td>
    <td><?= $row["movie_title"]; ?></td>
    <td><?= $row["movie_time"]; ?></td>
    <td><?= $row["movie_language"]; ?></td>
    <td><?= $row["movie_release_date"]; ?></td>
    <td><?= $row["movie_release_country"]; ?></td>
</tr>
<?php $i ++;?>
<?php endforeach;?>
</table>
</body>
</html>