-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Nov 24, 2023 at 04:19 AM
-- Server version: 5.7.43
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mppa`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_announcement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_announcement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_announcement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_posting` date NOT NULL,
  `gambar_announcement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_announcement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `nama_announcement`, `deskripsi_announcement`, `isi_announcement`, `tanggal_posting`, `gambar_announcement`, `pdf_announcement`, `created_at`, `updated_at`) VALUES
(1, 'Peraturan MPPA 2023/2023', 'Peraturan ini berlaku pada periode 2023/2024 Peraturan ini berlaku pada periode 2023/2024 Peraturan ini berlaku pada periode 2023/2024 Peraturan ini berlaku pada periode 2023/2024', 'Peraturan ini dibuat supaya karyawan dapat bekerja secara baik dan tertib, apabila melanggar peraturan ini maka akan dikenakan hukuman yang telah disepakati bersama. Terima kasih', '2024-07-10', '', '', NULL, NULL),
(2, 'Tester', '<p>Tester</p>', '<p>Tester</p>', '2023-11-10', 'storage/images/1699586551_OPSI 2 (3).png', '', '2023-11-10 03:22:32', '2023-11-10 03:22:32'),
(3, 'RehanTester', '<p><strong>tester</strong></p>', '<p>tster</p>', '2023-11-21', NULL, 'Report.pdf', '2023-11-21 02:52:08', '2023-11-21 03:04:32'),
(4, 'tester23', '<p>tesdfs</p>', '<p>ssdfsf</p>', '2023-11-21', 'storage/images/1700537658_IG.png', 'storage/pdfs/1700537658_Human+Resource+Information+System_+Fungsi,+Peran,+Manfaat,+dan+Penerapan+pada+WordPress.pdf', '2023-11-21 03:21:00', '2023-11-21 03:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_article` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_posting` date NOT NULL,
  `dafpus_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdf_article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `nama_article`, `deskripsi_article`, `isi_article`, `tanggal_posting`, `dafpus_article`, `kategori_article`, `gambar_article`, `pdf_article`, `url_article`, `created_at`, `updated_at`) VALUES
