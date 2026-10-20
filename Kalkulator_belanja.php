
<?php
$namaBarang = ["Buku", "Minyak"];
$harga = [18000, 20000];
$jumlah = [3, 2];

$totalBelanja = 0;

for ($i = 0; $i < count($namaBarang); $i++) {
    $totalHarga = $harga[$i] * $jumlah[$i];
    $totalBelanja += $totalHarga;

    echo "Nama Barang: " . $namaBarang[$i] . "<br>";
    echo "Harga: Rp " . number_format($harga[$i], 0, ',', '.') . "<br>";
    echo "Jumlah: " . $jumlah[$i] . "<br>";
    echo "Total Harga: Rp " . number_format($totalHarga, 0, ',', '.') . "<br><br>";
}

echo "<b>Total Belanja: Rp " . number_format($totalBelanja, 0, ',', '.') . "</b>";
?>
