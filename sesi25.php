<?php

// Tugas :
// 1. Mmembuat output bilangan ganjil dan genap
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "Bilangan genap: $i <br>";
    } else {
        echo "Bilangan ganjil: $i <br>";
    }
}
// 2. Membuat output tahun kabisat
function isKabisat($tahun) {
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
        return true;
    } else {
        return false;
    }
}

for ($tahun = 2000; $tahun <= 2030; $tahun++) {
    if (isKabisat($tahun)) {
        echo "$tahun adalah tahun kabisat.<br>";
    }
}
// 3. Membuat grade nilai
$nilai = 90; 

if ($nilai >= 90 && $nilai <= 100) {
    $grade = 'A';
} elseif ($nilai >= 80 && $nilai < 90) {
    $grade = 'B';
} elseif ($nilai >= 70 && $nilai < 80) {
    $grade = 'C';
} elseif ($nilai >= 60 && $nilai < 70) {
    $grade = 'D';
} elseif ($nilai >= 0 && $nilai < 60) {
    $grade = 'E';
} else {
    $grade = 'Nilai tidak valid';
}

echo "Nilai Anda adalah $nilai, dan grade Anda adalah $grade.";

?>