 <?php

require 'function.php';

$ujian = query("SELECT * FROM tb_ujian");
$mapel = query("SELECT * FROM tbmapel");
$jurusan = query("SELECT * FROM tbjurusan");

if( isset($_POST["cari"])) {
    $ujian = cari($_POST["keyword"]);
    $mapel = $_POST["nama_mapel"];
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data ujian</title>
</head>
<body>
    <h1>Ujian</h1>
    <a href="tambah.php">Tambah Data</a>
    <br><br>
    <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus
    placeholder="masukan keyword percarian..." autocomplete="off">
    <button type="submit" name="cari">cari</button>
</form>

    <?php foreach($jurusan as $j) :?>
        <label >jurusan</label>
        <input type="radio" name="namajurusan" value="<?= $j["namajurusan"];?>">
        <label for="namajurusan"><?= $j["namajurusan"]?></label>
        <input type="hidden" name="namajurusan" valve=""></input>
        <?php endforeach;?>

    <select name="namamapel">
        <?php foreach($mapel as $m) : ?>
        <option value=""><?=$m["namamapel"];?></option>
        <?php endforeach;?>
    </select>
    <table border="1" cellpadding="10" cellspacing="0">
        <option value="">
        
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama Mata Pelajaran</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Tanggal Ujian</th>
            <th>Durasi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach( $ujian as $u ):?>

            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $u["id_ujian"];?>">Ubah</a> |
                    <a href="hapus.php?id_ujian=<?= $u["id_ujian"];?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
                <td><?= $u["nama_mapel"]; ?></td>
                <td><?= $u["jurusan"]; ?></td>
                <td><?= $u["kelas"]; ?></td>
                <td><?= $u["tanggal_ujian"]; ?></td>
                <td><?= $u["durasi_ujian"]; ?></td>
            </tr>
            
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

   
</body>
</html>