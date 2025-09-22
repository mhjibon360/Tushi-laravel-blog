-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 22, 2025 at 03:48 PM
-- Server version: 8.0.41
-- PHP Version: 8.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tushi_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `story_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_details_left` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `story_details_right` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `icon`, `heading`, `image`, `big_heading`, `details`, `story_icon`, `story_heading`, `story_details_left`, `story_details_right`, `short`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'upload/about/1838061921220642.svg', 'About Us', 'upload/about/1838061909494201.jpg', 'Tushi is a media network that builds and operates.', 'We do this with the aim of creating the future of media. The future of media is one that is disruptive, agile, and credible. It embraces diversity, creates a positive impact, and leaves its audience in a better place than where they were before. We advocate for a media that embraces this and we embody.', 'upload/about/1838061928147852.svg', 'Our Story', 'The truth is important to us, so our work must always be trustworthy and demonstrate integrity. We push ourselves to move fast and not be afraid to change things up.', 'Our work must positively impact the lives. We come from different backgrounds and are varied in our thoughts and beliefs. We respect diversity and our work reflects that.', 'We actively encourage fresh ideas and creative ways of doing things better.', '2025-07-19 01:37:54', '2025-07-22 21:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-spatie.permission.cache', 'a:3:{s:5:\"alias\";a:5:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"group_name\";s:1:\"d\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:34:{i:0;a:5:{s:1:\"a\";i:1;s:1:\"b\";s:14:\"Dashboard Menu\";s:1:\"c\";s:9:\"dashboard\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:6:{i:0;i:2;i:1;i:3;i:2;i:4;i:3;i:5;i:4;i:6;i:5;i:7;}}i:1;a:5:{s:1:\"a\";i:2;s:1:\"b\";s:14:\"dashboard list\";s:1:\"c\";s:9:\"dashboard\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:6:{i:0;i:2;i:1;i:3;i:2;i:4;i:3;i:5;i:4;i:6;i:5;i:7;}}i:2;a:5:{s:1:\"a\";i:3;s:1:\"b\";s:13:\"Language Menu\";s:1:\"c\";s:8:\"language\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:5:{i:0;i:2;i:1;i:3;i:2;i:4;i:3;i:6;i:4;i:7;}}i:3;a:5:{s:1:\"a\";i:4;s:1:\"b\";s:15:\"language create\";s:1:\"c\";s:8:\"language\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:5:{i:0;i:2;i:1;i:3;i:2;i:4;i:3;i:6;i:4;i:7;}}i:4;a:5:{s:1:\"a\";i:5;s:1:\"b\";s:13:\"language list\";s:1:\"c\";s:8:\"language\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:4;i:3;i:6;}}i:5;a:5:{s:1:\"a\";i:6;s:1:\"b\";s:13:\"language edit\";s:1:\"c\";s:8:\"language\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:4;i:3;i:6;}}i:6;a:5:{s:1:\"a\";i:7;s:1:\"b\";s:15:\"language update\";s:1:\"c\";s:8:\"language\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:4;i:3;i:6;}}i:7;a:5:{s:1:\"a\";i:8;s:1:\"b\";s:15:\"language delete\";s:1:\"c\";s:8:\"language\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:4:{i:0;i:2;i:1;i:3;i:2;i:4;i:3;i:6;}}i:8;a:5:{s:1:\"a\";i:9;s:1:\"b\";s:13:\"Category Menu\";s:1:\"c\";s:8:\"category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:9;a:5:{s:1:\"a\";i:10;s:1:\"b\";s:15:\"category create\";s:1:\"c\";s:8:\"category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:10;a:5:{s:1:\"a\";i:11;s:1:\"b\";s:13:\"category list\";s:1:\"c\";s:8:\"category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:11;a:5:{s:1:\"a\";i:12;s:1:\"b\";s:13:\"category edit\";s:1:\"c\";s:8:\"category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:12;a:5:{s:1:\"a\";i:13;s:1:\"b\";s:15:\"category update\";s:1:\"c\";s:8:\"category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:13;a:5:{s:1:\"a\";i:14;s:1:\"b\";s:15:\"category delete\";s:1:\"c\";s:8:\"category\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:14;a:5:{s:1:\"a\";i:15;s:1:\"b\";s:8:\"Tag Menu\";s:1:\"c\";s:3:\"tag\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:15;a:5:{s:1:\"a\";i:16;s:1:\"b\";s:10:\"tag create\";s:1:\"c\";s:3:\"tag\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:16;a:5:{s:1:\"a\";i:17;s:1:\"b\";s:8:\"tag list\";s:1:\"c\";s:3:\"tag\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:17;a:5:{s:1:\"a\";i:18;s:1:\"b\";s:8:\"tag edit\";s:1:\"c\";s:3:\"tag\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:18;a:5:{s:1:\"a\";i:19;s:1:\"b\";s:10:\"tag update\";s:1:\"c\";s:3:\"tag\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:19;a:5:{s:1:\"a\";i:20;s:1:\"b\";s:10:\"tag delete\";s:1:\"c\";s:3:\"tag\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:20;a:5:{s:1:\"a\";i:21;s:1:\"b\";s:9:\"Post Menu\";s:1:\"c\";s:4:\"post\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:21;a:5:{s:1:\"a\";i:22;s:1:\"b\";s:11:\"post create\";s:1:\"c\";s:4:\"post\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:22;a:5:{s:1:\"a\";i:23;s:1:\"b\";s:9:\"post list\";s:1:\"c\";s:4:\"post\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:2;i:1;i:3;i:2;i:5;}}i:23;a:5:{s:1:\"a\";i:24;s:1:\"b\";s:9:\"post edit\";s:1:\"c\";s:4:\"post\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:24;a:5:{s:1:\"a\";i:25;s:1:\"b\";s:11:\"post update\";s:1:\"c\";s:4:\"post\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:25;a:5:{s:1:\"a\";i:26;s:1:\"b\";s:11:\"post delete\";s:1:\"c\";s:4:\"post\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:3;}}i:26;a:5:{s:1:\"a\";i:27;s:1:\"b\";s:10:\"About Menu\";s:1:\"c\";s:5:\"about\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:27;a:5:{s:1:\"a\";i:28;s:1:\"b\";s:10:\"About list\";s:1:\"c\";s:5:\"about\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:28;a:5:{s:1:\"a\";i:29;s:1:\"b\";s:12:\"Setting Menu\";s:1:\"c\";s:7:\"setting\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:9;}}i:29;a:5:{s:1:\"a\";i:30;s:1:\"b\";s:12:\"setting list\";s:1:\"c\";s:7:\"setting\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:2;i:1;i:9;}}i:30;a:5:{s:1:\"a\";i:31;s:1:\"b\";s:15:\"Newsletter Menu\";s:1:\"c\";s:10:\"newsletter\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:31;a:5:{s:1:\"a\";i:32;s:1:\"b\";s:15:\"newsletter list\";s:1:\"c\";s:10:\"newsletter\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:32;a:5:{s:1:\"a\";i:33;s:1:\"b\";s:20:\"Contact Message Menu\";s:1:\"c\";s:7:\"message\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}i:33;a:5:{s:1:\"a\";i:34;s:1:\"b\";s:20:\"contact message list\";s:1:\"c\";s:7:\"message\";s:1:\"d\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:2;}}}s:5:\"roles\";a:7:{i:0;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:11:\"Super Admin\";s:1:\"d\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:5:\"Admin\";s:1:\"d\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:4;s:1:\"b\";s:6:\"Editor\";s:1:\"d\";s:3:\"web\";}i:3;a:3:{s:1:\"a\";i:5;s:1:\"b\";s:6:\"Author\";s:1:\"d\";s:3:\"web\";}i:4;a:3:{s:1:\"a\";i:6;s:1:\"b\";s:11:\"Contributor\";s:1:\"d\";s:3:\"web\";}i:5;a:3:{s:1:\"a\";i:7;s:1:\"b\";s:19:\"Subscriber / Reader\";s:1:\"d\";s:3:\"web\";}i:6;a:3:{s:1:\"a\";i:9;s:1:\"b\";s:7:\"Manager\";s:1:\"d\";s:3:\"web\";}}}', 1753618913);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Programming', 'programming', '2025-07-18 21:51:32', NULL),
(2, 'Web Development', 'web-development', '2025-07-18 21:51:32', NULL),
(3, 'Mobile App Development', 'mobile-app-development', '2025-07-18 21:51:32', NULL),
(4, 'Artificial Intelligence', 'artificial-intelligence', '2025-07-18 21:51:32', NULL),
(5, 'Machine Learning', 'machine-learning', '2025-07-18 21:51:32', NULL),
(6, 'Data Science', 'data-science', '2025-07-18 21:51:32', NULL),
(7, 'Cyber Security', 'cyber-security', '2025-07-18 21:51:32', NULL),
(8, 'Cloud Computing', 'cloud-computing', '2025-07-18 21:51:32', NULL),
(9, 'DevOps', 'devops', '2025-07-18 21:51:32', NULL),
(10, 'Blockchain', 'blockchain', '2025-07-18 21:51:32', NULL),
(11, 'Internet of Things (IoT)', 'internet-of-things-iot', '2025-07-18 21:51:32', NULL),
(12, 'UI/UX Design', 'ui-ux-design', '2025-07-18 21:51:32', NULL),
(13, 'Software Testing', 'software-testing', '2025-07-18 21:51:32', NULL),
(14, 'Game Development', 'game-development', '2025-07-18 21:51:32', NULL),
(15, 'AR/VR Technology', 'ar-vr-technology', '2025-07-18 21:51:32', NULL),
(16, 'Big Data', 'big-data', '2025-07-18 21:51:32', NULL),
(17, 'Robotics', 'robotics', '2025-07-18 21:51:32', NULL),
(18, 'Tech News', 'tech-news', '2025-07-18 21:51:32', NULL),
(19, 'Gadgets Review', 'gadgets-review', '2025-07-18 21:51:32', NULL),
(20, 'Startup & Innovation', 'startup-innovation', '2025-07-18 21:51:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE IF NOT EXISTS `contact_messages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `user_id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, '1', 'Beau Osborne', 'mowiz@mailinator.com', 'Magnam labore repreh', '2025-07-19 20:40:59', NULL),
(2, NULL, 'Thane Baker', 'vedip@mailinator.com', 'Molestiae omnis quo', '2025-07-19 20:42:04', NULL),
(5, '1', 'Amela Vincent', 'sukyfowu@mailinator.com', 'Quidem ratione exerc', '2025-07-21 22:12:48', NULL),
(6, '1', 'Mehedi', 'mehedi.bd@gmail.com', 'test', '2025-07-22 05:15:25', NULL),
(7, '25', 'Rokeya Begum', 'rokeya.b@gmail.com', 'I Need your help?', '2025-07-25 23:11:29', NULL),
(8, '25', 'Rokeya Begum', 'rokeya.b@gmail.com', 'Voluptas repellendus suscipit gravida vehicula aptent? Libero laborum dapibus quam, aut imperdiet. Asperiores purus, sollicitudin laoreet, nostra quam, possimus massa orci, mollitia hymenaeos! Maxime aspernatur consectetuer venenatis? Occaecati. Hic non, aperiam aut, erat beatae alias consequat, lacus ducimus tenetur architecto, sociosqu adipisicing tempus veritatis. Quo, tortor praesent vel! Integer doloremque blanditiis, et elit doloremque? Possimus quia alias, ea magna non platea ullamcorper cumque, hic! Error aptent semper aliquid! Enim magna. Vestibulum, consequat odio neque pretium accusamus aut quidem? Dicta necessitatibus, doloremque sollicitudin, ut consequat, ipsa fermentum aspernatur adipisicing, lectus numquam, aliquid eros commodo, neque ligula eiusmod, ratione fusce incidunt mollitia.', '2025-07-25 23:11:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '34f67e63-8324-4dca-9f3e-b2191782312d', 'database', 'default', '{\"uuid\":\"34f67e63-8324-4dca-9f3e-b2191782312d\",\"displayName\":\"App\\\\Mail\\\\NewsletterMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:23:\\\"App\\\\Mail\\\\NewsletterMail\\\":3:{s:8:\\\"maildata\\\";a:2:{s:7:\\\"subject\\\";s:8:\\\"sad july\\\";s:7:\\\"message\\\";s:19:\\\"allah make us happy\\\";}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:20:\\\"mjjibon114@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:3:\\\"job\\\";N;}\"},\"createdAt\":1753172653,\"delay\":null}', 'Symfony\\Component\\Mailer\\Exception\\UnexpectedResponseException: Expected response code \"354\" but got code \"550\", with message \"550 5.7.0 Too many emails per second. Please upgrade your plan https://mailtrap.io/billing/plans/testing\". in C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php:342\nStack trace:\n#0 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(198): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->assertResponseCode(\'550 5.7.0 Too m...\', Array)\n#1 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\mailer\\Transport\\Smtp\\EsmtpTransport.php(150): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->executeCommand(\'DATA\\r\\n\', Array)\n#2 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(220): Symfony\\Component\\Mailer\\Transport\\Smtp\\EsmtpTransport->executeCommand(\'DATA\\r\\n\', Array)\n#3 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\mailer\\Transport\\AbstractTransport.php(69): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doSend(Object(Symfony\\Component\\Mailer\\SentMessage))\n#4 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(138): Symfony\\Component\\Mailer\\Transport\\AbstractTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#5 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(584): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#6 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(331): Illuminate\\Mail\\Mailer->sendSymfonyMessage(Object(Symfony\\Component\\Mime\\Email))\n#7 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(207): Illuminate\\Mail\\Mailer->send(\'backend.pages.n...\', Array, Object(Closure))\n#8 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->{closure:Illuminate\\Mail\\Mailable::send():200}()\n#9 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(200): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#10 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\SendQueuedMailable.php(82): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\MailManager))\n#11 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle(Object(Illuminate\\Mail\\MailManager))\n#12 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::{closure:Illuminate\\Container\\BoundMethod::call():35}()\n#13 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#14 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#15 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(754): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#16 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Container\\Container->call(Array)\n#17 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(169): Illuminate\\Bus\\Dispatcher->{closure:Illuminate\\Bus\\Dispatcher::dispatchNow():129}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#18 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(126): Illuminate\\Pipeline\\Pipeline->{closure:Illuminate\\Pipeline\\Pipeline::prepareDestination():167}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#19 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(136): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#20 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(125): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Mail\\SendQueuedMailable), false)\n#21 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(169): Illuminate\\Queue\\CallQueuedHandler->{closure:Illuminate\\Queue\\CallQueuedHandler::dispatchThroughMiddleware():120}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#22 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(126): Illuminate\\Pipeline\\Pipeline->{closure:Illuminate\\Pipeline\\Pipeline::prepareDestination():167}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#23 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(120): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(68): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Mail\\SendQueuedMailable))\n#25 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#26 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(444): Illuminate\\Queue\\Jobs\\Job->fire()\n#27 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(394): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#28 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(180): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#29 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(148): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#30 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(131): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#31 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#32 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::{closure:Illuminate\\Container\\BoundMethod::call():35}()\n#33 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#34 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#35 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(754): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#36 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#37 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\console\\Command\\Command.php(318): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#38 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#39 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\console\\Application.php(1092): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\console\\Application.php(341): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\console\\Application.php(192): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(197): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1234): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 C:\\laragon\\www\\tushi-blog\\artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#45 {main}', '2025-07-22 02:25:28'),
(2, '71e7e794-1548-413c-b812-2f582dcb4048', 'database', 'default', '{\"uuid\":\"71e7e794-1548-413c-b812-2f582dcb4048\",\"displayName\":\"App\\\\Mail\\\\NewsletterMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":15:{s:8:\\\"mailable\\\";O:23:\\\"App\\\\Mail\\\\NewsletterMail\\\":3:{s:8:\\\"maildata\\\";a:2:{s:7:\\\"subject\\\";s:8:\\\"sad july\\\";s:7:\\\"message\\\";s:19:\\\"allah make us happy\\\";}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:20:\\\"ciloh@mailinator.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:3:\\\"job\\\";N;}\"},\"createdAt\":1753172653,\"delay\":null}', 'Symfony\\Component\\Mailer\\Exception\\UnexpectedResponseException: Expected response code \"354\" but got code \"550\", with message \"550 5.7.0 Too many emails per second. Please upgrade your plan https://mailtrap.io/billing/plans/testing\". in C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php:342\nStack trace:\n#0 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(198): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->assertResponseCode(\'550 5.7.0 Too m...\', Array)\n#1 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\mailer\\Transport\\Smtp\\EsmtpTransport.php(150): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->executeCommand(\'DATA\\r\\n\', Array)\n#2 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(220): Symfony\\Component\\Mailer\\Transport\\Smtp\\EsmtpTransport->executeCommand(\'DATA\\r\\n\', Array)\n#3 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\mailer\\Transport\\AbstractTransport.php(69): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->doSend(Object(Symfony\\Component\\Mailer\\SentMessage))\n#4 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\mailer\\Transport\\Smtp\\SmtpTransport.php(138): Symfony\\Component\\Mailer\\Transport\\AbstractTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#5 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(584): Symfony\\Component\\Mailer\\Transport\\Smtp\\SmtpTransport->send(Object(Symfony\\Component\\Mime\\Email), Object(Symfony\\Component\\Mailer\\DelayedEnvelope))\n#6 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailer.php(331): Illuminate\\Mail\\Mailer->sendSymfonyMessage(Object(Symfony\\Component\\Mime\\Email))\n#7 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(207): Illuminate\\Mail\\Mailer->send(\'backend.pages.n...\', Array, Object(Closure))\n#8 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Traits\\Localizable.php(19): Illuminate\\Mail\\Mailable->{closure:Illuminate\\Mail\\Mailable::send():200}()\n#9 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\Mailable.php(200): Illuminate\\Mail\\Mailable->withLocale(NULL, Object(Closure))\n#10 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Mail\\SendQueuedMailable.php(82): Illuminate\\Mail\\Mailable->send(Object(Illuminate\\Mail\\MailManager))\n#11 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Mail\\SendQueuedMailable->handle(Object(Illuminate\\Mail\\MailManager))\n#12 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::{closure:Illuminate\\Container\\BoundMethod::call():35}()\n#13 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#14 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#15 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(754): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#16 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(132): Illuminate\\Container\\Container->call(Array)\n#17 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(169): Illuminate\\Bus\\Dispatcher->{closure:Illuminate\\Bus\\Dispatcher::dispatchNow():129}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#18 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(126): Illuminate\\Pipeline\\Pipeline->{closure:Illuminate\\Pipeline\\Pipeline::prepareDestination():167}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#19 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Bus\\Dispatcher.php(136): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#20 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(125): Illuminate\\Bus\\Dispatcher->dispatchNow(Object(Illuminate\\Mail\\SendQueuedMailable), false)\n#21 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(169): Illuminate\\Queue\\CallQueuedHandler->{closure:Illuminate\\Queue\\CallQueuedHandler::dispatchThroughMiddleware():120}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#22 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(126): Illuminate\\Pipeline\\Pipeline->{closure:Illuminate\\Pipeline\\Pipeline::prepareDestination():167}(Object(Illuminate\\Mail\\SendQueuedMailable))\n#23 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(120): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))\n#24 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\CallQueuedHandler.php(68): Illuminate\\Queue\\CallQueuedHandler->dispatchThroughMiddleware(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Mail\\SendQueuedMailable))\n#25 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Jobs\\Job.php(102): Illuminate\\Queue\\CallQueuedHandler->call(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Array)\n#26 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(444): Illuminate\\Queue\\Jobs\\Job->fire()\n#27 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(394): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#28 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(180): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#29 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(148): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#30 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(131): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#31 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#32 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(43): Illuminate\\Container\\BoundMethod::{closure:Illuminate\\Container\\BoundMethod::call():35}()\n#33 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(96): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#34 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#35 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(754): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#36 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#37 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\console\\Command\\Command.php(318): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#38 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#39 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\console\\Application.php(1092): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#40 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\console\\Application.php(341): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#41 C:\\laragon\\www\\tushi-blog\\vendor\\symfony\\console\\Application.php(192): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#42 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(197): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#43 C:\\laragon\\www\\tushi-blog\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(1234): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#44 C:\\laragon\\www\\tushi-blog\\artisan(16): Illuminate\\Foundation\\Application->handleCommand(Object(Symfony\\Component\\Console\\Input\\ArgvInput))\n#45 {main}', '2025-07-22 02:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE IF NOT EXISTS `job_batches` (
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

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `language_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_short` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language_name`, `language_short`, `created_at`, `updated_at`) VALUES
(6, 'English', 'en', '2025-07-20 09:06:59', '2025-07-20 09:10:36'),
(7, 'Bangla', 'bn', '2025-07-20 09:07:29', NULL),
(8, 'Hindi', 'hi', '2025-07-20 09:07:48', NULL),
(9, 'Urdu', 'ur', '2025-07-20 09:08:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(12, '2025_07_18_111547_create_posts_table', 3),
(14, '2025_07_18_073813_create_categories_table', 4),
(15, '2025_07_18_111554_create_tags_table', 5),
(16, '2025_07_19_072854_create_abouts_table', 6),
(17, '2025_07_20_013720_create_home_banners_table', 7),
(18, '2025_07_20_023748_create_contact_messages_table', 8),
(19, '2025_07_20_025447_create_newsletters_table', 9),
(21, '2025_07_20_031038_create_seo_settings_table', 10),
(23, '2025_07_20_030839_create_site_settings_table', 11),
(24, '2025_07_20_143613_create_languages_table', 12),
(25, '2025_07_21_183942_create_notifications_table', 13),
(27, '2025_07_22_183532_create_permission_tables', 14);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1),
(5, 'App\\Models\\User', 5),
(9, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 38);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `user_id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, '1', 'Gannon Pena', 'nyvu@mailinator.com', '2025-07-19 21:02:45', NULL),
(2, '1', 'Mehedi', 'mjjibon114@gmail.com', '2025-07-21 21:36:29', NULL),
(3, '1', 'Tobias Roman', 'ciloh@mailinator.com', '2025-07-21 21:47:01', NULL),
(4, '1', 'Armand Webster', 'lezefeka@mailinator.com', '2025-07-21 21:50:16', NULL),
(5, '25', 'Rokeya One', 'rokeya1@gmail.com', '2025-07-25 22:56:33', NULL),
(6, '25', 'Rokeya Two', 'rokey2@gmail.com', '2025-07-25 23:01:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('00f72e1b-223e-4d90-918b-1a20348f2c06', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 5, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:47:01', '2025-07-21 21:47:01'),
('093fba0d-f97a-46de-a23c-4006373bdf7b', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 9, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 23:01:49', '2025-07-25 23:01:49'),
('09be37e0-bccf-467e-a0f2-3cafed9ff86e', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 13, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:50:16', '2025-07-21 21:50:16'),
('0ac42a69-a961-4074-bc65-fcfb5b29b763', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 5, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:58', '2025-07-25 23:11:58'),
('1d683cce-6071-446e-81b7-f304064a850d', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 6, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:50:16', '2025-07-21 21:50:16'),
('1e3e42f0-a461-40ce-a9bf-182b4ad7f8b1', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 1, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:47:01', '2025-07-21 21:47:01'),
('240a8b0e-52e2-4110-bfb2-b1ef1472d3ac', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 1, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:29', '2025-07-25 23:11:29'),
('2c30180f-89bf-4c86-8c14-b4d79523ce1a', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 38, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 22:56:33', '2025-07-25 22:56:33'),
('2cf65569-0ef1-4075-97b3-60c45b6f4b97', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 13, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:58', '2025-07-25 23:11:58'),
('317234a6-1113-4d90-83e1-3a9448429e74', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 38, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:29', '2025-07-25 23:11:29'),
('32a22030-9ef8-4e14-974b-b0aba89a7744', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 5, '{\"message\":\"New user Contact\"}', NULL, '2025-07-22 05:15:25', '2025-07-22 05:15:25'),
('3374e16b-4a4b-4cb1-9480-d0d65d762312', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 13, '{\"message\":\"New user Contact\"}', NULL, '2025-07-21 22:12:48', '2025-07-21 22:12:48'),
('3add453f-26af-481f-afe8-699ad1381b62', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 12, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:29', '2025-07-25 23:11:29'),
('3c7fe828-296e-477c-8718-42dd02604e1e', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 9, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:47:01', '2025-07-21 21:47:01'),
('3cd89542-530b-467d-ae73-e3f5db5d607e', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 12, '{\"message\":\"New user Contact\"}', NULL, '2025-07-22 05:15:25', '2025-07-22 05:15:25'),
('3d1d2f19-dc7c-46c9-ad99-c462a780ab77', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 6, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:29', '2025-07-25 23:11:29'),
('3d822d8c-e15b-4ed1-addc-525d80b5014c', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 5, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 23:01:49', '2025-07-25 23:01:49'),
('42e6d7d6-8040-4c6e-9e8f-56bab82af73b', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 9, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:58', '2025-07-25 23:11:58'),
('47b7494f-ce82-4ccb-ab91-f84a1cbf7a9e', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 6, '{\"message\":\"New user Contact\"}', NULL, '2025-07-22 05:15:25', '2025-07-22 05:15:25'),
('6219a327-470a-4838-be80-1ab05fc7d0c0', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 12, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 23:01:49', '2025-07-25 23:01:49'),
('62c41659-3339-422a-9bc5-eacb7e272f64', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 5, '{\"message\":\"New user Contact\"}', NULL, '2025-07-21 22:12:48', '2025-07-21 22:12:48'),
('6b5242f3-3fd2-46f7-993d-495909d9dea0', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 12, '{\"message\":\"New user Contact\"}', NULL, '2025-07-21 22:12:48', '2025-07-21 22:12:48'),
('7498b896-76b2-479c-a09d-2351d14e75ad', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 5, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 22:56:33', '2025-07-25 22:56:33'),
('7916fafb-d031-437e-b6fa-44467b0ed48d', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 13, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 23:01:49', '2025-07-25 23:01:49'),
('79edbe94-9396-40f3-b30e-70f01ec966dc', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 38, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 23:01:49', '2025-07-25 23:01:49'),
('7f786cc1-3957-4070-9526-78656bf9300b', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 9, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 22:56:33', '2025-07-25 22:56:33'),
('90caae05-12c8-4d78-b4ae-f89ea108b7af', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 9, '{\"message\":\"New user Contact\"}', NULL, '2025-07-21 22:12:48', '2025-07-21 22:12:48'),
('9818b42f-7110-4dc9-8707-263e3c6cb4a0', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 12, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 22:56:33', '2025-07-25 22:56:33'),
('a18b4be7-5163-4c53-9e54-e12181890870', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 1, '{\"message\":\"New user Contact\"}', NULL, '2025-07-21 22:12:48', '2025-07-21 22:12:48'),
('a3a705cd-7943-486d-ab2a-c8a8aa7e4ad0', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 6, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 23:01:49', '2025-07-25 23:01:49'),
('a8818044-c206-45f0-a9bc-e990af2a9ecf', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 12, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:47:01', '2025-07-21 21:47:01'),
('a8fdbce2-fee4-4f99-8e9c-d11f22ce64db', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 9, '{\"message\":\"New user Contact\"}', NULL, '2025-07-22 05:15:25', '2025-07-22 05:15:25'),
('ab5983c1-40f7-4807-9279-1bebc3ed7359', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 38, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:58', '2025-07-25 23:11:58'),
('ac77b78d-afcd-4429-a106-898b8b5863d5', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 12, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:50:16', '2025-07-21 21:50:16'),
('b5131f5e-51b6-4bc4-a5e7-4673f0938175', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 9, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:29', '2025-07-25 23:11:29'),
('b79d1495-4a03-40df-a13a-12b99a37c1b5', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 5, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:50:16', '2025-07-21 21:50:16'),
('bed6f906-050e-4f4e-b2e9-5a62b29cde59', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 5, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:29', '2025-07-25 23:11:29'),
('c2b065c0-b17b-49dd-81f7-3b0b76899d62', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 6, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:36:29', '2025-07-21 21:36:29'),
('c4c9907d-4a60-40fa-a170-ec1175417ab9', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 13, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:29', '2025-07-25 23:11:29'),
('c5c5d781-4d0d-4a5b-8eed-fd5f3444051b', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 9, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:50:16', '2025-07-21 21:50:16'),
('c6bea0b7-9836-4e61-9634-fa140eaafdee', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 6, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:58', '2025-07-25 23:11:58'),
('d53ed050-6a1a-4b1d-8b67-a7d3f759afba', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 6, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 22:56:33', '2025-07-25 22:56:33'),
('d6996e16-0ebd-4229-865c-0ec0326a6889', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 13, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 22:56:33', '2025-07-25 22:56:33'),
('dacc8ecb-d6a1-471f-b844-efa0c0e74da0', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 13, '{\"message\":\"New user Contact\"}', NULL, '2025-07-22 05:15:25', '2025-07-22 05:15:25'),
('dd007cf8-d55a-4dc6-b3f2-771ccbe353cd', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 6, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:47:01', '2025-07-21 21:47:01'),
('e09881b1-bc6a-49d3-b525-ba9ddd718ddc', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 13, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:47:01', '2025-07-21 21:47:01'),
('e5518796-44ba-4084-814e-0856d4e212b8', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 1, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 23:01:49', '2025-07-25 23:01:49'),
('e695e475-a7f9-46aa-b74a-f45401951b1f', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 1, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-21 21:50:16', '2025-07-21 21:50:16'),
('f7075def-ace3-4e17-a4ba-8460acd11c57', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 6, '{\"message\":\"New user Contact\"}', NULL, '2025-07-21 22:12:48', '2025-07-21 22:12:48'),
('f8ce51c3-19c2-4ae4-a3c1-7e2da57a404c', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 1, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:58', '2025-07-25 23:11:58'),
('fa67d413-a7f6-44e7-8f24-5d6e0964f504', 'App\\Notifications\\NewsletterNotification', 'App\\Models\\User', 1, '{\"message\":\"New user subscribe\"}', NULL, '2025-07-25 22:56:33', '2025-07-25 22:56:33'),
('fb1e9a4f-3ca3-4700-9189-2b2ae7b5dc7c', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 12, '{\"message\":\"New user Contact\"}', NULL, '2025-07-25 23:11:58', '2025-07-25 23:11:58'),
('fea2f4a6-a530-44bf-819f-46828db47136', 'App\\Notifications\\ContactNotification', 'App\\Models\\User', 1, '{\"message\":\"New user Contact\"}', NULL, '2025-07-22 05:15:25', '2025-07-22 05:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('mehedi.bd@gmail.com', '$2y$12$xyJJeX8yqknuZXHXYCWpJOzxDW1Mzu.5AcSJ1MSye0DoDp7uGbPem', '2025-07-26 06:35:40'),
('rahim.bd@gmail.com', '$2y$12$06yjowZAMML5nShqj0/Ld.yukZ4.OOSst2/zfcRmcNMCcCHRQa/0q', '2025-07-26 06:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `group_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard Menu', 'dashboard', 'web', '2025-07-25 10:59:53', '2025-07-25 10:59:53'),
(2, 'dashboard list', 'dashboard', 'web', '2025-07-25 11:00:09', '2025-07-25 11:00:09'),
(3, 'Language Menu', 'language', 'web', '2025-07-25 11:00:14', '2025-07-25 11:00:14'),
(4, 'language create', 'language', 'web', '2025-07-25 11:00:20', '2025-07-25 11:00:20'),
(5, 'language list', 'language', 'web', '2025-07-25 11:00:27', '2025-07-25 11:00:27'),
(6, 'language edit', 'language', 'web', '2025-07-25 11:00:36', '2025-07-25 11:00:36'),
(7, 'language update', 'language', 'web', '2025-07-25 11:00:43', '2025-07-25 11:00:43'),
(8, 'language delete', 'language', 'web', '2025-07-25 11:00:48', '2025-07-25 11:00:48'),
(9, 'Category Menu', 'category', 'web', '2025-07-25 11:01:11', '2025-07-25 11:01:11'),
(10, 'category create', 'category', 'web', '2025-07-25 11:01:17', '2025-07-25 11:01:17'),
(11, 'category list', 'category', 'web', '2025-07-25 11:01:26', '2025-07-25 11:01:26'),
(12, 'category edit', 'category', 'web', '2025-07-25 11:01:31', '2025-07-25 11:01:31'),
(13, 'category update', 'category', 'web', '2025-07-25 11:01:38', '2025-07-25 11:01:38'),
(14, 'category delete', 'category', 'web', '2025-07-25 11:01:43', '2025-07-25 11:01:43'),
(15, 'Tag Menu', 'tag', 'web', '2025-07-25 11:01:54', '2025-07-25 11:01:54'),
(16, 'tag create', 'tag', 'web', '2025-07-25 11:02:02', '2025-07-25 11:02:02'),
(17, 'tag list', 'tag', 'web', '2025-07-25 11:02:09', '2025-07-25 11:02:09'),
(18, 'tag edit', 'tag', 'web', '2025-07-25 11:02:16', '2025-07-25 11:02:16'),
(19, 'tag update', 'tag', 'web', '2025-07-25 11:02:23', '2025-07-25 11:02:23'),
(20, 'tag delete', 'tag', 'web', '2025-07-25 11:02:29', '2025-07-25 11:02:29'),
(21, 'Post Menu', 'post', 'web', '2025-07-25 11:02:38', '2025-07-25 11:02:38'),
(22, 'post create', 'post', 'web', '2025-07-25 11:02:46', '2025-07-25 11:02:46'),
(23, 'post list', 'post', 'web', '2025-07-25 11:02:54', '2025-07-25 11:02:54'),
(24, 'post edit', 'post', 'web', '2025-07-25 11:03:01', '2025-07-25 11:03:01'),
(25, 'post update', 'post', 'web', '2025-07-25 11:03:09', '2025-07-25 11:03:09'),
(26, 'post delete', 'post', 'web', '2025-07-25 11:03:15', '2025-07-25 11:03:15'),
(27, 'About Menu', 'about', 'web', '2025-07-25 11:03:22', '2025-07-25 11:03:22'),
(28, 'About list', 'about', 'web', '2025-07-25 11:03:34', '2025-07-25 11:03:34'),
(29, 'Setting Menu', 'setting', 'web', '2025-07-25 11:03:41', '2025-07-25 11:03:41'),
(30, 'setting list', 'setting', 'web', '2025-07-25 11:03:49', '2025-07-25 11:03:49'),
(31, 'Newsletter Menu', 'newsletter', 'web', '2025-07-25 11:03:56', '2025-07-25 11:03:56'),
(32, 'newsletter list', 'newsletter', 'web', '2025-07-25 11:04:04', '2025-07-25 11:04:04'),
(33, 'Contact Message Menu', 'message', 'web', '2025-07-25 11:04:18', '2025-07-25 11:04:18'),
(34, 'contact message list', 'message', 'web', '2025-07-25 11:04:24', '2025-07-25 11:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `author_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `slug` mediumtext COLLATE utf8mb4_unicode_ci,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `thumbnail` mediumtext COLLATE utf8mb4_unicode_ci,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `post_of_the_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `tag_id`, `title`, `slug`, `details`, `thumbnail`, `featured`, `post_of_the_month`, `status`, `created_at`, `updated_at`) VALUES
(2, '1', '2', '1,2', 'Mastering Laravel for Modern Web Applications', 'mastering-laravel-for-modern-web-applications', '<p>Laravel stands out as the premier PHP framework for developers looking to create robust and scalable applications. Its elegant syntax and powerful toolkit simplify common tasks like routing, authentication, and database interactions. Laravel also introduces advanced tools like Laravel Octane and Breeze, allowing developers to build high-performance APIs. Moreover, its active community and regular updates make it a dependable choice for projects of any size...</p>', 'upload/post/1.jpg', '1', '1', '1', '2025-07-18 06:41:15', '2025-07-18 21:35:59'),
(3, '1', '2', '', 'Emerging Web Development Technologies in 2025', 'emerging-web-development-technologies-in-2025', '<p>In the ever-evolving field of web development, staying updated with the latest technologies is crucial. The rise of JavaScript frameworks such as ReactJS and VueJS, coupled with headless CMS and JAMstack, has reshaped how websites are built. Additionally, the integration of serverless architectures, GraphQL, and low-code platforms are setting new standards for development efficiency and performance...</p>', 'upload/post/2.jpg', '1', '1', '1', '2025-07-18 06:41:15', NULL),
(4, '9', '3', NULL, 'Building Cross-Platform Mobile Apps with React Native', 'building-cross-platform-mobile-apps-with-react-native', 'React Native has become the go-to framework for developers aiming to build mobile apps for both iOS and Android using a single codebase. Its components are reusable, and it offers excellent performance close to native apps. This article guides you through setting up a React Native environment, writing your first app, and best practices to optimize performance and user experience...', 'upload/post/3.jpg', '1', '1', '1', '2025-07-18 06:41:15', '2025-07-22 12:30:47'),
(5, '12', '4', NULL, 'AI in Software Development: Automating the Future', 'ai-in-software-development-automating-the-future', 'Artificial intelligence is transforming software development with tools that automate code generation, testing, and deployment. Developers are now able to leverage AI to reduce errors, speed up development cycles, and enhance software quality. From code suggestion engines to intelligent debugging tools, this article explores the various AI applications currently shaping the software industry...', 'upload/post/4.jpg', '1', '1', '1', '2025-07-18 06:41:15', '2025-07-22 12:30:46'),
(6, '6', '5', NULL, 'Machine Learning Models Every Developer Should Know', 'machine-learning-models-every-developer-should-know', 'Machine learning is a key pillar of artificial intelligence, and understanding its core models is essential for developers working in AI-related fields. This post covers supervised, unsupervised, and reinforcement learning models, with practical examples and use cases in industries such as healthcare, finance, and marketing...', 'upload/post/5.jpg', '1', '1', '1', '2025-07-18 06:41:15', '2025-07-22 12:30:46'),
(7, '5', '6', NULL, 'Data Science Essentials for Beginners', 'data-science-essentials-for-beginners', 'Data science combines statistics, programming, and domain expertise to extract insights from data. Beginners can start by learning Python, data visualization, and machine learning basics. This article introduces the data science workflow, common tools, and how to approach real-world datasets effectively...', 'upload/post/6.jpg', '1', '1', '1', '2025-07-18 06:41:15', '2025-07-22 12:30:44'),
(8, '6', '7', NULL, 'Protecting Your Applications: Cybersecurity Best Practices', 'protecting-your-applications-cybersecurity-best-practices', 'Cybersecurity is critical for protecting sensitive data and maintaining trust. This post highlights essential best practices including secure authentication, input validation, encryption, and regular security audits. Developers are encouraged to stay updated on the latest vulnerabilities and patch their systems promptly...', 'upload/post/7.jpg', '1', '1', '1', '2025-07-18 06:41:15', '2025-07-22 12:30:43'),
(9, '13', '8', NULL, 'Getting Started with Cloud Computing Services', 'getting-started-with-cloud-computing-services', 'Cloud computing offers scalable and flexible solutions for modern applications. Learn how to get started with services like AWS, Azure, and Google Cloud. This post covers fundamentals, deployment models, and how to leverage cloud infrastructure for cost-effective and reliable app hosting...', 'upload/post/8.jpg', '1', '1', '1', '2025-07-18 06:41:15', NULL),
(10, '1', '9', NULL, 'Introduction to DevOps: Bridging Development and Operations', 'introduction-to-devops-bridging-development-and-operations', 'DevOps combines software development and IT operations to shorten development life cycles and provide continuous delivery. This article introduces DevOps principles, popular tools like Jenkins and Docker, and how teams can implement effective CI/CD pipelines...', 'upload/post/9.jpg', '1', '1', '1', '2025-07-18 06:41:15', NULL),
(11, '10', '10', NULL, 'Blockchain Technology and Its Real-World Applications', 'blockchain-technology-and-its-real-world-applications', 'Blockchain technology provides a decentralized ledger system enabling secure and transparent transactions. Beyond cryptocurrencies, blockchain is transforming supply chain management, healthcare, and finance. This post explores core concepts, benefits, and challenges of blockchain adoption...', 'upload/post/10.jpg', '1', '1', '1', '2025-07-18 06:41:15', '2025-07-22 12:30:41'),
(12, '1', '11', NULL, 'Modern JavaScript Frameworks Overview', 'modern-javascript-frameworks-overview', 'JavaScript frameworks like React, Angular, and Vue have revolutionized frontend development. This article compares their features, learning curves, and use cases to help developers choose the best tool for their projects...', 'upload/post/11.jpg', '1', '1', '1', '2025-07-18 06:41:15', '2025-07-22 12:30:39'),
(17, '1', '12', '2,3', 'Make a loader html,css js', 'make-a-loader-htmlcss-js', '<h2><span style=\"text-decoration: underline;\"><strong>1. Example Code Snippet Loader HTML + CSS + JS</strong></span></h2>\r\n<pre class=\"language-markup\"><code>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</code></pre>\r\n<h2>How to Load and Share Code Snippets with Prism.js</h2>\r\n<pre class=\"language-markup\"><code>\r\n\r\n</code></pre>\r\n<div class=\"steps\">\r\n<p>Follow these simple steps:</p>\r\n<ol>\r\n<li>Include Prism.js CSS and JS in your HTML head or footer.</li>\r\n<li>Wrap your code inside <code>&lt;pre&gt;&lt;code class=\"language-xxx\"&gt;...&lt;/code&gt;&lt;/pre&gt;</code> tags.</li>\r\n<li>Use the correct language class like <code>language-html</code>, <code>language-css</code>, <code>language-javascript</code>.</li>\r\n<li>Call <code>Prism.highlightAll();</code> after your code loads (usually Prism does this automatically).</li>\r\n<li>Share your snippet by copying the entire block including the <code>&lt;pre&gt;&lt;code&gt;</code> tags.</li>\r\n</ol>\r\n</div>\r\n<pre class=\"language-markup\"><code>\r\n\r\n</code></pre>\r\n<h2>Example Code Snippet</h2>\r\n<pre class=\"language-markup\"><code>\r\n\r\n</code></pre>\r\n<pre><code class=\"language-html\">&lt;!-- Simple HTML snippet --&gt;\r\n&lt;div class=\"container\"&gt;\r\n  &lt;h1&gt;Hello World!&lt;/h1&gt;\r\n&lt;/div&gt;\r\n</code></pre>\r\n<pre class=\"language-markup\"><code>\r\n\r\n</code></pre>\r\n<pre><code class=\"language-css\">/* Simple CSS snippet */\r\n.container {\r\n  max-width: 800px;\r\n  margin: 0 auto;\r\n  background: #f4f4f4;\r\n  padding: 20px;\r\n}\r\n</code></pre>\r\n<pre class=\"language-markup\"><code>\r\n\r\n</code></pre>\r\n<pre><code class=\"language-javascript\">// Simple JavaScript snippet\r\ndocument.querySelector(\'h1\').addEventListener(\'click\', function() {\r\n  alert(\'Hello from Prism.js!\');\r\n});\r\n</code></pre>\r\n<pre class=\"language-markup\"><code>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</code></pre>\r\n<p>&nbsp;</p>\r\n<h2 data-start=\"2666\" data-end=\"2690\">২. এই কোডের ব্যাখ্যা:</h2>\r\n<ul data-start=\"2692\" data-end=\"2962\">\r\n<li data-start=\"2692\" data-end=\"2781\">\r\n<p data-start=\"2694\" data-end=\"2781\"><strong data-start=\"2694\" data-end=\"2708\">স্টেপস অংশ</strong>: এখানে আপনি যেভাবে কোড শেয়ার করবেন সেটার স্টেপ বাই স্টেপ লিখতে পারবেন।</p>\r\n</li>\r\n<li data-start=\"2782\" data-end=\"2871\">\r\n<p data-start=\"2784\" data-end=\"2871\"><strong data-start=\"2784\" data-end=\"2803\">কোড স্নিপেট অংশ</strong>: তিনটি আলাদা কোড ব্লক দেওয়া হয়েছে HTML, CSS, JS এর উদাহরণ হিসাবে।</p>\r\n</li>\r\n<li data-start=\"2872\" data-end=\"2962\">\r\n<p data-start=\"2874\" data-end=\"2962\"><strong data-start=\"2874\" data-end=\"2886\">Prism.js</strong>: CDN থেকে CSS + JS লোড করা হয়েছে এবং <code data-start=\"2924\" data-end=\"2946\">Prism.highlightAll()</code> কল করা হয়েছে।</p>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<h2 data-start=\"4383\" data-end=\"4396\">৪. Summary</h2>\r\n<ul data-start=\"4398\" data-end=\"4578\">\r\n<li data-start=\"4398\" data-end=\"4420\">\r\n<p data-start=\"4400\" data-end=\"4420\">স্টেপস লিখবেন উপরে</p>\r\n</li>\r\n<li data-start=\"4421\" data-end=\"4500\">\r\n<p data-start=\"4423\" data-end=\"4500\">নিচে কোড স্নিপেট</p>\r\n<pre><code data-start=\"4440\" data-end=\"4490\"><code class=\"language-xxx\">...</code></code></pre>\r\nএ দিবেন\r\n<p>&nbsp;</p>\r\n</li>\r\n<li data-start=\"4501\" data-end=\"4541\">\r\n<p data-start=\"4503\" data-end=\"4541\">Prism.js দিয়ে সুন্দর হাইলাইটিং পাবেন</p>\r\n</li>\r\n<li data-start=\"4542\" data-end=\"4578\">\r\n<p data-start=\"4544\" data-end=\"4578\">যেকেউ সহজেই কপি-পেস্ট করতে পারবে</p>\r\n</li>\r\n</ul>\r\n<hr data-start=\"4580\" data-end=\"4583\">\r\n<p data-start=\"4585\" data-end=\"4738\">🔹 <strong data-start=\"4588\" data-end=\"4642\">এটা আপনাকে সাহায্য করবে সুন্দর কোড শেয়ার করার জন্য</strong>।<br data-start=\"4643\" data-end=\"4646\">🔹 যদি চান আমি এই স্নিপেটকে আরও ফিচার যোগ করে দিতে পারি (copy button, line number ইত্যাদি)</p>\r\n<p data-start=\"4585\" data-end=\"4738\">&nbsp;</p>\r\n<p data-start=\"4585\" data-end=\"4738\">&nbsp;</p>\r\n<div>\r\n<div>\r\n<pre class=\"language-php\"><code>@extends(\'frontend.layouts.frontend-master\')\r\n@section(\'title\', $post-&gt;slug)\r\n@push(\'style_file\')\r\n    &lt;link href=\"{{ asset(\'frontend/assets/css/prism.css\') }}\" rel=\"stylesheet\" /&gt;\r\n@endpush\r\n@section(\'main\')\r\n    &lt;section class=\"bg-body\"&gt;\r\n        &lt;div class=\"container\"&gt;\r\n            &lt;div class=\"row justify-content-center\"&gt;\r\n                &lt;div class=\"col-xl-9 col-lg-10\"&gt;\r\n                    @php\r\n                        $words = str_word_count(strip_tags($post-&gt;details));\r\n                        $minToRead = ceil($words / 200); // Assuming 200 words per minute\r\n                    @endphp\r\n\r\n\r\n                    {{ str_pad($minToRead, 2, \'0\', STR_PAD_LEFT) }} min read {{ $post-&gt;created_at-&gt;format(\'jS M, Y\') }}\r\n\r\n\r\n                    &lt;div class=\"section\"&gt;\r\n                        &lt;p class=\"mb-4 text-muted\"&gt; {{ str_pad($minToRead, 2, \'0\', STR_PAD_LEFT) }} min reading in &lt;span\r\n                                class=\"mx-2\"&gt;&mdash;&lt;/span&gt;\r\n                            &lt;a class=\"text-link \"\r\n                                href=\"{{ route(\'post.category\', $post-&gt;category-&gt;category_slug) }}\"&gt;{{ $post-&gt;category-&gt;category_name }}&lt;/a&gt;\r\n                        &lt;/p&gt;\r\n                        &lt;h1 class=\"mb-3\"&gt;{{ $post-&gt;title }}&lt;/h1&gt;\r\n                        &lt;p class=\"mb-4 pb-1\"&gt;{{ $post-&gt;slug }}&lt;/p&gt;\r\n                        &lt;div class=\"post-author d-flex\"&gt;\r\n                            &lt;div class=\"flex-shrink-0\"&gt;\r\n                                &lt;a class=\"is-hoverable\" href=\"{{ route(\'post.author\', $post-&gt;author-&gt;username) }}\"\r\n                                    title=\"Read all posts of - {{ $post-&gt;author-&gt;name }}\"&gt;\r\n                                    &lt;img loading=\"lazy\" class=\"rounded-circle w-auto\"\r\n                                        src=\"{{ asset($post-&gt;author-&gt;profile) }}\" alt=\"{{ $post-&gt;author-&gt;name }}\"\r\n                                        width=\"50\" height=\"50\"&gt;\r\n                                &lt;/a&gt;\r\n                            &lt;/div&gt;\r\n                            &lt;div class=\"flex-grow-1 ms-3\"&gt; by &lt;a class=\"text-link\"\r\n                                    href=\"{{ route(\'post.author\', $post-&gt;author-&gt;username) }}\"\r\n                                    title=\"Read all posts by - Robert Britt\"&gt;{{ $post-&gt;author-&gt;name }}&lt;/a&gt;\r\n                                &lt;p class=\"mb-0 lh-base\"&gt;Published at {{ $post-&gt;created_at-&gt;format(\'jS F, Y\') }}&lt;/p&gt;\r\n                            &lt;/div&gt;\r\n                        &lt;/div&gt;\r\n                    &lt;/div&gt;\r\n                &lt;/div&gt;\r\n                &lt;div class=\"col-lg-12\"&gt;\r\n                    &lt;img loading=\"lazy\" class=\"w-100 h-auto\" src=\"{{ asset($post-&gt;thumbnail) }}\"\r\n                        alt=\"Can You Build Muscle When You&rsquo;re Older?\" width=\"1020\" height=\"660\"&gt;\r\n                &lt;/div&gt;\r\n                &lt;div class=\"col-xl-9 col-lg-10\"&gt;\r\n                    &lt;div class=\"section\"&gt;\r\n                        &lt;div class=\"content\"&gt;\r\n                            {!! $post-&gt;details !!}\r\n                        &lt;/div&gt;\r\n                        &lt;div class=\"d-block d-sm-flex justify-content-between align-items-center mt-5 pt-3\"&gt;\r\n                            &lt;ul class=\"taxonomy-lists list-unstyled list-inline\"&gt;\r\n                                &lt;li class=\"list-inline-item d-block mb-3\"&gt;Tags: &lt;/li&gt;\r\n                                @php\r\n                                    $tagids = explode(\',\', $post-&gt;tag_id);\r\n                                    $tags = App\\Models\\Tag::whereIn(\'id\', $tagids)-&gt;get();\r\n                                @endphp\r\n                                @foreach ($tags as $tag)\r\n                                    &lt;li class=\"list-inline-item\"&gt;\r\n                                        &lt;a class=\"bg-white\"\r\n                                            href=\"{{ route(\'post.tag\', $tag-&gt;tag_slug) }}\"&gt;{{ $tag-&gt;tag_name }}&lt;/a&gt;\r\n                                    &lt;/li&gt;\r\n                                @endforeach\r\n\r\n\r\n                            &lt;/ul&gt;\r\n                            &lt;ul class=\"list-inline social-share text-start text-sm-end mt-4 mt-sm-0\"&gt;\r\n                                &lt;li class=\"list-inline-item d-block mb-2 text-start\"&gt;Share: &lt;/li&gt;\r\n                                &lt;li class=\"list-inline-item lead text-center is-hoverable\"&gt;\r\n                                    &lt;i class=\"ti ti-brand-twitter\"&gt;&lt;/i&gt;\r\n                                &lt;/li&gt;\r\n                                &lt;li class=\"list-inline-item lead text-center is-hoverable ms-3\"&gt;\r\n                                    &lt;i class=\"ti ti-brand-facebook\"&gt;&lt;/i&gt;\r\n                                &lt;/li&gt;\r\n                                &lt;li class=\"list-inline-item lead text-center is-hoverable ms-3\"&gt;\r\n                                    &lt;i class=\"ti ti-brand-linkedin\"&gt;&lt;/i&gt;\r\n                                &lt;/li&gt;\r\n                                &lt;li class=\"list-inline-item lead text-center is-hoverable ms-3\"&gt;\r\n                                    &lt;i class=\"ti ti-brand-reddit\"&gt;&lt;/i&gt;\r\n                                &lt;/li&gt;\r\n                                &lt;li class=\"list-inline-item lead text-center is-hoverable ms-3\"&gt;\r\n                                    &lt;i class=\"ti ti-brand-pinterest\"&gt;&lt;/i&gt;\r\n                                &lt;/li&gt;\r\n                            &lt;/ul&gt;\r\n                        &lt;/div&gt;\r\n                    &lt;/div&gt;\r\n                &lt;/div&gt;\r\n            &lt;/div&gt;\r\n\r\n\r\n            &lt;div class=\"section\"&gt;\r\n                &lt;div class=\"row justify-content-center\"&gt;\r\n                    &lt;div class=\"col-lg-12\"&gt;\r\n                        &lt;div class=\"section-title text-center\"&gt;\r\n                            &lt;h2 class=\"h3 mb-0 title\"&gt;Related Posts&lt;/h2&gt;\r\n                        &lt;/div&gt;\r\n                        &lt;div class=\"row gy-5 gx-4 g-xl-5\"&gt;\r\n                            @foreach ($relatedposts as $post)\r\n                                &lt;div class=\"col-lg-4 col-md-6\"&gt;\r\n                                    &lt;article class=\"bg-white d-flex flex-column h-100\"&gt;\r\n                                        &lt;div class=\"p-4 pb-0\"&gt;\r\n                                            &lt;ul class=\"post-meta list-inline mb-3\"&gt;\r\n                                                &lt;li class=\"list-inline-item\"&gt;\r\n                                                    &lt;i class=\"ti ti-calendar-event me-1\"&gt;&lt;/i&gt;\r\n                                                    {{ $post-&gt;created_at-&gt;format(\'jS  M, Y\') }}\r\n                                                &lt;/li&gt;\r\n                                                &lt;li class=\"list-inline-item\"&gt;&bull;&lt;/li&gt;\r\n                                                &lt;li class=\"list-inline-item\"&gt;\r\n                                                    &lt;i\r\n                                                        class=\"ti ti-clock-2 me-1\"&gt;&lt;/i&gt;{{ $post-&gt;created_at-&gt;diffForHumans() }}\r\n                                                &lt;/li&gt;\r\n                                            &lt;/ul&gt;\r\n                                            &lt;div class=\"position-relative\"&gt;\r\n                                                &lt;h3 class=\"h4 post-title mb-2 line-clamp clamp-2\"&gt;\r\n                                                    &lt;a class=\"text-link stretched-link\"\r\n                                                        href=\"{{ route(\'post.details\', $post-&gt;slug) }}\"\r\n                                                        title=\"Read more about - {{ $post-&gt;title }}\"&gt;\r\n                                                        {!! Str::words($post-&gt;title, \'8\', \' \') !!}&lt;/a&gt;\r\n                                                &lt;/h3&gt;\r\n                                                &lt;p class=\"mb-0 line-clamp clamp-2\"&gt;\r\n                                                    {!! Str::limit(strip_tags($post-&gt;details), \'200\', \' \') !!}\r\n                                                &lt;/p&gt;\r\n                                            &lt;/div&gt;\r\n                                        &lt;/div&gt;\r\n                                        &lt;div class=\"post-author mt-auto p-4 pt-3\"&gt;\r\n                                            &lt;a class=\"is-hoverable\" href=\"author-single.html\"\r\n                                                title=\"Read all posts of - Robert Britt\"&gt;\r\n                                                &lt;img loading=\"lazy\" class=\"w-auto rounded-circle me-2\"\r\n                                                    src=\"{{ asset($post-&gt;author-&gt;profile) }}\"\r\n                                                    alt=\"{{ $post-&gt;author-&gt;username }}\" width=\"26\" height=\"26\"&gt;\r\n                                            &lt;/a&gt; by &lt;a class=\"text-link\" href=\"author-single.html\"\r\n                                                title=\"Read all posts of - {{ $post-&gt;author-&gt;name }}\"&gt;{{ $post-&gt;author-&gt;name }}&lt;/a&gt;\r\n                                        &lt;/div&gt;\r\n                                    &lt;/article&gt;\r\n                                &lt;/div&gt;\r\n                            @endforeach\r\n\r\n\r\n                        &lt;/div&gt;\r\n                    &lt;/div&gt;\r\n                &lt;/div&gt;\r\n            &lt;/div&gt;\r\n        &lt;/div&gt;\r\n    &lt;/section&gt;\r\n    @include(\'frontend.layouts.inc.subscribe-news-letter\')\r\n@endsection\r\n@push(\'script_file\')\r\n    &lt;script src=\"{{ asset(\'frontend/assets/js/prism.js\') }}\"&gt;&lt;/script&gt;\r\n@endpush</code></pre>\r\n</div>\r\n</div>', 'upload/post/1838221177361600.jpg', '1', '1', '1', '2025-07-20 20:18:44', '2025-07-22 12:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'Super Admin', 'web', '2025-07-25 11:33:07', '2025-07-25 11:33:07'),
(3, 'Admin', 'web', '2025-07-25 11:34:55', '2025-07-25 11:34:55'),
(4, 'Editor', 'web', '2025-07-25 11:35:27', '2025-07-25 11:35:27'),
(5, 'Author', 'web', '2025-07-25 11:36:06', '2025-07-25 11:36:06'),
(6, 'Contributor', 'web', '2025-07-25 11:36:25', '2025-07-25 11:36:25'),
(7, 'Subscriber / Reader', 'web', '2025-07-25 11:36:43', '2025-07-25 11:45:36'),
(9, 'Manager', 'web', '2025-07-25 20:57:52', '2025-07-25 20:57:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(1, 5),
(2, 5),
(9, 5),
(10, 5),
(11, 5),
(12, 5),
(13, 5),
(14, 5),
(21, 5),
(22, 5),
(23, 5),
(1, 6),
(2, 6),
(3, 6),
(4, 6),
(5, 6),
(6, 6),
(7, 6),
(8, 6),
(1, 7),
(2, 7),
(3, 7),
(4, 7),
(29, 9),
(30, 9);

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE IF NOT EXISTS `seo_settings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_robots` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'index, follow',
  `canonical_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `meta_title`, `meta_description`, `meta_keywords`, `meta_author`, `meta_robots`, `canonical_url`, `og_title`, `og_description`, `og_image`, `twitter_title`, `twitter_description`, `twitter_image`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi Blog', 'Latest News Updates and Tips', 'blog,laravel,php', 'Mehedi Hassan Jibon', 'index, follow', 'http://tushi-blog.test/', NULL, 'do your learn more', 'upload/about/1838139083956728.png', 'fsf', 'fsf', 'upload/about/1838139045489335.png', '2025-07-20 04:17:07', '2025-07-19 22:33:54');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0bIPsjPuX8BJnjgAW5j6DmXiBTzdpqniw9Uk7Vyc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicXBaRFNQZ2JrZ3pkcTRxblRYcEpSak9sTnJRSnF3ZGFRRzNxbUhwaiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529892),
('0Vc9ksLkncHlZgyHZ1Hy7ZJyBGBndzbPfWR7k4bu', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiN29uRWFJc2tQNkdVZm1pRjVqVTM2N1JEckF3Q2lwQ2Q4cTJBajlncyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753530768),
('1hveyIeoaLWuGjQQXN9rz6r4Ztw5DV4vrgHLsZ30', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSktmOUJnMFNJcVM3a1VaUU5Md3FJcmFFanFnOG1IZnN1d3hscWQzbCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530508),
('2hD2wVxeVtpXgANItdTUMQzFlophkQx647IZfN5p', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSTVkenhQRGE2aFlCaktzd1M0T2Fqb1BTYkxteEJlSGplWEFQRGVTdSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528385),
('2LYTk7vCbUfJwUfQqrbFEy4Nl0HjPlCHN8OZooCJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNUJFOUZEWUZmSkszTWxSS25TbjB1dmROam9GbmtsRFhXdXNPcFA0byI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528116),
('4ZyiOAhYnsJXlvzPDF3U0jbxz5WbxRLGxdQvrxdj', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoib0NvcnV3Z2RkNmR1QjZwQWpGSkg0Qm1pempEbElHYmw2WEhDQmZOQyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529460),
('58lqs62IRu9Yvh28rfTQ2dGbrmvM2o3cPk5SNgyV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV202SW1IMHRlVTlyWlM2V2twUmJNWTBwakNYVDF4ZlVpYzc4bklrQSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529390),
('5E7Un0KbhAUdn86dwd7rBQaL1YwdcxbMKRQSorRq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS3FrY0dINHBhSkhtMnFyYzJmaElLZVpjdGk2b3pJT2Y4aWZQT1N1aiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753531134),
('6DHvoJoiIj8G4ee7PVwPC5Zo3CVud4jZGECoS2zc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidUFiT29MVVhGVTZwaEQzY0ZIWEltZGdpcGYxN2ZXcW5rZzBIRnlWQSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753531489),
('7Ar4G2eqL6R6AhJLKotc711aJmtQH7mNA3WMGdpB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMVdmT3BIWEYzcEMzbjhFcGRHV3RsQmdyNHg2V0lyUmlGMTlSSU5jSSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMDoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753529701),
('8BmA08nqObLXxLATDvQ7Exzg8d0RbRIBMkcImokg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNm0zanJQMTRZNzBQVXNlUTZYOEFOWTU1a0hOM3NUQTlxUHR6T3ltVSI7czo1OiJzdGF0ZSI7czo0MDoiU3F0MXIzOWx3NGpSVkxNeW1WaDBqakM5bW9sbEVHM0RIWFFhY3NSTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528250),
('9blBVXKpc8FXkWR5N0oApxJcBZUmTn5mZGmOIvHZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZnJKQm5GdW1BQVQ0U2tyZU1pM05OV3Z3SE1HNE5ZaWM2eEs4bnB2ZSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528399),
('9q4meyX7nogvA7DFjcXrC46Wz8m9gIsPPUGd78B5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTzFrdkdOaU9xeGhCbHhpUFV0QTk0cWdWRXlZZWlSTjU3WkFHdk9pZyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530453),
('AnELbHjdR6jDsjR1BKwKhSAZx6l6XY5sWHVjs6wW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibzJlTGdQUFFSaEUxOUpaNnB5aDNpODd0RHZRUXZPNk9MRG0wMWZFTyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529822),
('aqxKUdWSDG1iO9Kw1BHQbGzBxVHTxCRDtuarb3b8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRDY1VHRQRE5oWnNnRDYwSk45MlJJM2ZzMjU3MWNIMnJRUHdLRDFIayI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529867),
('bDpdRsxoibH8oKySqKxLxUewaDVrLeFyRwYaFOWN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiRUdBRTRYcWVxZnl1Yno3aHVFNjRoQThnVGVwdUdoRWU5SlVzMmt3dCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753531290),
('biBMQQo6VwqlOJsaXClOi3uazTLae33vmNZ0d8l3', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibXJhbFVWdkNVck9GWXByVzlKZ21mSlVFRUJWaHdrWmFKWnhIZXRwSiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529317),
('bJdFYDXrEiSfKoAlHzm3NLyXtCRAvWJlmNESlxjy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibTJJQ1NOSmdmVTB1OHJzMVdlbnN0TUVJejFuTlZ0ZjBaSUhtT1dBQSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753530949),
('bUVcb7SWhhM3es423rAIkjfGOC93BPoD36kz7MYW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMXFNcVNRODd2aDlNOUkwNTFKR1F5NzYzdm12aEs3cnVVRTlaOTdoSSI7czo1OiJzdGF0ZSI7czo0MDoicWNXOTRJVENJRHE2QTdNMVlQbXc3MTJhM3ZZWEJsY3YyVmNDdmxwQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529373),
('c43FynsbnEIB9VJ4qjk32tr00fMg9u7VQGLgOSPK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVnV5RG9WelNkY1YwN2VDQUE0WlVRZFJJU095UGJBOWw3NHNMZXVJayI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753531323),
('ckhvcAjNOpGGCuJB0tEqazppIR3VkBg8LwZ9QMuE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiblpYQmM0MlR6Zm51bWtmbnozU0hxdHIxTWNRTkNoaXB6RTNpN3BHOSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMjoiaHR0cDovL3R1c2hpLWJsb2cudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529818),
('cMJcSkscRx7FhfNUmYAdkAVO4AuU3EqjLWKtr11S', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU2F2a3VUSnJ4SU9lVHRNTHljcmF4MmhzWTZpMlUycjlPVlNoMGN0MyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528055),
('CNONoniwIVYVZ5xYOMsEZ86NvwFE7wwQ9xXkTFvt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY3d4aExySWdPNVIxNWYxdnRLQVZSUEQ5Z251YzM5dEYzVFRqSHFXMyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753531434),
('d2puQmGiPUk3dUPQdG6SmSsZQNfjGs2Vrr15qM6B', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVGVFYkxaTXFTZnRuUkRpUmZZZHRxSGlBRFZIbklsS3MzVjVLS2NMciI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528097),
('D9hA9K7ViJG3CCt66rByBQQYH9YyMCCVOnNBkjvQ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUXRpbjQwbzdQOEduWE9XdXAwN1dGb29nMVo1SFNwN2J1MXo5ZVRXRiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753531308),
('DEvL7NhBKbXlnVjdSCednoLUsqZvDzHx72nsWXNR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTkVtcEtVUjRSRHdVRk9qY3JWR0Q3bjl3RWdaaUFkZW0zcGxSMVBxdCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cHM6Ly90dXNoaS1ibG9nLnRlc3QvZGFzaGJvYXJkIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vdHVzaGktYmxvZy50ZXN0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e319', 1753530416),
('DTWAxKXOBXPA1orC5z3bRLNVfKW4d5i11o42m6WC', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSjFvYXlOOUhtYXI0T3RLazVBTThQNjRieVdrYWlPUkRmTkRZck5BRCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530472),
('DVHT1eij77ejvQZ04ejH5tSOnOED5ggsyVW10e9Z', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidHJ1cFRtNVNuU1ZMTmFETkl4eVh4cURGZ0p0cktFQUdCODdYSnBpZiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529338),
('Dzp1sPgXeUvQ8lYZ4qX6tO7zOm6QRqDkbb91SD8D', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieGtNdUxPRWVkeFI2M2xGWVdGWmdXeGxQeDhCN0RGdEQzbWlrSFJCTiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529663),
('e1M7Jdvj1nTyudWEMsOkNI0zujXmAX7WSU85TOOz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVHVpeGVaOWpBb1c3dVF0RnhDUkROYkFad2JDMGF1aFoxQlFBT25hdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753530458),
('eFv0SXlCFpmFdiOckgNM0JvvC9SGBSOJox0aYIGJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMm1LMWRrVGtmZ3ZscHNxWlI4TkdZY0J1Rkt4dG5WZUhQTU1RbUptYyI7czo1OiJzdGF0ZSI7czo0MDoieXdjRU1QQmJORXVtR0x2N1poZVNMeGFxaXlxMzBZSE14bWlLVjdwcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529424),
('f4aD4C2YAgoiNomGUICrckEG5BfQkAS4DgZv9hnk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVHhFZnBzYWIzU1NLVXBpd09LWGtiT1hWUW5zcmpZSE9Hb0RHZDdxeCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753531522),
('G8HxaTR0dd5fbYh3DsWDkqM8OQaOjpnaH3hmDA0d', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQnYzMmhrOFNLcU9abWlNV2lkZGszYVh6RDhYdThUQ2NGUG1zSnFsSyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753531525),
('gC3LUqfJwnWr4Pxk19JcBwo6u1GMJxgCBOoOriEo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSmFvWXNUV3hJRGhyTFZYZEh6eVE0UjUyYktzelc3ODU3bHVjWTRYcCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753530899),
('GoN4hxMWkpFysTi7LFsRyvuIu3msKorONzVaAwZD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWjM5WUp3RDZUZldZdkxMb1RIOUdHMUE1d2FoZURhdWZiaUo3YkZzSiI7czo1OiJzdGF0ZSI7czo0MDoiclVPYVFURmxwdkoySnpzWEdjdFVkYnFNVkNGNm5wcXVZWmJSM0xnaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753531435),
('GYvpRlNOJLcPLcnHaCVsC6prXZyCRCx8tQOSbo5g', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOGJRbGs2T3k5YXJGOUtLRjQ3ZGVWSUJqSmtBeW1Cc25FT0lUUlBJaCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMzoiaHR0cHM6Ly90dXNoaS1ibG9nLnRlc3QiO31zOjIyOiJQSFBERUJVR0JBUl9TVEFDS19EQVRBIjthOjA6e319', 1753533836),
('H0gjXDiUAfXK3p537XMLnyizvOxQs7yk6NH6Bf6L', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicUdremNYaFNtN1ZJQzRFMlpIdTVqZ2d4OW54b3h3c29RYnUzZmNSZiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529335),
('h1r0VUI2puni5WJITDhcinNmTyMWPSzC0WOmcdat', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUjNsOGVIcndvTXhlNTdNdDBvUk5DZ0ZwN2JCc0t6SkpLN01OYmI3SSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530892),
('HjCcSfTArW8GeSBzbd8uwfeehBz7ZMiVgbOVtqjz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicDlCRHZZZkZqU1hSRVMwUjBzSXg3YUQwZmNaR2duRmVxUEF0NHFuQyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529919),
('HOlIRTJOHgyB54jOXdv9UPYzsYMb9xA3qt2EofRs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaHlwWFJaZ3FyaVN5QVlyQXk4Y251cjJIR3NiVGdNcE9kRHFERVRjVyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMjoiaHR0cDovL3R1c2hpLWJsb2cudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529703),
('IGlCsXHX23IcFpLupwBwaFzPsQbySU0nuryIK7OJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMGpPRmxOZVFiV2wxODh0Mm5SQjFnOWd6Z3lUZ3p6OHdiQUxDVkdnTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753530906),
('IY9eWO9rnmGSaMEiqDi5CzVJzYBrsKE3YsRuQx6r', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNkp2OEdLanBkVE15NzJKWEFJdWszZE0zVXdlZXhQZUdyMXp6azFTSSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530481),
('JpQvrBqLKi7gQWZfhBGPzGGcV6wb9mKg6FeeDXZz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOHd6a0lLVzAwUWJrbVQ0ZnoxWnVISTNlM0c0U3IwcUVoeEV3QmhGciI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530868),
('JwaQaiUJ1gFkO8nc0MNx2hborOZ44KhJwpXIRR12', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSnFaejhsMUozdlAwRTMyUzFNSzZBRHFScnF3NFY1THlGYnRDWjl0UyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753531325),
('kb5vBrstkUsIFu8d0V5RF27YAGQLiXZBiCgdHP2y', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVnVGMlF5RXQ1V1dKbDhzSHZ0dEw2NExuZ0t2T2JxU2VDWHFlZk9HMyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530462),
('KjnqogJwClclocsNrG7KIBkw9Zwx5Z6Q63wCxFn5', 39, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibVJGVW5UbmNFMnBmbFJFSm9oM2VFZHJjSUdhSjJjTHNHUzd5QjhHTSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cHM6Ly90dXNoaS1ibG9nLnRlc3QvZGFzaGJvYXJkIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vdHVzaGktYmxvZy50ZXN0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjE6e2k6MDtPOjM1OiJGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxFbnZlbG9wZSI6Mjp7czo0MzoiAEZsYXNoZXJcUHJpbWVcTm90aWZpY2F0aW9uXEVudmVsb3BlAHN0YW1wcyI7YTo2OntzOjMxOiJGbGFzaGVyXFByaW1lXFN0YW1wXFBsdWdpblN0YW1wIjtPOjMxOiJGbGFzaGVyXFByaW1lXFN0YW1wXFBsdWdpblN0YW1wIjoxOntzOjM5OiIARmxhc2hlclxQcmltZVxTdGFtcFxQbHVnaW5TdGFtcABwbHVnaW4iO3M6NToibm90eWYiO31zOjM0OiJGbGFzaGVyXFByaW1lXFN0YW1wXENyZWF0ZWRBdFN0YW1wIjtPOjM0OiJGbGFzaGVyXFByaW1lXFN0YW1wXENyZWF0ZWRBdFN0YW1wIjoyOntzOjQ1OiIARmxhc2hlclxQcmltZVxTdGFtcFxDcmVhdGVkQXRTdGFtcABjcmVhdGVkQXQiO086MTc6IkRhdGVUaW1lSW1tdXRhYmxlIjozOntzOjQ6ImRhdGUiO3M6MjY6IjIwMjUtMDctMjYgMTE6NDU6MjguNjU2MjIwIjtzOjEzOiJ0aW1lem9uZV90eXBlIjtpOjM7czo4OiJ0aW1lem9uZSI7czozOiJVVEMiO31zOjQyOiIARmxhc2hlclxQcmltZVxTdGFtcFxDcmVhdGVkQXRTdGFtcABmb3JtYXQiO3M6MTE6IlktbS1kIEg6aTpzIjt9czoyNzoiRmxhc2hlclxQcmltZVxTdGFtcFxJZFN0YW1wIjtPOjI3OiJGbGFzaGVyXFByaW1lXFN0YW1wXElkU3RhbXAiOjE6e3M6MzE6IgBGbGFzaGVyXFByaW1lXFN0YW1wXElkU3RhbXAAaWQiO3M6MzI6ImI5ZDYzZTBkMDllMjI3ODNkNmE2MGM3NzJlMTgxMjExIjt9czozMDoiRmxhc2hlclxQcmltZVxTdGFtcFxEZWxheVN0YW1wIjtPOjMwOiJGbGFzaGVyXFByaW1lXFN0YW1wXERlbGF5U3RhbXAiOjE6e3M6Mzc6IgBGbGFzaGVyXFByaW1lXFN0YW1wXERlbGF5U3RhbXAAZGVsYXkiO2k6MDt9czoyOToiRmxhc2hlclxQcmltZVxTdGFtcFxIb3BzU3RhbXAiO086Mjk6IkZsYXNoZXJcUHJpbWVcU3RhbXBcSG9wc1N0YW1wIjoxOntzOjM3OiIARmxhc2hlclxQcmltZVxTdGFtcFxIb3BzU3RhbXAAYW1vdW50IjtpOjE7fXM6MzM6IkZsYXNoZXJcUHJpbWVcU3RhbXBcUHJpb3JpdHlTdGFtcCI7TzozMzoiRmxhc2hlclxQcmltZVxTdGFtcFxQcmlvcml0eVN0YW1wIjoxOntzOjQzOiIARmxhc2hlclxQcmltZVxTdGFtcFxQcmlvcml0eVN0YW1wAHByaW9yaXR5IjtpOjA7fX1zOjQ5OiIARmxhc2hlclxQcmltZVxOb3RpZmljYXRpb25cRW52ZWxvcGUAbm90aWZpY2F0aW9uIjtPOjM5OiJGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24iOjQ6e3M6NDY6IgBGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24AdGl0bGUiO3M6MDoiIjtzOjQ4OiIARmxhc2hlclxQcmltZVxOb3RpZmljYXRpb25cTm90aWZpY2F0aW9uAG1lc3NhZ2UiO3M6MTg6IldlbGNvbWUgYmFjayBTaHV2YSI7czo0NToiAEZsYXNoZXJcUHJpbWVcTm90aWZpY2F0aW9uXE5vdGlmaWNhdGlvbgB0eXBlIjtzOjc6InN1Y2Nlc3MiO3M6NDg6IgBGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24Ab3B0aW9ucyI7YTowOnt9fX19czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzk7fQ==', 1753530328),
('KOXUMydT9Xhn42jqlEYTH3uKbJO41o3gMfnzhM5y', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN2daNndwOFNaV0E1SUxTSTRYbkc5RWUxYmdSZ0UxcVFrNnJaelJXTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMjoiaHR0cDovL3R1c2hpLWJsb2cudGVzdCI7fX0=', 1753531050),
('Kr0Nsbs46TAlSvT9H72Fv3UwNzTkVZ3u4IpGI3u4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieTQ5OWV3M1NFaHVLSkh3Q3lMaWg3Q1c1TXN5ZGJ1bEJQZFFkOGZldCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530870),
('lg2Nzmu4DP0P48noJsHXqqAxvuPmO8aFLStr4xPR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiV1JFNXoybEw5RkpzTlZvOXlQWXpBTlJpTDNvWTAzbW5PblBtZTFGNSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530442),
('LpRRWMMLpWRWj5wxzyGdU16ynU0WidIvMMRybN1n', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieURSRHMzdUlTU0hESmRVUVNVMFpMRDhpZm9VblRITUVFMUlVTjhqUyI7czo1OiJzdGF0ZSI7czo0MDoiOGoxVEpSM3JxbEJYNUQ2VHpETkNHYlRrN0JYU01LVExwODZXQlNJRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529899),
('lrcIUgzIWBhXPxCHQXUiKVtF1mm3TD52pDln8JlM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU0NsQzJ5ajN3MDBjSjZzdmlNOU4wY0tJNjlJc29XaENDejh0WnJVWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMjoiaHR0cDovL3R1c2hpLWJsb2cudGVzdCI7fX0=', 1753532201),
('MlQXYDlCHO0eCHDuJaAPXkB7JpMFyomGlN13bv88', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoib0JJaUtXV2VQVnNGZ1VpdmZZNkhieTRVaGthNmQ2dm5Ba1ZFS2loSyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753531305),
('mMSBESMXDXD72Bhgr3cPNVE925meovYJSZ8ci9G4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUkRobUYyOEZsUG0wVEFNdm9lVUVaSDVkRWpnUlNCN2V4Uk1ibFQ2diI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529823),
('mphahneL7kVQOq0rNEZZ0N31ESnRx95EjtebQpo1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMjRFelp0blhSMGhIRWZhYXp6TDEwZFhEYUhISWdNVWtPR2FhU0xEeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753530449),
('MQuhofnQBgc5AWAEkGnRi2jSrTvCf7trElmKhlAT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVGlFOXhWUFJvU21pMG5reFZMV29mRTRHVHBaQXhhNk1sQzRxcml6YyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753531144),
('NbxWUmY6hDj9jsjkIu88NAxKR3uZgqw1Lwl3dsae', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicnhtQTkzVHNSd1RuZFhoZ2dta2s4R3BNTWxSdm1pZEV4NlVSbkVQSCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530468),
('NC9txs84JOYKODYCIpBzwWnc7Mq1vduPOcpZAi8F', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWFNJQUJ2SjZSempHdXdUMzFiU3dDcUhDVHpqMDhSQlpnTGR0dE1WWCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozMToiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529826),
('nJwDKRhmsUwQ8iWm3SSlLT2yshibv1OTDsZ4e5Hc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibVNTZTRlRE1Rc0Q5eklGejJhNUxVTnZTUldodWRnZ1RqcFVuOUpHVyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753528247),
('NPBsLUENJIOjcYPUFYqKOruG9APzEZXPeW2P8tF2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSkFleXFsb2t1UFFEMVVlZ1NlcktJcmZnbDdTTDAweWJRRjdwUEJQRSI7czo1OiJzdGF0ZSI7czo0MDoiODgwWnUzS2FkYlJRRWxkOHFTWVBVUVdXNnFLRXRsQXlKUDBQc1lpSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528644),
('pErTfE8Twak8w3w26Wv1wRDj20LQ4h80uslG1ZAN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN0pieFFab2ZhYnJ1a1RBc2ZuNHowZGF6eXFubXppejVmOHhDcjI1eSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528237),
('pqfk2J9zNw4vqJMo3ISOST7KWwWyJpvdFW8cDM8U', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNFQ0V2d1QWdGQXlhd3VmcUI3akwxcHZiNjA5TDFlbU83V0xuam5haSI7czo1OiJzdGF0ZSI7czo0MDoiS21mdDZFcmp2TWJFeU1yY3BCYUJuY0ZjbTI4OGZUN0lGU2J3d1g3QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529868),
('q1YLz4OFWegrJ86ShuKM5AgqjJhXpVugCWjjW8N7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaUNZbmxPNm5MREEzbTBxN2dzcjNDaGtvY0ljM0k5YnE1MnlZblFhTyI7czo1OiJzdGF0ZSI7czo0MDoiWkJDRkhJUjA4VEV6aXNZRXdYMmNoY1d0am5mSlZCTTJ2WHdDN1haYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528141),
('QBpXxOR7xWkJwtdOvdTFaRo93Zh2oyfx7ABghfqO', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibVVtbWhhQkxiY0hzbVhvNHIyUGxOQ1ExbFJ1YWxkdVpmRUZjaXNPbyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528642),
('QMkfHjPKGNKNcRl4R9Q7lMy0dg9MEdjIWBB0tX2I', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidWl6bWd0bWNxeGdYVzFXZU5iNXdEVk1QbVlvQ1FpOWYwQm9uc0NzeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753531487),
('qUDhWj0KBBiPsP13HkzV2enSEubJBubBegI8XDI0', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMUxRTXNiVEJ3d1E0V3V4cnZkdHdCd2Nra3FtdHdFdFF2Y1BhUXEyQSI7czo1OiJzdGF0ZSI7czo0MDoiZG1WemtTb2o3Z1NvNWVGOFlmVTdUMTh5NW1qUzhOTWN2ZllnQlRwbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530874),
('qXUNWuyVPCjkAPqc21cjrfIyy5CVBG84OJg0ZCh2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR1FiNktndExSd09vcVEwTmZMbEVIb0pKb2hBOHE4dXJqa0VSbmUzeiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMjoiaHR0cDovL3R1c2hpLWJsb2cudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530762),
('RqQyTs4gvrg2bzIoBzKJjo5z5cZrsiMO6AGMM2PD', 42, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoid0g4Tkp3dDFycTZKM2htdHpTS2dNRFZVSGkzVnlzODlMT1drR1k1NSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo1MDc6Imh0dHBzOi8vdHVzaGktYmxvZy50ZXN0L2F1dGgvZmFjZWJvb2svY2FsbGJhY2s/Y29kZT1BUUJBWS00T3V2a3drR0ZOTjZINHRKVEhqMGhxb3RfZHpiMTZjSXAta1dtSTA3MklHMUlVR1E5emRUZmpDUjQ4Q3VrSjZmUTRQR1p3TEwxMno1U1U2eU93Y3o2NDlTb2RjaERaV2tmTjhuN01BeTVjcjJwaEt2dkhoejFXaG5lN0hvaE5uX25KVWx1V3A5TjN1ME9TejI2YUpjNmw0ckVGNnRacVhuQ09Qa0RsMGM3bjlRUjdlYzdRS0tlanNqUW5yc29tbUloaTExZ2I1TE4tNmdVVHJjeUxNLWNBb0dackdSUVBsSEpKSHo3VEYyOFliN3pRbHA1eGpnV2VxWmE1clBOVTBWaGlVQS0xNWlGWnBoUEpFdlBfbVVUMVRTOFNxcXZZcVpvVkRCdHhtZ3hoeTJrOVgzdUxJY1VVSDhKNHV1cUMzTGRfYjVNQ3lXTG9ZdEc4MkFsODUwYU0tbVdhWXEyNjRfU0xkQ2VMNzM0U1otRWhBZ0kzeGNrbEZoTXdITFFURU0tWEs3bmEyY3FwMVQ0VVZSbUwmc3RhdGU9ZWZyZlA0MnppR1M1eEV1U0dJdktGU1V1U1lsRmpnNVBXcEtoNEpBYSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQyO30=', 1753530274),
('RR5CoxSyfE4mGRv4ajMgTgRuHz7EYxEMIADuZj5N', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVzgycDJyVDVweXAwYlV6Vll2R1FyWmkxbXpUcnFZck9rUkJkTFMzbyI7czo1OiJzdGF0ZSI7czo0MDoiS3VFRGdFOWVXZ2FaMjZxNVZYSWVORUk4ajZGNHpCWDlvT2pnMzF1VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528402),
('rrps5f0V2Xfa1Y7OTMzqFXq1J4fBA9sICSKw2ggN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaTg3cGdDNWpSZVdTdzlzZHBDOUNnZW01ekFiT2NNRHIzaEY4VGxLYiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMjoiaHR0cDovL3R1c2hpLWJsb2cudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529771),
('SDoftkuDqpPWs2abgNnazxCIVvfd2dEFytosd3vA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiODhPMFJIcmc1bDdRT1lxT0gwbHNNMUVrdEl4cGk5NDhUY3J5SUQ0YSI7czo1OiJzdGF0ZSI7czo0MDoiZ3R4R2ZzZkpRNlpWN3RqV0M4YlFvREF6TTc4SUZkZVQ0OGVYUEF1dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529462),
('sEq379ydm5wXjJrMh4vEchOrzny9H0PFchuOZlEx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiWW9udllLTW5vYkkzTXlsaGpiTFVqUUpCY1VKMnAzVGVUZXhsUlpMRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753531141),
('sRUCNRb8aN4RuB9xX17T78B8ciltQtXaJN89eOot', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVVB2MWtHNGN2bWFZVnJjbG9ST2hVcm10c1B3cDdPUXU5SGVHcmdpWiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529863),
('Ss0DcW4MhioZfvz1iouAELdBNA7r1wPM4ag9hyI5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiN1VpNlh4ZE1EUHJHNUV1SVREWld2OWpzcVJEWDFqRHBBdzRlZ1drUiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529820),
('svwtTcnOR3bPYKPKYOegPLKs8VVDd9HYj2ghjB7D', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoidXVjOFJXSmE5ejhNenpIdWJLS1NMYWYyaEJoaTMxbHVsQTlDRmZlbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753530865),
('TlT5YxioighxWrGQfsBcHN5IM3sKHJE66vcNHtTS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSzdpamZqWEF5enJXdzdKV3hhaUZUQW05OEhxNGJpcjJVUHA3dlp6eiI7czo1OiJzdGF0ZSI7czo0MDoiT2NUekttUVo5ZFZ1dGNLaDhoUmlDVU5JWU9LMlZ1N2JpYUxtOWw5NyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528099),
('TYC8NU73xCzJ10JwXKaBEeS920L1ZTR6xy1xRrkn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWmk4M3Z4MnVUakVkUTZwM2ZER2hBOTRUS0VHOUd1bU9hQXg3MWduVCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529354),
('tzS2Jul9VrwM64vtPZI1Ra87HgTDeCA6898xDWQc', 39, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiV05XRjhwQmdQZ0dHMzZhbXhVc2hjdkptMWJRcUpJSUltSjVmVFB1ViI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cHM6Ly90dXNoaS1ibG9nLnRlc3QvZGFzaGJvYXJkIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vdHVzaGktYmxvZy50ZXN0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjE6e2k6MDtPOjM1OiJGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxFbnZlbG9wZSI6Mjp7czo0MzoiAEZsYXNoZXJcUHJpbWVcTm90aWZpY2F0aW9uXEVudmVsb3BlAHN0YW1wcyI7YTo2OntzOjMxOiJGbGFzaGVyXFByaW1lXFN0YW1wXFBsdWdpblN0YW1wIjtPOjMxOiJGbGFzaGVyXFByaW1lXFN0YW1wXFBsdWdpblN0YW1wIjoxOntzOjM5OiIARmxhc2hlclxQcmltZVxTdGFtcFxQbHVnaW5TdGFtcABwbHVnaW4iO3M6NToibm90eWYiO31zOjM0OiJGbGFzaGVyXFByaW1lXFN0YW1wXENyZWF0ZWRBdFN0YW1wIjtPOjM0OiJGbGFzaGVyXFByaW1lXFN0YW1wXENyZWF0ZWRBdFN0YW1wIjoyOntzOjQ1OiIARmxhc2hlclxQcmltZVxTdGFtcFxDcmVhdGVkQXRTdGFtcABjcmVhdGVkQXQiO086MTc6IkRhdGVUaW1lSW1tdXRhYmxlIjozOntzOjQ6ImRhdGUiO3M6MjY6IjIwMjUtMDctMjYgMTE6NDU6MzIuOTA1MTc3IjtzOjEzOiJ0aW1lem9uZV90eXBlIjtpOjM7czo4OiJ0aW1lem9uZSI7czozOiJVVEMiO31zOjQyOiIARmxhc2hlclxQcmltZVxTdGFtcFxDcmVhdGVkQXRTdGFtcABmb3JtYXQiO3M6MTE6IlktbS1kIEg6aTpzIjt9czoyNzoiRmxhc2hlclxQcmltZVxTdGFtcFxJZFN0YW1wIjtPOjI3OiJGbGFzaGVyXFByaW1lXFN0YW1wXElkU3RhbXAiOjE6e3M6MzE6IgBGbGFzaGVyXFByaW1lXFN0YW1wXElkU3RhbXAAaWQiO3M6MzI6IjFlNWMxMzYzZDdmZWE0NmU4ZjFjZDQ5NzBlMDYzOTEyIjt9czozMDoiRmxhc2hlclxQcmltZVxTdGFtcFxEZWxheVN0YW1wIjtPOjMwOiJGbGFzaGVyXFByaW1lXFN0YW1wXERlbGF5U3RhbXAiOjE6e3M6Mzc6IgBGbGFzaGVyXFByaW1lXFN0YW1wXERlbGF5U3RhbXAAZGVsYXkiO2k6MDt9czoyOToiRmxhc2hlclxQcmltZVxTdGFtcFxIb3BzU3RhbXAiO086Mjk6IkZsYXNoZXJcUHJpbWVcU3RhbXBcSG9wc1N0YW1wIjoxOntzOjM3OiIARmxhc2hlclxQcmltZVxTdGFtcFxIb3BzU3RhbXAAYW1vdW50IjtpOjE7fXM6MzM6IkZsYXNoZXJcUHJpbWVcU3RhbXBcUHJpb3JpdHlTdGFtcCI7TzozMzoiRmxhc2hlclxQcmltZVxTdGFtcFxQcmlvcml0eVN0YW1wIjoxOntzOjQzOiIARmxhc2hlclxQcmltZVxTdGFtcFxQcmlvcml0eVN0YW1wAHByaW9yaXR5IjtpOjA7fX1zOjQ5OiIARmxhc2hlclxQcmltZVxOb3RpZmljYXRpb25cRW52ZWxvcGUAbm90aWZpY2F0aW9uIjtPOjM5OiJGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24iOjQ6e3M6NDY6IgBGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24AdGl0bGUiO3M6MDoiIjtzOjQ4OiIARmxhc2hlclxQcmltZVxOb3RpZmljYXRpb25cTm90aWZpY2F0aW9uAG1lc3NhZ2UiO3M6MTg6IldlbGNvbWUgYmFjayBTaHV2YSI7czo0NToiAEZsYXNoZXJcUHJpbWVcTm90aWZpY2F0aW9uXE5vdGlmaWNhdGlvbgB0eXBlIjtzOjc6InN1Y2Nlc3MiO3M6NDg6IgBGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24Ab3B0aW9ucyI7YTowOnt9fX19czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzk7fQ==', 1753530332),
('uOMtjOhrbJI9MWPzqIficKJP0TIQEFL485W5SXn7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQkd6NDh3WlRlMWhtSk1RZ0tscVRVdWJjcXhPV3EwQ09RbWFvZElYZiI7czo1OiJzdGF0ZSI7czo0MDoiajNhVUR0MTdDR0RyQmRZeTJ2WmRjMzVWcGpmUEZWMEtPR3oxV3p3QSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528174),
('UPiHW3kltHvmShBOC7lLRR51nNstoENJKY8ZEb4T', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVzFGNjRCRHZVM1l2azR2ZGlaMzFJSmVvT1VyMnR0SmE1YmhKaGtjYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753530477),
('uRSLUmdAzGqZWMxlkyesstjdX40dnZcBtaAha8sV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUmFqbkd2REVjaE5ZbXFqQjdSb3NwNE1NdTRhTTlQN3YwSlVUbm5zQSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530960),
('UWiqM7QIIul4WnFo47skvUCgE3VBmznFEXUB5h8S', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNUpGRHRHMzZFaFdOS0t2MWxTVm1JR1FnY3RPZmM0NHlVMnQwbVFxQSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMjoiaHR0cDovL3R1c2hpLWJsb2cudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528242),
('uxQnqzROU1Vw92FkJciIc04XJEBiFWMvZGQii8xz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiSE5LM0JVTXNlYVZGdFhlYVFFQW9pVEJPZ21rUmFaMElpUU5TbGsxaCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753530797),
('v3s0pmXRCMZqE42cKTyVvWOJ137vWPBKSw9exSUI', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ0VZaU9uY0lKOFhUZWxDVlBNd05QdVpTMHgzNW5ac2R4NTNRVE82TiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530793),
('vgY9yNiSxbwYBuTlA43AW6I1uoUhput0ZwrsEvNt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiQ0NndE82YjRaS1p5WEU2RFFZckIxWkE1VnRzSER0cVZQMHFDd2hCWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753530964),
('vIpRKDbALhRlwbQY4feBXqKiEzIL9i5SsrXjSti5', 39, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoialdQeTl5TFFUcWRsZkh0OHNMcHk0U2pYclBWVkp1ME5DbFhERnVobyI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cHM6Ly90dXNoaS1ibG9nLnRlc3QvZGFzaGJvYXJkIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vdHVzaGktYmxvZy50ZXN0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjE6e2k6MDtPOjM1OiJGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxFbnZlbG9wZSI6Mjp7czo0MzoiAEZsYXNoZXJcUHJpbWVcTm90aWZpY2F0aW9uXEVudmVsb3BlAHN0YW1wcyI7YTo2OntzOjMxOiJGbGFzaGVyXFByaW1lXFN0YW1wXFBsdWdpblN0YW1wIjtPOjMxOiJGbGFzaGVyXFByaW1lXFN0YW1wXFBsdWdpblN0YW1wIjoxOntzOjM5OiIARmxhc2hlclxQcmltZVxTdGFtcFxQbHVnaW5TdGFtcABwbHVnaW4iO3M6NToibm90eWYiO31zOjM0OiJGbGFzaGVyXFByaW1lXFN0YW1wXENyZWF0ZWRBdFN0YW1wIjtPOjM0OiJGbGFzaGVyXFByaW1lXFN0YW1wXENyZWF0ZWRBdFN0YW1wIjoyOntzOjQ1OiIARmxhc2hlclxQcmltZVxTdGFtcFxDcmVhdGVkQXRTdGFtcABjcmVhdGVkQXQiO086MTc6IkRhdGVUaW1lSW1tdXRhYmxlIjozOntzOjQ6ImRhdGUiO3M6MjY6IjIwMjUtMDctMjYgMTE6NDY6NTYuMTcyOTgzIjtzOjEzOiJ0aW1lem9uZV90eXBlIjtpOjM7czo4OiJ0aW1lem9uZSI7czozOiJVVEMiO31zOjQyOiIARmxhc2hlclxQcmltZVxTdGFtcFxDcmVhdGVkQXRTdGFtcABmb3JtYXQiO3M6MTE6IlktbS1kIEg6aTpzIjt9czoyNzoiRmxhc2hlclxQcmltZVxTdGFtcFxJZFN0YW1wIjtPOjI3OiJGbGFzaGVyXFByaW1lXFN0YW1wXElkU3RhbXAiOjE6e3M6MzE6IgBGbGFzaGVyXFByaW1lXFN0YW1wXElkU3RhbXAAaWQiO3M6MzI6IjczZTE4ZjQyNDY3MmMwYmUzZmZmN2RiMGNhOGJhYzg3Ijt9czozMDoiRmxhc2hlclxQcmltZVxTdGFtcFxEZWxheVN0YW1wIjtPOjMwOiJGbGFzaGVyXFByaW1lXFN0YW1wXERlbGF5U3RhbXAiOjE6e3M6Mzc6IgBGbGFzaGVyXFByaW1lXFN0YW1wXERlbGF5U3RhbXAAZGVsYXkiO2k6MDt9czoyOToiRmxhc2hlclxQcmltZVxTdGFtcFxIb3BzU3RhbXAiO086Mjk6IkZsYXNoZXJcUHJpbWVcU3RhbXBcSG9wc1N0YW1wIjoxOntzOjM3OiIARmxhc2hlclxQcmltZVxTdGFtcFxIb3BzU3RhbXAAYW1vdW50IjtpOjE7fXM6MzM6IkZsYXNoZXJcUHJpbWVcU3RhbXBcUHJpb3JpdHlTdGFtcCI7TzozMzoiRmxhc2hlclxQcmltZVxTdGFtcFxQcmlvcml0eVN0YW1wIjoxOntzOjQzOiIARmxhc2hlclxQcmltZVxTdGFtcFxQcmlvcml0eVN0YW1wAHByaW9yaXR5IjtpOjA7fX1zOjQ5OiIARmxhc2hlclxQcmltZVxOb3RpZmljYXRpb25cRW52ZWxvcGUAbm90aWZpY2F0aW9uIjtPOjM5OiJGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24iOjQ6e3M6NDY6IgBGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24AdGl0bGUiO3M6MDoiIjtzOjQ4OiIARmxhc2hlclxQcmltZVxOb3RpZmljYXRpb25cTm90aWZpY2F0aW9uAG1lc3NhZ2UiO3M6MTg6IldlbGNvbWUgYmFjayBTaHV2YSI7czo0NToiAEZsYXNoZXJcUHJpbWVcTm90aWZpY2F0aW9uXE5vdGlmaWNhdGlvbgB0eXBlIjtzOjc6InN1Y2Nlc3MiO3M6NDg6IgBGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24Ab3B0aW9ucyI7YTowOnt9fX19czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzk7fQ==', 1753530416);
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('wf8qqJ7ZC2oyL9Br7dLoHAh5LRLBKrMr3qfEoVCx', 39, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRkpjcGJFOUdFc0dtNjNqNGhUenhMQTdlU2lwYldzOFl3d201c2dxSiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMzoiaHR0cHM6Ly90dXNoaS1ibG9nLnRlc3QvZGFzaGJvYXJkIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHBzOi8vdHVzaGktYmxvZy50ZXN0L2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjE6e2k6MDtPOjM1OiJGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxFbnZlbG9wZSI6Mjp7czo0MzoiAEZsYXNoZXJcUHJpbWVcTm90aWZpY2F0aW9uXEVudmVsb3BlAHN0YW1wcyI7YTo2OntzOjMxOiJGbGFzaGVyXFByaW1lXFN0YW1wXFBsdWdpblN0YW1wIjtPOjMxOiJGbGFzaGVyXFByaW1lXFN0YW1wXFBsdWdpblN0YW1wIjoxOntzOjM5OiIARmxhc2hlclxQcmltZVxTdGFtcFxQbHVnaW5TdGFtcABwbHVnaW4iO3M6NToibm90eWYiO31zOjM0OiJGbGFzaGVyXFByaW1lXFN0YW1wXENyZWF0ZWRBdFN0YW1wIjtPOjM0OiJGbGFzaGVyXFByaW1lXFN0YW1wXENyZWF0ZWRBdFN0YW1wIjoyOntzOjQ1OiIARmxhc2hlclxQcmltZVxTdGFtcFxDcmVhdGVkQXRTdGFtcABjcmVhdGVkQXQiO086MTc6IkRhdGVUaW1lSW1tdXRhYmxlIjozOntzOjQ6ImRhdGUiO3M6MjY6IjIwMjUtMDctMjYgMTE6NDY6MjYuOTkyMTYwIjtzOjEzOiJ0aW1lem9uZV90eXBlIjtpOjM7czo4OiJ0aW1lem9uZSI7czozOiJVVEMiO31zOjQyOiIARmxhc2hlclxQcmltZVxTdGFtcFxDcmVhdGVkQXRTdGFtcABmb3JtYXQiO3M6MTE6IlktbS1kIEg6aTpzIjt9czoyNzoiRmxhc2hlclxQcmltZVxTdGFtcFxJZFN0YW1wIjtPOjI3OiJGbGFzaGVyXFByaW1lXFN0YW1wXElkU3RhbXAiOjE6e3M6MzE6IgBGbGFzaGVyXFByaW1lXFN0YW1wXElkU3RhbXAAaWQiO3M6MzI6IjdhM2MzMTIyNDQ5ZTdkYWJlOWFlZDg1ODRlYTk0YmY2Ijt9czozMDoiRmxhc2hlclxQcmltZVxTdGFtcFxEZWxheVN0YW1wIjtPOjMwOiJGbGFzaGVyXFByaW1lXFN0YW1wXERlbGF5U3RhbXAiOjE6e3M6Mzc6IgBGbGFzaGVyXFByaW1lXFN0YW1wXERlbGF5U3RhbXAAZGVsYXkiO2k6MDt9czoyOToiRmxhc2hlclxQcmltZVxTdGFtcFxIb3BzU3RhbXAiO086Mjk6IkZsYXNoZXJcUHJpbWVcU3RhbXBcSG9wc1N0YW1wIjoxOntzOjM3OiIARmxhc2hlclxQcmltZVxTdGFtcFxIb3BzU3RhbXAAYW1vdW50IjtpOjE7fXM6MzM6IkZsYXNoZXJcUHJpbWVcU3RhbXBcUHJpb3JpdHlTdGFtcCI7TzozMzoiRmxhc2hlclxQcmltZVxTdGFtcFxQcmlvcml0eVN0YW1wIjoxOntzOjQzOiIARmxhc2hlclxQcmltZVxTdGFtcFxQcmlvcml0eVN0YW1wAHByaW9yaXR5IjtpOjA7fX1zOjQ5OiIARmxhc2hlclxQcmltZVxOb3RpZmljYXRpb25cRW52ZWxvcGUAbm90aWZpY2F0aW9uIjtPOjM5OiJGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24iOjQ6e3M6NDY6IgBGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24AdGl0bGUiO3M6MDoiIjtzOjQ4OiIARmxhc2hlclxQcmltZVxOb3RpZmljYXRpb25cTm90aWZpY2F0aW9uAG1lc3NhZ2UiO3M6MTg6IldlbGNvbWUgYmFjayBTaHV2YSI7czo0NToiAEZsYXNoZXJcUHJpbWVcTm90aWZpY2F0aW9uXE5vdGlmaWNhdGlvbgB0eXBlIjtzOjc6InN1Y2Nlc3MiO3M6NDg6IgBGbGFzaGVyXFByaW1lXE5vdGlmaWNhdGlvblxOb3RpZmljYXRpb24Ab3B0aW9ucyI7YTowOnt9fX19czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzk7fQ==', 1753530387),
('wMtWjGlhtJwQpWVj2DU6i4naYNcspGWP7PmWnOT4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUHZSQWNaUUNUZVFXT0hBV2VzaU1pVDdTdTZWcU91cHdITndoS3dsbSI7czo1OiJzdGF0ZSI7czo0MDoiQ0pLZ2V1QXNSVnV5cm9NbHJjdG1mcURzNEg2UDJaMkVjeTlFcnZaeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529320),
('wRYlDT0oRYg7FbIbckt4GTOBglCycnbOPzB9awBv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNkRuNkhCSlhsZU5KalRGWnpCWUF0a3JSRXk3NnZGVGljZ1FTSXhXcCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMjoiaHR0cDovL3R1c2hpLWJsb2cudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530439),
('WxIqKmrEHsEwbPSaGgL29jJeXKzLbZm6ECsXhMPe', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY2g4VkRVN096UXhuYzRzUzkxa2VEQVdvVzBkZEpzYWtjTWJmWHBaUCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMjoiaHR0cDovL3R1c2hpLWJsb2cudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529674),
('X4pwG454JXaNy0t5vJz7yM7AHBuzzZLBN0JXwian', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS0hzVjBMZjNPOUVMQXVzUTA0ckpSY0prSWFTdGdhQnh0ZXVBZ2FzUyI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529370),
('x8AtuDBMzNd9rhQxmddQe3nv1R5cOeEiR4FKNkW6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNHg5akVOQnhsQ0xqMEVxRkZuWlk2dTBNMEpibU1VSWl4Yjd6RlNGZiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529829),
('XD5pSts6GA3Yq1inbsZFVslydK35PcixUWwqIqr2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYURVU000MkR5QTZJYkZQNGxseTRsQXJROEdBZFhqcHdiRFBQekNrcCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528140),
('XLqYuzPXQJjksj0v2zzCq8a6m1558iVTDIPh4KQs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOHZCeUlkMjBvaGxzdzU3c3N4cUdwZmU4aHQ2bnZid3ZNc1ltSEFNRCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753528171),
('Xojz4QiO8EMvy0WvyGc1oerm2ZM414yicfQVNwxM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoieHFpcXE4WURLampVRHl3OUdQRHNLU21Ra1NxbnY4VWpWZ3N0MENsOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753531330),
('xUY9pJ5LIj0f3ue196Jtx94ziWQsz7eGrSQsMzrn', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWGo2RjJOOGVmMEhJRkJZd00xYTJwSWpBcE9DSGdqZlRaYmRZdU5uSiI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529398),
('YNKagxXZQDcQpQ5KkDavm1w9UeaNMgMVhHuLhnMk', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkJoMkdiQnRLQ1Q2TjZzMGFlM21oOE00QXN3aHI5Z29ob2J3YlU0WSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753530790),
('YObayD9o6BLQCNonyaRDiOW8j3zfLFFafacWdLZd', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidzZFb0xIaDdtRlR4dkdac3BqMWhoczFRSGtOU0QzWEpMR1JEb1BGViI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530770),
('YTNQJtJsyZ8f5EsUAybY8fDaZvzvPgK0BIRnUp4Q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiV1htWnB0WnZqWGtkUkZLUjRKOHpCNjY2OElBdmtRS3VpekRUaVBDeCI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjIyOiJQSFBERUJVR0JBUl9TVEFDS19EQVRBIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMjoiaHR0cDovL3R1c2hpLWJsb2cudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1758555930),
('YURthjzkNSCruU0UaydvmbBkDbERkdFabqzYEjza', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSkZObExJZlVsZFc3R1lRU0ZTWHM5UHpjS2daNjFxcjBSc2t3OXBLeSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753530764),
('ZDJZ3Fg26xMxNzEOyEOh4bP8QQxCYFPcYtzzvj2U', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT3JWT2VaYlh1ZEtuMkt2elJXdktKdWRIOWowSWp5NHdwNGJCMlhvZSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyODoiaHR0cDovL3R1c2hpLWJsb2cudGVzdC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529914),
('zEccenI5h6HW0CIonHGkudVHlZNxPGwHSWhDLL0O', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWlZqSXFiRGIzbFpVYVF3dzZlbFJZdVVlckJ2VHhHMlpQV1RiTlNNTCI7czo1OiJzdGF0ZSI7czo0MDoibTdacFVpbHNSSERHVHRmdlBNQUlWUTJpckJybzl5Mmc5OUt4VGFCbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vayI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753529924),
('zjyoe74pcujN0Xg6ayIJVwlC1vsO0VPrNfu3wwt1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiR2hmMkl2Q0d6dE9YdDNCcG1ncUwwTW9DSGppUXlUb3NWTFkxSFk5diI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMjoiaHR0cDovL3R1c2hpLWJsb2cudGVzdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753531527),
('zrYe8iZS6valFcGqte1lvhHWX2qqhUOioOwxwDp5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiMHRQaHRuWklLVFZvQVJCYnM4eDlGdVV4Vmk4dDhKYXN4eUJDN3hjQiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753531334),
('ZT8nwTpxzjT2aHybObQ2ZIa2EIFpPrhDmKLjAWz5', 42, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiN3lBbmRoWTViaXF6VXhjSE1lR2R0eUpsdGVkTlBGSEEwbUFzS1FaSiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUwNzoiaHR0cHM6Ly90dXNoaS1ibG9nLnRlc3QvYXV0aC9mYWNlYm9vay9jYWxsYmFjaz9jb2RlPUFRQ09fVFkxak0zQ0ZaV25BX3pBYWVhdEc5bjFOTVRPY011ZUJLOV92Tklybnl6ODNlZmZURXNuZHBJQWFSamM5TzZLd1Fzc1VYaGQ5TUxlQllxb0JObXAycmNFQS1KTnREOTlma0ZDeVBYVF9hbzJnbU9aeG1KSzkzQzBDd2xXcDlDU1YtZzBCVnF4X28xWE5mNWNFTnNuRVNKcVVYV3h2WG5GN1lVaU5GSUVCWmExMlZvOHN3WjRXTy1yWF9BS0lfTGdBRmc5Z3c5WjRZZGtuX1RzZUVQMUU4aDFlQlVTNktzX3hHc0dwOHNZWXphNDF2VGc1bkExbmlwaGxFT1kxWmRjQUVnVmFJbzh3LS1QWDRBWDhFdjFydEJQUVhaVHVUQlRKN0pYeUtmU0JnMnlGdFdxWldBVGFBSlRmTGVZdWJCWEk2LVJLSUZ6bWFGenNBMmdYeDZOQ0ZlWG1lWG1laG9wcnBXdFd6S1NMcVphUmhwVGhsbVRWdmJ6VDRBMWV0MHNLQS1VRkRIZkVwYnpRdzRmbTI5TCZzdGF0ZT1XV29xSUZqNGw1MUNGWUNWNTZOMEVjdllFcjFLUjJhSTJaaEtTY290Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0Mjt9', 1753530287),
('Zv2zroAXzumMa02WteQAxNl8wv8uzRzKiJq09BoW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiYU5Mdlc0VTBVUFB5azlGSnVFSnVxdUxqN1U2VHhyQUs3YXlUZjB5VSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753530855);

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `fav_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rss_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rss_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_map_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privacy_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_banner_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recentpost_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topauthor_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_of_month_bg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscribe_news_letter_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscribe_news_letter_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscribe_news_button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us_button_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us_right_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us_right_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us_email_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us_email_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us_phone_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us_phone_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `fav_icon`, `logo`, `rss_icon`, `rss_text`, `site_map_text`, `privacy_text`, `footer_text`, `twitter`, `linkdin`, `instagram`, `facebook`, `home_banner_title`, `recentpost_title`, `topauthor_title`, `featured_title`, `post_of_month_bg`, `subscribe_news_letter_title`, `subscribe_news_letter_details`, `subscribe_news_button_text`, `contact_us_title`, `contact_us_button_text`, `contact_us_right_heading`, `contact_us_right_details`, `contact_us_email_icon`, `contact_us_email_address`, `contact_us_phone_icon`, `contact_us_phone_address`, `created_at`, `updated_at`) VALUES
(1, 'upload/setting/1838144499205063.png', 'upload/setting/1838144499212222.png', 'ti ti-rss', 'RSS', 'SiteMap', 'Privacy', 'Mehedi. All rights reserved.', NULL, NULL, NULL, NULL, 'Latest News Updates and Tips', 'Recent Posts', 'Top Authors', 'Featured Posts', 'upload/setting/1838144824556862.jpg', 'Subscribe to our monthly newsletter', 'Stay up-to-date about latest tech and new world. Unsubscribe at anytime!', 'Subscribe Now', 'Contact us', 'Send', 'We\'d love to hear from you.', 'We\'ll answer every question you might have. Look forward to hearing from you', 'ti ti-mail-forward', 'mjjibon@gmail.com', 'ti ti-phone', '01873593399', NULL, '2025-07-20 00:15:33'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-20 05:41:16', '2025-07-20 05:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `tag_slug`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'laravel', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(2, 'PHP', 'php', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(3, 'JavaScript', 'javascript', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(4, 'ReactJS', 'reactjs', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(5, 'VueJS', 'vuejs', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(6, 'NodeJS', 'nodejs', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(7, 'API Development', 'api-development', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(8, 'REST API', 'rest-api', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(9, 'AI Tools', 'ai-tools', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(10, 'Machine Learning Models', 'machine-learning-models', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(11, 'Data Analysis', 'data-analysis', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(12, 'Cyber Security Tips', 'cyber-security-tips', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(13, 'Cloud Services', 'cloud-services', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(14, 'AWS', 'aws', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(15, 'Blockchain Technology', 'blockchain-technology', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(16, 'UI Design', 'ui-design', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(17, 'Software Testing Tools', 'software-testing-tools', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(18, 'Game Engine', 'game-engine', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(19, 'Tech Startup', 'tech-startup', '2025-07-18 23:20:35', '2025-07-18 23:20:35'),
(20, 'Gadget News', 'gadget-news', '2025-07-18 23:20:35', '2025-07-18 23:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'upload/no-photo.png',
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `facebook` longtext COLLATE utf8mb4_unicode_ci,
  `twitter` longtext COLLATE utf8mb4_unicode_ci,
  `linkdin` longtext COLLATE utf8mb4_unicode_ci,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_token` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `email_verified_at`, `profile`, `details`, `password`, `role`, `status`, `facebook`, `twitter`, `linkdin`, `facebook_id`, `facebook_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi', 'mehedi.bd@gmail.com', 'mehedibd360', NULL, 'upload/profile/admin/1837968414682508.jpg', 'Rangpur bashay thake. IT peshay kaj kore.', '$2y$12$BKsPkRRpHgO77UGQUcZm1.e.LogobnHhAi7q6bPMLHS5vPLM3QqWS', 'admin', '1', 'https://www.facebook.com/mehedi.hassan.jibon.785666/', 'https://www.facebook.com/mehedi.hassan.jibon.785666/', 'https://www.facebook.com/mehedi.hassan.jibon.785666/', NULL, NULL, NULL, '2025-06-21 01:20:10', '2025-07-25 11:58:39'),
(2, 'Rahim Uddin', 'rahim.bd@gmail.com', 'rahim', NULL, 'upload/no-photo.png', 'Dhaka bashay thake. IT peshay kaj kore.', '$2y$12$ilRNO9/dmQCdlLBRhkHJXOPsc6Lg17CHNRNbzUWa4SgWrz40g7EiG', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-16 01:20:10', '2025-07-18 01:20:10'),
(3, 'Karim Mia', 'karim.mia@yahoo.com', 'karim', NULL, 'upload/no-photo.png', 'Chattogram er lok. Business kore.', '$2y$12$48iFpjmixQg6K5Fd9UAedOky7Khw/RAtzlMZCoPJSZqw59gGug2li', 'user', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-19 01:20:10', '2025-07-18 01:20:10'),
(4, 'Jamal Hossain', 'jamal.h@gmail.com', 'jamal', NULL, 'upload/no-photo.png', 'Sylhet er hotel e job kore.', '$2y$12$xf6oTblRoFC1t.4JOXeSC.LNr/WJOTS0PRTK9JNq/5P72kd2cY32u', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-17 01:20:11', '2025-07-18 01:20:11'),
(5, 'Sajeda Begum', 'sajeda@gmail.com', 'sajeda', NULL, 'upload/no-photo.png', 'Rajshahi te teacher hisebe kaj kore.', '$2y$12$CofCNHXElnklQp1am0HEEOI0tfgpEBqCgzenAoO6bq7HQZhjfAr.C', 'admin', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-03 01:20:11', '2025-07-25 12:04:09'),
(6, 'Nusrat Jahan', 'nusratj@gmail.com', 'nusrat', NULL, 'upload/no-photo.png', 'Khulna te freelancing kore.', '$2y$12$de9u3c94I9TncSONVbXxWeDPfq90eCh3JnwtLqRO.Pin1zCp/YQ8W', 'admin', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-10 01:20:11', '2025-07-18 01:20:11'),
(7, 'Faisal Ahmed', 'faisal.a@gmail.com', 'faisal', NULL, 'upload/no-photo.png', 'Dhaka University te porashona kore.', '$2y$12$0LcAIQ3MA0I9tPGRvEl.P.ck1TShkjLxI86v5CugelHbZifYPFxJ.', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-03 01:20:12', '2025-07-18 01:20:12'),
(8, 'Mourin Rahman', 'mourin.r@gmail.com', 'mourin', NULL, 'upload/no-photo.png', 'Jashore er garment e kaj kore.', '$2y$12$pyrCRr3qVIhsXtNLp0zBCes6rF1AiMjHRm2uOeMd58xHcXBc5ZunW', 'user', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-13 01:20:12', '2025-07-18 01:20:12'),
(9, 'Tanvir Hossain', 'tanvir@gmail.com', 'tanvir', NULL, 'upload/no-photo.png', 'Comilla te business kore.', '$2y$12$nleEYf3eRKeHe/Gxel0nKuSkNfakab6vtlLIdXOQ/BVOm87rXmwDC', 'admin', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-27 01:20:12', '2025-07-18 01:20:12'),
(10, 'Hasib Khan', 'hasib.khan@gmail.com', 'hasib', NULL, 'upload/no-photo.png', 'Barisal er ekta bank e kaj kore.', '$2y$12$wVBBe2phGe1uLW6xojhVwOYNqrrLR4YvEjEinmDsBkx9WxspHLjgC', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-17 01:20:13', '2025-07-18 01:20:13'),
(11, 'Sumi Akter', 'sumi.a@gmail.com', 'sumi', NULL, 'upload/no-photo.png', 'Rangpur e college student.', '$2y$12$bfVAfRw0adcS0rpWv4t3JOOA1xhKRZmr2sXxmAyJGKbMfKByaGPzS', 'user', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-14 01:20:13', '2025-07-18 01:20:13'),
(12, 'Rana Chowdhury', 'rana.c@gmail.com', 'rana', NULL, 'upload/no-photo.png', 'Gazipur e factory te supervisor.', '$2y$12$RuQYybBCu1TCV6HTmAeBbee9Hvg/cFsIl6i5pUbbEFeyUwXvYGaT6', 'admin', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-26 01:20:13', '2025-07-25 21:04:19'),
(13, 'Nila Sultana', 'nila.s@gmail.com', 'nila', NULL, 'upload/no-photo.png', 'Narayanganj e teacher.', '$2y$12$lBnLAleY8FmLuqgRsDGBt.1qPOe53y9gbo2lMAQMM.78fuUFpvAqe', 'admin', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-23 01:20:14', '2025-07-25 01:38:33'),
(14, 'Babu Mia', 'babu.m@gmail.com', 'babu', NULL, 'upload/no-photo.png', 'Dhaka er driver.', '$2y$12$O7AVdW8NvLje3EqzVojeLeu3bPnXTUyiGoRRsMK4gt8uLXsqpY4NO', 'user', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-18 01:20:14', '2025-07-18 01:20:14'),
(15, 'Monir Hossain', 'monir.h@gmail.com', 'monir', NULL, 'upload/no-photo.png', 'Sylhet er chef.', '$2y$12$30y4kHNsa2.zDZapQ.udAejufuCd0G.ZgqInyBuW6luFy9vXOptYi', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-24 01:20:14', '2025-07-18 01:20:14'),
(16, 'Rafiq Ahmed', 'rafiq.a@gmail.com', 'rafiq', NULL, 'upload/no-photo.png', 'Khulna e sromik.', '$2y$12$Ev2fj3HClk27HN.O5WbR9uj7wrStHW00ifSiGYDG.ThwrdUYu0/U6', 'user', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-22 01:20:15', '2025-07-18 01:20:15'),
(17, 'Shirin Akter', 'shirin.a@gmail.com', 'shirin', NULL, 'upload/no-photo.png', 'Rajshahi er nurse.', '$2y$12$2Kt1iF8xE8MaGGPC0GijLOWRaEfxn8xUWnF0P42k72TgvQBaFFrz.', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-14 01:20:15', '2025-07-18 01:20:15'),
(18, 'Jannat Ara', 'jannat.a@gmail.com', 'jannat', NULL, 'upload/no-photo.png', 'Barisal er housewife.', '$2y$12$EalcF/ZGSwvhumfFvSJ9/.7VsGWiglGRC7zfYFlhE7/d/5AU5FjqS', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-18 01:20:15', '2025-07-18 01:20:15'),
(19, 'Habib Rahman', 'habib.r@gmail.com', 'habib', NULL, 'upload/no-photo.png', 'Comilla er shopkeeper.', '$2y$12$/Y36C9IAVm7ATS1SqgJnV.zNSf02NagpJv3KlnZo/HnSMmByxJHsW', 'user', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-17 01:20:16', '2025-07-18 01:20:16'),
(20, 'Anisur Rahman', 'anisur.r@gmail.com', 'anisur', NULL, 'upload/no-photo.png', 'Dhaka er banker.', '$2y$12$n/z.ExW8oWz6DP8YEjRe7uItQASN8RSEFGGLXzf9tTjjW3ou8FyKO', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-10 01:20:16', '2025-07-18 01:20:16'),
(21, 'Mamun Hossain', 'mamun.h@gmail.com', 'mamun', NULL, 'upload/no-photo.png', 'Sylhet e student.', '$2y$12$qZAxp6LwyvwwBs5nCm7glu06yqHn2YdGThmVRyu6IU2Aah5nILxgW', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-17 01:20:17', '2025-07-18 01:20:17'),
(22, 'Asma Khatun', 'asma.k@gmail.com', 'asma', NULL, 'upload/no-photo.png', 'Khulna er tailor.', '$2y$12$xs7TpVjFtUb8a67x8R7M9erw0VY5w9whjp.ABLOXErY3DhbIfUX42', 'user', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-05 01:20:17', '2025-07-18 01:20:17'),
(23, 'Bashir Uddin', 'bashir.u@gmail.com', 'bashir', NULL, 'upload/no-photo.png', 'Rajshahi er driver.', '$2y$12$.4rpSQCtjPiscu2ym711cOwM7.BDiji6U7jEZdwL19Jx0xRuRpsya', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-23 01:20:18', '2025-07-18 01:20:18'),
(24, 'Morshed Alam', 'morshed.a@gmail.com', 'morshed', NULL, 'upload/no-photo.png', 'Barisal e deliveryman.', '$2y$12$HzKUbY93GP5k0wtAiPMDVeMIrbd/KTcOinMFkFjfgOLN92eomRGQq', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-28 01:20:18', '2025-07-18 01:20:18'),
(25, 'Rokeya Begum', 'rokeya.b@gmail.com', 'rokeya', NULL, 'upload/profile/admin/1838682613291206.jpg', NULL, '$2y$12$.DQi9Mp3ILgLlBRIoMiwbea387XKhJDD3Dk5tPvxk8Qyiyr1tL462', 'user', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-29 01:20:18', '2025-07-25 23:27:44'),
(26, 'Liton Mia', 'liton.m@gmail.com', 'liton', NULL, 'upload/no-photo.png', 'Narayanganj er mechanic.', '$2y$12$cCvRkCyTejdeOaMvb/idIODO5WwciAv.RWPQljCLkvLSBAsScoIE6', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-22 01:20:19', '2025-07-18 01:20:19'),
(27, 'Polash Hossain', 'polash.h@gmail.com', 'polash', NULL, 'upload/no-photo.png', 'Dhaka er student.', '$2y$12$3.1vTZ3uWeeqnBOfTTQZve/g94Dbmm/h7vyW30v7UvIPygcz5.A6q', 'user', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-09 01:20:19', '2025-07-18 01:20:19'),
(28, 'Ruhul Amin', 'ruhul.a@gmail.com', 'ruhul', NULL, 'upload/no-photo.png', 'Comilla er manager.', '$2y$12$YvrTixSVgIFcOJ8glrs4reifn0CTifSd4GCKgIPJF12WdqjxVQEEO', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-24 01:20:19', '2025-07-18 01:20:19'),
(29, 'Mim Akter', 'mim.a@gmail.com', 'mim', NULL, 'upload/no-photo.png', 'Sylhet e cashier.', '$2y$12$0D2zRUXI0DBCAQ8MEeDbKusTvUHDQ/5v2WHeGQ6uYCH3km5tIa2hO', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-09 01:20:20', '2025-07-18 01:20:20'),
(30, 'Sumon Khan', 'sumon.k@gmail.com', 'sumon', NULL, 'upload/no-photo.png', 'Khulna e deliveryboy.', '$2y$12$qWUABIRapHOX0bzpZu0bb.9ob2Nw5LJiYw.LFQYE5BMiOu3GNyxBK', 'user', '0', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-18 01:20:20', '2025-07-18 01:20:20'),
(31, 'Jahidul Islam', 'jahidul.i@gmail.com', 'jahidul', NULL, 'upload/no-photo.png', 'Dhaka er graphic designer.', '$2y$12$mXbYHK1ejnwE5xYhLCmix.ywzyWO5M3CyNvWxo0f/dwkc2cPgsa/a', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-06-22 01:20:21', '2025-07-18 01:20:21'),
(38, 'Jarin', 'jarin@gmail.com', 'jarbd360', NULL, 'upload/profile/admin/1838642762750341.jpg', NULL, '$2y$12$S.C8gKzT/PKigbIhmIUgLOZvqgSbyFIo52O6Gjd/c4TeWew1upA8.', 'admin', '1', NULL, NULL, NULL, NULL, NULL, NULL, '2025-07-25 11:59:40', '2025-07-25 11:59:40'),
(39, 'Shuva', 'shuva@gmail.com', 'shuvabd360', NULL, 'upload/profile/admin/1838688172115869.jpg', NULL, '$2y$12$KRgPSLsfSwbiXDC4tAZDCuZBF2Tm5Fe95o5cjTVpGTk7Kpd5VxktS', 'user', '1', NULL, NULL, NULL, NULL, NULL, 'L11IGAk8KeQyxBXobCUmrXgSCuwqxAkQHq3D90Kb855beOCDb5hbo8hKw7wy', '2025-07-26 00:00:45', '2025-07-26 00:01:25');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
