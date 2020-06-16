/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50724
Source Host           : localhost:3308
Source Database       : ci_template

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2019-05-03 08:34:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `status_id` int(10) unsigned NOT NULL,
  `status` varchar(50) NOT NULL,
  `status_const` varchar(50) NOT NULL,
  `color_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES ('1', 'Active', 'ACTIVE', null);
INSERT INTO `status` VALUES ('2', 'Deactive', 'DEACTIVE', null);
INSERT INTO `status` VALUES ('3', 'Pending', 'PENDING', null);
INSERT INTO `status` VALUES ('4', 'Reject', 'REJECT', null);
INSERT INTO `status` VALUES ('5', 'yes', 'YES', null);
INSERT INTO `status` VALUES ('6', 'no', 'NO', null);
INSERT INTO `status` VALUES ('7', 'info', 'INFI', null);
INSERT INTO `status` VALUES ('8', 'Admin View', 'STATUS_ADMIN_VIEW', null);

-- ----------------------------
-- Table structure for sys_image
-- ----------------------------
DROP TABLE IF EXISTS `sys_image`;
CREATE TABLE `sys_image` (
  `sys_image_id` int(11) NOT NULL AUTO_INCREMENT,
  `sys_image_name` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`sys_image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_image
-- ----------------------------
INSERT INTO `sys_image` VALUES ('1', '1.jpg');
INSERT INTO `sys_image` VALUES ('2', '2.jpg');
INSERT INTO `sys_image` VALUES ('3', '3.jpg');

-- ----------------------------
-- Table structure for sys_module
-- ----------------------------
DROP TABLE IF EXISTS `sys_module`;
CREATE TABLE `sys_module` (
  `module_id` int(11) unsigned NOT NULL,
  `module` varchar(150) NOT NULL,
  `module_const` varchar(150) NOT NULL,
  `application_id` int(11) unsigned NOT NULL DEFAULT '0',
  `parent_module_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_module
-- ----------------------------
INSERT INTO `sys_module` VALUES ('0', '', '', '0', '0');
INSERT INTO `sys_module` VALUES ('50', 'User Manager', 'USR_MANAGER', '1', '0');
INSERT INTO `sys_module` VALUES ('51', 'User List Viwe', 'SYS_USER_LIST_VIWE', '1', '50');
INSERT INTO `sys_module` VALUES ('52', 'Add New User', 'SYS_USER_ADD_NEW_PAGE', '1', '50');
INSERT INTO `sys_module` VALUES ('53', 'Edit User', 'SYS_USER_EDIT', '1', '50');
INSERT INTO `sys_module` VALUES ('54', 'User Group', 'SYS_USER_GROUP', '1', '50');
INSERT INTO `sys_module` VALUES ('55', 'User Group Set Permission', 'SYS_USER_GROUP_SET_PERMISSION', '1', '50');
INSERT INTO `sys_module` VALUES ('56', 'User Group Set Permission Save', 'SYS_USER_GROUP_SET_PERMISSION_SAVE', '1', '50');
INSERT INTO `sys_module` VALUES ('57', 'Add New User Group', 'SYS_USER_GROUP_ADD', '1', '50');
INSERT INTO `sys_module` VALUES ('100', 'Edit Loan Details', 'SYS_LOANS', '1', '0');
INSERT INTO `sys_module` VALUES ('101', 'Edit Loans', 'SYS_EDIT_LOANS', '1', '100');

-- ----------------------------
-- Table structure for sys_user
-- ----------------------------
DROP TABLE IF EXISTS `sys_user`;
CREATE TABLE `sys_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_group_id` int(11) unsigned NOT NULL DEFAULT '0',
  `email` varchar(150) DEFAULT NULL,
  `status_id` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_user
-- ----------------------------
INSERT INTO `sys_user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'buddhimal@gmail.com', '1', 'Buddhimal');
INSERT INTO `sys_user` VALUES ('2', 'Buddhimal', '21232f297a57a5a743894a0e4a801fc3', '1', 'buddhimal@afisol.com', '1', 'Buddhimal Gunasekara');

