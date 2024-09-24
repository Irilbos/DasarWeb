<?php
$pesan = "Saya arek malang";
$pesanPerkata = explode(" ", $pesan);
$pesanPerkata = array_map(fn($kata) => strrev($kata), $pesanPerkata);
$pesan = implode(" ", $pesanPerkata);

echo $pesan . "<br>";
?>
