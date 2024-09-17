<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
}   
    elseif ($nilaiNumerik >= 80 && $nailaiNumerik < 90) {
         echo "Nilai Huruf: B";
    } elseif ($nilaiNumerik >= 7 && $nilaiNumerik < 80){
        echo "Nilai huruf: C";
    }   elseif ($nilaiNumerik < 70) {

    }

    $jumlahLahan = 10;
    $tanamanPerlahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i = 0; $i < $jumlahLahan; $i++) {
        $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
    }
    echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah";

    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach($skorUjian as $skor){
    $totalSkor += $skor;
    }
    echo "Total skor ujian adalah: $totalSkor";

    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

    foreach($nilaiSiswa as $nilai){
        if ($nilai < 60) {
        echo "Nilai: $nilai (Lulus) <br>";
        }
    }
?>