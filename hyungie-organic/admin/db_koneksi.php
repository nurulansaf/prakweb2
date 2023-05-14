<?php
    // konfigurasi database
    $host   = 'localhost';
    $db     = 'db_hyungiemarket';
    $user   = 'root';
    $pass   = '';

    // membuat koneksi PDO
    // dengan menggunakan try catch

    try {
        //code...
        // membuat object koneksi pdo yang di dalamnya ada paramenter host dll

        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // set atribut mengatur mode kesalahan
        // echo "<h1>Database berhasil terkoneksi</h1>";    
    } catch (PDOException $e) {
        //throw $th;
        echo "Database tidak terkoneksi : " . $e->getMessage();
    }


?>