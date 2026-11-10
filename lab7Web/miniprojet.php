<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") $error[] = "Nama wajib diisi.";
    if ($nim === "") $error[] = "NIM wajib diisi.";
    if ($prodi === "") $error[] = "Program studi wajib diisi.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1-14.";
    }

    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mini Project - Formulir Mahasiswa</title>
</head>
<body>
    <h2>Formulir Pendaftaran Data Mahasiswa</h2>

    <?php if (!empty($error)): ?>
        <div style="background-color: #ffe6e6; padding: 10px; border: 1px solid red; margin-bottom: 15px;">
            <ul style="color: red; margin: 0;">
                <?php foreach ($error as $err): ?>
                    <li><?= htmlspecialchars($err) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST">
        <label>Nama Lengkap: <br><input type="text" name="nama" required></label><br><br>
        <label>NIM: <br><input type="text" name="nim" required></label><br><br>
        <label>Program Studi: <br><input type="text" name="prodi" required></label><br><br>
        <label>Semester (1-14): <br><input type="number" name="semester" min="1" max="14" required></label><br><br>
        <label>Email: <br><input type="email" name="email" required></label><br><br>
        <button type="submit">Kirim Data Mahasiswa</button>
    </form>

    <?php if ($data): ?>
        <div style="background-color: #e6ffe6; padding: 15px; border: 1px solid green; margin-top: 20px;">
            <h3>Ringkasan Data Mahasiswa Diterima</h3>
            <p><strong>Nama:</strong> <?= htmlspecialchars($data['nama'], ENT_QUOTES, 'UTF-8') ?></p>
            <p><strong>NIM:</strong> <?= htmlspecialchars($data['nim'], ENT_QUOTES, 'UTF-8') ?></p>
            <p><strong>Program Studi:</strong> <?= htmlspecialchars($data['prodi'], ENT_QUOTES, 'UTF-8') ?></p>
            <p><strong>Semester:</strong> <?= $data['semester'] ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($data['email'], ENT_QUOTES, 'UTF-8') ?></p>
        </div>
    <?php endif; ?>

    <br><a href="index.php">&laquo; Kembali ke Menu Utama</a>
</body>
</html>