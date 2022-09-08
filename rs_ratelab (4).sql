-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 04:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rs_ratelab`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `impression` varchar(100) DEFAULT NULL,
  `click` varchar(100) DEFAULT NULL,
  `redirect` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `script` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `type`, `size`, `impression`, `click`, `redirect`, `image`, `script`, `status`, `created_at`, `updated_at`) VALUES
(1, 'image', '300x250', '180', '2', 'http://rs_ratelab.com/admin/ads_control', '1650770847_33192271efd5202ce46a.jpg', '', 1, '2022-03-31 11:37:35', '2022-05-18 06:28:46'),
(2, 'image', '728x90', '179', '2', 'http://rs_ratelab.com/admin/ads_control', '1650770825_26df2e61c3dfc1d2dfc1.png', '', 1, '2022-04-02 08:10:50', '2022-06-09 11:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Plus points', '                                              Stylish Brands\r\n                                      ', '1649676145_257b851c74082da60c27.jpg', '2022-04-11 10:12:16', '2022-04-11 11:22:25'),
(3, 'Maecenas nisi libero, gravida eget pulvinar quis, faucibus in ipsum. Mauris maximus sagittis velit, ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor in nisi non efficitur. Curabitur porta, arcu malesuada efficitur ultricies, lectus risus imperdiet orci, ut varius ante enim non risus. Duis volutpat orci eget vulputate sollicitudin. Vestibulum commodo est ut velit porttitor pretium. Integer aliquet arcu mauris, vel cursus elit pulvinar a. Duis ante dui, aliquam dapibus lobortis sed, dignissim nec justo. Morbi mattis quam at enim rhoncus, sit amet feugiat urna eleifend. Donec molestie iaculis velit, et sodales sem dignissim in. Mauris ac dignissim diam. In fringilla quis justo id lacinia. Nam ante sapien, porttitor sed varius eu, egestas sed justo. Aenean placerat velit eget arcu elementum placerat. Nam sollicitudin volutpat diam ac lacinia. Suspendisse nec augue et ante rutrum porttitor.\r\n\r\nCurabitur vulputate, enim vitae ultricies vulputate, velit magna tincidunt leo, sit amet facilisis enim turpis a purus. Quisque iaculis, diam ut pharetra luctus, tortor diam consectetur sem, eget finibus enim nisi ut sapien. Nulla et ante mattis, dapibus mi a, iaculis augue. Nullam efficitur ex vitae tellus pretium dictum. Proin eu metus nunc. Suspendisse potenti. Ut suscipit, odio quis ornare faucibus, libero velit consectetur turpis, vel vestibulum nunc justo vel urna. Nulla sagittis ultrices sapien, quis porta diam rutrum ut. Nullam congue mauris quis metus vestibulum pretium. Donec nec tempus mauris, a pellentesque augue. Cras iaculis metus non purus elementum, eu ullamcorper quam posuere. Quisque scelerisque dapibus neque, in porta ligula consequat non. Nunc diam orci, vulputate ut posuere ac, malesuada nec metus. Aliquam consectetur turpis lacus, at pellentesque ante ornare sed. Integer in finibus enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n\r\nProin laoreet lectus eget euismod bibendum. Nam auctor velit enim, at tincidunt felis gravida sit amet.\r\nPraesent molestie nulla risus, in varius nisl blandit vitae. Integer cursus sollicitudin ante, sit amet pharetra\r\nfelis fermentum ac. Morbi facilisis malesuada gravida. Nullam leo enim, sollicitudin et luctus quis, lacinia a nulla.\r\nMaecenas nisi libero, gravida eget pulvinar quis, faucibus in ipsum. Mauris maximus sagittis velit, et cursus arcu bibendum at\r\nNullam sit amet pharetra lacus, in egestas velit. Nulla vehicula, eros vitae tristique lacinia, est enim ultricies mi, vitae auctor sem ex in magna.\r\nFusce posuere posuere sapien, in rutrum lectus molestie quis. Vestibulum tristique dictum aliquet.\r\n                                            ', '1650187271_638d92b1e5121b8c18ee.jpg', '2022-04-17 09:21:11', '2022-04-17 09:21:11'),
(4, 'Nothing can describe that feeling when you\'ve won a Test match with your team\'', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor in nisi non efficitur. Curabitur porta, arcu malesuada efficitur ultricies, lectus risus imperdiet orci, ut varius ante enim non risus. Duis volutpat orci eget vulputate sollicitudin. Vestibulum commodo est ut velit porttitor pretium. Integer aliquet arcu mauris, vel cursus elit pulvinar a. Duis ante dui, aliquam dapibus lobortis sed, dignissim nec justo. Morbi mattis quam at enim rhoncus, sit amet feugiat urna eleifend. Donec molestie iaculis velit, et sodales sem dignissim in. Mauris ac dignissim diam. In fringilla quis justo id lacinia. Nam ante sapien, porttitor sed varius eu, egestas sed justo. Aenean placerat velit eget arcu elementum placerat. Nam sollicitudin volutpat diam ac lacinia. Suspendisse nec augue et ante rutrum porttitor.\r\n\r\nCurabitur vulputate, enim vitae ultricies vulputate, velit magna tincidunt leo, sit amet facilisis enim turpis a purus. Quisque iaculis, diam ut pharetra luctus, tortor diam consectetur sem, eget finibus enim nisi ut sapien. Nulla et ante mattis, dapibus mi a, iaculis augue. Nullam efficitur ex vitae tellus pretium dictum. Proin eu metus nunc. Suspendisse potenti. Ut suscipit, odio quis ornare faucibus, libero velit consectetur turpis, vel vestibulum nunc justo vel urna. Nulla sagittis ultrices sapien, quis porta diam rutrum ut. Nullam congue mauris quis metus vestibulum pretium. Donec nec tempus mauris, a pellentesque augue. Cras iaculis metus non purus elementum, eu ullamcorper quam posuere. Quisque scelerisque dapibus neque, in porta ligula consequat non. Nunc diam orci, vulputate ut posuere ac, malesuada nec metus. Aliquam consectetur turpis lacus, at pellentesque ante ornare sed. Integer in finibus enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n\r\nProin laoreet lectus eget euismod bibendum. Nam auctor velit enim, at tincidunt felis gravida sit amet.\r\nPraesent molestie nulla risus, in varius nisl blandit vitae. Integer cursus sollicitudin ante, sit amet pharetra\r\nfelis fermentum ac. Morbi facilisis malesuada gravida. Nullam leo enim, sollicitudin et luctus quis, lacinia a nulla.\r\nMaecenas nisi libero, gravida eget pulvinar quis, faucibus in ipsum. Mauris maximus sagittis velit, et cursus arcu bibendum at\r\nNullam sit amet pharetra lacus, in egestas velit. Nulla vehicula, eros vitae tristique lacinia, est enim ultricies mi, vitae auctor sem ex in magna.\r\nFusce posuere posuere sapien, in rutrum lectus molestie quis. Vestibulum tristique dictum aliquet.\r\n                                            ', '1650187369_f9162528f487658ea394.jpg', '2022-04-17 09:22:49', '2022-04-17 09:22:49'),
(5, 'Musk says Starlink active in Ukraine as Russian invasion disrupts internet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor in nisi non efficitur. Curabitur porta, arcu malesuada efficitur ultricies, lectus risus imperdiet orci, ut varius ante enim non risus. Duis volutpat orci eget vulputate sollicitudin. Vestibulum commodo est ut velit porttitor pretium. Integer aliquet arcu mauris, vel cursus elit pulvinar a. Duis ante dui, aliquam dapibus lobortis sed, dignissim nec justo. Morbi mattis quam at enim rhoncus, sit amet feugiat urna eleifend. Donec molestie iaculis velit, et sodales sem dignissim in. Mauris ac dignissim diam. In fringilla quis justo id lacinia. Nam ante sapien, porttitor sed varius eu, egestas sed justo. Aenean placerat velit eget arcu elementum placerat. Nam sollicitudin volutpat diam ac lacinia. Suspendisse nec augue et ante rutrum porttitor.Curabitur vulputate, enim vitae ultricies vulputate, velit magna tincidunt leo, sit amet facilisis enim turpis a purus. Quisque iaculis, diam ut pharetra luctus, tortor diam consectetur sem, eget finibus enim nisi ut sapien. Nulla et ante mattis, dapibus mi a, iaculis augue. Nullam efficitur ex vitae tellus pretium dictum. Proin eu metus nunc. Suspendisse potenti. Ut suscipit, odio quis ornare faucibus, libero velit consectetur turpis, vel vestibulum nunc justo vel urna. Nulla sagittis ultrices sapien, quis porta diam rutrum ut. Nullam congue mauris quis metus vestibulum pretium. Donec nec tempus mauris, a pellentesque augue. Cras iaculis metus non purus elementum, eu ullamcorper quam posuere. Quisque scelerisque dapibus neque, in porta ligula consequat non. Nunc diam orci, vulputate ut posuere ac, malesuada nec metus. Aliquam consectetur turpis lacus, at pellentesque ante ornare sed. Integer in finibus enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Proin laoreet lectus eget euismod bibendum. Nam auctor velit enim, at tincidunt felis gravida sit amet.Praesent molestie nulla risus, in varius nisl blandit vitae. Integer cursus sollicitudin ante, sit amet pharetra.felis fermentum ac. Morbi facilisis malesuada gravida. Nullam leo enim, sollicitudin et luctus quis, lacinia a nulla.Maecenas nisi libero, gravida eget pulvinar quis, faucibus in ipsum. Mauris maximus sagittis velit, et cursus arcu bibendum atNullam sit amet pharetra lacus, in egestas velit. Nulla vehicula, eros vitae tristique lacinia, est enim ultricies mi, vitae auctor sem ex in magna.Fusce posuere posuere sapien, in rutrum lectus molestie quis. Vestibulum tristique dictum aliquet.\r\n                                            ', '1650187415_dd3dbdd3a99b8100b640.jpg', '2022-04-17 09:23:35', '2022-04-17 09:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `category_icon` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_icon`, `status`, `created_at`, `updated_at`) VALUES
(1, ' Education', 'fas fa-archive', 0, '2022-03-30 14:10:10', '2022-04-06 03:30:30'),
(2, 'Cars 2', 'fas fa-desktop', 0, '2022-03-30 14:20:56', '2022-03-30 14:20:56'),
(3, 'Cars', 'fas fa-dice-d6', 0, '2022-03-30 14:22:03', '2022-03-30 14:22:03'),
(4, 'Jewellry', 'fas fa-adjust', 0, '2022-03-30 14:22:29', '2022-03-30 14:22:29'),
(5, 'Banks', 'fab fa-algolia', 0, '2022-03-30 14:23:33', '2022-04-06 03:27:43'),
(6, 'Travel Agency', 'fab fa-pied-piper-pp', 0, '2022-04-06 03:31:50', '2022-04-06 03:31:50'),
(7, 'Al falah bank', 'fab fa-adn', 0, '2022-04-20 11:48:39', '2022-04-20 11:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `choose_reason_items`
--

CREATE TABLE `choose_reason_items` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choose_reason_items`
--

INSERT INTO `choose_reason_items` (`id`, `title`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Trusted Platforms', 'Allah Voroshaa', 'fab fa-adn', '2022-04-12 05:47:28', '2022-04-12 08:24:15'),
(2, 'Loyalty and Rewards', 'Allah maf koro', 'far fa-address-card', '2022-04-12 05:49:46', '2022-04-12 05:49:46'),
(4, 'Reviews and Ratings', 'Let\'s See', 'fas fa-star', '2022-04-12 06:31:18', '2022-04-12 06:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `company_address` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `description` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `category_id`, `user_id`, `company_name`, `email_address`, `tags`, `image`, `url`, `company_address`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 'IELTS', 'nazmul@sahajjo.com', 'edu', '1652079687_ad7025107c4d034bae79.jfif', 'http://wd.rssoft.win/matchmade/', 'bonosri,dhakas', 1, 'ddddddd', '2022-04-02 11:37:04', '2022-05-09 07:01:27'),
(2, 3, 8, 'anywash', 'nazmul12@sahajjo.com', 'dddd', '1652007593_f399ae6f28943e2efbe8.png', 'http://rs_ratelab.com/user/company/create', 'Dhaka', 1, 'hello', '2022-04-03 04:14:56', '2022-05-08 10:59:53'),
(3, 5, 9, 'alibaba', 'nazmul654@sahajjo.com', 'dddd', '1648981414_2261f72b7a7b2fc37e2c.jpg', 'http://rs_ratelab.com/user/company/create', 'Rupgonj, Narayangonj', 2, 'ffffff', '2022-04-03 10:23:34', '2022-04-25 08:26:50'),
(4, 4, 13, 'billers', 'shoron96@gmail.com', 'dddd', '1649215017_f074e8a63564f1417f93.jpg', 'http://rs_ratelab.com/user/company/create', 'Rupgonj, Narayangonj', 1, 'ddddddd', '2022-04-06 03:16:57', '2022-04-06 03:22:19'),
(5, 1, 13, 'Retina Coaching', 'nad@gmail.com', 'edu,bd', '1649216048_f49e029c04f8f184587a.jpg', 'http://rs_ratelab.com/user/company/create', 'Dhaka', 1, 'start', '2022-04-06 03:34:08', '2022-04-06 03:38:37'),
(6, 1, 8, 'IT company', 'nazu@gmail.com', 'edu', '1652605037_5e46436c8632d6fd5c64.jpg', 'http://wd.rssoft.win/matchmade/', 'bonosri', 0, 'Hello frnds', '2022-05-15 08:57:17', '2022-05-15 09:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `company_reviews`
--

CREATE TABLE `company_reviews` (
  `id` int(11) UNSIGNED NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_rating` varchar(100) DEFAULT NULL,
  `company_review` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_reviews`
--

INSERT INTO `company_reviews` (`id`, `company_id`, `user_id`, `company_rating`, `company_review`, `created_at`, `updated_at`) VALUES
(59, 1, 13, '1', 'hello frnds                                \r\n                               ', '2022-04-06 03:23:20', '2022-05-09 05:05:39'),
(60, 2, 8, '2', 'dddd                                \r\n                               ', '2022-04-06 09:40:27', '2022-05-09 05:05:48'),
(62, 2, 8, '2', 'dddd                                \r\n                               ', '2022-03-06 09:40:27', '2022-05-09 05:07:02'),
(63, 2, 8, '2', 'dddd                                \r\n                               ', '2021-04-06 09:40:27', '2022-05-09 05:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_items`
--

CREATE TABLE `contact_us_items` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us_items`
--

INSERT INTO `contact_us_items` (`id`, `title`, `icon`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Address', 'fab fa-adn', 'Uttara, Texas-1230, USA', '2022-04-12 10:04:21', '2022-04-12 10:37:52'),
(2, 'Mobile', 'fas fa-certificate', '+88123456789', '2022-04-12 10:05:40', '2022-04-12 10:38:04'),
(3, 'E-mail', 'fas fa-envelope', 'demo.support@gmail.com', '2022-04-12 10:07:00', '2022-04-12 10:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `cta_items`
--

CREATE TABLE `cta_items` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `button_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cta_items`
--

INSERT INTO `cta_items` (`id`, `title`, `description`, `icon`, `url`, `button_name`, `created_at`, `updated_at`) VALUES
(1, 'Give Your Real Review', 'sdfsdf', 'fas fa-ambulance', 'login', 'Join With Us', '2022-04-13 03:38:50', '2022-04-13 04:25:52'),
(2, 'Show your brand trust', 'Alhamdulilallah', 'fas fa-adjust', 'user_registration', 'Get Started', '2022-04-13 03:43:57', '2022-05-16 05:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `faq_items`
--

CREATE TABLE `faq_items` (
  `id` int(11) UNSIGNED NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq_items`
--

INSERT INTO `faq_items` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Why is Revlab?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor in nisi non efficitur. Curabitur porta, arcu malesuada efficitur ultricies, lectus risus imperdiet orci, ut varius ante enim non risus. Duis volutpat orci eget vulputate sollicitudin. Vestibulum commodo est ut velit porttitor pretium. Integer aliquet arcu mauris, vel cursus elit pulvinar a. Duis ante dui, aliquam dapibus lobortis sed, dignissim nec justo. Morbi mattis quam at enim rhoncus, sit amet feugiat urna eleifend. Donec molestie iaculis velit, et sodales sem dignissim in. Mauris ac dignissim diam. In fringilla quis justo id lacinia. Nam ante sapien, porttitor sed varius eu, egestas sed justo. Aenean placerat velit eget arcu elementum placerat. Nam sollicitudin volutpat diam ac lacinia. Suspendisse nec augue et ante rutrum porttitor.', '2022-04-13 06:51:09', '2022-04-13 06:51:09'),
(2, 'Why Choice Revlab is the best one ?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor in nisi non efficitur. Curabitur porta, arcu malesuada efficitur ultricies, lectus risus imperdiet orci, ut varius ante enim non risus. Duis volutpat orci eget vulputate sollicitudin. Vestibulum commodo est ut velit porttitor pretium. Integer aliquet arcu mauris, vel cursus elit pulvinar a. Duis ante dui, aliquam dapibus lobortis sed, dignissim nec justo. Morbi mattis quam at enim rhoncus, sit amet feugiat urna eleifend. Donec molestie iaculis velit, et sodales sem dignissim in. Mauris ac dignissim diam. In fringilla quis justo id lacinia. Nam ante sapien, porttitor sed varius eu, egestas sed justo. Aenean placerat velit eget arcu elementum placerat. Nam sollicitudin volutpat diam ac lacinia. Suspendisse nec augue et ante rutrum porttitor.', '2022-04-13 06:51:43', '2022-04-13 06:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_settings`
--

CREATE TABLE `frontend_settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `group_name` varchar(100) DEFAULT NULL,
  `settings_name` varchar(100) DEFAULT NULL,
  `settings_value` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `frontend_settings`
--

INSERT INTO `frontend_settings` (`id`, `group_name`, `settings_name`, `settings_value`, `created_at`, `updated_at`) VALUES
(1, 'manage_templates', 'new_theme', 'theme1', '2022-04-11 04:33:40', '2022-05-17 13:51:00'),
(2, 'manage_pages', NULL, NULL, '2022-04-11 04:33:40', '2022-04-11 04:33:40'),
(3, 'manage_pages', NULL, NULL, '2022-04-11 04:33:40', '2022-04-11 04:33:40'),
(4, 'banner_section', 'heading', 'Accelerate brand growth with Reviews and Loyaltys', '2022-04-11 04:33:40', '2022-04-11 06:18:33'),
(5, 'banner_section', 'sub_heading', 'Read reviews. Write reviews. Find companies.', '2022-04-11 04:33:40', '2022-04-11 05:49:33'),
(6, 'banner_section', 'banner_image', '1650362358_58c56523aab4897a70dd.jpg', '2022-04-11 04:33:40', '2022-04-19 09:59:18'),
(7, 'blog_section', 'heading', 'Our latest new', '2022-04-11 04:33:40', '2022-04-12 09:15:10'),
(8, 'blog_section', 'sub_heading', 'Blog Post', '2022-04-11 04:33:40', '2022-04-11 07:54:12'),
(9, 'breadcrumb', 'breadcrumb_image', '1650701318_12ade305acd6d2a5704f.jpg', '2022-04-11 04:33:40', '2022-04-23 08:08:38'),
(10, 'category_section', 'heading', 'Browse Companies by Category', '2022-04-11 04:33:40', '2022-04-21 07:57:26'),
(11, 'why_choose_us', 'heading', 'Given review or Grow brand trust', '2022-04-11 04:33:40', '2022-04-12 11:27:01'),
(12, 'why_choose_us', 'sub_heading', 'Hic ipsum recusandae minima asperiores libero. Expedita consectetur tenetur itaque distinctio animi,', '2022-04-11 04:33:40', '2022-04-12 11:27:01'),
(13, 'company_list_section', 'title', 'Want to give a review?', '2022-04-11 04:33:40', '2022-04-21 10:28:14'),
(14, 'company_list_section', 'button_name', 'Join with us', '2022-04-11 04:33:40', '2022-04-12 08:43:52'),
(15, 'company_list_section', 'link', '/user/login', '2022-04-11 04:33:40', '2022-04-21 10:35:12'),
(16, 'contact_us', 'heading', 'Contact Us', '2022-04-11 04:33:40', '2022-04-12 09:24:39'),
(17, 'cta_section', 'heading', 'Given review or Grow brand trust', '2022-04-11 04:33:40', '2022-04-12 11:28:44'),
(18, 'cta_section', 'sub_heading', 'Hic ipsum recusandae minima asperiores libero. Expedita consectetur tenetur itaque distinctio animi,', '2022-04-11 04:33:40', '2022-04-12 11:28:44'),
(19, 'email_authentication', 'heading', 'Select Your Account', '2022-04-11 04:33:40', '2022-04-13 08:28:38'),
(20, 'email_authentication', 'sub_heading', 'Enter your email or username and submit to reset your password.', '2022-04-11 04:33:40', '2022-04-13 08:28:38'),
(21, 'email_authentication', 'email_authentication', '1650701025_8b867f5bedb7646a462a.jpg', '2022-04-11 04:33:40', '2022-04-23 08:03:45'),
(22, 'faq_section', 'heading', 'FAQ\'s', '2022-04-11 04:33:40', '2022-05-17 06:13:51'),
(23, 'faq_section', 'sub_heading', 'Asked Us If You Have Any Question?', '2022-04-11 04:33:40', '2022-05-17 06:13:52'),
(24, 'faq_section', 'faq_image', '1649829668_a164ed35b7b243df3431.png', '2022-04-11 04:33:40', '2022-04-13 06:01:08'),
(25, 'footer_section', 'heading', 'Footer', '2022-04-11 04:33:40', '2022-04-13 08:05:26'),
(26, 'footer_section', 'description', 'Dolor sit amet consectetur adipisicing elit. Eligendi illo consequuntur eaque. Quidem saepe molestia', '2022-04-11 04:33:40', '2022-04-13 08:05:26'),
(27, 'forgot_password', 'heading', 'Select Your Account', '2022-04-11 04:33:40', '2022-04-23 11:33:42'),
(28, 'forgot_password', 'sub_heading', 'Enter your email or username and submit to reset your password.', '2022-04-11 04:33:40', '2022-04-23 11:33:42'),
(29, 'forgot_password', 'forgot_image', '1650713736_0f89b92297bf3a47237c.jpg', '2022-04-11 04:33:40', '2022-04-23 11:35:36'),
(30, 'login_section', 'greeting', 'Welcome Back', '2022-04-11 04:33:40', '2022-04-13 08:54:09'),
(31, 'login_section', 'heading', 'Sign in to your account', '2022-04-11 04:33:40', '2022-04-13 08:54:09'),
(32, 'login_section', 'login_image', '1650686461_e7e5501c731993a7b02b.jpg', '2022-04-11 04:33:40', '2022-04-23 04:01:01'),
(33, 'mobile_authentication', 'heading', 'Verify Your Mobile Number', '2022-04-11 04:33:40', '2022-04-13 09:06:05'),
(34, 'mobile_authentication', 'sub_heading', 'A 6 digit verification code has been sent to your mobile please check your inbox and submit that cod', '2022-04-11 04:33:40', '2022-04-13 09:06:05'),
(35, 'mobile_authentication', 'mobile_image', '1649840765_3e73e61137b7bf9e6de7.jpg', '2022-04-11 04:33:40', '2022-04-13 09:06:05'),
(36, 'register_section', 'greeting', 'Welcome to Rs Ratelab', '2022-04-11 04:33:40', '2022-04-23 04:09:54'),
(37, 'register_section', 'heading', 'Create an Account', '2022-04-11 04:33:40', '2022-04-16 03:44:14'),
(38, 'register_section', 'register_image', '1650687007_4a45fe2426d6da01a51b.jpg', '2022-04-11 04:33:40', '2022-04-23 04:10:07'),
(39, 'reset_password', 'heading', 'Reset Password', '2022-04-11 04:33:40', '2022-04-16 04:11:00'),
(40, 'reset_password', 'sub_heading', 'You have confirmed your account. Now you can change the password. Please set a secure and strong pas', '2022-04-11 04:33:40', '2022-04-16 04:11:00'),
(41, 'reset_password', 'reset_image', '1650777567_28e0309eddb6bcc0b958.jpg', '2022-04-11 04:33:40', '2022-04-24 05:19:27'),
(42, 'review', 'heading', 'Recent Review', '2022-04-11 04:33:40', '2022-04-16 04:21:22'),
(43, 'testimonial', 'heading', 'What Client Says About Us', '2022-04-11 04:33:40', '2022-04-16 06:10:26'),
(44, 'testimonial', 'sub_heading', 'Our User Review', '2022-04-11 04:33:40', '2022-04-16 06:10:26'),
(45, 'testimonial', 'testimonial_image', '1650454172_8ceb0c4e0dc20ce34099.jpg', '2022-04-11 04:33:40', '2022-04-20 11:29:32'),
(46, 'verification_code', 'heading', 'Verify Your Account', '2022-04-11 04:33:40', '2022-04-16 11:21:15'),
(47, 'verification_code', 'sub_heading', 'A 6 digit verification code has been sent to your email please check your email and submit that code', '2022-04-11 04:33:40', '2022-04-16 11:21:15'),
(48, 'verification_code', 'verification_image', '1652761608_624a4541460e9b6ef6ee.jpg', '2022-04-11 04:33:40', '2022-05-17 04:30:33'),
(49, 'theme_two_additional_image', 'image_input1', '1652763593_e41d3a3f67b5dc2e6c1b.png', '2022-04-11 04:33:40', '2022-05-17 04:59:53'),
(50, 'theme_two_additional_image', 'image_input2', '1652763593_2fab66558e65adaa436a.jpg', '2022-04-11 04:33:40', '2022-05-17 04:59:53'),
(51, 'theme_two_additional_image', 'image_input3', '1652763593_1d7f216d75d695fd1c45.jpg', '2022-04-11 04:33:40', '2022-05-17 04:59:53'),
(52, 'theme_two_additional_image', 'image_input4', '1652763695_003204db1b42638e7f2a.jpg', '2022-04-11 04:33:40', '2022-05-17 05:01:35'),
(53, 'theme_two_additional_image', 'image_input5', '1652763593_00a8d5323c8995290c58.png', '2022-04-11 04:33:40', '2022-05-17 04:59:54'),
(54, 'collaboration_section', 'heading', 'Given Grow or review brand value', '2022-04-11 04:33:40', '2022-05-17 06:34:49'),
(55, 'collaboration_section', 'sub_heading', 'Expedita consectetur tenetur itaque distinctio animi, officiis illum dolorem excepturi minus blanditiis nam porro dignissimos commodi numquam soluta quam.', '2022-04-11 04:33:40', '2022-05-17 06:35:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-03-23-054937', 'App\\Database\\Migrations\\Users', 'default', 'App', 1648023900, 1),
(2, '2022-03-23-055900', 'App\\Database\\Migrations\\UserTypes', 'default', 'App', 1648023901, 1),
(3, '2022-03-23-055940', 'App\\Database\\Migrations\\UserDetails', 'default', 'App', 1648023901, 1),
(4, '2022-03-29-041957', 'App\\Database\\Migrations\\Report', 'default', 'App', 1648527955, 2),
(5, '2022-03-30-135852', 'App\\Database\\Migrations\\Category', 'default', 'App', 1648649057, 3),
(6, '2022-03-31-105643', 'App\\Database\\Migrations\\Advertisement', 'default', 'App', 1648876354, 4),
(7, '2022-04-02-050348', 'App\\Database\\Migrations\\Company', 'default', 'App', 1648876355, 4),
(8, '2022-04-02-084848', 'App\\Database\\Migrations\\Company', 'default', 'App', 1648889382, 5),
(9, '2022-04-02-090732', 'App\\Database\\Migrations\\Company', 'default', 'App', 1648890529, 6),
(10, '2022-04-02-093334', 'App\\Database\\Migrations\\Company', 'default', 'App', 1648892134, 7),
(11, '2022-04-02-095040', 'App\\Database\\Migrations\\Company', 'default', 'App', 1648893187, 8),
(12, '2022-04-02-113539', 'App\\Database\\Migrations\\Company', 'default', 'App', 1648899353, 9),
(13, '2022-04-04-141316', 'App\\Database\\Migrations\\CompanyReviews', 'default', 'App', 1649081865, 10),
(14, '2022-04-06-040044', 'App\\Database\\Migrations\\Users', 'default', 'App', 1649217682, 11),
(15, '2022-04-06-040810', 'App\\Database\\Migrations\\UserDetails', 'default', 'App', 1649218109, 12),
(16, '2022-04-09-061748', 'App\\Database\\Migrations\\SupportTicket', 'default', 'App', 1649485609, 13),
(17, '2022-04-09-073200', 'App\\Database\\Migrations\\SupportTicket', 'default', 'App', 1649489582, 14),
(18, '2022-04-09-073354', 'App\\Database\\Migrations\\SupportTicket', 'default', 'App', 1649489689, 15),
(19, '2022-04-11-042104', 'App\\Database\\Migrations\\FrontendManager', 'default', 'App', 1649651143, 16),
(20, '2022-04-11-075744', 'App\\Database\\Migrations\\Blog', 'default', 'App', 1649664086, 17),
(21, '2022-04-11-100014', 'App\\Database\\Migrations\\Blog', 'default', 'App', 1649671241, 18),
(22, '2022-04-12-042654', 'App\\Database\\Migrations\\ChooseReason', 'default', 'App', 1649737829, 19),
(23, '2022-04-12-093228', 'App\\Database\\Migrations\\ContactUs', 'default', 'App', 1649756073, 20),
(24, '2022-04-12-093517', 'App\\Database\\Migrations\\ContactUs', 'default', 'App', 1649756137, 21),
(25, '2022-04-12-113518', 'App\\Database\\Migrations\\CtaItem', 'default', 'App', 1649763871, 22),
(26, '2022-04-13-044558', 'App\\Database\\Migrations\\Mstemplate', 'default', 'App', 1649827366, 23),
(27, '2022-04-13-044618', 'App\\Database\\Migrations\\Setting', 'default', 'App', 1649827430, 24),
(28, '2022-04-13-061501', 'App\\Database\\Migrations\\FaqItem', 'default', 'App', 1649830695, 25),
(29, '2022-04-13-064945', 'App\\Database\\Migrations\\FaqItem', 'default', 'App', 1649832626, 26),
(30, '2022-04-13-092426', 'App\\Database\\Migrations\\PolicyPages', 'default', 'App', 1649842026, 27),
(31, '2022-04-16-044507', 'App\\Database\\Migrations\\SocialIcon', 'default', 'App', 1650084516, 28),
(32, '2022-04-16-075015', 'App\\Database\\Migrations\\TestimonialItem', 'default', 'App', 1650095625, 29),
(33, '2022-04-17-035200', 'App\\Database\\Migrations\\NewPages', 'default', 'App', 1650167768, 30),
(34, '2022-04-17-091712', 'App\\Database\\Migrations\\Blog', 'default', 'App', 1650187111, 31),
(35, '2022-04-20-091344', 'App\\Database\\Migrations\\UserDetails', 'default', 'App', 1650446076, 32),
(36, '2022-04-20-091634', 'App\\Database\\Migrations\\UserDetails', 'default', 'App', 1650446324, 33),
(37, '2022-04-25-032716', 'App\\Database\\Migrations\\Users', 'default', 'App', 1650857398, 34),
(38, '2022-04-25-062653', 'App\\Database\\Migrations\\Users', 'default', 'App', 1650868119, 35),
(39, '2022-04-25-063011', 'App\\Database\\Migrations\\Users', 'default', 'App', 1650868268, 36),
(40, '2022-04-25-064327', 'App\\Database\\Migrations\\Users', 'default', 'App', 1650869158, 37),
(41, '2022-05-17-122806', 'App\\Database\\Migrations\\Subscriber', 'default', 'App', 1652790681, 38);

-- --------------------------------------------------------

--
-- Table structure for table `ms_templates`
--

CREATE TABLE `ms_templates` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `mail_subject` varchar(100) DEFAULT NULL,
  `mail_body` text DEFAULT NULL,
  `mail_status` int(11) DEFAULT NULL,
  `sms_body` text DEFAULT NULL,
  `sms_status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_templates`
--

INSERT INTO `ms_templates` (`id`, `name`, `mail_subject`, `mail_body`, `mail_status`, `sms_body`, `sms_status`, `created_at`, `updated_at`) VALUES
(1, 'Password Reset', 'Password reset link provided by {app_name}', '          <p>Hi {receiver_name}</p>\r\n\r\n          <p>Your request for reset password has been approved from {app_name}. Press the button below to reset the password.</p>\r\n          <p><a href=\"{link}\" class=\"btn btn-primary btn-sm\">Reset Password</a></p>\r\n          <p>We are highly expecting you as soon as possible. Hope you\'ll join us.</p>\r\n          <p>Thanks for being with us.</p>\r\n\r\n          <p>Thanks &amp; Regards,</p>\r\n\r\n          <p>{app_name}</p> ', 1, 'Your account recovery code is: {{code}}', 1, '2022-04-13 05:26:19', '2022-04-24 10:17:45'),
(2, 'Password Reset Confirmation', 'You have Reset your password', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>You have successfully reset your password.</p><p>You changed from&nbsp;IP:&nbsp;<strong>{{ip}}</strong>&nbsp;using&nbsp;<strong>{{browser}}</strong>&nbsp;on&nbsp;<strong>{{operating_system}}&nbsp;</strong>&nbsp;on&nbsp;<strong>{{time}}</strong></p><p><br></p><p><strong style=\"color: rgb(230, 0, 0);\">If you did not changed that, Please contact with us as soon as possible.</strong></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 1, 'Your password has been changed successfully', 0, '2022-04-13 05:26:19', '2022-04-13 05:28:57'),
(3, 'Email Verification', 'Please verify your email address', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>Thanks For join with us.</p><p>Please use below code to verify your email address.</p><p><br></p><p>Your email verification code is:<strong>&nbsp;</strong><strong class=\"ql-size-huge\">{{code}}</strong></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 1, 'Your email verification code is: {{code}}', 1, '2022-04-13 05:26:19', '2022-04-13 05:26:19'),
(4, 'SMS Verification', 'Please verify your phone', 'Your phone verification code is: {{code}}', 0, 'Your phone verification code is: {{code}}', 1, '2022-04-13 05:26:19', '2022-04-13 05:26:19'),
(5, 'Support Ticket Reply', 'Reply Support Ticket', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><h3><strong>A member from our support team has replied to the following ticket:</strong></h3><h3><br></h3><h3><strong>[Ticket#{{ticket_id}}] {{ticket_subject}}</strong></h3><h3><br></h3><h3><strong>Click here to reply:&nbsp;{{link}}</strong></h3><p>----------------------------------------------</p><p>Here is the reply :</p><p>{{reply}}</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 1, '{{subject}}rnrn{{reply}}rnrnrnClick here to reply:  {{link}}', 1, '2022-04-13 05:26:19', '2022-04-13 05:26:19'),
(6, 'Company approved by admin.', 'Your company is approved by admin', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>The {{name}} has been approved successfully.</p><p>By {{site}}</p><p>Feedback: {{feedback}}</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 1, '<div>The {{name}} has been approved successfully.</div><br>rn<div>By {{site}}</div>rn<div>Feedback: {{feedback}}</div>', 1, '2022-04-13 05:26:19', '2022-04-13 05:26:19'),
(7, 'Company rejected by admin.', 'Your company is rejected by admin', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>The {{name}} has been rejected.</p><p>By {{site}}</p><p>Feedback: {{feedback}}</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', 1, '<div>The {{name}} has been rejected.</div>rn<div>By {{site}}</div>rn<div>Feedback: {{feedback}}</div>', 1, '2022-04-13 05:26:19', '2022-04-13 05:26:19'),
(8, 'User Joined', 'A new user has been joined in {app_name}', 'Hi {receiver_name}\r\n\r\nIt\'s a piece of good news that a new user {name} has been joined in our application invited. Hope you will enjoy his work and collaborations.\r\n\r\nThanks for being with us.\r\n\r\nRegards,\r\n\r\n{app_name}', 1, '<div>The {{name}} has been rejected.</div>rn<div>By {{site}}</div>rn<div>Feedback: {{feedback}}</div>', 1, '2022-04-13 05:26:19', '2022-04-13 05:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `new_pages`
--

CREATE TABLE `new_pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `page_name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `selected_section` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `new_pages`
--

INSERT INTO `new_pages` (`id`, `page_name`, `slug`, `selected_section`, `created_at`, `updated_at`) VALUES
(1, 'HOME', 'home', 'Category Section,Why Choose Us,Review,CTA Section,Testimonial,Blog Section,collaboration', '2022-04-17 04:13:08', '2022-05-17 11:09:52'),
(2, 'Blog', 'blog', 'Blog Section,Category Section', '2022-04-17 07:41:33', '2022-04-17 07:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `mail_sub` text DEFAULT NULL,
  `mail_body` text DEFAULT NULL,
  `mail_tags` text DEFAULT NULL,
  `sys_tags` varchar(1000) DEFAULT NULL,
  `sys_content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `mail_sub`, `mail_body`, `mail_tags`, `sys_tags`, `sys_content`) VALUES
(1, 'User invitation formm {app_name}', '                                                                      <p><img src=\"http://property_final.com/uploads/avater.png\" alt=\"app_logo\" height=\"50px\" style=\"border:1px solid black;\"></p><p>Hi {receiver_name}</p>\n\n          <p>Hope this mail finds you well and healthy. We are informing you that you\'ve been invited to our application by {action_by}. It\'ll be a great opportunity to work with you.</p>\n          <p><button class=\"btn btn-primary btn-sm\">Accept Invitation</button></p>\n\n          <p>Thanks &amp; Regards,</p>\n\n          <p>{app_name}</p><p></p>                                           ', 'action_by,app_name,app_logo,receiver_name,invitation_url', NULL, NULL),
(2, 'Password reset link provided by {app_name}', '                               \r\n          <p>Hi {receiver_name}</p>\r\n\r\n          <p>Your request for reset password has been approved from {app_name}. Press the button below to reset the password.</p>\r\n          <p><a href=\"{link}\" class=\"btn btn-primary btn-sm\">Reset Password</a></p>\r\n          <p>We are highly expecting you as soon as possible. Hope you\'ll join us.</p>\r\n          <p>Thanks for being with us.</p>\r\n\r\n          <p>Thanks &amp; Regards,</p>\r\n\r\n          <p>{app_name}</p>                                   ', 'app_name,app_logo,receiver_name,reset_password_url', NULL, NULL),
(3, 'You have been invited to join {app_name} by {action_by}', '                                    <p><img src=\"http://property_final2.com/uploads/empty_image.jpg\" alt=\"app_logo\" height=\"50px\" style=\"border:1px solid black;\"><br></p>                                       <p class=\"text_add\"><br></p>      \r\n          <p>Hello {receiver_name}</p>\r\n\r\n          <p>Your Login credentials are given,\r\n          Email : {email}\r\n          Password : {password}\r\n          To set up your account, please use these credentials and go to the following link.</p>\r\n\r\n          <p><button class=\"btn btn-primary btn-sm\">Go to your account</button></p>\r\n          <p>You can change your password from your account password settings.</p>\r\n          <p>Hope you will find useful!</p>\r\n          <p>Thanks for being with us.</p>\r\n          <p>Regards,</p>  \r\n          <p>Thanks &amp; Regards,</p>\r\n\r\n          <p>{app_name}</p>                                    ', 'action_by,app_name,app_logo,receiver_name,invitation_url,email,password', NULL, NULL),
(4, 'Invoice {invoice_number} for due {date}', '                                            <p class=\"text_add\"><img src=\"#\" alt=\"app_logo\" height=\"50px\" style=\"border:1px solid black;\">{invoice_number}<img src=\"#\" alt=\"logo\" height=\"60px\" style=\"border:1px solid black;\"></p>      \r\n          <p>Hello {receiver_name}</p>\r\n\r\n          <p>I hope you’re well!\r\n          Please see attached invoice {invoice_number}.\r\n          Don’t hesitate to contact us if you have any questions.</p>\r\n\r\n          <p>Thanks for being with us.</p>\r\n\r\n          <p>Regards,</p>  \r\n\r\n          <p>{app_name}</p>                           ', 'app_name,app_logo,receiver_name,invoice_number,date', NULL, NULL),
(5, 'Payment reminder for invoice {invoice_number}', '                                      <p class=\"text_add\">{app_name}{date}{receiver_name}<img src=\"#\" alt=\"app_logo\" height=\"50px\" style=\"border:1px solid black;\">{date}<img src=\"#\" alt=\"logo\" height=\"60px\" style=\"border:1px solid black;\"></p>      \r\n          <p>Hello {receiver_name}</p>\r\n\r\n          <p>We hope that you’re enjoying our service\r\n          We did want to quickly mention that we haven’t received payment from you yet.</p>\r\n          <p>If you have any questions don’t hesitate to reply to this email.</p>\r\n          <p>Thanks for being with us.</p>\r\n\r\n          <p>Regards,</p>  \r\n\r\n          <p>{app_name}</p>                        ', 'app_name,app_logo,receiver_name,invoice_number,date', NULL, NULL),
(6, 'Registration Confirmed', '<p><img src=\"http://property_final.com/uploads/avater.png\" alt=\"app_logo\" height=\"50px\" style=\"border:1px solid black;\"></p><p>Hi {receiver_name}</p>\r\n\r\n          <p>Welcome to our {app_name}.</p>\r\n\r\n          <p>Thanks &amp; Regards,</p>\r\n\r\n          <p>{app_name}</p><p></p> ', 'name,action_by,app_name,app_logo,receiver_name,resource_url', 'app_name', 'A new user has been joined in {app_name}{app_name}'),
(7, 'A new roles has been created in {app_name}', '                    <p>{name}{name}<img src=\"#\" alt=\"logo\" height=\"60px\" style=\"border:1px solid black;\"></p>      \r\n            <p>Hi {receiver_name}</p>\r\n\r\n            <p>It\'s a piece of good news that a new roles named {name} has been created in our application by {action_by}. Please have a look at that.</p>\r\n\r\n            <p><button class=\"btn btn-primary btn-sm\">View Roles</button></p>\r\n            <p>Thanks for being with us.</p>\r\n\r\n            <p>Regards,</p>  \r\n\r\n            <p>{app_name}</p>                   ', 'name,action_by,app_name,app_logo,receiver_name,resource_url', 'name,action_by', 'A new roles named {name} has been created by {action_by}.'),
(8, 'A roles has been updated in {app_name}', '                    <p>{name}{name}<img src=\"#\" alt=\"logo\" height=\"60px\" style=\"border:1px solid black;\"></p>      \r\n            <p>Hi {receiver_name}</p>\r\n\r\n            <p>It\'s a piece of good news that a new roles named {name} has been created in our application by {action_by}. Please have a look at that.</p>\r\n\r\n            <p><button class=\"btn btn-primary btn-sm\">View Roles</button></p>\r\n            <p>Thanks for being with us.</p>         ', 'name,action_by,app_name,app_logo,receiver_name,resource_url', 'name,action_by', 'A roles named {name} has been updated by {action_by}.'),
(9, 'A roles has been deleted in {app_name}', '          <p class=\"text_add\">{name}<img src=\"#\" alt=\"logo\" height=\"60px\" style=\"border:1px solid black;\"></p>      \r\n            <p>Hi {receiver_name}</p>\r\n\r\n            <p>We are going to inform you that a roles named has been deleted from our application by {action_by}.</p>\r\n\r\n            <p>Thanks for being with us.</p>\r\n\r\n            <p>Regards,</p>  \r\n\r\n            <p>{app_name}</p>         ', 'name,action_by,app_name,app_logo,receiver_name', 'name,action_by', 'A roles named {name} has been deleted by {action_by}.');

-- --------------------------------------------------------

--
-- Table structure for table `policy_pages`
--

CREATE TABLE `policy_pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `policy_pages`
--

INSERT INTO `policy_pages` (`id`, `title`, `details`, `created_at`, `updated_at`) VALUES
(2, 'Privacy Policy', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><h3 class=\"mb-3\" style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem !important; font-weight: 600; line-height: 1.3; font-size: 24px; color: rgb(54, 54, 54); margin-right: 0px; margin-left: 0px; font-family: Exo, sans-serif;\">What information do we collect?</h3><h3><div class=\"mb-5\" style=\"margin-bottom: 3rem; font-size: 16px; font-weight: 400; white-space: normal; color: rgb(111, 111, 111); font-family: Nunito, sans-serif;\"><p class=\"font-18\" style=\"color: rgb(91, 110, 136); line-height: 1.7;\">We gather data from you when you register on our site, submit a request, buy any services, react to an overview, or round out a structure. At the point when requesting any assistance or enrolling on our site, as suitable, you might be approached to enter your: name, email address, or telephone number. You may, nonetheless, visit our site anonymously.</p></div></h3><h3 class=\"mb-3\" style=\"line-height: 1.3; font-size: 24px; color: rgb(54, 54, 54); font-family: Exo, sans-serif; margin-bottom: 1rem !important;\">How do we protect your information?</h3><h3><div class=\"mb-5\" style=\"margin-bottom: 3rem; font-size: 16px; font-weight: 400; white-space: normal; color: rgb(111, 111, 111); font-family: Nunito, sans-serif;\"><p class=\"font-18\" style=\"color: rgb(91, 110, 136); line-height: 1.7;\">All provided delicate/credit data is sent through Stripe.<br>After an exchange, your private data (credit cards, social security numbers, financials, and so on) won\'t be put away on our workers.</p></div></h3><h3 class=\"mb-3\" style=\"line-height: 1.3; font-size: 24px; color: rgb(54, 54, 54); font-family: Exo, sans-serif; margin-bottom: 1rem !important;\">Do we disclose any information to outside parties?</h3><h3><div class=\"mb-5\" style=\"margin-bottom: 3rem; font-size: 16px; font-weight: 400; white-space: normal; color: rgb(111, 111, 111); font-family: Nunito, sans-serif;\"><p class=\"font-18\" style=\"color: rgb(91, 110, 136); line-height: 1.7;\">We don\'t sell, exchange, or in any case move to outside gatherings by and by recognizable data. This does exclude confided in outsiders who help us in working our site, leading our business, or adjusting you, since those gatherings consent to keep this data private. We may likewise deliver your data when we accept discharge is suitable to follow the law, implement our site strategies, or ensure our own or others\' rights, property, or wellbeing.</p></div></h3><h3 class=\"mb-3\" style=\"line-height: 1.3; font-size: 24px; color: rgb(54, 54, 54); font-family: Exo, sans-serif; margin-bottom: 1rem !important;\">Children\'s Online Privacy Protection Act Compliance</h3><h3><div class=\"mb-5\" style=\"margin-bottom: 3rem; font-size: 16px; font-weight: 400; white-space: normal; color: rgb(111, 111, 111); font-family: Nunito, sans-serif;\"><p class=\"font-18\" style=\"color: rgb(91, 110, 136); line-height: 1.7;\">We are consistent with the prerequisites of COPPA (Children\'s Online Privacy Protection Act), we don\'t gather any data from anybody under 13 years old. Our site, items, and administrations are completely coordinated to individuals who are in any event 13 years of age or more established.</p></div></h3><h3 class=\"mb-3\" style=\"line-height: 1.3; font-size: 24px; color: rgb(54, 54, 54); font-family: Exo, sans-serif; margin-bottom: 1rem !important;\">Changes to our Privacy Policy</h3><h3><div class=\"mb-5\" style=\"margin-bottom: 3rem; font-size: 16px; font-weight: 400; white-space: normal; color: rgb(111, 111, 111); font-family: Nunito, sans-serif;\"><p class=\"font-18\" style=\"color: rgb(91, 110, 136); line-height: 1.7;\">If we decide to change our privacy policy, we will post those changes on this page.</p></div></h3><h3 class=\"mb-3\" style=\"line-height: 1.3; font-size: 24px; color: rgb(54, 54, 54); font-family: Exo, sans-serif; margin-bottom: 1rem !important;\">How long we retain your information?</h3><h3><div class=\"mb-5\" style=\"margin-bottom: 3rem; font-size: 16px; font-weight: 400; white-space: normal; color: rgb(111, 111, 111); font-family: Nunito, sans-serif;\"><p class=\"font-18\" style=\"color: rgb(91, 110, 136); line-height: 1.7;\">At the point when you register for our site, we cycle and keep your information we have about you however long you don\'t erase the record or withdraw yourself (subject to laws and guidelines).</p></div></h3><h3 class=\"mb-3\" style=\"line-height: 1.3; font-size: 24px; color: rgb(54, 54, 54); font-family: Exo, sans-serif; margin-bottom: 1rem !important;\">What we don’t do with your data</h3><h3><div class=\"mb-5\" style=\"margin-bottom: 3rem; font-size: 16px; font-weight: 400; white-space: normal; color: rgb(111, 111, 111); font-family: Nunito, sans-serif;\"><p class=\"font-18\" style=\"color: rgb(91, 110, 136); line-height: 1.7;\">We don\'t and will never share, unveil, sell, or in any case give your information to different organizations for the promoting of their items or administrations.</p></div></h3></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\" style=\"margin-top: 0px;\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2022-04-13 10:12:52', '2022-04-23 07:45:22'),
(4, 'Terms of Service', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p>We claim all authority to dismiss, end, or handicap any help with or without cause per administrator discretion. This is a Complete independent facilitating, on the off chance that you misuse our ticket or Livechat or emotionally supportive network by submitting solicitations or protests we will impair your record. The solitary time you should reach us about the seaward facilitating is if there is an issue with the worker. We have not many substance limitations and everything is as per laws and guidelines. Try not to join on the off chance that you intend to do anything contrary to the guidelines, we do check these things and we will know, don\'t burn through our own and your time by joining on the off chance that you figure you will have the option to sneak by us and break the terms.</p><ul><li>Configuration requests - If you have a fully managed dedicated server with us then we offer custom PHP/MySQL configurations, firewalls for dedicated IPs, DNS, and httpd configurations.</li><li>Software requests - Cpanel Extension Installation will be granted as long as it does not interfere with the security, stability, and performance of other users on the server.</li><li>Emergency Support - We do not provide emergency support / Phone Support / LiveChat Support. Support may take some hours sometimes.</li><li>Webmaster help - We do not offer any support for webmaster related issues and difficulty including coding, &amp; installs, Error solving. if there is an issue where a library or configuration of the server then we can help you if it\'s possible from our end.</li><li>Backups - We keep backups but we are not responsible for data loss, you are fully responsible for all backups.</li><li>We Don\'t support any child porn or such material.</li><li>No spam-related sites or material, such as email lists, mass mail programs, and scripts, etc.</li><li>No harassing material that may cause people to retaliate against you.</li><li>No phishing pages.</li><li>You may not run any exploitation script from the server. reason can be terminated immediately.</li><li>If Anyone attempting to hack or exploit the server by using your script or hosting, we will terminate your account to keep safe other users.</li><li>Malicious Botnets are strictly forbidden.</li><li>Spam, mass mailing, or email marketing in any way are strictly forbidden here.</li><li>Malicious hacking materials, trojans, viruses, &amp; malicious bots running or for download are forbidden.</li><li>Resource and cronjob abuse is forbidden and will result in suspension or termination.</li><li>Php/CGI proxies are strictly forbidden.</li><li>CGI-IRC is strictly forbidden.</li><li>No fake or disposal mailers, mass mailing, mail bombers, SMS bombers, etc.</li><li>NO CREDIT OR REFUND will be granted for interruptions of service, due to User Agreement violations.</li></ul><h3>Terms &amp; Conditions for Users</h3><p>Before getting to this site, you are consenting to be limited by these site Terms and Conditions of Use, every single appropriate law, and guidelines, and concur that you are answerable for consistency with any material neighborhood laws. If you disagree with any of these terms, you are restricted from utilizing or getting to this site.</p><h3>Support</h3><p>Whenever you have downloaded our item, you may get in touch with us for help through email and we will give a valiant effort to determine your issue. We will attempt to answer using the Email for more modest bug fixes, after which we will refresh the center bundle. Content help is offered to confirmed clients by Tickets as it were. Backing demands made by email and Livechat.</p><p><strong>On the off chance that your help requires extra adjustment of the System, at that point, you have two alternatives:</strong></p><ul><li>Hang tight for additional update discharge.</li><li>Or on the other hand, enlist a specialist (We offer customization for extra charges).</li></ul><h3>Ownership</h3><p>You may not guarantee scholarly or selective possession of any of our items, altered or unmodified. All items are property, we created them. Our items are given \"with no guarantees\" without guarantee of any sort, either communicated or suggested. On no occasion will our juridical individual be subject to any harms including, however not restricted to, immediate, roundabout, extraordinary, accidental, or significant harms or different misfortunes emerging out of the utilization of or powerlessness to utilize our items.</p><h3>Warranty</h3><p>We don\'t offer any guarantee or assurance of these Services in any way. When our Services have been modified we can\'t ensure they will work with all outsider plugins, modules, or internet browsers. Program similarity ought to be tried against the show formats on the demo worker. If you don\'t mind guarantee that the programs you use will work with the component, as we can not ensure that our systems will work with all program mixes.</p><h3>Unauthorized/Illegal Usage</h3><p>You may not utilize our things for any illicit or unapproved reason or may you, in the utilization of the stage, disregard any laws in your locale (counting yet not restricted to copyright laws) just as the laws of your nation and International law. Specifically, it is disallowed to utilize the things on our foundation for pages that advance: brutality, illegal intimidation, hard sexual entertainment, bigotry, obscenity content or warez programming joins.</p><p><br></p><p>You can\'t imitate, copy, duplicate, sell, exchange or adventure any of our segment, utilization of the offered on our things, or admittance to the administration without the express composed consent by us or item proprietor.</p><p><br></p><p>Our Members are liable for all substance posted on the discussion and demo and movement that happens under your record.</p><p><br></p><p>We hold the chance of hindering your participation account quickly if we will think about a particularly not allowed conduct.</p><p><br></p><p>If you make a record on our site, you are liable for keeping up the security of your record, and you are completely answerable for all exercises that happen under the record and some other activities taken regarding the record. You should quickly inform us, of any unapproved employments of your record or some other penetrates of security.</p><h3>Fiverr, Seoclerks Sellers Or Affiliates</h3><p>We do NOT ensure full SEO campaign conveyance within 24 hours. We make no assurance for conveyance time by any means. We give our best assessment to orders during the putting in of requests, anyway, these are gauges. We won\'t be considered liable for loss of assets, negative surveys or you being prohibited for late conveyance. If you are selling on a site that requires time touchy outcomes, utilize Our SEO Services at your own risk.</p><h3>Payment/Refund Policy</h3><p>No refund or cash back will be made. After a deposit has been finished, it is extremely unlikely to invert it. You should utilize your equilibrium on requests our administrations, Hosting, SEO campaign. You concur that once you complete a deposit, you won\'t document a debate or a chargeback against us in any way, shape, or form.</p><p><br></p><p>If you document a debate or chargeback against us after a deposit, we claim all authority to end every single future request, prohibit you from our site. False action, for example, utilizing unapproved or taken charge cards will prompt the end of your record. There are no special cases.</p><h3>Free Balance / Coupon Policy</h3><p>We offer numerous approaches to get FREE Balance, Coupons and Deposit offers yet we generally reserve the privilege to audit it and deduct it from your record offset with any explanation we may it is a sort of misuse. If we choose to deduct a few or all of free Balance from your record balance, and your record balance becomes negative, at that point the record will naturally be suspended. If your record is suspended because of a negative Balance you can request to make a custom payment to settle your equilibrium to actuate your record.</p><p><br></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\" style=\"margin-top: -2330px;\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2022-04-16 03:20:09', '2022-04-16 03:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `last_login` varchar(100) DEFAULT NULL,
  `ip_address` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `windows_os` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_name`, `last_login`, `ip_address`, `location`, `windows_os`, `created_at`, `updated_at`) VALUES
