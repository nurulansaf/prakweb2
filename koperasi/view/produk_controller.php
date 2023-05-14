<?php

    include_once './koneksi/dbkoneksi.php';
    include_once './models/Produk.php';

    // step 1 tangkap inpiutan user dari form

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $min_stok = $_POST['min_stok'];
    $jenis_produk_id = $_POST['jenis_produk_id'];

    // step 2 simpan data yang di tangkap ke dalam array
    $data = [
        $kode,
        $nama,
        $harga_beli,
        $harga_jual = 1.2 * $harga_beli,
        $stok,
        $min_stok,
        $jenis_produk_id,
    ];

    // step 3 eksekusi data array melalui tombol tambah, ubah, hapus
    $model = new Produk();
    $tombol = $_REQUEST['proses'];
    switch ($tombol) {
        case 'simpan':
            $model->tambah_produk($data);
            break;
            
        default:
        header('Location:index.php?hal=produk');
        break;
    }
    // step 4 arahkan ke halaman produk
    // jika proses simpan ubah hapus telah selsai

?>