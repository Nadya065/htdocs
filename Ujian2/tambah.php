<?php

require 'function.php';   
$conn = mysqli_connect("localhost", "root", "", "dbmovie");
if( isset($_POST["submit"])){
if( tambah($_POST) > 0){
    echo "
    <script>
    alert('data berhasil ditambahkan!');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo " <script>
    alert('data gagal ditambahkan!');
    document.location.href = 'index.php';
    </script>
    ";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah data film</title>
</head>
<body>
<h1>Tambah data film</h1>
 <form action="" method="post" enctype="multipart/form-data">
<ul>
    <li>
        <label for="movie_title">Nama : </label>
        <input type="text" name="nama" id="movie_title" required>
    </li>
    <li>
        <label for="movie_time">waktu :</label>
        <input type="text" name="movie_time" id="movie_time" required>
    </li>
    <li>
        <label for="movie_language">Bahasa :</label>
        <input type="text" name="movie_language" id="movie_language" required>
    </li>
    <li>
        <label for="movie_release_date">tanggal rilis :</label>
        <input type="text" name="movie_release_date" id="movie_release_date" required>
    </li>
    <li>
        <label for="movie_release_country">negara :</label>
        <input type="text" name="movie_release_country" id="movie_release_country" required>
    </li>

    <li>
        <button type="submit" name="submit">tambah data!</button>
    </li>
</ul>
 
</form>
</body>
</html>