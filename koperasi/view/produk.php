<?php 
    $models = new Produk();
    $data_produk = $models->data_produk();
?>
<div class="content-wrapper">
    <div class="content">
        <div class="container pt-3">
            <div class="row justify-content-between">
                <div class="col-md-10">
                    <nav aria-label="breadcrumb mt-5 mb-3">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Produk</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-2">
                    <a class='btn  btn-primary' href='index.php?hal=produk_form'>+ Produk</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table bg-white">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga Beli</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Min Stok</th>
                        <th scope="col">Jenis Produk</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach($data_produk as $v)
                            {
                        ?>
                            <tr>
                            <td><?= $no ?></td>
                            <td><?= $v['kode'] ?></td>
                            <td><?= $v['nama'] ?></td>
                            <td><?= $v['harga_beli'] ?></td>
                            <td><?= $v['harga_jual'] ?></td>
                            <td><?= $v['stok'] ?></td>
                            <td><?= $v['min_stok'] ?></td>
                            <td><?= $v['jenis'] ?></td>
                            <td>
                                <a class='btn btn-sm btn-success' href='ModeProduk.php?id=<?=$v["id"]?>'><i class="bi bi-eye-fill"></i></a>
                                <a class='btn btn-sm btn-info' href='ModeProduk.php?id=<?=$v["id"]?>'><i class="bi bi-pencil-square"></i></a>
                                <a class='btn btn-sm btn-danger' href='produk.php?delete_produk=<?=$v["id"]?>'><i class="bi bi-trash3-fill"></i></a></td>
                            </tr>
                            

                            <?php
                                $no++;
                            }
                            ?>
                    </tbody>
                </table>
            </div>
            
        </div>
        
    </div>
</div>