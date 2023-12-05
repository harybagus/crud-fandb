-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 10:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_fandb`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(7) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `type`, `image`) VALUES
(1, 'Nasi Goreng', 'Nasi goreng adalah sajian nasi yang digoreng dalam sebuah wajan yang menghasilkan cita rasa berbeda karena dicampur dengan bumbu-bumbu dan rempah-rempah tertentu. Selain itu, ditambahkan bahan-bahan seperti telur, sayur-sayuran, seafood, atau daging.', 25000, 'Makanan', '650bec4d26427.jpg'),
(2, 'Cappucino Cincau', 'Cappucino cincau atau capcin adalah salah satu minuman jalanan di Indonesia. Proses pembuatan cappucino cincau dihasilkan dari mencampurkan es cappucino dengan serutan cincau. Minuman ini sangat populer dan digandrungi masyarakat Indonesia.', 9000, 'Minuman', '650bf0a03d4ec.jpg'),
(3, 'Ayam Bakar', 'Ayam bakar adalah sebuah hidangan Asia Tenggara Maritim, terutama hidangan Indonesia atau Malaysia, dari ayam yang dipanggang di atas arang.', 18000, 'Makanan', '650bf2267716c.jpg'),
(4, 'Kari Ayam', 'Kari ayam merupakan sebuah hidangan berkuah dengan potongan daging ayam yang dimasak dengan rempah-rempah hingga mempunyai cita rasa tajam dan pedas.', 22000, 'Makanan', '650bf7cc243f6.jpg'),
(5, 'Jus Jeruk', 'Jus jeruk merupakan ekstrak cair dari buah jeruk murni tanpa tambahan air, es ataupun gula, yang dihasilkan dengan cara memeras atau menumbuk jeruk.', 11000, 'Minuman', '650c1021736bc.jpg'),
(6, 'Boba', 'Boba adalah sejenis minuman teh susu ditambah dengan \"mutiara\" yang terbuat dari tapioka. Minuman ini berasal dari Taiwan, dan terkenal di Tiongkok, Korea, Filipina, Indonesia, dan juga Eropa, Kanada, dan Amerika Serikat.', 20000, 'Minuman', '650c11f032c83.jpg'),
(7, 'Pesto Pasta', 'Pesto adalah pasta yang secara tradisional terdiri dari bawang putih yang dihancurkan, kacang pinus Eropa, garam kasar, daun kemangi, dan keju keras seperti Parmigiano-Reggiano atau Pecorino Sardo, semuanya dicampur dengan minyak zaitun.', 65000, 'Makanan', '650c13ab74223.jpg'),
(8, 'Es Teh', 'Es teh adalah minuman teh yang disajikan dingin dengan es batu. Biasanya es teh sering diminum saat siang hari karena suhu udara yang panas.', 6000, 'Minuman', '650c15914d441.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
