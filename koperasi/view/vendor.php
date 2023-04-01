<?php 
    $models = new Vendor();
    $vendor = $models->vendor();
?>
<div class="content-wrapper">
    <div class="content">
        <div class="container pt-3">
            <nav aria-label="breadcrumb mt-5 mb-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Vendor</li>
                </ol>
            </nav>
            <div class="table-responsive">
                <table class="table bg-white">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomor Vendor</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Kontak</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach($vendor as $v)
                            {
                        ?>
                            <tr>
                            <td><?= $no ?></td>
                            <td><?= $v['nomor'] ?></td>
                            <td><?= $v['nama'] ?></td>
                            <td><?= $v['kota'] ?></td>
                            <td><?= $v['kontak'] ?></td>
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