<?php
require 'function.php';

if( isset($_POST["submit"]) ) {

    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data tidak berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="provider_name">Provider Name</label>
                <input type="text" name="provider_name" id="provider_name" required>
            </li>
            <li>
                <label for="customer_packet">Customer Packet</label>
                <input type="text" name="customer_packet" id="customer_packet" required>
            </li>
            <li>
                <label for="description">Description</label>
                <input type="text" name="description" id="description" required>
            </li>
            <li>
                <label for="price">Price</label>
                <input type="text" name="price" id="price" required>
            </li>
            <li>
                <label for="active_on">Active On</label>
                <input type="text" name="active_on" id="active_on" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html>