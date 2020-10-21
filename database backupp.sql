-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table coronavirus19.categories: ~3 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `label`, `created_at`, `updated_at`) VALUES
	(2, 'parapharmacie', '2020-09-09 01:14:05', '2020-09-09 01:14:05'),
	(3, 'hygiene', '2020-09-09 01:14:10', '2020-09-09 01:14:11'),
	(4, 'securité', '2020-09-09 01:14:36', '2020-09-09 01:14:37');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping data for table coronavirus19.citoyens: ~6 rows (approximately)
/*!40000 ALTER TABLE `citoyens` DISABLE KEYS */;
INSERT INTO `citoyens` (`id`, `nom`, `prenom`, `email`, `password`, `image`, `com_id`, `pro_id`, `remember_token`, `roles`, `created_at`, `updated_at`) VALUES
	(31, 'mmm', 'salut', 'salut@gmail.com', '$2y$10$1qHkHtaFJpAPe6QnapUZdeiqbS/pQ9gHlkH2rXflN3kECA3IoIyom', '1', 1, 1, NULL, 0, '2020-10-14 02:19:41', '2020-10-14 02:19:41'),
	(32, 'salut', 'ttlemonde', 'ttlemonde@gmail.com', '$2y$10$NyrsH4FG89/1SYZp2QAfzu0vbr/DrFkXwA7e65nqw86bYUlAEtf1m', '1', 1, 1, NULL, 0, '2020-10-14 02:20:04', '2020-10-14 02:20:04'),
	(33, 'lol', 'lol', 'lol@gmail.com', '$2y$10$sudWpP78z2PjYY66j9Tml.mvOjt0s4pooAGhsPP2aFRIMmDQZI3VW', '1', 1, 1, NULL, 0, '2020-10-14 14:51:25', '2020-10-14 14:51:25'),
	(34, 'mmm', 'lamia', 'medj.lam@gmail.com', '$2y$10$uIpVCAeqNTusvStx7lYqrOAHfpi18Cwp1Dc1iZGxKedBHElQAX60m', '1', 1, 1, NULL, 0, '2020-10-15 18:20:59', '2020-10-15 18:20:59'),
	(35, 'lamia', 'medjahdi', 'lamia@gmail.com', '$2y$10$mLhAGe4KlerAV7A0HlyogexLZSk.lbcC.9VSWQe9WJnsc0lStAfNy', '1', 1, 1, NULL, 0, '2020-10-15 22:44:07', '2020-10-15 22:44:07'),
	(36, 'medjahdi2', 'lamiaa', 'lamiaa.medjahdi@gmail.com', '$2y$10$iiT2HIhTlwZ2B6doFYz8Le8chGTJQa.DPp7I7m4kzB1PKi/fXO13i', '1', 1, 1, NULL, 0, '2020-10-15 22:47:54', '2020-10-15 22:47:54');
/*!40000 ALTER TABLE `citoyens` ENABLE KEYS */;

-- Dumping data for table coronavirus19.citoyen_maladies: ~0 rows (approximately)
/*!40000 ALTER TABLE `citoyen_maladies` DISABLE KEYS */;
/*!40000 ALTER TABLE `citoyen_maladies` ENABLE KEYS */;

