<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4 - Function</title>
</head>
<body>
    <h2>Perhitungan Diskon Belanja</h2>
    <?php
    function hitungDiskon($harga, $persen) {
        $potongan = $harga * ($persen / 100);
        return $harga - $potongan;
    }

    $hargaAwal = 150000;
    $diskon = 10;
    $hargaAkhir = hitungDiskon($hargaAwal, $diskon);

    echo "Harga Awal: Rp " . number_format($hargaAwal, 0, ",", ".") . "<br>";
    echo "Diskon: " . $diskon . "%<br>";
    echo "<strong>Harga setelah diskon: Rp " . number_format($hargaAkhir, 0, ",", ".") . "</strong>";
    ?>
    <br><br><a href="index.php">&laquo; Kembali ke Menu Utama</a>
</body>
</html>