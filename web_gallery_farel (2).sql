-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2025 at 03:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2028_gallery_farel`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `AlbumID` int(11) NOT NULL,
  `NamaAlbum` varchar(255) NOT NULL,
  `Deskripsi` text NOT NULL,
  `TanggalDibuat` date NOT NULL,
  `UserID` int(11) NOT NULL,
  `Konfirmasi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`AlbumID`, `NamaAlbum`, `Deskripsi`, `TanggalDibuat`, `UserID`, `Konfirmasi`) VALUES
(6, 'GFQVW3TWQ', '2tfweaztwgfqaew', '0000-00-00', 12, 2),
(7, 'edfcwf', '3e2wwfq32w', '2025-02-20', 13, 2),
(8, 'edfcwf', '3e2wwfq32w', '2025-02-19', 13, 2);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `FotoID` int(11) NOT NULL,
  `JudulFoto` varchar(255) NOT NULL,
  `DeskripsiFoto` text NOT NULL,
  `TanggalUnggah` date NOT NULL,
  `LokasiFile` varchar(255) NOT NULL,
  `AlbumID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Konfirmasi` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`FotoID`, `JudulFoto`, `DeskripsiFoto`, `TanggalUnggah`, `LokasiFile`, `AlbumID`, `UserID`, `Konfirmasi`) VALUES
(10, 'dwx', 'dwadx', '2025-02-22', '955860695_Screenshot 2025-02-03 132622.png', 6, 12, 0),
(18, 'gtzsdestge', 'tgwestsv', '2025-02-05', 'fqewqrf.jpg', 7, 11, 0),
(21, 'dwx', 'dwadx', '2025-02-15', '797443177_Screenshot 2025-02-03 132622.png', 7, 13, 0),
(23, 'beautiful', 'lemme', '2025-02-27', '223358186_b2579b06-f457-4398-9ddc-f5113f2099df.jpg', 8, 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `komentarfoto`
--

CREATE TABLE `komentarfoto` (
  `KomentarID` int(11) NOT NULL,
  `FotoID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `IsiKomentar` text NOT NULL,
  `TanggalKomentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentarfoto`
--

INSERT INTO `komentarfoto` (`KomentarID`, `FotoID`, `UserID`, `IsiKomentar`, `TanggalKomentar`) VALUES
(2, 10, 13, 'fww4ge42', '2025-02-04'),
(3, 10, 13, 'walawe', '2025-02-04'),
(4, 10, 13, 'fww4ge42', '2025-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `likefoto`
--

CREATE TABLE `likefoto` (
  `LikeID` int(11) NOT NULL,
  `FotoID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `TanggalLike` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likefoto`
--

INSERT INTO `likefoto` (`LikeID`, `FotoID`, `UserID`, `TanggalLike`) VALUES
(6, 10, 13, '2025-02-05'),
(7, 18, 13, '2025-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `NamaLengkap` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `Level` enum('pengguna','admin','','') NOT NULL,
  `Konfirmasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `NamaLengkap`, `Username`, `Password`, `Email`, `Alamat`, `Level`, `Konfirmasi`) VALUES
(12, 'godvlan', 'godvlan', 'godvlan', 'asdw', 'asdw', 'admin', 2),
(13, 'farel', 'farel', '5579a2166b5fc9c4185975045fc2fc35', 'farel@gmail', 'bndg', 'pengguna', 2),
(15, 'cdefe', 'yahudi', 'be203ca693a4d3cd9511ded345f01032', 'israelmusnah@gmail.com', 'yerrusalem', 'admin', 2),
(16, 'islam', 'muslim', '1acced5854e1416b571c4b7fbd474fef', 'Allahuakbar@gmail.com', 'bandung', 'admin', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`AlbumID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`FotoID`),
  ADD KEY `AlbumID` (`AlbumID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD PRIMARY KEY (`KomentarID`),
  ADD KEY `FotoID` (`FotoID`),
  ADD KEY `UserId` (`UserID`);

--
-- Indexes for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD PRIMARY KEY (`LikeID`),
  ADD KEY `FotoID` (`FotoID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `AlbumID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `FotoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  MODIFY `KomentarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `likefoto`
--
ALTER TABLE `likefoto`
  MODIFY `LikeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`AlbumID`) REFERENCES `album` (`AlbumID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD CONSTRAINT `komentarfoto_ibfk_1` FOREIGN KEY (`FotoID`) REFERENCES `foto` (`FotoID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentarfoto_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `foto` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD CONSTRAINT `likefoto_ibfk_1` FOREIGN KEY (`FotoID`) REFERENCES `foto` (`FotoID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likefoto_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
