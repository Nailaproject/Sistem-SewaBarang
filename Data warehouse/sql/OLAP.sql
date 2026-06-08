SELECT
    k.nama_kategori,
    COUNT(f.peminjaman_sk) AS total_transaksi,
    SUM(f.total_biaya) AS total_pendapatan
FROM fact_peminjaman_star f
JOIN dim_kategori_barang k
ON f.kategori_id = k.kategori_id
GROUP BY k.nama_kategori
ORDER BY total_pendapatan DESC;