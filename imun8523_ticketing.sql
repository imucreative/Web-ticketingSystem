-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 29 Jul 2019 pada 17.10
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imun8523_ticketing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtbcategory`
--

CREATE TABLE `dtbcategory` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `delete` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtbcategory`
--

INSERT INTO `dtbcategory` (`categoryId`, `name`, `delete`) VALUES
(1, 'BRIDGE COMPONENT', 0),
(2, 'CABLE TRAY', 0),
(3, 'PIPE ', 0),
(4, 'TOWER COMPONENT', 0),
(23, 'LIGHTING POLE', 0),
(24, 'WIREMESH', 0),
(25, 'TESA', 1),
(26, 'ASD', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtbinfo`
--

CREATE TABLE `dtbinfo` (
  `infoId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `alias` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `logo` text NOT NULL,
  `logoFull` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtbinfo`
--

INSERT INTO `dtbinfo` (`infoId`, `name`, `alias`, `address`, `telp`, `fax`, `email`, `logo`, `logoFull`) VALUES
(1, 'PT.  ZINKPOWER AUSTRINDO', 'ZPA', 'JL. PANCATAMA V KAV. 88 B DESA SUKATANI CIKANDE', '(0254) 402888', '(0254) 401788', 'Logistics.zpa@zinkpower.com', 'logo.png', 'logo-full.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtbstatususer`
--

CREATE TABLE `dtbstatususer` (
  `statusId` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `delete` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtbstatususer`
--

INSERT INTO `dtbstatususer` (`statusId`, `name`, `delete`) VALUES
(1, 'Administrator', 0),
(2, 'Scurity', 0),
(3, 'Customer', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtbusers`
--

CREATE TABLE `dtbusers` (
  `userId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1= aktif, 2= tidak aktif',
  `vendorId` int(11) NOT NULL,
  `delete` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtbusers`
--

INSERT INTO `dtbusers` (`userId`, `name`, `username`, `password`, `status`, `vendorId`, `delete`) VALUES
(1, 'Naira', 'naira', '21232f297a57a5a743894a0e4a801fc3', 1, 0, 0),
(2, 'AHMAD', 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12', 2, 0, 0),
(3, 'ABDURAHMAN', 'abdur', '3d8fb62c1e332770eaddbe4950b33c51', 3, 1, 0),
(4, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 0, 0),
(8, 'BUDI', 'budi', '00dfc53ee86af02e742515cdcf075ed3', 3, 4, 1),
(9, 'JOKO', 'joko', '9ba0009aa81e794e628a04b51eaf7d7f', 3, 5, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtbvendor`
--

CREATE TABLE `dtbvendor` (
  `vendorId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `fax` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `catalog` varchar(50) NOT NULL,
  `delete` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtbvendor`
--

INSERT INTO `dtbvendor` (`vendorId`, `categoryId`, `name`, `description`, `address`, `telp`, `fax`, `email`, `npwp`, `catalog`, `delete`) VALUES
(1, 1, 'PT PURA BARU TAMA', 'PERUSAHAAN JASA TECHNOLOGI', 'KUDUS', '-', '-', '-', '-', '-', 0),
(2, 1, 'PT XXXXZZZZ', 'DESKRIPSI XXXZZZZ', 'JL RAYA XXXZZZZ', '081919230000', '12312390000', 'XXX@GMAIL.COM00', '123.123.1000', '', 0),
(3, 24, 'Q', 'Q', 'Q', '123', '123', 'ASD@G', '123.12.323', '', 1),
(4, 1, 'PT P', 'P', 'P', '90', '90', 'P@HM.CO', '09909', '', 1),
(5, 4, 'PT ANGKASA', 'DESKRIPSI PT ANGKASA', 'JL RAYA', '123223424', '234234', 'ANGKASA@GMAIL.COM', '234234', '', 0),
(69, 4, 'QWE123', 'QWE123', 'QWE123', 'QWE123', 'QWE123', 'QWE123', '123QWE', '', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtrdelivery`
--

CREATE TABLE `dtrdelivery` (
  `deliveryId` int(11) NOT NULL,
  `vendorId` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `schedule` date NOT NULL,
  `policeNumber` varchar(45) NOT NULL,
  `nik` varchar(45) NOT NULL,
  `driver` varchar(45) NOT NULL,
  `dateIn` datetime DEFAULT NULL,
  `dateOut` datetime DEFAULT NULL,
  `datesys` date NOT NULL,
  `delete` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtrdelivery`
--

INSERT INTO `dtrdelivery` (`deliveryId`, `vendorId`, `description`, `schedule`, `policeNumber`, `nik`, `driver`, `dateIn`, `dateOut`, `datesys`, `delete`) VALUES
(1, 1, 'Antar Lift', '2019-07-28', 'B-2290-AF', '111231231231', 'Bpk Budi', '2019-07-30 03:10:10', '2019-07-30 06:10:10', '2019-07-26', 0),
(2, 4, 'TES', '2019-07-27', 'B-123-ASD', '123123123123', 'PAK BUDI', '2019-07-30 03:10:10', NULL, '2019-07-26', 0),
(3, 5, 'TES LAGI AJA', '2019-10-03', 'A-1231-AAA', '10000000000', 'BPK ANTO AJA', '2019-10-04 03:10:10', '2019-07-26 11:26:34', '2019-07-26', 0),
(4, 5, 'TES KIRIM BOX', '2019-07-31', 'A-3453-CV', '12313342342', 'PAK ANTO', '2019-07-26 11:54:21', NULL, '2019-07-27', 0),
(5, 5, 'KIRIM KOMPUTER 10 UNIT', '2019-07-31', 'A-3455-ASD', '345345345345', 'PAK YONO', NULL, NULL, '2019-07-27', 0),
(6, 5, 'TITIPAN MATERIAL 1 TON PLATE', '2019-07-31', 'A9088DE', '-', 'UBED', '2019-07-27 07:08:16', '2019-07-27 07:09:57', '2019-07-27', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dtbcategory`
--
ALTER TABLE `dtbcategory`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indeks untuk tabel `dtbinfo`
--
ALTER TABLE `dtbinfo`
  ADD PRIMARY KEY (`infoId`);

--
-- Indeks untuk tabel `dtbstatususer`
--
ALTER TABLE `dtbstatususer`
  ADD PRIMARY KEY (`statusId`);

--
-- Indeks untuk tabel `dtbusers`
--
ALTER TABLE `dtbusers`
  ADD PRIMARY KEY (`userId`);

--
-- Indeks untuk tabel `dtbvendor`
--
ALTER TABLE `dtbvendor`
  ADD PRIMARY KEY (`vendorId`);

--
-- Indeks untuk tabel `dtrdelivery`
--
ALTER TABLE `dtrdelivery`
  ADD PRIMARY KEY (`deliveryId`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dtbcategory`
--
ALTER TABLE `dtbcategory`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `dtbinfo`
--
ALTER TABLE `dtbinfo`
  MODIFY `infoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dtbstatususer`
--
ALTER TABLE `dtbstatususer`
  MODIFY `statusId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dtbusers`
--
ALTER TABLE `dtbusers`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `dtbvendor`
--
ALTER TABLE `dtbvendor`
  MODIFY `vendorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dtrdelivery`
--
ALTER TABLE `dtrdelivery`
  MODIFY `deliveryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
