-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 11:01 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ab-ceramic-industries`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_manage`
--

CREATE TABLE `account_manage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_manage`
--

INSERT INTO `account_manage` (`id`, `type`, `category_name`) VALUES
(1, 'Income', 'Software'),
(2, 'Expanse', 'salary');

-- --------------------------------------------------------

--
-- Table structure for table `cart_manage`
--

CREATE TABLE `cart_manage` (
  `id` int(11) NOT NULL,
  `cash_memo_id` varchar(256) NOT NULL,
  `date_time` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL,
  `customer_name` varchar(256) NOT NULL,
  `customer_code` varchar(256) NOT NULL,
  `customer_address` varchar(256) NOT NULL,
  `ship_to` varchar(256) NOT NULL,
  `truck_no` varchar(256) NOT NULL,
  `total` varchar(256) NOT NULL,
  `total_due` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `Prev_due` varchar(256) DEFAULT NULL,
  `total_cartoon` varchar(256) DEFAULT NULL,
  `t_qty` varchar(256) DEFAULT NULL,
  `total_comission` varchar(256) DEFAULT NULL,
  `discount` varchar(256) DEFAULT NULL,
  `cash` varchar(256) DEFAULT NULL,
  `carriage` varchar(256) DEFAULT NULL,
  `breakage` varchar(256) DEFAULT NULL,
  `incentives` varchar(256) DEFAULT NULL,
  `other` varchar(256) DEFAULT NULL,
  `balance` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_manage`
--

INSERT INTO `cart_manage` (`id`, `cash_memo_id`, `date_time`, `date`, `customer_name`, `customer_code`, `customer_address`, `ship_to`, `truck_no`, `total`, `total_due`, `type`, `Prev_due`, `total_cartoon`, `t_qty`, `total_comission`, `discount`, `cash`, `carriage`, `breakage`, `incentives`, `other`, `balance`) VALUES
(1, '11', '11/11/2020 06:21:22 pm', '2020-11-11', 'al-amin rana', '', 'dhaka', 'fg', '12', '4500', '', 'regular', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(2, '12', '11/11/2020 07:20:31 pm', '11/11/2020', 'al-amin rana', '', 'dhaka', 'fg', '12', '3000', '', 'regular', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(3, '13', '12/11/2020 03:52:53 pm', '12/11/2020', 'al-amin rana', '', 'dhaka', 'fg', '12', '2320', '', 'regular', '8000', '20', NULL, NULL, '0', '5000', '0', '0', '0', NULL, '5320'),
(4, '14', '12/11/2020 06:07:30 pm', '12/11/2020', 'al-amin', '', 'dhaka', 'fg', '12', '0', '', 'regular', '8000', '20', NULL, '10', '0', '2000', '0', '0', '0', NULL, '6000'),
(5, '14', '12/11/2020 06:07:47 pm', '12/11/2020', 'al-amin', '', 'dhaka', 'fg', '12', '0', '', 'regular', '8000', '20', NULL, '10', '0', '2000', '0', '0', '0', NULL, '6000'),
(6, '16', '12/11/2020 06:08:36 pm', '12/11/2020', 'al-amin', '', 'dhaka', 'fg', '12', '0', '', 'regular', '8000', '20', NULL, '0', '0', '5000', '0', '0', '0', NULL, '3000'),
(7, '16', '12/11/2020 06:11:40 pm', '12/11/2020', 'al-amin', '', 'dhaka', 'fg', '12', '0', '', 'regular', '8000', '20', NULL, '0', '0', '5000', '0', '0', '0', NULL, '3000'),
(8, '18', '12/11/2020 06:12:34 pm', '12/11/2020', 'al-amin', '', 'dhaka', 'fg', '12', '0', '', 'regular', '8000', '20', NULL, '0', '0', '5000', '0', '0', '0', NULL, '3000'),
(9, '18', '12/11/2020 06:13:26 pm', '12/11/2020', 'al-amin', '', 'dhaka', 'fg', '12', '0', '', 'regular', '8000', '20', NULL, '0', '0', '5000', '0', '0', '0', NULL, '3000'),
(10, '20', '12/11/2020 06:44:50 pm', '12/11/2020', 'al-amin', 's-24', 'dhaka', 'fg', '12', '1200', '', 'regular', '8000', '20', NULL, NULL, '0', '2000', '0', '0', '0', NULL, '7200'),
(11, '111', '12/11/2020 07:13:47 pm', '12/11/2020', 'al-amin rana', 's-25', 'dhaka', 'fg', '12', '1180', '', 'regular', '8000', '20', '0', '0', '0', '2000', '0', '0', '0', NULL, '7180'),
(12, '112', '12/11/2020 07:17:11 pm', '12/11/2020', 'al-amin rana', 's-25', 'dhaka', 'fg', '12', '1180', '', 'regular', '8000', '20', '4', '20', '0', '5000', '0', '0', '0', NULL, '4180'),
(13, '113', '12/11/2020 07:41:51 pm', '12/11/2020', 'al-amin rana', 's-25', 'dhaka', 'fg', '12', '1180', '1180', 'regular', NULL, '20', '4', '20', '0', '5000', '0', '0', '0', NULL, '-3820'),
(14, '114', '13/11/2020 01:49:06 am', '13/11/2020', 'al-amin rana', 's-25', 'dhaka', 'Feni', '02', '1180', '9180', 'regular', '8000', '20', '4', '20', '0', '2000', '0', '0', '0', NULL, '7180'),
(15, '115', '13/11/2020 01:01:34 pm', '13/11/2020', 'al-amin rana', 's-25', 'dhaka', 'fg', '12', '2920', '10920', 'regular', '8000', NULL, '10', '80', '0', '5000', '0', '0', '0', NULL, '5920'),
(16, '116', '14/11/2020 10:29:01 am', '14/11/2020', 'al-amin rana', 's-25', 'dhaka', 'Feni', '02', '1770', '7690', 'regular', '5920', NULL, '6', '30', '0', '2000', '0', '0', '0', NULL, '5690'),
(17, '117', '14/11/2020 12:45:20 pm', '14/11/2020', 'al-amin rana', 's-25', 'dhaka', 'Feni', '02', '2760', '8450', 'regular', '5690', NULL, '10', '40', '0', '2000', '0', '0', '0', NULL, '6450'),
(18, '118', '14/11/2020 05:52:36 pm', '14/11/2020', 'al-amin rana', 's-25', 'dhaka', 'Feni', '02', '1200', '7650', 'regular', '6450', NULL, '4', '0', '0', '10000', '0', '0', '0', NULL, '-2350'),
(19, '119', '14/11/2020 06:37:56 pm', '14/11/2020', 'al-amin rana', 's-25', 'dhaka', 'Feni', '02', '1200', '1200', 'regular', NULL, NULL, '4', '0', '0', '10000', '0', '0', '0', NULL, '-8800');

-- --------------------------------------------------------

--
-- Table structure for table `cash_memo_cart`
--

CREATE TABLE `cash_memo_cart` (
  `id` int(11) NOT NULL,
  `cash_memo_id` varchar(256) NOT NULL,
  `product_code` varchar(256) NOT NULL,
  `product_type` varchar(256) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` varchar(256) NOT NULL,
  `t_amount` varchar(256) NOT NULL,
  `grade` varchar(256) NOT NULL,
  `comission` varchar(256) DEFAULT NULL,
  `total_price` varchar(256) NOT NULL,
  `date` varchar(256) NOT NULL,
  `date_time` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_memo_cart`
--

INSERT INTO `cash_memo_cart` (`id`, `cash_memo_id`, `product_code`, `product_type`, `qty`, `amount`, `t_amount`, `grade`, `comission`, `total_price`, `date`, `date_time`) VALUES
(5, '11', '2', '', 5, '300', '1500', '', NULL, '', '11/11/2020', '11/11/2020 03:54:06 pm'),
(6, '11', '1', '', 4, '300', '1200', '', NULL, '', '11/11/2020', '11/11/2020 03:56:34 pm'),
(7, '11', '2', '', 2, '300', '600', '', NULL, '', '11/11/2020', '11/11/2020 03:59:10 pm'),
(8, '11', '1', '', 4, '300', '1200', '', NULL, '', '11/11/2020', '11/11/2020 05:13:29 pm'),
(9, '12', '2', '', 5, '300', '1500', '', NULL, '', '11/11/2020', '11/11/2020 07:18:05 pm'),
(10, '12', '2', '', 5, '300', '1500', '', NULL, '', '11/11/2020', '11/11/2020 07:18:11 pm'),
(26, '13', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '12/11/2020', '12/11/2020 02:20:48 pm'),
(27, '13', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '12/11/2020', '12/11/2020 02:27:36 pm'),
(28, '13', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '12/11/2020', '12/11/2020 02:28:33 pm'),
(29, '13', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '12/11/2020', '12/11/2020 02:28:58 pm'),
(30, '14', 's-36', 'd-46', 5, '300', '1500', 'A', '50', '1450', '12/11/2020', '12/11/2020 06:06:48 pm'),
(31, '14', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '12/11/2020', '12/11/2020 06:06:58 pm'),
(32, '14', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '12/11/2020', '12/11/2020 06:07:06 pm'),
(33, '16', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '12/11/2020', '12/11/2020 06:08:15 pm'),
(34, '16', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '12/11/2020', '12/11/2020 06:08:17 pm'),
(35, '18', 's-37', 'd-43', 4, '300', '1200', 'A', '0', '1200', '12/11/2020', '12/11/2020 06:12:14 pm'),
(36, '18', 's-37', 'd-43', 4, '300', '1200', 'A', '0', '1200', '12/11/2020', '12/11/2020 06:12:15 pm'),
(37, '18', 's-37', 'd-43', 4, '300', '1200', 'A', '0', '1200', '12/11/2020', '12/11/2020 06:12:16 pm'),
(38, '20', 's-37', 'd-43', 4, '300', '1200', 'A', '0', '1200', '12/11/2020', '12/11/2020 06:44:11 pm'),
(39, '111', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '12/11/2020', '12/11/2020 06:49:07 pm'),
(40, '111', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '12/11/2020', '12/11/2020 06:49:14 pm'),
(41, '112', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '12/11/2020', '12/11/2020 07:16:45 pm'),
(42, '112', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '12/11/2020', '12/11/2020 07:16:51 pm'),
(43, '113', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '12/11/2020', '12/11/2020 07:41:34 pm'),
(44, '113', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '12/11/2020', '12/11/2020 07:41:42 pm'),
(45, '114', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '13/11/2020', '13/11/2020 01:48:27 am'),
(46, '114', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '13/11/2020', '13/11/2020 01:48:35 am'),
(47, '115', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '13/11/2020', '13/11/2020 11:00:48 am'),
(48, '115', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '13/11/2020', '13/11/2020 11:05:49 am'),
(49, '115', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '13/11/2020', '13/11/2020 11:08:00 am'),
(50, '115', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '13/11/2020', '13/11/2020 11:08:03 am'),
(51, '115', 's-36', 'd-46', 2, '300', '600', 'A', '20', '580', '13/11/2020', '13/11/2020 11:15:39 am'),
(52, '116', 's-36', 'd-46', 3, '300', '900', 'A', '30', '870', '14/11/2020', '14/11/2020 10:28:27 am'),
(53, '116', 's-37', 'd-43', 3, '300', '900', 'A', '0', '900', '14/11/2020', '14/11/2020 10:28:40 am'),
(54, '117', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '14/11/2020', '14/11/2020 12:44:50 pm'),
(55, '117', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '14/11/2020', '14/11/2020 12:44:51 pm'),
(56, '117', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '14/11/2020', '14/11/2020 12:44:53 pm'),
(57, '117', 's-36', 'd-46', 2, '250', '500', 'A', '20', '480', '14/11/2020', '14/11/2020 12:44:57 pm'),
(58, '117', 's-36', 'd-46', 2, '250', '500', 'A', '20', '480', '14/11/2020', '14/11/2020 12:44:58 pm'),
(59, '118', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '14/11/2020', '14/11/2020 05:51:54 pm'),
(60, '118', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '14/11/2020', '14/11/2020 05:51:55 pm'),
(61, '119', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '14/11/2020', '14/11/2020 06:37:52 pm'),
(62, '119', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '14/11/2020', '14/11/2020 06:37:53 pm'),
(63, '120', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '14/11/2020', '14/11/2020 08:29:05 pm'),
(64, '120', 's-37', 'd-43', 2, '300', '600', 'A', '0', '600', '14/11/2020', '14/11/2020 08:29:10 pm');

-- --------------------------------------------------------

--
-- Table structure for table `companydetails`
--

CREATE TABLE `companydetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_fax` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_p_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companydetails`
--

INSERT INTO `companydetails` (`id`, `company_code`, `company_name`, `company_city`, `company_phone`, `company_fax`, `company_email`, `company_address`, `contact_person`, `c_p_designation`) VALUES
(2, 'q-123', 'Expert It', 'Dhaka-1234', '456453754', '+465632', 'expert@gmail.com', 'dhaka,kollanpur', 'Al-amin', 'junior  software Developer');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dial_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_symbol` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `code`, `dial_code`, `currency_name`, `currency_symbol`, `currency_code`) VALUES
(1, 'Algeria', 'DZ', '+213', 'Algerian dinar', 'دج  ', 'DZD'),
(2, 'Argentina', 'AR', '+54', 'Argentine peso', '$', 'ARS'),
(3, 'Aruba', 'AW', '+297', 'Aruban florin', 'ƒ', 'AWG'),
(4, 'Australia', 'AU', '+61', 'Australian dollar', '$', 'AUD'),
(5, 'Austria', 'AT', '+43', 'Euro', '€', 'EUR'),
(6, 'Bangladesh', 'BD', '+880', 'Bangladeshi taka', '৳', 'BDT'),
(7, 'Belarus', 'BY', '+375', 'Belarusian ruble', 'Br', 'BYR'),
(8, 'Belgium', 'BE', '+32', 'Euro', '€', 'EUR'),
(9, 'Bermuda', 'BM', '+1441', 'Bermudian dollar', '$', 'BMD'),
(10, 'Bhutan', 'BT', '+975', 'Bhutanese ngultrum', 'Nu.', 'BTN'),
(11, 'Botswana', 'BW', '+267', 'Botswana pula', 'P', 'BWP'),
(12, 'Brazil', 'BR', '+55', 'Brazilian real', 'R$', 'BRL'),
(13, 'Bulgaria', 'BG', '+359', 'Bulgarian lev', 'лв', 'BGN'),
(14, 'Cambodia', 'KH', '+855', 'Cambodian riel', '៛', 'KHR'),
(15, 'Canada', 'CA', '+1', 'Canadian dollar', '$', 'CAD'),
(16, 'Chad', 'TD', '+235', 'Central African CFA', 'Fr', 'XAF'),
(17, 'Chile', 'CL', '+56', 'Chilean peso', '$', 'CLP'),
(18, 'China', 'CN', '+86', 'Chinese yuan', '¥ or 元', 'CNY'),
(19, 'Colombia', 'CO', '+57', 'Colombian peso', '$', 'COP'),
(20, 'Costa Rica', 'CR', '+506', 'Costa Rican colón', '₡', 'CRC'),
(21, 'Croatia', 'HR', '+385', 'Croatian kuna', 'kn', 'HRK'),
(22, 'Cuba', 'CU', '+53', 'Cuban convertible pe', '$', 'CUC'),
(23, 'Cyprus', 'CY', '+357', 'Euro', '€', 'EUR'),
(24, 'Denmark', 'DK', '+45', 'Danish krone', 'kr', 'DKK'),
(25, 'Dominica', 'DM', '+1767', 'East Caribbean dolla', '$', 'XCD'),
(26, 'Ecuador', 'EC', '+593', 'United States dollar', '$', 'USD'),
(27, 'Egypt', 'EG', '+20', 'Egyptian pound', '£ orج.م ', 'EGP'),
(28, 'Ethiopia', 'ET', '+251', 'Ethiopian birr', 'Br', 'ETB'),
(29, 'Fiji', 'FJ', '+679', 'Fijian dollar', '$', 'FJD'),
(30, 'Finland', 'FI', '+358', 'Euro', '€', 'EUR'),
(31, 'France', 'FR', '+33', 'Euro', '€', 'EUR'),
(32, 'Georgia', 'GE', '+995', 'Georgian lari', 'ლ', 'GEL'),
(33, 'Germany', 'DE', '+49', 'Euro', '€', 'EUR'),
(34, 'Ghana', 'GH', '+233', 'Ghana cedi', '₵', 'GHS'),
(35, 'Greece', 'GR', '+30', 'Euro', '€', 'EUR'),
(36, 'Haiti', 'HT', '+509', 'Haitian gourde', 'G', 'HTG'),
(37, 'Hong Kong', 'HK', '+852', 'Hong Kong dollar', '$', 'HKD'),
(38, 'Hungary', 'HU', '+36', 'Hungarian forint', 'Ft', 'HUF'),
(39, 'Iceland', 'IS', '+354', 'Icelandic króna', 'kr', 'ISK'),
(40, 'India', 'IN', '+91', 'Indian rupee', '₹', 'INR'),
(41, 'Indonesia', 'ID', '+62', 'Indonesian rupiah', 'Rp', 'IDR'),
(42, 'Iraq', 'IQ', '+964', 'Iraqi dinar', 'ع.د', 'IQD'),
(43, 'Ireland', 'IE', '+353', 'Euro', '€', 'EUR'),
(44, 'Israel', 'IL', '+972', 'Israeli new shekel', '₪', 'ILS'),
(45, 'Italy', 'IT', '+39', 'Euro', '€', 'EUR'),
(46, 'Jamaica', 'JM', '+1876', 'Jamaican dollar', '$', 'JMD'),
(47, 'Japan', 'JP', '+81', 'Japanese yen', '¥', 'JPY'),
(48, 'Jersey', 'JE', '+44', 'British pound', '£', 'GBP'),
(49, 'Jordan', 'JO', '+962', 'Jordanian dinar', 'د.ا', 'JOD'),
(50, 'Kenya', 'KE', '+254', 'Kenyan shilling', 'Sh', 'KES'),
(51, 'Kuwait', 'KW', '+965', 'Kuwaiti dinar', 'د.ك', 'KWD'),
(52, 'Kyrgyzstan', 'KG', '+996', 'Kyrgyzstani som', 'лв', 'KGS'),
(53, 'Lebanon', 'LB', '+961', 'Lebanese pound', 'ل.ل.‎', 'LBP'),
(54, 'Liberia', 'LR', '+231', 'Liberian dollar', '$', 'LRD'),
(55, 'Liechtenstein', 'LI', '+423', 'Swiss franc', 'Fr', 'CHF'),
(56, 'Lithuania', 'LT', '+370', 'Euro', '€', 'EUR'),
(57, 'Madagascar', 'MG', '+261', 'Malagasy ariary', 'Ar', 'MGA'),
(58, 'Malaysia', 'MY', '+60', 'Malaysian ringgit', 'RM', 'MYR'),
(59, 'Malaysia', 'MY', '+60', 'Malaysian ringgit', 'RM', 'MYR'),
(60, 'Mauritius', 'MU', '+230', 'Mauritian rupee', '₨', 'MUR'),
(61, 'Mexico', 'MX', '+52', 'Mexican peso', '$', 'MXN'),
(62, 'Monaco', 'MC', '+377', 'Euro', '€', 'EUR'),
(63, 'Mongolia', 'MN', '+976', 'Mongolian tögrög', '₮', 'MNT'),
(64, 'Morocco', 'MA', '+212', 'Moroccan dirham', 'د.م.', 'MAD'),
(65, 'Myanmar', 'MM', '+95', 'Burmese kyat', 'Ks', 'MMK'),
(66, 'Nepal', 'NP', '+977', 'Nepalese rupee', '₨', 'NPR'),
(67, 'Netherlands', 'NL', '+31', 'Euro', '€', 'EUR'),
(68, 'New Zealand', 'NZ', '+64', 'New Zealand dollar', '$', 'NZD'),
(69, 'Nigeria', 'NG', '+234', 'Nigerian naira', '₦', 'NGN'),
(70, 'Norway', 'NO', '+47', 'Norwegian krone', 'kr', 'NOK'),
(71, 'Oman', 'OM', '+968', 'Omani rial', 'ر.ع.', 'OMR'),
(72, 'Pakistan', 'PK', '+92', 'Pakistani rupee', '₨', 'PKR'),
(73, 'Panama', 'PA', '+507', 'Panamanian balboa', 'B/.', 'PAB'),
(74, 'Paraguay', 'PY', '+595', 'Paraguayan guaraní', '₲', 'PYG'),
(75, 'Peru', 'PE', '+51', 'Peruvian nuevo sol', 'S/.', 'PEN'),
(76, 'Philippines', 'PH', '+63', 'Philippine peso', '₱', 'PHP'),
(77, 'Poland', 'PL', '+48', 'Polish z?oty', 'zł', 'PLN'),
(78, 'Portugal', 'PT', '+351', 'Euro', '€', 'EUR'),
(79, 'Qatar', 'QA', '+974', 'Qatari riyal', 'ر.ق', 'QAR'),
(80, 'Romania', 'RO', '+40', 'Romanian leu', 'lei', 'RON'),
(81, 'Russia', 'RU', '+7', 'Russian ruble', '₽', 'RUB'),
(82, 'Saudi Arabia', 'SA', '+966', 'Saudi riyal', ' ر.س', 'SAR'),
(83, 'Senegal', 'SN', '+221', 'West African CFA fra', 'Fr', 'XOF'),
(84, 'Singapore', 'SG', '+65', 'Brunei dollar', '$', 'BND'),
(85, 'Slovakia', 'SK', '+421', 'Euro', '€', 'EUR'),
(86, 'Somalia', 'SO', '+252', 'Somali shilling', 'Sh', 'SOS'),
(87, 'South Africa', 'ZA', '+27', 'South African rand', 'R', 'ZAR'),
(88, 'Spain', 'ES', '+34', 'Euro', '€', 'EUR'),
(89, 'Sri Lanka', 'LK', '+94', 'Sri Lankan rupee', 'Rs or රු', 'LKR'),
(90, 'Sudan', 'SD', '+249', 'Sudanese pound', 'SD', 'SDG'),
(91, 'Swaziland', 'SZ', '+268', 'Swazi lilangeni', 'L', 'SZL'),
(92, 'Sweden', 'SE', '+46', 'Swedish krona', 'kr', 'SEK'),
(93, 'Switzerland', 'CH', '+41', 'Swiss franc', 'Fr', 'CHF'),
(94, 'Taiwan', 'TW', '+886', 'New Taiwan dollar', '$', 'TWD'),
(95, 'Thailand', 'TH', '+66', 'Thai baht', '฿', 'THB'),
(96, 'Uganda', 'UG', '+256', 'Ugandan shilling', 'Sh', 'UGX'),
(97, 'Ukraine', 'UA', '+380', 'Ukrainian hryvnia', '₴', 'UAH'),
(98, 'United Arab Emirates', 'AE', '+971', 'United Arab Emirates', 'AE', 'AED'),
(99, 'United Kingdom', 'GB', '+44', 'British pound', '£', 'GBP'),
(100, 'United States', 'US', '+1', 'United States dollar', '$', 'USD'),
(101, 'Uruguay', 'UY', '+598', 'Uruguayan peso', '$', 'UYU'),
(102, 'Vietnam', 'VN', '+84', 'Vietnamese ??ng', '₫', 'VND'),
(103, 'Yemen', 'YE', '+967', 'Yemeni rial', '﷼', 'YER'),
(104, 'Zimbabwe', 'ZW', '+263', 'Botswana pula', 'P', 'BWP');

-- --------------------------------------------------------

--
-- Table structure for table `currency_setting`
--

CREATE TABLE `currency_setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `currency` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_text` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency_position` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency_setting`
--

INSERT INTO `currency_setting` (`id`, `currency`, `symbol`, `currency_text`, `currency_position`) VALUES
(1, '6', '৳', 'BDT', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person_designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport_allowance_factory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport_allowance_wh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `openig_due` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_status` int(11) DEFAULT '0',
  `monthly_target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quarterly_target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_code`, `customer_name`, `customer_city`, `customer_phone`, `customer_email`, `customer_address`, `contact_person_name`, `contact_person_designation`, `transport_allowance_factory`, `transport_allowance_wh`, `openig_due`, `customer_status`, `monthly_target`, `quarterly_target`, `date`) VALUES
