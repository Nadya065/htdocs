<?php
session_start();

if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}


require 'function.php';

$id = $_GET["id"];

$u = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post">
        <ul>
                <input type="hidden" name="id" value="<?= $u["id"];?>">
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required  value="<?= $u["nama"];?>">
            </li>
            <li>
                <label for="nrp">Nrp: </label>
                <input type="text" name="nrp" id="nrp" required  value="<?= $u["nrp"];?>">
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" required  value="<?= $u["email"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan: </label>
                <input type="text" name="jurusan" id="jurusan" required  value="<?= $u["jurusan"];?>">
            </li>
            <li>
                <label for="gambar">Gambar: </label>
                <input type="text" name="gambar" id="gambar" required  value="<?= $u["gambar"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>

</body>
</html>