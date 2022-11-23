<?php

require 'function.php';

$movie_id = $_GET["movie_id"];

$row = query("SELECT * FROM tbmovie WHERE movie_id = $movie_id")[0];

if( isset($_POST["submit"]) ) {
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data tidak berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah</title>
</head>
<body>
<h1>Ubah Data</h1>

<form action="" method="post">
    <ul>
        <li>
            <input type="hidden" name="movie_id" id="movie_id" value="<?= $row["movie_id"];?>">
        </li>
        <li>
            <label for="movie_title">Judul</label>
            <input type="text" name="movie_title" id="movie_title" required value="<?= $row["movie_title"];?>">
        </li>
        <li>
            <label for="movie_time">Durasi</label>
            <input type="text" name="movie_time" id="movie_time" required value="<?= $row["movie_time"];?>">
        </li>
        <li>
            <label for="movie_language">Bahasa</label>
            <input type="text" name="movie_language" id="movie_language" required value="<?= $row["movie_language"];?>">
        </li>
        <li>
            <label for="movie_release_date">Tanggal rilis</label>
            <input type="text" name="movie_release_date" id="movie_release_date" required value="<?= $row["movie_release_date"];?>">
        </li>
        <li>
            <label for="movie_release_country">Negara</label>
            <input type="text" name="movie_release_country" id="movie_release_country" required value="<?= $row["movie_release_country"];?>">
        </li>
        <li>
            <button type="submit" name="submit">Ubah</button>
        </li>
    </ul>
</form>
</body>
</html>