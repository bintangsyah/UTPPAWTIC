<?php
$ukuran = $_POST["ukuran"] ?? "";
$warna = $_POST["warna"] ?? "";
$halaman = $_POST["halaman"] ?? "";
$rangkap = $_POST["rangkap"] ?? "";

$tarif = 0;
$total = 0;
$valid = false;
$pesan = "Perhitungan belum dibuat.";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (is_numeric($halaman) && is_numeric($rangkap) && $halaman > 0 && $rangkap > 0 && $halaman == (int)$halaman && $rangkap == (int)$rangkap) {
        
        $halaman = (int)$halaman;
        $rangkap = (int)$rangkap;

       
        if ($ukuran === "A4" && $warna === "Hitam Putih") {
            $tarif = 500; 
            $valid = true;
        } elseif ($ukuran === "A4" && $warna === "Berwarna") {
            $tarif = 1500;
            $valid = true;
        } elseif ($ukuran === "F4" && $warna === "Hitam Putih") {
            $tarif = 700; 
            $valid = true;
        } elseif ($ukuran === "F4" && $warna === "Berwarna") {
            $tarif = 1800; 
            $valid = true;
        } else {
            $pesan = "Pilihan ukuran kertas atau warna tidak valid.";
        }

    } else {
    
        $pesan = "Jumlah halaman dan rangkap harus berupa bilangan bulat positif!"; //
    }
}

if ($valid) {
    $total = $tarif * $halaman * $rangkap;
}
?>