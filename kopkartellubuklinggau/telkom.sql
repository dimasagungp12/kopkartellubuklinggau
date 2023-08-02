-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2023 at 06:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `biayamasuk`
--

CREATE TABLE `biayamasuk` (
  `id` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` text NOT NULL,
  `jumlah` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biayamasuk`
--

INSERT INTO `biayamasuk` (`id`, `tanggal`, `uraian`, `jumlah`) VALUES
(1, '2023-02-28', 'Gaji Karyawan', '200000'),
(2, '2023-02-28', 'Biaya Rekening', '300000'),
(3, '2023-02-26', 'Ops Barang & Jasa Telkom', '55000'),
(4, '2023-02-26', 'Bingkisan Lebaran', '150000'),
(5, '2023-02-09', 'Biaya Penyusutan', '100000'),
(6, '2023-01-18', 'Biaya ATK & Operasional', '25000'),
(7, '2023-02-26', 'Lain-lain', '100000'),
(8, '2023-02-28', 'Ops Barang & Jasa Telkom', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `ebooks`
--

CREATE TABLE `ebooks` (
  `id` int(11) NOT NULL,
  `added_by` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(100) NOT NULL,
  `category` enum('Artificial Intelligence','Cyber Security','Data Science','Design','Development','IT and Software','Machine Learning','Programming Languages','Others') NOT NULL,
  `type` enum('Free','Paid') NOT NULL,
  `link` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `status` enum('Verified','Unverified') NOT NULL DEFAULT 'Unverified',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ebooks`
--

INSERT INTO `ebooks` (`id`, `added_by`, `title`, `author`, `category`, `type`, `link`, `cover`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Modern Cybersecurity Practices', 'Pascal Ackerman', 'Cyber Security', 'Paid', 'https://www.tutorialspoint.com/ebook/modern_cybersecurity_practices/index.asp', 'IMG-22092022-EA001.jpg', 'Verified', '2022-09-22 20:26:16', '2022-09-22 13:30:28'),
(2, 'admin', 'Docker Tutorial', 'Tutorialspoint', 'IT and Software', 'Paid', 'https://www.tutorialspoint.com/ebook/docker_tutorial/index.asp', 'IMG-22092022-EA002.jpg', 'Verified', '2022-09-22 20:30:11', '2022-09-22 13:30:19'),
(3, 'admin', 'Arduino Tutorial', 'Tutorialspoint', 'IT and Software', 'Paid', 'https://www.tutorialspoint.com/ebook/arduino_tutorial/index.asp', 'IMG-22092022-EA003.jpg', 'Verified', '2022-09-22 20:31:17', '2022-09-22 13:36:26'),
(4, 'admin', 'Operating System Tutorial', 'Tutorialspoint', 'IT and Software', 'Paid', 'https://www.tutorialspoint.com/ebook/operating_system_tutorial/index.asp', 'IMG-22092022-EA004.jpg', 'Verified', '2022-09-22 20:31:53', '2022-09-22 13:36:17'),
(5, 'admin', 'Kali Linux Tutorial', 'Tutorialspoint', 'IT and Software', 'Paid', 'https://www.tutorialspoint.com/ebook/kali_linux_tutorial/index.asp', 'IMG-22092022-EA005.jpg', 'Verified', '2022-09-22 20:33:55', '2022-09-22 13:36:42'),
(6, 'admin', 'Fundamentals of Information Security', 'Sanil Nadkarni', 'Cyber Security', 'Paid', 'https://www.tutorialspoint.com/ebook/fundamentals_of_information_security/index.asp', 'IMG-22092022-EA006.jpg', 'Verified', '2022-09-22 20:34:43', '2022-09-22 13:36:34'),
(7, 'admin', 'C++ Tutorial', 'Tutorialspoint', 'Programming Languages', 'Paid', 'https://www.tutorialspoint.com/ebook/cplusplus-tutorial/index.asp', 'IMG-22092022-EA007.jpg', 'Verified', '2022-09-22 21:03:23', '2022-09-22 14:04:45'),
(8, 'admin', 'Laravel Tutorial', 'Tutorialspoint', 'Programming Languages', 'Paid', 'https://www.tutorialspoint.com/ebook/laravel_tutorial/index.asp', 'IMG-22092022-EA008.jpg', 'Verified', '2022-09-22 21:03:46', '2022-09-22 14:04:55'),
(9, 'admin', 'Learning Go Programming', 'Shubhangi Agarwal', 'Programming Languages', 'Paid', 'https://www.tutorialspoint.com/ebook/learning_go_programming/index.asp', 'IMG-22092022-EA009.jpg', 'Verified', '2022-09-22 21:04:08', '2022-09-22 14:05:05'),
(10, 'admin', 'CSS Tutorial', 'Tutorialspoint', 'Development', 'Paid', 'https://www.tutorialspoint.com/ebook/css_tutorial/index.asp', 'IMG-22092022-EA010.jpg', 'Verified', '2022-09-22 21:04:36', '2022-09-22 14:05:13'),
(11, 'admin', 'Mastering Blockchain Second Edition', 'Imran Bashir', 'Machine Learning', 'Paid', 'https://www.tutorialspoint.com/ebook/mastering_blockchain_second_edition/index.asp', 'IMG-22092022-EA011.jpg', 'Verified', '2022-09-22 21:08:55', '2022-09-22 14:10:31'),
(12, 'admin', 'C++ High Performance Second Edition', 'Björn Andrist', 'Programming Languages', 'Paid', 'https://www.tutorialspoint.com/ebook/cplusplus_high_performance_second_edition/index.asp', 'IMG-22092022-EA012.jpg', 'Verified', '2022-09-22 21:09:16', '2022-09-22 14:10:22'),
(13, 'admin', 'Modern Cybersecurity Strategies for Enterprises', 'Ashish Mishra', 'IT and Software', 'Paid', 'https://www.tutorialspoint.com/ebook/modern-cybersecurity-strategies-for-enterprises/index.asp', 'IMG-22092022-EA013.jpg', 'Verified', '2022-09-22 21:09:39', '2022-09-22 14:10:15'),
(14, 'admin', 'Mastering PHP Design Patterns', 'Junade Ali', 'Programming Languages', 'Paid', 'https://www.tutorialspoint.com/ebook/mastering_php_design_patterns/index.asp', 'IMG-22092022-EA014.jpg', 'Verified', '2022-09-22 21:09:58', '2022-09-22 14:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` text NOT NULL,
  `jumlah` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pendapatan`
--

INSERT INTO `pendapatan` (`id`, `tanggal`, `uraian`, `jumlah`) VALUES
(1, '2023-03-01', 'Pengadaan Telkom', '200000'),
(2, '2023-02-28', 'Pengadaan Finnet', '200000'),
(3, '2023-03-02', 'Simpan Pinjam', '300000'),
(4, '2023-02-27', 'Lain-lain', '100000'),
(5, '2023-02-27', 'Pengadaan Finnet', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `simpanp`
--

CREATE TABLE `simpanp` (
  `id` int(100) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `loker` varchar(40) NOT NULL,
  `pokok` varchar(40) NOT NULL,
  `sukarela` varchar(30) NOT NULL,
  `wajib` varchar(40) NOT NULL,
  `jumlah` varchar(40) NOT NULL,
  `kontribusi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `simpanp`
--

INSERT INTO `simpanp` (`id`, `nama`, `loker`, `pokok`, `sukarela`, `wajib`, `jumlah`, `kontribusi`) VALUES
(1, 'marsha', 'Security', '100000', '200000', '100000', '200000', '25000'),
(2, 'buggi', 'Kary Kop', '20000', '30000', '30000', '', '100000'),
(3, 'atika', 'Telkom', '20000', '30000', '30000', '', '50000'),
(4, 'sukoyo', 'Telkom', '20000', '30000', '30000', '', '50000'),
(5, 'indro', 'Security', '20000', '35000', '400000', '', '25000'),
(6, 'buggi', 'Security', '150000', '30000', '30000', '', '50000'),
(7, 'kodak', 'Telkom', '20000', '30000', '30000', '', '50000'),
(8, 'anjas', 'CS', '20000', '30000', '30000', '', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_signup`
--

CREATE TABLE `tbl_signup` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `confirmpassword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_signup`
--

INSERT INTO `tbl_signup` (`username`, `password`, `confirmpassword`) VALUES
('dimasagung123', 'dimasagung90', 'dimasagung90'),
('dimasagung', 'dimasagung12', ''),
('dimasagung', 'dimas12', ''),
('dimas', 'dimass12', ''),
('koperasi', 'Koperasi11', ''),
('masuk', 'masuk123', ''),
('login', 'login11', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'dimas', 'e99a18c428cb38d5f260853678922e03'),
(2, 'sambo', '5ea4018c2334897bd89392447cc5756d'),
(3, 'abc', 'abc123'),
(4, '123', '123'),
(5, 'login123', 'login123'),
(6, '', ''),
(7, 'dimasagung123', 'dimasagung123'),
(8, 'alibaba', '$2y$10$VU1BoceIaUvWlL1cWApLyO2iUtKV7R0s4Fu3HEYEs5uVC/5snBWkm'),
(9, 'adminsp', '$2y$10$e.6TfiBLO63yKGG4GJLXrO3093R9ZCd/G4PDJSs80enVqHPTpJl5q'),
(10, 'adminlte', '$2y$10$3A2ARNFa/Ft0868L73tF1ewIISDugOYFyaZzgEEbMHgVTNavn6aqq'),
(11, 'admin', '$2y$10$CKBV3cHaaHm5RZNOT4XQ6OO04x98SCuX53Wyo8gA23NXNZlPV5/rG'),
(12, 'koperasi', '$2y$10$YxyOy6I.965etyhMiphxxeEqLb/BWys2wrioPPwPphP2EE1jsZ8X.'),
(13, 'admin55', '$2y$10$/klhxJ9f36bq5kyezZct5eQRZHuCnHOdRF0mlQV2/OUScSMb732Hu');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','member') NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$xTef0WFu1Z/SgWjzdwcwnu4J5xoBT3UAJSrPkZG06wO0WrOBYVlPy', 'admin'),
(2, 'member', '$2y$10$LkvpELIhyEPsvNbxrQ5OjOpLpUyPtcS89Hl99hbkVleP03saU9AEq', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biayamasuk`
--
ALTER TABLE `biayamasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simpanp`
--
ALTER TABLE `simpanp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biayamasuk`
--
ALTER TABLE `biayamasuk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ebooks`
--
ALTER TABLE `ebooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `simpanp`
--
ALTER TABLE `simpanp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ebooks`
--
ALTER TABLE `ebooks`
  ADD CONSTRAINT `ebooks_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
