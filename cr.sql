-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2018 at 11:58 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(50) DEFAULT NULL,
  `userPassword` varchar(250) DEFAULT NULL,
  `userPin` varchar(250) NOT NULL,
  `userFullname` varchar(200) DEFAULT NULL,
  `userGroupCode` varchar(20) NOT NULL,
  `userDeptCode` varchar(10) NOT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `userTel` varchar(100) DEFAULT NULL,
  `userPicture` varchar(250) DEFAULT NULL,
  `statusCode` char(1) DEFAULT NULL,
  `loginStatus` int(11) NOT NULL DEFAULT '0',
  `lastLoginTime` datetime NOT NULL,
  `SID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userPassword`, `userPin`, `userFullname`, `userGroupCode`, `userDeptCode`, `userEmail`, `userTel`, `userPicture`, `statusCode`, `loginStatus`, `lastLoginTime`, `SID`) VALUES
(25, 'somsaknaviroj', 'ffa62a0036439005cb67ddedf11dd4b87611f63718d25f03910cfb2414be10a1', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Dr.  Somsak Naviroj', '', '', 'snaviroj@gmail.com', '0816270391', 'user2-128x128.jpg', 'A', 0, '0000-00-00 00:00:00', ''),
(26, 'admin', 'f3597b30d60ecae02b38806634eef7c596ca25ee40521c09aef2a95464f3c594', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Administrator', 'admin', '', 'admin@gmail.com', 'admin', 'user2-128x128.jpg', 'A', 0, '0000-00-00 00:00:00', ''),
(39, 'bigAdmin', '$2y$10$9EqxdlZsvuRzTRl3Zcolju0w1Och1y4wFp5sNBwagNc6j2/bda9ci', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Mr.Prawit  Khamnet', 'admin', '', 'big001@gmail.com', '0944399872', 'user_5a7845704a558.jpg', 'A', 1, '2018-07-23 14:47:41', '90i40j32igtl12b57qnuksk1p0'),
(40, 'usr41', '8cc7fb491f898746d74acd8fb7e7b5952b4d080487c6e43d1e06c45cfa5eab3b', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'User Weaving', 'pdSup', '4', 'usr_warping@gmail.com', '-', '', 'I', 0, '0000-00-00 00:00:00', ''),
(41, 'usr51', 'a27317ce096c083ac672db987938d5950717c18fe54080e6fc06072490c7df29', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'User Coating', 'pdSup', '5', 'dummy@gmail.com', '-', '', 'I', 0, '0000-00-00 00:00:00', ''),
(44, 'usr61', 'a27317ce096c083ac672db987938d5950717c18fe54080e6fc06072490c7df29', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'User Cutting', 'pdSup', '6', 'abc1234@gmail.com', '-', 'user_5a51b0c83f407.jpg', 'I', 0, '0000-00-00 00:00:00', ''),
(45, 'whSup', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Warehouse Supervisor', 'whSup', '8', 'ak2018wms@ak.co.th', '-', 'user_5a51b79f62ef7.png', 'A', 0, '2018-06-13 09:28:33', ''),
(46, 'usr31', '8cc7fb491f898746d74acd8fb7e7b5952b4d080487c6e43d1e06c45cfa5eab3b', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'User Warping', 'pdSup', '3', 'usr_warping@gmail.com', '-', '', 'I', 0, '0000-00-00 00:00:00', ''),
(47, 'it', 'fa064b83841f4ee83327f3fd5e5054d7e1e21bd866de0cd042c1a0d6b4433423', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Kanuengnit', 'it', '', 'it@ak.co.th', '-', '', 'A', 0, '2018-06-15 14:23:57', ''),
(50, 'tech01', '0a9a1c0cc1c875d4aa38b3b2d59c8bd3dab0c91bf1f42f56a40e276bcc3b4780', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Technic user 1', 'tech', '', 'ak2018t@ak.co.th', '-', 'user_5a7853ef0d1d2.jpg', 'A', 0, '2018-06-02 08:43:28', ''),
(51, 'waOff', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Warping Officer', 'pdOff', '3', 'ak1234@ak.co.th', '-', 'user_5aaf311ea70fa.jpg', 'A', 0, '0000-00-00 00:00:00', ''),
(52, 'waSup', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Warping Supervisor', 'pdSup', '3', 'ak2018wa@ak.co.th', '-', 'user_5aaf31659340e.jpg', 'A', 0, '0000-00-00 00:00:00', ''),
(53, 'weOff', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Weaving Officer', 'pdOff', '4', 'ak1234@ak.co.th', '-', 'user_5aaf31a9f10a8.jpg', 'A', 0, '2018-06-12 14:02:47', ''),
(54, 'weSup', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Weaving Supervisor', 'pdSup', '4', 'ak2018we@ak.co.th', '-', 'user_5aaf31d16485c.jpg', 'A', 0, '2018-06-14 11:25:24', ''),
(55, 'coOff', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Coating Officer', 'pdOff', '5', 'ak1234@ak.co.th', '-', 'user_5aaf32188ceca.jpg', 'A', 0, '2018-05-30 14:03:49', ''),
(56, 'coSup', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Coating Supervisor', 'pdSup', '5', 'ak2018co@ak.co.th', '-', 'user_5aaf3237507a6.jpg', 'A', 0, '2018-06-09 14:15:08', ''),
(57, 'whOff', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Warehouse Officer', 'whOff', '8', 'ak18wh@ak.co.th', '-', 'user_5b1936513bee0.jpg', 'A', 0, '2018-05-31 20:39:27', ''),
(58, 'cuOff', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Cutting Officer', 'pdOff', '6', 'ak2018@ak.co.th', '-', 'user_5b0f54e46a9e1.jpg', 'A', 0, '2018-06-17 18:44:04', ''),
(59, 'cuSup', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Cutting Supervisor', 'pdSup', '6', 'ak2018cu@ak.co.th', '-', 'user_5b0f54ef88382.jpg', 'A', 0, '2018-06-17 18:46:54', ''),
(60, 'bigWeOff', '43366a8c6902767fc2157b7def389f5e60f8b7ba1c36e546ce2c3beabca85ae9', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Weaving Officer [Big]', 'pdOff', '4', 'big001@gmail.com', '-', '', 'A', 0, '2018-06-05 06:45:19', ''),
(61, 'bigWeSup', '43366a8c6902767fc2157b7def389f5e60f8b7ba1c36e546ce2c3beabca85ae9', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Weaving Supervisor [Big]', 'pdSup', '4', 'big001@gmail.com', '-', '', 'A', 0, '2018-06-19 14:03:47', ''),
(62, 'bigCoOff', '43366a8c6902767fc2157b7def389f5e60f8b7ba1c36e546ce2c3beabca85ae9', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Coating Officer [Big]', 'pdOff', '5', 'big001@gmail.com', '-', '', 'A', 0, '2018-06-20 13:35:26', ''),
(63, 'bigCoSup', '43366a8c6902767fc2157b7def389f5e60f8b7ba1c36e546ce2c3beabca85ae9', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Coating Supervisor [Big]', 'pdSup', '5', 'big001@gmail.com', '-', '', 'A', 0, '2018-06-04 21:20:07', ''),
(64, 'bigCuOff', '43366a8c6902767fc2157b7def389f5e60f8b7ba1c36e546ce2c3beabca85ae9', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Cutting Officer [Big]', 'pdOff', '6', 'big001@gmail.com', '-', '', 'A', 0, '0000-00-00 00:00:00', ''),
(65, 'bigCuSup', '43366a8c6902767fc2157b7def389f5e60f8b7ba1c36e546ce2c3beabca85ae9', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Cutting Supervisor [Big]', 'pdSup', '6', 'big001@gmail.com', '-', '', 'A', 0, '0000-00-00 00:00:00', ''),
(66, 'bigWhOff', '43366a8c6902767fc2157b7def389f5e60f8b7ba1c36e546ce2c3beabca85ae9', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Warehouse Officer [Big]', 'whOff', '8', 'big001@gmail.com', '-', '', 'A', 0, '2018-07-04 10:57:01', ''),
(67, 'bigWhSup', '43366a8c6902767fc2157b7def389f5e60f8b7ba1c36e546ce2c3beabca85ae9', '6140bb92f0c2cbedd94c0e7f41c61c73609978b13c267774adc1771f1ec3e235', 'Warehouse Supervisor [Big]', 'whSup', '8', 'big001@gmail.com', '-', '', 'A', 0, '2018-07-13 13:19:37', '5kaq2cp2ikoii512h2puuqf1e0'),
(69, 'weSup01', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '', 'Weaving Supervisor', 'pdOff', '4', 'weSup01@askn.co.th', '038573635', 'user_5b18d5b0aea8c.jpg', 'A', 0, '2018-06-12 14:59:41', ''),
(70, 'weSup02', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '', 'Weaving Supervisor', 'pdOff', '4', 'weSup02@askn.co.th', '038573635', '', 'A', 0, '2018-06-12 14:53:37', ''),
(71, 'weSH01', '82c4ba9bdda5e8de592c0fdc9724e1994a7d158d03d10223da1eddcef4641763', '', 'Weaving Section Head', 'pdSup', '4', 'pisit@askn.co.th', '0912410568', 'user_5b18d6becea68.jpg', 'A', 0, '2018-06-16 13:12:22', ''),
(72, 'techsh', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '', 'Technic Section Head', 'pdSup', 'T', '1234@askn.co.th', '-', 'user_5b193567ef4b0.jpg', 'A', 0, '0000-00-00 00:00:00', ''),
(73, 'techsup', '9959f7b313c2d0c4ca2c05ee3dbc36bf50eaa2155d786676689ac252d349e92e', '', 'Technic Supervisor', 'pdOff', 'T', '1234@askn.co.th', '-', 'user_5b1935951262a.jpg', 'A', 0, '0000-00-00 00:00:00', ''),
(74, 'Phumipat', '618eac08e892c58cf0fa36e0bced32884e557ce28a37e3999a2f03134889cfc1', '', 'Phumipat', 'tech', 'T', 'Phumipat@askn.co.th', '086-411-8364', 'user_5b1b920c126d9.jpg', 'A', 0, '2018-06-12 14:44:03', ''),
(75, 'PhumipatCU', '82c4ba9bdda5e8de592c0fdc9724e1994a7d158d03d10223da1eddcef4641763', '', 'PhumipatCU', 'pdSup', '6', 'PhumipatCU@askn.co.th', '038573635', 'user_5b21c74056506.jpg', 'A', 0, '0000-00-00 00:00:00', ''),
(76, 'PhumipatWE', '20183b0baacd6ac1f530ca585abb782a1b9ed9f794f577f954b530986eccf319', '', 'PhumipatWE', 'pdSup', '5', 'PhumipatWE@askn.co.th', '038573635', 'user_5b21c86fc293e.jpg', 'A', 0, '0000-00-00 00:00:00', ''),
(77, 'Nisachol', '07cfad3f1db2604e6f15735ba5f4b882a5ceb9bb5f30a0a225505adf699d716b', '', 'Nisachol', 'whSup', '8', 'Nisachol@askn.co.th', '038573635', 'user_5b21c8cc8396a.jpg', 'A', 0, '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `statusCode` char(1) NOT NULL,
  `createTime` datetime NOT NULL,
  `createById` int(11) NOT NULL,
  `updateTime` datetime NOT NULL,
  `updateById` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `code`, `name`, `statusCode`, `createTime`, `createById`, `updateTime`, `updateById`) VALUES
(1, 'admin', 'admin', 'A', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
