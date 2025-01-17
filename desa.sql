-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `cache`;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('1b6453892473a467d07372d45eb05abc2031647a',	'i:1;',	1737076131),
('1b6453892473a467d07372d45eb05abc2031647a:timer',	'i:1737076131;',	1737076131),
('356a192b7913b04c54574d18c28d46e6395428ab',	'i:2;',	1737078697),
('356a192b7913b04c54574d18c28d46e6395428ab:timer',	'i:1737078697;',	1737078697),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3',	'i:1;',	1737077557),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer',	'i:1737077557;',	1737077557);

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `homepage_contacts`;
CREATE TABLE `homepage_contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `homepage_contacts` (`id`, `title`, `description`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1,	'Kontak Kami',	'Kami siap membantu Anda dengan segala pertanyaan, saran, atau kebutuhan informasi. Jangan ragu untuk menghubungi kami.',	'gedongombo@desaku.com',	'08123456789',	'Jl. Hayam Wuruk No. 2, Kecamatan Semanding, Kabupaten Tuban, Jawa Timur',	'2025-01-08 06:20:04',	'2025-01-08 06:20:04');

DROP TABLE IF EXISTS `homepage_galleries`;
CREATE TABLE `homepage_galleries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `homepage_galleries` (`id`, `title`, `description`, `image_url`, `created_at`, `updated_at`) VALUES
(1,	'Kucing 1',	'Ini gambar kucing',	'1/01JH5D8T0V3K3S5KBWP6MQPRVR.jpg',	'2025-01-08 05:18:24',	'2025-01-09 04:30:21'),
(2,	'Kucing 2',	'Kucing 2',	'3/01JH5DA3DKHBN26S64F3J1BW38.jpg',	'2025-01-08 05:19:07',	'2025-01-09 04:31:04'),
(3,	'Kucing 3',	'Kucing 3',	'4/01JH5DEBARP8YS7F0F2HGH9EMV.jpg',	'2025-01-08 05:19:32',	'2025-01-09 04:33:23');

DROP TABLE IF EXISTS `homepage_hero_sections`;
CREATE TABLE `homepage_hero_sections` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `background_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `homepage_hero_sections` (`id`, `title`, `description`, `background_image`, `created_at`, `updated_at`) VALUES
(1,	'Selamat Datang di Website Kelurahan Gedongombo',	'Gedongombo adalah kelurahan yang berada di Kecamatan Semanding, Kabupaten Tuban, Provinsi Jawa Timur, Indonesia.',	'http://127.0.0.1:8000/storage/6/01JH5DQS1E8DSBRPD2M7SZ4C47.jpg',	'2025-01-08 05:52:41',	'2025-01-09 04:38:32');

DROP TABLE IF EXISTS `homepage_news`;
CREATE TABLE `homepage_news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `homepage_news` (`id`, `title`, `description`, `image_url`, `created_at`, `updated_at`) VALUES
(1,	'Info Loker Kucing',	'<p>Info lowongan pekerjaan untuk kucing orange</p>',	'7/01JH5DXSS84MNXDAGCVDAPC574.jpg',	'2025-01-08 06:16:35',	'2025-01-09 04:41:49'),
(2,	'Kucing 1',	'<p>Preman kucing</p>',	'/48/01JHRZ96KDAA3S1XMN7JJZSTAM.jpg',	'2025-01-16 18:50:43',	'2025-01-16 18:50:43'),
(3,	'Kucing hitam',	'<p>Kucing hitam</p>',	'/49/01JHRZAXXRTWA4Z8NSEQX7NEX7.jpg',	'2025-01-16 18:51:39',	'2025-01-16 18:51:40');

