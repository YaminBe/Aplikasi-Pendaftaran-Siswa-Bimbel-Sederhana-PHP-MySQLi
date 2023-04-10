-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 04:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_b4k`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id_register` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `tempat` varchar(60) NOT NULL,
  `tgl` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `ortu` varchar(60) NOT NULL,
  `asal_skl` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `hp` int(15) NOT NULL,
  `alamat` text NOT NULL,
  `info_b4k` text NOT NULL,
  `program` varchar(60) NOT NULL,
  `note` text NOT NULL,
  `session` varchar(50) NOT NULL,
  `jml_byr` int(11) NOT NULL,
  `paid` varchar(50) NOT NULL,
  `tgl_dftr` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id_register`, `name`, `tempat`, `tgl`, `gender`, `ortu`, `asal_skl`, `email`, `hp`, `alamat`, `info_b4k`, `program`, `note`, `session`, `jml_byr`, `paid`, `tgl_dftr`, `status`, `foto`) VALUES
(1, 'Abdul Yamin', 'Sibak', '2018-08-03', 'Male', 'Abduh', 'SMP', 'yamin@gmail.com', 987987, 'Bukittinggi', 'Instagram', 'Preschool', 'Alah bayia', 'Persession', 89000, 'Cash', '2018-08-03', 'Active', 'userk.png'),
(2, 'Poppy Yendriani', 'Jakarta', '1993-01-01', 'Female', 'Yendriansyah', 'SDIT Bukittinggi', 'cam.madarek@gmail.com', 822145555, 'Bukittinggi', 'Instagram', 'Preschool', 'Cash', '12 Session', 12000000, 'Cash', '2018-08-11', 'Active', 'userk.png'),
(3, 'Galih', 'Lebanon', '2018-08-13', 'Male', 'Ginanjar', '675', 'galih@gmail.com', 822143435, 'Palestina', 'Instagram', 'Preschool', 'rwt', 'Persession', 9900, 'Cash', '2018-08-13', 'Non', 'userk.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `level` varchar(20) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `level`, `aktif`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'YaminBae', 'Administrator', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
