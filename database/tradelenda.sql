-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2022 at 04:00 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tradelenda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcft` tinyint(1) DEFAULT '0' COMMENT 'Password changed for the first time.',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Super Admin' COMMENT 'Admin|Super Admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone_no`, `password`, `image`, `pcft`, `email_verified_at`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Oluwatosin Ayodele', 'oluwatosin@tradelenda.com', '08065203411', '$2y$10$/vKrnWNhlv/FBPTp6Be.5ev/CPdLLPz5VU21VoB7v.UnxCbaL74iq', NULL, 1, NULL, 'Super Admin', NULL, NULL, '2021-08-13 04:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`, `created_at`, `updated_at`) VALUES
(1, 'Gwagwalada', 1, NULL, NULL),
(2, 'Kuje', 1, NULL, NULL),
(3, 'Abaji', 1, NULL, NULL),
(4, 'Abuja Municipal', 1, NULL, NULL),
(5, ' Bwari', 1, NULL, NULL),
(6, 'Kwali', 1, NULL, NULL),
(7, 'Aba-North', 2, NULL, NULL),
(8, 'Aba-South', 2, NULL, NULL),
(9, 'Arochukwu', 2, NULL, NULL),
(10, 'Bende', 2, NULL, NULL),
(11, 'Ikwuano', 2, NULL, NULL),
(12, 'Isiala-Ngwa-North', 2, NULL, NULL),
(13, 'Isiala-Ngwa-South', 2, NULL, NULL),
(14, 'Isuikwato', 2, NULL, NULL),
(15, 'Obi Nwa', 2, NULL, NULL),
(16, 'Ohafia', 2, NULL, NULL),
(17, 'Osisioma', 2, NULL, NULL),
(18, 'Ngwa', 2, NULL, NULL),
(19, 'Ugwunagbo', 2, NULL, NULL),
(20, 'Ukwa-East', 2, NULL, NULL),
(21, 'Ukwa-West', 2, NULL, NULL),
(22, 'Umuahia-North', 2, NULL, NULL),
(23, 'Umuahia-South', 2, NULL, NULL),
(24, 'Umu-Neochi', 2, NULL, NULL),
(25, 'Demsa', 3, NULL, NULL),
(26, 'Fufore', 3, NULL, NULL),
(27, 'Ganaye', 3, NULL, NULL),
(28, 'Gireri', 3, NULL, NULL),
(29, 'Gombi', 3, NULL, NULL),
(30, 'Guyuk', 3, NULL, NULL),
(31, 'Hong', 3, NULL, NULL),
(32, 'Jada', 3, NULL, NULL),
(33, 'Lamurde', 3, NULL, NULL),
(34, 'Madagali', 3, NULL, NULL),
(35, 'Maiha', 3, NULL, NULL),
(36, 'Mayo-Belwa', 3, NULL, NULL),
(37, 'Michika', 3, NULL, NULL),
(38, 'Mubi-North', 3, NULL, NULL),
(39, 'Mubi-South', 3, NULL, NULL),
(40, 'Numan', 3, NULL, NULL),
(41, 'Shelleng', 3, NULL, NULL),
(42, 'Song', 3, NULL, NULL),
(43, 'Toungo', 3, NULL, NULL),
(44, 'Yola-North', 3, NULL, NULL),
(45, 'Yola-South', 3, NULL, NULL),
(46, 'Abak', 4, NULL, NULL),
(47, 'Eastern Obolo', 4, NULL, NULL),
(48, 'Eket', 4, NULL, NULL),
(49, 'Esit Eket', 4, NULL, NULL),
(50, 'Essien Udim', 4, NULL, NULL),
(51, 'Etim Ekpo', 4, NULL, NULL),
(52, 'Etinan', 4, NULL, NULL),
(53, 'Ibeno', 4, NULL, NULL),
(54, 'Ibesikpo Asutan', 4, NULL, NULL),
(55, 'Ibiono Ibom', 4, NULL, NULL),
(56, 'Ika', 4, NULL, NULL),
(57, 'Ikono', 4, NULL, NULL),
(58, 'Ikot-Abasi', 4, NULL, NULL),
(59, 'Ikot-Ekpene', 4, NULL, NULL),
(60, 'Ini', 4, NULL, NULL),
(61, 'Itu', 4, NULL, NULL),
(62, 'Mbo', 4, NULL, NULL),
(63, 'Mkpat Enin', 4, NULL, NULL),
(64, 'Nsit Atai', 4, NULL, NULL),
(65, 'Nsit-Ibom', 4, NULL, NULL),
(66, 'Nsit-Ubium', 4, NULL, NULL),
(67, 'Obot Akara', 4, NULL, NULL),
(68, 'Okobo', 4, NULL, NULL),
(69, 'Onna', 4, NULL, NULL),
(70, 'Oron', 4, NULL, NULL),
(71, 'Oruk Anam', 4, NULL, NULL),
(72, 'Udung Uko', 4, NULL, NULL),
(73, 'Ukanafun', 4, NULL, NULL),
(74, 'Uruan', 4, NULL, NULL),
(75, 'Urue-Offong', 4, NULL, NULL),
(76, 'Oruko', 4, NULL, NULL),
(77, 'Uyo', 4, NULL, NULL),
(78, 'Aguata', 5, NULL, NULL),
(79, 'Anambra-East', 5, NULL, NULL),
(80, 'Anambra-West', 5, NULL, NULL),
(81, 'Anaocha', 5, NULL, NULL),
(82, 'Awka-North', 5, NULL, NULL),
(83, 'Awka-South', 5, NULL, NULL),
(84, 'Ayamelum', 5, NULL, NULL),
(85, 'Dunukofia', 5, NULL, NULL),
(86, 'Ekwusigo', 5, NULL, NULL),
(87, 'Idemili-North', 5, NULL, NULL),
(88, 'Idemili-South', 5, NULL, NULL),
(89, 'Ihiala', 5, NULL, NULL),
(90, 'Njikoka', 5, NULL, NULL),
(91, 'Nnewi-North', 5, NULL, NULL),
(92, 'Nnewi-South', 5, NULL, NULL),
(93, 'Ogbaru', 5, NULL, NULL),
(94, 'Onitsha-North', 5, NULL, NULL),
(95, 'Onitsha-South', 5, NULL, NULL),
(96, 'Orumba-North', 5, NULL, NULL),
(97, 'Orumba-South', 5, NULL, NULL),
(98, 'Oyi', 5, NULL, NULL),
(99, 'Alkaleri', 6, NULL, NULL),
(100, 'Bauchi', 6, NULL, NULL),
(101, 'Bogoro', 6, NULL, NULL),
(102, 'Damban', 6, NULL, NULL),
(103, 'Darazo', 6, NULL, NULL),
(104, 'Dass', 6, NULL, NULL),
(105, 'Ganjuwa', 6, NULL, NULL),
(106, 'Giade', 6, NULL, NULL),
(107, 'Itas/Gadau', 6, NULL, NULL),
(108, 'Jama-are', 6, NULL, NULL),
(109, 'Katagum', 6, NULL, NULL),
(110, 'Kirfi', 6, NULL, NULL),
(111, 'Misau', 6, NULL, NULL),
(112, 'Ningi', 6, NULL, NULL),
(113, 'Shira', 6, NULL, NULL),
(114, 'Tafawa-Balewa', 6, NULL, NULL),
(115, 'Toro', 6, NULL, NULL),
(116, 'Warji', 6, NULL, NULL),
(117, 'Zaki', 6, NULL, NULL),
(118, 'Brass', 7, NULL, NULL),
(119, 'Ekeremor', 7, NULL, NULL),
(120, 'Kolokuma/Opokuma', 7, NULL, NULL),
(121, 'Nembe', 7, NULL, NULL),
(122, 'Ogbia', 7, NULL, NULL),
(123, 'Sagbama', 7, NULL, NULL),
(124, 'Southern Jaw', 7, NULL, NULL),
(125, 'Yenegoa', 7, NULL, NULL),
(126, 'Ado', 8, NULL, NULL),
(127, 'Agatu', 8, NULL, NULL),
(128, 'Apa', 8, NULL, NULL),
(129, 'Buruku', 8, NULL, NULL),
(130, 'Gboko', 8, NULL, NULL),
(131, 'Guma', 8, NULL, NULL),
(132, 'Gwer-East', 8, NULL, NULL),
(133, 'Gwer-West', 8, NULL, NULL),
(134, 'Katsina-Ala', 8, NULL, NULL),
(135, 'Konshisha', 8, NULL, NULL),
(136, 'Kwande', 8, NULL, NULL),
(137, 'Logo', 8, NULL, NULL),
(138, 'Makurdi', 8, NULL, NULL),
(139, 'Obi', 8, NULL, NULL),
(140, 'Ogbadibo', 8, NULL, NULL),
(141, 'Oju', 8, NULL, NULL),
(142, 'Okpokwu', 8, NULL, NULL),
(143, 'Ohimini', 8, NULL, NULL),
(144, 'Oturkpo', 8, NULL, NULL),
(145, 'Tarka', 8, NULL, NULL),
(146, 'Ukum', 8, NULL, NULL),
(147, 'Ushongo', 8, NULL, NULL),
(148, 'Vandeikya', 8, NULL, NULL),
(149, 'Abadam', 9, NULL, NULL),
(150, 'Askira/Uba', 9, NULL, NULL),
(151, 'Bama', 9, NULL, NULL),
(152, 'Bayo', 9, NULL, NULL),
(153, 'Biu', 9, NULL, NULL),
(154, 'Chibok', 9, NULL, NULL),
(155, 'Damboa', 9, NULL, NULL),
(156, 'Dikwa', 9, NULL, NULL),
(157, 'Gubio', 9, NULL, NULL),
(158, 'Guzamala', 9, NULL, NULL),
(159, 'Gwoza', 9, NULL, NULL),
(160, 'Hawul', 9, NULL, NULL),
(161, 'Jere', 9, NULL, NULL),
(162, 'Kaga', 9, NULL, NULL),
(163, 'Kala/Balge', 9, NULL, NULL),
(164, 'Konduga', 9, NULL, NULL),
(165, 'Kukawa', 9, NULL, NULL),
(166, 'Kwaya Kusar', 9, NULL, NULL),
(167, 'Mafa', 9, NULL, NULL),
(168, 'Magumeri', 9, NULL, NULL),
(169, 'Maiduguri', 9, NULL, NULL),
(170, 'Marte', 9, NULL, NULL),
(171, 'Mobbar', 9, NULL, NULL),
(172, 'Monguno', 9, NULL, NULL),
(173, 'Ngala', 9, NULL, NULL),
(174, 'Nganzai', 9, NULL, NULL),
(175, 'Shani', 9, NULL, NULL),
(176, 'Akpabuyo', 10, NULL, NULL),
(177, 'Odukpani', 10, NULL, NULL),
(178, 'Akamkpa', 10, NULL, NULL),
(179, 'Biase', 10, NULL, NULL),
(180, 'Abi', 10, NULL, NULL),
(181, 'Ikom', 10, NULL, NULL),
(182, 'Yarkur', 10, NULL, NULL),
(183, 'Odubra', 10, NULL, NULL),
(184, 'Boki', 10, NULL, NULL),
(185, 'Ogoja', 10, NULL, NULL),
(186, 'Yala', 10, NULL, NULL),
(187, 'Obanliku', 10, NULL, NULL),
(188, 'Obudu', 10, NULL, NULL),
(189, 'Calabar-South', 10, NULL, NULL),
(190, 'Etung', 10, NULL, NULL),
(191, 'Bekwara', 10, NULL, NULL),
(192, 'Bakassi', 10, NULL, NULL),
(193, 'Calabar-Municipality', 10, NULL, NULL),
(194, 'Oshimili', 11, NULL, NULL),
(195, 'Aniocha', 11, NULL, NULL),
(196, 'Aniocha South', 11, NULL, NULL),
(197, 'Ika South', 11, NULL, NULL),
(198, 'Ika North-East', 11, NULL, NULL),
(199, 'Ndokwa West', 11, NULL, NULL),
(200, 'Ndokwa East', 11, NULL, NULL),
(201, 'Isoko south', 11, NULL, NULL),
(202, 'Isoko North', 11, NULL, NULL),
(203, 'Bomadi', 11, NULL, NULL),
(204, 'Burutu', 11, NULL, NULL),
(205, 'Ughelli South', 11, NULL, NULL),
(206, 'Ughelli North', 11, NULL, NULL),
(207, 'Ethiope West', 11, NULL, NULL),
(208, 'Ethiope East', 11, NULL, NULL),
(209, 'Sapele', 11, NULL, NULL),
(210, 'Okpe', 11, NULL, NULL),
(211, 'Warri North', 11, NULL, NULL),
(212, 'Warri South', 11, NULL, NULL),
(213, 'Uvwie', 11, NULL, NULL),
(214, 'Udu', 11, NULL, NULL),
(215, 'Warri Central', 11, NULL, NULL),
(216, 'Ukwani', 11, NULL, NULL),
(217, 'Oshimili North', 11, NULL, NULL),
(218, 'Patani', 11, NULL, NULL),
(219, 'Afikpo South', 12, NULL, NULL),
(220, 'Afikpo North', 12, NULL, NULL),
(221, 'Onicha', 12, NULL, NULL),
(222, 'Ohaozara', 12, NULL, NULL),
(223, 'Abakaliki', 12, NULL, NULL),
(224, 'Ishielu', 12, NULL, NULL),
(225, 'lkwo', 12, NULL, NULL),
(226, 'Ezza', 12, NULL, NULL),
(227, 'Ezza South', 12, NULL, NULL),
(228, 'Ohaukwu', 12, NULL, NULL),
(229, 'Ebonyi', 12, NULL, NULL),
(230, 'Ivo', 12, NULL, NULL),
(231, 'Esan North-East', 13, NULL, NULL),
(232, 'Esan Central', 13, NULL, NULL),
(233, 'Esan West', 13, NULL, NULL),
(234, 'Egor', 13, NULL, NULL),
(235, 'Ukpoba', 13, NULL, NULL),
(236, 'Central', 13, NULL, NULL),
(237, 'Etsako Central', 13, NULL, NULL),
(238, 'Igueben', 13, NULL, NULL),
(239, 'Oredo', 13, NULL, NULL),
(240, 'Ovia SouthWest', 13, NULL, NULL),
(241, 'Ovia South-East', 13, NULL, NULL),
(242, 'Orhionwon', 13, NULL, NULL),
(243, 'Uhunmwonde', 13, NULL, NULL),
(244, 'Etsako East', 13, NULL, NULL),
(245, 'Esan South-East', 13, NULL, NULL),
(246, 'Ado', 14, NULL, NULL),
(247, 'Ekiti-East', 14, NULL, NULL),
(248, 'Ekiti-West', 14, NULL, NULL),
(249, 'Emure/Ise/Orun', 14, NULL, NULL),
(250, 'Ikare', 14, NULL, NULL),
(251, 'Irepodun', 14, NULL, NULL),
(252, 'Ijero', 14, NULL, NULL),
(253, 'Ido/Osi', 14, NULL, NULL),
(254, 'Oye', 14, NULL, NULL),
(255, 'Ikole', 14, NULL, NULL),
(256, 'Moba', 14, NULL, NULL),
(257, 'Gbonyin', 14, NULL, NULL),
(258, 'Efon', 14, NULL, NULL),
(259, 'Ise/Orun', 14, NULL, NULL),
(260, 'Ilejemeje', 14, NULL, NULL),
(261, 'Enugu South', 15, NULL, NULL),
(262, 'Igbo-Eze South', 15, NULL, NULL),
(263, 'Enugu North', 15, NULL, NULL),
(264, 'Nkanu', 15, NULL, NULL),
(265, 'Udi Agwu', 15, NULL, NULL),
(266, 'Oji-River', 15, NULL, NULL),
(267, 'Ezeagu', 15, NULL, NULL),
(268, 'IgboEze North', 15, NULL, NULL),
(269, 'Isi-Uzo', 15, NULL, NULL),
(270, 'Nsukka', 15, NULL, NULL),
(271, 'Igbo-Ekiti', 15, NULL, NULL),
(272, 'Uzo-Uwani', 15, NULL, NULL),
(273, 'Enugu Eas', 15, NULL, NULL),
(274, 'Aninri', 15, NULL, NULL),
(275, 'Nkanu East', 15, NULL, NULL),
(276, 'Udenu', 15, NULL, NULL),
(277, 'Akko', 16, NULL, NULL),
(278, 'Balanga', 16, NULL, NULL),
(279, 'Billiri', 16, NULL, NULL),
(280, 'Dukku', 16, NULL, NULL),
(281, 'Kaltungo', 16, NULL, NULL),
(282, 'Kwami', 16, NULL, NULL),
(283, 'Shomgom', 16, NULL, NULL),
(284, 'Funakaye', 16, NULL, NULL),
(285, 'Gombe', 16, NULL, NULL),
(286, 'Nafada/Bajoga', 16, NULL, NULL),
(287, 'Yamaltu/Delta', 16, NULL, NULL),
(288, 'Aboh-Mbaise', 17, NULL, NULL),
(289, 'Ahiazu-Mbaise', 17, NULL, NULL),
(290, 'Ehime-Mbano', 17, NULL, NULL),
(291, 'Ezinihitte', 17, NULL, NULL),
(292, 'Ideato North', 17, NULL, NULL),
(293, 'Ideato South', 17, NULL, NULL),
(294, 'Ihitte/Uboma', 17, NULL, NULL),
(295, 'Ikeduru', 17, NULL, NULL),
(296, 'Isiala Mbano', 17, NULL, NULL),
(297, 'Isu', 17, NULL, NULL),
(298, 'Mbaitoli', 17, NULL, NULL),
(299, 'Ngor-Okpala', 17, NULL, NULL),
(300, 'Njaba', 17, NULL, NULL),
(301, 'Nwangele', 17, NULL, NULL),
(302, 'Nkwerre', 17, NULL, NULL),
(303, 'Obowo', 17, NULL, NULL),
(304, 'Oguta', 17, NULL, NULL),
(305, 'Ohaji/Egbema', 17, NULL, NULL),
(306, 'Okigwe', 17, NULL, NULL),
(307, 'Orlu', 17, NULL, NULL),
(308, 'Orsu', 17, NULL, NULL),
(309, 'Oru East', 17, NULL, NULL),
(310, 'Oru West', 17, NULL, NULL),
(311, 'Owerri-Municipal', 17, NULL, NULL),
(312, 'Owerri North', 17, NULL, NULL),
(313, 'Owerri West ', 17, NULL, NULL),
(314, 'Auyo', 18, NULL, NULL),
(315, 'Babura', 18, NULL, NULL),
(316, 'Birni Kudu', 18, NULL, NULL),
(317, 'Biriniwa', 18, NULL, NULL),
(318, 'Buji', 18, NULL, NULL),
(319, 'Dutse', 18, NULL, NULL),
(320, 'Gagarawa', 18, NULL, NULL),
(321, 'Garki', 18, NULL, NULL),
(322, 'Gumel', 18, NULL, NULL),
(323, 'Guri', 18, NULL, NULL),
(324, 'Gwaram', 18, NULL, NULL),
(325, 'Gwiwa', 18, NULL, NULL),
(326, 'Hadejia', 18, NULL, NULL),
(327, 'Jahun', 18, NULL, NULL),
(328, 'Kafin Hausa', 18, NULL, NULL),
(329, 'Kaugama Kazaure', 18, NULL, NULL),
(330, 'Kiri Kasamma', 18, NULL, NULL),
(331, 'Kiyawa', 18, NULL, NULL),
(332, 'Maigatari', 18, NULL, NULL),
(333, 'Malam Madori', 18, NULL, NULL),
(334, 'Miga', 18, NULL, NULL),
(335, 'Ringim', 18, NULL, NULL),
(336, 'Roni', 18, NULL, NULL),
(337, 'Sule-Tankarkar', 18, NULL, NULL),
(338, 'Taura ', 18, NULL, NULL),
(339, 'Yankwashi ', 18, NULL, NULL),
(340, 'Birni-Gwari', 19, NULL, NULL),
(341, 'Chikun', 19, NULL, NULL),
(342, 'Giwa', 19, NULL, NULL),
(343, 'Igabi', 19, NULL, NULL),
(344, 'Ikara', 19, NULL, NULL),
(345, 'jaba', 19, NULL, NULL),
(346, 'Jemaa', 19, NULL, NULL),
(347, 'Kachia', 19, NULL, NULL),
(348, 'Kaduna North', 19, NULL, NULL),
(349, 'Kaduna South', 19, NULL, NULL),
(350, 'Kagarko', 19, NULL, NULL),
(351, 'Kajuru', 19, NULL, NULL),
(352, 'Kaura', 19, NULL, NULL),
(353, 'Kauru', 19, NULL, NULL),
(354, 'Kubau', 19, NULL, NULL),
(355, 'Kudan', 19, NULL, NULL),
(356, 'Lere', 19, NULL, NULL),
(357, 'Makarfi', 19, NULL, NULL),
(358, 'Sabon-Gari', 19, NULL, NULL),
(359, 'Sanga', 19, NULL, NULL),
(360, 'Soba', 19, NULL, NULL),
(361, 'Zango-Kataf', 19, NULL, NULL),
(362, 'Zaria', 19, NULL, NULL),
(363, 'Ajingi', 20, NULL, NULL),
(364, 'Albasu', 20, NULL, NULL),
(365, 'Bagwai', 20, NULL, NULL),
(366, 'Bebeji', 20, NULL, NULL),
(367, 'Bichi', 20, NULL, NULL),
(368, 'Bunkure', 20, NULL, NULL),
(369, 'Dala', 20, NULL, NULL),
(370, 'Dambatta', 20, NULL, NULL),
(371, 'Dawakin Kudu', 20, NULL, NULL),
(373, 'Dawakin Tofa', 20, NULL, NULL),
(374, 'Doguwa', 20, NULL, NULL),
(375, 'Fagge', 20, NULL, NULL),
(376, 'Gabasawa', 20, NULL, NULL),
(377, 'Garko', 20, NULL, NULL),
(378, 'Garum', 20, NULL, NULL),
(379, 'Mallam', 20, NULL, NULL),
(380, 'Gaya', 20, NULL, NULL),
(381, 'Gezawa', 20, NULL, NULL),
(382, 'Gwale', 20, NULL, NULL),
(383, 'Gwarzo', 20, NULL, NULL),
(384, 'Kabo', 20, NULL, NULL),
(385, 'Kano Municipal', 20, NULL, NULL),
(386, 'Karaye', 20, NULL, NULL),
(387, 'Kibiya', 20, NULL, NULL),
(388, 'Kiru', 20, NULL, NULL),
(389, 'kumbotso', 20, NULL, NULL),
(390, 'Kunchi', 20, NULL, NULL),
(391, 'Kura', 20, NULL, NULL),
(392, 'Madobi', 20, NULL, NULL),
(393, 'Makoda', 20, NULL, NULL),
(394, 'Minjibir', 20, NULL, NULL),
(395, 'Nasarawa', 20, NULL, NULL),
(396, 'Rano', 20, NULL, NULL),
(397, 'Rimin Gado', 20, NULL, NULL),
(398, 'Rogo', 20, NULL, NULL),
(399, 'Shanono', 20, NULL, NULL),
(400, 'Sumaila', 20, NULL, NULL),
(401, 'Takali', 20, NULL, NULL),
(402, 'Tarauni', 20, NULL, NULL),
(403, 'Tofa', 20, NULL, NULL),
(404, 'Tsanyawa', 20, NULL, NULL),
(405, 'Tudun Wada', 20, NULL, NULL),
(406, 'Ungogo', 20, NULL, NULL),
(407, 'Warawa', 20, NULL, NULL),
(408, 'Wudil', 20, NULL, NULL),
(409, 'Bakori', 21, NULL, NULL),
(410, 'Batagarawa', 21, NULL, NULL),
(411, 'Batsari', 21, NULL, NULL),
(412, 'Baure', 21, NULL, NULL),
(413, 'Bindawa', 21, NULL, NULL),
(414, 'Charanchi', 21, NULL, NULL),
(415, 'Dandume', 21, NULL, NULL),
(416, 'Danja', 21, NULL, NULL),
(417, 'Dan Musa', 21, NULL, NULL),
(418, 'Daura', 21, NULL, NULL),
(419, 'Dutsi', 21, NULL, NULL),
(420, 'Dutsin-Ma', 21, NULL, NULL),
(421, 'Faskari', 21, NULL, NULL),
(422, 'Funtua', 21, NULL, NULL),
(423, 'Ingawa', 21, NULL, NULL),
(424, 'Jibia', 21, NULL, NULL),
(425, 'Kafur', 21, NULL, NULL),
(426, 'Kaita', 21, NULL, NULL),
(427, 'Kankara', 21, NULL, NULL),
(428, 'Kankia', 21, NULL, NULL),
(429, 'Katsina', 21, NULL, NULL),
(430, 'Kurfi', 21, NULL, NULL),
(431, 'Kusada', 21, NULL, NULL),
(432, 'Mai Adua', 21, NULL, NULL),
(433, 'Malumfashi', 21, NULL, NULL),
(434, 'Mani', 21, NULL, NULL),
(435, 'Mashi', 21, NULL, NULL),
(436, 'Matazuu', 21, NULL, NULL),
(437, 'Musawa', 21, NULL, NULL),
(438, 'Rimi', 21, NULL, NULL),
(439, 'Sabuwa', 21, NULL, NULL),
(440, 'Safana', 21, NULL, NULL),
(441, 'Sandamu', 21, NULL, NULL),
(442, 'Zango', 21, NULL, NULL),
(443, 'Aleiro', 22, NULL, NULL),
(444, 'Arewa-Dandi', 22, NULL, NULL),
(445, 'Argungu', 22, NULL, NULL),
(446, 'Augie', 22, NULL, NULL),
(447, 'Bagudo', 22, NULL, NULL),
(448, 'Birnin Kebbi', 22, NULL, NULL),
(449, 'Bunza', 22, NULL, NULL),
(450, 'Dandi', 22, NULL, NULL),
(451, 'Fakai', 22, NULL, NULL),
(452, 'Gwandu', 22, NULL, NULL),
(453, 'Jega', 22, NULL, NULL),
(454, 'Kalgo', 22, NULL, NULL),
(455, 'Koko/Besse', 22, NULL, NULL),
(456, 'Maiyama', 22, NULL, NULL),
(457, 'Ngaski', 22, NULL, NULL),
(458, 'Sakaba', 22, NULL, NULL),
(459, 'Shanga', 22, NULL, NULL),
(460, 'Suru', 22, NULL, NULL),
(461, 'Wasagu/Danko', 22, NULL, NULL),
(462, 'Yauri', 22, NULL, NULL),
(463, 'Zuru', 22, NULL, NULL),
(464, 'Adavi', 23, NULL, NULL),
(465, 'Ajaokuta', 23, NULL, NULL),
(466, 'Ankpa', 23, NULL, NULL),
(467, 'Bassa', 23, NULL, NULL),
(468, 'Dekina', 23, NULL, NULL),
(469, 'Ibaji', 23, NULL, NULL),
(470, 'Idah', 23, NULL, NULL),
(471, 'Igalamela-Odolu', 23, NULL, NULL),
(472, 'Ijumu', 23, NULL, NULL),
(473, 'Kabba/Bunu', 23, NULL, NULL),
(474, 'Kogi', 23, NULL, NULL),
(475, 'Lokoja', 23, NULL, NULL),
(476, 'Mopa-Muro', 23, NULL, NULL),
(477, 'Ofu', 23, NULL, NULL),
(478, 'Ogori/Mangongo', 23, NULL, NULL),
(479, 'Okehi', 23, NULL, NULL),
(480, 'Okene', 23, NULL, NULL),
(481, 'Olamabolo', 23, NULL, NULL),
(482, 'Omala', 23, NULL, NULL),
(483, 'Yagba East', 23, NULL, NULL),
(484, 'Yagba West', 23, NULL, NULL),
(485, 'Asa', 24, NULL, NULL),
(486, 'Baruten', 24, NULL, NULL),
(487, 'Edu', 24, NULL, NULL),
(488, 'Ekiti', 24, NULL, NULL),
(489, 'Ifelodun', 24, NULL, NULL),
(490, 'Ilorin East', 24, NULL, NULL),
(491, 'Ilorin West', 24, NULL, NULL),
(492, 'Irepodun', 24, NULL, NULL),
(493, 'Isin', 24, NULL, NULL),
(494, 'Kaiama', 24, NULL, NULL),
(495, 'Moro', 24, NULL, NULL),
(496, 'Offa', 24, NULL, NULL),
(497, 'Oke-Ero', 24, NULL, NULL),
(498, 'Oyun', 24, NULL, NULL),
(499, 'Pategi', 24, NULL, NULL),
(500, 'Agege', 25, NULL, NULL),
(501, 'Ajeromi-Ifelodun', 25, NULL, NULL),
(502, 'Alimosho', 25, NULL, NULL),
(503, 'Amuwo-Odofin', 25, NULL, NULL),
(504, 'Apapa', 25, NULL, NULL),
(505, 'Badagry', 25, NULL, NULL),
(506, 'Epe', 25, NULL, NULL),
(507, 'Eti-Osa', 25, NULL, NULL),
(508, 'Ibeju/Lekki', 25, NULL, NULL),
(509, 'Ifako-Ijaye', 25, NULL, NULL),
(510, 'Ikeja', 25, NULL, NULL),
(511, 'Ikorodu', 25, NULL, NULL),
(512, 'Kosofe', 25, NULL, NULL),
(513, 'Lagos Island', 25, NULL, NULL),
(514, 'Lagos Mainland', 25, NULL, NULL),
(515, 'Mushin', 25, NULL, NULL),
(516, 'Ojo', 25, NULL, NULL),
(517, 'Oshodi-Isolo', 25, NULL, NULL),
(518, 'Shomolu', 25, NULL, NULL),
(519, 'Surulere', 25, NULL, NULL),
(520, 'Akwanga', 26, NULL, NULL),
(521, 'Awe', 26, NULL, NULL),
(522, 'Doma', 26, NULL, NULL),
(523, 'Karu', 26, NULL, NULL),
(524, 'Keana', 26, NULL, NULL),
(525, 'Keffi', 26, NULL, NULL),
(526, 'Kokona', 26, NULL, NULL),
(527, 'Lafia', 26, NULL, NULL),
(528, 'Nasarawa', 26, NULL, NULL),
(529, 'Nasarawa-Eggon', 26, NULL, NULL),
(530, 'Obi', 26, NULL, NULL),
(531, 'Toto', 26, NULL, NULL),
(532, 'Wamba', 26, NULL, NULL),
(533, 'Agaie', 27, NULL, NULL),
(534, 'Agwara', 27, NULL, NULL),
(535, 'Bida', 27, NULL, NULL),
(536, 'Borgu', 27, NULL, NULL),
(537, 'Bosso', 27, NULL, NULL),
(538, 'Chanchaga', 27, NULL, NULL),
(539, 'Edati', 27, NULL, NULL),
(540, 'Gbako', 27, NULL, NULL),
(541, 'Gurara', 27, NULL, NULL),
(542, 'Katcha', 27, NULL, NULL),
(543, 'Kontagora', 27, NULL, NULL),
(544, 'Lapai', 27, NULL, NULL),
(545, 'Lavun', 27, NULL, NULL),
(546, 'Magama', 27, NULL, NULL),
(547, 'Mariga', 27, NULL, NULL),
(548, 'Mashegu', 27, NULL, NULL),
(549, 'Mokwa', 27, NULL, NULL),
(550, 'Muya', 27, NULL, NULL),
(551, 'Pailoro', 27, NULL, NULL),
(552, 'Rafi', 27, NULL, NULL),
(553, 'Rijau', 27, NULL, NULL),
(554, 'Shiroro', 27, NULL, NULL),
(555, 'Suleja', 27, NULL, NULL),
(556, 'Tafa', 27, NULL, NULL),
(557, 'Wushishi', 27, NULL, NULL),
(558, 'Abeokuta North', 28, NULL, NULL),
(559, 'Abeokuta South', 28, NULL, NULL),
(560, 'Ado-Odo/Ota', 28, NULL, NULL),
(561, 'Egbado North', 28, NULL, NULL),
(562, 'Egbado South', 28, NULL, NULL),
(563, 'Ewekoro', 28, NULL, NULL),
(564, 'Ifo', 28, NULL, NULL),
(565, 'Ijebu East', 28, NULL, NULL),
(566, 'Ijebu North', 28, NULL, NULL),
(567, 'Ijebu North East', 28, NULL, NULL),
(568, 'Ijebu Ode', 28, NULL, NULL),
(569, 'Ikenne', 28, NULL, NULL),
(570, 'Imeko-Afon', 28, NULL, NULL),
(571, 'Ipokia', 28, NULL, NULL),
(572, 'Obafemi-Owode', 28, NULL, NULL),
(573, 'Ogun Waterside', 28, NULL, NULL),
(574, 'Odeda', 28, NULL, NULL),
(575, 'Odogbolu', 28, NULL, NULL),
(576, 'Remo North', 28, NULL, NULL),
(577, 'Shagamu', 28, NULL, NULL),
(578, 'Akoko North East', 29, NULL, NULL),
(579, 'Akoko North West', 29, NULL, NULL),
(580, 'Akoko South Akure East', 29, NULL, NULL),
(581, 'Akoko South West', 29, NULL, NULL),
(582, 'Akure North', 29, NULL, NULL),
(583, 'Akure South', 29, NULL, NULL),
(584, 'Ese-Odo', 29, NULL, NULL),
(585, 'Idanre', 29, NULL, NULL),
(586, 'Ifedore', 29, NULL, NULL),
(587, 'Ilaje', 29, NULL, NULL),
(588, 'Ile-Oluji', 29, NULL, NULL),
(589, 'Okeigbo', 29, NULL, NULL),
(590, 'Irele', 29, NULL, NULL),
(591, 'Odigbo', 29, NULL, NULL),
(592, 'Okitipupa', 29, NULL, NULL),
(593, 'Ondo East', 29, NULL, NULL),
(594, 'Ondo West', 29, NULL, NULL),
(595, 'Ose', 29, NULL, NULL),
(596, 'Owo ', 29, NULL, NULL),
(597, 'Aiyedade', 30, NULL, NULL),
(598, 'Aiyedire', 30, NULL, NULL),
(599, 'Atakumosa East', 30, NULL, NULL),
(600, 'Atakumosa West', 30, NULL, NULL),
(601, 'Boluwaduro', 30, NULL, NULL),
(602, 'Boripe', 30, NULL, NULL),
(603, 'Ede North', 30, NULL, NULL),
(604, 'Ede South', 30, NULL, NULL),
(605, 'Egbedore', 30, NULL, NULL),
(606, 'Ejigbo', 30, NULL, NULL),
(607, 'Ife Central', 30, NULL, NULL),
(608, 'Ife East', 30, NULL, NULL),
(609, 'Ife North', 30, NULL, NULL),
(610, 'Ife South', 30, NULL, NULL),
(611, 'Ifedayo', 30, NULL, NULL),
(612, 'Ifelodun', 30, NULL, NULL),
(613, 'Ila', 30, NULL, NULL),
(614, 'Ilesa East', 30, NULL, NULL),
(615, 'Ilesa West', 30, NULL, NULL),
(616, 'Irepodun', 30, NULL, NULL),
(617, 'Irewole', 30, NULL, NULL),
(618, 'Isokan', 30, NULL, NULL),
(619, 'Iwo', 30, NULL, NULL),
(620, 'Obokun', 30, NULL, NULL),
(621, 'Odo-Otin', 30, NULL, NULL),
(622, 'Ola-Oluwa', 30, NULL, NULL),
(623, 'Olorunda', 30, NULL, NULL),
(624, 'Oriade', 30, NULL, NULL),
(625, 'Orolu', 30, NULL, NULL),
(626, 'Osogbo', 30, NULL, NULL),
(627, 'Afijio', 31, NULL, NULL),
(628, 'Akinyele', 31, NULL, NULL),
(629, 'Atiba', 31, NULL, NULL),
(630, 'Atigbo', 31, NULL, NULL),
(631, 'Egbeda', 31, NULL, NULL),
(632, 'Ibadan Central', 31, NULL, NULL),
(633, 'Ibadan North', 31, NULL, NULL),
(634, 'Ibadan North West', 31, NULL, NULL),
(635, 'Ibadan South East', 31, NULL, NULL),
(636, 'Ibadan South West', 31, NULL, NULL),
(637, 'Ibarapa Central', 31, NULL, NULL),
(638, 'Ibarapa East', 31, NULL, NULL),
(639, 'Ibarapa North', 31, NULL, NULL),
(640, 'Ido', 31, NULL, NULL),
(641, 'Irepo', 31, NULL, NULL),
(642, 'Iseyin', 31, NULL, NULL),
(643, 'Itesiwaju', 31, NULL, NULL),
(644, 'Iwajowa', 31, NULL, NULL),
(645, 'Kajola', 31, NULL, NULL),
(646, 'Lagelu Ogbomosho North', 31, NULL, NULL),
(647, 'Ogbmosho South', 31, NULL, NULL),
(648, 'Ogo Oluwa', 31, NULL, NULL),
(649, 'Olorunsogo', 31, NULL, NULL),
(650, 'Oluyole', 31, NULL, NULL),
(651, 'Ona-Ara', 31, NULL, NULL),
(652, 'Orelope', 31, NULL, NULL),
(653, 'Ori Ire', 31, NULL, NULL),
(654, 'Oyo East', 31, NULL, NULL),
(655, 'Oyo West', 31, NULL, NULL),
(656, 'Saki East', 31, NULL, NULL),
(657, 'Saki West', 31, NULL, NULL),
(658, 'Surulere', 31, NULL, NULL),
(659, 'Barikin Ladi', 32, NULL, NULL),
(660, 'Bassa', 32, NULL, NULL),
(661, 'Bokkos', 32, NULL, NULL),
(662, 'Jos East', 32, NULL, NULL),
(663, 'Jos North', 32, NULL, NULL),
(664, 'Jos South', 32, NULL, NULL),
(665, 'Kanam', 32, NULL, NULL),
(666, 'Kanke', 32, NULL, NULL),
(667, 'Langtang North', 32, NULL, NULL),
(668, 'Langtang South', 32, NULL, NULL),
(669, 'Mangu', 32, NULL, NULL),
(670, 'Mikang', 32, NULL, NULL),
(671, 'Pankshin', 32, NULL, NULL),
(672, 'Qua an Pan', 32, NULL, NULL),
(673, 'Riyom', 32, NULL, NULL),
(674, 'Shendam', 32, NULL, NULL),
(675, 'Wase', 32, NULL, NULL),
(676, 'Abua/Odual', 33, NULL, NULL),
(677, 'Ahoada East', 33, NULL, NULL),
(678, 'Ahoada West', 33, NULL, NULL),
(679, 'Akuku Toru', 33, NULL, NULL),
(680, 'Andoni', 33, NULL, NULL),
(681, 'Asari-Toru', 33, NULL, NULL),
(682, 'Bonny', 33, NULL, NULL),
(683, 'Degema', 33, NULL, NULL),
(684, 'Emohua', 33, NULL, NULL),
(685, 'Eleme', 33, NULL, NULL),
(686, 'Etche', 33, NULL, NULL),
(687, 'Gokana', 33, NULL, NULL),
(688, 'Ikwerre', 33, NULL, NULL),
(689, 'Khana', 33, NULL, NULL),
(690, 'Obia/Akpor', 33, NULL, NULL),
(691, 'Ogba/Egbema/Ndoni', 33, NULL, NULL),
(692, 'Ogu/Bolo', 33, NULL, NULL),
(693, 'Okrika', 33, NULL, NULL),
(694, 'Omumma', 33, NULL, NULL),
(695, 'Opobo/Nkoro', 33, NULL, NULL),
(696, 'Oyigbo', 33, NULL, NULL),
(697, 'Port-Harcourt', 33, NULL, NULL),
(698, 'Tai ', 33, NULL, NULL),
(699, 'Binji', 34, NULL, NULL),
(700, 'Bodinga', 34, NULL, NULL),
(701, 'Dange-shnsi', 34, NULL, NULL),
(702, 'Gada', 34, NULL, NULL),
(703, 'Goronyo', 34, NULL, NULL),
(704, 'Gudu', 34, NULL, NULL),
(705, 'Gawabawa', 34, NULL, NULL),
(706, 'Illela', 34, NULL, NULL),
(707, 'Isa', 34, NULL, NULL),
(708, 'Kware', 34, NULL, NULL),
(709, 'kebbe', 34, NULL, NULL),
(710, 'Rabah', 34, NULL, NULL),
(711, 'Sabon birni', 34, NULL, NULL),
(712, 'Shagari', 34, NULL, NULL),
(713, 'Silame', 34, NULL, NULL),
(714, 'Sokoto North', 34, NULL, NULL),
(715, 'Sokoto South', 34, NULL, NULL),
(716, 'Tambuwal', 34, NULL, NULL),
(717, 'Tqngaza', 34, NULL, NULL),
(718, 'Tureta', 34, NULL, NULL),
(719, 'Wamako', 34, NULL, NULL),
(720, 'Wurno', 34, NULL, NULL),
(721, 'Yabo', 34, NULL, NULL),
(722, 'Ardo-kola', 35, NULL, NULL),
(723, 'Bali', 35, NULL, NULL),
(724, 'Donga', 35, NULL, NULL),
(725, 'Gashaka', 35, NULL, NULL),
(726, 'Cassol', 35, NULL, NULL),
(727, 'Ibi', 35, NULL, NULL),
(728, 'Jalingo', 35, NULL, NULL),
(729, 'Karin-Lamido', 35, NULL, NULL),
(730, 'Kurmi', 35, NULL, NULL),
(731, 'Lau', 35, NULL, NULL),
(732, 'Sardauna', 35, NULL, NULL),
(733, 'Takum', 35, NULL, NULL),
(734, 'Ussa', 35, NULL, NULL),
(735, 'Wukari', 35, NULL, NULL),
(736, 'Yorro', 35, NULL, NULL),
(737, 'Zing', 35, NULL, NULL),
(738, 'Bade', 36, NULL, NULL),
(739, 'Bursari', 36, NULL, NULL),
(740, 'Damaturu', 36, NULL, NULL),
(741, 'Fika', 36, NULL, NULL),
(742, 'Fune', 36, NULL, NULL),
(743, 'Geidam', 36, NULL, NULL),
(744, 'Gujba', 36, NULL, NULL),
(745, 'Gulani', 36, NULL, NULL),
(746, 'Jakusko', 36, NULL, NULL),
(747, 'Karasuwa', 36, NULL, NULL),
(748, 'Karawa', 36, NULL, NULL),
(749, 'Machina', 36, NULL, NULL),
(750, 'Nangere', 36, NULL, NULL),
(751, 'Nguru Potiskum', 36, NULL, NULL),
(752, 'Tarmua', 36, NULL, NULL),
(753, 'Yunusari', 36, NULL, NULL),
(754, 'Yusufari', 36, NULL, NULL),
(755, 'Anka', 37, NULL, NULL),
(756, 'Bakura', 37, NULL, NULL),
(757, 'Birnin Magaji', 37, NULL, NULL),
(758, 'Bukkuyum', 37, NULL, NULL),
(759, 'Bungudu', 37, NULL, NULL),
(760, 'Gummi', 37, NULL, NULL),
(761, 'Gusau', 37, NULL, NULL),
(762, 'Kaura', 37, NULL, NULL),
(763, 'Namoda', 37, NULL, NULL),
(764, 'Maradun', 37, NULL, NULL),
(765, 'Maru', 37, NULL, NULL),
(766, 'Shinkafi', 37, NULL, NULL),
(767, 'Talata Mafara', 37, NULL, NULL),
(768, 'Tsafe', 37, NULL, NULL),
(769, 'Zurmi ', 37, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `short_name`, `created_at`, `updated_at`) VALUES
(1, 'Nigeria', 'NG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `integrates`
--

CREATE TABLE `integrates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ba_auth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'NGN',
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'NG',
  `customer_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'collect',
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_reusable` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `is_connected` tinyint(1) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(11,2) NOT NULL,
  `loan_tenor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interest` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acknowledgement` tinyint(1) DEFAULT '0',
  `payback_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lpofile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_id_lpo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proformafile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_id_proforma` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `acknowledge_active_page` tinyint(1) DEFAULT '0',
  `interest_paid_back` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_paid_back` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `email`, `reason`, `amount`, `loan_tenor`, `interest`, `status`, `note`, `acknowledgement`, `payback_date`, `lpofile`, `public_id_lpo`, `proformafile`, `public_id_proforma`, `user_id`, `admin_id`, `created_at`, `updated_at`, `acknowledge_active_page`, `interest_paid_back`, `total_paid_back`) VALUES
