-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2019 年 11 月 15 日 11:49
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoicedb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `award`
--

CREATE TABLE `award` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` int(10) NOT NULL,
  `sp1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sp2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jackpot1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jackpot2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jackpot3` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `six1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `six2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `six3` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `award`
--

INSERT INTO `award` (`id`, `year`, `period`, `sp1`, `sp2`, `jackpot1`, `jackpot2`, `jackpot3`, `six1`, `six2`, `six3`) VALUES
(27, '2066', 6, '98765432', '98765432', '12345671', '12345623', '12345678', '123', '456', '789'),
(28, '2066', 6, '98765432', '98765432', '12345671', '12345623', '12345678', '123', '456', '789'),
(29, '2087', 6, '12345678', '68686545', '98765432', '', '', '123', '', '');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award`
--
ALTER TABLE `award`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
