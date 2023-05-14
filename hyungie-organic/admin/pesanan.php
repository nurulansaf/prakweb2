<?php 
    $models = new Pesanan();
    $data_pesanan = $models->data_pesanan();
    // var_dump($data_pesanan);
    // die;
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
              <table class="table table-borderless datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tgl</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No.Hp</th>
                        <th scope="col">Email</th>
                        <th scope="col">QTY </th>
                        <th scope="col">Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                <!-- PRODUK ITEM -->
                <?php 
                    $no = 1;
                    foreach($data_pesanan as $v)
                    {
                ?>
                  <tr>
                    <th><?= $no ?></th>
                    <td><?= $v['tgl_pesanan'] ?></td>
                    <td><?= $v['nama_pemesan'] ?></td>
                    <td><?= $v['alamat_pemesan'] ?></td>
                    <td><?= $v['nohp_pemesan'] ?></td>
                    <td><?= $v['email_pemesan'] ?></td>
                    <td><?= $v['jumlah_pesanan'] ?></td>
                    <td><?= $v['produk_id'] ?></td>
                    <td><?= $v['deskripsi'] ?></td>
                    
                    <td>
                      <form method="POST" action="pesanan_controller.php">
                        <a class="btn btn-sm btn-success border-0" href="index.php?hal=detail_pesanan&iddetail=<?=$v['id_pesanan']?>"><i class='bx bx-info-circle text-white'></i></a> 
                        <input type="hidden" name="idx" value="<?=$v['id_pesanan']?>">
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
