<?php
$pattern = '/go*d/';
$text = 'god is good.';
if  (preg_match($pattern, $text, $matches)) {
    echo "cocokkan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok!";
}