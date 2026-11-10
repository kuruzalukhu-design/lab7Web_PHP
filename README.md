# Praktikum 7: Pemrograman Server-Side dengan PHP (`Lab7Web_PHP`)

Repositori ini berisi seluruh kode program, latihan, mini project, eksperimen mandiri, dan laporan praktikum untuk **Modul 7: Pemrograman Server-Side dengan PHP** (Mata Kuliah Pemrograman Web).

## 🛠️ Perangkat yang Digunakan

1. **Web Server Lokal:** XAMPP (Apache & PHP versi 8.x)

2. **Editor Kode:** Visual Studio Code

3. **Browser:** Google Chrome / Mozilla Firefox

## 📂 Struktur Folder Proyek

```
Lab7Web_PHP/
│
├── latihan1.php         # Dasar skrip PHP dan fungsi waktu server
├── latihan2.php         # Variabel, operator, dan percabangan nilai
├── latihan3.php         # Perulangan dan array mahasiswa
├── latihan4.php         # Pembuatan function modular (hitung diskon)
├── cari.php             # Form processing menggunakan metode GET
├── latihan6.php         # Form processing menggunakan metode POST
├── latihan7.php         # Pengolahan data transaksi & validasi harga
├── miniproject.php      # Aplikasi Form Mahasiswa (Validasi & Sanitasi Server-Side)
├── eksperimen.php       # Eksperimen Mandiri (Rata-rata, Format Rupiah, dll)
└── README.md            # Dokumentasi / Laporan Repositori

```

## 🚀 Cara Menjalankan Server Lokal

1. Buka aplikasi **XAMPP Control Panel**, lalu klik **Start** pada modul **Apache**.

2. Salin folder proyek `Lab7Web_PHP` ke direktori root web server Anda, yaitu di:
   - `C:/xampp/htdocs/Lab7Web_PHP/` (untuk pengguna Windows)

3. Buka browser Anda dan akses melalui alamat:
   - `http://localhost/Lab7Web_PHP/latihan1.php`

   - Jangan membuka file `.php` secara langsung melalui klik ganda (_double click_), karena kode PHP memerlukan interpreter Apache/PHP dari web server lokal.

## 📝 Ringkasan Latihan & Kasus Pengujian

### 1. Latihan 1 - Menjalankan PHP (`latihan1.php`)

- **Fungsi:** Menguji berjalannya engine PHP dan menampilkan waktu server secara dinamis menggunakan `date()`.

- **Screenshot Simulasi:** Terlampir pada laporan PDF di repositori.

### 2. Latihan 2 - Variabel & Percabangan (`latihan2.php`)

- **Fungsi:** Menghitung Nilai Akhir (Tugas 30%, UTS 30%, UAS 40%) dan menentukan predikat (A, B, C, D) dengan fungsi pengaman `htmlspecialchars()`.

### 3. Latihan 3 - Perulangan & Array (`latihan3.php`)

- **Fungsi:** Menampilkan daftar nama mahasiswa secara berurutan dalam bentuk list bernomor (`<ol>`) menggunakan perulangan `foreach`.

### 4. Latihan 4 - Function (`latihan4.php`)

- **Fungsi:** Menghitung potongan harga menggunakan fungsi kustom modular `hitungDiskon()`.

### 5. Latihan 5 - Form GET (`cari.php`)

- **Fungsi:** Mengirim kata kunci pencarian melalui URL query string (`$_GET`).

### 6. Latihan 6 - Form POST (`latihan6.php`)

- **Fungsi:** Mengirim data nama dan program studi secara aman melalui HTTP Request Body dengan proteksi XSS (`htmlspecialchars`).

### 7. Latihan 7 - Pengolahan Transaksi (`latihan7.php`)

- **Fungsi:** Menghitung subtotal transaksi belanja berdasarkan nama barang, harga satuan, dan jumlah dengan validasi tipe data ketat.

## 🎓 Mini Project: Formulir Data Mahasiswa (`miniproject.php`)

Aplikasi sederhana yang menerima data mahasiswa (Nama, NIM, Program Studi, Semester, Email) dengan ketentuan:

- **Validasi Sisa Server:** Memastikan semua kolom wajib diisi, format email valid menggunakan `filter_var()`, serta semester berupa angka bulat antara 1 hingga 14.

- **Kasus Pengujian:**
  1. _Input Valid:_ Data lengkap (misal: Ahmad Fauzi, NIM 312310456, Semester 4, Email aktif) berhasil diproses dan ringkasan data ditampilkan dengan aman.

  2. _Input Tidak Valid:_ Kolom kosong atau format email salah akan memicu penangkapan error (`$error[]`) dan menampilkan daftar peringatan merah di halaman web.

## 🧪 Eksperimen Mandiri (`eksperimen.php`)

- Menambahkan kalkulator rata-rata dari tiga komponen nilai.

- Mengintegrasikan fungsi pembentukan format mata uang Rupiah (`number_format`).

- Penjelasan mengenai perbedaan tombol reset HTML di sisi _client_ dengan siklus _request-response_ server.

© 2026 - Program Studi Teknik Informatika | Pemrograman Web OBE
