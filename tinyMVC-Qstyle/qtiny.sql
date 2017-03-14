-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生日期: 2017 年 03 月 14 日 13:33
-- 伺服器版本: 5.5.51
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `qtiny`
--

-- --------------------------------------------------------

--
-- 表的結構 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `usr` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 轉存資料表中的資料 `admin`
--

INSERT INTO `admin` (`usr`, `pwd`) VALUES
('samchuang', 'samchuang');

-- --------------------------------------------------------

--
-- 表的結構 `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gName` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gEmail` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gGender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gSubject` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gTime` datetime NOT NULL,
  `gContent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gReply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gReplyTime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=6 ;

--
-- 轉存資料表中的資料 `guestbook`
--

INSERT INTO `guestbook` (`id`, `gName`, `gEmail`, `gGender`, `gSubject`, `gTime`, `gContent`, `gReply`, `gReplyTime`) VALUES
(1, 'Sam', 'chichenchuang@foxmail.com', 'm', 'Hello', '2017-03-06 18:10:45', '第一個mvc insert', '坐沙發', '2017-03-07 15:19:09'),
(2, 'Sunny', 'cch69323@foxmail.com', 'm', 'Hello Hello', '2017-03-06 18:35:55', '第二個insert', '就是愛回覆哦!', '2017-03-07 15:11:36'),
(4, '老莊', 'peylincute@yahoo.com.tw', 'm', '測試test_input', '2017-03-07 14:10:51', '測試test_input', '', '0000-00-00 00:00:00'),
(5, '老莊', 'peylincute@yahoo.com.tw', 'm', '就是要留言', '2017-03-14 21:21:28', '就是要留言', '留言就最好的支持', '2017-03-14 21:22:02');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
