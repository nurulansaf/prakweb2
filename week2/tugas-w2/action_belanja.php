
<?php

require_once 'action_harga.php';

// mengambil data yang diinputkan oleh user
$proses         = $_POST['proses'];
$customer       = $_POST['customer'];
$produk         = $_POST['produk'];
$jumlah         = $_POST['jumlah'];

$h_produk = harga_produk($produk);
$t_belanja = $jumlah * $h_produk;

// cetak data yang telah diambil ke dalam browser
// echo 'Proses : '.$proses;
if(!empty($proses)){
    echo '<br>Nama Customer : '.$customer;
    echo '<br>Produk Pilihan : '.$produk;
    echo '<br>Jumlah : '.$jumlah;
    echo '<br>Total Belanja : '.$t_belanja;
    echo '<br>Data Telah di $proses '; 
}



?>