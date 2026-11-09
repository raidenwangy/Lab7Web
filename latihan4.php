<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4 - Membuat function</title>
</head>
<body>
      <!-- Latihan 4 - Membuat function -->
      <?php
      function hitungDiskon($harga, $persen) {
        $potongan = $harga * ($persen / 100);
        return $harga - $potongan;
      }
      $hargaAkhir = hitungDiskon(150000, 10);
      echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".");
      ?>
</body>
</html>