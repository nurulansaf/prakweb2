<?php

    // Cara penulisan array
    $buah = array('pisang', 'mangga', 'jeruk', 'alpukat');
    // kurung kotak/siku
    $buah2 = ["p" => 'pisang', "m" =>  'mangga', "j" => 'jeruk'];


    // array indexed : mulai dari 0 - seterusnya
    //  array associative :  di depan value ada key "a"=>'pisang'
    //  array multidimensi : 

    echo $buah[1];
    echo '</br>';
    echo 'Jumlah Buah ' .count($buah);


    // cetak seluruh buah

    echo "</br>";
    echo "<ol>";

    foreach ($buah as $x){
        echo "<li> $x </li>";
    }

    echo "</ol>";

    // Tambah buah baru
    $buah[] = "Durian";

    // cetak seluruh buah baru
    echo "</br>";
    echo "<ol>";

    foreach ($buah as $buas){
        echo "<li> $buas </li>";
    }

    echo "</ol>";
?>