
<?php

$ukuranTerakhir = "A4";
$warnaTerakhir = "Hitam Putih";

if (isset($_COOKIE["waktu_cetak"])) {
    if (time() - (int) $_COOKIE["waktu_cetak"] < 172800) {
        if (isset($_COOKIE["ukuran"])) {
            $ukuranTerakhir = $_COOKIE["ukuran"];
        }

        if (isset($_COOKIE["warna"])) {
            $warnaTerakhir = $_COOKIE["warna"];
        }
    }
}
