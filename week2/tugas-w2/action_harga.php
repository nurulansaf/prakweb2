<?php

    // Daftar Harga
    // TV : 4.200.000
    // KULKAS : 3.100.000
    // MESIN CUCI : 3.800.000

    function harga_produk($produk){
        if($produk == "TV" ){
            return '4200000';
        }elseif($produk == "KULKAS" ){
            return '3100000';
        }elseif($produk == "MESIN CUCI" ){
            return '3800000';
        }else {
            return 'I(Tidak ada produk yang dipilih)';
        }

    }

?>