-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 09:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_com_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `author`, `blog_title`, `short_description`, `long_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'blog-image/blog-image1663162714.jpg', 'Jone Doe', 'Financial Planning', 'Gain information about the basics of financial planning, including how to conduct an annual financial checkup, what a fee-only advisor does, and more.', 'Many experts suggest that people make a point of conducting a personal financial checkup on an annual basis or after a major life event (such as a marriage, divorce, birth, or death). The question is, what does that mean exactly?\r\n\r\nTo make sure you don’t miss something critical to your financial well-being, here are the main topics you should plan to cover.To begin with, review any major changes in your life that have taken place since your last financial checkup. Have you changed jobs, gotten married or divorced, welcomed a new family member, received an inheritance, bought a home, moved, or retired?\r\n\r\nEach of these life events can alter your overall financial picture. As you go through the sections below, consider how any recent life changes could affect your plans moving forward.Your budget is a blueprint for handling your income and expenses on a recurring basis. A budget should be monitored and adjusted as needed.\r\n\r\nThe idea is to make sure you have enough income to cover all your usual expenses, with some extra set aside for your longer-term financial goals. You can maintain your budget with pencil and paper, a computer spreadsheet, or one of the many available free or inexpensive budgeting software programs.', 1, '2022-09-14 01:38:34', '2022-09-14 03:58:29'),
(2, 'blog-image/blog-image1663169240.jpg', 'fgdf gduydsh', 'Sonabhan Bibi', 'One year, a week before Eid-ul-Adha, my grandma, Dadi, came to Dhaka from the village and broke into', 'One year, a week before Eid-ul-Adha, my grandma, Dadi, came to Dhaka from the village and broke into tears. \"What happened?\" we asked. She sobbed and said she\'d brought a rooster for us. A stranger who offered her help with her bags and belongings at Sadarghat Launch Terminal, while getting off the steamer, disappeared with the rooster. Dadi had been raising the rooster especially for us, ahead of Eid-ul-Adha festival. My father didn\'t earn enough to sacrifice any animal (or he thought he would better save the money for his children\'s education).\r\n\r\nSo, the rooster was Dadi\'s treat for us on Eid. It was a good, healthy, and over a year-old red rooster. \"Lal boro rata morog,\" in her words. She could have easily sold it for two hundred taka, she said, starting to cry again. She cursed the rooster larcenist throughout the afternoon and evening. She blamed herself for her foolishness too, for trusting such a random stranger. \r\n\r\nFor all latest news, follow The Daily Star\'s Google News channel.\r\nFor many reasons, Dadi was a remarkable character. Every time she was in Dhaka, she needed to see a doctor. After her visit to the family physician, she would whine about him, \"This doctor is no good.\" Why? Because neither the doctor had ordered a series of tests, nor had he prescribed plenty of medication.\r\n\r\nIt was almost impossible to please Dadi. For example, say she was back from having had a meal at her son\'s house. How did it go? \"They didn\'t give me the raan (chicken leg),\" she would say. If she\'d been offered the leg, her response would be, \"They didn\'t give me the breast.\" If she\'d been left on her own, her reaction would be, \"They were so unamiable and unfriendly.\"My Dadi happily played the \"typical Bengali\" mother-in-law role. After marriage, my 17-year-old mother came to Dhaka to live in a sizable joint family—my father\'s parents and his two unmarried sisters. Dadi left no sone unturned to make the young bride\'s life miserable. \"Taka diya bandi kina anchi,\" Dadi used to bellow when she was within earshot, my mother told me. When my mother was pregnant with me, Dadi declared that if the baby was a girl, she\'d send my mother away with the newborn for good and remarry her son.', 1, '2022-09-14 01:40:05', '2022-09-14 03:27:20'),
(3, 'blog-image/blog-image1663168869.png', 'Unknown', 'Where to learn new languages in Bangladesh', 'Learning a new language can be a fun and exciting challenge. Check out these places in Bangladesh where you can learn foreign languages.', 'Language is what connects the globe in the most basic way - communication. When you can speak to people in their own language you deepen connections and understanding. A new language is not only a gateway to another culture, but also a fun way to boost your skills and proficiency at academic and professional life. So, let\'s take a look at some fantastic language courses in Bangladesh and where to find them!\r\n\r\nInstitute of Modern Languages (IML)\r\nThe Institute of Modern Languages (IML) is an establishment of the University of Dhaka dedicated to teaching various modern languages. At present the Institute offers 1-year non-degree courses (120 hours each course) on Bangla (only for foreigners), Arabic, Chinese, Korean, English, French, German, Italian, Japanese, Persian, Russian, Spanish, Turkish and Hindi language courses. In addition to the above courses, M.Phil, Ph.D. programs and 18-months MA in ELT are available at the Institute. Besides, short courses on various languages are also offered. There are also 60-hours courses available for some languages, alongside Junior and Senior Certificate, Diploma and Higher Diploma courses. The course fees will vary with the language and course you choose. \r\n\r\nFor all latest news, follow The Daily Star\'s Google News channel.\r\nAlliance Française de Dhaka\r\nAlliance Française operates under local legislation and is managed by a committee made up of prominent personalities in respective countries. Every year more than 6,000 students learn French at Alliance Française de Dhaka. with about 2,500 students enrolling for workshop courses. The courses for French as a foreign language conform to the CEFR. Alliance Française de Dhaka organises 4 sessions of French courses every year. Each session has a duration of 3 months. There are three age groups: children (9-12), teenagers (13-15) and adults (16+). International exams like DELF, DALF, TCF, TEF and DAEFLE are offered for eligible students. \r\n\r\nGoethe-Institut Dhaka\r\nThe Goethe-Institute is one of the most trusted institutions for learning German. It offers a range of courses aiming to teach German successfully for day-to-day or leisure use, as well as professional or study purposes. The contents of these courses are based on the Common European Framework of Reference for Language (CEFR). There are a range of courses from Exam Preparation Courses (Online/Hybrid), Standard Courses (Online/Hybrid) and Intensive Courses (Online/Hybrid) of different durations. The website for Goethe-Institut is very efficient and you can choose the duration and depth of course with a probable cost list.', 1, '2022-09-14 03:20:53', '2022-09-14 03:21:09'),
(4, 'blog-image/blog-image1663168983.png', 'Unknown', 'Businesses spending more on cybersecurity than last year: Sophos research', 'According to the report, 11% of technology budgets have been dedicated to cybersecurity in 2022, an increase from 8.6% in the previous year.', 'Sophos, a global leader in next-generation cybersecurity, recently released additional findings from its survey report titled \'The Future of Cybersecurity in Asia Pacific and Japan\', in collaboration with Tech Research Asia (TRA). The report revealed that businesses are increasingly prioritising budgets for cybersecurity. \r\n\r\nAccording to the report, 11% of technology budgets have been dedicated to cybersecurity in 2022, an increase from 8.6% in the previous year. \r\n\r\nThe Asia Pacific and Japan (APJ) organisations have identified threat hunting as a key consideration for strengthening cybersecurity defences. Most organisations (90%) undertook threat hunting to bolster their cybersecurity capabilities in 2021. Of those that did, 85% stated the approach is critical to their company\'s overall cybersecurity capabilities. \r\n\r\n\"Previously, Sophos\' State of Ransomware Report revealed that 72% of APJ organisations were hit by ransomware in 2021, up from 39% in 2020. With this in mind, it\'s important that organisations review their cyber strategies regularly and address the gaps,\" said Aaron Bugal, global solutions engineer at Sophos. \r\nOrganisations are reactive and passive in their approach to cybersecurity\r\n45% of companies surveyed haven\'t made a change to their information or cybersecurity approach in the last 12 months, indicating a passive attitude to cybersecurity: something that must be addressed as a priority. The driving factor behind a change in strategy is an attack or breach, leading to an \"attack, change, attack, change\" cycle, a trend observed since 2019.\r\n\r\nHalf (49%) of the respondents are planning to make changes in the next six months due to experiencing an attack, highlighting the current reactive approach organisations take to managing their security.', 1, '2022-09-14 03:23:03', '2022-09-14 03:23:03'),
(5, 'blog-image/blog-image1663169123.jpg', 'Unknown', 'From Artist to Fatherhood: Sariful Razz’s Journey', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Before debuting in Dhallywood, Sariful Razz worked as a ramp model showcasing his talent in the world of fashion. After building a reputation of being a professional model, Razz made his debut in Dhallywood in 2016. The name of his first film was Ice Cream where he acted opposite Nazifa Tushi.\r\n\r\nIt was not long after his debut in acting, that Razz got to knock it out of the park with his performance in 2019 in the film No Dorai, where he acted opposite Sunerah Binte Kamal. His acting career went on an overdrive after his performance, which received rave reviews from critics and viewers alike after his movies Poran and Hawa were released recently. Dhallywood diva and his wife, Pori Mon went on cloud nine when Razz received good reviews and appreciation from the film industry as accolades.The duo announced their pregnancy after they declared their marriage which was carried out under the wraps on October 17, 2021. Pori Moni and Razz announced their pregnancy on January 10.\r\n\r\nIn the midst of Sariful Razz\'s success, the model and now actor welcomed his son to the world. The versatile artist is now embarking a fresh and long journey of fatherhood with the love of his life, Pori Moni. The couple, at the moment, is experiencing the euphoria of parenthood with their son, Shaheem Muhammad Rajya.', 1, '2022-09-14 03:25:11', '2022-09-14 03:25:23'),
(6, 'blog-image/blog-image1663169446.jpeg', 'Unknown', 'Al Pacino – Any Given Sunday', 'Al Pacino’s speech from the American Football drama, Any Given Sunday, is next up on our list.', 'This famous motivational speech really gets your blood flowing – perfect for watching before you tackle a difficult day.\r\n\r\nThe motivational speech revolves around the idea of inches being so important in American Football, even if we have the tendency to overlook them.\r\n\r\nHe talks about the different ways that his team can gain advantages over their opponents, even if it’s only an inch at a time.\r\n\r\nHe proclaims: “when we add up all those […] inches, that’s what makes the difference between winning and losing”.\r\n\r\nThis point is applicable throughout life, too – it’s the people who go the extra mile who tend to find success more often than not.\r\n\r\nAnd sometimes, you won’t notice it at first, but like Pacino mentions, it’s the sum of all the small parts which lead you to victory.\r\n\r\nMotivational speeches like this one pump you up when you need it most.', 1, '2022-09-14 03:30:46', '2022-09-14 03:30:46'),
(7, 'blog-image/blog-image1663170895.jpg', 'Unknown', 'Janice Bryant Howroyd', 'Janice Bryant Howroyd is the founder of ActOne Group, the first Black female-led company to bring in more than $1 billion in annual revenue.', 'Janice Bryant Howroyd is an entrepreneur, educator, ambassador, businesswoman, author, and mentor. She is founder and chief executive officer of The ActOne Group, the largest privately held\r\n\r\nActOne is primarily an employment agency and consultancy based in Los Angeles. It has more than 17,000 clients in 19 countries and, like many of her counterparts on this list, Howroyd started from very humble beginnings. She launched her company with just $1,500 in 1978. She is listed in Forbes’ 2020 America’s Richest Self-Made Women.', 1, '2022-09-14 03:54:55', '2022-09-14 03:54:55'),
(8, 'blog-image/blog-image1663171023.jpg', 'Unknown', 'Who Are the Top Women Entrepreneurs?', 'Women entrepreneurs have shaped many industries.', 'Zhang Xin is known as \"the woman who built Beijing\" thanks to her work in real estate as co-founder of SOHO China. Kiran Mazumdar-Shaw founded Biocon, the largest listed biopharmaceutical company in India based on revenues.\r\n Janice Bryant Howroyd co-founded ActOne Group, a workforce management firm with over 17,000 clients in 19 countries. It was the first Black-owned company to achieve $1 billion in annual revenues.\r\n Ariana Huffington, The Huffington Post founder, sold the publication to AOL for $315 million in 2011.\r\n Rihanna, singer and business owner, runs Fenty Beauty, a billion-dollar company.', 1, '2022-09-14 03:57:03', '2022-09-14 03:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Courses', 1, '2022-09-14 00:51:36', '2022-09-14 00:51:36'),
(2, 'Goods', 1, '2022-09-14 02:46:54', '2022-09-14 02:46:54');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_07_24_193603_create_sessions_table', 1),
(10, '2022_09_14_092426_create_blogs_table', 2),
(11, '2022_09_14_092517_create_products_table', 2),
(12, '2022_09_14_092550_create_categories_table', 2),
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(20, '2022_07_24_193603_create_sessions_table', 1),
(21, '2022_09_14_092426_create_blogs_table', 1),
(22, '2022_09_14_092517_create_products_table', 1),
(23, '2022_09_14_092550_create_categories_table', 1),
(24, '2022_09_17_055513_create_members_table', 1),
(25, '2022_09_17_152715_create_sub_categories_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` double(10,2) DEFAULT NULL,
  `selling_price` double(10,2) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `name`, `regular_price`, `selling_price`, `short_description`, `long_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(10, 1, 1, 'Web Development', 5000.00, 4000.00, 'Web development is the work involved in developing a website for the Internet or an intranet.', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'product-image/product-image1663166546.jpeg', 1, '2022-09-14 02:06:15', '2022-09-14 02:42:26'),
(11, 1, 1, 'Certificate courses on Java', 8000.00, 8000.00, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'product-image/product-image1663167091.jpg', 1, '2022-09-14 02:51:31', '2022-09-14 02:51:31'),
(12, 2, 2, 'T-Shirt', 500.00, 500.00, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'product-image/product-image1663167239.jpg', 1, '2022-09-14 02:53:59', '2022-09-14 02:53:59'),
(13, 2, 2, 'T-Shirt', 400.00, 400.00, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'product-image/product-image1663167288.jpg', 1, '2022-09-14 02:54:48', '2022-09-14 02:54:48'),
(14, 2, 3, 'Shawl', 2000.00, 2000.00, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'product-image/product-image1663167332.jpg', 1, '2022-09-14 02:55:32', '2022-09-14 02:55:32'),
(15, 2, 4, 'Swater', 500.00, 500.00, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'product-image/product-image1663167380.jpg', 1, '2022-09-14 02:56:20', '2022-09-14 02:56:20'),
(16, 2, 4, 'Swater', 500.00, 500.00, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'product-image/product-image1663167418.jpg', 1, '2022-09-14 02:56:58', '2022-09-14 02:56:58'),
(17, 1, 1, 'Digital Marketing', 10000.00, 10000.00, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'product-image/product-image1663167545.avif', 1, '2022-09-14 02:59:05', '2022-09-14 02:59:05'),
(18, 1, 1, 'Sewing Class', 1000.00, 1000.00, 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'product-image/product-image1663167852.jpg', 1, '2022-09-14 03:04:12', '2022-09-14 03:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cHYCrFkERRvp5IafnRu1SPACTUHCAQVWaQaAERe2', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidFoxVkNWS201MzZEczVONWRHOUw3M0ZJTFZjUVRkYTNlVURqY1RkYSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0OToiaHR0cDovL2xvY2FsaG9zdC9lLWNvbS1zaXRlL3B1YmxpYy9tYW5hZ2UtcHJvZHVjdCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vbG9jYWxob3N0L2UtY29tLXNpdGUvcHVibGljL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1663439107),
('dr9zARLZlZ9p3fiUTXe9LFf69aVBUTypSVmh3iss', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiazBYaFBDcVJHamMzWHNVWHBsek5WRktCM2NFVzVaajQ5Z3Q1enBuRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3QvZS1jb20tc2l0ZS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1663427231),
('eteCr57FWTiJA0Vpgs6ZvQfE39xbtSMzkgHVb9fd', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYnpRVFhvdmJXTjl5MThSTmFITm50YXBkZEpJQXBjMUI1enhhejdyWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3QvZS1jb20tc2l0ZS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1663425043),
('LAPNpi5wAUX84lsOn5vyW00vqPbvrUsQn8p6BMSD', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV1BsU0wwbm1xYjRHVzA5VVdvSmNsT2dLeTBIZEFGY3BOckR5aFY0byI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ5OiJodHRwOi8vbG9jYWxob3N0L2UtY29tLXNpdGUvcHVibGljL21hbmFnZS1wcm9kdWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1663433992),
('LY23oLYcfjlZ5B5L9KEck2CVgQ0EchPjGCxk91Oo', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicE00Rzd2RlQ4cnVwcmVCUU1DRlEwaVZJTVkyYmZUWXhwd2NKWXc0USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3QvZS1jb20tc2l0ZS9wdWJsaWMvYWRkLXN1YkNhdGVnb3J5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1663432858),
('Nx5At2ae9i8zk02eetk7kBqk0V9kkiQmiuAEcPS2', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid29GREh6ZkNnVGhYcnBKVmRiNjdaRVdDNEkwN3puMzhLRFh5a1Q2eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3QvZS1jb20tc2l0ZS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1663442830),
('p2KztnNAQMpIBtkypi5XcJdNktumWxG76BQzCNke', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaFQ3a0JVemJyTmJaTkY0VUhyNVprZTJoY3JDNGpOM2Jyb1hOaExNciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3QvZS1jb20tc2l0ZS9wdWJsaWMvcHJvZHVjdCI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1663440342);

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Online', 1, '2022-09-17 09:53:32', '2022-09-17 09:53:32'),
(2, 2, 'Men', 1, '2022-09-17 09:56:45', '2022-09-17 09:56:45'),
(3, 2, 'Womens Wear', 1, '2022-09-17 10:40:48', '2022-09-17 10:40:48'),
(4, 2, 'Kids', 1, '2022-09-17 10:40:57', '2022-09-17 10:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@admin.com', '1', NULL, '$2y$10$udf7QW.3urxKdoKh7P1InuYZx3sR2ianJLdS0jJXnzdmVGoKNFjEG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-28 18:09:34', '2022-08-28 18:09:34'),
(2, 'User1', 'user@gmail.com', '0', NULL, '$2y$10$5znRIDx.JC5VUkYPz2NFUeEaNKHflznHjKBrfyDIZV2rAAko3LloO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-17 03:22:42', '2022-09-17 03:22:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
