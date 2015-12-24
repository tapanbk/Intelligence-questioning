-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2015 at 09:15 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz015`
--

-- --------------------------------------------------------

--
-- Table structure for table `automaticreasoningusers`
--

CREATE TABLE IF NOT EXISTS `automaticreasoningusers` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `automaticreasoningusers`
--

INSERT INTO `automaticreasoningusers` (`username`, `password`) VALUES
('\n', ''),
('\nabhash', 'abhash'),
('\nmyanu', 'myanu'),
('\ntapan', 'tapan'),
('"username	password"', '');

-- --------------------------------------------------------

--
-- Table structure for table `finalgame1`
--

CREATE TABLE IF NOT EXISTS `finalgame1` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalgame1`
--

INSERT INTO `finalgame1` (`id`, `qno`, `question`, `answer`, `flag`) VALUES
(1, 1, '1.jpg', '1 answer', 1),
(2, 2, '2.jpg', 'answer 2', 0),
(3, 3, '3.jpg', 'answer 3', 1),
(4, 4, '4.jpg', 'answer 4', 1),
(5, 5, '5.jpg', '6 answer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `finalgame2`
--

CREATE TABLE IF NOT EXISTS `finalgame2` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groupdata`
--

CREATE TABLE IF NOT EXISTS `groupdata` (
`id` int(4) NOT NULL,
  `groupName` char(2) NOT NULL,
  `school` varchar(50) NOT NULL,
  `points` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupdata`
--

INSERT INTO `groupdata` (`id`, `groupName`, `school`, `points`) VALUES
(1, 'A', 'Abcd', 25),
(2, 'B', 'Bcde', 5),
(3, 'C', 'CD', 5),
(4, 'D', 'DE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `qualifyinggame1`
--

CREATE TABLE IF NOT EXISTS `qualifyinggame1` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifyinggame1`
--

INSERT INTO `qualifyinggame1` (`id`, `qno`, `question`, `answer`, `flag`) VALUES
(1, 1, 'What is the name of latest released version of Android?', 'KitKat', 1),
(2, 2, 'When was the first e-mail sent?', 'Ray Tomlinson in 1971', 1),
(3, 3, 'Which service of internet we use to buy the goods?', 'E-commerce', 1),
(4, 4, 'asdasdasdasasdxas', 'asdasdsadadasdedcsds', 1),
(5, 5, 'What is the official URL address of Ministry of science, technology and environment of Nepal?', 'www.moste.gov.np', 1),
(6, 6, 'sedfdsdsj', 'ihsdjhkjsdhkds', 1),
(7, 7, 'Which was the first computer network of the world?', 'ARPANet', 1),
(8, 8, 'asndjanlkjkljsakjn', 'kjdscksdkjcnsdkjcnsd', 1),
(9, 9, 'How much disk space does a standard CD hold?', '700MB of data or 72-minutes of audio', 1),
(10, 10, 'What is the name of technique that is used for digital data into analog signals?', 'modulation', 1),
(11, 11, 'Which printer generates characters from the grid of pins?', 'Dotmatix', 1),
(12, 12, 'What is the name of small addressable element on the screen?', 'Pixel', 1),
(13, 13, 'What was the name of input device used in first generation computer?', 'Punched cards', 1),
(14, 14, 'Which devices search fastest and reliable path to send the data over the network?', 'Router', 1),
(15, 15, 'What is called a single box on a excel sheet? ', 'Cell', 1),
(16, 16, 'What is called which is temporary storage area for holding data that has been cut or copied?', 'Clipboard', 1),
(17, 17, 'What is known as any physical object of the world in the context of database?', 'Entity', 1),
(18, 18, 'How many rows are in Excel sheet 2007?', '1048576', 1),
(19, 19, '3+3*3-3+3=?', '12', 1),
(20, 20, 'A +3-1*3+2-4+0*1=0  so A=?', '2', 1),
(21, 21, 'How many cases do you need if you have to pack 20 pairs of shoes into cases that each holds 5 shoes?', '8', 0),
(22, 22, 'Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?', '10', 0),
(23, 23, 'Look at this series: 31, 29, 24, 22, 17, ... What number should come next?', '15', 1),
(24, 24, '3  5  35  10  12  35  17 … What number should come next?', '15', 0),
(25, 25, '1.jpg', 'Viber_Logo', 1),
(26, 26, '2.jpg', 'PS/2 Port', 0),
(27, 27, '3.jpg', 'Stepped Reckoner(Leibniz Calculator)', 1),
(28, 28, '4.jpg', 'Twitter Logo', 0),
(29, 29, '5.jpg', 'Punched Card', 0),
(30, 30, '6.jpg', 'Napier''s Bone', 0),
(31, 31, 'What is the full form of DNS?', 'Domain Name System', 1),
(32, 32, 'Who invented MARK-I?', 'Howard Aiken', 1),
(33, 33, 'Which was the first operational stored program computer?', 'EDSAC', 1),
(34, 34, 'When was the tabulating machine invented?', '1887', 1),
(35, 35, 'What is the purpose of shortcut key Ctrl + Z?', 'Undo', 1),
(36, 36, 'What is the data type for storing currency in MS-ACCESS?', 'Currency', 1),
(37, 37, 'The topology that passes the token', 'Ring topology', 1),
(38, 38, 'What is the ASCII value for letter C?', '67', 1),
(39, 39, 'What is the full form of NIC?', 'Network Interface Card', 1),
(40, 40, 'When was EDVAC invented?', '1952', 1),
(41, 41, 'Which was the first mechanical calculator?', 'Pascaline', 1),
(42, 42, 'When was the second generation computer invented?', '1959', 1),
(43, 43, 'What is the purpose of shortcut key Ctrl +A?', 'Select All', 1),
(44, 44, 'What type of file has the extension .zip?', 'Compressed file', 1),
(45, 45, 'The protocol used for remote login', 'telnet', 1),
(46, 46, 'What is the ASCII value for numeric 5?', '52', 1),
(47, 47, 'What is the full form of SMTP?', 'Simple Mail Transfer Protocol', 1),
(48, 48, 'Who invented IC?', 'Jack Kilby', 1),
(49, 49, 'Which was the first general purpose electronic digital computer?', 'UNIVAC-I', 1),
(50, 50, 'When was Stepped Reckoner invented?', '1694 A.D.', 1),
(51, 51, 'What is the purpose of shortcut key Ctrl + Y?', 'Redo', 1),
(52, 52, 'What is the suitable data type for storing long description about students in MS-Access?', 'Memo', 1),
(53, 53, 'What is the ASCII value for 9?', '57', 1),
(54, 54, 'At which University Mark-I was developed?', 'Harvard University', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qualifyinggame2`
--

CREATE TABLE IF NOT EXISTS `qualifyinggame2` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifyinggame2`
--

INSERT INTO `qualifyinggame2` (`id`, `qno`, `question`, `answer`, `flag`) VALUES
(1, 1, 'Along with whom did Bill Gates found Microsoft? ', 'Paul Allen', 1),
(2, 2, 'What is known as in which business transaction occurs electronically?', 'E-Commerce', 1),
(3, 3, 'Who is the writer of the book '' Weaving the web ''?', 'Tim Berners Lee', 1),
(4, 4, 'What is the maximum transfer speed of the wireless 802.11a standard?', '54 Mbps', 1),
(5, 5, 'Where is the headquarters of Intel located?', 'Santa Clara, California', 1),
(6, 6, 'How many keys does the standard Windows US keyboard with number pad have?', '104 keys', 1),
(7, 7, 'How many pins is an IDE/EIDE connector?', '40-pin', 1),
(8, 8, 'What is the term to ask the computer to put information in order numerically or alphabetically?', 'sort', 1),
(9, 9, 'Which Linux command sets a file''s permission?', 'chmod', 1),
(10, 10, 'Who was recently awarded with Jonathan B. Postal service prize 2014?', 'Mahabir Pun', 1),
(11, 11, 'What is called in computer terminology in which a person has excessive enthusiasm to acquire the information?', 'Infomaniac', 1),
(12, 12, 'What is the function of Alt+ Shift key in windows?', 'change the language mode', 0),
(13, 13, 'What does the term MIME stand for?', 'Multi-Purpose Internet Mail Extensions', 0),
(14, 14, 'Who developed QBASIC language?', 'John G. Kemeny and Thomas E. Kurtz', 0),
(15, 15, 'Which was the first super computer?', 'CDC 6600', 0),
(16, 16, 'What port is SMTP commonly on?', '25', 0),
(17, 17, 'Which protocol is used for remote login?', 'telnet', 0),
(18, 18, 'What is another name of MARK-I?', 'Automatic Sequence Controlled Calculator(ASCC)', 0),
(19, 19, 'Who invented vacuum tube?', 'Lee Deforest', 0),
(20, 20, 'How many bits in a byte?', '8', 0),
(21, 21, 'Typically, hard disk drives employ what technology as a storage mechanism?', 'Magnetic', 0),
(22, 22, 'A six digit Hex color code (#ADD8E6) defines values of Red, Blue, and Green in what order?', '#RRGGBB', 1),
(23, 23, 'Which input device is most likely to be used to play game?', 'Joystick', 1),
(24, 24, 'What is called when two packets/signals hits each other?', 'Collision', 0),
(25, 25, 'If we see the digital clock on the mirror, it shows 8:45 so what should be  the real time of that clock?', '3:15', 0),
(26, 26, 'There are 100 people in a hall, if every people shake hands to everyone then how many times in total they shake each other?', '4950', 0),
(27, 27, 'If we write the word" MADE"   in number as 13145 and then  what is the code for the word " GATE"?', '71205', 0),
(28, 28, 'What is the next number in this series 12, 32, 62, 102, 152,?', '212', 0),
(29, 29, 'Divide 40 by half and add ten. What is answer?', '90', 1),
(30, 30, 'How many times do the hands of a clock over lap in 24 hours?', '22', 1),
(31, 31, 'Look at this series: 664, 332, 340, 170, ………,89. What number should fill the blank?', '178', 1),
(32, 32, 'What will be the next number? 7,5,11,10,15,15,19,20,23, …..?', '25', 1),
(33, 33, '1.jpg', 'Steve Jobs', 1),
(34, 34, '2.jpg', 'Larry Page', 0),
(35, 35, '3.jpg', 'Herman Hollerith', 1),
(36, 36, '4.jpg', 'Mark I', 1),
(37, 37, '5.jpg', 'Mahabir Pun', 0),
(38, 38, '6.jpg', 'RJ 45', 1),
(39, 39, '7.jpg', 'Pascaline', 1),
(40, 40, '8.jpg', 'Transistor', 1),
(41, 41, 'What is the full form of SMTP?', 'Simple Mail Transfer Protocol', 1),
(42, 42, 'Who invented MARK – I?', 'Howard Aiken', 1),
(43, 43, 'Which was the first general purpose electronic digital computer?', 'UNIVAC-I', 1),
(44, 44, 'When was the third generation computer invented?', '1965', 1),
(45, 45, 'What is the purpose of shortcut key Ctrl + X?', 'Cut', 1),
(46, 46, 'What is the default extension of MS-ACCESS 2007?', '.accdb', 1),
(47, 47, 'Physical layout of LAN', 'Topology', 1),
(48, 48, 'What is the ASCII value for numeric 0?', '48', 1),
(49, 49, 'What is the full form of FAQ?', 'Frequently Asked Question', 1),
(50, 50, 'Who invented ANALYTICAL engine?', 'Charles Babbage', 1),
(51, 51, 'Which was the first mechanical calculator?', 'Pascaline', 1),
(52, 52, 'When was Slide rule invented?', '1620 AD', 1),
(53, 53, 'What is the shortcut key for copy?', 'Ctrl + C', 1),
(54, 54, 'What is the default file extention for MS-ACCESS 2003?', '.mdb', 1),
(55, 55, 'The protocol used for receiving emails', 'Post Office Protocols (POP)', 1),
(56, 56, 'What is the ASCII value for numeric 5?', '52', 1),
(57, 57, 'What is the full form of HTTP?', 'Hyper Text Transfer Protocol', 1),
(58, 58, 'When was IC chips invented?', '1958', 1),
(59, 59, 'Which was the first electro mechanical computer?', 'MARK-I', 1),
(60, 60, 'What is the purpose of shortcut key Ctrl + V?', 'Paste', 1),
(61, 61, 'What is the default extension of MS-word?', '.doc/.docx', 1),
(62, 62, 'What is the memory space occupied by memo data type in MS-ACCESS?', '65,536 characters', 1),
(63, 63, 'The protocol used for sending emails', 'SMTP', 1),
(64, 64, 'What is the ASCII value for small ‘d’', '100', 1),
(65, 65, 'What is the full form of FTP?', 'File Transfer Protocol', 1),
(66, 66, 'When was invented Slide Rule?', '1620', 1),
(67, 67, 'Which was the first operational stored program computer?', 'EDSAC', 1),
(68, 68, 'What is the purpose of shortcut key Ctrl + S?', 'Save', 1),
(69, 69, 'What is the default extension of MS-EXCEL?', '.xls/.xlsx', 1),
(70, 70, 'What is the memory space for currency data type in MS-ACCESS?', '8 Bytes', 1),
(71, 71, 'The protocol used for browsing internet', 'HTTP', 1),
(72, 72, 'What is the ASCII value for A', '65', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qualifyinggame3`
--

CREATE TABLE IF NOT EXISTS `qualifyinggame3` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifyinggame3`
--

INSERT INTO `qualifyinggame3` (`id`, `qno`, `question`, `answer`, `flag`) VALUES
(1, 1, 'What is the name of latest released version of Android?', 'KitKat', 1),
(2, 2, 'When was the first e-mail sent?', 'Ray Tomlinson in 1971', 1),
(3, 3, 'Which service of internet we use to buy the goods?', 'E-commerce', 1),
(4, 4, 'Who is the founder of Wikipedia?', 'Jimmy Wales', 1),
(5, 5, 'What is the official URL address of Ministry of science, technology and environment of Nepal?', 'www.moste.gov.np', 1),
(6, 6, 'The domain name .edu describes the educational organization. So tell us what does the .mil describes?', 'Military Group', 1),
(7, 7, 'Which was the first computer network of the world?', 'ARPANet', 1),
(8, 8, 'What is the name of process which is used to measure the performance of hardware and software?', 'Benchmark', 1),
(9, 9, 'How much disk space does a standard CD hold?', '700MB of data or 72-minutes of audio', 1),
(10, 10, 'Who is/are the founder(s) of Google?', 'Larry Page and Sergi Brin', 1),
(11, 11, 'Which Company introduced the world’s first laptop computer in the market?', 'Epson', 1),
(12, 12, 'What is another name for a motherboard?', 'system board', 1),
(13, 13, 'What is the name of technique that is used for digital data into analog signals?', 'modulation', 1),
(14, 14, 'Which printer generates characters from the grid of pins?', 'Dotmatix', 1),
(15, 15, 'What is the name of small addressable element on the screen?', 'Pixel', 1),
(16, 16, 'What was the name of input device used in first generation computer?', 'Punched cards', 1),
(17, 17, 'Which devices search fastest and reliable path to send the data over the network?', 'Router', 1),
(18, 18, 'What is called a single box on a excel sheet? ', 'Cell', 1),
(19, 19, 'What is called which is temporary storage area for holding data that has been cut or copied?', 'Clipboard', 1),
(20, 20, 'What is known as any physical object of the world in the context of database?', 'Entity', 1),
(21, 21, 'How many rows are in Excel sheet 2007?', '1048576', 1),
(22, 22, 'Which QBASIC function is used for counting the length of string', 'LEN()', 1),
(23, 23, 'What does the term PLC stand for?', 'Programmable Logic Controller', 1),
(24, 24, 'Usually what kind of file is associated with ''.BAK'' extension ?', 'Backup file', 1),
(25, 25, '3+3*3-3+3=?', '12', 1),
(26, 26, 'A +3-1*3+2-4+0*1=0  so A=?', '2', 1),
(27, 27, 'How many cases do you need if you have to pack 20 pairs of shoes into cases that each holds 5 shoes?', '8', 1),
(28, 28, 'Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?', '10', 1),
(29, 29, 'Look at this series: 31, 29, 24, 22, 17, ... What number should come next?', '15', 1),
(30, 30, '3  5  35  10  12  35  17 … What number should come next?', '15', 1),
(31, 31, 'Look at this series: 4, 7, 25, 10, ?, 20, 16, 19, ... What number should fill the blank?', '13', 1),
(32, 32, 'JAK, KBL, LCM, MDN, _____ . What value should fill the blank?', 'NEO', 1),
(33, 33, '1.jpg', 'Viber_Logo', 1),
(34, 34, '2.jpg', 'PS/2 Port', 1),
(35, 35, '3.jpg', 'Stepped Reckoner(Leibniz Calculator)', 1),
(36, 36, '4.jpg', 'Twitter Logo', 1),
(37, 37, '5.jpg', 'Punched Card', 1),
(38, 38, '6.jpg', 'Napier''s Bone', 1),
(39, 39, '7.jpg', 'Vacuum Tubes', 1),
(40, 40, '8.jpg', 'BNC Connector (Used in Coaxial Cable)', 1),
(41, 41, 'What is the full form of DNS?', 'Domain Name System', 1),
(42, 42, 'Who invented MARK-I?', 'Howard Aiken', 1),
(43, 43, 'Which was the first operational stored program computer?', 'EDSAC', 1),
(44, 44, 'When was the tabulating machine invented?', '1887', 1),
(45, 45, 'What is the purpose of shortcut key Ctrl + Z?', 'Undo', 1),
(46, 46, 'What is the data type for storing currency in MS-ACCESS?', 'Currency', 1),
(47, 47, 'The topology that passes the token', 'Ring topology', 1),
(48, 48, 'What is the ASCII value for letter C?', '67', 1),
(49, 49, 'What is the full form of NIC?', 'Network Interface Card', 1),
(50, 50, 'When was EDVAC invented?', '1952', 1),
(51, 51, 'Which was the first mechanical calculator?', 'Pascaline', 1),
(52, 52, 'When was the second generation computer invented?', '1959', 1),
(53, 53, 'What is the purpose of shortcut key Ctrl +A?', 'Select All', 1),
(54, 54, 'What type of file has the extension .zip?', 'Compressed file', 1),
(55, 55, 'The protocol used for remote login', 'telnet', 1),
(56, 56, 'What is the ASCII value for numeric 5?', '52', 1),
(57, 57, 'What is the full form of SMTP?', 'Simple Mail Transfer Protocol', 1),
(58, 58, 'Who invented IC?', 'Jack Kilby', 1),
(59, 59, 'Which was the first general purpose electronic digital computer?', 'UNIVAC-I', 1),
(60, 60, 'When was Stepped Reckoner invented?', '1694 A.D.', 1),
(61, 61, 'What is the purpose of shortcut key Ctrl + Y?', 'Redo', 1),
(62, 62, 'What is the suitable data type for storing long description about students in MS-Access?', 'Memo', 1),
(63, 63, 'What is the ASCII value for 9?', '57', 1),
(64, 64, 'At which University Mark-I was developed?', 'Harvard University', 1),
(65, 65, 'What is the full form of SVGA?', 'Super Video Graphic Adapter', 1),
(66, 66, 'Who invented ABC?', 'John Atnasoff and Clifford Berry', 1),
(67, 67, 'When was the pascaline invented?', '1642', 1),
(68, 68, 'What is the general function of the key F1?', 'Help', 1),
(69, 69, 'What is the default extension of MS-ACCESS 2007?', '.accdb', 1),
(70, 70, 'Which technology was used in second generation computer ?', 'Transistor', 1),
(71, 71, 'What is the ASCII value for small letter ''y''?', '121', 1),
(72, 72, 'What is the most suitable data type for storing telephone number in MS-ACCESS?', 'text', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qualifyinggame4`
--

CREATE TABLE IF NOT EXISTS `qualifyinggame4` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qualifyinggame5`
--

CREATE TABLE IF NOT EXISTS `qualifyinggame5` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifyinggame5`
--

INSERT INTO `qualifyinggame5` (`id`, `qno`, `question`, `answer`, `flag`) VALUES
(1, 1, 'Which was the first computer network of the world?', 'ARPANet', 1),
(2, 2, 'When was the first e-mail sent?', 'Ray Tomlinson in 1971', 1),
(3, 3, 'The domain name .edu describes the educational organization. So tell us what does the .com describes?', 'Commercial Organization', 1),
(4, 4, 'Which service of internet we use to buy the goods?', 'E-commerce', 1),
(5, 5, 'Who is the founder of Wikipedia?', 'Jimmy Wales', 1),
(6, 6, 'AP is a networking device. What is its full form?', 'Access Point', 1),
(7, 7, 'What is another name for a motherboard?', 'system board', 1),
(8, 8, 'RJ 45 connector is used in twisted pair cables. Which connector is used in telephone lines.', 'RJ 11', 1),
(9, 9, 'What is the name of process which is used to measure the performance of hardware and software?', 'Benchmark', 1),
(10, 10, 'How much disk space does a standard CD hold?', '700MB of data or 72-minutes of audio', 1),
(11, 11, 'Who is/are the founder(s) of Google?', 'Larry Page and Sergi Brin', 1),
(12, 12, 'Which Company introduced the world’s first laptop computer in the market?', 'Epson', 1),
(13, 13, 'What is the official URL address of Ministry of science, technology and environment of Nepal?', 'www.moste.gov.np', 1),
(14, 14, 'Which is the first ISP of Nepal?', 'Mercantile', 1),
(15, 15, 'KitKat is the latest version of Andriod OS. Which is the previous version of it?', 'Jelly Bean', 1),
(16, 16, 'What was the name of input device used in first generation computer?', 'Punched cards', 1),
(17, 17, 'What is the name of technique that is used for converting analog signals into digital signals?', 'demodulation', 1),
(18, 18, 'In which mode data can travel in both directions?', 'Full-duplex', 1),
(19, 19, 'Which printer generates characters from the grid of pins?', 'Dotmatix', 1),
(20, 20, 'Name the temporary storage area that is used for holding cut or copied data.', 'Clipboard', 1),
(21, 21, 'Which QBASIC function returns character from the given ASCII value?', 'CHR$()', 1),
(22, 22, 'What is the name of small addressable element on the screen?', 'Pixel', 1),
(23, 23, 'What is called a single box on a excel sheet? ', 'Cell', 1),
(24, 24, 'What is the full form of EBCDIC?', 'Extended Bindary Coded Decimal Interchange Code', 1),
(25, 25, 'What is known as any physical object of the world in the context of database?', 'Entity', 1),
(26, 26, 'How many rows are in Excel sheet 2007?', '1048576', 1),
(27, 27, 'Which network device boosts the signals and forward?', 'Repeater', 1),
(28, 28, 'What does the term USP stand for?', 'Universal Serial Port', 1),
(29, 29, 'Usually what kind of file is associated with ''.BAK'' extension ?', 'Backup file', 1),
(30, 30, 'Which devices search fastest and reliable path to send the data over the network?', 'Router', 1),
(31, 31, 'What is the sum of natural numbers from 1 to 20?', '210', 1),
(32, 32, 'B+3-1*3+3-4+0*3=0  so B=?', '1', 1),
(33, 33, 'CMM, EOO, GQQ, _____, KUU, … What value should fill the blank?', 'ISS', 1),
(34, 34, 'Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?', '10', 1),
(35, 35, 'Look at this series: 31, 29, 24, 22, 17, ... What number should come next?', '15', 1),
(36, 36, 'How many cases do you need if you have to pack 20 pairs of shoes into cases that each holds 5 shoes?', '8', 1),
(37, 37, 'Look at this series: 4, 7, 25, 10, ?, 20, 16, 19, ... What number should fill the blank?', '13', 1),
(38, 38, 'JAK, KBL, LCM, MDN, _____ . What value should fill the blank?', 'NEO', 1),
(39, 39, '3  5  35  10  12  35  17 … What number should come next?', '15', 1),
(40, 40, '4+4*4-4+4/4=?', '17', 1),
(41, 41, '1.jpg', 'Viber Logo', 1),
(42, 42, '2.jpg', 'PS/2 Port', 1),
(43, 43, '3.jpg', 'Stepped Reckoner(Leibniz Calculator)', 1),
(44, 44, '4.jpg', 'Twitter Logo', 1),
(45, 45, '5.jpg', 'Punched Card', 1),
(46, 46, '6.jpg', 'Napier''s Bone', 1),
(47, 47, '7.jpg', 'BNC Connector (Used in Coaxial Cable)', 1),
(48, 48, '8.jpg', 'Fiber Optic Cable', 1),
(49, 49, '9.jpg', 'NIC (Network Interface Card)', 1),
(50, 50, '10.jpg', 'Logo of Andriod OS', 1),
(51, 51, 'When was the tabulating machine invented?', '1887', 1),
(52, 52, 'Who invented MARK-I?', 'Howard Aiken', 1),
(53, 53, 'What is the full form of I/O?', 'Input/Output', 1),
(54, 54, 'What is the data type for storing currency in MS-ACCESS?', 'Currency', 1),
(55, 55, 'What is the purpose of shortcut key Ctrl + Z?', 'Undo', 1),
(56, 56, 'What is the ASCII value for capital letter ''C''?', '67', 1),
(57, 57, 'The topology that passes the token', 'Ring topology', 1),
(58, 58, 'Which was the first operational stored program computer?', 'EDSAC', 1),
(59, 59, 'What is the full from of VIOP?', 'Voice Over Internet Protocol', 1),
(60, 60, 'What is the name of first microprocessor?', 'Intel 4004', 1),
(61, 61, 'Who invented Transistors?', 'Jorhn Burdeen, Walter Brattain and William Shockley', 1),
(62, 62, 'What is the purpose of shortcut key Ctrl + P?', 'To print', 1),
(63, 63, 'One billionth of a second', 'Nanosecond', 1),
(64, 64, 'What type of file has the extension .bmp?', 'Bitmap Image', 1),
(65, 65, 'What is the ASCII value for small alphabet ''x''?', '120', 1),
(66, 66, 'What is the space occupied by the data type yes/no in MS-Access?', '1 bit', 1),
(67, 67, 'What is the full form of WiFi?', 'Wireless Fidelity', 1),
(68, 68, 'Who invented UNIVAC-I?', 'John Mauchly and J.P. Eckert', 1),
(69, 69, 'Which was the first mechanical calculator?', 'Pascaline', 1),
(70, 70, 'In which year the first computer was brought in Nepal?', '2028 B.S.', 1),
(71, 71, 'What is the purpose of shortcut key Ctrl +A?', 'Select All', 1),
(72, 72, 'What type of file has the extension .zip?', 'Compressed file', 1),
(73, 73, 'The protocol used for remote login', 'telnet', 1),
(74, 74, 'What is the ASCII value for numeric 5?', '53', 1),
(75, 75, 'What is the full form of POP?', 'POP Office Protocol', 1),
(76, 76, 'Who invented IC?', 'Jack Kilby', 1),
(77, 77, 'Which was the first general purpose electronic digital computer?', 'UNIVAC-I', 1),
(78, 78, 'When was Stepped Reckoner invented?', '1694 A.D.', 1),
(79, 79, 'What is the purpose of shortcut key Ctrl + Y?', 'Redo', 1),
(80, 80, 'What is the suitable data type for storing long description about students in MS-Access?', 'Memo', 1),
(81, 81, 'What is the ASCII value for ''9''?', '57', 1),
(82, 82, 'At which University Mark-I was developed?', 'Harvard University', 1),
(83, 83, 'What is the full form of STD?', 'Standard Trunk Dialing', 1),
(84, 84, 'Who invented ABC?', 'John Atnasoff and Clifford Berry', 1),
(85, 85, 'When was the pascaline invented?', '1642 A.D.', 1),
(86, 86, 'What is the general function of the key F1?', 'Help', 1),
(87, 87, 'What is the default extension of MS-ACCESS 2007?', '.accdb', 1),
(88, 88, 'Which technology was used in second generation computer ?', 'Transistor', 1),
(89, 89, 'What is the ASCII value for small letter ''y''?', '121', 1),
(90, 90, 'What is the most suitable data type for storing telephone number in MS-ACCESS?', 'text', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qualifyinggame6`
--

CREATE TABLE IF NOT EXISTS `qualifyinggame6` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifyinggame6`
--

INSERT INTO `qualifyinggame6` (`id`, `qno`, `question`, `answer`, `flag`) VALUES
(1, 1, 'What is the full form of VSAT?', 'Very Small Aperture Terminals', 0),
(2, 2, 'Who was the inventor of Mathematical logic?', 'George Boole', 1),
(3, 3, 'What is the function of Alt+ Shift key in windows?', 'change the language mode', 0),
(4, 4, 'Where is the headquarters of Intel located?', 'Santa Clara, California', 0),
(5, 5, 'What is the maximum number of columns we can have in Excel 2007 sheets?', '16384 columns', 0),
(6, 6, 'How many keys does the standard Windows US keyboard with number pad have?', '104 keys', 0),
(7, 7, 'What is the name of terminology that refers to the gap between people with effective access to digital and information technology and those with very limited or no access at all.', 'Digital Divide', 0),
(8, 8, 'Who was recently awarded with Jonathan B. Postal service prize 2014?', 'Mahabir Pun', 0),
(9, 9, 'What type of file has the extension .ttf?', 'Font file', 0),
(10, 10, 'What is the maximum speed that NTC is providing in its "Fiber to the Home" package?', '100 Mbps', 0),
(11, 11, 'Who is the writer of the book ''Weaving the Web''?', 'Tim Berners Lee', 0),
(12, 12, 'Along with whom did Bill Gates found Microsoft?', 'Paul Allen', 0),
(13, 13, 'Who developed QBASIC language?', 'John G. Kemeny and Thomas E. Kurtz', 1),
(14, 14, 'What is the octal equivalent of binary number 11011011 ?', '333', 1),
(15, 15, 'Which was the first super computer?', 'CDC 6600', 1),
(16, 16, 'What does the term PCO stand for?', 'Public Call Office', 1),
(17, 17, 'Which protocol is used for remote login?', 'telnet', 1),
(18, 18, 'What is the full form of PDF?', 'Portable Document Format', 1),
(19, 19, 'What is the another name of fields/columns in database/DBMS ?', 'Attribute', 1),
(20, 20, 'Which port (port number) is used by SMTP?', '25', 1),
(21, 21, 'Who invented vacuum tube?', 'Lee Deforest', 1),
(22, 22, 'What is the hexadecimal equivalent of binary number 1011110110 ?', '2F6', 1),
(23, 23, 'Lady Augusta was the first programmer? She was the daughter of famous English poet? Who was he?', 'Lord Byron', 1),
(24, 24, 'Which technology is used to recognize the individual letters from an image? ', 'OCR (Optical Character Recognition)', 1),
(25, 25, 'Divide 40 by half and add ten. What is answer?', '90', 1),
(26, 26, 'X+7*(-1*3+(3-4)*3)+3*0=0  so X=?', '42', 1),
(27, 27, 'ELFA, GLHA, ILJA, _____, MLNA, … What value should fill the blank?', 'KLLA', 1),
(28, 28, 'What will be the next number? 7,5,11,10,15,15,19,20,23, …..?', '25', 1),
(29, 29, 'There are 100 people in a hall, if every people shake hands to everyone then how many times in total they shake each other?', '4950', 1),
(30, 30, 'Look at this series: 664, 332, 340, 170, ………,89. What number should fill the blank?', '178', 0),
(31, 31, 'If we see an analog clock on the mirror, it shows 8:45 so what should be the real time of that clock?', '0.135416666666667', 1),
(32, 32, 'If we write the word "MADE"   in number as 13145 and then  what is the code for the word "GOD"?', '7154', 1),
(33, 33, '1.jpg', 'Logo of Avast Antivirus ', 1),
(34, 34, '2.jpg', 'Larry Page', 1),
(35, 35, '3.jpg', 'Graphic Card', 1),
(36, 36, '4.jpg', 'Steve Jobs', 1),
(37, 37, '5.jpg', 'Mahabir Pun', 1),
(38, 38, '6.jpg', 'Transistor', 1),
(39, 39, '7.jpg', 'Pascaline', 1),
(40, 40, '8.jpg', 'Herman Hollerith', 1),
(41, 41, 'What is the purpose of shortcut key Alt+Tab in windows environment?', 'Switch between the application', 1),
(42, 42, 'What is the default extension of MS-PowerPoint?', '.ppt/pptx', 0),
(43, 43, 'What is the ASCII value  of small letter "E"?', '69', 1),
(44, 44, 'In which topology every node has point-to-point connection?', 'Mesh Topology', 1),
(45, 45, 'What is the full form of ANSI?', 'American National Standard Institute', 0),
(46, 46, 'One millionth of a second', 'Microsecond', 0),
(47, 47, 'When was the first microprocessor invented?', '1971', 0),
(48, 48, 'In which mode, data can flow in both directions but not at the same time.', 'Half-duplex', 1),
(49, 49, 'What is the shortcut key for copy?', 'Ctrl + C', 0),
(50, 50, 'What is the default file extention for MS-ACCESS 2003?', '.mdb', 0),
(51, 51, 'Which protocol is used for receiving emails ?', 'Post Office Protocols (POP)', 1),
(52, 52, 'What is the ASCII value for numeric 5?', '52', 1),
(53, 53, 'What is the full form of FAQ?', 'Frequently Asked Question', 1),
(54, 54, 'Who invented ANALYTICAL engine?', 'Charles Babbage', 1),
(55, 55, 'Which was the first mechanical calculator?', 'Pascaline', 1),
(56, 56, 'When was Slide rule invented?', '1620 AD', 1),
(57, 57, 'What is the default extension of MS-word?', '.doc/.docx', 1),
(58, 58, 'What is the memory space occupied by memo data type in MS-ACCESS?', '65,536 characters', 1),
(59, 59, 'Which protocol is used for sending emails ?', 'SMTP', 1),
(60, 60, 'What is the ASCII value for small ‘d’', '100', 1),
(61, 61, 'What is the full form of HTTPS?', 'Hyper Text Transfer Protocol Secured', 1),
(62, 62, 'When was IC chips invented?', '1958', 1),
(63, 63, 'Which was the first electro mechanical computer?', 'MARK-I', 1),
(64, 64, 'What is the purpose of shortcut key Ctrl + V?', 'Paste', 1),
(65, 65, 'What is the default extension of MS-EXCEL?', '.xls/.xlsx', 1),
(66, 66, 'What is the memory space for currency data type in MS-ACCESS?', '8 Bytes', 1),
(67, 67, 'Which protocol is used for browsing the Internet ?', 'HTTP', 1),
(68, 68, 'What is the ASCII value of small letter ''e''?', '101', 1),
(69, 69, 'What is the full form of FTP?', 'File Transfer Protocol', 1),
(70, 70, 'In which generation of computer magnetic tapes were used for the first time?', 'Second Generation', 1),
(71, 71, 'Which was the first operational stored program computer?', 'EDSAC', 1),
(72, 72, 'What is the purpose of shortcut key Ctrl + S?', 'Save', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qualifyinggame7`
--

CREATE TABLE IF NOT EXISTS `qualifyinggame7` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(400) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifyinggame7`
--

INSERT INTO `qualifyinggame7` (`id`, `qno`, `question`, `answer`, `flag`) VALUES
(1, 1, 'RJ 45 connector is used in twisted pair cables. Which connector is used in telephone lines.', 'RJ 11', 1),
(2, 2, 'What is the name of process which is used to measure the performance of hardware and software?', 'Benchmark', 1),
(3, 3, 'Which was the first computer network of the world?', 'ARPANet', 1),
(4, 4, 'Which Company introduced the world’s first laptop computer in the market?', 'Epson', 1),
(5, 5, 'Who is/are the founder(s) of Google?', 'Larry Page and Sergi Brin', 1),
(6, 6, 'Who is the founder of Wikipedia?', 'Jimmy Wales', 1),
(7, 7, 'AP is a networking device. What is its full form?', 'Access Point', 1),
(8, 8, 'Which is the first ISP of Nepal?', 'Mercantile', 1),
(9, 9, 'The domain name .edu describes the educational organization. So tell us what does the .com describes?', 'Commercial Organization', 1),
(10, 10, 'When was the first e-mail sent?', '1971 A.D.', 1),
(11, 11, 'KitKat is the latest version of Andriod OS. Which is the previous version of it?', 'Jelly Bean', 1),
(12, 12, 'What is the official URL address of Ministry of science, technology and environment of Nepal?', 'www.moste.gov.np', 1),
(13, 13, 'What is the full form of EBCDIC?', 'Extended Bindary Coded Decimal Interchange Code', 1),
(14, 14, 'What is known as any physical object of the world in the context of database?', 'Entity', 1),
(15, 15, 'What was the name of input device used in first generation computer?', 'Punched cards', 1),
(16, 16, 'How many rows are in Excel sheet 2007?', '1048576', 1),
(17, 17, 'What does the term USP stand for?', 'Universal Serial Port', 1),
(18, 18, 'Name the temporary storage area that is used for holding cut or copied data.', 'Clipboard', 1),
(19, 19, 'Which QBASIC function returns character from the given ASCII value?', 'CHR$()', 1),
(20, 20, 'What is the name of small addressable element on the screen?', 'Pixel', 1),
(21, 21, 'What is the name of technique that is used for converting analog signals into digital signals?', 'demodulation', 1),
(22, 22, 'Usually what kind of file is associated with ''.BAK'' extension ?', 'Backup file', 1),
(23, 23, 'Which network device boosts the signals and forward?', 'Repeater', 1),
(24, 24, 'In which mode data can travel in both directions?', 'Full-duplex', 1),
(25, 25, 'How many cases do you need if you have to pack 20 pairs of shoes into cases that each holds 5 shoes?', '8', 1),
(26, 26, '3  5  35  10  12  35  17 … What number should come next?', '15', 1),
(27, 27, 'What is the sum of natural numbers from 1 to 20?', '210', 1),
(28, 28, '4+4*4-4+4/4=?', '17', 1),
(29, 29, 'Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?', '10', 1),
(30, 30, 'CMM, EOO, GQQ, _____, KUU, … What value should fill the blank?', 'ISS', 1),
(31, 31, 'Look at this series: 4, 7, 25, 10, ?, 20, 16, 19, ... What number should fill the blank?', '13', 1),
(32, 32, 'Look at this series: 31, 29, 24, 22, 17, ... What number should come next?', '15', 1),
(33, 33, '1.jpg', 'Stepped Reckoner(Leibniz Calculator)', 1),
(34, 34, '2.jpg', 'PS/2 Port', 1),
(35, 35, '3.jpg', 'BNC Connector (Used in Coaxial Cable)', 1),
(36, 36, '4.jpg', 'NIC (Network Interface Card)', 1),
(37, 37, '5.jpg', 'Punched Card', 1),
(38, 38, '6.jpg', 'Napier''s Bone', 1),
(39, 39, '7.jpg', 'Viber Logo', 1),
(40, 40, '8.jpg', 'Fiber Optic Cable', 1),
(41, 41, 'One billionth of a second', 'Nanosecond', 1),
(42, 42, 'What type of file has the extension .bmp?', 'Bitmap Image', 1),
(43, 43, 'Who invented Transistors?', 'Jorhn Burdeen, Walter Brattain and William Shockley', 1),
(44, 44, 'What is the space occupied by the data type yes/no in MS-Access?', '1 bit', 1),
(45, 45, 'What is the full from of VIOP?', 'Voice Over Internet Protocol', 1),
(46, 46, 'What is the name of first microprocessor?', 'Intel 4004', 1),
(47, 47, 'What is the ASCII value for small alphabet ''x''?', '120', 1),
(48, 48, 'What is the purpose of shortcut key Ctrl + P?', 'To print', 1),
(49, 49, 'Which was the first mechanical calculator?', 'Pascaline', 1),
(50, 50, 'In which year the first computer was brought in Nepal?', '2028 B.S.', 1),
(51, 51, 'What is the purpose of shortcut key Ctrl +A?', 'Select All', 1),
(52, 52, 'Who invented UNIVAC-I?', 'John Mauchly and J.P. Eckert', 1),
(53, 53, 'What is the full form of WiFi?', 'Wireless Fidelity', 1),
(54, 54, 'The protocol used for remote login', 'telnet', 1),
(55, 55, 'What type of file has the extension .zip?', 'Compressed file', 1),
(56, 56, 'What is the ASCII value for numeric 8?', '56', 1),
(57, 57, 'Which was the first general purpose electronic digital computer?', 'UNIVAC-I', 1),
(58, 58, 'When was Stepped Reckoner invented?', '1694 A.D.', 1),
(59, 59, 'Who invented IC?', 'Jack Kilby', 1),
(60, 60, 'What is the purpose of shortcut key Ctrl + Y?', 'Redo', 1),
(61, 61, 'What is the suitable data type for storing long description about students in MS-Access?', 'Memo', 1),
(62, 62, 'What is the ASCII value for ''9''?', '57', 1),
(63, 63, 'At which University Mark-I was developed?', 'Harvard University', 1),
(64, 64, 'What is the full form of POP?', 'POP Office Protocol', 1),
(65, 65, 'What is the default extension of MS-ACCESS 2007?', '.accdb', 1),
(66, 66, 'Which technology was used in second generation computer ?', 'Transistor', 1),
(67, 67, 'What is the ASCII value for small letter ''y''?', '121', 1),
(68, 68, 'What is the most suitable data type for storing telephone number in MS-ACCESS?', 'text', 1),
(69, 69, 'What is the full form of STD?', 'Standard Trunk Dialing', 1),
(70, 70, 'What is the general function of the key F1?', 'Help', 1),
(71, 71, 'When was the pascaline invented?', '1642 A.D.', 1),
(72, 72, 'Who invented ABC?', 'John Atnasoff and Clifford Berry', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qualifyinggame8`
--

CREATE TABLE IF NOT EXISTS `qualifyinggame8` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(400) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifyinggame8`
--

INSERT INTO `qualifyinggame8` (`id`, `qno`, `question`, `answer`, `flag`) VALUES
(1, 1, 'Where is the headquarters of Intel located?', 'Santa Clara, California', 1),
(2, 2, 'Who was the inventor of Mathematical logic?', 'George Boole', 1),
(3, 3, 'Who is the writer of the book ''Weaving the Web''?', 'Tim Berners Lee', 1),
(4, 4, 'What is the maximum transfer speed of the wireless 802.11a standard?', '54 Mbps', 1),
(5, 5, 'Along with whom did Bill Gates found Microsoft?', 'Paul Allen', 1),
(6, 6, 'What is the full form of VSAT?', 'Very Small Aperture Terminals', 1),
(7, 7, 'What is the function of Alt+ Shift key in windows?', 'change the language mode', 1),
(8, 8, 'How many pins is an IDE/EIDE connector?', '40-pin', 1),
(9, 9, 'What is the name of terminology that refers to the gap between people with effective access to digital and information technology and those with very limited or no access at all.', 'Digital Divide', 1),
(10, 10, 'How many keys does the standard Windows US keyboard with number pad have?', '104 keys', 1),
(11, 11, 'What type of file has the extension .ttf?', 'Font file', 1),
(12, 12, 'Name the type of a person who has excessive enthusiasm to acquire the information.', 'Infomaniac', 1),
(13, 13, 'What is the maximum speed that NTC is providing in its "Fiber to the Home" package?', '100 Mbps', 1),
(14, 14, 'What is the maximum number of columns we can have in Excel 2007 sheets?', '16384 columns', 1),
(15, 15, 'Who was recently awarded with Jonathan B. Postal service prize 2014?', 'Mahabir Pun', 1),
(16, 16, 'Which was the first super computer?', 'CDC 6600', 1),
(17, 17, 'What does the term PCO stand for?', 'Public Call Office', 1),
(18, 18, 'In what order of Blue, Red and Green colour is defined in a six digit Hexadecimal color code (ADD8E6)?', 'RGB (Red, Green, Blue)', 1),
(19, 19, 'Who developed QBASIC language?', 'John G. Kemeny and Thomas E. Kurtz', 1),
(20, 20, 'Lady Augusta was the first programmer? She was the daughter of famous English poet? Who was he?', 'Lord Byron', 1),
(21, 21, 'What is the another name of fields/columns in database/DBMS ?', 'Attribute', 1),
(22, 22, 'Which port (port number) is used by SMTP?', '25', 1),
(23, 23, 'Which protocol is used for remote login?', 'telnet', 1),
(24, 24, 'What is the hexadecimal equivalent of binary number 1011110110 ?', '2F6', 1),
(25, 25, 'Who invented vacuum tube?', 'Lee Deforest', 1),
(26, 26, 'How many bits in 4 bytes?', '32', 1),
(27, 27, 'What is the octal equivalent of binary number 11011011 ?', '333', 1),
(28, 28, 'What is the full form of PDF?', 'Portable Document Format', 1),
(29, 29, 'Which technology is used to recognize the individual letters from an image? ', 'OCR (Optical Character Recognition)', 1),
(30, 30, 'What is another name of MARK-I?', 'Automatic Sequence Controlled Calculator(ASCC)', 1),
(31, 31, 'If we write the word "MADE"   in number as 13145 and then  what is the code for the word "GOD"?', '7154', 1),
(32, 32, 'If we see an analog clock on the mirror, it shows 8:45 so what should be the real time of that clock?', '0.135416666666667', 1),
(33, 33, 'There are 100 people in a hall, if every people shake hands to everyone then how many times in total they shake each other?', '4950', 1),
(34, 34, 'ELFA, GLHA, ILJA, _____, MLNA, … What value should fill the blank?', 'KLLA', 1),
(35, 35, 'What is the next number in this series 12, 32, 62, 102, 152,?', '212', 1),
(36, 36, 'What will be the next number? 7,5,11,10,15,15,19,20,23, …..?', '25', 1),
(37, 37, 'Look at this series: 664, 332, 340, 170, ………,89. What number should fill the blank?', '178', 1),
(38, 38, 'How many times do the hands of a clock over lap in 24 hours?', '22', 1),
(39, 39, 'X+7*(-1*3+(3-4)*3)+3*0=0  so X=?', '42', 1),
(40, 40, 'Divide 40 by half and add ten. What is answer?', '90', 1),
(41, 41, '1.jpg', 'Steve Jobs', 1),
(42, 42, '2.jpg', 'Larry Page', 1),
(43, 43, '3.jpg', 'Herman Hollerith', 1),
(44, 44, '4.jpg', 'Mark I', 1),
(45, 45, '5.jpg', 'Mahabir Pun', 1),
(46, 46, '6.jpg', 'RJ 45', 1),
(47, 47, '7.jpg', 'Pascaline', 1),
(48, 48, '8.jpg', 'Transistor', 1),
(49, 49, '9.jpg', 'Logo of Avast Antivirus ', 1),
(50, 50, '10.jpg', 'Graphic Card', 1),
(51, 51, 'What is the full form of BCC?', 'Blind Carbon Copy', 1),
(52, 52, 'Who invented MARK – I?', 'Howard Aiken', 1),
(53, 53, 'Which was the first general purpose electronic digital computer?', 'UNIVAC-I', 1),
(54, 54, 'When was the third generation of computer started?', '1965', 1),
(55, 55, 'What is the purpose of shortcut key Ctrl + X?', 'Cut', 1),
(56, 56, 'What is the default extension of MS-ACCESS 2007?', '.accdb', 1),
(57, 57, 'Physical layout of LAN', 'Topology', 1),
(58, 58, 'What is the ASCII value of numeric ''0''?', '48', 1),
(59, 59, 'What is the full form of ANSI?', 'American National Standard Institute', 1),
(60, 60, 'One millionth of a second', 'Microsecond', 1),
(61, 61, 'When was the first microprocessor invented?', '1971', 1),
(62, 62, 'In which mode, data can flow in both directions but not at the same time.', 'Half-duplex', 1),
(63, 63, 'What is the purpose of shortcut key Alt+Tab in windows environment?', 'Switch between the application', 1),
(64, 64, 'What is the default extension of MS-PowerPoint?', '.ppt/pptx', 1),
(65, 65, 'What is the ASCII value  of small letter "E"?', '69', 1),
(66, 66, 'In which topology every node has point-to-point connection?', 'Mesh Topology', 1),
(67, 67, 'What is the full form of FAQ?', 'Frequently Asked Question', 1),
(68, 68, 'Who invented ANALYTICAL engine?', 'Charles Babbage', 1),
(69, 69, 'Which was the first mechanical calculator?', 'Pascaline', 1),
(70, 70, 'When was Slide rule invented?', '1620 AD', 1),
(71, 71, 'What is the shortcut key for copy?', 'Ctrl + C', 1),
(72, 72, 'What is the default file extention for MS-ACCESS 2003?', '.mdb', 1),
(73, 73, 'The protocol used for receiving emails', 'Post Office Protocols (POP)', 1),
(74, 74, 'What is the ASCII value for numeric 5?', '52', 1),
(75, 75, 'What is the full form of HTTPS?', 'Hyper Text Transfer Protocol Secured', 1),
(76, 76, 'When was IC chips invented?', '1958', 1),
(77, 77, 'Which was the first electro mechanical computer?', 'MARK-I', 1),
(78, 78, 'What is the purpose of shortcut key Ctrl + V?', 'Paste', 1),
(79, 79, 'What is the default extension of MS-word?', '.doc/.docx', 1),
(80, 80, 'What is the memory space occupied by memo data type in MS-ACCESS?', '65,536 characters', 1),
(81, 81, 'The protocol used for sending emails', 'SMTP', 1),
(82, 82, 'What is the ASCII value for small ‘d’', '100', 1),
(83, 83, 'What is the full form of TCP/IP?', 'Transmission Control Protcol /Internet Protocol', 1),
(84, 84, 'In which generation of computer magnetic tapes were used for the first time?', 'Second Generation', 1),
(85, 85, 'Which was the first operational stored program computer?', 'EDSAC', 1),
(86, 86, 'What is the purpose of shortcut key Ctrl + S?', 'Save', 1),
(87, 87, 'What is the default extension of MS-EXCEL?', '.xls/.xlsx', 1),
(88, 88, 'What is the memory space for currency data type in MS-ACCESS?', '8 Bytes', 1),
(89, 89, 'The protocol used for browsing internet', 'HTTP', 1),
(90, 90, 'What is the ASCII value of small letter ''e''?', '101', 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(300) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `qno`, `question`, `answer`, `flag`) VALUES
(12, 1, 'This is the test question 1?', 'test 1', 0),
(13, 2, 'This is the test question 2?', 'test 2', 0),
(14, 3, 'This is the test question 3?', 'test 3', 0),
(15, 4, 'This is the test question 4?', 'test 4', 0),
(16, 5, 'this is test question 5?', 'this is test answer 5', 0),
(17, 6, 'question6666', 'ans66666666', 0),
(18, 7, 'sdsddsdsasdsasdaassaa', 'sdsdssdasdsaadsaa', 0),
(19, 8, 'sdsddsdsasdsa', 'sdsdssdasdsaa', 0),
(20, 9, 'this is test question 9?', 'this is test answer 9', 0);

-- --------------------------------------------------------

--
-- Table structure for table `semifinalgame1`
--

CREATE TABLE IF NOT EXISTS `semifinalgame1` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semifinalgame1`
--

INSERT INTO `semifinalgame1` (`id`, `qno`, `question`, `answer`, `flag`) VALUES
(1, 1, 'semifinalgame11 question', 'semifinalgame11 answer', 1),
(2, 2, 'semifinalgame12 question', 'semifinalgame12 answer', 1),
(3, 3, 'semifinalgame13 question', 'semifinalgame13 answer', 0),
(4, 4, 'semifinalgame14 question', 'semifinalgame14 answer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `semifinalgame2`
--

CREATE TABLE IF NOT EXISTS `semifinalgame2` (
`id` int(4) NOT NULL,
  `qno` int(4) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(50) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semifinalgame2`
--

INSERT INTO `semifinalgame2` (`id`, `qno`, `question`, `answer`, `flag`) VALUES
(1, 1, 'semifinalgame21 question', 'semifinalgame21 answer', 1),
(2, 2, 'semifinalgame22 question', 'semifinalgame22 answer', 1),
(3, 3, 'semifinalgame23 question', 'semifinalgame23 answer', 1),
(4, 4, 'semifinalgame24 question', 'semifinalgame24 answer', 1),
(5, 5, 'its question no 5?', 'answer 5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tempdb`
--

CREATE TABLE IF NOT EXISTS `tempdb` (
`sn` smallint(2) NOT NULL,
  `qfrom` int(4) NOT NULL,
  `qto` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempdb`
--

INSERT INTO `tempdb` (`sn`, `qfrom`, `qto`) VALUES
(1, 20, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automaticreasoningusers`
--
ALTER TABLE `automaticreasoningusers`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `finalgame1`
--
ALTER TABLE `finalgame1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finalgame2`
--
ALTER TABLE `finalgame2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupdata`
--
ALTER TABLE `groupdata`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifyinggame1`
--
ALTER TABLE `qualifyinggame1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifyinggame2`
--
ALTER TABLE `qualifyinggame2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifyinggame3`
--
ALTER TABLE `qualifyinggame3`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifyinggame4`
--
ALTER TABLE `qualifyinggame4`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifyinggame5`
--
ALTER TABLE `qualifyinggame5`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifyinggame6`
--
ALTER TABLE `qualifyinggame6`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifyinggame7`
--
ALTER TABLE `qualifyinggame7`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifyinggame8`
--
ALTER TABLE `qualifyinggame8`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `question` (`question`), ADD UNIQUE KEY `qno` (`qno`), ADD UNIQUE KEY `question_2` (`question`), ADD UNIQUE KEY `question_3` (`question`), ADD UNIQUE KEY `question_4` (`question`);

--
-- Indexes for table `semifinalgame1`
--
ALTER TABLE `semifinalgame1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semifinalgame2`
--
ALTER TABLE `semifinalgame2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempdb`
--
ALTER TABLE `tempdb`
 ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finalgame1`
--
ALTER TABLE `finalgame1`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `finalgame2`
--
ALTER TABLE `finalgame2`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groupdata`
--
ALTER TABLE `groupdata`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `qualifyinggame1`
--
ALTER TABLE `qualifyinggame1`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `qualifyinggame2`
--
ALTER TABLE `qualifyinggame2`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `qualifyinggame3`
--
ALTER TABLE `qualifyinggame3`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `qualifyinggame4`
--
ALTER TABLE `qualifyinggame4`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qualifyinggame5`
--
ALTER TABLE `qualifyinggame5`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `qualifyinggame6`
--
ALTER TABLE `qualifyinggame6`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `qualifyinggame7`
--
ALTER TABLE `qualifyinggame7`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `qualifyinggame8`
--
ALTER TABLE `qualifyinggame8`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `semifinalgame1`
--
ALTER TABLE `semifinalgame1`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `semifinalgame2`
--
ALTER TABLE `semifinalgame2`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tempdb`
--
ALTER TABLE `tempdb`
MODIFY `sn` smallint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
