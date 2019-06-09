-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2019 at 06:26 PM
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
-- Database: `aicte_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `acr`
--

CREATE TABLE `acr` (
  `id` int(11) NOT NULL,
  `year` varchar(20) NOT NULL,
  `activity` varchar(10) NOT NULL,
  `credit` varchar(100) NOT NULL,
  `facultyId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acr`
--

INSERT INTO `acr` (`id`, `year`, `activity`, `credit`, `facultyId`) VALUES
(1, 'fdgf', 'activity1', 'credit2', 'NA'),
(2, 'gdfgdfg', 'activity2', 'credit1', 'NA'),
(3, 'asdasdasdas', 'activity1', 'credit1', 'NA'),
(4, 'asdasdasdas', 'activity1', 'credit1', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `acr_points`
--

CREATE TABLE `acr_points` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `points` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `acr_year` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` varchar(20) COLLATE utf8_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `activity_name` varchar(20) NOT NULL,
  `activity_semester` varchar(20) NOT NULL,
  `activity_year` varchar(20) NOT NULL,
  `activity_type` varchar(20) NOT NULL,
  `facultyId` varchar(50) NOT NULL,
  `activity_proof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_technical`
--

CREATE TABLE `faculty_technical` (
  `id` int(11) NOT NULL,
  `university_code` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `date_of_joining` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(13) NOT NULL,
  `profile_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_technical`
--

INSERT INTO `faculty_technical` (`id`, `university_code`, `name`, `contact`, `qualification`, `date_of_joining`, `department`, `level`, `faculty_id`, `address`, `email`, `profile_pic`) VALUES
(1, '', 'sdasd', '783982', '', '2019-06-04', 'CS', '', '', 'xczc', 'dsadas@dsa.co', ''),
(2, '', 'dsds', '423423', 'NA', '2019-06-24', 'CS', '13A1', '4324', '', 'sdfsdf@ds.com', ''),
(3, '', 'dsds', '423423', 'NA', '2019-06-04', 'IT', '13A1', '432455', '', 'sdfsdf@ds.com', ''),
(4, 'NA', 'rr', '222', 'NA', '21/32/12', 'CS', '9A', '111111', 'NA', 'rr@gg.com', 'NA');

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
(1, 'B. E. / B. Tech. / B. S. in relevant discipline with First Class or equivalent.', 'B. E. / B. Tech. / B. S. in relevant discipline with First Class or equivalent.'),
(2, 'B. Pharm. with First Class or equivalent', 'B. Pharm. with First Class or equivalent'),
(3, 'A minimum 4-year Bachelor’s Degree in HMCT with First Class or equivalent.', 'A minimum 4-year Bachelor’s Degree in HMCT with First Class or equivalent.'),
(4, 'B.Arch. or a 4-year Degree in an allied field with First Class or equivalent', 'B.Arch. or a 4-year Degree in an allied field with First Class or equivalent'),
(5, 'Bachelor’s degree in appropriate discipline of Fine Arts (Applied Arts, Painting and Sculpture) or equivalent with First Class or equivalent', 'Bachelor’s degree in appropriate discipline of Fine Arts (Applied Arts, Painting and Sculpture) or equivalent with First Class or equivalent'),
(6, 'Bachelor’s degree in design or a minimum 4-year Diploma in any one of the streams of Design, Fine Arts, Applied Arts and Architecture or Bachelor’s degree in Engineering with First Class or equivalent', 'Bachelor’s degree in design or a minimum 4-year Diploma in any one of the streams of Design, Fine Arts, Applied Arts and Architecture or Bachelor’s degree in Engineering with First Class or equivalent'),
(7, 'Master’s degree in appropriate subject with First Class or equivalent at Bachelor’s or Master’s level', 'Master’s degree in appropriate subject with First Class or equivalent at Bachelor’s or Master’s level'),
(8, 'Bachelor’s and Master’s Degrees in relevant disciplines with First Class', 'Bachelor’s and Master’s Degrees in relevant disciplines with First Class in either of the two at the time of selection.'),
(9, 'Master’s degree with First Class or equivalent in a relevant subject and has cleared the National Eligibility Test (NET) or some similar test', 'A Master’s degree with First Class or equivalent in a relevant subject and, must have cleared the National Eligibility Test (NET) conducted by the UGC or the CSIR, or a similar test accredited by the UGC, like SLET / SET. '),
(10, 'Master\'s degree in relevent discipline', 'Candidates from technical disciplines shall be placed in Level 10 at suitable cell as and when the candidates acquire the Master’s degree in relevant technical discipline.'),
(11, 'Cleared National Eligibility Test (NET) or some similar test', 'Candidates of Sciences and Humanities shall be placed in Level 10 at suitable cell as and when the candidates clear the National Eligibility Test (NET) conducted by the UGC or the CSIR, or a similar test accredited by the UGC, like SLET / SET.'),
(12, 'Completed 5 years of service', 'In case candidates do not acquire relevant Master’s degree in the case of technical disciplines and in case of candidates from Sciences and Humanities do not clear National Eligibility Test (NET) conducted by the UGC or the CSIR, or a similar test accredited by the UGC, like SLET / SET, they shall be placed in appropriate cell of level 10 only after completion of 5 years'),
(13, 'Three weeks of industrial training at the level of Lecturer. ', 'Three weeks of industrial training at the level of Lecturer. '),
(14, 'Two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/ Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt. and out of which at least one of the FDPs shall be in advanced Pedagogy', 'Two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/ Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt. and out of which at least one of the FDPs shall be in advanced Pedagogy'),
(15, 'Completed one week faculty development programme and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE. ', 'One week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.'),
(16, 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTELAICTE', 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTELAICTE'),
(17, 'Minimum 5 years of experience and an average 360 degree feedback score between 8 to 10 on the scale of 10 in the cadre of Lecturer.', 'Minimum 5 years of experience and an average 360 degree feedback score between 8 to 10 on the scale of 10 in the cadre of Lecturer.'),
(18, 'Minimum 6 years of experience and an average 360o feedback score between 5 to < 8 on the scale of 10 in the cadre of Lecturer', 'Minimum 6 years of experience and an average 360o feedback score between 5 to < 8 on the scale of 10 in the cadre of Lecturer'),
(19, 'Minimum qualifications for Lecturer (Senior Scale) + Master\'s Degree with first class or equivalent either at Bachelor\'s or Masterl\'s level.', 'Qualification as prescribed for the post of Lecturer (Senior Scale) necessarily with a Master’s Degree in relevant discipline in First Class or equivalent either at Bachelor’s or at Master’s level.'),
(20, 'Three weeks of industrial training at the level of Lecturer (Senior Scale)', 'Three weeks of industrial training at the level of Lecturer (Senior Scale)'),
(21, 'Completed two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/ Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt', 'Two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/ Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT/University/Govt'),
(22, 'Completed one week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.', 'One week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.'),
(23, 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE', 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE'),
(24, 'Minimum 5 years of experience with an average 360 degree feedback score between 8 to 10 on the scale of 10 in the cadre of Lecturer (Senior Scale)', 'Minimum 5 years of experience with an average 360 degree feedback score between 8 to 10 on the scale of 10 in the cadre of Lecturer (Senior Scale)'),
(25, 'Minimum 6 years of experience with an average 360 degree feedback score between 5 to < 8 on the scale of 10 in the cadre of Lecturer (Senior Scale).', 'Minimum 6 years of experience with an average 360 degree feedback score between 5 to < 8 on the scale of 10 in the cadre of Lecturer (Senior Scale).'),
(26, 'Qualifications as prescribed for the post of Lecturer (Selection Grade - I).', 'Qualifications as prescribed for the post of Lecturer (Selection Grade - I).'),
(27, 'Completed three weeks of industrial training at the level of Lecturer (Selection Grade - I)', 'Three weeks of industrial training at the level of Lecturer (Selection Grade - I)'),
(28, 'Completed two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt', 'Completed two weeks of Faculty Development Programme (FDP) recognised by AICTE/UGC/TEQIP/NITTTR/Pandit Madan Mohan Malviya National Mission on Teachers and Teaching (PMMMNMTT)/IISc/IIT /University/Govt'),
(29, 'Completed one week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.', 'One week faculty development programme as above and one eight weeks duration MOOCS course with E-Certification by NPTEL-AICTE.'),
(30, 'Completed two eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE.', 'Completed two such eight weeks duration MOOCS courses with E-Certification by NPTEL -AICTE.'),
(31, 'Ph. D. in relevant discipline with minimum 3 years of experience, 2 research publications in SCI journals/UGC/AICTE/CoA/PCI approved list of journals and an average 360 degree feedback score\r\nbetween 8 to 10 on a scale of 10, all in the cadre of Lecturer (Selection Grade - I) Level - 12.', 'Ph. D. in relevant discipline with minimum 3 years of experience, 2 research publications in SCI journals/UGC/AICTE/CoA/PCI approved list of journals and an average 360 degree feedback score between 8 to 10 on a scale of 10, all in the cadre of Lecturer (Selection Grade - I) Level - 12.'),
(32, 'Ph. D. in relevant discipline with minimum 4 years of experience, 2 research publications in SCI Journals / UGC / AICTE. CoA/ PCI approved list of journals and an average 360o feedback score between 5 to < 8 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.', 'Ph. D. in relevant discipline with minimum 4 years of experience, 2 research publications in SCI Journals / UGC / AICTE. CoA/ PCI approved list of journals and an average 360o feedback score between 5 to < 8 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.'),
(33, 'Minimum 6 years of experience with an average 360o feedback score between 8 to 10 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12. ', 'Minimum 6 years of experience with an average 360o feedback score between 8 to 10 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.'),
(34, 'Minimum 8 years of experience with an average 360o feedback score between 5 to < 8 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.', 'Minimum 8 years of experience with an average 360 degree feedback score between 5 to < 8 on a scale of 10, all in the cadre of Lecturer (Selection Grade-I) Level - 12.'),
(35, 'Ph. D. in relevant field and First Class at Bachelor’s or Master’s level in the relevant discipline; minimum of 12 years of experience in Teaching/ Research/ Industry, out of which at least 2 years shall be post Ph.D. experience minimum at the level of Lecturer (Selection Grade-I). ', 'Ph. D. in relevant field and First Class at Bachelor’s or Master’s level in the relevant discipline; minimum of 12 years of experience in Teaching/ Research/ Industry, out of which at least 2 years shall be post Ph.D. experience minimum at the level of Lecturer (Selection Grade-I).'),
(36, 'Bachelor’s and Master’s Degree in relevant discipline with minimum of 15 years of experience in Teaching / Research / Industry, out of which at least 3 years shall be at the level of Lecturer (Selection Grade - II)', 'Bachelor’s and Master’s Degree in relevant discipline with minimum of 15 years of experience in Teaching / Research / Industry, out of which at least 3 years shall be at the level of Lecturer (Selection Grade - II)'),
(37, 'Ph.D. and First Class at either Bachelor’s or Master’s level in the relevant discipline with minimum of 16 years of experience in Teaching / Research/ Industry, out of which at least 3 years shall be post Ph.D. experience and 5 years of experience not below the level of HoD', 'Ph.D. and First Class at either Bachelor’s or Master’s level in the relevant discipline with minimum of 16 years of experience in Teaching / Research/ Industry, out of which at least 3 years shall be post Ph.D. experience and 5 years of experience not below the level of HoD'),
(38, 'First Class at Bachelor’s or Master’s level in the relevant discipline and minimum of 20 years of experience in Teaching / Research/ Industry, out of which 5 years of experience not below the level of HoD. ', 'First Class at Bachelor’s or Master’s level in the relevant discipline and minimum of 20 years of experience in Teaching / Research/ Industry, out of which 5 years of experience not below the level of HoD.'),
(39, 'Ph.D. and First class at Bachelor’s or Master’s level in the relevant discipline with minimum of 16 years of experience in Teaching / Research/ Industry out of which 5 years shall be at the level of HoD and 3 years shall be post Ph.D. Experience; An average 360 degree feedback score of 5 to < 8 out of 10 for last 5 years.', 'Ph.D. and First class at Bachelor’s or Master’s level in the relevant discipline with minimum of 16 years of experience in Teaching / Research/ Industry out of which 5 years shall be at the level of HoD and 3 years shall be post Ph.D. Experience; An average 360 degree feedback score of 5 to < 8 out of 10 for last 5 years.'),
(40, 'First class at Bachelor’s or Master’s level in the relevant discipline; minimum of 20 years of experience in Teaching / Research/ Industry, out of which 7 years shall be not below the level of HoD. An average 360o feedback score of 8 to 10 out of 10 for last 5 years.', 'First class at Bachelor’s or Master’s level in the relevant discipline; minimum of 20 years of experience in Teaching / Research/ Industry, out of which 7 years shall be not below the level of HoD. An average 360o feedback score of 8 to 10 out of 10 for last 5 years.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_name`
--

CREATE TABLE `tbl_name` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_name`
--

INSERT INTO `tbl_name` (`id`, `name`) VALUES
(1, 'pjp'),
(2, 'ggg'),
(3, 'fg'),
(4, 're'),
(5, 'activity2'),
(6, 'activity2'),
(7, 'credit2'),
(8, 'credit1'),
(9, 'jgjghjghjhg'),
(10, 'jghjghj');

-- --------------------------------------------------------

--
-- Table structure for table `teaching_process`
--

CREATE TABLE `teaching_process` (
  `id` int(11) NOT NULL,
  `year` varchar(11) NOT NULL,
  `semester` varchar(11) NOT NULL,
  `course` varchar(20) NOT NULL,
  `number_schedule_class` varchar(20) NOT NULL,
  `number_actually_held_class` varchar(20) NOT NULL,
  `proof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `technical_min_qualifications`
--

CREATE TABLE `technical_min_qualifications` (
  `id` int(11) NOT NULL,
  `qualification_name` varchar(1000) NOT NULL,
  `meta_qualification` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technical_min_qualifications`
--

INSERT INTO `technical_min_qualifications` (`id`, `qualification_name`, `meta_qualification`) VALUES
(1, 'B. E. / B. Tech. / B. S. and M. E. / M. Tech. / M. S. or Integrated M. Tech. in relevant branch\r\nwith first class or equivalent in any one of the degrees.', 'B. E. / B. Tech. / B. S. and M. E. / M. Tech. / M. S. or Integrated M. Tech. in relevant branch\r\nwith first class or equivalent in any one of the degrees.'),
(2, 'Bachelor’s Degree in any discipline and Master’s Degree in Business Administration / PGDM /\r\nC. A. / ICWA/ M. Com. with First Class or equivalent and two years of professional experience\r\nafter acquiring the degree of Master’s degree.', 'Bachelor’s Degree in any discipline and Master’s Degree in Business Administration / PGDM /\r\nC. A. / ICWA/ M. Com. with First Class or equivalent and two years of professional experience\r\nafter acquiring the degree of Master’s degree.'),
(3, 'B. Pharm. and M. Pharm. in the relevant specialization with First Class or equivalent in any one\r\nof the two degrees.', 'B. Pharm. and M. Pharm. in the relevant specialization with First Class or equivalent in any one\r\nof the two degrees.'),
(4, 'B. E. / B. Tech. / B. S. and M.E. / M. Tech. / M. S. or Integrated M. Tech. in relevant branch with\r\nFirst Class or equivalent in any one of the degrees', 'B. E. / B. Tech. / B. S. and M.E. / M. Tech. / M. S. or Integrated M. Tech. in relevant branch with\r\nFirst Class or equivalent in any one of the degrees'),
(5, 'B. E., B. Tech. and MCA with First Class or equivalent in any one of the two degrees', 'B. E., B. Tech. and MCA with First Class or equivalent in any one of the two degrees'),
(6, 'Graduation of three years’ duration with Mathematics as a compulsory subject and MCA with\r\nFirst Class or equivalent with 2 years of relevant experience after acquiring degree of MCA', 'Graduation of three years’ duration with Mathematics as a compulsory subject and MCA with\r\nFirst Class or equivalent with 2 years of relevant experience after acquiring degree of MCA'),
(7, 'Minimum 4 years Bachelor’s Degree in HMCT and Master’s Degree in HMCT or in relevant\r\ndisciplines with First Class or equivalent in any one of the two degrees.', 'Minimum 4 years Bachelor’s Degree in HMCT and Master’s Degree in HMCT or in relevant\r\ndisciplines with First Class or equivalent in any one of the two degrees.'),
(8, 'Minimum 4 years Bachelor’s Degree in HMCT with First Class or equivalent and minimum of 5\r\nyears of relevant experience at a managerial level not less than Assistant Manager in a 4 - star\r\nHotel or in a similar position in the hospitality industry/ tourism industry', 'Minimum 4 years Bachelor’s Degree in HMCT with First Class or equivalent and minimum of 5\r\nyears of relevant experience at a managerial level not less than Assistant Manager in a 4 - star\r\nHotel or in a similar position in the hospitality industry/ tourism industry'),
(9, 'B. Arch. and M. Arch. or equivalent Master’s degree in an allied field with First Class in any one\r\nof the two degrees, and minimum 2 years’ experience in the Architecture profession.', 'B. Arch. and M. Arch. or equivalent Master’s degree in an allied field with First Class in any one\r\nof the two degrees, and minimum 2 years’ experience in the Architecture profession.'),
(10, 'B. Arch. with First class or equivalent and minimum of 5 years’ experience in the Architecture\r\nprofession', 'B. Arch. with First class or equivalent and minimum of 5 years’ experience in the Architecture\r\nprofession'),
(11, 'Bachelor’s degree in Architecture / Planning / Civil Engineering or Master’s degree in\r\nGeography / Economics / Sociology or equivalent AND Master of Planning or equivalent with\r\nFirst class or equivalent in either in Master of Planning or any above degrees with 2 years of\r\nrelevant experience', 'Bachelor’s degree in Architecture / Planning / Civil Engineering or Master’s degree in\r\nGeography / Economics / Sociology or equivalent AND Master of Planning or equivalent with\r\nFirst class or equivalent in either in Master of Planning or any above degrees with 2 years of\r\nrelevant experience'),
(12, 'Bachelor’s Degree or minimum 4 year Diploma in any one of the streams of Design, Fine Arts,\r\nApplied Arts and Architecture or Bachelor’s degree in Engineering with First class or equivalent', 'Bachelor’s Degree or minimum 4 year Diploma in any one of the streams of Design, Fine Arts,\r\nApplied Arts and Architecture or Bachelor’s degree in Engineering with First class or equivalent'),
(13, 'Master’s degree or equivalent Post Graduate Diploma in relevant disciplines with First Class or\r\nequivalent in a concerned / relevant /allied subject of Industrial Design / Visual Communication /\r\nFine Arts / Applied Arts / Architecture / Interaction Design / New Media Studies / Design\r\nManagement / Ergonomics / Human Factors Engineering / Indian Craft Studies and related fields\r\nof Engineering or Design.', 'Master’s degree or equivalent Post Graduate Diploma in relevant disciplines with First Class or\r\nequivalent in a concerned / relevant /allied subject of Industrial Design / Visual Communication /\r\nFine Arts / Applied Arts / Architecture / Interaction Design / New Media Studies / Design\r\nManagement / Ergonomics / Human Factors Engineering / Indian Craft Studies and related fields\r\nof Engineering or Design.'),
(14, 'Minimum 2 years of professional design experience in Industry / research organization / Design\r\nstudios', 'Minimum 2 years of professional design experience in Industry / research organization / Design\r\nstudios'),
(15, 'Bachelor’s and Master’s degree in the relevant branch with First Class or equivalent in any one\r\nof the two degrees and minimum 2 years of relevant professional experience', 'Bachelor’s and Master’s degree in the relevant branch with First Class or equivalent in any one\r\nof the two degrees and minimum 2 years of relevant professional experience'),
(16, 'The qualifications for recruitment and promotions for faculty in the disciplines of Basic Sciences,\r\nSocial Science and Humanities shall be as per the UGC Notification No. F.1-2/2017(EC/PS)\r\nDated 18th July, 2018 and UGC guidelines issued from time to time.', 'The qualifications for recruitment and promotions for faculty in the disciplines of Basic Sciences,\r\nSocial Science and Humanities shall be as per the UGC Notification No. F.1-2/2017(EC/PS)\r\nDated 18th July, 2018 and UGC guidelines issued from time to time.'),
(17, 'Qualifications prescribed for the post of Assistant Professor', 'Qualifications prescribed for the post of Assistant Professor'),
(18, 'Qualifications prescribed for the post of Assistant Professor', 'Qualifications prescribed for the post of Assistant Professor'),
(19, 'Should have satisfied any one of the below mentioned set of requirements', 'Should have satisfied any one of the below mentioned set of requirements'),
(20, 'Qualifications as prescribed for the post of Assistant Professor (Senior Scale)', 'Qualifications as prescribed for the post of Assistant Professor (Senior Scale)'),
(21, 'Should have completed minimum training requirements as per Annexure - III.', 'Should have completed minimum training requirements as per Annexure - III.'),
(22, 'Should have satisfied any one of the below mentioned set of requirements.', 'Should have satisfied any one of the below mentioned set of requirements.'),
(23, 'Ph.D. degree in the relevant field and First class or equivalent at either Bachelor’s or Master’s\r\nlevel in the relevant branch', 'Ph.D. degree in the relevant field and First class or equivalent at either Bachelor’s or Master’s\r\nlevel in the relevant branch'),
(24, 'At least total 6 research publications in SCI journals / UGC / AICTE approved list of journals', 'At least total 6 research publications in SCI journals / UGC / AICTE approved list of journals'),
(25, 'Minimum of 8 years of experience in teaching / research / industry out of which at least 2 years\r\nshall be Post Ph.D. experience.', 'Minimum of 8 years of experience in teaching / research / industry out of which at least 2 years\r\nshall be Post Ph.D. experience.'),
(26, 'Ph. D. degree in relevant field and First class or equivalent at either Bachelor’s or Master’s level\r\nin the relevant branch', 'Ph. D. degree in relevant field and First class or equivalent at either Bachelor’s or Master’s level\r\nin the relevant branch'),
(27, 'Should have completed minimum training requirements as per Annexure – III', 'Should have completed minimum training requirements as per Annexure – III'),
(28, 'Should have satisfied any one of the below mentioned set of requirements.', 'Should have satisfied any one of the below mentioned set of requirements.'),
(29, 'Ph. D. degree in relevant field and First class or equivalent at either Bachelor’s or Master’s level\r\nin the relevant branch', 'Ph. D. degree in relevant field and First class or equivalent at either Bachelor’s or Master’s level\r\nin the relevant branch'),
(30, 'Minimum of 10 years of experience in teaching / research / industry out of which at least 3 years\r\nshall be at a post equivalent to that of an Associate Professor', 'Minimum of 10 years of experience in teaching / research / industry out of which at least 3 years\r\nshall be at a post equivalent to that of an Associate Professor'),
(31, 'At least 6 research publications at the level of Associate Professor in SCI journals / UGC /\r\nAICTE approved list of journals and at least 2 successful Ph.D. guided as Supervisor / Cosupervisor till the date of eligibility of promotion', 'At least 6 research publications at the level of Associate Professor in SCI journals / UGC /\r\nAICTE approved list of journals and at least 2 successful Ph.D. guided as Supervisor / Cosupervisor till the date of eligibility of promotion'),
(32, 'At least 10 research publications at the level of Associate Professor in SCI journals / UGC /\r\nAICTE approved list of journals till the date of eligibility of promotion.', 'At least 10 research publications at the level of Associate Professor in SCI journals / UGC /\r\nAICTE approved list of journals till the date of eligibility of promotion.'),
(33, 'Ph. D. degree in relevant field and First Class or equivalent at either Bachelor’s or Master’s level\r\nin the relevant branch', 'Ph. D. degree in relevant field and First Class or equivalent at either Bachelor’s or Master’s level\r\nin the relevant branch'),
(34, 'Should have satisfied any one of the below mentioned set of requirements', 'Should have satisfied any one of the below mentioned set of requirements'),
(35, 'Ph. D. degree in the relevant field', 'Ph. D. degree in the relevant field'),
(36, 'Minimum ten years of experience in the cadre of Professor', 'Minimum ten years of experience in the cadre of Professor'),
(37, 'At least 8 research publications in SCI journals / UGC / AICTE approved list of journals, should\r\nhave at least 2 successful Ph. D. guided as Supervisor / Co-Supervisor as a Professor', 'At least 8 research publications in SCI journals / UGC / AICTE approved list of journals, should\r\nhave at least 2 successful Ph. D. guided as Supervisor / Co-Supervisor as a Professor'),
(38, 'At least 8 research publications in SCI journals / UGC / AICTE approved list of journals, should\r\nhave provided academic leadership as institution head at least for 3 years at the level of Professor', 'At least 8 research publications in SCI journals / UGC / AICTE approved list of journals, should\r\nhave provided academic leadership as institution head at least for 3 years at the level of Professor'),
(39, 'At least 8 research publications in SCI journals / UGC / AICTE approved list of journals, should\r\nhave provided educational leadership at state / national level at least for 3 years at the level of\r\nProfessor.', 'At least 8 research publications in SCI journals / UGC / AICTE approved list of journals, should\r\nhave provided educational leadership at state / national level at least for 3 years at the level of\r\nProfessor.'),
(40, 'At least one patent awarded', 'At least one patent awarded'),
(41, 'Development of one MOOC course applicable at national platform', 'Development of one MOOC course applicable at national platform'),
(42, 'Ph. D. degree and First Class or equivalent at either Bachelor’s or Master’s level in the relevant\r\nbranch', 'Ph. D. degree and First Class or equivalent at either Bachelor’s or Master’s level in the relevant\r\nbranch'),
(43, 'At least two successful Ph.D. guided as supervisor / Co-Supervisor and minimum 8 research\r\npublications in SCI journals / UGC / AICTE approved list of journals', 'At least two successful Ph.D. guided as supervisor / Co-Supervisor and minimum 8 research\r\npublications in SCI journals / UGC / AICTE approved list of journals'),
(44, 'Minimum 15 years of experience in teaching / research/ industry, out of which at least 3 years\r\nshall be at the post equivalent to that of Professor', 'Minimum 15 years of experience in teaching / research/ industry, out of which at least 3 years\r\nshall be at the post equivalent to that of Professor');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `university_code` varchar(20) NOT NULL,
  `university_name` varchar(50) NOT NULL,
  `university_state` varchar(40) NOT NULL,
  `technical_diploma` varchar(20) NOT NULL,
  `is_state` varchar(4) NOT NULL,
  `university_district` varchar(30) NOT NULL,
  `university_postalCode` varchar(30) NOT NULL,
  `university_address` varchar(50) NOT NULL,
  `university_contact` varchar(12) NOT NULL,
  `university_email` varchar(22) NOT NULL,
  `university_logo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `university_code`, `university_name`, `university_state`, `technical_diploma`, `is_state`, `university_district`, `university_postalCode`, `university_address`, `university_contact`, `university_email`, `university_logo`) VALUES
(1, '', 'University', '12434', 'Techical', 'NA', 'Gzb', '2232123', 'Address', '34342234', 'university@gmail.com', ''),
(2, '', 'University', '12434', 'Techical', 'NA', 'Gzb', '2232123', 'Address', '34342234', 'university@gmail.com', '5cfb28d73362f2.44622285.jpg'),
(3, '', 'sdasd', 'dasd', 'Diploma', 'NA', 'asd', '23324', 'asda', 'dad', 'sad@sad.com', '5cfd31f2ed9883.26450128.jpg'),
(4, '', 'Unive', '232139', 'Diploma', 'NA', '773842', '83298', 'Address', '89348932', 'address@address.com', '5cfd32679fc148.73299989.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `login_type` varchar(12) NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `login_type`, `username`, `password`) VALUES
(1, 'technical', 'technical', 'technical'),
(2, 'diploma', 'diploma', 'diploma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acr`
--
ALTER TABLE `acr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acr_points`
--
ALTER TABLE `acr_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_technical`
--
ALTER TABLE `faculty_technical`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `min_qualifications`
--
ALTER TABLE `min_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_name`
--
ALTER TABLE `tbl_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teaching_process`
--
ALTER TABLE `teaching_process`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_min_qualifications`
--
ALTER TABLE `technical_min_qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `acr_points`
--
ALTER TABLE `acr_points`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_technical`
--
ALTER TABLE `faculty_technical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `min_qualifications`
--
ALTER TABLE `min_qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_name`
--
ALTER TABLE `tbl_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teaching_process`
--
ALTER TABLE `teaching_process`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
