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

-- Dumping data for table coronavirus19.admins: ~0 rows (approximately)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Dumping data for table coronavirus19.categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `nom`, `created_at`, `updated_at`) VALUES
	(1, 'commerce', '2020-09-09 01:13:56', '2020-09-09 01:13:56'),
	(2, 'parapharmacie', '2020-09-09 01:14:05', '2020-09-09 01:14:05'),
	(3, 'hygiene', '2020-09-09 01:14:10', '2020-09-09 01:14:11'),
	(4, 'securité', '2020-09-09 01:14:36', '2020-09-09 01:14:37');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping data for table coronavirus19.citoyens: ~0 rows (approximately)
/*!40000 ALTER TABLE `citoyens` DISABLE KEYS */;
INSERT INTO `citoyens` (`id`, `nom`, `prenom`, `email`, `password`, `image`, `com_id`, `pro_id`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'amine', 'amine', 'amine@gmail.com', '12345', 'gjgjggj', 1, 1, 'kjkjkjkj', '2020-09-09 01:15:31', '2020-09-09 01:15:32');
/*!40000 ALTER TABLE `citoyens` ENABLE KEYS */;

-- Dumping data for table coronavirus19.citoyen_maladies: ~0 rows (approximately)
/*!40000 ALTER TABLE `citoyen_maladies` DISABLE KEYS */;
/*!40000 ALTER TABLE `citoyen_maladies` ENABLE KEYS */;

-- Dumping data for table coronavirus19.communes: ~0 rows (approximately)
/*!40000 ALTER TABLE `communes` DISABLE KEYS */;
INSERT INTO `communes` (`id`, `nom`, `wilaya_id`, `created_at`, `updated_at`) VALUES
	(1, 'imama', 13, '2020-09-09 01:04:37', '2020-09-09 01:04:38'),
	(2, 'Beni Mestar', 13, '2020-09-09 01:04:53', '2020-09-09 01:04:53');
/*!40000 ALTER TABLE `communes` ENABLE KEYS */;

-- Dumping data for table coronavirus19.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table coronavirus19.favoris: ~0 rows (approximately)
/*!40000 ALTER TABLE `favoris` DISABLE KEYS */;
/*!40000 ALTER TABLE `favoris` ENABLE KEYS */;

-- Dumping data for table coronavirus19.idees: ~0 rows (approximately)
/*!40000 ALTER TABLE `idees` DISABLE KEYS */;
INSERT INTO `idees` (`id`, `titre`, `contenu`, `image`, `etat`, `cat_id`, `cit_id`, `created_at`, `updated_at`) VALUES
	(1, 'idee 1', 'flskjsdlkjlkjd', 'ljlkjlkjkj', 0, 4, 1, '2020-09-09 01:27:08', '2020-09-09 01:27:08'),
	(2, 'idee 2 ', 'fdkgfjgkljfkgdjfklgjdlfkj', 'lfdgjdlfjk', 0, 2, 1, '2020-09-09 01:27:24', '2020-09-09 01:27:25');
/*!40000 ALTER TABLE `idees` ENABLE KEYS */;

-- Dumping data for table coronavirus19.informations: ~0 rows (approximately)
/*!40000 ALTER TABLE `informations` DISABLE KEYS */;
INSERT INTO `informations` (`id`, `titre`, `contenu`, `lien`, `image`, `date`, `mal_id`, `pro_id`, `sou_id`, `wilaya_id`, `created_at`, `updated_at`) VALUES
	(1, 'Covid 19 - mars 2020', 'dfgjdflkgjdflkgjflkgjfdlgjdlfkgjflkgjfjgdfklj', 'kfjdsfkjkk', 'kjkjkkj', '2020-09-09', NULL, 5, 1, 44, '2020-09-09 00:58:04', '2020-09-09 00:58:05'),
	(2, 'Surcharge des Hopitaux', 'dflgkfdlgjfdlkgjfdlgjflhjfg;;n,g:;n,ghk:,hgn,gfb,f:;,gfh,fg;:bhf,gg;,fg:h;,:;,', ':;,:,:lljkkhjkhk', 'lkjlkjkj', '2020-09-09', NULL, 5, 2, 23, '2020-09-09 00:58:45', '2020-09-09 00:58:47'),
	(3, 'Pénurie des matieres essentielles de réanimation', 'dflgjdkflgjlkhgmljumkjtmfhjtdlgjet:klhkmtlhklyfhfkhkfgljbdlkgkkrrtfmk', 'kk', 'juhh', '2020-09-09', NULL, 2, 2, 6, '2020-09-09 01:06:25', '2020-09-09 00:59:26'),
	(4, 'Détresse respiratoire', 'gfldfkjgflkgdfjkgfj', 'fldgjdkflj', 'dlfgfgdjkgj', '2020-09-09', NULL, 5, 1, 44, '2020-09-09 01:21:04', '2020-09-09 01:21:06');
