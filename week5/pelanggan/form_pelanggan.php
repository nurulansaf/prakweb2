<?php 
require_once '../dbkoneksi.php';
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<section class="container mt-2 mb-2">
  <h3 class="text-center">Tambah Data Pelanggan</h3>
  <form method="POST" action="proses_pelanggan.php">
    <div class="form-group row">
      <label for="kode" class="col-4 col-form-label">Kode</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-anchor"></i>
            </div>
          </div> 
          <input id="kode" name="kode" type="text" class="form-control"
          value="">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama Pelanggan</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-adjust"></i>
            </div>
          </div> 
          <input id="nama" name="nama" type="text" class="form-control" 
          value="">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label> 
      <div class="col-3">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-arrow-circle-o-left"></i>
            </div>
          </div> 
          <input id="jk" name="jk" value="P" type="radio" class="form-control">P
          <input id="jk" name="jk" value="L" type="radio" class="form-control">L
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-arrow-circle-up"></i>
            </div>
          </div> 
          <input id="tmp_lahir" name="tmp_lahir" value=""
          type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-arrow-circle-right"></i>
            </div>
          </div> 
          <input id="tgl_lahir" name="tgl_lahir" value="" type="date" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-4 col-form-label">Email</label> 
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-arrow-circle-up"></i>
            </div>
          </div> 
          <input id="email" name="email" value="" type="text" class="form-control">
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jenis" class="col-4 col-form-label">Kartu</label> 
      <div class="col-8">
          <?php 
              $sqljenis = "SELECT * FROM kartu";
              $rsjenis = $dbh->query($sqljenis);
          ?>
        <select id="kartu_id" name="kartu_id" class="custom-select">
            <?php 
              foreach($rsjenis as $rowjenis){
          ?>
              <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
          <?php
              }
          ?>
          <!--
          <option value="1">Elektronik</option>
          <option value="2">Furniture</option>
          <option value="3">Makanan</option>-->

        </select>
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <input type="submit" name="proses" type="submit" 
        class="btn btn-primary" value="Simpan"/>
      </div>
    </div>
  </form>
</section>