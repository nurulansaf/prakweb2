<!-- model dalam MVC bagian dari sistem yang bisa memanipulasi data yang terintegrasi langsung dengan database -->
<?php
    class Produk{
        private $koneksi;
        // karna menggunakan private jadi menggunakan $this

        public function __construct(){
            // function_construct sebuah function yang dijalankan awalan
            global $conn;
            $this->koneksi = $conn;
        }

        // PRODUK
        public function data_produk(){
            // select semua kolom yang ada di dalam table produk
            $sql = "SELECT * FROM produk";
            // kirim data select menggunakan method prepare
            $ps = $this->koneksi->prepare($sql);
            // eksekusi data selet yang sudah di siapkan menggunakan method execute
            $ps->execute();
            $data = $ps->fetchAll();
            return $data;
        }

       
    }
?>