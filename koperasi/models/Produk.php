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

        // TAMPIL PRODUK
        public function data_produk(){
            // select semua kolom yang ada di dalam table produk
            $sql = "SELECT p.*, j.nama AS jenis FROM produk p INNER JOIN jenis_produk j ON j.id = p.jenis_produk_id ORDER BY p.id DESC";
            // kirim data select menggunakan method prepare
            $ps = $this->koneksi->prepare($sql);
            // eksekusi data selet yang sudah di siapkan menggunakan method execute
            $ps->execute();
            $data = $ps->fetchAll();
            return $data;
        }

        // DETAIL DATA
        public function detail_produk($id){
            $sql = "SELECT p.*, j.nama AS jenis FROM produk p INNER JOIN jenis_produk j ON j.id = p.jenis_produk_id ORDER BY p.id DESC";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id]);
            $data = $ps->fetch();
            return $data;
        }

        // TAMBAH DATA
        public function tambah_produk($data){
            $sql = "INSERT INTO produk (kode,nama,harga_beli,harg   a_jual,stok,min_stok,jenis_produk_id) VALUES (?,?,?,?,?,?,?)";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }

        // EDIT DATA
        public function edit_produk($data){
            $sql = "UPDATE produk SET kode=?, nama=?, harga_beli=?, harga_jual=?, stok=?, min_stok=?, jenis_produk_id=? WHERE id=?";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }

        // DELETE DATA
        public function delete_produk($id){
            $sql = "DELETE FROM produk WHERE id=?";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($id);
        }

       
    }
?>