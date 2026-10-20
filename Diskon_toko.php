
<?php
$totalBelanja = 600000;

if ($totalBelanja >= 500000) {
    $persenDiskon = 15;
} elseif ($totalBelanja >= 200000) {
    $persenDiskon = 10;
} else {
    $persenDiskon = 0;
}

$diskon = $totalBelanja * $persenDiskon / 100;
$totalBayar = $totalBelanja - $diskon;

echo "Total Awal: Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
echo "Diskon ($persenDiskon%): Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total Bayar: Rp " . number_format($totalBayar, 0, ',', '.');
?>
