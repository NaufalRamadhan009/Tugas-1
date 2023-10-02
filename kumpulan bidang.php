<?php
require_once "tugas 6.php";
require_once "lingkaran.php";
require_once "persegi panjang.php";
require_once "segitiga.php";

// Membuat objek Lingkaran, PersegiPanjang, dan Segitiga
$lingkaran = new Lingkaran(9);
$persegiPanjang = new PersegiPanjang(5, 12);
$segitiga = new Segitiga(9, 6);

// Membuat array objek untuk pengulangan
$bidangArr = array($lingkaran, $persegiPanjang, $segitiga);

// Header tabel
echo "<table border='1'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
        </thead>
        <tbody>";

// Pengulangan untuk mengisi tabel
for ($i = 0; $i < count($bidangArr); $i++) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $bidangArr[$i]->namaBidang() . "</td>";
    echo "<td>" . $bidangArr[$i]->luasBidang() . "</td>";
    echo "<td>" . $bidangArr[$i]->kelilingBidang() . "</td>";
    echo "</tr>";
}

// Penutup tabel
echo "</tbody>";
echo "</table>";
?>