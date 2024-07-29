-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2024 at 10:30 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sihmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` char(36) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `foto`, `email`, `password`, `created_at`, `updated_at`) VALUES
('1a2249ab-c40d-4712-b1ef-36bbc2084794', 'Admin', NULL, 'admin@gmail.com', '$2y$12$8nCm2TBXO2Wp12fPBAhJoeOzDlqQJyQZIO6YfvWlj9U4z0fZGg/by', '2024-05-26 01:06:29', '2024-06-03 20:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `admin__module`
--

CREATE TABLE `admin__module` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `app` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__module`
--

INSERT INTO `admin__module` (`id`, `app`, `tag`, `name`, `title`, `subtitle`, `color`, `menu`, `url`, `created_at`, `updated_at`) VALUES
('9c9a530f-86ea-42ab-807a-583bd84a5b98', 'Admin', 'SIHMI-Admin', 'SIHMI', 'SIHMI', 'Admin', '#ED553B', 'Admin', 'admin/dashboard', '2024-07-25 00:12:04', '2024-07-25 00:44:45'),
('9c9a5e07-1677-47c3-8387-ef5d68daab2b', 'Cabang', 'SIHMI-Cabang', 'SIHMI', 'SIHMI', 'Cabang', '#F6D55C', 'Cabang', 'cabang/dashboard', '2024-07-25 00:42:44', '2024-07-25 00:44:54'),
('9c9a5e58-2092-4217-81b0-8f360f932fa5', 'Komisariat Teknik', 'SIHMI-Komisariat Teknik', 'SIHMI', 'SIHMI', 'Komisariat Teknik', '#20639B', 'Komisariat', 'komisariat/dashboard', '2024-07-25 00:43:37', '2024-07-28 08:12:07'),
('9ca10825-36d9-4755-bf44-b153e554e6f0', 'Komisariat Pertanian', 'SIHMI-Komisariat Pertanian', 'SIHMI', 'SIHMI', 'Komisariat Pertanian', '#20639B', 'Komisariat', 'komisariat/dashboard', '2024-07-28 08:13:23', '2024-07-28 08:13:23'),
('9ca10d33-8655-4c72-b46d-6b0af62eb8cb', 'Komisariat Amki', 'SIHMI-Komisariat Amki', 'SIHMI', 'SIHMI', 'Komisariat Amki', '#20639B', 'Komisariat', 'komisariat/dashboard', '2024-07-28 08:27:31', '2024-07-28 08:27:31'),
('9ca13ca6-34ab-4816-aeda-498dc1d8aeae', 'Teknik Pertanian', 'SIHMI-Komisariat Teknik', 'Febriani Ersella', 'cabang', 'Komisariat Teknik', '#20639B', 'Komisariat', 'komisariat/dashboard', '2024-07-28 10:40:11', '2024-07-28 10:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `admin__pengguna`
--

CREATE TABLE `admin__pengguna` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__pengguna`
--

INSERT INTO `admin__pengguna` (`id`, `nama`, `foto`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
('9c9a58ae-3614-48af-a410-5e9e815f4bf2', 'Master Admin', 'app/images/pegawai/9c9a58ae-3614-48af-a410-5e9e815f4bf2-1721867267-7Xxw9.webp', 'masteradmin', 'admin@gmail.com', '$2y$12$B3VYQc6Mwb2Nqq5xnnsd7e5Nfajtppz303JqCjopnHgkm9Xlw1Gz2', '2024-07-25 00:27:47', '2024-07-28 08:37:13'),
('9c9c064b-b9ef-432f-a24b-e36d225049d8', 'Komisariat Pertanian', 'app/images/pegawai/9c9c064b-b9ef-432f-a24b-e36d225049d8-1721939344-J2Blw.webp', 'komisariatpertanian', 'komisariatpertanian@gmail.com', '$2y$12$zq2/BeUytM/ZhlDZz/qmruELjKzJbBsy.GZChj5gsJqDo8HOBZI7m', '2024-07-25 20:29:04', '2024-07-28 08:32:33'),
('9ca10f6b-856a-4f43-b615-d5b72a9614ee', 'Komisariat Teknik', NULL, 'komisariatteknik', 'komisariatteknik@gmail.com', '$2y$12$FHp3Z3dUiav927l1jqZ6cOSstqdUUIH6K3vF4iZaDJI8rJAWamr4C', '2024-07-28 08:33:43', '2024-07-28 08:33:43'),
('9ca10fd0-5e58-4d78-82d6-078925b7dce6', 'Komisariat Tarbiyah', NULL, 'komisariattarbiyah', 'komisariattarbiyah@gmail.com', '$2y$12$8guUoNa8y4zXJC5D9JOJAOAr8bcApVsL9dVa7mjD8z3nXCRqizL5G', '2024-07-28 08:34:49', '2024-07-28 08:34:49'),
('9ca1104a-39a6-49b9-9277-535947a95d00', 'Komisariat Amki', NULL, 'komisariatamki', 'komisariatamki@gmail.com', '$2y$12$I.pS3DUURCs6/BSuBDm9DOctqiHiaaQav6PCxYGrlnNUBcrORAube', '2024-07-28 08:36:09', '2024-07-28 08:53:11'),
('9ca110fd-5a22-493d-89e3-423244b5c765', 'Febriani Ersella', NULL, 'febrianiersella', 'febrianigreenleaf@gmail.com', '$2y$12$q6KewomcgmI73fURlRD0cOT.nQTDFA6xDZEkWbukA86DN.2nqt.Sy', '2024-07-28 08:38:07', '2024-07-28 08:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `admin__role`
--

CREATE TABLE `admin__role` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_pengguna` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_module` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin__role`
--

INSERT INTO `admin__role` (`id`, `id_pengguna`, `id_module`, `created_at`, `updated_at`) VALUES
('9c9a5d91-ad84-472d-a274-8da80b59d96c', '9c9a58ae-3614-48af-a410-5e9e815f4bf2', '9c9a530f-86ea-42ab-807a-583bd84a5b98', '2024-07-25 00:41:27', '2024-07-25 00:41:27'),
('9c9a5e68-3e67-4995-86ff-5106896b841e', '9c9a58ae-3614-48af-a410-5e9e815f4bf2', '9c9a5e58-2092-4217-81b0-8f360f932fa5', '2024-07-25 00:43:47', '2024-07-25 00:43:47'),
('9c9a5e86-8c7b-4ba7-a00b-e20cdffaef75', '9c9a58ae-3614-48af-a410-5e9e815f4bf2', '9c9a5e07-1677-47c3-8387-ef5d68daab2b', '2024-07-25 00:44:07', '2024-07-25 00:44:07'),
('9ca10842-5593-4482-b4b6-31f8bb2df48a', '9c9a58ae-3614-48af-a410-5e9e815f4bf2', '9ca10825-36d9-4755-bf44-b153e554e6f0', '2024-07-28 08:13:42', '2024-07-28 08:13:42'),
('9ca10d4d-fbdf-4b04-be80-e1f519977839', '9c9a58ae-3614-48af-a410-5e9e815f4bf2', '9ca10d33-8655-4c72-b46d-6b0af62eb8cb', '2024-07-28 08:27:48', '2024-07-28 08:27:48'),
('9ca1117c-07a7-43ed-8106-dd65942e9558', '9c9c064b-b9ef-432f-a24b-e36d225049d8', '9ca10825-36d9-4755-bf44-b153e554e6f0', '2024-07-28 08:39:30', '2024-07-28 08:39:30'),
('9ca11204-8608-44c8-ab58-ebd9be90afdf', '9ca10f6b-856a-4f43-b615-d5b72a9614ee', '9c9a5e58-2092-4217-81b0-8f360f932fa5', '2024-07-28 08:40:59', '2024-07-28 08:40:59'),
('9ca1124b-f0fa-4666-a645-a70c76c57abc', '9ca110fd-5a22-493d-89e3-423244b5c765', '9c9a5e07-1677-47c3-8387-ef5d68daab2b', '2024-07-28 08:41:46', '2024-07-28 08:41:46'),
('9ca11687-e471-45e3-ab64-a1d3c628da51', '9ca1104a-39a6-49b9-9277-535947a95d00', '9ca10d33-8655-4c72-b46d-6b0af62eb8cb', '2024-07-28 08:53:36', '2024-07-28 08:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` char(36) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `asal_komisariat` varchar(20) NOT NULL,
  `no_wa` int NOT NULL,
  `umur` int NOT NULL,
  `alamat` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cabang__alumni`
--

CREATE TABLE `cabang__alumni` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_wa` varchar(255) DEFAULT NULL,
  `asal_cabang` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cabang__alumni`
--

INSERT INTO `cabang__alumni` (`id`, `nama`, `alamat`, `no_wa`, `asal_cabang`, `foto`, `created_at`, `updated_at`) VALUES
('9c9f6062-6c28-49df-915a-e9bc1ededd18', 'Theo Bernadhi S.Sos', 'Dalong Kelurahan Sukaharja', '000000000000', 'Pontianak', 'app/SIHMI/alumni/9c9f6062-6c28-49df-915a-e9bc1ededd18-1722083307-IBreH.jpg', '2024-07-27 19:28:27', '2024-07-27 19:28:28'),
('9c9f60b7-aa36-4d31-9cd0-1434a6cf449c', 'Yasir Arafat M.AP', 'Kelurahan Sukaharja', '000000000000', 'Ketapang', 'app/SIHMI/alumni/9c9f60b7-aa36-4d31-9cd0-1434a6cf449c-1722083363-HtizJ.jpg', '2024-07-27 19:29:23', '2024-07-27 19:29:23'),
('9c9f6127-415f-4732-9926-e8d3ff82220e', 'Abdul Salim S.Pd', 'Kauman Kecamatan Benua Kayong', '0000000000000', 'Ketapang', 'app/SIHMI/alumni/9c9f6127-415f-4732-9926-e8d3ff82220e-1722083436-A2co4.jpg', '2024-07-27 19:30:36', '2024-07-27 19:30:37'),
('9ca18a90-e5c5-40a5-981f-4ceb984d12cb', 'Erma', 'Jl. Kauman', '00000000', 'Pontianak', 'app/SIHMI/alumni/9ca18a90-e5c5-40a5-981f-4ceb984d12cb-1722176284-OEDfO.jpg', '2024-07-28 21:18:04', '2024-07-28 21:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `cabang__pengurus`
--

CREATE TABLE `cabang__pengurus` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `created_at`, `updated_at`) VALUES
('9ca14bfe-c938-4d90-aa41-9595c22deac3', 'Sistem Informasi Manajemen', '2024-07-28 11:23:06', '2024-07-28 11:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_detail`
--

CREATE TABLE `gallery_detail` (
  `id` char(36) NOT NULL,
  `id_gallery` char(36) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery_detail`
--

INSERT INTO `gallery_detail` (`id`, `id_gallery`, `foto`, `created_at`, `updated_at`) VALUES
('9c9f5d06-991d-4c4a-b025-d00cf5f7927b', '9c9f5cca-5027-461d-9e85-40571aa71fab', 'app/SIHMI/pengurus/9c9f5d06-991d-4c4a-b025-d00cf5f7927b-1722082744-D5Cbd.png', '2024-07-27 12:19:04', '2024-07-27 12:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `periode` varchar(255) DEFAULT NULL,
  `penjelasan` text,
  `kreator` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id` char(36) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(50) NOT NULL,
  `pemasukan` int NOT NULL,
  `pengeluaran` int NOT NULL,
  `saldo` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `tanggal`, `keterangan`, `pemasukan`, `pengeluaran`, `saldo`, `created_at`, `updated_at`) VALUES
('9c9e24b1-e9da-412d-9357-1c5881bac597', '2024-07-12', 'Administrasi', 500, 200, 300, '2024-07-26 21:45:44', '2024-07-26 21:45:44'),
('9c9e254f-0b72-407e-b2f6-5976fa028163', '2024-07-23', 'Konsumsi Panitia', 0, 50, 300, '2024-07-26 21:47:27', '2024-07-26 21:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` char(36) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `tanggal` date DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat__cabang`
--

CREATE TABLE `surat__cabang` (
  `id` char(36) NOT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `isi_surat` text,
  `tanggal_hijriah` varchar(255) DEFAULT NULL,
  `tanggal_masehi` varchar(255) DEFAULT NULL,
  `pengurus` varchar(255) DEFAULT NULL,
  `nama_kiri` varchar(255) DEFAULT NULL,
  `jabatan_kiri` varchar(255) DEFAULT NULL,
  `nama_kanan` varchar(255) DEFAULT NULL,
  `jabatan_kanan` varchar(255) DEFAULT NULL,
  `ttd_kiri` varchar(255) DEFAULT NULL,
  `ttd_kanan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat__keluar`
--

CREATE TABLE `surat__keluar` (
  `id` char(36) NOT NULL,
  `id_pengguna` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `url_surat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat__kohati`
--

CREATE TABLE `surat__kohati` (
  `id` char(36) NOT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `tujuan` varchar(255) DEFAULT NULL,
  `isi_surat` text,
  `tanggal_hijriah` varchar(255) DEFAULT NULL,
  `tanggal_masehi` varchar(255) DEFAULT NULL,
  `pengurus` varchar(255) DEFAULT NULL,
  `nama_kiri` varchar(255) DEFAULT NULL,
  `jabatan_kiri` varchar(255) DEFAULT NULL,
  `nama_kanan` varchar(255) DEFAULT NULL,
  `jabatan_kanan` varchar(255) DEFAULT NULL,
  `ttd_kiri` varchar(255) DEFAULT NULL,
  `ttd_kanan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat__masuk`
--

CREATE TABLE `surat__masuk` (
  `id` char(36) NOT NULL,
  `id_pengguna` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `sumber` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `url_surat` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` char(36) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `berkas_pdf` varchar(255) DEFAULT NULL,
  `berkas_word` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__module`
--
ALTER TABLE `admin__module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__pengguna`
--
ALTER TABLE `admin__pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin__role`
--
ALTER TABLE `admin__role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_module` (`id_module`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `cabang__alumni`
--
ALTER TABLE `cabang__alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabang__pengurus`
--
ALTER TABLE `cabang__pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_detail`
--
ALTER TABLE `gallery_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gallery` (`id_gallery`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat__cabang`
--
ALTER TABLE `surat__cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat__keluar`
--
ALTER TABLE `surat__keluar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `surat__kohati`
--
ALTER TABLE `surat__kohati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat__masuk`
--
ALTER TABLE `surat__masuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin__role`
--
ALTER TABLE `admin__role`
  ADD CONSTRAINT `admin__role_ibfk_1` FOREIGN KEY (`id_module`) REFERENCES `admin__module` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
