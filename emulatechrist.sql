-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2024 at 02:39 PM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.17

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
  `id` int NOT NULL,
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
(1, 'About Emulate Christ', 'about/QvGWa2LeqgrIYp5NbLTl0KSXw6coJu743Sn3HVIH.jpg', '<p>EMULATE CHRIST PODCAST is dedicated to sharing Kent\'s journey, as He turns to the Lord and makes Jesus the focal point in every area of his life. In here, he will invite and coach you to do likewise, even to emulate Christ. It includes stories, interviews, living scriptures, quotes, and more that move you to good thoughts, feelings, words, works, and deeds.</p>\r\n<p>Transformation starts from the inside out and is the result of turning heart and mind to God. It is more than remembering Him always, it is to be a doer of the word, including mastering your thoughts, feelings, words, and deeds. It is about emulating Him line upon line. In the process of emulating Him within the walls of your own temple, you are given power over your body. Thus, submitting to the will of the Lord isn\'t just about your heart and mind&mdash;it includes turning your physique over to Him.</p>\r\n<p>Jesus Christ tapped into the power of God to grow line upon line, perfection upon perfection. As such He set the bull&rsquo;s eye mark worthy of emulation. Not only did he set a perfect example, but when you make Him the focal point of your life, He is the vine or source to grant you access to the power of God. A power that will both stretch your vision and enables your growth to lay hold of every good thing.</p>\r\n<p>Furthermore, as you grow in living more and more correct principles, you partake of the fruits of the Spirit of God, including:</p>\r\n<p>* enjoying the fruits of peace, hope, and joy;<br>* being a fit vessel for the Lord;<br>* sharing your talents and these fruits with others;<br>* and multiplying those talents to prosper in the land and eternities.</p>\r\n<p>In short, this free podcast cast is an invitation to go and do mighty works. Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out.</p>\r\n<p>God prepared a way to bring about His purposes in love. Turn to Him and He will turn to you. His divine spiritual DNA runs within your soul. Give up the carnally minded man, and surrender your physique and life to the divine nature within you. Then you will tap into the waters and vine of Christ to bring about mighty words and works.</p>\r\n<p>Deep down you know His voice. Simply come unto Him and hearken to it. Sin, as defined in the Doctrine and Covenants section 84 verses 49-53, is to disobey the good prompting or deed when it is presented to you. Cease to ignore the divine river of truth waiting to express itself from within you. Be therefore a doer of the word, not just a hearer! Emulating Christ will transform your physique from a cottage to a temple worthy of the constant companionship of the Holy Ghost.</p>\r\n<p>A place where God&rsquo;s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.&nbsp;</p>', 'Story About Kent and his Family', 'about/R9uuEsnBnxt9wWbdoeBTrljDrYcPV9F3tWIYQwms.png', '<h4>We Love What We Do</h4>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', 'This free podcast is an invitation to go and do mighty works.', 'about/2bcxi0uJXS9OnTbTGdlZt4CVWf0jRGq3P45zopbp.jpg', '<p>Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out. A place where God&rsquo;s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.</p>', 'about/afSN1HGu86KzjE4Nh0aBlHLHDgKHwdGrUdZNRgen.jpg', '<h3>A Mormon\'s Four-Step Journey to Holiness: How to Discover Purpose, Embrace Trials, and Align Your Life with God\'s Word</h3>', '2024-04-06 12:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `profile` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `is_super` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `name`, `email`, `phone`, `password`, `profile`, `is_super`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(2, 'Kent', 'kent@disciplesprosper.com', '', '$2y$10$vMWnT2PrDjNCKe46u8gI1e7ejqYCjj7X8Tn4UHGje3nhjgXtRkQaC', NULL, 0, NULL, '2024-04-10 07:42:25', '2024-04-10 07:42:43', 1),
(3, 'Joseph', 'kent.joseph.1129@gmail.com', '', '$2y$10$vMWnT2PrDjNCKe46u8gI1e7ejqYCjj7X8Tn4UHGje3nhjgXtRkQaC', NULL, 0, NULL, '2024-04-10 07:42:31', '2024-04-10 07:42:49', 1),
(4, 'Clair', 'clairemnielsen@outlook.com', '', '$2y$10$vMWnT2PrDjNCKe46u8gI1e7ejqYCjj7X8Tn4UHGje3nhjgXtRkQaC', NULL, 0, NULL, '2024-04-10 07:42:37', '2024-04-10 07:42:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `bannerId` int NOT NULL,
  `heading1` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `heading2` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `heading3` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `heading4` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `heading5` text COLLATE utf8mb4_general_ci,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`bannerId`, `heading1`, `heading2`, `heading3`, `heading4`, `type`, `heading5`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Emulate Christ', 'to Be Like Abba', 'and God\'s power will', 'transform your', 'body,family,business,community', 'Turn your will—including your heart, mind, body, and business—to God and prosper.', 'banner/tkFTYT7y8pSjsdsGJVbNwmwMLtg9IQIyFSxUGdL5.jpg', '2024-04-25 08:58:13', '2024-04-25 08:58:13');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogId` int NOT NULL,
  `categoryId` int NOT NULL DEFAULT '0',
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `status` int NOT NULL DEFAULT '1',
  `slug_url` text,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogId`, `categoryId`, `title`, `image`, `description`, `status`, `slug_url`, `created_at`, `updated_at`) VALUES
