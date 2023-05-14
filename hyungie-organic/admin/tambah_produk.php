<?php

    $obj_kategoriproduk = new KategoriProduk();
    $obj_produkadmin = new ProdukAdmin();

    $datakategoriproduk = $obj_kategoriproduk->data_kategori();
    $dataprodukadmin = $obj_produkadmin->data_produk();
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
              <h5 class="card-title">Tambah Produk</h5>

              <!-- Vertical Form -->
              <form class="row g-3"  method="POST" action="produk_controller.php">
                <div class="col-6">
                  <label for="inputNanme4" class="form-label">Nama Produk </label>
                  <input type="hidden" class="form-control" name="id_produk" id="inputNanme4">
                  <input type="text" class="form-control" name="nama_produk" id="inputNanme4" placeholder="Nama Produk">
                </div>
                <div class="col-3">
                  <label for="inputNanme4" class="form-label">Kode Produk </label>
                  <input type="text" class="form-control" name="kode_produk" id="inputNanme4" placeholder="Kode Produk">
                </div>
                <div class="col-3">
                  <label for="inputKategori" class="form-label">Kategori</label>
                  <select id="inputState" class="form-select" name="kategoriproduk_id">
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
                  <input type="hidden" class="form-control" name="id_produk" id="inputNanme4">
                  <input type="text" class="form-control" name="harga_jual" id="inputNanme4" placeholder="Harga Jual">
                </div> -->
                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Harga Beli </label>
                  <input type="hidden" class="form-control" name="id_produk" id="inputNanme4">
                  <input type="text" class="form-control" name="harga_beli" id="inputNanme4" placeholder="Harga Beli">
                </div>
                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Stok </label>
                  <input type="hidden" class="form-control" name="id_produk" id="inputNanme4">
                  <input type="text" class="form-control" name="stok" id="inputNanme4" placeholder="Stok">
                </div>
                <div class="col-4">
                  <label for="inputNanme4" class="form-label">Min Stok </label>
                  <input type="hidden" class="form-control" name="id_produk" id="inputNanme4">
                  <input type="text" class="form-control" name="min_stok" id="inputNanme4" placeholder="Min. Stok">
                </div>
                <div class="col-6">
                  <label for="inputGambar" class="form-label">Gambar Produk</label>
                  <input type="file" class="form-control" name="gambar_produk" id="inputGambar">
                </div>
                <div class="col-6">
                  <label for="inputDeskripsi" class="form-label">Deskripsi</label>
                  <textarea type="text" class="form-control" name="deskripsi" id="inputDeskripsi"></textarea>
                </div>
                <div class="d-flex justify-content-end mt-3 mb-3">
                    <button name="proses" type="submit" value="simpan" class="btn btn-primary border-0">Simpan</button> 
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>


        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
