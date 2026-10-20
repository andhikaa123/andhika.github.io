
<?php
$jenis = "Motor";
$lamaJam = 5;

$jam = max(1, (int) ceil($lamaJam));

if ($jenis == "Motor") {
    $tarifAwal = 2000;
    $tarifTambahan = 1000;
} elseif ($jenis == "Mobil") {
    $tarifAwal = 5000;
    $tarifTambahan = 3000;
} else {
    die("Jenis kendaraan tidak valid");
}

if ($jam <= 2) {
    $totalTarif = $tarifAwal;
} else {
    $totalTarif = $tarifAwal
        + (($jam - 2) * $tarifTambahan);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Parkir</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white rounded-2xl shadow-lg p-8 w-full max-w-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">
            Kalkulator Parkir
        </h1>

        <div class="space-y-4">
            <div>
                <p class="text-gray-500 text-sm">Jenis Kendaraan</p>
                <p class="text-lg font-semibold">
                    <?= htmlspecialchars($jenis) ?>
                </p>
            </div>

            <div>
                <p class="text-gray-500 text-sm">Lama Parkir</p>
                <p class="text-lg font-semibold">
                    <?= $jam ?> jam
                </p>
            </div>

            <div class="border-t pt-4">
                <p class="text-gray-500 text-sm">Total Tarif Parkir</p>
                <p class="text-3xl font-bold text-blue-600">
                    Rp <?= number_format($totalTarif, 0, ',', '.') ?>
                </p>
            </div>
        </div>

        <p class="mt-6 text-sm text-gray-500">
            Terima kasih telah menggunakan layanan parkir.
        </p>
    </div>

</body>
</html>
