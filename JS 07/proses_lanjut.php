<?php
if ($_SERVER["REQUEST_METHOD"] =="POST") if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBuah = $_POST['buah'];
    $selectedWarna = isset($_POST['warna']) ? $_POST['warna'] : [];
    $selectedJenisKelamin = $_POST['jenis_kelamin'];

    echo '<div class="result-container">';
    echo '<h3>Hasil Input Anda:</h3>';
    echo '<p><span>Buah yang dipilih:</span> ' . $selectedBuah . '</p>';

    if (!empty($selectedWarna)) {
        echo '<p><span>Warna favorit Anda:</span> ' . implode(", ", $selectedWarna) . '</p>';
    } else {
        echo '<p><span>Warna favorit:</span> Anda tidak memilih warna favorit.</p>';
    }

    echo '<p><span>Jenis kelamin Anda:</span> ' . $selectedJenisKelamin . '</p>';
    echo '</div>';
}

?>
