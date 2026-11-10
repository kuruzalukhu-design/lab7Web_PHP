<?php
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ",", ".");
}

$hasilRataRata = null;
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['hitung_nilai'])) {
    $n1 = (float)($_POST['nilai1'] ?? 0);
    $n2 = (float)($_POST['nilai2'] ?? 0);
    $n3 = (float)($_POST['nilai3'] ?? 0);
    $hasilRataRata = ($n1 + $n2 + $n3) / 3;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen Mandiri</title>
</head>
<body>
    <h2>Eksperimen Mandiri Modul 7</h2>

    <h3>1. Hitung Nilai Rata-Rata (3 Komponen)</h3>
    <form method="POST">
        Nilai 1: <input type="number" name="nilai1" step="0.01" required> 
        Nilai 2: <input type="number" name="nilai2" step="0.01" required> 
        Nilai 3: <input type="number" name="nilai3" step="0.01" required> 
        <button type="submit" name="hitung_nilai">Hitung Rata-Rata</button>
    </form>
    <?php if ($hasilRataRata !== null): ?>
        <p>Hasil Rata-rata: <strong><?= number_format($hasilRataRata, 2) ?></strong></p>
    <?php endif; ?>

    <hr>

    <h3>3. Testing Function Custom Format Rupiah</h3>
    <p>Angka 3500000 diformat menjadi: <strong><?= formatRupiah(3500000) ?></strong></p>

    <hr>

    <h3>5. Demo Tombol Reset Client vs Server</h3>
    <form method="POST">
        <label>Input Uji Coba: <input type="text" name="dummy"></label><br><br>
        <button type="reset">Reset Form (Client-side)</button>
        <button type="submit">Proses (Server-side)</button>
    </form>
    <p><em>*Tombol Reset hanya mengosongkan form di browser tanpa melakukan reload halaman atau mengirim data ke server.*</em></p>

    <br><a href="index.php">&laquo; Kembali ke Menu Utama</a>
</body>
</html>