-- Dumping data for table coronavirus19.communes: ~75 rows (approximately)
/*!40000 ALTER TABLE `communes` DISABLE KEYS */;
INSERT INTO `communes` (`id`, `nom`, `wilaya_id`, `created_at`, `updated_at`) VALUES
	(3, 'Tlemcen', 13, '2020-10-14 02:07:21', '2020-10-14 02:07:22'),
	(5, 'Beni Mester', 13, '2020-10-14 02:11:41', '2020-10-14 02:11:41'),
	(6, 'Ain Tallout', 13, '2020-10-14 02:12:27', '2020-10-14 02:12:27'),
	(7, 'Remchi', 13, '2020-10-14 02:12:50', '2020-10-14 02:12:50'),
	(8, 'El Fehoul', 13, '2020-10-14 02:12:50', '2020-10-14 02:12:50'),
	(9, 'Sabra', 13, '2020-10-14 02:14:41', '2020-10-14 02:14:41'),
	(10, 'Ghazaouet', 13, '2020-10-14 02:14:41', '2020-10-14 02:14:41'),
	(11, 'Souani', 13, '2020-10-14 02:14:41', '2020-10-14 02:14:41'),
	(12, 'Djebala', 13, '2020-10-14 02:14:41', '2020-10-14 02:14:41'),
	(13, 'El Gor', 13, '2020-10-14 02:14:41', '2020-10-14 02:14:41'),
	(14, 'Oued Lakhdar', 13, '2020-10-14 02:14:41', '2020-10-14 02:14:41'),
	(15, 'Ain Fezza', 13, '2020-10-14 02:14:41', '2020-10-14 02:14:41'),
	(16, 'Ouled Mimoun', 13, '2020-10-14 02:14:41', '2020-10-14 02:14:41'),
	(17, 'Amieur', 13, '2020-10-14 02:14:41', '2020-10-14 02:14:41'),
	(18, 'Ain Youcef', 13, '2020-10-14 02:14:41', '2020-10-14 02:14:41'),
	(19, 'Zenata', 13, '2020-10-14 02:14:41', '2020-10-14 02:14:41'),
	(20, 'Beni Snous', 13, '2020-10-14 02:14:41', '2020-10-14 02:14:41'),
	(21, 'Bab el Assa', 13, '2020-10-14 02:16:08', '2020-10-14 02:16:08'),
	(22, 'Dar Yaghmouracene', 13, '2020-10-14 02:16:08', '2020-10-14 02:16:08'),
	(23, 'Fellaoucene', 13, '2020-10-14 02:16:08', '2020-10-14 02:16:08'),
	(24, 'Azails', 13, '2020-10-14 02:16:08', '2020-10-14 02:16:08'),
	(25, 'Sebaa Chioukh', 13, '2020-10-14 02:16:08', '2020-10-14 02:16:08'),
	(26, 'Terny Beni Hdiel', 13, '2020-10-14 02:16:08', '2020-10-14 02:16:08'),
	(27, 'Bensekrane', 13, '2020-10-14 02:16:08', '2020-10-14 02:16:08'),
	(28, 'Ain Nahala', 13, '2020-10-14 02:16:08', '2020-10-14 02:16:08'),
	(29, 'Hennaya', 13, '2020-10-14 02:16:08', '2020-10-14 02:16:08'),
	(30, 'Maghnia', 13, '2020-10-14 02:16:08', '2020-10-14 02:16:08'),
	(31, 'Hammam Boughrara', 13, '2020-10-14 02:16:08', '2020-10-14 02:16:08'),
	(32, 'Souahlia', 13, '2020-10-14 02:16:08', '2020-10-14 02:16:08'),
	(33, 'El aricha', 13, '2020-10-14 02:18:08', '2020-10-14 02:18:08'),
	(34, 'Msirda Fouaga', 13, '2020-10-14 02:18:08', '2020-10-14 02:18:08'),
	(35, 'Sidi Abdelli', 13, '2020-10-14 02:18:08', '2020-10-14 02:18:08'),
	(36, 'Sebdou', 13, '2020-10-14 02:18:08', '2020-10-14 02:18:08'),
	(37, 'El aricha', 13, '2020-10-14 02:18:29', '2020-10-14 02:18:29'),
	(38, 'Msirda Fouaga', 13, '2020-10-14 02:18:29', '2020-10-14 02:18:29'),
	(39, 'Sidi Abdelli', 13, '2020-10-14 02:18:29', '2020-10-14 02:18:29'),
	(40, 'Sebdou', 13, '2020-10-14 02:18:29', '2020-10-14 02:18:29'),
	(41, 'Marsa Ben Mhidi', 13, '2020-10-14 02:18:29', '2020-10-14 02:18:29'),
	(42, 'Nedroma', 13, '2020-10-14 02:18:29', '2020-10-14 02:18:29'),
	(43, 'Honaine', 13, '2020-10-14 02:18:29', '2020-10-14 02:18:29'),
	(44, 'Ouled Riyah', 13, '2020-10-14 02:18:29', '2020-10-14 02:18:29'),
	(45, 'Chetouane', 13, '2020-10-14 02:18:29', '2020-10-14 02:18:29'),
	(46, 'Mansourah', 13, '2020-10-14 02:18:29', '2020-10-14 02:18:29'),
	(47, 'Beni Khellad', 13, '2020-10-14 02:18:29', '2020-10-14 02:18:29'),
	(48, 'Beni Semiel', 13, '2020-10-14 02:18:29', '2020-10-14 02:18:29'),
	(49, 'Bousfer', 31, '2020-10-14 02:21:36', '2020-10-14 02:21:36'),
	(50, 'Bir el djir', 31, '2020-10-14 02:21:36', '2020-10-14 02:21:36'),
	(51, 'Gdyel', 31, '2020-10-14 02:21:36', '2020-10-14 02:21:36'),
	(52, 'Mers el kebir', 31, '2020-10-14 02:21:36', '2020-10-14 02:21:36'),
	(53, 'Messreghine', 31, '2020-10-14 02:21:36', '2020-10-14 02:21:36'),
	(54, 'Hassi Bounif', 31, '2020-10-14 02:21:36', '2020-10-14 02:21:36'),
	(55, 'Boufatis', 31, '2020-10-14 02:21:36', '2020-10-14 02:21:36'),
	(56, 'Oran', 31, '2020-10-14 02:21:36', '2020-10-14 02:21:36'),
	(57, 'Ain el turk', 31, '2020-10-14 02:21:36', '2020-10-14 02:21:36'),
	(58, 'Arzew', 31, '2020-10-14 02:21:36', '2020-10-14 02:21:36'),
	(59, 'El Kerma', 31, '2020-10-14 02:21:36', '2020-10-14 02:21:36'),
	(60, 'Boutlilis', 31, '2020-10-14 02:21:36', '2020-10-14 02:21:36'),
	(61, 'Ain el benian', 16, '2020-10-14 02:23:57', '2020-10-14 02:23:57'),
	(62, 'ain taya', 16, '2020-10-14 02:23:57', '2020-10-14 02:23:57'),
	(63, 'alger centre', 16, '2020-10-14 02:23:57', '2020-10-14 02:23:57'),
	(64, 'Bab el oued', 16, '2020-10-14 02:23:57', '2020-10-14 02:23:57'),
	(65, 'Bab ezzouar', 16, '2020-10-14 02:23:57', '2020-10-14 02:23:57'),
	(66, 'Bachdjerrah', 16, '2020-10-14 02:23:57', '2020-10-14 02:23:57'),
	(67, 'Beni Messous', 16, '2020-10-14 02:23:57', '2020-10-14 02:23:57'),
	(68, 'Bir mourad rais', 16, '2020-10-14 02:23:57', '2020-10-14 02:23:57'),
	(69, 'Draria', 16, '2020-10-14 02:23:57', '2020-10-14 02:23:57'),
	(70, 'Dely brahim', 16, '2020-10-14 02:23:57', '2020-10-14 02:23:57'),
	(71, 'El biar', 16, '2020-10-14 02:23:57', '2020-10-14 02:23:57'),
	(72, 'Hydra', 16, '2020-10-14 02:23:57', '2020-10-14 02:23:57'),
	(73, 'Ain smara', 25, '2020-10-14 02:25:44', '2020-10-14 02:25:44'),
	(74, 'Didouche Mourad', 25, '2020-10-14 02:25:44', '2020-10-14 02:25:44'),
	(75, 'Ain smara', 25, '2020-10-14 02:25:44', '2020-10-14 02:25:44'),
	(76, 'Constantine', 25, '2020-10-14 02:25:44', '2020-10-14 02:25:44'),
	(77, 'El khroub', 25, '2020-10-14 02:25:44', '2020-10-14 02:25:44'),
	(78, 'Ibn Badis', 25, '2020-10-14 02:25:44', '2020-10-14 02:25:44');
