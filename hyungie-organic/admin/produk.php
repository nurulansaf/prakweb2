<?php 
    $models = new ProdukAdmin();
    $data_produk = $models->data_produk();
?>

<main id="main" class="main bg-pattern1">

<div class="d-flex justify-content-between">
  <div class="pagetitle">
    <h1>Kelola Produk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html"><u>Home</u></a></li>
        <li class="breadcrumb-item"><a href="#"><u>Admin</u></a></li>
        <li class="breadcrumb-item active">Kelola Produk</li>
      </ol>
    </nav>

  </div><!-- End Page Title -->

  <div class="btn-tambah">
  <a href="index.php?hal=tambah_produk" class="btn btn-primary border-0">+ Tambah</a>
  </div>
</div>

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">

      
        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">


            <div class="card-body pt-3">
              <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Harga Beli</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Min. Stok</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                <!-- PRODUK ITEM -->
                <?php 
                    $no = 1;
                    foreach($data_produk as $v)
                    {
                ?>
                  <tr>
                    <th><?= $no ?></th>
                    <td><?= $v['kode_produk'] ?></td>
                    <td><?= $v['nama_produk'] ?></td>
                    <td><?= $v['harga_beli'] ?></td>
                    <td><?= $v['harga_jual'] ?></td>
                    <td><?= $v['stok'] ?></td>
                    <td><?= $v['min_stok'] ?></td>
                    <td><?= $v['deskripsi'] ?></td>
                    <td><?= $v['kategori'] ?></td>
                    <td>
                      <form method="POST" action="produk_controller.php">
                        <a class="btn btn-sm btn-info border-0" href="index.php?hal=detail_produk&iddetail=<?=$v['id_produk']?>"><i class='bx bx-info-circle text-white'></i></a> 
                        <a class="btn btn-sm btn-success border-0" href="index.php?hal=edit_produk&idedit=<?=$v['id_produk']?>"><i class='bx bx-edit-alt text-white' ></i></a> 
                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus Produk" value="hapus" name="proses" 
                        onclick="return confirm('Apakah anda yakin hapus produk <?=$v['nama_produk']?> ?')" ><i class='bx bx-trash-alt' ></i></button>
                        <input type="hidden" name="idx" value="<?=$v['id_produk']?>">
                      </form>
                    </td>
                  </tr>
                <?php
                        $no++;
                    }
                ?>
                  
                <!-- END PRODUK ITEM -->
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->

        
      </div>
    </div><!-- End Left side columns -->

   
      
        
  </div>
</section>

</main><!-- End #main -->
