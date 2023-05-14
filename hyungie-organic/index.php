<?php


    include_once('db_koneksi.php');

    // Model
    include_once 'models/Produk.php';
    include_once 'models/Pesanan.php';
    
    // Template
    include_once('template-web/head.php');
    include_once('template-web/header.php');
    // include_once('template-web/preloader.php');
    

    // logic untuk menangkap request halaman lain

    $hal = $_REQUEST ['hal'];
    // jika ada request dari url browser berupa tulisan hal maka arahkan ke halaman yang di request
    if(!empty($hal)){
        include_once '' .$hal. '.php';
    }else{
    // jika tidak ada request hal di url browser arahkan ke home.php
        include_once 'home.php';
    }

    include_once('template-web/footer.php');
    include_once('template-web/js.php');
?>