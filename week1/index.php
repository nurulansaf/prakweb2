<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1</title>
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
            <h1 class="m-0">Praktikum 1</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Week 1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        
       <div id="week1">
        <hr>
            <h4>Array Associative</h4>
            <?php

                // Cara penulisan array
                $array_1 = array('pisang', 'mangga', 'jeruk');
                // kurung kotak/siku
                $array_2 = ["p" => 'pisang', "m" =>  'mangga', "j" => 'jeruk'];

                // cara mencetak array dengan associative
                echo "</br>";
                echo "<ol>";

                foreach ($array_2 as $x => $k){
                    echo "<li> $x - $k </li>";
                }

                echo "</ol>";

            ?>

            <div class="code-wrapper">
                <div class="code-wrapper-inner">
                <pre><code>&lt;?php // Array Associative example
    // Cara penulisan array
    $array_1 = array('pisang', 'mangga', 'jeruk');
    // kurung kotak/siku
    $array_2 = ["p" => 'pisang', "m" =>  'mangga', "j" => 'jeruk'];

    // cara mencetak array dengan associative
    echo "&lt;/br&gt;";
    echo "&lt;ol&gt;";

    foreach ($array_2 as $x =&gt; $k){
        echo "&lt;li&gt; $x - $k &lt;/li&gt;";
    }

    echo "&lt;/ol&gt;";
?&gt;</code></pre>
                </div>
                <!--/.code-wrapper-inner -->
            </div>
                <!--/.code-wrapper -->
       </div>

        <div id="week1">
        <hr>
        <h4>Array Buah</h4>
        <?php

            // Cara penulisan array
            $buah = array('pisang', 'mangga', 'jeruk', 'alpukat');
            // kurung kotak/siku
            $buah2 = ["p" => 'pisang', "m" =>  'mangga', "j" => 'jeruk'];


            // array indexed : mulai dari 0 - seterusnya
            //  array associative :  di depan value ada key "a"=>'pisang'
            //  array multidimensi : 

            echo $buah[1];
            echo '</br>';
            echo 'Jumlah Buah ' .count($buah);


            // cetak seluruh buah

            echo "</br>";
            echo "<ol>";

            foreach ($buah as $x){
                echo "<li> $x </li>";
            }

            echo "</ol>";

            // Tambah buah baru
            $buah[] = "Durian";

            // cetak seluruh buah baru
            echo "</br>";
            echo "<ol>";

            foreach ($buah as $buas){
                echo "<li> $buas </li>";
            }

            echo "</ol>";
        ?>

        <div class="code-wrapper">
            <div class="code-wrapper-inner">
                <pre><code>&lt;?php 
    // Cara penulisan array
    $buah = array('pisang', 'mangga', 'jeruk', 'alpukat');
    // kurung kotak/siku
    $buah2 = ["p" => 'pisang', "m" =>  'mangga', "j" => 'jeruk'];


    // array indexed : mulai dari 0 - seterusnya
    //  array associative :  di depan value ada key "a"=>'pisang'
    //  array multidimensi : 

    echo $buah[1];
    echo '&lt;/br&gt;';
    echo 'Jumlah Buah ' .count($buah);


    // cetak seluruh buah

    echo "&lt;/br&gt;";
    echo "&lt;ol&gt;";

    foreach ($buah as $x){
        echo "&lt;li&gt; $x &lt;/li&gt;";
    }

    echo "&lt;/ol&gt;";

    // Tambah buah baru
    $buah[] = "Durian";

    // cetak seluruh buah baru
    echo "&lt;/br&gt;";
    echo "&lt;ol&gt;";

    foreach ($buah as $buas){
        echo "&lt;li&gt; $buas &lt;/li&gt;";
    }

    echo "&lt;/ol&gt;";
