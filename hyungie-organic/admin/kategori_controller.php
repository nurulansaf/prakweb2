<?php

    include_once '../db_koneksi.php';
    include_once 'models/KategoriProduk.php';

    // step 1 tangkap inpiutan user dari form

    $nama               = $_POST['nama_kategori'];

    // step 2 simpan data yang di tangkap ke dalam array
    $data = [
        $nama,
    ];

    // step 3 eksekusi data array melalui tombol tambah, ubah, hapus
    $model = new KategoriProduk();
    $tombol = $_REQUEST['proses'];
    // var_dump($tombol);
    // die;
    switch ($tombol) {
        case 'simpan':
        $model->tambah_kategori($data);
        break;

        case 'ubah':
        $data[] = $_POST['idx']; 
        $model->edit_kategori($data);
        break;
        
        case 'hapus':
        unset($data);
        // $model->hapus_kategori($_POST['id_kategori']);
        $model->hapus_kategori($_POST['idx']);
        break;
            
        default:
        header('Location:index.php?hal=kategori_produk');
        break;
    }
    // step 4 arahkan ke halaman kategori_produk
    // jika proses simpan ubah hapus telah selsai
        header('Location:index.php?hal=kategori_produk');

?>