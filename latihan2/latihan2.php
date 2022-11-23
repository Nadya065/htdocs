<?php
$product = [
    [
        "nama" => "Shampo monyet",
        "kategori" => "Perlatan mandi",
        "harga" => "100.000",
        "gambar" => "shampoM.jpg",
        "suka" => "200 menyukai"
    ],
    [
        "nama" => "boneka anjing",
        "kategori" => "Boneka",
        "harga" => "199.000",
        "gambar" => "boneka.jpeg",
        "suka" => "345 menyukai"
    ],
    [
        "nama" => "Tampan dan berani",
        "kategori" => "Lukisan",
        "harga" => "150.000",
        "gambar" => "lukisan.jpg",
        "suka" => "1 menyukai"
    ],
    [
        "nama" => "Minyak Zaitun",
        "kategori" => "Kesehatan",
        "harga" => "18.694",
        "gambar" => "minyak.png",
        "suka" => "123 menyukai"
    ],
    [
        "nama" => "Langganan Netflix",
        "kategori" => "Hiburan",
        "harga" => "20.000",
        "gambar" => "netflix.png",
        "suka" => "321 menyukai"
    ],
    [
        "nama" => "Jaket pria",
        "kategori" => "Fashion",
        "harga" => "88.000",
        "gambar" => "jaket.webp",
        "suka" => "213 menyukai"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <style>
        body{
            background: ghostwhite;
        }
        .container {
            max-width: 1024px;
        }

        .flex-container {
            /* background-color: lightgrey; */
            display: flex;
            flex-wrap: wrap;
        }

        .flex-container > div {
            /* background-color: white; */
            width: 255px;
            border: 2px solid purple;
            border-style: none;
        }

        img {
            width: 210px;
            height: 200px;
            padding: 5px 0px 5px 0px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        ul {
            list-style: none;
            line-height: 25px;
            padding: 5px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="flex-container">
            <?php foreach ( $product as $prc ) : ?>
                <div>
                <ul>
                    <li>
                        <img src="img/<?= $prc["gambar"]; ?>">
                    </li>
                    <li>Nama Produk : <?= $prc["nama"]; ?></li>
                    <li>Harga : <?= $prc["harga"]; ?></li>
                    <li>Kategori : <?= $prc["kategori"]; ?></li>
                    <li>Suka : <?= $prc["suka"]; ?></li>
                </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>