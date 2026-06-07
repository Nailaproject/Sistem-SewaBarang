# SISTEM INFORMASI PENYEWAAN BARANG BERBASIS LARAVEL FILAMENT DENGAN IMPLEMENTASI DATA WAREHOUSE DAN SISTEM TERDISTRIBUSI

## Deskripsi Proyek

Proyek ini merupakan implementasi Sistem Informasi Penyewaan Barang berbasis Laravel Filament yang digunakan untuk mengelola proses penyewaan barang secara online. Sistem mendukung pengelolaan data barang, pelanggan, transaksi penyewaan, pengembalian barang, serta pembuatan laporan transaksi.
Selain sistem operasional (OLTP), proyek ini juga mengimplementasikan Data Warehouse menggunakan pendekatan Star Schema dan Snowflake Schema untuk kebutuhan analisis data historis. Sistem dilengkapi dengan proses ETL (Extract, Transform, Load) untuk memindahkan data dari sistem operasional ke data warehouse.
Sebagai bagian dari mata kuliah Sistem Terdistribusi, proyek ini juga mencakup rancangan arsitektur Microservices, komunikasi REST API dan Message Queue, sinkronisasi waktu menggunakan Lamport Logical Clock, serta strategi replikasi data Primary-Backup.

## Tujuan Proyek
1. Membangun sistem penyewaan barang berbasis web.
2. Mengimplementasikan konsep OLTP dan OLAP dalam satu studi kasus.
3. Mengembangkan Data Warehouse untuk analisis bisnis.
4. Menerapkan konsep Sistem Terdistribusi pada layanan penyewaan barang.
5. Mendukung pengambilan keputusan berdasarkan data historis.

### Data Warehouse
* ETL (Extract, Transform, Load)
* Star Schema
* Snowflake Schema
* Slowly Changing Dimension (SCD)

### Sistem Terdistribusi
* Microservices Architecture
* REST API
* Message Queue
* Lamport Logical Clock
* Primary Backup Replication

## Fitur Sistem
### Admin
* Login Admin
* Dashboard
* Manajemen Barang
* Manajemen Kategori
* Manajemen Pelanggan
* Manajemen Penyewaan
* Pengembalian Barang
* Monitoring Transaksi

### Pelanggan
* Registrasi dan Login
* Melihat Daftar Barang
* Melakukan Penyewaan
* Melihat Riwayat Transaksi
* Melihat Kuitansi Penyewaan

### Data Warehouse
* Analisis Pendapatan per Kategori
* Analisis Barang Terpopuler
* Analisis Denda Penyewaan
* Analisis Transaksi Berdasarkan Waktu

## Struktur Database OLTP
Tabel utama:
* barang
* kategori_barang
* pelanggan
* peminjaman
* pengembalian
* metode_pembayaran

Database OLTP digunakan untuk menjalankan transaksi harian secara real-time.

## Struktur Data Warehouse

### Fact Table
* fact_peminjaman
### Dimension Table
* dim_waktu
* dim_pelanggan
* dim_barang
* dim_kategori_barang
* dim_metode_pembayaran

## Implementasi ETL
### Extract
Mengambil data transaksi penyewaan dari sumber data operasional.

### Transform
* Membersihkan data
* Mengubah format data
* Menghitung total biaya
* Membentuk tabel dimensi

### Load
Memasukkan data ke dalam fact table dan dimension table pada data warehouse.


## Implementasi Sistem Terdistribusi

### Arsitektur
Menggunakan pendekatan Microservices yang terdiri dari:
* Barang Service
* Transaksi Service
* Notification Service
* Data Warehouse Service

### Komunikasi Antar Service
* REST API (sinkron)
* Message Queue (asinkron)

### Sinkronisasi Waktu

Menggunakan Lamport Logical Clock untuk menentukan urutan event antar node.

### Replikasi Data

Menggunakan strategi Primary-Backup Replication untuk meningkatkan availability dan fault tolerance.


## Hasil Implementasi

Sistem berhasil:

* Menjalankan transaksi penyewaan barang secara online.
* Mengelola data pelanggan dan barang.
* Melakukan analisis data historis menggunakan Data Warehouse.
* Mengimplementasikan konsep Sistem Terdistribusi.
* Mendukung pengambilan keputusan berbasis data.

