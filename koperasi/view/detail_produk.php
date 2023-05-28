<?php
    $iddetail = $_REQUEST['iddetail'];

    // membuat object ari class produk
    $model = new ProdukAdmin();

    // script menampilkan data berdasarkan id
    $produk = $model->detail_produk($iddetail);

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
                <div class="row">
                    <div class="col-md-4">
                       <div class="img-produk">
                            <figure>
                                <img src="../assets-web/img/product/<?=$produk['gambar_produk']?>" alt="">
                                <!-- <img src="../assets-web/img/product/product7.png" alt=""> -->
                            </figure>
                       </div>
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex justify-content-between">
                            <h5 class="fw-bold"><?=$produk['nama_produk']?></h5>
                            <div class="kode">
                                <p>Kode Kategori : <span class="fw-bold badge bg-success"><?=$produk['kode_produk']?></span> | <span class="badge bg-warning"><?=$produk['kategori']?></span></p>
                            </div>
                        </div>
                        <hr class="mb-2 mt-2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="">
                                    <div class="me-5">
                                        <p class="fw-bold">Harga Jual : <span>Rp. <?= number_format($produk['harga_jual'], 0, ',', '.'); ?></span></p>
                                    </div>
                                    <div class="me-5">
                                        <p class="fw-bold">Harga Beli : <span>Rp. <?=$produk['harga_beli']?></span></p>
                                    </div>
                                    <div class="me-5">
                                        <p class="fw-bold">Stok : <span class="badge bg-secondary"><?=$produk['stok']?></span></p>
                                    </div>
                                    <div class="me-5">
                                        <p class="fw-bold">Min Stok : <span class="badge bg-danger"><?=$produk['min_stok']?></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p><?=$produk['deskripsi']?></p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
          </div>
        </div><!-- End Recent Sales -->

        
      </div>
    </div><!-- End Left side columns -->

   
      
        
  </div>
</section>

</main><!-- End #main -->
