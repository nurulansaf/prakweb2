<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 2</title>
    <style>
        .container h4{
            font-weight: 600;
        }
    </style>
</head>
<body>

    <section class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Praktikum 2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Week 2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->


        <div id="week2">
          <hr>
            <h4>Form Penilaian Siswa</h4>
            <div class="container">
              <h2 class="pt-4" style="text-align: center;">Form Nilai Mahasiswa</h2>
              <hr>

              <form method="POST" action="../../week2/nilai_siswa.php">
                  <div class="form-group row">
                      <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                      <div class="col-8">
                          <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                      <div class="col-8">
                      <select id="select" name="matkul" class="custom-select">
                          <option value="DDP">Dasar-Dasar Pemrograman</option>
                          <option value="PW">Pemrograman Web</option>
                          <option value="BD">Basis Data I</option>
                      </select>
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                      <div class="col-8">
                          <input id="nilai_uts" name="nilai_uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                      <div class="col-8">
                          <input id="nilai_uas" name="nilai_uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control">
                      </div>
                  </div>
                  <div class="form-group row">
                      <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                      <div class="col-8">
                          <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas/Praktikum" type="text" class="form-control">
                      </div>
                  </div> 
                  <div class="form-group row">
                      <div class="offset-4 col-8">
                          <input type="submit" value="Simpan" name="proses" class="btn btn-primary">
                      </div>
                  </div>
              </form>


                            
              <?php

              require_once 'function.php';

              // mengambil data yang diinputkan oleh user
              $proses         = $_POST['proses'];
              $nama           = $_POST['nama'];
              $matkul         = $_POST['matkul'];
              $nilai_uts      = $_POST['nilai_uts'];
              $nilai_uas      = $_POST['nilai_uas'];
              $nilai_tugas    = $_POST['nilai_tugas'];

              $_rata = ($nilai_tugas + $nilai_uas + $nilai_uts) / 3;
              $ket = kelulusan($_rata);
              $grade  = grade($_rata);

              // cetak data yang telah diambil ke dalam browser
              // echo 'Proses : '.$proses;
              if(!empty($proses)){
                  echo '<br>Nama : '.$nama;
                  echo '<br>Mata Kuliah : '.$matkul;
                  echo '<br>Nilai UTS : '.$nilai_uts;
                  echo '<br>Nilai UAS : '.$nilai_uas;
                  echo '<br>Nilai Tugas : '.$nilai_tugas;
                  echo '<br>Rata - Rata : '.$_rata;
                  echo '<br>Keterangan : '.$ket;
                  echo '<br>Grade : '.$grade; 
                  echo '<br>Data Telah di $proses '; 
              }



              ?>

          </div>

          <pre>
            <code>
      &lt;form method="POST" action="../../week2/nilai_siswa.php"&gt;
        &lt;div class="form-group row"&gt;
            &lt;label for="nama" class="col-4 col-form-label"&gt;Nama Lengkap&lt;/label&gt; 
            &lt;div class="col-8"&gt;
                &lt;input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="form-group row"&gt;
            &lt;label for="select" class="col-4 col-form-label"&gt;Mata Kuliah&lt;/label&gt; 
            &lt;div class="col-8"&gt;
            &lt;select id="select" name="matkul" class="custom-select"&gt;
                &lt;option value="DDP"&gt;Dasar-Dasar Pemrograman&lt;/option&gt;
                &lt;option value="PW"&gt;Pemrograman Web&lt;/option&gt;
                &lt;option value="BD"&gt;Basis Data I&lt;/option&gt;
            &lt;/select&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="form-group row"&gt;
            &lt;label for="nilai_uts" class="col-4 col-form-label"&gt;Nilai UTS&lt;/label&gt; 
            &lt;div class="col-8"&gt;
                &lt;input id="nilai_uts" name="nilai_uts" placeholder="Masukkan Nilai UTS" type="text" class="form-control"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="form-group row"&gt;
            &lt;label for="nilai_uas" class="col-4 col-form-label"&gt;Nilai UAS&lt;/label&gt; 
            &lt;div class="col-8"&gt;
                &lt;input id="nilai_uas" name="nilai_uas" placeholder="Masukkan Nilai UAS" type="text" class="form-control"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="form-group row"&gt;
            &lt;label for="nilai_tugas" class="col-4 col-form-label"&gt;Nilai Tugas/Praktikum&lt;/label&gt; 
            &lt;div class="col-8"&gt;
                &lt;input id="nilai_tugas" name="nilai_tugas" placeholder="Masukkan Nilai Tugas/Praktikum" type="text" class="form-control"&gt;
            &lt;/div&gt;
        &lt;/div&gt; 
        &lt;div class="form-group row"&gt;
            &lt;div class="offset-4 col-8"&gt;
                &lt;input type="submit" value="Simpan" name="proses" class="btn btn-primary"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/form&gt;
  
