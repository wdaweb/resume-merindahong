-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.4.10-MariaDB
-- PHP 版本： 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db04`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ad`
--

CREATE TABLE `ad` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(5) UNSIGNED NOT NULL,
  `acc` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(2, 'admin', 'ff'),
(3, 'mary', 'ff');

-- --------------------------------------------------------

--
-- 資料表結構 `artsps`
--

CREATE TABLE `artsps` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `artsps`
--

INSERT INTO `artsps` (`id`, `file`, `theme`, `text`, `sh`) VALUES
(1, '1字_活字PS(Typography)2.png', 'theme1', 'free', 1),
(2, 'breaktthrough.jpg', 'breakthrough', 'breakthrough', 1),
(3, '北基宜花金馬vision.png', 'vision', 'vision', 1),
(4, '1合_ORCA.jpg', 'let it go', 'orca', 0),
(5, '1合成_放克風格(手錶).png', 'time', 'watch', 0),
(7, 'Date with Florence2.jpg', 'florence tour poster', 'florence tour poster', 0),
(8, '1合成_雲海鋼琴.png', 'piano class', 'the magic moment', 0),
(9, '1版_形狀PS (2).png', '', '', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `autobi`
--

CREATE TABLE `autobi` (
  `id` int(2) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phase` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `autobi`
--

INSERT INTO `autobi` (`id`, `file`, `phase`, `content`, `sh`) VALUES
(9, '', 'p00', '                                                                                                                        雖然常常寫些文字，卻是很久沒有寫自傳了，一時之間，還真不知道怎麼下筆。', 1),
(10, '', 'p01', '                                                                                                在家，我排行老大，但我家老么比較像老大。我有四個妹妹，個性很不一樣，但都很獨立自主，讓在菜市場擺攤賣菜的爸媽很驕傲，鄰居們喜歡來請教爸媽怎麼養出五個會念書的女兒，樸實的兩個老人家總是會面帶靦腆地回答：「很簡單，不要管」。       \r\n              ', 1),
(12, '', 'p02', '                                                                                                                                                爸媽原希望我去唸高職，早點出社會做事，那時畢竟四個妹妹都還小，但老師希望我去唸高中，然後唸大學。所以，我爸媽就是隨便我，我則選擇去唸景美女中，然後考上政大英語系，我對我的父母很感激，他們真的不太管小孩，只會默默地幫忙，我依然記得他們總是在早上四點就出門去跟大盤商補貨，總是睡眠不足。       \r\n                    \r\n              ', 1),
(13, NULL, 'p03', ' 其實，政大英語系對我來說是一個大光環，我的成績平平而已，不到研究所的程度，也沒有出國深造的能力。大學的時候，開始經濟獨立，打過很多工，發傳單、當家教、問卷調查員、超市試吃推銷人員。然而，第一份正式有厚度的薪水是來自政大企管中心，我把第一次領薪水那天的日期當做提款機的密碼的一部分，放在心裡，一直到現在。', 1),
(14, NULL, 'p04', '畢業的時候，我跟很多人不一樣，我完全不知道要做什麼，沒有想法。但我有個原則，走步見步，既然不知道想要做什麼，就看看能做什麼。我喜歡做計劃，但那時的我是亂投履歷表。然後，台灣美強公司，一家西藥代理商選我去做行銷部門的企劃秘書，翻譯、協助撰寫企畫案、聯絡國外廠商處理代理與行銷活動相關事務。    ', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(5) UNSIGNED NOT NULL,
  `bottom` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '2019年12月7日');

-- --------------------------------------------------------

--
-- 資料表結構 `education`
--

CREATE TABLE `education` (
  `id` int(2) UNSIGNED NOT NULL,
  `level` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(21) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `education`
--

INSERT INTO `education` (`id`, `level`, `school`, `major`, `period`, `sh`) VALUES
(1, '高中', '台北市立景美女子中學', '普通高中', '1988.9-1991.6', 0),
(2, '大學', '國立政治大學', '英語系', '1992.9-1996.6', 1),
(3, '個人進修', '行政院青輔會', '企業經營管理人才培訓班', '1997.3-1997.6', 1),
(4, '個人進修', '台北市立教育大學', '學士後幼稚園教師教育學分班', '2004.9-2005.6', 1),
(6, '個人進修', '勞動部勞力發展署北基宜花金馬分署', 'PHP資料庫網頁設計', '2019.9-2020.3', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`id`, `file`, `text`, `sh`) VALUES
(1, 'breaktthrough.jpg', '', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `id` int(5) UNSIGNED NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(5) NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `menu`
--

INSERT INTO `menu` (`id`, `href`, `text`, `parent`, `sh`) VALUES
(1, 'admin/personal.php', '個人資料', 0, 1),
(2, 'admin/education.php', '學歷背景', 0, 1),
(3, 'admin/work.php', '工作經歷', 0, 1),
(4, 'admin/skills.php', '技能', 0, 1),
(5, 'admin/autobi.php', '自傳管理', 0, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `mvim`
--

CREATE TABLE `mvim` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `personal`
--

CREATE TABLE `personal` (
  `id` int(2) UNSIGNED NOT NULL,
  `file` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `personal`
--

INSERT INTO `personal` (`id`, `file`, `name`, `phone`, `email`, `birthday`, `addr`) VALUES
(1, 'jdoll.png', 'merinda', 965, 'Mary@gmail', '2001-02-05', 'Banchiao');

-- --------------------------------------------------------

--
-- 資料表結構 `title`
--

CREATE TABLE `title` (
  `id` int(5) UNSIGNED NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `title`
--

INSERT INTO `title` (`id`, `file`, `text`, `sh`) VALUES
(1, 'pinkTexture.jpg', 'pink-texture', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `id` int(5) UNSIGNED NOT NULL,
  `total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- 資料表結構 `work`
--

CREATE TABLE `work` (
  `id` int(5) UNSIGNED NOT NULL,
  `period` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobtitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `work`
--

INSERT INTO `work` (`id`, `period`, `company`, `jobtitle`, `jobs`, `sh`) VALUES
(2, '2007.9.1-2018.11.30', 'LED光電股份有限公司', '物料採購與營運管理經理', '\r\n1.尋找供應廠商與評選\r\n2.詢價與議價\r\n3.行銷企劃書擬定\r\n4.訂單處理與生產排程管理\r\n5.成本分析與預算控制\r\n6.國外應收帳款催收與核對\r\n7.ERP建置與管理', 1),
(3, '2001.8.1-2006.11.30', '何嘉仁國際文教集團', '統籌編輯', '\r\n1.教材大綱與課程規劃\r\n2.召開編輯小組會議\r\n3.教案編寫\r\n4.影音腳本編寫\r\n5.版型與風格取向設定\r\n6.編輯時程管理與控制\r\n7.印刷與校對聯繫', 1),
(5, '1997.9-2000.7', '台灣美強股份有限公司', '行銷企劃專員', '\r\n1.文案編寫與翻譯\r\n2.行銷企劃書編寫與彙整\r\n3.國際期刊廣告企劃聯繫\r\n4.進出口相關事宜', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `artsps`
--
ALTER TABLE `artsps`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `autobi`
--
ALTER TABLE `autobi`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mvim`
--
ALTER TABLE `mvim`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `artsps`
--
ALTER TABLE `artsps`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `autobi`
--
ALTER TABLE `autobi`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `education`
--
ALTER TABLE `education`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mvim`
--
ALTER TABLE `mvim`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `title`
--
ALTER TABLE `title`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `total`
--
ALTER TABLE `total`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `work`
--
ALTER TABLE `work`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
