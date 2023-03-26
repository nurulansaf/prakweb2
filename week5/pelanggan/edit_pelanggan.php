
<?php 
  require_once '../dbkoneksi.php';

  // untuk menampilkan data pelanggan berdasarkan id 
  $id = $_GET['id'];
  $sql = "SELECT * FROM pelanggan WHERE id=?";
  // $sql = "SELECT kartu.id, pelanggan.nama FROM kartu INNER JOIN pelanggan ON kartu.id = pelanggan.id";
  $row = $dbh->prepare($sql);
  $row->execute(array($id));
  $hasil = $row->fetch();
?>
        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

<section class="container mt-2 mb-2">
<h3 class="text-center">Detail Data <?=$hasil['nama']?></h3>

  <form method="POST" action="proses_pelanggan.php">
  <input type="hidden" value="<?php echo $hasil['id'];?>" name="id">
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
          value="<?php echo $hasil['kode'];?>">
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
          value="<?php echo $hasil['nama'];?>">
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
          <input id="jk" name="jk" value="P" type="radio" class="form-control"
          <?php
            if($hasil["jk"] == 'P'){
              echo 'checked';
            }
          ?>
          >P
          <input id="jk" name="jk" value="L" type="radio" class="form-control"
          <?php
            if($hasil["jk"] == 'L'){
              echo 'checked';
            }
          ?>
          >L
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
          <input id="tmp_lahir" name="tmp_lahir" value="<?php echo $hasil['tmp_lahir'];?>"
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
          <input id="tgl_lahir" name="tgl_lahir" value="<?php echo $hasil['tgl_lahir'];?>" type="date" class="form-control">
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
          <input id="email" name="email" value="<?php echo $hasil['email'];?>" type="text" class="form-control">
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

                if($hasil["kartu_id"] == $_GET['kartu_id']){
                  $selected = "selected";
                }else{
                  $selected = "";
                }

                $output = '<option value="'.$hasil['kartu_id'].'" '.$selected.'>'.$rowjenis['nama'].'</option>';
                //Echo output
                echo $output;  
              }
          ?>
        </select>
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
      <!-- <button class="btn btn-primary btn-md" name="create"><i class="fa fa-edit"> </i> Update</button> -->
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update"/>
      </div>
    </div>
  </form>

</section>