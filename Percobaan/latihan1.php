<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>latihan 1</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <td>NILAI</td>
    <td>PREDIKAT</td>
</tr>

<tr>
    <td>85-100</td>
    <td>A</td>
</tr>

<tr>
    <td>75-84</td>
    <td>B</td>
</tr>

<tr>
    <td>60-74</td>
    <td>C</td>
</tr>

<tr>
    <td>50-59</td>
    <td>D</td>
</tr>

<tr>
    <td><50</td>
    <td>E</td>
</tr>

</table>
<?php 
$nilai = 1100;
echo "nilai kamu adalah $nilai<br>";
if( $nilai >= 85  and $nilai <= 100){
    echo "predika kamu adalah A";
}else if( $nilai >= 75 and $nilai <= 84) {
    echo "predikat kamu adalah B";
}else if( $nilai >= 60 and $nilai <= 74) {
    echo "predikat kamu adalah C";
}else if( $nilai >= 50 and $nilai <=59) {
    echo "predikat kamu adalah D";
}else if( $nilai < 50) {
    echo "predikat kamu adalah E";
}else {
    echo "nilai kamu tidak valid!!!";
}

?>
</body>
</html>