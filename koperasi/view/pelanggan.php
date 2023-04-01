<?php 
    $models = new Pelanggan();
    $pelanggan = $models->pelanggan();
?>
<div class="content-wrapper">
    <div class="content">
        <div class="container pt-3">
            <nav aria-label="breadcrumb mt-5 mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data pelanggan</li>
                </ol>
            </nav>
            <div class="table-responsive">
                <table class="table bg-white">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat, Tanggal Lahir</th>
                        <th scope="col">Email</th>
                        <th scope="col">Kartu ID</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach($pelanggan as $v)
                            {
                        ?>
                            <tr>
                            <td><?= $no ?></td>
                            <td><?= $v['kode'] ?></td>
                            <td><?= $v['nama'] ?></td>
                            <td><?= $v['jk'] ?></td>
                            <td><?= $v['tmp_lahir'] ?>, <?= $v['tgl_lahir'] ?></td>
                            <td><?= $v['email'] ?></td>
                            <td><?= $v['kartu_id'] ?></td>
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