?&gt;</code></pre>
                </div>
                <!--/.code-wrapper-inner -->
            </div>
                <!--/.code-wrapper -->

        </div>

        <div id="week1">
        <hr>
        <h4>Array Siswa</h4>
        <?php 
            // buatlah data nilai siswa dengan array assosiatif

            $ns1 = ['id'=>1, 'nim'=>'011011', 'uts'=>90, 'uas'=>90, 'tugas'=>100];
            $ns2 = ['id'=>2, 'nim'=>'022022', 'uts'=>90, 'uas'=>90, 'tugas'=>80];
            $ns3 = ['id'=>3, 'nim'=>'033033', 'uts'=>80, 'uas'=>90, 'tugas'=>85];

            // simpan seluruh data variable array assosiatif kedalam array indexing
            $ar_nilai = [$ns1, $ns2, $ns3];

            // nilai akhir
            // $na1 = ($ns1['uts'] + $ns1['uas']+$ns1['tugas'])/3;
            // $na2 = ($ns2['uts'] + $ns2['uas']+$ns2['tugas'])/3;
            // $na3 = ($ns3['uts'] + $ns3['uas']+$ns3['tugas'])/3;

            // $nilai_akhir = [$na1, $na2, $na3];


        ?>

        <h3 style="text-align: center">Data Nilai Siswa</h3>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nim</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php 

                $nomor = 1;
                foreach ($ar_nilai as $x){
                    echo '<tr><td>' .$nomor. '</td>';
                    echo '<td>' .$x['nim']. '</td>';
                    echo '<td>' .$x['uts']. '</td>';
                    echo '<td>' .$x['uas']. '</td>';
                    echo '<td>' .$x['tugas']. '</td>';
                    $nilai_akhir = ($x['uts'] + $x['uas']+$x['tugas'])/3;
                    echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                    
                    echo '</tr>';
                    $nomor++;
                }
                
                ?>
            </tbody>
        </table>  

        <div class="code-wrapper">
            <div class="code-wrapper-inner">
                <pre><code>&lt;?php 
    // buatlah data nilai siswa dengan array assosiatif

    $ns1 = ['id'=>1, 'nim'=>'011011', 'uts'=>90, 'uas'=>90, 'tugas'=>100];
    $ns2 = ['id'=>2, 'nim'=>'022022', 'uts'=>90, 'uas'=>90, 'tugas'=>80];
    $ns3 = ['id'=>3, 'nim'=>'033033', 'uts'=>80, 'uas'=>90, 'tugas'=>85];

    // simpan seluruh data variable array assosiatif kedalam array indexing
    $ar_nilai = [$ns1, $ns2, $ns3];

    // nilai akhir
    // $na1 = ($ns1['uts'] + $ns1['uas']+$ns1['tugas'])/3;
    // $na2 = ($ns2['uts'] + $ns2['uas']+$ns2['tugas'])/3;
    // $na3 = ($ns3['uts'] + $ns3['uas']+$ns3['tugas'])/3;

    // $nilai_akhir = [$na1, $na2, $na3];

?&gt;

&lt;h3 style="text-align: center"&gt;Data Nilai Siswa&lt;/h3&gt;
    &lt;table border="1" width="100%"&gt;
        &lt;thead&gt;
            &lt;tr&gt;
                &lt;th&gt;No&lt;/th&gt;
                &lt;th&gt;Nim&lt;/th&gt;
                &lt;th&gt;UTS&lt;/th&gt;
                &lt;th&gt;UAS&lt;/th&gt;
                &lt;th&gt;Tugas&lt;/th&gt;
                &lt;th&gt;Nilai Akhir&lt;/th&gt;
            &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
            &lt;?php 

            $nomor = 1;
            foreach ($ar_nilai as $x){
                echo '&lt;tr&gt;&lt;td&gt;' .$nomor. '&lt;/td&gt;';
                echo '&lt;td&gt;' .$x['nim']. '&lt;/td&gt;';
                echo '&lt;td&gt;' .$x['uts']. '&lt;/td&gt;';
                echo '&lt;td&gt;' .$x['uas']. '&lt;/td&gt;';
                echo '&lt;td&gt;' .$x['tugas']. '&lt;/td&gt;';
                $nilai_akhir = ($x['uts'] + $x['uas']+$x['tugas'])/3;
                echo '&lt;td&gt;'.number_format($nilai_akhir,2,',','.').'&lt;/td&gt;';
                
                echo '&lt;/tr&gt;';
                $nomor++;
            }
            
            ?&gt;
        &lt;/tbody&gt;
    &lt;/table&gt;  

</code></pre>
                </div>
                <!--/.code-wrapper-inner -->
            </div>
                <!--/.code-wrapper -->

        </div>

        <div id="week1">
            <hr>
            <h4>Variable Konstanta</h4>
            <?php

                // konstanta : tidak bisa diubah seluruh program
                // variable biasa itu bisa di ubah

                define ('PHI', 3.14);
                

                // Soal 1. Cari nilai dari luas lingkaran ddengan jari jari 8
                // Soal 2. Cari nilai dari keliling lingkaran dengan jari jari 8

                $jari = 8;

                $luas = PHI * $jari * $jari;
                $keliling = 2 * PHI * $jari;
                
                echo 'Luas lingkaran dengan jari jari 8 = ' . $luas;
                echo '</br>';
                echo 'Keliling lingkaran dengan jari jari 8 = ' . $keliling;


            ?>

            <div class="code-wrapper">
                    <div class="code-wrapper-inner">
                    <pre><code>&lt;?php // Variable Konstanta example
    // konstanta : tidak bisa diubah seluruh program
    // variable biasa itu bisa di ubah

    define ('PHI', 3.14);
    

    // Soal 1. Cari nilai dari luas lingkaran ddengan jari jari 8
    // Soal 2. Cari nilai dari keliling lingkaran dengan jari jari 8

    $jari = 8;

    $luas = PHI * $jari * $jari;
    $keliling = 2 * PHI * $jari;
    
    echo 'Luas lingkaran dengan jari jari 8 = ' . $luas;
    echo '</br>';
    echo 'Keliling lingkaran dengan jari jari 8 = ' . $keliling;
    ?&gt;</code></pre>
                    </div>
                    <!--/.code-wrapper-inner -->
                </div>
                    <!--/.code-wrapper -->
        </div>
    </section>
    
</body>
</html>