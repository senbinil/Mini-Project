-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 09:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `admin_id` int(4) NOT NULL DEFAULT 1010,
  `username` varchar(22) NOT NULL,
  `password` varchar(22) NOT NULL,
  `email_id` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`admin_id`, `username`, `password`, `email_id`) VALUES
(1010, 'senbinil', 'test123', 'sen@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bulletin`
--

CREATE TABLE `bulletin` (
  `msg_id` int(6) NOT NULL,
  `msg_cat` varchar(22) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulletin`
--

INSERT INTO `bulletin` (`msg_id`, `msg_cat`, `msg`) VALUES
(402312, 'result', 'initalized content'),
(402465, 'result', 'k;kl;o;kkl;'),
(402466, 'result', 'gnjhjhjkhkhj'),
(402468, 'result', 'fgjhjhjhgj'),
(402471, 'result', 'hghjghjghjf'),
(402472, 'result', 'ghjhfjhfjhj'),
(402474, 'result', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi illum aspernatur asperiores commod'),
(402476, 'result', 'sdhfhgdh'),
(402478, 'result', 'hghghdghgdhd'),
(402479, 'result', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum beatae eaque temporibus excepturi est aliquam architecto, ipsum commodi, sapiente eius inventore laudantium possimus ullam voluptatum ea cum quidem labore iure.\r\n'),
(402480, 'result', 'hftuduucf'),
(402481, 'result', 'fhgfhgfhdghdghhdhgdhhgd'),
(402482, 'result', 'S4 Bsc Computer Science result now available'),
(402483, 'result', 'mkklkljljjljljlhj');

-- --------------------------------------------------------

--
-- Table structure for table `feelog`
--

CREATE TABLE `feelog` (
  `payment_id` int(5) NOT NULL,
  `admin_no` int(4) NOT NULL,
  `semester` int(1) NOT NULL,
  `amount` int(5) NOT NULL,
  `payment_mode` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feelog`
--

INSERT INTO `feelog` (`payment_id`, `admin_no`, `semester`, `amount`, `payment_mode`) VALUES
(13202, 1012, 2, 15000, 'cash'),
(13209, 1010, 1, 15750, 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `sallog`
--

CREATE TABLE `sallog` (
  `pay_id` int(5) NOT NULL,
  `emp_id` int(5) NOT NULL,
  `name` varchar(33) NOT NULL,
  `acc_no` int(33) DEFAULT NULL,
  `ifsc` varchar(22) DEFAULT NULL,
  `sal` int(5) NOT NULL,
  `month` varchar(23) NOT NULL,
  `yrs` int(4) NOT NULL,
  `pay_time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sallog`
--

INSERT INTO `sallog` (`pay_id`, `emp_id`, `name`, `acc_no`, `ifsc`, `sal`, `month`, `yrs`, `pay_time`) VALUES
(2, 0, 'Binil', 56566345, 'gdfgfdf', 34434, 'January', 2020, '2020-02-25'),
(3, 30201, 'Binil', 434342343, 'gfgdfgd', 34434, 'January', 2020, '2020-02-26'),
(5, 30222, 'mnmnm', 2147483647, 'SBIIN0056B', 10000, 'January', 2020, '2020-02-28'),
(6, 30201, 'Binil', 0, '0', 34434, 'February', 2020, '2020-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id` int(22) NOT NULL,
  `name` varchar(22) NOT NULL,
  `phone` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`id`, `name`, `phone`) VALUES
(123, 'binil', 1223322);

-- --------------------------------------------------------

--
-- Table structure for table `staffenroll`
--

CREATE TABLE `staffenroll` (
  `emp_id` int(5) NOT NULL,
  `app_no` int(4) NOT NULL,
  `frm_no` int(2) DEFAULT NULL,
  `apply_date` varchar(40) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `nationality` varchar(40) NOT NULL,
  `cat` varchar(40) NOT NULL,
  `martial` varchar(40) NOT NULL,
  `exp` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `blod` varchar(5) NOT NULL,
  `caddress` varchar(300) NOT NULL,
  `paddress` varchar(300) DEFAULT NULL,
  `pro` varchar(40) NOT NULL,
  `education` varchar(200) NOT NULL,
  `spec` varchar(200) NOT NULL,
  `emp_type` varchar(50) NOT NULL,
  `desig` varchar(60) NOT NULL,
  `j_date` varchar(40) NOT NULL,
  `shift` varchar(40) DEFAULT NULL,
  `salary` int(7) NOT NULL,
  `acc_no` int(30) NOT NULL,
  `bank_name` varchar(40) NOT NULL,
  `ifsc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffenroll`
--

INSERT INTO `staffenroll` (`emp_id`, `app_no`, `frm_no`, `apply_date`, `emp_name`, `dob`, `gender`, `nationality`, `cat`, `martial`, `exp`, `mobile`, `email`, `blod`, `caddress`, `paddress`, `pro`, `education`, `spec`, `emp_type`, `desig`, `j_date`, `shift`, `salary`, `acc_no`, `bank_name`, `ifsc`) VALUES
(30201, 2020, 8, '30/10/2000', 'Binil', '20/06/1999', 'male', 'indian', 'GEN', 'Unmarried', '1 yrs', 12121212, 'xza@gmail.com', 'A', 'XYZ Central street', 'XYZ Central Street', 'Teacher', 'B.com', 'Accounting', 'FULL', 'Lecture', '20/01/2020', 'fgfggdf', 34434, 434344344, 'SBI', 'SBI00045IN'),
(30202, 1111, 1, 'gfgfgfgfg', 'Binil Sen', '01/05/1995', 'on', 'Indian', 'General', 'Unmarried', '1', 5345453, 'senoffical111@gmail.com', 'A+', 'jjhjhgjghj', 'hgjhgjhjhgjj', 'Teacher', 'MCA', 'jghjhjghjhg', 'init', 'init', '19/02/2020', 'init', 43443, 0, '', '0'),
(30203, 203, 2, '20/06/2020', 'Bobin', '20/04/1999', 'Male', 'Indian', 'General', 'Unmarried', '1', 2147483647, 'senoffical111@gmail.com', 'A+', 'Bobin Villa ,Mannar ,Kerala ', 'Bobin Villa ,Mannar ,Kerala ', 'Teacher', 'BSC CS', 'Computer Science', 'init', 'init', '28/07/2020', 'init', 10000, 2147483647, 'SBI', 'SBIIN0056B'),
(30212, 204, 1, '10/04/2020', 'Arun K', '01/01/2020', 'Male', 'Indian', 'General', 'Unmarried', '2', 2147483647, 'senbinil1999@gmail.com', 'A+', 'Thekkenedathu', 'Thekkenedathu', 'Teacher', 'BSC CS', 'CS', 'Full', 'Lecturer', '30/05/2020', 'init', 10000, 2147483647, 'SBI', 'SBIIN0056B'),
(30215, 205, 1, 'gfgfgfd', 'gfdgd', '01/01/2020', 'Male', 'Indian', '', 'Unmarried', '2', 2147483647, 'senoffical111@gmail.com', 'B-', 'Thekkenedathu', 'Thekkenedathu', 'Teacher', 'MCA', 'fgf', 'Full', 'Lecturer', 'gfgfd', 'init', 10000, 2147483647, 'SBI', '65465565'),
(30222, 208, 1, 'mbnmn', 'Bobin K Thomas', 'mbmb   ', 'Male   ', 'Indian', 'General', 'Unmarried', '1', 2147483647, 'senoffical111@gmail.com   ', 'A   ', 'Thekkenedathu', 'Thekkenedathu   ', 'Teacher', 'BSC CS', 'mnmn', 'Full   ', 'Lecturer   ', '20/06/1999', 'Morning ', 10000, 2147483647, 'SBI   ', 'SBIIN0056B   ');

-- --------------------------------------------------------

--
-- Table structure for table `staff_log`
--

CREATE TABLE `staff_log` (
  `log_id` int(5) NOT NULL,
  `emp_id` int(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_log`
--

INSERT INTO `staff_log` (`log_id`, `emp_id`, `password`, `email`, `time`) VALUES
(40401, 30201, 'sen12345', 'se1d', '2020-02-28 19:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `studentenroll`
--

CREATE TABLE `studentenroll` (
  `admin_no` int(4) NOT NULL,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` text NOT NULL,
  `address` varchar(33) NOT NULL,
  `state` varchar(22) NOT NULL,
  `city` varchar(22) NOT NULL,
  `zip_code` int(6) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `guard_fname` varchar(22) NOT NULL,
  `guard_lname` varchar(22) NOT NULL,
  `relation` text DEFAULT NULL,
  `gphone` int(10) NOT NULL,
  `year_pass` year(4) NOT NULL,
  `exroll_no` int(10) NOT NULL,
  `e_mail` varchar(40) NOT NULL,
  `ug_course` int(2) NOT NULL,
  `prevcourse` varchar(22) NOT NULL,
  `semester` int(1) NOT NULL DEFAULT 0,
  `remark` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentenroll`
--

INSERT INTO `studentenroll` (`admin_no`, `fname`, `lname`, `dob`, `blood_group`, `address`, `state`, `city`, `zip_code`, `gender`, `guard_fname`, `guard_lname`, `relation`, `gphone`, `year_pass`, `exroll_no`, `e_mail`, `ug_course`, `prevcourse`, `semester`, `remark`) VALUES
(1010, 'binil', 'sen', '1999-02-06', 'b', 'dgdhhtgjgj', 'kerala', 'xyz', 123456, 'male', 'ggdg', 'gffdshdh', 'Father', 12345678, 1999, 665767, 'sen@gmail.com', 44, '44', 2, 'Please Pay First Semester Fee Before 20/03/2020 to avoid late payment fee\r\nThank You'),
(1037, 'Binil', 'Sen', '2020-01-02', 'AB+', 'thghgjjfj', 'Kerala', 'Chengannur', 689121, 'male', 'Binil', 'Sen', 'father', 12345678, 2010, 13122, 'senbinil@gmai.com', 44, 'Commerce', 1, 'Please Pay First Semester Fee Before 20/03/2020 to avoid late payment fee\r\nThank You');

-- --------------------------------------------------------

--
-- Table structure for table `student_log`
--

CREATE TABLE `student_log` (
  `log_id` int(4) NOT NULL,
  `student_id` int(4) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(55) NOT NULL,
  `time` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_log`
--

INSERT INTO `student_log` (`log_id`, `student_id`, `email`, `pass`, `time`) VALUES
(5521, 1010, 'sen@gmail.com', '12345', '2020-02-16 09:37:19.795947');

-- --------------------------------------------------------

--
-- Table structure for table `suggest`
--

CREATE TABLE `suggest` (
  `sug_id` int(5) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `content` varchar(500) NOT NULL,
  `timestamp` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggest`
--

INSERT INTO `suggest` (`sug_id`, `email_id`, `content`, `timestamp`) VALUES
(20209, 'ssddgfg@gmaii.com', 'kmjgkkjgkjgkjgk', '2020-02-08 15:27:31.902920'),
(20212, 'ssddgfg@gmaii.com', '6541462', '2020-02-08 15:28:30.952787'),
(20214, 'ssddgfg@gmaii.com', 'sfdgfshgdgdhghdg', '2020-02-15 10:14:23.318782'),
(20216, '', '', '2020-02-20 19:03:47.571199'),
(20217, 'ssddgfg@gmaii.com', 'hhghgghgd', '2020-02-20 19:06:50.513279');

-- --------------------------------------------------------

--
-- Table structure for table `ugcourse`
--

CREATE TABLE `ugcourse` (
  `course_id` int(22) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `seat_no` int(2) NOT NULL,
  `sem_fee` int(5) NOT NULL,
  `no_sem` int(1) NOT NULL DEFAULT 6
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ugcourse`
--

INSERT INTO `ugcourse` (`course_id`, `course_name`, `seat_no`, `sem_fee`, `no_sem`) VALUES
(30, 'Bsc Computer Science', 15, 15750, 6),
(44, 'Bachelor of Computer Application', 15, 16750, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bulletin`
--
ALTER TABLE `bulletin`
  ADD PRIMARY KEY (`msg_id`),
  ADD UNIQUE KEY `msg` (`msg`);

--
-- Indexes for table `feelog`
--
ALTER TABLE `feelog`
  ADD PRIMARY KEY (`payment_id`,`admin_no`);

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indexes for table `sallog`
--
ALTER TABLE `sallog`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `staffenroll`
--
ALTER TABLE `staffenroll`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `app_no` (`app_no`),
  ADD UNIQUE KEY `emp_name` (`emp_name`);

--
-- Indexes for table `staff_log`
--
ALTER TABLE `staff_log`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `studentenroll`
--
ALTER TABLE `studentenroll`
  ADD PRIMARY KEY (`admin_no`),
  ADD UNIQUE KEY `exroll_no` (`exroll_no`);

--
-- Indexes for table `student_log`
--
ALTER TABLE `student_log`
  ADD PRIMARY KEY (`log_id`),
  ADD UNIQUE KEY `pass` (`pass`),
  ADD UNIQUE KEY `admno` (`student_id`);

--
-- Indexes for table `suggest`
--
ALTER TABLE `suggest`
  ADD PRIMARY KEY (`sug_id`),
  ADD UNIQUE KEY `content` (`content`);
ALTER TABLE `suggest` ADD FULLTEXT KEY `email_id` (`email_id`);

--
-- Indexes for table `ugcourse`
--
ALTER TABLE `ugcourse`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `sem_fee` (`sem_fee`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulletin`
--
ALTER TABLE `bulletin`
  MODIFY `msg_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402485;

--
-- AUTO_INCREMENT for table `feelog`
--
ALTER TABLE `feelog`
  MODIFY `payment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13214;

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sallog`
--
ALTER TABLE `sallog`
  MODIFY `pay_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staffenroll`
--
ALTER TABLE `staffenroll`
  MODIFY `emp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30223;

--
-- AUTO_INCREMENT for table `staff_log`
--
ALTER TABLE `staff_log`
  MODIFY `log_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40403;

--
-- AUTO_INCREMENT for table `studentenroll`
--
ALTER TABLE `studentenroll`
  MODIFY `admin_no` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1038;

--
-- AUTO_INCREMENT for table `student_log`
--
ALTER TABLE `student_log`
  MODIFY `log_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5533;

--
-- AUTO_INCREMENT for table `suggest`
--
ALTER TABLE `suggest`
  MODIFY `sug_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20220;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
