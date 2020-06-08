-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-06-10 13:27:54
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
-- 数据库： `marveldb`
--

-- --------------------------------------------------------

--
-- 表的结构 `movie`
--

CREATE TABLE `movie` (
  `movieid` int(4) NOT NULL,
  `moviename` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `nabo` varchar(100) NOT NULL,
  `orbo` varchar(100) NOT NULL,
  `gbo` varchar(100) NOT NULL,
  `nabor` varchar(100) NOT NULL,
  `gbor` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `imagesurl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `movie`
--

INSERT INTO `movie` (`movieid`, `moviename`, `date`, `nabo`, `orbo`, `gbo`, `nabor`, `gbor`, `cost`, `imagesurl`) VALUES
(1, 'Iron Man', '2008-05-02', '$318,412,101', '$266,762,121', '$585,174,222', '67', '159', '$140,000,000', './images/poster/1.jpg'),
(2, 'The Incredible Hulk', '2008-06-13', '$134,806,913', '$128,620,638', '$263,427,551', '437', '547', '$150,000,000', './images/poster/2.jpg'),
(3, 'Iron Man 2', '2010-05-07', '$312,433,331', '$311,500,000', '$623,933,331', '72', '140', '$200,000,000', './images/poster/3.jpg'),
(4, 'Thor', '2011-05-06', '$181,030,624', '$268,295,994', '$449,326,618', '248', '243', '$150,000,000', './images/poster/4.jpg'),
(5, 'Captain America: The First Avenger', '2011-07-22', '$176,654,505', '$193,915,269', '$370,569,774', '264', '327', '$140,000,000', './images/poster/5.jpg'),
(6, 'The Avengers', '2012-05-04', '$623,357,910', '$895,455,078', '$1,518,812,988', '8', '7', '$220,000,000', './images/poster/6.jpg'),
(7, 'Iron Man 3', '2013-05-03', '$409,013,994', '$805,797,258', '$1,214,811,252', '28', '18', '$200,000,000', './images/poster/7.jpg'),
(8, 'Thor: The Dark World', '2013-11-08', '$206,362,140', '$438,209,262', '$644,571,402', '194', '131', '$170,000,000', './images/poster/8.jpg'),
(9, 'Captain America: The Winter Soldier', '2014-04-04', '$259,766,572', '$454,497,695', '$714,264,267', '111', '106', '$170,000,000', './images/poster/9.jpg'),
(10, 'Guardians of the Galaxy', '2014-08-01', '$333,176,600', '$440,152,029', '$773,328,629', '59', '91', '$170,000,000', './images/poster/10.jpg'),
(11, 'Avengers: Age of Ultron', '2015-05-01', '$459,005,868', '$946,397,826', '$1,405,403,694', '17', '9', '$250,000,000', './images/poster/11.jpg'),
(12, 'Ant-Man', '2015-07-17', '$180,202,163', '$339,109,802', '$519,311,965', '250', '198', '$130,000,000', './images/poster/12.jpg'),
(13, 'Captain America: Civil War', '0206-05-06', '$408,084,349', '$745,220,146	', '$1,153,304,495', '29', '20', '$250,000,000', './images/poster/13.jpg'),
(14, 'Doctor Strange', '2016-11-04', '$232,641,920', '$445,076,475', '$677,718,395', '146', '119', '$165,000,000', './images/poster/14.jpg'),
(15, 'Guardians of the Galaxy Vol. 2', '2017-05-05', '$389,813,101', '$473,942,950', '$863,756,051', '36', '67', '$200,000,000', './images/poster/15.jpg'),
(16, 'Spider-Man: Homecoming', '2017-07-07', '$334,201,140', '$545,965,784', '$880,166,924', '57', '59', '$175,000,000', './images/poster/16.jpg'),
(17, 'Thor: Ragnarok', '2017-11-03', '$315,058,289', '$538,918,837', '$853,977,126', '71', '70', '$180,000,000', './images/poster/17.jpg'),
(18, 'Black Panther', '2018-02-16', '$700,059,566', '$646,853,595', '$1,346,913,161', '4', '10', '$200,000,000', './images/poster/18.jpg'),
(19, 'Avengers: Infinity War', '2018-04-27', '$678,815,482', '$1,369,544,272', '$2,048,359,754', '5', '5', '$316,000,000', './images/poster/19.jpg'),
(20, 'Ant-Man and the Wasp', '2018-07-06', '$216,648,740', '$406,025,399', '$622,674,139', '171', '141', '$162,000,000', './images/poster/20.jpg'),
(21, 'Captain Marvel', '2019-03-08', '$426,239,002', '$701,349,285', '$1,127,588,287', '21', '22', '$152,000,000', './images/poster/21.jpg'),
(22, 'Avengers: Endgame', '2019-04-26', '$817,804,438', '$1,898,410,253', '$2,716,214,691', '2', '2', '$356,000,000', './images/poster/22.jpg'),
(23, 'Spider-Man: Far From Home', '2019-07-02', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', 'Unknown', './images/poster/23.jpg');

--
-- 转储表的索引
--

--
-- 表的索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
