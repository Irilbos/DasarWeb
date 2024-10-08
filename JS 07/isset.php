<?php


$data = array("nama" => "jane", "usia" => 25);
if (isset($data["nama"])) {
    echo"Nama ".$data["nama"];

} else {
    echo"Variabel 'nama' tidak di temukan dalam array.";
}
?>