# README – Praktikum PHP

## Identitas
- **Nama:** Ryan Alfiyosi
- **Kelas:** I125B
- **Mata Kuliah:** Praktikum Pemrograman Web
- **Materi:** Praktikum PHP

## Deskripsi
Praktikum ini bertujuan untuk mempelajari dasar-dasar pemrograman PHP, mulai dari menjalankan kode PHP, penggunaan variabel, operator, percabangan, perulangan, function, hingga pemrosesan data menggunakan form dengan metode GET dan POST.

Dalam praktikum ini, saya menggunakan Visual Studio Code untuk menulis kode program dan XAMPP sebagai web server untuk menjalankan program PHP melalui browser.

## Langkah-Langkah Praktikum

### 1. Menjalankan PHP (index.php)
Pada langkah pertama, saya membuat file `index.php` untuk mencoba menjalankan kode PHP.

Langkah yang dilakukan:
1. Membuat file `index.php` di dalam folder project.
2. Menambahkan struktur dasar HTML.
3. Menambahkan kode PHP menggunakan tag `<?php ?>`.
4. Menggunakan perintah `echo` untuk menampilkan tulisan.
5. Menggunakan fungsi `date()` untuk menampilkan waktu server.
6. Menjalankan program melalui browser menggunakan localhost.

