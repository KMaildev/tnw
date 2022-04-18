-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 09:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tatnaywonproperty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', 'd54d1702ad0f8326224b817c796763c9', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `apply_jobs`
--

CREATE TABLE `apply_jobs` (
  `aj_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `resume_file` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `other_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE `bank_accounts` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(225) NOT NULL,
  `account_name` varchar(225) NOT NULL,
  `account_number` text NOT NULL,
  `carete_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_accounts`
--

INSERT INTO `bank_accounts` (`bank_id`, `bank_name`, `account_name`, `account_number`, `carete_date`) VALUES
(2, 'AYA', 'Tat Nay Won', '1234 1234 4567 7654', '2021-07-09'),
(3, 'AYA', 'Tat Nay Won', '0987 8909 8765 5432', '2021-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `c_id` int(11) NOT NULL,
  `position` text NOT NULL,
  `experience_level` text NOT NULL,
  `salary` text NOT NULL,
  `job_location` text NOT NULL,
  `job_description` text NOT NULL,
  `job_requirements` text NOT NULL,
  `about_our_company` text NOT NULL,
  `male_total` text NOT NULL,
  `female_total` text NOT NULL,
  `create_date` varchar(255) NOT NULL,
  `other_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `logo` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `address`, `phone`, `email`, `logo`, `admin_id`, `status`) VALUES
(1, 'Tat Nay Won Real Estate Company Limited', 'No.196 ,Pinlon Road, 35 ward , North Dagon', ' 09.268858885, 09425306167', 'info@tatnaywonproperty.com', 'logo3.jpg', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `e_date` text NOT NULL,
  `e_time` text NOT NULL,
  `location` text NOT NULL,
  `description_eng` text NOT NULL,
  `description_mm` text NOT NULL,
  `photo` text NOT NULL,
  `video` text NOT NULL,
  `created_date` text NOT NULL,
  `other_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event_booking`
--

CREATE TABLE `event_booking` (
  `ev_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `created_date` text NOT NULL,
  `other_date` varchar(255) NOT NULL,
  `event_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `f_id` int(11) NOT NULL,
  `userinfo_id` int(11) NOT NULL,
  `properties_data_id` int(11) NOT NULL,
  `other_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` varchar(225) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `folder_id` int(11) NOT NULL,
  `folder_name` text NOT NULL,
  `status` int(11) NOT NULL,
  `careted_date` varchar(255) NOT NULL,
  `other_date` varchar(255) NOT NULL,
  `users_status_info` varchar(255) NOT NULL,
  `users_info_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `home_loan_application`
--

CREATE TABLE `home_loan_application` (
  `h_id` int(11) NOT NULL,
  `property_type` text NOT NULL,
  `region` text NOT NULL,
  `township_id` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `date_of_birth` text NOT NULL,
  `application_type` text NOT NULL,
  `employment_status` text NOT NULL,
  `incomes` text NOT NULL,
  `current_location` text NOT NULL,
  `bank` text NOT NULL,
  `date` text NOT NULL,
  `other_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `news_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `carete_date` varchar(225) NOT NULL,
  `upload_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `member_message`
--

CREATE TABLE `member_message` (
  `mm_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `subject` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `other_date` varchar(255) NOT NULL,
  `user_info_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `node_pad`
--

CREATE TABLE `node_pad` (
  `np_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` varchar(225) NOT NULL,
  `other_date` varchar(255) NOT NULL,
  `users_info_id` int(11) NOT NULL,
  `users_info_status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_name` text NOT NULL,
  `package_type` text NOT NULL,
  `point_charges` text NOT NULL,
  `no_of_posts` text NOT NULL,
  `video_clip` int(11) NOT NULL,
  `facebook_ads` int(11) NOT NULL,
  `price` text NOT NULL,
  `discount` text NOT NULL,
  `status` text NOT NULL,
  `packages_plan` text NOT NULL,
  `carete_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `package_type`, `point_charges`, `no_of_posts`, `video_clip`, `facebook_ads`, `price`, `discount`, `status`, `packages_plan`, `carete_date`) VALUES
(1, 'GOLD', 'Monthly', '20', '20', 3, 3, '40000', '5', '1', 'business_plans', '2021-07-15'),
(2, 'DIAMOND', 'Monthly', '10', '15', 5, 5, '60000', '10', '1', 'personal_plan', '2021-07-15'),
(3, 'Free', 'Monthly', '0', '5', 1, 0, '0', '', '1', 'free_for_owner', '2021-07-15'),
(4, 'Free', 'Monthly', '0', '100', 1, 0, '0', '', '1', 'free_for_agent', '2021-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `package_order`
--

CREATE TABLE `package_order` (
  `po_id` int(11) NOT NULL,
  `contact` text NOT NULL,
  `choose_payment` text NOT NULL,
  `bank_account_id` text NOT NULL,
  `screenshot_file` text NOT NULL,
  `packages_id` int(11) NOT NULL,
  `user_info_id` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `end_date` text NOT NULL,
  `packagetype` text NOT NULL,
  `other_date` varchar(255) NOT NULL,
  `approval_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package_order`
--

INSERT INTO `package_order` (`po_id`, `contact`, `choose_payment`, `bank_account_id`, `screenshot_file`, `packages_id`, `user_info_id`, `order_date`, `end_date`, `packagetype`, `other_date`, `approval_status`) VALUES
(1, '09123123123', 'contact_me', '', '', 1, 1, '2021-07-16', '2021-08-16', 'Monthly', 'July 16, 2021', '1');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `sale_id` int(11) NOT NULL,
  `title_eng` varchar(255) NOT NULL,
  `title_mm` varchar(255) NOT NULL,
  `region_id` int(11) NOT NULL,
  `sale_township_id` int(11) NOT NULL,
  `sale_property_type` int(11) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `area_type` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `price_type` varchar(255) NOT NULL,
  `installment` varchar(255) NOT NULL,
  `property_status` varchar(255) NOT NULL,
  `rooms` varchar(255) NOT NULL,
  `bathroom` varchar(255) NOT NULL,
  `dining_room` varchar(255) NOT NULL,
  `living_room` varchar(255) NOT NULL,
  `bead_room` varchar(255) NOT NULL,
  `other_room` varchar(255) NOT NULL,
  `shrine_room` varchar(255) NOT NULL,
  `year_built` varchar(255) NOT NULL,
  `swimming_pool` varchar(255) DEFAULT NULL,
  `securit` varchar(255) DEFAULT NULL,
  `air_conditioning` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) DEFAULT NULL,
  `balcony` varchar(255) DEFAULT NULL,
  `cctv` varchar(255) DEFAULT NULL,
  `car_parking` varchar(255) DEFAULT NULL,
  `dishwasher` varchar(255) DEFAULT NULL,
  `generator` varchar(255) DEFAULT NULL,
  `near_church` varchar(255) DEFAULT NULL,
  `garden` varchar(255) DEFAULT NULL,
  `gym` varchar(255) DEFAULT NULL,
  `lift` varchar(255) DEFAULT NULL,
  `play_ground` varchar(255) DEFAULT NULL,
  `water_heater` varchar(255) DEFAULT NULL,
  `mountain_view` varchar(255) DEFAULT NULL,
  `pagoda_view` varchar(255) DEFAULT NULL,
  `sea_view` varchar(255) DEFAULT NULL,
  `lake_view` varchar(255) DEFAULT NULL,
  `city_view` varchar(255) DEFAULT NULL,
  `garden_view` varchar(255) DEFAULT NULL,
  `river_view` varchar(255) DEFAULT NULL,
  `showroom` varchar(255) DEFAULT NULL,
  `restaurant` varchar(255) DEFAULT NULL,
  `office` varchar(255) DEFAULT NULL,
  `warehouse` varchar(255) DEFAULT NULL,
  `description_mm` text DEFAULT NULL,
  `description_eng` text DEFAULT NULL,
  `plans_photo` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `ad_status` varchar(255) NOT NULL,
  `propertie_type` varchar(255) NOT NULL,
  `ad_number` varchar(255) NOT NULL,
  `education` text DEFAULT NULL,
  `health` text DEFAULT NULL,
  `transportation` text DEFAULT NULL,
  `user_info_id` int(11) DEFAULT NULL,
  `carete_date` varchar(255) NOT NULL,
  `post_upload_date` varchar(225) NOT NULL,
  `viewer_count` int(11) NOT NULL DEFAULT 0,
  `soldout_status` int(11) NOT NULL DEFAULT 0,
  `map_link` text NOT NULL,
  `share_agent_fee` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`sale_id`, `title_eng`, `title_mm`, `region_id`, `sale_township_id`, `sale_property_type`, `floor`, `area`, `area_type`, `price`, `price_type`, `installment`, `property_status`, `rooms`, `bathroom`, `dining_room`, `living_room`, `bead_room`, `other_room`, `shrine_room`, `year_built`, `swimming_pool`, `securit`, `air_conditioning`, `wifi`, `balcony`, `cctv`, `car_parking`, `dishwasher`, `generator`, `near_church`, `garden`, `gym`, `lift`, `play_ground`, `water_heater`, `mountain_view`, `pagoda_view`, `sea_view`, `lake_view`, `city_view`, `garden_view`, `river_view`, `showroom`, `restaurant`, `office`, `warehouse`, `description_mm`, `description_eng`, `plans_photo`, `video`, `ad_status`, `propertie_type`, `ad_number`, `education`, `health`, `transportation`, `user_info_id`, `carete_date`, `post_upload_date`, `viewer_count`, `soldout_status`, `map_link`, `share_agent_fee`) VALUES
(1, 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', 1, 1, 1, '', '40x60', 'Sqft', 9000, 'MMK(Lakhs)', 'No', 'Fully Furnished', '', '', '', '', '', '', '', '', NULL, NULL, 'Air conditioning', 'Wifi', NULL, NULL, NULL, 'Dishwasher', 'Generator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sea View', 'Lake View', NULL, NULL, NULL, NULL, NULL, 'Office', 'Warehouse', '<p>ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း<br></p>', '<p>ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း<br></p>', '', '', '1', 'for_sale', 'S-000001', NULL, NULL, NULL, 0, '2021-07-15', '15 July, 2021 23:56 pm', 1, 1, '', 'Yes'),
(2, 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', 1, 1, 1, '', '30x60', 'Sqft', 9000, 'MMK(Lakhs)', 'No', 'Fully Furnished', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '', NULL, NULL, 'Air conditioning', 'Wifi', NULL, NULL, NULL, 'Dishwasher', 'Generator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sea View', 'Lake View', NULL, NULL, NULL, NULL, NULL, 'Office', 'Warehouse', '<p>ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း<br></p>', '<p>ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း<br></p>', '', '24ee57c30d27d7e24cab8eed0ecb8162.mp4', '1', 'for_sale', 'S-000002', NULL, NULL, NULL, 1, '2021-07-16', '16 July, 2021 00:51 am', 0, 0, '', 'Yes'),
(3, 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', 1, 1, 2, '', '30x50', 'Sqft', 900, 'MMK(Lakhs)', 'No', 'Fully Furnished', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '', NULL, NULL, 'Air conditioning', 'Wifi', NULL, NULL, NULL, 'Dishwasher', 'Generator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sea View', 'Lake View', NULL, NULL, NULL, NULL, NULL, 'Office', 'Warehouse', '<p>ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း<br></p>', '<p>ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း<br></p>', '', '', '1', 'for_sale', 'S-000003', NULL, NULL, NULL, 1, '2021-07-16', '16 July, 2021 01:11 am', 1, 0, '', 'Yes'),
(4, 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', 1, 1, 2, '', '30x60', 'Sqft', 900, 'MMK(Lakhs)', 'No', 'Fully Furnished', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '', NULL, NULL, 'Air conditioning', 'Wifi', NULL, NULL, NULL, 'Dishwasher', 'Generator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sea View', 'Lake View', NULL, NULL, NULL, NULL, NULL, 'Office', 'Warehouse', '<p>ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း<br></p>', '<p>ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း<br></p>', '', '24ee57c30d27d7e24cab8eed0ecb8162.mp4', '1', 'for_sale', 'S-000004', NULL, NULL, NULL, 1, '2021-07-16', '16 July, 2021 01:30 am', 0, 0, '', 'Yes'),
(5, 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', 1, 1, 1, '', '30x60', 'Sqft', 2000, 'MMK(Lakhs)', 'No', 'Fully Furnished', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '', NULL, NULL, 'Air conditioning', 'Wifi', NULL, NULL, NULL, 'Dishwasher', 'Generator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sea View', 'Lake View', NULL, NULL, NULL, NULL, NULL, 'Office', 'Warehouse', 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', '<p>ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း<br></p>', '', '', '1', 'for_sale', 'S-000005', NULL, NULL, NULL, 1, '2021-07-16', '16 July, 2021 01:38 am', 0, 0, '', 'Yes'),
(6, 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', 'ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း', 1, 1, 1, '', '30x60', 'Sqft', 9000, 'MMK(Lakhs)', 'No', 'Fully Furnished', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '0 Room', '', NULL, NULL, 'Air conditioning', 'Wifi', NULL, NULL, NULL, 'Dishwasher', 'Generator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sea View', 'Lake View', NULL, NULL, NULL, NULL, NULL, 'Office', 'Warehouse', '<p>ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း<br></p>', '<p>ရန်ကုန်မြို့ မြောက်ဒဂုံမြို့နယ် ၄၁ရပ်ကွက် ပေ၄၀ပေ၆၀ အကျယ်အ၀န်းရှိသော နှစ်ထပ်တိုက်ခံအိမ်အရောင်း<br></p>', '', '', '1', 'for_sale', 'S-000006', NULL, NULL, NULL, 1, '2021-07-16', '16 July, 2021 01:39 am', 0, 0, '', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `propertie_photo`
--

CREATE TABLE `propertie_photo` (
  `propertie_id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `properties_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `propertie_photo`
--

INSERT INTO `propertie_photo` (`propertie_id`, `photo`, `properties_id`) VALUES
(1, 'b9f69a98bd8040b1fcfa28b84186d32f.jpg', 1),
(2, '2dd75349999cf12a3b791c7ac667eaae.jpg', 2),
(3, '47c866b7815d4b6b268f05c24b0a4cb5.jpg', 3),
(4, '39335ae58511b83ee5794434cf48dfde.jpg', 4),
(5, '2b81783e4a23bb36cb986ec1ac8b7eef.jpg', 5),
(6, '14482f63b92b3cfd2361c6ac92c04b9c.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `property_book`
--

CREATE TABLE `property_book` (
  `pb_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `carete_date` varchar(225) NOT NULL,
  `upload_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_book`
--

INSERT INTO `property_book` (`pb_id`, `title`, `description`, `photo`, `admin_id`, `status`, `carete_date`, `upload_date`) VALUES
(1, 'How to Flip a House as a Real Estate Investor', '<p><span xss=removed>\"Real Estate Investing: How to Flip a House as a Real Estate Investor\" teaches those interested in investing in real estate how to get started wholesaling houses for quick cash profits. Topics covered include Investor Objectives, Building Your Team, Finding Wholesale Buyers, Finding Motivated Sellers, Finding Wholesale Properties, Deal Analysis, Negotiating With Sellers and Buyers, Making Offers, Contract Clauses, Marketing Your Deals, and Closings and Getting Paid. If you want to flip a house or see yourself flipping properties for a living, this ebook will teach you the basics of how to wholesale a house, also known as flipping houses. For the price it\'s a no-brainer, get it today and get started.</span><br></p>', 'cfa22438a606d2eb312310cf9eacdf59.jpg', 1, '1', '2021-07-09', 'July 9, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `property_guide`
--

CREATE TABLE `property_guide` (
  `pg_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `carete_date` varchar(225) NOT NULL,
  `upload_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_guide`
--

INSERT INTO `property_guide` (`pg_id`, `title`, `description`, `photo`, `admin_id`, `status`, `carete_date`, `upload_date`) VALUES
(1, 'နှစ်ဦးအမည်နှင့် ဝယ်ထားသည့် အိမ်ခြံမြေ တိုက်ခန်းကို ဝယ်မည်ဆိုလျှင်', '<p>နှစ်ဦးအမည်နှင့် ဝယ်ထားသည့် အိမ်ခြံမြေ တိုက်ခန်းကို ဝယ်မည်ဆိုလျှင်<br></p>', 'e8cccfad732b323777f9e55ac1811d35.png', 1, 1, '2021-07-09', 'July 9, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE `property_type` (
  `property_type_id` int(11) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `property_type_mm` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_type`
--

INSERT INTO `property_type` (`property_type_id`, `property_type`, `property_type_mm`, `status`) VALUES
(1, 'Apartment', 'တိုက်ခန်း', '1'),
(2, 'Condo', 'ကွန်ဒိုအခန်း', '1'),
(3, 'House', 'လုံးချင်းအိမ်', '1'),
(4, 'Land', 'မြေ', '1'),
(5, 'Shops', 'စျေးဆိုင်', '1'),
(6, 'Offices', 'Office', '1'),
(7, 'Industrial Zone', 'စက်မှုဇုန်', '1'),
(8, 'Hotel', 'ဟိုတယ်', '1'),
(9, 'Restaurant', 'စားသောက်ဆိုင်', '1'),
(10, 'Hostel', 'ဘော်ဒါဆောင်', '1');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `region_id` int(11) NOT NULL,
  `region` varchar(255) NOT NULL,
  `region_mm` varchar(225) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `region`, `region_mm`, `status`) VALUES
(1, 'Yangon Region', 'ရန်ကုန်', '1');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `r_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `other_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`r_id`, `description`, `post_id`, `member_id`, `date`, `other_date`) VALUES
(1, 'Test', 38, 2, '2021-07-15', 'July 15, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `site_viewer`
--

CREATE TABLE `site_viewer` (
  `sv_id` int(11) NOT NULL,
  `viewer` int(11) NOT NULL DEFAULT 0,
  `site_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_viewer`
--

INSERT INTO `site_viewer` (`sv_id`, `viewer`, `site_status`) VALUES
(1, 519, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tnw_cloud_photo`
--

CREATE TABLE `tnw_cloud_photo` (
  `tcp_id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `folders_id` int(11) NOT NULL,
  `created_date` varchar(225) NOT NULL,
  `upload_date` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tnw_video_channel`
--

CREATE TABLE `tnw_video_channel` (
  `vc_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `video` text NOT NULL,
  `admin_id` text NOT NULL,
  `status` text NOT NULL,
  `carete_date` text NOT NULL,
  `upload_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `townships`
--

CREATE TABLE `townships` (
  `township_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  `townships` varchar(255) NOT NULL,
  `townships_mm` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `townships`
--

INSERT INTO `townships` (`township_id`, `regions_id`, `townships`, `townships_mm`, `status`) VALUES
(1, 1, 'Lanmadaw', 'လမ်းမတော်', '1'),
(2, 1, 'Latha', 'လသာ', '1'),
(3, 1, 'Kyauktada', 'ကျောက်တံတား', '1'),
(4, 1, 'Pabedan', 'ပန်းပဲတန်း', '1'),
(5, 1, 'Pazundaung', 'ပုဇွန်တောင်', '1'),
(6, 1, 'Ahlone', 'အလုံ', '1'),
(7, 1, 'Kyeemyindaing', 'ကြည့်မြင်တိုင်', '1'),
(8, 1, 'Sanchaung', 'စမ်းချောင်း', '1'),
(9, 1, 'Bahan', 'ဗဟန်း', '1'),
(10, 1, 'Botahtaung', 'ဗိုလ်တထောင်', '1'),
(11, 1, 'Mingalartaungnyunt', 'မင်္ဂလာတောင်ညွန့်', '1'),
(12, 1, 'Tamwe', 'တာမွေ', '1'),
(13, 1, 'Yankin', 'ရန်ကင်း', '1'),
(14, 1, 'Dagon', 'ဒဂုံ', '1'),
(15, 1, 'Dagon Myothit (East)', 'ဒဂုံမြို့သစ် အရှေ့ပိုင်း', '1'),
(16, 1, 'Dagon Myothit (North)', 'ဒဂုံမြို့သစ် မြောက်ပိုင်း', '1'),
(17, 1, 'Dagon Myothit (South)', 'ဒဂုံမြို့သစ် တောင်ပိုင်း', '1'),
(18, 1, 'Dagon Myothit (Seikkan)', 'ဒဂုံမြို့သစ် ဆိပ်ကမ်း', '1'),
(19, 1, 'Kamaryut', 'ကမာရွတ်', '1'),
(20, 1, 'Insein', 'အင်းစိန်', '1'),
(21, 1, 'Hlaing', 'လှိုင်', '1'),
(22, 1, 'Hlaingtharya', 'လှိုင်သာယာ', '1'),
(23, 1, 'Mayangone', 'မရမ်းကုန်း', '1'),
(24, 1, 'Mingaladon', 'မင်္ဂလာဒုံ', '1'),
(25, 1, 'North Okkalapa', 'မြောက်ဥက္ကလာပ', '1'),
(26, 1, 'South Okkalapa', 'တောင်ဥက္ကလာပ', '1'),
(27, 1, 'Thingangyun', 'သင်္ဃန်းကျွန်း', '1'),
(28, 1, 'Thaketa', 'သာကေတ', '1'),
(29, 1, 'Thanlyin', 'သံလျင်', '1'),
(30, 1, 'Dala', 'ဒလ', '1'),
(31, 1, 'Dawbon', 'ဒေါပုံ', '1'),
(32, 1, 'Hmawbi', 'မှော်ဘီ', '1'),
(33, 1, 'Hlegu', 'လှည်းကူး', '1'),
(34, 1, 'Htantabin', 'ထန်းတပင်', '1'),
(35, 1, 'Kawhmu', 'ကော့မှူး', '1'),
(36, 1, 'Kayan', 'ခရမ်း', '1'),
(37, 1, 'Kungyangon', 'ကွမ်းခြံကုန်း', '1'),
(38, 1, 'Shwepyithar', 'ရွှေပြည်သာ', '1'),
(39, 1, 'Taikkyi', 'တိုက်ကြီး', '1'),
(40, 1, 'Thongwa', 'သုံးခွ', '1'),
(41, 1, 'Twantay', 'တွံ့တေး', '1'),
(42, 1, 'Kyauktan', 'ကျောက်တန်း', '1'),
(43, 1, 'Seikgyikanaungto', 'ဆိပ်ကြီးခနောင်တို', '1'),
(44, 1, 'Palae Myothit', 'ပုလဲမြို့သစ်', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `company_id` text NOT NULL,
  `company_name` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `company_type` text NOT NULL,
  `region_id` text NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `logo` text NOT NULL,
  `user_role` text NOT NULL,
  `user_permissions` varchar(225) NOT NULL,
  `package_id` int(11) NOT NULL,
  `suspended_status` int(11) NOT NULL DEFAULT 1,
  `carete_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `company_id`, `company_name`, `name`, `email`, `phone`, `password`, `company_type`, `region_id`, `address`, `description`, `logo`, `user_role`, `user_permissions`, `package_id`, `suspended_status`, `carete_date`) VALUES
(1, 'U-0000001', '', 'Zin Min Tun', 'zinmintun@gmail.com', '09123123123', '4297f44b13955235245b2497399d7a93', 'Property Agency', '1', 'Yangon', '<p xss=removed>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>', '80e06625dccc24c89db07d4f2f7c0590.png', 'property_agency', 'agent', 1, 1, '2021-07-15'),
(2, 'U-0000002', '', '', 'mgmg@gmail.com', '', '4297f44b13955235245b2497399d7a93', '', '', '', '', '', '', 'by_owner', 1, 1, '2021-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `want_to_buy_rent`
--

CREATE TABLE `want_to_buy_rent` (
  `w_id` int(11) NOT NULL,
  `ad_number` text NOT NULL,
  `title` text NOT NULL,
  `region_id` int(11) NOT NULL,
  `township_id` int(11) NOT NULL,
  `property_type_id` int(11) NOT NULL,
  `floor` text NOT NULL,
  `area` text NOT NULL,
  `area_type` text NOT NULL,
  `agent_allow_status` text NOT NULL,
  `property_status` text NOT NULL,
  `bedroom` text NOT NULL,
  `bathroom` text NOT NULL,
  `budget_from` text NOT NULL,
  `budget_to` text NOT NULL,
  `currency` text NOT NULL,
  `description_mm` text NOT NULL,
  `description_eng` text NOT NULL,
  `propertie_type` text NOT NULL,
  `phone` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `other_date` varchar(255) NOT NULL,
  `buy_rent_status` text NOT NULL,
  `user_info_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `viewer_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `want_to_buy_rent`
--

INSERT INTO `want_to_buy_rent` (`w_id`, `ad_number`, `title`, `region_id`, `township_id`, `property_type_id`, `floor`, `area`, `area_type`, `agent_allow_status`, `property_status`, `bedroom`, `bathroom`, `budget_from`, `budget_to`, `currency`, `description_mm`, `description_eng`, `propertie_type`, `phone`, `date`, `other_date`, `buy_rent_status`, `user_info_id`, `is_active`, `viewer_count`) VALUES
(1, 'WTB-000001', 'တဥကလာ/သင်ကန်းကျွန်း အိမ်ပါမြေကွက် အ​​မြန်ဝယ်လိုပါတယ်', 1, 1, 3, '', '40x60', 'Sqft', 'Allow agent', 'Not Furnished', '1 Room', 'Not Included', '200', '500', 'MMK(Lakhs)', '<p>တဥကလာ/သင်ကန်းကျွန်း အိမ်ပါမြေကွက် အ​​မြန်ဝယ်လိုပါတယ်<br></p>', '<p>တဥကလာ/သင်ကန်းကျွန်း အိမ်ပါမြေကွက် အ​​မြန်ဝယ်လိုပါတယ်<br></p>', 'want_to_buy', '09123123123', '2021-07-15', 'July 15, 2021', 'want_to_buy', 1, 1, 62);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  ADD PRIMARY KEY (`aj_id`);

--
-- Indexes for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `event_booking`
--
ALTER TABLE `event_booking`
  ADD PRIMARY KEY (`ev_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
  ADD PRIMARY KEY (`folder_id`);

--
-- Indexes for table `home_loan_application`
--
ALTER TABLE `home_loan_application`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `member_message`
--
ALTER TABLE `member_message`
  ADD PRIMARY KEY (`mm_id`);

--
-- Indexes for table `node_pad`
--
ALTER TABLE `node_pad`
  ADD PRIMARY KEY (`np_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `package_order`
--
ALTER TABLE `package_order`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `propertie_photo`
--
ALTER TABLE `propertie_photo`
  ADD PRIMARY KEY (`propertie_id`);

--
-- Indexes for table `property_book`
--
ALTER TABLE `property_book`
  ADD PRIMARY KEY (`pb_id`);

--
-- Indexes for table `property_guide`
--
ALTER TABLE `property_guide`
  ADD PRIMARY KEY (`pg_id`);

--
-- Indexes for table `property_type`
--
ALTER TABLE `property_type`
  ADD PRIMARY KEY (`property_type_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `site_viewer`
--
ALTER TABLE `site_viewer`
  ADD PRIMARY KEY (`sv_id`);

--
-- Indexes for table `tnw_cloud_photo`
--
ALTER TABLE `tnw_cloud_photo`
  ADD PRIMARY KEY (`tcp_id`);

--
-- Indexes for table `tnw_video_channel`
--
ALTER TABLE `tnw_video_channel`
  ADD PRIMARY KEY (`vc_id`);

--
-- Indexes for table `townships`
--
ALTER TABLE `townships`
  ADD PRIMARY KEY (`township_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `want_to_buy_rent`
--
ALTER TABLE `want_to_buy_rent`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  MODIFY `aj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bank_accounts`
--
ALTER TABLE `bank_accounts`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_booking`
--
ALTER TABLE `event_booking`
  MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `folder_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_loan_application`
--
ALTER TABLE `home_loan_application`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_message`
--
ALTER TABLE `member_message`
  MODIFY `mm_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `node_pad`
--
ALTER TABLE `node_pad`
  MODIFY `np_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package_order`
--
ALTER TABLE `package_order`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `sale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `propertie_photo`
--
ALTER TABLE `propertie_photo`
  MODIFY `propertie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `property_book`
--
ALTER TABLE `property_book`
  MODIFY `pb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_guide`
--
ALTER TABLE `property_guide`
  MODIFY `pg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property_type`
--
ALTER TABLE `property_type`
  MODIFY `property_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_viewer`
--
ALTER TABLE `site_viewer`
  MODIFY `sv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tnw_cloud_photo`
--
ALTER TABLE `tnw_cloud_photo`
  MODIFY `tcp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tnw_video_channel`
--
ALTER TABLE `tnw_video_channel`
  MODIFY `vc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `townships`
--
ALTER TABLE `townships`
  MODIFY `township_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `want_to_buy_rent`
--
ALTER TABLE `want_to_buy_rent`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
