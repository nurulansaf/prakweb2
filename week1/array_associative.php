<?php

    // Cara penulisan array
    $array_1 = array('pisang', 'mangga', 'jeruk');
    // kurung kotak/siku
    $array_2 = ["p" => 'pisang', "m" =>  'mangga', "j" => 'jeruk'];

    // cara mencetak array dengan associative
    echo "</br>";
    echo "<ol>";

    foreach ($array_2 as $x => $k){
        echo "<li> $x - $k </li>";
    }

    echo "</ol>";

?>