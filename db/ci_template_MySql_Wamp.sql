-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 03, 2019 at 03:16 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_template`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `SelectStatus`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectStatus` (`id` INT)  BEGIN
    SELECT * FROM `status`
  WHERE status_id = id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `status_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(50) NOT NULL,
  `status_const` varchar(50) NOT NULL,
  `color_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status`, `status_const`, `color_code`) VALUES
(1, 'Active', 'ACTIVE', NULL),
(2, 'Deactive', 'DEACTIVE', NULL),
(3, 'Pending', 'PENDING', NULL),
(4, 'Reject', 'REJECT', NULL),
(5, 'yes', 'YES', NULL),
(6, 'no', 'NO', NULL),
(7, 'info', 'INFI', NULL),
(8, 'Admin View', 'STATUS_ADMIN_VIEW', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_image`
--

DROP TABLE IF EXISTS `sys_image`;
CREATE TABLE IF NOT EXISTS `sys_image` (
  `sys_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `sys_image_name` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`sys_image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_image`
--

INSERT INTO `sys_image` (`sys_image_id`, `sys_image_name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sys_module`
--

DROP TABLE IF EXISTS `sys_module`;
CREATE TABLE IF NOT EXISTS `sys_module` (
  `module_id` int(11) UNSIGNED NOT NULL,
  `module` varchar(150) NOT NULL,
  `module_const` varchar(150) NOT NULL,
  `application_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `parent_module_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_module`
--

INSERT INTO `sys_module` (`module_id`, `module`, `module_const`, `application_id`, `parent_module_id`) VALUES
(0, '', '', 0, 0),
(50, 'User Manager', 'USR_MANAGER', 1, 0),
(51, 'User List Viwe', 'SYS_USER_LIST_VIWE', 1, 50),
(52, 'Add New User', 'SYS_USER_ADD_NEW_PAGE', 1, 50),
(53, 'Edit User', 'SYS_USER_EDIT', 1, 50),
(54, 'User Group', 'SYS_USER_GROUP', 1, 50),
(55, 'User Group Set Permission', 'SYS_USER_GROUP_SET_PERMISSION', 1, 50),
(56, 'User Group Set Permission Save', 'SYS_USER_GROUP_SET_PERMISSION_SAVE', 1, 50),
(57, 'Add New User Group', 'SYS_USER_GROUP_ADD', 1, 50),
(100, 'Edit Loan Details', 'SYS_LOANS', 1, 0),
(101, 'Edit Loans', 'SYS_EDIT_LOANS', 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `sys_user`
--

DROP TABLE IF EXISTS `sys_user`;
CREATE TABLE IF NOT EXISTS `sys_user` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `email` varchar(150) DEFAULT NULL,
  `status_id` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_user`
--

INSERT INTO `sys_user` (`user_id`, `username`, `password`, `user_group_id`, `email`, `status_id`, `name`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'buddhimal@gmail.com', 1, 'Buddhimal'),
(2, 'Buddhimal', '21232f297a57a5a743894a0e4a801fc3', 1, 'buddhimal@afisol.com', 1, 'Buddhimal Gunasekara');

-- --------------------------------------------------------

--
-- Table structure for table `sys_user_group`
--

DROP TABLE IF EXISTS `sys_user_group`;
CREATE TABLE IF NOT EXISTS `sys_user_group` (
  `user_group_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_group` varchar(150) NOT NULL,
  `sys_user_group_id` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `company_id` int(4) UNSIGNED NOT NULL DEFAULT '0',
  `const` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_user_group`
--

INSERT INTO `sys_user_group` (`user_group_id`, `user_group`, `sys_user_group_id`, `company_id`, `const`) VALUES
(1, 'ROOT', 1, 1, NULL),
(2, 'OFFICER', 2, 1, NULL),
(3, 'abc', 3, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sys_user_group_module`
--

DROP TABLE IF EXISTS `sys_user_group_module`;
CREATE TABLE IF NOT EXISTS `sys_user_group_module` (
  `module_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `user_group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`module_id`,`user_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_user_group_module`
--

INSERT INTO `sys_user_group_module` (`module_id`, `user_group_id`) VALUES
(6, 1),
(6, 2),
(6, 3),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(101, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sys_user_login_history`
--

DROP TABLE IF EXISTS `sys_user_login_history`;
CREATE TABLE IF NOT EXISTS `sys_user_login_history` (
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `timestamp` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_user_login_history`
--

INSERT INTO `sys_user_login_history` (`user_id`, `ip`, `timestamp`) VALUES
(1, '::1', '12/20/2018 3:12:37 PM'),
(1, '::1', '12/20/2018 3:13:07 PM'),
(1, '::1', '12/20/2018 3:18:42 PM'),
(1, '::1', '12/20/2018 3:18:46 PM'),
(1, '::1', '12/20/2018 3:19:11 PM'),
(1, '::1', '12/29/2018 8:21:16 AM'),
(1, '::1', '12/29/2018 8:34:53 AM'),
(1, '::1', '12/29/2018 8:46:59 AM'),
(1, '::1', '12/29/2018 9:32:18 AM'),
(1, '::1', '12/29/2018 10:20:12 AM'),
(1, '::1', '12/29/2018 10:43:27 AM'),
(1, '::1', '01/01/2019 2:46:37 PM'),
(1, '::1', '01/01/2019 2:47:13 PM'),
(1, '::1', '01/16/2019 12:07:49 AM'),
(1, '::1', '01/16/2019 12:15:49 AM'),
(1, '::1', '01/16/2019 12:45:20 AM'),
(1, '::1', '04/14/2019 2:01:33 AM'),
(1, '::1', '04/14/2019 2:04:44 AM'),
(1, '::1', '04/14/2019 2:07:57 AM'),
(1, '::1', '04/14/2019 2:08:11 AM'),
(1, '::1', '04/14/2019 2:16:14 AM'),
(1, '::1', '04/14/2019 2:49:41 AM'),
(1, '::1', '04/14/2019 9:58:14 PM'),
(1, '::1', '04/14/2019 9:58:14 PM'),
(1, '::1', '04/14/2019 9:58:14 PM'),
(1, '::1', '04/14/2019 9:58:43 PM'),
(1, '::1', '04/14/2019 9:58:43 PM'),
(1, '::1', '04/14/2019 9:58:43 PM'),
(1, '::1', '04/14/2019 9:59:59 PM'),
(1, '::1', '04/14/2019 11:15:42 PM'),
(1, '192.168.8.100', '04/14/2019 11:18:22 PM'),
(1, '::1', '04/15/2019 9:12:36 AM'),
(1, '::1', '04/15/2019 9:12:36 AM'),
(1, '::1', '04/15/2019 9:12:36 AM'),
(1, '::1', '04/15/2019 9:12:48 AM'),
(1, '::1', '04/15/2019 9:12:48 AM'),
(1, '::1', '04/15/2019 9:12:48 AM'),
(1, '::1', '04/15/2019 9:12:56 AM'),
(1, '::1', '04/15/2019 9:13:13 AM'),
(1, '::1', '04/15/2019 9:15:11 AM'),
(1, '::1', '04/16/2019 8:49:31 AM'),
(1, '::1', '04/16/2019 8:51:19 AM'),
(1, '::1', '04/16/2019 12:33:02 PM'),
(1, '::1', '04/16/2019 2:21:55 PM'),
(2, '::1', '04/16/2019 2:27:35 PM'),
(2, '::1', '04/16/2019 2:29:38 PM'),
(2, '::1', '04/29/2019 9:58:02 AM'),
(2, '::1', '04/29/2019 2:25:33 PM'),
(2, '::1', '04/30/2019 11:24:20 AM'),
(2, '::1', '05/02/2019 12:28:20 PM'),
(2, '::1', '05/02/2019 4:39:48 PM');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_user_count_group`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_user_count_group`;
CREATE TABLE IF NOT EXISTS `vw_user_count_group` (
`user_group_id` int(11) unsigned
,`user_group` varchar(150)
,`user_count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_user_group_module`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_user_group_module`;
CREATE TABLE IF NOT EXISTS `vw_user_group_module` (
`module_id` int(11) unsigned
,`module` varchar(150)
,`user_group_id` int(11) unsigned
,`user_group` varchar(150)
,`parent_module_id` int(11) unsigned
);

-- --------------------------------------------------------

--
-- Structure for view `vw_user_count_group`
--
DROP TABLE IF EXISTS `vw_user_count_group`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_user_count_group`  AS  select `sys_user_group`.`user_group_id` AS `user_group_id`,`sys_user_group`.`user_group` AS `user_group`,count(`sys_user`.`user_id`) AS `user_count` from (`sys_user_group` left join `sys_user` on((`sys_user`.`user_group_id` = `sys_user_group`.`user_group_id`))) group by `sys_user_group`.`user_group_id` order by `sys_user_group`.`user_group` ;

-- --------------------------------------------------------

--
-- Structure for view `vw_user_group_module`
--
DROP TABLE IF EXISTS `vw_user_group_module`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_user_group_module`  AS  select `sys_module`.`module_id` AS `module_id`,`sys_module`.`module` AS `module`,`sys_user_group`.`user_group_id` AS `user_group_id`,`sys_user_group`.`user_group` AS `user_group`,`sys_module`.`parent_module_id` AS `parent_module_id` from ((`sys_user_group` join `sys_user_group_module` on((`sys_user_group_module`.`user_group_id` = `sys_user_group`.`user_group_id`))) join `sys_module` on((`sys_module`.`module_id` = `sys_user_group_module`.`module_id`))) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