(2, 's-24', 'al-amin', 'dhaka-1234', '01895465785', 'customer@gmail.com', 'dhaka', 'parvez', 'acb', 'Mayer Dua', 'sdf', '8000', NULL, '70000', '900000', '2020-11-14'),
(3, 's-25', 'al-amin rana', 'dhaka-1235', '01215475554', 'customer@gmail.com', 'dhaka', 'parvez', 'acb', 'Bismillah Tiles', 'sdf', '-8800', NULL, '70000', '900000', '2020-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealer_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealer_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dealer_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quarterly_target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthly_bonus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_due` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_due` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
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
(1, '2020_01_09_145038_create_settings', 1),
(2, '2020_01_09_145223_create_system_logs', 1),
(3, '2020_01_09_145403_create_users', 1),
(4, '2020_01_09_150121_create_user_role', 1),
(5, '2020_02_08_115404_create_currencies', 1),
(6, '2020_02_08_121209_create_currency_setting', 1),
(7, '2020_10_22_122243_create_account_manage_table', 2),
(8, '2020_10_22_125957_create_income_manage_table', 3),
(9, '2020_10_22_130036_create_expanse_manage_table', 3),
(10, '2020_11_07_093416_create_producttype_table', 4),
(11, '2020_11_07_103425_create_productdetails_table', 5),
(12, '2020_11_07_120852_create_companydetails_table', 6),
(13, '2020_11_07_125630_create_producsize_table', 7),
(14, '2020_11_07_133424_create_customer_table', 8),
(15, '2020_11_08_132849_create_dealers_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `producsize`
--

CREATE TABLE `producsize` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producsize`
--

INSERT INTO `producsize` (`id`, `product_type`, `size`) VALUES
(4, 'floor ties', '24X16');

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE `productdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_specification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_mesurement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bonus` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bonus_option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`id`, `product_type`, `product_code`, `product_name`, `product_specification`, `unit_mesurement`, `grade`, `unit_price`, `comission`, `bonus`, `bonus_option`, `date`) VALUES
(1, 'd-46', 's-36', 'abc', '24*24', '50', 'A', '250', '10', '0', 'No', '2020-11-14'),
(2, 'd-43', 's-37', 'fgh', '16X16', '50', 'A', '300', '0', '0', 'No', '2020-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_code` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`id`, `type_code`, `product_type_name`) VALUES
(2, 'd-46', 'floor ties'),
(3, 'd-47', 'floor ties');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `phone`, `email`, `address`, `logo`, `favicon`, `soft_name`) VALUES
(1, 'AB Ceramic Industry', '8801711222786', 'admin@mhp.com', 'Apon Heights,#27/1/B,Flat:A-9,Road#3, shyamoli,Mirpur Road, Dhaka1 207', '1604904118.png', '1604991924.png', 'v1.0');

