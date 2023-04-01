<?php
    include_once('koneksi/dbkoneksi.php');

    // Model
    include_once 'models/Pelanggan.php';
    include_once 'models/Produk.php';
    include_once 'models/JenisProduk.php';
    include_once 'models/Pesanan.php';
    include_once 'models/Vendor.php';
    include_once 'models/Pembelian.php';
    include_once 'models/Kartu.php';
    include_once 'models/Pembayaran.php';


    // Template
    include_once('template/navbar.php');
    include_once('template/sidebar.php');

    // logic untuk menangkap request halaman lain

    $hal = $_REQUEST ['hal'];
    // jika ada request dari url browser berupa tulisan hal maka arahkan ke halaman yang di request
    if(!empty($hal)){
        include_once 'view/' .$hal. '.php';
    }else{
    // jika tidak ada request hal di url browser arahkan ke home.php
        include_once 'home.php';
    }

    include_once('template/footer.php');
?>