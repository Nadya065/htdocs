<?php

require 'function.php';

$id_ujian = $_GET["id"];

$u = query("SELECT * FROM tb_ujian WHERE id_ujian = $id_ujian")[0];

if( isset($_POST["submit"])){
    if( ubah($_POST) > 0 ){
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>ubah data</title>
</head>
<body>
    <h1>Ubah data</h1>

    <form action="" method="post">
        <ul>
                <input type="hidden" name="id_ujian" value="<?= $u["id_ujian"];?>">
            <li>
                <label for="nama_mapel">Mata Pelajaran: </label>
                <input type="text" name="nama_mapel" id="nama_mapel" required  value="<?= $u["nama_mapel"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" required  value="<?= $u["jurusan"];?>">
            </li>
            <li>
                <label for="kelas">Kelas: </label>
                <input type="text" name="kelas" id="kelas" required  value="<?= $u["kelas"];?>">
            </li>
            <li>
                <label for="tanggal_ujian">Tanggal Ujian: </label>
                <input type="text" name="tanggal_ujian" id="tanggal_ujian" required  value="<?= $u["tanggal_ujian"];?>">
            </li>
            <li>
                <label for="durasi_ujian">Durasi: </label>
                <input type="text" name="durasi_ujian" id="durasi_ujian" required  value="<?= $u["durasi_ujian"];?>">
            </li>
            <li> 
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>

</body>
</html>