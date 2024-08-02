-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2024 at 03:12 PM
-- Server version: 5.7.44
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techgigiapp_emulatechrist`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `heading1` text,
  `image1` varchar(255) DEFAULT NULL,
  `description1` text,
  `heading2` text,
  `image2` varchar(255) DEFAULT NULL,
  `description2` text,
  `heading3` text,
  `image3` varchar(255) DEFAULT NULL,
  `description3` text,
  `image4` varchar(255) DEFAULT NULL,
  `description4` text,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading1`, `image1`, `description1`, `heading2`, `image2`, `description2`, `heading3`, `image3`, `description3`, `image4`, `description4`, `created_at`) VALUES
(1, 'About Disciples Prosper', '2184-about-banner.jpg', '<p>Disciples Prosper is dedicated to sharing Kent&#39;s journey, as He turns to the Lord and makes Jesus the focal point in every area of his life. In here, he will invite and coach you to do likewise, even to emulate Christ. It includes stories, interviews, living scriptures, quotes, and more that move you to good thoughts, feelings, words, works, and deeds.</p>\r\n\r\n<p>Transformation starts from the inside out and is the result of turning heart and mind to God. It is more than remembering Him always, it is to be a doer of the word, including mastering your thoughts, feelings, words, and deeds. It is about emulating Him line upon line. In the process of emulating Him within the walls of your own temple, you are given power over your body. Thus, submitting to the will of the Lord isn&#39;t just about your heart and mind&mdash;it includes turning your physique over to Him.</p>\r\n\r\n<p>Jesus Christ tapped into the power of God to grow line upon line, perfection upon perfection. As such He set the bull&rsquo;s eye mark worthy of emulation. Not only did he set a perfect example, but when you make Him the focal point of your life, He is the vine or source to grant you access to the power of God. A power that will both stretch your vision and enables your growth to lay hold of every good thing.</p>\r\n\r\n<p>Furthermore, as you grow in living more and more correct principles, you partake of the fruits of the Spirit of God, including:</p>\r\n\r\n<p>* enjoying the fruits of peace, hope, and joy;<br />\r\n* being a fit vessel for the Lord;<br />\r\n* sharing your talents and these fruits with others;<br />\r\n* and multiplying those talents to prosper in the land and eternities.</p>\r\n\r\n<p>In short, this free podcast cast is an invitation to go and do mighty works. Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out.</p>\r\n\r\n<p>God prepared a way to bring about His purposes in love. Turn to Him and He will turn to you. His divine spiritual DNA runs within your soul. Give up the carnally minded man, and surrender your physique and life to the divine nature within you. Then you will tap into the waters and vine of Christ to bring about mighty words and works.</p>\r\n\r\n<p>Deep down you know His voice. Simply come unto Him and hearken to it. Sin, as defined in the Doctrine and Covenants section 84 verses 49-53, is to disobey the good prompting or deed when it is presented to you. Cease to ignore the divine river of truth waiting to express itself from within you. Be therefore a doer of the word, not just a hearer! Emulating Christ will transform your physique from a cottage to a temple worthy of the constant companionship of the Holy Ghost.</p>\r\n\r\n<p>A place where God&rsquo;s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.&nbsp;</p>', 'Story About Kent and his Family', '7604-PastedGraphic-1.png', '<p>We Love What We Do</p>\r\n\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'This free podcast is an invitation to go and do mighty works.', '7552-Cover-FourStepJourney_SecondeditioncoverartpapereditECApril2024_page-0001.jpg', '<p>Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out. A place where God&rsquo;s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.</p>', '3632-263-service_2-1.jpg', '<h3>A Mormon&#39;s Four-Step Journey to Holiness: How to Discover Purpose, Embrace Trials, and Align Your Life with God&#39;s Word</h3>', '2024-04-06 12:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `name`, `email`, `phone`, `password`, `profile`, `is_super`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', '', '$2y$10$0bI82y2UE80lf0fV9SpXqe2XswGhG5wunIOK9zTVAFT047Gou8bcS', 'jesus-3476251.jpg', 0, NULL, '2024-05-15 07:42:37', '2024-05-16 01:35:43', 1);

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
  `heading5` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`bannerId`, `heading1`, `heading2`, `heading3`, `heading4`, `type`, `heading5`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Engage in', 'the Lord\'s business', 'and He will', 'prosper your', 'heart,mind,body,business', 'As agents of Christ you have access to God\'s power to engage in His business!', '3875-banner-01.jpg', '2024-05-25 11:37:20', '2024-05-25 11:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL DEFAULT '0',
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `slug_url` text,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogId`, `categoryId`, `title`, `image`, `description`, `status`, `slug_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'Demo Blog 1', '1582816359025.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>', 1, 'demo-blog-1', '2024-05-16 12:04:11', '2024-05-16 12:05:32'),
(2, 2, 'Demo Blog 2', 'courses-img-3.jpg', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.</p>\r\n\r\n<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available</p>', 1, 'demo-blog-2', '2024-05-16 12:06:01', '2024-05-16 14:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`companyId`, `company_name`, `logo`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Apple podcast', 'company/MrTOwi0shRqZbKhQBoDZZ2DLiSfDfn0n1x3qi2VL.png', 'https://podcasts.apple.com/us/podcast/disciples-prosper/id1677752886', '2024-04-06 08:51:57', '2024-04-17 23:22:42'),
(2, 'Castbox', 'company/Ww1uLS4JQgKb6TGjs6TIezgsh5RPbcf2fWJjekNR.png', 'https://castbox.fm/channel/id5373652', '2024-04-06 08:52:10', '2024-04-17 23:22:55'),
(4, 'Goodpods', 'company/Cny8QnhfbSRHaJ3xuS8IKtLPt7qDOYTFbw2J80mQ.png', 'https://goodpods.com/podcasts/disciples-prosper-265461', '2024-04-06 08:55:31', '2024-04-17 23:23:10'),
(5, 'iHeartRadio', 'company/xDKqxbP2VoFflWM4YICDRDYkwL1L4bUaaGIJvHdH.png', 'https://www.iheart.com/podcast/110895177', '2024-04-06 08:55:41', '2024-04-17 23:23:22'),
(6, 'Rss', 'company/brdvrkfp856OuZIOEg6zYUW60C8Ny6AOjtnDksQs.png', 'https://feeds.castos.com/x44jm', '2024-04-06 08:55:52', '2024-04-17 23:23:37'),
(7, 'Overcast', 'company/a8alhksNrej4xOEPcmqf9Y1zAJ9GQUmckOq2RKEV.png', 'https://overcast.fm/itunes1677752886', '2024-04-06 08:56:03', '2024-04-17 23:23:54'),
(8, 'pocket casts', 'company/Z5bZYIYq3Yd3QmdXXDQdKNFVgJbGLEKyrkbPEZSV.png', 'https://pca.st/npacf6tm', '2024-04-06 08:56:20', '2024-04-17 23:24:10');

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
  `message` text,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `ebookId` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `episodeId` int(11) NOT NULL,
  `podcastId` int(11) NOT NULL DEFAULT '0',
  `title` text,
  `image` varchar(255) DEFAULT NULL,
  `attachment` text,
  `description` longtext,
  `position` int(11) NOT NULL DEFAULT '0',
  `slug_url` text,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `getintouch`
--

CREATE TABLE `getintouch` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` text,
  `terms` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `heading1` varchar(100) DEFAULT NULL,
  `description1` text,
  `heading2` varchar(100) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `description2` text,
  `type` int(11) NOT NULL DEFAULT '1',
  `url` text,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `heading1`, `description1`, `heading2`, `image2`, `description2`, `type`, `url`, `created_at`, `updated_at`) VALUES
(1, 'About the Show', '<p>You were called to do more than to eat, drink, and procreate. You were meant for more than beastly instincts and survival of the fittest. As a disciple of Christ you are to emulating Him, which is to become of one heart, one mind, and to have no poor among you&mdash;which requires you to prosper. For how can you have no poor among you, if everyone is poor? You can&#39;t. Thus you are taught over and over that when you keep the commandments, you will prosper in the land. Furthermore, when your eye is single to the glory of God, all things will be added unto you, and you will be free with your substance (faith, wealth, &amp; time) that others may be rich like unto you.&nbsp;</p>\r\n\r\n<p>As a Disciple of Christ you were born to prosper by Emulating Christ! Like Him, you must learn to surrender your will to God&#39;s will. Literally the exchange rate is mind blowing. God asks for all you have, your will, and in exchange He will give you all He has&mdash;including peace that surpasses understanding, confidence before God and your neighbor, access to control and handle the powers of heaven, and much more.&nbsp;</p>\r\n\r\n<p>God has charted a course for you to prosper like unto Him. He has prepared the perfect way and provided an eternal elixir for you to be One with Him. Ancient alchemist spoke of transmuting lead to gold, but this figurative image pails in comparison to what God has in store for you! Will you let the Man of Holiness, even God the Father, transmute you through the grace of Christ?&nbsp;</p>\r\n\r\n<p>Come unto Christ and be perfected in Him! Then you will have power to subdue the fallen beastly instincts of the &lsquo;natural man&rsquo; you were born with. God&rsquo;s word, including His plan and path for you, is plain and simple. He wants to give you all that He has and is, and all He asks for is a broken heart and contrite spirit, even the surrender of your will. When you humble yourself and submit your heart and mind to Him, He will endow you with the His Holy Spirit.&nbsp;</p>\r\n\r\n<p>Through God&rsquo;s Power (TGP) you will partake of the &lsquo;divine nature&rsquo; and learn to subdue the natural man. This transformation starts from the inside and will enlarge your understanding, feelings, tastes, visions, powers, etc. &hellip; but this is not all! As you purify your heart&mdash;making your mind single to God&mdash;you will lay hold of every good thing, including the form and power of godliness.&nbsp;</p>\r\n\r\n<p>Please do not confuse mans laws of success with God&rsquo;s Law. God wants to give you all He has, likewise wisemen strive to give you all they have. But at the end of the day, do you want to be wise like unto King Solomon, which was the richest man on earth&mdash;receiving some 40 tons of Gold as an annual salary? Or do you want to receive all that God has, including power to create worlds without number?&nbsp;</p>\r\n\r\n<p>Remember the words of Christ, what good does it do to have all of the wealth of the world, and lose your soul. Therefore, the invitation to prosper as a disciple of Christ is to be more than a good and honorable man of the earth who has the form of godliness by living the laws of success. It is to Emulate Christ enabling you to have the form and the power of godliness.&nbsp;</p>\r\n\r\n<p>Your host Kent, will share how &lsquo;the vine of Christ&#39; has transformed everything in his life, including two major transformations:&nbsp;<br />\r\n1. blessing him to overcome the emotional scars of child abuse and a broken home by turning his life to Christ in his 18th year&mdash;<br />\r\n2. to 30 years later, as a father of 6, turning his body to God, to overcome a 23 year battle with mental illness, which enabled him to turn from an overweight salesman to a fit entrepreneur and more.&nbsp;</p>\r\n\r\n<p>Disciples Prosper by Emulating Christ because they allow God to make more of their life than they can on their own. Will you prosper from the inside out by emulating Christ, too?&nbsp;</p>', 'This free podcast is an invitation to go and do mighty works.', '4823-263-service_2-1.jpg', '<p>Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out. A place where God&rsquo;s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.</p>', 2, '4408-NewRangeRoverVelar.mp4', '2024-04-06 12:19:16', '2024-05-25 11:33:23');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `podcastId` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `podcast_url` longtext,
  `slug_url` varchar(200) DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`podcastId`, `title`, `image`, `description`, `podcast_url`, `slug_url`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Jesus is The Mark Video Episodes 2023', '', '<p>&raquo; Kent points humble overachievers to Jesus Christ the Mark, to transform their physique, family, and business with God\'s power. Why? Jesus Christ tapped into the power of God to grow line upon line, perfection upon perfection. As such He set the bull&rsquo;s eye mark worthy of emulation. Not only did he set a perfect example, but when you make Him the focal point of your life, He is the vine or source to grant you access to the power of God. A power that will both stretch your vision and enables your growth to lay hold of every good thing. This podcast is dedicated to sharing Kent\'s journey in make Jesus the Mark (back to 2020 on https://podcast.jesusisthemark.com). It includes stories, interviews, living scriptures, quotes, and more that move you to good thoughts, feelings, words, works, and deeds. Transformation starts from the inside out. Turn your heart to God by making Jesus Christ the Mark, even the focal point of your life. In so doing, you will learn to master your thoughts, feelings, words, and deeds. You will learn line upon line to emulate the Master of Masters in all that you do and say. Furthermore, as you grow in correct principles and partake of the fruits of the Spirit of God, it is hoped that you will go and do the doctrine of Christ that you may know His fruits. Fruits such as: &mdash; being more than you thought possible; &mdash; peace and hope amongst personal painful experiences; &mdash; and joy in service&mdash;that is sharing your talents with others that they may taste of the goodness &mdash; you&rsquo;ve experienced, etc. In short, this free podcast cast is an invitation to go and do mighty works. Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out. God prepared a way to bring about His purposes in love. Turn to Him and He will turn to you. His divine spiritual DNA runs within your soul. Give up the carnally minded man, and surrender your physique and life to the divine nature within you. Then you will tap into the waters and vine of Christ to bring about mighty words and works. Jesus is The Mark, therefore, emulate Him. Syn is an Anglo-Saxon word meaning missing the Mark&mdash;as is miss the target or bull\'s eye. Deep down you know His voice, but sin is to disobey the good prompting or deed when it is presented to you. Cease to ignore the divine river of truth waiting to express itself from within you. Be therefore a doer of the word, not just a hearer! Make Jesus the Mark and He will transform your little cottage to more than a mansion, as C.S. Lewis describes. He will turn your slum like shack or even mansion to something more expansive, even unto a temple of the Most High God. A place where God&rsquo;s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.</p>', 'https://emulate-christ.com/', 'jesus-is-the-mark-video-episodes-2023', 2, '2024-03-13 13:15:17', '2024-05-16 14:21:12'),
(2, 'Disciples Prosper Video Episodes 2024', '', '<p>DISCIPLES PROSPER PODCAST is dedicated to sharing Kent\'s journey, as He turns to the Lord and makes Jesus the focal point in every area of his life. In here, he will invite and coach you to do likewise, even to emulate Christ. It includes stories, interviews, living scriptures, quotes, and more that move you to good thoughts, feelings, words, works, and deeds.</p>\r\n<p>Transformation starts from the inside out and is the result of turning heart and mind to God. It is more than remembering Him always, it is to be a doer of the word, including mastering your thoughts, feelings, words, and deeds. It is about emulating Him line upon line. In the process of emulating Him within the walls of your own temple, you are given power over your body. Thus, submitting to the will of the Lord isn\'t just about your heart and mind&mdash;it includes turning your physique over to Him.</p>\r\n<p>Jesus Christ tapped into the power of God to grow line upon line, perfection upon perfection. As such He set the bull&rsquo;s eye mark worthy of emulation. Not only did he set a perfect example, but when you make Him the focal point of your life, He is the vine or source to grant you access to the power of God. A power that will both stretch your vision and enables your growth to lay hold of every good thing.</p>\r\n<p>Furthermore, as you grow in living more and more correct principles, you partake of the fruits of the Spirit of God, including:<br>&nbsp; &nbsp; &nbsp;* enjoying the fruits of peace, hope, and joy;<br>&nbsp; &nbsp; &nbsp;* being a fit vessel for the Lord;<br>&nbsp; &nbsp; &nbsp;* sharing your talents and these fruits with others;<br>&nbsp; &nbsp; &nbsp;* and multiplying those talents to prosper in the land and eternities.</p>\r\n<p>In short, this free podcast cast is an invitation to go and do mighty works. Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out.</p>\r\n<p>God prepared a way to bring about His purposes in love. Turn to Him and He will turn to you. His divine spiritual DNA runs within your soul. Give up the carnally minded man, and surrender your physique and life to the divine nature within you. Then you will tap into the waters and vine of Christ to bring about mighty words and works.</p>\r\n<p>Deep down you know His voice. Simply come unto Him and hearken to it. Sin, as defined in the Doctrine and Covenants section 84 verses 49-53, is to disobey the good prompting or deed when it is presented to you. Cease to ignore the divine river of truth waiting to express itself from within you. Be therefore a doer of the word, not just a hearer! Emulating Christ will transform your physique from a cottage to a temple worthy of the constant companionship of the Holy Ghost.</p>\r\n<p>A place where God&rsquo;s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.</p>\r\n<p>Kent helps:<br>&raquo; true disciples&nbsp;<br>&raquo; Emulate Christ&nbsp;<br>&raquo; from the inside out</p>', 'https://emulate-christ.com/', 'disciples-prosper-video-episodes-2024', 3, '2024-03-13 13:15:47', '2024-05-16 14:21:12'),
(3, 'Activate the Atonement—Mini-Book', '', '<p>A new podcast show called: \"Activate the Atonement&mdash;Mini-Book\" with only 5 episodes. A video book inviting you to move from 2nd hand experience with God to first hand experience. It will also address the idea of turning your weakness to strength, with the power of God, enabling you to do Mighty Works!</p>', 'https://emulate-christ.com/', 'activate-the-atonement-mini-book', 4, '2024-04-18 14:03:25', '2024-05-16 14:21:12'),
(4, 'Emulate Christ', NULL, '<p>Kent Eyner Nielsen<br />\r\nA Christ-Centered family man who invites men and women to turn their lives to the Lord.  God will do more with your life than you can, so why not let Him? </p>\r\n\r\n<p>====</p>\r\n\r\n<p>Emulate Christ is a movement about covenanting your life to the Lord, knowing He will make more of your life than you can. He will:</p>\r\n\r\n<p>“deepen [your] joys, </p>\r\n\r\n<p>expand [your] vision, </p>\r\n\r\n<p>quicken [your] minds, </p>\r\n\r\n<p>… lift [your] spirits, </p>\r\n\r\n<p>multiply [your] blessings, </p>\r\n\r\n<p>increase [your] opportunities, </p>\r\n\r\n<p>comfort [your] souls, </p>\r\n\r\n<p>raise up friends, </p>\r\n\r\n<p>and pour out peace.”*</p>\r\n\r\n<p>If you seek after these things, join the Emulate Christ Community,** where like-minded covenant keeping disciples of Christ strive to be like Abba, even as He did.</p>\r\n\r\n<p>====</p>\r\n\r\n<p>Christ referenced God as Abba—which translates directly as Daddy—thus teaching his true relation to Him. Furthermore He taught:</p>\r\n\r\n<p>“Behold I have given unto you my gospel, and this is the gospel which I have given unto you—that I came into the world to do the will of my Father, because my Father sent me” (3 Nephi 27:13).</p>\r\n\r\n<p>He expounded,</p>\r\n\r\n<p>“Therefore, what manner of men ought ye to be? Verily I say unto you, even as I am” (3 Nephi 27:27).</p>\r\n\r\n<p>This community is dedicated to you, a son or daughter of God, who strives to Emulate Christ.</p>\r\n\r\n<p>====</p>\r\n\r\n<p>*Russell M. Nelson, Liahona, Nov 2022.</p>', 'https://emulate-christ.com/', 'emulate-christ', 1, '2024-04-18 16:17:18', '2024-05-16 14:34:39'),
(5, 'Wise Men Sales', '', '<div><code>This podcast is part of a sister company. It is where I implement the emulate Christ principles in another business, to prove that it works in transforming business life, even as it did my physical body&rsquo;s life.</code></div>\r\n<div>&nbsp;</div>', 'https://emulate-christ.com/', 'wise-men-sales', 5, '2024-04-19 10:07:50', '2024-05-16 14:21:12');

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
  `ebook` text,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settingId`, `logo`, `footer_logo`, `favicon`, `title`, `address`, `email`, `support_email`, `phone`, `phone2`, `website`, `facebook`, `link`, `skool`, `youtube`, `instagram`, `threads`, `ebook`, `updated_at`) VALUES
(1, 'Logo DP by EC less stars.jpeg', 'Logo DP by EC less stars.jpeg', 'Layer 0.png', 'PICD Staffing Services', NULL, 'support@disciplesprosper.com', 'info@oberlin.company.com', '+1 385 244 0092', '(800) 060-0730', 'DisciplesProsper', 'https://www.facebook.com/disciplesprosperllc', 'https://lnk.bio/disciplesprosper', 'https://www.skool.com/emulatechrist/about', 'https://youtube.com//@disciplesprosper?sub_confirmation=1', 'https://www.instagram.com/disciplesprosper/', 'https://www.threads.net/@disciplesprosper', '1715849877.pdf', '2024-01-12 08:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonialId` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  MODIFY `companyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `podcastId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
