<?php

    class KategoriProduk{
        private $koneksi;

        public function __construct(){
            // function_construct sebuah function yang dijalankan awalan
            global $conn;
            $this->koneksi = $conn;
        }

        // JENIS PRODUK
        public function data_kategori(){
            $sql = "SELECT * FROM tb_kategoriproduk";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $data = $ps->fetchAll();
            return $data;
        }
        
        // TAMBAH DATA
        public function tambah_kategori($data){
            $sql = "INSERT INTO tb_kategoriproduk (nama_kategori) VALUES (?)";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }

         // DELETE DATA
         public function hapus_kategori($id){
            $sql = "DELETE FROM tb_kategoriproduk WHERE id_kategoriproduk=?";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id]);
        }
    }
?>