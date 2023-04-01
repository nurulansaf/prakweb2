<?php

    class Pelanggan{
        private $koneksi;

        public function __construct(){
            // function_construct sebuah function yang dijalankan awalan
            global $conn;
            $this->koneksi = $conn;
        }

         // PELANGGAN
         public function pelanggan(){
            $sql = "SELECT * FROM pelanggan";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $data = $ps->fetchAll();
            return $data;
        }
        
    }
?>