(11, 13, 'God is the Provider', 'blog/ohFs614z5uScEppmR7AKTVUhWTCvL9DjtBDx01Da.jpg', '<p dir=\"ltr\"><strong>God is the Provider </strong>and to be like Abba in this world, but not of it, requires one to multiply their talents. In The Family: A Proclamation to the World the Lord&rsquo;s servants teach the ideal family setting. A man and a woman, twine in flesh have different roles within the family unit: the man has the three P&rsquo;s (Protect, Preside, and Provide) and the woman is to nurture.</p>\r\n<p dir=\"ltr\">This notion has been a battle for me, as I strive to have an eye single to the glory of God. Ever since serving a mission as a young man to Outer Mongolia, I have dreamt of being a full-time missionary. But then, you come home and are taught to learn how to do the 3 P&rsquo;s for your family. When you start that family, your eyes are opened to the fact that you have more people to care for than yourself.</p>\r\n<p dir=\"ltr\">Time and time again, I have been in pursuit of providing for my family and then I have sabotaged my good fortune in the name of not doing the Lord&rsquo;s work, or finding greener pastures elsewhere.</p>\r\n<p dir=\"ltr\">In <strong>June 2023</strong> I decided to run my own business knowing the Lord would provide. Well, we did provide and we had a roof over our heads&mdash;but the providing did not come in the form of being compensated for my labors. It came with the assets of other persons.</p>\r\n<p dir=\"ltr\">Finally, after hemorrhaging funds on ads, editors, VA, etc.&mdash;for some 6 months&mdash;without an income. I returned to an entrepreneurial gig that I had done previously.</p>\r\n<p dir=\"ltr\">I worked my guts out for 10 weeks and made some money to provide for our needs and it was intoxicating to fill the void. However, with this turn in events, I was rarely home and when I was home after little ones were in bed, I would work into the late hours producing content. Then arise early for the gym, eat breakfast as a family, and repeat.</p>\r\n<p dir=\"ltr\">I was on fire and the Lord sustained me; however, my family paid dearly and the last two weeks of the ten-week stint, I determined to provide for my family another way.</p>\r\n<p dir=\"ltr\">Initially, it was my intent to receive money as a coach and to use my talents in coaching clients to put the Lord first in their lives. Yet, time and time again, I felt uneasy with such a notion of collecting money for services rendered. Deep down I knew that the word of the Lord should be free and that I was to be free with my substance.</p>\r\n<p dir=\"ltr\">When it comes to being free with your substance, I&rsquo;m not referring to opening a food bank, or a charity foundation to be a philanthropist. As Paul taught, <em>faith is a substance of things hoped for but not seen</em> <strong>(Hebrews 11:1)</strong>. Meaning being free with my substance of faith.</p>\r\n<p dir=\"ltr\">I recall a former leader in my life, saying that within his local church, there were many wealthy men. They would be free with their money, but they would not share their knowledge to help their neighbors get out of poverty mindsets.</p>\r\n<p dir=\"ltr\">On another occasion, I recall a friend complaining about online leaders giving value away, but at the end of the day, they just wanted you to pay them a boatload of money to put what they taught to work.</p>\r\n<p dir=\"ltr\">Here is the point. After a lifetime of struggle with providing for my family, desiring to go without a purse or script, but then wanting to get off of the dole, then doing well, then falling back to wanting to create free content&mdash;and after forty years of trying to answer the question, what should I do when I grow up &hellip; I finally have the answers.</p>\r\n<p dir=\"ltr\">In the name of being free with my substance, I have created this website&mdash;<a href=\"http://www.emulatechrist.com\">www.emulatechrist.com</a> to share the wisdom of the ages. Wisdom granted and received over the past 30+ years of consecrated effort&mdash;to see what He could make of me.</p>\r\n<p dir=\"ltr\">The initial intent of this website is to maintain a video podcast and blog, eventually, it would host a social media platform and an e-learning center. But for now, the community is found here:&nbsp;</p>\r\n<p dir=\"ltr\">https://www.disciplesprosper.com/community-about</p>\r\n<p dir=\"ltr\">You are welcome and encouraged to explore and share what you find here. There is no cost to the services. However, if you are in the position to exchange talents, you are welcome to click the gratuity tab to help offset the cost of development, and production, and to help my family be free with our financial substance too.</p>\r\n<p dir=\"ltr\">Now if you would like to work with me 1:1, I would be happy to provide this service &hellip; However, since it would be diving into my family, creative, or work time, I would need to charge for these services. Ideally, I would like to produce content full-time with some coaching here and there, but in the meantime, I am working a side gig to meet my family\'s needs. Furthermore, coming back to where we started herein on God being the Provider &hellip; He does provide and likewise commands you to provide for those under your stewardship&mdash;while in the world, but not being of it.</p>\r\n<p dir=\"ltr\">Ideally, the human race will move in the direction of multiplying and exchanging one&rsquo;s talents&mdash;as it moves towards being of one heart and one mind, with no poor among it (As Zion is defined in Moses 7:18). In the meantime, let&rsquo;s not forget the Lord&rsquo;s command to work by the sweat of our brow. Let&rsquo;s go to work by day, and rejoice by night in sharing the good news from the housetops&mdash;including online.</p>\r\n<p dir=\"ltr\">Be the light on the hill, within your stewardship. Learn your role and magnify your duty and office therein. If your creative talents don&rsquo;t pay the bills, yet, dive into a gig that will enable you to provide for your family, while pursuing God&rsquo;s Kingdom Come from the Inside-Out.</p>\r\n<p>&nbsp;</p>', 1, 'god-is-the-provider', '2024-04-11 14:03:35', '2024-04-22 13:58:13'),
(13, 13, 'God is the Master Gardner', 'blog/5eAYiIRU5c1ORDtfWAMANFXo7fiDMsqL6Zgp6786.png', '<p>God knows you and has prepared a unique individual plan of happiness designed just for you and your journey in life. Christ is the vine and you are the branch. As part of this plan of happiness God reserves the right to prune His vineyard&mdash;and He does it with purpose and your eternal growth in mind.</p>\r\n<p><br>I turned my life to God at the age of 18 and was on fire with growth like unto the Currant bush describe in the following video. I thought I was immovable and firm&mdash;yet in my 26th year I was cut down and diagnosed with my greatest fear. How could this be? I&rsquo;ve been a good boy, since turning my life to Him&mdash;am I cursed for doing what is right? How could this be? &mdash;were some of my thoughts for 3 years, while I tried to understand why I would be cut down. Then I came upon a life changing quote that helped me to understand the pruning and need for me to not only be a good boy, but to raise the bar and strive to be a holy man, like unto God, the Man of Holiness.</p>\r\n<p><br>Well, it was 23 years later&mdash;up through this past year (Spring 2023&mdash;Spring 2024) before I understood the significance of the pruning and was given power to overcome my challenges&mdash;and now the fruits are sweet! If you&rsquo;ve been cut down, accept the invitation to grow back stronger and closer to the Lord than you previously could have imagined. He will heal you and endow you with His power to turn your weakness to a strength. Here is the video referenced, that my daughter sent and asked my thoughts on: <a title=\"https://youtu.be/oDrhvm9EnJ4\" href=\"https://youtu.be/oDrhvm9EnJ4\" target=\"_blank\" rel=\"noopener noreferrer\">https://youtu.be/oDrhvm9EnJ4</a></p>', 1, 'god-is-the-master-gardner', '2024-04-19 11:31:51', '2024-04-24 12:47:12'),
(14, 13, 'A great religious trust ...?', 'blog/KjEK9hi2aA4X65iIcczF2D7NqyLbH7PHAd0o5lud.png', '<p>As part of my weekly reading to my family ... I\'ve selected to read William George Jordan\'s book The Power of Truth. This past week I read the following quote that validated my thoughts on the significance of striving to live Christ\'s teachings regardless of what church you were baptized into.</p>\r\n<p><br>Image a world where men and women strove to live His teachings, I.E.: do unto others has they would have done unto you; do greater works than Christ; be ye therefore perfect; and much much more? Oh, how fast the words of Jeremiah would come to pass found in chapter 31 verses 33-34!</p>\r\n<p><br>Regardless of your religious affiliation, live the Master of Masters teachings and become one with the Father, even as He did (John 10:30). Then we will move in the direction of being of one heart, one mind, and have no poor among us (Moses 7:18) ... as we would be free with our substance (not necessarily money here, but with \"whatsoever, he has said unto you\" John 14:26) and make \"all men rich like unto ourselves\" (Jacob 2:17-19). And what is wealth, or riches?</p>\r\n<p><br>Wisdom to come to know God which is life eternal is the ultimate richness to seek after (See Doctrine and Covenants 11:7 &amp; 6:7; and John 17:3)! It is to know and surrender to the light you have access to. When you do, you witness you heard His word, you are prepared to receive more, and you validate that principle by observing the fruits of your choices and labors&mdash;until you comprehend all things (Doctrine and Covenants 88:67). (See also John 7:17).</p>\r\n<p><br>When we focus on living Christ\'s teachings, we increase our ability and capacity to do greater works and bring about world peace and prosperity. Without further ado ... here is the Jordan quote referenced in the beginning:</p>\r\n<p><br>&ldquo;The world needs a great religious trust which will unite the churches into a single body of faith, to precede and prepare the way for the greater religious trust predicted in Holy Writ&mdash;the millennium.&rdquo; (William George Jordan, The Power of Truth, 1902).</p>\r\n<p><br>Are you striving to live Christ teachings? If so, send at least an emoji and go the extra mile with your favorite teaching of the Master?</p>\r\n<p><br>Remembering by the little things are great things like Emulating Christ are brought about in your life from the inside out!</p>', 1, 'a-great-religious-trust', '2024-04-19 15:40:49', '2024-04-24 12:51:37'),
(15, 13, 'Olive Tree Allegory', 'blog/uHIKTttm2JMz7dPaVl1NewDSLgpcQH3U5tRfoyUS.png', '<p>Emulating Christ begins with knowing Him. You only know Him by living what He, or His servants, teach; then by the fruits of your obedience you know whether His teachings are from God or not (John 7:17).</p>\r\n<p><br>Remember: by their fruits you shall know them. What fruits are you bearing? Do your words and deeds Emulate Christ?</p>\r\n<p><br>The following powerful video, produced by the restored church, portrays God\'s intent to help you bring forth good fruits:</p>\r\n<p><br><a title=\"https://www.disciplesprosper.com/s/Olive-Tree-Video\" href=\"https://www.disciplesprosper.com/s/Olive-Tree-Video\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.disciplesprosper.com/s/Olive-Tree-Video</a></p>', 1, 'olive-tree-allegory', '2024-04-19 15:44:45', '2024-04-24 13:19:02'),
(16, 13, 'Teaser ... bought off at such low prices! (EC EP 1).', 'blog/hkatJzokUhDM6aD0GMyrzWyny6xFSYgyq5TfX0MW.png', '<p>I just completed recording Episode #1 for a new podcast called Emulate Christ&mdash;with the same above title. Here is the quote used to kick it off:</p>\r\n<p><br>How tragic it is that so many mortals are mercenaries for the adversary; that is, they do his bidding and are hired by him&mdash;bought off at such low prices. A little status, a little money, a little praise, a little fleeting fame, and they are willing to do the bidding of him who can offer all sorts of transitory \"rewards,\" but who has no celestial currency. It is amazing how well the adversary has done; his mercenaries never seem to discover the self-destructive nature of their pay and the awful bankruptcy of their poor paymaster! (Neal A. Maxwell, Things as They Really Are, pg 42, 1978, bold added for emphasis).</p>\r\n<p><br>Who is your paymaster? Are you living in a hypnotic rhythm, such as described in Napoleon Hill\'s book \"Outwitting the Devil.\" It is akin to C.S. Lewis\'s book, The ScrewTape Letters!</p>\r\n<p><br>I highly recommend the hard copy of this edition of Napoleon Hill\'s, Outwitting the Devil book:&nbsp;</p>\r\n<div class=\"styled__PostContent-sc-g7syap-11 EzjKv\">\r\n<div class=\"Box-sc-1kefve6-0 Column-sc-1kucbtm-0 jXrWvt fjnGDs\">\r\n<div class=\"Box-sc-1kefve6-0 kVUEcw\">\r\n<div class=\"styled__Wrapper-sc-y5pp90-0 JeZEb\">\r\n<div class=\"styled__Paragraph-sc-y5pp90-3 eHgPWw\"><a title=\"https://www.amazon.com/dp/1640951814/\" href=\"https://www.amazon.com/dp/1640951814/\" target=\"_blank\" rel=\"noopener noreferrer\">https://www.amazon.com/dp/1640951814/</a></div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"Box-sc-1kefve6-0 Column-sc-1kucbtm-0 jASWTQ fjnGDs\">\r\n<div class=\"Box-sc-1kefve6-0 Row-sc-w8j4n-0 styled__PostDetailReactionsWrapper-sc-g7syap-13 iYxyMD ldjQSs bGjCaM\">\r\n<div class=\"Box-sc-1kefve6-0 styled__ReactionWrapper-sc-ne2b7k-0 jASWTQ eozigH\">\r\n<div>&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>', 1, 'teaser-bought-off-at-such-low-prices-ec-ep-1', '2024-04-19 15:46:20', '2024-04-24 13:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Category 01', 'category/hEtNXxlqpW40WI6vbzwRhoXZAmPslJkKX7h5bHb8.png', 1, '2023-10-11 19:20:50', '2024-04-18 05:20:18'),
(13, 'Emulate Christ', 'category/7TfjWOgETIT1ADCd9BOym2KqpDzxeDqGQsLx4ZVl.png', 1, '2024-04-11 13:39:47', '2024-04-18 05:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `cmsId` int NOT NULL,
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
  `companyId` int NOT NULL,
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
(1, 'Apple podcast', 'company/MrTOwi0shRqZbKhQBoDZZ2DLiSfDfn0n1x3qi2VL.png', 'https://podcasts.apple.com/us/podcast/disciples-prosper/id1677752886', '2024-04-06 08:51:57', '2024-04-18 04:52:42'),
(2, 'Castbox', 'company/Ww1uLS4JQgKb6TGjs6TIezgsh5RPbcf2fWJjekNR.png', 'https://castbox.fm/channel/id5373652', '2024-04-06 08:52:10', '2024-04-18 04:52:55'),
(4, 'Goodpods', 'company/Cny8QnhfbSRHaJ3xuS8IKtLPt7qDOYTFbw2J80mQ.png', 'https://goodpods.com/podcasts/disciples-prosper-265461', '2024-04-06 08:55:31', '2024-04-18 04:53:10'),
(5, 'iHeartRadio', 'company/xDKqxbP2VoFflWM4YICDRDYkwL1L4bUaaGIJvHdH.png', 'https://www.iheart.com/podcast/110895177', '2024-04-06 08:55:41', '2024-04-18 04:53:22'),
(6, 'Rss', 'company/brdvrkfp856OuZIOEg6zYUW60C8Ny6AOjtnDksQs.png', 'https://feeds.castos.com/x44jm', '2024-04-06 08:55:52', '2024-04-18 04:53:37'),
(7, 'Overcast', 'company/a8alhksNrej4xOEPcmqf9Y1zAJ9GQUmckOq2RKEV.png', 'https://overcast.fm/itunes1677752886', '2024-04-06 08:56:03', '2024-04-18 04:53:54'),
(8, 'pocket casts', 'company/Z5bZYIYq3Yd3QmdXXDQdKNFVgJbGLEKyrkbPEZSV.png', 'https://pca.st/npacf6tm', '2024-04-06 08:56:20', '2024-04-18 04:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactId` int NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactId`, `name`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(1, 'Amit', 'kumar@gmail.com', '8754545454', 'Hello test', 'djksd jdssds jasd', '2024-03-05 12:20:26'),
(3, 'Mike Blare', 'mikeVera@gmail.com', '87212489187', 'Collaboration request', 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.monkeydigital.org/affiliate-dashboard/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Blare\r\n \r\nMonkey Digital', '2024-03-20 01:16:45'),
(4, 'Mike Baldwin', 'mikeAttaivittise@gmail.com', '82153398631', 'Increase sales for your local business', 'This service is perfect for boosting your local business\' visibility on the map in a specific location. \r\n \r\nWe provide Google Maps listing management, optimization, and promotion services that cover everything needed to rank in the Google 3-Pack. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/ranking-in-the-maps-means-sales/ \r\n \r\n \r\nThanks and Regards \r\nMike Baldwin\r\n \r\n \r\nPS: Want a ONE-TIME comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/', '2024-03-22 11:00:11'),
(5, 'Mike Holmes', 'mikeamurse@gmail.com', '89485249719', 'Domain Authority of your skywrapusa.com', 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\n \r\nThanks and regards \r\nMike Holmes', '2024-03-27 02:45:08'),
(6, 'Mike Wainwright', 'mikeUnpantamabs@gmail.com', '86183692627', 'FREE fast ranks for skywrapusa.com', 'Hi there \r\n \r\nJust checked your skywrapusa.com baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\nRegards \r\nMike Wainwright\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/', '2024-03-28 07:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `ebook`
--

CREATE TABLE `ebook` (
  `ebookId` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ebook`
--

INSERT INTO `ebook` (`ebookId`, `name`, `email`, `created_at`) VALUES
(2, 'Amit', 'igi203@goigi.in', '2024-04-18 12:54:37'),
(3, 'Shayne Myers', 'shaynem11@gmail.com', '2024-04-21 04:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `episodeId` int NOT NULL,
  `podcastId` int NOT NULL DEFAULT '0',
  `title` text,
  `image` varchar(255) DEFAULT NULL,
  `attachment` text,
  `description` longtext,
  `position` int NOT NULL DEFAULT '0',
  `slug_url` text,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`episodeId`, `podcastId`, `title`, `image`, `attachment`, `description`, `position`, `slug_url`, `created_at`, `updated_at`) VALUES
(2, 2, 'DP EP 1 - Real People with Real Problems', 'episode/1415-RealPeoplewithrealproblemsep1.jpg', 'episode/6181-021024DisciplesProsperFirstVSL.mp4-2024-2-108.23.54.mp4', '<p><span class=\"yt-core-attributed-string--link-inherit-color\">This podcast episode explores the topic of mental illness and the journey of overcoming it. Kent emphasizes the importance of aligning one\'s life to correct principles and experiencing the fruits of the character and attributes of Christ. The conversation with Mandy, a mother seeking answers about her loved one\'s struggle with schizophrenia, highlights the challenges and the need for support. The role of organizations like NAMI and their different support types are discussed. The host shares his personal experiences with mental illness, including hospitalization and the impact of medication. The importance of accountability and transformation is emphasized, along to emulate Jesus Christ. </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">In this conversation, Kent Eyner Nielsen shares his journey of finding purpose and redemption through trials and challenges. He emphasizes the importance of recognizing weakness as a gift and an opportunity for growth. Nielsen also discusses the transformative power of love and the role it plays in changing ourselves and others. He highlights the importance of faith and the miracles that can occur when we turn to God. Nielsen encourages listeners to find hope in their challenges and to recognize God\'s hand in all things. He concludes by emphasizing the importance of love and its ability to transform lives. </span></p>\n<p>&nbsp;</p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Takeaways </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Aligning one\'s life to correct principles leads to character development and attributes of Christ. Mental illness is a reality that affects many people, and support is crucial. NAMI provides valuable resources and support for individuals and families dealing with mental illness. Medication can be an important part of managing mental illness, but finding the right dosage and accepting its necessity can be a challenge. Transformation and accountability are key to overcoming mental illness and living a fulfilling life. Emulating Jesus Christ includes taking care of one\'s physical health and well-being. </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Chapters</span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=0s\" target=\"\" rel=\"nofollow\">00:00</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Introduction: Aligning Life to Correct Principles </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=175s\" target=\"\" rel=\"nofollow\">02:55</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> The Reality of Mental Illness </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=644s\" target=\"\" rel=\"nofollow\">10:44</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Conversation with Mandy: Seeking Answers </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=674s\" target=\"\" rel=\"nofollow\">11:14</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> NAMI and the Family-to-Family Class </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=805s\" target=\"\" rel=\"nofollow\">13:25</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Family-to-Family vs Peer-to-Peer Support </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=862s\" target=\"\" rel=\"nofollow\">14:22</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> The Limitations of NAMI </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=1512s\" target=\"\" rel=\"nofollow\">25:12</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Hospitalization and Delusions </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=1746s\" target=\"\" rel=\"nofollow\">29:06</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> The Influence of Evil Spirits </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=1866s\" target=\"\" rel=\"nofollow\">31:06</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> The Impact of Family History </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=1993s\" target=\"\" rel=\"nofollow\">33:13</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Struggles with Medication </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=2170s\" target=\"\" rel=\"nofollow\">36:10</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Transformation and Accountability </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=2300s\" target=\"\" rel=\"nofollow\">38:20</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Emulating Jesus Christ </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=2370s\" target=\"\" rel=\"nofollow\">39:30</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Gratitude and Self-Acceptance </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=2389s\" target=\"\" rel=\"nofollow\">39:49</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Finding Purpose and Redemption </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=2708s\" target=\"\" rel=\"nofollow\">45:08</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Weakness as a Gift </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=2943s\" target=\"\" rel=\"nofollow\">49:03</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> The Power of Love </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=3151s\" target=\"\" rel=\"nofollow\">52:31</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Changing Ourselves and Others </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=3363s\" target=\"\" rel=\"nofollow\">56:03</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> The Role of Faith and Miracles </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=3459s\" target=\"\" rel=\"nofollow\">57:39</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Finding Hope in Challenges </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=3685s\" target=\"\" rel=\"nofollow\">01:01:25</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> The Importance of the Temple </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=3723s\" target=\"\" rel=\"nofollow\">01:02:03</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> God\'s Plan for Happiness </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=3980s\" target=\"\" rel=\"nofollow\">01:06:20</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Transforming Weakness into Strength </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=4145s\" target=\"\" rel=\"nofollow\">01:09:05</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Recognizing God\'s Hand in All Things </span></p>\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=3yUzJorhAI4&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=11&amp;t=4232s\" target=\"\" rel=\"nofollow\">01:10:32</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> The Power of Love</span></p>', 0, 'dp-ep-1-real-people-with-real-problems', '2024-04-13 12:58:20', '2024-04-27 06:23:43'),
(3, 2, 'DP EP 2 - Members Only or Not', 'episode/7369-Membersonlyornot00.jpg', 'episode/5155-021124DPEP2MembersOnlyorNot.mp4-2024-2-1510.23.14.mp4', '<p><span class=\"yt-core-attributed-string--link-inherit-color\">In this conversation, Kent Eyner Nielsen shares his personal journey as a member of the Church of Jesus Christ of Latter-day Saints and his desire to work with individuals from all faiths. He emphasizes the importance of living the teachings of Jesus Christ and striving to be a disciple who actively follows and implements those teachings. Kent discusses the role of humility and personal growth in overcoming challenges and transforming lives. He encourages listeners to turn their lives over to the Lord and seek divine guidance. Kent also highlights the importance of sharing the teachings of Jesus Christ and living divine laws for prosperity. He emphasizes the need to build God\'s kingdom and learn from other faiths. Finally, Kent discusses the power of accessing the power of heaven through obedience and changing oneself to positively impact the world. </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Takeaways</span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"> Living the teachings of Jesus Christ and striving to be a disciple is essential for personal growth and transformation. Humility is a key attribute that allows individuals to recognize their weaknesses and seek divine guidance. Turning one\'s life over to the Lord and aligning with His teachings can lead to prosperity and abundance. It is important to share the teachings of Jesus Christ and learn from other faiths to gain a broader understanding of truth and light. </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Chapters&nbsp;</span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=9l-jXGlC6Fk&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=10&amp;t=0s\" target=\"\" rel=\"nofollow\">00:00</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Introduction and Background </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=9l-jXGlC6Fk&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=10&amp;t=199s\" target=\"\" rel=\"nofollow\">03:19</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Living the Teachings of Jesus Christ </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=9l-jXGlC6Fk&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=10&amp;t=424s\" target=\"\" rel=\"nofollow\">07:04</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Humility and Personal Growth </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=9l-jXGlC6Fk&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=10&amp;t=619s\" target=\"\" rel=\"nofollow\">10:19</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Overcoming Challenges and Transforming Lives </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=9l-jXGlC6Fk&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=10&amp;t=763s\" target=\"\" rel=\"nofollow\">12:43</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Turning Life Over to the Lord </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=9l-jXGlC6Fk&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=10&amp;t=849s\" target=\"\" rel=\"nofollow\">14:09</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Sharing the Teachings of Jesus Christ </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=9l-jXGlC6Fk&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=10&amp;t=1201s\" target=\"\" rel=\"nofollow\">20:01</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Building God\'s Kingdom </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=9l-jXGlC6Fk&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=10&amp;t=1405s\" target=\"\" rel=\"nofollow\">23:25</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Learning from Other Faiths </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=9l-jXGlC6Fk&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=10&amp;t=1544s\" target=\"\" rel=\"nofollow\">25:44</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Finding Light and Truth Everywhere </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=9l-jXGlC6Fk&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=10&amp;t=1862s\" target=\"\" rel=\"nofollow\">31:02</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Accessing the Power of Heaven </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=9l-jXGlC6Fk&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=10&amp;t=1919s\" target=\"\" rel=\"nofollow\">31:59</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Changing Yourself to Change the World</span></p>', 0, 'dp-ep-2-members-only-or-not', '2024-04-13 13:51:58', '2024-04-18 07:50:04'),
(4, 2, 'DP EP 3 - Gratitude for Rubbish', 'episode/6635-Gratitudeforrubbishep30.jpg', 'episode/5798-021424DPEP3GratitudeforRubbish.mp4-2024-2-1414.33.3.mp4', '<p><span class=\"yt-core-attributed-string--link-inherit-color\">In this conversation, Kent Eyner Nielsen discusses the importance of gratitude, particularly for trials and tribulations. He shares personal experiences and highlights the lessons learned from challenging circumstances. Kent emphasizes the need to change perspectives on trials and view them as invitations for growth and transformation. He also discusses the concept of striving for perfection and the power of love and words. Kent encourages listeners to seek divine counsel and access divine intervention and abundance through obedience to divine law. He concludes by discussing the law of increase and the importance of praising and emulating Jesus Christ. </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Takeaways </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Gratitude should extend beyond the good things in life and also include trials and tribulations. Trials are part of the divine plan and can serve as stepping stones for personal growth. Changing perspectives on trials can lead to transformation and a deeper understanding of oneself. Striving for perfection is possible through obedience to divine law and emulating Jesus Christ. &nbsp;</span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Chapters</span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">&nbsp;</span><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=iqWUGb3fEws&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=9&amp;t=0s\" target=\"\" rel=\"nofollow\">00:00</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Introduction and Gratitude </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=iqWUGb3fEws&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=9&amp;t=87s\" target=\"\" rel=\"nofollow\">01:27</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Recognizing Trials as Part of the Divine Plan </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=iqWUGb3fEws&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=9&amp;t=459s\" target=\"\" rel=\"nofollow\">07:39</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Changing Perspectives on Trials and Tribulations </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=iqWUGb3fEws&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=9&amp;t=632s\" target=\"\" rel=\"nofollow\">10:32</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Gratitude for Trials and Tribulations </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=iqWUGb3fEws&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=9&amp;t=862s\" target=\"\" rel=\"nofollow\">14:22</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Seeking Divine Counsel and Power </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=iqWUGb3fEws&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=9&amp;t=1243s\" target=\"\" rel=\"nofollow\">20:43</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> The Power of Love and Words </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=iqWUGb3fEws&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=9&amp;t=1391s\" target=\"\" rel=\"nofollow\">23:11</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> The Possibility of Perfection </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=iqWUGb3fEws&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=9&amp;t=1564s\" target=\"\" rel=\"nofollow\">26:04</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Accessing Divine Intervention and Abundance </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=iqWUGb3fEws&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=9&amp;t=1655s\" target=\"\" rel=\"nofollow\">27:35</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> The Law of Increase and Praise </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=iqWUGb3fEws&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=9&amp;t=1714s\" target=\"\" rel=\"nofollow\">28:34</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Emulating and Worshiping Jesus Christ</span></p>', 0, 'dp-ep-3-gratitude-for-rubbish', '2024-04-13 14:22:18', '2024-04-18 07:50:04'),
(5, 2, 'DP EP 4 - Diamond in the Rough', 'episode/3199-Diamondep40.jpg', 'episode/6539-021324DPEP4-DiamondintheRough.mp4-2024-2-139.47.0.mp4', '<p><span class=\"yt-core-attributed-string--link-inherit-color\">Summary &nbsp;</span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"> In this conversation, Kent Eyner Nielsen shares his journey of finding love and the importance of family. He discusses recognizing the Lord\'s hand in his life and finding purpose in challenges. He also talks about dating with a new perspective and how meeting his future spouse changed his life. Kent emphasizes the importance of striving for perfection. He shares the story of a service project where he met his wife and how his greatest fear became his greatest ally. Finally, he encourages listeners to see the potential in others and prioritize family. &nbsp; &nbsp; </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Takeaways </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Recognize the Lord\'s hand in your life and find purpose in challenges. Approach dating with a new perspective, focusing on service and compatibility. Strive for perfection by aligning with God\'s will and accessing His character. Attend new wards and engage in service projects to meet new people. See the potential in others and prioritize family in your life. &nbsp; </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Chapters &nbsp;</span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=rtKdj9tdEDE&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=8&amp;t=0s\" target=\"\" rel=\"nofollow\">00:00</a></span><span class=\"yt-core-attributed-string--link-inherit-color\">&nbsp;Recognizing the Lord\'s hand in your life</span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=rtKdj9tdEDE&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=8&amp;t=125s\" target=\"\" rel=\"nofollow\">02:05</a></span><span class=\"yt-core-attributed-string--link-inherit-color\">&nbsp;Finding purpose in challenges </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=rtKdj9tdEDE&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=8&amp;t=207s\" target=\"\" rel=\"nofollow\">03:27</a></span><span class=\"yt-core-attributed-string--link-inherit-color\">&nbsp;Dating with a new perspective </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=rtKdj9tdEDE&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=8&amp;t=323s\" target=\"\" rel=\"nofollow\">05:23</a></span><span class=\"yt-core-attributed-string--link-inherit-color\">&nbsp;Meeting the future spouse </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=rtKdj9tdEDE&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=8&amp;t=488s\" target=\"\" rel=\"nofollow\">08:08</a></span><span class=\"yt-core-attributed-string--link-inherit-color\">&nbsp;Striving for perfection </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=rtKdj9tdEDE&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=8&amp;t=608s\" target=\"\" rel=\"nofollow\">10:08</a></span><span class=\"yt-core-attributed-string--link-inherit-color\">&nbsp;Attending a new ward </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=rtKdj9tdEDE&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=8&amp;t=668s\" target=\"\" rel=\"nofollow\">11:08</a></span><span class=\"yt-core-attributed-string--link-inherit-color\">&nbsp;Service project and meeting the wife </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=rtKdj9tdEDE&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=8&amp;t=801s\" target=\"\" rel=\"nofollow\">13:21</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Inviting the wife to a family reunion&nbsp;</span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=rtKdj9tdEDE&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=8&amp;t=861s\" target=\"\" rel=\"nofollow\">14:21</a></span><span class=\"yt-core-attributed-string--link-inherit-color\">&nbsp;Falling in love with the family </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=rtKdj9tdEDE&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=8&amp;t=1049s\" target=\"\" rel=\"nofollow\">17:29</a></span><span class=\"yt-core-attributed-string--link-inherit-color\">&nbsp;Seeing the potential in others </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=rtKdj9tdEDE&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=8&amp;t=1145s\" target=\"\" rel=\"nofollow\">19:05</a></span><span class=\"yt-core-attributed-string--link-inherit-color\">&nbsp;Prioritizing family</span></p>', 0, 'dp-ep-4-diamond-in-the-rough', '2024-04-13 14:44:38', '2024-04-18 07:50:04'),
(6, 2, 'DP EP 5 - Take a Quantum Leap', 'episode/2069-Takeaquantumleapep500.jpg', 'episode/4088-020524JITMGroupCall3—23Jan2024.mp4-2024-2-2011.9.0.mp4', '<p><span class=\"yt-core-attributed-string--link-inherit-color\">Summary </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">In this conversation, Kent Eyner Nielsen discusses the concept of creating a fine home for the Spirit of the Lord within our bodies. He emphasizes the importance of nurturing our bodies and minds, turning weakness into strength, and turning our lives over to the Lord. Kent also explores the idea of living the Word of Wisdom and feeding our souls and bodies with light. He encourages listeners to make Jesus the mark in their lives and strengthen their stride in following Him. </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Takeaways</span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Our bodies are like recording devices, recording what we take in and what we put out. To have a fine home for the Spirit of the Lord, we need to cleanse our inner vessel and nurture our bodies and minds. Turning our lives over to the Lord allows Him to transform us from the inside out. Living the Word of Wisdom and feeding our souls and bodies with light can lead to transformation and strength. </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\">Chapters</span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=FGcnt3CFNjU&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=6&amp;t=0s\" target=\"\" rel=\"nofollow\">00:00</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Introduction: The Finest Home </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=FGcnt3CFNjU&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=6&amp;t=60s\" target=\"\" rel=\"nofollow\">01:00</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Our Bodies as Recording Devices </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=FGcnt3CFNjU&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=6&amp;t=205s\" target=\"\" rel=\"nofollow\">03:25</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Nurturing Our Bodies and Minds </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=FGcnt3CFNjU&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=6&amp;t=293s\" target=\"\" rel=\"nofollow\">04:53</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Turning Weakness into Strength </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=FGcnt3CFNjU&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=6&amp;t=405s\" target=\"\" rel=\"nofollow\">06:45</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Turning Our Lives Over to the Lord </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=FGcnt3CFNjU&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=6&amp;t=494s\" target=\"\" rel=\"nofollow\">08:14</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Building a Fine Home </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=FGcnt3CFNjU&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=6&amp;t=578s\" target=\"\" rel=\"nofollow\">09:38</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Living the Word of Wisdom </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=FGcnt3CFNjU&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=6&amp;t=690s\" target=\"\" rel=\"nofollow\">11:30</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Feeding Our Souls and Bodies </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=FGcnt3CFNjU&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=6&amp;t=750s\" target=\"\" rel=\"nofollow\">12:30</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Making Jesus the Mark </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=FGcnt3CFNjU&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=6&amp;t=837s\" target=\"\" rel=\"nofollow\">13:57</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Transformed by Light </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=FGcnt3CFNjU&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=6&amp;t=866s\" target=\"\" rel=\"nofollow\">14:26</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Strengthening Our Stride </span></p>\r\n<p><span class=\"yt-core-attributed-string--link-inherit-color\"><a class=\"yt-core-attributed-string__link yt-core-attributed-string__link--display-type yt-core-attributed-string__link--call-to-action-color\" tabindex=\"0\" href=\"https://www.youtube.com/watch?v=FGcnt3CFNjU&amp;list=PLSoXBQoivF7hr89OaE07a8i9_OEvip19A&amp;index=6&amp;t=875s\" target=\"\" rel=\"nofollow\">14:35</a></span><span class=\"yt-core-attributed-string--link-inherit-color\"> Conclusion</span></p>', 0, 'dp-ep-5-take-a-quantum-leap', '2024-04-13 15:10:03', '2024-04-18 07:50:04'),
(7, 2, 'DP EP 6 - Love God = Turn to Others', 'episode/9709-WhatsAppImage2024-03-20at09.43.17_656b953a.jpg', 'episode/7770-021624DPEP5.mp4-2024-2-209.50.15.mp4', '<p>Summary<br>In this conversation, Kent Eyner Nielsen discusses the importance of balancing work and play, and the joy that comes from serving and loving others, especially one\'s family. He emphasizes the need to love God with all our heart, mind, and strength, and how this love leads to access to God\'s power and a closer relationship with Him. Nielsen also highlights the role of prayer in aligning our will with God\'s will and the transformative power of prayer in changing our bodies and lives. He encourages readers to read the Book of Mormon as a guide to draw near to God and emphasizes the power of prayer in accessing God\'s power and transforming our lives.</p>\r\n<p><br>Takeaways<br>Balancing work and play is important for a fulfilling life.<br>Loving God and others leads to access to God\'s power and a closer relationship with Him.<br>Prayer aligns our will with God\'s will and has the power to transform our bodies and lives.<br>Reading the Book of Mormon can guide us in drawing near to God and accessing His power.</p>\r\n<p>Chapters</p>\r\n<p>00:00 The Importance of Balancing Work and Play<br>01:30 The Power of Loving God and Others<br>03:05 Desire to Become Like Heavenly Father<br>07:34 Honoring God and His Laws<br>08:02 The Role of Prayer in Aligning with God\'s Will<br>10:16 Praying for Consecration and the Welfare of the Soul<br>11:29 Accessing God\'s Power through Prayer<br>14:22 Transforming the Body through Prayer and Obedience<br>19:14 The Book of Mormon as a Guide to Draw Near to God<br>25:41 Prayer as a Source of Energy and Transformation<br>28:17 Prospering in Life through Turning to Christ<br>29:34 The Power of Hope in Christ for Personal Change</p>\r\n<p><span class=\"MuiTypography-root MuiTypography-bodyMedium css-1lit4es e1de0imv0\">&nbsp;</span></p>', 0, 'dp-ep-6-love-god-turn-to-others', '2024-04-13 16:07:53', '2024-04-25 14:30:37'),
(8, 2, 'DP EP 7 Living Correct Principles = Prosperity', 'episode/872-LivingCorrectPrinciplesProsperityep70.jpg', 'episode/1057-022824DPEP7LivingCorrectPrinciplesProsper.mp4-2024-2-299.58.11.mp4', '<p>Summary</p>\r\n<p>The conversation explores the concept of disciples prospering by living correct principles and aligning with Heavenly Father\'s teachings. It emphasizes the importance of becoming like Heavenly Father and recognizing human limitations. The discussion also highlights the distinction between earthly success and discipleship. Gleaning wisdom from books and inspiration, receiving revelation, and accessing God\'s grace and guidance are discussed. The conversation concludes by emphasizing the implementation of Christ\'s teachings and the abundance and prosperity that come from living in light and truth.</p>\r\n<p>&nbsp;</p>\r\n<p>Takeaways</p>\r\n<p>Living correct principles enables blessings.<br>Becoming like Heavenly Father is the ultimate goal.<br>Recognize human limitations and rely on God\'s wisdom.<br>Discipleship goes beyond earthly success.<br>Combine wisdom from books with inspiration.<br>Revelation leads to growth and further commandments.<br>Access God\'s grace and guidance through discipleship.<br>Implement Christ\'s teachings to know the truth.<br>Abundance and prosperity come from living in light and truth.</p>\r\n<p>&nbsp;</p>\r\n<p>Chapters</p>\r\n<p>00:00 Living Correct Principles for Blessings<br>03:04 Becoming Like Heavenly Father<br>04:59 Recognizing Human Limitations<br>05:28 Discipleship Beyond Earthly Success<br>06:41 Gleaning Wisdom from Books and Inspiration<br>07:10 Revelation and Growth<br>08:27 Accessing God\'s Grace and Guidance<br>09:21 Implementing Christ\'s Teachings<br>09:51 Abundance and Prosperity through Light and Truth</p>', 0, 'dp-ep-7-living-correct-principles-prosperity', '2024-04-13 16:27:42', '2024-04-18 07:50:04'),
(9, 2, 'DP EP 8 — What are your privileges?', 'episode/4983-Whatareyourprivilegesep80.jpg', 'episode/6896-021924DPEP7Whatareyourprivileges.mp4-2024-2-2010.18.12.mp4', '<p>Summary</p>\r\n<p>This conversation explores the concept of living beneath our privileges and the importance of accessing God\'s power. It emphasizes the journey of becoming like God and the role of trials in our preparation. The conversation also highlights the significance of drawing near to God and finding peace and comfort in His presence. It concludes with the idea of representing God\'s love and magnifying our talents and relationships.</p>\r\n<p>&nbsp;</p>\r\n<p>Takeaways</p>\r\n<p>We have access to God\'s power through the Holy Ghost, which fills us with love and joy.<br>By having a heart and mind single to God, we can comprehend all things and be filled with light.<br>Trials and challenges are part of God\'s plan to bring us humility and draw us closer to Him.<br>Drawing near to God allows us to receive His knowledge, power, and understanding.<br>Through prayer and sincere intent, we can receive God\'s love and represent Him as true disciples.<br>We can magnify our talents and relationships by serving and helping one another.</p>\r\n<p>&nbsp;</p>\r\n<p>Chapters</p>\r\n<p>00:00 Living Beneath Our Privileges<br>01:35 Accessing God\'s Power<br>03:05 Becoming Like God<br>04:56 Trials and Preparation<br>06:10 Drawing Near to God<br>07:26 Finding Peace and Comfort<br>08:51 Representing God\'s Love<br>09:22 Magnifying Talents and Relationships</p>', 0, 'dp-ep-8-what-are-your-privileges', '2024-04-13 16:48:43', '2024-04-18 07:50:04');
INSERT INTO `episode` (`episodeId`, `podcastId`, `title`, `image`, `attachment`, `description`, `position`, `slug_url`, `created_at`, `updated_at`) VALUES
(10, 2, 'DP EP 9 - Leap Day, Leap Forward!', 'episode/3141-LeapDay,LeapForwardep90.jpg', 'episode/7438-030324DPEP9-LeapDay,LeapForward!.mp4-2024-3-38.11.21.mp4', '<p>Summary</p>\r\n<p>In this conversation, Kent Eyner Nielsen shares his experiences and insights on gratitude, mental illness, finding passion, turning to the Lord, living a healthy lifestyle, building better relationships with family, embracing challenges, finding purpose, prospering through obedience, serving others, and allowing space for growth.</p>\r\n<p>Takeaways</p>\r\n<p>Gratitude and looking for the good in people can lead to a more positive and fulfilling life.<br>Mental illness is real, but there is hope and peace to be found.<br>Changing yourself is the key to finding peace and improving your circumstances.<br>Finding passion and transforming lives can bring joy and fulfillment.<br>Turning your life over to the Lord and living a healthy lifestyle can lead to greater blessings.<br>Building better relationships with family is essential for personal growth and happiness.<br>Embracing challenges and mountains can lead to personal growth and spiritual development.<br>Finding something worth living for gives purpose and meaning to life.<br>Prospering through obedience to divine laws brings blessings in all areas of life.<br>Serving others and sharing light can bring joy and fulfillment.<br>The burden of turning your life over to the Lord includes feeling the pain of others\' choices.<br>Building better relationships with children requires love, service, and allowing space for growth.<br>Learning from others and allowing space for growth can lead to mutual edification and understanding.</p>\r\n<p>&nbsp;</p>\r\n<p>Chapters</p>\r\n<p>00:00 Gratitude and Finding the Good in People<br>01:24 Mental Illness and Finding Peace<br>08:00 Finding Passion and Transforming Lives<br>11:20 Turning Your Life Over to the Lord<br>15:42 Living a Healthy Lifestyle<br>20:32 Embracing Challenges and Mountains<br>22:02 Finding Something Worth Living For<br>23:01 Prospering Through Obedience<br>25:07 Serving Others and Sharing Light<br>26:33 The Burden of Turning Your Life Over to the Lord<br>28:03 Building Better Relationships with Children<br>30:09 Learning from Others and Allowing Space for Growth</p>', 0, 'dp-ep-9-leap-day-leap-forward', '2024-04-13 17:06:38', '2024-04-18 07:50:04'),
(11, 2, 'DP EP 10 - Perfection upon Perfection', 'episode/6334-Perfectionuponperfectionep100.jpg', 'episode/3166-030624DPEP10-PerfectionuponPerfection3.mp4', '<p>Summary</p>\r\n<p>In this conversation, Kent Eyner Nielsen discusses the concepts of perfection and keeping a record. He explains that perfection is achieved by growing line upon line, precept upon precept, and receiving light and truth. He emphasizes the importance of living according to the light and truth received in order to receive more. Nielsen also encourages listeners to make a record of their experiences with God and to study the records of others. He highlights the need to learn from one another and to remove barriers that divide us. The conversation concludes with a call to love and unity.</p>\r\n<p>Takeaways</p>\r\n<p>Perfection is achieved by growing line upon line, precept upon precept, and receiving light and truth.<br>Living according to the light and truth received allows for further growth and understanding.<br>Making a record of personal experiences with God is important for personal growth and learning.<br>Studying the records of others can provide valuable insights and understanding.<br>Learning from one another and removing barriers that divide us promotes love and unity.</p>\r\n<p>Chapters</p>\r\n<p>00:00 Perfection upon Perfection<br>15:24 Keeping a Record<br>31:11 The Power of Best Books<br>34:02 Love and Unity</p>', 0, 'dp-ep-10-perfection-upon-perfection', '2024-04-13 17:25:42', '2024-04-18 07:50:04'),
(12, 2, 'DP EP 11 - Know God = Learn Yourself', 'episode/3578-ep11.jpg', 'episode/7851-DP11“KnowGodLearnYourself._.mp4', '<p>Summary</p>\r\n<p>In this conversation, Kent discusses the importance of knowing God and knowing oneself. The speaker emphasizes the need to identify personal strengths and weaknesses and work on self-improvement. Kent highlights the idea of turning to the Lord for transformation and allowing Him to help individuals overcome their weaknesses. Kent also encourages discovering, developing, and disseminating one\'s talents and living according to the teachings of Jesus Christ. Kent discussed the concept of self-control and the importance of understanding oneself to understand God.</p>\r\n<p>Takeaways</p>\r\n<p>Knowing God starts with knowing oneself and identifying personal strengths and weaknesses.<br>Turning to the Lord and allowing Him to help transform weaknesses into strengths is key to personal growth.<br>Discovering, developing, and sharing one\'s talents is an important aspect of living according to the teachings of Jesus Christ.<br>Self-control and overcoming weaknesses are essential for personal and spiritual progress.</p>\r\n<p>Chapters</p>\r\n<p>00:00 Knowing God and Knowing Yourself<br>03:10 Working on Personal Weaknesses<br>05:51 Turning to the Lord for Transformation<br>08:48 Becoming Perfect in Christ<br>12:10 Discovering, Developing, and Disseminating Your Talents<br>13:56 Self-Control and Overcoming Weakness<br>15:53 Learning Yourself to Understand God</p>', 0, 'dp-ep-11-know-god-learn-yourself', '2024-04-15 12:44:31', '2024-04-18 07:50:04'),
(15, 1, 'JITM Coaching intro and overview.', 'episode/365-JITMlogo.jpg', 'episode/3581-JITMCoachingintroandoverview..mp4', '<p>Summary</p>\r\n<p>In this conversation, Kent E. Nielsen shares his personal journey of turning his life over to Jesus Christ and allowing Him to transform him from the inside out. He discusses how he made changes in his diet and exercise to improve his physical health and how accessing God\'s power has been instrumental in his transformation. Kent emphasizes the importance of living divine laws and becoming like Jesus Christ in all aspects of life. He encourages listeners to live the teachings of Jesus Christ and continue their personal growth while helping others.</p>\r\n<p>Takeaways</p>\r\n<p>Turning your life over to Jesus Christ can lead to personal transformation.<br>Making changes in diet and exercise can improve physical health.<br>Accessing God\'s power can enable you to overcome weaknesses and grow.<br>Living divine laws and becoming like Jesus Christ should be the focus in all aspects of life.</p>\r\n<p>Chapters</p>\r\n<p>00:00 Introduction and Personal Transformation<br>03:22 Turning Your Life Over to the Lord<br>06:18 Making Changes in Diet and Exercise<br>08:40 Accessing God\'s Power<br>09:11 Raising the Bar to Living Divine Laws<br>13:01 Becoming Like Jesus Christ<br>14:30 Living the Teachings of Jesus Christ<br>15:56 Continuing Personal Growth and Helping Others</p>', 0, 'jitm-coaching-intro-and-overview', '2024-04-15 14:25:55', '2024-04-18 07:50:04'),
(16, 1, 'Ep 2 - Pain and Suffering - Turning Point', 'episode/4265-JITMEP2.jpg', 'episode/1737-PainandSufferingTurningPoint.mp4', '<p>Summary</p>\r\n<p>In this conversation, Kent Eyner Nielsen discusses the importance of turning to Jesus Christ in times of pain and suffering. He emphasizes the need to overcome trials and find joy by focusing on Christ and allowing Him to heal and guide us. Kent shares a personal example of how he found healing through his faith. He also encourages listeners to seek spiritual nourishment through scripture and uplifting books. The conversation concludes with a reminder to prioritize mental exertions and govern our bodies with pure thoughts.</p>\r\n<p>Takeaways</p>\r\n<p>Turn to Jesus Christ in times of pain and suffering.<br>Overcome trials and find joy by focusing on Christ.<br>Seek spiritual nourishment through scripture and uplifting books.<br>Prioritize mental exertions and govern your body with pure thoughts.</p>\r\n<p>Chapters</p>\r\n<p>00:00 Introduction<br>00:31 Pain and Suffering in the World<br>01:29 Overcoming Trials and Finding Joy<br>03:20 Personal Example of Finding Healing<br>04:13 Seeking Spiritual Nourishment<br>05:11 Conclusion</p>\r\n<p>&nbsp;</p>', 0, 'ep-2-pain-and-suffering-turning-point', '2024-04-15 14:43:45', '2024-04-18 07:50:04'),
(17, 1, 'EP 3 - Publishing’s Hidden Purpose!', 'episode/6000-JITMEP3.jpg', 'episode/661-Publishing’sHiddenPurpose!.mp4', NULL, 0, 'ep-3-publishings-hidden-purpose', '2024-04-15 15:04:45', '2024-04-18 07:50:04'),
(18, 1, 'Ep 4 - Inspire and Be Inspired', 'episode/5789-JITMEP4.jpg', 'episode/6317-Statechampconversationprovokesencouragementforchange.mp4', NULL, 0, 'ep-4-inspire-and-be-inspired', '2024-04-15 15:17:03', '2024-04-18 07:50:04'),
(19, 1, 'Ep 5 - Feed Yourself with the Vision of Change', 'episode/3935-JITMEP5.jpg', 'episode/6977-Whatdoyouallowinyourbody_.mp4', '<p>Summary</p>\r\n<p>In this conversation, Kent Eyner Nielsen discusses the importance of fulfilling our divine mission and being like Christ. He highlights the influence of movies on our lives and encourages choosing positive and uplifting content. Kent emphasizes the need to be mindful of what we consume mentally and the impact it has on our thoughts and actions. He shares the importance of replacing negative habits with wholesome activities and thoughts. The conversation concludes with a call to fill our minds with good and wholesome things to achieve our greatest potential.</p>\r\n<p>Takeaways</p>\r\n<p>We are born and commanded to do greater works and fulfill our divine mission.<br>Movies have a powerful influence on our thoughts and actions.<br>Choose movies and content that promote positivity, truth, and goodness.<br>Be mindful of what you consume mentally and replace negative habits with wholesome activities and thoughts.</p>\r\n<p>Chapters</p>\r\n<p>00:00 Introduction and Divine Mission<br>00:31 The Influence of Movies<br>01:35 Choosing Positive Content<br>02:56 Replacing Negative Habits<br>03:57 Becoming What You Think<br>04:27 Filling Your Mind with Wholesome Things<br>04:56 Conclusion and Call to Action</p>', 0, 'ep-5-feed-yourself-with-the-vision-of-change', '2024-04-15 15:20:31', '2024-04-18 07:50:04'),
(20, 1, 'Ep 6 - Serve People without Commands', 'episode/521-JITMEP6.jpg', 'episode/5602-Whatdoyouallowinyourbody_.mp4', '<p>Summary</p>\r\n<p>In this conversation, Kent Eyner Nielsen discusses the importance of taking initiative and doing the work without constantly seeking guidance. He emphasizes the need to grow in our talents and be wise stewards of our callings. Nielsen also highlights the significance of serving others and finding joy in giving. The conversation encourages listeners to be proactive and make a positive impact in their lives and the lives of others.</p>\r\n<p>Takeaways</p>\r\n<p>Take the initiative and do the work without constantly seeking guidance.<br>Focus on growing in your talents and being a wise steward of your calling.<br>Serve others and find joy in giving.<br>Be proactive and make a positive impact in your life and the lives of others.</p>\r\n<p>Chapters</p>\r\n<p>00:00 Introduction<br>00:47 Message to Garcia<br>02:30 Growing in Talents<br>03:00 Wise Stewardship<br>03:30 Serving Others<br>04:20 Finding Joy in Giving<br>04:49 Conclusion</p>\r\n<p>&nbsp;</p>', 0, 'ep-6-serve-people-without-commands', '2024-04-15 15:26:40', '2024-04-18 07:50:04'),
(21, 1, 'Ep 7 - The Battle of Evil Suggestions', 'episode/7875-JITMEP7.jpg', 'episode/5221-Theyshallhavenoplaceinyou—likewateroffaduck\'sback.mp4', '<p>Summary</p>\r\n<p>In this conversation, Kent Eyner Nielsen discusses the battle within ourselves and the power of resisting evil suggestions. He emphasizes the importance of accessing God\'s power and focusing on virtuous and good things. Nielsen also encourages listeners to magnify their talents and do greater works. He highlights the battle against negative suggestions and distractions and the need to govern the body. Ultimately, he calls for turning to God and experiencing peace amidst the turmoil of the world.</p>\r\n<p>Takeaways</p>\r\n<p>Put God first in your life and fulfill your divine mission.<br>The battle is not against the flesh but against negative suggestions and distractions.<br>Resist evil and access God\'s power to attract good into your life.<br>Magnify your talents and strive to do greater works.</p>\r\n<p>Chapters</p>\r\n<p>00:00 Introduction and Divine Mission<br>00:58 The Battle Within<br>01:35 Resisting Evil and God\'s Power<br>03:30 Accessing God\'s Power<br>04:36 Magnifying Talents and Doing Greater Works<br>05:06 The Battle Against Negative Suggestions<br>06:11 Governing the Body and Bringing Peace<br>06:41 Conclusion and Call to Action</p>', 0, 'ep-7-the-battle-of-evil-suggestions', '2024-04-15 15:30:43', '2024-04-18 07:50:04'),
(22, 1, 'Ep 8 - Difference of Being a Christian and Following Christ', 'episode/205-JITMEP8.jpg', 'episode/6189-Livethedoctrinetoknowandsharethefruitsthereof.mp4', NULL, 0, 'ep-8-difference-of-being-a-christian-and-following-christ', '2024-04-15 15:41:17', '2024-04-18 07:50:04'),
(23, 1, 'Ep 9 - What you allow in, reflects Jesus Christ—or not', 'episode/8555-JITMEP9.jpg', 'episode/5559-LiveHisdoctrineandyouwillreflectHiminyourimage.mp4', NULL, 0, 'ep-9-what-you-allow-in-reflects-jesus-christ-or-not', '2024-04-15 15:54:21', '2024-04-18 07:50:04'),
(24, 1, 'Ep 10 - Use Your Weight As Measuring Stick', 'episode/7616-JITMEP10.jpg', 'episode/483-Toraiseawarenessandhavestrengthbeyondyourown.mp4', '<p>Weighing in daily to stay on track with your ideal weight, even as President Russell M. Nelson does, and Mister Rogers did.&nbsp;</p>', 0, 'ep-10-use-your-weight-as-measuring-stick', '2024-04-15 15:58:30', '2024-04-18 07:50:04'),
(25, 1, 'Ep 11 - Turning your life to the Lord is more than a heart and mind thing!', 'episode/4059-JITMEP11.jpg', 'episode/3065-TurningyourlifetotheLordismorethanaheartandmindthing!.mp4', '<p>Kent\'s intention to serve others by pointing them to Jesus The Mark grant\'s him a surprise result, like unto C.S. Lewis\'s analogy of the Lord helping a man repair his cottage and more ...!&nbsp;<br><br>In Mere Christianity he wrote:&nbsp;<br><br>Imagine yourself as a living house. God comes in to rebuild that house. At first, perhaps, you can understand what He is doing. He is getting the drains right and stopping the leaks in the roof and so on; you knew that those jobs needed doing and so you are not surprised. But presently He starts knocking the house about in a way that hurts abominably and does not seem to make any sense. What on earth is He up to? The explanation is that He is building quite a different house from the one you thought of - throwing out a new wing here, putting on an extra floor there, running up towers, making courtyards. You thought you were being made into a decent little cottage: but He is building a [temple]. He intends to come and live in it Himself.&nbsp;<br><br>The command Be ye perfect, is not idealistic gas, Nor is it a command to do the impossible. He is going to make us into creatures that can obey that command. He said (in the Bible) that we were &lsquo;gods,&rsquo; and He is going to make good His words. If we will let Him&mdash;or we can prevent him, if we choose&mdash;He will make the feeblest and filthiest of us into a god &hellip;, a dazzling, radiant, immortal creature, pulsating, all through which, such energy and joy and wisdom and love as we cannot now imagine &hellip;. The process will be long and in parts very painful, but that is what we are in for. Nothing less. He meant what He said. (C.S. Lewis, Mere Christianity, Book 4 Chapter 9 \"Count the Cost\" [bracket added]).</p>\r\n<p>&nbsp;</p>', 0, 'ep-11-turning-your-life-to-the-lord-is-more-than-a-heart-and-mind-thing', '2024-04-15 16:04:24', '2024-04-18 07:50:04'),
(26, 1, 'Ep 12 - Take control of the body rather than the other way around.', 'episode/9744-JITM12.jpg', 'episode/2939-Takecontrolofthebodyratherthantheotherwayaround..mp4', '<p>What drives a disciple&rsquo;s intake, when he turns his physique over to the Lord? Does his body command him in all things, or does he take control of what he allows in and out of his body? Living high octane food promotes a higher performance lifestyle.</p>', 0, 'ep-12-take-control-of-the-body-rather-than-the-other-way-around', '2024-04-15 16:09:24', '2024-04-18 07:50:04'),
(27, 1, 'Ep 13 - Christmas in the new year! A new Napoleon Hill Book', 'episode/4700-JITMEP13.jpg', 'episode/8612-Christmasinthenewyear!AnewNapoleonHillBook.mp4', '<p>Kent unwraps a new book by the author of Think and Grow Rich&mdash;Napoleon Hill! Big shout out to Russell Brunson for publishing it with his new company and community Secrets of Success.<br><br>If you would like access to Russell&rsquo;s community mentioned and hopefully get a copy of the book is still, then here is an affiliate link that I would get a kickback from: https://www.secretsofsuccess.com/jv?afmc=jesusisthemark</p>', 0, 'ep-13-christmas-in-the-new-year-a-new-napoleon-hill-book', '2024-04-15 16:12:33', '2024-04-18 07:50:04'),
(28, 1, 'Ep 14 - You got this … it is contagious!', 'episode/3078-JITMEP14.png', 'episode/7223-020624JITMCEp14.mp4-2024-2-68.58.48.mp4', '<p>Kent turns body to the Lord, gets self-mastery, trims down in 5 weeks, then starts working out. Line upon line you turn your life to the Lord and He will stretch your capacity and ability. The domino starts with you.</p>', 0, 'ep-14-you-got-this-it-is-contagious', '2024-04-15 16:27:07', '2024-04-18 07:50:04'),
(29, 1, 'JITM  EP 15 - The Power of Music', 'episode/7430-JITM15.jpg', 'episode/5251-021424Episode16ThePowerofMusic.mp4-2024-2-110.13.51.mp4-2024-2-1410.31.401.mp4', NULL, 0, 'jitm-ep-15-the-power-of-music', '2024-04-15 16:33:42', '2024-04-18 07:50:04'),
(30, 1, 'JITM EP 16 - Learn yourself', 'episode/2076-WhatsAppImage2024-03-30at06.05.10_7a57ff99.jpg', 'episode/9745-021724JITMEP19a“Learnyourself”.mp4-2024-2-179.54.34.mp4', NULL, 0, 'jitm-ep-16-learn-yourself', '2024-04-15 16:38:27', '2024-04-18 07:50:04'),
(31, 1, 'JITM  EP 17 - Name Change — New Direction', 'episode/5859-EP18.png', 'episode/5094-021424JITMCEp20NameChange—NewDirection.mp4-2024-2-1414.47.1.mp4', '<p>Summary</p>\r\n<p>In this conversation, Kent Eyner Nielsen discusses the name change of his podcast, YouTube channel, and business from \'Jesus is the Mark\' to \'Emulate Christ.\' He explains that the phrase \'Jesus is the mark\' can be summed up more succinctly as \'emulate Christ.\' Kent emphasizes the importance of emulating Christ and seeking to become true disciples. He also discusses the significance of following the word of prophets and being open to scriptures from different sources. Kent shares his personal journey of turning his physique over to the Lord and the transformation it brought to his life. He encourages listeners to seek vertical counsel and live divine law.</p>\r\n<p>&nbsp;</p>\r\n<p>Takeaways</p>\r\n<p>The name change from \'Jesus is the Mark\' to \'Emulate Christ\' reflects the core message of striving to emulate Christ in all aspects of life.<br>Being a true disciple of Jesus Christ involves following the word of prophets and being open to scriptures from different sources.<br>Turning one\'s physique over to the Lord and taking care of the body is an important aspect of discipleship.<br>Seeking vertical counsel and living divine law leads to transformation and an abundant life.</p>\r\n<p>&nbsp;</p>\r\n<p>Chapters</p>\r\n<p>00:00 Introduction and Name Change<br>01:00 Emulating Christ<br>03:20 Following the Word of Prophets<br>04:17 Proving the Words of Prophets<br>05:14 Calling Out True Disciples<br>06:03 Being Open to Other Scriptures<br>06:30 Making a Record of God\'s Words<br>07:25 God Speaking to People in Other Places<br>08:09 True Discipleship and Love<br>09:16 Becoming Pure as Christ<br>10:11 Turning Physique Over to the Lord<br>11:18 Breaking Through Limited Beliefs<br>12:11 Taking Care of the Body<br>13:10 Seeking Vertical Counsel<br>14:02 Living Divine Law<br>15:02 Finding Riches in Wisdom<br>16:29 Conclusion</p>', 0, 'jitm-ep-17-name-change-new-direction', '2024-04-15 16:55:19', '2024-04-18 07:50:04'),
(35, 10, 'Reading the Bible is complicated and challenging?', 'episode/wuj2ZWkRkERXlYP9RHMdvSyf3PRx1DE7gEtVzWBE.jpg', 'episode/6924-ReadingtheBibleiscomplicatedandchallenging_.mp4', '<p>Have you just started reading the Bible, or other Holy Scripture, and find them complicated and challenging to understand?</p>\r\n<p>Kent commiserates with his first dive into the study of Holy Writings (Book of Mormon) at the age of 18. He found them hard to read and understand. He thought they were simply a record of dos and don\'ts. And even with praying before reading them, he didn\'t get them.</p>\r\n<p>He shares how the scriptures came to life to him and introduces the idea 1st and 2nd hand experience with God, which is the theme of this video podcast or video book (video 1).</p>', 0, 'reading-the-bible-is-complicated-and-challenging', '2024-04-18 15:17:03', '2024-04-19 12:19:44'),
(36, 10, 'Turn 2nd Hand Experience to 1st Hand', 'episode/5419-Activate.jpg', 'episode/225-Turn2ndHandExperienceto1stHand.mp4', '<p>Kent builds on video one\'s idea of turning the second hand experience with God to first hand experience and addresses the couplet:</p>\r\n<p>As man now is, God once was. As God now is, man may become.</p>\r\n<p>(Video 2 of 5 in series).</p>', 0, 'turn-2nd-hand-experience-to-1st-hand', '2024-04-18 15:23:05', '2024-04-19 12:14:55'),
(37, 10, 'Become as You Desire', 'episode/2964-Activate.jpg', 'episode/3190-BecomeasYouDesire.mp4', '<p>Kent share his first hand experience with God that opened his eyes to the possibilities of becoming anything he wanted in this life&mdash;a doctor, a lawyer, a professor, a businessman, etc. and much more!!!&nbsp;</p>\r\n<p>C.S. Lewis referenced quote:&nbsp;<br>Imagine yourself as a living house. God comes in to rebuild that house. At first, perhaps, you can understand what He is doing. He is getting the drains right and stopping the leaks in the roof and so on; you knew that those jobs needed doing and so you are not surprised. But presently He starts knocking the house about in a way that hurts abominably and does not seem to make any sense. What on earth is He up to? The explanation is that He is building quite a different house from the one you thought of - throwing out a new wing here, putting on an extra floor there, running up towers, making courtyards. You thought you were being made into a decent little cottage: but He is building a [temple]. He intends to come and live in it Himself.&nbsp;</p>\r\n<p>The command Be ye perfect, is not idealistic gas, Nor is it a command to do the impossible. He is going to make us into creatures that can obey that command. He said (in the Bible) that we were &lsquo;gods,&rsquo; and He is going to make good His words. If we will let Him&mdash;or we can prevent him, if we choose&mdash;He will make the feeblest and filthiest of us into a god &hellip;, a dazzling, radiant, immortal creature, pulsating, all through which, such energy and joy and wisdom and love as we cannot now imagine &hellip;. The process will be long and in parts very painful, but that is what we are in for. Nothing less. He meant what He said. (C.S. Lewis, Mere Christianity, Book 4, Chapter 9 &ldquo;Count the Cost&rdquo; [bracketed word changed from palace to temple]).</p>\r\n<p>(Video 3 of 5 in series).</p>', 0, 'become-as-you-desire', '2024-04-18 15:30:17', '2024-04-19 12:14:38'),
(38, 10, 'Realizing Potentiality', 'episode/1258-Activate.jpg', 'episode/7145-RealizingPotentiality.mp4', '<p>Living the teachings of Jesus enables individuals to have a first hand experience with God, just as the prophets of old and living prophets. Realizing your divine potentiality (Video 4).</p>', 0, 'realizing-potentiality', '2024-04-18 15:38:17', '2024-04-19 12:14:24'),
(39, 10, 'God\'s Infinite Love and How to Access it', 'episode/7354-Activate.jpg', 'episode/3873-God\'sInfiniteLoveandHowtoAccessit.mp4', '<p>Kent dives into God\'s infinite love and how to access it. Take Christ\'s yoke upon you to access the powers of Heaven and become one with God&mdash;including being filled with His love (Video 5).</p>', 0, 'gods-infinite-love-and-how-to-access-it', '2024-04-18 15:43:09', '2024-04-19 12:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `getintouch`
--

CREATE TABLE `getintouch` (
  `id` int NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` text,
  `terms` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `getintouch`
--

INSERT INTO `getintouch` (`id`, `name`, `email`, `message`, `terms`, `created_at`) VALUES
(1, 'best_yfOt', 'conmusicha1977@raiz-pr.com', 'Keep Your Family Safe \r\nPower Outages? No Problem with the Best Solar Generator for Home Backup  \r\nsolar generator for home backup [url=http://www.olargener-ackup.com/]http://www.olargener-ackup.com/[/url] .', 0, '2024-04-18 23:49:08'),
(2, 'best_eumt', 'conmusicha1977@raiz-pr.com', 'Be Ready \r\nThe Best Solar Generator for Home Backup: A Smart Investment for Your Family  \r\nsolar generator for home backup [url=http://olargener-ackup.com/]http://olargener-ackup.com/[/url] .', 0, '2024-04-19 02:31:12'),
(3, 'Pillsvog', 'iunskiygipertonik@gmail.com', 'Erectile dysfunction treatments available online from TruePills. \r\nDiscreet, next day delivery and lowest price guarantee. \r\n \r\nViagra is a well-known, branded and common erectile dysfunction (ED) treatment for men. \r\nIt\'s available through our Online TruePills service. \r\n \r\nTrial ED Pack consists of the following ED drugs: \r\n \r\nViagra Active Ingredient: Sildenafil 100mg 5 pills \r\nCialis 20mg 5 pills \r\nLevitra 20mg 5 pills \r\n \r\nhttps://cutt.ly/dw7ChH4s \r\nhttps://federativ.ru/redirect?url=https://true-pill.top/\r\nhttps://www.sumeko.ru/bitrix/redirect.php?event1=&event2=&event3=&goto=https://true-pill.top/\r\nhttps://m.yierer.com/api/device.php?uri=https%3A%2F%2Ftrue-pill.top\r\nhttps://42.ernorvious.com/index/d1?diff=0&source=og&campaign=5944&content=&clickid=2aqzrzl2knl1pmit&aurl=http%3A%2F%2Ftrue-pill.top&an=&term=&site=&pushMode=popup\r\nhttps://tyumen-soft.ru/bitrix/redirect.php?goto=https://true-pill.top/\r\n \r\n \r\nRosalox\r\nProzylex\r\nNaurif\r\nBetaroxime\r\nGliprex\r\nValocordin\r\nBeta-nicardia\r\nNeobon\r\nKonaderm\r\nAflaxil\r\nTrichostatic\r\nUlcizone\r\nPerative\r\nFenazopiridina\r\nPalitrex\r\nOmenole\r\nCefacar\r\nNurasel\r\nAledrolet\r\nPyrocaps\r\nLatoren\r\nTerloc\r\nLisinobell\r\nAtrizin\r\nVenlofex\r\nNopatic\r\nHydantin\r\nFluxadir\r\nLisinoprilum\r\nParoxetin\r\nKlozapol\r\nTabrophage\r\nOromone\r\nLebocar\r\nLipicard\r\nOnceair\r\nOractine\r\nTarka\r\nEp hormone\r\nDimenate', 0, '2024-04-23 14:47:39'),
(4, 'PillsEntem', 'iunskiygipertonik@gmail.com', 'Erectile dysfunction treatments available online from TruePills. \r\nDiscreet, next day delivery and lowest price guarantee. \r\n \r\nViagra is a well-known, branded and common erectile dysfunction (ED) treatment for men. \r\nIt\'s available through our Online TruePills service. \r\n \r\nTrial ED Pack consists of the following ED drugs: \r\n \r\nViagra Active Ingredient: Sildenafil 100mg 5 pills \r\nCialis 20mg 5 pills \r\nLevitra 20mg 5 pills \r\n \r\nhttps://cutt.ly/dw7ChH4s \r\nhttps://gen-beautyapteka.ru/bitrix/redirect.php?goto=https://true-pill.top/\r\nhttp://kandatransport.co.uk/stat/index.php?page=reffer_detail&dom=true-pill.top\r\nhttp://aquawizard.ru/bitrix/rk.php?goto=https://true-pill.top/\r\nhttps://ostrov-s.ru/bitrix/redirect.php?event1=&event2=&event3=&goto=https://true-pill.top/\r\nhttps://sale.unisaw.ru/bitrix/redirect.php?goto=https://true-pill.top/\r\n \r\n \r\nUroseptal\r\nEuthasol\r\nVitamycetin\r\nFertilan\r\nFalexim\r\nAlendromet\r\nRisofos\r\nLabileno\r\nEtizin\r\nNitroretard faran\r\nKlorfeson\r\nLarb\r\nVonum\r\nTimerol\r\nFinex\r\nFluox-puren\r\nIruxol\r\nAinecox\r\nPabi-naproxen\r\nCardolol\r\nFarmaxetina\r\nDoxinyl\r\nInnopran XL\r\nErycin\r\nAnamet\r\nMenova\r\nZestozide\r\nTevacycline\r\nAcifar\r\nBinoclar\r\nNeuropyl\r\nIsoriac\r\nSeresnatt\r\nComdasin\r\nRaffonin\r\nMetpamid\r\nSolusedante\r\nKetzole\r\nLanodil\r\nMymethasone', 0, '2024-04-25 04:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int NOT NULL,
  `heading1` varchar(100) DEFAULT NULL,
  `description1` text,
  `heading2` varchar(100) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `description2` text,
  `type` int NOT NULL DEFAULT '1',
  `url` text,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `heading1`, `description1`, `heading2`, `image2`, `description2`, `type`, `url`, `created_at`, `updated_at`) VALUES
(1, 'About the Show', '<p class=\"sec-text mt-30\">EMULATE CHRIST PODCAST is dedicated to sharing Kent\'s journey, as He turns to the Lord and makes Jesus the focal point in every area of his life. In here, he will invite and coach you to do likewise, even to emulate Christ. It includes stories, interviews, living scriptures, quotes, and more that move you to good thoughts, feelings, words, works, and deeds.</p>\r\n<p class=\"sec-text mt-30\">Transformation starts from the inside out and is the result of turning heart and mind to God. It is more than remembering Him always, it is to be a doer of the word, including mastering your thoughts, feelings, words, and deeds. It is about emulating Him line upon line. In the process of emulating Him within the walls of your own temple, you are given power over your body. Thus, submitting to the will of the Lord isn\'t just about your heart and mind—it includes turning your physique over to Him.</p>', 'This free podcast is an invitation to go and do mighty works.', 'home/86QdpjVHAfjvC977fnGF5oH86In5mhOAL2pL1hWQ.jpg', '<p>Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out. A place where God’s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.</p>', 1, 'https://www.youtube.com/embed/nQaEJbKLMWk?si=WlM3G-qUXyzTete8', '2024-04-06 12:19:16', '2024-04-25 08:59:10');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(4, 'Amit', 'igi203@goigi.in', '2024-04-19 11:31:10', '2024-04-19 11:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `podcastId` int NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `slug_url` varchar(200) DEFAULT NULL,
  `position` int NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`podcastId`, `title`, `image`, `description`, `slug_url`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Jesus is The Mark Video Episodes 2023', 'podcast/iMvQrNUw89ZVfW6flR7aUQpNu05sgcWb0Puz8GB4.jpg', '<p>&raquo; Kent points humble overachievers to Jesus Christ the Mark, to transform their physique, family, and business with God\'s power. Why? Jesus Christ tapped into the power of God to grow line upon line, perfection upon perfection. As such He set the bull&rsquo;s eye mark worthy of emulation. Not only did he set a perfect example, but when you make Him the focal point of your life, He is the vine or source to grant you access to the power of God. A power that will both stretch your vision and enables your growth to lay hold of every good thing. This podcast is dedicated to sharing Kent\'s journey in make Jesus the Mark (back to 2020 on https://podcast.jesusisthemark.com). It includes stories, interviews, living scriptures, quotes, and more that move you to good thoughts, feelings, words, works, and deeds. Transformation starts from the inside out. Turn your heart to God by making Jesus Christ the Mark, even the focal point of your life. In so doing, you will learn to master your thoughts, feelings, words, and deeds. You will learn line upon line to emulate the Master of Masters in all that you do and say. Furthermore, as you grow in correct principles and partake of the fruits of the Spirit of God, it is hoped that you will go and do the doctrine of Christ that you may know His fruits. Fruits such as: &mdash; being more than you thought possible; &mdash; peace and hope amongst personal painful experiences; &mdash; and joy in service&mdash;that is sharing your talents with others that they may taste of the goodness &mdash; you&rsquo;ve experienced, etc. In short, this free podcast cast is an invitation to go and do mighty works. Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out. God prepared a way to bring about His purposes in love. Turn to Him and He will turn to you. His divine spiritual DNA runs within your soul. Give up the carnally minded man, and surrender your physique and life to the divine nature within you. Then you will tap into the waters and vine of Christ to bring about mighty words and works. Jesus is The Mark, therefore, emulate Him. Syn is an Anglo-Saxon word meaning missing the Mark&mdash;as is miss the target or bull\'s eye. Deep down you know His voice, but sin is to disobey the good prompting or deed when it is presented to you. Cease to ignore the divine river of truth waiting to express itself from within you. Be therefore a doer of the word, not just a hearer! Make Jesus the Mark and He will transform your little cottage to more than a mansion, as C.S. Lewis describes. He will turn your slum like shack or even mansion to something more expansive, even unto a temple of the Most High God. A place where God&rsquo;s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.</p>', 'jesus-is-the-mark-video-episodes-2023', 2, '2024-03-13 13:15:17', '2024-04-25 13:21:22'),
(2, 'Disciples Prosper Video Episodes 2024', 'podcast/4n7coqPhMCPnj6IadZeGXSYqMsrO2X3R6kTMUYoS.jpg', '<p>DISCIPLES PROSPER PODCAST is dedicated to sharing Kent\'s journey, as He turns to the Lord and makes Jesus the focal point in every area of his life. In here, he will invite and coach you to do likewise, even to emulate Christ. It includes stories, interviews, living scriptures, quotes, and more that move you to good thoughts, feelings, words, works, and deeds.</p>\r\n<p>Transformation starts from the inside out and is the result of turning heart and mind to God. It is more than remembering Him always, it is to be a doer of the word, including mastering your thoughts, feelings, words, and deeds. It is about emulating Him line upon line. In the process of emulating Him within the walls of your own temple, you are given power over your body. Thus, submitting to the will of the Lord isn\'t just about your heart and mind&mdash;it includes turning your physique over to Him.</p>\r\n<p>Jesus Christ tapped into the power of God to grow line upon line, perfection upon perfection. As such He set the bull&rsquo;s eye mark worthy of emulation. Not only did he set a perfect example, but when you make Him the focal point of your life, He is the vine or source to grant you access to the power of God. A power that will both stretch your vision and enables your growth to lay hold of every good thing.</p>\r\n<p>Furthermore, as you grow in living more and more correct principles, you partake of the fruits of the Spirit of God, including:<br>&nbsp; &nbsp; &nbsp;* enjoying the fruits of peace, hope, and joy;<br>&nbsp; &nbsp; &nbsp;* being a fit vessel for the Lord;<br>&nbsp; &nbsp; &nbsp;* sharing your talents and these fruits with others;<br>&nbsp; &nbsp; &nbsp;* and multiplying those talents to prosper in the land and eternities.</p>\r\n<p>In short, this free podcast cast is an invitation to go and do mighty works. Love, serve, and pray for others the same way you would like to be loved! When you live the teachings of Jesus and emulate His works, you bring about change from the inside out.</p>\r\n<p>God prepared a way to bring about His purposes in love. Turn to Him and He will turn to you. His divine spiritual DNA runs within your soul. Give up the carnally minded man, and surrender your physique and life to the divine nature within you. Then you will tap into the waters and vine of Christ to bring about mighty words and works.</p>\r\n<p>Deep down you know His voice. Simply come unto Him and hearken to it. Sin, as defined in the Doctrine and Covenants section 84 verses 49-53, is to disobey the good prompting or deed when it is presented to you. Cease to ignore the divine river of truth waiting to express itself from within you. Be therefore a doer of the word, not just a hearer! Emulating Christ will transform your physique from a cottage to a temple worthy of the constant companionship of the Holy Ghost.</p>\r\n<p>A place where God&rsquo;s presence is felt, observed, and radiates from within you and lifts all that you come in contact with.</p>\r\n<p>Kent helps:<br>&raquo; true disciples&nbsp;<br>&raquo; Emulate Christ&nbsp;<br>&raquo; from the inside out</p>', 'disciples-prosper-video-episodes-2024', 3, '2024-03-13 13:15:47', '2024-04-25 13:21:22'),
(10, 'Activate the Atonement—Mini-Book', 'podcast/5c0TIi8gs3XQRJeEwwMuqcFIBtfeEhX2EnZUmjap.jpg', '<p>A new podcast show called: \"Activate the Atonement&mdash;Mini-Book\" with only 5 episodes. A video book inviting you to move from 2nd hand experience with God to first hand experience. It will also address the idea of turning your weakness to strength, with the power of God, enabling you to do Mighty Works!</p>', 'activate-the-atonement-mini-book', 4, '2024-04-18 14:03:25', '2024-04-25 13:21:22'),
(11, 'Emulate Christ', 'podcast/KjIZ9JMI5BTxfI8dE8aP3V002QfmAiidQtQZfXEd.jpg', '<p>Kent Eyner Nielsen<br>A Christ-Centered family man who invites men and women to turn their lives to the Lord.&nbsp; God will do more with your life than you can, so why not let Him?&nbsp;</p>\r\n<p>====</p>\r\n<p>Emulate Christ is a movement about covenanting your life to the Lord, knowing He will make more of your life than you can. He will:</p>\r\n<p>&ldquo;deepen [your] joys,&nbsp;</p>\r\n<p>expand [your] vision,&nbsp;</p>\r\n<p>quicken [your] minds,&nbsp;</p>\r\n<p>&hellip; lift [your] spirits,&nbsp;</p>\r\n<p>multiply [your] blessings,&nbsp;</p>\r\n<p>increase [your] opportunities,&nbsp;</p>\r\n<p>comfort [your] souls,&nbsp;</p>\r\n<p>raise up friends,&nbsp;</p>\r\n<p>and pour out peace.&rdquo;*</p>\r\n<p>If you seek after these things, join the Emulate Christ Community,** where like-minded covenant keeping disciples of Christ strive to be like Abba, even as He did.</p>\r\n<p>====</p>\r\n<p>Christ referenced God as Abba&mdash;which translates directly as Daddy&mdash;thus teaching his true relation to Him. Furthermore He taught:</p>\r\n<p>&ldquo;Behold I have given unto you my gospel, and this is the gospel which I have given unto you&mdash;that I came into the world to do the will of my Father, because my Father sent me&rdquo; (3 Nephi 27:13).</p>\r\n<p>He expounded,</p>\r\n<p>&ldquo;Therefore, what manner of men ought ye to be? Verily I say unto you, even as I am&rdquo; (3 Nephi 27:27).</p>\r\n<p>This community is dedicated to you, a son or daughter of God, who strives to Emulate Christ.</p>\r\n<p>====</p>\r\n<p>*Russell M. Nelson, Liahona, Nov 2022.<br><br></p>', 'emulate-christ', 1, '2024-04-18 16:17:18', '2024-04-25 13:21:22'),
(12, 'Wise Men Sales', 'podcast/27CdDOaDxk5jwNxJFZBp0E0920oYNvPyaBFbwo1k.webp', '<div><code>This podcast is part of a sister company. It is where I implement the emulate Christ principles in another business, to prove that it works in transforming business life, even as it did my physical body&rsquo;s life.</code></div>\r\n<div>&nbsp;</div>', 'wise-men-sales', 5, '2024-04-19 10:07:50', '2024-04-25 13:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settingId` bigint NOT NULL,
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
(1, 'logo/1dFOAoT2olFZa3VYDQWECw2paJbiiuNiXru9CHf5.svg', 'logo/rWZfsLlmDMUTmOxqcksCShYVjI0gJZlGdpyO7bwQ.png', 'logo/sDtNLbGwDG8iK2KruhOazfh7OJJew6UmfmDSEY3y.png', 'PICD Staffing Services', NULL, 'admin@emulatechrist.com', 'info@oberlin.company.com', '+1 800 123 1231', '(800) 060-0730', 'EmulateChrist', 'https://www.facebook.com', 'https://lnk.bio/disciplesprosper', 'https://www.skool.com/emulatechrist/about', 'https://www.youtube.com/@emulate-christ', 'https://www.instagram.com/emulatechrist/', 'https://www.threads.net/@emulatechrist', '1713439039.pdf', '2024-01-12 08:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonialId` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonialId`, `name`, `position`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Robert', 'HR manager', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p>', '2024-03-13 12:38:18', '2024-03-13 12:38:18'),
(3, 'John Doe', 'ABC Company', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p>', '2024-03-14 13:16:13', '2024-03-14 13:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `name`, `email`, `password`, `profile_image`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Howard Katzeff', 'howard@skylerdesignbuild.com', '$2y$10$.P0oMwaVXUxr3dFERbV8N.Fl6Ni5LQSHPOWcROT6hPcB5065nwF8.', NULL, '2818913884', 1, '2024-02-29 15:34:13', '2024-02-29 15:34:13'),
(2, 'Amit maskare', 'igi203@goigi.in', '$2y$10$1aysGnCTsjVHKz8gRZrYaeV0W6y0TxUnYuBrcsHlmcc.HKQB8w17i', NULL, '879854521', 1, '2024-03-01 08:27:15', '2024-03-01 08:27:15'),
(3, 'Aayush Verma', 'aayush@skylerdesignbuild.com', '$2y$10$o1klxNaPPDlZoTuF7dN9BeeA499CDMFvIU6.1U0tfRcc9qYD/Lr3W', NULL, '9792502502', 1, '2024-03-04 20:31:01', '2024-03-04 20:31:01');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `bannerId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blogId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `cmsId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `companyId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ebook`
--
ALTER TABLE `ebook`
  MODIFY `ebookId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `episodeId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `getintouch`
--
ALTER TABLE `getintouch`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `podcastId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settingId` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonialId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