(4, 'MPPA Sport', '<p>Acara yang diselenggarakan oleh PT MPPA kepada seluruh karyawan.</p>', '<p>Acara yang diselenggarakan oleh PT MPPA kepada seluruh karyawan.</p>', '2023-10-19', '<p>Sport</p>', 'Sport', 'storage/images/1698032668_11.png', '', 'https://tw-elements.com/docs/standard/forms/file-input/', NULL, '2023-10-22 20:44:28'),
(10, 'MANUSIA PEMBELAJAR', '<p>Dari webinar yang dilaksanakan EXPERD beberapa waktu lalu, kita dapat melihat adanya kesamaan yang kuat dari ketiga pembicara, Prof Dr Komaruddin Hidayat, Dr Ryne Sherman, dan Dr Yoga Affandi.</p>', '<p><strong>Penulis: Eileen Rachman &amp; Emilia Jakob</strong></p>\r\n<p>Dari webinar yang dilaksanakan EXPERD beberapa waktu lalu, kita dapat melihat adanya kesamaan yang kuat dari ketiga pembicara, Prof Dr Komaruddin Hidayat, Dr Ryne Sherman, dan Dr Yoga Affandi.</p>\r\n<p>Prof Komar dengan santainya mengatakan, semenjak ada media sosial, beliau menikmati pembelajaran dengan bebas. Beliau bisa mendapatkan pembelajaran tidak terbatas dengan mendengarkan semua penulis hebat kelas dunia bercerita tentang isi buku mereka.</p>\r\n<p>Ryne menggambarkan dengan curiosity yang dimilikinya, ia bisa terus mengeksplorasi penelitian-penelitian yang dilakukan di berbagai belahan dunia. Pak Yoga juga salah satu contoh pembelajar sejati. Setelah lulus dari ITB sebagai insinyur teknik industri, ia terus menimba ilmu sampai meraih PhD-nya dalam bidang ilmu ekonomi.</p>\r\n<p>Sebagai Direktur Eksekutif Bank Indonesia Institute saat ini, ia sangat fasih berbicara mengenai pembelajaran, baik secara prinsip, program, ekosistem, maupun pada pengembangan budayanya. Dari sini, kita pun bertanya pada diri sendiri, bagaimana kita dapat menciptakan kebiasaan belajar pada SDM di organisasi kita sampai mereka menjadikannya sebagai bagian dari kehidupan sehari-harinya, seperti ketiga tokoh ini?</p>\r\n<p>Kita menyadari bahwa semangat pembelajaran sudah digaung-gaungkan di setiap organisasi. Ada masanya ketika ijazah dan gelar seperti bahan bakar untuk mendaki tangga karier lebih cepat sehingga individu pun berlomba-lomba untuk menambah gelar baru yang menempel di belakang namanya.</p>\r\n<p>Namun, dengan perubahan yang terjadi semakin cepat saat ini, kita menyadari bahwa sikap pembelajar ini menjadi salah satu kompetensi yang sangat penting dalam menghadapi masa depan yang serba tidak jelas. Pada 2027, sebagian besar keterampilan yang kita miliki saat ini akan menjadi obsolete bila tidak dilakukan upskilling dan reskilling.</p>\r\n<p>Untuk itu, individu yang memiliki growth mindset, yang senantiasa belajar dengan intensif menginikan pengetahuan, perkembangan bisnis dan teknologi agar dapat tetap adaptif dan kompetitif pada masa mendatang.</p>\r\n<p>Bentuk sikap belajar yang tepat</p>\r\n<p>Sikap belajar tidak ada hubungannya dengan lembaga pelatihan atau pendidikan. Sikap belajar seyogianya berasal dari diri sendiri, dilakukan atas inisiatif sendiri, sukarela dengan penuh rasa ingin tahu.</p>\r\n<p>Heutagogy yang merupakan perpanjangan dari andragogy metode belajar orang dewasa, menekankan proses aktif dan proaktif peserta didik sebagai agen utama dalam pembelajaran mereka sendiri. Pembelajarlah yang menentukan apa yang mau dipelajari dan bagaimana hal itu akan dipelajari. Akses ke bahan pembelajaran pun sudah berubah. Sekarang, kita dapat mencari bahan pembelajaran secara mandiri dengan akses ke mana saja, dari mana saja.</p>\r\n<p>Bagaimana bila kita selalu merasa tidak memiliki waktu untuk belajar? Pertama, kita perlu meninjau kembali pandangan kita tentang proses belajar. Josh Bersin, pendiri Bersin anak perusahaan Deloitte, menyebutkan, proses belajar di tempat kerja sebagai learning in the flow of work. Dalam metode heutagogy, kita dapat belajar sambil bekerja, dari bagaimana menangani proyek dengan efektif, sampai pada berkolaborasi dan menangani konflik di tempat kerja.</p>\r\n<p>Kita dapat mengintegrasikan kegiatan belajar dengan kegiatan sehari-hari. Ketika bertemu orang baru, kita menanamkan mindset, &ldquo;Apa yang dapat saya pelajari dalam interaksi ini? Insight apa yang dapat saya terapkan dalam pekerjaan sehari-hari?&rdquo;</p>\r\n<p>Kita juga dapat berdiskusi dengan rekan kerja, menjadwalkan membaca buku setiap malam, menonton video-video yang relevan, ataupun mendengarkan podcast pada saat saat berolahraga. Ini semua adalah kegiatan belajar. Tantangan kita adalah membuatnya menjadi kebiasaan dan kegemaran yang tidak bisa ditinggalkan.</p>\r\n<p>Evaluasi pembelajaran</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Tentunya kita juga perlu menetapkan target pembelajaran, baik secara tahunan, semesteran, maupun triwulan. Oleh karena itu, kita dapat mengevaluasi kemajuan pembelajaran kita, serta melihat apakah metode yang kita lakukan sudah tepat untuk mendapatkan materi pembelajaran dan mencapai target yang ditetapkan. Bagaimana kita bisa lebih efektif lagi dalam proses pembelajaran yang kita lakukan adakah sumber-sumber pembelajaran yang belum kita optimalkan.</p>\r\n<p>Memiliki banyak informasi sampai dikenal sebagai &ldquo;mr/ms know it all&rdquo; belum dapat dikatakan sebagai pembelajar yang efektif. Kita perlu mengolah informasi yang kita miliki sampai mendapatkan insight yang bermanfaat dan dapat menjawab pertanyaan: so what, what&rsquo;s next? Kita perlu sampai mencapai &ldquo;aha moments&rdquo; agar ilmu atau keterampilan yang kita pelajari itu benar-benar menjadi bagian dari diri kita. Go for quality, not quantity.</p>\r\n<p>Tim Brown CEO dari IDEO, sebuah lembaga yang berfokus pada kreativitas, mengemukakan konsep T-shaped person. Untuk menguatkan otot-otot rasa ingin tahu, kita perlu melakukan variasi antara keterampilan yang bersifat teknis dan nonteknis (soft skills). Ketika menguatkan kemampuan teknis, kita seolah menguatkan kaki vertikal dari huruf T kita dengan menggali pengetahuan secara mendalam.</p>\r\n<p>Sementara ketika berkooperasi, berkolaborasi dengan orang lain, atau orang dari disiplin ilmu lain, kita seakan-akan sedang memperkuat batang horizontal dari T kita yang mengembang ke berbagai arah. Dengan demikian, kita dapat mengolah pembelajaran kita secara komprehensif, baik dari segi teknis maupun nonteknis.&nbsp;</p>\r\n<p>Sudah saatnya kita sebagai profesional yang relatif sudah sukses, perlu melakukan refleksi. Apa yang selama ini tidak kita anggap sebagai materi pembelajaran padahal seharusnya bisa kita manfaatkan dengan lebih baik? Apakah selama ini kita melewatkan kesempatan-kesempatan emas untuk mendapatkan &ldquo;learning insight&rdquo;?&nbsp;</p>\r\n<p>Kita pun perlu melakukan eksplorasi terkait gaya belajar yang paling kita sukai. Apakah lebih banyak melibatkan fungsi visual, seperti membaca, menonton, atau lebih kuat melalui fungsi auditif seperti mendengarkan podcast dan mengobrol dengan tokoh-tokoh panutan kita. Selain itu, bahkan dengan kinestetik yang terlibat langsung dalam proyek-proyek yang menantang.</p>\r\n<p>Learning-agile leaders exemplify a growth mindset by learning from experience, challenging perspectives, remaining curious, and seeking new experiences.</p>', '2023-10-27', '<p><strong>EXPERD</strong>&nbsp; &nbsp;|&nbsp; &nbsp;HR Consultant/Konsultan SDM</p>\r\n<p>Diterbitkan di Harian Kompas Karier <strong>21 Oktober 2023</strong></p>', 'Sikap', 'storage/images/1700536581_IG.png', 'storage/pdfs/1700536582_Report.pdf', 'https://money.kompas.com/read/2023/10/21/080300026/manusia-pembelajarhttps://money.kompas.com/read/2023/10/21/080300026/manusia-pembelajar', '2023-10-27 09:23:44', '2023-11-21 03:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_gambar` enum('Pengumuman','Dashboard') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `nama_banner`, `gambar_banner`, `kategori_gambar`, `created_at`, `updated_at`) VALUES
(6, 'HUT RI', 'storage/images/1698122758_hut.png', 'Pengumuman', '2023-10-23 21:45:58', '2023-10-23 21:45:58'),
(7, 'SP', 'storage/images/1698123062_sp.jpg', 'Pengumuman', '2023-10-23 21:51:02', '2023-10-23 21:51:02'),
(8, 'Hyfresh', 'storage/images/1698134295_hyfresh.jpg', 'Dashboard', '2023-10-24 00:58:15', '2023-10-24 00:58:15'),
(9, 'Hyfreshz', 'storage/images/1698134395_hyfreshz.jpg', 'Dashboard', '2023-10-24 00:59:55', '2023-10-24 00:59:55'),
(10, 'Primo', 'storage/images/1698134402_primo.jpg', 'Dashboard', '2023-10-24 01:00:02', '2023-10-24 01:00:02'),
(11, 'Fmx', 'storage/images/1698134408_fmx.jpg', 'Dashboard', '2023-10-24 01:00:08', '2023-10-24 01:00:08'),
(12, 'hpm', 'storage/images/1698134417_hpm.jpg', 'Dashboard', '2023-10-24 01:00:17', '2023-10-24 01:00:17'),
(13, 'boston', 'storage/images/1698134422_boston.jpg', 'Dashboard', '2023-10-24 01:00:22', '2023-10-24 01:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `cc`, `organization`, `created_at`, `updated_at`) VALUES
(2, 'rhnashil@gmail.com', 'rkael238@gmail.com', 'HRIS', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanda_pengenal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` bigint(20) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('Saran','Pernyataan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `tanda_pengenal`, `nama`, `email`, `no_telp`, `subject`, `email_tujuan`, `kategori`, `pesan`, `created_at`, `updated_at`) VALUES
(79, '2020071038', 'teste', 'magang@gmail.com', 0, 'You are invited to Wonderlic Personnel Test', 'rhnashil@gmail.com', 'Pernyataan', '<p><strong>sadasdasd&nbsp;<em>asdasdasdasd&nbsp;</em>asdasd&nbsp;</strong>asdasdasdasdasd&nbsp;&nbsp;</p>', '2023-10-27 00:15:29', '2023-10-27 00:15:29'),
(80, '2020071037', 'Rehngs', 'testing@gmail.com', 0, 'You are invited to Wonderlic Personnel Test', 'rhnashil@gmail.com', 'Saran', '<p><strong>asdasdasdas&nbsp;<em>asdasdasd&nbsp;</em>asdasdasd&nbsp;<em>asdasdas</em></strong><em>dasdasdas</em></p>', '2023-10-27 00:16:47', '2023-10-27 00:16:47'),
(81, '2020071037', 'teste', 'testing@gmail.com', 0, 'Tester', 'rhnashil@gmail.com', 'Saran', '<p>qweqweqw&nbsp;<strong>qweqweqw</strong></p>\r\n<p><strong>qweqwe</strong></p>\r\n<p><strong>qweqwe&nbsp;</strong></p>', '2023-10-27 00:18:42', '2023-10-27 00:18:42'),
(82, '2020071037', 'REHANGKS', 'mentor@gmail.com', 0, 'Apaa', 'rhnashil@gmail.com', 'Saran', '<p>reasdasde&nbsp;<strong>sadasdsad&nbsp;<em>asdasdasdas</em> asdasdas&nbsp;</strong>asdasdasd</p>', '2023-10-27 07:32:09', '2023-10-27 07:32:09'),
(83, '2020071037', 'Raihan', 'admin@gmail.com', 0, 'You are invited to Wonderlic Personnel Test', 'rhnashil@gmail.com', 'Saran', '<p><strong>Tester</strong></p>', '2023-10-27 08:15:17', '2023-10-27 08:15:17'),
(84, '2020071037', 'tester', 'rhnashil@gmail.com', 0, 'You are invited to Wonderlic Personnel Test', 'rhnashil@gmail.com', 'Saran', '<p>sdsadasd</p>', '2023-10-30 03:29:14', '2023-10-30 03:29:14'),
(85, '2020071038', 'Raihan', 'rkael238@gmail.com', 87771773888, 'reghan', 'rhnashil@gmail.com', 'Saran', '<p>asdasdasd</p>', '2023-10-30 04:01:27', '2023-10-30 04:01:27');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_posting` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `nama_foto`, `foto`, `tanggal_posting`, `created_at`, `updated_at`) VALUES
(1, 'Townhall', 'storage/images/1698048111_12.png', '2023-10-23', '2023-10-23 00:48:33', '2023-10-23 01:01:51'),
(2, 'tes', 'storage/images/1698048161_13.png', '2023-10-22', '2023-10-23 01:02:41', '2023-10-23 01:02:41'),
(3, 'tes2', 'storage/images/1698048171_11.png', '2023-10-22', '2023-10-23 01:02:51', '2023-10-23 01:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_join` date NOT NULL,
  `ulang_tahun` date DEFAULT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama_karyawan`, `divisi_karyawan`, `tanggal_join`, `ulang_tahun`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 'Rehan', 'Human Resource', '2022-10-20', NULL, 'Pria', NULL, NULL),
(2, 'tes', 'tes', '2023-10-20', NULL, 'tes', NULL, NULL),
(3, 'tes2', 'tes2', '2023-10-20', NULL, 'tes2', NULL, NULL),
(4, 'tes3', 'tes3', '2023-10-20', NULL, 'tes3', NULL, NULL),
(5, 'tes4', 'tes4', '2023-10-20', '2022-10-24', 'tes4', NULL, NULL),
(6, 'tes5', 'tes5', '2023-10-20', NULL, 'tes5', NULL, NULL),
(7, 'tes6', 'tes6', '2023-10-20', NULL, 'yes6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `url_menu`, `created_at`, `updated_at`) VALUES
(1, 'MPP-Recruitment', 'https://flowbite.com/docs/components/tables/', NULL, NULL),
(2, 'New HRIS', 'http://192.168.200.62:8896/Account/Login?ReturnUrl=%2F', NULL, NULL),
(3, 'Employee Self Service', 'http://192.168.200.62:7789/', NULL, NULL),
(4, 'Manpower Planning', 'http://192.168.200.62:8031/', NULL, NULL),
(5, 'e-Learning', 'http://192.168.209.25:9999/', NULL, NULL),
(8, 'COMPETENCY APPRAISAL (intranet)', 'http://192.168.200.53:7771/', '2023-10-30 04:52:20', '2023-10-30 04:52:20'),
(9, 'COMPETENCY APPRAISAL (Internet)', 'https://perfapr.hypermart.co.id/', '2023-10-30 04:52:34', '2023-10-30 04:52:34');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_19_022923_create_announcement_table', 1),
(6, '2023_10_19_022934_create_wiki_table', 1),
(7, '2023_10_19_022942_create_article_table', 1),
(8, '2023_10_19_023226_create_contact_table', 1),
(9, '2023_10_19_023237_create_contact_form_table', 1),
(10, '2023_10_19_090653_create_banner_table', 2),
(11, '2023_10_19_092729_create_menu_table', 3),
(12, '2023_10_19_100646_create_karyawan_table', 4),
(13, '2023_10_23_071717_create_gallery_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Raihan', 'rhnashil@gmail.com', NULL, '$2y$10$F1VmijDpWMNAn0NN4zyAXOFLvfhqwMCm0fo1tWahfNIBcY9knf7D2', NULL, NULL, NULL),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$tK0FVR6QiDXt.uJi26qggOkLf62Shva42g.pMGtmmSwBu0fv/ZNW2', NULL, '2023-10-30 03:32:38', '2023-10-30 03:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `wiki`
--

CREATE TABLE `wiki` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_wiki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_wiki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_wiki` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_posting` date NOT NULL,
  `gambar_wiki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_wiki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wiki`
--

INSERT INTO `wiki` (`id`, `nama_wiki`, `deskripsi_wiki`, `isi_wiki`, `tanggal_posting`, `gambar_wiki`, `url_wiki`, `created_at`, `updated_at`) VALUES
(2, 'Peraturan!', '<p><strong>PERATURAN!!</strong></p>', '<p><em>PERATURAN!!</em></p>', '2023-10-23', 'storage/images/1698045645_WhatsApp Image 2023-10-22 at 22.44.13.jpeg', 'http://192.168.209.67:7771/', '2023-10-23 00:14:53', '2023-10-23 00:20:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wiki`
--
ALTER TABLE `wiki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wiki`
--
ALTER TABLE `wiki`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
