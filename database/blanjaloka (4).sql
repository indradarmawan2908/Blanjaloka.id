-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2022 pada 04.05
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blanjaloka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_telepon` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `alamat` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_masakan`
--

CREATE TABLE `bahan_masakan` (
  `id_masakan` int(11) NOT NULL,
  `resep_masakan` text NOT NULL,
  `nama_produk` text NOT NULL,
  `satuan` text NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok_saat_ini` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bahan_masakan`
--

INSERT INTO `bahan_masakan` (`id_masakan`, `resep_masakan`, `nama_produk`, `satuan`, `harga_jual`, `stok_saat_ini`) VALUES
(2, 'Bawang putih, bawang merah, cabai rawit, dan garam', 'BAJU', 'KILO', 500000, 1000),
(3, 'Makanan Nasi padang', 'baju', '500', 1000, 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `belanja_harian`
--

CREATE TABLE `belanja_harian` (
  `kode_produk` int(11) NOT NULL,
  `nama_produk` text NOT NULL,
  `satuan` text NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok_saat_ini` int(11) NOT NULL,
  `stok_minimal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `belanja_harian`
--

INSERT INTO `belanja_harian` (`kode_produk`, `nama_produk`, `satuan`, `harga_jual`, `stok_saat_ini`, `stok_minimal`) VALUES
(1, 'BAJU', '50', 500000, 1000, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `video` text NOT NULL,
  `gambar` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `nama` varchar(50) NOT NULL,
  `nomor_telepon` int(11) NOT NULL,
  `email` varchar(254) NOT NULL,
  `alamat` text NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`nama`, `nomor_telepon`, `email`, `alamat`, `id_customer`) VALUES
('budi', 812574883, 'budi@gmail.com', 'Jalan Raya Padang', 1),
('okeYYY', 12, 'indra.darmawan@citiasiainc.id', 'a', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasar`
--

CREATE TABLE `data_pasar` (
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `profile_pasar` text NOT NULL,
  `id_datapasar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pasar`
--

INSERT INTO `data_pasar` (`nama`, `alamat`, `profile_pasar`, `id_datapasar`) VALUES
('m', 'a', 'qaa', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `driver`
--

CREATE TABLE `driver` (
  `nama` varchar(254) NOT NULL,
  `nomor_telepon` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `foto_ktp` text NOT NULL,
  `data_driver` text NOT NULL,
  `kode_driver` int(11) NOT NULL,
  `kendaraan` text NOT NULL,
  `nomor_kendaraan` int(11) NOT NULL,
  `foto_stnk` text NOT NULL,
  `nomor_rekening` varchar(50) NOT NULL,
  `foto_rekening` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `driver`
--

INSERT INTO `driver` (`nama`, `nomor_telepon`, `alamat`, `tanggal_lahir`, `no_ktp`, `foto_ktp`, `data_driver`, `kode_driver`, `kendaraan`, `nomor_kendaraan`, `foto_stnk`, `nomor_rekening`, `foto_rekening`) VALUES
('oke', '12', '123', '2021-12-01', '134', 'img043.jpg', 'a', 6, '15', 17, 'img044.jpg', '10', 'img046.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edit_pedagang`
--

CREATE TABLE `edit_pedagang` (
  `kode_pedagang` int(11) NOT NULL,
  `nama` varchar(254) NOT NULL,
  `nomor_telepon` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `foto_ktp` text NOT NULL,
  `data_pedagang` text NOT NULL,
  `nomor_rekening` varchar(50) NOT NULL,
  `foto_rekening` text NOT NULL,
  `status_pembayaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `edit_produk`
--

CREATE TABLE `edit_produk` (
  `kode_produk` int(11) NOT NULL,
  `nama_produk` varchar(254) NOT NULL,
  `satuan` text NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok_saat_ini` int(11) NOT NULL,
  `stok_minimal` int(11) NOT NULL,
  `foto_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `edit_produk`
--

INSERT INTO `edit_produk` (`kode_produk`, `nama_produk`, `satuan`, `harga_jual`, `stok_saat_ini`, `stok_minimal`, `foto_produk`) VALUES
(2, 'a', 'c', 10000, 10, 12, 'img043.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `edit_toko`
--

CREATE TABLE `edit_toko` (
  `kode_toko` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `titik_kordinat` text NOT NULL,
  `foto_profiltoko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_diskon`
--

CREATE TABLE `event_diskon` (
  `id_event_diskon` int(11) NOT NULL,
  `kalender` date NOT NULL,
  `deskripsi` text NOT NULL,
  `produk_event` text NOT NULL,
  `voucher_diskon` text NOT NULL,
  `toko_event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hide_produk`
--

CREATE TABLE `hide_produk` (
  `id_produk` int(11) NOT NULL,
  `satuan` text NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok_saat_ini` int(11) NOT NULL,
  `stok_minimal` int(11) NOT NULL,
  `foto_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hide_timeline`
--

CREATE TABLE `hide_timeline` (
  `id_hide_timeline` int(11) NOT NULL,
  `video` text NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `kategori` varchar(254) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(254) NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `memantau_kritik_saran`
--

CREATE TABLE `memantau_kritik_saran` (
  `id_kritik_saran` int(11) NOT NULL,
  `list_kritik_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password`
--

CREATE TABLE `password` (
  `email` varchar(254) NOT NULL,
  `nomor_telepon` varchar(12) NOT NULL,
  `password_baru` text NOT NULL,
  `id_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pedagang`
--

CREATE TABLE `pedagang` (
  `nama` varchar(254) NOT NULL,
  `nomor_telepon` varchar(16) NOT NULL,
  `alamat` varchar(254) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_ktp` int(11) NOT NULL,
  `foto_ktp` text NOT NULL,
  `data_pedagang` text NOT NULL,
  `nomor_rekening` text NOT NULL,
  `foto_rekening` text NOT NULL,
  `status_pembayaran` varchar(50) NOT NULL,
  `id_pedagang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pedagang`
--

INSERT INTO `pedagang` (`nama`, `nomor_telepon`, `alamat`, `tanggal_lahir`, `no_ktp`, `foto_ktp`, `data_pedagang`, `nomor_rekening`, `foto_rekening`, `status_pembayaran`, `id_pedagang`) VALUES
('okeYYY', '12555', '5', '2122-03-12', 9, 'img002.jpg', 'Aaa', '12', 'img003.jpg', 'oke', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelacakan_pesanan`
--

CREATE TABLE `pelacakan_pesanan` (
  `kode_transaksi` int(11) NOT NULL,
  `nama_pembeli` text NOT NULL,
  `nomor_telepon` varchar(12) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `titik_letak_produk` text NOT NULL,
  `jarak_tempuh` text NOT NULL,
  `nama_driver` text NOT NULL,
  `jenis_kendaraan` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_pendaftaran`
--

CREATE TABLE `pengajuan_pendaftaran` (
  `nama` text NOT NULL,
  `nomor_telepon` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `id_pengajuan_pendaftaran` int(11) NOT NULL,
  `pengajuan_pendaftaran` text NOT NULL,
  `status_pendaftaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengelolapasar`
--

CREATE TABLE `pengelolapasar` (
  `id_pengelolapasar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_telepon` int(11) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `tanggal_lahir` varchar(11) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `foto_ktp` text NOT NULL,
  `email` varchar(254) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengelolapasar`
--

INSERT INTO `pengelolapasar` (`id_pengelolapasar`, `nama`, `nomor_telepon`, `alamat`, `tanggal_lahir`, `no_ktp`, `foto_ktp`, `email`, `password`) VALUES
(2, 'oke', 8, '123', '2000-08-29', '08', 'img003.jpg', 'indradarmawan2908@gmail.com', '45'),
(3, 'Budi', 891839473, 'Jalan ujung gurun', '2000-08-29', '13849482', 'img039.jpg', 'indradeveloper29@gmail.com', '0909');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman_driver`
--

CREATE TABLE `pengiriman_driver` (
  `kode_transaksi` int(11) NOT NULL,
  `kode_produk` int(11) NOT NULL,
  `nama_produk` text NOT NULL,
  `nama_pedagang` text NOT NULL,
  `nomor_pedagang` varchar(12) NOT NULL,
  `alamat_pedagang` text NOT NULL,
  `nama_pembeli` text NOT NULL,
  `nomor_telepon` varchar(12) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `titik_letak_produk` text NOT NULL,
  `jumlah_tempuh` int(11) NOT NULL,
  `nama_driver` text NOT NULL,
  `jenis_kendaraan` int(11) NOT NULL,
  `ongkis_kirim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_produk`
--

CREATE TABLE `penjualan_produk` (
  `kode_transaksi` int(11) NOT NULL,
  `nama_pembeli` text NOT NULL,
  `nomor_telepon` varchar(12) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `kode_produk` int(11) NOT NULL,
  `nama_produk` text NOT NULL,
  `status` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_telepon`
--

CREATE TABLE `riwayat_telepon` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` text NOT NULL,
  `nama_driver` text NOT NULL,
  `nomor_telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa_toko`
--

CREATE TABLE `sewa_toko` (
  `kode_toko` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `titik_kordinat` text NOT NULL,
  `sewa_toko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_gudang`
--

CREATE TABLE `stok_gudang` (
  `nama_produk` text NOT NULL,
  `satuan` int(11) NOT NULL,
  `stok_saat_ini` int(11) NOT NULL,
  `stok_minimal` int(11) NOT NULL,
  `nama_toko` text NOT NULL,
  `id_stok_gudang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `titik_kordinat` varchar(250) NOT NULL,
  `foto_profiltoko` text NOT NULL,
  `id_toko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`nama`, `alamat`, `titik_kordinat`, `foto_profiltoko`, `id_toko`) VALUES
('okeYYY', '123', '34', 'img014.jpg', 4),
('Coba', 'jalan', 'OKE', 'img012.jpg', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `voucher_diskon`
--

CREATE TABLE `voucher_diskon` (
  `id_voucher` int(11) NOT NULL,
  `nama_voucher` text NOT NULL,
  `waktu_berlaku` date NOT NULL,
  `keterangan_voucher` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `bahan_masakan`
--
ALTER TABLE `bahan_masakan`
  ADD PRIMARY KEY (`id_masakan`);

--
-- Indeks untuk tabel `belanja_harian`
--
ALTER TABLE `belanja_harian`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `data_pasar`
--
ALTER TABLE `data_pasar`
  ADD PRIMARY KEY (`id_datapasar`);

--
-- Indeks untuk tabel `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`kode_driver`);

--
-- Indeks untuk tabel `edit_pedagang`
--
ALTER TABLE `edit_pedagang`
  ADD PRIMARY KEY (`kode_pedagang`);

--
-- Indeks untuk tabel `edit_produk`
--
ALTER TABLE `edit_produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indeks untuk tabel `edit_toko`
--
ALTER TABLE `edit_toko`
  ADD PRIMARY KEY (`kode_toko`);

--
-- Indeks untuk tabel `event_diskon`
--
ALTER TABLE `event_diskon`
  ADD PRIMARY KEY (`id_event_diskon`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hide_produk`
--
ALTER TABLE `hide_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `hide_timeline`
--
ALTER TABLE `hide_timeline`
  ADD PRIMARY KEY (`id_hide_timeline`);

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `memantau_kritik_saran`
--
ALTER TABLE `memantau_kritik_saran`
  ADD PRIMARY KEY (`id_kritik_saran`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id_password`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pedagang`
--
ALTER TABLE `pedagang`
  ADD PRIMARY KEY (`id_pedagang`);

--
-- Indeks untuk tabel `pelacakan_pesanan`
--
ALTER TABLE `pelacakan_pesanan`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indeks untuk tabel `pengajuan_pendaftaran`
--
ALTER TABLE `pengajuan_pendaftaran`
  ADD PRIMARY KEY (`id_pengajuan_pendaftaran`);

--
-- Indeks untuk tabel `pengelolapasar`
--
ALTER TABLE `pengelolapasar`
  ADD PRIMARY KEY (`id_pengelolapasar`);

--
-- Indeks untuk tabel `pengiriman_driver`
--
ALTER TABLE `pengiriman_driver`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indeks untuk tabel `penjualan_produk`
--
ALTER TABLE `penjualan_produk`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `riwayat_telepon`
--
ALTER TABLE `riwayat_telepon`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indeks untuk tabel `sewa_toko`
--
ALTER TABLE `sewa_toko`
  ADD PRIMARY KEY (`kode_toko`);

--
-- Indeks untuk tabel `stok_gudang`
--
ALTER TABLE `stok_gudang`
  ADD PRIMARY KEY (`id_stok_gudang`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `voucher_diskon`
--
ALTER TABLE `voucher_diskon`
  ADD PRIMARY KEY (`id_voucher`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bahan_masakan`
--
ALTER TABLE `bahan_masakan`
  MODIFY `id_masakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `belanja_harian`
--
ALTER TABLE `belanja_harian`
  MODIFY `kode_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_pasar`
--
ALTER TABLE `data_pasar`
  MODIFY `id_datapasar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `driver`
--
ALTER TABLE `driver`
  MODIFY `kode_driver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `edit_pedagang`
--
ALTER TABLE `edit_pedagang`
  MODIFY `kode_pedagang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `edit_produk`
--
ALTER TABLE `edit_produk`
  MODIFY `kode_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `edit_toko`
--
ALTER TABLE `edit_toko`
  MODIFY `kode_toko` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `event_diskon`
--
ALTER TABLE `event_diskon`
  MODIFY `id_event_diskon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hide_produk`
--
ALTER TABLE `hide_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hide_timeline`
--
ALTER TABLE `hide_timeline`
  MODIFY `id_hide_timeline` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `memantau_kritik_saran`
--
ALTER TABLE `memantau_kritik_saran`
  MODIFY `id_kritik_saran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `password`
--
ALTER TABLE `password`
  MODIFY `id_password` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pedagang`
--
ALTER TABLE `pedagang`
  MODIFY `id_pedagang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pelacakan_pesanan`
--
ALTER TABLE `pelacakan_pesanan`
  MODIFY `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_pendaftaran`
--
ALTER TABLE `pengajuan_pendaftaran`
  MODIFY `id_pengajuan_pendaftaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengelolapasar`
--
ALTER TABLE `pengelolapasar`
  MODIFY `id_pengelolapasar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengiriman_driver`
--
ALTER TABLE `pengiriman_driver`
  MODIFY `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penjualan_produk`
--
ALTER TABLE `penjualan_produk`
  MODIFY `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `riwayat_telepon`
--
ALTER TABLE `riwayat_telepon`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sewa_toko`
--
ALTER TABLE `sewa_toko`
  MODIFY `kode_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `stok_gudang`
--
ALTER TABLE `stok_gudang`
  MODIFY `id_stok_gudang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `voucher_diskon`
--
ALTER TABLE `voucher_diskon`
  MODIFY `id_voucher` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
