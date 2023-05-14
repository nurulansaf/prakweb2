<?php

    $obj_jenisproduk = new JenisProduk();
    $obj_produk = new Produk();

    $datajenisproduk = $obj_jenisproduk->jenis_produk();
    $dataproduk = $obj_produk->data_produk();
?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="">
                <h1>Tambah Produk</h1>
            </div>
            <div class="">
                <nav aria-label="breadcrumb mt-5 mb-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Produk</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Produk</li>
                    </ol>
                </nav>
            </div>
        </div>
        <hr>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container">
            <form method="POST" action="index.php?hal=produk_controller">
                <div class="form-group row">
                    <label for="kode" class="col-4 col-form-label">Kode</label> 
                    <div class="col-8">
                    <input id="kode" name="kode" placeholder="Masukan Kode" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" placeholder="Masukan Nama Produk" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
                    <div class="col-8">
                    <input id="harga_beli" name="harga_beli" placeholder="Masukan Harga Beli" type="text" class="form-control">
                    </div>
                </div>
                <!-- <div class="form-group row">
                    <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label> 
                    <div class="col-8">
                    <input id="harga_jual" name="harga_jual" placeholder="Masukan Harga Jual" type="text" class="form-control">
                    </div>
                </div> -->
                <div class="form-group row">
                    <label for="stok" class="col-4 col-form-label">Stok</label> 
                    <div class="col-8">
                    <input id="stok" name="stok" placeholder="Masukan Stok" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="min_stok" class="col-4 col-form-label">Min Stok</label> 
                    <div class="col-8">
                    <input id="min_stok" name="min_stok" placeholder="Masukan Min Stok" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_produk_id" class="col-4 col-form-label">Jenis Produk</label> 
                    <div class="col-8">
                    <select id="jenis_produk_id" name="jenis_produk_id" class="custom-select">
                        <option selected>Jenis Produk</option>
                        <?php
                            foreach ($datajenisproduk as $jp){
                        ?>
                        <option value="<?php echo $jp['id']?>"><?php echo $jp['nama']?></option>
                        <?php
                            }
                        ?>
                    </select>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="proses" type="submit" value="simpan" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

  </div>
  <!-- /.content-wrapper -->

