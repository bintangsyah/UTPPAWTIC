
<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ukuran = $_POST["ukuran"] ?? "";
    $warna = $_POST["warna"] ?? "";

    $pilihanValid = [
        "A4" => ["Hitam Putih", "Berwarna"],
        "F4" => ["Hitam Putih", "Berwarna"]
    ];

    if (
        isset($pilihanValid[$ukuran]) &&
        in_array($warna, $pilihanValid[$ukuran], true)
    ) {
        setcookie("ukuran", $ukuran, time() + 172800, "/");
        setcookie("warna", $warna, time() + 172800, "/");
        setcookie("waktu_cetak", time(), time() + 172800, "/");
    }
}
?>
