-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 02, 2019 at 02:25 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `idproduct` int(11) NOT NULL,
  `nameproduct` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`idproduct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idproduct`, `nameproduct`, `price`, `image`) VALUES
(1, 'Máy lọc nước Kangaroo Hydrogen KG100HC vỏ tủ VTU', 250, '../images/sanpham1_1.jpg'),
(2, 'Máy lọc nước Kangaroo Hydrogen KG100HG không vỏ', 300, '../images/sanpham1_2.jpg'),
(3, 'Máy lọc nước Kangaroo Hydrogen KG100HB vỏ tủ VTU', 350, '../images/sanpham1_3.jpg'),
(4, 'Máy lọc nước Kangaroo Hydrogen KG100HB không vỏ', 400, '../images/sanpham1_4.jpg'),
(5, 'Máy lọc nước Kangaroo Hydrogen KG100HG vỏ tủ VTU', 450, '../images/sanpham1_5.jpg'),
(6, 'Máy lọc nước Kangaroo Hydrogen Plus KG100HP không', 500, '../images/sanpham1_6.jpg'),
(7, 'Máy lọc nước Kangaroo 9 lõi vỏ tủ VTU KG110A', 550, '../images/sanpham2_1.png'),
(8, 'Máy lọc nước Kangaroo 9 Cấp lọc 2 vòi (Nóng - RO) KG09A3', 600, '../images/sanpham2_2.png'),
(9, 'Máy lọc nước Kangaroo 10 Cấp lọc 2 vòi (Nóng - RO - Lạnh)', 650, '../images/sanpham2_3.jpg'),
(10, 'Máy lọc nước Kangaroo 9 lõi Omega không vỏ tủ KG110', 600, '../images/sanpham2_4.jpg'),
(11, 'Máy lọc nước Kangaroo 9 lõi không vỏ tủ KG109', 700, '../images/sanpham2_5.jpg'),
(12, 'Máy lọc nước Kangaroo 9 lõi vỏ tủ VTU KG109', 750, '../images/sanpham2_6.jpg'),
(13, 'Cây nước nóng lạnh Kangaroo KG49', 800, '../images/sanpham3_1.jpg'),
(14, 'Cây nước nóng lạnh Kangaroo KG48', 850, '../images/sanpham3_2.jpg'),
(15, 'Cây nước nóng lạnh Kangaroo KG47', 900, '../images/sanpham3_3.jpg'),
(16, 'Cây nước nóng lạnh Kangaroo KG46', 950, '../images/sanpham3_4.jpg'),
(17, 'Cây nước nóng lạnh Kangaroo KG34C', 250, '../images/sanpham4_1.jpg'),
(18, 'Cây nước nóng lạnh Kangaroo KG31', 350, '../images/sanpham4_2.jpg'),
(19, 'Cây nước nóng lạnh kangaroo KG45', 150, '../images/sanpham3_5.jpg'),
(20, 'Cây nước nóng lạnh Kangaroo KG44', 100, '../images/sanpham3_6.jpg'),
(21, 'Cây nước nóng lạnh Kangaroo KG32N', 550, '../images/sanpham4_3.jpg'),
(22, 'Cây nước nóng lạnh Kangaroo KG3331', 350, '../images/sanpham4_4.jpg'),
(23, 'Cây nước nóng lạnh Kangaroo KH3331', 250, '../images/sanpham4_5.jpg'),
(24, 'Cây nước nóng lạnh Kangaroo KG40N', 500, '../images/sanpham4_6.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
