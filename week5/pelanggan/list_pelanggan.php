<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pelanggan";
   $rs = $dbh->query($sql);
?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
	
    <section class="container mt-2 mb-2">
        <h3 class="text-center">Data Pelanggan</h3>
        <a class="btn btn-success mt-2 mb-2" href="form_pelanggan.php" role="button"><i class="bi bi-person-fill-add"></i> Pelanggan</a>
        <table class="table table-sm table-striped " width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Email</th>
                    <th>Kartu ID</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['jk']?></td>
                        <td><?=$row['tmp_lahir']?></td>
                        <td><?=$row['tgl_lahir']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['kartu_id']?></td>
                        <td>
                            <a class="btn btn-sm mb-2 btn-primary" title="Detail" href="view_pelanggan.php?id=<?=$row['id']?>"><i class="bi bi-eye-fill"></i></a>
                            <a class="btn btn-sm mb-2 btn-success" title="Edit" href="edit_pelanggan.php?id=<?=$row['id']?>"><i class="bi bi-pencil-square"></i></a>
                            <a class="btn btn-sm mb-2 btn-danger" title="Hapus" href="delete_pelanggan.php?id=<?=$row['id']?>"
                            onclick="if(!confirm('Anda Yakin Hapus Data pelanggan <?=$row['nama']?>?')) {return false}"
                            ><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  

    </section>
    