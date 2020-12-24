-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 25, 2020 at 12:38 AM
-- Server version: 8.0.22-0ubuntu0.20.04.3
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitani`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int UNSIGNED NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` int UNSIGNED NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Show','Hide') COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `thumbnail`, `penulis`, `konten`, `status`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 'Cara menanam cabai dengan benar gan', 'Lorem Ipsum dolor sist amet', 1, 'lorem', 'Show', 'konten/zJM3ahmP.jpeg', '2020-12-05 09:40:58', '2020-12-21 22:52:15'),
(3, 'Cara menanam cabai dengan benar Bos', 'Lorem Ipsum dolor sist amet', 1, '<p>Lorem ipsum dolor sit amet</p>', 'Hide', 'konten/vH5kOLMx.png', '2020-12-05 09:57:49', '2020-12-21 22:57:04'),
(7, 'Budi Daya Cabai Merah', 'Budidaya mengenai cabai merah', 1, '<p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; font-family: roboto, sans-serif; font-size: 15px;\"><font color=\"#000000\"><span style=\"font-family: Tahoma;\">Cabai merah merupakan salah satu komoditas pertanian yang paling atraktif. Pada saat tertentu harganya bisa naik berlipat-lipat, sedangkan pada momen lain, bisa turun hingga tak berharga. Hal inilah yang membuat budi daya cabai merah menjadi tantangan tersendiri bagi para petani. Tanaman cabai merah bisa tumbuh dengan baik di dataran rendah hingga dataran tinggi yang memiliki ketinggian 1400 mdpl. Di dataran tinggi, cabai merah masih bisa tumbuh subur namun produksinya tidak maksimal. Suhu yang optimal untuk pertumbuhan cabai merah adalah antara 24-28</span><span style=\"font-size: 11.25px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; font-family: Tahoma;\">o</span><span style=\"font-family: Tahoma;\">C. Sementara, curah hujan yang dikehendaki berkisar 800-2000 mm per tahun dengan kelembaban 80%. Cabai merah sendiri dapat tumbuh pada musim kemarau asal mendapatkan pengairan yang cukup. Budi daya cabai merah sendiri bisa dikatakan gampang-gampang susah, tergantung dengan kesiapan petani dan juga pengaruh dari cuaca dan iklim. Berikut merupakan cara mudah dalam membudidayakan cabai merah.&nbsp;</span></font></p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; font-family: roboto, sans-serif; font-size: 15px;\"><strong><span style=\"font-family: Tahoma;\"><font color=\"#000000\">Persiapan Benih</font></span></strong></p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; font-family: roboto, sans-serif; font-size: 15px;\"><span style=\"font-family: Tahoma;\"><font color=\"#000000\">Langkah pertama yang harus dilakukan dalam menanam cabai merah adalah pemilihan benih. Benih sebaiknya dipilih yang berkualitas dan disesuaikan dengan lokasi penanaman serta nilai ekonominya. Benihberkualitas ditandai dengan ukurannya yang besar, bentuknya sempurna, sehat atau tidak cacat serta memiliki daya berkecambah yang baik.</font></span></p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; font-family: roboto, sans-serif; font-size: 15px;\"><font color=\"#000000\"><strong><span style=\"font-family: Tahoma;\">Penyemaian&nbsp;</span></strong><strong><span style=\"font-family: Tahoma;\">B</span></strong><strong><span style=\"font-family: Tahoma;\">enih</span></strong></font></p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; font-family: roboto, sans-serif; font-size: 15px;\"><font color=\"#000000\"><span style=\"font-family: Tahoma;\">Sebelum menjadi bibit, benih cabai perlu disemaikan terlebih dahulu. Penyemaian dilakukan untuk menyeleksi bibit yang sudah tumbuh dan juga kuat untuk ditanam pada lahan yang lebih luas. Penyemaian biasa dilakukan dalam</span><i>&nbsp;polybag</i><span style=\"font-family: Tahoma;\">&nbsp;yang berukuran 5x10 cm.&nbsp;</span><i>Polybag</i><span style=\"font-family: Tahoma;\">&nbsp;diisi dengan media tanam berupa campuran tanah, kompos dan arang sekam dengan perbandingan 1:1:1 sebanyak ¾ bagian. Selagi menyiapkan media tanam, dapat juga sembari dilakukan perendaman benih guna merangsang pertumbuhan benih cabai. Benih biasanya direndam dalam air hangat selama kurang lebih 6 jam. Setelah selesai, baru benih dapat ditanam tipis-tipis (sedalam 1,5 cm) dalam&nbsp;</span><i>polybag</i><span style=\"font-family: Tahoma;\">. Sebagai informasi tambahan, agar benih yang ditanam berhasil tumbuh baik, maka sebaiknya tempat penyemaian bisa diberi naungan agar terhindar dari teriknya sinar matahari langsung, terpaan angin dan juga derasnya hujan.</span></font></p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; font-family: roboto, sans-serif; font-size: 15px;\"><font color=\"#000000\"><strong><span style=\"font-family: Tahoma;\">Pengolahan&nbsp;</span></strong><strong><span style=\"font-family: Tahoma;\">L</span></strong><strong><span style=\"font-family: Tahoma;\">ahan</span></strong></font></p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; font-family: roboto, sans-serif; font-size: 15px;\"><span style=\"font-family: Tahoma;\"><font color=\"#000000\">Pengolahan tanah sebaiknya dilakukan bersamaan dengan saat memulai pembibitan. Hal ini bertujuan agar lahan sudah siap ketika bibit cabai siap untuk dipindahkan. Pengolahan lahan bisa dimulai dengan melakukan pembajakan sedalam 40 cm untuk menghilangkan biji-biji gulma gulma yang masih tertanam di dalam tanah. Selanjutnya, dibuat bedengan dengan tinggi 40 cm, lebar 1 m dan panjang menyesuaikan dengan panjang lahan. Sementara itu, jarak antar bedengan dapat dibuat sejauh 60 cm untuk memudahkan pemeliharan. Selain itu perlu juga dibuat drainese yang baik karena tanaman cabai merah tidak menyukai genangan air. Pemberian pupuk organik seperti pupuk kandang atau pupuk kompos dapat dilakukan pada setiap bedengan yang sudah selesai dibuat. Budi daya cabai merah biasanya membutuhkan pupuk organik sebanyak 20 ton/ha, namun diperlukan juga tambahan pupuk KCL sebanyak 200kg/ha dan urea 350kg/ha.</font></span></p><div><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; font-family: roboto, sans-serif; font-size: 15px;\"><font color=\"#000000\"><strong><span style=\"font-family: Tahoma;\">Pindah&nbsp;</span></strong><strong><span style=\"font-family: Tahoma;\">T</span></strong><strong><span style=\"font-family: Tahoma;\">anam</span></strong></font></p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; font-family: roboto, sans-serif; font-size: 15px;\"><font color=\"#000000\"><span style=\"font-family: Tahoma;\">Setelah bibit memiliki 3-4 helai daun atau ketika bibit sudah berumur sekitar 3 minggu, maka bibit sudah dapat dipindahkan ke lahan tanam yang lebih luas. Sebaiknya pindah tanam dilakukan secara serentak dalam satu hari pada saat pagi atau sore hari agar terhindar dari stress tanaman. Untuk penanamannya, bibit cabai merah bisa dimasukkan bersamaan dengan media tanamnya ke dalam lubang tanam dengan cara merobek atau membuka plastik&nbsp;</span><i>polybag</i><span style=\"font-family: Tahoma;\">-nya. Usahakan agar media tanam tetap utuh dan tidak terpecah. Dalam satu bedengan, dibuat dua baris lubang tanam dengan kedalaman 10 cm atau bisa disesuaikan dengan ukuran</span><i>&nbsp;polybag</i><span style=\"font-family: Tahoma;\">&nbsp;tempat menyemai. Sebaiknya, lubang tanam dibuat tidak sejajar atau zig zag agar sirkulasi udara tetap teratur dan mampu menetrasi sinar matahari.</span></font></p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; font-family: roboto, sans-serif; font-size: 15px;\"><strong><span style=\"font-family: Tahoma;\"><font color=\"#000000\">Pemeliharaan</font></span></strong></p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; font-family: roboto, sans-serif; font-size: 15px;\"><font color=\"#000000\"><span style=\"font-family: Tahoma;\">Penyiraman diperlukan saat musim kemarau saja. Bila kondisi terlalu kering tanaman cabai bisa mati. Pengairan bisa dilakukan dengan kocoran atau merendam bedengan. Perendaman bedengan cukup dilakukan setiap dua minggu sekali. Sementara itu, penyiangan dapat dilakukan jika lahan yang digunakan tidak menggunakan mulsa plastik.Setelah satu bulan, dapat dilakukan pemotongan tunas untuk tanaman cabai yang ditanam pada dataran tinggi, sedangkan untuk dataran rendah dapat dilakukan pemotongan tunas setelah tanaman berumur tiga minggu. Tunas yang terdapat pada ketiak daun dipotong secara rutin hingga munculnya cabang utama yang ditandai dengan munculnya bunga pertama atau kedua. Selanjutnya dilakukan&nbsp;</span><font color=\"#000000\"><a href=\"https://8villages.com/full/petani/article/id/5b77ba428aefb01037f44454\" style=\"background: rgb(255, 255, 255);\"><font color=\"#000000\">pemupukan susulan pada tanaman cabai</font></a><span style=\"font-family: Tahoma;\">&nbsp;setiap dua minggu sekali hingga panen terakhir. Perlu juga dilakukan pengendalian OPT untuk mengendalikan&nbsp;</span><a href=\"https://8villages.com/full/petani/article/id/5c4fbda1ce212bb21780a0da\" style=\"background: rgb(255, 255, 255);\"><font color=\"#000000\">penyakit utama pada tanaman cabai</font></a><span style=\"font-family: Tahoma;\">.</span></font></font></p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; font-family: roboto, sans-serif; font-size: 15px;\"><strong><span style=\"font-family: Tahoma;\"><font color=\"#000000\">Pemanenan</font></span></strong></p><p style=\"text-align: justify; margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px;\"><span style=\"font-family: Tahoma;\"><font color=\"#000000\">Cabai merah dapat dipanen setelah berumur 75-85 hari sejak tanam. Proses pemanenan cabai merah ini dapat dilakukan berkali-kali, tergantung pada jenis cabai, kondisi lahan, dan teknik budidayanya. Jika budi daya yang dilakukan optimal maka hasil panen bisa mencapai 20 ton/ha.</font></span></p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px;\"><br style=\"color: rgb(128, 128, 128); font-family: roboto, sans-serif; font-size: 15px;\"></p></div>', 'Show', 'konten/wUmUoj3M.jpeg', '2020-12-21 07:24:34', '2020-12-21 07:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `cabai`
--

CREATE TABLE `cabai` (
  `id` int UNSIGNED NOT NULL,
  `jenis_cabai` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_latin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Show','Hidden') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cabai`
--

INSERT INTO `cabai` (`id`, `jenis_cabai`, `nama_latin`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cabai Merah', 'Capsicum annuum L.', 'Show', '2020-12-16 00:29:05', '2020-12-21 07:10:35'),
(2, 'Tanjung-1', 'Capsicum annuum L.', 'Show', '2020-12-21 07:11:17', '2020-12-21 07:11:17'),
(3, 'Tanjung-2', 'Capsicum annuum L.', 'Show', '2020-12-21 07:12:17', '2020-12-21 07:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int UNSIGNED NOT NULL,
  `id_penyakit` int UNSIGNED NOT NULL,
  `nama_gejala` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `id_penyakit`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(1, 1, 'Daun rontok', '2020-12-16 00:57:36', '2020-12-21 06:44:19'),
(2, 1, 'Batang rusak', '2020-12-16 04:36:17', '2020-12-21 06:44:04'),
(3, 1, 'Akar rusak', '2020-12-17 23:36:39', '2020-12-21 06:42:34'),
(4, 1, 'Daun coklat', '2020-12-21 06:43:07', '2020-12-21 06:43:07'),
(5, 2, 'Daun rontok', '2020-12-21 06:43:33', '2020-12-21 06:43:33'),
(6, 2, 'Daun berubah warna', '2020-12-21 06:44:45', '2020-12-21 06:44:45'),
(7, 2, 'Tulang daun menguning', '2020-12-21 06:45:18', '2020-12-21 06:45:18'),
(8, 2, 'Buah mengecil', '2020-12-21 06:45:44', '2020-12-21 06:45:44'),
(9, 3, 'Daun layu', '2020-12-21 06:46:33', '2020-12-21 06:46:33'),
(10, 3, 'Batang menguning tidak berlendir', '2020-12-21 06:47:10', '2020-12-21 06:47:10'),
(11, 3, 'Akar coklat', '2020-12-21 06:47:35', '2020-12-21 06:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `lahan`
--

CREATE TABLE `lahan` (
  `id` int UNSIGNED NOT NULL,
  `id_cabai` int UNSIGNED NOT NULL,
  `id_petani` int UNSIGNED NOT NULL,
  `nama_lahan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_tanam` date NOT NULL,
  `status` enum('Produktif','Nonproduktif') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lahan`
--

INSERT INTO `lahan` (`id`, `id_cabai`, `id_petani`, `nama_lahan`, `luas`, `tanggal_tanam`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Petak A', '100', '2020-12-16', 'Nonproduktif', '2020-12-17 13:03:26', '2020-12-17 15:31:33'),
(2, 1, 5, 'Lahan 1', '500', '2020-08-02', 'Nonproduktif', '2020-12-17 19:08:15', '2020-12-17 19:09:55'),
(3, 1, 7, 'adib', '1000', '2020-09-24', 'Nonproduktif', '2020-12-17 19:19:04', '2020-12-21 07:00:05'),
(4, 1, 5, 'Lahan 2', '400', '2020-12-18', 'Nonproduktif', '2020-12-17 23:20:44', '2020-12-21 07:03:39'),
(5, 1, 5, 'Luthfi', '100', '2020-10-12', 'Nonproduktif', '2020-12-21 06:39:44', '2020-12-21 06:41:38'),
(6, 1, 5, 'Olsavira Farm', '500', '2020-12-21', 'Produktif', '2020-12-21 06:41:27', '2020-12-21 06:41:27'),
(7, 1, 7, 'adib', 'pe', '2020-12-21', 'Produktif', '2020-12-21 07:04:36', '2020-12-21 07:04:36'),
(8, 1, 7, 'adib', '1000', '2020-12-21', 'Produktif', '2020-12-21 07:06:51', '2020-12-21 07:06:51'),
(9, 1, 7, 'blaba', '100', '2020-12-20', 'Produktif', '2020-12-21 07:12:19', '2020-12-21 07:12:19'),
(10, 1, 10, 'Lahan1', '500', '2020-12-21', 'Produktif', '2020-12-21 09:28:59', '2020-12-21 09:28:59'),
(11, 1, 3, 'Lahan Utara', '500', '2020-12-22', 'Produktif', '2020-12-21 22:55:54', '2020-12-21 22:55:54'),
(12, 1, 2, 'Lahan B', '50', '2020-12-01', 'Nonproduktif', '2020-12-21 23:19:01', '2020-12-21 23:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(18, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(19, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(20, '2016_06_01_000004_create_oauth_clients_table', 1),
(21, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2020_11_15_161328_change_table_users', 1),
(24, '2020_11_26_181929_create_pupuk', 1),
(25, '2020_11_26_181950_create_penyakit', 1),
(26, '2020_11_27_005706_create_penanggulangan', 1),
(27, '2020_11_27_010755_create_cabai', 1),
(28, '2020_11_29_174814_change_table_cabai', 1),
(29, '2020_12_04_031657_create_artikel', 2),
(30, '2020_12_05_113525_add_gambar', 3),
(31, '2020_12_09_145941_add_thumnail', 4),
(32, '2020_12_15_185154_remove_colom', 5),
(33, '2020_12_15_185602_remove_colom_pencegahan', 6),
(34, '2020_12_15_185715_create_table_gejala', 7),
(35, '2020_12_15_190013_create_rekomendasi_pupuk', 8),
(36, '2020_12_15_190103_change_gejala', 8),
(37, '2020_12_15_190529_create_lahan', 9),
(38, '2020_12_15_190559_create_panen', 9),
(39, '2020_12_15_191220_drop_penanggulangan', 9),
(40, '2020_12_15_191402_change_column_estimasi', 10),
(41, '2020_12_15_191456_change_column_status', 11);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('017050f7bf954ac1900cd1ac2ceecab747b541202d3e61d6f47f99ac51b6338bb2fbb1c7177f5b7a', 1, 1, 'nApp', '[]', 0, '2020-12-01 02:12:07', '2020-12-01 02:12:07', '2021-12-01 09:12:07'),
('117a5f7d823b051f71d32473f705cea1ee713781cb2d2f029691930bb3c6e5f36c505c04d0d770fa', 6, 1, 'nApp', '[]', 0, '2020-12-17 21:59:57', '2020-12-17 21:59:57', '2021-12-18 04:59:57'),
('121b96072937755b3190ea3db58e85897b97e01ba13bf9fb4d32b6a97cac4aaeef92202273a7a01a', 5, 1, 'nApp', '[]', 0, '2020-12-17 23:38:53', '2020-12-17 23:38:53', '2021-12-18 06:38:53'),
('3201dc6064b037f861cdde685a95bfd0a31c80ba34d159497acb585b29f437099b0e2bc5c75ee174', 6, 1, 'nApp', '[]', 0, '2020-12-10 19:10:58', '2020-12-10 19:10:58', '2021-12-11 02:10:58'),
('38441271a199f417cdbb4cad2bb5f24621ffb13451b6696aa8d8f8ba3ebbaa3b1769ec7fdf4ba1dc', 2, 1, 'nApp', '[]', 0, '2020-12-21 22:59:39', '2020-12-21 22:59:39', '2021-12-22 05:59:39'),
('45a215ef8aa1e64cd426c200d6d0be6a32ada23c079193c39829f4f9a71a633fa931b172792698ae', 5, 1, 'nApp', '[]', 0, '2020-12-10 19:10:06', '2020-12-10 19:10:06', '2021-12-11 02:10:06'),
('54e1dc1c7a8d79df3937b7f52ab43abc1c231cf1d9da163341191a5fa8f26a96dfce648c0066d2c2', 5, 1, 'nApp', '[]', 0, '2020-12-17 19:04:35', '2020-12-17 19:04:35', '2021-12-18 02:04:35'),
('5c4f479cd0a5e20df9a373e1822a5afe40d223a57700d62e77cbe14fcd20e334b43670d1fe82009a', 5, 1, 'nApp', '[]', 0, '2020-12-01 05:20:10', '2020-12-01 05:20:10', '2021-12-01 12:20:10'),
('5ca47ca530dce8d16e1452a6d276d3df59bf34cbe3603691f7b60b71482470919283ac6ed8b42822', 2, 1, 'nApp', '[]', 0, '2020-12-10 10:13:23', '2020-12-10 10:13:23', '2021-12-10 17:13:23'),
('5cf34a5de2191357482402934105c6869aaf71d74586ac03eb30d0d7e1bd1e555fcc19027eb07c77', 11, 1, 'nApp', '[]', 0, '2020-12-21 22:11:50', '2020-12-21 22:11:50', '2021-12-22 05:11:50'),
('83e8eb921cbe6e953749c1fbf7b99bfcee5bf46ca71b474b0297075f47295282c99f0dbaded95347', 5, 1, 'nApp', '[]', 0, '2020-12-17 23:13:46', '2020-12-17 23:13:46', '2021-12-18 06:13:46'),
('8eeb662d488bf3023b205cf8eed4b33132e6cd4315b9cc7fd4430f0e1fc9e050cec1b7cfdac2443a', 2, 1, 'nApp', '[]', 0, '2020-12-21 22:59:21', '2020-12-21 22:59:21', '2021-12-22 05:59:21'),
('95d637eb9f1da39c224d1bce5227db8ec80c82428424eda4b7361fad96946aac8e9588c4bc596524', 7, 1, 'nApp', '[]', 0, '2020-12-10 20:27:16', '2020-12-10 20:27:16', '2021-12-11 03:27:16'),
('9d7a3e2c32f55941cd0445700bb9ca3885f9b80143a7559a7b07667cea6b260383527522adbb6f51', 5, 1, 'nApp', '[]', 0, '2020-12-01 05:17:48', '2020-12-01 05:17:48', '2021-12-01 12:17:48'),
('a6bba740f21967a5c2e2de0d69eababc585963d0cec04e420df723db7b7492fddf8229c1e3237444', 10, 1, 'nApp', '[]', 0, '2020-12-21 09:24:23', '2020-12-21 09:24:23', '2021-12-21 16:24:23'),
('a855628e4ef4d9a6abf7443e7ab1d38871d4a40c237f25710148d04f7d0c63ed9e9dae021fcd0df8', 2, 1, 'nApp', '[]', 0, '2020-12-01 02:22:33', '2020-12-01 02:22:33', '2021-12-01 09:22:33'),
('a96fd057916f30a38550666d750599c53649711253ddc101b61c30490fd3fa02da86563e3bc213be', 11, 1, 'nApp', '[]', 0, '2020-12-21 22:31:11', '2020-12-21 22:31:11', '2021-12-22 05:31:11'),
('c71b1261b96afc94e9bca5ff2b464cdf57a3633c0103d3a65b6044c124be32e4419abbae30382a85', 5, 1, 'nApp', '[]', 0, '2020-12-10 21:14:08', '2020-12-10 21:14:08', '2021-12-11 04:14:08'),
('d6e7d359c3530845e90bee426075da90f55bc4526a3510bef24561d0fbbe7587201b6e4d0620a5fb', 5, 1, 'nApp', '[]', 0, '2020-12-21 06:34:25', '2020-12-21 06:34:25', '2021-12-21 13:34:25'),
('df7b9cf04ae4ed86c8a8e479d007b69d3f06ebe531a25931c07b95b1e5b6373c04ff92aaddf9a591', 2, 1, 'nApp', '[]', 0, '2020-12-01 02:23:26', '2020-12-01 02:23:26', '2021-12-01 09:23:26'),
('e4dd22b5a945495fa3195fc431d1f31162402b567551593ec38791463a0026db5bf7a0d6c0fce373', 1, 1, 'nApp', '[]', 0, '2020-12-17 12:59:15', '2020-12-17 12:59:15', '2021-12-17 19:59:15'),
('e6a73da7e1c09db4a22a897ef7ebaa56d0e9240d13d2114fd3366bb5c9205ced2dcf19995e8322d6', 3, 1, 'nApp', '[]', 0, '2020-12-01 05:01:42', '2020-12-01 05:01:42', '2021-12-01 12:01:42'),
('efab759eaa25571b1546255afe0cd2f5550792ddac95b7a91d7157e1448d8009ea66eb5af81419da', 3, 1, 'nApp', '[]', 0, '2020-12-21 22:35:02', '2020-12-21 22:35:02', '2021-12-22 05:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'fMtYP6l4pSoU4qaWViz2BOigiMF0VX0GuZMnJRwC', NULL, 'http://localhost', 1, 0, 0, '2020-12-01 02:11:23', '2020-12-01 02:11:23'),
(2, NULL, 'Laravel Password Grant Client', 'CAnkRZfYF5fVMHTJ5LS5xjthRZAwdO11FyjG8me7', 'users', 'http://localhost', 0, 1, 0, '2020-12-01 02:11:24', '2020-12-01 02:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-12-01 02:11:24', '2020-12-01 02:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panen`
--

CREATE TABLE `panen` (
  `id` int UNSIGNED NOT NULL,
  `id_lahan` int UNSIGNED NOT NULL,
  `tanggal_panen` date NOT NULL,
  `hasil` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `panen`
--

INSERT INTO `panen` (`id`, `id_lahan`, `tanggal_panen`, `hasil`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-11-13', 100, '2020-12-17 15:20:15', '2020-12-17 15:20:15'),
(2, 1, '2020-12-01', 200, '2020-12-17 15:28:34', '2020-12-17 15:28:34'),
(3, 1, '2020-12-02', 100, '2020-12-17 15:30:05', '2020-12-17 15:30:05'),
(4, 2, '2020-09-30', 8, '2020-12-17 19:09:29', '2020-12-17 19:09:29'),
(5, 2, '2020-11-28', 7, '2020-12-17 19:09:52', '2020-12-17 19:09:52'),
(6, 4, '2021-04-18', 400, '2020-12-17 23:21:12', '2020-12-17 23:21:12'),
(7, 5, '2020-12-25', 300, '2020-12-21 06:40:09', '2020-12-21 06:40:09'),
(8, 5, '2021-01-21', 900, '2020-12-21 06:40:26', '2020-12-21 06:40:26'),
(9, 5, '2021-02-27', 100, '2020-12-21 06:41:10', '2020-12-21 06:41:10'),
(10, 5, '2021-03-26', 80, '2020-12-21 06:41:36', '2020-12-21 06:41:36'),
(11, 6, '2020-12-22', 10, '2020-12-21 06:42:01', '2020-12-21 06:42:01'),
(12, 6, '2021-01-31', 50, '2020-12-21 06:42:50', '2020-12-21 06:42:50'),
(13, 3, '2020-12-21', 300, '2020-12-21 06:53:58', '2020-12-21 06:53:58'),
(14, 3, '2020-12-22', 100, '2020-12-21 07:00:00', '2020-12-21 07:00:00'),
(15, 4, '2020-12-22', 40, '2020-12-21 07:03:35', '2020-12-21 07:03:35'),
(16, 9, '2020-12-21', 100, '2020-12-21 07:19:13', '2020-12-21 07:19:13'),
(17, 11, '2020-12-31', 500, '2020-12-21 22:56:09', '2020-12-21 22:56:09'),
(18, 12, '2020-12-31', 100, '2020-12-21 23:19:33', '2020-12-21 23:19:33');

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
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penanganan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Show','Hidden') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`, `deskripsi`, `penanganan`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bercak Daun', '<span style=\"color: rgb(51, 51, 51); font-family: &quot;Times New Roman&quot;; font-size: 18px;\">Penyakit bercak daun adalah penyakit yang banyak dijumpai pada cabai merah. Penyakit ini disebabkan oleh cendawan&nbsp;</span><em style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: ProximaNova, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Cescospora capsici</span></em><span style=\"color: rgb(51, 51, 51); font-family: &quot;Times New Roman&quot;; font-size: 18px;\">. Jamur ini membentuk konidium (spora aseksual) berbentuk pada jenjang bersekat 3-12 dengan ukuran 6-200 x 3-5 µm, konidifor (hifa yang membentuk spora aseksual) pendek bersekat. Hifa pada umumnya bersepta (bersekat) dan terdiri dari sel berinti tunggal. Jamur mampu bertahan dalam waktu lama dengan kondisi yang kurang cocok. Bro</span>\r\n', '<ul style=\"margin-right: 0px; margin-bottom: 24px; margin-left: 30px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: 1.5; font-family: ProximaNova, sans-serif; vertical-align: baseline; color: rgb(51, 51, 51);\"><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Bagian yang terkena penyakit ini segera dimusnahkan dengan cara dibakar dan dibuang di tempat yang jauh dari lahan</span></li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Penggunaan bibit dan alat alat pertanian yang bebas dari infeksi patogen ini.</span></li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Perlu dipilih lokasi yang terhindar dai aliran limpasan air hujan.</span></li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Penggunaan mulsa dan pengaturan jarak tanam. Jarak tanam yang rapat akan menyebabkan perkembangan penyakit semakin cepat.</span></li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Agen antagonis&nbsp;</span><em style=\"margin: 0px; padding: 0px; border: 0px; font-variant: inherit; font-weight: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; vertical-align: baseline;\"><span style=\"font-family: &quot;Times New Roman&quot;;\">Triconerma</span></em><span style=\"font-family: &quot;Times New Roman&quot;;\">&nbsp;sp dapat digunakan untuk menghambat pertumbuhan cendawan ini.</span></li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"font-family: &quot;Times New Roman&quot;;\">tambah update</span></li><li style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><span style=\"font-family: &quot;Times New Roman&quot;;\">update lagi</span></li></ul>', 'hama/6Uk0VTB6.png', 'Show', '2020-12-15 23:09:08', '2020-12-20 06:26:03'),
(2, 'Virus Mozaik', '<div style=\"text-size-adjust: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(117, 117, 117); font-family: Arial, sans-serif;\">CMV atau Cucumber Mosaic Virus sangat umum dijumpai dan gejala-gejala yang timbul pada tanaman akan sangat beragam. Pada umumnya, virus ini biasa disebarkan oleh kutu daun (Aphid) yang menghinggapi banyak tanaman.</div><div style=\"text-size-adjust: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(117, 117, 117); font-family: Arial, sans-serif;\">&nbsp;</div><div style=\"text-size-adjust: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(117, 117, 117); font-family: Arial, sans-serif;\">Untuk gejala dari CMV ini dimulai dari bercak kuning pada daun. Lalu, lembaran daun akan menyempit (shoe string). Buah yang terinfeksi virus CMV akan berbentuk tidak rata, abnormal dan kadang muncul bercak cokelat seperti &nbsp;cincin atau huruf C. Anda bisa mengidentifikasi tanaman yang terjangkiti virus ini dengan tes ELISA (Enzim-Linked Immunosorbent Assay) di Laboratorium. &nbsp;Virus ini bersifat terbawa benih.</div>', '<ul><li style=\"text-size-adjust: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(117, 117, 117); font-family: Arial, sans-serif;\">monitoring dan sanitasi terhadap gulma. </li><li style=\"text-size-adjust: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(117, 117, 117); font-family: Arial, sans-serif;\">Untuk jarak tanam, anda bisa atur agar jarak antar tanaman tidak terlalu sempit. </li><li style=\"text-size-adjust: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(117, 117, 117); font-family: Arial, sans-serif;\">Bila memang ada tanaman yang sudah terjangkiti, anda bisa musnahkan segera tanaman yang terinfeksi. </li><li style=\"text-size-adjust: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(117, 117, 117); font-family: Arial, sans-serif;\">Biasakan cucilah tangan sesudah memegang atau menyentuh tanaman yang sakit. </li><li style=\"text-size-adjust: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(117, 117, 117); font-family: Arial, sans-serif;\">Untuk pengendalian hama pembawa CMV, anda bisa gunakan insektisida berbahan aktif seperti Abamektin, Deltametrin, dan Alfa &nbsp;Sipermetrin. &nbsp;</li><li style=\"text-size-adjust: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(117, 117, 117); font-family: Arial, sans-serif;\">Penggunaan varietas tanaman yang sudah tahan dengan virus CMV bisa anda lakukan. </li><li style=\"text-size-adjust: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(117, 117, 117); font-family: Arial, sans-serif;\">Pencucian dengan Tri Sodium Phosphat (Na 3 PO4) 10% (100 gr/liter air) selama setengah atau satu jam bisa sebagai perlakuan pencegahan awal pada benih sebelum disemai.</li></ul><div style=\"text-size-adjust: none; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-size: 12px; margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: top; color: rgb(117, 117, 117); font-family: Arial, sans-serif;\">&nbsp;</div>', 'hama/k6A2K4UN.jpeg', 'Show', '2020-12-17 22:08:01', '2020-12-17 22:08:01'),
(3, 'Layu Fusarium', '<p style=\"text-align: justify; \"><span style=\"color: rgb(0, 0, 0); font-family: Tahoma; font-size: 16px;\">Layu fusarium sendiri merupakan penyakit yang disebabkan oleh infeksi jamur patogen Fusarium oxysporum.&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-family: Tahoma; font-size: 16px;\">Layu fusarium bisa menyerang tanaman cabai kapan saja, terutama pada musim hujan seperti sekarang ini. Pada musim hujan jamur Fusarium oxysporum mudah berkembang biak dan mudah menyebar dari satu tanaman ketanaman lainnya. Tingkat kelembaban udara yang tinggi sangat berpengaruh terhadap perkembangbiakan jamur ini, terlebih lagi jika terjadi genangan air hujan dilahan dan pH tanah yang rendah.</span><br></p>', '<p style=\"text-align: justify; box-sizing: inherit; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-size: 16px; line-height: 30px; font-family: &quot;Helvetica Neue&quot;, &quot;Neue Helvetica&quot;, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); overflow-wrap: break-word;\"><strong style=\"box-sizing: inherit;\"><span style=\"font-family: Tahoma;\">Perlakuan trichoderma</span></strong><br style=\"box-sizing: inherit;\"></p><p style=\"text-align: justify; box-sizing: inherit; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-size: 16px; line-height: 30px; font-family: &quot;Helvetica Neue&quot;, &quot;Neue Helvetica&quot;, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); overflow-wrap: break-word;\"><span style=\"font-family: Tahoma;\">Trichoderma merupakan agensia hayati berupa jamur baik yang dapat melawan perkembangan jamur patogen, atau biasa disebut dengan fungisida alami. Fungisida alami ini sangat efektif dan efisien untuk mencegah layu fusarium. Cara penggunaannya adalah dengan mencampurkannya dengan pupuk kandang sebagai pupuk dasar atau bisa juga dengan dikocorkan pada setiap lubang tanaman.</span><br style=\"box-sizing: inherit;\"></p><p style=\"text-align: justify; box-sizing: inherit; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-size: 16px; line-height: 30px; font-family: &quot;Helvetica Neue&quot;, &quot;Neue Helvetica&quot;, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); overflow-wrap: break-word;\"><strong style=\"box-sizing: inherit;\">Mencabut tanaman bergejala</strong><br style=\"box-sizing: inherit;\"></p><p style=\"text-align: justify; box-sizing: inherit; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-size: 16px; line-height: 30px; font-family: &quot;Helvetica Neue&quot;, &quot;Neue Helvetica&quot;, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); overflow-wrap: break-word;\">Jika sudah terlihat adanya tanda-tanda tanaman layu karena layu fusarium, maka sebaiknya tanaman tersebut segera dicabut dan kemudian dibakar. Jika perlu, tanah bekas tanaman terserang tersebut juga dapat ikut dibuang atau dapat disemprotkan dengan fungisida kontak berbahan aktif klorotalonil atau tembaga hidroksida. Hal ini dilakukan untuk mencegah penularan yang lebih cepat ke tanaman yang masih sehat.<br style=\"box-sizing: inherit;\"></p><p style=\"text-align: justify; box-sizing: inherit; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-size: 16px; line-height: 30px; font-family: &quot;Helvetica Neue&quot;, &quot;Neue Helvetica&quot;, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); overflow-wrap: break-word;\"><strong style=\"box-sizing: inherit;\">Penggunaan pupuk yang tepat</strong><br style=\"box-sizing: inherit;\"></p><p style=\"text-align: justify; box-sizing: inherit; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-size: 16px; line-height: 30px; font-family: &quot;Helvetica Neue&quot;, &quot;Neue Helvetica&quot;, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); overflow-wrap: break-word;\">Mengurangi penggunaan pupuk berkadar N tinggi, seperti urea. Jika perlu, gunakan pupuk NPK. Penggunaan urea yang berlebihan akan menyebabkan tanaman sukulen dan mudah terserang penyakit ini.<br style=\"box-sizing: inherit;\"></p><p style=\"text-align: justify; box-sizing: inherit; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-size: 16px; line-height: 30px; font-family: &quot;Helvetica Neue&quot;, &quot;Neue Helvetica&quot;, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); overflow-wrap: break-word;\"><strong style=\"box-sizing: inherit;\">Rotasi tanaman</strong><br style=\"box-sizing: inherit;\"></p><p style=\"text-align: justify; box-sizing: inherit; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; font-size: 16px; line-height: 30px; font-family: &quot;Helvetica Neue&quot;, &quot;Neue Helvetica&quot;, Helvetica, Arial, sans-serif; color: rgb(0, 0, 0); overflow-wrap: break-word;\">Melakukan pergiliran tanam dengan tanaman yang tahan terhadap layu fusarium guna mengendalikan populasi dan perkembangan jamur fusarium oxysporum di lahan pertanian. Perlu untuk diketahu bahwa selain menyerang pada tanaman cabai, layu fusarium ini juga dapat menyerang pada tanaman tomat, terong, semangka, melon, pisang, jeruk, kubis, timun dan masih banyak yang lainnya.</p>', 'hama/kvgxeZZY.jpeg', 'Show', '2020-12-21 06:40:37', '2020-12-21 06:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `pupuk`
--

CREATE TABLE `pupuk` (
  `id` int UNSIGNED NOT NULL,
  `nama_pupuk` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kandungan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aturan_pakai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Pupuk','Pestisida') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` enum('Organik','Kimia') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Show','Hidden') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pupuk`
--

INSERT INTO `pupuk` (`id`, `nama_pupuk`, `deskripsi`, `kandungan`, `aturan_pakai`, `gambar`, `harga`, `type`, `jenis`, `status`, `created_at`, `updated_at`) VALUES
(1, 'B614', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span><br></p>', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span><br></p>', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</span><br></p>', 'pestisida/3SmxzosN.png', '30000', 'Pupuk', 'Organik', 'Show', '2020-12-01 03:08:20', '2020-12-01 03:08:20'),
(2, 'B615', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;</span><br></p>', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;</span><br></p>', '<p><strong style=\"margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry.&nbsp;</span><br></p>', 'pestisida/L7Plv4Co.png', '30000', 'Pupuk', 'Organik', 'Show', '2020-12-01 05:18:57', '2020-12-01 05:18:57'),
(3, 'Phonska atau NPK', '<p>Lorem&nbsp;</p>', '<p>Lorem</p>', '<p>Lorem</p>', 'pestisida/mY1Iiywe.png', '30000', 'Pupuk', 'Organik', 'Show', '2020-12-10 18:58:22', '2020-12-10 18:58:22'),
(4, 'Pupuk Daun', '<ol class=\"X5LH0c\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\"><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Trips/Kemreki (Thrips parvispinus)</li></ol>', '<ol class=\"X5LH0c\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\"><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Trips/Kemreki (Thrips parvispinus)</li></ol>', '<ol class=\"X5LH0c\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\"><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Trips/Kemreki (Thrips parvispinus)</li></ol>', 'pestisida/QfRPryPC.png', '30000', 'Pupuk', 'Organik', 'Show', '2020-12-10 19:35:10', '2020-12-10 19:35:10'),
(5, 'GA3', '<ol class=\"X5LH0c\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\"><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">lorem</li></ol>', '<ol class=\"X5LH0c\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\"><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Trips/Kemreki (Thrips parvispinus)</li></ol>', '<ol class=\"X5LH0c\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: 16px;\"><li class=\"TrT0Xe\" style=\"margin: 0px 0px 4px; padding: 0px; list-style: inherit;\">Trips/Kemreki (Thrips parvispinus)</li></ol>', 'pestisida/5zYm83uX.png', '50000', 'Pupuk', 'Kimia', 'Show', '2020-12-10 19:37:02', '2020-12-21 07:15:28'),
(6, 'B617', '<p>Deskripsi pupuk</p>', '<p>kandungan pupuk</p>', '<p>Aturan pakai</p>', 'pestisida/yodJrHkJ.jpeg', '30000', 'Pupuk', 'Organik', 'Show', '2020-12-10 20:43:07', '2020-12-10 20:43:07'),
(7, 'Bisi 16', '<p>Pupuk kesehatan cabai</p>', '<p>Antioksidan dan zat besi</p>', '<p>penggunaan 2 kali dalam 1 minggu</p>', 'pestisida/2Zn7TnhM.png', '20000', 'Pestisida', 'Organik', 'Show', '2020-12-17 23:43:36', '2020-12-21 07:13:02'),
(8, 'ACROBAT 50 WP 40 gr', '<p style=\"text-align: justify; \"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Tahoma; white-space: pre-wrap;\">Fungisida Acrobat 50 WP berfungsi untuk mengendalikan penyakit pada tanaman yang disebabkan oleh jamur, seperti penyakit busuk daun, lanas, bercak daun, embun bulu dan bulai. </span><br></p>', '<p><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Tahoma; white-space: pre-wrap;\"> dimetomorf 50%</span><br></p>', '<p style=\"text-align: justify; \"><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Tahoma; white-space: pre-wrap;\">Dilakukan penyemprotan volume tinggi pada umur tanaman 21-70 HST. Penyemprotan dengan volume tinggi dilakukan apabila ditemukan gejala serangan dan kelembaban &gt;90%. Untuk jadwal penyemprotan pada interval 7-14 hari tergantung parah tidaknya serangan penyakitnya. Untuk tanaman jagung, pemberlakuanya pada benihnya. caranya setelah benih dibasahi air, campurkan secara merata.</span><br></p>', 'pestisida/m5o1Gyds.jpeg', '35000', 'Pestisida', 'Kimia', 'Show', '2020-12-21 07:26:42', '2020-12-21 07:36:42'),
(9, 'Bion M 1/48 WP 50 gr', '<p><span style=\"color: rgb(0, 0, 0); font-family: Tahoma; text-align: justify; white-space: pre-wrap;\">Fungisida Bion M 1/48 WP merupakan pestisida jenis fungisida yang bersifat sistemik dan kontak dengan kegunaan lainnya dari kandungannya. Bion M 1/48 WP diproduksi oleh PT. Syngenta Indonesia, salah satu perusahaan yang bergerak dalam farmasi atau pembuatan obat tanaman berkualitas dan terpercaya. </span><br></p>', '<p style=\"text-align: justify; \"><span style=\"font-family: Tahoma; white-space: pre-wrap; background-color: rgb(255, 255, 255);\"><font color=\"#000000\" style=\"\">mengandung bahan aktif Mankozeb 48% dan Asibensolar-S-Metil 1%</font></span><br></p>', '<p style=\"text-align: justify;\"><span style=\"font-family: Tahoma; text-align: start; white-space: pre-wrap;\"><font color=\"#000000\">dosis : 1,25-2,5 gram/liter </font></span></p><p style=\"text-align: justify;\"><span style=\"font-family: Tahoma; text-align: start; white-space: pre-wrap;\"><font color=\"#000000\">aturan pakai : lakukan penyemprotan volume tinggi.</font></span><span style=\"font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; white-space: pre-wrap;\"><font color=\"rgba(0, 0, 0, 0.8)\">\r\n</font></span></p><div><span style=\"color: rgba(0, 0, 0, 0.8); font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; white-space: pre-wrap;\"><br></span></div>', 'pestisida/JjkPIstz.jpeg', '170000', 'Pestisida', 'Kimia', 'Show', '2020-12-21 07:34:05', '2020-12-21 07:44:08'),
(10, 'SACOP 250 gr', '<p><span style=\"color: rgb(51, 51, 51); font-family: Tahoma;\">SACO-P Fungisida biologi untuk mengendalikan penyakit layu pada tanaman cabai&nbsp;</span><br></p>', '<p><span style=\"color: rgb(51, 51, 51); font-family: Tahoma;\">BAHAN AKTIF : Trichoderma koningli.</span><br style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">(Minimal 5x10-6 spora/g)</span><br></p>', '<p style=\"text-align: justify; \">Buat larutan semprot SACO-P dengan dosis 3-5 gr/liter air. Semprot seluruh bagian tanaman dan sekeliling leher akar tanaman yang terserang penyakit. Volume semprot 500 liter per hektar</p>', 'pestisida/gAHcltYh.jpeg', '50000', 'Pestisida', 'Kimia', 'Show', '2020-12-21 07:51:25', '2020-12-21 07:51:25'),
(11, 'TRICHODERMA 1,1 kg', '<p style=\"text-align: justify; \"><font color=\"#000000\"><span style=\"font-family: Tahoma;\">Dalam menangani penyakit tanaman pangan dan hortikultura, petani kita masih cenderung menggunakan pestisida / fungisida kimia. Akibat pengguna-an pestisida kimia yang berlebihan, dapat menimbulkan beberapa kerugian antara lain : timbulnya hama dan penyakit yang resistens / kebal yang sulit dikendalikan serta timbulnya pencemaran lingkungan.&nbsp;</span><span style=\"font-family: Tahoma;\">Alternatif untuk mengatasi masalah pengurangan penggunaan pestisida terse-but, telah diperkenalkan dengan penerapan konsep Pengendalian Hama Terpa-du (PHT) dengan memanfaatkan agens hayati untuk pengendalian penyakit tanaman Agen hayati Trichoderma harzianum adalah fungisida hayati yang berfungsi menghambat, merusak, membunuh penyakit tular tanah (mikroorganisme penyebab penyakit tumbuhan )&nbsp;</span></font><br></p>', '<p><span style=\"font-family: Tahoma; text-align: justify;\"><font color=\"#000000\">Trichoderma sp</font></span><br></p>', '<div style=\"text-align: justify; \"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-family: Tahoma;\"><b>Menaburkan Pada Bedengan</b></span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-family: Tahoma;\">Aplikasi Trichoderma pada Bedengan bisa dilakukan bersamaan permberian pupuk dasaran (kandang) dan ditebarkan secara merata di bedengan yang setengah jadi, bukan diberikan diatas bedengan yang telah jadi. Dosis nya kurang lebih 500 kg/ha ( atau pertanaman 20-25 gram).</span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-family: Tahoma;\">Nahh, dengan perlakuan tersebut harapan nya jamur atupun Patogen tular tanah yang ada di dasar bedengan tersebut bisa mati, jauh hari sebelum bibit ditanam.</span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-family: Tahoma;\">Dan pada akhirnya nanti perakaran tanaman bisa jauh lebih aman dari serangan penyakit Layu.</span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-family: Tahoma;\">&nbsp;</span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-family: Tahoma;\"><b>Menaburkan Pada Lubang Tanam</b></span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-family: Tahoma;\">Aplikasi Trichoderma pada lubang tanam dilakukan pada saat pindah tanam, dengan cara menaburkan Trichoderma di tiap lubang tanam. Jadi saat nanti bibit ditanam, maka posisi Trichoderma akan tepat langsung mengenai perakaran tanaman.</span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-family: Tahoma;\">Untuk dosis Trichoderma yang digunakan kira-kira sebesar kapsul obat. Saat ini dipasaran Trichoderma bisa anda temui dalam berbagi bentuk kemasan praktis, selain bentuk bubuk atau powder juga ada yang dalam bentuk Kapsul.</span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-family: Tahoma;\">&nbsp;</span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-family: Tahoma;\"><b>Pengocoran</b></span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-family: Tahoma;\">Selain ditaburkan pada bedengan dan lubang tanam, Trichoderma juga dapat diaplikasikan dengan cara di Kocor. Pengocoroan bisa dimulai saat tanaman berusia 7-10 HST (Hari Setelah Tanam). Dan ulangi setiap 10 hari sampai 4 kali perlakuan.</span></font></div><div style=\"text-align: justify; \"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-family: Tahoma;\">Jika anda mulai aplikasi saat umur 7 Hst, maka aplikasi berikut nya saat umur 14 hari, 21 dan 28 HST. Untuk dosis pengecoran sebanyak 1 sendok per 250 ml air/tanaman.</span></font></div>', 'pestisida/4ALfMCpR.jpeg', '65000', 'Pestisida', 'Kimia', 'Show', '2020-12-21 08:02:56', '2020-12-21 08:05:30'),
(12, 'Tes', '<p>Tes</p>', '<p>Tes</p>', '<p>Tes</p>', 'pestisida/kSMGktPx.jpeg', '45000', 'Pupuk', 'Organik', 'Hidden', '2020-12-21 23:00:36', '2020-12-21 23:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi_pupuk`
--

CREATE TABLE `rekomendasi_pupuk` (
  `id` int UNSIGNED NOT NULL,
  `id_penyakit` int UNSIGNED NOT NULL,
  `id_pupuk` int UNSIGNED NOT NULL,
  `aturan_pakai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekomendasi_pupuk`
--

INSERT INTO `rekomendasi_pupuk` (`id`, `id_penyakit`, `id_pupuk`, `aturan_pakai`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '<p><span style=\"color: rgba(49, 53, 59, 0.68); font-family: &quot;Times New Roman&quot;; font-size: 12px; white-space: pre-line; background-color: rgb(255, 255, 255);\">Penyemprotan volume tinggi pada umur 21-70 hari setelah tanam, apabila ditemukan gejala serangan dan kelembaban &gt;90% dengan interval 7-14 hari tergantung serangan penyakit.</span><br style=\"box-sizing: inherit; color: rgba(49, 53, 59, 0.68); font-family: &quot;open sans&quot;, tahoma, sans-serif; font-size: 12px; white-space: pre-line;\"><span style=\"color: rgba(49, 53, 59, 0.68); font-family: &quot;Times New Roman&quot;; font-size: 12px; white-space: pre-line;\">Setelah benih dibasahi dengan air, campurkan secara merata.</span><br></p>', '2020-12-17 00:41:01', '2020-12-21 07:41:23'),
(2, 1, 9, '<p style=\"text-align: justify;\"><span style=\"font-family: Tahoma; text-align: start; white-space: pre-wrap;\"><font color=\"#000000\">dosis : 1,25-2,5 gram/liter </font></span></p><p style=\"text-align: justify;\"><span style=\"font-family: Tahoma; text-align: start; white-space: pre-wrap;\"><font color=\"#000000\">aturan pakai : lakukan penyemprotan volume tinggi.</font></span><span style=\"font-family: Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, 文泉驛正黑, &quot;WenQuanYi Zen Hei&quot;, &quot;Hiragino Sans GB&quot;, &quot;儷黑 Pro&quot;, &quot;LiHei Pro&quot;, &quot;Heiti TC&quot;, 微軟正黑體, &quot;Microsoft JhengHei UI&quot;, &quot;Microsoft JhengHei&quot;, sans-serif; white-space: pre-wrap;\"><font color=\"rgba(0, 0, 0, 0.8)\">\r\n</font></span></p><div><span style=\"font-family: Tahoma; text-align: start; white-space: pre-wrap;\"><font color=\"#000000\"><br></font></span></div>', '2020-12-21 07:42:41', '2020-12-21 07:43:29'),
(3, 3, 10, '<p><span style=\"font-family: Tahoma;\"><font color=\"#000000\">Buat larutan semprot SACO-P dengan dosis 3-5 gr/liter air. Semprot seluruh bagian tanaman dan sekeliling leher akar tanaman yang terserang penyakit. Volume semprot 500 liter per hektar</font></span><br></p>', '2020-12-21 07:52:01', '2020-12-21 07:52:01'),
(4, 3, 11, '<div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-weight: 600;\">Menaburkan Pada Bedengan</span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\">Aplikasi Trichoderma pada Bedengan bisa dilakukan bersamaan permberian pupuk dasaran (kandang) dan ditebarkan secara merata di bedengan yang setengah jadi, bukan diberikan diatas bedengan yang telah jadi. Dosis nya kurang lebih 500 kg/ha ( atau pertanaman 20-25 gram).</font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\">Nahh, dengan perlakuan tersebut harapan nya jamur atupun Patogen tular tanah yang ada di dasar bedengan tersebut bisa mati, jauh hari sebelum bibit ditanam.</font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\">Dan pada akhirnya nanti perakaran tanaman bisa jauh lebih aman dari serangan penyakit Layu.</font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\">&nbsp;</font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-weight: 600;\">Menaburkan Pada Lubang Tanam</span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\">Aplikasi Trichoderma pada lubang tanam dilakukan pada saat pindah tanam, dengan cara menaburkan Trichoderma di tiap lubang tanam. Jadi saat nanti bibit ditanam, maka posisi Trichoderma akan tepat langsung mengenai perakaran tanaman.</font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\">Untuk dosis Trichoderma yang digunakan kira-kira sebesar kapsul obat. Saat ini dipasaran Trichoderma bisa anda temui dalam berbagi bentuk kemasan praktis, selain bentuk bubuk atau powder juga ada yang dalam bentuk Kapsul.</font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\">&nbsp;</font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\"><span style=\"font-weight: 600;\">Pengocoran</span></font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\">Selain ditaburkan pada bedengan dan lubang tanam, Trichoderma juga dapat diaplikasikan dengan cara di Kocor. Pengocoroan bisa dimulai saat tanaman berusia 7-10 HST (Hari Setelah Tanam). Dan ulangi setiap 10 hari sampai 4 kali perlakuan.</font></div><div style=\"text-align: justify;\"><font color=\"#000000\" face=\"Tahoma\">Jika anda mulai aplikasi saat umur 7 Hst, maka aplikasi berikut nya saat umur 14 hari, 21 dan 28 HST. Untuk dosis pengecoran sebanyak 1 sendok per 250 ml air/tanaman.</font></div>', '2020-12-21 08:06:12', '2020-12-21 08:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Admin','Petani') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `alamat`, `kecamatan`, `telepon`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin Petani 1', 'admin@sitani.com', 'Jl. Surodakan 12', 'Bontang Selatan', '08983368285', '$2y$10$4Tfh.PDYPbWvRsvV5pMlA.3PKksfzZBtQqT5poxfvaW8BL3AXtEKe', 'Admin', '2020-12-01 02:10:04', '2020-12-21 22:30:22'),
(2, 'Petani Makmur', 'fulan@sitani.com', 'Jl. Surodakan 7', 'Bontang', '08983368286', '$2y$10$5P5bM.KVDhxTCSPvFsRn7Onn2zDYQS8YHRUd0E8wkywXwWGdpDpPa', 'Petani', '2020-12-01 02:10:37', '2020-12-21 09:15:40'),
(3, 'Luthfidian', 'luthfidians@gmail.com', 'Jalan Penanggungan 17', 'Mojoroto', '085645478231', '$2y$10$L0vKRR7YRI196D6/ofXFQO0rKfS8oxLfm0yhuAIhIj6l3RwQGnImi', 'Petani', '2020-12-01 05:01:33', '2020-12-21 22:36:06'),
(4, 'Fahmi Luthfillah', 'tes@mail.id', 'Kembang', 'Bondowoso', '08983368286', '$2y$10$RIHtr97JjDlNeGrqGsV3FOsB/x0yOtrZAARrciYIvjZDdaNKLwWye', 'Petani', '2020-12-01 05:17:26', '2020-12-01 05:17:26'),
(5, 'olsavira', 'olsavira@gmail.com', 'danau toba', 'sumbersari', '081235286438', '$2y$10$lo0fpyEq..UH.QxrOIAI6O.OwTv1C.OxDK42FuPjYSNjiLWWVJnB.', 'Petani', '2020-12-01 05:17:36', '2020-12-10 19:09:54'),
(6, 'ini ila', 'aurila31nr@gmail.com', 'jalan gajah mada', 'kaliwates', '089665935313', '$2y$10$d3CAr1p3fR0xJzB4xGgFruTwbsnsSr6iM7GoJYhcYEpyiSj.a1jiq', 'Petani', '2020-12-10 19:10:40', '2020-12-10 19:10:40'),
(7, 'Adib', 'adibdwi22@gmail.com', 'paleran', 'umbulsari', '081359751221', '$2y$10$bMCe8ih40RDKN/5iwIfSLOVK0w/wxptFBKzplQXx/DrOpLhw25j2q', 'Petani', '2020-12-10 20:26:59', '2020-12-10 20:26:59'),
(10, 'PetaniMakmur', 'sluthfidian@gmail.com', 'Jalan Raung', 'Mojoroto Indah', '085645478231', '$2y$10$XYHs9VLw.fhY8IkyjNptf.e4ED6wgeuoWQ/Wld0hVhi63WTrxrLCu', 'Petani', '2020-12-21 09:24:05', '2020-12-21 09:24:44'),
(11, 'Teguh Kurniawan', 'teguhkurn28@gmail.com', 'Jalan Kawi', 'Pesantren', '085645478231', '$2y$10$/xFU1bEMWaw7dTQsmlOCNOJ0n92Wd8tgoLRez7c.LUnfOMBM/AmUi', 'Petani', '2020-12-21 22:09:59', '2020-12-21 22:09:59'),
(12, 'Admin Petani 2', 'admin2@sitani.com', 'Jalan Welirang', 'Mojoroto 2', '085645485028', '$2y$10$.CvyUY0rfz9j3.4Pf5N5P.xD8P1Q6dVdNfnuFw9GlAsMy2Cof8Tny', 'Petani', '2020-12-21 22:11:06', '2020-12-21 22:11:06'),
(13, 'Tes', 'tes@gmail.com', 'Tes', 'Tes', '085645478231', '$2y$10$pS4gkvlo2FE2oC.QT/FKheqZnqwalEvuXa3ei5qw82V3cVs0RtSUa', 'Petani', '2020-12-21 22:32:12', '2020-12-21 22:32:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikel_penulis_foreign` (`penulis`);

--
-- Indexes for table `cabai`
--
ALTER TABLE `cabai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_gejala_id_penyakit_foreign` (`id_penyakit`);

--
-- Indexes for table `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lahan_id_cabai_foreign` (`id_cabai`),
  ADD KEY `lahan_id_petani_foreign` (`id_petani`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `panen`
--
ALTER TABLE `panen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `panen_id_lahan_foreign` (`id_lahan`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pupuk`
--
ALTER TABLE `pupuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekomendasi_pupuk`
--
ALTER TABLE `rekomendasi_pupuk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rekomendasi_pupuk_id_penyakit_foreign` (`id_penyakit`),
  ADD KEY `rekomendasi_pupuk_id_pupuk_foreign` (`id_pupuk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cabai`
--
ALTER TABLE `cabai`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lahan`
--
ALTER TABLE `lahan`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `panen`
--
ALTER TABLE `panen`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pupuk`
--
ALTER TABLE `pupuk`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `rekomendasi_pupuk`
--
ALTER TABLE `rekomendasi_pupuk`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_penulis_foreign` FOREIGN KEY (`penulis`) REFERENCES `users` (`id`);

--
-- Constraints for table `gejala`
--
ALTER TABLE `gejala`
  ADD CONSTRAINT `table_gejala_id_penyakit_foreign` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`);

--
-- Constraints for table `lahan`
--
ALTER TABLE `lahan`
  ADD CONSTRAINT `lahan_id_cabai_foreign` FOREIGN KEY (`id_cabai`) REFERENCES `cabai` (`id`),
  ADD CONSTRAINT `lahan_id_petani_foreign` FOREIGN KEY (`id_petani`) REFERENCES `users` (`id`);

--
-- Constraints for table `panen`
--
ALTER TABLE `panen`
  ADD CONSTRAINT `panen_id_lahan_foreign` FOREIGN KEY (`id_lahan`) REFERENCES `lahan` (`id`);

--
-- Constraints for table `rekomendasi_pupuk`
--
ALTER TABLE `rekomendasi_pupuk`
  ADD CONSTRAINT `rekomendasi_pupuk_id_penyakit_foreign` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`),
  ADD CONSTRAINT `rekomendasi_pupuk_id_pupuk_foreign` FOREIGN KEY (`id_pupuk`) REFERENCES `pupuk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