-- ----------------------------
-- Table structure for sys_user_group
-- ----------------------------
DROP TABLE IF EXISTS `sys_user_group`;
CREATE TABLE `sys_user_group` (
  `user_group_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_group` varchar(150) NOT NULL,
  `sys_user_group_id` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `company_id` int(4) unsigned NOT NULL DEFAULT '0',
  `const` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_user_group
-- ----------------------------
INSERT INTO `sys_user_group` VALUES ('1', 'ROOT', '1', '1', null);
INSERT INTO `sys_user_group` VALUES ('2', 'OFFICER', '2', '1', null);
INSERT INTO `sys_user_group` VALUES ('3', 'abc', '3', '0', null);

-- ----------------------------
-- Table structure for sys_user_group_module
-- ----------------------------
DROP TABLE IF EXISTS `sys_user_group_module`;
CREATE TABLE `sys_user_group_module` (
  `module_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_group_id` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`module_id`,`user_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_user_group_module
-- ----------------------------
INSERT INTO `sys_user_group_module` VALUES ('6', '1');
INSERT INTO `sys_user_group_module` VALUES ('6', '2');
INSERT INTO `sys_user_group_module` VALUES ('6', '3');
INSERT INTO `sys_user_group_module` VALUES ('51', '1');
INSERT INTO `sys_user_group_module` VALUES ('52', '1');
INSERT INTO `sys_user_group_module` VALUES ('53', '1');
INSERT INTO `sys_user_group_module` VALUES ('54', '1');
INSERT INTO `sys_user_group_module` VALUES ('55', '1');
INSERT INTO `sys_user_group_module` VALUES ('56', '1');
INSERT INTO `sys_user_group_module` VALUES ('57', '1');
INSERT INTO `sys_user_group_module` VALUES ('101', '1');

-- ----------------------------
-- Table structure for sys_user_login_history
-- ----------------------------
DROP TABLE IF EXISTS `sys_user_login_history`;
CREATE TABLE `sys_user_login_history` (
  `user_id` int(11) unsigned DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  `timestamp` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sys_user_login_history
-- ----------------------------
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '12/20/2018 3:12:37 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '12/20/2018 3:13:07 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '12/20/2018 3:18:42 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '12/20/2018 3:18:46 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '12/20/2018 3:19:11 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '12/29/2018 8:21:16 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '12/29/2018 8:34:53 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '12/29/2018 8:46:59 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '12/29/2018 9:32:18 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '12/29/2018 10:20:12 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '12/29/2018 10:43:27 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '01/01/2019 2:46:37 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '01/01/2019 2:47:13 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '01/16/2019 12:07:49 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '01/16/2019 12:15:49 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '01/16/2019 12:45:20 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 2:01:33 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 2:04:44 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 2:07:57 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 2:08:11 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 2:16:14 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 2:49:41 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 9:58:14 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 9:58:14 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 9:58:14 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 9:58:43 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 9:58:43 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 9:58:43 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 9:59:59 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/14/2019 11:15:42 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '192.168.8.100', '04/14/2019 11:18:22 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/15/2019 9:12:36 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/15/2019 9:12:36 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/15/2019 9:12:36 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/15/2019 9:12:48 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/15/2019 9:12:48 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/15/2019 9:12:48 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/15/2019 9:12:56 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/15/2019 9:13:13 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/15/2019 9:15:11 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/16/2019 8:49:31 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/16/2019 8:51:19 AM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/16/2019 12:33:02 PM');
INSERT INTO `sys_user_login_history` VALUES ('1', '::1', '04/16/2019 2:21:55 PM');
INSERT INTO `sys_user_login_history` VALUES ('2', '::1', '04/16/2019 2:27:35 PM');
INSERT INTO `sys_user_login_history` VALUES ('2', '::1', '04/16/2019 2:29:38 PM');
INSERT INTO `sys_user_login_history` VALUES ('2', '::1', '04/29/2019 9:58:02 AM');
INSERT INTO `sys_user_login_history` VALUES ('2', '::1', '04/29/2019 2:25:33 PM');
INSERT INTO `sys_user_login_history` VALUES ('2', '::1', '04/30/2019 11:24:20 AM');
INSERT INTO `sys_user_login_history` VALUES ('2', '::1', '05/02/2019 12:28:20 PM');
INSERT INTO `sys_user_login_history` VALUES ('2', '::1', '05/02/2019 4:39:48 PM');

-- ----------------------------
-- View structure for vw_user_count_group
-- ----------------------------
DROP VIEW IF EXISTS `vw_user_count_group`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_user_count_group` AS select `sys_user_group`.`user_group_id` AS `user_group_id`,`sys_user_group`.`user_group` AS `user_group`,count(`sys_user`.`user_id`) AS `user_count` from (`sys_user_group` left join `sys_user` on((`sys_user`.`user_group_id` = `sys_user_group`.`user_group_id`))) group by `sys_user_group`.`user_group_id` order by `sys_user_group`.`user_group` ;

-- ----------------------------
-- View structure for vw_user_group_module
-- ----------------------------
DROP VIEW IF EXISTS `vw_user_group_module`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_user_group_module` AS select `sys_module`.`module_id` AS `module_id`,`sys_module`.`module` AS `module`,`sys_user_group`.`user_group_id` AS `user_group_id`,`sys_user_group`.`user_group` AS `user_group`,`sys_module`.`parent_module_id` AS `parent_module_id` from ((`sys_user_group` join `sys_user_group_module` on((`sys_user_group_module`.`user_group_id` = `sys_user_group`.`user_group_id`))) join `sys_module` on((`sys_module`.`module_id` = `sys_user_group_module`.`module_id`))) ;

-- ----------------------------
-- Procedure structure for SelectStatus
-- ----------------------------
DROP PROCEDURE IF EXISTS `SelectStatus`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `SelectStatus`(id INT)
BEGIN
    SELECT * FROM `status`
  WHERE status_id = id;
END
;;
DELIMITER ;
