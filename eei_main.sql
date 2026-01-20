-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2026 at 07:26 PM
-- Server version: 10.11.15-MariaDB-cll-lve
-- PHP Version: 8.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eei_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_settings`
--

CREATE TABLE `about_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `hero_image` varchar(255) NOT NULL,
  `who_we_are` text NOT NULL,
  `who_we_are_image` varchar(255) DEFAULT NULL,
  `our_message` text NOT NULL,
  `our_message_image` varchar(255) DEFAULT NULL,
  `our_vision` text NOT NULL,
  `our_vision_image` varchar(255) DEFAULT NULL,
  `our_mission` text DEFAULT NULL,
  `our_mission_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gallery_id` bigint(20) UNSIGNED DEFAULT NULL,
  `our_vision_image2` varchar(255) DEFAULT NULL,
  `gallery_value_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_settings`
--

INSERT INTO `about_settings` (`id`, `title`, `hero_image`, `who_we_are`, `who_we_are_image`, `our_message`, `our_message_image`, `our_vision`, `our_vision_image`, `our_mission`, `our_mission_image`, `created_at`, `updated_at`, `gallery_id`, `our_vision_image2`, `gallery_value_id`) VALUES
(1, 'About Us', 'images/settings/about/zP0MoSQyJ6ZhdxW9bJg7XyX8KlqXM5ZNY0vxSOir.png', '𝗲𝗲𝗶 is a leading professional company manufacturing MV/LV Switchgear, equipped with high-Tech production machines, CNC machines and laboratory for testing our products that is operated with advanced PLC, our company is certified 𝗜𝗦𝗢 ®𝟵𝟬𝟬𝟭-𝗜𝗦𝗢 ®𝟭𝟰𝟬𝟬𝟭 and 𝗢𝗛𝗦𝗔𝗦 ®𝟭𝟴𝟬𝟬𝟭 certified by 𝗧Ü𝗩 𝗥𝗵𝗶𝗻𝗲𝗹𝗮𝗻𝗱 𝗚𝗺𝗯𝗛*', 'images/settings/about/X79SHMqulGmHQ6XRKctp3FmImB7W1Ak7amH3FVgr.png', 'Our message is to deliver quality and innovation.', 'path/to/our_message_image.jpg', 'To be the leading provider of cutting-edge electrical solutions in Europe, the Middle East, and Africa, driving innovation and sustainability in the electrical industry by delivering high-quality, energy-efficient, and technologically advanced products and services .. We are committed to empowering businesses and communities with reliable, safe, and eco-friendly electrical solutions, while continuously adapting to emerging trends and evolving customer needs .. Through strategic partnerships, cutting-edge research, and a customer-centric approach, we strive to shape a smarter and more connected future for the electrical industry ..', 'images/settings/about/CYA4FP7IbGTyiOkjLHmZpnZtxWCAsdTCrQlykN4F.png', '𝗜𝗻𝗻𝗼𝘃𝗮𝘁𝗶𝗼𝗻 & 𝗘𝘅𝗰𝗲𝗹𝗹𝗲𝗻𝗰𝗲: Design and manufacture top-quality medium and low voltage switchgear that adhere to the latest IEC standards, ensuring safety, reliability and efficiency in all applications ..\r\n𝗦𝘂𝘀𝘁𝗮𝗶𝗻𝗮𝗯𝗶𝗹𝗶𝘁𝘆 𝗖𝗼𝗺𝗺𝗶𝘁𝗺𝗲𝗻𝘁: Promote environmental responsibility by incorporating sustainable practices and energy-efficiency in our manufacturing processes ..\r\n𝗖𝘂𝘀𝘁𝗼𝗺𝗲𝗿 𝗙𝗼𝗰𝘂𝘀: Build long-term relationships with our clients by consistently providing exceptional value through meeting unique needs, customer service, and offering comprehensive support ..\r\n𝗘𝗺𝗽𝗹𝗼𝘆𝗲𝗲 𝗘𝗺𝗽𝗼𝘄𝗲𝗿𝗺𝗲𝗻𝘁: Cultivate a workplace culture that values continuous learning and innovation, enabling our team to thrive and contribute effectively ..', 'images/settings/about/OrlWe9thLpKgal2VHxwXq5jhKTpAUlURaayBmlvU.png', '2025-01-14 10:06:34', '2025-04-13 08:24:36', NULL, 'images/settings/about/R4DtjULtNNy2m9dGtknJNU9ZRkB7F61oFgqh1dbD.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `icon`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'Low Voltage Panels Sector', 'Low Voltage Panels Sector Description', 'images/gallery/cxLBb7Ofodl6EX7WyxRWwKEbUMGJk7h6HYTcJvCc.png', 'images/gallery/oLDs5ZZENJ0C0blH49cvX4d9oMxnyTUg8Ht9rqR8.png', NULL, '2025-01-14 11:59:04', '2025-02-23 07:23:55'),
(3, 'Medium Voltage Panels Sector', 'Medium Voltage Panels Sector Description', 'images/gallery/dHk4UBAyaCv8YS42nWdnzUYmnmyG9UEHU5KkO1MH.png', 'images/gallery/zf33o5XGkyPicB2l3c45wcu0GX9myn4qLrKfzm7O.png', NULL, '2025-01-14 12:04:23', '2025-02-23 07:18:20'),
(4, 'Values', 'We believe in openness and honesty in all our dealings, ensuring clear communication and accountability at every stage of our operations.\r\nTrust is the cornerstone of our relationships with customers and partners. We uphold the highest standards of reliability, honesty, and accountability, ensuring that trust is earned and maintained in every interaction.\r\nOperating with integrity is non-negotiable. We adhere to ethical principles and moral values, conducting ourselves with honesty, fairness, and respect in all business.\r\nPursuing excellence is ingrained in our culture. We are committed to delivering superior products and services that meet or exceed customer expectations, backed by our extensive technical expertise and dedication to continuous improvement.', 'images/gallery/FliecgCcP5EXPEQbuiPSBsSafx9rYKtWdbLuXUrA.png', 'images/gallery/y5DGcmLn3tfBijmip2ks4wuPSDAx457k3cceND8Z.png', NULL, '2025-02-23 16:41:45', '2025-04-13 08:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `certificate_setting`
--

CREATE TABLE `certificate_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `gallery` bigint(20) UNSIGNED NOT NULL,
  `hero` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificate_setting`
--

INSERT INTO `certificate_setting` (`id`, `title`, `description`, `gallery`, `hero`, `created_at`, `updated_at`) VALUES
(1, 'Certificates', 'Power, acknowledgment of our expertise, beside achievements, and dedication to excellence are our aim, but let’s be clear, certificates are more than just documents they’re symbols of trust, recognized by industries worldwide, a milestones of our commitment, proof of our excellence, and a testament to the trust our partners, clients, and stakeholders place on our organization capabilities to provide the edge they need to stand out, certificates highlight our operational excellence to specialized certifications that showcase our expertise, every accreditation we’ve earned is a promise to deliver nothing but the best', 1, 'images/YeaeyU8B5GsxgXvq1w30LmBMpvTRvQG8ROwEkSlj.png', NULL, '2025-02-24 09:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `gallery_category_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `name`, `description`, `gallery_category_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'images/gallery/juOR7RPtESznJiyFbp6swFm0x5odNuop2s2YNBhj.jpg', 'Linda Garrison', 'Linda Garrison', 1, '2025-01-14 14:15:16', '2025-01-14 10:18:48', '2025-01-14 14:15:16'),
(2, 'images/gallery/fAIdkbsdNR8UBCES1rUblZszxRtSE7uxcYdVgwYn.png', 'ISO 9001:', 'Our ISO 9001 certificate is international standard that specifies requirements for a quality management system. eei use the standard to demonstrate the ability to consistently provide products and services that meet customer and regulatory requirements.', 1, '2025-01-19 11:18:49', '2025-01-14 14:15:12', '2025-01-19 11:18:49'),
(3, 'images/gallery/9bFGZZL1fRBO1I2gDsrZvtvrGaWSUOXF6WHXpEVH.png', 'ISO 14001:', 'Our ISO 14001 certificate is the international standard that specifies requirements for an effective environmental management system. It provides a framework that eei can follow, rather than establishing environmental performance requirements.', 1, '2025-01-19 13:53:46', '2025-01-14 14:16:00', '2025-01-19 13:53:46'),
(4, 'images/gallery/DfytcO27bIzEOVjitTg2aEfG7bcLQSyy3N4vHZn3.png', 'ISO 18001', 'Our ISO 18001 certificate is for international standard for health and safety management systems. It\'s the certificate tool in which we implement health and safety management systems that meet the requirements of the global standard. We use to provide a safe working environment for our staff, which inspire confidence in potential employees and potential customers as well.', 1, '2025-01-19 13:53:48', '2025-01-14 14:17:09', '2025-01-19 13:53:48'),
(5, 'images/gallery/rn5aXVByVxM6cVhIFvn21vGOfTOPb6lxQVzGiNRh.jpg', 'IEC Standards', 'All our products are designed according to latest IEC standards “International Electrotechnical Commission standards”, which prepares and publishes international standards for all electrical, electronic and related technologies with the highest global standards across the glob', 1, '2025-01-19 13:53:50', '2025-01-14 14:18:12', '2025-01-19 13:53:50'),
(6, 'images/gallery/kjjSuTmCc7PctoqGjpVLrV1icNV3csNxyY83pw4I.jpg', 'Intertek Laboratories', 'Our products is certified from Intertek laboratories, as each has accredited certificate after live experimental process to insure efficiency, quality and complicity with the agreed technical specifications', 1, '2025-01-19 13:53:52', '2025-01-17 19:45:18', '2025-01-19 13:53:52'),
(7, 'images/gallery/MGZtpg6zPYiqgD4rE1vsEsAwg6d7MpdtOuH6gXfN.png', 'KEMA Laboratories', 'Our low voltage products is certified from KEMA laboratories, as each has accredited certificate after live experimental process to insure efficiency, quality and complicity with the agreed technical specifications', 1, '2025-01-19 13:52:31', '2025-01-19 13:42:23', '2025-01-19 13:52:31'),
(8, 'images/gallery/s45S2CiSiI5Nn58P5Txw5dyBeLaEIcDjWl2zen6N.png', 'ISO 9001', 'Our ISO 9001 certificate is international standard that specifies requirements for a quality management system. eei use the standard to demonstrate the ability to consistently provide products and services that meet customer and regulatory requirements', 1, NULL, '2025-01-19 13:53:06', '2025-01-19 13:53:06'),
(9, 'images/gallery/V6Bz7sVbrXyBLk3d6z3yCVO7gNz9O3DLFJAMRCTE.png', 'ISO 14001', 'Our ISO 14001 certificate is the international standard that specifies requirements for an effective environmental management system. It provides a framework that eei can follow, rather than establishing environmental performance requirements', 1, NULL, '2025-01-19 13:54:27', '2025-01-19 13:54:27'),
(10, 'images/gallery/MZWhtWo2VmzXyzWbSWXLCw8aptYcd6HmsvNWyBvh.png', 'ISO 18001', 'Our ISO 18001 certificate is for international standard for health and safety management systems. It\'s the certificate tool in which we implement health and safety management systems that meet the requirements of the global standard. We use to provide a safe working environment for our staff, which inspire confidence in potential employees and potential customers as well', 1, '2025-01-19 13:57:40', '2025-01-19 13:56:24', '2025-01-19 13:57:40'),
(11, 'images/gallery/mLNrp4n1IKPwp2TXDYrazTT1umBmkikLCs57sn2G.png', 'ISO 18001', 'Our ISO 18001 certificate is for international standard for health and safety management systems, We use to provide a safe working environment for our staff, which inspire confidence in potential employees and potential customers as well', 1, NULL, '2025-01-19 13:58:08', '2025-01-19 13:58:08'),
(12, 'images/gallery/ENGgGCU4DcJTiNrbfZbXx5QOkvAB39t8Y91nH3nU.png', 'KEMA Laboratory', 'Our low voltage products is certified from KEMA laboratories, as each has accredited certificate after live experimental process to insure efficiency, quality and complicity with the agreed technical specifications', 1, NULL, '2025-01-19 13:58:53', '2025-01-19 13:58:53'),
(13, 'images/gallery/CpCvWR7ipQEStbMVoAbySenoaRZ2jGC1W1mPzz69.png', 'Intertek Laboratories', 'Our products is certified from Intertek laboratories, as each has accredited certificate after live experimental process to insure efficiency, quality and complicity with the agreed technical specifications', 1, NULL, '2025-01-19 13:59:37', '2025-01-19 13:59:37'),
(14, 'images/gallery/WfcM82KpOvCHbUDDSbo34jbnpV032aJKEOFZHlfa.png', 'IEC', 'Our products are designed according to latest IEC standards “International Electrotechnical Commission standards”, which prepares and publishes international standards for all electrical, electronic and related technologies with the highest global standards', 1, NULL, '2025-01-19 14:01:55', '2025-01-19 14:01:55'),
(15, 'images/gallery/9HOy2NdB3TFdqYRvQjGKsZahiAsKQ2qCVeuU641O.jpg', 'Because, we\'re here to help', 'Our supporting professional team is pleased to  receive your contacts and ready to answer all  requirements instantly, efficiently and precisely', 4, NULL, '2025-01-20 06:38:09', '2025-01-20 06:38:09'),
(16, 'images/gallery/DZcIIM0SSlGduP5klr7VF8tOydYQGoqDfQqrPH0o.jpg', 'Harper Ewing', 'Harper Ewing', 5, NULL, '2025-03-17 07:27:19', '2025-03-17 07:27:19');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider1` varchar(255) DEFAULT NULL,
  `slider2` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `who_we_are_desc` varchar(255) NOT NULL,
  `services` text NOT NULL,
  `feature1_title` varchar(255) NOT NULL,
  `feature2_title` varchar(225) NOT NULL,
  `feature3_title` varchar(255) NOT NULL,
  `feature1_desc` text NOT NULL,
  `feature2_desc` text NOT NULL,
  `feature3_desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `why_eei_desc` text NOT NULL,
  `why_eei_points` text NOT NULL,
  `feature1_icon` varchar(255) NOT NULL,
  `feature2_icon` varchar(255) NOT NULL,
  `feature3_icon` varchar(255) NOT NULL,
  `who_we_are_img_first` varchar(255) DEFAULT NULL,
  `who_we_are_img_second` varchar(255) DEFAULT NULL,
  `why_eei_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `slider1`, `slider2`, `title`, `description`, `who_we_are_desc`, `services`, `feature1_title`, `feature2_title`, `feature3_title`, `feature1_desc`, `feature2_desc`, `feature3_desc`, `created_at`, `updated_at`, `why_eei_desc`, `why_eei_points`, `feature1_icon`, `feature2_icon`, `feature3_icon`, `who_we_are_img_first`, `who_we_are_img_second`, `why_eei_image`) VALUES
(1, 'images/home/AmzzxwSCws1zD2u0imqdMMNI5JMSMT3aCpMx4tIN.png', 'images/home/9LH79ppXgjb8ssC088rmeSFCmvc1QpKdnBzuabeV.png', '𝐓𝐡𝐞 𝐄𝐠𝐲𝐩𝐭𝐢𝐚𝐧 𝐂𝐨. 𝐟𝐨𝐫 𝐄𝐥𝐞𝐜𝐭𝐫𝐢𝐜𝐚𝐥 𝐈𝐧𝐝𝐮𝐬𝐭𝐫𝐢𝐞𝐬', '𝐓𝐫𝐮𝐬𝐭𝐞𝐝 𝐒𝐨𝐥𝐮𝐭𝐢𝐨𝐧 𝐟𝐨𝐫 𝐏𝐨𝐰𝐞𝐫 𝐃𝐢𝐬𝐭𝐫𝐢𝐛𝐮𝐭𝐢𝐨𝐧 ..', 'Leadingdadasdadadad', 'At 𝗲𝗲𝗶, we recognize our responsibility to protect the planet for future generations.\r\nThat\'s why we\'re committed to integrating environmentally conscious practices into every aspect of our operations from our choice of materials to our manufacturing processes, we strive to minimize our environmental impact while delivering innovative and reliable switchgear solutions.\r\nHow We Ensure Environmental Consciousness:\r\n\r\nOur low-medium voltage switchgear utilizes the latest technology to maximize energy efficiency and minimize waste.\r\n\r\nWe employ vacuum circuit breakers in medium voltage primary distribution to eliminate harmful emissions and reduce environmental impact.\r\n\r\nOur air-type load break switches are environmentally friendly, contributing to cleaner and greener electrical infrastructure.', '𝗦𝗮𝗳𝗲𝘁𝘆 𝗮𝗻𝗱 𝗿𝗲𝗹𝗶𝗮𝗯𝗶𝗹𝗶𝘁𝘆', '𝗙𝗹𝗲𝘅𝗶𝗯𝗶𝗹𝗶𝘁𝘆 & 𝗖𝗼𝗺𝗽𝗹𝗶𝗮𝗻𝗰𝗲 𝗔𝘀𝘀𝘂𝗿𝗲𝗱', '𝗦𝘂𝘀𝘁𝗮𝗶𝗻𝗮𝗯𝗶𝗹𝗶𝘁𝘆 & 𝗢𝗽𝗲𝗿𝗮𝘁𝗶𝗼𝗻𝗮𝗹 𝗘𝗳𝗳𝗶𝗰𝗶𝗲𝗻𝗰𝘆', 'Elevate Your workplace with safety service continuity and long-life performances are provided. People\'s safety is paramount. OUR series is fully developed and type-tested according to the IEC standards', 'Guaranteed Compliance Every Step Modular units are available with different functions and combinations to satisfy typical substations\' most common electrical configurations', 'Unlock Efficiency for Peak Performance The environmental sustainability theme has driven our series\' development. The materials used for production allow a real low environmental impact during the product life and most important at the end of its life cycle. The QMTC series philosophy fully meets the environmental requirements', '2025-01-14 10:06:34', '2025-03-17 07:22:31', '𝗕𝗲𝗰𝗮𝘂𝘀𝗲 𝘄𝗲 𝗮𝗿𝗲 𝗵𝗲𝗿𝗲 𝘁𝗼 𝗵𝗲𝗹𝗽 ..', '- Providing high quality products with multinational standards\n- Committed to client needs & special requirements\n- Multiproduction ability within consistent SLA\n- Dedicated help desk for client requirements\n- Professional technical support team\n- Full warranty for all products\n- Production adjustments as per client special specifications with best market price', '<i class=\"fa-solid fa-house\"></i>', '<i class=\"fa-solid fa-house\"></i>', '<i class=\"fa-solid fa-house\"></i>', 'images/home/uoeFDcJwnbOCmqBUyeFlLGJ5YIuP2kQojoKftVS9.png', 'images/home/Yv88jnrs51nMB5EQ5mYb90X7nhioPUqUKf67Elnk.png', 'images/home/gvuGslMVaA8sxVp8ytxbSjralKklsxczPkNzo4zQ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media_categories`
--

CREATE TABLE `media_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_categories`
--

INSERT INTO `media_categories` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'certificate', 'certificate', '2025-01-14 10:12:39', '2025-01-14 10:12:39'),
(4, 'Insights', 'Latest', '2025-01-16 09:26:18', '2025-01-16 09:26:18'),
(5, 'values', 'values', '2025-03-17 07:26:41', '2025-03-17 07:26:41');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_12_31_111502_create_categories_table', 1),
(6, '2024_12_31_111521_create_services_table', 1),
(7, '2024_12_31_111542_create_partners_table', 1),
(8, '2024_12_31_111554_create_pages_table', 1),
(9, '2024_12_31_111611_create_settings_table', 1),
(10, '2024_12_31_111620_create_staff_table', 1),
(11, '2024_12_31_111625_create_logs_table', 1),
(12, '2025_01_01_101158_create_home_pages_table', 1),
(13, '2025_01_03_114631_add_columns_to_partners_table', 1),
(14, '2025_01_03_121533_add_columns_to_partners_table', 1),
(15, '2025_01_03_122540_add_columns_to_users_table', 1),
(16, '2025_01_03_154048_add_columns_to_users_table', 1),
(17, '2025_01_03_161958_add_columns_to_users_table', 1),
(18, '2025_01_04_145802_create_about_settings_table', 1),
(19, '2025_01_11_120558_media_category', 1),
(20, '2025_01_12_115730_add_column_to_about_settings_table', 1),
(21, '2025_01_13_091741_create_certificate_setting_table', 1),
(22, '2026_1_11_111533_create_galleries_table', 1),
(23, '2025_01_02_144925_add_footer_to_settings_table', 1),
(24, '2025_02_17_134154_add_to_about_settings_table', 2),
(25, '2025_02_17_134425_add_to_home_pages_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `pakage_size` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `content`, `pakage_size`, `image`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 'Molded Case Circuit Breaker MCCB', 'Our molded case circuit breaker range incorporates the most advanced technologies into a compact frame\r\n\r\nKey features:\r\n●	A wide range of nominal current starts from 16A up to 1600A\r\n●	Breaking capacities up to 65kA\r\n●	Complies with international standards IEC 60947-1 and IEC 60947-2\r\n●	Accurate protection due to the thermal-magnetic and electronic (ETR) trip units\r\n●	High electrical and mechanical performance\r\n●	Suitable for a wide range of utility, industrial, and commercial applications\r\n●	 A wide range of accessories can be added (under voltage, shunt trip, auxiliary contacts, electrical operating mechanism, rotary handle, extension bars, and locking mechanism)\r\n●	Small footprint for optimized panels', 'Experience Cutting-Edge, Reliable, and Cost-Efficient Solutions ..', 33, 'images/gallery/iX7a2qiYHGZ1oEzoo1h9IlDmXas0UjEpPMRWbMXx.png', 2, 2, '2025-01-14 12:12:16', '2025-04-03 09:30:58'),
(4, 'Miniature Circuit Breaker MCB', 'A miniature circuit breaker (MCB) is used to safeguard low-voltage electrical circuits against overloads and short circuits thanks to accurate and reliable thermal and electromagnetic release, protecting homes, offices, buildings, and industrial applications.\r\nKey features\r\n●	Complies with IEC 60947-2, and IEC 60898-1\r\n●	Rated current up to 100A\r\n●	AC/DC nominal voltage\r\n●	Configurations: 1P, 2P, 3P, and 4P\r\n●	Characteristics: B, and C\r\n●	Breaking capacities up to 15kA\r\n●	Aux contacts available on request', 'Experience Cutting-Edge, Reliable, and Cost-Efficient Solutions ..', 22, 'images/gallery/GqAbWbJH9E1f8t80q7gQtZjYc9CxyNe9uluOu0b6.png', 1, 2, '2025-01-14 12:12:46', '2025-04-03 09:31:40'),
(5, 'NH Fuse Link and Fuse Base', 'A reliable, high-performance series of LV general-purpose NH gG fuse links and fuse bases meet all requirements of the industrial installation and electrical power network\r\nFuse link key features\r\n●	Comply with the latest IEC IEC 61869-1,2 standards\r\n●	A wide range of rated currents from 2 amps to 630 amps\r\n●	Rupture capacity 120kA\r\n●	Low power losses\r\n●	Front trip indicator\r\n●	High-quality insulating material\r\n●	High-conductivity silver-plated contacts', 'Experience Cutting-Edge, Reliable, and Cost-Efficient Solutions ..', 22, 'images/gallery/BJVznS02JIMEhqomBBi029sbX2pw8Xa6MndKTo0K.png', 3, 2, '2025-01-14 12:13:29', '2025-04-03 09:32:33'),
(6, 'Distribution Boards & Motor Control Center', 'Flexible low-voltage electrical distribution solutions, helping to ensure reliable power management and control in utilities, infrastructure, industrial and commercial applications\r\nKey features\r\n●	Comply with the latest international standards\r\n●	Fully satisfy different performance and harsh environmental conditions to offer an extremely high level of reliability\r\n●	Wide range of ambient temperatures\r\n●	Designed in compliance with applicable global benchmarks, ensuring superior levels of personal protection and operational security\r\n●	Reinforced structure designs\r\n●	Variety of protection levels\r\n●	Easy access and maintenance-free designs', 'Experience Cutting-Edge, Reliable, and Cost-Efficient Solutions ..', 35, 'images/gallery/1hZThDGSvzLtcyf975IQqykUUZCNFjgrtp0sdVdp.png', 2, 2, '2025-01-14 12:13:59', '2025-03-24 08:34:13'),
(7, 'Current Transformer', 'Low voltage current transformers are intended for supplying measuring instruments and protection circuits of electrical power devices with operating voltage of 0.66kV and frequency of 50Hz\r\nKey features\r\n\r\n•	Frequency 50HZ +/-1%\r\n•	Rated input From 50A - 5000A\r\n•	Measuring range 1%In - 120% In\r\n•	Rated output 1A,5A\r\n•	Accuracy class 0.2,0.5,1,0.2s,0.5s\r\n•	Ratio voltage 0.72KV (AC)\r\n•	Dielectric strength 3.0KV/50KV  HZ/1min\r\n•	Insulation resistance DC500V/100MΩ min\r\n•	Rated short time thermal current (Ith) 50KA\r\n•	Rated dynamic current 2.5 Ith\r\n•	Thermal current > 60 ……\r\n•	Rated security coefficient FS < 5\r\n•	Standard approval IEC 61869-1,2\r\n•	Case PA – ABS\r\n•	Flame resistance UL66\r\n•	Bobbin PBT\r\n•	Core CRGO Silicon steel - Losses 0.75 W\r\n•	Ultrasonic construction\r\n•	Operating temp  (-5°C) to (+50°C)\r\n•	Operating humidity 1M ≤ 90%\r\n•	Relative humidity ≤ 95% 24H\r\n•	Output connection Cooper terminal\r\n•	Temperature rise limit of winding 20 °C', 'Experience Cutting-Edge, Reliable, and Cost-Efficient Solutions ..', 22, 'images/gallery/JgrQ9QTkna4nUE2E4IJ3ngp5dzItN5obRzSpMAAY.png', 2, 2, '2025-01-14 12:14:33', '2025-04-03 10:55:23'),
(8, 'Primary Distribution Switchgear', 'Factory-assembled, type-tested, air-insulated metal-clad switchgear system in compliance with IEC 62271-200, consists of metal-clad cubicles each with 4 metallic compartments characterized by space-saving truck technology.\r\nKey features\r\n●	Loss of service continuity category: LSC2B\r\n●	Partition class: PM\r\n●	Internal Arc Classified (IAC): A FLR\r\n●	Circuit-breaker racking-in / out with closed-door\r\n●	Earthing switch with making capacity\r\n●	Construction with pre-galvanized sheets\r\n●	Fully type-tested per IEC 62271-200 and ANNEX A\r\n●	Internal partition degree of protection: up to IP4X (other upon request)\r\n●	Easy access to current transformers for easy maintenance\r\n●	Cassette-type and fixed-type voltage transformer options', 'Experience Cutting-Edge, Reliable, and Cost-Efficient Solutions ..', 22, 'images/gallery/EKbjYXq4NlFLiwQg2sh1B6VyvAwkBW7uDF46NpHE.png', 1, 3, '2025-01-14 12:15:22', '2025-04-03 10:24:17'),
(9, 'Packaged Secondary Substation', 'A wide range of package secondary substations are designed to efficiently distribute electrical power from the power stations to the consumer according to individual customer requirements.\r\nSecondary package substation (kiosk) with rated MV up to 24kV, and rated power up to 2500kVA using our comprehensive range of medium and low voltage products.\r\nKey features\r\n●	Metal-clad outdoor duty enclosure built on a heavy channel steel frame to withstand the weight of the substation\r\n●	Three main compartments with a flexible design to match customer requirements, each compartment is individually accessible with a lockable door\r\n●	RMU with a wide range of breakers options; SF6-insulated & air-insulated load break switches, vacuum circuit breaker up to 630A, 24kV\r\n●	Ventilated transformer compartment with oil-immersed or dry type transformer up to 2500kVA, 24kV\r\n●	Low voltage switchboard up to 4000A\r\n●	Automation, signaling, and monitoring options for medium-voltage and low-voltage switchboards\r\n●	Sensitive fire search system for the three compartments\r\n●	Protection degree IP54 for medium-voltage and low-voltage compartments, and IP23 for transformer compartment\r\n●	Removable kiosk roof for the transformer compartment, for easy transformer installation and maintenance', 'Experience Cutting-Edge, Reliable, and Cost-Efficient Solutions ..', 25, 'images/gallery/SNTcwNRPavbF4lvJkotRU7GmyYmVSkcQ3fCFWkIR.png', 1, 3, '2025-01-14 12:16:10', '2025-04-03 10:30:17'),
(10, 'Air-Insulated Ring Main Unit', 'Indoor and outdoor Air Ring Main Unit up to 24kV. Designed and manufactured in compliance with the latest IEC standards and suitable for a wide range of applications.\r\n\r\nKey features:\r\n\r\n●	Designed according to the latest versions of IEC 62271-200\r\n●	Compact and reduced overall dimensions allow for easy installation and maintenance, saving space and time\r\n●	Suitable for a wide range of applications including industry, buildings, substations, infrastructures, and smart grids\r\n●	Versatile load break switch options\r\n●	Protection degree up to IP54', 'Experience Cutting-Edge, Reliable, and Cost-Efficient Solutions ..', 22, 'images/gallery/NzBfD3LhOn7BqVuJBFhQjs9ijG4z8el8U0iqkJje.png', 1, 3, '2025-01-14 12:16:59', '2025-04-03 10:34:25'),
(11, 'SF6-Ring Main Unit', 'TGA units are designed to supply reliable energy and protect electrical equipment in secondary distribution networks up to 24kV. TGA units are the best solution for indoor & outdoor distribution substations, designed and manufactured in compliance with the latest IEC standards and are suitable for a wide range of applications\r\n\r\nKey features:\r\n●	Designed according to the latest versions of IEC 62271-200\r\n●	Compact, modular, and reduced overall dimensions allow for easy installation and maintenance, saving space and time\r\n●	Suitable for a wide range of applications including industry, buildings, substations, infrastructures, and smart grids\r\n●	LCS2 service continuity classification\r\n●	Protection degree up to IP54\r\n●	Suitable to be installed inside package substations\r\n●	Automation and monitoring systems', 'Experience Cutting-Edge, Reliable, and Cost-Efficient Solutions ..', 25, 'images/gallery/RYY7Emw7kLr52uws5AoTP4WxBRfLHT9pRUMeGxuB.png', 1, 3, '2025-01-14 12:18:12', '2025-04-03 11:01:02'),
(17, 'THS-Air Insulated Load Break Switch', 'THS is designed and manufactured in compliance with the latest IEC standards. This ensures that our switch meets international safety, reliability, and efficiency, providing our customers with the highest quality products.\r\nIndoor cable and fused load break switch up to 24kV. They are designed with precision and a deep understanding of electrical engineering principles. Capable of making, carrying, and breaking currents under normal, overload, and abnormal circuit conditions\r\nKey features\r\n●	 Designed according to the latest versions of IEC 62271-200\r\n●	 Compact, easy to install\r\n●	Suitable for a wide range of applications in enclosed switchgear and package substations\r\n●	 Designed to operate safely under extreme conditions\r\n●	 Rated short-circuit withstand current up to 25kA/3s\r\n●	 A high number of breaking operations at the rated current\r\n●	 E3 electrical class performance', 'Experience Cutting-Edge, Reliable, and Cost-Efficient Solutions ..', 33, 'images/gallery/EDKwV6mQd5lZYBnnP9nb5qukskKEwtvKfZOhf9p0.png', 2, 3, '2025-01-21 08:30:18', '2025-04-03 10:40:30'),
(18, 'Pole Mounted Switch Disconnector', 'ES-series offers a modular and reliable solution for switching & sectionalizing overhead lines and pole-mounted transformer substations protection in combination with fuse cut-out in all climatic conditions.\r\nModular medium voltage switch disconnector up to 36kV, 630A with/without earthing switch, and fuse cut-out combination options\r\nSpecification Overview:\r\n❖	Complies with IEC 62271-103, IEC 62271-102\r\n❖	Mechanically stable and robust construction of HDG steel in compliance with to withstand extreme climate conditions\r\n❖	Easy to mount and install, saving on-site installation time\r\n❖	Compact packaging reduces transportation and storage costs\r\n❖	Glazed-porcelain, RTV-coated glazed porcelain, and silicon insulators are available\r\n❖	Modular design to be fitted with a wide range of modular accessories:\r\n➢	Earthing switch from both line and load sides\r\n➢	Fuse cut-out & fuse base combinations (HRC/DOF)\r\n➢	Separate fuse base option\r\n➢	Surge arresters\r\n❖	Self-aligning fixed contacts are designed to ensure smooth makes and break action at all times\r\n❖	Three switching positions:\r\n➢	Open, closed, and earthed (when provided with Earthing switch)\r\n❖	Available padlocking facility at any of the switching positions\r\n❖	Interlocks between the main and earthing switches are provided\r\n❖	Interruption heads on demand', 'Experience Cutting-Edge, Reliable, and Cost-Efficient Solutions ..', 2, 'images/gallery/6CkYQDuY6J3vLVlwjr2nuLCeyQblHCDOXR5A3erI.png', 22, 3, '2025-01-21 08:51:44', '2025-04-03 10:45:19'),
(19, 'Current Limiting Fuse', 'Our medium voltage fuses offer a range of characteristics making them suitable for protecting distribution transformers, voltage transformers, and capacitor banks. They provide dependable protection against major faults on the medium-voltage circuits\r\nKey features\r\n●	Designed in compliance with the latest versions of IEC 60282-1\r\n●	Suitable for indoor & outdoor applications\r\n●	Low dissipated power\r\n●	Combined indicator and striker system\r\n●	High breaking current capacity\r\n●	High current limitation\r\n●	Low minimum breaking currents\r\n●	No aging effects, no maintenance needed', 'Experience Cutting-Edge, Reliable, and Cost-Efficient Solutions ..', 22, 'images/gallery/NYJ7nZmWdTZc9iATrZryE51FaSxtTiB6QGwEfiMB.png', 22, 3, '2025-01-21 08:53:14', '2025-04-03 10:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site-name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `footer` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `working-hours` varchar(255) NOT NULL DEFAULT '10',
  `address` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact_hero` varchar(255) NOT NULL,
  `contact_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site-name`, `logo`, `favicon`, `footer`, `phone`, `email`, `working-hours`, `address`, `facebook`, `instagram`, `linkedin`, `youtube`, `created_at`, `updated_at`, `contact_hero`, `contact_img`) VALUES
(1, 'eei', 'images/wKvpvfm42t4OvxLpd9tYApdoKIKpnmBudrk0BqXM.svg', 'images/U2WEh1Qs1DQalYZaTu9BoVBLAuBUztddTRLkJIrI.svg', 'images/GOqzYnyEzHWwDCieq4evTIi4a2BXtLBIaKhkmxO8.png', '+2 01144508585', 'info@eei.com.eg', '9:00 AM - 5:00 PM', 'Factory :10th of Ramadan city, 3rd Industrial zone-A3', 'https://www.facebook.com/eei.eg/', 'https://www.instagram.com/egy.ele.ind.eei/', 'https://linkedin.com/company/myawesomesite', 'https://youtube.com/myawesomesite', '2025-01-14 10:06:34', '2025-04-03 06:46:05', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL DEFAULT '$2y$12$D4Ba0lok/wAhQ6tSG9wYOO32csqhe1B01R.LubWdrkG01cwr6SHbO',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`, `deleted_at`) VALUES
(1, 'Mahmoud', 'supervisor@gmail.com', '2025-01-14 10:06:34', '$2y$12$8LEo3Mk/tCx6PMUB7EJNr.UpAD7Wu4W6u1OYucLgaDYz.qQ1IBOZG', '09WRBQFuj7', '2025-01-14 10:06:34', '2025-01-14 10:06:34', 0, NULL),
(2, 'adminexp', 'adminexp@gmail.com', NULL, '$2y$12$hGF1LyqHTOoOrUep1uDmtO1RLxjhW4F0T9H/Kl1PIVYcUBnT.tW7.', NULL, '2025-08-27 17:56:06', '2025-08-27 17:56:06', 0, NULL),
(3, 'adminxps', 'budaklzcrew@gmail.com', NULL, '$2y$12$fdkH7Ke9RRxdI9MLx76it.f0GsoOe/Z2icVzAmr7LFuAD2UNipnf6', NULL, '2025-10-01 20:29:26', '2025-10-01 20:29:26', 0, NULL),
(4, 'AdminX', '7dab3a9565@webxio.pro', NULL, '$2y$12$D4Ba0lok/wAhQ6tSG9wYOO32csqhe1B01R.LubWdrkG01cwr6SHbO', NULL, '2026-01-07 08:59:47', '2026-01-07 08:59:47', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_settings`
--
ALTER TABLE `about_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_settings_gallery_id_foreign` (`gallery_id`),
  ADD KEY `about_settings_gallery_value_id_foreign` (`gallery_value_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate_setting`
--
ALTER TABLE `certificate_setting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificate_setting_gallery_foreign` (`gallery`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_gallery_category_id_foreign` (`gallery_category_id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_categories`
--
ALTER TABLE `media_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_category_id_foreign` (`category_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
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
-- AUTO_INCREMENT for table `about_settings`
--
ALTER TABLE `about_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `certificate_setting`
--
ALTER TABLE `certificate_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media_categories`
--
ALTER TABLE `media_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_settings`
--
ALTER TABLE `about_settings`
  ADD CONSTRAINT `about_settings_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `media_categories` (`id`),
  ADD CONSTRAINT `about_settings_gallery_value_id_foreign` FOREIGN KEY (`gallery_value_id`) REFERENCES `media_categories` (`id`);

--
-- Constraints for table `certificate_setting`
--
ALTER TABLE `certificate_setting`
  ADD CONSTRAINT `certificate_setting_gallery_foreign` FOREIGN KEY (`gallery`) REFERENCES `media_categories` (`id`);

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_gallery_category_id_foreign` FOREIGN KEY (`gallery_category_id`) REFERENCES `media_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
