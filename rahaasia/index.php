<?php
session_start();

if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

require 'function.php';

$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman admin</title>
</head>
<body>
<a href="logout.php">Logout</a>

<h1>daftar mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>No.</th>
    <th>Gambar</th>
    <th>NRP</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Jurusan</th>
</tr>
<?php $i = 1; ?>
<?php foreach( $mahasiswa as $row ) :?>
<tr>
    <td><?= $i; ?></td>
    <td><img src="img/<?= $row["gambar"]; ?>" width="60"></td>
    <td><?= $row["nrp"]; ?></td>
    <td><?= $row["nama"]; ?></td>
    <td><?= $row["email"]; ?></td>
    <td><?= $row["jurusan"]; ?></td>
</tr>
<?php $i ++;?>
<?php endforeach;?>
</table>
</body>
</html>