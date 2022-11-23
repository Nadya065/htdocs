<?php
session_start();

if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

require 'function.php';

//pagination
$jumlah = 2;
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
$data = count(query("SELECT * FROM mahasiswa"));
$halaman = ceil($data/$jumlah);
$aktif = ( isset($_GET["page"])) ? $_GET["page"] : 1;
$awal = ($jumlah * $aktif) - $jumlah ;



$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awal, $jumlah");

//tombol cari diklik
if( isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman admin</title>
</head>
<body>
<a href="logout.php">Logout</a>

<h1>daftar mahasiswa</h1>

<a href="tambah.php">tambah data mahasiswa</a>
<br></br>

<form action="" method="post"> 
    <input type="text" name="keyword" size="40" autofocus
    placeholder="masukan keyword percarian..." autocomplete="off">
    <button type="submit" name="cari">cari</button>
</form>
<br>
<?php if($aktif > 1) :?>
    <a href="?page=<?= $aktif - 1;?>">&laquo;</a>
    <?php endif;?>


    <?php for($i = 1; $i <= $halaman; $i++ ) :?>
    <?php if( $i == $aktif) :?>
        <a href="?page=<?= $i; ?>" style="font-weight: bold; color: green;
        "><?= $i;?></a>
    <?php else :?>
        <a href="?page=<?= $i; ?>"><?= $i;?></a>
    <?php endif;?>
<?php endfor;?>

<?php if( $aktif < $halaman ) :?>
    <a href="?page=<?= $aktif + 1;?>">&raquo;</a>
    <?php endif;?>

<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>No.</th>
    <th>Aksi</th>
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
    <td>
        <a href="ubah.php?id=<?=$row["id"];?>">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>"onclick="return confirm('Yakin ingin menghapus?')">hapus</a>
    </td>
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