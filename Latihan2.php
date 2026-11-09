<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 - Variabel, operator, dan percabangan</title>
</head>
<body>
    <!-- Latihan 2 - Variabel, operator, dan percabangan-->
     <?php
     $nama = "Ryan";
     $tugas = 85;
     $uts = 78;
     $uas = 90;
     $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);

     if ($nilaiAkhir >= 85) {
        $predikat = "A";
     } elseif ($nilaiAkhir >= 75) {
        $predikat = "b";
     } elseif ($nilaiAkhir >= 60) {
        $predikat = "C";
     } else {
        $predikat = "D";
     }

     echo "Nama: " . htmlspecialchars($nama) . "<br>";
     echo "Nilai akhir: " . number_format($nilaiAkhir, 2) . "<br>";
     echo "Predikat: " . $predikat;
     ?>
</body>
</html>