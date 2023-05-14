<?php 
    $models = new KategoriProduk();
    $data_kategori = $models->data_kategori();
?>

<main id="main" class="main bg-pattern1">

<div class="d-flex justify-content-between">
  <div class="pagetitle">
    <h1>Kelola Kategori Produk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html"><u>Home</u></a></li>
        <li class="breadcrumb-item"><a href="#"><u>Admin</u></a></li>
        <li class="breadcrumb-item active">Kelola Kategori Produk</li>
      </ol>
    </nav>

  </div><!-- End Page Title -->

  <div class="btn-tambah">
  <a href="#" class="btn btn-sm btn-primary border-0" data-bs-toggle="modal" data-bs-target="#tambahkategori"> + Tambah</a>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahkategori" tabindex="-1" aria-labelledby="tambahkategoriLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahkategoriLabel">Tambah Kategori Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3"  method="POST" action="kategori_controller.php">
          <div class="col-12">
            <label for="inputNanme4" class="form-label">Nama Kategori Produk </label>
            <input type="hidden" class="form-control" name="id_kategori" >
            <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Produk">
          </div>
          <div class="d-flex justify-content-end mt-3 mb-3">
              <button name="proses" type="submit" value="simpan" class="btn btn-primary border-0">Simpan</button> 
          </div>
        </form><!-- Vertical Form -->
      </div>
    </div>
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
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                <!-- PRODUK ITEM -->
                <?php 
                    $no = 1;
                    foreach($data_kategori as $v)
                    {
                ?>
                  <tr>
                    <th><?= $no ?></th>
                    <td><?= $v['nama_kategori'] ?></td>
                    <td>
                      <form method="POST" action="kategori_controller.php">
                        <a class="btn btn-sm btn-success border-0" href="index.php?hal=edit_kategori&idedit=<?=$v['id_kategoriproduk']?>"><i class='bx bx-edit-alt text-white' ></i></a> 
                        <input type="hidden" name="idx" value="<?=$v['id_kategoriproduk']?>">
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
