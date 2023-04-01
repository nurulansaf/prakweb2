<?php

    class Kartu{
        private $koneksi;

        public function __construct(){
            // function_construct sebuah function yang dijalankan awalan
            global $conn;
            $this->koneksi = $conn;
        }

        // KARTU
        public function kartu(){
            $sql = "SELECT * FROM kartu";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $data = $ps->fetchAll();
            return $data;
        }
        
    }
?>