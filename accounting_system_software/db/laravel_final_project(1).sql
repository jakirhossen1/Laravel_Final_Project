-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 02:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `budget_id` int(11) NOT NULL,
  `group_id` int(100) DEFAULT NULL,
  `posting_head_id` int(100) DEFAULT NULL,
  `budget_type` varchar(255) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `user_id` int(100) DEFAULT NULL,
  `date_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `business_type`
--

CREATE TABLE `business_type` (
  `id` int(11) NOT NULL,
  `business_type` varchar(255) DEFAULT NULL,
  `_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `business_type`
--

INSERT INTO `business_type` (`id`, `business_type`, `_token`) VALUES
(1, 'Corporate', 'A40tMojpQl4ADWw7fMJEKzstM0wsDZLTwy5iS478'),
(2, 'Private', 'A40tMojpQl4ADWw7fMJEKzstM0wsDZLTwy5iS478'),
(4, 'Partnership', 'A40tMojpQl4ADWw7fMJEKzstM0wsDZLTwy5iS478');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_type` varchar(255) DEFAULT NULL,
  `business_type` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `country_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `company_registration_no` int(100) DEFAULT NULL,
  `registration_doc` varchar(255) DEFAULT NULL,
  `tin` varchar(255) DEFAULT NULL,
  `tin_doc` varchar(255) DEFAULT NULL,
  `vat` decimal(10,2) DEFAULT NULL,
  `vat_doc` varchar(255) DEFAULT NULL,
  `trade_license` varchar(255) DEFAULT NULL,
  `company_logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_type`
--

