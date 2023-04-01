<?php 
    $models = new Pembayaran();
    $pembayaran = $models->pembayaran();
?>
<div class="content-wrapper">
    <div class="content">
        <div class="container pt-3">
            <nav aria-label="breadcrumb mt-5 mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Pembayaran</li>
                </ol>
            </nav>
            <div class="table-responsive">
                <table class="table bg-white">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">No Kuitansi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Ke</th>
                        <th scope="col">Pesanan ID</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach($pembayaran as $v)
                            {
                        ?>
                            <tr>
                            <td><?= $no ?></td>
                            <td><?= $v['nokuitansi'] ?></td>
                            <td><?= $v['tanggal'] ?></td>
                            <td><?= $v['jumlah'] ?></td>
                            <td><?= $v['ke'] ?></td>
                            <td><?= $v['pesanan_id'] ?></td>
                            <td><a class='btn btn-sm btn-info' href='form_edit.php?id=$v["id"]'><i class="bi bi-pencil-square"></i></a>
                            <a class='btn btn-sm btn-danger' href='produk.php?delete_produk=$v["id"]'><i class="bi bi-trash3-fill"></i></a></td>
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