/*!40000 ALTER TABLE `communes` ENABLE KEYS */;

-- Dumping data for table coronavirus19.dislikes: ~0 rows (approximately)
/*!40000 ALTER TABLE `dislikes` DISABLE KEYS */;
/*!40000 ALTER TABLE `dislikes` ENABLE KEYS */;

-- Dumping data for table coronavirus19.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table coronavirus19.favoris: ~0 rows (approximately)
/*!40000 ALTER TABLE `favoris` DISABLE KEYS */;
/*!40000 ALTER TABLE `favoris` ENABLE KEYS */;

-- Dumping data for table coronavirus19.idees: ~4 rows (approximately)
/*!40000 ALTER TABLE `idees` DISABLE KEYS */;
INSERT INTO `idees` (`id`, `titre`, `contenu`, `image`, `etat`, `cat_id`, `cit_id`, `created_at`, `updated_at`) VALUES
	(32, 'lklkllklkllk', 'Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, ', NULL, 1, 3, 32, '2020-10-14 18:05:10', '2020-10-14 18:05:10'),
	(33, 'nonjour', 'Consectetur, assumenda provident lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis, \r\n                asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis. Lorem ipsum dolor sit amet, \r\n                consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', NULL, 1, 2, 33, '2020-10-14 18:07:44', '2020-10-14 18:07:44'),
	(34, 'non', 'non', NULL, 1, 3, 35, '2020-10-16 03:48:05', '2020-10-16 03:48:06'),
	(35, 'mmmmmm', ' mllmmlmlmmlmlml', NULL, 1, 2, 35, '2020-10-16 23:13:22', '2020-10-16 23:13:23');
