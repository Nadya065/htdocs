<?php

require 'function.php';

$id = $_GET["id_provider"];

$row = query("SELECT * FROM tb_provider_internet WHERE id_provider = $id")[0];

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
            <input type="hidden" name="id_provider" id="id_provider" value="<?= $row["id_provider"];?>">
        </li>
        <li>
            <label for="provider_name">Provider Name</label>
            <input type="text" name="provider_name" id="provider_name" required value="<?= $row["provider_name"];?>">
        </li>
        <li>
            <label for="costumer_packed">Customer Packet</label>
            <input type="text" name="costumer_packed" id="costumer_packed" required value="<?= $row["costumer_packed"];?>">
        </li>
        <li>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" required value="<?= $row["description"];?>">
        </li>
        <li>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" required value="<?= $row["price"];?>">
        </li>
        <li>
            <label for="active_on">Active On</label>
            <input type="text" name="active_on" id="active_on" required value="<?= $row["active_on"];?>">
        </li>
        <li>
            <button type="submit" name="submit">Ubah</button>
        </li>
    </ul>
</form>
</body>
</html>