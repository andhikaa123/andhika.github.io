
<?php
$berat = 70;
$tinggi = 1.75;

$bmi = $berat / ($tinggi * $tinggi);

if ($bmi < 18.5) {
    $kategori = "Kurus";
} elseif ($bmi < 25) {
    $kategori = "Normal";
} elseif ($bmi < 30) {
    $kategori = "Gemuk";
} else {
    $kategori = "Obesitas";
}

echo "Berat: " . $berat . " kg<br>";
echo "Tinggi: " . $tinggi . " m<br>";
echo "BMI: " . number_format($bmi, 1, ',', '.') . "<br>";
echo "Kategori: " . $kategori;
?>
