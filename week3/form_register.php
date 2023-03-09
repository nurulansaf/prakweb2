<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi - IT Club Data Science</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
   <div class="container mt-5">
        <fieldset>
            <h2>Form Registrasi - IT Club Data Science</h2>
            <hr>

            <form method="POST" action="form_register.php">
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">NIM</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                        </div> 
                        <input id="nim" name="nim" placeholder="Masukan NIM" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-user"></i>
                        </div>
                        </div> 
                        <input id="nama" name="nama" placeholder="Masukan Nama" type="text" class="form-control">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Jenis Kelamin</label> 
                    <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="P"> 
                        <label for="jk_0" class="custom-control-label">Perempuan</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="L"> 
                        <label for="jk_1" class="custom-control-label">Laki-Laki</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="studi" class="col-4 col-form-label">Program Studi</label> 
                    <div class="col-8">
                    <select id="studi" name="studi" class="custom-select">
                        <option value="SI">Sistem Informasi</option>
                        <option value="TI">Teknik Informatika</option>
                        <option value="BD">Bisnis Digital</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4">Skill Web & Programming</label> 
                    <div class="col-8">
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]0" type="checkbox" class="custom-control-input" value="html"> 
                        <label for="skill[]0" class="custom-control-label">HTML</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]1" type="checkbox" class="custom-control-input" value="css"> 
                        <label for="skill[]1" class="custom-control-label">CSS</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]2" type="checkbox" class="custom-control-input" value="js"> 
                        <label for="skill[]2" class="custom-control-label">JavaScript</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]3" type="checkbox" class="custom-control-input" value="bootstrap"> 
                        <label for="skill[]3" class="custom-control-label">RWD Bootstrap</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]4" type="checkbox" class="custom-control-input" value="php"> 
                        <label for="skill[]4" class="custom-control-label">PHP</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]5" type="checkbox" class="custom-control-input" value="phyton"> 
                        <label for="skill[]5" class="custom-control-label">Phyton</label>
                    </div>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="skill[]6" type="checkbox" class="custom-control-input" value="java"> 
                        <label for="skill[]6" class="custom-control-label">Java</label>
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
                    <div class="col-8">
                    <select id="domisili" name="domisili" class="custom-select">
                        <option value="Jakarta">Jakarta</option>
                        <option value="Depok">Depok</option>
                        <option value="Bogor">Bogor</option>
                        <option value="Tangerang">Tangerang</option>
                        <option value="Bekasi">Bekasi</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-user-circle-o"></i>
                        </div>
                        </div> 
                        <input id="email" name="email" placeholder="Masukan Email" type="text" class="form-control">
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </fieldset>
   </div>
</body>
</html>


<?php


    // require_once 'predikat.php';
    // ambil data yang di input user berdasarkan unique name
    // gunakan fungsi isset untuk meriksa apakan suatu var sudah di atur  atau belum
    // jika ada var yang bernilai null makan fungsi isset akan mengembalikan nilai false

    if(isset($_POST["submit"])){
        $nim        = $_POST['nim'];
        $nama       = $_POST['nama'];
        $jk         = $_POST['jk'];
        $studi      = $_POST['studi'];
        $skill      = $_POST['skill'];
        $domisili   = $_POST['domisili'];
        $email      = $_POST['email'];


        $nilai = 0;

        foreach($skill as $value){
            switch($value){
                case 'html' :
                    // jika ada nilai value html dapet 10
                    $nilai +=10;
                    // jika tidak ada berarti 0 : break
                    break;

                case 'css' :
                    $nilai +=10;
                    break;
                    
                case 'js' :
                    $nilai +=20;
                    break;
                    
                case 'bootstrap' :
                    $nilai +=20;
                    break;
                    
                case 'php' :
                    $nilai +=30;
                    break;
                    
                case 'phyton' :
                    $nilai +=30;
                    break;
                    
                case 'java' :
                    $nilai +=50;
                    break;

                default :
                    $nilai += 0;
                    break;
            }
        }

        function predikat($nilai){
            if($nilai >= 150 ){
                return 'Sangat Baik';
            }elseif($nilai >=100 ){
                return 'Baik';
            }elseif($nilai >=60 ){
                return 'Cukup';
            }elseif($nilai >=40 ){
                return 'Kurang';
            }elseif($nilai >=0 ){
                return 'Tidak Memadai';
            }else {
                return 'I(Tidak Ada Nilai)';
            }
    
        }

        
        $predikat  = predikat($nilai);
    

    }

?>
<!-- 
<?php

   
?> -->

<?php


    // cetak ihasil input registrasi user

    echo "<hr>";
    echo '<div class="container">';
    echo "<h4>Hasil Registrasi :</h4>";
    echo "<hr>";
    echo "<table>";
    echo "<tr>";
    echo "<th> NIM </th>";
    echo "<td> : $nim </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th> Nama </th>";
    echo "<td> : $nama </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th> Jenis Kelamin </th>";
    echo "<td> : $jk </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th> Program Studi </th>";
    echo "<td> : $studi </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th> Skill </th>";
    echo "<td> : ";
    foreach($skill as $value){
        echo $value . ", ";
    }
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th> Skor Nilai </th>";
    echo "<td> : $nilai </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th> Domisili </th>";
    echo "<td> : $domisili </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th> Predikat </th>";
    echo "<td> : $predikat </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th> Email </th>";
    echo "<td> : $email </td>";
    echo "</tr>";
    echo "</table>";
    echo "</div>";






    // echo "<hr>";
    // echo '<div class="container">';
    // echo "<h4>Hasil Registrasi :</h4>";
    // echo "<br>NIM : $nim";
    // echo "<br>Nama : $nama";
    // echo "<br>Jenis Kelamin : $jk";
    // echo "<br>Program Studi : $studi";
    // echo "<br>Skill : ";
    // foreach($skill as $value){
    //     echo $value . ", ";
    // }
    // echo "<br>Skor Nilai : $nilai";
    // echo "<br>Domisili : $domisili";
    // echo "<br>Kategori Skill : $predikat";
    // echo "<br>Email : $email";
    // echo "</div>";

?>