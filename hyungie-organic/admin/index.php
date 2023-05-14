<?php
    include_once('../db_koneksi.php');

    // Model
    include_once 'models/ProdukAdmin.php';
    include_once 'models/KategoriProduk.php';
    include_once 'models/Pesanan.php';

    // Template
    include_once('template-admin/navbar.php');
    include_once('template-admin/sidebar.php');

    // logic untuk menangkap request halaman lain

    $hal = $_REQUEST ['hal'];
    // jika ada request dari url browser berupa tulisan hal maka arahkan ke halaman yang di request
    if(!empty($hal)){
        include_once '' .$hal. '.php';
    }else{
    // jika tidak ada request hal di url browser arahkan ke home.php
        include_once 'produk.php';
    }

    include_once('template-admin/footer.php');
?>