/*!40000 ALTER TABLE `idees` ENABLE KEYS */;

-- Dumping data for table coronavirus19.informations: ~6 rows (approximately)
/*!40000 ALTER TABLE `informations` DISABLE KEYS */;
INSERT INTO `informations` (`id`, `titre`, `contenu`, `lien`, `image`, `date`, `mal_id`, `pro_id`, `sou_id`, `wilaya_id`, `created_at`, `updated_at`) VALUES
	(1, 'Covid 19 - mars 2020', 'dfgjdflkgjdflkgjflkgjfdlgjdlfkgjflkgjfjgdfklj', 'kfjdsfkjkk', 'kjkjkkj', '2020-09-09', NULL, 5, 1, 44, '2020-09-09 00:58:04', '2020-09-09 00:58:05'),
	(2, 'Surcharge des Hopitaux', 'dflgkfdlgjfdlkgjfdlgjflhjfg;;n,g:;n,ghk:,hgn,gfb,f:;,gfh,fg;:bhf,gg;,fg:h;,:;,', ':;,:,:lljkkhjkhk', 'lkjlkjkj', '2020-09-09', NULL, 5, 2, 23, '2020-09-09 00:58:45', '2020-09-09 00:58:47'),
	(3, 'Pénurie des matieres essentielles de réanimation', 'dflgjdkflgjlkhgmljumkjtmfhjtdlgjet:klhkmtlhklyfhfkhkfgljbdlkgkkrrtfmk', 'kk', 'juhh', '2020-09-09', NULL, 2, 2, 6, '2020-09-09 01:06:25', '2020-09-09 00:59:26'),
	(4, 'Détresse respiratoire', 'gfldfkjgflkgdfjkgfj', 'fldgjdkflj', 'dlfgfgdjkgj', '2020-09-09', NULL, 5, 1, 44, '2020-09-09 01:21:04', '2020-09-09 01:21:06'),
	(5, 'Covid 19 - avancement en algérie', 'sfksdmflkmldfksmdldk', 'sfkdsfskmdlk', 'dsmflksdmfkdsmlf', '2020-09-12', NULL, 4, 1, 16, '2020-09-12 02:50:14', '2020-09-12 02:50:15'),
	(6, 'Covid 19 - avancement en algérie', 'sfksdmflkmldfksmdldk', 'sfkdsfskmdlk', 'dsmflksdmfkdsmlf', '2020-10-12', NULL, 4, 1, 16, '2020-10-12 02:50:14', '2020-09-12 02:50:15');
/*!40000 ALTER TABLE `informations` ENABLE KEYS */;

-- Dumping data for table coronavirus19.likes: ~1 rows (approximately)
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` (`id`, `user_id`, `idee_id`, `created_at`, `updated_at`) VALUES
	(27, 34, 32, '2020-10-16 01:58:38', '2020-10-16 01:58:38');
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;

-- Dumping data for table coronavirus19.maladies: ~0 rows (approximately)
/*!40000 ALTER TABLE `maladies` DISABLE KEYS */;
/*!40000 ALTER TABLE `maladies` ENABLE KEYS */;

-- Dumping data for table coronavirus19.migrations: ~19 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_100000_create_password_resets_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2020_08_20_112250_create_professions_table', 2),
	(4, '2020_08_20_112311_create_sources_table', 2),
	(5, '2020_08_20_112326_create_categories_table', 2),
	(6, '2020_08_20_112341_create_wilayas_table', 2),
	(7, '2020_08_20_112359_create_admins_table', 2),
	(8, '2020_09_02_190745_create_tags_table', 2),
	(9, '2020_08_20_131513_create_communes_table', 3),
	(10, '2020_08_20_112222_create_maladies_table', 4),
	(11, '2020_08_20_112146_create_informations_table', 5),
	(12, '2020_08_20_112128_create_citoyens_table', 6),
	(13, '2020_09_02_204024_create_poststag_table', 7),
	(14, '2020_08_20_112047_create_signals_table', 8),
	(15, '2020_08_20_112103_create_idees_table', 8),
	(16, '2020_08_20_112029_create_favoris_table', 9),
	(17, '2020_09_11_011945_add_roles_to_citoyens', 10),
	(18, '2020_10_14_223244_create_likes_table', 11),
	(19, '2020_10_15_162237_create_dislikes_table', 12);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table coronavirus19.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table coronavirus19.poststag: ~3 rows (approximately)
/*!40000 ALTER TABLE `poststag` DISABLE KEYS */;
INSERT INTO `poststag` (`id`, `information_id`, `tags_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2020-09-09 01:03:33', '2020-09-09 01:03:34'),
	(2, 2, 2, '2020-09-09 01:03:43', '2020-09-09 01:03:44'),
	(3, 1, 3, '2020-09-09 01:04:01', '2020-09-09 01:04:02');
