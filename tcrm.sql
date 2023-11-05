-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 12:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '12');

-- --------------------------------------------------------

--
-- Table structure for table `quota_request`
--

CREATE TABLE `quota_request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `services` longtext NOT NULL,
  `query` longtext NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `remark` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quota_request`
--

INSERT INTO `quota_request` (`id`, `name`, `email`, `contact`, `company`, `services`, `query`, `posting_date`, `remark`, `status`) VALUES
(1, 'emu', 'a@gmail.com', '5643', 'it technology', 'assistant, Iot', 'urgent', '2023-11-02 18:00:00', '', ''),
(2, 'emudgdf', 'a@gmail.com', '56433514', 'it technology', 'assistant, Iot, Security', 'urgent', '2023-11-02 18:00:00', 'remark', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `services` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `services`) VALUES
(6, 'consultancy'),
(7, 'Iot'),
(8, 'webscurity'),
(9, 'Security'),
(10, 'seo'),
(12, 'Quamar Russo'),
(17, 'Kenyon Luna'),
(18, 'Dean Sosa'),
(19, 'Reagan Sparks'),
(20, 'graphics de');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `task_type` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `admin_remark` varchar(255) NOT NULL,
  `posting_date` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `admin_remark_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `email`, `subject`, `task_type`, `priority`, `status`, `admin_remark`, `posting_date`, `admin_remark_date`) VALUES
(3, 'a@gmail.com', 'Dolores minus except', 'other', 'other', 'open', 'remark1', '2023-11-04', '2023-11-05 02:21:10'),
(4, 'a@gmail.com', 'Cricket', 'public', 'fast', 'open', 'remark 4', '2023-11-04', '2023-11-05 03:21:22'),
(5, 'a@gmail.com', 'descirbe', 'personal', 'urgent', 'open', 'remark 5 done', '2023-11-04', '2023-11-05 03:21:45'),
(6, 'a@gmail.com', 'fsadfsdaf', 'public', 'fast', 'open', 'remark 6', '2023-11-04', '2023-11-05 03:24:27'),
(7, 'a@gmail.com', 'fsdafsdfsdaf', 'public', 'fast', 'open', '', '2023-11-04', '2023-11-04 17:10:31'),
(8, 'a@gmail.com', 'Qui quos facilis nob', 'other', 'fast', 'open', '', '2023-11-05', '2023-11-05 06:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `mobile`, `gender`, `address`, `status`) VALUES
(14, 'rohimuddin', 'b@gmail.com', '1232', '52465456', 'male', 'khulna', 0),
(15, 'kongka moni', 'ee@gmail.com', '25', '25012013', 'female', 'borisal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usercheek`
--

CREATE TABLE `usercheek` (
  `id` int(11) NOT NULL,
  `logindate` varchar(255) NOT NULL,
  `logintime` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `mac` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usercheek`
--

INSERT INTO `usercheek` (`id`, `logindate`, `logintime`, `user_id`, `username`, `email`, `ip`, `mac`, `city`, `country`) VALUES
(1, '2023/10/31', '10:16:04pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(2, '2023/10/31', '10:16:26pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(3, '2023/10/31', '10:17:37pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(4, '2023/10/31', '10:18:15pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(5, '2023/10/31', '10:19:59pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(6, '2023/10/31', '10:20:32pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(7, '2023/11/01', '03:22:04pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(8, '2023/11/01', '03:22:36pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(9, '2023/11/01', '09:06:39pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(10, '2023/11/01', '09:07:28pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(11, '2023/11/01', '09:13:22pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(12, '2023/11/01', '09:20:41pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(13, '2023/11/01', '09:22:34pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(14, '2023/11/01', '09:25:07pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(15, '2023/11/01', '09:29:11pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(16, '2023/11/01', '09:48:38pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(17, '2023/11/01', '10:44:19pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(18, '2023/11/02', '09:12:58am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(19, '2023/11/02', '09:14:50am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(20, '2023/11/02', '09:15:16am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(21, '2023/11/02', '09:32:32am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(22, '2023/11/02', '09:33:53am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(23, '2023/11/02', '09:40:02am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(24, '2023/11/02', '09:40:36am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(25, '2023/11/02', '09:42:23am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(26, '2023/11/02', '09:47:37am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(27, '2023/11/02', '09:48:20am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(28, '2023/11/02', '09:48:22am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(29, '2023/11/02', '09:48:23am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(30, '2023/11/02', '09:57:25am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(31, '2023/11/02', '09:57:48am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(32, '2023/11/02', '09:59:14am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(33, '2023/11/02', '10:01:02am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(34, '2023/11/02', '10:01:24am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(35, '2023/11/02', '10:05:15am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(36, '2023/11/02', '02:15:38pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(37, '2023/11/02', '02:33:47pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(38, '2023/11/02', '02:35:02pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(39, '2023/11/02', '02:35:44pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(40, '2023/11/02', '02:36:35pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(41, '2023/11/02', '06:32:52pm', 6, 'vafamiqeqy', 'xijoso@mailinator.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(42, '2023/11/02', '06:32:53pm', 6, 'vafamiqeqy', 'xijoso@mailinator.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(43, '2023/11/03', '07:47:27am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(44, '2023/11/03', '08:08:26am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(45, '2023/11/03', '08:08:42am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(46, '2023/11/03', '08:09:07am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(47, '2023/11/03', '08:10:32am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(48, '2023/11/03', '08:11:56am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(49, '2023/11/03', '08:14:01am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(50, '2023/11/03', '08:18:07am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(51, '2023/11/03', '08:18:31am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(52, '2023/11/03', '09:29:58am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(53, '2023/11/03', '12:20:18pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(54, '2023/11/03', '06:15:25pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(55, '2023/11/03', '06:15:26pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(56, '2023/11/03', '10:36:52pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(57, '2023/11/03', '10:56:30pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(58, '2023/11/03', '10:59:47pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(59, '2023/11/03', '11:01:13pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(60, '2023/11/03', '11:02:08pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(61, '2023/11/03', '11:03:34pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(62, '2023/11/03', '11:04:27pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(63, '2023/11/03', '11:06:08pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(64, '2023/11/03', '11:07:10pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(65, '2023/11/03', '11:08:44pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(66, '2023/11/03', '11:09:08pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(67, '2023/11/03', '11:09:19pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(68, '2023/11/03', '11:10:01pm', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(69, '2023/11/04', '08:23:25am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(70, '2023/11/04', '08:38:09am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(71, '2023/11/04', '08:39:02am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(72, '2023/11/04', '08:39:17am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(73, '2023/11/04', '08:43:30am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(74, '2023/11/04', '08:50:17am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(75, '2023/11/04', '08:50:24am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(76, '2023/11/04', '08:51:15am', 1, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(77, '2023/11/04', '04:45:30pm', 15, 'kongka', 'ee@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(78, '2023/11/04', '09:22:33pm', 13, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(79, '2023/11/05', '07:56:44am', 13, 'emu', 'a@gmail.com', '::1', '34-17-EB-7D-BA-30', '', ''),
(80, '2023/11/05', '12:24:53pm', 14, 'rohimuddin', 'b@gmail.com', '::1', '34-17-EB-7D-BA-30', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quota_request`
--
ALTER TABLE `quota_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercheek`
--
ALTER TABLE `usercheek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quota_request`
--
ALTER TABLE `quota_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usercheek`
--
ALTER TABLE `usercheek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
