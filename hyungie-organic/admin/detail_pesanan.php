<?php
    $iddetail = $_REQUEST['iddetail'];

    // membuat object ari class produk
    $model = new Pesanan();

    // script menampilkan data berdasarkan id
    $pesanan = $model->detail_pesanan($iddetail);

?>


<main id="main" class="main bg-pattern1">

<div class="d-flex justify-content-between">
  <div class="pagetitle">
    <h1>Kelola Pesanan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html"><u>Home</u></a></li>
        <li class="breadcrumb-item"><a href="#"><u>Admin</u></a></li>
        <li class="breadcrumb-item active">Kelola Pesanan</li>
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
                                <img src="../assets-web/img/product/big-product5.jpg" alt="">
                                <!-- <img src="../assets-web/img/product/product7.png" alt=""> -->
                            </figure>
                       </div>
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex justify-content-between">
                            <h5 class="fw-bold"><?=$pesanan['nama_pemesan']?></h5>
                            <div class="kode">
                                <p>Tanggal Pesanan : <span class="fw-bold badge bg-success"><?=$pesanan['tgl_pesanan']?></span></p>
                            </div>
                        </div>
                        <hr class="mb-2 mt-2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="">
                                    <div class="me-5">
                                        <p class="fw-bold">Produk : <span><?=$pesanan['produk_id']?></span></p>
                                    </div>
                                    <div class="me-5">
                                        <p class="fw-bold">QTY : <span><?=$pesanan['jumlah_pesanan']?></span></p>
                                    </div>
                                    <div class="me-5">
                                        <p class="fw-bold">No. Hp : <span><?=$pesanan['nohp_pemesan']?></span></p>
                                    </div>
                                    <div class="me-5">
                                        <p class="fw-bold">Email : <span><?=$pesanan['email_pemesan']?></span></p>
                                    </div>
                                    <div class="me-5">
                                        <p class="fw-bold">Alamat : <span><?=$pesanan['alamat_pemesan']?></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="fw-bold">Deskripsi :</p>
                                <p><?=$pesanan['deskripsi']?></p>
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
