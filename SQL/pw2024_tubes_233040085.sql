-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2024 at 10:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw2024_tubes_233040085`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `idgenre` int NOT NULL,
  `genre_name` varchar(45) NOT NULL,
  `last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`idgenre`, `genre_name`, `last_update`) VALUES
(1, 'Horor', '2024-05-19 14:58:12'),
(2, 'Animasi', '2024-05-09 18:29:19'),
(3, 'Romance', '2024-05-13 01:24:41'),
(4, 'Comedy', '2024-05-13 02:08:28'),
(5, 'History', '2024-05-13 02:08:54'),
(6, 'Fantasy', '2024-05-13 01:58:21'),
(7, 'Mystery', '2024-05-13 02:02:02'),
(8, 'Musical', '2024-05-13 02:04:43'),
(9, 'Drama', '2024-05-19 14:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id_movie` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text,
  `release_year` year DEFAULT NULL,
  `rating` decimal(10,1) DEFAULT NULL,
  `movie_trailer` varchar(225) DEFAULT NULL,
  `age_rating` varchar(5) DEFAULT NULL,
  `writer` varchar(225) DEFAULT NULL,
  `director` varchar(225) DEFAULT NULL,
  `actor` text,
  `picture` varchar(225) DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `genre_idgenre` int NOT NULL,
  `user_iduser` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id_movie`, `title`, `description`, `release_year`, `rating`, `movie_trailer`, `age_rating`, `writer`, `director`, `actor`, `picture`, `last_update`, `genre_idgenre`, `user_iduser`) VALUES
(2, 'Tinkerbell Secret of the wings', 'Tinkerbell mengembara ke hutan musim dingin terlarang dan bertemu Periwinkle. Bersama-sama mereka mempelajari rahasia sayap mereka dan mencoba menyatukan peri hangat dan peri musim dingin untuk membantu Pixie Hollow.', 2012, '7', 'www', '10+', ' Bobs Gannaway, Peggy Holmes, Ryan Rowe  ', ' Bobs Gannaway, Peggy Holmes', ' Mae Whitman, Lucy Hale, Timotius Dalton', '6644b1a3b9759.jpeg', '2024-05-25 10:24:20', 2, 1),
(3, 'Suzume', 'Kisah jalanan petualangan aksi modern di mana seorang gadis berusia 17 tahun bernama Suzume membantu seorang pemuda misterius menutup pintu dari sisi lain yang menimbulkan bencana di seluruh Jepang.', 2022, '8', 'www', '15+', 'Makoto Shinkai', 'Makoto Shinkai', ' Nanoka Hara, Hokuto Matsumura, Eri Fukatsu', '664a10239ef76.jpg', '2024-05-21 05:06:19', 2, 1),
(4, 'Rumah Dara', 'Dua pengantin baru, Adjie dan Astrid, bersama dengan 3 sahabat mereka memutuskan untuk melakukan perjalanan antar negara bagian sebagai upaya terakhir untuk mendamaikan Adjie dengan adik perempuannya yang terasing, Ladya. Namun perjalanan mereka tiba-tiba terganggu ketika mereka bertemu Maya, seorang gadis aneh entah dari mana, yang mengembara tanpa tujuan ke jalan mereka. &quot;Saya telah dirampok&quot; hanya itu yang dia katakan. Teman-temannya dengan suara bulat memutuskan untuk memberinya tumpangan ke rumahnya yang terpencil di ujung hutan. Maya memperkenalkan Adjie dan teman-temannya kepada ibunya yang berdarah biru, Dara, seorang wanita dengan teka-teki awet muda dan sedikit bicara. Dara menegaskan kebaikan mereka harus dibalas dengan pesta makan malam. Di sinilah malam berubah menjadi neraka merah bagi 6 teman, yang mendapati diri mereka terjebak dan diburu oleh Dara dan keluarga kultusnya yang terdiri dari tiga anak didiknya yang mematikan, lahir dan dibesarkan untuk secara sistematis melenyapkan orang yang lewat tanpa menaruh curiga demi orang jahat. alasan. Dibantai satu demi satu, semua orang akan berdarah, malam tergelap tidak pernah terlihat semerah ini.', 2009, '9', 'www', '19+', 'Kimo Stamboel, Timo Tjahjanto', 'Kimo Stamboel, Timo Tjahjanto', ' Shareefa Daanish, Julie Estelle, Ario Bayu', '664a0f3012a8c.jpg', '2024-05-19 14:39:44', 1, 1),
(5, 'Ada Apa dengan Cinta?', 'Seorang gadis populer harus memilih apakah dia ingin tetap menjadi bagian dari kelompoknya atau jatuh cinta pada lelaki pencinta sastra di sekolahnya.', 2002, '8', 'www', '17+', 'Mira Lesmana, Jujur Prananto, Rako Prijanto', ' Rudy Soedjarwo', 'Dian Sastrowardoyo, Nicholas Saputra, Ladya Cheryl', '664a11702fffa.jpg', '2024-05-19 14:59:20', 3, 1),
(7, 'Dilan 1990', 'Milea (Vanesha Prescilla) bertemu dengan Dilan (Iqbaal Ramadhan) di sebuah SMA di Bandung pada tahun 1990. Perkenalan yang tidak biasa membawa Milea mengetahui keunikan Dilan yang cerdas, baik hati, dan romantis di matanya.', 2018, '7', 'www', '16+', ' Pidi Baiq, Titien Wattimena, Dani Rahman Fauzi', ' Pidi Baiq, Fajar Bustomi', ' Iqbaal Dhiafakhri Ramadhan, Vanesha Prescilla, Sissy Priscillia', '664a127de4bc3.jpg', '2024-05-19 14:53:49', 3, 1),
(9, 'La La Land', 'Saat menjalani karier mereka di Los Angeles, seorang pianis dan aktris jatuh cinta saat berusaha mendamaikan aspirasi mereka untuk masa depan.', 2016, '8', 'www', '16+', 'Damien Chazelle', 'Damien Chazelle', ' Ryan Gosling, Emma Stone', '664a14e588ab5.jpg', '2024-05-19 15:04:05', 8, 1),
(10, 'Beauty and the Beast', 'Seorang Pangeran egois dikutuk menjadi monster seumur hidupnya, kecuali dia belajar untuk jatuh cinta dengan seorang wanita muda cantik yang dia tawanan.', 2017, '7', 'www', '16+', ' Stephen Chbosky, Evan Spiliotopoulos, Linda Woolverton', ' Bill Condon', ' Emma Watson, Dan Stevens, Luke Evans', '664a15cc17cad.jpg', '2024-05-19 15:07:56', 3, 1),
(12, 'Ancika: Dia yang Bersamaku 1995', 'Persahabatan Dilan dan Ancika Mehrunisa Rabu. Hubungan mereka yang semakin erat membuat benih-benih cinta semakin tumbuh dan hubungan mereka pun menanjak hingga ke jenjang sepasang kekasih.', 2024, '7', 'www', '14+', ' Pidi Baiq, Tubagus Deddy, Beni Setiawan', ' Beni Setiawan', 'Zee JKT48, Arbani Yasiz', '664b66779b1d6.jpeg', '2024-05-20 15:04:23', 3, 1),
(13, 'Friend Zone', 'Banyak orang di dunia ini yang sepertinya mengembara dalam hubungan yang membatasi &#039;teman&#039; dan &#039;kekasih&#039;--batas yang biasa dikenal dengan ZONA TEMAN. Area yang rumit bagi mereka yang tidak bisa tetap berteman dengan teman dekatnya atau maju menjadi kekasih teman-temannya. Palm (Naphat Siangsomboon) terjebak di FRIEND ZONE bersama sahabatnya Gink (Pimchanok Luevisadpaibul) selama 10 tahun. Saat SMA dia mencoba melewati batas dengan mengakui perasaannya padanya, tapi dia menolaknya dengan &quot;menjadi teman saja sudah cukup.&quot; Sejak itu, Palm dan Gink semakin dekat sebagai sahabat sejati. Setiap kali Palm putus dengan salah satu pacarnya yang tak terhitung jumlahnya, Gink akan berbicara masuk akal padanya; setiap kali Gink berkelahi dengan pacarnya Ted (Jason Young), di mana pun dia berada di Myanmar, Malaysia, atau Hong Kong, dia menelepon Palm, yang menggunakan fasilitasnya sebagai pramugari untuk mengejar penerbangan agar bisa bersamanya. Mungkin kebaikan yang berlebihan inilah yang membuat Gink punya masalah dengan Ted. Suatu hari, tiba-tiba, Gink bertanya pada Palm: &quot;Pernahkah kamu bertanya-tanya--bagaimana jika kita adalah sebuah barang?&quot; Saat itu, percikan api beterbangan liar di benak Palm: ini mungkin satu-satunya kesempatannya untuk melintasi batas. Tapi dia tidak tahu apakah meninggalkan FRIEND ZONE kali ini akan membawanya ke awal kehidupan cinta romantisnya atau ke akhir persahabatannya dengan Gink selamanya.', 2019, '7', 'wwww', '16+', 'Pattaranad Bhiboonsawade, Chayanop Boonprakob, Thodsapon Thiptinnakorn', 'Chayanop Boonprakob', 'Pimchanok Luevisadpaibul, Naphat Siangsomboon, Jason Young', '664b6791eab58.jpeg', '2024-05-20 15:09:05', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int NOT NULL,
  `full_name` varchar(225) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` tinyint NOT NULL,
  `last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `full_name`, `username`, `password`, `status`, `last_update`) VALUES
(1, 'Dian', 'dian', '12345678', 1, '2024-05-13 02:16:19'),
(3, 'yan', 'yan', '22222222', 1, '2024-05-23 06:46:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`idgenre`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id_movie`),
  ADD KEY `fk_movie_genre_idx` (`genre_idgenre`),
  ADD KEY `fk_movie_user1_idx` (`user_iduser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `idgenre` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id_movie` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `fk_movie_genre` FOREIGN KEY (`genre_idgenre`) REFERENCES `genre` (`idgenre`),
  ADD CONSTRAINT `fk_movie_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
