<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class konversiSuhu {
        public $satuanSuhuAwal;
        public $besaranSuhu;
        public $satuanSuhuTujuan;
        
        public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan) {
        $this -> satuanSuhuAwal = $satuanSuhuAwal;
        $this -> besaranSuhu = $besaranSuhu;
        $this -> satuanSuhuTujuan = $satuanSuhuTujuan;
    }

        public function celciusToFahrenheit(){
            if ($this -> satuanSuhuAwal == "C" && $this -> satuanSuhuTujuan == "F"){
                return($this -> besaranSuhu * 9/5) + 32;
            }
        }
        public function fahrenheitToCelcius(){
            if ($this -> satuanSuhuAwal == "F" && $this -> satuanSuhuTujuan == "C"){
                return ($this -> besaranSuhu - 32) * 5/9 ;
            }
        }
        public function celciusToRheamur(){
            if ($this -> satuanSuhuAwal == "C" && $this -> satuanSuhuTujuan == "R"){
                return ($this->besaranSuhu * 4/5);
            }
        }
        public function rheamurToCelcius(){
            if ($this -> satuanSuhuAwal == "R" && $this -> satuanSuhuTujuan == "C") {
                return ($this -> besaranSuhu * 5/4 );
            }
        }
public function cetak() {
    $hasil_konversi = null;

    if ($this->satuanSuhuAwal == "C" && $this->satuanSuhuTujuan == "F") {
        $hasil_konversi = $this->CelciusToFahrenheit();
    } elseif ($this->satuanSuhuAwal == "F" && $this->satuanSuhuTujuan == "C") {
        $hasil_konversi = $this->FahrenheitToCelcius();
    } elseif ($this->satuanSuhuAwal == "C" && $this->satuanSuhuTujuan == "R") {
        $hasil_konversi = $this->CelciusToRheamur();
    } elseif ($this->satuanSuhuAwal == "R" && $this->satuanSuhuTujuan == "C") {
        $hasil_konversi = $this->RheamurToCelcius();
    }

    if ($hasil_konversi !== null) {
        echo "<tr>";
        echo "<td>" . $this->satuanSuhuAwal . "</td>";
        echo "<td>" . $this->besaranSuhu . "</td>";
        echo "<td>" . $this->satuanSuhuTujuan . "</td>";
        echo "<td>" . $hasil_konversi . "</td>";
        echo "</tr>";
    }
}
}
    ?>
</body>
</html>