<?php

//nomor 1
$array = array("satu", "dua", "tiga", "empat", "lima");
echo $array[4] . "<br>";
echo $array[3] . "<br>";
echo $array[2] . "<br>";
echo $array[1] . "<br>";
echo $array[0] . "<br><br>";


//nomor 2
$array = array("apel", "nanas", "mangga", "jeruk");

$count = count($array);

echo "Terdapat " . count($array) . " buah. <br><br>";

//nomor 3
$array = array("7", "3", "4", "9");

$sum = 0;

foreach ($array as $value) {
    $sum += intval($value);
}

echo "Totalnya adalah " . array_sum($array) . ". <br><br>";

//nomor 4


// Melakukan perulangan dari 1 hingga 10 //
for ($i = 1; $i <= 10; $i++) {
    // Output perkalian dan hasilnya //
    echo "1 x " . $i . " = " . $i . "<br>";
}
?>