<?php
    require_once "tugas 6.php";
    class persegiPanjang extends bentuk2d
    {
        public $panjang;
        public $lebar;

        public function __construct($panjang, $lebar){
            $this -> panjang = $panjang;
            $this -> lebar = $lebar;
        }

        public function namaBidang(){
            return "Persegi Panjang";
        }

        public function luasBidang(){
            return $this -> panjang * $this -> lebar;
        }

        public function kelilingBidang(){
            return 2 * ($this -> panjang + $this -> lebar);
        }
    }
?>