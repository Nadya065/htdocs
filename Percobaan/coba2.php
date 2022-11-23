<style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: salmon;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float:left;
            
        }
        
        .clear {clear:both;}
    </style>

<?php
$angka =[
    [1,2,3],
    [4,5,6],
    [7,8,9]];
?>

<div class="kotak"><?=$angka[0][0];?></div>
<div class="kotak"><?= $angka[0][1];?></div>
<div class="kotak"><?= $angka[0][2];?></div>
<div class="clear"></div>
<div class="kotak"><?= $angka[1][0];?></div>
<div class="kotak"><?= $angka[1][1];?></div>
<div class="kotak"><?= $angka[1][2];?></div>
<div class="clear"></div>
<div class="kotak"><?= $angka[2][0];?></div>
<div class="kotak"><?= $angka[2][1];?></div>
<div class="kotak"><?= $angka[2][2];?></div>
<div class="clear"></div>
<?php
$a =0;

while($a < 3){
    $a++;
$b=0;

while($a < 3){
    $a++;}
        echo $a,$b;
    }echo "<br>";?>
    <div class="clear"></div>
