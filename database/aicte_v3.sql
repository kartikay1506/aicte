-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2019 at 06:09 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aicte_v3`
--

-- --------------------------------------------------------

--
-- Table structure for table `acr`
--

CREATE TABLE `acr` (
  `id` int(11) NOT NULL,
  `institution_code` varchar(40) NOT NULL,
  `year` varchar(20) NOT NULL,
  `activity` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acr`
--

INSERT INTO `acr` (`id`, `institution_code`, `year`, `activity`, `credit`) VALUES
(1, '12345678', '21', 'activity2', '2'),
(2, '12345678', '32', 'activity1', 'credit1');

-- --------------------------------------------------------

--
-- Table structure for table `contribution_society`
--

CREATE TABLE `contribution_society` (
  `id` int(11) NOT NULL,
  `institution_code` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `activity` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contribution_society`
--

INSERT INTO `contribution_society` (`id`, `institution_code`, `year`, `semester`, `activity`, `credit`) VALUES
(1, '12345678', '21', '3', 'consultancy', ''),
(2, '12345678', '21', '3', 'consultancy', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `univ_code` varchar(40) NOT NULL,
  `department_name` varchar(20) NOT NULL,
  `department_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `univ_code`, `department_name`, `department_code`) VALUES
(5, '12345678', 'dasdas', '3112'),
(6, '12345678', 'sdasd', '123412'),
(7, '12345678', '32423', 'dasdas');

-- --------------------------------------------------------

--
-- Table structure for table `department_activities`
--

