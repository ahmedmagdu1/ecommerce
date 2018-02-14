-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2017 at 04:42 PM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adsesta`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Describtion` text NOT NULL,
  `parent` int(11) NOT NULL,
  `Ordering` int(11) DEFAULT NULL,
  `Visibility` tinyint(4) NOT NULL DEFAULT '0',
  `Allow_Comment` tinyint(4) NOT NULL DEFAULT '0',
  `Allow_Ads` tinyint(4) NOT NULL DEFAULT '0',
  `Views` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Name`, `Describtion`, `parent`, `Ordering`, `Visibility`, `Allow_Comment`, `Allow_Ads`, `Views`) VALUES
(9, 'Electronics', 'Electronics Devices Like Tv, Mobile etc..', 0, 2, 0, 0, 0, 19),
(10, 'Home & Kitchine', 'Home and Kitchine equipmeny & supplies', 0, 3, 0, 0, 0, 8),
(11, 'Home Furniture', '', 10, 4, 0, 0, 0, 1),
(13, 'Real Estate', '', 0, 0, 0, 0, 0, 13),
(14, 'Sports', 'Gym & Airobics Sports Heave & Soft  Equipments', 0, 0, 0, 0, 0, 30),
(17, 'Mobile Phones', 'mobile Phones & Cell Phones', 9, 3, 0, 0, 0, 0),
(18, 'Computers', '', 9, 0, 0, 0, 0, 0),
(19, 'Appartments', '', 13, 0, 0, 0, 0, 0),
(20, 'Mobile Accessories', 'this Section Show All Mobile Accessories Like Covers etc.', 9, 6, 0, 0, 0, 0),
(21, 'Computer Accessories', 'this Section Show All Computer Accessories Like Speakers , keyboards etc.', 9, 6, 0, 0, 0, 0),
(22, 'Printers & Scanners', 'this Section Show All  Printers & Copy Machines', 9, 8, 0, 0, 0, 0),
(23, 'Motors', 'Cars and motor Cycles , Buses & Lores ETC.', 0, 1, 0, 0, 0, 12),
(24, 'kitchen Supplies', 'kitchen Supplies', 10, 2, 0, 0, 0, 0),
(25, 'Jobs', 'Jobs', 0, 6, 0, 0, 0, 14),
(26, 'Clothes', 'Clothes & Accessories', 0, 8, 0, 0, 0, 16),
(27, 'Services', 'Services', 0, 9, 0, 0, 0, 13),
(28, 'Games', 'Games', 9, 6, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `C_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Comment` text NOT NULL,
  `Status` tinyint(4) NOT NULL,
  `Comment_Date` date NOT NULL,
  `Item_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  PRIMARY KEY (`C_ID`),
  KEY `items_comment` (`Item_ID`),
  KEY `user_comment` (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `Item_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `specifications` varchar(1024) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Add_Date` date NOT NULL,
  `Country_made` varchar(255) NOT NULL,
  `seller` varchar(255) NOT NULL,
  `Views` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Rating` smallint(6) NOT NULL,
  `Approve` tinyint(4) NOT NULL DEFAULT '0',
  `Cat_ID` int(11) NOT NULL,
  `Member_ID` int(11) NOT NULL,
  `itemimage` varchar(255) NOT NULL DEFAULT 'default-01.jpg',
  PRIMARY KEY (`Item_Id`),
  KEY `member_1` (`Member_ID`),
  KEY `cat_1` (`Cat_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_Id`, `Name`, `Description`, `specifications`, `Price`, `Add_Date`, `Country_made`, `seller`, `Views`, `Status`, `Rating`, `Approve`, `Cat_ID`, `Member_ID`, `itemimage`) VALUES
(28, 'alcatel one touch', 'alcatel one touch - android', '', '400', '2017-06-06', 'china', '', 47, '3', 0, 1, 9, 1, '975403398_images.jpg'),
(29, 'جهاز كشف الذهب والمعادن', 'جهاز كشف الذهب والمعادن', 'اقوى كاشف ذهب فى العالم GPX5000 جهاز كشف الذهب والمعادن لكل باحث عن الذهب والكنوز اليك الجهاز العملاق اقوى جهاز صوتى فى العالم احدث تطور تكنولوجيى وضعنا معيارا جديدا فى مجال تكنولوجيا الكشف عن الذهب مع مجموعة مزهلة من المزايا والوظائف المتفوقه عن سابقتها وذلك فى فئه تضم التكنولوجيا الخاصه لشركة مانيلاب ان تكنولوجيا الاستشعار متعدد الاقطاب المتطوره ضمن الجهاز تسمح بالكشف عن الذهب بمختلف الاحجام ابتدأمن الاحجام الصغير جدا الى الكبيره من الذهب بدقه عاليه تم تطوير وتعديل هذا الاصدار وتزويدة بمزيد من الخصائص بحيث يصل لعمق اكبر اثناء عملية البحث يتميز الجهاز على مميزات ووظائف فريدة من نوعها حائز على براة اختراع دولية بالاضافه الى لوحة تحكم للجهاز تمتاز بالمرونه العمليه اثناء الاستخدام كما يتميز الجهاز بأمكانية استخدامه فى كافة انواع التضاريس الارضيه للتفاصيل اكتر زورونا على موقعنا عبر الانترنت www.detector-gold.com او راسلونا عبر البريد الالكترونى Detectorgold8@gmail.com للطلب والاستفسار قسم المبيعات واتساب 0096598896080 0096598896070', '00', '2017-06-07', 'الكويت', '', 24, '1', 0, 1, 11, 53, '266497593_1.jpg'),
(30, 'nokia cell phone', 'small nokia mobile phone', '', '100', '2017-06-07', 'china', 'giza', 38, '3', 0, 1, 9, 1, '453062948_992614747_fb-app-01.jpg'),
(33, 'Ralf Loren Shoes', 'Ralf Loren Shoes Size 42', '', '600', '2017-06-15', 'China', 'Giza', 18, '1', 0, 1, 26, 1, '227151213_41RB1FoKfPL._SY395_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'to identify user',
  `UserName` varchar(255) NOT NULL COMMENT 'username to login',
  `Password` varchar(255) NOT NULL COMMENT 'password to login',
  `Email` varchar(255) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `GroupID` int(11) NOT NULL DEFAULT '0' COMMENT 'identify user group',
  `TrustStatus` int(11) NOT NULL COMMENT 'Seller Rank',
  `RegStatus` int(11) NOT NULL DEFAULT '0' COMMENT 'User Approval',
  `Date` date NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `Password`, `Email`, `FullName`, `GroupID`, `TrustStatus`, `RegStatus`, `Date`, `Phone`, `avatar`) VALUES
(1, 'ahmedmagdy', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'ahmedmagdu1@gmail.com', 'ahmed magdy ahmed', 1, 0, 1, '0000-00-00', '01144470365', '821416722_home-512.png'),
(43, 'ahmedfouda', '9e3f20dd875d12971e0f9ec8948e7ab92f943b69', 'ahmed_fouda_300@hotmail.com', 'ahmed fouda', 0, 0, 1, '2017-06-05', '01000733411', '0'),
(45, 'fatima', 'e56f665da12bc1c8a4fcc427fc7743d45dab2cf7', 'eng.fam85@gmail.com', 'fatima mohsen', 0, 0, 1, '2017-06-06', '123456789', '0'),
(46, 'ahmed', '78285d0a393fcfeb0e16cb5b3bc63fa1850bda02', 'ali@yahoo.com', 'ahmed hanafy', 0, 0, 1, '2017-06-06', '01273452828', '0'),
(47, 'eslam', '0a620681637355e338bc386fd230aa9736d1ad58', 'eslam@yahoo.com', 'eslam mohamed', 0, 0, 1, '2017-06-06', '01234587659', '0'),
(51, 'mahmoudahmed', '36a27136f3015f5ed0e1fe268ad7a93a985196cf', 'mahmoud_ahmed11111@yahoo.com', 'mahmoudahmed', 0, 0, 1, '2017-06-06', '01014103328', '0'),
(52, 'الالبالبا', '74b3563aa66fbfb1a9a4a2fb443ea2578fe791b6', 'يليبلايباب', 'ابلايبلا', 0, 0, 1, '2017-06-06', 'الليليبلا', '0'),
(53, 'aldnon', '0d67a4fbf5d7d814a37907fc411c14525b10891a', 'detectorgold8@gmail.com', 'aldnon group', 0, 0, 1, '2017-06-07', '000000', '0'),
(54, 'ahmedmagdy000', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'ahmedmagdu1@gmail.com', 'ahmed magdy ahmed', 0, 0, 1, '2017-06-13', '01144470365', '0'),
(55, 'mmmmmmmm', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'mm@mm.com', 'mm mm mm', 0, 0, 1, '2017-06-13', '65465465', '0'),
(56, 'ahmedmagdy0000000000', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'admin@example.com', 'ahmed magdy ahmed', 0, 0, 1, '2017-06-13', '01144470365', '0'),
(57, 'new test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'ahmedmagdu1@gmail.com', 'ahmed magdy ahmed', 0, 0, 1, '2017-06-13', '01144470365', '0'),
(58, 'magdy', 'd4ba000f9d78230c7a13b44a82c2315f3b5a43ed', 'magdy_9_1_56@hotmail.com', 'magdy ahmed', 0, 0, 1, '2017-06-14', '01220878202', '0');

-- --------------------------------------------------------

--
-- Table structure for table `views_counter`
--

CREATE TABLE IF NOT EXISTS `views_counter` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pages` varchar(255) NOT NULL,
  `views` int(255) NOT NULL DEFAULT '0',
  `member` varchar(255) NOT NULL,
  `ip` int(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=8 ;

--
-- Dumping data for table `views_counter`
--

INSERT INTO `views_counter` (`ID`, `pages`, `views`, `member`, `ip`) VALUES
(1, 'puplic', 1049, '0', 0),
(4, 'View Item', 133, '0', 0),
(7, 'Home', 220, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `member` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=159 ;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`ID`, `member`, `ip`, `date`, `time`) VALUES
(1, 'member', '::1', '2017-05-27', '04:07:24'),
(2, 'member', '::1', '2017-05-27', '04:07:37'),
(3, 'member', '::1', '2017-05-27', '04:08:02'),
(4, 'member', '::1', '2017-05-28', '05:47:10'),
(5, 'member', '::1', '2017-05-28', '05:49:31'),
(6, 'ahmedmagdy', '::1', '2017-05-28', '05:53:46'),
(7, 'ahmedmagdy', '::1', '2017-05-28', '05:53:50'),
(8, 'ahmedmagdy', '::1', '2017-05-28', '05:55:23'),
(9, 'member', '::1', '2017-05-28', '06:11:26'),
(10, 'member', '::1', '2017-05-30', '04:00:12'),
(11, 'member', '::1', '2017-05-30', '04:03:45'),
(12, 'member', '::1', '2017-05-30', '04:03:53'),
(13, 'member', '::1', '2017-05-30', '04:03:55'),
(14, 'member', '::1', '2017-05-30', '04:04:24'),
(15, 'member', '::1', '2017-05-30', '04:04:48'),
(16, 'member', '::1', '2017-05-30', '04:11:14'),
(17, 'member', '::1', '2017-05-30', '04:11:41'),
(18, 'member', '::1', '2017-05-30', '04:25:29'),
(19, 'member', '::1', '2017-05-30', '04:27:17'),
(20, 'member', '::1', '2017-05-30', '04:27:20'),
(21, 'member', '::1', '2017-05-30', '04:27:23'),
(22, 'member', '::1', '2017-05-30', '04:27:33'),
(23, 'member', '::1', '2017-05-30', '04:28:27'),
(24, 'member', '::1', '2017-05-30', '04:28:40'),
(25, 'member', '::1', '2017-05-30', '04:30:09'),
(26, 'member', '::1', '2017-05-30', '04:30:39'),
(27, 'member', '::1', '2017-05-30', '04:32:21'),
(28, 'member', '::1', '2017-05-30', '04:32:25'),
(29, 'member', '::1', '2017-05-30', '04:32:27'),
(30, 'member', '::1', '2017-05-30', '04:32:29'),
(31, 'member', '::1', '2017-05-30', '04:32:31'),
(32, 'member', '::1', '2017-05-30', '04:32:34'),
(33, 'member', '::1', '2017-05-30', '04:33:48'),
(34, 'member', '::1', '2017-05-30', '04:36:19'),
(35, 'member', '::1', '2017-05-30', '04:36:30'),
(36, 'member', '::1', '2017-05-30', '04:40:40'),
(37, 'member', '::1', '2017-05-30', '04:41:16'),
(38, 'member', '::1', '2017-05-30', '04:42:16'),
(39, 'member', '::1', '2017-05-30', '04:42:21'),
(40, 'member', '::1', '2017-05-30', '04:46:21'),
(41, 'member', '::1', '2017-05-30', '04:46:22'),
(42, 'member', '::1', '2017-05-30', '04:46:25'),
(43, 'member', '::1', '2017-05-30', '04:46:27'),
(44, 'member', '::1', '2017-05-30', '04:49:20'),
(45, 'member', '::1', '2017-05-30', '04:52:48'),
(46, 'member', '::1', '2017-05-30', '04:55:58'),
(47, 'member', '::1', '2017-05-30', '04:56:06'),
(48, 'member', '::1', '2017-05-30', '06:02:15'),
(49, 'member', '::1', '2017-05-30', '06:03:30'),
(50, 'member', '::1', '2017-05-30', '06:03:51'),
(51, 'member', '::1', '2017-05-30', '06:04:02'),
(52, 'member', '::1', '2017-05-30', '06:04:12'),
(53, 'member', '::1', '2017-05-30', '06:04:22'),
(54, 'member', '::1', '2017-05-30', '06:06:07'),
(55, 'member', '::1', '2017-05-30', '06:06:43'),
(56, 'member', '::1', '2017-05-30', '06:06:56'),
(57, 'member', '::1', '2017-05-30', '06:07:20'),
(58, 'member', '::1', '2017-05-30', '06:07:22'),
(59, 'member', '::1', '2017-05-30', '06:07:45'),
(60, 'member', '::1', '2017-05-30', '06:09:26'),
(61, 'member', '::1', '2017-05-30', '06:09:32'),
(62, 'member', '::1', '2017-05-30', '06:10:09'),
(63, 'member', '::1', '2017-05-30', '06:10:30'),
(64, 'member', '::1', '2017-05-30', '06:14:19'),
(65, 'member', '::1', '2017-05-30', '06:15:05'),
(66, 'member', '::1', '2017-05-30', '06:15:12'),
(67, 'member', '::1', '2017-05-30', '06:15:36'),
(68, 'member', '::1', '2017-05-30', '06:15:46'),
(69, 'member', '::1', '2017-05-30', '06:15:48'),
(70, 'member', '::1', '2017-05-30', '06:15:57'),
(71, 'member', '::1', '2017-05-30', '06:16:22'),
(72, 'member', '::1', '2017-05-30', '06:18:46'),
(73, 'member', '::1', '2017-05-30', '06:24:02'),
(74, 'member', '::1', '2017-05-30', '06:24:28'),
(75, 'member', '::1', '2017-05-30', '06:25:38'),
(76, 'member', '::1', '2017-05-30', '06:26:12'),
(77, 'member', '::1', '2017-05-30', '06:27:28'),
(78, 'member', '::1', '2017-05-30', '06:27:33'),
(79, 'member', '::1', '2017-05-30', '06:27:52'),
(80, 'member', '::1', '2017-05-30', '06:27:53'),
(81, 'member', '::1', '2017-05-30', '06:27:58'),
(82, 'member', '::1', '2017-05-30', '06:28:05'),
(83, 'member', '::1', '2017-05-30', '06:28:52'),
(84, 'member', '::1', '2017-05-30', '06:28:54'),
(85, 'member', '::1', '2017-05-30', '06:29:11'),
(86, 'member', '::1', '2017-05-30', '06:29:17'),
(87, 'member', '::1', '2017-05-30', '06:29:27'),
(88, 'member', '::1', '2017-05-30', '06:29:31'),
(89, 'member', '::1', '2017-05-30', '06:29:32'),
(90, 'member', '::1', '2017-05-30', '06:29:45'),
(91, 'member', '::1', '2017-05-30', '06:29:55'),
(92, 'member', '::1', '2017-05-30', '06:30:02'),
(93, 'member', '::1', '2017-05-30', '06:30:03'),
(94, 'member', '::1', '2017-05-30', '06:32:22'),
(95, 'member', '::1', '2017-05-30', '06:32:26'),
(96, 'member', '::1', '2017-05-30', '06:32:28'),
(97, 'member', '::1', '2017-05-30', '06:32:46'),
(98, 'member', '::1', '2017-05-30', '06:32:46'),
(99, 'member', '::1', '2017-05-30', '06:32:49'),
(100, 'member', '::1', '2017-05-30', '06:32:53'),
(101, 'member', '::1', '2017-05-30', '06:34:00'),
(102, 'member', '::1', '2017-05-30', '06:34:00'),
(103, 'member', '::1', '2017-05-30', '06:34:03'),
(104, 'member', '::1', '2017-05-30', '06:34:04'),
(105, 'member', '::1', '2017-05-30', '06:34:28'),
(106, 'member', '::1', '2017-05-30', '06:34:28'),
(107, 'member', '::1', '2017-05-30', '06:34:30'),
(108, 'member', '::1', '2017-05-30', '06:34:32'),
(109, 'member', '::1', '2017-05-30', '06:34:43'),
(110, 'member', '::1', '2017-05-30', '06:34:43'),
(111, 'member', '::1', '2017-05-30', '06:34:45'),
(112, 'member', '::1', '2017-05-30', '06:34:53'),
(113, 'member', '::1', '2017-05-30', '06:34:58'),
(114, 'member', '::1', '2017-05-30', '06:35:00'),
(115, 'member', '::1', '2017-05-30', '06:35:02'),
(116, 'member', '::1', '2017-05-30', '06:36:13'),
(117, 'member', '::1', '2017-05-30', '06:36:16'),
(118, 'member', '::1', '2017-05-30', '06:36:27'),
(119, 'member', '::1', '2017-05-30', '06:36:33'),
(120, 'member', '::1', '2017-05-30', '06:36:33'),
(121, 'member', '::1', '2017-05-30', '06:37:43'),
(122, 'member', '::1', '2017-05-30', '06:37:47'),
(123, 'member', '::1', '2017-05-30', '06:38:01'),
(124, 'member', '::1', '2017-05-30', '06:38:03'),
(125, 'member', '::1', '2017-05-30', '06:38:06'),
(126, 'member', '::1', '2017-05-30', '06:38:11'),
(127, 'member', '::1', '2017-05-30', '06:38:48'),
(128, 'member', '::1', '2017-05-30', '06:38:52'),
(129, 'member', '::1', '2017-05-30', '06:38:52'),
(130, 'member', '::1', '2017-05-30', '06:41:28'),
(131, 'member', '::1', '2017-05-30', '06:41:29'),
(132, 'member', '::1', '2017-05-30', '06:41:48'),
(133, 'member', '::1', '2017-05-30', '06:41:51'),
(134, 'member', '::1', '2017-05-30', '06:41:52'),
(135, 'member', '::1', '2017-05-30', '06:45:51'),
(136, 'member', '::1', '2017-05-30', '06:45:51'),
(137, 'member', '::1', '2017-05-30', '06:45:55'),
(138, 'member', '::1', '2017-05-30', '06:45:56'),
(139, 'member', '::1', '2017-05-30', '06:48:54'),
(140, 'member', '::1', '2017-05-30', '06:49:14'),
(141, 'member', '::1', '2017-05-30', '06:50:04'),
(142, 'member', '::1', '2017-05-30', '06:51:58'),
(143, 'member', '::1', '2017-05-30', '06:51:58'),
(144, 'member', '::1', '2017-05-30', '06:52:02'),
(145, 'member', '::1', '2017-05-30', '06:52:04'),
(146, 'member', '::1', '2017-05-30', '06:52:06'),
(147, 'member', '::1', '2017-05-30', '06:52:11'),
(148, 'member', '::1', '2017-05-30', '06:52:19'),
(149, 'member', '::1', '2017-05-30', '06:52:21'),
(150, 'member', '::1', '2017-05-30', '06:52:26'),
(151, 'member', '::1', '2017-05-30', '06:52:27'),
(152, 'member', '::1', '2017-05-30', '06:52:30'),
(153, 'member', '::1', '2017-05-30', '06:52:31'),
(154, 'member', '::1', '2017-05-30', '06:56:12'),
(155, 'member', '::1', '2017-05-30', '06:56:40'),
(156, 'member', '::1', '2017-05-30', '06:56:52'),
(157, 'member', '::1', '2017-05-30', '06:57:07'),
(158, 'member', '::1', '2017-05-30', '06:57:10');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `items_comment` FOREIGN KEY (`Item_ID`) REFERENCES `items` (`Item_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_comment` FOREIGN KEY (`User_ID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `cat_1` FOREIGN KEY (`Cat_ID`) REFERENCES `categories` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_1` FOREIGN KEY (`Member_ID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
