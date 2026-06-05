CREATE TABLE dim_waktu AS
SELECT
ROW_NUMBER() OVER () AS waktu_id,
tanggal,
strftime('%m', tanggal) AS bulan,
strftime('%Y', tanggal) AS tahun
FROM (
    SELECT DISTINCT c2 AS tanggal
    FROM staging_penyewaan
);

CREATE TABLE dim_pelanggan AS
SELECT
ROW_NUMBER() OVER () AS pelanggan_id,
nama,
alamat,
no_hp
FROM (
    SELECT DISTINCT
    c3 AS nama,
    c4 AS alamat,
    c5 AS no_hp
    FROM staging_penyewaan
);

CREATE TABLE dim_barang AS
SELECT
ROW_NUMBER() OVER () AS barang_id,
nama_barang,
kategori,
harga_sewa_per_hari
FROM (
    SELECT DISTINCT
    c6 AS nama_barang,
    c7 AS kategori,
    c9 AS harga_sewa_per_hari
    FROM staging_penyewaan
);

CREATE TABLE dim_kategori_barang AS
SELECT
ROW_NUMBER() OVER () AS kategori_id,
nama_kategori,
'Kategori Penyewaan Barang' AS deskripsi
FROM (
    SELECT DISTINCT
    c7 AS nama_kategori
    FROM staging_penyewaan
);

CREATE TABLE dim_metode_pembayaran AS
SELECT
ROW_NUMBER() OVER () AS metode_pembayaran_id,
metode,
'Pembayaran Penyewaan' AS tipe
FROM (
    SELECT DISTINCT
    c8 AS metode
    FROM staging_penyewaan
);

CREATE TABLE fact_peminjaman AS
SELECT
ROW_NUMBER() OVER () AS peminjaman_sk,
w.waktu_id,
p.pelanggan_id,
b.barang_id,
k.kategori_id,
m.metode_pembayaran_id,
CAST(s.c9 AS INTEGER) AS harga_sewa_per_hari,
CAST(s.c10 AS INTEGER) AS jumlah_hari,
(CAST(s.c9 AS INTEGER) * CAST(s.c10 AS INTEGER))
+ CAST(s.c11 AS INTEGER) AS total_biaya,
CAST(s.c11 AS INTEGER) AS denda
FROM staging_penyewaan s
JOIN dim_waktu w
ON s.c2 = w.tanggal
JOIN dim_pelanggan p
ON s.c3 = p.nama
AND s.c4 = p.alamat
JOIN dim_barang b
ON s.c6 = b.nama_barang
JOIN dim_kategori_barang k
ON s.c7 = k.nama_kategori
JOIN dim_metode_pembayaran m
ON s.c8 = m.metode;