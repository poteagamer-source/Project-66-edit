-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 03:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `ID_User` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `userrole` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`ID_User`, `username`, `pass`, `userrole`) VALUES
(1, 'g1@gmail.com', 'test2', ''),
(4, '24234@gmail.com', '138912312', ''),
(5, 'test', 'test', ''),
(6, 'test@test.com', 'test', ''),
(7, 'test1', 'test1', ''),
(8, 't', '1', ''),
(9, 'r', '2', ''),
(10, '1', '2', ''),
(11, 't2', '3', ''),
(13, 't23', 't', ''),
(14, 't243', '5', ''),
(16, 'gk', 'g', ''),
(17, 'tada', '1', ''),
(19, 'dadada5', '2', ''),
(20, 'fdaff', '2', ''),
(21, 'ttt', '2', ''),
(22, 'test2', 'test2', ''),
(23, 'test3', 'test3', ''),
(24, 'test23x', '1', ''),
(25, 'z', 'z', ''),
(26, 'c', 'c', ''),
(27, 'xv', 'v', ''),
(28, 'b', 'b', ''),
(29, 'n', '7b8b965ad4bca0e41ab51de7b31363', ''),
(30, 'zn', '7b8b965ad4bca0e41ab51de7b31363', ''),
(31, 'Admin', '1234', 'admin'),
(32, 'member1', 'c4ca4238a0b923820dcc509a6f7584', 'member'),
(33, 'member2', 'c4ca4238a0b923820dcc509a6f7584', 'member'),
(34, 'Natthanan', 'e10adc3949ba59abbe56e057f20f88', 'member'),
(35, 'reg', 'c4ca4238a0b923820dcc509a6f7584', 'member'),
(36, 'vvv', '4786f3282f04de5b5c7317c490c6d9', 'member'),
(37, 'cc', 'e0323a9039add2978bf5b49550572c', 'member'),
(38, 'realrealreal', '$2y$10$qauFTzOAgDRLLWfkivtYau8', 'member'),
(39, 't1', '$2y$10$ZP1p4OpdZlUHguI8DWnw.Og', 'member'),
(40, 'A1', '$2y$10$Gs2oC4WDtP5YgdG3k2sPy.F', 'member'),
(41, 'b1', '$2y$10$MKJTlnpSo2VxicE6qvjVaen', 'member'),
(42, 'new1', '$2y$10$m3V8uimdYFLflxZBmbClFu5', 'member'),
(43, 'new2', '$2y$10$sMPEKYSMtMgjKMQx6NaR3uX', 'member'),
(44, 'new3', '$2y$10$kiqPIFCkPUpQyWK4BMlSX.8', 'member'),
(45, 'new4', '$2y$10$2P6Or/yoGzIf4lTKi24SgeM', 'member'),
(46, 'new5', '$2y$10$4WhCmhl7UzGEYshq0kTfsOF', 'member'),
(47, 'new6', '$2y$10$AGi8UE8UPpD/b7gNhWT1l.A', 'member'),
(48, 'new7', '$2y$10$t5cx6AYZs7mrQkD6JkMdjuR', 'member'),
(49, 'new11', '$2y$10$kRaKwGp46gAo1LN9QLH1kuF', 'member'),
(50, 'new111', '$2y$10$w5NPYdYwPgyxuY6a0/pE/eN', 'member'),
(51, 'a123', '$2y$10$So/O6XtRDXPYxMkV3asjpOU', 'member'),
(52, 'b11', '$2y$10$IMGpUEJpaQFahAvrISoeqeC', 'member'),
(53, 'n2', '$2y$10$IPe1KjepfvElksEuT8UmUOV', 'member'),
(54, 'z1', '$2y$10$bekjJrYh9ViiRdtiZvQ4h.r', 'member'),
(55, 'test23', '$2y$10$WqIoW6i.dk15aKEsIzS7..2', 'member'),
(56, 'name1', '$2y$10$aJCaHgLLKRxY47aEjNVV8.v', 'member'),
(57, 'l1', '$2y$10$NTjBZjpN7uk/U8Nox1XVBek', 'member'),
(58, 'old1', '$2y$10$cluD7/LNG.mfYNuyVY3x6e1', 'member'),
(59, 'old22', '$2y$10$yRRWMvjIo/0tSAbygUC96.a', 'member'),
(60, 'old23', '$2y$10$rH9jw1hvI1dKKtHvYjuNten', 'member'),
(61, '1234', '$2y$10$tH3DQFPT79WwBaaI9UOLXum', 'member'),
(62, 'reg1', '$2y$10$W7U1zkAM0dBkKEE4u8IkDeK', 'member'),
(63, 'testtest1', '$2y$10$nNIfzMSzwf1mEf1mURtbXej', 'member'),
(64, 'LOL', '$2y$10$w4TWkE.2Nv/3TkHahEUh0Om', 'member'),
(65, 'LLL', '$2y$10$5D0y6ZN0Fh51WS/cDAwMLu4', 'member'),
(66, 'LL1', '$2y$10$ZjN7x5UC/BuT7SlvhGMsc.k', 'member'),
(67, 'Login1', '$2y$10$ebXg4Gh7EFRCWGwUe4wEveo', 'member'),
(68, 'nine', '$2y$10$Ucic0sYAm/6XTAwHp.GZ4.C', 'member'),
(69, 'now1', '$2y$10$K.yJAQFqmWQvGjOngLl4TOP', 'member'),
(70, 'golfza123', '$2y$10$jIPsxAnUOmkuHX.ooNffxuZ', 'member'),
(71, 'golf123', '$2y$10$bbhrd4lndLJDIvVxWHcaJeI', 'member'),
(72, 'to1', '$2y$10$P/EbNHgx2LBznNFlsYWvbeO', 'member'),
(73, 'toto1', '$2y$10$gUAvAHNqE487yP9XdnkZWOv', 'member'),
(74, 'golf2', '$2y$10$PQN0k4vycyFEA17r0bgdrO6', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`ID_User`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
