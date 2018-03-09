-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2018 at 01:37 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(8, 'kaushik', '123', '2017-11-26 08:48:09', '2017-11-26 08:48:09'),
(9, 'arif', '123', '2017-12-06 23:00:45', '2017-12-06 23:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patient_phone` int(11) NOT NULL,
  `patient_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient_age` int(11) NOT NULL,
  `patient_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_doctor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stot_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stot_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_phone`, `patient_name`, `patient_age`, `patient_gender`, `doctor_doctor_id`, `stot_date`, `stot_time`, `created_at`, `updated_at`) VALUES
(1, 11111, 'Omuk', 26, 'Male', '22', '[{\"date\":\"2017-12-12\"}]', '7.00-8.00', '2017-12-18 12:00:33', '2017-12-18 12:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`, `created_at`, `updated_at`) VALUES
(1, 'Accident and emergency (A&E)', NULL, NULL),
(2, 'Anaesthetics', NULL, NULL),
(3, 'Breast screening', NULL, NULL),
(4, 'Cardiology', NULL, NULL),
(5, 'Chaplaincy', NULL, NULL),
(6, 'Critical care', NULL, NULL),
(7, 'Diagnostic imaging', NULL, NULL),
(8, 'Discharge lounge', NULL, NULL),
(9, 'Ear nose and throat (ENT)', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `doctor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderator_moderator_id` int(11) NOT NULL,
  `doctor_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_cell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_birthday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctor_name`, `doctor_email`, `doctor_password`, `department_department_id`, `moderator_moderator_id`, `doctor_gender`, `doctor_cell`, `doctor_info`, `doctor_birthday`, `created_at`, `updated_at`) VALUES
(22, 'Dr:Messi', 'messi@gmail.com', '123', '2', 17, 'Male', '01855601369', 'MBBS', '23-12-1995', '2017-12-05 07:19:45', '2017-12-05 07:19:45'),
(24, 'Dr:Aliya Vat', 'aliya@gmail.com', '123', '3', 19, 'Female', '01855601369', 'MBBS', '23-12-1995', '2017-12-05 07:21:01', '2017-12-05 07:21:01'),
(25, 'Dr:Khalifa', 'kalifa@gmail.com', '123', '3', 19, 'Female', '01855601369', 'MBBS', '23-12-1995', '2017-12-05 07:21:46', '2017-12-05 07:21:46'),
(26, 'Dr:Arif', 'arif@gmail.com', '123', '1', 16, 'Male', '01855601369', 'MBBS', '23-12-1995', '2017-12-05 07:23:19', '2017-12-05 07:23:19'),
(27, 'Dr:Rustom', 'rustom@gmail.com', '123', '1', 16, 'Male', '01855601369', 'MBBS', '23-12-1995', '2017-12-05 07:24:10', '2017-12-05 07:24:10'),
(28, 'Dr:mostafa', 'mostafa@gmail.com', '123', '2', 17, 'male', '0122', 'MBBS', '1995-12-12', '2017-12-06 23:02:22', '2017-12-06 23:02:22');

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
(2, '2017_11_01_182111_create_admin_table', 1),
(3, '2017_11_04_173506_create_patients_table', 2),
(4, '2017_11_04_183857_create_admins_table', 2),
(5, '2017_11_07_095208_create_doctors_table', 3),
(6, '2017_11_08_152809_add_doctor_gendre_to_doctors', 4),
(7, '2017_11_08_153501_add_doctor_age_to_doctors', 4),
(8, '2017_11_08_153558_add_doctor_age_to_doctors', 5),
(9, '2017_11_08_153753_add_age_to_doctors', 6),
(10, '2017_11_08_153848_add_age_to_doctors', 7),
(11, '2017_11_08_154229_create_doctors_table', 8),
(12, '2017_11_08_154932_add_doctor_birthday_to_doctors', 9),
(13, '2017_11_08_155131_create_doctors_table', 10),
(14, '2017_11_08_174640_create_moderators_table', 11),
(15, '2014_10_12_000000_create_users_table', 12),
(16, '2014_10_12_100000_create_password_resets_table', 12),
(17, '2017_12_03_084546_create_slots_table', 12),
(18, '2017_12_03_085655_create_departments_table', 13),
(19, '2017_12_03_085741_create_appointments_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `moderators`
--

CREATE TABLE `moderators` (
  `id` int(11) NOT NULL,
  `moderator_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderator_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderator_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderator_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderator_cell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderator_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moderator_birthday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moderators`
--

INSERT INTO `moderators` (`id`, `moderator_name`, `moderator_email`, `moderator_password`, `department_department_name`, `moderator_gender`, `moderator_cell`, `moderator_info`, `moderator_birthday`, `created_at`, `updated_at`) VALUES
(17, 'Kaushik', 'kaushik@gmail.com', '123', 'Anaesthetics', 'male', '01855601369', 'Something', '13/12/1995', '2017-12-05 07:16:54', '2017-12-05 07:16:54'),
(19, 'Mahaboobs', 'mahaboobs@gmail.com', '123', 'Breast screening', 'male', '01855601369', 'Something', '13/12/1995', '2017-12-05 07:17:49', '2017-12-05 07:17:49'),
(20, 'Waheda', 'waheda@gmail.com', '123', 'Anaesthetics', 'male', '01855601369', 'Something', '13/12/1995', '2017-12-05 07:18:20', '2017-12-05 07:18:20'),
(21, 'Mashuk', 'mashuk@gmail.com', '123', 'Breast screening', 'male', '01855601369', 'Something', '13/12/1995', '2017-12-05 07:18:46', '2017-12-05 07:18:46');

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
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `doctor_doctor_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `doctor_doctor_id`, `date`, `time`, `created_at`, `updated_at`) VALUES
(30, '22', '2017-12-12', '8.00-9.00', '2017-12-05 23:13:09', '2017-12-05 23:13:09'),
(31, '22', '2017-12-12', '7.00-8.00', '2017-12-05 23:13:20', '2017-12-05 23:13:20'),
(32, '22', '2017-12-11', '8.00-9.00', '2017-12-05 23:13:33', '2017-12-05 23:13:33'),
(33, '22', '2017-12-11', '7.00-8.00', '2017-12-05 23:13:38', '2017-12-05 23:13:38'),
(34, '22', '2017-12-12', '8.00-9.00', '2017-12-05 23:15:39', '2017-12-05 23:15:39'),
(35, '24', '2017-12-12', '8.00-9.00', '2017-12-06 13:09:51', '2017-12-06 13:09:51');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderators`
--
ALTER TABLE `moderators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `moderators`
--
ALTER TABLE `moderators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