&lt;?php

  require_once 'function.php';

  // mengambil data yang diinputkan oleh user
  $proses         = $_POST['proses'];
  $nama           = $_POST['nama'];
  $matkul         = $_POST['matkul'];
  $nilai_uts      = $_POST['nilai_uts'];
  $nilai_uas      = $_POST['nilai_uas'];
  $nilai_tugas    = $_POST['nilai_tugas'];

  $_rata = ($nilai_tugas + $nilai_uas + $nilai_uts) / 3;
  $ket = kelulusan($_rata);
  $grade  = grade($_rata);

  // cetak data yang telah diambil ke dalam browser
  // echo 'Proses : '.$proses;
  if(!empty($proses)){
      echo '&lt;br&gt;Nama : '.$nama;
      echo '&lt;br&gt;Mata Kuliah : '.$matkul;
      echo '&lt;br&gt;Nilai UTS : '.$nilai_uts;
      echo '&lt;br&gt;Nilai UAS : '.$nilai_uas;
      echo '&lt;br&gt;Nilai Tugas : '.$nilai_tugas;
      echo '&lt;br&gt;Rata - Rata : '.$_rata;
      echo '&lt;br&gt;Keterangan : '.$ket;
      echo '&lt;br&gt;Grade : '.$grade; 
      echo '&lt;br&gt;Data Telah di $proses '; 
  }



  ?&gt;</code>
          </pre>
        </div>
        
        <div id="week2">
          <hr>
            <h4>Tugas Week 2</h4>
            <div class="container mt-5">
              <h2 class="fw-bold">Belanja Online</h2>
              <hr>

              <div class="row">
                <div class="col-md-8">
                    <form method="post" action="../../week2/tugas-w2/form_belanja.php">
                        <div class="form-group row">
                            <label for="customer" class="col-4 col-form-label">Customer</label> 
                            <div class="col-8">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-4">Pilih Produk</label> 
                            <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"> 
                                <label for="radio_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="KULKAS"> 
                                <label for="radio_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
                                <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                            <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <input type="submit" value="Kirim" name="proses" class="btn btn-success">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="bd-example">
                        <table class="table table-hover">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col" colspan="3">Daftar Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">TV</th>
                                    <td>:</td>
                                    <td>4.200.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">Kulkas</th>
                                    <td>:</td>
                                    <td>3.100.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mesin Cuci</th>
                                    <td>:</td>
                                    <td>3.800.000</td>
                                </tr>
                            </tbody>
                            
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col" colspan="3">Harga Dapat Berubah Setiap Saat</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
              </div>
              <hr>
        
              
            </div>

            <pre>
              <code>
  &lt;div class="row"&gt;
    &lt;div class="col-md-8"&gt;
        &lt;form method="post" action="form_belanja.php"&gt;
            &lt;div class="form-group row"&gt;
                &lt;label for="customer" class="col-4 col-form-label"&gt;Customer&lt;/label&gt; 
                &lt;div class="col-8"&gt;
                &lt;input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control"&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="form-group row"&gt;
                &lt;label class="col-4"&gt;Pilih Produk&lt;/label&gt; 
                &lt;div class="col-8"&gt;
                &lt;div class="custom-control custom-radio custom-control-inline"&gt;
                    &lt;input name="produk" id="radio_0" type="radio" class="custom-control-input" value="TV"&gt; 
                    &lt;label for="radio_0" class="custom-control-label"&gt;TV&lt;/label&gt;
                &lt;/div&gt;
                &lt;div class="custom-control custom-radio custom-control-inline"&gt;
                    &lt;input name="produk" id="radio_1" type="radio" class="custom-control-input" value="KULKAS"&gt; 
                    &lt;label for="radio_1" class="custom-control-label"&gt;KULKAS&lt;/label&gt;
                &lt;/div&gt;
                &lt;div class="custom-control custom-radio custom-control-inline"&gt;
                    &lt;input name="produk" id="radio_2" type="radio" class="custom-control-input" value="MESIN CUCI"&gt; 
                    &lt;label for="radio_2" class="custom-control-label"&gt;MESIN CUCI&lt;/label&gt;
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="form-group row"&gt;
                &lt;label for="jumlah" class="col-4 col-form-label"&gt;Jumlah&lt;/label&gt; 
                &lt;div class="col-8"&gt;
                &lt;input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control"&gt;
                &lt;/div&gt;
            &lt;/div&gt; 
            &lt;div class="form-group row"&gt;
                &lt;div class="offset-4 col-8"&gt;
                    &lt;input type="submit" value="Kirim" name="proses" class="btn btn-success"&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    &lt;/div&gt;
    &lt;div class="col-md-4"&gt;
        &lt;div class="bd-example"&gt;
            &lt;table class="table table-hover"&gt;
                &lt;thead class="bg-primary text-white"&gt;
                    &lt;tr&gt;
                        &lt;th scope="col" colspan="3"&gt;Daftar Harga&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;th scope="row"&gt;TV&lt;/th&gt;
                        &lt;td&gt;:&lt;/td&gt;
                        &lt;td&gt;4.200.000&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row"&gt;Kulkas&lt;/th&gt;
                        &lt;td&gt;:&lt;/td&gt;
                        &lt;td&gt;3.100.000&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row"&gt;Mesin Cuci&lt;/th&gt;
                        &lt;td&gt;:&lt;/td&gt;
                        &lt;td&gt;3.800.000&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
                
                &lt;thead class="bg-primary text-white"&gt;
                    &lt;tr&gt;
                        &lt;th scope="col" colspan="3"&gt;Harga Dapat Berubah Setiap Saat&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
            &lt;/table&gt;
        &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;hr&gt;
        
                    
 &lt;?php

    require_once 'tugas-w2/action_harga.php';

    $proses         = $_POST['proses'];
    $customer       = $_POST['customer'];
    $produk         = $_POST['produk'];
    $jumlah         = $_POST['jumlah'];

    $h_produk = harga_produk($produk);
    $t_belanja = $jumlah * $h_produk;

    // cetak data yang telah diambil ke dalam browser
    // echo 'Proses : '.$proses;
    if(!empty($proses)){
        echo '&lt;br&gt;Nama Customer : '.$customer;
        echo '&lt;br&gt;Produk Pilihan : '.$produk;
        echo '&lt;br&gt;Jumlah : '.$jumlah;
        echo '&lt;br&gt;Total Belanja : '.$t_belanja;
        // echo '&lt;br&gt;Data Telah di $proses '; 
    }



    ?&gt;
              </code>
            </pre>
        </div>
        
        <div id="week2">
          <hr>
            <h4></h4>
        </div>
    </section>
    
</body>
</html>

  
<?php

require_once 'tugas-w2/action_harga.php';

$proses         = $_POST['proses'];
$customer       = $_POST['customer'];
$produk         = $_POST['produk'];
$jumlah         = $_POST['jumlah'];

$h_produk = harga_produk($produk);
$t_belanja = $jumlah * $h_produk;

// cetak data yang telah diambil ke dalam browser
// echo 'Proses : '.$proses;
if(!empty($proses)){
    echo '<br>Nama Customer : '.$customer;
    echo '<br>Produk Pilihan : '.$produk;
    echo '<br>Jumlah : '.$jumlah;
    echo '<br>Total Belanja : '.$t_belanja;
    // echo '<br>Data Telah di $proses '; 
}



?>
