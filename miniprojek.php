
<?php
// Bagian pemrosesan data
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = trim($_POST["semester"] ?? "");
    $email = trim($_POST["email"] ?? "");

    // Validasi data wajib
    if ($nama === "") {
        $error[] = "Nama wajib diisi.";
    }

    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    }

    if ($prodi === "") {
        $error[] = "Program studi wajib diisi.";
    }

    if ($email === "") {
        $error[] = "Email wajib diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    // Validasi semester
    if ($semesterInput === "") {
        $error[] = "Semester wajib diisi.";
    } elseif (
        !ctype_digit($semesterInput) ||
        (int)$semesterInput < 1 ||
        (int)$semesterInput > 14
    ) {
        $error[] = "Semester harus berupa angka 1–14.";
    }

    // Jika tidak ada error
    if (empty($error)) {
        $data = [
            "nama" => $nama,
            "nim" => $nim,
            "prodi" => $prodi,
            "semester" => (int)$semesterInput,
            "email" => $email
        ];
    }
}

// Fungsi mengamankan output HTML
function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Data Mahasiswa</title>
</head>
<body>

    <h1>Formulir Data Mahasiswa</h1>

    <!-- Menampilkan seluruh pesan error -->
    <?php if (!empty($error)): ?>
        <h3>Terjadi kesalahan:</h3>
        <ul>
            <?php foreach ($error as $pesan): ?>
                <li><?= e($pesan) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- Formulir HTML -->
    <form method="POST" action="">
        <p>
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama"
                value="<?= e($_POST["nama"] ?? "") ?>">
        </p>

        <p>
            <label for="nim">NIM:</label><br>
            <input type="text" id="nim" name="nim"
                value="<?= e($_POST["nim"] ?? "") ?>">
        </p>

        <p>
            <label for="prodi">Program Studi:</label><br>
            <input type="text" id="prodi" name="prodi"
                value="<?= e($_POST["prodi"] ?? "") ?>">
        </p>

        <p>
            <label for="semester">Semester:</label><br>
            <input type="number" id="semester" name="semester"
                min="1" max="14" step="1"
                value="<?= e($_POST["semester"] ?? "") ?>">
        </p>

        <p>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"
                value="<?= e($_POST["email"] ?? "") ?>">
        </p>

        <button type="submit">Kirim Data</button>
    </form>

    <!-- Menampilkan ringkasan data jika valid -->
    <?php if ($data !== null): ?>
        <h2>Data Mahasiswa Berhasil Dikirim</h2>

        <p>Nama: <?= e($data["nama"]) ?></p>
        <p>NIM: <?= e($data["nim"]) ?></p>
        <p>Program Studi: <?= e($data["prodi"]) ?></p>
        <p>Semester: <?= e($data["semester"]) ?></p>
        <p>Email: <?= e($data["email"]) ?></p>
    <?php endif; ?>

</body>
</html>
