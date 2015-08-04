-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2015 at 01:28 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emr`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE IF NOT EXISTS `allergies` (
`id` int(10) unsigned NOT NULL,
  `allergy_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `allergy_note` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `patient_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE IF NOT EXISTS `appointments` (
`id` int(10) unsigned NOT NULL,
  `checkup_reason` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `timeslot_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `balancesheets`
--

CREATE TABLE IF NOT EXISTS `balancesheets` (
`id` int(10) unsigned NOT NULL,
  `total_amount` double NOT NULL,
  `payable_amount` double NOT NULL,
  `receivable_amount` double NOT NULL,
  `vendor_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `balancesheet_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE IF NOT EXISTS `beds` (
`id` int(10) unsigned NOT NULL,
  `bed_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ward_id` int(11) NOT NULL,
  `ward_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`id`, `bed_no`, `ward_id`, `ward_type`, `created_at`, `updated_at`) VALUES
(7, '4324', 5, '', '2015-08-03 11:00:41', '2015-08-03 11:00:41'),
(8, '00000000', 6, '', '2015-08-03 11:01:14', '2015-08-03 11:01:14'),
(9, '00000000', 7, 'female', '2015-08-03 11:05:13', '2015-08-03 11:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
`id` int(10) unsigned NOT NULL,
  `room_charges` double NOT NULL,
  `bed_charges` double NOT NULL,
  `operation_charges` double NOT NULL,
  `meal_charges` double NOT NULL,
  `medicine_charges` double NOT NULL,
  `total_charges` double NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bill_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checkupfees`
--

CREATE TABLE IF NOT EXISTS `checkupfees` (
`id` int(10) unsigned NOT NULL,
  `checkup_fee` double NOT NULL,
  `fee_note` text COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clinics`
--

CREATE TABLE IF NOT EXISTS `clinics` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consumptions`
--

CREATE TABLE IF NOT EXISTS `consumptions` (
`id` int(10) unsigned NOT NULL,
  `patient_id` int(11) NOT NULL,
  `meal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medicine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `others` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `consumptions`
--

INSERT INTO `consumptions` (`id`, `patient_id`, `meal`, `medicine`, `others`, `created_at`, `updated_at`) VALUES
(2, 0, '120', '150', '15200', '2015-08-03 11:22:29', '2015-08-03 11:22:29');

-- --------------------------------------------------------

--
-- Table structure for table `diagonosticprocedures`
--

CREATE TABLE IF NOT EXISTS `diagonosticprocedures` (
`id` int(10) unsigned NOT NULL,
  `procedure_note` text COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dispatchlists`
--

CREATE TABLE IF NOT EXISTS `dispatchlists` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `req_amount` double NOT NULL,
  `total_amount` double NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dispatch_list_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drugusages`
--

CREATE TABLE IF NOT EXISTS `drugusages` (
`id` int(10) unsigned NOT NULL,
  `drug_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usage_note` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `patient_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dutydays`
--

CREATE TABLE IF NOT EXISTS `dutydays` (
`id` int(10) unsigned NOT NULL,
  `day` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start` time DEFAULT NULL,
  `end` time DEFAULT NULL,
  `employee_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dutydays`
--

INSERT INTO `dutydays` (`id`, `day`, `start`, `end`, `employee_id`, `created_at`, `updated_at`) VALUES
(1, 'Sunday', '00:00:00', '20:00:00', 3, '2015-08-03 10:37:47', '2015-08-03 10:37:47'),
(2, NULL, NULL, NULL, 3, '2015-08-03 10:37:47', '2015-08-03 10:37:47'),
(3, NULL, NULL, NULL, 3, '2015-08-03 10:37:47', '2015-08-03 10:37:47'),
(4, NULL, NULL, NULL, 3, '2015-08-03 10:37:47', '2015-08-03 10:37:47'),
(5, NULL, NULL, NULL, 3, '2015-08-03 10:37:47', '2015-08-03 10:37:47'),
(6, NULL, NULL, NULL, 3, '2015-08-03 10:37:47', '2015-08-03 10:37:47'),
(7, NULL, NULL, NULL, 3, '2015-08-03 10:37:47', '2015-08-03 10:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cnic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clinic_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `password`, `email`, `gender`, `age`, `city`, `country`, `address`, `phone`, `cnic`, `branch`, `note`, `status`, `role`, `created_at`, `updated_at`, `remember_token`, `clinic_id`) VALUES
(1, 'Fahad Ali', '$2y$10$bS66f7PXvrMVKQLXK.aYV.dj9m3q7QWbR78YneVusZmG0.hXUbpea', 'super@gmail.com', 'Male', 23, 'Lahore', 'Pakistan', '10 Down Street', '03344050495', '1234679', 'DHA', 'MBBS Qualified', 'Active', 'Super User', '2015-05-20 14:49:37', '2015-05-20 14:49:37', NULL, NULL),
(2, 'Shah', '$2y$10$U5QZZ9R4lnnuLRwhxf5A1uDY0DmsjoervtY8W7JVEhFwykl0AZea2', 'admin@gmail.com', 'Male', 23, 'Lahore', 'Pakistan', '10 Down Street', '03344050495', '1234679', 'DHA', 'MBBS Qualified', 'Active', 'Administrator', '2015-05-20 14:49:37', '2015-05-20 14:49:37', NULL, 1),
(3, 'Ali', '$2y$10$zklTr5WF7Ao15LIeQ60jX.7mT1D/M.dAjQCJ4kyRLs6MSSSlgqzEq', 'doctor@gmail.com', 'Male', 23, 'Lahore', 'Pakistan', '10 Down Street', '03344050495', '1234679', 'DHA', 'MBBS Qualified', 'Active', 'Doctor', '2015-05-20 14:49:37', '2015-05-20 14:49:37', NULL, 1),
(4, 'Umer', '$2y$10$Qt9tqReVQHBNTDfs65DTC.y2hyFrLFKo3NnTY/saPSVI6ogyQh75u', 'accountant@gmail.com', 'Male', 23, 'Lahore', 'Pakistan', '10 Down Street', '03344050495', '1234679', 'DHA', 'MBBS Qualified', 'Active', 'Accountant', '2015-05-20 14:49:37', '2015-05-20 14:49:37', NULL, 1),
(5, 'Talal', '$2y$10$WIehwE/bL78XSqyKvWcSduwUz.bKJqbKnRjdBqewUwGgtmG6TlAQW', 'receptionist@gmail.com', 'Male', 23, 'Lahore', 'Pakistan', '10 Down Street', '03344050495', '1234679', 'DHA', 'MBBS Qualified', 'Active', 'Receptionist', '2015-05-20 14:49:37', '2015-05-20 14:49:37', NULL, 1),
(6, 'Aqeel', '$2y$10$mKEsCdmA4HxiZd2bW3Wasefd02437zaodean6kNQ18TnHOfIkQRKS', 'lab@gmail.com', 'Male', 23, 'Lahore', 'Pakistan', '10 Down Street', '03344050495', '1234679', 'DHA', 'MBBS Qualified', 'Active', 'Lab Manager', '2015-05-20 14:49:37', '2015-05-20 14:49:37', NULL, 1),
(7, 'Mehwish', '$2y$10$rr64/FZ5Fdy2ihLCggcuS.KfdLplce5779dHLPGTqD5vPXvSk186i', 'nurse@gmail.com', 'Female', 20, 'Lahore', 'Pakistan', 'gulshan ravi', '(0092) 333-4569877', '35252-4587569-3', 'Gulberg', 'N/A', 'Active', 'Nurse', '2015-05-21 13:07:14', '2015-05-21 13:23:38', NULL, NULL),
(8, 'Hamza', '$2y$10$a4iVx2KhLPtKtbSX/c0obeqGTuvkpngwjji8ZGhWRbvgIw66WGfdW', 'pharmacy@gmail.com', 'Male', 20, 'lahore', 'Pakistan', 'gulshan ravi', '(0092) 333-4569877', '35252-4587569-3', 'Gulberg', 'N/A', 'Active', 'Pharmacy Manager', '2015-05-21 13:10:54', '2015-05-21 13:22:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `familyhistories`
--

CREATE TABLE IF NOT EXISTS `familyhistories` (
`id` int(10) unsigned NOT NULL,
  `f_member_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `patient_relation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `diesease_note` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `patient_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labtests`
--

CREATE TABLE IF NOT EXISTS `labtests` (
`id` int(10) unsigned NOT NULL,
  `test_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `test_description` text COLLATE utf8_unicode_ci NOT NULL,
  `total_fee` double NOT NULL,
  `patient_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `test_results` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE IF NOT EXISTS `medicines` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_01_28_184838_create_employees_table', 1),
('2015_02_03_060752_create_patients_table', 1),
('2015_02_05_194923_add_remember_token_to_employees_table', 1),
('2015_02_06_062003_create_surgicalhistories_table', 1),
('2015_02_06_103433_create_familyhistories_table', 1),
('2015_02_10_120710_create_previousdiseases_table', 1),
('2015_02_11_060123_create_allergies_table', 1),
('2015_02_11_070250_create_drugusages_table', 1),
('2015_02_11_074218_create_diagonosticprocedures_table', 1),
('2015_02_11_095950_create_vitalsigns_table', 1),
('2015_02_12_084106_add_patient_id_to_allergies_table', 1),
('2015_02_12_084722_add_patient_id_to_drugusages_table', 1),
('2015_02_12_085330_add_patient_id_to_familyhistories_table', 1),
('2015_02_12_085656_add_patient_id_to_previousdiseases_table', 1),
('2015_02_12_090044_add_patient_id_to_surgicalhistories_table', 1),
('2015_02_14_110516_create_dutydays_table', 1),
('2015_02_14_111359_create_timeslots_table', 1),
('2015_02_17_060819_create_labtests_table', 1),
('2015_02_17_080659_create_appointments_table', 1),
('2015_02_18_064352_create_prescriptions_table', 1),
('2015_02_19_192700_create_password_reminders_table', 1),
('2015_02_21_053340_create_checkupfees_table', 1),
('2015_02_21_053926_create_testfees_table', 1),
('2015_04_04_133230_add_employee_id_to_timeslots_table', 1),
('2015_05_07_230614_drop_fields_from_vital_signs_table', 1),
('2015_05_09_120745_create_medicines_table', 1),
('2015_05_14_011058_add_procedure_to_prescriptions_table', 1),
('2015_05_17_123801_create_clinics_table', 1),
('2015_05_17_124556_add_clinic_id_to_employees_table', 1),
('2015_05_28_125653_create_vendors_table', 1),
('2015_05_29_211006_create_beds_table', 1),
('2015_06_02_134709_create_balancesheets_table', 1),
('2015_06_02_140449_add_note_to_balancesheets_table', 1),
('2015_06_04_134058_create_wards_table', 1),
('2015_06_06_112447_create_bills_table', 1),
('2015_06_12_095649_create_rooms_table', 1),
('2015_06_12_112957_create_dispatchlists_table', 1),
('2015_06_12_194058_create_Consumptions_table', 1),
('2015_06_12_194305_create_update_HS_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cnic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ward` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bed` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ward_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `dob`, `gender`, `age`, `email`, `city`, `country`, `address`, `phone`, `cnic`, `ward`, `bed`, `room`, `note`, `patient_id`, `ward_id`, `created_at`, `updated_at`) VALUES
(3, 'ali', '2015-08-04', 'Male', 0, 'zeeshe707@gmail.com', 'lahore', 'Pakistan', 'lahore street', '(0000) 000-0000000', '00000-0000000-0', '', '8', '3', 'chal ja kaka', 'P03', 6, '2015-08-03 11:07:26', '2015-08-03 11:07:27'),
(4, 'faria', '1994-01-31', 'Female', 21, 'nurse@gmail.com', 'lahore', 'Pakistan', 'lahore street', '(0002) 222-2222222', '02222-2222222-2', '', '9', '4', 'faria is added', 'P04', 7, '2015-08-03 11:12:47', '2015-08-03 11:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE IF NOT EXISTS `prescriptions` (
`id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medicines` text COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `procedure` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `previousdiseases`
--

CREATE TABLE IF NOT EXISTS `previousdiseases` (
`id` int(10) unsigned NOT NULL,
  `disease_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `disease_notes` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `patient_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
`id` int(10) unsigned NOT NULL,
  `room_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_type`, `room_location`, `room_no`, `patient_id`, `created_at`, `updated_at`) VALUES
(1, 'ttt', 'sadfa', '63', '', '2015-08-03 10:06:01', '2015-08-03 10:06:01'),
(2, 'ttt', 'sadfa', '99', '', '2015-08-03 10:06:17', '2015-08-03 10:06:17'),
(3, 'ttt', 'kjug', '666', '', '2015-08-03 10:07:17', '2015-08-03 10:07:17'),
(4, 'asdfas', 'HHHH', '45', '', '2015-08-03 10:39:19', '2015-08-03 10:39:19'),
(5, 'VIP', '1st floor', '2', '', '2015-08-03 11:05:54', '2015-08-03 11:05:54'),
(6, 'hhhhhhhhhh', 'oooooo', '11', '', '2015-08-03 11:27:44', '2015-08-03 11:27:44');

-- --------------------------------------------------------

--
-- Table structure for table `surgicalhistories`
--

CREATE TABLE IF NOT EXISTS `surgicalhistories` (
`id` int(10) unsigned NOT NULL,
  `surgery_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surgery_date` date NOT NULL,
  `surgery_notes` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `patient_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testfees`
--

CREATE TABLE IF NOT EXISTS `testfees` (
`id` int(10) unsigned NOT NULL,
  `test_fee` double NOT NULL,
  `fee_note` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timeslots`
--

CREATE TABLE IF NOT EXISTS `timeslots` (
`id` int(10) unsigned NOT NULL,
  `slot` time NOT NULL,
  `dutyday_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `employee_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `timeslots`
--

INSERT INTO `timeslots` (`id`, `slot`, `dutyday_id`, `created_at`, `updated_at`, `employee_id`) VALUES
(1, '00:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(2, '00:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(3, '00:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(4, '00:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(5, '01:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(6, '01:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(7, '01:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(8, '01:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(9, '02:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(10, '02:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(11, '02:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(12, '02:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(13, '03:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(14, '03:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(15, '03:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(16, '03:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(17, '04:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(18, '04:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(19, '04:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(20, '04:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(21, '05:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(22, '05:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(23, '05:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(24, '05:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(25, '06:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(26, '06:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(27, '06:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(28, '06:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(29, '07:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(30, '07:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(31, '07:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(32, '07:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(33, '08:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(34, '08:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(35, '08:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(36, '08:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(37, '09:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(38, '09:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(39, '09:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(40, '09:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(41, '10:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(42, '10:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(43, '10:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(44, '10:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(45, '11:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(46, '11:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(47, '11:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(48, '11:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(49, '12:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(50, '12:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(51, '12:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(52, '12:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(53, '13:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(54, '13:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(55, '13:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(56, '13:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(57, '14:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(58, '14:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(59, '14:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(60, '14:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(61, '15:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(62, '15:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(63, '15:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(64, '15:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(65, '16:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(66, '16:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(67, '16:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(68, '16:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(69, '17:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(70, '17:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(71, '17:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(72, '17:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(73, '18:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(74, '18:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(75, '18:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(76, '18:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(77, '19:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(78, '19:15:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(79, '19:30:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(80, '19:45:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3),
(81, '20:00:00', 1, '2015-08-03 10:37:47', '2015-08-03 10:37:47', 3);

-- --------------------------------------------------------

--
-- Table structure for table `update_hs`
--

CREATE TABLE IF NOT EXISTS `update_hs` (
`id` int(10) unsigned NOT NULL,
  `patient_id` int(11) NOT NULL,
  `health_sheet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vendor_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cnic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `vendor_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vitalsigns`
--

CREATE TABLE IF NOT EXISTS `vitalsigns` (
`id` int(10) unsigned NOT NULL,
  `weight` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bp_systolic` int(11) NOT NULL,
  `bp_diastolic` int(11) NOT NULL,
  `blood_group` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pulse_rate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `respiration_rate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `temprature` int(11) NOT NULL,
  `temprature_unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appointment_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE IF NOT EXISTS `wards` (
`id` int(10) unsigned NOT NULL,
  `ward_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ward_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `ward_name`, `ward_type`, `created_at`, `updated_at`) VALUES
(5, 'surgery', 'male', '2015-08-03 10:55:55', '2015-08-03 10:55:55'),
(6, 'cardialogy', 'male', '2015-08-03 10:56:09', '2015-08-03 10:56:09'),
(7, 'neurology', 'female', '2015-08-03 10:56:22', '2015-08-03 10:56:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergies`
--
ALTER TABLE `allergies`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `balancesheets`
--
ALTER TABLE `balancesheets`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkupfees`
--
ALTER TABLE `checkupfees`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinics`
--
ALTER TABLE `clinics`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumptions`
--
ALTER TABLE `consumptions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diagonosticprocedures`
--
ALTER TABLE `diagonosticprocedures`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispatchlists`
--
ALTER TABLE `dispatchlists`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugusages`
--
ALTER TABLE `drugusages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dutydays`
--
ALTER TABLE `dutydays`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
 ADD PRIMARY KEY (`id`), ADD KEY `employees_clinic_id_foreign` (`clinic_id`);

--
-- Indexes for table `familyhistories`
--
ALTER TABLE `familyhistories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labtests`
--
ALTER TABLE `labtests`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reminders`
--
ALTER TABLE `password_reminders`
 ADD KEY `password_reminders_email_index` (`email`), ADD KEY `password_reminders_token_index` (`token`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previousdiseases`
--
ALTER TABLE `previousdiseases`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surgicalhistories`
--
ALTER TABLE `surgicalhistories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testfees`
--
ALTER TABLE `testfees`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeslots`
--
ALTER TABLE `timeslots`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_hs`
--
ALTER TABLE `update_hs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitalsigns`
--
ALTER TABLE `vitalsigns`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allergies`
--
ALTER TABLE `allergies`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `balancesheets`
--
ALTER TABLE `balancesheets`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `beds`
--
ALTER TABLE `beds`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `checkupfees`
--
ALTER TABLE `checkupfees`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clinics`
--
ALTER TABLE `clinics`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `consumptions`
--
ALTER TABLE `consumptions`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `diagonosticprocedures`
--
ALTER TABLE `diagonosticprocedures`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dispatchlists`
--
ALTER TABLE `dispatchlists`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `drugusages`
--
ALTER TABLE `drugusages`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dutydays`
--
ALTER TABLE `dutydays`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `familyhistories`
--
ALTER TABLE `familyhistories`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `labtests`
--
ALTER TABLE `labtests`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `previousdiseases`
--
ALTER TABLE `previousdiseases`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `surgicalhistories`
--
ALTER TABLE `surgicalhistories`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `testfees`
--
ALTER TABLE `testfees`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `timeslots`
--
ALTER TABLE `timeslots`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `update_hs`
--
ALTER TABLE `update_hs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vitalsigns`
--
ALTER TABLE `vitalsigns`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