(21, 'OluwatosinAyodele45@gmail.com', 'Working Capitals', 45000.00, '30 days', '5', 'approved', 'good to go', 1, '2022-03-07 13:25:12', NULL, NULL, NULL, NULL, 1, NULL, '2022-02-05 12:25:12', '2022-02-05 12:36:27', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_06_17_162735_create_countries_table', 1),
(2, '2014_06_17_171654_create_states_table', 1),
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2021_06_07_185212_create_admins_table', 1),
(7, '2021_06_08_045222_create_loans_table', 1),
(8, '2021_06_09_091752_create_sures_table', 1),
(9, '2021_06_20_123951_create_notifications_table', 1),
(10, '2021_06_28_075248_create_settings_table', 1),
(11, '2021_08_04_152451_add_acknowledge_active_page_to_loans_table', 2),
(12, '2021_08_25_173558_create_integrates_table', 3),
(13, '2021_08_25_180823_create_payments_table', 4),
(14, '2021_09_05_191651_add_google_id_column', 5),
(16, '2021_10_25_123932_add_coy_to_sures_table', 6),
(17, '2021_10_26_125521_create_cities_table', 7),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 8),
(19, '2022_02_04_133609_add_interest_paid_back_to_loans_table', 9),
(20, '2022_02_05_155932_add_total_paid_back_to_loans_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('01e690fc-e359-4a55-ac54-89833878690f', 'App\\Notifications\\LoanRejectionNotification', 'App\\User', 90, '{\"loan_id\":14,\"admin_id\":null,\"status\":\"declined\",\"message\":\"Your Loan of N500 for Purchase Equipment has been declined.\"}', NULL, '2021-12-15 14:09:55', '2021-12-15 14:09:55'),
('05633244-94c6-4b67-a829-84e427af19c8', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 1, '{\"loan_id\":8,\"user_id\":1,\"user_email\":\"OluwatosinAyodele45@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N30000 for Expand My Business has been requested by Oluwatosin.\"}', NULL, '2021-09-01 12:27:51', '2021-09-01 12:27:51'),
('064a58c9-1348-4e0d-a16f-502ca4abb148', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 5, '{\"loan_id\":15,\"user_id\":90,\"user_email\":\"oshieodey22@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N2000000 for Expand My Business has been requested by Francis.\"}', NULL, '2021-12-14 20:29:39', '2021-12-14 20:29:39'),
('13a5b02a-0650-4eea-a23b-dfa69df29d8c', 'App\\Notifications\\LoanApprovalNotification', 'App\\User', 1, '{\"loan_id\":21,\"admin_id\":null,\"status\":\"approved\",\"message\":\"Your Loan of N45000 for Working Capitals has been approved.\"}', NULL, '2022-02-05 12:30:02', '2022-02-05 12:30:02'),
('173a1b11-e6c2-4825-abb3-a65592e4e97f', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 1, '{\"loan_id\":9,\"user_id\":67,\"user_email\":\"gyenailiya@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N100000000 for Purchase Inventory has been requested by gyena.\"}', NULL, '2021-10-27 18:54:31', '2021-10-27 18:54:31'),
('20aaf8e5-a05c-43b3-9e75-d3090ae90b31', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 5, '{\"loan_id\":10,\"user_id\":69,\"user_email\":\"arogundadebrothers@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N5000 for Purchase Inventory has been requested by Arogundade.\"}', NULL, '2021-10-29 16:57:14', '2021-10-29 16:57:14'),
('3153ef00-3d14-4f10-8144-ec0384ceaf9b', 'App\\Notifications\\LoanRejectionNotification', 'App\\User', 1, '{\"loan_id\":8,\"admin_id\":null,\"status\":\"declined\",\"message\":\"Your Loan of N30000 for Expand My Business has been declined.\"}', NULL, '2021-10-29 10:40:59', '2021-10-29 10:40:59'),
('33a58e99-97da-4039-8bcd-77350ec2c7ec', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 1, '{\"loan_id\":13,\"user_id\":82,\"user_email\":\"olubukolaagunbiade@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N500000 for Working Capitals has been requested by Olubukola.\"}', NULL, '2021-11-18 15:35:59', '2021-11-18 15:35:59'),
('34268d40-35ff-4d6a-8f0f-4d7bead05359', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 2, '{\"loan_id\":9,\"user_id\":67,\"user_email\":\"gyenailiya@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N100000000 for Purchase Inventory has been requested by gyena.\"}', NULL, '2021-10-27 18:54:31', '2021-10-27 18:54:31'),
('3635126f-417a-4c87-9922-3994848c9cf1', 'App\\Notifications\\OfferSendAdmin', 'App\\User', 67, '{\"loan_id\":9,\"admin_id\":null,\"status\":\"offer\",\"message\":\"An offer letter for your loan #9 has been sent by admin. <a href=\'\\/offerletter\\/9\'>Click to see<\\/a>\"}', NULL, '2021-10-27 21:11:00', '2021-10-27 21:11:00'),
('38d3ad27-1786-4d3d-9cbf-65afe4e5211a', 'App\\Notifications\\OfferSendAdmin', 'App\\User', 69, '{\"loan_id\":10,\"admin_id\":null,\"status\":\"offer\",\"message\":\"An offer letter for your loan #10 has been sent by admin. <a href=\'\\/offerletter\\/10\'>Click to see<\\/a>\"}', NULL, '2021-11-08 13:36:01', '2021-11-08 13:36:01'),
('44fa1585-0060-46d8-b7d7-bba1f391b6b4', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 1, '{\"loan_id\":15,\"user_id\":90,\"user_email\":\"oshieodey22@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N2000000 for Expand My Business has been requested by Francis.\"}', NULL, '2021-12-14 20:29:38', '2021-12-14 20:29:38'),
('45c0721c-cdd3-43d4-ba08-03eeff234a9e', 'App\\Notifications\\DisburseNotificationUser', 'App\\User', 67, '{\"loan_id\":9,\"admin_id\":null,\"status\":\"disbursed\",\"message\":\"Your Loan of N100000000 for Purchase Inventory has been disbursed.\"}', NULL, '2021-11-09 17:58:17', '2021-11-09 17:58:17'),
('61a3d684-8d28-4f5c-b8f0-a370f0a9fef6', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 1, '{\"loan_id\":17,\"user_id\":1,\"user_email\":\"OluwatosinAyodele45@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N50000 for Purchase Inventory has been requested by Oluwatosin.\"}', NULL, '2021-12-18 14:05:50', '2021-12-18 14:05:50'),
('63df80c2-3134-476d-a2ab-11441cb071e1', 'App\\Notifications\\OfferSendAdmin', 'App\\User', 1, '{\"loan_id\":21,\"admin_id\":null,\"status\":\"offer\",\"message\":\"An offer letter for your loan #21 has been sent by admin. <a href=\'\\/offerletter\\/21\'>Click to see<\\/a>\"}', NULL, '2022-02-05 12:33:46', '2022-02-05 12:33:46'),
('66b5c28b-de38-4335-aea5-6c2fb0f198d8', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 5, '{\"loan_id\":16,\"user_id\":90,\"user_email\":\"oshieodey22@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N5000000 for Purchase Equipment has been requested by Francis.\"}', NULL, '2021-12-14 20:39:48', '2021-12-14 20:39:48'),
('6992597a-b2c3-4c70-bfeb-f404e6b6f625', 'App\\Notifications\\LoanApprovalNotification', 'App\\User', 1, '{\"loan_id\":8,\"admin_id\":null,\"status\":\"approved\",\"message\":\"Your Loan of N30000 for Expand My Business has been approved.\"}', NULL, '2021-09-01 12:31:03', '2021-09-01 12:31:03'),
('6bc1cfeb-5e80-4de3-9b8a-811f27a800f9', 'App\\Notifications\\LoanApprovalNotification', 'App\\User', 26, '{\"loan_id\":6,\"admin_id\":null,\"status\":\"approved\",\"message\":\"Your Loan of N30000 for Pay Salary has been approved.\"}', NULL, '2021-08-18 09:56:14', '2021-08-18 09:56:14'),
('723e2e57-1871-427a-817f-8bb4753ff220', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 2, '{\"loan_id\":8,\"user_id\":1,\"user_email\":\"OluwatosinAyodele45@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N30000 for Expand My Business has been requested by Oluwatosin.\"}', '2021-10-06 13:21:48', '2021-09-01 12:27:51', '2021-10-06 13:21:48'),
('736a63b2-d46f-43e8-ba77-56b52a683bb9', 'App\\Notifications\\OfferSendAdmin', 'App\\User', 76, '{\"loan_id\":11,\"admin_id\":null,\"status\":\"offer\",\"message\":\"An offer letter for your loan #11 has been sent by admin. <a href=\'\\/offerletter\\/11\'>Click to see<\\/a>\"}', NULL, '2021-11-11 16:21:35', '2021-11-11 16:21:35'),
('79a3cc7a-094f-40a8-8c8d-34a510c84966', 'App\\Notifications\\LoanRejectionNotification', 'App\\User', 1, '{\"loan_id\":8,\"admin_id\":null,\"status\":\"declined\",\"message\":\"Your Loan of N30000 for Expand My Business has been declined.\"}', NULL, '2021-11-11 13:49:52', '2021-11-11 13:49:52'),
('8379a0ed-4094-46d3-800b-431b3f24cd2b', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 5, '{\"loan_id\":12,\"user_id\":77,\"user_email\":\"davis.padavsmpcs@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N5000000 for Expand My Business has been requested by Davis.\"}', NULL, '2021-11-11 07:55:59', '2021-11-11 07:55:59'),
('8398c1bc-bd26-4e66-8fd0-520db62f7539', 'App\\Notifications\\LoanApprovalNotification', 'App\\User', 30, '{\"loan_id\":7,\"admin_id\":null,\"status\":\"approved\",\"message\":\"Your Loan of N30000 for Pay Salary has been approved.\"}', '2021-08-18 16:42:08', '2021-08-18 16:41:28', '2021-08-18 16:42:08'),
('8505e7f9-e53d-4158-9b57-db8478c46d38', 'App\\Notifications\\OfferSendAdmin', 'App\\User', 90, '{\"loan_id\":15,\"admin_id\":null,\"status\":\"offer\",\"message\":\"An offer letter for your loan #15 has been sent by admin. <a href=\'\\/offerletter\\/15\'>Click to see<\\/a>\"}', NULL, '2022-02-05 12:23:47', '2022-02-05 12:23:47'),
('8bc885b6-8e44-479b-a0db-dd68d2afeadc', 'App\\Notifications\\LoanRejectionNotification', 'App\\User', 69, '{\"loan_id\":10,\"admin_id\":null,\"status\":\"declined\",\"message\":\"Your Loan of N5000 for Purchase Inventory has been declined.\"}', NULL, '2021-11-08 13:26:26', '2021-11-08 13:26:26'),
('95572d56-f9d9-44df-943c-82641008bc3d', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 5, '{\"loan_id\":11,\"user_id\":76,\"user_email\":\"ayobami_aremu@yahoo.com\",\"status\":\"pending\",\"message\":\"A Loan of N3000000 for Purchase Inventory has been requested by Ayobami.\"}', NULL, '2021-11-10 21:27:39', '2021-11-10 21:27:39'),
('95c4c9fc-51a6-41da-960d-ac90f322435e', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 1, '{\"loan_id\":14,\"user_id\":90,\"user_email\":\"oshieodey22@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N500 for Purchase Equipment has been requested by Francis.\"}', NULL, '2021-12-14 20:25:22', '2021-12-14 20:25:22'),
('9872e3e1-3bff-4b26-927e-277b0766c85d', 'App\\Notifications\\DisburseNotificationUser', 'App\\User', 26, '{\"loan_id\":6,\"admin_id\":null,\"status\":\"disbursed\",\"message\":\"Your Loan of N30000 for Pay Salary has been disbursed.\"}', NULL, '2021-08-18 10:00:48', '2021-08-18 10:00:48'),
('9d6da036-1e78-413f-8629-e37c0648a7c6', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 1, '{\"loan_id\":11,\"user_id\":76,\"user_email\":\"ayobami_aremu@yahoo.com\",\"status\":\"pending\",\"message\":\"A Loan of N3000000 for Purchase Inventory has been requested by Ayobami.\"}', NULL, '2021-11-10 21:27:39', '2021-11-10 21:27:39'),
('9f3e2ef4-9473-4379-877b-473f653617ca', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 6, '{\"loan_id\":14,\"user_id\":90,\"user_email\":\"oshieodey22@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N500 for Purchase Equipment has been requested by Francis.\"}', NULL, '2021-12-14 20:25:23', '2021-12-14 20:25:23'),
('a21ad727-8bab-4fe2-b3ca-62e63d88f6b9', 'App\\Notifications\\LoanApprovalNotification', 'App\\User', 90, '{\"loan_id\":16,\"admin_id\":null,\"status\":\"approved\",\"message\":\"Your Loan of N5000000 for Purchase Equipment has been approved.\"}', NULL, '2022-02-04 14:44:00', '2022-02-04 14:44:00'),
('a2f7854e-08fe-4177-b091-b843ef698209', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 5, '{\"loan_id\":14,\"user_id\":90,\"user_email\":\"oshieodey22@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N500 for Purchase Equipment has been requested by Francis.\"}', NULL, '2021-12-14 20:25:23', '2021-12-14 20:25:23'),
('a70ca67d-9c4d-4aa3-8901-b8cd42f5ddb4', 'App\\Notifications\\OfferSendAdmin', 'App\\User', 1, '{\"loan_id\":8,\"admin_id\":null,\"status\":\"offer\",\"message\":\"An offer letter for your loan #8 has been sent by admin. <a href=\'\\/offerletter\\/8\'>Click to see<\\/a>\"}', NULL, '2021-09-22 19:11:41', '2021-09-22 19:11:41'),
('b0ca71ad-5dd8-450b-9930-79ff549f3043', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 6, '{\"loan_id\":16,\"user_id\":90,\"user_email\":\"oshieodey22@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N5000000 for Purchase Equipment has been requested by Francis.\"}', NULL, '2021-12-14 20:39:48', '2021-12-14 20:39:48'),
('b46e5769-855a-4882-8e47-c01cab35f34e', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 1, '{\"loan_id\":21,\"user_id\":1,\"user_email\":\"OluwatosinAyodele45@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N45000 for Working Capitals has been requested by gba.\"}', NULL, '2022-02-05 12:25:13', '2022-02-05 12:25:13'),
('ccb3f100-3130-4e7e-b6b7-bb1a5d9b40cf', 'App\\Notifications\\LoanRejectionNotification', 'App\\User', 76, '{\"loan_id\":11,\"admin_id\":null,\"status\":\"declined\",\"message\":\"Your Loan of N3000000 for Purchase Inventory has been declined.\"}', NULL, '2021-11-11 16:21:02', '2021-11-11 16:21:02'),
('d72d62d7-571a-4481-b258-e2e7126af10a', 'App\\Notifications\\LoanRejectionNotification', 'App\\User', 1, '{\"loan_id\":21,\"admin_id\":null,\"status\":\"declined\",\"message\":\"Your Loan of N45000 for Working Capitals has been declined.\"}', NULL, '2022-02-05 12:32:49', '2022-02-05 12:32:49'),
('d7a2fd90-6efa-412e-b122-086b8e80dd81', 'App\\Notifications\\DisburseNotificationUser', 'App\\User', 30, '{\"loan_id\":7,\"admin_id\":null,\"status\":\"disbursed\",\"message\":\"Your Loan of N30000 for Pay Salary has been disbursed.\"}', NULL, '2021-08-18 16:43:29', '2021-08-18 16:43:29'),
('dd58b9d6-a2c7-4ba5-ad9a-e7e5f0179cf4', 'App\\Notifications\\LoanApprovalNotification', 'App\\User', 69, '{\"loan_id\":10,\"admin_id\":null,\"status\":\"approved\",\"message\":\"Your Loan of N5000 for Purchase Inventory has been approved.\"}', NULL, '2021-11-08 13:30:46', '2021-11-08 13:30:46'),
('e497810b-7028-4c88-a83b-e5706563be7e', 'App\\Notifications\\LoanApprovalNotification', 'App\\User', 67, '{\"loan_id\":9,\"admin_id\":null,\"status\":\"approved\",\"message\":\"Your Loan of N100000000 for Purchase Inventory has been approved.\"}', NULL, '2021-10-27 21:10:47', '2021-10-27 21:10:47'),
('e9d1b04b-6827-4e7c-b001-03f55642cf53', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 1, '{\"loan_id\":10,\"user_id\":69,\"user_email\":\"arogundadebrothers@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N5000 for Purchase Inventory has been requested by Arogundade.\"}', NULL, '2021-10-29 16:57:14', '2021-10-29 16:57:14'),
('eb6aa8aa-87ff-433b-be62-5eb5c055597d', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 6, '{\"loan_id\":15,\"user_id\":90,\"user_email\":\"oshieodey22@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N2000000 for Expand My Business has been requested by Francis.\"}', NULL, '2021-12-14 20:29:39', '2021-12-14 20:29:39'),
('ed6f71c9-bbce-40cf-95c8-b333b44f0447', 'App\\Notifications\\LoanRejectionNotification', 'App\\User', 77, '{\"loan_id\":12,\"admin_id\":null,\"status\":\"declined\",\"message\":\"Your Loan of N5000000 for Expand My Business has been declined.\"}', NULL, '2021-11-12 18:03:31', '2021-11-12 18:03:31'),
('edc3fda7-d26e-4cc1-9089-085782053ef3', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 5, '{\"loan_id\":13,\"user_id\":82,\"user_email\":\"olubukolaagunbiade@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N500000 for Working Capitals has been requested by Olubukola.\"}', NULL, '2021-11-18 15:35:59', '2021-11-18 15:35:59'),
('effe39f0-5e9f-419a-846c-3ddb37c208eb', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 1, '{\"loan_id\":16,\"user_id\":90,\"user_email\":\"oshieodey22@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N5000000 for Purchase Equipment has been requested by Francis.\"}', NULL, '2021-12-14 20:39:47', '2021-12-14 20:39:47'),
('f5459898-aeeb-48e5-9594-21eb8ca41969', 'App\\Notifications\\LoanApprovalNotification', 'App\\User', 1, '{\"loan_id\":21,\"admin_id\":null,\"status\":\"approved\",\"message\":\"Your Loan of N45000 for Working Capitals has been approved.\"}', NULL, '2022-02-05 12:33:32', '2022-02-05 12:33:32'),
('f76dd213-92fd-4638-a415-b39f49eae2c8', 'App\\Notifications\\LoanNotificationAdmin', 'App\\Admin', 1, '{\"loan_id\":12,\"user_id\":77,\"user_email\":\"davis.padavsmpcs@gmail.com\",\"status\":\"pending\",\"message\":\"A Loan of N5000000 for Expand My Business has been requested by Davis.\"}', NULL, '2021-11-11 07:55:59', '2021-11-11 07:55:59'),
('ff44d357-2345-40bf-bc18-4783f10db166', 'App\\Notifications\\OfferSendAdmin', 'App\\User', 1, '{\"loan_id\":8,\"admin_id\":null,\"status\":\"offer\",\"message\":\"An offer letter for your loan #8 has been sent by admin. <a href=\'\\/offerletter\\/8\'>Click to see<\\/a>\"}', NULL, '2021-09-22 19:11:27', '2021-09-22 19:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('uthmananis@yahoo.co.uk', '$2y$10$kYB1UWxbraYXYDpS8ODYoux2xJkI1U.nWUM58mKJdxhOOZgvhzWvC', '2021-07-29 11:38:35'),
('talk2tosan45@gmail.com', '$2y$10$goh8kqa99cv47C8D5g/FzOyQAcWK10mwPLf/Kk.3ljTjknpaF8LO.', '2021-10-25 12:46:50'),
('OluwatosinAyodele45@gmail.com', '$2y$10$nEbfoUOQrtfPOPTMTr1anuMt7QOJd2Tu37q12PrZtdZZ8rd.sbljC', '2021-11-14 22:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cpid` bigint(20) UNSIGNED DEFAULT NULL COMMENT 'Collects_Payment_Id',
  `amount` bigint(20) UNSIGNED DEFAULT NULL,
  `fee` int(10) UNSIGNED DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `initiator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'api',
  `reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'loan',
  `description` text COLLATE utf8mb4_unicode_ci,
  `x_collect_signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charged_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `integrate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `loan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\User', 13, 'auth_token', '25a9d78071763a572117ae4684de5567d232c74e96c1521ba43c147d8cd0152f', '[\"*\"]', NULL, '2022-03-15 05:26:30', '2022-03-15 05:26:30'),
(2, 'App\\User', 14, 'auth_token', '823a26e7868584e0ad8fcc2cfbc8bf6d23886c413a896dbec3916299b6e9895d', '[\"*\"]', NULL, '2022-03-15 05:29:04', '2022-03-15 05:29:04'),
(3, 'App\\User', 15, 'auth_token', '834812cdb6ab3eac1c32f8732ca6a51674555939aaf59d6ab5ab0d00bf669c6a', '[\"*\"]', NULL, '2022-03-15 05:43:56', '2022-03-15 05:43:56'),
(4, 'App\\User', 15, 'auth_token', 'c71a2331434cd84b3961ddbdd32fdb1d8dceeb5f9d80e4f6c58fe6f23fb66630', '[\"*\"]', NULL, '2022-03-15 06:01:18', '2022-03-15 06:01:18'),
(5, 'App\\User', 15, 'auth_token', 'dcbd29262e251b969f51dd04da140b8729123dd241fb680f3cdc31601e09ae3a', '[\"*\"]', NULL, '2022-03-15 06:09:44', '2022-03-15 06:09:44'),
(6, 'App\\User', 15, 'auth_token', '7b7638b9694b68ab6617885eadbe5883c75e04f7322fa26d70739a4478f78c28', '[\"*\"]', NULL, '2022-03-15 06:10:38', '2022-03-15 06:10:38'),
(7, 'App\\User', 15, 'auth_token', 'dcef44fa53a48b878a2a5d6b5f5b6f68e44fc22030bd6447e17200b7ca2e33c2', '[\"*\"]', NULL, '2022-03-15 06:10:46', '2022-03-15 06:10:46'),
(8, 'App\\User', 15, 'auth_token', '83f7db2b53cd611601e04cbb3569b7475efb09b38f8864491c3c279801adbfca', '[\"*\"]', NULL, '2022-03-15 06:15:53', '2022-03-15 06:15:53'),
(9, 'App\\User', 15, 'auth_token', '3aceb0d03a9bd8f1e8ea6c72766a4cb1e0939dce39d77ceb705041c1ce3da05d', '[\"*\"]', NULL, '2022-03-15 06:20:25', '2022-03-15 06:20:25'),
(10, 'App\\User', 15, 'auth_token', 'cbc00bef0dacfcb69f79da4b6899a10fa07b1ec8df9b03ddb81745bab42f37fa', '[\"*\"]', NULL, '2022-03-15 07:57:13', '2022-03-15 07:57:13'),
(11, 'App\\User', 15, 'auth_token', '747071208a506b977d9a20db88e2ff793ba4ef6738da1619bbfab7def9add071', '[\"*\"]', '2022-03-15 10:52:17', '2022-03-15 08:09:57', '2022-03-15 10:52:17'),
(12, 'App\\User', 15, 'auth_token', '88d35d934ac3fb0db722a4b8a796f29e6ca06b1209345ffbda122917867f095e', '[\"*\"]', NULL, '2022-03-15 08:34:49', '2022-03-15 08:34:49'),
(13, 'App\\User', 15, 'auth_token', '0889ed3e23fdc8f4f7fcb4c4ba9906eb562f5a9944bba9e14fe536b4095833de', '[\"*\"]', NULL, '2022-03-15 10:56:47', '2022-03-15 10:56:47'),
(14, 'App\\User', 15, 'tokens', '79a522017606ff88a5886f3af519c0959e5defdb009b6d7bd8cf1ba146f78873', '[\"*\"]', '2022-03-15 11:15:25', '2022-03-15 10:58:28', '2022-03-15 11:15:25'),
(15, 'App\\User', 15, 'tokens', '6d9a80e7cdb0ab87a188b15b244f578d9a6643bb949a82587817174694dfe38e', '[\"*\"]', '2022-03-16 01:15:56', '2022-03-15 15:20:14', '2022-03-16 01:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `slug`, `name`, `value`, `data`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'interest', 'interest', '5', NULL, 1, NULL, '2021-07-26 09:28:18');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Federal Capital Territory', 1, NULL, NULL),
(2, 'Abia', 1, NULL, NULL),
(3, 'Adamawa', 1, NULL, NULL),
(4, '	Akwa Ibom', 1, NULL, NULL),
(5, 'Anambra', 1, NULL, NULL),
(6, 'Bauchi', 1, NULL, NULL),
(7, 'Bayelsa', 1, NULL, NULL),
(8, 'Benue', 1, NULL, NULL),
(9, 'Borno', 1, NULL, NULL),
(10, 'Cross River', 1, NULL, NULL),
(11, 'Delta', 1, NULL, NULL),
(12, 'Ebonyi', 1, NULL, NULL),
(13, 'Edo', 1, NULL, NULL),
(14, 'Ekiti', 1, NULL, NULL),
(15, 'Enugu', 1, NULL, NULL),
(16, 'Gombe', 1, NULL, NULL),
(17, 'Imo', 1, NULL, NULL),
(18, 'Jigawa', 1, NULL, NULL),
(19, '	Kaduna', 1, NULL, NULL),
(20, 'Kano', 1, NULL, NULL),
(21, 'Katsina', 1, NULL, NULL),
(22, 'Kebbi', 1, NULL, NULL),
(23, 'Kogi', 1, NULL, NULL),
(24, 'Kwara', 1, NULL, NULL),
(25, 'Lagos', 1, NULL, NULL),
(26, 'Nasarawa', 1, NULL, NULL),
(27, 'Niger', 1, NULL, NULL),
(28, 'Ogun', 1, NULL, NULL),
(29, 'Ondo', 1, NULL, NULL),
(30, 'Osun', 1, NULL, NULL),
(31, 'Oyo', 1, NULL, NULL),
(32, 'Plateau', 1, NULL, NULL),
(33, 'Rivers', 1, NULL, NULL),
(34, 'Sokoto', 1, NULL, NULL),
(35, 'Taraba', 1, NULL, NULL),
(36, 'Yobe', 1, NULL, NULL),
(37, 'Zamfara', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sures`
--

CREATE TABLE `sures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gemail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bvn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sures`
--

INSERT INTO `sures` (`id`, `email`, `title`, `address`, `first_name`, `last_name`, `country`, `dob`, `state`, `lga`, `gemail`, `occupation`, `user_id`, `admin_id`, `bvn`, `wic`, `phoneno`, `created_at`, `updated_at`, `gender`, `coy_name`) VALUES
(27, 'OluwatosinAyodele45@gmail.com', 'mr', 'cb 133 lejoka abiola avenue', 'Ifunanya', 'ayodele', 'Nigeria', '2022-02-04', 'Osun', 'Ilesha East', 'clocom Networks', 'student', 1, NULL, '1234567890', 'CEO', '1423645876', '2022-02-04 14:12:06', '2022-02-04 14:12:06', 'Male', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `otp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_id` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `share` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bvn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `residential_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wdymtta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dependents` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `director` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secretary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registered` tinyint(1) DEFAULT NULL,
  `rc_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `establishment_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `b_state_id` bigint(20) UNSIGNED DEFAULT NULL,
  `b_city_id` bigint(20) UNSIGNED DEFAULT NULL,
  `b_wdymtta` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owned_or_rented` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `outlets` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_employees` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sales_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthly_sales` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthly_expenses` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_id_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b_id_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_seal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cac7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_id_cac7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cac2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_id_cac2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cac_certificate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_id_cac_certificate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_online_banking` tinyint(1) DEFAULT NULL,
  `last_loan_period` tinyint(1) DEFAULT NULL,
  `loan_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_statement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_id_bank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `otp`, `phone_no`, `password`, `user_image`, `public_id`, `title`, `first_name`, `last_name`, `position`, `share`, `dob`, `gender`, `bvn`, `id_type`, `id_num`, `address`, `country_id`, `state_id`, `city_id`, `residential_status`, `marital_status`, `wdymtta`, `dependents`, `edu_level`, `business_type`, `business_name`, `director`, `secretary`, `registered`, `rc_num`, `establishment_date`, `business_address`, `b_country_id`, `b_state_id`, `b_city_id`, `b_wdymtta`, `owned_or_rented`, `outlets`, `total_employees`, `sales_method`, `industry`, `monthly_sales`, `monthly_expenses`, `business_duration`, `tin`, `b_id_type`, `b_id_num`, `seal`, `public_seal`, `cac7`, `public_id_cac7`, `cac2`, `public_id_cac2`, `cac_certificate`, `public_id_cac_certificate`, `customer_id`, `bank_name`, `bank_account_name`, `bank_account_number`, `has_online_banking`, `last_loan_period`, `loan_amount`, `bank_statement`, `public_id_bank`, `device_id`, `remember_token`, `created_at`, `updated_at`, `google_id`) VALUES
(1, 'OluwatosinAyodele45@gmail.com', '2021-07-24 13:49:31', '', '08065203411', '$2y$10$/vKrnWNhlv/FBPTp6Be.5ev/CPdLLPz5VU21VoB7v.UnxCbaL74iq', 'https://docsandimages.s3.amazonaws.com/profile_image/EQ6fweHvmURXWDSLoGMd2C053hUQijTEIkCVZDia.jpg', 'EQ6fweHvmURXWDSLoGMd2C053hUQijTEIkCVZDia.jpg', 'Mr.', 'OLUWATOSIN', 'AYODELE', 'Managing Director', '50%', '1990-07-11', 'Male', '22234775534', 'Voter\'s Card', 'bbbuliuali:I23456879890', '994 Ms., Gisele Severin Passage, Ovia South-West Yobe', 1, 25, 513, 'Home Owned', 'Single', '2019', '5', 'Pgd', NULL, 'wasps', 'Anonymous PLC', 'ests', 1, '1235435345', '1810-01-30', '4956 Prof., Stephen Johnson Mall, Dala Cross River', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '34342323', 'NIN', '12344444', 'https://docsandimages.s3.amazonaws.com/seals/nw8OD0KnTBoikuo4JXc961RAJXe8rs0zwHW5PnFQ.jpg', 'nw8OD0KnTBoikuo4JXc961RAJXe8rs0zwHW5PnFQ.jpg', 'https://docsandimages.s3.amazonaws.com/cac7/fLBq4fq3xPL1Kr5ejSRIw2X8noXm7kR7wB5aKwsh.jpg', 'fLBq4fq3xPL1Kr5ejSRIw2X8noXm7kR7wB5aKwsh.jpg', 'https://docsandimages.s3.amazonaws.com/cac2/FrazJ4AiMgM6DocdkuzTm9V5pQQzdtgv8KMthRDb.jpg', 'FrazJ4AiMgM6DocdkuzTm9V5pQQzdtgv8KMthRDb.jpg', 'https://docsandimages.s3.amazonaws.com/cac_certificates/wAVAN46n6HyGX4ykmDCxItAkIcDu8MdIUDcewFbN.jpg', 'wAVAN46n6HyGX4ykmDCxItAkIcDu8MdIUDcewFbN.jpg', NULL, 'Sterling Bank', 'Gift Patterson', '2462068675', 1, 0, NULL, 'https://docsandimages.s3.amazonaws.com/bank_statement/D0firVrYV5MawsQcG0aLezOdRWUrDdisdTqPUO0j.pdf', 'D0firVrYV5MawsQcG0aLezOdRWUrDdisdTqPUO0j.pdf', NULL, 'gVLI6zb1da7vatRvDMwAHfiXGrISKPvG3Z2OOzGoRDVae0l6JKEadILgDc6d', '2021-07-23 18:06:17', '2022-02-27 12:32:54', NULL),
(12, 'sarwar.cse4.bu@gmail.com', '2022-03-15 05:09:31', '', '+8801765487478', '$2y$10$Y04vZi6G18yVCTiliEt39.b1VKtMFm53EfwY5058q2Ea1TNl1Ci7.', NULL, NULL, NULL, 'Sarwar', 'Hossain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-15 04:44:32', '2022-03-15 05:09:31', NULL),
(15, 'sarwar@gmail.com', NULL, '', '+8801765487478', '$2y$10$89RN3lACjzpYBcagO0/cXedFi.jeISkZ7ufw8YnbOEXnbSp8JO92a', NULL, NULL, NULL, 'X', 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-15 05:43:51', '2022-03-16 01:37:01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `integrates`
--
ALTER TABLE `integrates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `integrates_user_id_foreign` (`user_id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loans_id_unique` (`id`),
  ADD KEY `loans_admin_id_foreign` (`admin_id`),
  ADD KEY `loans_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_integrate_id_foreign` (`integrate_id`),
  ADD KEY `payments_loan_id_foreign` (`loan_id`),
  ADD KEY `payments_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

--
-- Indexes for table `sures`
--
ALTER TABLE `sures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sures_admin_id_foreign` (`admin_id`),
  ADD KEY `sures_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_country_id_foreign` (`country_id`),
  ADD KEY `users_state_id_foreign` (`state_id`),
  ADD KEY `users_city_id_foreign` (`city_id`),
  ADD KEY `users_b_country_id_foreign` (`b_country_id`),
  ADD KEY `users_b_state_id_foreign` (`b_state_id`),
  ADD KEY `users_b_city_id_foreign` (`b_city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=770;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `integrates`
--
ALTER TABLE `integrates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sures`
--
ALTER TABLE `sures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `integrates`
--
ALTER TABLE `integrates`
  ADD CONSTRAINT `integrates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `loans`
--
ALTER TABLE `loans`
  ADD CONSTRAINT `loans_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `loans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `payments_integrate_id_foreign` FOREIGN KEY (`integrate_id`) REFERENCES `integrates` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `payments_loan_id_foreign` FOREIGN KEY (`loan_id`) REFERENCES `loans` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `sures`
--
ALTER TABLE `sures`
  ADD CONSTRAINT `sures_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `sures_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_b_city_id_foreign` FOREIGN KEY (`b_city_id`) REFERENCES `cities` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_b_country_id_foreign` FOREIGN KEY (`b_country_id`) REFERENCES `countries` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_b_state_id_foreign` FOREIGN KEY (`b_state_id`) REFERENCES `states` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `users_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
