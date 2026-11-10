<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 2 - Variabel & Percabangan</title>
</head>
<body>
    <h2>Hitung Nilai Akhir Mahasiswa</h2>
    <?php
    $nama = "Siti";
    $tugas = 85;
    $uts = 78;
    $uas = 90;

    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

    if ($nilaiAkhir >= 85) {
        $predikat = "A";
    } elseif ($nilaiAkhir >= 75) {
        $predikat = "B";
    } elseif ($nilaiAkhir >= 60) {
        $predikat = "C";
    } else {
        $predikat = "D";
    }

    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Nilai Akhir: " . number_format($nilaiAkhir, 2) . "<br>";
    echo "Predikat: " . $predikat;
    ?>
    <br><br><a href="index.php">&laquo; Kembali ke Menu Utama</a>
</body>
</html>