-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2013 at 04:33 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminNo` char(2) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminNo`, `Password`) VALUES
('A1', 'A1'),
('A2', 'A2');

-- --------------------------------------------------------

--
-- Table structure for table `gapfill`
--

CREATE TABLE IF NOT EXISTS `gapfill` (
  `QNo` int(11) NOT NULL,
  `Question` text NOT NULL,
  `PictureName` text NOT NULL,
  `Qhead` text NOT NULL,
  `Qtail` text NOT NULL,
  `Ans` text NOT NULL,
  PRIMARY KEY (`QNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gapfill`
--

INSERT INTO `gapfill` (`QNo`, `Question`, `PictureName`, `Qhead`, `Qtail`, `Ans`) VALUES
(1, 'Describe fully the numbered melodic intervals (e.g. major 2nd)', 'pp1_Q001.jpg', 'Interval 1 is ', '.', 'Diminished 7th'),
(2, 'Describe fully the numbered melodic intervals (e.g. major 2nd)', 'pp1_Q002.jpg', 'Interval 2 is ', '.', 'Compound perfect 4th'),
(3, 'Describe fully the numbered melodic intervals (e.g. major 2nd)', 'pp1_Q003.jpg', 'Interval 3 is ', '.', 'Major 6th'),
(4, 'Describe fully the numbered melodic intervals (e.g. major 2nd)', 'pp1_Q004.jpg', 'Interval 4 is ', '.', 'Augmented 5th'),
(5, 'Describe fully the numbered melodic intervals (e.g. major 2nd)', 'pp1_Q005.jpg', 'Interval 5 is ', '.', 'Minor 3rd'),
(6, 'Suggest suitable progressions for two cadences in the following melody by indicating ONLY ONE chord (I, II, IV or V) at the places marked A. You do not have to indicate the position of the chords, or to state which note is in the bass.', 'pp2_Q001.jpg', 'Chord A is', '.', 'II'),
(7, 'Suggest suitable progressions for two cadences in the following melody by indicating ONLY ONE chord (I, II, IV or V) at the places marked B. You do not have to indicate the position of the chords, or to state which note is in the bass.', 'pp2_Q002.jpg', 'Chord B is', '.', 'I'),
(8, 'Suggest suitable progressions for two cadences in the following melody by indicating ONLY ONE chord (I, II, IV or V) at the places marked C. You do not have to indicate the position of the chords, or to state which note is in the bass.', 'pp2_Q003.jpg', 'Chord C is', '.', 'V'),
(9, 'Suggest suitable progressions for two cadences in the following melody by indicating ONLY ONE chord (I, II, IV or V) at the places marked D. You do not have to indicate the position of the chords, or to state which note is in the bass.', 'pp2_Q004.jpg', 'Chord D is', '.', 'IV'),
(10, 'Suggest suitable progressions for two cadences in the following melody by indicating ONLY ONE chord (I, II, IV or V) at the places marked E. You do not have to indicate the position of the chords, or to state which note is in the bass.', 'pp2_Q005.jpg', 'Chord E is', '.', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `mc`
--

CREATE TABLE IF NOT EXISTS `mc` (
  `QNo` int(11) NOT NULL,
  `Question` text NOT NULL,
  `VideoName` text NOT NULL,
  `ChoiceA` text NOT NULL,
  `ChoiceB` text NOT NULL,
  `ChoiceC` text NOT NULL,
  `ChoiceD` text NOT NULL,
  `Ans` char(1) NOT NULL,
  PRIMARY KEY (`QNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mc`
--

INSERT INTO `mc` (`QNo`, `Question`, `VideoName`, `ChoiceA`, `ChoiceB`, `ChoiceC`, `ChoiceD`, `Ans`) VALUES
(1, 'Which period is this piece?', 'AdagioSostenuto.mp3', 'classical period', 'romantic period', 'baroque period', 'twentieth century', 'A'),
(2, 'Which period is this piece?', 'MarmoniousBlacksmith.mp3', 'romantic period', 'classical period', 'twentieth century', 'baroque period', 'D'),
(3, 'Which period is this piece?', 'Gymnopedie.mp3', 'romantic period', 'baroque period', 'twentieth century', 'classical period', 'C'),
(4, 'Which tonality is this piece?', '18.mp3', 'It started in major key, moved to minor key in the last section', 'It started in minor key, moved to major key in the last section', 'piece is mainly a minor key', 'piece is mainly a major key', 'C'),
(5, 'Which tonality is this piece?', '16.mp3', 'piece is mainly a major key', 'piece is mainly a minor key', 'It started in minor key, moved to major key in the last section', 'It started in major key, moved to minor key in the last section', 'B'),
(6, 'Which texture is this piece?', '18.mp3', 'Chordal texture', 'Contrapuntal texture', 'Monophonic texture', 'Block Chords', 'B'),
(7, 'Which texture is this piece?', '15.mp3', 'Contrapuntal texture', 'Block Chords', 'Chordal texture', 'Monophonic texture', 'A'),
(8, 'Which style is this piece?', '16.mp3', 'Minute', 'Gigue', 'Waltz', 'Gavotte', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `pianoschool`
--

CREATE TABLE IF NOT EXISTS `pianoschool` (
  `SchoolNo` char(3) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `SchoolName` varchar(200) NOT NULL,
  PRIMARY KEY (`SchoolNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pianoschool`
--

INSERT INTO `pianoschool` (`SchoolNo`, `Password`, `SchoolName`) VALUES
('H01', 'H01', 'B1 Piano School'),
('H02', 'H02', 'H02 123 Piano School'),
('H03', 'H03', '123'),
('H07', 'H07', 'H07 HAHA school ');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `StudentNo` char(6) NOT NULL,
  `PreExam1` int(1) DEFAULT NULL,
  `PreExam2` int(1) DEFAULT NULL,
  PRIMARY KEY (`StudentNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`StudentNo`, `PreExam1`, `PreExam2`) VALUES
('S00001', 0, 0),
('S00002', NULL, NULL),
('S00003', 0, NULL),
('S00004', NULL, NULL),
('S00006', NULL, NULL),
('S00007', NULL, NULL),
('S00008', 0, NULL),
('S00010', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `StudentNo` char(6) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `SchoolNo` char(3) NOT NULL,
  `Birthday` char(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`StudentNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`StudentNo`, `Password`, `Name`, `SchoolNo`, `Birthday`, `Email`) VALUES
('S00001', 'S00001', 'Mary Kwok', 'H01', '15/07/1992', 'CandyKwok@yahoo.com.hk'),
('S00002', 'S00002', 'K', 'H01', '28/05/1998', '19980528@yahoo.com.hk'),
('S00003', 'S00003', 'Lam Shan', 'H07', '20/05/2007', 'LamShan@hotmail.com'),
('S00004', 'S00004', '456', 'H01', '20/06/2013', '456@hotmail.com'),
('S00006', 'S00006', 'Lam Chan Chan', 'H03', '23/12/2002', 'lamlam@hotmail.com'),
('S00007', 'S00007', 'Chan Lam Lam', 'H01', '23/02/2003', 'lamlam@hotmail.com'),
('S00008', 'S00008', 'Kwok Yin Shan', 'H03', '23/12/1993', 'yinshan_1223@gmail.com'),
('S00010', 'S00010', 'Mary Chan Lam Lam', 'H07', '12/12/2001', 'marylamlam@hotmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
