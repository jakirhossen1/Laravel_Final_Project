-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 01:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwad`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `allUsers` ()  BEGIN 
SELECT * FROM users;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteData` (IN `aUID` INT)  BEGIN
DELETE FROM user_type WHERE uid=aUID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `get_inventory` (IN `product` CHAR(8), OUT `count` INT)  BEGIN
SELECT 45 into count;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `if_elses` (IN `amount` DECIMAL(10,2))  BEGIN
DECLARE student_level varchar(100);
if amount<5000 THEN
SET student_level='Regular';
ELSE
SET student_level='Better Student';
END IF;
SELECT student_level;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `if_els_if_statement` (IN `Amount` DECIMAL(10,2))  BEGIN
DECLARE student_level VARCHAR(100);
IF Amount<5000 THEN
SET student_level='Regular';
ELSEIF(Amount<=7000) THEN
SET student_level='Better Student';
ELSEIF(Amount>8000) THEN
SET student_level='Best Student';
END IF;
SELECT student_level;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertData` (`userType` VARCHAR(255), `groupName` VARCHAR(255))  BEGIN
insert into  user_type(user_type,group_name)values(userType,groupName);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insMenucature` (`Name` VARCHAR(50), `Address` VARCHAR(50), `Contact_no` VARCHAR(50))  BEGIN
insert into manufacturer(name,address,contac_no)values(Name,Address,Contac_no);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `iterate_statement` ()  BEGIN
declare x int;
declare str varchar(255);
set x=1;
set str='';
loop_label:loop
if x>10 then
leave loop_label;
end if;
set x=x+1;
if(x mod 2) then
iterate loop_label;
else
set str=concat(str,x,',');
end if;
select str;
end loop;
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `product_total` (IN `qty` INT, IN `price` INT, OUT `total` INT)  BEGIN
set total=qty*price;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `repeat_loop` ()  BEGIN
DECLARE x INT;
DECLARE str VARCHAR(255);
SET x=3;
SET str='';
REPEAT  
SET str=CONCAT(str,X,',');
SET x=x+3;
UNTIL x>15
END REPEAT;
SELECT str;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectData` ()  BEGIN
SELECT * from user_type;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `selectDetails` (IN `buid` INT)  BEGIN
SELECT * from user_type where uid=buid;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateData` (`userType` VARCHAR(255), `groupName` VARCHAR(255), `aUid` INT)  BEGIN
update user_type set user_type=userType,group_name=groupName WHERE uid=aUid;
END$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `ec` () RETURNS INT(11) BEGIN
DECLARE x int;
SET x=10;
RETURN x;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cid` int(11) NOT NULL,
  `did` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `city_name` varchar(100) DEFAULT NULL,
  `_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `did`, `id`, `city_name`, `_token`) VALUES
