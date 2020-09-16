-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 17 Sep 2020 pada 03.33
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marhaban_store`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` bigint(20) NOT NULL,
  `nama_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_supplier_id` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` bigint(20) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `kategori` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `satuan`, `nama_supplier_id`, `stock`, `harga`, `kategori`, `harga_beli`, `created_at`, `updated_at`) VALUES
(12, 255, 'Kurma', 'Pcs', '3', 19, 25000, 'Oleh-oleh Haji', 20000, '2020-09-15 19:49:40', '2020-09-16 13:32:36'),
(13, 989, 'sss', 'Pcs', '1', 10, 20000, 'Buah tangan', 15000, '2020-09-15 20:01:48', '2020-09-15 20:01:48'),
(14, 633, 'Dalal', 'Pcs', '4', 17, 20000, 'Parfum', 15000, '2020-09-15 20:49:40', '2020-09-16 11:58:34'),
(15, 498, 'Soft', 'Pcs', '4', 17, 25000, 'Parfum', 20000, '2020-09-15 20:50:07', '2020-09-16 11:58:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_customer` bigint(20) NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` bigint(20) DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `kode_customer`, `nama`, `telepon`, `alamat`, `created_at`, `updated_at`) VALUES
(35, 266, 'Bud', 46456435464, 'jljljljljljljl', '2020-09-13 19:30:02', '2020-09-14 02:05:05'),
(36, 419, 'Ade', 83841230838, 'Jl..', '2020-09-14 11:20:02', '2020-09-14 11:20:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(5, 'Parfum', '2020-09-15 06:23:18', '2020-09-15 06:23:18'),
(6, 'Oleh-oleh Haji', '2020-09-15 06:31:52', '2020-09-15 06:34:29'),
(7, 'Buah tangan', '2020-09-15 06:34:58', '2020-09-15 06:34:58'),
(8, 'Buah', '2020-09-15 09:23:48', '2020-09-15 09:24:31');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_12_172137_create_customer_table', 1),
(5, '2020_09_14_014352_create_barang_table', 2),
(6, '2020_09_14_014806_create_satuan_table', 3),
(7, '2020_09_14_041016_create__penjualan_table', 4),
(8, '2020_09_14_041109_create__penjualan_line_table', 4),
(9, '2020_09_14_042402_create_penjualan_line_table', 5),
(10, '2020_09_14_042425_create_penjualan_table', 5),
(11, '2020_09_15_124015_create_kategori_table', 6),
(13, '2020_09_15_125046_create_supplier_table', 7),
(16, '2020_09_15_173427_create_pembelian_table', 8),
(17, '2020_09_15_173503_create__pembelian_line_table', 8);

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
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_struk` bigint(20) NOT NULL,
  `nama_supplier_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id`, `no_struk`, `nama_supplier_id`, `created_at`, `updated_at`) VALUES
(59, 1160562150, '4', '2020-09-16 11:57:40', '2020-09-16 11:57:40'),
(60, 1856041336, '4', '2020-09-16 11:58:34', '2020-09-16 11:58:34'),
(61, 282954478, '3', '2020-09-16 13:32:36', '2020-09-16 13:32:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_line`
--

CREATE TABLE `pembelian_line` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembelian` bigint(20) NOT NULL,
  `barang` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` bigint(20) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `grand_total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembelian_line`
--

INSERT INTO `pembelian_line` (`id`, `pembelian`, `barang`, `harga_beli`, `qty`, `grand_total`, `created_at`, `updated_at`) VALUES
(42, 56, '14', 15000, 1, 15000, NULL, NULL),
(43, 56, '15', 20000, 1, 20000, NULL, NULL),
(44, 57, '12', 20000, 10, 200000, NULL, NULL),
(45, 58, '14', 15000, 2, 30000, NULL, NULL),
(46, 58, '15', 20000, 2, 40000, NULL, NULL),
(47, 59, '14', 15000, 2, 30000, NULL, NULL),
(48, 59, '15', 20000, 3, 60000, NULL, NULL),
(49, 60, '14', 15000, 2, 30000, NULL, NULL),
(50, 60, '15', 20000, 1, 20000, NULL, NULL),
(51, 61, '12', 20000, 2, 40000, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_struk` bigint(20) NOT NULL,
  `nama_customer` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_total` bigint(20) DEFAULT NULL,
  `kode_customer` bigint(20) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `no_struk`, `nama_customer`, `nama`, `grand_total`, `kode_customer`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
(28, 1634504972, 'Ade', '[\"9\",\"10\"]', 11112011111, 419, 'Jl..', 83841230838, '2020-09-14 09:48:13', '2020-09-14 09:48:13'),
(29, 1010491857, 'Bud', '[\"10\"]', 11111111111, 266, 'jljljljljljljl', 46456435464, '2020-09-15 09:50:11', '2020-09-15 09:50:11'),
(34, 2145752451, 'Bud', '[\"12\",\"14\"]', 240000, 266, 'jljljljljljljl', 46456435464, '2020-09-16 10:59:46', '2020-09-16 10:59:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_line`
--

CREATE TABLE `penjualan_line` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penjualan` bigint(20) NOT NULL,
  `nama` bigint(20) NOT NULL,
  `satuan_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `grand_total` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penjualan_line`
--

INSERT INTO `penjualan_line` (`id`, `penjualan`, `nama`, `satuan_id`, `harga`, `qty`, `grand_total`, `created_at`, `updated_at`) VALUES
(43, 28, 9, 'Drem', 900000, 1, 900000, NULL, NULL),
(44, 28, 10, 'Lusin', 11111111111, 1, 11111111111, NULL, NULL),
(45, 29, 10, 'Lusin', 11111111111, 1, 11111111111, NULL, NULL),
(46, 30, 7, 'Pcs', 25000, 1, 25000, NULL, NULL),
(47, 31, 7, 'Pcs', 25000, 10, 250000, NULL, NULL),
(48, 32, 7, 'Pcs', 25000, 10, 250000, NULL, NULL),
(49, 33, 12, 'Pcs', 25000, 1, 25000, NULL, NULL),
(50, 34, 12, 'Pcs', 25000, 8, 200000, NULL, NULL),
(51, 34, 14, 'Pcs', 20000, 2, 40000, NULL, NULL),
(52, 35, 12, 'Pcs', 25000, 3, 75000, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan`
--

CREATE TABLE `satuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `satuan`
--

INSERT INTO `satuan` (`id`, `nama_satuan`, `created_at`, `updated_at`) VALUES
(1, 'Box', NULL, NULL),
(2, 'Pcs', NULL, NULL),
(3, 'Lusin', '2020-09-15 09:29:11', '2020-09-15 09:29:11'),
(5, 'Drem', '2020-09-15 09:33:08', '2020-09-15 09:35:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_supplier` bigint(20) NOT NULL,
  `nama_supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `kode_supplier`, `nama_supplier`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
(1, 232, 'Ini supplier', 'Jl.bla bla bla', 232323, NULL, NULL),
(3, 210, 'Nama supplier', 'jl..............', 1111111, '2020-09-15 09:16:17', '2020-09-15 09:17:26'),
(4, 984, 'Supplier baru', 'ALamat', 98987, '2020-09-15 20:48:48', '2020-09-15 20:48:48');

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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian_line`
--
ALTER TABLE `pembelian_line`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualan_line`
--
ALTER TABLE `penjualan_line`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `pembelian_line`
--
ALTER TABLE `pembelian_line`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `penjualan_line`
--
ALTER TABLE `penjualan_line`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
