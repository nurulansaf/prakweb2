<?php 
    $models = new Kartu();
    $kartu = $models->kartu();
?>
<div class="content-wrapper">
    <div class="content">
        <div class="container pt-3">
            <nav aria-label="breadcrumb mt-5 mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Kartu</li>
                </ol>
            </nav>
            <div class="table-responsive">
                <table class="table bg-white">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Diskon</th>
                        <th scope="col">Iuran</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach($kartu as $v)
                            {
                        ?>
                            <tr>
                            <td><?= $no ?></td>
                            <td><?= $v['kode'] ?></td>
                            <td><?= $v['nama'] ?></td>
                            <td><?= $v['diskon'] ?></td>
                            <td><?= $v['iuran'] ?></td>
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