**Hasil:** Browser berhasil menampilkan tulisan "PHP Berhasil dijalankan" beserta waktu server.
![alt text](<Screenshoot/latihan 1 coding.png>)
![alt text](<Screenshoot/latihan 1 output'.png>)

### 2. Variabel, Operator, dan Percabangan (Latihan2.php)
Pada langkah kedua, saya mempelajari penggunaan variabel, operator aritmatika, dan percabangan dalam PHP.

Langkah yang dilakukan:
1. Membuat variabel `$nama`, `$tugas`, `$uts`, dan `$uas`.
2. Mengisi variabel dengan data nama dan nilai.
3. Menghitung nilai akhir menggunakan operator aritmatika dan bobot penilaian.
4. Menggunakan percabangan `if`, `elseif`, dan `else` untuk menentukan predikat.
5. Menampilkan nama, nilai akhir, dan predikat menggunakan `echo`.

**Hasil:** Program menampilkan nama Ryan, nilai akhir 84.90, dan predikat B.
![alt text](<Screenshoot/latihan 2 coding.png>)
![alt text](<Screenshoot/latihan 2 output.png>)

### 3. Membuat Function (Latihan3.php)
Pada langkah ketiga, saya mempelajari penggunaan array dan perulangan `foreach`.

Langkah yang dilakukan:
1. Membuat array `$mahasiswa`.
2. Mengisi array dengan beberapa nama mahasiswa, yaitu Alya, Bima, Citra, dan Doni.
3. Menampilkan judul daftar mahasiswa menggunakan `echo`.
4. Menggunakan perulangan `foreach` untuk membaca setiap data dalam array.
5. Menampilkan nama mahasiswa dalam bentuk daftar HTML menggunakan `<ol>` dan `<li>`.
6. Menggunakan `htmlspecialchars()` untuk mengamankan output teks.

**Hasil:** Program berhasil menampilkan daftar empat mahasiswa dalam bentuk daftar berurutan.
![alt text](<Screenshoot/latihan 3 coding.png>)
![alt text](<Screenshoot/latihan 3 output.png>)

### 4. Membuat Function (Latihan4.php)
Pada langkah keempat, saya membuat function untuk menghitung harga setelah mendapatkan diskon.

Langkah yang dilakukan:
1. Membuat function `hitungDiskon()` dengan parameter harga dan persentase diskon.
2. Menghitung potongan harga berdasarkan persentase diskon.
3. Mengembalikan hasil pengurangan harga awal dengan potongan menggunakan `return`.
4. Memanggil function dengan harga Rp150.000 dan diskon 10%.
5. Menampilkan hasil menggunakan `echo` dan `number_format()`.

**Hasil:** Program berhasil menampilkan harga setelah diskon sebesar Rp135.000.
![alt text](<Screenshoot/latihan 4 coding.png>)
![alt text](<Screenshoot/latihan 4 output.png>)

### 5. Memproses Form dengan GET (Latihan5.php)
Pada langkah kelima, saya mempelajari cara mengirim dan memproses data form menggunakan metode GET.

Langkah yang dilakukan:
1. Membuat form HTML dengan metode `GET`.
2. Menambahkan input teks untuk memasukkan kata kunci.
3. Menambahkan tombol Cari untuk mengirim data.
4. Mengambil data yang dikirim menggunakan `$_GET`.
5. Menggunakan `trim()` untuk menghilangkan spasi di awal dan akhir teks.
6. Menggunakan `htmlspecialchars()` untuk mengamankan teks yang ditampilkan.
7. Menampilkan kembali kata kunci yang dimasukkan.

**Hasil:** Program berhasil menerima dan menampilkan kata kunci yang dimasukkan melalui form.
![alt text](<Screenshoot/latihan 5 coding.png>)
![alt text](<Screenshoot/latihan 5 output.png>)

### 6. Memproses Form dengan POST (Latihan6.php)
Pada langkah keenam, saya mempelajari cara mengirim dan memproses data form menggunakan metode POST.

Langkah yang dilakukan:
1. Membuat form HTML dengan metode `POST`.
2. Menambahkan input Nama dan Program Studi.
3. Menggunakan atribut `required` agar kedua input wajib diisi.
4. Mengambil data menggunakan `$_POST`.
5. Memeriksa metode pengiriman menggunakan `$_SERVER["REQUEST_METHOD"]`.
6. Menggunakan `trim()` untuk membersihkan input.
7. Memeriksa apakah semua kolom sudah diisi.
8. Menampilkan data yang diterima menggunakan `echo`.

**Hasil:** Program berhasil menerima dan menampilkan nama Ryan Alfiyosi serta program studi Teknik Informatika.
![alt text](<Screenshoot/latihan 6 coding.png>)
![alt text](<Screenshoot/latihan 6 output.png>)

### 7. Pengolahan Data Sederhana (Latihan7.php)
Pada langkah ketujuh, saya membuat program sederhana untuk menghitung subtotal harga barang berdasarkan harga dan jumlah barang.

Langkah yang dilakukan:
1. Membuat variabel untuk menampung data barang, harga, jumlah, dan subtotal.
2. Menggunakan metode POST untuk menerima data dari form.
3. Mengambil data menggunakan `$_POST`.
4. Menggunakan `trim()` untuk membersihkan input.
5. Melakukan validasi agar nama barang tidak kosong, harga harus berupa angka, dan jumlah harus berupa bilangan bulat positif.
6. Menghitung subtotal dengan rumus harga dikalikan jumlah barang.
7. Menampilkan pesan kesalahan apabila input tidak sesuai.
8. Menampilkan nama barang dan subtotal apabila data berhasil diproses.

**Hasil:** Program berhasil menerima data barang dan menghitung subtotal berdasarkan harga serta jumlah yang dimasukkan.
![alt text](<Screenshoot/latihan 7 coding.png>)
![alt text](<Screenshoot/latihan 7 output.png>)

## Kesimpulan
Dari praktikum ini, saya mempelajari dasar-dasar pemrograman PHP, mulai dari penggunaan variabel, operator, percabangan, array, perulangan, function, hingga pemrosesan form menggunakan metode GET dan POST.

Selain itu, saya juga mempelajari validasi input dan penggunaan `htmlspecialchars()` untuk membantu menjaga keamanan data yang ditampilkan pada halaman web.

Melalui praktikum ini, saya mendapatkan pemahaman dasar mengenai bagaimana PHP bekerja dalam memproses data dan menghasilkan output yang dapat ditampilkan melalui browser.