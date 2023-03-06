
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