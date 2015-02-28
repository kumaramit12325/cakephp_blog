-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2015 at 03:51 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `password`, `image`, `created_date`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', '123456', '', '0000-00-00 00:00:00'),
(2, 'sid', 'sid', 'sid@gmail.com', '123456', '', '0000-00-00 00:00:00'),
(3, 'ff', 'kjkf', 'khkdshi@gmail.com', 'hdfuhdsf', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `api_users`
--

CREATE TABLE IF NOT EXISTS `api_users` (
  `id` decimal(21,0) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `link` varchar(60) NOT NULL,
  `picture_link` varchar(60) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api_users`
--

INSERT INTO `api_users` (`id`, `name`, `email`, `link`, `picture_link`, `created`) VALUES
('54', 'dff', 'fdfd', 'fd', 'fd', '2015-01-30 05:37:45'),
('104603245598604204292', 'gen rex', 'genrex10@gmail.com', 'https://plus.google.com/104603245598604204292', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A', '2015-02-08 06:34:56'),
('116885056557007079119', 'Amit Kumar', 'kumaramit12325@gmail.com', 'https://plus.google.com/116885056557007079119', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/A', '2015-01-31 11:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`category_id` int(11) NOT NULL,
  `categoryname` varchar(50) NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `categoryname`, `created_by`) VALUES
(53, 'History', '1'),
(56, 'HTML', '2'),
(62, 'Php', '2'),
(65, 'Yahoo', '1'),
(66, 'sd', '2'),
(67, 'sdds', '1'),
(68, 'ss', '1'),
(70, 'dds', '1'),
(81, 'jj', '116885056557007079119'),
(82, 'jhj', '116885056557007079119'),
(83, 'd', '1'),
(84, 'video', '104603245598604204292'),
(85, 'pic', '104603245598604204292');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `category_id` int(50) NOT NULL,
  `description` text NOT NULL,
  `create_by` varchar(50) NOT NULL,
  `Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category_id`, `description`, `create_by`, `Created`, `modified`) VALUES
(44, 'Introduction to HTML', 56, 'HTML is a markup language for describing web documents (web pages).\r\n\r\nHTML stands for Hyper Text Markup Language\r\nA markup language is a set of markup tags\r\nHTML documents are described by HTML tags\r\nEach HTML tag describes different document content''s', '2', '2015-01-26 17:13:46', '2015-01-25 07:05:01'),
(45, 'Types in HTML', 56, 'A type in HTML (as in many other languages), defines a set of rules which every value of this type must obey. We can say in other words that a value of certain type must obey the rules set by that type. For example, we can define a type named "digit" and say that every value of this type should be composed of a single number from 0 to 9. In this case, numbers like 49 dont belong to this type, as well as, among other values, letters.\r\n\r\nThese rules are necessary in HTML to set values to attributes. All attributes from all elements allow values from an HTML type.', '2', '2015-01-26 17:13:42', '2015-01-25 07:05:01'),
(49, 'Php introduction', 62, 'PHP started out as a small open source project that evolved as more and more people found out how useful it was. Rasmus Lerdorf unleashed the first version of PHP way back in 1994.\r\n\r\nPHP is a recursive acronym for "PHP: Hypertext Preprocessor".\r\n\r\nPHP is a server side scripting language that is embedded in HTML. It is used to manage dynamic content, databases, session tracking, even build entire e-commerce sites.\r\n\r\nIt is integrated with a number of popular databases, including MySQL, PostgreSQL, Oracle, Sybase, Informix, and Microsoft SQL Server.\r\n\r\nPHP is pleasingly zippy in its execution, especially when compiled as an Apache module on the Unix side. The MySQL server, once started, executes even very complex queries with huge result sets in record-setting time.\r\n\r\nPHP supports a large number of major protocols such as POP3, IMAP, and LDAP. PHP4 added support for Java and distributed object architectures (COM and CORBA), making n-tier development a possibility for the first time.\r\n\r\nPHP is forgiving: PHP language tries to be as forgiving as possible.\r\n\r\nPHP Syntax is C-Like.', '2', '2015-01-26 17:13:38', '2015-01-25 07:05:01'),
(50, 'Introducing PHP Classes', 62, 'Working with classes in PHP is a great way to streamline your code, and make it awesome. Classes or object oriented (OO) programming are sometimes seen as behemoths of satan, but actually theyre easy. Once you understand all the various levels of privacy, extensions and more recently magic methods. For the sake of simplification well be using PHP, and modelling a man and a woman as classes, with a few basic attributes of varying.', '2', '2015-01-26 17:13:34', '2015-01-25 07:05:01'),
(70, 'dfhgf', 65, 'fg', '1', '2015-01-26 17:13:31', '2015-01-25 07:05:01'),
(71, 'asfhh', 65, 'sdjldsg', '1', '2015-01-26 17:13:27', '2015-01-25 07:06:51'),
(105, '', 0, '', '1', '2015-01-26 17:51:02', '2015-01-26 17:51:02'),
(110, 'sdd', 56, 'dfsf', '2', '2015-01-26 18:28:45', '2015-01-26 18:28:45'),
(111, 'Amit', 65, 'sjfkljjf', '1', '2015-01-28 05:31:48', '2015-01-28 05:31:48'),
(112, 'jshdjhf', 65, 'kjjsdkgfjgdk', '1', '2015-01-28 05:32:11', '2015-01-28 05:32:11'),
(114, 'kasj', 65, 'sadakaf', '1', '2015-01-28 05:35:16', '2015-01-28 05:35:16'),
(116, 'apple', 53, 'mnfksfksfjhkfhksdfsdkhidghdihisd', '1', '2015-01-28 11:17:55', '2015-01-28 05:37:45'),
(117, 'sfdmf', 53, 'kxxvs', '1', '2015-01-28 10:58:47', '2015-01-28 05:38:13'),
(118, 'dds', 53, 'fdsjfsdkjdf', '1', '2015-01-28 10:54:51', '2015-01-28 05:39:36'),
(119, 'sfajafkkg', 65, 'dssdd,,sdf,jsfd', '1', '2015-01-28 10:40:54', '2015-01-28 08:14:31'),
(120, 'jsfdlkjfd', 53, 'jflsdjlfdg', '1', '2015-01-28 10:59:44', '2015-01-28 10:59:44'),
(121, 's', 53, 'dsd', '1', '2015-01-30 15:44:48', '2015-01-28 11:16:30'),
(123, 'mdvl', 81, 'mfdksf', '116885056557007079119', '2015-01-31 03:36:50', '2015-01-31 03:21:11'),
(124, 'fdjsj', 71, 'jjfds', '104603245598604204292', '2015-01-31 03:49:32', '2015-01-31 03:48:55'),
(125, 'sony', 78, ' sdfnfk', '104603245598604204292', '2015-01-31 03:49:57', '2015-01-31 03:49:11'),
(126, 'avi', 84, 'avi is best format', '104603245598604204292', '2015-01-31 05:57:59', '2015-01-31 05:57:59'),
(127, 'mkv', 84, 'Mkv is', '104603245598604204292', '2015-01-31 05:58:24', '2015-01-31 05:58:24'),
(128, 'jpeg', 85, 'jpeg is the best', '104603245598604204292', '2015-01-31 11:17:20', '2015-01-31 11:17:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `api_users`
--
ALTER TABLE `api_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
