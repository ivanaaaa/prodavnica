-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2017 at 12:10 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodavnica`
--

-- --------------------------------------------------------

--
-- Table structure for table `produkti`
--

CREATE TABLE `produkti` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_kategorija` int(11) NOT NULL,
  `ime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slika` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produkti`
--

INSERT INTO `produkti` (`id`, `id_kategorija`, `ime`, `slika`, `opis`, `cena`, `created_at`, `updated_at`) VALUES
(2, 2, 'MEDIUM HOME AND OFFICE G3260/4/500', '/images/333_668b39d9-00ae-4aa4-9d55-4a936cbb7989-500x500.jpg', 'Personal Computer \r\n - CPU:Intel Pentium G3260 \r\n  - Интерна меморија:4GB DDRAM III \r\n - Hard Drive 500GB SATA,7200rpm/min \r\n -  DVD-RW \r\n - Keyboard \r\n - Mouse \r\n - USB', '12000', '2017-06-19 20:36:03', '2017-06-19 20:37:09'),
(3, 2, 'MSGW SOHO I101 G3260/4/500/INT', '/images/3_5ab66b9a-2c9f-438c-b748-748f919468eb-500x500.jpg', 'CPU:Intel Core G3260 Processor (3.30GHz,3M Cache)\r\n-Chipset:Intel H81\r\n-Intel HD Graphics 4400\r\n-Интерна меморија:4GB DDR3 1600MHz\r\n-Hard Drive 500GB SATA,5400rpm/min', '13000', '2017-06-19 20:45:51', '2017-06-19 20:45:51'),
(4, 2, 'MSGW HOME GAMER I112 I3-6100/8/1TB/GT730', '/images/1.jpg_046c87fc-f78b-4ca9-a6e2-ade783deffbe-500x500.jpg', 'CPU:Intel Core i3-6100 Processor   (3.70GHz,3M Cache)\r\n-Chipset:Intel H110\r\n-nVidia GeForce GT730 2GB\r\n-Интерна меморија:8GB DDR4 2133MHz\r\n-Hard Drive 1TB SATA,5400rpm/min', '25000', '2017-06-19 20:47:24', '2017-06-19 20:49:44'),
(5, 2, 'MSGW TRUE GAMER I101 I5-6400/8/240SSD/1TB/RX470-4', '/images/101_2_50688b33-7b13-488f-ba92-60feac137f70-500x500.jpg', 'CPU:Intel Core i5-6400 Processor\r\n-AMD Radeon RX470\r\n-Интерна меморија:8GB DDR4 2133MHz\r\n-Hard Drive 1TB SATA,5400rpm/min\r\n-SSD 240GB\r\n-Видео меморија:4GB DDR5', '55000', '2017-06-19 20:48:49', '2017-06-19 20:49:52'),
(6, 3, 'ACER ES1-331-C5D0 13.3\'\' N3160/2/32/WIN10 NX.G18EX.010', '/images/4_ecb116bc-7bf4-4183-b11b-0e9ecbcd7476-500x500.jpg', 'Дисплеј:13.3"(33.78cm)HD\r\n-Intel Celeron Quad Core Processor N3160\r\n-Меморија:2GB DDR3\r\n-Flash Memory Capacity 32GB\r\n-HD Web Camera\r\n-Card Reader \r\n-Windows 10 Home', '11000', '2017-06-19 20:59:01', '2017-06-19 21:08:21'),
(7, 3, 'DELL 3558 I3-5005/4/500/HD5500', '/images/1_cbba6d73-a118-493c-9940-1a68c9aa3efd-500x500.jpg', 'Дисплеј:15.6"(39.62cm)HD\r\n-Intel Core i3-5005U Processor (2.00GHz,3MB Cache)\r\n-Интерна меморија:4GB DDR3\r\n-Hard Drive 500GB SATA,5400 rpm/min\r\n-Intel HD Graphics 5500', '22000', '2017-06-19 21:03:19', '2017-06-19 21:03:19'),
(8, 3, 'LENOVO 110-15ISK I3-6006/4/1TB/M430-2 80UD00QQRI', '/images/1_81bfd266-f22a-47b9-9449-5b9ff965ffb1-500x500.jpg', 'Дисплеј:15.6"(39.6cm)HD\r\n-Резолуција:(1366x768)\r\n-Intel core i3-6006U processor (3M Cache,2GHz)\r\n-AMD Radeon AMD R16M-M1-30 2GB\r\n-Меморија:4GB DDR4\r\n-Hard Drive 1ТB SATA,5400 rpm/min', '22000', '2017-06-19 21:07:30', '2017-06-19 21:07:30'),
(9, 3, 'ASUS X541UJ-DM432 I5-7200/4/1TB/GF920-2', '/images/NOT10764_v_d91d58fc-807b-4133-8346-91f988c25b50-500x500.jpg', 'Дисплеј:15.6"(39.6cm)\r\n-Резолуција:(1.920x1.080)\r\n-Intel Core i5-7200U Processor2.5 GHz (3M Cache, up to 3.1GHz)\r\n-nVidia GeForce 920M(N16V-GM-S)\r\n-Интерна меморија:4GBDDR4\r\n-Hard Drive1TB', '32000', '2017-06-19 21:15:35', '2017-06-19 21:16:14'),
(10, 3, 'DELL 5559 TOUCH I7-6500/8/1TB/M335-4', '/images/1_c678d7a9-5ce7-4713-b083-b98207aaec20-500x500.jpg', 'Дисплеј:15.6"(39.62cm)FHD WLED with TL\r\n-Intel Core i7-6500U Processor(4MB Cache,up to 2.5GHz)\r\n-AMD Radeon R5 M335 4GB DDR3\r\n-Меморија:8GBDDR3 1600MHz DDR3L\r\n-Hard Drive 1TB', '49000', '2017-06-19 21:19:15', '2017-06-19 21:19:26'),
(11, 3, 'MACBOOK AIR 13" I5 /8GB/128GB/HD6000', '/images/1_04d7b5f8-d547-410e-89c1-6245702fe3d8-500x500.jpg', 'Дисплеј:13.3"(33.78cm)Retina\r\n-Intel Core i5 processor(1.6GHz up to 2.7GHz,3MB cache)\r\n-Intel HD Graphics 6000\r\n-Резолуција:(1140x900)\r\n-Меморија:8GB 1600MHz LPDDR3\r\nSATA 128GB SSD HDD', '57000', '2017-06-19 21:20:45', '2017-06-19 21:21:21'),
(12, 4, 'HUAWEI HONOR 7 LITE', '/images/1_47e15e96-8a7d-4fbd-a688-e79e439aadcf-500x500.jpg', 'Android OS,v6.0(Marshmallow)\r\n-Екран:5.2"(1920 x 1080)IPS LCD\r\n-Chipset:HiSilicon Kirin 650\r\n-CPU:Octa-core\r\n-Интерна меморија:16GB,RAM 2GB\r\n-Примарна камера:13MP\r\n-Секундарна камера:8MP', '10000', '2017-06-19 21:29:47', '2017-06-19 21:30:17'),
(13, 4, 'SAMSUNG J7 SM-J710 FZDNSEE', '/images/1_30508606-489a-4dbe-8b84-f7e5a38514cd-500x500.jpg', 'Android OS,v6.0.1(Marshmallow)\r\n-Екран:5.5"(1280x720)Super AMOLED\r\n-CPU:Octa-core 1.6 GHz\r\n-GPU:Mali-T830MP2\r\n-Интерна меморија:16GB,RAM 2GB\r\n-Примарна камера:13MP\r\n-Секундарна камера:5MP', '17000', '2017-06-19 21:32:56', '2017-06-19 21:32:56'),
(14, 4, 'HUAWEI P10 LITE (WAS-L29) BLACK', '/images/1_596e11d6-4f1f-45cd-b64a-47ba336f744b-500x500.jpg', '• Android OS,7.0 EMUI 5.1 \r\n-Екран:5.2"(1920x1080)IPS LCD\r\n-CPU:Kirin 658 Octa-core\r\n-Интерна меморија:32GB,RAM 3GB \r\n-Примарна камера:12MP \r\n-Секундарна камера:8MP', '17000', '2017-06-19 21:35:27', '2017-06-19 21:35:27'),
(15, 4, 'ASUS ZENFONE 3 ZE 520 KL', '/images/1_e1479cb7-6d6b-4259-a047-58a257b76c8a-500x500.jpg', 'Android OS,v6.0.1(Marshmallow)\r\n-Екран:5.2"(1920 x 1080) \r\n-CPU:Octa-core 2.0 GHz Cortex-A53 \r\n- Интерна меморија:32GB,RAM 3GB \r\n-Примарна камера:16MP \r\n-Секундарна камера:8MP', '23000', '2017-06-19 21:38:06', '2017-06-19 21:38:06'),
(16, 4, 'SAMSUNG S7 EDGE SM-G 935 FZKASEE', '/images/1_75b18c33-e9e1-4f84-9863-d85d0e23ea94-500x500.jpg', 'Android OS,v6.0(Marshmallow)\r\n-Екран:5.5"(2560x1440)Quad HD\r\n-CPU:Quad-core 2.3GHz\r\n-Интерна меморија:32GB,RAM 4GB\r\n-Примарна камера:Dual pixel 12MP\r\n-Секундарна камера:5MP', '40000', '2017-06-19 21:41:22', '2017-06-19 21:41:22'),
(17, 5, 'MUSKOKA 7IN', '/images/1_fc2a06d3-b7a2-4666-8bef-badf3db841f9-500x500.jpg', 'Футрола за таблет \r\n  -  Големина до 7"', '1200', '2017-06-19 21:44:17', '2017-06-19 21:44:17'),
(18, 5, 'SAMSUNG EF-BN510B, 8.0IN.', '/images/2_d562f05d-8d3c-4ffb-9ad5-270b7ccdd613-500x500.jpg', 'Футрола за таблет\r\n  -8.0IN', '2000', '2017-06-19 21:45:19', '2017-06-19 21:45:19'),
(19, 5, 'SAMSUNG EFC-EFC-1G2NWE, 10.1IN', '/images/2_d562f05d-8d3c-4ffb-9ad5-270b7ccdd613-500x500.jpg', 'Футрола за таблет', '2300', '2017-06-19 21:47:17', '2017-06-19 21:47:17'),
(20, 5, 'APPLE IPAD MINI 4 SMART - (PRODUCT)RED MKLY2ZM/A', '/images/88_50efa04a-1385-4813-b50a-5ae2348d3aaf-500x500.jpg', 'Футрола за ipad mini', '3200', '2017-06-19 21:48:33', '2017-06-19 21:48:57'),
(21, 5, 'APPLE IPAD MINI 4 SILICONE - PINK SAND MNND2ZM/A', '/images/111_5af9ac95-77d4-4e7b-a6d7-2c8999451882-500x500.jpg', 'Футрола за ipad mini', '5000', '2017-06-19 21:49:51', '2017-06-19 21:49:51'),
(22, 6, 'FUEGO 32 VT 3710', '/images/1_594b4622-a368-4a04-83b2-6283a623776a-500x500.jpg', '32"(82cm)HD Ready LED TV\r\n-Slim Frame \r\n-Резолуција:1366x768 pix\r\n-2xHDMI,USB\r\n-MPEG4\r\n-DVB-T/C\r\n- Contrast:4000:1\r\n-Speaker:2x8W', '10000', '2017-06-19 21:53:48', '2017-06-19 21:53:48'),
(23, 6, 'LG 32 LH 500 D', '/images/1_c019533f-d8f8-457f-84a2-9033f422e2d2-500x500.jpg', '32"(80cm)HD Ready LED TV \r\n-Резолуција:1366x768pix \r\n-Triple XD Engine \r\n-200Hz PMI \r\n-Picture Wizard III \r\n-Dolby Digital-AAC,PCM \r\n-1xHDMI,1xUSB 2.0,CI+,Scart \r\n-DVB-T2/C', '14000', '2017-06-19 21:55:05', '2017-06-19 21:55:05'),
(24, 6, 'SAMSUNG UE 32 K 4102 AKXXH', '/images/1_43929bee-b4d3-49c8-8eab-fb5d24529ed2-500x500.jpg', '32"(80cm)HD Ready LED TV\r\n-Резолуција:1366x768\r\n-Hyper Real Engine\r\n-100Hz PQI Picture Quality Index\r\n-Wide Color enhancer(Plus)\r\n-2xHDMI,1xUSB,Cl+\r\n-DVB-T2/C', '18000', '2017-06-19 21:57:22', '2017-06-19 21:57:22'),
(25, 6, 'FUEGO 48 FGU 7305', '/images/7305_105c4485-c736-4034-a61c-57925abcdc42-500x500.jpg', '48"(123cm)4K Ultra HD SMART LED TV\r\n-Резолуција:(3840х2160)\r\n-800Hz\r\n-Surround sound\r\n-Netflix,Netflix4k\r\n-Clear Resolution Enhancer\r\n-DVB-T/C/S2\r\n-Вграден Wi-Fi', '30000', '2017-06-19 21:58:52', '2017-06-19 21:58:52'),
(26, 6, 'LG 43 UH 603 V', '/images/1_741d9377-bca4-4fb2-a8a3-c355b4b8f6e5-500x500.jpg', '43"(108cm)4K Ultra HD SMART LED TV\r\n-Резолуција:(3840х2160)\r\n-UHD Mastering Engine\r\n-1200Hz PMI\r\n-WebOS 3.0\r\n-Smart Sound Mode\r\n- DVB-T2/C/S2\r\n-Вграден Wi-Fi', '30200', '2017-06-19 22:00:39', '2017-06-19 22:00:39'),
(27, 7, 'LG 20M38A', '/images/3_eb507ab4-1869-431c-8f11-d6e2df1a8b9f-500x500.jpg', 'Екран:19.5"(49.53cm)TN монитор 16:9 \r\n-Резолуција:1600x900 \r\n-Осветленост:200cd/m2 \r\n-Време на реакција:5ms \r\n-Подржани бои:16.7M \r\n-Контраст:600:1 \r\n-Агол на видливост 90°/65° \r\n-VESA Mount', '5500', '2017-06-19 22:04:05', '2017-06-19 22:04:05'),
(28, 7, 'LG 20MP48A-P', '/images/1_af8434ed-9359-4b45-9ce1-6232f1ddb04e-500x500.jpg', 'Екран:19.5"(49.53cm)IPS монитор 16:10 \r\n-Резолуција:1440x900 \r\n-Осветленост:200cd/m2 \r\n-Време на реакција:14ms \r\n-Подржани бои:16.7M', '6000', '2017-06-19 22:05:58', '2017-06-19 22:05:58'),
(29, 7, 'LG 24MP58VQ-P', '/images/1_1e877535-d4e6-4d93-ba1b-2a191b8770a4-500x500.jpg', 'Екран:23.8"(60.96cm)FHD Anti Glare \r\n-Резолуција:1920x1080 \r\n-Осветленост:250cd/m2 \r\n- Време на реакција:5ms \r\n-Подржани бои:16.7M', '10000', '2017-06-19 22:07:26', '2017-06-19 22:07:26'),
(30, 7, 'DELL U2412M 24" SBAI0538', '/images/ed5708c2-dfc7-41c4-96a9-bcc9bedc906c-500x500.jpg', '24" (61cm) Full HD W-LED монитор 16:10 \r\n-Резолуција: 1920x1200 \r\n- Време на реакција: 8ms \r\n- Осветлување: 300cd/m2', '16000', '2017-06-19 22:08:14', '2017-06-19 22:08:14'),
(31, 7, 'LG 29UM68-P', '/images/1_42ed589d-3423-4ebd-8386-1f221ba218e2-500x500.jpg', 'Екран:29"(73.66cm)FHD IPS \r\n-Резолуција:2560x1080 \r\n-Осветленост:250cd/m2 \r\n-Време на реакција:5ms \r\n-Контраст:5M:1 \r\n- Gaming mode,Cinema 1 \r\n- Smart Energy Saving', '20000', '2017-06-19 22:09:19', '2017-06-19 22:09:19');

--
-- Triggers `produkti`
--
DELIMITER $$
CREATE TRIGGER `after_del` AFTER DELETE ON `produkti` FOR EACH ROW DELETE FROM `notifikacii` WHERE notifikacii.id_produkt = OLD.id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cena_trig_del_update` AFTER UPDATE ON `produkti` FOR EACH ROW BEGIN IF NEW.cena < 1000 THEN INSERT INTO `notifikacii`(`id_produkt`, `prethodna_cena`) VALUES (NEW.id, NEW.cena); END IF; END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cena_trig_not_del` AFTER UPDATE ON `produkti` FOR EACH ROW BEGIN IF NEW.cena >= 1000 THEN DELETE FROM `notifikacii` WHERE notifikacii.id_produkt = NEW.id; END IF; END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `cena_triger` AFTER INSERT ON `produkti` FOR EACH ROW BEGIN IF NEW.cena < 1000 THEN INSERT INTO `notifikacii`(`id_produkt`, `prethodna_cena`) VALUES (NEW.id, NEW.cena); END IF; END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produkti`
--
ALTER TABLE `produkti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produkti`
--
ALTER TABLE `produkti`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
