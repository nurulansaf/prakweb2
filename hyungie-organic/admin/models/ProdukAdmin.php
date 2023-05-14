<!-- model dalam MVC bagian dari sistem yang bisa memanipulasi data yang terintegrasi langsung dengan database -->
<?php
    class ProdukAdmin{
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
            $sql = "SELECT p.*, j.nama_kategori AS kategori FROM tb_produk p INNER JOIN tb_kategoriproduk j ON j.id_kategoriproduk = p.kategoriproduk_id ORDER BY p.id_produk DESC";
            // $sql = "SELECT * FROM tb_produk";
            // kirim data select menggunakan method prepare
            $ps = $this->koneksi->prepare($sql);
            // eksekusi data selet yang sudah di siapkan menggunakan method execute
            $ps->execute();
            $data = $ps->fetchAll();
            return $data;
        }

        // DETAIL DATA
        public function detail_produk($iddetail){
            // $sql = "SELECT p.*, j.nama_kategori AS kategori FROM tb_produk p INNER JOIN tb_kategoriproduk j ON j.id_kategoriproduk = p.kategoriproduk_id ORDER BY p.id_produk DESC";
            $sql = "SELECT p.*, j.nama_kategori AS kategori FROM tb_produk p INNER JOIN tb_kategoriproduk j 
            ON j.id_kategoriproduk = p.kategoriproduk_id WHERE p.id_produk = $iddetail";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$iddetail]);
            $data = $ps->fetch();
            return $data;
        }

        // TAMBAH DATA
        public function tambah_produk($data){
            $sql = "INSERT INTO tb_produk (kode_produk,nama_produk,harga_beli,harga_jual,stok,min_stok,deskripsi,kategoriproduk_id,gambar_produk) VALUES (?,?,?,?,?,?,?,?,?)";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
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

        // EDIT DATA
        public function edit_produk($data){
            $sql = "UPDATE tb_produk SET kode_produk=?, nama_produk=?, harga_beli=?, harga_jual=?, stok=?, 
            min_stok=?, deskripsi=?, kategoriproduk_id=?, gambar_produk=? WHERE id_produk=?";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute($data);
        }

        // DELETE DATA
        public function hapus_produk($id){
            $sql = "DELETE FROM tb_produk WHERE id_produk=?";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute([$id]);
        }

       
    }
?>