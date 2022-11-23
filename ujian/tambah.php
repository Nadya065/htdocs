<?php

require 'function.php';

if( isset($_POST["submit"])){
    if( tambah($_POST) > 0 ){
        echo "
            <script>
                alert('Data berhasil ditambah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambah');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama_mapel">Mata Pelajaran: </label>
                <input type="text" name="nama_mapel" id="nama_mapel" required>
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="kelas">Kelas: </label>
                <input type="text" name="kelas" id="kelas" required>
            </li>
            <li>
                <label for="tanggal_ujian">Tanggal Ujian: </label>
                <input type="text" name="tanggal_ujian" id="tanggal_ujian" required>
            </li>
            <li>
                <label for="durasi_ujian">Durasi: </label>
                <input type="text" name="durasi_ujian" id="durasi_ujian" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>

</body>
</html>