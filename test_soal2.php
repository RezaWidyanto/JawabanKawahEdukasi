<?php

$data = [1, "ka", 67, "wah", "1772", "edukasi", 7, 98, -1];

for ($hasil = 0; $hasil <= 8; $hasil++) {

    if (is_int($data[$hasil]) && $data[$hasil] > 0) {
        echo "index ke-". $hasil . " adalah integer dengan data "
        . $data[$hasil] . "<br>";
    }
    
    if (is_string($data[$hasil])) {
        echo "index ke-". $hasil . " adalah string dengan data "
        . $data[$hasil] . "<br>";
    }
    
    if ($data[$hasil] < 0) {
        echo "index ke-". $hasil . " tidak bisa divalidasi";
    }
    
}
?>