-- --------------------------------------------------------

--
-- Table structure for table `system_logs`
--

CREATE TABLE `system_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `changes` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_logs`
--

INSERT INTO `system_logs` (`id`, `date_time`, `user_id`, `user_name`, `table`, `action`, `changes`) VALUES
(1, '2020-09-30 07:37:08', 1, 'Modern Admin', 'DESIGNATION', 'Update Data', 'Modern Admin, 01766409819, admin@mhp.com, Maijde , Noakhali , Bangladesh, admin, 1, , , , , 1, 1, 1, 1, 1, Active'),
(2, '2020-09-30 07:42:53', 1, 'Modern Admin', 'DESIGNATION', 'Update Data', 'Modern Admin, 01766409819, admin@mhp.com, Maijde , Noakhali , Bangladesh, admin, 1, , , , , 1, 1, 1, 1, 1, Active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(99) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(66) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` tinyint(4) NOT NULL COMMENT '1=Admin',
  `create_per` int(11) DEFAULT NULL,
  `edit_per` int(11) DEFAULT NULL,
  `delete_per` int(11) DEFAULT NULL,
  `report_per` int(11) DEFAULT NULL,
  `admin` int(11) NOT NULL,
  `reception` int(11) NOT NULL,
  `pharmacy` int(11) NOT NULL,
  `office` int(11) NOT NULL,
  `lab` int(11) NOT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `designation`, `mobile`, `address`, `email`, `username`, `password`, `remember_token`, `user_role`, `create_per`, `edit_per`, `delete_per`, `report_per`, `admin`, `reception`, `pharmacy`, `office`, `lab`, `status`) VALUES
