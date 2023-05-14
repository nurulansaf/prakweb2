<!-- model dalam MVC bagian dari sistem yang bisa memanipulasi data yang terintegrasi langsung dengan database -->
<?php
    class Pesanan{
        private $koneksi;
        // karna menggunakan private jadi menggunakan $this

        public function __construct(){
            // function_construct sebuah function yang dijalankan awalan
            global $conn;
            $this->koneksi = $conn;
        }

        // TAMPIL PRODUK
        public function data_pesanan(){
            // $sql = "SELECT p.*, pr.nama_produk AS produk FROM tb_pesanan p INNER JOIN tb_produk pr ON pr.id_produk = p.produk_id ORDER BY p.id_pesanan DESC";
            $sql = "SELECT * FROM tb_pesanan";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $data = $ps->fetchAll();
            return $data;
        }

        // DETAIL DATA
        public function detail_pesanan($iddetail){
            $sql = "SELECT p.*, pr.nama_produk AS produk FROM tb_pesanan p INNER JOIN tb_produk pr ON pr.id_produk = p.produk_id  WHERE p.id_pesanan = $iddetail";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$iddetail]);
            $data = $ps->fetch();
            return $data;
        }
        // AMBIL DATA ID
        public function ambil_produk($idedit){
            // select semua kolom yang ada di dalam table produk
            $sql = "SELECT p.*, j.nama_kategori AS kategori FROM tb_produk p INNER JOIN tb_kategoriproduk j 
            ON j.id_kategoriproduk = p.kategoriproduk_id WHERE p.id_produk = $idedit";
            // $sql = "SELECT * FROM tb_produk";
            // kirim data select menggunakan method prepare
            $ps = $this->koneksi->prepare($sql);
            // eksekusi data selet yang sudah di siapkan menggunakan method execute
            $ps->execute([$idedit]);
            $data = $ps->fetch();
            // var_dump($data);
            // die;
            return $data;
        }

       
    }
?>