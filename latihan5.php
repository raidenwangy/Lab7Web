<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5 - Memproses form dengan GET</title>
</head>
<body>
    <!-- Latihan 5 - Memproses form dengan GET -->
       <!-- cari.php -->
        <form method="GET" action="">
            <label for="kata">Kata kunci:</label>
            <input id="kata" name="kata" type="text">
            <button type="submit">Cari</button>
        </form>
        <?php
        if (isset($_GET["kata"])) {
            $kata = trim($_GET["kata"]);
            echo "Kata kunci: " . htmlspecialchars($kata, ENT_QUOTES, "UTF-8");
        }
        ?>
</body>
</html>