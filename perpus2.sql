-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 05:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus2`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `isbn` int(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `section` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `isbn`, `judul`, `pengarang`, `penerbit`, `section`, `status`, `cover`, `created_at`, `updated_at`) VALUES
(1, 423543, 'Animal Farm', 'George Orwell', 'Penguin Essentials', '5A', 'Rusak', '1603644119_6ce3f9345a8e98cc0c7a.jpg', '2020-10-25 11:41:59', '2020-10-26 09:25:46'),
(2, 2344243, 'My Little Pony  Daring Do and the Forbidden City of Clouds', 'A K Yearling', 'Little, Brown Books for Young Readers', '4B', 'Dipinjam', '1603644202_ad905fdaec9f3327dada.jpg', '2020-10-25 11:43:22', '2020-10-26 09:27:16'),
(3, 653242, 'My Little Pony Daring Do and the Marked Thief of Marapore', 'A K Yearling', 'Little, Brown Books for Young Readers', '2A', 'Tersedia', '1603644233_742baa7d9c84012da5cc.jpg', '2020-10-25 11:43:53', '2020-10-26 04:43:37'),
(4, 56723, 'My Little Pony The Manga - A Day in the Life of Equestria Vol. 1', 'David Lumsdon', 'Seven Seas Entertainment, LLC', '2B', 'Rusak', '1603644260_05cd30b581dd48c226b3.jpg', '2020-10-25 11:44:20', '2020-10-25 11:57:52'),
(5, 12743, 'Normal People', 'Sally Rooney', 'FABER & FABER', '2C', 'Tersedia', '1603644286_024eea07503adb8ea823.jpg', '2020-10-25 11:44:46', '2020-10-26 05:30:16'),
(6, 12124, 'The Silent Patient The Richard and Judy bookclub pick and Sunday Times Bestseller', 'Alex Michaelides', 'Orion Publishing Co', '1C', 'Rusak', '1603644328_f7860492eb9a97e2eb31.jpg', '2020-10-25 11:45:28', '2020-10-25 11:51:36'),
(7, 423543, 'Animal Farm', 'George Orwell', 'Penguin Essentials', '5A', 'Tersedia', '1603644119_6ce3f9345a8e98cc0c7a.jpg', '2020-10-25 11:41:59', '2020-10-26 03:16:25'),
(8, 423543, 'Animal Farm', 'George Orwell', 'Penguin Essentials', '5A', 'Tersedia', '1603644119_6ce3f9345a8e98cc0c7a.jpg', '2020-10-25 11:41:59', '2020-11-06 16:34:24'),
(9, 2344243, 'My Little Pony  Daring Do and the Forbidden City of Clouds', 'A K Yearling', 'Little, Brown Books for Young Readers', '4B', 'Tersedia', '1603644202_ad905fdaec9f3327dada.jpg', '2020-10-25 11:43:22', '2020-10-25 11:43:22'),
(10, 653242, 'My Little Pony Daring Do and the Marked Thief of Marapore', 'A K Yearling', 'Little, Brown Books for Young Readers', '2A', 'Tersedia', '1603644233_742baa7d9c84012da5cc.jpg', '2020-10-25 11:43:53', '2020-10-25 11:43:53'),
(11, 56723, 'My Little Pony The Manga - A Day in the Life of Equestria Vol. 1', 'David Lumsdon', 'Seven Seas Entertainment, LLC', '<i> <b>', 'Hilang', '1603644260_05cd30b581dd48c226b3.jpg', '2020-10-25 11:44:20', '2020-11-06 16:33:37'),
(12, 12743, 'Normal People', 'Sally Rooney', 'FABER & FABER', '2C', 'Tersedia', '1603644286_024eea07503adb8ea823.jpg', '2020-10-25 11:44:46', '2020-10-25 11:44:46'),
(13, 12124, 'The Silent Patient The Richard and Judy bookclub pick and Sunday Times Bestseller', 'Alex Michaelides', 'Orion Publishing Co', '1C', 'Tersedia', '1603644328_f7860492eb9a97e2eb31.jpg', '2020-10-25 11:45:28', '2020-10-25 11:45:28'),
(14, 423543, 'Animal Farm', 'George Orwell', 'Penguin Essentials', '5A', 'Hilang', '1603644119_6ce3f9345a8e98cc0c7a.jpg', '2020-10-25 11:41:59', '2020-10-25 11:58:10'),
(15, 423543, 'Animal Farm', 'George Orwell', 'Penguin Essentials', '5A', 'Tersedia', '1603644119_6ce3f9345a8e98cc0c7a.jpg', '2020-10-25 11:41:59', '2020-10-25 11:41:59'),
(16, 2344243, 'My Little Pony  Daring Do and the Forbidden City of Clouds', 'A K Yearling', 'Little, Brown Books for Young Readers', '4B', 'Tersedia', '1603644202_ad905fdaec9f3327dada.jpg', '2020-10-25 11:43:22', '2020-10-26 03:22:03'),
(17, 653242, 'My Little Pony Daring Do and the Marked Thief of Marapore', 'A K Yearling', 'Little, Brown Books for Young Readers', '2A', 'Tersedia', '1603644233_742baa7d9c84012da5cc.jpg', '2020-10-25 11:43:53', '2020-10-25 11:43:53'),
(18, 56723, 'My Little Pony The Manga - A Day in the Life of Equestria Vol. 1', 'David Lumsdon', 'Seven Seas Entertainment, LLC', '2B', 'Rusak', '1603644260_05cd30b581dd48c226b3.jpg', '2020-10-25 11:44:20', '2020-10-25 11:58:04'),
(19, 12743, 'Normal People', 'Sally Rooney', 'FABER & FABER', '2C', 'Tersedia', '1603644286_024eea07503adb8ea823.jpg', '2020-10-25 11:44:46', '2020-10-25 11:44:46'),
(20, 12124, 'The Silent Patient The Richard and Judy bookclub pick and Sunday Times Bestseller', 'Alex Michaelides', 'Orion Publishing Co', '1C', 'Rusak', '1603644328_f7860492eb9a97e2eb31.jpg', '2020-10-25 11:45:28', '2020-10-27 08:09:56'),
(21, 423543, 'Animal Farm', 'George Orwell', 'Penguin Essentials', '5A', 'Hilang', '1603644119_6ce3f9345a8e98cc0c7a.jpg', '2020-10-25 11:41:59', '2020-10-26 09:26:46'),
(22, 423543, 'Animal Farm', 'George Orwell', 'Penguin Essentials', '5A', 'Tersedia', '1603644119_6ce3f9345a8e98cc0c7a.jpg', '2020-10-25 11:41:59', '2020-10-26 03:25:05'),
(23, 2344243, 'My Little Pony  Daring Do and the Forbidden City of Clouds', 'A K Yearling', 'Little, Brown Books for Young Readers', '4B', 'Dipinjam', '1603644202_ad905fdaec9f3327dada.jpg', '2020-10-25 11:43:22', '2020-10-27 09:03:06'),
(24, 653242, 'My Little Pony Daring Do and the Marked Thief of Marapore', 'A K Yearling', 'Little, Brown Books for Young Readers', '2A', 'Tersedia', '1603644233_742baa7d9c84012da5cc.jpg', '2020-10-25 11:43:53', '2020-10-26 06:14:36'),
(25, 56723, 'My Little Pony The Manga - A Day in the Life of Equestria Vol. 1', 'David Lumsdon', 'Seven Seas Entertainment, LLC', '2B', 'Hilang', '1603644260_05cd30b581dd48c226b3.jpg', '2020-10-25 11:44:20', '2020-10-29 20:46:03'),
(26, 12743, 'Normal People', 'Sally Rooney', 'FABER & FABER', '2C', 'Tersedia', '1603644286_024eea07503adb8ea823.jpg', '2020-10-25 11:44:46', '2020-10-26 05:28:52'),
(27, 12124, 'The Silent Patient The Richard and Judy bookclub pick and Sunday Times Bestseller', 'Alex Michaelides', 'Orion Publishing Co', '1C', 'Tersedia', '1603644328_f7860492eb9a97e2eb31.jpg', '2020-10-25 11:45:28', '2020-10-27 01:06:17'),
(28, 423543, 'Animal Farm', 'George Orwell', 'Penguin Essentials', '5A', 'Tersedia', '1603644119_6ce3f9345a8e98cc0c7a.jpg', '2020-10-25 11:41:59', '2020-10-25 11:41:59'),
(30, 653242, 'My Little Pony Daring Do and the Marked Thief of Marapore', 'A K Yearling', 'Little, Brown Books for Young Readers', '5A', 'Tersedia', '1603644233_742baa7d9c84012da5cc.jpg', '2020-10-29 20:29:36', '2020-10-29 20:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id_denda` int(11) NOT NULL,
  `no_anggota` varchar(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `denda` int(20) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `denda`
--

INSERT INTO `denda` (`id_denda`, `no_anggota`, `id_buku`, `denda`, `status`, `created_at`, `updated_at`) VALUES
(3, '20102583681', 25, 5000, 1, '2020-10-26 09:23:34', '2020-09-27 08:09:35'),
(4, '20102545600', 1, 50000, 1, '2020-09-26 09:25:46', '2020-10-29 20:29:52'),
(5, '20102545600', 21, 75000, 1, '2020-10-26 09:26:46', '2020-08-27 08:51:41'),
(6, '20102583681', 27, 5000, 1, '2020-10-27 01:06:17', '2020-08-27 01:51:59'),
(7, '20102583681', 20, 50000, 1, '2020-10-27 08:09:56', '2020-10-27 05:09:22'),
(8, '20102583681', 20, 5000, 1, '2020-10-27 08:09:56', '2020-10-27 08:09:56'),
(9, '20102725842', 25, 75000, 0, '2020-10-29 20:46:03', '2020-10-29 20:46:03'),
(10, '20102725842', 25, 5000, 0, '2020-10-29 20:46:03', '2020-10-29 20:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `no_anggota` int(11) NOT NULL,
  `log` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `no_anggota` varchar(11) NOT NULL,
  `deadline` datetime DEFAULT NULL,
  `tanggal_peminjaman` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_buku`, `no_anggota`, `deadline`, `tanggal_peminjaman`, `created_at`, `updated_at`, `deleted_at`) VALUES
(18, 1, '20102545600', '2020-11-02 05:30:07', '2020-10-26 05:30:07', '2020-10-26 05:30:07', '2020-10-26 05:30:16', '2020-10-26 05:30:16'),
(19, 1, '20102545600', '2020-11-02 05:33:21', '2020-10-26 05:33:21', '2020-10-26 05:33:21', '2020-10-26 09:25:46', '2020-10-26 09:25:46'),
(20, 24, '20102583681', '2020-11-02 06:12:24', '2020-10-15 00:00:00', '2020-10-26 06:12:24', '2020-10-26 06:14:36', '2020-10-26 06:14:36'),
(21, 25, '20102583681', '2020-11-02 06:14:44', '2020-10-15 00:00:00', '2020-10-26 06:14:44', '2020-10-26 06:15:08', '2020-10-26 06:15:08'),
(22, 25, '20102583681', '2020-10-21 00:00:00', '2020-10-14 00:00:00', '2020-10-26 06:23:30', '2020-10-26 09:23:34', '2020-10-26 09:23:34'),
(23, 21, '20102545600', '2020-11-02 09:26:39', '2020-10-26 09:26:39', '2020-10-26 09:26:39', '2020-10-26 09:26:46', '2020-10-26 09:26:46'),
(24, 2, '20102597583', '2020-10-29 00:00:00', '2020-10-22 00:00:00', '2020-10-26 09:27:16', '2020-10-26 09:27:16', NULL),
(25, 27, '20102583681', '2020-10-22 00:00:00', '2020-10-15 00:00:00', '2020-10-26 20:53:25', '2020-10-27 01:06:17', '2020-10-27 01:06:17'),
(26, 20, '20102583681', '2020-10-22 00:00:00', '2020-10-15 00:00:00', '2020-10-27 08:08:27', '2020-10-27 08:09:56', '2020-10-27 08:09:56'),
(27, 25, '20102725842', '2020-10-29 00:00:00', '2020-10-22 00:00:00', '2020-10-27 08:49:23', '2020-10-27 08:49:40', '2020-10-27 08:49:40'),
(28, 25, '20102725842', '2020-10-23 00:00:00', '2020-10-16 00:00:00', '2020-10-27 08:49:47', '2020-10-29 20:46:03', '2020-10-29 20:46:03'),
(29, 23, '20102545600', '2020-11-03 09:03:06', '2020-10-27 09:03:06', '2020-10-27 09:03:06', '2020-10-27 09:03:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_denda` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `status_buku`
--

CREATE TABLE `status_buku` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_buku`
--

INSERT INTO `status_buku` (`id`, `keterangan`) VALUES
(1, 'Tersedia'),
(2, 'Dipinjam'),
(3, 'Hilang'),
(4, 'Rusak');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `no_anggota` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `no_telp` int(20) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `no_anggota`, `nama`, `jenis_kelamin`, `no_telp`, `ttl`, `profil`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(0, '20102725842', 'Rainbow Dash', 'P', 826481672, 'Cloudsdale, 16-02-2000', 'no-profil.png', 'rainbow@gmail.com', '$2y$10$GZok3vYLggxgdBncKok/D.Ptdw8HZQZCliePfs77MPhqMqmBFBmtC', 2, '2020-10-27 00:10:33', '2020-10-27 00:10:33'),
(10, '20102545600', '\"<i>Rarity</i>', 'P', 2147483647, 'Ponyville, 16-02-2000', '1603645685_8416f004ab2fd68459b1.jpg', 'rarity@gmail.com', '$2y$10$AwR628GC7nz43rR9IfGwYu/lLpG.IG7/VxEBEYg/2fOJH2YucvUvK', 2, '2020-10-25 12:08:05', '2020-10-25 12:08:05'),
(11, '201024493', 'indra', 'L', 45352342, 'Tangerang, 16-02-2000', '1603551489_5c4dee16183a0b4e33a4.png', 'indra@gmail.com', '$2y$10$7EiKFW15YmtbnivZFvNwmuOkNPwK37Jbs8xt/qoN6Q4LxvJFkTlzC', 0, '2020-10-24 09:58:09', '2020-10-24 10:44:23'),
(16, '20102597583', 'Twilight Sparkle', 'P', 2147483647, 'Canterlot, 02-12-2000', '1603645717_a59f049381ea282055c6.jpg', 'Twilight@gmail.com', '$2y$10$OrvIzXDXOfnOeXD1027KXeuCOKqgYW0DQw1ZYtVFAXyklk8PsBEvi', 2, '2020-10-25 12:08:37', '2020-10-25 12:08:37'),
(17, '20102583681', 'Fluttershy', 'P', 2147483647, 'Cloudsdale, 16-02-2000', '1603645770_775d0f327519c7ff1efa.jpg', 'Fluttershy@gmail.com', '$2y$10$mAcA56GurfnqVzR9edMgkOfphsnrtdQa8NOMkmgkCLP38n.28Ts1y', 2, '2020-10-25 12:09:30', '2020-10-25 12:09:30'),
(19, '2010251822', 'Ayu Febrianti', 'P', 2147483647, 'Tangerang, 16-02-2000', 'no-profil.png', 'ayu@gmail.com', '$2y$10$MaeB6Z3GlDi7ghp.cIjrwO/4Xat6ajUIX2pqCl/utwblnUNMWzsj6', 1, '2020-10-25 12:10:58', '2020-10-25 12:10:58'),
(20, '20102576635', 'Chamelia Try Winda', 'P', 2147483647, 'Tangerang, 16-02-2000', 'no-profil.png', 'chamel@gmail.com', '$2y$10$/QqTA8VEQkxx2L5ANne3Yepv9vQi/mAJLwEy5B4tjtMuZmQYmgcKi', 1, '2020-10-25 12:11:33', '2020-10-25 12:11:33'),
(21, '20102538567', 'Agustin', 'P', 2147483647, 'Depok, 16-02-2000', 'no-profil.png', 'agustin@gmail.com', '$2y$10$yrFcMjqn.frY8vGVYKmQgOcjwiuEmYMcikJRQeq3sHcCFYuPl2c.a', 1, '2020-10-25 12:12:13', '2020-10-25 12:12:13'),
(22, '20102554786', 'Mia', 'P', 2147483647, 'Jakarta, 16-02-2000', 'no-profil.png', 'mia@gmail.com', '$2y$10$1fv9jlQiW9AL6TZF/HOXYOBGUxGua7m7FuA9q765goKVCoikyytHO', 1, '2020-10-25 12:12:34', '2020-10-25 12:12:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_buku`
--
ALTER TABLE `status_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `denda`
--
ALTER TABLE `denda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_buku`
--
ALTER TABLE `status_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