/*!40000 ALTER TABLE `informations` ENABLE KEYS */;

-- Dumping data for table coronavirus19.maladies: ~0 rows (approximately)
/*!40000 ALTER TABLE `maladies` DISABLE KEYS */;
/*!40000 ALTER TABLE `maladies` ENABLE KEYS */;

-- Dumping data for table coronavirus19.migrations: ~16 rows (approximately)
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
	(16, '2020_08_20_112029_create_favoris_table', 9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table coronavirus19.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table coronavirus19.poststag: ~0 rows (approximately)
/*!40000 ALTER TABLE `poststag` DISABLE KEYS */;
INSERT INTO `poststag` (`id`, `information_id`, `tags_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2020-09-09 01:03:33', '2020-09-09 01:03:34'),
	(2, 3, 2, '2020-09-09 01:03:43', '2020-09-09 01:03:44'),
	(3, 1, 3, '2020-09-09 01:04:01', '2020-09-09 01:04:02');
/*!40000 ALTER TABLE `poststag` ENABLE KEYS */;

-- Dumping data for table coronavirus19.professions: ~0 rows (approximately)
/*!40000 ALTER TABLE `professions` DISABLE KEYS */;
INSERT INTO `professions` (`id`, `nom`, `created_at`, `updated_at`) VALUES
	(1, 'architecte', '2020-09-09 00:56:38', '2020-09-09 00:56:38'),
	(2, 'medecin', '2020-09-09 00:56:46', '2020-09-09 00:56:47'),
	(3, 'enseignant', '2020-09-09 00:56:55', '2020-09-09 00:56:55'),
	(4, 'dentiste', '2020-09-09 00:57:02', '2020-09-09 00:57:03'),
	(5, 'commerçant', NULL, NULL);
/*!40000 ALTER TABLE `professions` ENABLE KEYS */;

-- Dumping data for table coronavirus19.signals: ~0 rows (approximately)
/*!40000 ALTER TABLE `signals` DISABLE KEYS */;
/*!40000 ALTER TABLE `signals` ENABLE KEYS */;

-- Dumping data for table coronavirus19.sources: ~0 rows (approximately)
/*!40000 ALTER TABLE `sources` DISABLE KEYS */;
INSERT INTO `sources` (`id`, `nom`, `created_at`, `updated_at`) VALUES
	(1, 'ministere de la santé', '2020-09-09 00:56:18', '2020-09-09 00:56:18'),
	(2, 'agence nationale des statistiques', '2020-09-09 00:56:29', '2020-09-09 00:56:29');
/*!40000 ALTER TABLE `sources` ENABLE KEYS */;

-- Dumping data for table coronavirus19.stats: ~5 rows (approximately)
/*!40000 ALTER TABLE `stats` DISABLE KEYS */;
INSERT INTO `stats` (`id`, `nbrmal`, `nbrgue`, `nbrmort`, `date`, `wilaya_id`, `created_at`, `updated_at`) VALUES
	(1, 25, 25, 25, '2020-09-09', 25, '2020-09-09 00:41:44', '2020-09-09 00:41:45'),
	(2, 29, 36, 22, '2020-09-09', 20, '2020-09-09 00:42:03', '2020-09-09 00:42:04'),
	(3, 20, 22, 99, '2020-09-09', 29, '2020-09-09 00:42:33', '2020-09-09 00:42:34'),
	(4, 88, 99, 55, '2020-09-09', 13, '2020-09-09 00:42:47', '2020-09-09 00:42:48'),
	(5, 28, 98, 78, '2020-09-09', 48, '2020-09-09 00:43:01', '2020-09-09 00:43:04'),
	(6, 99, 58, 54, '2020-09-09', 16, '2020-09-09 00:45:41', '2020-09-09 00:45:42');
/*!40000 ALTER TABLE `stats` ENABLE KEYS */;

-- Dumping data for table coronavirus19.tags: ~0 rows (approximately)
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
