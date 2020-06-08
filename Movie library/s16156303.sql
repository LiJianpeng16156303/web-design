-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-04-26 19:26:39
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `s16156303`
--
CREATE DATABASE IF NOT EXISTS `s16156303` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `s16156303`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'test', 'test@qq.com', 'test');

-- --------------------------------------------------------

--
-- 表的结构 `films`
--

CREATE TABLE `films` (
  `filmid` int(100) NOT NULL,
  `filmname` varchar(100) NOT NULL,
  `imdbid` varchar(9) NOT NULL,
  `type` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `year` int(4) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `trailer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `films`
--

INSERT INTO `films` (`filmid`, `filmname`, `imdbid`, `type`, `region`, `year`, `poster`, `trailer`) VALUES
(1, 'The Gentlemen', 'tt8367814', 'Action, Comedy, Crime', 'USA', 2019, 'images/poster/1.jpg', 'trailer/1.mp4'),
(2, 'The Platform', 'tt8228288', ' Horror, Sci-Fi, Thriller ', 'USA', 2019, 'images/poster/2.jpg', 'trailer/2.mp4'),
(3, 'Inakunare Gunjo', 'tt1044853', 'Adventure, Drama, Mystery', 'Japan', 2019, 'images/poster/3.jpg', 'trailer/3.mp4'),
(4, 'Thua Me Con Di', 'tt1064197', 'Comedy, Drama, Romance', 'Vietnam', 2019, 'images/poster/4.jpg', 'trailer/4.mp4'),
(5, 'To the Ends of the Earth', 'tt8681422', 'Drama', 'Japan', 2019, 'images/poster/5.jpg', 'trailer/5.mp4'),
(6, 'The Invisible Man', 'tt1051906', 'Horror, Mystery, Sci-Fi', 'USA', 2020, 'images/poster/6.jpg', 'trailer/6.mp4'),
(7, 'The Hunt', 'tt8244784', 'Action, Horror, Thriller', 'USA', 2020, 'images/poster/7.jpg', 'trailer/7.mp4'),
(8, 'Little Women', 'tt3281548', 'Drama, Romance', 'USA', 2019, 'images/poster/8.jpg', 'trailer/8.mp4'),
(9, 'Never Rarely Sometimes Always', 'tt7772582', 'Drama ', 'USA', 2020, 'images/poster/9.jpg', 'trailer/9.mp4'),
(10, '1917', 'tt8579674', 'Drama, War', 'USA', 2019, 'images/poster/10.jpg', 'trailer/10.mp4'),
(11, 'Les Mis rables', 'tt1019959', 'Crime, Drama, Thriller', 'France', 2019, 'images/poster/11.jpg', 'trailer/11.mp4'),
(12, 'Onward', 'tt7146812', 'Animation, Adventure, Comedy', 'USA', 2020, 'images/poster/12.jpg', 'trailer/12.mp4'),
(13, 'Joker ', 'tt7286456', 'Crime, Drama, Thriller', 'USA', 2019, 'images/poster/13.jpg', 'trailer/13.mp4'),
(14, 'Parasite ', 'tt6751668', 'Comedy, Drama, Thriller', 'South Korea', 2019, 'images/poster/14.jpg', 'trailer/14.mp4'),
(15, 'Sheep Without a Shepherd', 'tt1121003', 'Crime, Drama, Thriller', 'China', 2019, 'images/poster/15.jpg', 'trailer/15.mp4'),
(16, 'Kim Ji-young: Born 1982', 'tt1105280', 'Drama', 'South Korea', 2019, 'images/poster/16.jpg', 'trailer/16.mp4'),
(17, 'The Godfather', 'tt0068646', 'Crime, Drama', 'USA', 1972, 'images/poster/17.jpg', 'trailer/17.mp4'),
(18, 'The Shawshank Redemption', 'tt0111161', 'Drama ', 'USA', 1994, 'images/poster/18.jpg', 'trailer/18.mp4'),
(19, 'Titanic', 'tt0120338', 'Drama, Romance', 'USA', 1997, 'images/poster/19.jpg', 'trailer/19.mp4'),
(20, 'Green Book', 'tt6966692', 'Biography, Comedy, Drama', 'USA', 2018, 'images/poster/20.jpg', 'trailer/20.mp4');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- 表的索引 `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`filmid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `films`
--
ALTER TABLE `films`
  MODIFY `filmid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