(1, 'AB Ceramic Industries Admin', 'Admin', '01766409819', 'Maijde , Noakhali , Bangladesh', 'admin@mhp.com', 'admin', '$2y$10$/O22znHDtRNCvkqyv8cQS.Wh3Iwgcpscrs0u50tJ4QK/eaU81C3EW', '7A3dpbQNRBUlJYQd6wmrHIJnxSiAcbUh568RRmQehogWS5qY3bhCcnPDZxLL', 1, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'Accounts Manager'),
(3, 'Assistant Accountant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_manage`
--
ALTER TABLE `account_manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_manage`
--
ALTER TABLE `cart_manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_memo_cart`
--
ALTER TABLE `cash_memo_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companydetails`
--
ALTER TABLE `companydetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency_setting`
--
ALTER TABLE `currency_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producsize`
--
ALTER TABLE `producsize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productdetails`
--
ALTER TABLE `productdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_logs`
--
ALTER TABLE `system_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_manage`
--
ALTER TABLE `account_manage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart_manage`
--
ALTER TABLE `cart_manage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cash_memo_cart`
--
ALTER TABLE `cash_memo_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `companydetails`
--
ALTER TABLE `companydetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `currency_setting`
--
ALTER TABLE `currency_setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `producsize`
--
ALTER TABLE `producsize`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productdetails`
--
ALTER TABLE `productdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `producttype`
--
ALTER TABLE `producttype`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_logs`
--
ALTER TABLE `system_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
