-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2019 at 10:24 AM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_content` text NOT NULL,
  `event_content_short` text NOT NULL,
  `event_start_date` varchar(10) NOT NULL,
  `event_end_date` varchar(10) NOT NULL,
  `event_location` text NOT NULL,
  `event_map` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_title`, `event_content`, `event_content_short`, `event_start_date`, `event_end_date`, `event_location`, `event_map`, `photo`, `banner`) VALUES
(4, 'Lombatest', '<p>uehfuierh iuerhgiuaehg oaerhuo he guaregh oaerhg aerogh reugh argiuerbg r</p>', 'a,b cwefgyeagf iaegf ierae aih i erhgiuerh', '2019-11-24', '2019-12-03', 'mbuh', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.888990056405!2d108.27970671433451!3d-6.4082989953633245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ec780502970bf%3A0x737602158ed26ee4!2sPoliteknik%20Negeri%20Indramayu!5e0!3m2!1sen!2sid!4v1576112981824!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'event-4.png', 'event-banner-4.jpeg'),
(5, 'Lomba mangan nasi bakar', '<p>u gsfg ehjgfe gerg ergheiughieuhi    </p>', 'sdmbs fjgeaf age gad sjgfejhg', '2019-12-12', '2019-12-26', 'skjgerug esurg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.888990056405!2d108.27970671433451!3d-6.4082989953633245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ec780502970bf%3A0x737602158ed26ee4!2sPoliteknik%20Negeri%20Indramayu!5e0!3m2!1sen!2sid!4v1576112981824!5m2!1sen!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', 'event-5.jpeg', 'event-banner-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `footer_copyright` text NOT NULL,
  `footer_address` text NOT NULL,
  `footer_email` text NOT NULL,
  `footer_phone` text NOT NULL,
  `cta_text` text NOT NULL,
  `cta_button_text` varchar(255) NOT NULL,
  `cta_button_url` varchar(255) NOT NULL,
  `cta_background` varchar(255) NOT NULL,
  `top_bar_email` varchar(255) NOT NULL,
  `top_bar_phone` varchar(255) NOT NULL,
  `send_email_from` varchar(255) NOT NULL,
  `receive_email_to` varchar(255) NOT NULL,
  `banner_about` varchar(255) NOT NULL,
  `banner_event` varchar(255) NOT NULL,
  `front_end_color` varchar(20) NOT NULL,
  `sidebar_total_recent_post` varchar(5) NOT NULL,
  `sidebar_total_upcoming_event` varchar(5) NOT NULL,
  `sidebar_total_past_event` varchar(5) NOT NULL,
  `sidebar_event_heading_upcoming` varchar(255) NOT NULL,
  `sidebar_event_heading_past` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `logo`, `favicon`, `footer_copyright`, `footer_address`, `footer_email`, `footer_phone`, `cta_text`, `cta_button_text`, `cta_button_url`, `cta_background`, `top_bar_email`, `top_bar_phone`, `send_email_from`, `receive_email_to`, `banner_about`, `banner_event`, `front_end_color`, `sidebar_total_recent_post`, `sidebar_total_upcoming_event`, `sidebar_total_past_event`, `sidebar_event_heading_upcoming`, `sidebar_event_heading_past`) VALUES
(1, 'logo.png', 'favicon.png', 'Copyright © 2019, SILOTIF. All Rights Reserved.', 'Jl. Lohbener Lama No. 8, Lohbener - Indramayu\n45252', 'himatif@polindra.ac.id', 'Infokom: 081286253315\r\nRistek: 083896753716', 'Pengen dapet juara?', 'Segera Cari Lomba', '/silotif/event', 'cta_background.jpeg', 'himatif@polindra.ac.id', '081286253315', 'himatif@polindra.ac.id', 'himatif@polindra.ac.id', 'banner_about.jpg', 'banner_event.png', 'FF8B12', '3', '5', '5', 'Upcoming Events', 'Past Events');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `button1_text` varchar(255) NOT NULL,
  `button1_url` varchar(255) NOT NULL,
  `button2_text` varchar(255) NOT NULL,
  `button2_url` varchar(255) NOT NULL,
  `position` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `photo`, `heading`, `content`, `button1_text`, `button1_url`, `button2_text`, `button2_url`, `position`) VALUES
(3, 'slider-3.jpg', 'We are updating information everysecond', '', '', '', '', '', 'Left');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(30) NOT NULL,
  `social_url` varchar(255) NOT NULL,
  `social_icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_name`, `social_url`, `social_icon`) VALUES
(1, 'Facebook', 'http://www.facebook.com/', 'fa fa-facebook'),
(2, 'Twitter', 'http://www.twitter.com', 'fa fa-twitter'),
(6, 'YouTube', 'http://www.youtube.com', 'fa fa-youtube'),
(7, 'Instagram', '', 'fa fa-instagram'),
(12, 'WhatsApp', '', 'fa fa-whatsapp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `photo`, `token`, `role`, `status`) VALUES
(1, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'user-.jpg', '', 'Admin', 'Active'),
(2, 'user@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', 'User', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
