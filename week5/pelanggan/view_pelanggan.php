<?php 
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    // select * from produk where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM produk a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pelanggan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA PRODUK ' . $row['nama'];
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<section class="container mt-2 mb-2">
    <h3 class="text-center">Detail Data <?=$row['nama']?></h3>

    <table class="table table-striped mt-3" border="1">
        <tbody>
            <tr>
                <th>ID</th>
                <td><?=$row['id']?></td></tr>
            <tr>
                <th>Kode</th>
                <td><?=$row['kode']?></td></tr>
            <tr>
                <th>Nama</th>
                <td><?=$row['nama']?></td></tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?=$row['jk']?></td></tr>
            <tr>
                <th>Tempat Lahir</th>
                <td><?=$row['tmp_lahir']?></td></tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><?=$row['tgl_lahir']?></td></tr>
            <tr>
                <th>Email</th>
                <td><?=$row['email']?></td></tr>
            <tr>
                <th>Kartu ID</th>
                <td><?=$row['kartu_id']?></td></tr>
        </tbody>
    </table>

</section>
