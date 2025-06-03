-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2025 at 11:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolsite123`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `stu_img` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `stu_n` text DEFAULT NULL,
  `dob` date NOT NULL,
  `bir_pla` text DEFAULT NULL,
  `eid` int(100) DEFAULT NULL,
  `aadhar` varchar(100) DEFAULT NULL,
  `weight` int(100) DEFAULT NULL,
  `height` int(100) DEFAULT NULL,
  `mo_tou` text DEFAULT NULL,
  `religion` text DEFAULT NULL,
  `caste` text DEFAULT NULL,
  `fat_na` text DEFAULT NULL,
  `mot_na` text DEFAULT NULL,
  `loc_na` text DEFAULT NULL,
  `gau_rel` text DEFAULT NULL,
  `cur_add` text DEFAULT NULL,
  `per_add` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` varchar(500) DEFAULT NULL,
  `fat_occ` text DEFAULT NULL,
  `mot_occ` text DEFAULT NULL,
  `income` text DEFAULT NULL,
  `off_add` text DEFAULT NULL,
  `cur_sc` text DEFAULT NULL,
  `cur_cla` text DEFAULT NULL,
  `cur_med` text DEFAULT NULL,
  `saral` int(100) DEFAULT NULL,
  `Udise` text DEFAULT NULL,
  `ad_cla` text DEFAULT NULL,
  `lan` text DEFAULT NULL,
  `hobby` text DEFAULT NULL,
  `ser_no` text DEFAULT NULL,
  `post` text DEFAULT NULL,
  `service` text DEFAULT NULL,
  `pla_sub` text DEFAULT NULL,
  `sub_da` date DEFAULT NULL,
  `status` enum('seen','unseen') NOT NULL,
  `sub_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alumni_defence`
--

CREATE TABLE `alumni_defence` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(500) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alumni_t`
--

CREATE TABLE `alumni_t` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `city` text NOT NULL,
  `pass_year` varchar(15) NOT NULL,
  `phone_no` bigint(15) NOT NULL,
  `profession` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bod`
--

CREATE TABLE `bod` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cer`
--

CREATE TABLE `cer` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cap` text NOT NULL,
  `type` enum('achievement','social_activity','cocurricular_activity') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `city` varchar(11) NOT NULL,
  `status` enum('seen','unseen') NOT NULL,
  `time` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counter_s`
--

CREATE TABLE `counter_s` (
  `id` int(11) NOT NULL,
  `students` int(110) NOT NULL,
  `teachers` int(100) NOT NULL,
  `alumni` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_t`
--

CREATE TABLE `enquiry_t` (
  `en_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone_no` int(11) NOT NULL,
  `address` text NOT NULL,
  `class` enum('6th','7th','8th','9th','11th') NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ge_se`
--

CREATE TABLE `ge_se` (
  `id` int(11) NOT NULL,
  `top_image` varchar(255) NOT NULL,
  `icon_image` varchar(100) NOT NULL,
  `si_ti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `headoffice`
--

CREATE TABLE `headoffice` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(500) NOT NULL,
  `post` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `file_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `pass` char(100) NOT NULL,
  `user` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `man_t`
--

CREATE TABLE `man_t` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) NOT NULL,
  `news_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ne_co`
--

CREATE TABLE `ne_co` (
  `id` int(11) NOT NULL,
  `sub_da` varchar(10) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `content` mediumtext NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `noti`
--

CREATE TABLE `noti` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `total_views` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

CREATE TABLE `review_table` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `says`
--

CREATE TABLE `says` (
  `id` int(11) NOT NULL,
  `principal_img` varchar(500) NOT NULL,
  `principal_name` varchar(100) NOT NULL,
  `principal_post` varchar(100) NOT NULL,
  `principal_quali` varchar(100) NOT NULL,
  `principal_say` longtext NOT NULL,
  `president_img` varchar(500) NOT NULL,
  `president_name` varchar(100) NOT NULL,
  `president_post` varchar(100) NOT NULL,
  `president_quali` varchar(100) NOT NULL,
  `president_say` longtext NOT NULL,
  `commandant_img` varchar(500) NOT NULL,
  `commandant_name` varchar(100) NOT NULL,
  `commandant_post` varchar(100) NOT NULL,
  `commandant_quali` varchar(100) NOT NULL,
  `commandant_say` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image_path` varchar(256) NOT NULL,
  `caption` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_t`
--

CREATE TABLE `staff_t` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `quali` text NOT NULL,
  `join_date` text DEFAULT NULL,
  `subject` text DEFAULT NULL,
  `post` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` enum('teaching','nonteaching') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photos`
--

CREATE TABLE `tbl_photos` (
  `img_id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `img_title` varchar(100) NOT NULL,
  `img_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videogallery`
--

CREATE TABLE `videogallery` (
  `id` int(11) NOT NULL,
  `link` varchar(150) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni_defence`
--
ALTER TABLE `alumni_defence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni_t`
--
ALTER TABLE `alumni_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bod`
--
ALTER TABLE `bod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cer`
--
ALTER TABLE `cer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_s`
--
ALTER TABLE `counter_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_t`
--
ALTER TABLE `enquiry_t`
  ADD PRIMARY KEY (`en_id`);

--
-- Indexes for table `ge_se`
--
ALTER TABLE `ge_se`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headoffice`
--
ALTER TABLE `headoffice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `man_t`
--
ALTER TABLE `man_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ne_co`
--
ALTER TABLE `ne_co`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noti`
--
ALTER TABLE `noti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `says`
--
ALTER TABLE `says`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_t`
--
ALTER TABLE `staff_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videogallery`
--
ALTER TABLE `videogallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumni_defence`
--
ALTER TABLE `alumni_defence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumni_t`
--
ALTER TABLE `alumni_t`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bod`
--
ALTER TABLE `bod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cer`
--
ALTER TABLE `cer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counter_s`
--
ALTER TABLE `counter_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry_t`
--
ALTER TABLE `enquiry_t`
  MODIFY `en_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ge_se`
--
ALTER TABLE `ge_se`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headoffice`
--
ALTER TABLE `headoffice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `man_t`
--
ALTER TABLE `man_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ne_co`
--
ALTER TABLE `ne_co`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `noti`
--
ALTER TABLE `noti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_table`
--
ALTER TABLE `review_table`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `says`
--
ALTER TABLE `says`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_t`
--
ALTER TABLE `staff_t`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videogallery`
--
ALTER TABLE `videogallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
