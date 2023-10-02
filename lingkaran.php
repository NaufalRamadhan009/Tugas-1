<?php
    require_once "tugas 6.php";
    class lingkaran extends bentuk2d
    {
        public $jari2;

        public function __construct($jari2){
            $this -> jari2 = $jari2;
        }
        public function namaBidang(){
            return "Lingkaran";
        }
        public function luasBidang(){
            return 3.14 * $this->jari2 * $this->jari2;
        }
        public function kelilingBidang(){
            return 2 * 3.14 * $this->jari2;
        }

    }
?>