CREATE TABLE `department_activities` (
  `id` int(11) NOT NULL,
  `institution_code` varchar(30) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `activity` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_activities`
--

INSERT INTO `department_activities` (`id`, `institution_code`, `year`, `semester`, `activity`, `credit`) VALUES
(1, '12345678', '21', '5', 'NBA-work', '3'),
(2, '12345678', '21', '6', 'timetable-incharge', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `faculty_Univ_Code` varchar(40) NOT NULL,
  `faculty_department` varchar(40) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `faculty_level` varchar(40) NOT NULL,
  `faculty_Name` varchar(40) NOT NULL,
  `faculty_Contact` varchar(12) NOT NULL,
  `faculty_address` varchar(50) NOT NULL,
  `faculty_Email` varchar(40) NOT NULL,
  `faculty_Date_Of_Joining` varchar(40) NOT NULL,
  `faculty_profile_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_Univ_Code`, `faculty_department`, `faculty_id`, `faculty_level`, `faculty_Name`, `faculty_Contact`, `faculty_address`, `faculty_Email`, `faculty_Date_Of_Joining`, `faculty_profile_pic`) VALUES
(6, 'NA', 'Deparmtne', '5656', '13A1', 'dasd', '96325366882', 'Dehradun', 'sadasd@dsad.com', '2019-06-25', '5d015a8178a7d2.89573708.jpg'),
(7, '', 'fsdf', 'fsdf', '9A', 'fsdf', 'sdfsdf', '', 'fsdf', '2019-06-25', '');

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `id` int(11) NOT NULL,
  `university_id` varchar(20) NOT NULL,
  `type` varchar(40) NOT NULL,
  `uploaded_for` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `institution_name` varchar(50) NOT NULL,
  `instituion_code` varchar(50) NOT NULL,
  `instituion_state` varchar(20) NOT NULL,
  `instituion_district` varchar(50) NOT NULL,
  `instituion_postal_code` varchar(20) NOT NULL,
  `instituion_address` varchar(50) NOT NULL,
  `instituion_contact_no` varchar(50) NOT NULL,
  `instituion_email` varchar(20) NOT NULL,
  `instituion_type` varchar(20) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`institution_name`, `instituion_code`, `instituion_state`, `instituion_district`, `instituion_postal_code`, `instituion_address`, `instituion_contact_no`, `instituion_email`, `instituion_type`, `logo`) VALUES
('University', '', 'dasd', 'Gzb', '2232123', 'Address', '34342234', 'university@gmail.com', 'NA', ''),
('University', '', 'dasd', 'Gzb', '2232123', 'Address', '34342234', 'university@gmail.com', 'Diploma', 'NA'),
('University', '', '12434', 'Gzb', '2232123', 'Address', '34342234', 'university@gmail.com', 'Techical', '5d01401ed16462.22975958.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `institution_activity`
--

CREATE TABLE `institution_activity` (
  `id` int(11) NOT NULL,
  `institution_code` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `activity` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institution_activity`
--

INSERT INTO `institution_activity` (`id`, `institution_code`, `year`, `semester`, `activity`, `credit`) VALUES
(1, '12345678', '21', '2', 'consultancy', '2'),
(2, '12345678', '32', '4', 'consultancy', '');

-- --------------------------------------------------------

--
-- Table structure for table `min_qualifications`
--

CREATE TABLE `min_qualifications` (
  `id` int(11) NOT NULL,
  `qualification_name` text NOT NULL,
  `meta_qualification` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `min_qualifications`
--

INSERT INTO `min_qualifications` (`id`, `qualification_name`, `meta_qualification`) VALUES
(29, 'B. E. / B. Tech. / B. S. in relevant discipline with First Class or equivalent.', 'B. E. / B. Tech. / B. S. in relevant discipline with First Class or equivalent.'),
(30, 'B. Pharm. with First Class or equivalent', 'B. Pharm. with First Class or equivalent'),
(31, 'A minimum 4-year Bachelor’s Degree in HMCT with First Class or equivalent.', 'A minimum 4-year Bachelor’s Degree in HMCT with First Class or equivalent.'),
(32, 'B.Arch. or a 4-year Degree in an allied field with First Class or equivalent', 'B.Arch. or a 4-year Degree in an allied field with First Class or equivalent'),
(33, 'Bachelor’s degree in appropriate discipline of Fine Arts (Applied Arts, Painting and Sculpture) or equivalent with First Class or equivalent', 'Bachelor’s degree in appropriate discipline of Fine Arts (Applied Arts, Painting and Sculpture) or equivalent with First Class or equivalent'),
(34, 'Bachelor’s degree in design or a minimum 4-year Diploma in any one of the streams of Design, Fine Arts, Applied Arts and Architecture or Bachelor’s degree in Engineering with First Class or equivalent', 'Bachelor’s degree in design or a minimum 4-year Diploma in any one of the streams of Design, Fine Arts, Applied Arts and Architecture or Bachelor’s degree in Engineering with First Class or equivalent'),
(35, 'Master’s degree in appropriate subject with First Class or equivalent at Bachelor’s or Master’s level', 'Master’s degree in appropriate subject with First Class or equivalent at Bachelor’s or Master’s level'),
(36, 'Bachelor’s and Master’s Degrees in relevant disciplines with First Class', 'Bachelor’s and Master’s Degrees in relevant disciplines with First Class in either of the two at the time of selection.'),
(37, 'Master’s degree with First Class or equivalent in a relevant subject and has cleared the National Eligibility Test (NET) or some similar test', 'A Master’s degree with First Class or equivalent in a relevant subject and, must have cleared the National Eligibility Test (NET) conducted by the UGC or the CSIR, or a similar test accredited by the UGC, like SLET / SET. '),
(38, 'Master\'s degree in relevent discipline', 'Candidates from technical disciplines shall be placed in Level 10 at suitable cell as and when the candidates acquire the Master’s degree in relevant technical discipline.'),
(39, 'Cleared National Eligibility Test (NET) or some similar test', 'Candidates of Sciences and Humanities shall be placed in Level 10 at suitable cell as and when the candidates clear the National Eligibility Test (NET) conducted by the UGC or the CSIR, or a similar test accredited by the UGC, like SLET / SET.'),
(40, 'Completed 5 years of service', 'In case candidates do not acquire relevant Master’s degree in the case of technical disciplines and in case of candidates from Sciences and Humanities do not clear National Eligibility Test (NET) conducted by the UGC or the CSIR, or a similar test accredited by the UGC, like SLET / SET, they shall be placed in appropriate cell of level 10 only after completion of 5 years'),
(41, 'Three weeks of industrial training at the level of Lecturer. ', 'Three weeks of industrial training at the level of Lecturer. '),
(42, 'Two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/ Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt. and out of which at least one of the FDPs shall be in advanced Pedagogy', 'Two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/ Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt. and out of which at least one of the FDPs shall be in advanced Pedagogy'),
(43, 'Completed one week faculty development programme and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE. ', 'One week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.'),
(44, 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTELAICTE', 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTELAICTE'),
(45, 'Minimum 5 years of experience and an average 360 degree feedback score between 8 to 10 on the scale of 10 in the cadre of Lecturer.', 'Minimum 5 years of experience and an average 360 degree feedback score between 8 to 10 on the scale of 10 in the cadre of Lecturer.'),
(46, 'Minimum 6 years of experience and an average 360o feedback score between 5 to < 8 on the scale of 10 in the cadre of Lecturer', 'Minimum 6 years of experience and an average 360o feedback score between 5 to < 8 on the scale of 10 in the cadre of Lecturer'),
(47, 'Minimum qualifications for Lecturer (Senior Scale) + Master\'s Degree with first class or equivalent either at Bachelor\'s or Masterl\'s level.', 'Qualification as prescribed for the post of Lecturer (Senior Scale) necessarily with a Master’s Degree in relevant discipline in First Class or equivalent either at Bachelor’s or at Master’s level.'),
(48, 'Three weeks of industrial training at the level of Lecturer (Senior Scale)', 'Three weeks of industrial training at the level of Lecturer (Senior Scale)'),
(49, 'Completed two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/ Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt', 'Two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/ Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT/University/Govt'),
(50, 'Completed one week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.', 'One week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.'),
(51, 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE', 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE'),
(52, 'Minimum 5 years of experience with an average 360 degree feedback score between 8 to 10 on the scale of 10 in the cadre of Lecturer (Senior Scale)', 'Minimum 5 years of experience with an average 360 degree feedback score between 8 to 10 on the scale of 10 in the cadre of Lecturer (Senior Scale)'),
(53, 'Minimum 6 years of experience with an average 360 degree feedback score between 5 to < 8 on the scale of 10 in the cadre of Lecturer (Senior Scale).', 'Minimum 6 years of experience with an average 360 degree feedback score between 5 to < 8 on the scale of 10 in the cadre of Lecturer (Senior Scale).'),
(54, 'Qualifications as prescribed for the post of Lecturer (Selection Grade - I).', 'Qualifications as prescribed for the post of Lecturer (Selection Grade - I).'),
(55, 'Completed three weeks of industrial training at the level of Lecturer (Selection Grade - I)', 'Three weeks of industrial training at the level of Lecturer (Selection Grade - I)'),
(56, 'Completed two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt', 'Completed two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt'),
(57, 'Completed one week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.', 'One week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.'),
(58, 'Completed two eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE.', 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE.'),
(59, 'Ph. D. in relevant discipline with minimum 3 years of experience, 2 research publications in SCI journals/UGC/AICTE/CoA/PCI approved list of journals and an average 360 degree feedback score\r\nbetween 8 to 10 on a scale of 10, all in the cadre of Lecturer (Selection Grade - I) Level - 12.', 'Ph. D. in relevant discipline with minimum 3 years of experience, 2 research publications in SCI journals/UGC/AICTE/CoA/PCI approved list of journals and an average 360 degree feedback score between 8 to 10 on a scale of 10, all in the cadre of Lecturer (Selection Grade - I) Level - 12.'),
(60, 'Ph. D. in relevant discipline with minimum 4 years of experience, 2 research publications in SCI Journals / UGC / AICTE. CoA/ PCI approved list of journals and an average 360o feedback score between 5 to < 8 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.', 'Ph. D. in relevant discipline with minimum 4 years of experience, 2 research publications in SCI Journals / UGC / AICTE. CoA/ PCI approved list of journals and an average 360o feedback score between 5 to < 8 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.'),
(61, 'Minimum 6 years of experience with an average 360o feedback score between 8 to 10 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12. ', 'Minimum 6 years of experience with an average 360o feedback score between 8 to 10 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.'),
(62, 'Minimum 8 years of experience with an average 360o feedback score between 5 to < 8 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.', 'Minimum 8 years of experience with an average 360 degree feedback score between 5 to < 8 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.'),
(64, 'Ph. D. in relevant field and First Class at Bachelor’s or Master’s level in the relevant discipline; minimum of 12 years of experience in Teaching/ Research/ Industry, out of which at least 2 years shall be post Ph.D. experience minimum at the level of Lecturer (Selection Grade-I). ', 'Ph. D. in relevant field and First Class at Bachelor’s or Master’s level in the relevant discipline; minimum of 12 years of experience in Teaching/ Research/ Industry, out of which at least 2 years shall be post Ph.D. experience minimum at the level of Lecturer (Selection Grade-I).'),
(65, 'Bachelor’s and Master’s Degree in relevant discipline with minimum of 15 years of experience in Teaching / Research / Industry, out of which at least 3 years shall be at the level of Lecturer (Selection Grade - II)', 'Bachelor’s and Master’s Degree in relevant discipline with minimum of 15 years of experience in Teaching / Research / Industry, out of which at least 3 years shall be at the level of Lecturer (Selection Grade - II)'),
(66, 'Ph.D. and First Class at either Bachelor’s or Master’s level in the relevant discipline with minimum of 16 years of experience in Teaching / Research/ Industry, out of which at least 3 years shall be post Ph.D. experience and 5 years of experience not below the level of HoD', 'Ph.D. and First Class at either Bachelor’s or Master’s level in the relevant discipline with minimum of 16 years of experience in Teaching / Research/ Industry, out of which at least 3 years shall be post Ph.D. experience and 5 years of experience not below the level of HoD'),
(67, 'First Class at Bachelor’s or Master’s level in the relevant discipline and minimum of 20 years of experience in Teaching / Research/ Industry, out of which 5 years of experience not below the level of HoD. ', 'First Class at Bachelor’s or Master’s level in the relevant discipline and minimum of 20 years of experience in Teaching / Research/ Industry, out of which 5 years of experience not below the level of HoD.'),
(68, 'Ph.D. and First class at Bachelor’s or Master’s level in the relevant discipline with minimum of 16 years of experience in Teaching / Research/ Industry out of which 5 years shall be at the level of HoD and 3 years shall be post Ph.D. Experience; An average 360 degree feedback score of 5 to < 8 out of 10 for last 5 years.', 'Ph.D. and First class at Bachelor’s or Master’s level in the relevant discipline with minimum of 16 years of experience in Teaching / Research/ Industry out of which 5 years shall be at the level of HoD and 3 years shall be post Ph.D. Experience; An average 360 degree feedback score of 5 to < 8 out of 10 for last 5 years.'),
(69, 'First class at Bachelor’s or Master’s level in the relevant discipline; minimum of 20 years of experience in Teaching / Research/ Industry, out of which 7 years shall be not below the level of HoD. An average 360o feedback score of 8 to 10 out of 10 for last 5 years.', 'First class at Bachelor’s or Master’s level in the relevant discipline; minimum of 20 years of experience in Teaching / Research/ Industry, out of which 7 years shall be not below the level of HoD. An average 360o feedback score of 8 to 10 out of 10 for last 5 years.');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_process`
--

CREATE TABLE `teaching_process` (
  `id` int(11) NOT NULL,
  `institute_id` varchar(40) NOT NULL,
  `year` varchar(11) NOT NULL,
  `semester` varchar(12) NOT NULL,
  `course_code` varchar(12) NOT NULL,
  `schedule_class` varchar(20) NOT NULL,
  `held_class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaching_process`
--

INSERT INTO `teaching_process` (`id`, `institute_id`, `year`, `semester`, `course_code`, `schedule_class`, `held_class`) VALUES
(1, '12345678', '21', '2', '43', '5', '5'),
(2, '12345678', '32', '5', '34', '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `login_type` varchar(12) NOT NULL,
  `institution_id` varchar(40) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `login_type`, `institution_id`, `username`, `password`) VALUES
(1, 'technical', '0', 'technical', 'technical'),
(2, 'diploma', '0', 'diploma', 'diploma'),
(3, 'student', '0', 'mike', 'mike'),
(4, 'institution', '12345678', 'admin', 'admin'),
(5, 'hod', '12345678', 'hod', 'hod'),
(6, 'faculty', '12345678', 'faculty', 'faculty'),
(7, 'student', '12345678', 'student', 'student'),
(8, 'institution', '12345678', 'admin', 'admin'),
(9, 'hod', '12345678', 'Vivek Johsi', 'Vivek Johsi'),
(10, 'hod', '12345678', '5656', '5656');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acr`
--
ALTER TABLE `acr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contribution_society`
--
ALTER TABLE `contribution_society`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_activities`
--
ALTER TABLE `department_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institution_activity`
--
ALTER TABLE `institution_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `min_qualifications`
--
ALTER TABLE `min_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_process`
--
ALTER TABLE `teaching_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acr`
--
ALTER TABLE `acr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contribution_society`
--
ALTER TABLE `contribution_society`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department_activities`
--
ALTER TABLE `department_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `institution_activity`
--
ALTER TABLE `institution_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `min_qualifications`
--
ALTER TABLE `min_qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `teaching_process`
--
ALTER TABLE `teaching_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
