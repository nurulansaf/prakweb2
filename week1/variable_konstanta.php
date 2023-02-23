<?php

    // konstanta : tidak bisa diubah seluruh program
    // variable biasa itu bisa di ubah

    define ('PHI', 3.14);
    

    // Soal 1. Cari nilai dari luas lingkaran ddengan jari jari 8
    // Soal 2. Cari nilai dari keliling lingkaran dengan jari jari 8

    $jari = 8;

    $luas = PHI * $jari * $jari;
    $keliling = 2 * PHI * $jari;
     
    echo 'Luas lingkaran dengan jari jari 8 = ' . $luas;
    echo '</br>';
    echo 'Keliling lingkaran dengan jari jari 8 = ' . $keliling;


?>