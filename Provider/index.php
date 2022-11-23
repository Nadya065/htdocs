<?php 

require 'function.php';
$provider = query("SELECT * FROM tb_provider_internet");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data provider</title>
</head>
<body>
    <h1>Provider</h1>
    <a href="tambah.php">Tambah Data</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>Id</th>
        <th>Aksi</th>
        <th>Nama Provider</th>
        <th>Customer Packet</th>
        <th>Description</th>
        <th>Price</th>
        <th>Active On</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach( $provider as $row ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id_provider=<?= $row["id_provider"];?>">Ubah</a>
                <a href="hapus.php?id_provider=<?= $row["id_provider"];?>">Hapus</a>
            </td>
            <td><?= $row["provider_name"] ?></td>
            <td><?= $row["costumer_packed"] ?></td>
            <td><?= $row["description"] ?></td>
            <td><?= $row["price"] ?></td>
            <td><?= $row["active_on"] ?></td>
        </tr>
    <?php $i++ ?>
    <?php endforeach; ?>

    </table>

    
</body>
</html>