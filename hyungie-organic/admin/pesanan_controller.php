<?php

    include_once '../db_koneksi.php';
    include_once 'models/Pesanan.php';

    // step 1 tangkap inpiutan user dari form

    $tgl             = $_POST['tgl_pesanan'];
    $nama            = $_POST['nama_pemesan'];
    $alamat          = $_POST['alamat_pemesan'];
    $nohp            = $_POST['nohp_pemesan'];
    $email           = $_POST['email_pemesan'];
    $jumlah          = $_POST['jumlah_pesanan'];
    $deskripsi       = $_POST['deskripsi'];
    $produk_id       = $_POST['produk_id'];

    // step 2 simpan data yang di tangkap ke dalam array
    $data = [
        $tgl,
        $nama,
        $alamat,
        $nohp,
        $email,
        $jumlah,
        $deskripsi,
        $deskripsi,
        $produk_id,
    ];

    // step 3 eksekusi data array melalui tombol tambah, ubah, hapus
    $model = new Pesanan();
    $tombol = $_REQUEST['proses'];
    // var_dump($tombol);
    // die;
    switch ($tombol) {
        
        default:
        header('Location:index.php?hal=pesanan');
        break;
    }
    // step 4 arahkan ke halaman pesanan
    // jika proses simpan ubah hapus telah selsai
        header('Location:index.php?hal=pesanan');

?>