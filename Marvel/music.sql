-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-06-08 11:12:56
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
-- 表的结构 `music`
--

CREATE TABLE `music` (
  `musicid` int(4) NOT NULL,
  `musicname` varchar(100) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `album` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `imgurl` varchar(100) NOT NULL,
  `audiourl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `music`
--

INSERT INTO `music` (`musicid`, `musicname`, `artist`, `album`, `time`, `imgurl`, `audiourl`) VALUES
(1, 'The Avengers', 'Alan Silvestri', 'The Avengers ', '2:03', './images/music/1.jpg', './audio/1.mp3'),
(2, 'I\'m Alive', 'Shinedown', 'Avengers Assemble ', '3:39', './images/music/2.jpg', './audio/2.mp3'),
(3, 'Iron Man 3', 'Brian Tyler', 'Iron Man 3', '2:23', './images/music/3.jpg', './audio/3.mp3\r\n'),
(4, 'Can You Dig It', 'Brian Tyler', 'Iron Man 3', '2:42', './images/music/4.jpg', './audio/4.mp3'),
(5, 'Immigrant Song', 'Led Zeppelin', 'Mothership', '2:25', './images/music/5.jpg', './audio/5.mp3'),
(6, 'Sweet Dreams', 'Eurythmics', 'Classic Rock 80\'s', '4:51', './images/music/6.jpg', './audio/6.mp3'),
(7, 'Hurt\r\n', 'Johnny Cash', 'Hurt', '3:37', './images/music/7.jpg', './audio/7.mp3'),
(8, 'Theme From Spider Man', 'Various Artists', 'Spider-Man', '1:01', './images/music/8.jpg', './audio/8.mp3'),
(9, 'Come and Get Your Love\r\n', 'Redbone\r\n', 'Guardians of the Galaxy\r\n', '3:28\r\n', './images/music/9.jpg\r\n\r\n', './audio/9.mp3\r\n'),
(10, 'Back In Black\r\n', 'AC/DC\r\n', 'Back In Black\r\n', '4:15\r\n', './images/music/10.jpg\r\n\r\n', './audio/10.mp3\r\n'),
(11, 'Hooked On A Feeling\r\n', 'Blue Swede\r\n', 'Guardians of the Galaxy: Awesome Mix Vol. 1\r\n', '2:54\r\n', './images/music/11.jpg\r\n\r\n', './audio/11.mp3\r\n'),
(12, 'Father and Son\r\n', 'Cat Stevens\r\n', 'Guardians of the Galaxy: Awesome Mix, Vol. 2\r\n', '3:40\r\n', './images/music/12.jpg\r\n\r\n', './audio/12.mp3\r\n'),
(13, 'Come a Little Bit Closer\r\n', 'Jay & the Americans\r\n', 'Guardians of the Galaxy: Awesome Mix, Vol. 2\r\n', '2:45\r\n', './images/music/13.jpg\r\n\r\n', './audio/13.mp3\r\n'),
(14, 'Wham Bam Shang-A-Lang\r\n', 'Silver\r\n', 'Guardians of the Galaxy: Awesome Mix, Vol. 2\r\n', '3:32\r\n', './images/music/14.jpg\r\n\r\n', './audio/14.mp3\r\n'),
(15, 'Mr. Blue Sky\r\n', 'Electric Light Orchestra\r\n', 'Guardians of the Galaxy: Awesome Mix, Vol. 2\r\n', '5:03\r\n', './images/music/15.jpg\r\n\r\n', './audio/15.mp3\r\n');

--
-- 转储表的索引
--

--
-- 表的索引 `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`musicid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