(5, 'shoron96', '1648541784', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82', '2022-03-29 08:16:24', '2022-03-29 08:16:24'),
(6, 'shoron96', '1648542001', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82', '2022-03-29 08:20:01', '2022-03-29 08:20:01'),
(7, 'shoron96', '1648542288', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82', '2022-03-29 08:24:48', '2022-03-29 08:24:48'),
(8, 'rafi20', '1648543913', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82', '2022-03-29 08:51:53', '2022-03-29 08:51:53'),
(9, 'shoron96', '1648545024', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82', '2022-03-29 09:10:24', '2022-03-29 09:10:24'),
(10, 'shoron96', '1648545055', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82', '2022-03-29 09:10:55', '2022-03-29 09:10:55'),
(11, 'shoron96', '1648545106', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82', '2022-03-29 09:11:46', '2022-03-29 09:11:46'),
(12, 'nazmul96', '1648563030', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82', '2022-03-29 14:10:30', '2022-03-29 14:10:30'),
(13, 'shoron96', '1648613236', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82', '2022-03-30 04:07:16', '2022-03-30 04:07:16'),
(14, 'abdulallah96', '1648617025', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82', '2022-03-30 05:10:25', '2022-03-30 05:10:25'),
(15, 'shoron96', '1648715608', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84', '2022-03-31 08:33:28', '2022-03-31 08:33:28'),
(16, 'shoron96', '1648735092', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84', '2022-03-31 13:58:12', '2022-03-31 13:58:12'),
(17, 'shoron96', '1648736722', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84', '2022-03-31 14:25:22', '2022-03-31 14:25:22'),
(18, 'shoron96', '1648889732', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84', '2022-04-02 08:55:32', '2022-04-02 08:55:32'),
(19, 'shoron96', '1648957386', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.6', '2022-04-03 03:43:06', '2022-04-03 03:43:06'),
(20, 'nazmul96', '1648980954', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.6', '2022-04-03 10:15:54', '2022-04-03 10:15:54'),
(21, 'shoron96', '1649043428', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.6', '2022-04-04 03:37:08', '2022-04-04 03:37:08'),
(22, 'shoron96', '1649045768', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.6', '2022-04-04 04:16:08', '2022-04-04 04:16:08'),
(23, 'shoron96', '1649059035', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.6', '2022-04-04 07:57:15', '2022-04-04 07:57:15'),
(24, 'shoron96', '1649072649', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.6', '2022-04-04 11:44:09', '2022-04-04 11:44:09'),
(25, 'shoron96', '1649128739', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.6', '2022-04-05 03:18:59', '2022-04-05 03:18:59'),
(26, 'nazmul96', '1649128763', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.6', '2022-04-05 03:19:23', '2022-04-05 03:19:23'),
(27, 'shoron96', '1649134524', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.6', '2022-04-05 04:55:24', '2022-04-05 04:55:24'),
(28, 'shoron96', '1649159090', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.6', '2022-04-05 11:44:50', '2022-04-05 11:44:50'),
(29, 'nazmul96', '1649159187', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.6', '2022-04-05 11:46:27', '2022-04-05 11:46:27'),
(30, 'shoron96', '1649159391', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.6', '2022-04-05 11:49:51', '2022-04-05 11:49:51'),
(31, 'shoron96', '1649214690', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-06 03:11:30', '2022-04-06 03:11:30'),
(32, 'shoron96', '1649214787', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-06 03:13:07', '2022-04-06 03:13:07'),
(33, 'rafi20', '1649214800', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-06 03:13:20', '2022-04-06 03:13:20'),
(34, 'shoron96', '1649219564', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-06 04:32:44', '2022-04-06 04:32:44'),
(35, 'shoron96', '1649238003', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-06 09:40:03', '2022-04-06 09:40:03'),
(36, 'shoron96', '1649300940', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-07 03:09:00', '2022-04-07 03:09:00'),
(37, 'shoron96', '1649314468', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-07 06:54:28', '2022-04-07 06:54:28'),
(38, 'shoron96', '1649474321', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-09 03:18:41', '2022-04-09 03:18:41'),
(39, 'shoron96', '1649480917', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-09 05:08:37', '2022-04-09 05:08:37'),
(40, 'nazmul96', '1649492456', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-09 08:20:56', '2022-04-09 08:20:56'),
(41, 'shoron96', '1649503653', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-09 11:27:33', '2022-04-09 11:27:33'),
(42, 'shoron96', '1649560694', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-10 03:18:14', '2022-04-10 03:18:14'),
(43, 'shoron96', '1649563700', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-10 04:08:20', '2022-04-10 04:08:20'),
(44, 'nazmul96', '1649569259', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-10 05:40:59', '2022-04-10 05:40:59'),
(45, 'shoron96', '1649572275', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-10 06:31:15', '2022-04-10 06:31:15'),
(46, 'shoron96', '1649582136', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-10 09:15:36', '2022-04-10 09:15:36'),
(47, 'shoron96', '1649648001', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-11 03:33:21', '2022-04-11 03:33:21'),
(48, 'shoron96', '1649648033', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-11 03:33:53', '2022-04-11 03:33:53'),
(49, 'shoron96', '1649732951', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.7', '2022-04-12 03:09:11', '2022-04-12 03:09:11'),
(50, 'shoron96', '1650183813', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-17 08:23:33', '2022-04-17 08:23:33'),
(51, 'shoron96', '1650188879', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-17 09:47:59', '2022-04-17 09:47:59'),
(52, 'shoron96', '1650340981', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-19 04:03:01', '2022-04-19 04:03:01'),
(53, 'shoron96', '1650349616', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-19 06:26:56', '2022-04-19 06:26:56'),
(54, 'shoron96', '1650354189', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-19 07:43:09', '2022-04-19 07:43:09'),
(55, 'shoron96', '1650358231', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-19 08:50:31', '2022-04-19 08:50:31'),
(56, 'shoron96', '1650359657', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-19 09:14:17', '2022-04-19 09:14:17'),
(57, 'shoron96', '1650369494', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-19 11:58:14', '2022-04-19 11:58:14'),
(58, 'shoron96', '1650435738', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 06:22:18', '2022-04-20 06:22:18'),
(59, 'shoron96', '1650435964', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 06:26:04', '2022-04-20 06:26:04'),
(60, 'shoron96', '1650441173', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 07:52:53', '2022-04-20 07:52:53'),
(61, 'shoron96', '1650442132', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 08:08:52', '2022-04-20 08:08:52'),
(62, 'shoron96', '1650444069', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 08:41:09', '2022-04-20 08:41:09'),
(63, 'nazmul96', '1650446513', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 09:21:53', '2022-04-20 09:21:53'),
(64, 'nazmul96', '1650447336', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 09:35:36', '2022-04-20 09:35:36'),
(65, 'shoron96', '1650450747', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 10:32:27', '2022-04-20 10:32:27'),
(66, 'nazmul96', '1650450803', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 10:33:23', '2022-04-20 10:33:23'),
(67, 'shoron96', '1650452832', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 11:07:12', '2022-04-20 11:07:12'),
(68, 'shoron96', '1650454279', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 11:31:19', '2022-04-20 11:31:19'),
(69, 'nazmul96', '1650454310', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 11:31:50', '2022-04-20 11:31:50'),
(70, 'shoron96', '1650455380', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.8', '2022-04-20 11:49:40', '2022-04-20 11:49:40'),
(71, 'shoron96', '1650523997', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-21 06:53:17', '2022-04-21 06:53:17'),
(72, 'shoron96', '1650534321', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-21 09:45:21', '2022-04-21 09:45:21'),
(73, 'shoron96', '1650537817', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-21 10:43:37', '2022-04-21 10:43:37'),
(74, 'shoron96', '1650685910', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-23 03:51:50', '2022-04-23 03:51:50'),
(75, 'shoron96', '1650687591', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-23 04:19:51', '2022-04-23 04:19:51'),
(76, 'shoron96', '1650691282', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-23 05:21:22', '2022-04-23 05:21:22'),
(77, 'shoron96', '1650697453', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-23 07:04:13', '2022-04-23 07:04:13'),
(78, 'shoron96', '1650704687', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-23 09:04:47', '2022-04-23 09:04:47'),
(79, 'shoron96', '1650709764', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-23 10:29:24', '2022-04-23 10:29:24'),
(80, 'shoron96', '1650778968', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-24 05:42:48', '2022-04-24 05:42:48'),
(81, 'nadim96', '1650781724', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-24 06:28:44', '2022-04-24 06:28:44'),
(82, 'nazmul26', '1650792742', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-24 09:32:22', '2022-04-24 09:32:22'),
(83, 'akin55', '1650792858', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-24 09:34:18', '2022-04-24 09:34:18'),
(84, 'kaarim96', '1650793466', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-24 09:44:26', '2022-04-24 09:44:26'),
(85, 'vupas', '1650793690', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-24 09:48:10', '2022-04-24 09:48:10'),
(86, 'tuzypequ', '1650793807', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-24 09:50:07', '2022-04-24 09:50:07'),
(87, 'humyk', '1650794002', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-24 09:53:22', '2022-04-24 09:53:22'),
(88, 'shoron96', '1650795821', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-24 10:23:41', '2022-04-24 10:23:41'),
(89, 'sikemuxery', '1650801570', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-24 11:59:30', '2022-04-24 11:59:30'),
(90, 'hesomy', '1650856729', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 03:18:49', '2022-04-25 03:18:49'),
(91, 'hakumy', '1650856806', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 03:20:06', '2022-04-25 03:20:06'),
(92, 'tuviqigopa', '1650857910', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 03:38:30', '2022-04-25 03:38:30'),
(93, 'kyjux', '1650857962', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 03:39:22', '2022-04-25 03:39:22'),
(94, 'depumyzo', '1650858094', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 03:41:34', '2022-04-25 03:41:34'),
(95, 'bigigy', '1650858360', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 03:46:00', '2022-04-25 03:46:00'),
(96, 'bewulebut', '1650858686', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 03:51:26', '2022-04-25 03:51:26'),
(97, 'jipywe', '1650859505', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 04:05:05', '2022-04-25 04:05:05'),
(98, 'zyhilowenu', '1650860617', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 04:23:37', '2022-04-25 04:23:37'),
(99, 'mogetata', '1650862389', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 04:53:09', '2022-04-25 04:53:09'),
(100, 'pabiqonil', '1650862662', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 04:57:42', '2022-04-25 04:57:42'),
(101, 'videles', '1650863133', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 05:05:33', '2022-04-25 05:05:33'),
(102, 'focutonify', '1650865082', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 05:38:02', '2022-04-25 05:38:02'),
(103, 'wopirizony', '1650865517', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 05:45:17', '2022-04-25 05:45:17'),
(104, 'qupyxakoru', '1650865994', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 05:53:14', '2022-04-25 05:53:14'),
(105, 'mynihim', '1650866255', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 05:57:35', '2022-04-25 05:57:35'),
(106, 'cyjysatequ', '1650868351', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 06:32:31', '2022-04-25 06:32:31'),
(107, 'zahilywo', '1650868600', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 06:36:40', '2022-04-25 06:36:40'),
(108, 'fytyfuwe', '1650868686', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 06:38:06', '2022-04-25 06:38:06'),
(109, 'fuqys', '1650868772', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 06:39:32', '2022-04-25 06:39:32'),
(110, 'cagosas', '1650869320', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 06:48:40', '2022-04-25 06:48:40'),
(111, 'kywag', '1650869515', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 06:51:55', '2022-04-25 06:51:55'),
(112, 'suzuka', '1650869648', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 06:54:08', '2022-04-25 06:54:08'),
(113, 'pukyfug', '1650869821', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 06:57:01', '2022-04-25 06:57:01'),
(114, 'vijuti', '1650872606', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 07:43:26', '2022-04-25 07:43:26'),
(115, 'xalica', '1650873902', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 08:05:02', '2022-04-25 08:05:02'),
(116, 'dinoluben', '1650874552', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 08:15:52', '2022-04-25 08:15:52'),
(117, 'celime', '1650881197', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:06:37', '2022-04-25 10:06:37'),
(118, 'losupo', '1650881249', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:07:29', '2022-04-25 10:07:29'),
(119, 'mocyby', '1650881305', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:08:25', '2022-04-25 10:08:25'),
(120, 'dekac', '1650881426', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:10:26', '2022-04-25 10:10:26'),
(121, 'cebuvy', '1650881472', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:11:12', '2022-04-25 10:11:12'),
(122, 'qibifujudu', '1650881543', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:12:23', '2022-04-25 10:12:23'),
(123, 'hymegojyke', '1650881566', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:12:46', '2022-04-25 10:12:46'),
(124, 'xowawowop', '1650881694', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:14:54', '2022-04-25 10:14:54'),
(125, 'zufet', '1650882204', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:23:24', '2022-04-25 10:23:24'),
(126, 'jyqif', '1650882238', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:23:58', '2022-04-25 10:23:58'),
(127, 'syfoxacudo', '1650883219', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:40:19', '2022-04-25 10:40:19'),
(128, 'lahigyqek', '1650883295', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:41:35', '2022-04-25 10:41:35'),
(129, 'rixyke', '1650883447', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:44:07', '2022-04-25 10:44:07'),
(130, 'taqaxy', '1650883662', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.1', '2022-04-25 10:47:42', '2022-04-25 10:47:42'),
(131, 'shoron96', '1651991784', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.5', '2022-05-08 06:36:24', '2022-05-08 06:36:24'),
(132, 'shoron96', '1651992420', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.5', '2022-05-08 06:47:00', '2022-05-08 06:47:00'),
(133, 'shoron96', '1651992538', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.5', '2022-05-08 06:48:58', '2022-05-08 06:48:58'),
(134, 'shoron96', '1651998046', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.5', '2022-05-08 08:20:46', '2022-05-08 08:20:46'),
(135, 'shoron96', '1651999789', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.5', '2022-05-08 08:49:49', '2022-05-08 08:49:49'),
(136, 'shoron96', '1652071129', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.5', '2022-05-09 04:38:49', '2022-05-09 04:38:49'),
(137, 'shoron96', '1652076840', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.5', '2022-05-09 06:14:00', '2022-05-09 06:14:00'),
(138, 'shoron96', '1652077321', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.5', '2022-05-09 06:22:01', '2022-05-09 06:22:01'),
(139, 'shoron96', '1652588298', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.6', '2022-05-15 04:18:18', '2022-05-15 04:18:18'),
(140, 'shoron96', '1652588581', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.6', '2022-05-15 04:23:01', '2022-05-15 04:23:01'),
(141, 'shoron96', '1652588967', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.6', '2022-05-15 04:29:27', '2022-05-15 04:29:27'),
(142, 'shoron96', '1652590056', '127.0.0.1', NULL, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.6', '2022-05-15 04:47:36', '2022-05-15 04:47:36');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `group_name` varchar(100) DEFAULT NULL,
  `settings_name` varchar(100) DEFAULT NULL,
  `settings_value` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `group_name`, `settings_name`, `settings_value`, `created_at`, `updated_at`) VALUES
(1, 'General Setting', 'site_title', 'RS Rate Lab', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(2, 'General Setting', 'timezone', 'Dhaka', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(3, 'General Setting', 'base_color', '#38761d', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(4, 'General Setting', 'secondary_color', '#f44336', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(5, 'General Setting', 'secure_password', '0', '2022-04-13 04:58:11', '2022-04-25 06:56:05'),
(6, 'General Setting', 'agree_policy', '1', '2022-04-13 04:58:11', '2022-04-24 06:38:52'),
(7, 'General Setting', 'user_registration', '1', '2022-04-13 04:58:11', '2022-04-24 06:47:35'),
(8, 'General Setting', 'force_ssl', '1', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(9, 'General Setting', 'email_verification', '1', '2022-04-13 04:58:11', '2022-04-25 06:56:09'),
(10, 'General Setting', 'email_notification', '1', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(11, 'General Setting', 'sms_verification', '1', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(12, 'General Setting', 'sms_notification', '1', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(13, 'Logo and favicon', 'logo', 'logo.png', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(14, 'Logo and favicon', 'favicon', 'favicon.png', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(15, 'extensions', 'tawk_to', '{\"id\":\"15\",\"image\":\"tawky_big.png\",\"name\":\"Tawk.to\",\"title\":\"app_key\",\"value\":\"- - - -\",\"help_img\":\"twak.png\",\"help_txt\":\"Key location is shown bellow\",\"status\":0}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(16, 'extensions', 'google_recaptcha2', '{\"id\":\"16\",\"image\":\"recaptcha3.png\",\"name\":\"Google Recaptcha2\",\"title\":\"site_key\",\"value\":\"6Lfpm3cUAAAAAGIjbEJKhJNKS4X1Gns9ANjh8MfH\",\"help_img\":\"recaptcha.png\",\"help_txt\":\"Key location is shown bellow\",\"status\":1}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(17, 'extensions', 'custom_captcha', '{\"id\":\"17\",\"image\":\"customcaptcha.png\",\"name\":\"Custom Captcha\",\"title\":\"random_str\",\"value\":\"SecureString\",\"help_img\":\"na\",\"help_txt\":\"Just Put Any Random String\",\"status\":\"0\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(18, 'extensions', 'google_analytics', '{\"id\":\"18\",\"image\":\"google_analytics.png\",\"name\":\"Google Analytics\",\"title\":\"app_key\",\"value\":\"- - - -\",\"help_img\":\"ganalytics.png\",\"help_txt\":\"Key location is shown bellow\",\"status\":\"0\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(19, 'language', 'English', '{\"code\":\"en\",\"is_default\":\"0\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(20, 'language', 'Hindi', '{\"code\":\"hn\",\"is_default\":\"1\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(21, 'language', 'Bangla', '{\"code\":\"bn\",\"is_default\":\"0\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(22, 'Seo Manager', 'meta_keywords', 'rating,company', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(23, 'Seo Manager', 'meta_description', 'RateLab is a business review platform. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi dolorem itaque laudantium aut, quibusdam amet, nemo quaerat, fuga facere corrupti quos dolorum. Blanditiis, exercitationem quia aliquam sit temporibus enim aspernatur repudiandae inventore, corporis vero quo animi beatae laborum ullam distinctio vel laudantium modi! Libero perferendis necessitatibus saepe deleniti illo officiis.', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(24, 'Seo Manager', 'social_title', 'RateLab : Business Review Platform', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(25, 'Seo Manager', 'social_description', 'RateLab is a business review platform. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi dolorem itaque laudantium aut, quibusdam amet, nemo quaerat, fuga facere corrupti quos dolorum. Blanditiis, exercitationem quia aliquam sit temporibus enim aspernatur repudiandae inventore, corporis vero quo animi beatae laborum ullam distinctio vel laudantium modi! Libero perferendis necessitatibus saepe deleniti illo officiis.', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(26, 'Seo Manager', 'image', '1649650481_3d1f8506601d49642158.jpg', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(27, 'Email Template Global', 'email_sent_from', 'info@viserlab.com', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(28, 'Email Template Global', 'email_body', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><br></p><h3><strong>This is a System Generated Email</strong></h3><p><br></p><p><a href=\"https://script.viserlab.com/ratelab/admin/email-template/global#\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(0, 135, 255); background-color: transparent;\"><img src=\"https://i.imgur.com/Z1qtvtV.png\" alt=\"img\"></a></p><p><br></p><h1><strong>Hello {{fullname}} ({{username}})</strong></h1><p><br></p><p><br></p><p>{{message}}</p><p><br></p><p><br></p><p><br></p><p><br></p><p>© 2021&nbsp;<a href=\"https://script.viserlab.com/ratelab/admin/email-template/global#\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"color: rgb(0, 135, 255); background-color: transparent;\">Website Name</a>&nbsp;. All Rights Reserved.</p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\" style=\"margin-top: 0px;\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(29, 'Email Template Setting', 'smtp', '{\"host\":\"testhost\",\"port\":\"testport\",\"enc\":\"ssl\",\"username\":\"testusername\",\"password\":\"testpassword\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(30, 'Email Template Setting', 'sendgrid', '{\"appkey\":\"sendgrid app key\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(31, 'Email Template Setting', 'mailjet', '{\"public_key\":\"test public key\",\"secret_key\":\"test secret key\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(32, 'Sms Template Global', 'global_template', 'hi {{name}}, {{message}}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(33, 'Sms Template Setting', 'clickatell', '{\"clickatell_api_key\":\"----------------------------\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(34, 'Sms Template Setting', 'infobip', '{\"infobip_username\":\"--------------\",\"infobip_password\":\"----------------------\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(35, 'Sms Template Setting', 'messageBird', '{\"message_bird_api_key\":\"--------------\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(36, 'Sms Template Setting', 'nexmo', '{\"nexmo_api_key\":\"735a9da4\",\"nexmo_api_secret\":\"65DMdhUXIDkg1itC\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(37, 'Sms Template Setting', 'smsBroadcast', '{\"sms_broadcast_username\":\"sms broadcast\",\"sms_broadcast_password\":\"sms password\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(38, 'Sms Template Setting', 'twilio', '{\"account_sid\":\"AYajjmpDLunawN9mRtBUbWAMSNG9on1NRL\",\"auth_token\":\"77726b242830fb28f52fb08c648dd7a6\",\"from\":\"+17739011523\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(39, 'Sms Template Setting', 'textMagic', '{\"text_magic_username\":\"username\",\"apiv2_key\":\"apiv2 key\"}', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(40, 'GDPR Cookie', 'policy_link', 'policy/privacy-policy/42', '2022-04-13 04:58:11', '2022-04-13 04:58:11'),
(41, 'GDPR Cookie', 'description', '<div class=\"ql-editor\" data-gramm=\"false\" contenteditable=\"true\"><p><span style=\"color: rgb(33, 37, 41);\">We may use cookies or any other tracking technologies when you visit our website, including any other media form, mobile website, or mobile application related or connected to help customize the Site and improve your experience.</span></p></div><div class=\"ql-clipboard\" contenteditable=\"true\" tabindex=\"-1\"></div><div class=\"ql-tooltip ql-hidden\"><a class=\"ql-preview\" rel=\"noopener noreferrer\" target=\"_blank\" href=\"about:blank\"></a><input type=\"text\" data-formula=\"e=mc^2\" data-link=\"https://quilljs.com\" data-video=\"Embed URL\"><a class=\"ql-action\"></a><a class=\"ql-remove\"></a></div>', '2022-04-13 04:58:11', '2022-04-13 10:02:54'),
(42, 'GDPR Cookie', 'status', '1', '2022-04-13 04:58:11', '2022-04-13 10:03:18'),
(43, 'Custom CSS', 'css', '.country-code .input-group-prepend .input-group-text {\r\n    background: #fff !important;\r\n}\r\n\r\n.country-code select {\r\n    border: none;\r\n}\r\n\r\n.country-code select:focus {\r\n    border: none;\r\n    outline: none;\r\n}\r\n\r\n.hover-input-popup {\r\n    position: relative;\r\n}\r\n\r\n.hover-input-popup:hover .input-popup {\r\n    opacity: 1;\r\n    visibility: visible;\r\n}\r\n\r\n.input-popup {\r\n    position: absolute;\r\n    bottom: 130%;\r\n    left: 50%;\r\n    width: 280px;\r\n    background-color: #1a1a1a;\r\n    color: #fff;\r\n    padding: 20px;\r\n    border-radius: 5px;\r\n    -webkit-border-radius: 5px;\r\n    -moz-border-radius: 5px;\r\n    -ms-border-radius: 5px;\r\n    -o-border-radius: 5px;\r\n    -webkit-transform: translateX(-50%);\r\n    -ms-transform: translateX(-50%);\r\n    transform: translateX(-50%);\r\n    opacity: 0;\r\n    visibility: hidden;\r\n    -webkit-transition: all 0.3s;\r\n    -o-transition: all 0.3s;\r\n    transition: all 0.3s;\r\n    z-index: 11;\r\n}\r\n\r\n.input-popup::after {\r\n    position: absolute;\r\n    content: \"\";\r\n    bottom: -19px;\r\n    left: 50%;\r\n    margin-left: -5px;\r\n    border-width: 10px 10px 10px 10px;\r\n    border-style: solid;\r\n    border-color: transparent transparent #1a1a1a transparent;\r\n    -webkit-transform: rotate(180deg);\r\n    -ms-transform: rotate(180deg);\r\n    transform: rotate(180deg);\r\n}\r\n\r\n.input-popup p {\r\n    padding-left: 20px;\r\n    position: relative;\r\n}\r\n\r\n.input-popup p::before {\r\n    position: absolute;\r\n    content: \"\";\r\n    font-family: \"Line Awesome Free\";\r\n    font-weight: 900;\r\n    left: 0;\r\n    top: 4px;\r\n    line-height: 1;\r\n    font-size: 18px;\r\n}\r\n\r\n.input-popup p.error {\r\n    text-decoration: line-through;\r\n}\r\n\r\n.input-popup p.error::before {\r\n    content: \"\\f057\";\r\n    color: #ea5455;\r\n}\r\n\r\n.input-popup p.success::before {\r\n    content: \"\\f058\";\r\n    color: #28c76f;\r\n}\r\n', '2022-04-13 04:58:11', '2022-04-13 10:03:18'),
(44, 'Report & Request', 'bug', 'bug found', '2022-04-13 04:58:11', '2022-04-13 10:03:18'),
(45, 'Report & Request', 'feature', 'need to update feature', '2022-04-13 04:58:11', '2022-04-13 10:03:18'),
(47, 'Report & Request', 'bug', 'asfasdfasd', '2022-04-13 10:55:40', '2022-04-13 10:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `social_icon` varchar(100) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_icons`
--

INSERT INTO `social_icons` (`id`, `title`, `social_icon`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'fab fa-facebook-f', 'https://www.facebook.com/', '2022-04-16 05:06:23', '2022-04-16 05:06:23'),
(4, 'Twitter', 'fab fa-twitter', 'https://www.twitter.com/', '2022-04-16 05:19:25', '2022-04-16 05:33:30'),
(5, 'Instragram', 'fab fa-instagram', 'https://www.instragram.com/', '2022-04-16 05:34:13', '2022-04-16 05:34:13'),
(6, 'Youtube', 'fab fa-youtube', 'https://www.youtube.com/', '2022-04-16 05:35:00', '2022-04-16 05:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) UNSIGNED NOT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email_address`, `date`, `time`, `created_at`, `updated_at`) VALUES
(1, 'nazmul@sahajjo.com', '2022-05-17', '07:05', '2022-05-17 13:05:10', '2022-05-17 13:05:10'),
(2, 'sukriti@gmail.com', '2022-05-17', '07:06', '2022-05-17 13:06:07', '2022-05-17 13:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

CREATE TABLE `support_tickets` (
  `id` int(11) UNSIGNED NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ticket_id` varchar(100) DEFAULT NULL,
  `priority` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `attachments` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support_tickets`
--

INSERT INTO `support_tickets` (`id`, `full_name`, `user_id`, `ticket_id`, `priority`, `email_address`, `subject`, `message`, `attachments`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shorons  Ahmed', 8, '198855', 'high', 'nazmul@sahajjo.com', 'Testing purpose', 'Alhamdulilallah', '1649489751_07eab8de3bea539acac5.jpg,1649489751_a3af323f51903557c3a1.jpg', 1, '2022-04-10 11:26:01', '2022-04-10 11:26:01'),
(2, 'Shorons  Ahmed', 8, '829815', 'high', 'nazmul@sahajjo.com', 'test', 'Masaallah', '1649490078_cc709f9350aeec71f7c2.pdf,1649490078_a8ce1f27779117cbd092.docx', 2, '2022-04-09 07:41:18', '2022-04-10 05:36:39'),
(3, 'Shorons  Ahmed', 8, '724724', 'high', 'nazmul@sahajjo.com', 'Testing purpose', 'eee', '1649490277_3a84eeffc1eff46c88dc.jpg', 0, '2022-04-09 07:44:37', '2022-04-09 09:49:32'),
(12, 'nazmul hossain', 9, '498536', 'medium', 'nazmul96@sahajjo.com', 'Testing new purpose', 'say alhamdulilallah', '1649492509_e010d32ef51419afcecd.jpg', 1, '2022-04-10 10:56:45', '2022-04-10 10:56:45'),
(13, 'nazmul hossain', 9, '758964', 'low', 'nazmul96@sahajjo.com', 'testing', 'hello frnds', '1649497606_5319833b0b6aa20dcbe2.jpg', 0, '2022-04-09 09:46:46', '2022-04-09 09:50:09'),
(14, 'Shorons  Ahmed', 8, '198855', 'high', 'nazmul@sahajjo.com', 'Testing purpose', 'Inshaallah', '1649564622_f204e10a5e2fc1f9b6f4.jpg,1649564622_89cb6006588955de27c6.jpg', 1, '2022-04-10 11:26:01', '2022-04-10 11:26:01'),
(15, 'Shorons  Ahmed', 8, '198855', 'high', 'nazmul@sahajjo.com', 'Testing purpose', 'Inshaallah ,alhamdulilallah', '1649564702_ef48c0715a81e2aa6ae2.jpg,1649564702_62a8c90e497bfa146ab8.jpg', 1, '2022-04-10 11:26:01', '2022-04-10 11:26:01'),
(22, 'Shorons  Ahmed', 8, '198855', 'high', 'nazmul@sahajjo.com', 'Testing purpose', 'say alhamdulilallah', '1649568949_623ece936a0b0a52297b.png', 1, '2022-04-10 11:26:01', '2022-04-10 11:26:01'),
(23, 'Shorons  Ahmed', 8, '829815', 'high', 'nazmul@sahajjo.com', 'test', 'say masallah', '1649568999_c0a79660476ea0c4fa06.jpg,1649568999_3773daff3400c46cb0a2.jpg', 2, '2022-04-10 05:36:39', '2022-04-10 05:36:39'),
(24, 'Shorons  Ahmed', 8, '198855', 'high', 'nazmul@sahajjo.com', 'Testing purpose', 'allah vorosha', '1649584670_77ced376dea025f4e076.jpg,1649584670_44b8727061b16322f721.docx', 1, '2022-04-10 11:26:01', '2022-04-10 11:26:01'),
(30, 'nazmul hossain', 9, '498536', 'medium', 'nazmul96@sahajjo.com', 'Testing new purpose', 'say subhanallah', NULL, 1, '2022-04-10 10:56:45', '2022-04-10 10:56:45'),
(31, 'Shorons  Ahmed', 8, '446241', '', 'nazmul@sahajjo.com', 'nazmul@sahajjo.com', 'sdsasad', NULL, 0, '2022-04-19 06:47:20', '2022-04-19 06:47:20'),
(32, 'nazmul hossain khaan', NULL, '347005', NULL, 'nazmulnew@sahajjo.com', 'Testing purpose new', 'allah', NULL, 0, '2022-04-19 09:17:05', '2022-04-19 09:17:05'),
(33, 'nazmul hasan', NULL, '896373', NULL, 'nazmul121@gmail.com', 'test new', 'hello', NULL, 2, '2022-05-14 13:20:31', '2022-05-14 13:56:02'),
(34, 'Nadiya khan', NULL, '144598', NULL, 'nan@gmail.com', 'testing', 'May allah', NULL, 0, '2022-05-14 13:32:30', '2022-05-14 13:32:30'),
(35, 'nazmul hasan', NULL, '896373', NULL, 'nazmul121@gmail.com', 'test new', 'plz check', '1652536562_728ce8eb70cb545e6570.png', 2, '2022-05-14 13:56:02', '2022-05-14 13:56:02'),
(36, 'Shoron Ahmed', 8, '939432', 'medium', 'nazmul@sahajjo.com', 'have to test', 'hello wrold', '1652595308_df6e56cb411d9469815d.jpg', 0, '2022-05-15 06:15:08', '2022-05-15 06:15:08'),
(37, 'Nadiya khan', NULL, '159241', NULL, 'nazmul121@gmail.com', 'testing', 'ffff', NULL, 0, '2022-05-17 05:30:47', '2022-05-17 05:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `tbl_user_id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  `phone_number` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_type` int(100) DEFAULT NULL,
  `remember_key` varchar(100) DEFAULT NULL,
  `password_reset_token` varchar(100) DEFAULT NULL,
  `email_verification_token` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verification` int(11) NOT NULL DEFAULT 1,
  `sms_verification` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`tbl_user_id`, `first_name`, `last_name`, `user_name`, `email_address`, `phone_number`, `user_password`, `user_type`, `remember_key`, `password_reset_token`, `email_verification_token`, `status`, `email_verification`, `sms_verification`, `created_at`, `updated_at`) VALUES
(8, 'Shoron', 'Ahmed', 'shoron96', 'nazmul@sahajjo.com', '+1 (112) 892-6269', '$2y$10$cMrcDO/7up4yET3C.2BZH.eR.5wXPF/vYLFKsiMAuMqiXTveIfcai', 1, NULL, 'P2IfdKhV', NULL, 0, 1, 1, '2022-03-24 06:41:36', '2022-05-08 09:17:35'),
(9, 'nazmul', 'hossain', 'nazmul96', 'nazmul96@sahajjo.com', '+1 (112) 892-6269', '$2y$10$/MOecSsSBxsN1TaeZ2jlme06p68Twh18E9DSDQh.HBCTIpml1/pWC', 1, NULL, NULL, NULL, 1, 0, 0, '2022-03-24 08:04:34', '2022-03-30 04:29:48'),
(10, 'shukriti', 'dass', 'shukriti96', 'shukriti@sahajjo.com', '+1 (542) 623-4368', '$2y$10$md4Up.n3z0Ce2BcyW33JNeU8gWjPQmv1DGKADgM.LTaZtsuB4L87e', 1, NULL, NULL, NULL, 0, 0, 0, '2022-03-24 08:29:35', '2022-03-24 09:20:16'),
(11, 'Shoron ', 'khan', 'khan96', 'khan@gmail.com', '+1 (112) 892-6269', '$2y$10$c5Ucj3A7q3qFtmZyAv5y3eM98DDtf5D3H9aDrMLvyo255xqPDKxq.', 1, NULL, NULL, NULL, 0, 0, 0, '2022-03-24 09:38:03', '2022-03-24 09:38:03'),
(12, 'robi', 'khan', 'robi96', 'robi@gmail.com', '+1 (269) 475-3245', '$2y$10$G6lIdiygI8QHQYp53hdELeuY9r3XblG4P7wywk1bJhIN1AZlzT3ym', 1, NULL, NULL, NULL, 0, 0, 0, '2022-03-29 08:49:04', '2022-03-29 08:49:04'),
(13, 'Rafi ', 'islam', 'rafi20', 'rafi@gmail.com', '+1 (112) 892-6269', '$2y$10$J6cyQaE1RrAEyRM5Fd2zce8ikOGACXhacdc9Gmzcgp5g/nclP1Cr2', 1, NULL, NULL, NULL, 0, 0, 0, '2022-03-29 08:51:53', '2022-03-29 08:51:53'),
(14, 'abdullah', ' alom', 'abdulallah96', 'abdulallah96@gmail.com', '+1 (112) 892-6269', '$2y$10$1oOU/9l4ojaWPdOWhiBdO.M7e7AQsecmr47o2UuLKvlvH4Ldn6ZDK', 1, NULL, NULL, NULL, 0, 0, 0, '2022-03-30 05:10:25', '2022-03-30 05:10:25'),
(15, 'Nadim', 'Ahmed', 'nadim96', 'nadim@gmail.com', '01856765412', '$2y$10$LgxBEq71EybHBUPvMAIoHu8QlW9GaxqXDOj6F5pzmarq.uPPYMv2q', 1, NULL, NULL, NULL, 0, 0, 0, '2022-04-24 06:28:44', '2022-04-24 06:28:44'),
(16, 'Nazmul ', 'khan', 'nazmul26', 'nazmul26@sahajjo.com', '01718465014', '$2y$10$IJknut71KNSZSzEb3GPqB.JaU5LKNY5saA4tj/v7RmsnjMMrWDz9u', 1, NULL, NULL, NULL, 0, 0, 0, '2022-04-24 09:32:22', '2022-04-24 09:32:22'),
(17, 'Akib ', 'khan', 'akin55', 'akib@gmail.com', '01718465014', '$2y$10$invKRHCcpqG2xnJ2dAp9VuFh81z9tD45BCPbnV4/IFkbMB7TA9JQa', 1, NULL, NULL, NULL, 0, 0, 0, '2022-04-24 09:34:18', '2022-04-24 09:34:18'),
(18, 'Nazmul ', 'Hossains', 'nazmul967', 'nazmul98@sahajjo.com', '01718465014', '$2y$10$xoAxjJ8eQddJwith5UJTUOe0alnLac1.e4MoP1qhLYU29Y7dpARGG', 1, NULL, NULL, NULL, 0, 0, 0, '2022-04-24 09:35:57', '2022-04-24 09:35:57'),
(19, 'Karim', 'khan', 'kaarim96', 'abc@email.com', '01718465014', '$2y$10$ybmvGizLjFD5pLArpBlbPeuuketV6g8nBAy19kIkl.8uWZZfFyg72', 1, NULL, NULL, NULL, 0, 0, 0, '2022-04-24 09:44:26', '2022-04-24 09:44:26'),
(20, 'Amanda', 'Whitehead', 'vupas', 'betowabah@mailinator.com', '+1 (781) 882-4069', '$2y$10$drEgAamdwJaooyarxLq6BeirAgrtM8W3iFe2/ICHnJO9dXsgBX/5m', 1, NULL, NULL, NULL, 0, 0, 0, '2022-04-24 09:48:10', '2022-04-24 09:48:10'),
(21, 'Colin', 'Cunningham', 'tuzypequ', 'dame@mailinator.com', '+1 (841) 214-6466', '$2y$10$olvZJ3EPHt7sCm6orlmczOtyo5vObmLjWeo.xcKKazogVmynySO.u', 1, NULL, NULL, NULL, 0, 0, 0, '2022-04-24 09:50:07', '2022-04-24 09:50:07'),
(22, 'Graiden', 'Haley', 'humyk', 'zovacavu@mailinator.com', '+1 (821) 501-4663', '$2y$10$8BNbEkT8uO/hMDiZezJtyeB9/w.k/f6eNiJxOKXIpvjlhhESRtrla', 1, NULL, NULL, NULL, 0, 0, 0, '2022-04-24 09:53:22', '2022-04-24 09:53:22'),
(23, 'Kaitlin', 'Flynn', 'sikemuxery', 'lopedu@mailinator.com', '+1 (103) 973-5339', '$2y$10$gdNfGAxv8MHmn4zQj9Gu0echB5mK5JLr8PNNvG0sJhv6XNAiMrZfa', 1, NULL, NULL, NULL, 0, 5, 0, '2022-04-24 11:59:30', '2022-04-24 11:59:30'),
(24, 'Chaney', 'Chandler', 'hesomy', 'fowinoca@mailinator.com', '+1 (367) 159-2194', '$2y$10$yBUMxneP3k0ZMMw8IC25kOVvauSo8cnqU48Rm24eftV0tIC/se9rK', 1, NULL, NULL, NULL, 0, 0, 0, '2022-04-25 03:18:48', '2022-04-25 03:18:48'),
(25, 'Raphael', 'Watkins', 'hakumy', 'pecufirymo@mailinator.com', '+1 (183) 466-7282', '$2y$10$8ebYVy.ShJ7cXSmDnlY8HuMXGqbRamXV1O1dMVzUjG1.0dmrEi3mm', 1, NULL, NULL, NULL, 0, 0, 0, '2022-04-25 03:20:06', '2022-04-25 03:20:06'),
(26, 'Echo', 'Flynn', 'cagosas', 'lipiguz@mailinator.com', '+1 (711) 981-2669', '$2y$10$9AqVE2GbFUn8CXDRlmuUPekVikTT3eUAdBNlo7coWgh8NoOqtqjCu', 1, NULL, NULL, '', 0, 0, 0, '2022-04-25 06:48:40', '2022-04-25 06:50:16'),
(27, 'Eliana', 'Gross', 'kywag', 'fyfi@mailinator.com', '+1 (454) 315-8829', '$2y$10$VblLEmibN68P.RwnVLeHv.rcoKl0Uru1Ab975Yn4486uqKfLpSjYi', 1, NULL, NULL, NULL, 0, 1, 0, '2022-04-25 06:51:55', '2022-04-25 06:51:55'),
(28, 'Daniel', 'Donovan', 'suzuka', 'cutet@mailinator.com', '+1 (546) 394-3047', '$2y$10$IOwEKKiMTVgUggUq9ekZQe0lCBt3EGIJYUO9Vo43YR/4R0wOoMoG.', 1, NULL, NULL, NULL, 0, 0, 0, '2022-04-25 06:54:08', '2022-04-25 06:54:08'),
(29, 'Baxter', 'Osborn', 'pukyfug', 'zelyrypyqa@mailinator.com', '+1 (128) 514-6632', '$2y$10$0oVWnE4pLsqYLRy/soCxMO6nwuUa02ttLizdIniZ4CDo1DxWxRpgS', 1, NULL, NULL, '', 0, 0, 0, '2022-04-25 06:57:01', '2022-04-25 07:03:22'),
(30, 'Quinn', 'Armstrong', 'vijuti', 'fifasij@mailinator.com', '+1 (366) 815-1441', '$2y$10$kqX3U.qXXyS8pT1n3ahwney8.QgL40rEJ3dYKSBaNr851h7/q7b2G', 1, NULL, NULL, 'Sd3bru', 0, 1, 0, '2022-04-25 07:43:26', '2022-04-25 07:52:12'),
(31, 'Oscar', 'Trevino', 'xalica', 'wafopo@mailinator.com', '+1 (153) 779-3192', '$2y$10$QMCJraJw8x6IckoAS1c2ZOEJWf2kAubYCo.0crEax6SxmUcwtWXxe', 1, NULL, NULL, '', 0, 0, 0, '2022-04-25 08:13:32', '2022-04-25 08:15:29'),
(32, 'Octavius', 'Cotton', 'dinoluben', 'teqati@mailinator.com', '+1 (367) 288-4852', '$2y$10$15Th4UA0ewkYGmcr9KzgaODITtA/Hc/ctG54bzV247PaBWND.BQUC', 1, NULL, NULL, '', 0, 0, 0, '2022-04-25 08:23:43', '2022-04-25 08:23:58'),
(33, 'Kenyon', 'Mcmahon', 'celime', 'tofe@mailinator.com', '+1 (604) 127-4465', '$2y$10$FuHT8i3.3R4ljJCqDb4otuSNZOQgoczXiR66aRriRB5Tg55gPir5G', 1, NULL, NULL, 'ClSjAo', 0, 1, 0, '2022-04-25 10:06:37', '2022-04-25 10:06:37'),
(34, 'Keegan', 'Buckley', 'losupo', 'tudom@mailinator.com', '+1 (821) 794-3599', '$2y$10$wzKYbEXKSeub.M/AunN3T.1VnCYPNDqAvlqwjH5XFc3qKvQ156yUW', 1, NULL, NULL, 'aNbiyp', 0, 1, 0, '2022-04-25 10:07:29', '2022-04-25 10:07:29'),
(35, 'Adena', 'Jacobs', 'mocyby', 'focidag@mailinator.com', '+1 (299) 525-9426', '$2y$10$jVVU7zWziz.c//HnQYvBbuhWMNbQqMfEnNSHUDiNHj7Mme/rFwTze', 1, NULL, NULL, NULL, 0, 1, 0, '2022-04-25 10:08:25', '2022-04-25 10:08:25'),
(36, 'Hyacinth', 'Cotton', 'dekac', 'tamoco@mailinator.com', '+1 (214) 252-5326', '$2y$10$ryKFvySlSZzkzV3F68eoNuQ6QGQnbzNmRjLF0EWwvlPvdr5dPl2.u', 1, NULL, NULL, NULL, 0, 1, 0, '2022-04-25 10:10:26', '2022-04-25 10:10:26'),
(37, 'Alma', 'Williamson', 'cebuvy', 'mufegi@mailinator.com', '+1 (179) 718-3957', '$2y$10$.5IhSOdHqEuBddsdyDni1u.YdcyZtpolBb2mBt0u8hI/o3F8knf.m', 1, NULL, NULL, 'uv1ew4', 0, 1, 0, '2022-04-25 10:11:12', '2022-04-25 10:11:12'),
(38, 'Lydia', 'Roberson', 'qibifujudu', 'bokiqicid@mailinator.com', '+1 (446) 808-8952', '$2y$10$qz0LcFjAqHHOaACbLflRE.HFRsdDTRNxjJh6Dj36Xzs1./h7j.x2a', 1, NULL, NULL, 'Ktrskm', 0, 1, 0, '2022-04-25 10:12:23', '2022-04-25 10:12:23'),
(39, 'Damon', 'Brennan', 'hymegojyke', 'firaleda@mailinator.com', '+1 (703) 783-1311', '$2y$10$qbCJM.c.90fSJdM5Y9Lz7OxkEL1xOdl8J4A9RlgJS7j1s0Kj810gu', 1, NULL, NULL, 'QsNoXg', 0, 1, 0, '2022-04-25 10:12:46', '2022-04-25 10:12:46'),
(40, 'Evelyn', 'Rutledge', 'xowawowop', 'rusavixa@mailinator.com', '+1 (724) 336-4167', '$2y$10$yHZ1PfJaF8QL9dCZoPxspOiwlWhk6jIcfUvxmogI57xd9InxpnXNq', 1, NULL, NULL, 'y5c4sF', 0, 1, 0, '2022-04-25 10:14:54', '2022-04-25 10:14:54'),
(41, 'Cadman', 'Marks', 'zufet', 'ruhul@mailinator.com', '+1 (332) 937-2336', '$2y$10$UAflZ9mmmq6Yzyy9UXEC6O0oBWRGqOc10o5z.ABRQRwzNLdNNWs8W', 1, NULL, NULL, '', 0, 0, 0, '2022-04-25 10:23:24', '2022-04-25 10:23:34'),
(42, 'Logan', 'Rollins', 'jyqif', 'meno@mailinator.com', '+1 (255) 458-9639', '$2y$10$YMnCVFGvpmDBFus/J/APdO5F0UhGKddP84vcc/lMfib5kNdCyNtDm', 1, NULL, NULL, '', 0, 0, 0, '2022-04-25 10:29:45', '2022-04-25 10:30:15'),
(43, 'Allen', 'Finley', 'syfoxacudo', 'lezybywyj@mailinator.com', '+1 (947) 767-5643', '$2y$10$ITgKzy6HMmTXfuY2Ap9tjuXBsAugujv4c36hzFOgVbd2X3eh4Gsq.', 1, NULL, NULL, 'hnzYyG', 0, 1, 0, '2022-04-25 10:40:19', '2022-04-25 10:40:19'),
(44, 'Brock', 'Davidson', 'lahigyqek', 'jaboci@mailinator.com', '+1 (215) 756-3876', '$2y$10$w9TcemAUNTDmDnyPIi.qje80EfsK4MFUaz7vIUXhO46ENBMOMefUG', 1, NULL, NULL, 'r8lXxv', 0, 1, 0, '2022-04-25 10:41:35', '2022-04-25 10:41:35'),
(45, 'Nichole', 'Young', 'rixyke', 'mivijyr@mailinator.com', '+1 (683) 971-2243', '$2y$10$MObFLkjpjhWMkEv/w5VA5O0iC0a98M3mK4r1qlezL2mjePIgAEajO', 1, NULL, NULL, NULL, 0, 1, 0, '2022-04-25 10:44:07', '2022-04-25 10:44:07'),
(46, 'Scarlett', 'Deleon', 'taqaxy', 'qojy@mailinator.com', '+1 (798) 803-7565', '$2y$10$exTue3q5hchltFiqosO77ONITGYH4WuBoruSF6NUncWaKbkZ/e1Zi', 1, NULL, NULL, '', 0, 0, 0, '2022-04-25 10:55:38', '2022-04-25 10:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

CREATE TABLE `tbl_user_details` (
  `tbl_user_details_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_address` varchar(100) DEFAULT NULL,
  `user_country` varchar(100) DEFAULT NULL,
  `user_state` varchar(100) DEFAULT NULL,
  `user_city` varchar(100) DEFAULT NULL,
  `zip_code` varchar(100) DEFAULT NULL,
  `user_about` text DEFAULT NULL,
  `user_image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_details`
--

INSERT INTO `tbl_user_details` (`tbl_user_details_id`, `user_id`, `user_address`, `user_country`, `user_state`, `user_city`, `zip_code`, `user_about`, `user_image`, `created_at`, `updated_at`) VALUES
(7, 8, 'bonosri', 'Bangladesh', 'India', 'dhaka', '2023', 'alhamdulilallah', '1652002757_d04c814f2a274ae40d29.jpg', '2022-03-24 06:41:36', '2022-05-08 09:39:17'),
(8, 9, '', '', '', '', '322', '', '1650448140_0a091ebf6edbe5adffba.jpg', '2022-03-24 08:04:34', '2022-04-20 09:49:00'),
(9, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-24 08:29:35', '2022-03-24 08:29:35'),
(10, 11, 'Bonosri', 'Bangladesh', 'India', 'dhaka', '2002', '0', NULL, '2022-03-24 09:38:03', '2022-03-24 09:38:36'),
(11, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-29 08:49:04', '2022-03-29 08:49:04'),
(12, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-29 08:51:53', '2022-03-29 08:51:53'),
(13, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-30 05:10:25', '2022-03-30 05:10:25'),
(14, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-24 06:28:44', '2022-04-24 06:28:44'),
(15, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-24 09:32:22', '2022-04-24 09:32:22'),
(16, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-24 09:34:18', '2022-04-24 09:34:18'),
(17, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-24 09:35:57', '2022-04-24 09:35:57'),
(18, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-24 09:44:26', '2022-04-24 09:44:26'),
(19, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-24 09:48:10', '2022-04-24 09:48:10'),
(20, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-24 09:50:07', '2022-04-24 09:50:07'),
(21, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-24 09:53:22', '2022-04-24 09:53:22'),
(22, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-24 11:59:30', '2022-04-24 11:59:30'),
(23, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 03:18:48', '2022-04-25 03:18:48'),
(24, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 03:20:06', '2022-04-25 03:20:06'),
(25, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 03:38:30', '2022-04-25 03:38:30'),
(26, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 03:39:22', '2022-04-25 03:39:22'),
(27, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 03:41:34', '2022-04-25 03:41:34'),
(28, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 03:46:00', '2022-04-25 03:46:00'),
(29, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 03:51:26', '2022-04-25 03:51:26'),
(30, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 04:05:05', '2022-04-25 04:05:05'),
(31, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 04:23:37', '2022-04-25 04:23:37'),
(32, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 04:53:09', '2022-04-25 04:53:09'),
(33, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 04:57:42', '2022-04-25 04:57:42'),
(34, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 05:05:33', '2022-04-25 05:05:33'),
(35, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 05:38:02', '2022-04-25 05:38:02'),
(36, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 05:45:17', '2022-04-25 05:45:17'),
(37, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 05:53:14', '2022-04-25 05:53:14'),
(38, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 05:57:35', '2022-04-25 05:57:35'),
(39, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 06:32:31', '2022-04-25 06:32:31'),
(40, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 06:36:40', '2022-04-25 06:36:40'),
(41, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 06:38:06', '2022-04-25 06:38:06'),
(42, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 06:39:32', '2022-04-25 06:39:32'),
(43, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 06:48:40', '2022-04-25 06:48:40'),
(44, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 06:51:55', '2022-04-25 06:51:55'),
(45, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 06:54:08', '2022-04-25 06:54:08'),
(46, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 06:57:01', '2022-04-25 06:57:01'),
(47, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 07:43:26', '2022-04-25 07:43:26'),
(48, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 08:05:02', '2022-04-25 08:05:02'),
(49, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 08:15:52', '2022-04-25 08:15:52'),
(50, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:06:37', '2022-04-25 10:06:37'),
(51, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:07:29', '2022-04-25 10:07:29'),
(52, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:08:25', '2022-04-25 10:08:25'),
(53, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:10:26', '2022-04-25 10:10:26'),
(54, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:11:12', '2022-04-25 10:11:12'),
(55, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:12:23', '2022-04-25 10:12:23'),
(56, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:12:46', '2022-04-25 10:12:46'),
(57, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:14:54', '2022-04-25 10:14:54'),
(58, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:23:24', '2022-04-25 10:23:24'),
(59, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:23:58', '2022-04-25 10:23:58'),
(60, 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:40:19', '2022-04-25 10:40:19'),
(61, 44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:41:35', '2022-04-25 10:41:35'),
(62, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:44:07', '2022-04-25 10:44:07'),
(63, 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-25 10:47:42', '2022-04-25 10:47:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_types`
--

CREATE TABLE `tbl_user_types` (
  `tbl_user_type_id` int(11) UNSIGNED NOT NULL,
  `type_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_items`
--

CREATE TABLE `testimonial_items` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `quote` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonial_items`
--

INSERT INTO `testimonial_items` (`id`, `name`, `address`, `quote`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Nirob 11', 'Animi, America', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fugiat iure, sunt rerum saepe odit atque porro exercitationem enim dolor asperiores. Aliquam quo, iure ullam sed perferendis corrupti odit earum atque porro exercitationem.', '1650099210_48b7b41af833557783e5.jpg', '2022-04-16 08:53:30', '2022-04-16 08:53:30'),
(6, 'David ABC', 'florida Texas America', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur fugiat iure, sunt rerum saepe odit atque porro exercitationem enim dolor asperiores. Aliquam quo, iure ullam sed perferendis corrupti odit earum atque porro exercitationem.', '1650101214_9aa7af89d1e420985b85.jpg', '2022-04-16 09:26:54', '2022-04-16 09:26:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `choose_reason_items`
--
ALTER TABLE `choose_reason_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_reviews`
--
ALTER TABLE `company_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_items`
--
ALTER TABLE `contact_us_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cta_items`
--
ALTER TABLE `cta_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_items`
--
ALTER TABLE `faq_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend_settings`
--
ALTER TABLE `frontend_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ms_templates`
--
ALTER TABLE `ms_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_pages`
--
ALTER TABLE `new_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy_pages`
--
ALTER TABLE `policy_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_tickets`
--
ALTER TABLE `support_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`tbl_user_id`);

--
-- Indexes for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD PRIMARY KEY (`tbl_user_details_id`);

--
-- Indexes for table `tbl_user_types`
--
ALTER TABLE `tbl_user_types`
  ADD PRIMARY KEY (`tbl_user_type_id`);

--
-- Indexes for table `testimonial_items`
--
ALTER TABLE `testimonial_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `choose_reason_items`
--
ALTER TABLE `choose_reason_items`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `company_reviews`
--
ALTER TABLE `company_reviews`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `contact_us_items`
--
ALTER TABLE `contact_us_items`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cta_items`
--
ALTER TABLE `cta_items`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq_items`
--
ALTER TABLE `faq_items`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `frontend_settings`
--
ALTER TABLE `frontend_settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `ms_templates`
--
ALTER TABLE `ms_templates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `new_pages`
--
ALTER TABLE `new_pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `policy_pages`
--
ALTER TABLE `policy_pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `tbl_user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  MODIFY `tbl_user_details_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_user_types`
--
ALTER TABLE `tbl_user_types`
  MODIFY `tbl_user_type_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonial_items`
--
ALTER TABLE `testimonial_items`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
