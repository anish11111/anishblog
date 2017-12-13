-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 03:27 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Anish K.C.', 'anish@gmail.com', '$2y$10$n8v5GjA4bVsUif0BYQz1Q.4RR.oTOj/ldK980UanGW4R1kAT4ZQW6', '98414649989', 1, '2017-11-07 07:36:24', '2017-11-08 09:37:02'),
(4, 'Stella Kerr', 'abc@gmail.com', '$2y$10$CFg98BLxO3Qls/18cewbzuuiQCwo.48GIOCea9ZinI/kX4ftagOpW', '9845612322', 1, '2017-11-07 08:50:55', '2017-11-08 10:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `admin_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(3, 3, 3, NULL, NULL),
(6, 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'first category', 'first-category-slug', '2017-10-16 10:25:52', '2017-10-16 10:25:52'),
(2, 'second category', 'second-category-slug', '2017-10-16 10:26:41', '2017-10-16 10:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 1, '2017-10-16 10:31:44', '2017-10-16 10:31:44'),
(2, 2, '2017-10-19 11:18:15', '2017-10-19 11:18:15'),
(3, 2, '2017-10-20 06:54:39', '2017-10-20 06:54:39'),
(4, 1, '2017-10-20 06:56:39', '2017-10-20 06:56:39'),
(6, 1, '2017-10-20 07:10:29', '2017-10-20 07:10:29'),
(7, 1, '2017-10-20 07:12:22', '2017-10-20 07:12:22'),
(7, 2, '2017-10-20 07:12:22', '2017-10-20 07:12:22'),
(8, 1, '2017-10-20 07:13:55', '2017-10-20 07:13:55'),
(9, 1, '2017-10-20 07:16:09', '2017-10-20 07:16:09'),
(11, 2, '2017-10-20 07:22:45', '2017-10-20 07:22:45'),
(5, 2, '2017-10-24 10:21:04', '2017-10-24 10:21:04'),
(10, 2, '2017-10-30 06:37:05', '2017-10-30 06:37:05'),
(12, 1, '2017-10-30 07:00:15', '2017-10-30 07:00:15');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2017_10_08_120038_create_posts_table', 1),
(14, '2017_10_08_120153_create_categories_table', 1),
(15, '2017_10_08_120210_create_tags_table', 1),
(16, '2017_10_08_120404_create_category_posts_table', 1),
(17, '2017_10_08_120441_create_post_tags_table', 1),
(18, '2017_10_08_120622_create_admins_table', 1),
(19, '2017_10_08_120653_create_roles_table', 1),
(20, '2017_10_08_120716_create_admin_roles_table', 1),
(21, '2017_11_06_111719_create_permissions_table', 2);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `for`, `created_at`, `updated_at`) VALUES
(2, 'post_create', 'post', '2017-11-06 09:52:20', '2017-11-06 09:52:20'),
(3, 'post_update', 'post', '2017-11-06 09:53:24', '2017-11-06 09:53:24'),
(4, 'post_delete', 'post', '2017-11-06 09:54:16', '2017-11-06 09:54:16'),
(5, 'post_publish', 'post', '2017-11-06 09:55:30', '2017-11-06 09:55:30'),
(6, 'admin_create', 'user', '2017-11-06 09:56:34', '2017-11-06 09:56:34'),
(7, 'admin_delete', 'user', '2017-11-06 09:57:21', '2017-11-06 09:57:21'),
(8, 'admin_update', 'user', '2017-11-06 09:59:47', '2017-11-06 10:10:01'),
(9, 'Tag_CRUD', 'other', '2017-11-06 10:08:05', '2017-11-06 10:08:05'),
(10, 'category_CRUD', 'other', '2017-11-06 10:11:08', '2017-11-06 10:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 10),
(2, 4),
(2, 5),
(3, 2),
(3, 3),
(3, 4),
(3, 9),
(3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `posted_by` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `slug`, `body`, `status`, `posted_by`, `image`, `like`, `dislike`, `created_at`, `updated_at`) VALUES
(2, 'second title', 'second subtitle', 'second-slug', '<p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center &mdash; an equal earth which all men occupy as equals. The airman&#39;s earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>\r\n\r\n<p>Science cuts two ways, of course; its products can be used for both good and evil. But there&#39;s no turning back from science. The early warnings about technological dangers also come from science.</p>\r\n\r\n<p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>\r\n\r\n<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That&#39;s how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>\r\n\r\n<p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>\r\n\r\n<h2>The Final Frontier</h2>\r\n\r\n<p>There can be no thought of finishing for &lsquo;aiming for the stars.&rsquo; Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>\r\n\r\n<p>There can be no thought of finishing for &lsquo;aiming for the stars.&rsquo; Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>\r\n\r\n<blockquote>The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>\r\n\r\n<p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>\r\n\r\n<h2>Reaching for the Stars</h2>\r\n\r\n<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>\r\n\r\n<p><a href=\"#\"><img alt=\"\" src=\"img/post-sample-image.jpg\" /></a>To go places and do things that have never been done before &ndash; that&rsquo;s what living is all about.</p>\r\n\r\n<p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>\r\n\r\n<p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there&rsquo;s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>\r\n\r\n<p>Placeholder text by&nbsp;<a href=\"http://spaceipsum.com/\">Space Ipsum</a>. Photographs by&nbsp;<a href=\"https://www.flickr.com/photos/nasacommons/\">NASA on The Commons</a>.</p>', 1, NULL, NULL, NULL, NULL, '2017-10-16 10:31:44', '2017-10-19 10:10:38'),
(3, 'third post', 'third subtitle', 'third-slug', '<p>third body</p>', 1, NULL, NULL, NULL, NULL, '2017-10-20 06:54:38', '2017-10-23 04:29:44'),
(4, 'fourth title', 'fourth subtitle', 'fourth-slug', '<p>fourht body</p>', 1, NULL, NULL, NULL, NULL, '2017-10-20 06:56:38', '2017-10-20 06:56:38'),
(5, 'fifth title', 'fifth subtitle', 'fifth-sug', '<p>fifth body</p>', 1, NULL, 'Jn68hzX7euTrlO3VDODCMjMBm0G9ivTaTW0tDXFX.jpeg', NULL, NULL, '2017-10-20 07:07:13', '2017-10-24 10:21:03'),
(6, 'sixth title', 'sixth subtitle', 'sixth-slug', '<p>sixth body</p>', 1, NULL, NULL, NULL, NULL, '2017-10-20 07:10:27', '2017-10-20 07:25:01'),
(7, 'seventh title', 'seventh subtitle', 'seventh-slug', '<p>seventh body</p>\r\n\r\n<p><img alt=\"dragon\" src=\"public/Jn68hzX7euTrlO3VDODCMjMBm0G9ivTaTW0tDXFX.jpg\" style=\"height:25%; width:25%\" /></p>', 1, NULL, '3WQ90gdIe4sfZUVSuXpT1jS1Lf357G3xsBDcKzGx.jpeg', NULL, NULL, '2017-10-20 07:12:21', '2017-10-24 10:31:28'),
(8, 'eight title', 'eigth subtitle', 'eigth-slug', '<p>eight body</p>', 1, NULL, NULL, NULL, NULL, '2017-10-20 07:13:55', '2017-10-20 07:13:55'),
(9, 'ninth title', 'ninth subtitle', 'ninth-slug', '<p>ninth body</p>', 1, NULL, 'JajVdivsZCfaHdkgOBaCljzD4hPHnnyA5ylhKMZD.jpeg', NULL, NULL, '2017-10-20 07:16:09', '2017-10-24 05:09:19'),
(10, 'tenth title', 'tenth subtitle', 'tenth-slug', '<p>tenth body</p>', 1, NULL, 'public/RrqzoYIIOoGCdMb3H0hjpzuyVYYnKkckaoxD3tLG.jpeg', NULL, NULL, '2017-10-20 07:17:46', '2017-10-30 06:45:21'),
(11, 'eleventh title', 'eleventh subtitle', 'eleventh-slug', '<h1 style=\"text-align:center\"><strong>MONKEY</strong></h1>\r\n\r\n<p>Monkey is nice</p>', 1, NULL, 'WUbmamgrZrasOBJ1HiF3AYo5vhQekCbVAWbEP8Ix.jpeg', NULL, NULL, '2017-10-20 07:22:45', '2017-10-24 05:12:01'),
(12, 'twleve', 'twelve', 'second-slug', '<p>alau</p>', 1, NULL, 'public/om6TJxDaW97aE02LNRvwKN7cxPYvvgvEZk23xtUJ.jpeg', NULL, NULL, '2017-10-30 07:00:15', '2017-10-30 07:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(2, 1, '2017-10-16 10:31:44', '2017-10-16 10:31:44'),
(2, 2, '2017-10-16 10:31:44', '2017-10-16 10:31:44'),
(3, 3, '2017-10-20 06:54:39', '2017-10-20 06:54:39'),
(4, 1, '2017-10-20 06:56:38', '2017-10-20 06:56:38'),
(4, 2, '2017-10-20 06:56:39', '2017-10-20 06:56:39'),
(6, 1, '2017-10-20 07:10:28', '2017-10-20 07:10:28'),
(6, 2, '2017-10-20 07:10:29', '2017-10-20 07:10:29'),
(7, 1, '2017-10-20 07:12:21', '2017-10-20 07:12:21'),
(7, 2, '2017-10-20 07:12:21', '2017-10-20 07:12:21'),
(7, 3, '2017-10-20 07:12:22', '2017-10-20 07:12:22'),
(8, 1, '2017-10-20 07:13:55', '2017-10-20 07:13:55'),
(9, 3, '2017-10-20 07:16:09', '2017-10-20 07:16:09'),
(11, 3, '2017-10-20 07:22:45', '2017-10-20 07:22:45'),
(5, 1, '2017-10-24 10:21:04', '2017-10-24 10:21:04'),
(10, 1, '2017-10-30 06:37:05', '2017-10-30 06:37:05'),
(12, 1, '2017-10-30 07:00:15', '2017-10-30 07:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Editor', '2017-11-05 08:18:36', '2017-11-05 08:18:36'),
(2, 'Publisher', '2017-11-05 08:34:11', '2017-11-05 08:34:11'),
(3, 'Writer', '2017-11-06 02:33:48', '2017-11-06 02:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'first tag', 'first-tag-slug', '2017-10-16 10:24:03', '2017-10-16 10:24:03'),
(2, 'second tag', 'second-tag-slug', '2017-10-16 10:24:47', '2017-10-16 10:24:47'),
(3, 'th tag', 'th-tag', '2017-10-16 10:48:25', '2017-10-16 10:48:25');

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
(1, 'Anish K.C', 'nothingcs111@gmail.com', '$2y$10$MHn2BUXjS/LnN72pHmKrBOII3We.k.hEVSJ9jyE8ugRBU7yqHJE9C', 'Mo4d1br9gUCeiPscGK6tVRkn7uY99RGjFQ6BEEIqqdg92u2hgDWQI4jzp5gy', '2017-11-02 03:11:07', '2017-11-02 03:11:07'),
(2, 'Anish', 'anish1@gmail.com', '$2y$10$M7U9DKghaQNQSk2tfOqxgu.TZk2PL3qMH.Ns3nzsNAAJ0/kaNPQei', 'CBLRJVoUXvNVEcH8SkKQDc6ueerpHlufNeC6Ih1To6HFCxIEvT1BE9sVGmtW', '2017-11-02 06:49:18', '2017-11-02 06:49:18');

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
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD KEY `category_posts_post_id_index` (`post_id`),
  ADD KEY `category_posts_category_id_index` (`category_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD KEY `post_tags_post_id_index` (`post_id`),
  ADD KEY `post_tags_tag_id_index` (`tag_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD CONSTRAINT `category_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
