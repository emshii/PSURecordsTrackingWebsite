-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 04:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `track`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL COMMENT 'Link to record kunyare',
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `email`, `pass`, `office`, `datetime`) VALUES
(34, 'admin', 'admin@gmail.com', '$2y$10$N.0Ut61mNc5RmJmSyjT09ujhZHxWpo6Es6uJo5CiGVz9Gkgrt68by', 'Admin', '2021-12-04 16:09:46'),
(41, 'StaffCS', 'cs@gmail.com', '$2y$10$EZn4ec2KmsbjjcAB6vr9guIQzkWWoIK/5O4PRHSckgXXcCv.bZtpS', 'CS', '2021-12-07 01:57:34'),
(42, 'StaffVPRE', 'vpre@gmail.com', '$2y$10$zwctL8ReYwJAgLYOgiz/aOj5OihgOZWa.DBh1PMDhg.WX3Z./fCTC', 'VPRE', '2021-12-07 01:58:41'),
(44, 'StaffBudget', 'budget@gmail.com', '$2y$10$gpZRwDsHHIU99N1hDCLe1.Z78Xv6VMp5rKaFkvqTtcN5cSzNmXtY6', 'Budget', '2021-12-07 01:59:51'),
(45, 'StaffOSA', 'osa@gmail.com', '$2y$10$ragCCUL1bpjwasujkjYSieyiAqsUKkL38bOU4f/BC.FZJLHhRQdkO', 'Office of the Student Affairs', '2021-12-07 02:00:33'),
(46, 'StaffAccounting', 'accounting@gmail.com', '$2y$10$/.ehHLYS47IaXHB3T2suAuzWZx/ImZIcFcmNCriK1e9yxnx7Hy7g.', 'Accounting', '2021-12-07 02:03:00'),
(50, 'vpaa', 'vpaa@gmail.com', '$2y$10$swnZFhmEpbLAHbvAQS4tN.hdidAkKVK3dnzUJHp1fc7621gQA4TzC', 'VPAA', '2021-12-07 22:00:10'),
(51, 'cah', 'cah@gmail.com', '$2y$10$Z9JayQN6huYk7W5jTqR8GOr6BzxVl3qnm/npwbpWt8CP0irUmt4M6', 'CAH', '2021-12-07 22:06:20'),
(52, 'vfpa', 'vfpa@gmail.com', '$2y$10$ZHprJbGZd6FfF1IHPcrlAuHFCvN5MqRmOVP3M60crIpPOHSP.2.bO', 'VPFA', '2021-12-08 03:30:21'),
(54, 'StaffCeat', 'ceat@gmail.com', '$2y$10$0/1YMGq/0uPt.jgDKkkdNuoiyv5A5IIvQ/cl.c01JPWgv32bwwoHm', 'CEAT', '2021-12-09 00:47:08'),
(56, 'boardsec', 'boardsec@gmail.com', '$2y$10$L8dE4NoTfnO/Eht1ir3zo.mbYmhYd31WrVQGIHurLMhfRxpJlxnyW', 'University Board Secretary Office', '2021-12-09 02:31:20'),
(57, 'hrmo', 'hrmo@gmail.com', '$2y$10$E5YsFfCbEPwILHtXUUnuge5C279aZWuDtVZ.VLAD1WphD.Dl2P9Oa', 'HRMO', '2021-12-09 02:34:13'),
(58, 'president', 'president@gmail.com', '$2y$10$5re9ljuaL97E5BgFDUv/EuB57zLjacGPsROoc9SqYCX2rduj6YWoC', 'Office of the President', '2021-12-09 02:38:23'),
(59, 'cba', 'cba@gmail.com', '$2y$10$PFCd8WnrjqmVEScKHwL6zuI80ZLDgQLLQ.f/fNqF2NdntJUGbdNW.', 'CBA', '2021-12-09 02:48:20'),
(60, 'asd', 'asd@gmail.com', '$2y$10$qBQ9LEzeWFegsN2DVFgjXOG8ViSCc2kYDARAa9OOobuTekn3ba4C2', 'Cashier', '2021-12-09 11:04:15'),
(61, 'records', 'records@gmail.com', '$2y$10$yXerQbiHnQn7BXeQD4cojOJ/Us218Z0hVm5o8yjjR7sHiBCidJDkq', 'Records', '2022-01-28 20:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `practice_test`
--

CREATE TABLE `practice_test` (
  `id` int(11) NOT NULL,
  `track_id` int(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `practice_test`
--

INSERT INTO `practice_test` (`id`, `track_id`, `destination`) VALUES
(1, 1001, 'CBA'),
(4, 1002, 'cs');

-- --------------------------------------------------------

--
-- Table structure for table `practice_test2`
--

CREATE TABLE `practice_test2` (
  `id` int(11) NOT NULL,
  `track_id` int(255) NOT NULL,
  `control` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `practice_test2`
--

INSERT INTO `practice_test2` (`id`, `track_id`, `control`) VALUES
(1, 1001, 'VPAA'),
(2, 1002, 'BUDGET'),
(3, 1001, 'CEAT'),
(4, 1001, 'CHMT');

-- --------------------------------------------------------

--
-- Table structure for table `track_communication`
--

CREATE TABLE `track_communication` (
  `track_id` int(11) NOT NULL,
  `user_trackingid` int(11) NOT NULL,
  `track_remarks` varchar(255) NOT NULL,
  `track_actions` varchar(20) NOT NULL,
  `track_offices` varchar(255) NOT NULL,
  `track_dates` datetime NOT NULL DEFAULT current_timestamp(),
  `track_careof` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `track_communication`
--

INSERT INTO `track_communication` (`track_id`, `user_trackingid`, `track_remarks`, `track_actions`, `track_offices`, `track_dates`, `track_careof`) VALUES
(46, 1001, 'Hand Carried', 'Forwarded', 'CEAT', '2021-12-09 01:49:14', 'Humprey'),
(47, 1001, 'Done', 'Received', 'CEAT', '2021-12-09 01:49:48', 'Angel'),
(48, 1001, '', 'Forwarded', 'CS', '2021-12-09 01:50:19', 'Paolo'),
(49, 1001, 'Done and Recieved', 'Received', 'CS', '2021-12-09 01:50:56', 'Angelica'),
(50, 1002, '', 'Forwarded', 'Cashier', '2021-12-09 01:52:33', 'Jon'),
(51, 1002, 'Done', 'Received', 'Cashier', '2021-12-09 01:53:20', 'Max'),
(53, 1003, 'Hand carried', 'Forwarded', 'VPRE', '2021-12-09 01:59:11', 'joy'),
(54, 1003, 'Done', 'Received', 'VPRE', '2021-12-09 02:00:25', 'Max'),
(71, 1003, 'hand carried', 'Forwarded', 'Budget', '2021-12-09 03:17:54', 'Angel'),
(72, 1003, 'done', 'Received', 'Budget', '2021-12-09 03:19:07', 'Humprey'),
(73, 1003, '', 'Forwarded', 'VPAA', '2021-12-09 03:20:10', 'ANGEL'),
(74, 1003, 'Last destination', 'Received', 'VPAA', '2021-12-09 03:20:51', 'Joy'),
(79, 1004, '', 'Forwarded', 'CS', '2022-01-13 20:45:34', 'Domeng'),
(81, 1004, '', 'Received', 'CS', '2022-01-14 01:15:33', 'Angel'),
(93, 1004, '', 'Forwarded', 'VPRE', '2022-01-22 01:22:52', ''),
(97, 1004, '', 'Received', 'VPRE', '2022-01-23 18:11:11', ''),
(98, 1004, '', 'Forwarded', 'Budget', '2022-01-23 18:11:39', ''),
(99, 1004, 'Done', 'Received', 'Budget', '2022-01-23 18:15:46', ''),
(100, 1004, '', 'Forwarded', 'CAH', '2022-01-23 18:18:08', ''),
(101, 1004, '', 'Received', 'CAH', '2022-01-23 18:24:32', ''),
(105, 1004, '', 'Forwarded', 'Office of the Student Affairs', '2022-01-23 20:55:04', ''),
(106, 1005, '', 'Forwarded', 'VPAA', '2022-01-23 21:38:01', ''),
(108, 1005, '', 'Received', 'VPAA', '2022-01-23 22:10:40', ''),
(110, 1006, '', 'Forwarded', 'CBA', '2022-01-23 22:18:51', ''),
(111, 1004, '', 'Received', 'Office of the Student Affairs', '2022-01-23 22:23:06', ''),
(112, 1004, '', 'Forwarded', 'CBA', '2022-01-23 22:23:30', ''),
(113, 1004, '', 'Received', 'CBA', '2022-01-23 22:24:04', ''),
(114, 1007, '', 'Forwarded', 'CS', '2022-01-23 23:19:40', ''),
(115, 1007, '', 'Received', 'CS', '2022-01-23 23:20:18', ''),
(116, 1007, '', 'Forwarded', 'Budget', '2022-01-23 23:20:42', ''),
(118, 1008, '', 'Forwarded', 'Accounting', '2022-01-24 00:25:50', ''),
(119, 1008, '', 'Received', 'CAH', '2022-01-26 22:19:45', ''),
(120, 1009, '', 'Forwarded', 'CHMT', '2022-01-26 23:06:59', ''),
(121, 1009, '', 'Received', 'CHMT', '2022-01-26 23:08:54', ''),
(123, 1009, '', 'Forwarded', 'University Board Secretary Office', '2022-01-27 22:03:19', ''),
(124, 1008, '', 'Received', 'Accounting', '2022-01-27 22:12:33', ''),
(125, 1008, '', 'Forwarded', 'Budget', '2022-01-27 22:18:35', ''),
(126, 1010, '', 'Forwarded', 'CCRD', '2022-01-27 22:24:31', ''),
(127, 1010, '', 'Forwarded', 'CCRD', '2022-01-27 22:25:09', ''),
(128, 1010, '', 'Forwarded', 'CEAT', '2022-01-27 22:26:09', ''),
(130, 1011, '', 'Forwarded', 'CCRD-North', '2022-01-28 20:11:43', ''),
(131, 1011, '', 'Received', 'CCRD-North', '2022-01-28 20:12:12', ''),
(132, 1012, '', 'Forwarded', 'CBA', '2022-01-28 20:23:00', ''),
(133, 1012, '', 'Received', 'CBA', '2022-01-28 20:23:30', ''),
(134, 1005, '', 'Forwarded', 'VPFA', '2022-01-28 20:29:55', ''),
(135, 1005, '', 'Forwarded', 'VPRE', '2022-01-28 20:30:04', ''),
(136, 1008, '', 'Received', 'Budget', '2022-01-28 20:35:37', ''),
(137, 1007, '', 'Received', 'Budget', '2022-01-30 14:41:48', ''),
(138, 1007, '', 'Received', 'Budget', '2022-01-30 14:41:48', ''),
(139, 1007, '', 'Received', 'Budget', '2022-01-30 14:42:40', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_trackingid` int(11) NOT NULL,
  `user_title` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_byreceive` varchar(255) NOT NULL,
  `user_officestarget` varchar(255) NOT NULL,
  `channel_1` varchar(255) NOT NULL,
  `channel_2` varchar(255) NOT NULL,
  `channel_3` varchar(255) NOT NULL,
  `channel_4` varchar(255) NOT NULL,
  `channel_5` varchar(255) NOT NULL,
  `user_datecreate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_trackingid`, `user_title`, `user_name`, `email`, `user_byreceive`, `user_officestarget`, `channel_1`, `channel_2`, `channel_3`, `channel_4`, `channel_5`, `user_datecreate`) VALUES
(64, 1001, '      Request for late enrollment      ', '      Keneth Bacaserr', '      kenethbacaser@gmail.com      ', '      John Does   ', '', '', '', '', '', '', '2021-12-09 01:27:43'),
(65, 1002, 'Finance for the system', 'Angel Llacuna', 'Angelllacuna@gmail.com', 'John Doe', 'CAH', '', '', '', '', '', '2021-12-09 01:31:52'),
(67, 1003, 'Rendering Extra Services', 'John Michael', 'johnmichaeltejadaji@gmail.com', 'John Doe', 'VPAA', '', '', '', '', '', '2021-12-09 01:47:59'),
(71, 1004, 'Finance for the defense thesis', 'Angel Llacuna', 'johnmichaeltejadaji@gmail.com', 'Jm Tejada', 'CBA', 'CS', 'VPRE', 'Budget', 'CAH', 'Office of the Student Affairs', '2022-01-11 23:31:09'),
(75, 1005, 'Finance for the defense thesiss', 'Angel Llacuna', 'johnmichaeltejadaji@gmail.com', 'Jm Tejada', 'CAH', 'VPAA', 'VPRE', 'VPFA', 'CS', 'Budget', '2022-01-23 21:37:24'),
(76, 1006, 'Finance for the defense thesissss', 'Angel Llacuna', 'johnmichaeltejadaji@gmail.com', 'Jm Tejada', 'CS', 'CBA', 'CAH', 'BAC', 'Budget', 'Accounting - Bookkeeper (401)', '2022-01-23 22:18:33'),
(77, 1007, 'Finance for the defense thesissdsds', 'Angel Llacuna', 'johnmichaeltejadaji@gmail.com', 'Jm Tejada', 'CEAT', 'CS', 'Budget', 'Accounting - Bookkeeper (401)', '', '', '2022-01-23 23:18:05'),
(78, 1008, 'test tra', 'Angel Llacuna', 'johnmichaeltejadaji@gmail.com', 'Paolo Barbosa', 'CBA', 'Accounting', 'CAH', 'Budget', 'VPAA', '', '2022-01-24 00:25:37'),
(79, 1009, 'Finance for the defense thesis', 'Angel Llacuna', 'johnmichaeltejadaji@gmail.com', 'Admin', 'University Board Secretary Office', 'CHMT', '', '', '', '', '2022-01-26 22:37:40'),
(80, 1010, 'adasd', 'Angel Llacuna', 'johnmichaeltejadaji@gmail.com', 'Jm Tejada', 'HRMO', 'CEAT', 'CCRD', '', '', '', '2022-01-27 22:22:51'),
(81, 1011, 'Finance for the defense thesis', 'Angel Llacuna', 'johnmichaeltejadaji@gmail.com', 'Jm Tejada', 'Office of the President', 'CCRD-North', 'CBA', '', '', '', '2022-01-28 20:11:16'),
(82, 1012, 'asdasd', 'Angel Llacuna', 'johnmichaeltejadaji@gmail.com', 'Jm Tejada', 'Records', 'CBA', 'Cashier', '', '', '', '2022-01-28 20:22:45'),
(85, 1013, 'Finance for the defense thesis', 'Angel Llacuna', 'johnmichaeltejadaji@gmail.com', 'Jm Tejada', 'CCRD', '', '', '', '', '', '2022-02-12 19:18:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practice_test`
--
ALTER TABLE `practice_test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `track_id` (`track_id`);

--
-- Indexes for table `practice_test2`
--
ALTER TABLE `practice_test2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `track_id` (`track_id`);

--
-- Indexes for table `track_communication`
--
ALTER TABLE `track_communication`
  ADD PRIMARY KEY (`track_id`),
  ADD KEY `user_trackingid` (`user_trackingid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_trackingid` (`user_trackingid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `practice_test`
--
ALTER TABLE `practice_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `practice_test2`
--
ALTER TABLE `practice_test2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `track_communication`
--
ALTER TABLE `track_communication`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `practice_test2`
--
ALTER TABLE `practice_test2`
  ADD CONSTRAINT `practice_test2_ibfk_1` FOREIGN KEY (`track_id`) REFERENCES `practice_test` (`track_id`);

--
-- Constraints for table `track_communication`
--
ALTER TABLE `track_communication`
  ADD CONSTRAINT `track_communication_ibfk_1` FOREIGN KEY (`user_trackingid`) REFERENCES `users` (`user_trackingid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
