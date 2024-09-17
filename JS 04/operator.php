<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisiBagi = $a % $b;
$pangkat = $a ** $b;
 // echo "$a". $pangkat ."$b". $hasilKurang .


$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihBesarSama = $a >= $b;
$hasilLebihKecilSama = $a <= $b;
//echo "$a". $hasilLebihKecil .

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
//echo "$a" . $hasilOr .

$a += $b;
$a -= $b;
$a *= $b;
$a /= $b;
$a %= $b;
//echo  $a / $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
//echo"$a", $hasilIdentik,"$b";

?>