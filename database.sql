-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 06:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wace_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `discriptsion`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Company Name', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'IMG_20230815155059.jpeg', NULL, 1, NULL, '2023-08-15 09:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `authorities`
--

CREATE TABLE `authorities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authorities`
--

INSERT INTO `authorities` (`id`, `heading`, `title`, `discriptsion`, `sub_heading`, `sub_title`, `sub_discriptsion`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Your Trusted Partner in Talent Acquisition', 'Unlocking Potential, Empowering Success: Your Premier Recruitment Authority', 'As a recognized authority in the field of recruitment, [Company/Organization Name] has established itself as a trusted and influential player in the industry. Our expertise, experience, and commitment to excellence have earned us the reputation of being a go-to resource for organizations and job seekers alike. Here\'s what sets us apart as a recruitment authority:\r\n\r\nIn-depth Industry Knowledge:\r\nWith years of experience and a dedicated team of recruitment professionals, we possess deep industry knowledge across various sectors. We stay updated with the latest trends, market dynamics, and talent requirements, enabling us to provide expert insights and guidance to our clients.', '[\"Proven Track Record:\",\"Extensive Network:\",\"Tailored Recruitment Solutions:\"]', '[\"Proven Track Record:\",\"Extensive Network:\",\"Tailored Recruitment Solutions:\"]', '[\"Our track record speaks for itself. Over the years, we have successfully facilitated countless recruitment processes, matching top talent with leading organizations. Our consistent delivery of high-quality candidates and successful placements have established us as a reliable and results-oriented recruitment authority.\",\"We have built an extensive network of professionals, organizations, and industry contacts. This vast network allows us to tap into diverse talent pools, connect with key decision-makers, and access exclusive job opportunities. Our connections enable us to identify and engage with top talent that may not be easily accessible through traditional channels\",\"We understand that every organization has unique recruitment needs. As a recruitment authority, we provide customized solutions that align with the specific requirements of our clients. From crafting compelling job descriptions to conducting thorough candidate assessments, we tailor our services to ensure a precise fit for each hiring process.\"]', 'IMG_20230624064120.jpg', NULL, 1, NULL, '2023-06-26 06:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `brances`
--

CREATE TABLE `brances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `holiday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `opening_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ending_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brances`
--

INSERT INTO `brances` (`id`, `name`, `phone`, `email`, `address`, `holiday`, `opening_time`, `ending_time`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Branch Name', '+8801700000000', 'info@example.com', 'H##, R##, Dhaka', 'Friday & Saturday', '10 am', '6 pm', '0', 1, 1, '2023-06-17 02:19:07', '2023-08-15 09:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `contact_massages`
--

CREATE TABLE `contact_massages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `name`, `designations`, `status`, `image`, `facebook`, `linkdin`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'Kylie Guerra', 'Enim aut consectetur', 0, 'IMG_20230624065503.jpg', NULL, 'Officia sed ut venia', '1', '2', '2023-06-24 00:55:03', '2023-06-26 22:05:23'),
(4, 'Christian Morse', 'Quis velit qui qui d', 0, 'IMG_20230624065517.jpg', 'Dolor sit numquam c', 'Ducimus accusamus l', '1', NULL, '2023-06-24 00:55:17', '2023-06-24 00:55:17'),
(5, 'Hedwig Riley', 'Qui est quis ipsam f', 0, 'IMG_20230624065531.jpg', 'Enim mollit non qui', 'Praesentium adipisic', '1', NULL, '2023-06-24 00:55:31', '2023-06-24 00:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finances`
--

CREATE TABLE `finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `finances`
--

INSERT INTO `finances` (`id`, `heading`, `title`, `discriptsion`, `sub_heading`, `sub_title`, `sub_discriptsion`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'The worldwide Ethernet switching 100G will become the mainstream.', 'The worldwide Ethernet switching 100G will become the mainstream.', 'The worldwide Ethernet switching 100G will become the mainstream.The worldwide Ethernet switching 100G will become the mainstream.The worldwide Ethernet switching 100G will become the mainstream.', '[\"The worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become th\"]', '[\"The worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become th\"]', '[\"The worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become th The worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become thThe worldwide Ethernet switching 100G will become th\"]', 'IMG_20230626122544.jpeg', NULL, 1, NULL, '2023-06-26 06:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anwser` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `category_id`, `question`, `anwser`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 5, '[\"sad asd\",\"sdfsda\",\"sdf sdaf sdf dsf sdaf\"]', 'null', '0', 1, NULL, '2023-06-20 22:21:56', '2023-06-20 22:21:56'),
(2, 5, '[\"sadf sadf\",\"sdafsdaf sd\"]', '[\"dsaf sadf dsf\",\"sd fsda fsdaf asdf\"]', '0', 1, NULL, '2023-06-20 22:24:05', '2023-06-20 22:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `genaral_admistrations`
--

CREATE TABLE `genaral_admistrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genaral_admistrations`
--

INSERT INTO `genaral_admistrations` (`id`, `heading`, `title`, `discriptsion`, `sub_heading`, `sub_title`, `sub_discriptsion`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Recruitment Finance: Maximizing Efficiency and ROI in Talent Acquisition', 'Financial Success Through Strategic Talent Acquisition', 'Recruitment finance refers to the financial aspects and considerations involved in the recruitment process. It involves managing the budget, expenses, and financial resources associated with talent acquisition. Here are some key details related to recruitment finance:\r\n\r\nBudget Allocation:\r\nRecruitment finance starts with allocating a budget specifically for recruitment activities. This budget includes various expenses such as job advertising costs, recruitment agency fees, background checks, candidate assessments, travel expenses for interviews, and other recruitment-related expenditures. The budget allocation should be based on the organization\'s recruitment needs and objectives.\r\n\r\nCost Analysis:\r\nRecruitment finance involves analyzing the costs associated with different recruitment strategies and methods. This analysis helps in evaluating the return on investment (ROI) for each recruitment channel or approach. It enables organizations to identify cost-effective strategies and allocate resources efficiently to attract and hire the best talent while optimizing recruitment costs.', '[\"Recruitment Finance Details:\",\"Technology and Tools:\",\"Return on Investment (ROI):\"]', '[\"Recruitment Finance Details:\",\"Technology and Tools:\",\"Return on Investment (ROI):\"]', '[\"Recruitment finance includes managing relationships with external vendors and recruitment agencies. This involves negotiating service fees, evaluating their performance, and ensuring that their services align with the allocated budget. Effective vendor management helps in optimizing recruitment costs and ensuring quality services are obtained within budgetary constraints.\",\"Recruitment finance involves investing in and managing recruitment technologies and tools. This may include applicant tracking systems (ATS), online assessment platforms, video interviewing software, and other technologies that streamline and enhance the recruitment process. The financial aspect includes evaluating the cost-benefit of these tools and selecting the ones that provide the most value for the organization.\",\"Measuring the ROI of recruitment efforts is a crucial part of recruitment finance. This involves analyzing the impact of recruitment activities on the organization\'s overall performance, employee productivity, and profitability. By tracking key recruitment metrics and evaluating the effectiveness of different recruitment strategies, organizations can make\"]', 'IMG_20230626121854.jpg', NULL, 1, NULL, '2023-06-26 06:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `genarel_settings`
--

CREATE TABLE `genarel_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genarel_settings`
--

INSERT INTO `genarel_settings` (`id`, `title`, `name`, `phone`, `email`, `address`, `logo`, `favicon`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Company  Title', 'Company Name', '+88 01700000000', 'info@example.com', 'House ##,Road ##, Dhaka, Bangladesh', 'logo.jpg', 'favicon.png', NULL, 1, NULL, '2023-08-15 09:59:34');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `discriptsion`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'IMG_20230626115426.jpg', NULL, 1, NULL, '2023-08-15 09:54:43');

-- --------------------------------------------------------

--
-- Table structure for table `hrs`
--

CREATE TABLE `hrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hrs`
--

INSERT INTO `hrs` (`id`, `heading`, `title`, `discriptsion`, `sub_heading`, `sub_title`, `sub_discriptsion`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Streamlining Recruitment: The Role of HR Administration in Talent Acquisition', 'Streamlining Recruitment: The Role of HR Administration in Talent Acquisition', 'Recruitment HR administration refers to the human resources (HR) aspects and responsibilities involved in the recruitment process. It encompasses the management and coordination of HR-related tasks to ensur.\r\n\r\nHR administration plays a crucial role in workforce planning, which involves identifying the talent needs of the organization and aligning them with the recruitment process. This includes understanding the organizational goals, analyzing workforce gaps, and determining the required skills and competencies for each position. HR administration ensures that recruitment efforts are in line with the organization\'s strategic objectives.\r\n\r\nHR administration involves conducting job analysis to gather information about job roles, responsibilities, qualifications, and requirements. This information is then used to create accurate and comprehensive job descriptions. HR administrators collaborate with hiring managers and subject matter experts to define the necessary skills and competencies for each position. Clear and well-written job descriptions are essential for attracting qualified candidates.\r\n\r\n\r\nHR administration manages the job advertising and posting process. This includes selecting appropriate channels for job advertisements, such as job boards, career websites, social media platforms, and professional networks. HR administrators ensure that job postings are engaging, accurate, and comply with equal employment opportunity guidelines. They monitor the effectiveness of different advertising methods and make adjustments as necessary.', 'null', 'null', 'null', 'IMG_20230626122412.jpg', NULL, 1, NULL, '2023-06-26 06:24:12');

-- --------------------------------------------------------

--
-- Table structure for table `memoranda`
--

CREATE TABLE `memoranda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memoranda`
--

INSERT INTO `memoranda` (`id`, `heading`, `title`, `discriptsion`, `sub_heading`, `sub_title`, `sub_discriptsion`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Recruitment Process and Guidelines', 'Recruitment Process and Guidelines', 'We are pleased to announce the implementation of a new and improved recruitment process at Company Name This memorandum aims to provide you with essential information and guidelines to ensure a seamless and effective recruitment experience for both hiring managers and candidates.', '[\"Clear Job Descriptions:\",\"Streamlined Hiring Process:\",\"Fair and Transparent Selection\"]', '[\"Clear Job Descriptions:\",\"Streamlined Hiring Process:\",\"Fair and Transparent Selection:\"]', '[\"When initiating a recruitment process, it is crucial to provide detailed and accurate job descriptions. Clearly outline the roles, responsibilities, qualifications, and key requirements for the position. This will attract qualified candidates who possess the necessary skills and experience.\",\"To streamline the hiring process, we have introduced standardized procedures that all hiring managers are expected to follow. This includes timely review and shortlisting of applications, conducting structured interviews, and prompt feedback to candidates. Adhering to these guidelines will help maintain consistency and efficiency throughout the recruitment process.\",\"At WACE, we are committed to fair and transparent selection processes. It is important to evaluate candidates based on merit, considering their qualifications, skills, and relevant experience. Avoid any form of discrimination or bias, and ensure all decisions are made in accordance with our equal employment opportunity policy.\"]', 'IMG_20230626121016.jpg', NULL, 1, NULL, '2023-08-15 10:07:33');

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
(4, '2023_06_13_071229_create_sliders_table', 1),
(5, '2023_06_13_094004_create_abouts_table', 2),
(7, '2023_06_13_121723_create_visions_table', 3),
(8, '2023_06_13_122725_create_misions_table', 4),
(9, '2023_06_14_044635_create_contact_massages_table', 5),
(11, '2023_06_14_062904_create_teams_table', 6),
(12, '2023_06_14_083358_create_directors_table', 7),
(14, '2023_06_14_095359_create_histories_table', 8),
(21, '2023_06_15_033954_create_authorities_table', 15),
(22, '2023_06_15_112315_create_genaral_admistrations_table', 15),
(23, '2023_06_15_100946_create_statues_table', 16),
(24, '2023_06_15_075616_create_memoranda_table', 17),
(25, '2023_06_17_035512_create_finances_table', 18),
(27, '2023_06_17_051327_create_hrs_table', 19),
(28, '2023_06_17_061921_create_genarel_settings_table', 20),
(29, '2023_06_17_064804_create_brances_table', 21),
(30, '2023_06_17_090641_create_services_categories_table', 22),
(36, '2023_06_20_044325_create_services_table', 23),
(37, '2023_06_20_100603_create_f_a_q_s_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `misions`
--

CREATE TABLE `misions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `misions`
--

INSERT INTO `misions` (`id`, `discriptsion`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'IMG_20230626120116.jpg', NULL, 1, NULL, '2023-08-15 09:54:10');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_detalis` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_point` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `title`, `heading`, `short_detalis`, `description`, `services_point`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 4, 'Join Our Dynamic Team Today', 'Welcome to Company Where Talents Thrive and Opportunities Await!', 'Welcome to Company Name, where innovation, collaboration, and personal growth converge. We believe that our success lies in the talents, skills, and diverse perspectives of our exceptional team. If you\'re seeking a rewarding career that challenges you, empowers you, and allows you to make a meaningful impact, you\'ve come to the right place.', 'Exciting Opportunities: Become part of an innovative company at the forefront of [industry/sector]. We offer a range of challenging roles across different departments, allowing you to explore and develop your skills.\r\n\r\nImpactful Work: Make a difference in the world through projects that have a positive impact on society. Your contributions will shape the future and drive meaningful change.\r\n\r\nGrowth and Development: We are committed to your professional growth and development. We provide resources, training, and mentorship opportunities to help you enhance your skills and reach your full potential.\r\n\r\nTeam Spirit: Join a vibrant and collaborative team where teamwork and camaraderie are valued. You\'ll have the chance to work with talented individuals who share a common drive for success.\r\n\r\nWork-Life Balance: We understand the importance of work-life balance and prioritize the well-being of our employees. Enjoy flexible working arrangements and various employee benefits that support your overall well-being.\r\n\r\nHow to Apply:\r\nReady to take the next step in your career? Visit our Careers page to explore current job openings and submit your application. We look forward to reviewing your qualifications and getting to know you better.\r\n\r\nJoin Company name today and embark on an exciting journey where your skills and passion can flourish. Together, let\'s make a positive impact and achieve great things.', '[\"Competitive Compensation: We offer a highly competitive salary and benefits package, ensuring that your hard work and dedication are recognized and rewarded.\",\"Career Growth and Advancement: Joining our team means opening doors to endless possibilities for career growth. We provide comprehensive training programs, mentorship opportunities, and a clear career progression path to help you reach your full potential.\",\"Collaborative and Inclusive Culture: Be part of a supportive and inclusive work environment that values diversity. We foster a culture of collaboration, where ideas are encouraged, and teamwork is celebrated.\",\"Impactful Work: Make a meaningful impact by working on projects that have the potential to shape industries, improve lives, and contribute to positive change. Your contributions will matter and create a lasting difference.\",\"Cutting-Edge Technology: Work with the latest tools, technologies, and resources that enable you to stay ahead of the curve and drive innovation. We invest in providing state-of-the-art equipment and platforms to empower your success.\",\"Work-Life Balance: We understand the importance of maintaining a healthy work-life balance. Our flexible work arrangements and supportive policies allow you to manage your professional and personal commitments effectively.\",\"Professional Development: Continuous learning and growth are at the heart of our organization. We offer opportunities for professional development, including training programs, workshops, conferences, and certifications to help you stay ahead in your field.\"]', 'IMG_20230626090136.png', '0', 1, 1, '2023-06-20 02:56:26', '2023-08-15 10:02:12'),
(4, 5, 'Your gateway to global opportunities', 'Navigating your way to global adventure', 'Welcome to Compamy Name, your trusted partner in visa processing services. We understand that obtaining a visa can often be a complex and time-consuming process, filled with paperwork, requirements, and uncertainty. Our mission is to simplify this journey for you and provide efficient visa-processing solutions that smooth the path to your global adventure.', 'Personalized Assistance: We believe in providing personalized attention to each client. Our dedicated visa specialists will guide you through the entire process, offering tailored advice and assistance based on your specific visa requirements.\r\n\r\nExtensive Visa Knowledge: Our team stays up-to-date with the latest visa regulations and requirements of different countries. We possess the expertise to navigate through complex visa procedures, saving you time, effort, and potential frustration.\r\n\r\nTimely and Efficient Service: We understand the importance of meeting deadlines and ensuring a smooth visa application process. With our streamlined procedures and efficient documentation handling, we strive to deliver prompt and accurate visa processing services.\r\n\r\nComprehensive Documentation Support: Gathering the required documentation can often be a daunting task. Our team will provide you with a comprehensive checklist and guide you through the document preparation process, ensuring that you have all the necessary paperwork in order.\r\n\r\nTransparency and Communication: We value transparency in our services. Throughout the visa processing journey, we maintain open lines of communication, keeping you informed about the progress of your application and promptly addressing any queries or concerns you may have.\r\n\r\nPeace of Mind: By entrusting your visa processing to us, you can experience peace of mind, knowing that experienced professionals are handling your application. We take the stress out of the process, allowing you to focus on planning your travel or preparing for your international endeavor.\r\n\r\nHow to Get Started:\r\nTo begin your visa processing journey with us, simply reach out to our team via phone, email, or our online contact form. We will provide you with an initial consultation and guide you on the next steps to take based on your specific visa requirements. Let us be your trusted partner in navigating the visa process and opening doors to new opportunities around the world.', '[\"Expert Guidance: Our team of experienced visa specialists provides expert guidance and support throughout the visa processing journey, ensuring that you have the necessary information and assistance to navigate the complexities of the visa application process.\",\"Efficient Documentation Handling: We streamline the collection and organization of required documents, guiding you through the documentation process to ensure accuracy and completeness. This saves you time and minimizes the risk of errors or omissions that could delay your visa application.\",\"Customized Solutions: We understand that each individual\'s visa needs are unique. We offer personalized solutions tailored to your specific travel or immigration requirements, ensuring that you have the right visa category and documentation for your intended purpose.\",\"Timely Application Submission: We prioritize timely submission of your visa application, ensuring that all requirements are met before the designated deadlines. This increases the chances of a smooth and prompt processing of your visa application.\",\"Transparent Communication: We maintain open and transparent communication with you throughout the visa processing journey. Our team keeps you informed about the progress of your application, any updates or changes in requirements, and promptly addresses any questions or concerns you may have.\",\"Peace of Mind: By entrusting your visa processing to us, you can have peace of mind knowing that professionals with expertise in visa regulations and procedures are handling your application. We strive to provide a stress-free experience, allowing you to focus on your travel plans or other preparations.\",\"Current Visa Knowledge: Our visa specialists stay updated on the latest visa regulations, requirements, and processes of various countries. This ensures that your application is in compliance with the most recent guidelines, increasing the likelihood of a successful outcome.\",\"Professional Representation: We act as your representative in liaising with consulates, embassies, or visa processing centers, facilitating effective communication and ensuring that your application is handled professionally and efficiently.\",\"Customer Satisfaction: Our top priority is your satisfaction. We strive to deliver exceptional customer service, addressing your needs and concerns promptly and providing a positive visa processing experience from start to finish.\",\"Extensive Network: We have established strong relationships and partnerships with consulates, embassies, and relevant authorities, enabling us to navigate the visa processing system more effectively and expedite the application process whenever possible.\"]', 'IMG_20230626111008.png', '0', 1, 1, '2023-06-26 05:10:08', '2023-08-15 10:03:06'),
(5, 6, 'Comprehensive Medical Checkup Services for a Better You', 'Invest in Your Well-being: Comprehensive Medical Checkup Services for a Healthier Future', 'Welcome to Company Name, where we prioritize your health and well-being. Our comprehensive medical checkup services are designed to provide a thorough assessment of your overall health, detect any potential medical issues, and empower you to make informed decisions about your well-being. With our state-of-the-art facilities and a team of experienced healthcare professionals, we are committed to helping you achieve optimal health.', 'Advanced Diagnostic Assessments:\r\nAt Company Name, we offer a wide range of advanced diagnostic assessments as part of our medical checkup services. These assessments encompass comprehensive physical examinations, laboratory tests, imaging studies, and specialized screenings. Our aim is to provide a holistic evaluation of your health status, covering key areas such as cardiovascular health, organ function, metabolic profile, and more.\r\nWe understand that every individual is unique, with distinct health concerns and risk factors. That\'s why our medical checkup services are tailored to your specific needs. Our team of healthcare experts will assess your medical history, discuss your lifestyle, and consider any relevant risk factors to customize your checkup package. This personalized approach ensures that we address your individual health goals and provide recommendations specific to your situation.\r\n\r\nRegular medical checkups are essential for early detection and prevention of potential health issues. Our comprehensive assessments enable us to identify health conditions in their early stages when treatment is most effective. Through our medical checkup services, we aim to empower you with knowledge about your health, enabling you to take proactive steps towards disease prevention and maintenance of your well-being.\r\n\r\nExpert Guidance and Consultation:\r\nDuring your medical checkup, our experienced healthcare professionals will guide you through the process, explaining the significance of each assessment and providing insights into your health results. We believe in open communication and encourage you to ask questions or discuss any health concerns you may have. Our experts will offer personalized advice, lifestyle recommendations, and necessary follow-up actions based on your checkup results.\r\n\r\n\r\nUpon completion of your medical checkup, you will receive a detailed and comprehensive health report. This report will provide a clear overview of your health status, including the results of all assessments, laboratory tests, and imaging studies. Our team will guide you through the report, explaining the findings, highlighting any areas of concern, and recommending appropriate next steps for further evaluation or treatment.\r\n\r\nWe understand the importance of confidentiality and privacy when it comes to your health information. Rest assured that all your medical checkup results and personal data will be handled with the utmost confidentiality and stored securely according to the highest standards of privacy and data protection.\r\n\r\nTake the proactive step towards better health today. Schedule your comprehensive medical checkup with us at [Medical Center/Hospital Name] and embark on a journey to optimal health and wellness. Our dedicated team is here to support you in achieving your health goals and ensuring a brighter, healthier future for you and your loved ones.', '[\"Holistic Health Assessment: Our comprehensive medical checkup services provide a thorough assessment of your overall health, covering key areas such as cardiovascular health, organ function, metabolic profile, and more. We take a holistic approach to ensure a comprehensive evaluation of your well-being.\",\"Early Detection of Health Issues: Regular medical checkups are crucial for early detection of potential health issues. Our advanced diagnostic assessments enable us to identify health conditions in their early stages when treatment is most effective, helping to prevent complications and promote early intervention.\",\"Personalized Approach: We understand that each individual has unique health concerns and risk factors. Our medical checkup services are personalized to address your specific needs. We take into account your medical history, lifestyle, and risk factors to design a checkup package tailored to you.\",\"Expert Guidance and Consultation: Our experienced healthcare professionals will guide you through the entire medical checkup process. They will explain the significance of each assessment, discuss your health results with you, and provide personalized advice and recommendations based on your specific health profile.\",\"Comprehensive Health Report: After completing your medical checkup, you will receive a detailed health report summarizing the results of all assessments, laboratory tests, and imaging studies. This comprehensive report will provide a clear overview of your health status, highlighting any areas of concern and offering insights for further evaluation or treatment.\",\"Disease Prevention and Health Maintenance: Our medical checkup services emphasize preventive healthcare. By identifying potential health risks and providing personalized recommendations, we empower you to make informed decisions about your lifestyle and take proactive steps to prevent diseases and maintain your well-being.\",\"State-of-the-Art Facilities and Technology: We utilize state-of-the-art facilities and advanced diagnostic technologies to ensure accurate and reliable results. Our commitment to staying at the forefront of medical advancements enables us to provide you with the highest quality of care during your medical checkup.\",\"Confidentiality and Privacy: We prioritize the confidentiality and privacy of your health information. Rest assured that all your medical checkup results and personal data will be handled with strict confidentiality and stored securely, adhering to stringent privacy and data protection standards.\",\"Convenience and Efficiency: We strive to make the medical checkup process as convenient and efficient as possible. Our streamlined procedures and well-organized scheduling system minimize waiting times and ensure that your checkup experience is smooth and hassle-free.\",\"Proactive Investment in Your Well-being: By investing in regular medical checkups, you are taking a proactive approach to safeguarding your health. Detecting potential health issues early and receiving expert guidance allows you to make informed decisions and take the necessary steps for a healthier and more fulfilling life.\"]', 'IMG_20230626112130.png', '0', 1, 1, '2023-06-26 05:21:30', '2023-08-15 10:04:05'),
(6, 7, 'Your Gateway to Hassle-Free Travel Experiences', 'Seamless Ticketing Solutions: Your Gateway to Hassle-Free Travel Experiences', 'Welcome to Company Name, where we provide an efficient ticketing system designed to streamline the process of purchasing and managing tickets. Whether you\'re planning a trip, attending an event, or exploring new destinations, our ticketing system is here to simplify your experience and ensure a seamless journey from start to finish.', 'User-Friendly Online Platform:\r\nOur ticketing system features a user-friendly online platform that allows you to browse, select, and purchase tickets with ease. With intuitive navigation and a responsive interface, you can quickly find the tickets you need and complete your booking in just a few simple steps. Our platform is designed to provide a smooth and convenient ticketing experience for users of all levels of technical proficiency.\r\n\r\nWide Range of Ticketing Options:\r\nWe offer a diverse range of ticketing options to cater to various needs and preferences. From flight tickets and train tickets to concert tickets and event passes, our system covers a wide spectrum of ticketing requirements. Whether you\'re looking for a single ticket or group bookings, we have you covered.\r\n\r\nReal-Time Availability and Instant Confirmation:\r\nOur ticketing system provides real-time availability updates, ensuring that you have access to the latest ticket inventory. Once you make your selection and complete your booking, you\'ll receive instant confirmation, eliminating any uncertainties or delays. You can proceed with your travel plans or event attendance with confidence, knowing that your tickets are secured.\r\n\r\nSecure Payment Processing:\r\nWe prioritize the security of your payment information. Our ticketing system integrates secure payment processing, utilizing industry-standard encryption protocols to safeguard your financial details. You can make your payments with peace of mind, knowing that your transactions are protected.\r\n\r\nMobile Accessibility:\r\nWe understand the importance of convenience and accessibility, which is why our ticketing system is optimized for mobile devices. Whether you\'re on the go or prefer using your smartphone or tablet, you can easily access our platform, browse available tickets, and make bookings from the palm of your hand. Enjoy the flexibility of managing your tickets anytime, anywhere.\r\n\r\nEfficient Ticket Management:\r\nOur ticketing system also offers efficient ticket management features. Once you\'ve made your bookings, you can conveniently access and manage your tickets through our platform. This includes the ability to view, download, or print your tickets, as well as make changes or cancellations within the specified terms and conditions.\r\n\r\n24/7 Customer Support:\r\nWe take pride in providing excellent customer support. Our dedicated team is available 24/7 to assist you with any inquiries, concerns, or issues you may encounter during the ticketing process. Whether you need assistance with ticket selection, booking modifications, or general inquiries, our knowledgeable and friendly support staff are here to help.\r\n\r\nEmbrace a hassle-free ticketing experience with our efficient ticketing system. Start exploring the world or attending events with confidence, knowing that your ticketing needs are in capable hands.', '[\"User-Friendly Online Platform: Our ticketing system features a user-friendly online platform that makes it easy for you to browse, select, and purchase tickets with convenience and ease.\",\"Wide Range of Ticketing Options: We offer a diverse range of ticketing options, including flights, trains, concerts, events, and more, catering to a variety of travel and entertainment needs.\",\"Real-Time Availability and Instant Confirmation: Our ticketing system provides real-time availability updates, ensuring that you have access to the latest ticket inventory. You\'ll receive instant confirmation upon booking, eliminating any uncertainties or delays.\",\"Secure Payment Processing: We prioritize the security of your payment information. Our ticketing system integrates secure payment processing, ensuring that your financial details are protected during transactions.\",\"Mobile Accessibility: Our ticketing system is optimized for mobile devices, allowing you to conveniently access and manage your tickets on the go. You can browse, book, and access your tickets anytime, anywhere using your smartphone or tablet.\",\"Efficient Ticket Management: Once you\'ve made your bookings, our ticketing system offers efficient ticket management features. You can easily view, download, or print your tickets, as well as make changes or cancellations within the specified terms and conditions.\",\"24\\/7 Customer Support: We provide round-the-clock customer support to assist you with any inquiries, concerns, or issues you may encounter during the ticketing process. Our dedicated support team is available to provide assistance whenever you need it.\",\"Convenient Refund and Cancellation Policies: Our ticketing system offers convenient refund and cancellation policies, allowing you to make changes or request refunds in accordance with the terms and conditions of your ticket purchase.\",\"Seamless Integration with Travel Services: Our ticketing system seamlessly integrates with other travel services, such as accommodation bookings and transportation options, to provide a comprehensive and seamless travel experience.\"]', 'IMG_20230626112852.png', '0', 1, 1, '2023-06-26 05:28:52', '2023-08-15 10:04:44'),
(7, 8, 'Comprehensive Training Solutions for Personal and Professional Growth', 'Elevate Your Skills and Expand Your Knowledge with our Dynamic Training Programs', 'Welcome to Company Name, where we provide comprehensive training solutions designed to help you unlock your full potential and achieve personal and professional growth. Our training programs are carefully crafted to enhance your skills, expand your knowledge, and empower you to succeed in your chosen field. With experienced trainers, engaging content, and interactive learning methods, we are committed to delivering high-quality training experiences that make a lasting impact.', 'Diverse Training Programs:\r\nAt WACE, we offer a diverse range of training programs to cater to various industries and skill levels. From leadership development and communication skills to technical training and industry-specific certifications, our programs cover a wide spectrum of subjects to meet the unique needs of individuals and organizations.\r\n\r\nExpert Trainers and Facilitators:\r\nOur training programs are led by experienced trainers and facilitators who are experts in their respective fields. They bring a wealth of knowledge, practical insights, and real-world experience to the training sessions, ensuring that you receive valuable and up-to-date information. Our trainers are skilled at creating an engaging and interactive learning environment, fostering active participation and maximizing knowledge retention.\r\n\r\nInteractive Learning Approaches:\r\nWe believe that interactive learning leads to better understanding and retention of knowledge. Our training programs incorporate various interactive approaches, such as group discussions, case studies, simulations, role-plays, and hands-on exercises. These methods encourage active participation, foster collaboration among participants, and provide practical application of learned concepts.\r\n\r\nCustomized Training Solutions:\r\nWe understand that each individual and organization has unique training requirements. That\'s why we offer customized training solutions to align with your specific needs and goals. Whether you require a tailored program for your team or an individualized coaching session, we work closely with you to design and deliver a training solution that addresses your specific challenges and objectives.\r\n\r\nFlexible Training Formats:\r\nWe recognize the importance of flexibility in training delivery. Our training programs are offered in various formats, including in-person workshops, virtual classrooms, webinars, and self-paced e-learning modules. This allows you to choose the format that best suits your schedule, location, and preferred learning style. We strive to make our training accessible and convenient for learners across different contexts.\r\n\r\nContinuous Support and Follow-up:\r\nOur commitment to your success extends beyond the training program. We provide ongoing support and follow-up to ensure that you can apply the learned skills and knowledge effectively in your personal and professional life. This may include post-training resources, coaching sessions, online communities, or access to additional learning materials to reinforce the training outcomes.\r\n\r\nMeasurable Results and Evaluation:\r\nWe believe in measuring the impact of our training programs. Throughout the training process, we collect feedback, assess learning outcomes, and evaluate the effectiveness of our programs. This enables us to continuously improve our training offerings and ensure that you receive tangible results and a positive return on your investment.\r\n\r\nEmbark on a journey of personal and professional growth with our comprehensive training programs. Invest in your development, acquire new skills, and unlock your potential for success. Join us and discover the transformative power of our training solutions.', '[\"Comprehensive Training Programs: We offer a wide range of training programs covering various industries and skill sets, providing comprehensive learning opportunities for personal and professional growth.\",\"Experienced Trainers: Our training programs are led by experienced trainers and facilitators who bring real-world expertise and insights to the sessions, ensuring high-quality and impactful learning experiences.\",\"Interactive Learning Approaches: We utilize interactive learning methods such as group discussions, case studies, simulations, and hands-on exercises to actively engage participants, promote knowledge retention, and encourage practical application of learned concepts.\",\"Customized Training Solutions: We understand that every individual and organization has unique training needs. Our customized training solutions are tailored to address specific challenges and objectives, ensuring relevance and maximum impact.\",\"Flexible Training Formats: We offer training programs in various formats, including in-person workshops, virtual classrooms, webinars, and self-paced e-learning modules. This flexibility allows learners to choose the format that best suits their schedule and preferred learning style.\",\"Continuous Support and Follow-up: Our commitment to your success extends beyond the training program. We provide ongoing support, post-training resources, coaching sessions, and additional learning materials to ensure that you can apply the learned skills effectively in your personal and professional life.\",\"Measurable Results and Evaluation: We believe in measuring the impact of our training programs. Through feedback collection, learning outcome assessments, and program evaluations, we continuously strive to improve our offerings and deliver tangible results to our participants.\",\"Industry-Relevant Content: Our training programs are designed to address current industry trends, challenges, and best practices, ensuring that participants gain up-to-date knowledge and skills that are directly applicable in their respective fields.\",\"Networking and Collaboration Opportunities: Our training programs provide opportunities for networking and collaboration with fellow participants, fostering a supportive learning community and enabling the exchange of ideas and experiences.\",\"Lifelong Learning: We promote lifelong learning by offering a wide range of training programs that cater to different skill levels and career stages. Whether you are just starting your professional journey or seeking to enhance your existing skills, our training programs provide avenues for continuous growth and development.\"]', 'IMG_20230626113337.png', '0', 1, 1, '2023-06-26 05:33:37', '2023-08-15 10:05:20'),
(8, 9, 'Skill Test Platform for Assessing and Showcasing Your Expertise', 'Elevate Your Potential and Stand Out with our Comprehensive Skill Assessment Solutions', 'Welcome to Company Name, your go-to platform for skill testing and assessment. Our comprehensive skill test web platform is designed to help you showcase your expertise, validate your abilities, and stand out in today\'s competitive landscape. Whether you\'re looking to assess your own skills, benchmark against industry standards, or demonstrate your capabilities to potential employers or clients, our skill test web platform is here to support your journey.', 'Wide Range of Skill Tests:\r\nOur skill test web platform offers a wide range of skill tests covering various domains, industries, and disciplines. From technical skills such as programming, data analysis, and graphic design to soft skills such as communication, leadership, and problem-solving, we have a diverse collection of tests to cater to your specific areas of expertise.\r\n\r\nAccurate and Reliable Assessments:\r\nWe prioritize accuracy and reliability in our skill assessments. Our tests are carefully curated and designed by subject matter experts to provide an accurate evaluation of your skills. Through a combination of multiple-choice questions, practical tasks, and scenario-based challenges, we aim to provide a comprehensive assessment that reflects your true abilities.\r\n\r\nTimed and Adaptive Testing:\r\nOur skill tests are designed to be timed, allowing you to demonstrate your proficiency within a specified duration. Additionally, we utilize adaptive testing techniques to adjust the difficulty level of questions based on your performance. This ensures that the assessment accurately reflects your skill level and provides a fair evaluation.\r\n\r\nDetailed Performance Reports:\r\nAfter completing a skill test, you\'ll receive a detailed performance report that highlights your strengths and areas for improvement. The report provides a comprehensive analysis of your performance, showcasing your skills and knowledge in specific areas. This information can be used to further develop your abilities and target areas for growth.\r\n\r\nBenchmarking and Comparison:\r\nOur skill test web platform allows you to benchmark your performance against industry standards or other test takers. This feature enables you to gain insights into how your skills measure up against others in the same field, helping you identify areas where you excel and areas where you can further enhance your abilities.\r\n\r\nCertification and Credentialing:\r\nFor certain skill tests, we offer certification and credentialing options upon successful completion. These credentials can enhance your professional profile, validating your skills and expertise to potential employers or clients. Our certifications provide a tangible recognition of your abilities, giving you a competitive edge in the job market or freelance industry.\r\n\r\nPrivacy and Security:\r\nWe understand the importance of privacy and data security. Rest assured that all personal information and test results are handled with the utmost confidentiality and stored securely. We adhere to strict privacy and data protection standards to ensure the privacy and security of your information.\r\n\r\nContinuous Skill Development:\r\nOur skill test web platform is not only for assessment but also for continuous skill development. We provide recommendations for further learning and improvement based on your test results. This helps you identify areas for growth and provides resources and suggestions to enhance your skills and knowledge.\r\n\r\nTake your skills to the next level with our skill test web platform. Assess, validate, and showcase your expertise to unlock new opportunities and advance in your professional journey. Join us today and let your abilities shine.', '[\"Wide Range of Skill Tests: Our skill test platform offers a diverse selection of skill tests covering various domains and industries, allowing you to assess your expertise in specific areas.\",\"Accurate and Reliable Assessments: Our skill tests are designed and curated by subject matter experts to provide accurate and reliable assessments of your skills and knowledge.\",\"Timed and Adaptive Testing: Our skill tests are timed to measure your proficiency within a specified duration, and they utilize adaptive testing techniques to adjust the difficulty level based on your performance.\",\"Detailed Performance Reports: After completing a skill test, you receive a detailed performance report that highlights your strengths and areas for improvement, providing valuable insights into your skillset.\",\"Benchmarking and Comparison: Our platform allows you to benchmark your performance against industry standards or other test takers, providing a valuable reference point for evaluating your skills.\",\"Certification and Credentialing: For certain skill tests, we offer certification and credentialing options upon successful completion, providing you with tangible proof of your abilities to enhance your professional profile.\",\"Privacy and Security: We prioritize the privacy and security of your personal information and test results, ensuring that all data is handled confidentially and stored securely.\",\"Continuous Skill Development: Our skill test platform goes beyond assessment and offers recommendations for further learning and improvement based on your test results, supporting your continuous skill development.\",\"Convenient and Accessible: Our skill tests can be taken online, making them convenient and accessible from anywhere with an internet connection, allowing you to assess your skills at your own pace.\",\"Enhance Professional Profile: Skill tests on our platform enable you to showcase your expertise and stand out to potential employers or clients, enhancing your professional profile and increasing your career opportunities.\"]', 'IMG_20230626113715.png', '0', 1, 1, '2023-06-26 05:37:15', '2023-08-15 10:05:56');

-- --------------------------------------------------------

--
-- Table structure for table `services_categories`
--

CREATE TABLE `services_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_categories`
--

INSERT INTO `services_categories` (`id`, `name`, `title`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'Recruitment', 'TalentSpotter: Spotting the Best Opportunities', 'IMG_20230620085146.png', '0', 1, 1, '2023-06-20 02:51:46', '2023-06-26 22:00:06'),
(5, 'Visa Processing', 'VisaPro: Expert Visa Processing Solutions', 'IMG_20230620085219.png', '0', 1, 1, '2023-06-20 02:52:19', '2023-06-22 04:04:27'),
(6, 'Medical Checkup', 'Check Point: Ensuring Your Health and Vitality', 'IMG_20230620085251.jpg', '0', 1, 1, '2023-06-20 02:52:51', '2023-06-22 04:05:08'),
(7, 'Ticketing', 'Ticket Master: Mastering the Art of Ticketing', 'IMG_20230622065939.png', '0', 1, 1, '2023-06-22 00:59:39', '2023-06-22 04:05:52'),
(8, 'Training', 'SkillUp: Empowering You Through Training', 'IMG_20230622070001.png', '0', 1, 1, '2023-06-22 01:00:01', '2023-06-22 04:06:36'),
(9, 'Skill Test', 'SkillCheck: Test and Validate Your Expertise', 'IMG_20230622070020.jpg', '0', 1, 1, '2023-06-22 01:00:20', '2023-06-22 04:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'slider  one', 'IMG_20230613085359.jpg', 0, 1, NULL, '2023-06-13 02:53:59', '2023-06-13 02:53:59'),
(4, 'slider two', 'IMG_20230613085415.jpg', 0, 1, NULL, '2023-06-13 02:54:15', '2023-06-13 02:54:15'),
(5, 'slider three', 'IMG_20230613085438.png', 0, 1, NULL, '2023-06-13 02:54:38', '2023-06-13 02:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `statues`
--

CREATE TABLE `statues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_heading` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statues`
--

INSERT INTO `statues` (`id`, `heading`, `title`, `discriptsion`, `sub_heading`, `sub_title`, `sub_discriptsion`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Government Regulations for Fair and Transparent Hiring', 'Government Regulations for Fair and Transparent Hiring', 'The recruitment process is regulated by various statutes and laws set forth by the government to ensure fair and transparent hiring practices. These statutes serve as guidelines for both public and private sector organizations to follow when conducting recruitment activities. Some key recruitment statutes enforced by the government may include:', '[\"Equal Employment Opportunity Laws:\",\"Anti-Discrimination Laws\",\"Privacy and Data Protection Laws\"]', '[\"Equal Employment Opportunity Laws:\",\"Anti-Discrimination Laws\",\"Privacy and Data Protection Laws\"]', '[\"These laws prohibit discrimination in the recruitment process based on factors such as race, color, religion, sex, national origin, age, disability, or genetic information. They ensure that all individuals have equal access to employment opportunities and are treated fairly throughout the recruitment process.\",\"Anti-discrimination laws aim to prevent discrimination based on protected characteristics such as gender, race, age, disability, or sexual orientation. These statutes prohibit employers from making discriminatory decisions during the recruitment process, including discriminatory job advertisements, interview questions, or candidate selection based on discriminatory grounds.\",\"Privacy and data protection laws regulate the collection, use, storage, and sharing of personal data during the recruitment process. These statutes ensure that candidates\' personal information is handled securely and in accordance with privacy principles. Organizations must obtain appropriate consent, protect candidate data, and adhere to legal requirements regarding data privacy.\"]', 'IMG_20230626121249.jpeg', NULL, 1, NULL, '2023-06-26 06:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designations`, `status`, `image`, `facebook`, `linkdin`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'Kamrul Hossain', 'Web Trainer', 0, 'IMG_20230622095152.jpg', NULL, 'https://www.facebook.com/shatu.das.9/', '1', '2', '2023-06-22 03:51:52', '2023-06-26 22:03:25'),
(5, 'Cairo Kirkland', 'Nemo itaque in corru', 0, 'IMG_20230622095207.jpg', 'Temporibus aspernatu', 'Sint deserunt at at', '1', NULL, '2023-06-22 03:52:07', '2023-06-22 03:52:07'),
(6, 'Imani Webb', 'Vel iure perspiciati', 0, 'IMG_20230622095222.jpg', 'Id odit ipsum conse', 'Sapiente provident', '1', NULL, '2023-06-22 03:52:22', '2023-06-22 03:52:22'),
(7, 'Brody Williamson', 'Possimus autem veli', 0, 'IMG_20230622095234.jpg', 'Hic quidem eum nulla', 'Rerum consequatur c', '1', NULL, '2023-06-22 03:52:34', '2023-06-22 03:52:34'),
(8, 'Gray May', 'Et officia aut itaqu', 0, 'IMG_20230627040353.jpg', NULL, 'Praesentium in imped', '1', '2', '2023-06-26 06:28:23', '2023-06-26 22:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `delatable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `user_type`, `gender`, `image`, `status`, `delatable`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@app.com', NULL, '$2y$10$8UOeI0BXOxFbyucvPRYEOeuULWHtK6/YNIRDQpAI.1byJju/nConS', '01834959645', 'Dhaka', 'Super Admin', NULL, NULL, 0, '1', NULL, '2023-06-13 01:35:30', '2023-06-13 01:35:30'),
(2, 'company', 'info@gmail.com', NULL, '$2y$10$jMu6Ne2/r6UZy2cJmU.T9e0YaHPJYS17n9bVrKMeha2vdAfJolqca', NULL, NULL, 'Admin', NULL, NULL, 0, '0', NULL, '2023-06-13 09:09:40', '2023-06-13 09:09:40'),
(3, 'Company User', 'user@gmail.com', NULL, '$2y$10$YGqbkBkYb8Gc03pcIxDqoOQ4dvAR5n0Zdf/uDF07PeTK3LEXBsEHi', NULL, NULL, 'User', NULL, NULL, 0, '0', NULL, '2023-06-13 09:10:33', '2023-06-26 21:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `visions`
--

CREATE TABLE `visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visions`
--

INSERT INTO `visions` (`id`, `discriptsion`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'IMG_20230626115722.jpg', NULL, 1, NULL, '2023-08-15 09:51:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authorities`
--
ALTER TABLE `authorities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brances`
--
ALTER TABLE `brances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_massages`
--
ALTER TABLE `contact_massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finances`
--
ALTER TABLE `finances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genaral_admistrations`
--
ALTER TABLE `genaral_admistrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genarel_settings`
--
ALTER TABLE `genarel_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hrs`
--
ALTER TABLE `hrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memoranda`
--
ALTER TABLE `memoranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misions`
--
ALTER TABLE `misions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_categories`
--
ALTER TABLE `services_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statues`
--
ALTER TABLE `statues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visions`
--
ALTER TABLE `visions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `authorities`
--
ALTER TABLE `authorities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brances`
--
ALTER TABLE `brances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_massages`
--
ALTER TABLE `contact_massages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finances`
--
ALTER TABLE `finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `genaral_admistrations`
--
ALTER TABLE `genaral_admistrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genarel_settings`
--
ALTER TABLE `genarel_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hrs`
--
ALTER TABLE `hrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `memoranda`
--
ALTER TABLE `memoranda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `misions`
--
ALTER TABLE `misions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services_categories`
--
ALTER TABLE `services_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `statues`
--
ALTER TABLE `statues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visions`
--
ALTER TABLE `visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