/*!40000 ALTER TABLE `poststag` ENABLE KEYS */;

-- Dumping data for table coronavirus19.professions: ~5 rows (approximately)
/*!40000 ALTER TABLE `professions` DISABLE KEYS */;
INSERT INTO `professions` (`id`, `nom`, `created_at`, `updated_at`) VALUES
	(1, 'architecte', '2020-09-09 00:56:38', '2020-09-09 00:56:38'),
	(2, 'medecin', '2020-09-09 00:56:46', '2020-09-09 00:56:47'),
	(3, 'enseignant', '2020-09-09 00:56:55', '2020-09-09 00:56:55'),
	(4, 'dentiste', '2020-09-09 00:57:02', '2020-09-09 00:57:03'),
	(5, 'commerçant', NULL, NULL);
/*!40000 ALTER TABLE `professions` ENABLE KEYS */;

-- Dumping data for table coronavirus19.signals: ~8 rows (approximately)
/*!40000 ALTER TABLE `signals` DISABLE KEYS */;
INSERT INTO `signals` (`id`, `contenu`, `localisation`, `image`, `etat`, `date`, `cat_id`, `wilaya_id`, `cit_id`, `created_at`, `updated_at`) VALUES
	(11, 'y3ayiiiiiiiw', 'Maghnia', '1602642081.png', '1', '2020-12-31', 3, 13, 32, '2020-10-14 02:21:21', '2020-10-14 02:21:21'),
	(12, 'hiiiii', 'Tlemcen	  Mansourah', '1602642081.png', 'null', '2020-12-31', 2, 13, 32, '2020-10-14 02:35:22', '2020-10-14 02:35:22'),
	(13, 'hhhhhhhhhhhhhhhhhhhhhhhh', 'Tlemcen	  ', NULL, 'null', '2020-01-01', 2, 13, 32, '2020-10-14 02:53:49', '2020-10-14 02:53:49'),
	(14, 'hhhhhhhhhhhhhh', 'Tlemcen	  Tlemcen', NULL, 'null', '2020-12-31', 2, 13, 32, '2020-10-14 02:54:50', '2020-10-14 02:54:50'),
	(15, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'Tlemcen	  Mansourah Ibn Tofeil', NULL, '1', '2020-01-01', 2, 13, 32, '2020-10-14 02:56:47', '2020-10-14 02:56:47'),
	(16, 'medjahdi lamia medjahdi lamia medjahdi lamia', 'Tlemcen	  Mansourah  plateau lalla setti', NULL, '1', '2020-01-01', 2, 13, 33, '2020-10-14 14:58:13', '2020-10-14 14:58:13'),
	(17, 'mmmmmmmmmmmmmmmmmmmm', 'Oran	  Oran  Ardis', NULL, 'null', '2020-12-31', 2, 31, 33, '2020-10-14 15:01:15', '2020-10-14 15:01:15'),
	(18, 'mdr', 'Tlemcen	 Ain Tallout ', NULL, '1', '2020-12-31', 2, 13, 33, '2020-10-14 15:06:23', '2020-10-14 15:06:23');
/*!40000 ALTER TABLE `signals` ENABLE KEYS */;

-- Dumping data for table coronavirus19.sources: ~2 rows (approximately)
/*!40000 ALTER TABLE `sources` DISABLE KEYS */;
INSERT INTO `sources` (`id`, `nom`, `created_at`, `updated_at`) VALUES
	(1, 'ministere de la santé', '2020-09-09 00:56:18', '2020-09-09 00:56:18'),
	(2, 'agence nationale des statistiques', '2020-09-09 00:56:29', '2020-09-09 00:56:29');
/*!40000 ALTER TABLE `sources` ENABLE KEYS */;

