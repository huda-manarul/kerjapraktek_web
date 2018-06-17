-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 12:02 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `nip` varchar(20) NOT NULL,
  `nama_dosen` varchar(30) NOT NULL,
  `sisa_kuota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`nip`, `nama_dosen`, `sisa_kuota`) VALUES
('0686.11.1997.125', 'NOOR AGENG SETIYANTO M.Kom', 4),
('0686.11.1998.170', 'DAURAT SINAGA M.Kom', 5),
('0686.11.2006.331', 'DR PULUNG NURTANTIO ANDONO S.T', 5),
('0686.11.2012.441', 'AISYATUL KARIMA S.Kom, MCS', 5),
('0686.20.2017.998', 'CHARISMA TUBAGUS SETYOBUDHI MT', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(30) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_berita` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id_berita`, `judul_berita`, `isi_berita`, `tanggal_berita`) VALUES
(4, 'Notice Me Senpai', '<p> Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai </P>', '2018-06-17 16:34:15'),
(5, 'Notice Me Senpai 1', '<p> Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai </p>', '2018-06-17 16:34:33'),
(6, 'berita 2', '<p>sketchi\r\n</p>', '2018-06-17 16:33:24'),
(7, 'Numbering', '<p>cek numbering</p>\r\n\r\n<ol>\r\n	<li>nomor 1</li>\r\n	<li>nomor 2</li>\r\n	<li>nomor 3</li>\r\n</ol>\r\n', '2018-06-17 17:16:15'),
(8, 'Notice Me Senpai 2', '<p> Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai Senpai </p>', '2018-06-17 16:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa_dosbing`
--

CREATE TABLE `tbl_mahasiswa_dosbing` (
  `nim` varchar(15) NOT NULL,
  `nip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa_dosbing`
--

INSERT INTO `tbl_mahasiswa_dosbing` (`nim`, `nip`) VALUES
('A11.2015.09277', '0686.11.1997.125');

--
-- Triggers `tbl_mahasiswa_dosbing`
--
DELIMITER $$
CREATE TRIGGER `kuota_dosen` AFTER INSERT ON `tbl_mahasiswa_dosbing` FOR EACH ROW BEGIN
 UPDATE tbl_dosen
 SET sisa_kuota = sisa_kuota - 1
 WHERE
 nip=NEW.nip;
 END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa_kp`
--

CREATE TABLE `tbl_mahasiswa_kp` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kegiatan` varchar(20) NOT NULL,
  `tempat_kp` varchar(50) NOT NULL,
  `alamat_tempat_kp` text NOT NULL,
  `penyelia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa_kp`
--

INSERT INTO `tbl_mahasiswa_kp` (`nim`, `nama`, `jenis_kegiatan`, `tempat_kp`, `alamat_tempat_kp`, `penyelia`) VALUES
('A11.2015.09073', 'Feby Tri Arwan', 'Pra-KP', 'BPJS Pemuda', 'Semarang Tengah', '-'),
('A11.2015.09277', 'Aldino Ivan Putra', 'KP', 'DKP Prov Jateng', 'Semarang Tengah', '-'),
('A11.2015.09279', 'Manarul Huda', 'KP', 'DKP Prov Jateng', 'Semarang Tengah', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa_sidang`
--

CREATE TABLE `tbl_mahasiswa_sidang` (
  `no` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `judul_kp` text NOT NULL,
  `surat_magang` varchar(30) NOT NULL,
  `lembar_pengesahan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa_sidang`
--

INSERT INTO `tbl_mahasiswa_sidang` (`no`, `nim`, `judul_kp`, `surat_magang`, `lembar_pengesahan`) VALUES
(5, 'A11.2015.09277', 'judul 1', 'PaperPlane2.png', 'PaperPlane3.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_session`
--

CREATE TABLE `tbl_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_session`
--

INSERT INTO `tbl_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('asr58e8ftuqb49p8f96nkf6gcdeq64sa', '::1', 1529261153, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393236313135333b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('ihtd6ja8704s2rol9ll6nugrj291bo1j', '::1', 1529264480, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393236343438303b),
('pvbd75e6pmpfiiq7t304ul1o3e4tu85b', '::1', 1529264886, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393236343838363b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('7jaq5vsf2gucvsju07q9fhsecm3h41je', '::1', 1529265300, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393236353330303b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('t0nimm98u7bsrijja5u5hf68stqvlc53', '::1', 1529266016, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393236363031363b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('af84ef7d35bdmh18n4fclkaguf4ua0i4', '::1', 1529266755, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393236363735353b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('c0ln4r6ne24lqqi7c6tqmoqmbb5fj60h', '::1', 1529267414, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393236373431343b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('pm9rejbpe40m502uhlgj54le11v492nl', '::1', 1529267790, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393236373739303b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('lv1tdqg9i0qrk1opir950mh0jchog0vh', '::1', 1529268603, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393236383630333b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('al5kikmtk29jo7cr94t37bpdnrf7a02k', '::1', 1529268913, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393236383931333b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('bvqulfl4jd9clqaihi42mm26tm5ot0bv', '::1', 1529269571, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393236393537313b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('0reb70colrr2icrnce2k343b5oomthng', '::1', 1529270170, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393237303137303b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('3pdnop8iufbtcbchr7fnn1f58rihpl2f', '::1', 1529270495, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393237303439353b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('pv95nrnaednhtjugm0i40fc0gd6gjhav', '::1', 1529272907, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393237323930373b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b),
('th85v4g5a7f54jr807hbgqror00ept1e', '::1', 1529272910, 0x5f5f63695f6c6173745f726567656e65726174657c693a313532393237323930373b757365725f69647c733a313a2234223b757365725f6e616d657c733a31343a224131312e323031352e3039303733223b757365725f706173737c733a313a2261223b757365725f6e616d617c733a31343a22466562792054726920417277616e223b6c6576656c7c733a313a2231223b);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(150) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `nama_user`, `username`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'a', 0, '2017-02-21 04:14:16', '2017-03-06 13:42:37'),
(4, 'Feby Tri Arwan', 'A11.2015.09073', 'a', 1, '2017-02-21 04:14:16', '2017-03-06 13:42:37'),
(5, 'Manarul Huda', 'A11.2015.09279', 'a', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Aldino Ivan', 'A11.2015.09277', 'a', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tbl_mahasiswa_dosbing`
--
ALTER TABLE `tbl_mahasiswa_dosbing`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_mahasiswa_kp`
--
ALTER TABLE `tbl_mahasiswa_kp`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_mahasiswa_sidang`
--
ALTER TABLE `tbl_mahasiswa_sidang`
  ADD PRIMARY KEY (`no`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_mahasiswa_sidang`
--
ALTER TABLE `tbl_mahasiswa_sidang`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
