<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 5 - Form GET</title>
</head>
<body>
    <h2>Pencarian (Metode GET)</h2>
    <form method="GET" action="">
        <label for="kata">Kata kunci:</label>
        <input id="kata" name="kata" type="text" required>
        <button type="submit">Cari</button>
    </form>

    <?php
    if (isset($_GET["kata"])) {
        $kata = trim($_GET["kata"]);
        echo "<p>Kata kunci pencarian: <strong>" . htmlspecialchars($kata, ENT_QUOTES, "UTF-8") . "</strong></p>";
    }
    ?>
    <br><a href="index.php">&laquo; Kembali ke Menu Utama</a>
</body>
</html>