(3, 9, 6, 'Gulshan', 'v4NdeH3R80RbsB6t3FgnGMFUXjovuWfte5ox9uVm'),
(4, 9, 6, 'Uttara', 'v4NdeH3R80RbsB6t3FgnGMFUXjovuWfte5ox9uVm'),
(5, 14, 5, 'Rupsha', 'v4NdeH3R80RbsB6t3FgnGMFUXjovuWfte5ox9uVm'),
(6, 17, 11, 'Feni', 'gTSCcIUQUKYxke7An6eNkdfBtgmzFYK3d2LoI1ZH'),
(7, 31, 5, 'Satkhira City', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(8, 35, 11, 'Chandpur Sadar', 'v4NdeH3R80RbsB6t3FgnGMFUXjovuWfte5ox9uVm'),
(9, 37, 11, 'Laxmipur sadar', 'gTSCcIUQUKYxke7An6eNkdfBtgmzFYK3d2LoI1ZH'),
(10, 31, 5, 'Kolaroa', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(11, 35, 11, 'Faridgonj', 'v4NdeH3R80RbsB6t3FgnGMFUXjovuWfte5ox9uVm'),
(12, 42, 11, 'Coxs Bazar sadar', 'gTSCcIUQUKYxke7An6eNkdfBtgmzFYK3d2LoI1ZH'),
(13, 16, 5, 'Benapol', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(14, 44, 11, 'Brahmanbaria sadar', 'gTSCcIUQUKYxke7An6eNkdfBtgmzFYK3d2LoI1ZH'),
(15, 16, 5, 'Jashore City', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(16, 4, 6, 'Shahjahanpur', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(17, 4, 2, 'Sherpur', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(18, 22, 5, 'Khulna City', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(19, 4, 2, 'Dhunot', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(20, 4, 2, 'Shariakandi', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(21, 21, 6, 'Sharishabari', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(22, 48, 11, 'Khagrachari sadar', 'gTSCcIUQUKYxke7An6eNkdfBtgmzFYK3d2LoI1ZH'),
(23, 21, 9, 'Dewangonj', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(24, 14, 5, 'Mongla', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(25, 21, 9, 'Islampur', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'Afghanistan'),
(2, 'Åland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados'),
(21, 'Belarus'),
(22, 'Belgium'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bermuda'),
(26, 'Bhutan'),
(27, 'Bolivia, Plurinational State of'),
(28, 'Bonaire, Sint Eustatius and Saba'),
(29, 'Bosnia and Herzegovina'),
(30, 'Botswana'),
(31, 'Bouvet Island'),
(32, 'Brazil'),
(33, 'British Indian Ocean Territory'),
(34, 'Brunei Darussalam'),
(35, 'Bulgaria'),
(36, 'Burkina Faso'),
(37, 'Burundi'),
(38, 'Cambodia'),
(39, 'Cameroon'),
(40, 'Canada'),
(41, 'Cape Verde'),
(42, 'Cayman Islands'),
(43, 'Central African Republic'),
(44, 'Chad'),
(45, 'Chile'),
(46, 'China'),
(47, 'Christmas Island'),
(48, 'Cocos (Keeling) Islands'),
(49, 'Colombia'),
(50, 'Comoros'),
(51, 'Congo'),
(52, 'Congo, the Democratic Republic of the'),
(53, 'Cook Islands'),
(54, 'Costa Rica'),
(55, 'Côte d\'Ivoire'),
(56, 'Croatia'),
(57, 'Cuba'),
(58, 'Curaçao'),
(59, 'Cyprus'),
(60, 'Czech Republic'),
(61, 'Denmark'),
(62, 'Djibouti'),
(63, 'Dominica'),
(64, 'Dominican Republic'),
(65, 'Ecuador'),
(66, 'Egypt'),
(67, 'El Salvador'),
(68, 'Equatorial Guinea'),
(69, 'Eritrea'),
(70, 'Estonia'),
(71, 'Ethiopia'),
(72, 'Falkland Islands (Malvinas)'),
(73, 'Faroe Islands'),
(74, 'Fiji'),
(75, 'Finland'),
(76, 'France'),
(77, 'French Guiana'),
(78, 'French Polynesia'),
(79, 'French Southern Territories'),
(80, 'Gabon'),
(81, 'Gambia'),
(82, 'Georgia'),
(83, 'Germany'),
(84, 'Ghana'),
(85, 'Gibraltar'),
(86, 'Greece'),
(87, 'Greenland'),
(88, 'Grenada'),
(89, 'Guadeloupe'),
(90, 'Guam'),
(91, 'Guatemala'),
(92, 'Guernsey'),
(93, 'Guinea'),
(94, 'Guinea-Bissau'),
(95, 'Guyana'),
(96, 'Haiti'),
(97, 'Heard Island and McDonald Islands'),
(98, 'Holy See (Vatican City State)'),
(99, 'Honduras'),
(100, 'Hong Kong'),
(101, 'Hungary'),
(102, 'Iceland'),
(103, 'India'),
(104, 'Indonesia'),
(105, 'Iran, Islamic Republic of'),
(106, 'Iraq'),
(107, 'Ireland'),
(108, 'Isle of Man'),
(109, 'Israel'),
(110, 'Italy'),
(111, 'Jamaica'),
(112, 'Japan'),
(113, 'Jersey'),
(114, 'Jordan'),
(115, 'Kazakhstan'),
(116, 'Kenya'),
(117, 'Kiribati'),
(118, 'Korea, Democratic People\'s Republic of'),
(119, 'Korea, Republic of'),
(120, 'Kuwait'),
(121, 'Kyrgyzstan'),
(122, 'Lao People\'s Democratic Republic'),
(123, 'Latvia'),
(124, 'Lebanon'),
(125, 'Lesotho'),
(126, 'Liberia'),
(127, 'Libya'),
(128, 'Liechtenstein'),
(129, 'Lithuania'),
(130, 'Luxembourg'),
(131, 'Macao'),
(132, 'Macedonia, the Former Yugoslav Republic of'),
(133, 'Madagascar'),
(134, 'Malawi'),
(135, 'Malaysia'),
(136, 'Maldives'),
(137, 'Mali'),
(138, 'Malta'),
(139, 'Marshall Islands'),
(140, 'Martinique'),
(141, 'Mauritania'),
(142, 'Mauritius'),
(143, 'Mayotte'),
(144, 'Mexico'),
(145, 'Micronesia, Federated States of'),
(146, 'Moldova, Republic of'),
(147, 'Monaco'),
(148, 'Mongolia'),
(149, 'Montenegro'),
(150, 'Montserrat'),
(151, 'Morocco'),
(152, 'Mozambique'),
(153, 'Myanmar'),
(154, 'Namibia'),
(155, 'Nauru'),
(156, 'Nepal'),
(157, 'Netherlands'),
(158, 'New Caledonia'),
(159, 'New Zealand'),
(160, 'Nicaragua'),
(161, 'Niger'),
(162, 'Nigeria'),
(163, 'Niue'),
(164, 'Norfolk Island'),
(165, 'Northern Mariana Islands'),
(166, 'Norway'),
(167, 'Oman'),
(168, 'Pakistan'),
(169, 'Palau'),
(170, 'Palestine, State of'),
(171, 'Panama'),
(172, 'Papua New Guinea'),
(173, 'Paraguay'),
(174, 'Peru'),
(175, 'Philippines'),
(176, 'Pitcairn'),
(177, 'Poland'),
(178, 'Portugal'),
(179, 'Puerto Rico'),
(180, 'Qatar'),
(181, 'Réunion'),
(182, 'Romania'),
(183, 'Russian Federation'),
(184, 'Rwanda'),
(185, 'Saint Barthélemy'),
(186, 'Saint Helena, Ascension and Tristan da Cunha'),
(187, 'Saint Kitts and Nevis'),
(188, 'Saint Lucia'),
(189, 'Saint Martin (French part)'),
(190, 'Saint Pierre and Miquelon'),
(191, 'Saint Vincent and the Grenadines'),
(192, 'Samoa'),
(193, 'San Marino'),
(194, 'Sao Tome and Principe'),
(195, 'Saudi Arabia'),
(196, 'Senegal'),
(197, 'Serbia'),
(198, 'Seychelles'),
(199, 'Sierra Leone'),
(200, 'Singapore'),
(201, 'Sint Maarten (Dutch part)'),
(202, 'Slovakia'),
(203, 'Slovenia'),
(204, 'Solomon Islands'),
(205, 'Somalia'),
(206, 'South Africa'),
(207, 'South Georgia and the South Sandwich Islands'),
(208, 'South Sudan'),
(209, 'Spain'),
(210, 'Sri Lanka'),
(211, 'Sudan'),
(212, 'Suriname'),
(213, 'Svalbard and Jan Mayen'),
(214, 'Swaziland'),
(215, 'Sweden'),
(216, 'Switzerland'),
(217, 'Syrian Arab Republic'),
(218, 'Taiwan, Province of China'),
(219, 'Tajikistan'),
(220, 'Tanzania, United Republic of'),
(221, 'Thailand'),
(222, 'Timor-Leste'),
(223, 'Togo'),
(224, 'Tokelau'),
(225, 'Tonga'),
(226, 'Trinidad and Tobago'),
(227, 'Tunisia'),
(228, 'Turkey'),
(229, 'Turkmenistan'),
(230, 'Turks and Caicos Islands'),
(231, 'Tuvalu'),
(232, 'Uganda'),
(233, 'Ukraine'),
(234, 'United Arab Emirates'),
(235, 'United Kingdom'),
(236, 'United States'),
(237, 'United States Minor Outlying Islands'),
(238, 'Uruguay'),
(239, 'Uzbekistan'),
(240, 'Vanuatu'),
(241, 'Venezuela, Bolivarian Republic of'),
(242, 'Viet Nam'),
(243, 'Virgin Islands, British'),
(244, 'Virgin Islands, U.S.'),
(245, 'Wallis and Futuna'),
(246, 'Western Sahara'),
(247, 'Yemen'),
(248, 'Zambia'),
(249, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `did` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `district` varchar(100) DEFAULT NULL,
  `_token` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`did`, `id`, `district`, `_token`) VALUES
(3, 2, 'Nogaon', NULL),
(4, 2, 'Bogura', NULL),
(9, 6, 'Dhaka', 'qXnr2sm3ATHUAzxqEDBRGKRo1vWGEj2rltXR8Uqj'),
(11, 6, 'Manikgonj', 'qXnr2sm3ATHUAzxqEDBRGKRo1vWGEj2rltXR8Uqj'),
(14, 5, 'Bagerhat', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(15, 6, 'Gopalgonj', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(16, 5, 'Jashore', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(17, 11, 'Feni', 'gTSCcIUQUKYxke7An6eNkdfBtgmzFYK3d2LoI1ZH'),
(18, 6, 'Norshingdi', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(19, 5, 'Jhenaidah', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(20, 11, 'Noakhali', 'gTSCcIUQUKYxke7An6eNkdfBtgmzFYK3d2LoI1ZH'),
(21, 9, 'Jamalpur', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(22, 5, 'Khulna', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(23, 9, 'Mymenshingha', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(24, 5, 'Kushtia', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(25, 9, 'Netrokona', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(26, 5, 'Magura', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(27, 5, 'Meherpur', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(28, 9, 'Kishoregonj', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(29, 5, 'Narail', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(30, 2, 'Sirajgonj', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(31, 5, 'Satkhira', 'HhNJjlUiouMBrSsr2SxNCnS0fleT2Ksl37omdqtL'),
(32, 2, 'Pabna', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(33, 2, 'Natore', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(34, 2, 'Gaibandha', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(35, 11, 'Chandpur', 'v4NdeH3R80RbsB6t3FgnGMFUXjovuWfte5ox9uVm'),
(36, 10, 'Dinajpur', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(37, 11, 'Laxmipur', 'gTSCcIUQUKYxke7An6eNkdfBtgmzFYK3d2LoI1ZH'),
(38, 10, 'Thakurgaon', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(39, 10, 'Nilphamari', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(40, 7, 'Bhola', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(41, 8, 'Hobigonj', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(42, 11, 'Coxs Bazar', 'gTSCcIUQUKYxke7An6eNkdfBtgmzFYK3d2LoI1ZH'),
(43, 8, 'Sunamgonj', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(44, 11, 'B. Baria', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(45, 11, 'Noakhali', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(46, 11, 'Brahmanbaria', 'gTSCcIUQUKYxke7An6eNkdfBtgmzFYK3d2LoI1ZH'),
(47, 9, 'Sherpur', 'sDinkvl1pCoj0J5tWLuGlzyIQNxQVrlYx1EMpeBg'),
(48, 11, 'Khagrachari', 'gTSCcIUQUKYxke7An6eNkdfBtgmzFYK3d2LoI1ZH'),
(49, 11, 'comilla', 'yftmk2Ytp2sRJoWk5TRWCrLRz5NYbdvhCKPbDhqx');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(11) NOT NULL,
  `division_name` varchar(100) DEFAULT NULL,
  `_token` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `division_name`, `_token`) VALUES
(2, 'Rajshahi', NULL),
(5, 'Khulna', 'qXnr2sm3ATHUAzxqEDBRGKRo1vWGEj2rltXR8Uqj'),
(6, 'Dhaka', 'qXnr2sm3ATHUAzxqEDBRGKRo1vWGEj2rltXR8Uqj'),
(7, 'Borisal', 'qXnr2sm3ATHUAzxqEDBRGKRo1vWGEj2rltXR8Uqj'),
(8, 'Sylhet', 'qXnr2sm3ATHUAzxqEDBRGKRo1vWGEj2rltXR8Uqj'),
(9, 'Mymensingh', 'qXnr2sm3ATHUAzxqEDBRGKRo1vWGEj2rltXR8Uqj'),
(10, 'Rongpur', 'qXnr2sm3ATHUAzxqEDBRGKRo1vWGEj2rltXR8Uqj'),
(11, 'Chittagong', 'qXnr2sm3ATHUAzxqEDBRGKRo1vWGEj2rltXR8Uqj'),
(15, NULL, 'XUKRfND1dZuxaga2BZZIBTvrlelJeV02olvp1YHj');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contac_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contac_no`) VALUES
(6, 'EPSON', 'Elephent Road', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_12_29_112852_user_type', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `menufacturer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `menufacturer_id`) VALUES
(1, 'RAM', 1200, 6);

-- --------------------------------------------------------

--
-- Stand-in structure for view `total_users`
-- (See below for the actual view)
--
CREATE TABLE `total_users` (
`user_type` varchar(100)
,`group_name` varchar(200)
,`name` varchar(100)
,`phone` int(11)
,`salary` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `reg_date`, `salary`, `city`, `district`, `username`, `password`, `uid`) VALUES
(8, 'Jakir Hossain', 1739227722, '2021-11-09', '50000.00', 'Dhaka', 'Dhaka', 'jakiridb', 'jakir321', 14),
(9, 'Ziaur Rahman', 1722778899, '2021-11-17', '500000.00', 'Segunbagicha', 'Dhaka', 'ziaidb', 'admin', 14);

-- --------------------------------------------------------

--
-- Stand-in structure for view `usersabc`
-- (See below for the actual view)
--
CREATE TABLE `usersabc` (
`id` int(20)
,`name` varchar(100)
,`phone` int(11)
,`reg_date` date
,`salary` decimal(10,2)
,`city` varchar(100)
,`district` varchar(50)
,`username` varchar(100)
,`password` varchar(100)
,`uid` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `user_lv`
--

CREATE TABLE `user_lv` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text NOT NULL,
  `phone` text DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `_token` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_lv`
--

INSERT INTO `user_lv` (`id`, `name`, `email`, `password`, `phone`, `picture`, `status`, `_token`) VALUES
(4, 'Md. Abdur Rahim Bhuiyan', 'facultypwad@gmail.com', 'Admin@321#', '01979666696', 'assets/upload/data-driven-design_0-d569f7de0ed724977720178c85786033.jpg', 1, 'gnFIBvNXMLfuSrntSf4PeVddwe4d19cOAQyMgwzR'),
(5, 'Md. Abdur Rahim', 'rahimidb@gmail.com', 'Admin@321#', '01979666696', 'assets/upload/62078378_2312126052164693_7911682912917913600_n.jpg', 1, '8PjwDyyVuIN0ACIs2ME5FHHgEhPF0P8a49NFXkbq'),
(8, 'MD Jahidul Islam', 'jahidul132@gmail.com', '1234', '0134521456', NULL, 1, '6tg2KnxoSGiFZnSu4RuMrOAbZeqidiTf8LTNl3Sn');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `uid` int(11) NOT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `group_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`uid`, `user_type`, `group_name`) VALUES
(14, 'superadmin', NULL),
(15, 'admin', NULL);

--
-- Triggers `user_type`
--
DELIMITER $$
CREATE TRIGGER `usersDelete` AFTER DELETE ON `user_type` FOR EACH ROW BEGIN
DELETE FROM users WHERE uid=old.uid;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_type_backup`
--

CREATE TABLE `user_type_backup` (
  `uid` int(11) NOT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `group_name` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `status_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type_backup`
--

INSERT INTO `user_type_backup` (`uid`, `user_type`, `group_name`, `status`, `status_time`) VALUES
(11, 'Management', 'Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure for view `total_users`
--
DROP TABLE IF EXISTS `total_users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_users`  AS SELECT `user_type`.`user_type` AS `user_type`, `user_type`.`group_name` AS `group_name`, `users`.`name` AS `name`, `users`.`phone` AS `phone`, `users`.`salary` AS `salary` FROM (`user_type` join `users` on(`user_type`.`uid` = `users`.`uid`)) ;

-- --------------------------------------------------------

--
-- Structure for view `usersabc`
--
DROP TABLE IF EXISTS `usersabc`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `usersabc`  AS SELECT `users`.`id` AS `id`, `users`.`name` AS `name`, `users`.`phone` AS `phone`, `users`.`reg_date` AS `reg_date`, `users`.`salary` AS `salary`, `users`.`city` AS `city`, `users`.`district` AS `district`, `users`.`username` AS `username`, `users`.`password` AS `password`, `users`.`uid` AS `uid` FROM `users` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `fk_city_district` (`did`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`did`),
  ADD KEY `fk_district_divsion` (`id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user_lv`
--
ALTER TABLE `user_lv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_lv`
--
ALTER TABLE `user_lv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `fk_city_district` FOREIGN KEY (`did`) REFERENCES `district` (`did`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `fk_district_divsion` FOREIGN KEY (`id`) REFERENCES `division` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `abc` FOREIGN KEY (`uid`) REFERENCES `user_type` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
