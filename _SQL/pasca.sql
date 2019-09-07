-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2017 at 03:05 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasca`
--

-- --------------------------------------------------------

--
-- Table structure for table `agendas`
--

CREATE TABLE `agendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `image`, `title`, `description`, `link`, `created_at`, `updated_at`) VALUES
(5, 'bg1_1508995549.jpg', 'Visi Program Pascasarjana', 'Unggul dalam pengembangan inovasi pendidikan, kukuh dalam pengembangan dan penyebarluasan ipteks.', 'http://localhost:8000/berita_blog/visi-misi-dan-tujuan-pascasarjana', '2017-10-25 22:25:50', '2017-11-02 23:39:10'),
(6, 'bg2_1508995723.jpg', 'Misi Program Pascasarjana', '1. Melaksanakan pendidikan inovatif yang berbasis keilmuan dengan menjunjung tinggi nilai-nilai kemanusiaan dan karakter [...]', 'http://localhost:8000/berita_blog/visi-misi-dan-tujuan-pascasarjana', '2017-10-25 22:28:43', '2017-11-02 23:38:58'),
(7, 'bg3_1509545766.jpg', 'Tujuan Program Pascasarjana', '1. Meningkatnya akses pendidikan berkelanjutan berbagai disiplin ilmu berskala nasional dan internasional.', 'http://localhost:8000/berita_blog/visi-misi-dan-tujuan-pascasarjana', '2017-10-25 22:32:26', '2017-11-02 23:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_02_182856_create_posts_table', 1),
(4, '2017_06_03_144733_add_user_id_to_posts', 2),
(5, '2017_06_03_211549_add_cover_image_to_posts', 3),
(6, '2017_10_16_010520_create_carousels_table', 4),
(7, '2017_10_17_014611_create_agendas_table', 5),
(8, '2017_10_17_071621_create_downloads_table', 6),
(9, '2017_10_26_024716_create_profiles_table', 7),
(10, '2017_10_29_112255_create_galleries_table', 8),
(11, '2017_10_29_112651_add_nip_to_profiles', 8),
(12, '2017_11_03_010810_add_slug_to_post', 9),
(13, '2017_11_03_040116_add_slug_to_agenda_and_download', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`, `slug`) VALUES
(20, 'Visi Misi dan Tujuan Pascasarjana', '<h2>Visi Program Pascasarjana</h2>\r\n\r\n<p>Unggul dalam pengembangan inovasi pendidikan, kukuh dalam pengembangan dan penyebarluasan ipteks.</p>\r\n\r\n<h2>Misi Program Pascasarjana</h2>\r\n\r\n<ol>\r\n	<li>Melaksanakan pendidikan inovatif yang berbasis keilmuan dengan menjunjung tinggi nilai-nilai kemanusiaan dan karakter.</li>\r\n	<li>Melaksanakan penelitian dalam bidang pendidikan dan keilmuan yang mendukung pendidikan inovatif yang menghasilkan karya inovatif, dan teruji serta mendapat pengakuan nasional maupun internasional (Magister).</li>\r\n	<li>Melaksanakan, mengelola, dan memimpin penelitian dalam bidang pendidikan dan keilmuan yang mendukung pendidikan inovatif yang menghasilkan karya inovatif, orisinal, dan teruji serta mendapat pengakuan nasional maupun internasional (Doktor).</li>\r\n	<li>Menyebarluaskan inovasi pendidikan dan ipteks berbasis hasil penelitian melalui pengabdian kepada masyarakat.</li>\r\n	<li>Mengembangkan sistem tata pamong dan tata kelola Pascasarjana yang efisien, transparan, dan akuntabel.</li>\r\n	<li>Membangun jejaring kerjasama dengan berbagai instansi.</li>\r\n</ol>\r\n\r\n<h2>Tujuan Program Pascasarjana</h2>\r\n\r\n<ol>\r\n	<li>Meningkatnya akses pendidikan berkelanjutan berbagai disiplin ilmu berskala nasional dan internasional.</li>\r\n	<li>Meningkatnya kualitas pendidikan yang menjunjung tinggi nilai-nilai kemanusiaan.</li>\r\n	<li>Meningkatnya kualitas ipteks yang mendapat pengakuan nasional dan/atau internasional.</li>\r\n	<li>Telekomunikasikannya hasil penelitian di bidang pendidikan dan ipteks.</li>\r\n	<li>Meningkatkan kualitas lulusan berkarakter di bidang kependidikan dan nonkependidikan yang berdaya saing nasional dan global.</li>\r\n	<li>Meningkatnya kuantitas kelulusan di bidang kependidikan dan nonkependidikan.</li>\r\n	<li>Meningkatnya relevansi kelulusan di bidang kependidikan dan nonkependidikan.</li>\r\n	<li>Terwujudnya sistem manajemen kelembagaan yang transparan, akuntabel, kredibel, dan berkeadilan.</li>\r\n</ol>', '2017-10-25 22:38:28', '2017-10-25 22:38:28', 3, 'noimage.jpg', 'visi-misi-dan-tujuan-pascasarjana'),
(21, 'Program Pascasarjana Universitas Negeri Surabaya', '<p>Program Pascasarjana Universitas Negeri Surabaya menyelenggarakan program pendidikan tinggi lanjutan di atas pendidikan jenjang sarjana dengan tujuan untuk menghasilkan tamatan yang memiliki pengetahuan keahlian dan kemampuan akademik di bidang kependidikan dan nonkependidikan yang lebih dalam dan luas. Tamatan pascasarjana Universitas Negeri Surabaya dipersiapkan untuk menjadi tenaga ahli di bidang pengawasan, penyelenggaraan, dan penelitian pendidikan dalam bidang keilmuan tertentu.</p>\r\n\r\n<p>Program Pendidikan Program Pascasarjana Universitas Negeri Surabaya dapat menyelenggarakan program pendidikan pada beberapa bidang ilmu. Sebagai upaya pengembangan ilmu, setiap peserta program pendidikan Program PAscasarjana Universitas Negeri Surabaya berkewajiban melaksanakan penelitian dan pengkajian dalam bidang nonkependidikan atau kependidikan yang dipilihnya.</p>\r\n\r\n<p>Program Pascasarjana Universitas Negeri Surabaya menyelenggarakan dua jenjang sebagai berikut.</p>\r\n\r\n<ol>\r\n	<li>Jenjang Magister (S2) Pendidikan, yang memberi hak kepada para lulusannya menyandang gelar Magister Pendidikan (M.Pd.) dalam suatu bidang ilmu tertentu.</li>\r\n	<li>Jenjang Doktor (S3) Pendidikan, yang memberi hak kepada para lulusannya menyandang gelar Doktor Pendidikan (Dr.Pd.) dan untuk lulusan program studi Ilmu Keolahragaan diberi gelar doktor olahraga (Dr.Or).</li>\r\n</ol>', '2017-10-25 22:43:43', '2017-10-25 22:43:43', 3, 'noimage.jpg', 'program-pascasarjana-universitas-negeri-surabaya'),
(22, 'Riwayat Program Pascasarjana Universitas Negeri Surabaya', '<p>Program Pascasarjana Unesa dimulai pada tahun akademik 1981/1982 dengan sebuah Program Studi S2 Pendidikan Matematika. Program studi tersebut semula berstatus sebagai KPK (Kegiatan Pengumpulan Kredit) dari Fakultas Pascasarjana (FPs) IKIP Malang, yang kemudian berubah menjadi Jurusan Pendidikan Matematika FPs IKIP Malang.</p>\r\n\r\n<p>Dalam penyelenggaraannya, program tersebut mendapat bantuan dan dukungan dari a) The University of Western Australia (UWA); b) Western Australian Institute of Technology (WAIT), yang berubah nama menjadi Curtin University of Technology; sekarang bernama Curtin University, dan c) FPs ITB Bandung. Dalam penyelenggaraan kuliah mahasiswa angkatan pertama sampai dengan angkatan tahun 1991/1992 berada di ITB selama dua semester untuk kuliah matematika murni dan tiga semester berada di IKIP Surabaya. Pada awal-awal tahun perkuliahan juga dibantu oleh tenaga dari Universitas Gajah Mada, khususnya dari Fakultas Psikologi.</p>\r\n\r\n<p>Pada tahun akademik 1985/1986 dibuka program Magister untuk Pendidikan Kimia yang juga berjalan seperti program Pendidikan Matematika, dengan bantuan dan dukungan ITB. Dengan demikian dalam tahun akademik tersebut IKIP Surabaya memiliki dua program studi Pascasarjana yang secara administratif merupakan bagian dari FPs IKIP Malang. Namun, dalam tahun akademik 1986/1987 kedua program studi tersebut ikut &ldquo;terhapus&rdquo; bersama &ldquo;semua&rdquo; program studi S2 Pendidikan MIPA di IKIP.</p>\r\n\r\n<p>Pada tahun akademik 1989/1990, melalui upaya yang cukup keras dan tegas arahnya, Program Pascasarjana Pendidikan Matematika diizinkan menerima mahasiswa lagi. Prinsip adanya perbedaan yang jelas antara tugas seorang mathematician dan seorang mathematics educator dapat dipahami dengan sangat baik oleh Dikti dan pihak matematika murni. Ini sama sekali tidak berarti bahwa kedua keahlian itu harus dipertentangkan, bahkan seharusnya selalu bekerja sama untuk kepentingan nasional, bukan kepentingan lembaga tertentu. Sejak tahun akademik 1989/1990 hingga tahun akademik 1991/1992 perkuliahan masih tetap berjalan dengan sistem dua semester di ITB dan tiga semester di IKIP Surabaya. Pada saat itu IKIP Surabaya berupaya memperkuat staf matematikanya dengan berbagai jalan yang antara lain melalui pencangkokan di ITB. Pada akhir tahun 1992, atas evaluasi yang dilakukan oleh Dekan FPs ITB, IKIP Surabaya dinyatakan dapat menyelenggarakan sendiri program S2 Pendidikan Matematika, sehingga untuk angkatan tahun 1992/1993 dan seterusnya perkuliahan sepenuhnya dilaksanakan di IKIP Surabaya, yang sekarang berubah menjadi Universitas Negeri Surabaya (Unesa).</p>\r\n\r\n<p>Pernyataan Dekan FPs ITB tersebut diperkuat dengan SK. Dirjen Dikti No. 516/DIKTI/1992, yang pada prinsipnya menetapkan bahwa Program Pascasarjana Pendidikan Matematika di IKIP Surabaya berdiri sebagai program tersendiri di IKIP Surabaya terlepas dari PPs IKIP Malang. Proses lepas dari PPs IKIP Malang tersebut dilakukan secara bertahap sesuai dengan habisnya mahasiswa angkatan 1993/1994. Dalam tahun akademik 1994/1995 untuk urusan administratif dan akademik sepenuhnya dikelola sendiri oleh IKIP Surabaya.</p>\r\n\r\n<p>Selanjutnya, hingga sekarang PPs Unesa mempunyai dua belas program studi, untuk program S2 yaitu</p>\r\n\r\n<ol>\r\n	<li>Program Studi Pendidikan Matematika dengan SK Dirjen Dikti Nomor 516/DIKTI/Kep/1992;</li>\r\n	<li>Program Studi Pendidikan Olahraga dengan SK Dirjen Dikti Nomor 107/DIKTI/Kep/1996;</li>\r\n	<li>Program Studi Pendidikan Sains dengan SK Dirjen Dikti Nomor 156/DIKTI/Kep/1999;</li>\r\n	<li>Program Studi Pendidikan Bahasa dan Sastra dengan SK Dirjen Dikti Nomor 141/DIKTI/Kep/1999;</li>\r\n	<li>Program Studi Manajemen Pendidikan dengan SK Dirjen Dikti Nomor 19/DIKTI/Kep/2000.</li>\r\n	<li>Program Studi Pendidikan Dasar dengan SK Dirjen Dikti Nomor 3324/D/T/2006.</li>\r\n	<li>Program Studi Pendidikan Seni Budaya dengan SK Dirjen Dikti Nomor 366/D/T/2009</li>\r\n	<li>Program Studi Pendidikan IPS dengan SK Dirjen Dikti Nomor 1768/D/T/2009</li>\r\n	<li>Program Studi Pendidikan Teknologi dan Kejuruan dengan SK Dirjen Dikti Nomor 1768/D/T/2009</li>\r\n	<li>Program Studi Teknologi Pendidikan dengan SK Dirjen Dikti Nomor 1768/D/T/2009.</li>\r\n	<li>Program Studi Pendidikan Luar Biasa dengan SK Dirjen Dikti Nomor 85/D/O/2010.</li>\r\n	<li>Program Studi Pendidikan Ekonomi dengan SK Dirjen Dikti Nomor 209/D/O/2010 tanggal 9 Desember 2010.</li>\r\n	<li>Program Studi Pendidikan Dasar Konsentrasi Pendidikan Anak Usia Dini (PAUD) dengan SK Dirjen Dikti Nomor 3324/D/T/2006 dan SK Rektor Universitas Negeri Surabaya Nomor 208/UN38/HK.01.23/PP.04.02/2011 tanggal 5 Agustus 2011.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sementara itu, untuk Program S3 telah dibuka empat program studi, yaitu</p>\r\n\r\n<ol>\r\n	<li>Program Studi S3 Pendidikan Matematika dengan SK Dirjen Dikti Nomor 124/DIKTI/Kep/1999;</li>\r\n	<li>Program Studi S3 Ilmu Keolahragaan dengan Surat Izin Dirjen Dikti Nomor 2362/D/T/2001;</li>\r\n	<li>Program Studi S3 Pendidikan Bahasa dan Sastra dengan Surat Izin Dirjen Dikti Nomor 1443/D/T/2003.</li>\r\n	<li>Program Studi S3 Pendidikan Sains, dengan SK Dirjen Dikti Nomor 136/D/O/2010, tanggal 15 September 2010.</li>\r\n</ol>', '2017-10-25 22:45:24', '2017-10-25 22:45:24', 3, 'noimage.jpg', 'riwayat-program-pascasarjana-universitas-negeri-surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `image`, `name`, `position`, `created_at`, `updated_at`, `nip`) VALUES
(3, 'johndoe_1509692082.jpg', 'Alex Garret', 'Leader', '2017-10-25 21:09:02', '2017-11-02 23:55:05', '9687565345243212');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Alex', 'alex@doe.com', '$2y$10$.XbkUcUx9MJWtU0aOvSsE.c6q5DbNRMtn0iNxxvAV7QfiuY7uZ7b2', 'eKruuiQfTGIHEsc5VmR5eAtxw7JEnJ6CIYUDgQKTGwdqP2YGle2mMe0cnflj', '2017-10-12 01:23:33', '2017-10-12 01:23:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendas`
--
ALTER TABLE `agendas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `agendas`
--
ALTER TABLE `agendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
