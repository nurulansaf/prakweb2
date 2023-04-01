<?php

    class JenisProduk{
        private $koneksi;

        public function __construct(){
            // function_construct sebuah function yang dijalankan awalan
            global $conn;
            $this->koneksi = $conn;
        }

        // JENIS PRODUK
        public function jenis_produk(){
            $sql = "SELECT * FROM jenis_produk";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $data = $ps->fetchAll();
            return $data;
        }
        
    }
?>