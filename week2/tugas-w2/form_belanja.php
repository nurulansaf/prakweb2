<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="container mt-5">
        <h2 class="fw-bold">Belanja Online</h2>
        <hr>

       <div class="row">
            <div class="col-md-8">
                <form method="post" action="form_belanja.php">
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

            
            <?php

            require_once 'action_harga.php';

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

    </div>
    
</body>
</html>