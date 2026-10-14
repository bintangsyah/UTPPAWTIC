
<?php
if (!isset($_SESSION["total"])) {
    echo "<p>Belum ada pekerjaan cetak.</p>";
} else {
    echo "<h2>Ringkasan Pekerjaan Cetak</h2>";
    echo "<p>Ukuran Kertas: " . htmlspecialchars($_SESSION["ukuran"]) . "</p>";
    echo "<p>Warna Cetak: " . htmlspecialchars($_SESSION["warna"]) . "</p>";
    echo "<p>Jumlah Halaman: " . $_SESSION["halaman"] . "</p>";
    echo "<p>Jumlah Rangkap: " . $_SESSION["rangkap"] . "</p>";
    echo "<p>Total Biaya: Rp" . number_format($_SESSION["total"], 0, ",", ".") . "</p>";
}
?>
