-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 1 月 27 日 17:31
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_homework`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_stylist_table`
--

CREATE TABLE `gs_stylist_table` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `vacant` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `place` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `URL` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_stylist_table`
--

INSERT INTO `gs_stylist_table` (`id`, `name`, `vacant`, `place`, `URL`, `indate`) VALUES
(2, '聖徳太子', 'Array', '代々木', 'https://', '2020-01-27'),
(3, '伊達政宗', 'Array', '池袋', 'https://', '2020-01-27'),
(4, '福沢諭吉', 'Array', '代々木', 'https://', '2020-01-27');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_stylist_table`
--
ALTER TABLE `gs_stylist_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `gs_stylist_table`
--
ALTER TABLE `gs_stylist_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
