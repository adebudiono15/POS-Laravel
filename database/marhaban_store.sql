-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Sep 2020 pada 17.49
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
(12, 255, 'Kurma', 'Pcs', '3', 37, 25000, 'Oleh-oleh Haji', 20000, '2020-09-15 19:49:40', '2020-09-20 09:08:27'),
(13, 989, 'sss', 'Pcs', '1', 9, 20000, 'Buah tangan', 15000, '2020-09-15 20:01:48', '2020-09-19 23:55:50'),
(14, 633, 'Dalal', 'Pcs', '4', 59, 20000, 'Parfum', 15000, '2020-09-15 20:49:40', '2020-09-20 17:10:51'),
(15, 498, 'Soft', 'Pcs', '4', 59, 25000, 'Parfum', 20000, '2020-09-15 20:50:07', '2020-09-20 17:10:51');

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
-- Struktur dari tabel `history_pembayaran`
--

CREATE TABLE `history_pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembayaran` bigint(20) NOT NULL,
  `total_pembayaran` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `history_pembayaran`
--

INSERT INTO `history_pembayaran` (`id`, `pembayaran`, `total_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 9, 20000, NULL, NULL),
(2, 9, 10000, NULL, NULL),
(3, 9, 10000, '2020-09-18 11:10:14', '2020-09-18 11:10:14'),
(4, 9, 30000, '2020-09-18 11:16:20', '2020-09-18 11:16:20'),
(5, 573506259, 20000, '2020-09-18 11:20:52', '2020-09-18 11:20:52'),
(6, 18092020161056, 10000, '2020-09-18 11:29:41', '2020-09-18 11:29:41'),
(7, 18092020200206, 250000, '2020-09-18 13:02:28', '2020-09-18 13:02:28'),
(8, 18092020200814, 800000, '2020-09-19 09:58:39', '2020-09-19 09:58:39'),
(9, 20092020155351, 70000, '2020-09-20 16:57:28', '2020-09-20 16:57:28'),
(10, 20092020235819, 20000, '2020-09-20 16:58:49', '2020-09-20 16:58:49'),
(11, 20092020235819, 10000, '2020-09-20 17:00:40', '2020-09-20 17:00:40'),
(12, 20092020235819, 100000, '2020-09-20 17:02:44', '2020-09-20 17:02:44'),
(13, 21092020000541, 40000, '2020-09-20 17:05:57', '2020-09-20 17:05:57'),
(14, 21092020000541, 10000, '2020-09-20 17:06:17', '2020-09-20 17:06:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_pembayaran_pembelian`
--

CREATE TABLE `history_pembayaran_pembelian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembayaran` bigint(20) NOT NULL,
  `total_pembayaran` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `history_pembayaran_pembelian`
--

INSERT INTO `history_pembayaran_pembelian` (`id`, `pembayaran`, `total_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 18092020194427, 50000, '2020-09-18 12:59:18', '2020-09-18 12:59:18'),
(2, 18092020193814, 200000, '2020-09-18 13:00:14', '2020-09-18 13:00:14'),
(3, 18092020200701, 750000, '2020-09-18 13:07:22', '2020-09-18 13:07:22'),
(4, 18092020194427, 300000, '2020-09-18 13:08:44', '2020-09-18 13:08:44'),
(5, 21092020001051, 200000, '2020-09-20 17:11:11', '2020-09-20 17:11:11'),
(6, 21092020001051, 150000, '2020-09-20 17:12:17', '2020-09-20 17:12:17');

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
(8, 'Buah', '2020-09-15 09:23:48', '2020-09-15 09:24:31'),
(9, 'Busana', '2020-09-16 13:56:26', '2020-09-16 13:56:26');

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
(17, '2020_09_15_173503_create__pembelian_line_table', 8),
(22, '2020_09_18_070414_create_penjualan_kredit_table', 9),
(23, '2020_09_18_144804_create_penjualan_kredit_line_table', 10),
(25, '2020_09_18_180024_create_history_pembayaran_table', 11),
(26, '2020_09_18_184720_create_pembelian_kredit_table', 12),
(27, '2020_09_18_184800_create_pembelian_kredit_line_table', 12),
(28, '2020_09_18_195325_create_history_pembayaran_pembelian_table', 13);

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
  `grand_total` bigint(20) DEFAULT NULL,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id`, `no_struk`, `nama_supplier_id`, `grand_total`, `nama`, `created_at`, `updated_at`) VALUES
(69, 993531142, '3', 200000, '[\"12\"]', '2020-09-18 12:42:10', '2020-09-18 12:42:10'),
(70, 775682906, '3', 200000, '[\"12\"]', '2020-09-18 12:43:57', '2020-09-18 12:43:57'),
(71, 1232654643, '4', 70000, '[\"14\",\"15\"]', '2020-09-20 07:41:03', '2020-09-20 07:41:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_kredit`
--

CREATE TABLE `pembelian_kredit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_struk` bigint(20) NOT NULL,
  `nama_supplier_id` bigint(20) NOT NULL,
  `sisa` bigint(20) DEFAULT NULL,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_total` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembelian_kredit`
--

INSERT INTO `pembelian_kredit` (`id`, `no_struk`, `nama_supplier_id`, `sisa`, `nama`, `grand_total`, `created_at`, `updated_at`) VALUES
(4, 1937583247, 4, 0, '[\"14\",\"15\"]', 350000, '2020-09-18 12:44:27', '2020-09-18 13:08:44'),
(5, 1792085506, 4, 1000000, '[\"14\",\"15\"]', 1750000, '2020-09-18 13:07:01', '2020-09-18 13:07:22'),
(6, 196515107, 3, 200000, '[\"12\"]', 200000, '2020-09-20 09:08:27', '2020-09-20 09:08:27'),
(7, 517814311, 4, 350000, '[\"14\",\"15\"]', 350000, '2020-09-20 17:09:26', '2020-09-20 17:09:27'),
(8, 972806062, 4, 0, '[\"14\",\"15\"]', 350000, '2020-09-20 17:10:51', '2020-09-20 17:12:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_kredit_line`
--

CREATE TABLE `pembelian_kredit_line` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembelian_kredit` bigint(20) NOT NULL,
  `barang` bigint(20) NOT NULL,
  `harga_beli` bigint(20) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `grand_total` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembelian_kredit_line`
--

INSERT INTO `pembelian_kredit_line` (`id`, `pembelian_kredit`, `barang`, `harga_beli`, `qty`, `grand_total`, `created_at`, `updated_at`) VALUES
(2, 3, 12, 20000, 10, 200000, NULL, NULL),
(3, 4, 14, 15000, 10, 150000, NULL, NULL),
(4, 4, 15, 20000, 10, 200000, NULL, NULL),
(5, 5, 14, 15000, 50, 750000, NULL, NULL),
(6, 5, 15, 20000, 50, 1000000, NULL, NULL),
(7, 6, 12, 20000, 10, 200000, NULL, NULL),
(8, 7, 14, 15000, 10, 150000, NULL, NULL),
(9, 7, 15, 20000, 10, 200000, NULL, NULL),
(10, 8, 14, 15000, 10, 150000, NULL, NULL),
(11, 8, 15, 20000, 10, 200000, NULL, NULL);

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
(61, 69, '12', 20000, 10, 200000, NULL, NULL),
(62, 70, '12', 20000, 10, 200000, NULL, NULL),
(63, 71, '14', 15000, 2, 30000, NULL, NULL),
(64, 71, '15', 20000, 2, 40000, NULL, NULL);

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
(40, 1080823166, 'Bud', '[\"12\"]', 25000, 266, 'jljljljljljljl', 46456435464, '2020-08-18 07:51:48', '2020-09-18 13:03:54'),
(41, 29360117, 'Bud', '[\"12\",\"14\",\"15\"]', 70000, 266, 'jljljljljljljl', 46456435464, '2020-09-19 09:52:46', '2020-09-19 09:52:46'),
(43, 943285829, 'Bud', '[\"12\",\"13\"]', 45000, 266, 'jljljljljljljl', 46456435464, '2020-09-19 23:55:50', '2020-09-19 23:55:50'),
(44, 1057875487, 'Ade', '[\"14\",\"15\"]', 405000, 419, 'Jl..', 83841230838, '2020-09-19 23:58:08', '2020-09-19 23:58:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_kredit`
--

CREATE TABLE `penjualan_kredit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_struk` bigint(20) NOT NULL,
  `nama_customer` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_customer` bigint(20) NOT NULL,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_total` bigint(20) DEFAULT NULL,
  `sisa` bigint(20) DEFAULT NULL,
  `status` bigint(20) NOT NULL,
  `jumlah_bayar` bigint(20) DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penjualan_kredit`
--

INSERT INTO `penjualan_kredit` (`id`, `no_struk`, `nama_customer`, `kode_customer`, `nama`, `grand_total`, `sisa`, `status`, `jumlah_bayar`, `alamat`, `telepon`, `created_at`, `updated_at`) VALUES
(10, 1778283397, 'Bud', 266, '[\"12\"]', 250000, 250000, 1, NULL, 'jljljljljljljl', 46456435464, '2020-08-18 12:37:26', '2020-09-18 12:37:26'),
(11, 2137497168, 'Bud', 266, '[\"12\"]', 250000, 0, 1, NULL, 'jljljljljljljl', 46456435464, '2020-09-18 13:02:06', '2020-09-18 13:02:27'),
(12, 242520080, 'Bud', 266, '[\"14\",\"15\"]', 1800000, 1000000, 1, NULL, 'jljljljljljljl', 46456435464, '2020-09-18 13:08:14', '2020-09-19 09:58:39'),
(13, 1588411783, 'Bud', 266, '[\"12\",\"14\",\"15\"]', 70000, 0, 1, NULL, 'jljljljljljljl', 46456435464, '2020-09-20 08:53:51', '2020-09-20 16:57:28'),
(14, 297680661, 'Ade', 419, '[\"14\"]', 40000, 0, 1, NULL, 'Jl..', 83841230838, '2020-09-20 16:58:19', '2020-09-20 17:02:44'),
(15, 705899298, 'Bud', 266, '[\"15\"]', 50000, 0, 1, NULL, 'jljljljljljljl', 46456435464, '2020-09-20 17:05:41', '2020-09-20 17:06:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_kredit_line`
--

CREATE TABLE `penjualan_kredit_line` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penjualan_kredit` bigint(20) NOT NULL,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan_id` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` bigint(20) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `grand_total` bigint(20) NOT NULL,
  `jumlah_bayar` bigint(20) DEFAULT NULL,
  `sisa` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penjualan_kredit_line`
--

INSERT INTO `penjualan_kredit_line` (`id`, `penjualan_kredit`, `nama`, `satuan_id`, `qty`, `harga`, `grand_total`, `jumlah_bayar`, `sisa`, `created_at`, `updated_at`) VALUES
(11, 10, '12', 'Pcs', 10, 25000, 250000, NULL, NULL, NULL, NULL),
(12, 11, '12', 'Pcs', 10, 25000, 250000, NULL, NULL, NULL, NULL),
(13, 12, '14', 'Pcs', 40, 20000, 800000, NULL, NULL, NULL, NULL),
(14, 12, '15', 'Pcs', 40, 25000, 1000000, NULL, NULL, NULL, NULL),
(15, 13, '12', 'Pcs', 1, 25000, 25000, NULL, NULL, NULL, NULL),
(16, 13, '14', 'Pcs', 1, 20000, 20000, NULL, NULL, NULL, NULL),
(17, 13, '15', 'Pcs', 1, 25000, 25000, NULL, NULL, NULL, NULL),
(18, 14, '14', 'Pcs', 2, 20000, 40000, NULL, NULL, NULL, NULL),
(19, 15, '15', 'Pcs', 2, 25000, 50000, NULL, NULL, NULL, NULL);

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
(58, 40, 12, 'Pcs', 25000, 1, 25000, NULL, NULL),
(59, 41, 12, 'Pcs', 25000, 1, 25000, NULL, NULL),
(60, 41, 14, 'Pcs', 20000, 1, 20000, NULL, NULL),
(61, 41, 15, 'Pcs', 25000, 1, 25000, NULL, NULL),
(62, 42, 13, 'Pcs', 20000, 1, 20000, NULL, NULL),
(63, 43, 12, 'Pcs', 25000, 1, 25000, NULL, NULL),
(64, 43, 13, 'Pcs', 20000, 1, 20000, NULL, NULL),
(65, 44, 14, 'Pcs', 20000, 9, 180000, NULL, NULL),
(66, 44, 15, 'Pcs', 25000, 9, 225000, NULL, NULL);

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
(5, 'Drem', '2020-09-15 09:33:08', '2020-09-15 09:35:26'),
(6, 'Kg', '2020-09-16 13:55:26', '2020-09-16 13:55:47');

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
-- Indeks untuk tabel `history_pembayaran`
--
ALTER TABLE `history_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `history_pembayaran_pembelian`
--
ALTER TABLE `history_pembayaran_pembelian`
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
-- Indeks untuk tabel `pembelian_kredit`
--
ALTER TABLE `pembelian_kredit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembelian_kredit_line`
--
ALTER TABLE `pembelian_kredit_line`
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
-- Indeks untuk tabel `penjualan_kredit`
--
ALTER TABLE `penjualan_kredit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualan_kredit_line`
--
ALTER TABLE `penjualan_kredit_line`
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
-- AUTO_INCREMENT untuk tabel `history_pembayaran`
--
ALTER TABLE `history_pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `history_pembayaran_pembelian`
--
ALTER TABLE `history_pembayaran_pembelian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `pembelian_kredit`
--
ALTER TABLE `pembelian_kredit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pembelian_kredit_line`
--
ALTER TABLE `pembelian_kredit_line`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pembelian_line`
--
ALTER TABLE `pembelian_line`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `penjualan_kredit`
--
ALTER TABLE `penjualan_kredit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `penjualan_kredit_line`
--
ALTER TABLE `penjualan_kredit_line`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `penjualan_line`
--
ALTER TABLE `penjualan_line`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
