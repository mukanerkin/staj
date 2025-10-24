-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 24 Eki 2025, 19:40:05
-- Sunucu sürümü: 10.5.26-MariaDB
-- PHP Sürümü: 8.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cw_fzk_proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `code_2` varchar(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `countries`
--

INSERT INTO `countries` (`id`, `code_2`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'tr', 'Türkiye', '2025-09-19 19:10:53', NULL, NULL),
(2, 'vi', 'ABD Virgin Adaları', '2025-09-19 19:10:53', NULL, NULL),
(3, 'af', 'Afganistan', '2025-09-19 19:10:53', NULL, NULL),
(4, 'ax', 'Aland Adaları', '2025-09-19 19:10:53', NULL, NULL),
(5, 'de', 'Almanya', '2025-09-19 19:10:53', NULL, NULL),
(6, 'us', 'Amerika Birleşik Devletleri', '2025-09-19 19:10:53', NULL, NULL),
(7, 'um', 'Amerika Birleşik Devletleri Küçük Dış Adaları', '2025-09-19 19:10:53', NULL, NULL),
(8, 'as', 'Amerikan Samoası', '2025-09-19 19:10:53', NULL, NULL),
(9, 'ad', 'Andora', '2025-09-19 19:10:53', NULL, NULL),
(10, 'ao', 'Angola', '2025-09-19 19:10:53', NULL, NULL),
(11, 'ai', 'Anguilla', '2025-09-19 19:10:53', NULL, NULL),
(12, 'aq', 'Antarktika', '2025-09-19 19:10:53', NULL, NULL),
(13, 'ag', 'Antigua ve Barbuda', '2025-09-19 19:10:53', NULL, NULL),
(14, 'ar', 'Arjantin', '2025-09-19 19:10:53', NULL, NULL),
(15, 'al', 'Arnavutluk', '2025-09-19 19:10:53', NULL, NULL),
(16, 'aw', 'Aruba', '2025-09-19 19:10:53', NULL, NULL),
(17, 'qu', 'Avrupa Birliği', '2025-09-19 19:10:53', NULL, NULL),
(18, 'au', 'Avustralya', '2025-09-19 19:10:53', NULL, NULL),
(19, 'at', 'Avusturya', '2025-09-19 19:10:53', NULL, NULL),
(20, 'az', 'Azerbaycan', '2025-09-19 19:10:53', NULL, NULL),
(21, 'bs', 'Bahamalar', '2025-09-19 19:10:53', NULL, NULL),
(22, 'bh', 'Bahreyn', '2025-09-19 19:10:53', NULL, NULL),
(23, 'bd', 'Bangladeş', '2025-09-19 19:10:53', NULL, NULL),
(24, 'bb', 'Barbados', '2025-09-19 19:10:53', NULL, NULL),
(25, 'eh', 'Batı Sahara', '2025-09-19 19:10:53', NULL, NULL),
(26, 'bz', 'Belize', '2025-09-19 19:10:53', NULL, NULL),
(27, 'be', 'Belçika', '2025-09-19 19:10:53', NULL, NULL),
(28, 'bj', 'Benin', '2025-09-19 19:10:53', NULL, NULL),
(29, 'bm', 'Bermuda', '2025-09-19 19:10:53', NULL, NULL),
(30, 'by', 'Beyaz Rusya', '2025-09-19 19:10:53', NULL, NULL),
(31, 'bt', 'Bhutan', '2025-09-19 19:10:53', NULL, NULL),
(32, 'zz', 'Bilinmeyen veya Geçersiz Bölge', '2025-09-19 19:10:53', NULL, NULL),
(33, 'ae', 'Birleşik Arap Emirlikleri', '2025-09-19 19:10:53', NULL, NULL),
(34, 'gb', 'Birleşik Krallık', '2025-09-19 19:10:53', NULL, NULL),
(35, 'bo', 'Bolivya', '2025-09-19 19:10:53', NULL, NULL),
(36, 'ba', 'Bosna Hersek', '2025-09-19 19:10:53', NULL, NULL),
(37, 'bw', 'Botsvana', '2025-09-19 19:10:53', NULL, NULL),
(38, 'bv', 'Bouvet Adası', '2025-09-19 19:10:53', NULL, NULL),
(39, 'br', 'Brezilya', '2025-09-19 19:10:53', NULL, NULL),
(40, 'bn', 'Brunei', '2025-09-19 19:10:53', NULL, NULL),
(41, 'bg', 'Bulgaristan', '2025-09-19 19:10:53', NULL, NULL),
(42, 'bf', 'Burkina Faso', '2025-09-19 19:10:53', NULL, NULL),
(43, 'bi', 'Burundi', '2025-09-19 19:10:53', NULL, NULL),
(44, 'cv', 'Cape Verde', '2025-09-19 19:10:53', NULL, NULL),
(45, 'gi', 'Cebelitarık', '2025-09-19 19:10:53', NULL, NULL),
(46, 'dz', 'Cezayir', '2025-09-19 19:10:53', NULL, NULL),
(47, 'cx', 'Christmas Adası', '2025-09-19 19:10:53', NULL, NULL),
(48, 'dj', 'Cibuti', '2025-09-19 19:10:53', NULL, NULL),
(49, 'cc', 'Cocos Adaları', '2025-09-19 19:10:53', NULL, NULL),
(50, 'ck', 'Cook Adaları', '2025-09-19 19:10:53', NULL, NULL),
(51, 'td', 'Çad', '2025-09-19 19:10:53', NULL, NULL),
(52, 'cz', 'Çek Cumhuriyeti', '2025-09-19 19:10:53', NULL, NULL),
(53, 'cn', 'Çin', '2025-09-19 19:10:53', NULL, NULL),
(54, 'dk', 'Danimarka', '2025-09-19 19:10:53', NULL, NULL),
(55, 'dm', 'Dominik', '2025-09-19 19:10:53', NULL, NULL),
(56, 'do', 'Dominik Cumhuriyeti', '2025-09-19 19:10:53', NULL, NULL),
(57, 'tl', 'Doğu Timor', '2025-09-19 19:10:53', NULL, NULL),
(58, 'ec', 'Ekvator', '2025-09-19 19:10:53', NULL, NULL),
(59, 'gq', 'Ekvator Ginesi', '2025-09-19 19:10:53', NULL, NULL),
(60, 'sv', 'El Salvador', '2025-09-19 19:10:53', NULL, NULL),
(61, 'id', 'Endonezya', '2025-09-19 19:10:53', NULL, NULL),
(62, 'er', 'Eritre', '2025-09-19 19:10:53', NULL, NULL),
(63, 'am', 'Ermenistan', '2025-09-19 19:10:53', NULL, NULL),
(64, 'ee', 'Estonya', '2025-09-19 19:10:53', NULL, NULL),
(65, 'et', 'Etiyopya', '2025-09-19 19:10:53', NULL, NULL),
(66, 'fk', 'Falkland Adaları (Malvinalar]', '2025-09-19 19:10:53', NULL, NULL),
(67, 'fo', 'Faroe Adaları', '2025-09-19 19:10:53', NULL, NULL),
(68, 'ma', 'Fas', '2025-09-19 19:10:53', NULL, NULL),
(69, 'fj', 'Fiji', '2025-09-19 19:10:53', NULL, NULL),
(70, 'ci', 'Fildişi Sahilleri', '2025-09-19 19:10:53', NULL, NULL),
(71, 'ph', 'Filipinler', '2025-09-19 19:10:53', NULL, NULL),
(72, 'ps', 'Filistin Bölgesi', '2025-09-19 19:10:53', NULL, NULL),
(73, 'fi', 'Finlandiya', '2025-09-19 19:10:53', NULL, NULL),
(74, 'fr', 'Fransa', '2025-09-19 19:10:53', NULL, NULL),
(75, 'gf', 'Fransız Guyanası', '2025-09-19 19:10:53', NULL, NULL),
(76, 'tf', 'Fransız Güney Bölgeleri', '2025-09-19 19:10:53', NULL, NULL),
(77, 'pf', 'Fransız Polinezyası', '2025-09-19 19:10:53', NULL, NULL),
(78, 'ga', 'Gabon', '2025-09-19 19:10:53', NULL, NULL),
(79, 'gm', 'Gambia', '2025-09-19 19:10:53', NULL, NULL),
(80, 'gh', 'Gana', '2025-09-19 19:10:53', NULL, NULL),
(81, 'gn', 'Gine', '2025-09-19 19:10:53', NULL, NULL),
(82, 'gw', 'Gine-Bissau', '2025-09-19 19:10:53', NULL, NULL),
(83, 'gd', 'Granada', '2025-09-19 19:10:53', NULL, NULL),
(84, 'gl', 'Grönland', '2025-09-19 19:10:53', NULL, NULL),
(85, 'gp', 'Guadeloupe', '2025-09-19 19:10:53', NULL, NULL),
(86, 'gu', 'Guam', '2025-09-19 19:10:53', NULL, NULL),
(87, 'gt', 'Guatemala', '2025-09-19 19:10:53', NULL, NULL),
(88, 'gg', 'Guernsey', '2025-09-19 19:10:53', NULL, NULL),
(89, 'gy', 'Guyana', '2025-09-19 19:10:53', NULL, NULL),
(90, 'za', 'Güney Afrika', '2025-09-19 19:10:53', NULL, NULL),
(91, 'gs', 'Güney Georgia ve Güney Sandwich Adaları', '2025-09-19 19:10:53', NULL, NULL),
(92, 'kr', 'Güney Kore', '2025-09-19 19:10:53', NULL, NULL),
(93, 'cy', 'Güney Kıbrıs Rum Kesimi', '2025-09-19 19:10:53', NULL, NULL),
(94, 'ge', 'Gürcistan', '2025-09-19 19:10:53', NULL, NULL),
(95, 'ht', 'Haiti', '2025-09-19 19:10:53', NULL, NULL),
(96, 'hm', 'Heard Adası ve McDonald Adaları', '2025-09-19 19:10:53', NULL, NULL),
(97, 'in', 'Hindistan', '2025-09-19 19:10:53', NULL, NULL),
(98, 'io', 'Hint Okyanusu İngiliz Bölgesi', '2025-09-19 19:10:53', NULL, NULL),
(99, 'nl', 'Hollanda', '2025-09-19 19:10:53', NULL, NULL),
(100, 'an', 'Hollanda Antilleri', '2025-09-19 19:10:53', NULL, NULL),
(101, 'hn', 'Honduras', '2025-09-19 19:10:53', NULL, NULL),
(102, 'hk', 'Hong Kong SAR - Çin', '2025-09-19 19:10:53', NULL, NULL),
(103, 'hr', 'Hırvatistan', '2025-09-19 19:10:53', NULL, NULL),
(104, 'iq', 'Irak', '2025-09-19 19:10:53', NULL, NULL),
(105, 'vg', 'İngiliz Virgin Adaları', '2025-09-19 19:10:53', NULL, NULL),
(106, 'ir', 'İran', '2025-09-19 19:10:53', NULL, NULL),
(107, 'ie', 'İrlanda', '2025-09-19 19:10:53', NULL, NULL),
(108, 'es', 'İspanya', '2025-09-19 19:10:53', NULL, NULL),
(109, 'il', 'İsrail', '2025-09-19 19:10:53', NULL, NULL),
(110, 'se', 'İsveç', '2025-09-19 19:10:53', NULL, NULL),
(111, 'ch', 'İsviçre', '2025-09-19 19:10:53', NULL, NULL),
(112, 'it', 'İtalya', '2025-09-19 19:10:53', NULL, NULL),
(113, 'is', 'İzlanda', '2025-09-19 19:10:53', NULL, NULL),
(114, 'jm', 'Jamaika', '2025-09-19 19:10:53', NULL, NULL),
(115, 'jp', 'Japonya', '2025-09-19 19:10:53', NULL, NULL),
(116, 'je', 'Jersey', '2025-09-19 19:10:53', NULL, NULL),
(117, 'kh', 'Kamboçya', '2025-09-19 19:10:53', NULL, NULL),
(118, 'cm', 'Kamerun', '2025-09-19 19:10:53', NULL, NULL),
(119, 'ca', 'Kanada', '2025-09-19 19:10:53', NULL, NULL),
(120, 'me', 'Karadağ', '2025-09-19 19:10:53', NULL, NULL),
(121, 'qa', 'Katar', '2025-09-19 19:10:53', NULL, NULL),
(122, 'ky', 'Kayman Adaları', '2025-09-19 19:10:53', NULL, NULL),
(123, 'kz', 'Kazakistan', '2025-09-19 19:10:53', NULL, NULL),
(124, 'ke', 'Kenya', '2025-09-19 19:10:53', NULL, NULL),
(125, 'ki', 'Kiribati', '2025-09-19 19:10:53', NULL, NULL),
(126, 'co', 'Kolombiya', '2025-09-19 19:10:53', NULL, NULL),
(127, 'km', 'Komorlar', '2025-09-19 19:10:53', NULL, NULL),
(128, 'cg', 'Kongo', '2025-09-19 19:10:53', NULL, NULL),
(129, 'cd', 'Kongo Demokratik Cumhuriyeti', '2025-09-19 19:10:53', NULL, NULL),
(130, 'cr', 'Kosta Rika', '2025-09-19 19:10:53', NULL, NULL),
(131, 'kw', 'Kuveyt', '2025-09-19 19:10:53', NULL, NULL),
(132, 'kp', 'Kuzey Kore', '2025-09-19 19:10:53', NULL, NULL),
(133, 'mp', 'Kuzey Mariana Adaları', '2025-09-19 19:10:53', NULL, NULL),
(134, 'cu', 'Küba', '2025-09-19 19:10:53', NULL, NULL),
(135, 'kg', 'Kırgızistan', '2025-09-19 19:10:53', NULL, NULL),
(136, 'la', 'Laos', '2025-09-19 19:10:53', NULL, NULL),
(137, 'ls', 'Lesotho', '2025-09-19 19:10:53', NULL, NULL),
(138, 'lv', 'Letonya', '2025-09-19 19:10:53', NULL, NULL),
(139, 'lr', 'Liberya', '2025-09-19 19:10:53', NULL, NULL),
(140, 'ly', 'Libya', '2025-09-19 19:10:53', NULL, NULL),
(141, 'li', 'Liechtenstein', '2025-09-19 19:10:53', NULL, NULL),
(142, 'lt', 'Litvanya', '2025-09-19 19:10:53', NULL, NULL),
(143, 'lb', 'Lübnan', '2025-09-19 19:10:53', NULL, NULL),
(144, 'lu', 'Lüksemburg', '2025-09-19 19:10:53', NULL, NULL),
(145, 'hu', 'Macaristan', '2025-09-19 19:10:53', NULL, NULL),
(146, 'mg', 'Madagaskar', '2025-09-19 19:10:53', NULL, NULL),
(147, 'mo', 'Makao S.A.R. Çin', '2025-09-19 19:10:53', NULL, NULL),
(148, 'mk', 'Makedonya', '2025-09-19 19:10:53', NULL, NULL),
(149, 'mw', 'Malavi', '2025-09-19 19:10:53', NULL, NULL),
(150, 'mv', 'Maldivler', '2025-09-19 19:10:53', NULL, NULL),
(151, 'my', 'Malezya', '2025-09-19 19:10:53', NULL, NULL),
(152, 'ml', 'Mali', '2025-09-19 19:10:53', NULL, NULL),
(153, 'mt', 'Malta', '2025-09-19 19:10:53', NULL, NULL),
(154, 'im', 'Man Adası', '2025-09-19 19:10:53', NULL, NULL),
(155, 'mh', 'Marshall Adaları', '2025-09-19 19:10:53', NULL, NULL),
(156, 'mq', 'Martinik', '2025-09-19 19:10:53', NULL, NULL),
(157, 'mu', 'Mauritius', '2025-09-19 19:10:53', NULL, NULL),
(158, 'yt', 'Mayotte', '2025-09-19 19:10:53', NULL, NULL),
(159, 'mx', 'Meksika', '2025-09-19 19:10:53', NULL, NULL),
(160, 'fm', 'Mikronezya Federal Eyaletleri', '2025-09-19 19:10:53', NULL, NULL),
(161, 'md', 'Moldovya Cumhuriyeti', '2025-09-19 19:10:53', NULL, NULL),
(162, 'mc', 'Monako', '2025-09-19 19:10:53', NULL, NULL),
(163, 'ms', 'Montserrat', '2025-09-19 19:10:53', NULL, NULL),
(164, 'mr', 'Moritanya', '2025-09-19 19:10:53', NULL, NULL),
(165, 'mz', 'Mozambik', '2025-09-19 19:10:53', NULL, NULL),
(166, 'mn', 'Moğolistan', '2025-09-19 19:10:53', NULL, NULL),
(167, 'mm', 'Myanmar', '2025-09-19 19:10:53', NULL, NULL),
(168, 'eg', 'Mısır', '2025-09-19 19:10:53', NULL, NULL),
(169, 'na', 'Namibya', '2025-09-19 19:10:53', NULL, NULL),
(170, 'nr', 'Nauru', '2025-09-19 19:10:53', NULL, NULL),
(171, 'np', 'Nepal', '2025-09-19 19:10:53', NULL, NULL),
(172, 'ne', 'Nijer', '2025-09-19 19:10:53', NULL, NULL),
(173, 'ng', 'Nijerya', '2025-09-19 19:10:53', NULL, NULL),
(174, 'ni', 'Nikaragua', '2025-09-19 19:10:53', NULL, NULL),
(175, 'nu', 'Niue', '2025-09-19 19:10:53', NULL, NULL),
(176, 'nf', 'Norfolk Adası', '2025-09-19 19:10:53', NULL, NULL),
(177, 'no', 'Norveç', '2025-09-19 19:10:53', NULL, NULL),
(178, 'cf', 'Orta Afrika Cumhuriyeti', '2025-09-19 19:10:53', NULL, NULL),
(179, 'uz', 'Özbekistan', '2025-09-19 19:10:53', NULL, NULL),
(180, 'pk', 'Pakistan', '2025-09-19 19:10:53', NULL, NULL),
(181, 'pw', 'Palau', '2025-09-19 19:10:53', NULL, NULL),
(182, 'pa', 'Panama', '2025-09-19 19:10:53', NULL, NULL),
(183, 'pg', 'Papua Yeni Gine', '2025-09-19 19:10:53', NULL, NULL),
(184, 'py', 'Paraguay', '2025-09-19 19:10:53', NULL, NULL),
(185, 'pe', 'Peru', '2025-09-19 19:10:53', NULL, NULL),
(186, 'pn', 'Pitcairn', '2025-09-19 19:10:53', NULL, NULL),
(187, 'pl', 'Polonya', '2025-09-19 19:10:53', NULL, NULL),
(188, 'pt', 'Portekiz', '2025-09-19 19:10:53', NULL, NULL),
(189, 'pr', 'Porto Riko', '2025-09-19 19:10:53', NULL, NULL),
(190, 're', 'Reunion', '2025-09-19 19:10:53', NULL, NULL),
(191, 'ro', 'Romanya', '2025-09-19 19:10:53', NULL, NULL),
(192, 'rw', 'Ruanda', '2025-09-19 19:10:53', NULL, NULL),
(193, 'ru', 'Rusya Federasyonu', '2025-09-19 19:10:53', NULL, NULL),
(194, 'sh', 'Saint Helena', '2025-09-19 19:10:53', NULL, NULL),
(195, 'kn', 'Saint Kitts ve Nevis', '2025-09-19 19:10:53', NULL, NULL),
(196, 'lc', 'Saint Lucia', '2025-09-19 19:10:53', NULL, NULL),
(197, 'pm', 'Saint Pierre ve Miquelon', '2025-09-19 19:10:53', NULL, NULL),
(198, 'vc', 'Saint Vincent ve Grenadinler', '2025-09-19 19:10:53', NULL, NULL),
(199, 'ws', 'Samoa', '2025-09-19 19:10:53', NULL, NULL),
(200, 'sm', 'San Marino', '2025-09-19 19:10:53', NULL, NULL),
(201, 'st', 'Sao Tome ve Principe', '2025-09-19 19:10:53', NULL, NULL),
(202, 'sn', 'Senegal', '2025-09-19 19:10:53', NULL, NULL),
(203, 'sc', 'Seyşeller', '2025-09-19 19:10:53', NULL, NULL),
(204, 'sl', 'Sierra Leone', '2025-09-19 19:10:53', NULL, NULL),
(205, 'sg', 'Singapur', '2025-09-19 19:10:53', NULL, NULL),
(206, 'sk', 'Slovakya', '2025-09-19 19:10:53', NULL, NULL),
(207, 'si', 'Slovenya', '2025-09-19 19:10:53', NULL, NULL),
(208, 'sb', 'Solomon Adaları', '2025-09-19 19:10:53', NULL, NULL),
(209, 'so', 'Somali', '2025-09-19 19:10:53', NULL, NULL),
(210, 'lk', 'Sri Lanka', '2025-09-19 19:10:53', NULL, NULL),
(211, 'sd', 'Sudan', '2025-09-19 19:10:53', NULL, NULL),
(212, 'sr', 'Surinam', '2025-09-19 19:10:53', NULL, NULL),
(213, 'sy', 'Suriye', '2025-09-19 19:10:53', NULL, NULL),
(214, 'sa', 'Suudi Arabistan', '2025-09-19 19:10:53', NULL, NULL),
(215, 'sj', 'Svalbard ve Jan Mayen', '2025-09-19 19:10:53', NULL, NULL),
(216, 'sz', 'Svaziland', '2025-09-19 19:10:53', NULL, NULL),
(217, 'rs', 'Sırbistan', '2025-09-19 19:10:53', NULL, NULL),
(218, 'cs', 'Sırbistan-Karadağ', '2025-09-19 19:10:53', NULL, NULL),
(219, 'cl', 'Şili', '2025-09-19 19:10:53', NULL, NULL),
(220, 'tj', 'Tacikistan', '2025-09-19 19:10:53', NULL, NULL),
(221, 'tz', 'Tanzanya', '2025-09-19 19:10:53', NULL, NULL),
(222, 'th', 'Tayland', '2025-09-19 19:10:53', NULL, NULL),
(223, 'tw', 'Tayvan', '2025-09-19 19:10:53', NULL, NULL),
(224, 'tg', 'Togo', '2025-09-19 19:10:53', NULL, NULL),
(225, 'tk', 'Tokelau', '2025-09-19 19:10:53', NULL, NULL),
(226, 'to', 'Tonga', '2025-09-19 19:10:53', NULL, NULL),
(227, 'tt', 'Trinidad ve Tobago', '2025-09-19 19:10:53', NULL, NULL),
(228, 'tn', 'Tunus', '2025-09-19 19:10:53', NULL, NULL),
(229, 'tc', 'Turks ve Caicos Adaları', '2025-09-19 19:10:53', NULL, NULL),
(230, 'tv', 'Tuvalu', '2025-09-19 19:10:53', NULL, NULL),
(231, 'tm', 'Türkmenistan', '2025-09-19 19:10:53', NULL, NULL),
(232, 'ug', 'Uganda', '2025-09-19 19:10:53', NULL, NULL),
(233, 'ua', 'Ukrayna', '2025-09-19 19:10:53', NULL, NULL),
(234, 'om', 'Umman', '2025-09-19 19:10:53', NULL, NULL),
(235, 'uy', 'Uruguay', '2025-09-19 19:10:53', NULL, NULL),
(236, 'qo', 'Uzak Okyanusya', '2025-09-19 19:10:53', NULL, NULL),
(237, 'jo', 'Ürdün', '2025-09-19 19:10:53', NULL, NULL),
(238, 'vu', 'Vanuatu', '2025-09-19 19:10:53', NULL, NULL),
(239, 'va', 'Vatikan', '2025-09-19 19:10:53', NULL, NULL),
(240, 've', 'Venezuela', '2025-09-19 19:10:53', NULL, NULL),
(241, 'vn', 'Vietnam', '2025-09-19 19:10:53', NULL, NULL),
(242, 'wf', 'Wallis ve Futuna', '2025-09-19 19:10:53', NULL, NULL),
(243, 'ye', 'Yemen', '2025-09-19 19:10:53', NULL, NULL),
(244, 'nc', 'Yeni Kaledonya', '2025-09-19 19:10:53', NULL, NULL),
(245, 'nz', 'Yeni Zelanda', '2025-09-19 19:10:53', NULL, NULL),
(246, 'gr', 'Yunanistan', '2025-09-19 19:10:53', NULL, NULL),
(247, 'zm', 'Zambiya', '2025-09-19 19:10:53', NULL, NULL),
(248, 'zw', 'Zimbabve', '2025-09-19 19:10:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `identity_number_hash` text NOT NULL,
  `identity_number_type` enum('id_card','passport') NOT NULL DEFAULT 'id_card',
  `nationality` varchar(2) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `email_address` varchar(150) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `customers`
--

INSERT INTO `customers` (`id`, `identity_number_hash`, `identity_number_type`, `nationality`, `first_name`, `last_name`, `phone_number`, `email_address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'wft5tfsAWkB8YXay7ToE3L9hsZQNpzc7KWpusMNs9fDENrhwzR3o0U9sQJ3Ck9uxyaeyAYQAQ6jxIwpk2kQ6/S1dNKNTpHyOtjPpRX816dN3hEtxPbt5g2BraA==', 'id_card', 'tr', 'Fatıma Zülâl', 'KARAÇAY', '5551111111', 'zulalkaracay@gmail.com', '2025-09-19 19:10:53', NULL, NULL),
(2, 'fbFunD0UJySTJeqlkCHDR+9Snk7KpL4o8kYUGhSqCBPClc7V2cCNOQZneof3MzvcN2XbFzcfHHm5LOOR6BrAaWzx/WUFgmAxvSNFxG+w2LIEr2hozjDIznV8wQ==', 'id_card', 'tr', 'Ali', 'KARAÇAY', '5551111111', 'alikaracay@gmail.com', '2025-09-23 19:10:53', NULL, NULL),
(3, 'zKfcS7Tg2KI/u6VsUhLwygOriD3GQ6IfFyEsLlUmKzHSlfC1rhAPOw0uVrExboCYAFUl5AMg7m5B3/Ra6yOWRHsYXYQTf2Wf1jC3/EqPnXLLf0hLNqzZMzpNjw==', 'id_card', 'tr', 'Murat', 'KARAÇAY', '5551111111', 'muratkaracay@gmail.com', '2025-09-23 19:10:53', NULL, NULL),
(4, 'J0dKXgJVuyN72ccP7pV7+qopHTNvbJlDa6CVm35JtBzZpdse926mT5gXpGR0SFlV1aSYNXM1A4LUmMF58BLkob8dNvqg9/O7WK82knsYY8e6vuDw7PhJnAgl9Q==', 'passport', 'us', 'John', 'DOE', '5552222222', 'john@doe.com', '2025-09-24 19:10:53', NULL, NULL),
(5, '25kJZb1WvHjXRFytL7CDMsT88nSu1vBPEZxNkmshyDA9xKdRyHq1kfCi0d5eXSZQLCFXJSocYSVUsU1wBmekG7fF0cCDAxH8Ra1AYd4bEUCGA7Q4u4NUcVK3ow==', 'id_card', 'tr', 'Test', 'Müşteri', '2214568745', 'asd@ad.net', '2025-09-25 01:25:43', '2025-09-25 01:25:43', NULL),
(6, 'u+48g1lrJJs+U6E9hAgi08ya6A9SCAyaSPJNkdeNvpdrMd7dpgKP/t4K9OsuEP4iPSKqi26+avf/nqz9YiFfkLbMIFWmm3VxvS02GilzhRAf6KkKZkpOoD67', 'id_card', 'tr', 'Ahmet', 'Yılmaz', '5301234567', 'ahmet.yilmaz@example.com', '2025-09-30 19:22:16', '2025-09-30 19:56:31', NULL),
(7, 'GiYlfNzdlwGedZ547n6tZsvi8lXXRaFAmlIgfYwP9PqrLZ7Eh5fO1G+U4drHJ3n1SYYMFYNVGj20EwA8rED4T72LA2OAmBLmWt1F4Ghfmk5ayqSR45mDYtfj', 'id_card', 'tr', 'Ayşe', 'Demir', '5329876543', 'ayse.demir@example.com', '2025-09-30 19:22:16', '2025-09-30 19:56:31', NULL),
(8, '40NC1//4IUZ6bQ/7cKVDOS71zEB2rKw/k5EhkZNJpylXyDDCq9+hVSbiQxehIFwfpZtNh3gs8DIB20BeN2Sj0Pdu66SLfZYoH66cA5CmIFeRWg8SwBWXkKf5', 'passport', 'de', 'Hans', 'Müller', '4915123456', 'hans.mueller@example.de', '2025-09-30 19:22:16', '2025-09-30 19:56:31', NULL),
(9, 'K8W5CHPFYx68br5NB7+plca7ZOFIqUdM7zjVsCt8A/4F6Dw/sjQf7WorwiTGAr/Lu3xBQLTsjJEgH3PrzK1Rdzwj04nNlpPCQho2e2FqfJxVmZCntbPa+G97', 'passport', 'us', 'John', 'Smith', '2025550123', 'john.smith@example.com', '2025-09-30 19:22:16', '2025-09-30 19:56:31', NULL),
(10, 't9vXKuKq9hcCENM7tbcIwv0eOR2yKICNZLoo3HSNmgkjecz5NO6Ra+dCLC4uyoizv5WdTYHQvnhocVzlyyboIgvhpOmrbZcBly0/08VtCOCGcPJq73X94jKKRA==', 'passport', 'jp', 'Takashi', 'Yamamoto', '8131234567', 'takashi.yamamoto@example.jp', '2025-09-30 19:22:16', '2025-09-30 19:56:31', NULL),
(11, '0aG5ZbRjYc0PHb5BRaI+86phlXAn3bPwVP/V50o7spKP85GjXKst+GvCzx0fzWL1Znml+3wg+5Rdk/6o+m07/7MtXNRjmVEBVZaMd0ROfM42pVQQmFJ2Spr4Tg==', 'passport', 'fr', 'Claire', 'Dubois', '3316123456', 'claire.dubois@example.fr', '2025-09-30 19:22:16', '2025-09-30 19:56:31', NULL),
(12, 'EclDkI5OxLtteSfcWCGf2kQCI0yQZlh+dQ56nMqbzLAdJMv4rHRTlSwlXcfCsYBX6pLlK6m6WkxXk7OQ40NOHHOYUx4X4s32BUmSMYfYY+xrQLWpEldgv62l9Q==', 'passport', 'it', 'Luca', 'Bianchi', '3934512345', 'luca.bianchi@example.it', '2025-09-30 19:22:16', '2025-09-30 19:56:31', NULL),
(15, 'kcdhd64k0/nzl7wbyiLSKC5s955BN8+c5gKYK57YVv/YluH1tW679IjUlYPkKiAjoqXH1pTzDIEYJ821nJfu0V6AxCtE4ewlJOPYg+DgTns+Nr3Lo5T+Vdqkxw==', 'passport', 'gb', 'Emily', 'Brown', '4479111234', 'emily.brown@example.co.uk', '2025-09-30 19:25:58', '2025-09-30 19:56:31', NULL),
(16, 'Wt9YMAPr/i/Xs9lLi+24HerPQd2RBPuJ06AalYbHP+StxMY2UZ7H71J7btA4kijp0MrI/vJqdxfy8uQ5riT+E+VALgMGY2VOMXN43PsbbHXnuyxMq9ZbVgTBeg==', 'passport', 'ru', 'Ivan', 'Petrov', '7926123456', 'ivan.petrov@example.ru', '2025-09-30 19:25:58', '2025-09-30 19:56:31', NULL),
(17, 'xTGZdBm3NVMzggLHy6JIC1RQEDbM9WMsE4q+YJwUI4Tk+9mXMujsfD5r+VAckCT82DP0fu5tNTdpL1LVF8p2rfXoD+XtaEwiypqjsS/+IrTSi1+JB3WY8Z2Dsg==', 'passport', 'nl', 'Sven', 'De Jong', '3161234567', 'sven.dejong@example.nl', '2025-09-30 19:25:58', '2025-09-30 19:56:31', NULL),
(18, '21P8XJzo1d0Bf2vnkbKEsRMxjd/KM5qOaDmI0QSWfku/JbvusTOLX97lUEOxFmFqft19cFLFrmqGAMoRkZk6hyC2rXUCzIPRR/PEBWd+PaTIjjEAdbP6ywQ=', 'passport', 'cn', 'Maria', 'Li', '8613215288', 'maria.li0@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(19, 'fFvlJqt7sfuMmM7XSgmbiDxikQ0wLx49jRvmDGc5OCp+6oGoLcsjm4Xc4lD54ii/A2Nnc9Qgpzf5KKdpbl1Dgfca0KymnOR1njh6OYoDyDz81w4ZYdVvwJs=', 'passport', 'cn', 'Fatima', 'Kowalski', '8613719141', 'fatima.kowalski1@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(20, '+Mlobxh7wzKl3q6dLneN044jZLlzDJWGl6vl3kRrAQFYeU+tQgvPK4XnSwcBt2Wlolpgcw9/DXp8kulNNxMdq68836+kHZvr2/NElyl0OwRiqGoy++pZcqs=', 'passport', 'es', 'Maria', 'Johnson', '5924290827', 'maria.johnson2@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(21, 'Oo1xs/eZJL4P7OUzzNrp1suiGzuV65CvbTbvQbcK9ZvWRGckf/EXFDApLxuTEZg/HLFpcpFP20KYMPvfUqwbdR/mzYJ9G3KuMLnx504r/sfEBHKSd52l1ps=', 'passport', 'us', 'George', 'Gonzalez', '1342517832', 'george.gonzalez3@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(22, 'pyb4QH5HzfpyEBAAcFWfRFFcQNR39lGsfWpP3qirN40V30VRuLPSU2CcsBYUPkmezapeAv5HLM5xzcP1D6PtCfHWRFMqOGcEgprovveclslD30MvW8aJoIg=', 'passport', 'us', 'Carlos', 'Li', '1926958404', 'carlos.li4@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(23, 'VXn8+cev8w43yGzvooesQdMJaA5mJIr7DIPIEeEzr8Gj1+GhApTZAj9qFgc8F2R8puJKjzmWRl4qcm7ru03fm+Q8LRV+9Sa1w65DJGAOybypQCzrTdq2XJQ=', 'passport', 'pl', 'Carlos', 'Kowalski', '2358482004', 'carlos.kowalski5@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(24, '71jIGeb6Xn+OKO61ldtMIuxXcC59TDP3RT3VVvqzWSlNHYopNNv4SH+4CO0ArAJPBOytWzNfbMLEYhycpyOwVHJ9rnZLh9iHGXoh9KeJOee/ucdGgwWFnOc=', 'passport', 'cn', 'Carlos', 'Johnson', '8613629026', 'carlos.johnson6@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(25, '3/wET3pfMGX/LOAeGjaOFUJSapIz/pIlmNbQ0ylLa6KyJ93WIktMpXtiKhbN8Kqek3W1aFvrsK02Ig6aHQ3BYiOWa/yggRjADtorCXiLfNUGx5ceVUfWB3M=', 'passport', 'br', 'Omar', 'Kaya', '2527067066', 'omar.kaya7@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(26, '3KkaZ2vUTvS4hvny8KIJzUoGtnPbNrdUqQadZB1DCkkfxEtHZJWZTU8pcGE45lFzX3TomKMxEBXueAb1nqWU3y8Ui6TVrTuZCZUMHxdiK9WURd6Bih5BdAI=', 'passport', 'es', 'Carlos', 'Novak', '9261375447', 'carlos.novak8@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(27, 'zpk8N1HA4jtj8SHbUwc14IyDCEoKMjvZCu3fpDp3fSXVUPc7Ai1wMHR+4weMuBTFOL+v/kEfQcLwwc9kbsglK2FEmX4ObweyZRqwcR6E+OjM3gHmJD2sN0o=', 'passport', 'az', 'Fatima', 'Kaya', '1169398504', 'fatima.kaya9@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(28, 'X0k7OpP5vDbQh7kdDhKVhKUEsb6LG1+mOiPjjOnUNMpNqiPUXDNqSD8sv5+dhievDLAg8SIg8LWDT8/jO2p5bR5nC0vFjQqGMcU4jS2LB2gOUxmUT8HLDmg=', 'passport', 'us', 'Elena', 'Kowalski', '1455353357', 'elena.kowalski10@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(29, '9jFTmyeVMHW05faTxoHHZKdycgH5JtesBnRp7PEuG8MutYwVCplKR9pIZawmsvsBqvifYz6Lmx0832l93qmDC/vj0AFRybRGUmOUsEZYODjTDzbwQVPNlL4=', 'passport', 'pl', 'Carlos', 'Aliyev', '5870202165', 'carlos.aliyev11@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(30, 'n5A8Ot4qZVFd9464pmxpr8Xi0kEskq1WJCejrcAE4c5yQe+s5um0w5CLApZKol8fNONwiMF/U6UvdHBDA2aStcLAPAlnhG1I8zFn2xTTEHtzvithEbWYeIo=', 'passport', 'cn', 'Fatima', 'Wang', '8613651719', 'fatima.wang12@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(31, 'YrCpsLlhPTQtOExla8juuVy2VBHl+Ncazc8q0jZeXjg2ObMZyf7qd0nRZoP1Tm9JlNpYy2Y9NzzKz9gIQ0U3tte3iMKqxu0LbgK/dOSb/c0YL50RBwgr7sI=', 'passport', 'us', 'Mei', 'Gonzalez', '1253786307', 'mei.gonzalez13@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(32, 'eB8w6wUz6L+tb3+/vbrXt4HG6Ex6JoL3xjrHJnZ6aHMoAJGRAlLQY0HITVpeqjG76SXSjjdVhpc7EFUXZnovD9iWtxY6T5dl9QGrwE831BHqSPZk2/3ZzyI=', 'passport', 'pl', 'Maria', 'Kowalski', '8528475568', 'maria.kowalski14@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(33, 'NIfBY6layb9zgjj7G3pZiizMXt5VRhtALjIrKQ9tu2rqHhh6chmesxL+S4dWTF0Ah+x9mAtQRjWo9a/pqmdji+2bseaELV1quA2bSfnrEf0AQu3sXtkywR0=', 'passport', 'cn', 'Carlos', 'Wang', '8613988842', 'carlos.wang15@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(34, '+HfIU38qYLyxpZj+jWd3iMgV+Ze5eALVZERlfTRJIJdQLWiPEtTAeyJfKLuJgRc/oPZ6P83oTyNkvr1miyR/0o9nkh1WVW0/c5j4IsYOg+WLSPyKMyNxhg8=', 'passport', 'es', 'Mei', 'Silva', '9866599481', 'mei.silva16@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(35, 'CqG3QJfIsLVs16sQ35I9w1uWHKDnPU5Pb3csUulkawlk3JBWpNdInIzmz/bRQ51JnedkMOztsaqOskv1ZPyjuPZHTU4YdZBx+F0Gld5pHdpzP78O9s/rXkA=', 'passport', 'pl', 'Elena', 'Wang', '9989382985', 'elena.wang17@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(36, 'QTWiA+PcfZ3x9Fiiav5Y3K1mBk5RWdFaap6EAUYWDQPASTMl49OfYLJd7ojlYQgMSSjRAatq65j5z+ZcbFh+zlVibjpON9ecGKfjFvGot8H3I4DuVrb0BDw=', 'passport', 'cn', 'Carlos', 'Wang', '8613305903', 'carlos.wang18@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(37, 'zq0f5mNWZWQIdNtOtQUj0v4+YDr1rUvXQx0bsX52TMphaSOo/4k9lz2WwPxz0KF8ToXL6PIAltAUoSDsr3VwPB3Y0PVZ/bi9tkhua+MD+gA6JwB5Br+kVVk=', 'passport', 'gr', 'Fatima', 'Gonzalez', '7262600567', 'fatima.gonzalez19@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(38, '/uPMhmC6gfMP8vHBsPM+YUvgeE1mvZzXcRgNpiNC+JtDyylFag1YvKv/r/n97sAGrJYf6QiUI3ynMOq/v4evvK0IFaniQLKxNjgSVzB3VMW5VxixfYVrqNI=', 'id_card', 'tr', 'Carlos', 'Gonzalez', '5574775571', 'carlos.gonzalez20@example.com', '2025-09-30 19:25:58', '2025-09-30 19:35:26', NULL),
(39, 'gr1oz0/rrzrek6YjPVpr/Hue3PKUCuPm1WMSQlxg7mT9XL1v+YNuA1N4OT/FgcgrdCBE2ZhfIgV0VoTf0GrSCyrqFnRIwejgwnDKM5bxFKAXyXTq5j6oprM=', 'passport', 'br', 'Fatima', 'Kaya', '7419681688', 'fatima.kaya21@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(40, 'T2j5CsenR0ARZSAz8YJJkdGtgmQ/iYkGnE7YLEzuAbearIlTX/g//sZziDXurb58UigVIt0it/bshziM0JBRfz8tSJtw2s9/nv2UNg7mufbes3xyxZkdeLI=', 'passport', 'pl', 'Mei', 'Papadopoulos', '8584957565', 'mei.papadopoulos22@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(41, 'RCVBkOM10Vzfd+UT3S8WrXPzT7iWZFrwKafdB3yUs6InkFbjzUHYERQ0pGuf5J/vDCeQPwqVv3ovuR8woislj3ceUnjnseVk0qDfijcy8VoYc7oFyVrHnCM=', 'passport', 'es', 'Zhang', 'Novak', '7196846081', 'zhang.novak23@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(42, 'wVtDR3h/+wHn/jm+UzSYLReKtFGLKLnynp8OmLTjp+0w1B+EKtHc8M4YE7OQuovkTM2JGASy6EzaKMSXr3NV5GT87P6xlWo/WyAgVM0P108xxvkEqOSEOVQ=', 'passport', 'pl', 'Anna', 'Novak', '6135492624', 'anna.novak24@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(43, 'HkIhZlQyIoQbLIpJs3CHzt7mstCqNDWtJXE31rlnUCDziujOGfIV1sXRc4QVebE2unypIJ4ABwtXginIimRcqE2ZXC303/nHBy/e7hbgkvrW/iUmr5m1hDs=', 'passport', 'cn', 'Fatima', 'Silva', '8613144662', 'fatima.silva25@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(44, '1C11Cern1zPeh7qJHmHzL2OeBSxCx0yom0lInsS2ihXy9vSVs84WBH1CymlnbiDhiwTB9DxONuNcxXOPlSvHol/x98uv/z6QFFWtJ9wamfWu1SScFKO/t90=', 'passport', 'az', 'Maria', 'Kowalski', '8644166176', 'maria.kowalski26@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(45, '0Iinq9ZHc3vJQxJQmO84rmyme1035kY9ns+YgvC67Vo+9+tA/G5yH+wNJ26qvbTJeAqgzC3PuC44Rm7PJ6vmr5UkqjV2vwCu5Id0aKFYi1p1vO8WDFqSf2s=', 'passport', 'hr', 'Fatima', 'Kaya', '8728102528', 'fatima.kaya27@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(46, 'JdAJLeWn0aUPVR+S4AxMQYF3bFehsI3bSRR0c+znObSMPFnfxD4qWEAV/dvbSDT8ThD4fYxp6ttLRRVu+6y4d7qyMnrdDBFUuwKu8vlzO+J54FCmrnVERRU=', 'passport', 'pl', 'George', 'Papadopoulos', '5196360863', 'george.papadopoulos28@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(47, 'nvvzw0QdRbA/MeSoYVyiBPD7pAolW4uIPptHQBicrnU1tcqdkx+U/QrnIvrsO1z2K+RAvyl9Iqlg/4kj0keVjL/kFMFtMMBq4DT+ZWyG1xRl9eqY9E80oNU=', 'passport', 'gr', 'David', 'Novak', '9927536567', 'david.novak29@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(48, '0LYlgoXandr/vfjOw0Q6NKKxb7lvoV1BvSCygB352b17LUyT0Wo+HRIMUsebjzdt7tk90y4G2Kkno4LiVUTOz77ou+5j4C5HlW+4ycZgiyjzrQBrapjpFLE=', 'passport', 'az', 'Omar', 'Li', '6073059207', 'omar.li30@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(49, 'RhjqYieLxU3PGop1rLhVUMxUNF2jZyc2iU5hVXms4E8SXObUKjLh/cxwoI4oaog73/bI+oIgVjo+NnNNV4Ruxsp0Isk3UboCd6+1ZQIxYMHgTEA60/qfvsg=', 'passport', 'az', 'David', 'Gonzalez', '7571239206', 'david.gonzalez31@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(50, 'bLQ4/b33CMaoLWgAW0NC9IMQXItpk2zNsa88mAqPAHqvBAR5EJCNqaJJQf5MVtPvHUq4c9U2tVByBOftG1vpo8lGrC0hwCV+sj6b7lPPbp7l9eOs9eqJJRQ=', 'passport', 'gr', 'Elena', 'Wang', '6561871858', 'elena.wang32@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(51, 'DwS3mSWW/91lJTTZ5N7buYEWkWZsjDEEB/K4ruS5tiVUoe555c+9MclptES+TBiwulZLNeVqmoRb9qhGV+J6D/ZwyBiPEASCmge9lmjHJoefv0cmSYb5kj8=', 'passport', 'hr', 'Fatima', 'Papadopoulos', '6628321074', 'fatima.papadopoulos33@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(52, 'LC5urHjFjhKMV3J3ey4s/bpejPJeikAKB1RFolK5naZZSnsceyxgf3AD7ClRf0z6sTZP+x0gOgQ2MmBXW0+uSpdpNZ02yiPLOWs55sqz/ukL49Q51TA7jMg=', 'passport', 'pl', 'Carlos', 'Li', '6844342553', 'carlos.li34@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(53, 'aZ+LqRI9VoVdZz4XsWiYPPimHI8Zm0L0yj5pOqUO3r9cThLoxW1QTkxXfkcBcTfdNT4Ne3vFhzv500SH9BpOwQpUDjZa+6VGBbXLl5XcDF1/ysi4ZVQCY2M=', 'passport', 'cn', 'Fatima', 'Silva', '8613758895', 'fatima.silva35@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(54, 'HuinfRWo9EHTsaSNto0skJbLSBq3hogXW9Sc07uu1MRWe6KKubeiS7Ye1T8/vmT7RIun7bkvZEFjNeh706buqv7mAgJVrL6vSGTf2akskaD1eaFLZ1pHNwc=', 'passport', 'gr', 'David', 'Novak', '4805730109', 'david.novak36@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(55, 'oIA0M/QBtcG9pWd21C2bUIm7jbi1IoBuVN3D5uEGWQiwvhvwGqFMH5X9Q74Rs22OFlcbEDhmu2eDWNzpb5+NPN5Bm2q9FcrDCClqyAAhPUvX5QyjoNFzpN0=', 'id_card', 'tr', 'Maria', 'Novak', '5563759536', 'maria.novak37@example.com', '2025-09-30 19:25:58', '2025-09-30 19:35:26', NULL),
(56, 'KEmF9n9NRhfJ+sRrb2zIgn+VwEj29tVW6uWH08z0GEcVfhpJIKX70c2lx8c0g2JaENT3r89T06Ohjw1lBPj6GcyGHeZmzDLexc+FPi6e1y2pf9SwlGyectA=', 'passport', 'us', 'David', 'Aliyev', '1469256803', 'david.aliyev38@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(57, '3Ro8G1sF/mKiX5sVEXuIhnsJEbCXPuJ4nS09pXHNyPKjvSv2kye7nJnMyc9xvajynP9GWALl6IUrAj6NDp1VdPo3ZdJpb9anDRC8+bu2VbyGd0VG3G/uhdQ=', 'passport', 'br', 'Fatima', 'Papadopoulos', '4642803096', 'fatima.papadopoulos39@example.com', '2025-09-30 19:25:58', '2025-09-30 19:47:04', NULL),
(58, 'CaBHGgiApRhjG7fIP2D17LZ8rODnPs4dMw1LX4w4AIhEJ+C9F7MSW+ugfEsL1/nbYE4IcZFL5ka3KLkIQm5YxKtRblhgVd93oOLHnGwwQ1vWwelwCYUpEJ/eSeSqf8y4O/9S', 'id_card', 'tr', 'test', 'müşteri', '', 'asd@asdas.net.tr', '2025-10-22 14:11:20', '2025-10-22 14:11:20', NULL),
(59, 'vGAtmeZxA25SywcyrlgGiv6EX6yA+BUWFKTdLWmHCd7zjBngYbV0zFb5Z8/B3u8dIN8YuNBa0GatmvEMPe1wMAOeztz+WJs0oQBhtQRpHE8BzqfG1m7N2mBq', 'id_card', 'tr', '', '', '', '', '2025-10-23 09:43:50', '2025-10-23 09:43:50', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customer_vehicles`
--

CREATE TABLE `customer_vehicles` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `vehicle_id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `customer_vehicles`
--

INSERT INTO `customer_vehicles` (`id`, `customer_id`, `vehicle_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2025-09-19 19:10:53', NULL, NULL),
(2, 2, 2, '2025-09-19 19:10:53', NULL, NULL),
(100, 3, 3, '2025-09-30 20:13:48', NULL, NULL),
(101, 4, 4, '2025-09-30 20:13:48', NULL, NULL),
(102, 5, 5, '2025-09-30 20:13:48', NULL, NULL),
(103, 6, 6, '2025-09-30 20:13:48', NULL, NULL),
(104, 7, 7, '2025-09-30 20:13:48', NULL, NULL),
(105, 8, 8, '2025-09-30 20:13:48', NULL, NULL),
(106, 9, 9, '2025-09-30 20:13:48', NULL, NULL),
(107, 10, 10, '2025-09-30 20:13:48', NULL, NULL),
(108, 11, 11, '2025-09-30 20:13:48', NULL, NULL),
(109, 12, 12, '2025-09-30 20:13:48', NULL, NULL),
(110, 15, 15, '2025-09-30 20:13:48', NULL, NULL),
(111, 16, 16, '2025-09-30 20:13:48', NULL, NULL),
(112, 17, 17, '2025-09-30 20:13:48', NULL, NULL),
(113, 18, 18, '2025-09-30 20:13:48', NULL, NULL),
(114, 19, 19, '2025-09-30 20:13:48', NULL, NULL),
(115, 20, 20, '2025-09-30 20:13:48', NULL, NULL),
(116, 21, 21, '2025-09-30 20:13:48', NULL, NULL),
(117, 22, 22, '2025-09-30 20:13:48', NULL, NULL),
(118, 23, 23, '2025-09-30 20:13:48', NULL, NULL),
(119, 24, 24, '2025-09-30 20:13:48', NULL, NULL),
(120, 25, 25, '2025-09-30 20:13:48', NULL, NULL),
(121, 26, 26, '2025-09-30 20:13:48', NULL, NULL),
(122, 27, 27, '2025-09-30 20:13:48', NULL, NULL),
(123, 28, 28, '2025-09-30 20:13:48', NULL, NULL),
(124, 29, 29, '2025-09-30 20:13:48', NULL, NULL),
(125, 30, 30, '2025-09-30 20:13:48', NULL, NULL),
(126, 31, 31, '2025-09-30 20:13:48', NULL, NULL),
(127, 32, 32, '2025-09-30 20:13:48', NULL, NULL),
(128, 33, 33, '2025-09-30 20:13:48', NULL, NULL),
(129, 34, 34, '2025-09-30 20:13:48', NULL, NULL),
(130, 35, 35, '2025-09-30 20:13:48', NULL, NULL),
(131, 36, 36, '2025-09-30 20:13:48', NULL, NULL),
(132, 37, 37, '2025-09-30 20:13:48', NULL, NULL),
(133, 38, 38, '2025-09-30 20:13:48', NULL, NULL),
(134, 39, 39, '2025-09-30 20:13:48', NULL, NULL),
(135, 40, 40, '2025-09-30 20:13:48', NULL, NULL),
(136, 41, 41, '2025-09-30 20:13:48', NULL, NULL),
(137, 42, 42, '2025-09-30 20:13:48', NULL, NULL),
(138, 43, 43, '2025-09-30 20:13:48', NULL, NULL),
(139, 44, 44, '2025-09-30 20:13:48', NULL, NULL),
(140, 45, 45, '2025-09-30 20:13:48', NULL, NULL),
(141, 46, 46, '2025-09-30 20:13:48', NULL, NULL),
(142, 47, 47, '2025-09-30 20:13:48', NULL, NULL),
(143, 50, 50, '2025-09-30 20:13:48', NULL, NULL),
(144, 55, 55, '2025-09-30 20:13:48', NULL, NULL),
(145, 6, 5, '2025-10-24 19:35:07', '2025-10-24 19:35:07', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `parking_logs`
--

CREATE TABLE `parking_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `work_order_id_enter` int(10) UNSIGNED NOT NULL,
  `work_order_id_exit` int(10) UNSIGNED DEFAULT NULL,
  `retrieve_time` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `parking_logs`
--

INSERT INTO `parking_logs` (`id`, `work_order_id_enter`, `work_order_id_exit`, `retrieve_time`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 49, '2025-10-22 18:14:14', '2025-09-19 19:10:53', '2025-10-22 18:14:14', NULL),
(2, 2, NULL, NULL, '2025-09-20 09:10:53', NULL, NULL),
(3, 3, 48, '2025-10-22 18:14:27', '2025-09-30 20:13:35', '2025-10-22 18:14:27', NULL),
(4, 4, NULL, NULL, '2025-10-22 10:22:52', NULL, NULL),
(5, 5, NULL, NULL, '2025-10-22 10:26:21', NULL, NULL),
(7, 6, 51, '2025-10-22 18:14:09', '2025-10-22 10:41:02', '2025-10-22 18:14:09', NULL),
(8, 7, NULL, NULL, '2025-10-22 10:42:52', '2025-10-22 10:42:52', NULL),
(9, 8, NULL, NULL, '2025-10-22 11:21:53', '2025-10-22 11:21:53', NULL),
(10, 10, NULL, NULL, '2025-10-22 11:25:02', '2025-10-22 11:25:02', NULL),
(11, 14, 52, '2025-10-22 18:11:36', '2025-10-22 11:25:09', '2025-10-22 18:11:36', NULL),
(12, 9, NULL, NULL, '2025-10-22 11:25:35', '2025-10-22 11:25:35', NULL),
(13, 45, 50, '2025-10-22 18:14:24', '2025-10-22 11:25:43', '2025-10-22 18:14:24', NULL),
(14, 15, NULL, NULL, '2025-10-22 11:25:50', '2025-10-22 11:25:50', NULL),
(15, 12, NULL, NULL, '2025-10-22 11:25:57', '2025-10-22 11:25:57', NULL),
(16, 11, NULL, NULL, '2025-10-22 11:26:57', '2025-10-22 11:26:57', NULL),
(17, 22, NULL, NULL, '2025-10-22 11:27:06', '2025-10-22 11:27:06', NULL),
(18, 16, NULL, NULL, '2025-10-22 11:30:41', '2025-10-22 11:30:41', NULL),
(19, 13, NULL, NULL, '2025-10-22 11:30:44', '2025-10-22 11:30:44', NULL),
(20, 21, NULL, NULL, '2025-10-22 11:30:49', '2025-10-22 11:30:49', NULL),
(21, 23, NULL, NULL, '2025-10-22 11:30:55', '2025-10-22 11:30:55', NULL),
(22, 17, NULL, NULL, '2025-10-22 12:54:00', '2025-10-22 12:54:00', NULL),
(23, 18, NULL, NULL, '2025-10-22 12:54:03', '2025-10-22 12:54:03', NULL),
(24, 19, NULL, NULL, '2025-10-22 12:54:06', '2025-10-22 12:54:06', NULL),
(25, 20, NULL, NULL, '2025-10-22 12:54:09', '2025-10-22 12:54:09', NULL),
(26, 25, NULL, NULL, '2025-10-22 12:54:13', '2025-10-22 12:54:13', NULL),
(27, 28, NULL, NULL, '2025-10-22 12:54:16', '2025-10-22 12:54:16', NULL),
(28, 30, 54, NULL, '2025-10-22 12:54:19', '2025-10-22 18:34:59', NULL),
(29, 31, NULL, NULL, '2025-10-22 12:54:22', '2025-10-22 12:54:22', NULL),
(30, 24, NULL, NULL, '2025-10-22 14:37:30', '2025-10-22 14:37:30', NULL),
(31, 26, NULL, NULL, '2025-10-22 14:37:32', '2025-10-22 14:37:32', NULL),
(32, 27, NULL, NULL, '2025-10-22 14:37:35', '2025-10-22 14:37:35', NULL),
(33, 29, NULL, NULL, '2025-10-22 14:37:38', '2025-10-22 14:37:38', NULL),
(34, 35, NULL, NULL, '2025-10-22 14:37:42', '2025-10-22 14:37:42', NULL),
(35, 34, NULL, NULL, '2025-10-22 14:37:45', '2025-10-22 14:37:45', NULL),
(36, 38, NULL, NULL, '2025-10-22 14:37:48', '2025-10-22 14:37:48', NULL),
(37, 39, NULL, NULL, '2025-10-22 14:37:51', '2025-10-22 14:37:51', NULL),
(38, 32, NULL, NULL, '2025-10-22 18:11:53', '2025-10-22 18:11:53', NULL),
(39, 33, NULL, NULL, '2025-10-22 18:11:56', '2025-10-22 18:11:56', NULL),
(40, 36, NULL, NULL, '2025-10-22 18:11:59', '2025-10-22 18:11:59', NULL),
(41, 40, 55, '2025-10-23 09:49:27', '2025-10-23 09:47:29', '2025-10-23 09:49:27', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `parking_lots`
--

CREATE TABLE `parking_lots` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `latitude` decimal(16,14) NOT NULL,
  `longitude` decimal(16,14) NOT NULL,
  `type` enum('indoor','outdoor') NOT NULL,
  `capacity` int(11) UNSIGNED NOT NULL,
  `area` int(11) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `parking_lots`
--

INSERT INTO `parking_lots` (`id`, `name`, `address`, `latitude`, `longitude`, `type`, `capacity`, `area`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Indoor Lot 1', '123 Main St', 41.00820000000000, 28.97840000000000, 'indoor', 50, 1000, '2025-09-19 19:10:53', NULL, NULL),
(2, 'Outdoor Lot 1', '456 Side Rd', 41.01510000000000, 28.97950000000000, 'outdoor', 100, 2500, '2025-09-19 19:10:53', NULL, NULL),
(3, 'Erciyes Tıp Fakültesi', 'Erciyes Üniversitesi Tıp Fakültesi Otoparkı, Merkez Kampüs, Talas, Kayseri', 38.70589104457031, 35.52547959942334, 'outdoor', 380, 1540, '2025-09-21 01:37:24', '2025-09-21 01:41:44', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_key` varchar(50) NOT NULL,
  `setting_value` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `system_settings`
--

INSERT INTO `system_settings` (`id`, `setting_key`, `setting_value`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'core_applicationName', 'ValeMaster', 'Uygulama adı', '2025-09-19 19:34:25', NULL, NULL),
(2, 'localization_systemCountry', 'tr', 'Sistem varsayılan ülke', '2025-09-19 19:34:25', '2025-09-20 14:29:32', NULL),
(3, 'pricing_hourlyRate', '25', 'Saatlik vale hizmet bedeli (TL)', '2025-09-19 19:34:25', NULL, NULL),
(4, 'vale_max_distance', '3', 'Vale hizmeti maksimum mesafe (km)', '2025-09-19 19:34:25', NULL, NULL),
(5, 'free_parking_signage', '1', 'Ücretsiz otopark tabelasının gösterimi', '2025-09-19 19:34:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_level` enum('admin','receptionist','valet') NOT NULL,
  `username` varchar(20) NOT NULL,
  `password_hash` varchar(40) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `profile_picture` varchar(40) DEFAULT NULL,
  `email_address` varchar(100) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `user_level`, `username`, `password_hash`, `first_name`, `last_name`, `profile_picture`, `email_address`, `phone_number`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'zulalll', 'ff8af657403625fe30e6380ac1b7752616b273db', 'Fatıma Zülâl', 'KARAÇAY', '75d63695c3d89e8fb5f73c5f6f9c4cd56b142cec', 'zulalkaracay@gmail.com', '505-147-2847', '2025-09-19 19:10:53', '2025-09-20 20:12:51', NULL),
(2, 'admin', 'mukanerkin', '20b53b3b0d3b365896ed2eb4bc1f41b75291f7af', 'Mukan Erkin', 'TÖRÜK', 'b5a8fed8f32f36c8ba472080c057c130479a8de0', 'info@mukanerkin.cw.tr', '546-254-3294', '2025-09-19 19:10:53', '2025-09-21 11:57:20', NULL),
(3, 'receptionist', 'reception1', '4a7e692f36f5d61e3fdf101b032b344201b5c2da', 'Reception', 'One', NULL, 'reception@example.com', '555-000-0007', '2025-09-19 19:10:53', '2025-09-20 18:27:53', NULL),
(4, 'valet', 'valet1', 'eeb05fc4155992a235d5a7b2b3497e4a6a3381dc', 'Valet', 'One', NULL, 'valet@example.com', '555-000-0003', '2025-09-19 19:10:53', '2025-09-20 18:27:45', NULL),
(5, 'admin', 'muro', '71fcb5a6b73d9bfcb637a61f864cc7212d07f386', 'Murat', 'KARAÇAY', NULL, 'muratkaracay@gmail.com', '123-456-7893', '2025-09-20 15:30:46', '2025-09-20 18:28:05', NULL),
(6, 'receptionist', 'akaracay', '20b53b3b0d3b365896ed2eb4bc1f41b75291f7af', 'Ali', 'KARAÇAY', '83af74b84b19f202e0465e301446f44f0a5781d2', 'alikaracay@gmail.com', '555-555-5555', '2025-09-20 16:01:14', '2025-09-20 18:58:13', NULL),
(7, 'valet', 'ultimatetechdna', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Ultimate Tech', 'DNA', '3993cfff95411327989ea6c7596d232f2c372bf4', 'ultimate@example.net', '123-459-4546', '2025-09-20 16:41:41', '2025-09-20 18:58:01', NULL),
(8, 'valet', 'gavurbey', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Gavur', 'Bey', '005ab22743921e0ea0bc4f161f5ef179a88df048', 'gavurbey@example.net', '123-456-7890', '2025-09-20 19:17:17', '2025-09-20 19:17:25', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(10) UNSIGNED NOT NULL,
  `vin` varchar(20) NOT NULL,
  `plate` varchar(20) NOT NULL,
  `country_code` varchar(2) NOT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `model` varchar(20) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `vehicles`
--

INSERT INTO `vehicles` (`id`, `vin`, `plate`, `country_code`, `brand`, `model`, `photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1HGBH41JXMN109186', '34 ABC 123', 'tr', 'Toyota', 'Corolla', NULL, '2025-09-19 19:10:53', NULL, NULL),
(2, '1HGCM82633A004352', 'US XYZ 987', 'us', 'Honda', 'Civic', NULL, '2025-09-19 19:10:53', NULL, NULL),
(3, 'VF32AKFWF41655120', '46 BN 709', 'tr', 'Peugeot', '206', NULL, '2025-09-20 15:10:52', '2025-09-20 15:10:52', NULL),
(4, '1HGBH41JXMN109186!', '46ACD195', 'tr', 'Ford', 'Mondeo', NULL, '2025-09-25 14:50:08', '2025-09-25 14:50:08', NULL),
(5, '2HGCM82633A004352', 'VCH 59 423', 'ar', 'Peugeot', '2008', NULL, '2025-09-30 18:55:51', '2025-09-30 18:55:51', NULL),
(6, 'VIN000001', '34ABC001', 'tr', 'Toyota', 'Corolla', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(7, 'VIN000002', '34ABC002', 'tr', 'Toyota', 'Yaris', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(8, 'VIN000003', '34ABC003', 'tr', 'Honda', 'Civic', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(9, 'VIN000004', '34ABC004', 'tr', 'Honda', 'Jazz', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(10, 'VIN000005', '34ABC005', 'tr', 'Ford', 'Focus', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(11, 'VIN000006', '34ABC006', 'tr', 'Ford', 'Fiesta', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(12, 'VIN000007', '34ABC007', 'tr', 'Renault', 'Clio', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(13, 'VIN000008', '34ABC008', 'tr', 'Renault', 'Megane', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(14, 'VIN000009', '34ABC009', 'tr', 'Peugeot', '308', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(15, 'VIN000010', '34ABC010', 'tr', 'Peugeot', '208', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(16, 'VIN000011', '34ABC011', 'de', 'BMW', '320i', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(17, 'VIN000012', '34ABC012', 'de', 'BMW', 'X5', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(18, 'VIN000013', '34ABC013', 'de', 'Mercedes', 'C200', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(19, 'VIN000014', '34ABC014', 'de', 'Mercedes', 'E220', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(20, 'VIN000015', '34ABC015', 'de', 'Audi', 'A3', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(21, 'VIN000016', '34ABC016', 'de', 'Audi', 'A4', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(22, 'VIN000017', '34ABC017', 'fr', 'Citroen', 'C3', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(23, 'VIN000018', '34ABC018', 'fr', 'Citroen', 'C4', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(24, 'VIN000019', '34ABC019', 'fr', 'Peugeot', '3008', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(25, 'VIN000020', '34ABC020', 'fr', 'Renault', 'Captur', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(26, 'VIN000021', '34ABC021', 'it', 'Fiat', 'Egea', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(27, 'VIN000022', '34ABC022', 'it', 'Fiat', 'Punto', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(28, 'VIN000023', '34ABC023', 'it', 'AlfaRomeo', 'Giulia', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(29, 'VIN000024', '34ABC024', 'it', 'AlfaRomeo', 'Stelvio', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(30, 'VIN000025', '34ABC025', 'it', 'Maserati', 'Ghibli', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(31, 'VIN000026', '34ABC026', 'jp', 'Nissan', 'Qashqai', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(32, 'VIN000027', '34ABC027', 'jp', 'Nissan', 'Micra', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(33, 'VIN000028', '34ABC028', 'jp', 'Mitsubishi', 'Lancer', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(34, 'VIN000029', '34ABC029', 'jp', 'Mitsubishi', 'Outlander', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(35, 'VIN000030', '34ABC030', 'jp', 'Subaru', 'Impreza', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(36, 'VIN000031', '34ABC031', 'us', 'Tesla', 'Model 3', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(37, 'VIN000032', '34ABC032', 'us', 'Tesla', 'Model Y', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(38, 'VIN000033', '34ABC033', 'us', 'Chevrolet', 'Cruze', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(39, 'VIN000034', '34ABC034', 'us', 'Chevrolet', 'Camaro', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(40, 'VIN000035', '34ABC035', 'us', 'Ford', 'Mustang', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(41, 'VIN000036', '34ABC036', 'us', 'Dodge', 'Charger', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(42, 'VIN000037', '34ABC037', 'kr', 'Hyundai', 'i20', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(43, 'VIN000038', '34ABC038', 'kr', 'Hyundai', 'Elantra', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(44, 'VIN000039', '34ABC039', 'kr', 'Kia', 'Sportage', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(45, 'VIN000040', '34ABC040', 'kr', 'Kia', 'Rio', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(46, 'VIN000041', '34ABC041', 'se', 'Volvo', 'S60', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(47, 'VIN000042', '34ABC042', 'se', 'Volvo', 'XC90', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(48, 'VIN000043', '34ABC043', 'se', 'Saab', '9-3', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(49, 'VIN000044', '34ABC044', 'gb', 'Mini', 'Cooper', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(50, 'VIN000045', '34ABC045', 'gb', 'LandRover', 'Discovery', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(51, 'VIN000046', '34ABC046', 'gb', 'Jaguar', 'XF', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(52, 'VIN000047', '34ABC047', 'cn', 'BYD', 'Han', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(53, 'VIN000048', '34ABC048', 'cn', 'Geely', 'Coolray', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(54, 'VIN000049', '34ABC049', 'cn', 'Chery', 'Tiggo 8', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(55, 'VIN000050', '34ABC050', 'cn', 'Nio', 'ES6', NULL, '2025-09-30 19:02:35', '2025-10-08 15:27:36', NULL),
(56, '', '', 'tr', '', '', NULL, '2025-10-23 09:43:50', '2025-10-23 09:43:50', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `work_orders`
--

CREATE TABLE `work_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_vehicle_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `parking_lot_id` int(10) UNSIGNED NOT NULL,
  `order_type` enum('park','retrieve') NOT NULL DEFAULT 'park',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `closed_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `work_orders`
--

INSERT INTO `work_orders` (`id`, `customer_vehicle_id`, `user_id`, `parking_lot_id`, `order_type`, `created_at`, `closed_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 'park', '2025-09-19 19:10:53', '2025-09-19 19:30:53', NULL, NULL),
(2, 2, 2, 2, 'park', '2025-09-20 09:10:53', '2025-09-20 10:10:53', NULL, NULL),
(3, 100, 3, 1, 'park', '2025-09-30 20:13:35', '2025-09-30 20:13:35', NULL, NULL),
(4, 101, 5, 2, 'park', '2025-09-30 20:18:46', '2025-10-22 10:22:52', '2025-10-22 10:22:52', NULL),
(5, 102, 1, 3, 'park', '2025-09-30 20:18:46', '2025-10-22 10:26:21', '2025-10-22 10:26:21', NULL),
(6, 103, 7, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 10:41:02', '2025-10-22 10:41:02', NULL),
(7, 104, 2, 2, 'park', '2025-09-30 20:18:46', '2025-10-22 10:42:52', '2025-10-22 10:42:52', NULL),
(8, 105, 6, 3, 'park', '2025-09-30 20:18:46', '2025-10-22 11:21:53', '2025-10-22 11:21:53', NULL),
(9, 106, 4, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 11:25:35', '2025-10-22 11:25:35', NULL),
(10, 107, 8, 2, 'park', '2025-09-30 20:18:46', '2025-10-22 11:25:02', '2025-10-22 11:25:02', NULL),
(11, 108, 5, 3, 'park', '2025-09-30 20:18:46', '2025-10-22 11:26:57', '2025-10-22 11:26:57', NULL),
(12, 109, 2, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 11:25:57', '2025-10-22 11:25:57', NULL),
(13, 110, 3, 2, 'park', '2025-09-30 20:18:46', '2025-10-22 11:30:44', '2025-10-22 11:30:44', NULL),
(14, 111, 7, 3, 'park', '2025-09-30 20:18:46', '2025-10-22 11:25:09', '2025-10-22 11:25:09', NULL),
(15, 112, 1, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 11:25:50', '2025-10-22 11:25:50', NULL),
(16, 113, 4, 2, 'park', '2025-09-30 20:18:46', '2025-10-22 11:30:41', '2025-10-22 11:30:41', NULL),
(17, 114, 6, 3, 'park', '2025-09-30 20:18:46', '2025-10-22 12:54:00', '2025-10-22 12:54:00', NULL),
(18, 115, 8, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 12:54:03', '2025-10-22 12:54:03', NULL),
(19, 116, 5, 2, 'park', '2025-09-30 20:18:46', '2025-10-22 12:54:06', '2025-10-22 12:54:06', NULL),
(20, 117, 2, 3, 'park', '2025-09-30 20:18:46', '2025-10-22 12:54:09', '2025-10-22 12:54:09', NULL),
(21, 118, 7, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 11:30:49', '2025-10-22 11:30:49', NULL),
(22, 119, 3, 2, 'park', '2025-09-30 20:18:46', '2025-10-22 11:27:06', '2025-10-22 11:27:06', NULL),
(23, 120, 1, 3, 'park', '2025-09-30 20:18:46', '2025-10-22 11:30:55', '2025-10-22 11:30:55', NULL),
(24, 121, 6, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 14:37:30', '2025-10-22 14:37:30', NULL),
(25, 122, 4, 2, 'park', '2025-09-30 20:18:46', '2025-10-22 12:54:13', '2025-10-22 12:54:13', NULL),
(26, 123, 8, 3, 'park', '2025-09-30 20:18:46', '2025-10-22 14:37:32', '2025-10-22 14:37:32', NULL),
(27, 124, 2, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 14:37:35', '2025-10-22 14:37:35', NULL),
(28, 125, 7, 2, 'park', '2025-09-30 20:18:46', '2025-10-22 12:54:16', '2025-10-22 12:54:16', NULL),
(29, 126, 5, 3, 'park', '2025-09-30 20:18:46', '2025-10-22 14:37:38', '2025-10-22 14:37:38', NULL),
(30, 127, 1, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 12:54:19', '2025-10-22 12:54:19', NULL),
(31, 128, 3, 2, 'park', '2025-09-30 20:18:46', '2025-10-22 12:54:22', '2025-10-22 12:54:22', NULL),
(32, 129, 6, 3, 'park', '2025-09-30 20:18:46', '2025-10-22 18:11:53', '2025-10-22 18:11:53', NULL),
(33, 130, 8, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 18:11:56', '2025-10-22 18:11:56', NULL),
(34, 131, 4, 2, 'park', '2025-09-30 20:18:46', '2025-10-22 14:37:45', '2025-10-22 14:37:45', NULL),
(35, 132, 7, 3, 'park', '2025-09-30 20:18:46', '2025-10-22 14:37:42', '2025-10-22 14:37:42', NULL),
(36, 133, 2, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 18:11:59', '2025-10-22 18:11:59', NULL),
(37, 134, 5, 2, 'park', '2025-09-30 20:18:46', NULL, NULL, NULL),
(38, 135, 1, 3, 'park', '2025-09-30 20:18:46', '2025-10-22 14:37:48', '2025-10-22 14:37:48', NULL),
(39, 136, 3, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 14:37:51', '2025-10-22 14:37:51', NULL),
(40, 137, 6, 2, 'park', '2025-09-30 20:18:46', '2025-10-23 09:47:29', '2025-10-23 09:47:29', NULL),
(41, 138, 8, 3, 'park', '2025-09-30 20:18:46', NULL, NULL, NULL),
(42, 139, 7, 1, 'park', '2025-09-30 20:18:46', NULL, NULL, NULL),
(43, 140, 4, 2, 'park', '2025-09-30 20:18:46', NULL, NULL, NULL),
(44, 141, 2, 3, 'park', '2025-09-30 20:18:46', NULL, NULL, NULL),
(45, 142, 5, 1, 'park', '2025-09-30 20:18:46', '2025-10-22 11:25:43', '2025-10-22 11:25:43', NULL),
(46, 143, 1, 2, 'park', '2025-09-30 20:18:46', NULL, NULL, NULL),
(47, 144, 3, 3, 'park', '2025-09-30 20:18:46', NULL, NULL, NULL),
(48, 100, 8, 1, 'retrieve', '2025-10-22 16:25:10', '2025-10-22 16:57:55', '2025-10-22 16:57:55', NULL),
(49, 1, 8, 1, 'retrieve', '2025-10-22 17:00:21', '2025-10-22 17:14:15', '2025-10-22 17:14:15', NULL),
(50, 142, 8, 1, 'retrieve', '2025-10-22 17:22:21', '2025-10-22 17:22:49', '2025-10-22 17:22:49', NULL),
(51, 103, 8, 1, 'retrieve', '2025-10-22 17:25:48', '2025-10-22 18:12:04', '2025-10-22 18:12:04', NULL),
(52, 111, 8, 3, 'retrieve', '2025-10-22 17:26:32', '2025-10-22 17:58:15', '2025-10-22 17:58:15', NULL),
(53, 129, 8, 3, 'retrieve', '2025-10-22 18:34:46', NULL, '2025-10-22 18:34:46', NULL),
(54, 127, 8, 1, 'retrieve', '2025-10-22 18:34:51', '2025-10-22 18:34:59', '2025-10-22 18:34:59', NULL),
(55, 137, 8, 2, 'retrieve', '2025-10-23 09:48:53', '2025-10-23 09:49:14', '2025-10-23 09:49:14', NULL),
(56, 145, 8, 1, 'park', '2025-10-24 19:35:07', NULL, '2025-10-24 19:35:07', NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_2` (`code_2`);

--
-- Tablo için indeksler `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_nationality_foreign` (`nationality`);

--
-- Tablo için indeksler `customer_vehicles`
--
ALTER TABLE `customer_vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_id_vehicle_id` (`customer_id`,`vehicle_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `vehicle_id` (`vehicle_id`);

--
-- Tablo için indeksler `parking_logs`
--
ALTER TABLE `parking_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parking_logs_work_order_id_enter_foreign` (`work_order_id_enter`),
  ADD KEY `parking_logs_work_order_id_exit_foreign` (`work_order_id_exit`);

--
-- Tablo için indeksler `parking_lots`
--
ALTER TABLE `parking_lots`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email_address` (`email_address`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Tablo için indeksler `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vin_plate_country` (`vin`,`plate`,`country_code`),
  ADD KEY `vehicles_country_code_foreign` (`country_code`);

--
-- Tablo için indeksler `work_orders`
--
ALTER TABLE `work_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_orders_customer_vehicle_id_foreign` (`customer_vehicle_id`),
  ADD KEY `work_orders_parking_lot_id_foreign` (`parking_lot_id`),
  ADD KEY `work_orders_user_id_foreign` (`user_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- Tablo için AUTO_INCREMENT değeri `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Tablo için AUTO_INCREMENT değeri `customer_vehicles`
--
ALTER TABLE `customer_vehicles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- Tablo için AUTO_INCREMENT değeri `parking_logs`
--
ALTER TABLE `parking_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Tablo için AUTO_INCREMENT değeri `parking_lots`
--
ALTER TABLE `parking_lots`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Tablo için AUTO_INCREMENT değeri `work_orders`
--
ALTER TABLE `work_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_nationality_foreign` FOREIGN KEY (`nationality`) REFERENCES `countries` (`code_2`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `customer_vehicles`
--
ALTER TABLE `customer_vehicles`
  ADD CONSTRAINT `customer_vehicles_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_vehicles_vehicle_id_foreign` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `parking_logs`
--
ALTER TABLE `parking_logs`
  ADD CONSTRAINT `parking_logs_work_order_id_enter_foreign` FOREIGN KEY (`work_order_id_enter`) REFERENCES `work_orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parking_logs_work_order_id_exit_foreign` FOREIGN KEY (`work_order_id_exit`) REFERENCES `work_orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicles_country_code_foreign` FOREIGN KEY (`country_code`) REFERENCES `countries` (`code_2`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `work_orders`
--
ALTER TABLE `work_orders`
  ADD CONSTRAINT `work_orders_customer_vehicle_id_foreign` FOREIGN KEY (`customer_vehicle_id`) REFERENCES `customer_vehicles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `work_orders_parking_lot_id_foreign` FOREIGN KEY (`parking_lot_id`) REFERENCES `parking_lots` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `work_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
