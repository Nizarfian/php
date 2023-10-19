<?php

// Tugas :
// Nomor 1 : Angka 1 adalah bilangan ganjil Angka 2 adalah bilangan genap dst
for ($angka = 1; $angka <= 10; $angka++) {
    if ($angka % 2 == 0) {
        echo "Angka $angka adalah bilangan genap.<br>";
    } else {
        echo "Angka $angka adalah bilangan ganjil.<br>";
    }
}
// Nomor 2 : Tahun 2020 adalah tahun kabisat dst
for ($tahun = 2000; $tahun <= 2023; $tahun++) {
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
        echo "$tahun adalah tahun kabisat.<br>";
    } else {
        echo "$tahun bukan tahun kabisat.<br>";
    }
}
// Nomor 3: 123456789 dst
for ($i = 9; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}

?>