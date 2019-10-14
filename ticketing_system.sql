-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 14 Okt 2019 pada 04.16
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketing_system`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtbcategory`
--

CREATE TABLE `dtbcategory` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `delete` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtbcategory`
--

INSERT INTO `dtbcategory` (`categoryId`, `name`, `delete`) VALUES
(1, 'PIPING', 0),
(2, 'ELECTRICAL', 0),
(3, 'CIVIL', 0),
(4, 'TOOLS', 0),
(23, 'SEWA EQUIPMENT', 0),
(24, 'AUTOMOTIVE', 1),
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
(1, 'TICKETING SYSTEM', 'TSY', 'JL. RAYA INDONESIA', '(62-21)888332', '(62-21)885', 'budi@gmail.com', 'logo.png', 'logo-full.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtbstatususer`
--

CREATE TABLE `dtbstatususer` (
  `statusId` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `delete` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtbstatususer`
--

INSERT INTO `dtbstatususer` (`statusId`, `name`, `delete`) VALUES
(1, 'Administrator', 0),
(2, 'Scurity', 0),
(3, 'Vendor', 0);

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
  `delete` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtbusers`
--

INSERT INTO `dtbusers` (`userId`, `name`, `username`, `password`, `status`, `vendorId`, `delete`) VALUES
(1, 'Naira', 'naira', '21232f297a57a5a743894a0e4a801fc3', 1, 0, 0),
(2, 'AHMAD', 'ahmad', '61243c7b9a4022cb3f8dc3106767ed12', 2, 0, 0),
(3, 'ABDURAHMAN', 'abdur', '3d8fb62c1e332770eaddbe4950b33c51', 3, 1, 0),
(8, 'BUDI', 'budi', '00dfc53ee86af02e742515cdcf075ed3', 3, 4, 0),
(9, 'JOKO', 'joko', '9ba0009aa81e794e628a04b51eaf7d7f', 3, 5, 0),
(10, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 0, 0),
(11, 'QWE', 'qwe', '76d80224611fc919a5d54f0ff9fba446', 3, 6, 0),
(12, 'ASD', 'asd', '7815696ecbf1c96e6894b779456d330e', 2, 0, 0),
(13, 'QWE', 'qwe', '76d80224611fc919a5d54f0ff9fba446', 3, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtbvehicle`
--

CREATE TABLE `dtbvehicle` (
  `vehicleId` int(11) NOT NULL,
  `vendorid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `chasis` varchar(45) NOT NULL,
  `engine` varchar(45) NOT NULL,
  `policeNumber` varchar(45) NOT NULL,
  `delete` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtbvehicle`
--

INSERT INTO `dtbvehicle` (`vehicleId`, `vendorid`, `name`, `type`, `chasis`, `engine`, `policeNumber`, `delete`) VALUES
(1, 5, 'MOTOR', 'HONDA VARIO', 'MHXASD876ASD', '76ASD76', 'B-1010-ASD', 0),
(2, 5, 'MOTOR', 'HONDA BEAT', 'A0SD98A0S9D8A', 'A0S9D8A', 'A-3456-DFG', 0),
(3, 3, 'MOTOR', 'VARIO TECHNO', '9S8D7FS9D8F7', 'S9D8F7SDF98', 'B-345-GD', 0),
(4, 4, 'MOBIL', 'INOVA', 'SDF987SDF98987SDF', 'S9D8F7SFSD987', 'B-2345-SDF', 0),
(5, 5, 'MOBIL', 'INOVA', 'ASD987A9SD7ASD', 'A9SD8A79', 'B-345-FD', 0),
(6, 5, 'Q', 'Q', 'Q', 'Q', 'Q', 1);

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
  `delete` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtbvendor`
--

INSERT INTO `dtbvendor` (`vendorId`, `categoryId`, `name`, `description`, `address`, `telp`, `fax`, `email`, `npwp`, `catalog`, `delete`) VALUES
(1, 1, 'PT Excis', 'Perusahaan jasa technologi', '-', '-', '-', '-', '-', '-', 0),
(2, 1, 'PT XXXXZZZZ', 'DESKRIPSI XXXZZZZ', 'JL RAYA XXXZZZZ', '081919230000', '12312390000', 'XXX@GMAIL.COM00', '123.123.1000', '', 0),
(3, 24, 'Q', 'Q', 'Q', '123', '123', 'ASD@G', '123.12.323', '', 0),
(4, 1, 'PT P', 'P', 'P', '90', '90', 'P@HM.CO', '09909', '', 0),
(5, 4, 'PT ANGKASA', 'DESKRIPSI PT ANGKASA', 'JL RAYA', '123223424', '234234', 'ANGKASA@GMAIL.COM', '234234', '', 0),
(6, 23, 'QWE', 'QWE', 'QWE', '123', '123', 'QWE@QWE', '123', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtrdelivery`
--

CREATE TABLE `dtrdelivery` (
  `deliveryId` int(11) NOT NULL,
  `vendorId` int(11) NOT NULL,
  `vehicleId` varchar(45) NOT NULL,
  `description` varchar(100) NOT NULL,
  `schedule` date NOT NULL,
  `nik` varchar(45) NOT NULL,
  `driver` varchar(45) NOT NULL,
  `dateIn` datetime DEFAULT NULL,
  `dateOut` datetime DEFAULT NULL,
  `datesys` date NOT NULL,
  `delete` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtrdelivery`
--

INSERT INTO `dtrdelivery` (`deliveryId`, `vendorId`, `vehicleId`, `description`, `schedule`, `nik`, `driver`, `dateIn`, `dateOut`, `datesys`, `delete`) VALUES
(1, 1, '1', 'Antar Lift', '2019-07-28', '111231231231', 'Bpk Budi', '2019-07-30 03:10:10', '2019-07-30 06:10:10', '2019-07-26', 0),
(2, 4, '1', 'TES', '2019-07-27', '123123123123', 'PAK BUDI', '2019-07-30 03:10:10', NULL, '2019-07-26', 0),
(3, 5, '1', 'TES LAGI AJA', '2019-10-03', '10000000000', 'BPK ANTO AJA', '2019-10-04 03:10:10', '2019-07-26 11:26:34', '2019-07-26', 0),
(4, 5, '2', 'TES KIRIM BOX', '2019-07-31', '12313342342', 'PAK ANTO', '2019-07-26 11:54:21', NULL, '2019-07-27', 0),
(5, 5, '5', 'KIRIM KOMPUTER 10 UNIT', '2019-07-31', '345345345345', 'PAK YONO', NULL, NULL, '2019-07-27', 0),
(6, 5, '1', 'ASD', '2019-08-14', '1231312312123', 'PAKP BUDIII', NULL, NULL, '2019-08-02', 0),
(7, 5, '1', 'KIRIM PAKET BOX', '2019-08-10', '1203981293123', 'BPK DODO', NULL, NULL, '2019-08-03', 0),
(8, 5, '2', 'TESR', '2019-08-17', '3453453453534', ' PAK DODI', NULL, NULL, '2019-08-03', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dtrvisitor`
--

CREATE TABLE `dtrvisitor` (
  `visitorId` int(11) NOT NULL,
  `nip` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `policeNumber` varchar(45) NOT NULL,
  `type` varchar(45) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `dateIn` datetime NOT NULL,
  `dateOutKode` int(1) NOT NULL,
  `dateOut` datetime NOT NULL,
  `datesys` datetime NOT NULL,
  `del` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dtrvisitor`
--

INSERT INTO `dtrvisitor` (`visitorId`, `nip`, `name`, `policeNumber`, `type`, `keperluan`, `tujuan`, `dateIn`, `dateOutKode`, `dateOut`, `datesys`, `del`) VALUES
(1, '112120012', 'budi', 'B-1290-MN', 'Honda Vario', 'anter makanan', 'pak anto', '2019-10-03 18:32:21', 1, '2019-10-03 19:32:21', '2019-10-03 18:32:21', 0),
(2, '3', '3', '3', '3', '3', '3', '2019-10-03 17:00:58', 1, '2019-10-04 17:01:19', '2019-10-03 17:00:58', 0),
(3, '45', '5', '5', '5', '5', '5', '2019-10-04 16:57:50', 0, '0000-00-00 00:00:00', '2019-10-04 16:57:50', 1),
(4, '098', '55', '5', '5', '5', '5', '2019-10-05 01:31:22', 0, '0000-00-00 00:00:00', '2019-10-05 01:31:22', 0),
(5, '098', '098', '098', '098', '098', '098', '2019-10-05 06:43:45', 0, '0000-00-00 00:00:00', '2019-10-05 06:43:45', 0);

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
-- Indeks untuk tabel `dtbvehicle`
--
ALTER TABLE `dtbvehicle`
  ADD PRIMARY KEY (`vehicleId`);

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
-- Indeks untuk tabel `dtrvisitor`
--
ALTER TABLE `dtrvisitor`
  ADD PRIMARY KEY (`visitorId`);

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
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `dtbvehicle`
--
ALTER TABLE `dtbvehicle`
  MODIFY `vehicleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dtbvendor`
--
ALTER TABLE `dtbvendor`
  MODIFY `vendorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dtrdelivery`
--
ALTER TABLE `dtrdelivery`
  MODIFY `deliveryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `dtrvisitor`
--
ALTER TABLE `dtrvisitor`
  MODIFY `visitorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
