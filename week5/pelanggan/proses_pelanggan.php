<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_kode       = $_POST['kode'];
   $_nama       = $_POST['nama'];
   $_jk         = $_POST['jk'];
   $_tmplahir   = $_POST['tmp_lahir'];
   $_tgllahir   = $_POST['tgl_lahir'];
   $_email      = $_POST['email'];
   $_kartuid    = $_POST['kartu_id'];

   $_proses     = $_POST['proses'];

   // array data
   $data[]=$_kode; // ? 1
   $data[]=$_nama; // ? 2
   $data[]=$_jk; // ? 2
   $data[]=$_tmplahir; // ? 2
   $data[]=$_tgllahir; // ? 2
   $data[]=$_email; // ? 2
   $data[]=$_kartuid; // ? 2

   if($_proses == "Simpan"){
      // data baru
      $sql = "INSERT INTO pelanggan (kode,nama,jk,tmp_lahir,tgl_lahir,email,kartu_id) VALUES (?,?,?,?,?,?,?)";
      echo '<script>alert("Berhasil Tambah Data");window.location="list_pelanggan.php"</script>';
   }else if($_proses == "Update"){
      // update data
      $data[]=$_POST['id'];// ? 8
      $sql = "UPDATE pelanggan SET kode=?,nama=?,jk=?,tmp_lahir=?,tgl_lahir=?,email=?,kartu_id=? WHERE id=?";
      echo '<script>alert("Berhasil Edit Data");window.location="list_pelanggan.php"</script>';
   }
   if(isset($sql)){
      $st = $dbh->prepare($sql);
      $st->execute($data);
   }
?>