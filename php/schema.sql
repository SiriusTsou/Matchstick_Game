-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- 主機: localhost:3306
-- 建立日期: 2016 年 01 月 10 日 22:27
-- 伺服器版本: 5.5.46-cll
-- PHP 版本: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `u7031609_test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `rank_count_easy`
--

CREATE TABLE IF NOT EXISTS `rank_count_easy` (
  `username` varchar(30) NOT NULL,
  `num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `rank_count_hard`
--

CREATE TABLE IF NOT EXISTS `rank_count_hard` (
  `username` varchar(30) NOT NULL,
  `num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `rank_count_normal`
--

CREATE TABLE IF NOT EXISTS `rank_count_normal` (
  `username` varchar(30) NOT NULL,
  `num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `rank_count_ultra`
--

CREATE TABLE IF NOT EXISTS `rank_count_ultra` (
  `username` varchar(30) NOT NULL,
  `num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