CREATE TABLE `company_type` (
  `id` int(11) NOT NULL,
  `company_type` varchar(255) NOT NULL,
  `_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_type`
--

INSERT INTO `company_type` (`id`, `company_type`, `_token`) VALUES
(1, 'Public', 'A40tMojpQl4ADWw7fMJEKzstM0wsDZLTwy5iS478'),
(2, 'Private', 'A40tMojpQl4ADWw7fMJEKzstM0wsDZLTwy5iS478'),
(3, 'LTD', 'A40tMojpQl4ADWw7fMJEKzstM0wsDZLTwy5iS478'),
(4, 'Associate', 'A40tMojpQl4ADWw7fMJEKzstM0wsDZLTwy5iS478');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `country_name` varchar(255) DEFAULT NULL,
  `_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `city_name`, `country_name`, `_token`) VALUES
(1, 'Mirzapur', 'Bangladesh', 'xZjW3Ta4kdfrgfRjgIp3spAJFAaIqoSToSYjffTO'),
(3, 'Bogura', 'Bangladesh', 'xZjW3Ta4kdfrgfRjgIp3spAJFAaIqoSToSYjffTO'),
(4, 'Dhaka', 'Bangladesh', 'xZjW3Ta4kdfrgfRjgIp3spAJFAaIqoSToSYjffTO');

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
-- Table structure for table `fiscal_year`
--

CREATE TABLE `fiscal_year` (
  `id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `group_type`
--

CREATE TABLE `group_type` (
  `id` int(11) NOT NULL,
  `group_type_name` varchar(255) DEFAULT NULL,
  `debit_credit` text DEFAULT NULL,
  `_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group_type`
--

INSERT INTO `group_type` (`id`, `group_type_name`, `debit_credit`, `_token`) VALUES
(1, 'Assets', 'Debit', 'O5jCtsvZAiQINrBKWjz158ePWScNPIYzmGVNmYM9'),
(2, 'Liabilities', 'Credit', 'O5jCtsvZAiQINrBKWjz158ePWScNPIYzmGVNmYM9'),
(3, 'Equity', 'Credit', 'O5jCtsvZAiQINrBKWjz158ePWScNPIYzmGVNmYM9');

-- --------------------------------------------------------

--
-- Table structure for table `ledger_group`
--

CREATE TABLE `ledger_group` (
  `ledger_id` int(11) NOT NULL,
  `ledger_name` varchar(255) DEFAULT NULL,
  `group_id` text DEFAULT NULL,
  `_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledger_group`
--

INSERT INTO `ledger_group` (`ledger_id`, `ledger_name`, `group_id`, `_token`) VALUES
(1, NULL, '0', 'O5jCtsvZAiQINrBKWjz158ePWScNPIYzmGVNmYM9'),
(2, 'Current Assets', 'Assets', 'O5jCtsvZAiQINrBKWjz158ePWScNPIYzmGVNmYM9');

-- --------------------------------------------------------

--
-- Table structure for table `ledger_posting_head`
--

CREATE TABLE `ledger_posting_head` (
  `ledger_posting_head_id` int(11) NOT NULL,
  `ledger_sub_group_id` int(100) DEFAULT NULL,
  `ledger_group_id` int(100) DEFAULT NULL,
  `posting_head_name` varchar(255) DEFAULT NULL,
  `posting_head_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ledger_sub_group`
--

CREATE TABLE `ledger_sub_group` (
  `ledger_sub_group_id` int(11) NOT NULL,
  `ledger_sub_group_name` varchar(255) DEFAULT NULL,
  `ledger_sub_group_date` date DEFAULT NULL,
  `ledger_sub_group_parent_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2021_12_29_112852_user_type', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opening_balance`
--

CREATE TABLE `opening_balance` (
  `sl` int(11) NOT NULL,
  `voucher_no` int(100) DEFAULT NULL,
  `group_id` int(100) DEFAULT NULL,
  `posting_head_id` int(100) DEFAULT NULL,
  `op_date` date DEFAULT NULL,
  `debit_credit` decimal(10,2) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `date_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `picture` text NOT NULL,
  `account_creation_date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `_token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_name`, `full_name`, `email`, `phone`, `password`, `picture`, `account_creation_date`, `status`, `_token`) VALUES
(2, 'jakirhossen', 'Jakir Hossen', 'jakirhossen.nam@gmail.com', 1791618333, 'Infosarker4', 'assets/upload/nasa6.jpg', '2022-01-11', 'Active', 'o8TSTSqL74ao6PAHYW5fODH87SQU7PMIVVV0LmI6'),
(3, 'rahimidb', 'Md. Abdur Rahim Bhuiyan', 'facultypwad@gmail.com', 1979666696, 'Admin@321#', 'assets/upload/sea.jpg', '2022-01-11', 'Active', 'o8TSTSqL74ao6PAHYW5fODH87SQU7PMIVVV0LmI6'),
(4, 'ashik', 'Ashik Shikder', 'ashikshikder@gmail.com', 1639616123, '123456', 'assets/upload/nasa2.jpg', '2022-01-11', 'Active', 'o8TSTSqL74ao6PAHYW5fODH87SQU7PMIVVV0LmI6'),
(5, 'abdussamad', 'Abdus Samad', 'abdussamad018@gmail.com', 1845891962, '1234', 'assets/upload/cropped-gallery.png', '2022-01-12', 'Active', 'xZjW3Ta4kdfrgfRjgIp3spAJFAaIqoSToSYjffTO'),
(6, 'jakirhossen', 'Jakir Hossen', 'jakirhossen.nub@gmail.com', 1791618333, '@#$1234$#@', 'assets/upload/nasa3.jpg', '2022-01-12', 'Active', 'O5jCtsvZAiQINrBKWjz158ePWScNPIYzmGVNmYM9');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `sl_no` int(11) NOT NULL,
  `voucher_no` int(100) DEFAULT NULL,
  `voucher_date` date DEFAULT NULL,
  `voucher_description` varchar(255) DEFAULT NULL,
  `group_id` int(100) DEFAULT NULL,
  `postling_head_id` int(100) DEFAULT NULL,
  `debit_amount` decimal(10,2) DEFAULT NULL,
  `credit_amount` decimal(10,2) DEFAULT NULL,
  `user_id` int(100) DEFAULT NULL,
  `entry_date_and_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `company_id` int(100) DEFAULT NULL,
  `voucher_document` varchar(255) DEFAULT NULL,
  `check_no` varchar(255) DEFAULT NULL,
  `check_date` date DEFAULT NULL,
  `voucher_type` varchar(255) DEFAULT NULL,
  `prepared_by` varchar(255) DEFAULT NULL,
  `checked_by` varchar(255) DEFAULT NULL,
  `approved_by` varchar(255) DEFAULT NULL,
  `modify_count` varchar(255) DEFAULT NULL,
  `voucher_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`budget_id`);

--
-- Indexes for table `business_type`
--
ALTER TABLE `business_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_type`
--
ALTER TABLE `company_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fiscal_year`
--
ALTER TABLE `fiscal_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_type`
--
ALTER TABLE `group_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ledger_group`
--
ALTER TABLE `ledger_group`
  ADD PRIMARY KEY (`ledger_id`);

--
-- Indexes for table `ledger_posting_head`
--
ALTER TABLE `ledger_posting_head`
  ADD PRIMARY KEY (`ledger_posting_head_id`);

--
-- Indexes for table `ledger_sub_group`
--
ALTER TABLE `ledger_sub_group`
  ADD PRIMARY KEY (`ledger_sub_group_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opening_balance`
--
ALTER TABLE `opening_balance`
  ADD PRIMARY KEY (`sl`);

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
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `budget_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `business_type`
--
ALTER TABLE `business_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_type`
--
ALTER TABLE `company_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fiscal_year`
--
ALTER TABLE `fiscal_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_type`
--
ALTER TABLE `group_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ledger_group`
--
ALTER TABLE `ledger_group`
  MODIFY `ledger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ledger_posting_head`
--
ALTER TABLE `ledger_posting_head`
  MODIFY `ledger_posting_head_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ledger_sub_group`
--
ALTER TABLE `ledger_sub_group`
  MODIFY `ledger_sub_group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `opening_balance`
--
ALTER TABLE `opening_balance`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
