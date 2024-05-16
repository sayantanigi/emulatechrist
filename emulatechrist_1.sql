-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 03:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emulatechrist`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `heading1` text DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `description1` text DEFAULT NULL,
  `heading2` text DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `description2` text DEFAULT NULL,
  `heading3` text DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `description3` text DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `description4` text DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading1`, `image1`, `description1`, `heading2`, `image2`, `description2`, `heading3`, `image3`, `description3`, `image4`, `description4`, `created_at`) VALUES
(1, 'About Emulate Christ', '2184-about-banner.jpg', '<p>EMULATE CHRIST PODCAST is dedicated to sharing Kent\'s journey, as He turns to the Lord and makes Jesus the focal point in every area of his life. In here, he will invite and coach you to do likewise, even to emulate Christ. It includes stories, interviews, living scriptures, quotes, and more that move you to good thoughts, feelings, words, works, and deeds.</p>\r\n<p>Transformation starts from the inside out and is the result of turning heart and mind to God. It is more than remembering Him always, it is to be a doer of the word, including mastering your thoughts, feelings, words, and deeds. It is about emulating Him line upon line. In the process of emulating Him within the walls of your own temple, you are given power over your body. Thus, submitting to the will of the Lord isn\'t just about your heart and mind&mdash;it includes turning your physique over to Him.</p>\r\n<p>Jesus Christ tapped into the power of God to grow line upon line, perfection upon perfection. As such He set the bull&rsquo;s eye mark worthy of emulation. Not only did he set a perfect example, but when you make Him the focal point of your life, He is the vine or source to grant you access to the power of God. A power that will both stretch your vision and enables your growth to lay hold of every good thing.</p>\r\n<p>Furthermore, as you grow in living more and more correct principles, you partake of the fruits of the Spirit of God, including:</p>\r\n<p>* enjoying the fruits of peace, hope, and joy;<br>* being a fit vessel for the Lord;<br>* sharing your talents and these fruits with others;<br>* and multiplying those talents to prosper in the land and eternities.</p>\r\n<p>In short, this free podcast cast is an invitation to go and do mighty works. Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out.</p>\r\n<p>God prepared a way to bring about His purposes in love. Turn to Him and He will turn to you. His divine spiritual DNA runs within your soul. Give up the carnally minded man, and surrender your physique and life to the divine nature within you. Then you will tap into the waters and vine of Christ to bring about mighty words and works.</p>\r\n<p>Deep down you know His voice. Simply come unto Him and hearken to it. Sin, as defined in the Doctrine and Covenants section 84 verses 49-53, is to disobey the good prompting or deed when it is presented to you. Cease to ignore the divine river of truth waiting to express itself from within you. Be therefore a doer of the word, not just a hearer! Emulating Christ will transform your physique from a cottage to a temple worthy of the constant companionship of the Holy Ghost.</p>\r\n<p>A place where God&rsquo;s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.&nbsp;</p>', 'Story About Kent and his Family', '7604-PastedGraphic-1.png', '<h4>We Love What We Do</h4>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'This free podcast is an invitation to go and do mighty works.', '7552-Cover-FourStepJourney_SecondeditioncoverartpapereditECApril2024_page-0001.jpg', '<p>Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out. A place where God&rsquo;s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.</p>', '3632-263-service_2-1.jpg', '<h3>A Mormon\'s Four-Step Journey to Holiness: How to Discover Purpose, Embrace Trials, and Align Your Life with God\'s Word</h3>', '2024-04-06 12:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(191) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `name`, `email`, `phone`, `password`, `profile`, `is_super`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'admin', 'admin@mail.com', '', '$2y$10$0bI82y2UE80lf0fV9SpXqe2XswGhG5wunIOK9zTVAFT047Gou8bcS', 'jesus-3476251.jpg', 0, NULL, '2024-05-15 07:42:37', '2024-05-16 01:35:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `bannerId` int(11) NOT NULL,
  `heading1` varchar(200) DEFAULT NULL,
  `heading2` varchar(200) DEFAULT NULL,
  `heading3` varchar(200) DEFAULT NULL,
  `heading4` varchar(200) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `heading5` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`bannerId`, `heading1`, `heading2`, `heading3`, `heading4`, `type`, `heading5`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Emulate Christ', 'to Be Like Abba', 'and God\'s power will', 'transform your', 'body,family,business,community', 'Turn your will—including your heart, mind, body, and business—to God and prosper.', '3875-banner-01.jpg', '2024-05-16 11:52:32', '2024-05-16 11:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL DEFAULT 0,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `slug_url` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogId`, `categoryId`, `title`, `image`, `description`, `status`, `slug_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'Demo Blog 1', '1582816359025.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>', 1, 'demo-blog-1', '2024-05-16 12:04:11', '2024-05-16 12:05:32'),
(2, 2, 'Demo Blog 2', 'courses-img-3.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>', 1, 'demo-blog-2', '2024-05-16 12:06:01', '2024-05-16 12:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Blog Category 1', '100673704.jpg', 1, '2024-05-16 12:00:12', '2024-05-16 12:02:43'),
(2, 'Blog Category 2', 'download (1).png', 1, '2024-05-16 12:02:56', '2024-05-16 12:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `cmsId` int(11) NOT NULL,
  `page` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`cmsId`, `page`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'privacypolicy', 'Privacy Policy', '<p data-renderer-start-pos=\"2845\"><strong data-renderer-mark=\"true\">Privacy Policy</strong></p>\r\n<p data-renderer-start-pos=\"2861\">Emulate Christ respects the privacy of its users. This Privacy Policy explains what information we collect, how we use it, and how you can control it.</p>\r\n<p data-renderer-start-pos=\"3016\"><strong data-renderer-mark=\"true\">Information We Collect</strong></p>\r\n<p data-renderer-start-pos=\"3040\">We may collect basic information, such as your IP address and browser type, to help us understand how our website is used. We may also collect any information you voluntarily provide, such as through comments or contact forms.</p>\r\n<p data-renderer-start-pos=\"3271\"><strong data-renderer-mark=\"true\">Use of Information</strong></p>\r\n<p data-renderer-start-pos=\"3291\">We use the information we collect to operate and improve our website and to respond to your inquiries. We will never share your information with third parties without your consent.</p>\r\n<p data-renderer-start-pos=\"3473\"><strong data-renderer-mark=\"true\">Control Your Information</strong></p>\r\n<p data-renderer-start-pos=\"3499\">You can choose not to provide any information to us. You can also request that we remove any information about you that we have collected.</p>\r\n<p data-renderer-start-pos=\"3642\"><strong data-renderer-mark=\"true\">Contact Us</strong></p>\r\n<p data-renderer-start-pos=\"3654\">If you have any questions about this Privacy Policy, please contact us at <a class=\"css-tgpl01\" title=\"mailto:support@emulatechrist.com\" href=\"mailto:support@emulatechrist.com\" data-testid=\"link-with-safety\" data-renderer-mark=\"true\"><strong>support@emulatechrist.com</strong></a></p>\r\n<p data-renderer-start-pos=\"3758\">This is a basic policy that covers the essentials. You can add more details if needed, such as specific cookies you use or how you handle data security.</p>', NULL, '2023-01-27 15:59:30', '2024-04-23 13:47:16'),
(2, 'terms', 'Terms and Conditions', '<p><strong>Emulatechrist</strong>, LLC is committed to safeguarding the privacy and security of our customers\' information. This Privacy Policy outlines the types of information we collect through our website and interactions with our employees, and how we use, store, and protect that information.</p>', NULL, '2023-01-27 15:59:30', '2024-04-09 11:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `companyId` int(11) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyId`, `company_name`, `logo`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Test Company 1', '1582816359025.jpg', 'https://google.com', '2024-05-16 11:51:42', '2024-05-16 11:56:22'),
(2, 'Test Company 2', '2546_7.png', 'https://google.com', '2024-05-16 11:53:56', '2024-05-16 11:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactId` int(11) NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `ebookId` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `episodeId` int(11) NOT NULL,
  `podcastId` int(11) NOT NULL DEFAULT 0,
  `title` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `attachment` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `slug_url` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `getintouch`
--

CREATE TABLE `getintouch` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `terms` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `heading1` varchar(100) DEFAULT NULL,
  `description1` text DEFAULT NULL,
  `heading2` varchar(100) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `description2` text DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `url` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `heading1`, `description1`, `heading2`, `image2`, `description2`, `type`, `url`, `created_at`, `updated_at`) VALUES
(1, 'About the Show', '<p class=\"sec-text mt-30\">EMULATE CHRIST PODCAST is dedicated to sharing Kent\'s journey, as He turns to the Lord and makes Jesus the focal point in every area of his life. In here, he will invite and coach you to do likewise, even to emulate Christ. It includes stories, interviews, living scriptures, quotes, and more that move you to good thoughts, feelings, words, works, and deeds.</p>\r\n<p class=\"sec-text mt-30\">Transformation starts from the inside out and is the result of turning heart and mind to God. It is more than remembering Him always, it is to be a doer of the word, including mastering your thoughts, feelings, words, and deeds. It is about emulating Him line upon line. In the process of emulating Him within the walls of your own temple, you are given power over your body. Thus, submitting to the will of the Lord isn\'t just about your heart and mind—it includes turning your physique over to Him.</p>', 'This free podcast is an invitation to go and do mighty works.', '4823-263-service_2-1.jpg', '<p>Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out. A place where God’s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.</p>', 2, '4408-NewRangeRoverVelar.mp4', '2024-04-06 12:19:16', '2024-05-16 08:34:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `podcastId` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `podcast_url` longtext DEFAULT NULL,
  `slug_url` varchar(200) DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`podcastId`, `title`, `image`, `description`, `podcast_url`, `slug_url`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Demo Podcast Title', '2772-DPLOGO.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>', 'https://google.com', 'demo-podcast-title', 2, '2024-05-16 11:57:32', '2024-05-16 12:06:53'),
(2, 'Demo Podcast 1', 'art-courses.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>', 'https://google.com', 'demo-podcast-1', 1, '2024-05-16 12:06:35', '2024-05-16 12:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settingId` bigint(20) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `footer_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `support_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone2` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `skool` varchar(50) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `threads` varchar(100) DEFAULT NULL,
  `ebook` text DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settingId`, `logo`, `footer_logo`, `favicon`, `title`, `address`, `email`, `support_email`, `phone`, `phone2`, `website`, `facebook`, `link`, `skool`, `youtube`, `instagram`, `threads`, `ebook`, `updated_at`) VALUES
(1, '4934-copyright-logo.png', '4934-copyright-logo.png', '2835-favicon.png', 'PICD Staffing Services', NULL, 'admin@emulatechrist.com', 'info@oberlin.company.com', '+1 800 123 1231', '(800) 060-0730', 'EmulateChrist', 'https://www.facebook.com', 'https://lnk.bio/disciplesprosper', 'https://www.skool.com/emulatechrist/about', 'https://www.youtube.com/@emulate-christ', 'https://www.instagram.com/emulatechrist/', 'https://www.threads.net/@emulatechrist', '1715849877.pdf', '2024-01-12 08:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonialId` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`bannerId`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`cmsId`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`companyId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactId`);

--
-- Indexes for table `ebook`
--
ALTER TABLE `ebook`
  ADD PRIMARY KEY (`ebookId`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`episodeId`);

--
-- Indexes for table `getintouch`
--
ALTER TABLE `getintouch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`podcastId`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settingId`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonialId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `bannerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `cmsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `ebookId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `episodeId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `getintouch`
--
ALTER TABLE `getintouch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `podcastId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settingId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonialId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
