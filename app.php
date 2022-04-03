<?php
$angka = isset($_GET['angka']) ? $_GET['angka'] : "0";   
if ($angka)   {   
    $no = number_format($angka, 0, ',','.') ."</br>";   
    $terbilang = ucwords(''.Terbilang($angka).'');   
}

function Terbilang($x)   {   
    $bilangan = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");   
    if ($x < 12)  return " " . $bilangan[$x];   
    elseif ($x < 20) return Terbilang($x - 10) . "belas";   
    elseif ($x < 100) return Terbilang($x / 10) . " Puluh" . Terbilang($x % 10);   
    elseif ($x < 200) return " seratus" . Terbilang($x - 100);   
    elseif ($x < 1000) return Terbilang($x / 100) . " Ratus" . Terbilang($x % 100);   
    elseif ($x < 2000) return " seribu" . Terbilang($x - 1000);   
    elseif ($x < 1000000) return Terbilang($x / 1000) . " Ribu" . Terbilang($x % 1000);   
    elseif ($x < 1000000000) return Terbilang($x / 1000000) . " Juta" . Terbilang($x % 1000000);
    elseif ($x < 1000000000000) return Terbilang($x / 1000000000) . " Milyar " . Terbilang($x % 1000000000);
    elseif ($x < 1000000000000000) return Terbilang($x / 1000000000000) . " Triliun " . Terbilang($x % 1000000000000);
}
// if (!empty($angka))