<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3 - Membuat Function</title>
</head>
<body>
         <!-- Latihan 3 - Membuat Function -->
     <?php
     $mahasiswa = ["Alya", "Bima", "Citra", "Doni"];
     echo "<h3>Daftar Mahasiswa</h3><ol>";
     foreach ($mahasiswa as $nama) {
        echo "<li>" . htmlspecialchars($nama) . "</li>";
     }
     echo "</ol>"
     ?>
</body>
</html>