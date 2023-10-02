<?php
    require_once "tugas 6.php";
    class Segitiga extends bentuk2d
    {
        public $alas;
        public $tinggi;

        public function __construct ($alas, $tinggi){
            $this -> alas = $alas;
            $this -> tinggi = $tinggi;
        }
        
        public function namaBidang(){
            return "segitiga";
        }
        public function luasBidang(){
            return 0.5 * $this -> alas * $this -> tinggi;
        }

        public function kelilingBidang(){
            return "Tidak Didefinisikan";
            // Di Karenakan Segitiga Memiliki Banyak Bentuk Jadi Keliling Tidak Dapat Di Hitung
        }
    }


?>