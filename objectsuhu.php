<?php
    require 'tugas 5.php';
    $s1 = new konversiSuhu("C", 45 , "F");
    $s2 = new konversiSuhu("C", 15 , "F");

    $s3 = new konversiSuhu("F", 75 , "C");
    $s4 = new konversiSuhu("F", 110 , "C");

    $s5 = new konversiSuhu("C", 40 , "R");
    $s6 = new konversiSuhu("C", 60 , "R");

    $s7 = new konversiSuhu("R", 46 , "C");
    $s8 = new konversiSuhu("R", 50 , "C");

    echo '<table border ="1" cellspacing="0" cellpadding="5">';
    echo '<tr>';
    echo '<td> Satuan Suhu Awal </td>';
    echo '<td> Besaran Suhu </td>';
    echo '<td> Satuan Suhu Tujuan </td>';
    echo '<td> Hasil Konversi Suhu </td>';
    echo '</tr>';
    $s1 -> cetak();
    $s2 -> cetak();
    $s3 -> cetak();
    $s4 -> cetak();
    $s5 -> cetak();
    $s6 -> cetak();
    $s7 -> cetak();
    $s8 -> cetak();
    echo '</table>'
?>