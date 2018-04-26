-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 08:38 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tim`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `admin` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `login`
-- (See below for the actual view)
--
CREATE TABLE `login` (
`userID` int(10)
,`username` varchar(100)
,`password` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `next_of_kin`
-- (See below for the actual view)
--
CREATE TABLE `next_of_kin` (
`username` varchar(100)
,`firstname` varchar(100)
,`lastname` varchar(100)
,`NokFname` varchar(100)
,`NokSurname` varchar(100)
,`NokRelationship` varchar(100)
,`NokContact` varchar(10)
,`NokAddress1` varchar(100)
,`NokAddress2` varchar(100)
,`NokPostalcode` varchar(100)
,`NokCity` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `NokFname` varchar(100) NOT NULL,
  `NokSurname` varchar(100) NOT NULL,
  `NokRelationship` varchar(100) NOT NULL,
  `NokContact` varchar(10) NOT NULL,
  `NokAddress1` varchar(100) NOT NULL,
  `NokAddress2` varchar(100) NOT NULL,
  `NokPostalcode` varchar(100) NOT NULL,
  `NokCity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `firstname`, `lastname`, `middlename`, `phonenumber`, `email`, `NokFname`, `NokSurname`, `NokRelationship`, `NokContact`, `NokAddress1`, `NokAddress2`, `NokPostalcode`, `NokCity`) VALUES
(1, 'test101', 'test101', 'test1', 'test1', 'test1', '213456', 'test1@test.com', '', '', '', '', '', '', '', ''),
(2, 'test102', '654409aab4d309a66d4bc7c494b199a5', 'test2', 'test2', 'test2', '56763663', 'test2@test.com', '', '', '', '', '', '', '', ''),
(3, 'test103', '7c62e13b80dd6f3a9462736409a7fe30', 'test103', 'test103', 'test103', '563553663', 'test103@test.com', '', '', '', '', '', '', '', ''),
(4, 'test104', 'ef82500aafcd9618bbbc5a1ac3f99f67', 'test104', 'test104', 'test104', '134552552', 'test104@test.com', '', '', '', '', '', '', '', ''),
(5, 'test105', '49ec7e883faeb0aa08bb9b92bad0678e', 'test105', 'test105', 'test105', '43535353', 'test105@test.com', '', '', '', '', '', '', '', ''),
(6, 'test106', '6da73fa49967c2d83c91f5dfce5eafa4', 'test106', 'test106', 'test106', '7464746', 'test106@test.com', '', '', '', '', '', '', '', ''),
(7, 'test107', '8e396db096cc66c85efe2e56d720e4d7', 'test107', 'test107', 'test107', '563536353', 'test107@test.com', '', '', '', '', '', '', '', ''),
(8, 'test108', '58a964ed8559dbf46694578036ca3898', 'test108', 'test108', 'test108', '54635625', 'test108@test.com', '', '', '', '', '', '', '', ''),
(9, 'test109', 'e94cc5e4acd9f3e4e8b59b62ebd603cc', 'test109', 'test109', 'test109', '5262525', 'test109@test.com', '', '', '', '', '', '', '', ''),
(10, 'test110', 'c80b4f115a9d68c50bf013a1cb5ac7d2', 'test110', 'test110', 'test110', '677767', 'test110@test.com', '', '', '', '', '', '', '', ''),
(11, 'ray', '81dc9bdb52d04dc20036dbd8313ed055', 'ray', 'chege', 'shiko', '5353', 'ray@gmail.com', '', '', '', '', '', '', '', ''),
(12, 'test111', '4061863caf7f28c0b0346719e764d561', 'test111', 'test111', 'test111', '633636', 'test111@test.com', '', '', '', '', '', '', '', ''),
(13, 'trial101', '888e623ae57f82ed2e5238c475f00293', 'trial101', 'trial101', 'you', '2435236364', 'trial101@gmail.com', '', '', '', '', '', '', '', ''),
(14, 'test112', '7b95845013abd87a1ad6018568247679', 'test112', 'test112', 'test112', '35335352', 'test112@test.com', '', '', '', '', '', '', '', ''),
(15, 'test114', '90755a1ef7bfe1aed4d1483c3b23b0ce', 'test114', 'test114', 'test114', '5635363', 'test114@test.com', '', '', '', '', '', '', '', ''),
(16, 'test201', '1f4106a26eaf5d0d9d27de9940db131b', 'test201', 'test201', 'test201', '5353535353', 'test201@test.com', '', '', '', '', '', '', '', ''),
(17, 'test203', '9d4b0c90a88c9fe8fc150cc43be27acc', 'test203', 'test203', 'test203', '5463563536', 'test203@test.com', '', '', '', '', '', '', '', ''),
(18, 'test204', '8d6f9b7beaefdc716b4118a08252600a', 'test204', 'test204', 'test204', '5336636373', 'test204@test.com', 'test204', 'test204', 'kids', '1019292828', 'test', 'test', 'test', 'test city');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `AFTER_users_INSERT` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO users_audit
    SET action = 'added',
        userID = NEW.userID,
        firstname = NEW.firstname,
        lastname = NEW.lastname,
        middlename = NEW.middlename,
        phonenumber = NEW.phonenumber,
        email = NEW.email,
        username = NEW.username,
        password = NEW.password,
        modified = NOW()
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users_audit`
--

CREATE TABLE `users_audit` (
  `userID` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `middlename` varchar(100) DEFAULT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `modified` datetime DEFAULT NULL,
  `action` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_audit`
