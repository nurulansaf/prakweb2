<?php

    class Pesanan{
        private $koneksi;

        public function __construct(){
            // function_construct sebuah function yang dijalankan awalan
            global $conn;
            $this->koneksi = $conn;
        }

        // PESANAN
        public function data_pesanan(){
            $sql = "SELECT * FROM tb_pesanan";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $data = $ps->fetchAll();
            return $data;
        }

        // TAMBAH DATA
        public function tambah_pesanan($data){
            $sql = "INSERT INTO tb_pesanan (tgl_pesanan,nama_pemesan,alamat_pemesan,nohp_pemesan,
            email_pemesan,jumlah_pesanan,deskripsi,produk_id) VALUES (?,?,?,?,?,?,?,?)";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }
        
    }
?>