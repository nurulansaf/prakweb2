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