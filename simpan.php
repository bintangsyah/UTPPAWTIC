
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ukuran = $_POST["ukuran"] ?? "";
    $warna = $_POST["warna"] ?? "";
    $halaman = filter_var($_POST["halaman"] ?? "", FILTER_VALIDATE_INT);
    $rangkap = filter_var($_POST["rangkap"] ?? "", FILTER_VALIDATE_INT);

    $tarif = [
        "A4" => [
            "Hitam Putih" => 500,
            "Berwarna" => 1500
        ],
        "F4" => [
            "Hitam Putih" => 700,
            "Berwarna" => 1800
        ]
    ];

    if (
        isset($tarif[$ukuran][$warna]) &&
        $halaman !== false && $halaman !== null && $halaman >= 1 &&
        $rangkap !== false && $rangkap !== null && $rangkap >= 1
    ) {
        $total = $tarif[$ukuran][$warna] * $halaman * $rangkap;

        $_SESSION["ringkasan"] = [
            "ukuran" => $ukuran,
            "warna" => $warna,
            "halaman" => $halaman,
            "rangkap" => $rangkap,
            "total" => $total
        ];

        header("Location: ringkasan.php");
        exit;
    }
}

header("Location: index.php");
exit;
?>