-- Dumping data for table coronavirus19.stats: ~13 rows (approximately)
/*!40000 ALTER TABLE `stats` DISABLE KEYS */;
INSERT INTO `stats` (`id`, `nbrmal`, `nbrgue`, `nbrmort`, `date`, `wilaya_id`, `created_at`, `updated_at`) VALUES
	(1, 25, 25, 25, '2020-09-09', 25, '2020-09-09 00:41:44', '2020-09-09 00:41:45'),
	(2, 29, 36, 22, '2020-09-09', 20, '2020-09-09 00:42:03', '2020-09-09 00:42:04'),
	(3, 20, 22, 99, '2020-09-09', 29, '2020-09-09 00:42:33', '2020-09-09 00:42:34'),
	(4, 88, 99, 55, '2020-09-09', 13, '2020-09-09 00:42:47', '2020-09-09 00:42:48'),
	(5, 28, 98, 78, '2020-09-09', 48, '2020-09-09 00:43:01', '2020-09-09 00:43:04'),
	(6, 99, 58, 54, '2020-09-09', 16, '2020-09-09 00:45:41', '2020-09-09 00:45:42'),
	(7, 25, 20, 10, '2020-09-12', 44, '2020-09-12 00:26:35', '2020-09-12 00:26:36'),
	(8, 15, 15, 15, '2020-09-12', 44, '2020-09-12 00:27:02', '2020-09-12 00:27:03'),
	(9, 50, 50, 50, '2020-09-12', 16, '2020-09-12 15:32:22', '2020-09-12 00:32:23'),
	(10, 15, 0, 0, '2020-09-12', 1, '2020-09-12 00:41:17', '2020-09-12 00:41:18'),
	(11, 10, 25, 25, '2020-09-12', 44, '2020-09-12 01:06:43', '2020-09-12 01:06:44'),
	(12, 15, 15, 15, '2020-09-14', 44, '2020-09-14 17:42:54', '2020-09-14 17:42:55'),
	(13, 25, 20, 25, '2020-09-15', 46, '2020-09-15 21:41:35', '2020-09-15 21:41:36');
/*!40000 ALTER TABLE `stats` ENABLE KEYS */;

-- Dumping data for table coronavirus19.tags: ~4 rows (approximately)
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` (`id`, `nom`) VALUES
	(1, 'covid'),
	(2, 'algerie'),
	(3, 'diabete'),
	(4, 'tlemcen');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;

-- Dumping data for table coronavirus19.wilayas: ~48 rows (approximately)
/*!40000 ALTER TABLE `wilayas` DISABLE KEYS */;
INSERT INTO `wilayas` (`id`, `nom`, `created_at`, `updated_at`) VALUES
	(1, 'adrar', '2020-09-08 22:31:43', '2020-09-08 22:31:44'),
	(2, 'Chlef	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(3, 'Laghouat	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(4, 'Oum el Bouaghi	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(5, 'Batna	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(6, 'Bedjaia	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(7, 'Biskra', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(8, 'Bechar	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(9, 'Blida	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(10, 'Bouira', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(11, 'Tamnrasset', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(12, 'Tebessa	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(13, 'Tlemcen	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(14, 'Tiaret	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(15, 'Tizi Ouzou	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(16, 'Alger	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(17, 'Djelfa	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(18, 'Jijel	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(19, 'Setif	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(20, 'Saida	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(21, 'Skikda	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(22, 'Sidi Bel Abes	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(23, 'Annaba	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(24, 'Guelma	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(25, 'Constantine	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(26, 'Medea	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(27, 'Mostaganem	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(28, 'Msila	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(29, 'Mascara	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(30, 'Ouargla	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(31, 'Oran	', '2020-09-09 00:21:44', '2020-09-09 00:21:44'),
	(32, 'El Bayadh	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(33, 'Illizi	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(34, 'Bordj Bou Arreridj	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(35, 'Boumerdes	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(36, 'El taref	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(37, 'Tindouf	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(38, 'Tissemsilt	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(39, 'El Oued	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(40, 'Khenchela	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(41, 'Souk Ahras	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(42, 'Tipaza	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(43, 'Mila	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(44, 'Ain Defla	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(45, 'Naama	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(46, 'Ain Temouchent	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(47, 'Ghardaia	', '2020-09-09 00:21:45', '2020-09-09 00:21:45'),
	(48, 'Relizane	', '2020-09-09 00:21:45', '2020-09-09 00:21:45');
/*!40000 ALTER TABLE `wilayas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
