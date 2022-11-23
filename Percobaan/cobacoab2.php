<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
</head>
<body>
    <p>1,30,10,25</P>
    <p>2,10,30,25</p>
    <p>3,10,15,30</p>

<?php
$a=20;
$b=30;
$c=10;
$d=40;
if($a > $b && $a > $c && $a > $d){
    echo "nilai A ($a) terbesar";
}else if($b > $a && $b > $c && $b > $d){
    echo "nilai B($b) terbesar";
}else if($c > $a && $c > $b && $c > $d){
    echo "nilai C($c) terbesar";
}else {
    echo "nilai d($d) terbesar";
}
    
    ?>
</body>
</html>