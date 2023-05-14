<?php

    $obj_kategoriproduk = new KategoriProduk();
    $obj_produkadmin = new ProdukAdmin();

    $datakategoriproduk = $obj_kategoriproduk->data_kategori();
    $dataprodukadmin = $obj_produkadmin->data_produk();

    // action edit
    $idedit = $_REQUEST['idedit'];

    // ternary operator
    // cek id dari req edit
    $produk = !empty($idedit) ? $obj_produkadmin->ambil_produk($idedit) : [];
    // var_dump($produk);
    // die;
?>



<main id="main" class="main bg-pattern1">

    <div class="d-flex justify-content-between">
      <div class="pagetitle">
        <h1>Kelola Produk</h1>
        <nav style="--bs-breadcrumb-divider: '>';">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><u>Admin</u></a></li>
            <li class="breadcrumb-item"><a href="#">Kelola Produk</a></li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
    </div>

    <section class="section dashboard">
      <div class="row">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ubah Produk</h5>

              <!-- Vertical Form -->
              <form class="row g-3"  method="POST" action="produk_controller.php">
                <div class="col-6">
                  <label for="inputNanme4" class="form-label">Nama Produk </label>
                  <input type="hidden" class="form-control" value="<?=$produk['id_produk']?>" id="id_produk" name="id_produk">
                  <input type="text" class="form-control" value="<?=$produk['nama_produk']?>" id="nama_produk" name="nama_produk" placeholder="Nama Produk">
                </div>
                <div class="col-3">
                  <label for="inputNanme4" class="form-label">Kode Produk </label>
                  <input type="text" class="form-control" value="<?=$produk['kode_produk']?>" id="kode_produk" name="kode_produk" placeholder="Kode Produk">
                </div>
                <div class="col-3">
                  <label for="inputKategori" class="form-label">Kategori</label>
                  <select id="inputState" class="form-select" id="kategoriproduk_id" name="kategoriproduk_id">
                      <option selected>Pilih Kategori</option>
                        <?php
                            foreach ($datakategoriproduk as $jp){
                        ?>
                            <option value="<?php echo $jp['id_kategoriproduk']?>"><?php echo $jp['nama_kategori']?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <!-- <div class="col-3">
                  <label for="inputNanme4" class="form-label">Harga Jual </label>
                  <input type="text" class="form-control" name="harga_jual" placeholder="Harga Jual">
                </div> -->
                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Harga Beli </label>
                  <input type="text" class="form-control" value="<?=$produk['harga_beli']?>" id="harga_beli" name="harga_beli" placeholder="Harga Beli">
                </div>
                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Stok </label>
                  <input type="text" class="form-control" value="<?=$produk['stok']?>" id="stok" name="stok" placeholder="Stok">
                </div>
                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Min Stok </label>
                  <input type="text" class="form-control" value="<?=$produk['min_stok']?>" id="min_stok" name="min_stok" placeholder="Min. Stok">
                </div>
                <div class="col-6">
                  <label for="inputGambar" class="form-label">Gambar Produk</label>
                  <input type="file" class="form-control" value="<?=$produk['gambar_produk']?>" id="gambar_produk" name="gambar_produk" id="inputGambar">
                </div>
                <div class="col-6">
                  <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                  <textarea type="text" class="form-control" value="<?=$produk['deskripsi']?>" id="deskripsi" name="deskripsi" id="inputDeskripsi"></textarea>
                </div>
                <div class="d-flex justify-content-end mt-3 mb-3">
                    <button name="proses" type="submit" value="ubah" class="btn btn-primary border-0">Ubah</button> 

                    <!-- hidden field untuk kalusa whre id =? -->
                    <input type="hidden" name="idx" value="<?=$idedit?>">
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>


        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
