<?php
    ob_start();
    include_once '../db_koneksi.php';
    include_once 'models/ProdukAdmin.php';

    // step 1 tangkap inpiutan user dari form

    $kode               = $_POST['kode_produk'];
    $nama               = $_POST['nama_produk'];
    $harga_beli         = $_POST['harga_beli'];
    $stok               = $_POST['stok'];
    $min_stok           = $_POST['min_stok'];
    $deskripsi          = $_POST['deskripsi'];
    $kategoriproduk_id  = $_POST['kategoriproduk_id'];
    $gambar             = $_POST['gambar_produk'];

    // step 2 simpan data yang di tangkap ke dalam array
    $data = [
        $kode,
        $nama,
        $harga_beli,
        $harga_jual = 1.2 * $harga_beli,
        $stok,
        $min_stok,
        $deskripsi,
        $kategoriproduk_id,
        $gambar,
    ];

    // step 3 eksekusi data array melalui tombol tambah, ubah, hapus
    $model = new ProdukAdmin();
    $tombol = $_REQUEST['proses'];
    // var_dump($tombol);
    // die;
    switch ($tombol) {
        case 'simpan':
        $model->tambah_produk($data);
        break;

        case 'ubah':
        $data[] = $_POST['idx']; 
        $model->edit_produk($data);
        break;
        
        case 'hapus':
        unset($data);
        // $model->hapus_produk($_POST['id_produk']);
        $model->hapus_produk($_POST['idx']);
        break;
            
        default:
        header('Location:index.php?hal=produk');
        break;
    }
    // step 4 arahkan ke halaman produk
    // jika proses simpan ubah hapus telah selsai
        header('Location:index.php?hal=produk');

?>