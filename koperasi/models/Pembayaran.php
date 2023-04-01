<?php

    class Pembayaran{
        private $koneksi;

        public function __construct(){
            // function_construct sebuah function yang dijalankan awalan
            global $conn;
            $this->koneksi = $conn;
        }

         // PEMBAYARAN
         public function pembayaran(){
            $sql = "SELECT * FROM pembayaran";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $data = $ps->fetchAll();
            return $data;
        }
        
    }
?>