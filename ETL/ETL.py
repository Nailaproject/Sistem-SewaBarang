import os
import shutil

# EXSTRACK
if not os.path.exists("staging_area"):
    os.makedirs("staging_area")
    
shutil.copy("data_penyewaan_dw.csv", "staging_area/data_penyewaan_dw.csv")

print("File berhasil disimpan ke staging area")

# TRANSFORM
import pandas as pd

df = pd.read_csv("staging_area/data_penyewaan_dw.csv")

# Menghapus data kosong
df = df.dropna()

# Mengubah format tanggal
df['tanggal'] = pd.to_datetime(df['tanggal'])

# Menghitung total biaya
df['total_biaya'] = (
    df['harga_sewa_per_hari'] * df['jumlah_hari']
) + df['denda']

print(df.head())

# LOAD
df.to_csv("fact_peminjaman.csv", index=False)

print("ETL Berhasil!")
print("File fact_peminjaman.csv berhasil dibuat")