DROP TABLE IF EXISTS `homepage_sections`;
CREATE TABLE `homepage_sections` (
  `id` int NOT NULL AUTO_INCREMENT,
  `profile_kelurahan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `profile_umkm` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `program_csr` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `image_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `homepage_sections` (`id`, `profile_kelurahan`, `profile_umkm`, `program_csr`, `image_url`, `created_at`, `updated_at`) VALUES
(1,	'<p>Gedongombo adalah kelurahan yang terletak di Kecamatan Semanding, Kabupaten Tuban, Provinsi Jawa Timur, Indonesia. Kelurahan ini dikenal dengan kekayaan budaya dan semangat gotong royong warganya. Dengan visi untuk membangun masyarakat yang harmonis, produktif, dan sejahtera, Gedongombo terus berupaya meningkatkan pelayanan publik dan memajukan potensi lokal.</p>',	'<p>&nbsp;UMKM di Kelurahan Gedongombo menjadi salah satu pilar utama dalam penggerak ekonomi masyarakat. Berbagai usaha seperti produksi makanan khas, kerajinan lokal, dan jasa kreatif terus berkembang, membawa dampak positif pada perekonomian warga. Pemerintah kelurahan juga aktif mendukung pemberdayaan wirausaha lokal melalui pelatihan dan akses pasar.&nbsp;</p>',	'<p>&nbsp;Melalui program CSR yang berbasis pada kebutuhan masyarakat, Kelurahan Gedongombo bersama mitra strategis berkomitmen mendukung pembangunan sosial, pendidikan, dan lingkungan. Program-program ini bertujuan untuk memperkuat kesejahteraan masyarakat serta menjaga keberlanjutan ekosistem lokal.</p>',	'news-section/01JH31Q4A47EFZ9Q7PF0DMXXBW.jpg',	'2025-01-08 06:29:59',	'2025-01-08 06:29:59');

DROP TABLE IF EXISTS `homepage_umkm_week`;
CREATE TABLE `homepage_umkm_week` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `position` int NOT NULL,
  `highlight` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `homepage_umkm_week` (`id`, `title`, `description`, `position`, `highlight`, `created_at`, `updated_at`) VALUES
(1,	'Bakso Santuy',	'Bakso yang bikin santuy, karena disajikan sambil dipijat.',	1,	0,	'2025-01-16 10:41:59',	'2025-01-16 10:41:59'),
(2,	'Nasi Goreng Ceria',	'Nasi goreng dengan topping warna-warni yang ceria!',	2,	0,	'2025-01-16 10:42:24',	'2025-01-16 10:42:24'),
(3,	'Es Teh Galau',	'Es teh dengan rasa yang bikin galau, antara manis dan pahit.',	3,	0,	'2025-01-16 10:42:43',	'2025-01-16 10:42:43'),
(4,	'Keripik Ngakak',	'Keripik pedas dengan level pedas yang bikin ngakak!',	4,	0,	'2025-01-16 10:43:02',	'2025-01-16 10:43:02');

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1,	'default',	'{\"uuid\":\"43338bc6-352a-4eb8-830c-fb08de78ed12\",\"displayName\":\"Filament\\\\Notifications\\\\Auth\\\\VerifyEmail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":3:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:39:\\\"Filament\\\\Notifications\\\\Auth\\\\VerifyEmail\\\":2:{s:3:\\\"url\\\";s:188:\\\"http:\\/\\/127.0.0.1:8000\\/app\\/email-verification\\/verify\\/1\\/56f16f952a85cda659ce95db1103f8bcbd1d991b?expires=1736296937&signature=0e31957599e26116b86139645cf6e638a6ada487c50fd17473439e8c9e307db2\\\";s:2:\\\"id\\\";s:36:\\\"35e00bd1-c223-4017-b118-0e19b0915ed3\\\";}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}}\"}}',	0,	NULL,	1736293337,	1736293337),
(2,	'default',	'{\"uuid\":\"b21ee629-f79a-4b08-b424-4a5ddee1fb72\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736422221,	1736422221),
(3,	'default',	'{\"uuid\":\"985d1afe-d927-47e6-9c00-e88e04a8d8e6\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:2;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736422245,	1736422245),
(4,	'default',	'{\"uuid\":\"7d1c40ed-7045-4b50-bd0c-2adeb5d584d4\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736422264,	1736422264),
(5,	'default',	'{\"uuid\":\"83e22793-c8aa-475e-9821-f78fa25a300a\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:4;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736422403,	1736422403),
(6,	'default',	'{\"uuid\":\"71a86bf3-50a4-4acf-ae42-506f8555cc39\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:5;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736422646,	1736422646),
(7,	'default',	'{\"uuid\":\"856f88b3-8f2e-4169-82b7-088d2a74443d\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:6;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736422712,	1736422712),
(8,	'default',	'{\"uuid\":\"ef5c5171-1335-4634-8cc4-b916250393de\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:7;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736422909,	1736422909),
(9,	'default',	'{\"uuid\":\"1825ef6b-429e-4d7b-8736-2eb6b61fcc50\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:8;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736424782,	1736424782),
(10,	'default',	'{\"uuid\":\"25666377-9047-4643-b6e9-0654b60a3562\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:9;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736424938,	1736424938),
(11,	'default',	'{\"uuid\":\"2bada4cb-ba61-47d5-b042-47be9aff38ce\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:10;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736424957,	1736424957),
(12,	'default',	'{\"uuid\":\"383b3661-6744-477a-b992-f06e2cf54d76\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:11;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736425561,	1736425561),
(13,	'default',	'{\"uuid\":\"ae197b3b-e8b4-4dbe-91c4-1aac4827c7e5\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:12;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736425605,	1736425605),
(14,	'default',	'{\"uuid\":\"719d26b3-9c2c-4338-a9d7-36d4ddd0a77d\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:13;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736425702,	1736425702),
(15,	'default',	'{\"uuid\":\"9284fd15-ffa5-47e3-b105-9333ffd8a94d\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:14;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736425826,	1736425826),
(16,	'default',	'{\"uuid\":\"aaf5315c-a3eb-4dde-9652-966273d11778\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:15;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736426101,	1736426101),
(17,	'default',	'{\"uuid\":\"49b4a0f6-a136-4fa3-91b1-7f58a59380d7\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:16;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736426143,	1736426143),
(18,	'default',	'{\"uuid\":\"4f631789-280c-41c2-8651-22b0ca4c3d3c\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:18;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736426699,	1736426699),
(19,	'default',	'{\"uuid\":\"48dc8bde-1b49-437e-8aee-90743377c539\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:19;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736426723,	1736426723),
(20,	'default',	'{\"uuid\":\"984f13c2-c524-446e-b7a1-d35b748e4c74\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:29;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736433297,	1736433297),
(21,	'default',	'{\"uuid\":\"61a63cbf-2830-44b7-ab00-ce2fc8274dcc\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:30;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736437983,	1736437983),
(22,	'default',	'{\"uuid\":\"7930a9b7-bb8f-40ff-aa27-7fadfb795141\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:31;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736438530,	1736438530),
(23,	'default',	'{\"uuid\":\"9b280ab3-62e1-4bcb-9f6c-e45477f72247\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:32;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736439013,	1736439013),
(24,	'default',	'{\"uuid\":\"7ed32106-1256-4546-97da-28940f42979a\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:33;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736439216,	1736439216),
(25,	'default',	'{\"uuid\":\"8d0188fb-7a6f-4c72-96a9-40f63bb39e64\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:34;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736439925,	1736439925),
(26,	'default',	'{\"uuid\":\"8ef50f3d-c3a7-46be-a79c-b052aeb7463d\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:35;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736440528,	1736440528),
(27,	'default',	'{\"uuid\":\"8890c9fd-cb84-4dec-bba6-39cf5feca72c\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:36;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736440668,	1736440668),
(28,	'default',	'{\"uuid\":\"6cbc573e-a9ba-451b-ba32-b1afa0cca78d\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:37;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736440770,	1736440770),
(29,	'default',	'{\"uuid\":\"988c770e-8d1c-4609-bb01-ee874f4061a0\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:38;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736440967,	1736440967),
(30,	'default',	'{\"uuid\":\"76ed2020-21cc-41da-a67a-f098eaa5d77f\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:39;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736448565,	1736448565),
(31,	'default',	'{\"uuid\":\"a3efbb50-62f6-4264-8624-d80a54bbb63c\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:40;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736448565,	1736448565),
(32,	'default',	'{\"uuid\":\"c958d14d-7930-426e-927d-4ecfba88265e\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:41;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736448612,	1736448612),
(33,	'default',	'{\"uuid\":\"e0138969-b7c8-4049-a8ea-0fe48f56bb6d\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:42;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1736448707,	1736448707),
(34,	'default',	'{\"uuid\":\"5ed27118-c281-4b8d-8263-966e7a410fe4\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:43;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1737030065,	1737030065),
(35,	'default',	'{\"uuid\":\"05da0dad-f495-4bc9-a921-2cdb70b16b3f\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:44;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1737047386,	1737047386),
(36,	'default',	'{\"uuid\":\"d476de79-451f-4424-877e-024a8b568eea\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:45;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1737047527,	1737047527),
(37,	'default',	'{\"uuid\":\"432138d5-70bc-4040-bbc2-a55c8e23bd97\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:47;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1737076073,	1737076073),
(38,	'default',	'{\"uuid\":\"0361692d-4286-4208-a3d3-4256d4170d2d\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:48;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1737078643,	1737078643),
(39,	'default',	'{\"uuid\":\"87e54e34-be4f-4f7c-aa85-1e7d973c1667\",\"displayName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\",\"command\":\"O:69:\\\"Spatie\\\\MediaLibrary\\\\ResponsiveImages\\\\Jobs\\\\GenerateResponsiveImagesJob\\\":2:{s:8:\\\"\\u0000*\\u0000media\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:49:\\\"Spatie\\\\MediaLibrary\\\\MediaCollections\\\\Models\\\\Media\\\";s:2:\\\"id\\\";i:49;s:9:\\\"relations\\\";a:1:{i:0;s:5:\\\"model\\\";}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"connection\\\";s:8:\\\"database\\\";}\"}}',	0,	NULL,	1737078700,	1737078700);

DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `media_uuid_unique` (`uuid`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  KEY `media_order_column_index` (`order_column`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1,	'App\\Models\\HomepageGallery',	1,	'f2d131dd-bc0e-49de-9e35-dbe9f886a49d',	'image_url',	'1280px-Cat_August_2010-4',	'01JH5D8T0V3K3S5KBWP6MQPRVR.jpg',	'image/jpeg',	'public',	'public',	158134,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 04:30:21',	'2025-01-09 04:30:21'),
(3,	'App\\Models\\HomepageGallery',	2,	'e13655c6-e002-45e0-9ba8-e96595c5ea1a',	'image_url',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH5DA3DKHBN26S64F3J1BW38.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 04:31:04',	'2025-01-09 04:31:04'),
(4,	'App\\Models\\HomepageGallery',	3,	'064e23c8-01fe-448e-b7cd-019c36de7351',	'image_url',	'Orange-colored-cat-yawns-displaying-teeth',	'01JH5DEBARP8YS7F0F2HGH9EMV.jpg',	'image/png',	'public',	'public',	1666638,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 04:33:23',	'2025-01-09 04:33:23'),
(5,	'App\\Models\\HomepageHeroSection',	1,	'4b4f5694-14e9-4e78-9f4d-0e0ff10572c3',	'image_url',	'banner',	'01JH5DNRRAC7WGW7KTD02A6KMH.jpg',	'image/jpeg',	'public',	'public',	282588,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 04:37:26',	'2025-01-09 04:37:26'),
(6,	'App\\Models\\HomepageHeroSection',	1,	'5b29182f-2589-4e0b-ae59-a57c3db8a849',	'img',	'banner',	'01JH5DQS1E8DSBRPD2M7SZ4C47.jpg',	'image/jpeg',	'public',	'public',	282588,	'[]',	'[]',	'[]',	'[]',	2,	'2025-01-09 04:38:32',	'2025-01-09 04:38:32'),
(7,	'App\\Models\\HomepageNews',	1,	'8fa1ea3d-891f-4363-be5d-acc154109c67',	'img',	'dog',	'01JH5DXSS84MNXDAGCVDAPC574.jpg',	'image/jpeg',	'public',	'public',	44345,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 04:41:49',	'2025-01-09 04:41:49'),
(9,	'App\\Models\\UmkmProduct',	1,	'b22eb539-ffb7-4602-8eb4-3ffd6d25767f',	'product_photo',	'2120193204',	'01JH5FVQ68HAPFPNBHPA0G1CME.jpg',	'image/png',	'public',	'public',	211377,	'[]',	'[]',	'[]',	'[]',	2,	'2025-01-09 05:15:38',	'2025-01-09 05:15:38'),
(20,	'App\\Models\\UmkmProduct',	13,	'1d6fe7e6-016b-478d-b3dd-d7cd93ea7536',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH5NAY8DC4DVTBVY3M1XTQKC.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 06:51:20',	'2025-01-09 06:51:20'),
(21,	'App\\Models\\UmkmProduct',	14,	'f4199aba-f3d1-441a-b933-9c8747a24aa5',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH5ND2ASMES4XSDXQSC1E6QJ.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 06:52:30',	'2025-01-09 06:52:30'),
(22,	'App\\Models\\UmkmProduct',	15,	'2a1b2d15-ee59-4c0e-9e5d-0b119e713ea1',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH5NF0T301TBDV3ZEF6CETKK.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 06:53:34',	'2025-01-09 06:53:34'),
(23,	'App\\Models\\UmkmProduct',	16,	'4b83d3b0-d18e-4c58-9a78-16159f5a3fb7',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH5NGWFVTAJEYBGFSSRQ7QG1.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 06:54:35',	'2025-01-09 06:54:35'),
(24,	'App\\Models\\UmkmProduct',	17,	'985b9231-4865-4e61-8700-c468ec380d24',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH5P5CK6V58GRQ725Z4HC65W.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 07:05:47',	'2025-01-09 07:05:47'),
(25,	'App\\Models\\UmkmProduct',	18,	'f440e37a-4d57-4c59-97aa-c5e414281404',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH5PDWS2X5XKM4WN6ZA5WJ6D.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 07:10:25',	'2025-01-09 07:10:25'),
(26,	'App\\Models\\UmkmProduct',	19,	'118ef81b-8b26-4d7d-8d24-05bd05a431de',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH5PXD6WJFDVAB95NVV16RJ9.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 07:18:54',	'2025-01-09 07:18:54'),
(27,	'App\\Models\\UmkmProduct',	20,	'b756fdd5-a0d7-4506-b32b-ed34228a9a89',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH5QFP2BFSQHQFD2SXESTR8R.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 07:28:52',	'2025-01-09 07:28:52'),
(28,	'App\\Models\\UmkmProduct',	21,	'fddd7fed-5d01-44d0-8b0f-939ab6e750fe',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH5QRQWSKV6AE2DS4249WSMB.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 07:33:49',	'2025-01-09 07:33:49'),
(29,	'App\\Models\\UmkmProduct',	22,	'38bf528d-7b97-4757-9765-9f0adb6de43b',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH5QTSQJRVW41DTZ3C2DGVR3.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 07:34:57',	'2025-01-09 07:34:57'),
(30,	'App\\Models\\UmkmProductCatalog',	1,	'a7b8c4f2-57d3-483c-9a0b-2c1583e5dd9d',	'file_path',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH5W9TFDS1R9K4M6A06VFG0Z.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 08:53:03',	'2025-01-09 08:53:03'),
(31,	'App\\Models\\UmkmProductDocumentation',	1,	'2d1b3dc7-c0fd-43eb-92d9-c89462be6272',	'file_path',	'dog',	'01JH5WTGM4G2WJ8E4R4470SKNW.jpg',	'image/jpeg',	'public',	'public',	44345,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 09:02:10',	'2025-01-09 09:02:10'),
(33,	'App\\Models\\UmkmProductDocumentation',	1,	'8d634fa1-ea47-4b64-bcbd-2f54d0d7ff04',	'documentation_files',	'Screenshot_2024-02-11-23-53-11-07_f9ee0578fe1cc94de7482bd41accb329-3958781792',	'01JH5XFEH1AK5ZWSHQ8N1APHW1.jpg',	'image/png',	'public',	'public',	187847,	'[]',	'[]',	'[]',	'[]',	2,	'2025-01-09 09:13:36',	'2025-01-09 09:13:36'),
(37,	'App\\Models\\UmkmProductNews',	1,	'b6c29c8c-a73a-4f8e-9c6a-8690a7a9255a',	'news_photo',	'1280px-Cat_August_2010-4',	'01JH5YYVNKGWWDWVJTCDT9HY1B.jpg',	'image/jpeg',	'public',	'public',	158134,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 09:39:30',	'2025-01-09 09:39:30'),
(38,	'App\\Models\\UmkmProduct',	1,	'3589470a-221e-4eb8-8b63-e0dfe5d5bcdb',	'product_photos',	'2120193204',	'01JH5Z4WEJQVVFVXGRVPFNBT0T.jpg',	'image/png',	'public',	'public',	211377,	'[]',	'[]',	'[]',	'[]',	3,	'2025-01-09 09:42:47',	'2025-01-09 09:42:47'),
(39,	'App\\Models\\UmkmProduct',	23,	'f32db33b-c85e-4118-8afe-9643b2377831',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH66CQTQ8CA3YY68FKX283E9.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 11:49:25',	'2025-01-09 11:49:25'),
(40,	'App\\Models\\UmkmProductNews',	2,	'7a318f69-6350-4414-8a84-8d86e2eb1ece',	'news_photo',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH66CQYT94MQB04576BMX5GV.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 11:49:25',	'2025-01-09 11:49:25'),
(41,	'App\\Models\\UmkmProduct',	24,	'72dce4ce-a26e-46de-84d5-2a421aed4d34',	'product_photos',	'688004_12-3-2021_12-57-42',	'01JH66E64FM0N22AJC10326PVQ.jpg',	'image/png',	'public',	'public',	273773,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 11:50:12',	'2025-01-09 11:50:12'),
(42,	'App\\Models\\UmkmProduct',	25,	'0dc33145-1c31-4208-a85e-bd59687893f2',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JH66H2T0JP5CWZHNRK0V84NB.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-09 11:51:47',	'2025-01-09 11:51:47'),
(43,	'App\\Models\\UmkmProductCatalog',	5,	'98731fcd-f7af-44ae-922e-4e54531d17a7',	'file_path',	'e4ebfe8d-shutterstock_352176329',	'01JHQGYQ7M7X3T686WYF1HSHK8.jpg',	'image/png',	'public',	'public',	423921,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-16 05:21:05',	'2025-01-16 05:21:05'),
(44,	'App\\Models\\UmkmProduct',	26,	'c4172200-265b-4869-b754-cc18e96c27d0',	'product_photos',	'michael-sum-LEpfefQf4rU-unsplash',	'01JHR1FAQ4XE0SS6HFNPFTYHX2.jpg',	'image/jpeg',	'public',	'public',	26085,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-16 10:09:46',	'2025-01-16 10:09:46'),
(45,	'App\\Models\\UmkmProductNews',	3,	'227283e4-c925-4017-b1d3-5309f3c7297c',	'news_photo',	'dog',	'01JHR1KM9YTB7W14RYY3E0CHVN.jpg',	'image/jpeg',	'public',	'public',	44345,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-16 10:12:07',	'2025-01-16 10:12:07'),
(46,	'App\\Models\\UmkmProductDocumentation',	5,	'7b33451a-1dd8-47af-866a-6ef8ca10c7b0',	'documentation_files',	'dog',	'01JHR1N3X7ED1GZ4CARSABP0YJ.jpg',	'image/jpeg',	'public',	'public',	44345,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-16 10:12:56',	'2025-01-16 10:12:56'),
(47,	'App\\Models\\UmkmProductCatalog',	6,	'51fe6688-643c-400f-8bbe-a016d467b8fa',	'file_path',	'dog',	'01JHRWTSACDTB5KAS9Z6S180WR.jpg',	'image/jpeg',	'public',	'public',	44345,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-16 18:07:53',	'2025-01-16 18:07:53'),
(48,	'App\\Models\\HomepageNews',	2,	'f6981a21-0db8-49cd-b1ad-d44212899f5e',	'img',	'1280px-Cat_August_2010-4',	'01JHRZ96KDAA3S1XMN7JJZSTAM.jpg',	'image/jpeg',	'public',	'public',	158134,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-16 18:50:43',	'2025-01-16 18:50:43'),
(49,	'App\\Models\\HomepageNews',	3,	'f271b617-bf3d-4df0-94b4-0aa31365505d',	'img',	'2120193204',	'01JHRZAXXRTWA4Z8NSEQX7NEX7.jpg',	'image/png',	'public',	'public',	211377,	'[]',	'[]',	'[]',	'[]',	1,	'2025-01-16 18:51:40',	'2025-01-16 18:51:40');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'0001_01_01_000000_create_users_table',	1),
(2,	'0001_01_01_000001_create_cache_table',	1),
(3,	'0001_01_01_000002_create_jobs_table',	1),
(4,	'2025_01_07_231337_add_two_factor_columns_to_users_table',	1),
(5,	'2025_01_07_231949_create_personal_access_tokens_table',	2),
(6,	'2025_01_09_112445_create_media_table',	2);

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('h1WnhPWGTlvmK5ntVHzkG4KR8cZY6w0JiNhQ41Ge',	1,	'127.0.0.1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',	'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiTWpQSjZ4WEVPdWVlVHIyd3o1ZVJaMzVxd2w0VjVHNUNLZGdRZFpiUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkamwzQS9KMG5TdjVpVGpCZ1prQ0t5Lm5PRUhUZ1kvRTRlbjJMcUZKUmJ5NzJVYTROMkg1WE8iO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=',	1737078737);

DROP TABLE IF EXISTS `supports`;
CREATE TABLE `supports` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int DEFAULT NULL,
  `total` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `supports_user_id_foreign` (`user_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `supports_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `umkm_products` (`id`) ON DELETE CASCADE,
  CONSTRAINT `supports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `supports` (`id`, `user_id`, `product_id`, `quantity`, `total`, `created_at`, `updated_at`, `notes`) VALUES
(1,	2,	1,	1,	1.00,	'2025-01-09 13:07:49',	'2025-01-09 13:07:49',	''),
(2,	2,	1,	1,	100000000.00,	'2025-01-13 21:32:49',	'2025-01-13 21:32:49',	''),
(3,	2,	26,	NULL,	NULL,	'2025-01-16 18:46:01',	'2025-01-16 18:46:01',	'sadasdasdasd'),
(4,	2,	26,	1,	11111111.00,	'2025-01-16 18:46:21',	'2025-01-16 18:46:21',	'asdasdasdasd');

DROP TABLE IF EXISTS `umkm_product_catalogs`;
CREATE TABLE `umkm_product_catalogs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `catalog_name` varchar(255) NOT NULL,
  `catalog_description` text,
  `file_path` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `price` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `umkm_product_catalogs_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `umkm_products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `umkm_product_catalogs` (`id`, `product_id`, `catalog_name`, `catalog_description`, `file_path`, `is_active`, `created_at`, `updated_at`, `price`) VALUES
(1,	1,	'Kucing Kuning',	'kucing',	'/30/01JH5W9TFDS1R9K4M6A06VFG0Z.jpg',	1,	'2025-01-09 08:53:03',	'2025-01-16 05:21:05',	5000000000),
(2,	23,	'123123',	'123',	'/40/01JH66CQYT94MQB04576BMX5GV.jpg',	1,	'2025-01-09 11:49:25',	'2025-01-09 11:49:25',	0),
(3,	24,	'asdasd',	'asdasd',	NULL,	1,	'2025-01-09 11:50:12',	'2025-01-09 11:50:12',	0),
(4,	25,	'sdfsdfsdf',	NULL,	NULL,	1,	'2025-01-09 11:51:47',	'2025-01-09 11:51:47',	0),
(5,	1,	'Anak kucing',	'Black Diamond Cat Cage',	NULL,	1,	'2025-01-09 12:51:06',	'2025-01-16 05:21:05',	5000000000),
(6,	26,	'Makanan Kucing',	'Makanan Kucing',	'/47/01JHRWTSACDTB5KAS9Z6S180WR.jpg',	1,	'2025-01-16 18:07:53',	'2025-01-16 18:07:53',	NULL);

DROP TABLE IF EXISTS `umkm_product_documentations`;
CREATE TABLE `umkm_product_documentations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `file_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `umkm_product_documentations_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `umkm_products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `umkm_product_documentations` (`id`, `product_id`, `file_path`, `description`, `created_at`, `updated_at`) VALUES
(1,	1,	'/33/01JH5XFEH1AK5ZWSHQ8N1APHW1.jpg',	'123123',	'2025-01-09 09:13:36',	'2025-01-09 09:42:47'),
(2,	23,	'/40/01JH66CQYT94MQB04576BMX5GV.jpg',	NULL,	'2025-01-09 11:49:25',	'2025-01-09 11:49:25'),
(3,	24,	NULL,	NULL,	'2025-01-09 11:50:12',	'2025-01-09 11:50:12'),
(4,	25,	NULL,	NULL,	'2025-01-09 11:51:47',	'2025-01-09 11:51:47'),
(5,	26,	'/46/01JHR1N3X7ED1GZ4CARSABP0YJ.jpg',	'DOKUMENTASI 1',	'2025-01-16 10:12:56',	'2025-01-16 10:12:56');

DROP TABLE IF EXISTS `umkm_product_news`;
CREATE TABLE `umkm_product_news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_content` text NOT NULL,
  `news_photo` varchar(255) DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `umkm_product_news_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `umkm_products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `umkm_product_news` (`id`, `product_id`, `news_title`, `news_content`, `news_photo`, `published_at`, `created_at`, `updated_at`) VALUES
(1,	1,	'Kucing Hitam Juara Kontes Kecantikan!',	'<p>&nbsp;Di acara \"Meow Fest 2025\", kucing hitam dari Gedongombo dinobatkan sebagai juara karena keanggunannya.&nbsp;</p>',	'/37/01JH5YYVNKGWWDWVJTCDT9HY1B.jpg',	'2025-01-09 16:25:25',	'2025-01-09 09:25:25',	'2025-01-09 12:51:06'),
(2,	23,	'123',	'<p>123123</p>',	'/40/01JH66CQYT94MQB04576BMX5GV.jpg',	'2025-01-09 18:49:25',	'2025-01-09 11:49:25',	'2025-01-09 11:49:25'),
(3,	26,	'BERITA INI BOS',	'<p>BERITA INI BOS</p>',	'/45/01JHR1KM9YTB7W14RYY3E0CHVN.jpg',	'2025-01-16 17:12:07',	'2025-01-16 10:12:07',	'2025-01-16 10:12:07');

DROP TABLE IF EXISTS `umkm_products`;
CREATE TABLE `umkm_products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `short_description` text,
  `address` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `product_photo` varchar(255) DEFAULT NULL,
  `umkm_profile` text,
  `facilities` text,
  `rab` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `umkm_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `umkm_products` (`id`, `product_name`, `product_title`, `short_description`, `address`, `contact`, `product_photo`, `umkm_profile`, `facilities`, `rab`, `created_at`, `updated_at`, `user_id`) VALUES
(1,	'Kucing Hitam',	'Kucing Hitam',	'Kucing Hitam Natalan',	'Jl Jend Basuki Rachmad 122',	'08999727123123',	'/38/01JH5Z4WEJQVVFVXGRVPFNBT0T.jpg',	'Kucing Hitam',	'<ul><li>\"Pusat Pelatihan Kucing Pintar\" dilengkapi dengan area bermain interaktif, taman relaksasi, dan kolam renang mini khusus kucing.</li><li>Klinik kesehatan 24/7 untuk memastikan kucing selalu dalam kondisi prima.</li><li>Hotel kucing dengan ruangan AC, kasur empuk, dan camilan premium.</li><li>Studio foto kucing dengan berbagai properti unik untuk mengabadikan momen menggemaskan.</li></ul>',	'<p>Total Biaya&nbsp; 75,000,000 dengan keuntungan 10 juta, rincian anggaran telampir&nbsp;<a href=\"google.com\">google.com</a></p>',	'2025-01-09 05:13:02',	'2025-01-14 11:16:40',	1),
(22,	'asd',	'asd',	'asd',	'asd',	'asd',	'/29/01JH5QTSQJRVW41DTZ3C2DGVR3.jpg',	NULL,	NULL,	NULL,	'2025-01-09 07:34:57',	'2025-01-14 11:16:40',	1),
(23,	'123',	'123',	'123',	'123',	'123',	'/39/01JH66CQTQ8CA3YY68FKX283E9.jpg',	NULL,	NULL,	NULL,	'2025-01-09 11:49:25',	'2025-01-14 11:16:40',	1),
(24,	'asdasd',	'asdasd',	'asdas',	'dasd',	'asdasd',	'/41/01JH66E64FM0N22AJC10326PVQ.jpg',	NULL,	NULL,	NULL,	'2025-01-09 11:50:12',	'2025-01-14 11:16:40',	1),
(25,	'sdfdsf',	'sdf',	'sdfsd',	'sdf',	'fsdfsdf',	'/42/01JH66H2T0JP5CWZHNRK0V84NB.jpg',	NULL,	NULL,	NULL,	'2025-01-09 11:51:47',	'2025-01-14 11:16:40',	1),
(26,	'UMKM 1',	'UMKM 1',	'UMKM 1',	'UMKM 1',	'UMKM 1',	'/44/01JHR1FAQ4XE0SS6HFNPFTYHX2.jpg',	'UMKM 1',	'<p>UMKM 1</p>',	NULL,	'2025-01-16 10:09:46',	'2025-01-16 10:09:46',	4);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'INVESTOR' COMMENT 'ADMIN | INVESTOR',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `roles`) VALUES
(1,	'admin',	'admin@test.test',	NULL,	'$2y$12$jl3A/J0nSv5iTjBgZkCKy.nOEHTgY/E4en2LqFJRby72Ua4N2H5XO',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2025-01-07 16:42:17',	'2025-01-07 16:42:17',	'ADMIN'),
(2,	'investor',	'investor@investor.com',	NULL,	'$2y$12$JpR/XU69kIVnCQjuszKlZefXbiQgOX0P5mnNh1hBUH5B5FgY//wDi',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2025-01-09 09:51:49',	'2025-01-09 09:51:49',	'INVESTOR'),
(3,	'investor2',	'investor2@investor2.com',	NULL,	'$2y$12$.WwcYnrO65eRExeiskbZBOVz9H22tNdbvPW2gVyn.ggVWqFRITNHq',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2025-01-13 21:33:39',	'2025-01-13 21:33:39',	'INVESTOR'),
(4,	'umkm',	'umkm@umkm.com',	NULL,	'$2y$12$ih2F90/xyes4LLYU/4WeBOnc8Xiq5EIY3oD3NwgOmOSjri8eo68sW',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2025-01-16 09:51:36',	'2025-01-16 09:51:36',	'UMKM');

-- 2025-01-17 03:29:19
