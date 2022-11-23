<?php

$hari = ["senin", "selasa", "rabu", "kamis", "jumat", "sabtu", "minggu"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3</title>
    <style>
        .kotak{
            width: 60px;
            height: 50px;
            background-color: khaki;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{clear:both;}
    </style>

</head>
<body>
    <h1>nama nama hari dalam 1 minggu</h1>
    <?php for($i = 0; $i < count($hari); $i++){ ?>
    <div class="kotak"><?php echo $hari[$i]; ?></div>
    <?php } ?>
    <div class ="clear"></div>

<?php foreach($hari as $h) {?>
    <div class= "kotak"><?php echo $h; ?></div>
<?php } ?>
</body>
</html>