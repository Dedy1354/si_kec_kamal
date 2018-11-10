-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 28, 2018 at 12:56 PM
-- Server version: 5.5.47-MariaDB-1ubuntu0.14.04.1
-- PHP Version: 5.6.30-10+deb.sury.org~trusty+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kamal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_about`
--

CREATE TABLE `admin_about` (
  `no` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_akte`
--

CREATE TABLE `admin_akte` (
  `no` int(11) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `tgl` date NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `alamat` longtext NOT NULL,
  `nama_anak` varchar(30) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan_ortu` varchar(30) NOT NULL,
  `anak_ke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_akte`
--

INSERT IGNORE INTO `admin_akte` (`no`, `nik`, `tgl`, `nama_ayah`, `nama_ibu`, `alamat`, `nama_anak`, `tempat_lahir`, `tgl_lahir`, `pekerjaan_ortu`, `anak_ke`) VALUES(1, '112', '2018-03-16', 'y', 'h', 'j', 'k', 'l2', '2018-03-15', 'k', 10);
INSERT IGNORE INTO `admin_akte` (`no`, `nik`, `tgl`, `nama_ayah`, `nama_ibu`, `alamat`, `nama_anak`, `tempat_lahir`, `tgl_lahir`, `pekerjaan_ortu`, `anak_ke`) VALUES(2, '112', '2018-04-05', 'q', 'q', 'q', 'q', 'q', '2018-04-27', 'q', 5);
INSERT IGNORE INTO `admin_akte` (`no`, `nik`, `tgl`, `nama_ayah`, `nama_ibu`, `alamat`, `nama_anak`, `tempat_lahir`, `tgl_lahir`, `pekerjaan_ortu`, `anak_ke`) VALUES(3, '112', '2018-04-05', 'Inun', 'Ina', 'Jalan Batuan', 'Inung yang terganteng', 'Batuan', '2018-04-13', 'Pria Berdasi', 12);

-- --------------------------------------------------------

--
-- Table structure for table `admin_desa`
--

CREATE TABLE `admin_desa` (
  `no` int(11) NOT NULL,
  `desa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_desa`
--

INSERT IGNORE INTO `admin_desa` (`no`, `desa`) VALUES(1, 'Banyuajuh');
INSERT IGNORE INTO `admin_desa` (`no`, `desa`) VALUES(2, 'Gili anyar');
INSERT IGNORE INTO `admin_desa` (`no`, `desa`) VALUES(5, 'Gili Barat');
INSERT IGNORE INTO `admin_desa` (`no`, `desa`) VALUES(6, 'Gili timur');
INSERT IGNORE INTO `admin_desa` (`no`, `desa`) VALUES(7, 'Kamal');
INSERT IGNORE INTO `admin_desa` (`no`, `desa`) VALUES(8, 'Kebun');
INSERT IGNORE INTO `admin_desa` (`no`, `desa`) VALUES(13, 'Pendabah');
INSERT IGNORE INTO `admin_desa` (`no`, `desa`) VALUES(14, 'Tajungan');
INSERT IGNORE INTO `admin_desa` (`no`, `desa`) VALUES(15, 'Tanjung jati');
INSERT IGNORE INTO `admin_desa` (`no`, `desa`) VALUES(16, 'Telang');

-- --------------------------------------------------------

--
-- Table structure for table `admin_dps`
--

CREATE TABLE `admin_dps` (
  `no` int(11) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `desa` varchar(40) NOT NULL,
  `awal_l` int(11) DEFAULT NULL,
  `awal_p` int(11) DEFAULT NULL,
  `lahir_l` int(11) DEFAULT NULL,
  `lahir_p` int(11) DEFAULT NULL,
  `mati_l` int(11) DEFAULT NULL,
  `mati_p` int(11) DEFAULT NULL,
  `datang_l` int(11) DEFAULT NULL,
  `datang_p` int(11) DEFAULT NULL,
  `pergi_l` int(11) DEFAULT NULL,
  `pergi_p` int(11) DEFAULT NULL,
  `jumlah_l` int(11) DEFAULT NULL,
  `jumlah_p` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_dps`
--

INSERT IGNORE INTO `admin_dps` (`no`, `bulan`, `tahun`, `desa`, `awal_l`, `awal_p`, `lahir_l`, `lahir_p`, `mati_l`, `mati_p`, `datang_l`, `datang_p`, `pergi_l`, `pergi_p`, `jumlah_l`, `jumlah_p`, `total`) VALUES(20, 'Januari', '', 'banyuajuh', 45, 69, 2, 1, 1, 1, 2, 1, 0, 2, 48, 68, 116);

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `no` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` longtext,
  `foto` varchar(150) DEFAULT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT IGNORE INTO `admin_info` (`no`, `judul`, `isi`, `foto`, `tanggal`) VALUES(10, 'Cek', 'aksaslasalkjllllllllllllllllllll', '36.jpg', '2018-04-28 12:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `admin_kpd`
--

CREATE TABLE `admin_kpd` (
  `no` int(11) NOT NULL,
  `desa` varchar(40) NOT NULL,
  `laki` int(11) NOT NULL,
  `perempuan` int(11) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `tahun` year(4) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_ksk`
--

CREATE TABLE `admin_ksk` (
  `no` int(11) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `pemohon` varchar(30) NOT NULL,
  `alamat_desa` varchar(30) NOT NULL,
  `nama_ksk` varchar(30) NOT NULL,
  `alamat_lengkap` varchar(100) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_ksk`
--

INSERT IGNORE INTO `admin_ksk` (`no`, `nik`, `pemohon`, `alamat_desa`, `nama_ksk`, `alamat_lengkap`, `tgl`) VALUES(3, '112', 'Inun', '1', 'Rizal2', 'dfkjsdkj', '2018-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `admin_ktp`
--

CREATE TABLE `admin_ktp` (
  `no` int(11) NOT NULL,
  `tgl` date DEFAULT NULL,
  `pemohon` varchar(30) DEFAULT NULL,
  `desa` varchar(30) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `ket` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_ktp`
--

INSERT IGNORE INTO `admin_ktp` (`no`, `tgl`, `pemohon`, `desa`, `nama`, `nik`, `alamat`, `tempat_lahir`, `tgl_lahir`, `status`, `ket`) VALUES(7, '2018-03-27', 'Inun', '7', 'Rizal', '112', 'kfdjks', 'sumenepe', '2018-03-09', 'jh', '888');
INSERT IGNORE INTO `admin_ktp` (`no`, `tgl`, `pemohon`, `desa`, `nama`, `nik`, `alamat`, `tempat_lahir`, `tgl_lahir`, `status`, `ket`) VALUES(9, '2018-03-17', 'Inun2', '2', 'Rizal', '111', 'j', 'iui', '2018-03-23', 'jh', 'jl');

-- --------------------------------------------------------

--
-- Table structure for table `admin_sp`
--

CREATE TABLE `admin_sp` (
  `no` int(11) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` longtext NOT NULL,
  `no_pengantar` varchar(30) NOT NULL,
  `jumlah_pengikut` int(11) NOT NULL,
  `alamat_pindah` longtext NOT NULL,
  `alasan_pindah` longtext NOT NULL,
  `tgl_pindah` date NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_sp`
--

INSERT IGNORE INTO `admin_sp` (`no`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_pengantar`, `jumlah_pengikut`, `alamat_pindah`, `alasan_pindah`, `tgl_pindah`, `foto`) VALUES(14, '112', 'Inun', 'Pamekasan', '2018-04-25', 'Jalan Batuan', '123', 1, 'Jalan Kayangan', 'Bosan', '2018-04-26', '76.jpg');
INSERT IGNORE INTO `admin_sp` (`no`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_pengantar`, `jumlah_pengikut`, `alamat_pindah`, `alasan_pindah`, `tgl_pindah`, `foto`) VALUES(15, '112', 'jh', 'd', '2018-04-10', 'Jalan Pujangga No. 7A', 'ujj', 1, '3', '4', '2018-04-13', '36.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nik` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT IGNORE INTO `user` (`nik`, `username`, `password`, `status`) VALUES('111', '111', 'user', 'User');
INSERT IGNORE INTO `user` (`nik`, `username`, `password`, `status`) VALUES('112', '112', 'user', 'User');
INSERT IGNORE INTO `user` (`nik`, `username`, `password`, `status`) VALUES('122', '1220', 'kepala', 'Kepala');
INSERT IGNORE INTO `user` (`nik`, `username`, `password`, `status`) VALUES('123', 'wew', '123456', 'User');
INSERT IGNORE INTO `user` (`nik`, `username`, `password`, `status`) VALUES('1234567', '1111', 'pamaloppa', 'User');
INSERT IGNORE INTO `user` (`nik`, `username`, `password`, `status`) VALUES('admin', 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_ktp`
-- (See below for the actual view)
--
CREATE TABLE `user_ktp` (
`no` int(11)
,`tgl` date
,`pemohon` varchar(30)
,`desa` varchar(30)
,`nama` varchar(30)
,`nik` varchar(30)
,`alamat` varchar(100)
,`tempat_lahir` varchar(50)
,`tgl_lahir` date
,`status` varchar(30)
,`ket` longtext
,`nama_desa` varchar(40)
);

-- --------------------------------------------------------

--
-- Structure for view `user_ktp`
--
DROP TABLE IF EXISTS `user_ktp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_ktp`  AS  select `a`.`no` AS `no`,`a`.`tgl` AS `tgl`,`a`.`pemohon` AS `pemohon`,`a`.`desa` AS `desa`,`a`.`nama` AS `nama`,`a`.`nik` AS `nik`,`a`.`alamat` AS `alamat`,`a`.`tempat_lahir` AS `tempat_lahir`,`a`.`tgl_lahir` AS `tgl_lahir`,`a`.`status` AS `status`,`a`.`ket` AS `ket`,`b`.`desa` AS `nama_desa` from (`admin_ktp` `a` join `admin_desa` `b` on((`a`.`desa` = `b`.`no`))) order by `a`.`pemohon` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_about`
--
ALTER TABLE `admin_about`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `admin_akte`
--
ALTER TABLE `admin_akte`
  ADD PRIMARY KEY (`no`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `admin_desa`
--
ALTER TABLE `admin_desa`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `admin_dps`
--
ALTER TABLE `admin_dps`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `admin_kpd`
--
ALTER TABLE `admin_kpd`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `admin_ksk`
--
ALTER TABLE `admin_ksk`
  ADD PRIMARY KEY (`no`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `admin_ktp`
--
ALTER TABLE `admin_ktp`
  ADD PRIMARY KEY (`no`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `admin_sp`
--
ALTER TABLE `admin_sp`
  ADD PRIMARY KEY (`no`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_about`
--
ALTER TABLE `admin_about`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_akte`
--
ALTER TABLE `admin_akte`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_desa`
--
ALTER TABLE `admin_desa`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `admin_dps`
--
ALTER TABLE `admin_dps`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `admin_kpd`
--
ALTER TABLE `admin_kpd`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_ksk`
--
ALTER TABLE `admin_ksk`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_ktp`
--
ALTER TABLE `admin_ktp`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `admin_sp`
--
ALTER TABLE `admin_sp`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_akte`
--
ALTER TABLE `admin_akte`
  ADD CONSTRAINT `admin_akte_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin_ksk`
--
ALTER TABLE `admin_ksk`
  ADD CONSTRAINT `admin_ksk_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin_ktp`
--
ALTER TABLE `admin_ktp`
  ADD CONSTRAINT `admin_ktp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `admin_sp`
--
ALTER TABLE `admin_sp`
  ADD CONSTRAINT `admin_sp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
