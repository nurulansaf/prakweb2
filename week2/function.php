<?php

    function kelulusan($_rata){
        // jika nilai rata rata siswa di bawah 55 tidak lulus
        // jika nilai rata rata siswa di atas 55  lulus
        if($_rata >= 55){
            return 'Lulus';
            // return 'Lulus';
        }else{
            return 'Tidak Lulus';
        }
    }


    // 1 buat grade, lalu kasih keterangan :
    // jika nilai diatas 85 grade A
    // jika nilai diatas 70 grade B
    // jika nilai diatas 56 grade C
    // jika nilai diatas 36 grade D
    // jika nilai diatas 10 grade E
    // jika tidak ada nilai cetak I (anda tidak ada nilai)

    function grade($_rata){
        if($_rata >= 85 ){
            return 'A';
        }elseif($_rata >=70 ){
            return 'B';
        }elseif($_rata >=56 ){
            return 'C';
        }elseif($_rata >=36 ){
            return 'D';
        }elseif($_rata >=10 ){
            return 'E';
        }else {
            return 'I(Tidak Ada Nilai)';
        }

    }

?>