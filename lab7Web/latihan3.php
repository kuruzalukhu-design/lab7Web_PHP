<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 3 - Array & Perulangan</title>
</head>
<body>
    <?php
    $mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eko", "Fani", "Gita"];

    echo "<h3>Daftar Mahasiswa</h3><ol>";
    foreach ($mahasiswa as $nama) {
        echo "<li>" . htmlspecialchars($nama) . "</li>";
    }
    echo "</ol>";
    ?>
    <br><a href="index.php">&laquo; Kembali ke Menu Utama</a>
</body>
</html>