--

INSERT INTO `users_audit` (`userID`, `username`, `password`, `firstname`, `lastname`, `middlename`, `phonenumber`, `email`, `modified`, `action`) VALUES
(1, 'test101', 'test101', 'test1', 'test1', 'test1', '213456', 'test1@test.com', '2018-03-21 07:50:38', 'added'),
(2, 'test102', '654409aab4d309a66d4bc7c494b199a5', 'test2', 'test2', 'test2', '56763663', 'test2@test.com', '2018-03-21 08:17:53', 'added'),
(3, 'test103', '7c62e13b80dd6f3a9462736409a7fe30', 'test103', 'test103', 'test103', '563553663', 'test103@test.com', '2018-03-23 00:01:01', 'added'),
(4, 'test104', 'ef82500aafcd9618bbbc5a1ac3f99f67', 'test104', 'test104', 'test104', '134552552', 'test104@test.com', '2018-03-23 13:24:34', 'added'),
(5, 'test105', '49ec7e883faeb0aa08bb9b92bad0678e', 'test105', 'test105', 'test105', '43535353', 'test105@test.com', '2018-03-24 09:09:04', 'added'),
(6, 'test106', '6da73fa49967c2d83c91f5dfce5eafa4', 'test106', 'test106', 'test106', '7464746', 'test106@test.com', '2018-03-25 12:19:02', 'added'),
(7, 'test107', '8e396db096cc66c85efe2e56d720e4d7', 'test107', 'test107', 'test107', '563536353', 'test107@test.com', '2018-03-25 15:14:15', 'added'),
(8, 'test108', '58a964ed8559dbf46694578036ca3898', 'test108', 'test108', 'test108', '54635625', 'test108@test.com', '2018-03-25 16:06:27', 'added'),
(9, 'test109', 'e94cc5e4acd9f3e4e8b59b62ebd603cc', 'test109', 'test109', 'test109', '5262525', 'test109@test.com', '2018-03-27 14:27:47', 'added'),
(10, 'test110', 'c80b4f115a9d68c50bf013a1cb5ac7d2', 'test110', 'test110', 'test110', '677767', 'test110@test.com', '2018-03-27 14:40:49', 'added'),
(11, 'ray', '81dc9bdb52d04dc20036dbd8313ed055', 'ray', 'chege', 'shiko', '5353', 'ray@gmail.com', '2018-03-27 14:48:58', 'added'),
(12, 'test111', '4061863caf7f28c0b0346719e764d561', 'test111', 'test111', 'test111', '633636', 'test111@test.com', '2018-03-27 15:02:18', 'added'),
(13, 'trial101', '888e623ae57f82ed2e5238c475f00293', 'trial101', 'trial101', 'you', '2435236364', 'trial101@gmail.com', '2018-03-27 15:42:30', 'added'),
(14, 'test112', '7b95845013abd87a1ad6018568247679', 'test112', 'test112', 'test112', '35335352', 'test112@test.com', '2018-03-27 20:58:51', 'added'),
(15, 'test114', '90755a1ef7bfe1aed4d1483c3b23b0ce', 'test114', 'test114', 'test114', '5635363', 'test114@test.com', '2018-03-29 23:13:07', 'added'),
(16, 'test201', '1f4106a26eaf5d0d9d27de9940db131b', 'test201', 'test201', 'test201', '5353535353', 'test201@test.com', '2018-04-25 16:29:23', 'added'),
(17, 'test203', '9d4b0c90a88c9fe8fc150cc43be27acc', 'test203', 'test203', 'test203', '5463563536', 'test203@test.com', '2018-04-25 16:49:31', 'added'),
(18, 'test204', '8d6f9b7beaefdc716b4118a08252600a', 'test204', 'test204', 'test204', '5336636373', 'test204@test.com', '2018-04-25 18:09:48', 'added');

-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `login`  AS  select `users`.`userID` AS `userID`,`users`.`username` AS `username`,`users`.`password` AS `password` from `users` ;

-- --------------------------------------------------------

--
-- Structure for view `next_of_kin`
--
DROP TABLE IF EXISTS `next_of_kin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `next_of_kin`  AS  select `users`.`username` AS `username`,`users`.`firstname` AS `firstname`,`users`.`lastname` AS `lastname`,`users`.`NokFname` AS `NokFname`,`users`.`NokSurname` AS `NokSurname`,`users`.`NokRelationship` AS `NokRelationship`,`users`.`NokContact` AS `NokContact`,`users`.`NokAddress1` AS `NokAddress1`,`users`.`NokAddress2` AS `NokAddress2`,`users`.`NokPostalcode` AS `NokPostalcode`,`users`.`NokCity` AS `NokCity` from `users` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `users_audit`
--
ALTER TABLE `users_audit`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users_audit`
--
ALTER TABLE `users_audit`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
