-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2023 at 10:36 AM
-- Server version: 10.6.12-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teztnet_blogcraftedDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin_chat`
--

CREATE TABLE `Admin_chat` (
  `Id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `Subject` text DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Looking` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Admin_chat`
--

INSERT INTO `Admin_chat` (`Id`, `Name`, `email`, `Subject`, `Message`, `Date`, `Looking`) VALUES
(1, 'John Doe', 'johndoe@example.com', 'Inquiry about Product', 'Hello, I would like to inquire about your product offerings. Can you provide more information about pricing and availability?', '2023-06-25', 1),
(2, 'Jane Smith', 'janesmith@example.com', 'Technical Support', 'I am experiencing issues with your software. Can you please assist me in resolving the problem?', '2023-06-26', 1),
(3, 'David Brown', 'davidbrown@example.com', 'Order Status', 'I placed an order two weeks ago and it has not arrived yet. Can you provide an update on the status of my order?', '2023-06-27', 1),
(4, 'Emily Johnson', 'emilyjohnson@example.com', 'Feedback on Website Design', 'I really like the new website design. The layout is clean and user-friendly. Great job!', '2023-06-28', 1),
(5, 'Michael Wilson', 'michaelwilson@example.com', 'Product Return', 'I received a defective product and would like to initiate a return and get a refund. What is the process for returning the item?', '2023-06-29', 1),
(6, 'Randika Dilshan', 'rd118755@gmail.com', 'test', 'test', '2023-06-27', 0),
(7, 'Randika Dilshan', 'rd118755@gmail.com', 'dcsdc', 'sdcsdcs', '2023-06-27', 0),
(8, 'test', 'test@gmail.com', '1221', '2121', '2023-08-08', 1),
(9, 'test', 'test@gmail.com', 'testing', 'test .....', '2023-08-11', 1),
(10, '', '', '', '', '2023-09-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Admin_login`
--

CREATE TABLE `Admin_login` (
  `Id` int(11) NOT NULL,
  `Email` text DEFAULT NULL,
  `Password` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Admin_login`
--

INSERT INTO `Admin_login` (`Id`, `Email`, `Password`) VALUES
(1, 'admin@example.com', 'admin12qw12');

-- --------------------------------------------------------

--
-- Table structure for table `CreateProduct`
--

CREATE TABLE `CreateProduct` (
  `Id` int(11) NOT NULL,
  `Name` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `CreateProduct`
--

INSERT INTO `CreateProduct` (`Id`, `Name`) VALUES
(1, 'Application'),
(2, 'Web site'),
(3, 'Mobile App'),
(7, 'zzzzzzzsscscsc');

-- --------------------------------------------------------

--
-- Table structure for table `Detila`
--

CREATE TABLE `Detila` (
  `Id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `Role` text DEFAULT NULL,
  `AboutMe` text DEFAULT NULL,
  `Country` text DEFAULT NULL,
  `Profile_Pic` text DEFAULT NULL,
  `Bg_picture1` text DEFAULT NULL,
  `Bg_picture2` text DEFAULT NULL,
  `Skill_desc` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `Cv` text DEFAULT NULL,
  `hirebanner` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Detila`
--

INSERT INTO `Detila` (`Id`, `Name`, `Role`, `AboutMe`, `Country`, `Profile_Pic`, `Bg_picture1`, `Bg_picture2`, `Skill_desc`, `email`, `address`, `telephone`, `Cv`, `hirebanner`) VALUES
(1, 'navindu', 'Undergraduate student', 'I am Janith, currently in my second year at Sabaragamuwa University in Sri Lanka. My dedication extends to both academic pursuits and extracurricular activities, as I am committed to broadening my knowledge and experiences. Amidst my studies, I find solace and inspiration in music, which serves as both a source of relaxation and creativity for me. My American Bully is an integral part of my life, offering unwavering loyalty and companionship. With diverse interests and a strong focus on personal development, I take pride in making meaningful contributions to my university community. everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country.', 'Sri Lanka', '48325a5b0e5b1667_1691748791.jpeg', 'img_bg_1.jpg', 'b8c7f197c33e7110_1691748791.jpg', 'I am Janith, currently in my second year at Sabaragamuwa University in Sri Lanka. My dedication extends to both academic pursuits and extracurricular activities, as I am committed to broadening my knowledge and experiences. Amidst my studies, I find solace and inspiration in music, which serves as both a source of relaxation and creativity for me. My American Bully is an integral part of my life, offering unwavering loyalty and companionship. With diverse interests and a strong focus on personal development, I take pride in making meaningful contributions to my university community. everything that was left from its origin would be the word \"and\" and the Little Blind Text should turn around and return to its own, safe country.', 'charuthajanith@gmail.com', '123,testing,text', '+000000000', '\nBrown Creative Graphic Designer Resume .pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Education`
--

CREATE TABLE `Education` (
  `Id` int(11) NOT NULL,
  `Title` text DEFAULT NULL,
  `descriptions` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Education`
--

INSERT INTO `Education` (`Id`, `Title`, `descriptions`) VALUES
(1, 'Bachelor of Science in Computer Science', '<p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\n                                          <ul>\n                                             <li>Separated they live in Bookmarksgrove right</li>\n                                             <li>Separated they live in Bookmarksgrove right</li>\n                                          </ul>'),
(2, 'Master of Business Administration', '<p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\n                                          <ul>\n                                             <li>Separated they live in Bookmarksgrove right</li>\n                                             <li>Separated they live in Bookmarksgrove right</li>\n                                          </ul>'),
(3, 'Diploma in Graphic Design', '<p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>\n                                          <ul>\n                                             <li>Separated they live in Bookmarksgrove right</li>\n                                             <li>Separated they live in Bookmarksgrove right</li>\n                                          </ul>'),
(4, 'test 1', '<p><strong><u>hello </u></strong></p>'),
(5, 'test 1', '<ol><li>rasfasf</li><li>adsf</li><li>asf</li><li>asfa</li><li>s</li></ol>'),
(10, 'play', '<p><strong>scxsacascascasc</strong></p><ol><li><strong>ascasc</strong></li><li><strong>ascasc</strong></li></ol><p>ascsacsacccassc</p><h2>asc<strong>ascascscasc</strong></h2><ol><li>ascas</li></ol><ul><li><br></li></ul>'),
(8, 'test 1', '<p><strong>edit</strong></p><ol><li>test</li><li><strong>fgnhf</strong></li><li><strong>fgh</strong></li></ol><p><br></p>'),
(9, 'edit test 12', '<ol><li>fvsdfvdsfvdfv</li><li>dfv</li><li>dfv</li><li>12</li><li>12</li><li>121</li><li>2</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `Experience`
--

CREATE TABLE `Experience` (
  `Id` int(11) NOT NULL,
  `Title` text DEFAULT NULL,
  `Short_desc` text DEFAULT NULL,
  `Logo_svg` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Experience`
--

INSERT INTO `Experience` (`Id`, `Title`, `Short_desc`, `Logo_svg`) VALUES
(1, 'Software Engineer', 'Worked as a software engineer developing web applications.', '<svg>...</svg>'),
(2, 'Graphic Designer', 'Worked as a graphic designer creating visual designs and branding materials.', '<svg>...</svg>'),
(3, 'Project Manager', 'Managed various projects and coordinated teams to ensure successful delivery.', '<svg>...</svg>'),
(6, 'zx x x x csccscaxc', 'ascsacascewefwef', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `MyBlog`
--

CREATE TABLE `MyBlog` (
  `Id` int(11) NOT NULL,
  `Title` text DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `LikeCount` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `MyBlog`
--

INSERT INTO `MyBlog` (`Id`, `Title`, `Description`, `picture`, `date`, `LikeCount`) VALUES
(1, 'The Importance of Mindfulness in Daily Life', 'In today\'s fast-paced world, mindfulness has become an essential practice for maintaining balance and well-being. Mindfulness is the practice of paying attention to the present moment, without judgment. It involves observing our thoughts, feelings, and sensations with an attitude of curiosity and acceptance. By cultivating mindfulness, we can reduce stress, enhance our mental clarity, and improve our overall quality of life. This blog post explores the various benefits of mindfulness in daily life, including improved focus, emotional regulation, and better relationships. It also provides practical tips and techniques for incorporating mindfulness into our busy routines. Whether it\'s through meditation, mindful breathing exercises, or simply taking moments to pause and be fully present, mindfulness offers us the opportunity to live more fully and authentically. Embracing mindfulness can lead to greater self-awareness, resilience, and a deeper sense of inner peace. Start your mindfulness journey today and experience the transformative power it can have on your well-being.', 'blog-1.jpg', '2023-06-25', '15'),
(2, 'The Art of Effective Communication', 'Effective communication is a cornerstone of success in both personal and professional relationships. This blog post explores the key elements of effective communication, including active listening, clear articulation, and empathy. It delves into the importance of understanding nonverbal cues and adapting communication styles to different audiences. The post also provides practical tips for improving communication skills, such as practicing self-awareness, using positive language, and fostering open dialogue. By honing your communication skills, you can enhance your ability to express yourself, build stronger connections, and resolve conflicts more effectively. Whether it\'s in the workplace, social settings, or within your family, effective communication is a skill worth developing. Discover the power of effective communication and unlock new possibilities in your personal and professional life.', 'blog-2.jpg', '2023-06-27', '10'),
(3, 'The Benefits of Regular Exercise', 'Regular exercise is not only essential for physical health but also has profound effects on mental and emotional well-being. This blog post highlights the numerous benefits of incorporating exercise into your daily routine. From improved cardiovascular health and increased strength to enhanced mood and reduced stress, exercise offers a wide range of advantages. It explores different types of exercises, including cardio, strength training, and flexibility exercises, and provides practical tips for starting and maintaining an exercise routine. Whether it\'s going for a jog, hitting the gym, or engaging in a fun group fitness class, find an activity that you enjoy and make exercise a regular part of your life. Embrace the transformative power of exercise and experience the positive impact it can have on your overall well-being.', 'blog-3.jpg', '2023-06-30', '20'),
(4, 'Unlocking Creativity: Embracing the Creative Process', 'Creativity is a powerful force that resides within each of us. This blog post explores the creative process and how to tap into your innate creativity. It delves into the importance of curiosity, imagination, and embracing failure as a stepping stone to success. Discover techniques to overcome creative blocks, nurture inspiration, and develop a creative mindset. From engaging in brainstorming sessions to exploring different mediums and taking risks, you can unlock your creative potential and bring innovative ideas to life. Whether you are an artist, writer, entrepreneur, or simply someone looking to infuse more creativity into your everyday life, this post offers insights and practical strategies to ignite your imagination and cultivate a lifelong relationship with creativity.', 'blog-1.jpg', '2023-07-05', '12'),
(5, 'Navigating Change: Embracing Growth and Resilience', 'Change is an inevitable part of life, and how we navigate it can greatly impact our personal and professional growth. This blog post explores the process of embracing change, cultivating resilience, and finding opportunities for growth in times of uncertainty. It discusses the importance of adaptability, positive mindset, and self-care during periods of change. Discover strategies for overcoming fear, embracing new challenges, and developing a growth-oriented perspective. By developing resilience and embracing change as a catalyst for personal development, you can navigate life\'s transitions with confidence and emerge stronger on the other side. Embrace change, embrace growth, and embrace the possibilities that lie ahead.', 'blog-2.jpg', '2023-07-10', '18'),
(10, 'ergergem edit img 2', '<h1><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">(scereen recording) explaining how the application works.</strong></h1><p><br></p><p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">You must navigate around your application, display each page, and use voice over to explain each page\'s purpose as well as any modifications you plan to make to it.</strong></p><p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">Language of use -</strong><strong style=\"color: rgb(17, 85, 204); background-color: transparent;\"> </strong><strong style=\"color: rgb(0, 255, 255); background-color: transparent;\">English</strong></p><p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">Upload tehe file to your google drive and submit the link.</strong></p><p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">The video file must be named \"[Team Name]_Video_Prototype\".&nbsp;</strong></p><p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">Submit on or before the </strong><strong style=\"color: rgb(0, 255, 255); background-color: transparent;\">10th of August, 2023.</strong></p><p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">The submission link will be provided later.</strong></p><p><br></p>', '2415435f41955bb8_1690944749.png', '2023-08-01', NULL),
(9, 'test 2', '<p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">Upload a video (screen recording) explaining how the application works.</strong></p><p><br></p><p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">You must navigate around your application, display each page, and use voice over to explain each page\'s purpose as well as any modifications you plan to make to it.</strong></p><p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">Language of use -</strong><strong style=\"color: rgb(17, 85, 204); background-color: transparent;\"> </strong><strong style=\"color: rgb(0, 255, 255); background-color: transparent;\">English</strong></p><p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">Upload the file to your google drive and submit the link.</strong></p><p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">The video file must be named \"[Team Name]_Video_Prototype\".&nbsp;</strong></p><p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">Submit on or before the </strong><strong style=\"color: rgb(0, 255, 255); background-color: transparent;\">10th of August, 2023.</strong></p><p><strong style=\"color: rgb(255, 255, 255); background-color: transparent;\">The submission link will be provided later.</strong></p><p><br></p>', 'cd603844e3e60741_1690943719.png', '2023-08-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `MyWork`
--

CREATE TABLE `MyWork` (
  `Id` int(11) NOT NULL,
  `Title` text DEFAULT NULL,
  `type` text DEFAULT NULL,
  `picture` text DEFAULT NULL,
  `LikeCount` text DEFAULT NULL,
  `sampleLink` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `MyWork`
--

INSERT INTO `MyWork` (`Id`, `Title`, `type`, `picture`, `LikeCount`, `sampleLink`) VALUES
(1, 'Project A', 'Web Development', 'img-1.jpg', '10', 'https://blogcrafted.live'),
(2, 'Project B', 'Graphic Design', 'img-2.jpg', '5', 'https://blogcrafted.live'),
(3, 'Project C', 'Mobile App Development', 'img-3.jpg', '8', 'https://blogcrafted.live'),
(7, 'test ', 'click', 'b1daeae2d3272ac4_1691512646.jpeg', NULL, 'https://blogcrafted.live/'),
(5, 'test edit 1', 'testr2  edit 1', 'be5905cb766a4f18_1691512078.jpg', NULL, 'https://blogcrafted.live/admin222222/static/addrecentwork.php1'),
(8, 'test 2', 'wef', 'e49d884fbabd6be8_1691512753.jpeg', NULL, 'https://blogcrafted.live/'),
(9, 'efwe', '3efrw', '20f3ce8aecbb8377_1691512824.jpeg', NULL, 'https://blogcrafted.live/'),
(10, 'jankcro', 'sdv', '9e0a4728dbb643e0_1691593837.jpg', NULL, 'sdv');

-- --------------------------------------------------------

--
-- Table structure for table `Project_count`
--

CREATE TABLE `Project_count` (
  `Id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `count` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Project_count`
--

INSERT INTO `Project_count` (`Id`, `name`, `count`) VALUES
(1, 'Clients', '10'),
(2, 'Partners', '5'),
(3, 'Projects', '8'),
(6, 'edit', '1');

-- --------------------------------------------------------

--
-- Table structure for table `Skill`
--

CREATE TABLE `Skill` (
  `Id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `color` text DEFAULT NULL,
  `percentage` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Skill`
--

INSERT INTO `Skill` (`Id`, `name`, `color`, `percentage`) VALUES
(1, 'JavaScript', '#F7DF1E', '80'),
(2, 'Python', '#3776AB', '70'),
(3, 'HTML', '#E34C26', '90'),
(13, 'b', '#dc2e2e', '74'),
(12, 'a', '#000000', '74');

-- --------------------------------------------------------

--
-- Table structure for table `Views`
--

CREATE TABLE `Views` (
  `Id` int(11) NOT NULL,
  `IpAddress` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `Views`
--

INSERT INTO `Views` (`Id`, `IpAddress`) VALUES
(1, '203.0.113.4'),
(2, '195.20.17.47'),
(3, '175.157.123.126'),
(4, '146.190.107.98'),
(5, '14.29.206.197'),
(6, '209.170.91.202'),
(7, '14.29.200.97'),
(8, '14.116.150.68'),
(9, '52.167.144.105'),
(10, '65.108.148.98'),
(11, '135.148.195.14'),
(12, '52.89.229.117'),
(13, '54.213.211.86'),
(14, '35.93.55.98'),
(15, '54.190.7.117'),
(16, '182.43.148.98'),
(17, '14.29.231.137'),
(18, '113.125.51.198'),
(19, '137.184.224.163'),
(20, '178.62.218.27'),
(21, '46.101.89.188'),
(22, '146.190.115.205'),
(23, '143.244.187.25'),
(24, '161.35.39.103'),
(25, '177.124.229.8'),
(26, '14.29.176.211'),
(27, '161.35.151.77'),
(28, '14.29.182.82'),
(29, '35.171.144.152'),
(30, '54.88.179.33'),
(31, '146.190.146.134'),
(32, '14.116.184.240'),
(33, '117.33.227.207'),
(34, '14.116.157.23'),
(35, '223.240.99.104'),
(36, '106.75.138.76'),
(37, '106.75.128.142'),
(38, '27.115.124.109'),
(39, '106.75.166.184'),
(40, '123.6.49.41'),
(41, '123.6.49.15'),
(42, '171.13.14.39'),
(43, '171.13.14.75'),
(44, '122.9.64.15'),
(45, '205.169.39.249'),
(46, '42.51.60.53'),
(47, '14.29.181.90'),
(48, '191.101.31.117'),
(49, '14.116.152.84'),
(50, '35.91.42.110'),
(51, '34.220.107.234'),
(52, '34.215.98.48'),
(53, '35.91.195.30'),
(54, '35.90.55.144'),
(55, '35.91.237.101'),
(56, '34.219.250.75'),
(57, '54.214.196.185'),
(58, '165.232.151.16'),
(59, '14.116.152.103'),
(60, '223.247.179.42'),
(61, '52.232.70.158'),
(62, '14.29.231.172'),
(63, '54.200.144.246'),
(64, '34.219.138.86'),
(65, '54.214.206.119'),
(66, '35.87.200.253'),
(67, '93.158.91.254'),
(68, '66.249.72.5'),
(69, '178.254.29.124'),
(70, '146.190.106.197'),
(71, '34.227.161.132'),
(72, '24.199.100.169'),
(73, '165.22.237.30'),
(74, '140.246.136.252'),
(75, '161.35.39.76'),
(76, '42.83.147.56'),
(77, '38.122.112.147'),
(78, '135.148.195.7'),
(79, '64.225.107.62'),
(80, '114.107.225.150'),
(81, '2.59.254.190'),
(82, '18.236.239.86'),
(83, '34.220.127.165'),
(84, '146.190.87.238'),
(85, '59.36.175.46'),
(86, '188.166.214.4'),
(87, '44.227.127.2'),
(88, '157.55.39.208'),
(89, '54.189.230.128'),
(90, '107.175.159.14'),
(91, '142.93.65.9'),
(92, '113.142.141.105'),
(93, '199.244.88.225'),
(94, '14.116.184.143'),
(95, '199.244.88.222'),
(96, '34.214.207.203'),
(97, '35.86.170.100'),
(98, '34.209.36.118'),
(99, '54.190.4.220'),
(100, '34.214.57.101'),
(101, '35.87.219.21'),
(102, '223.247.178.167'),
(103, '146.190.106.128'),
(104, '69.160.160.56'),
(105, '14.29.246.47'),
(106, '95.217.223.61'),
(107, '54.184.243.25'),
(108, '34.221.128.146'),
(109, '34.216.221.197'),
(110, '34.211.46.189'),
(111, '54.188.193.1'),
(112, '34.210.252.152'),
(113, '95.217.130.175'),
(114, '24.199.117.159'),
(115, '192.46.227.185'),
(116, '138.197.144.104'),
(117, '40.77.167.167'),
(118, '35.183.97.229'),
(119, '107.178.207.11'),
(120, '107.178.205.92'),
(121, '107.178.207.18'),
(122, '223.240.101.111'),
(123, '113.142.131.55'),
(124, '34.247.173.102'),
(125, '135.148.195.5'),
(126, '167.94.145.53'),
(127, '5.133.192.133'),
(128, '167.94.145.59'),
(129, '14.116.158.108'),
(130, '66.249.64.44'),
(131, '66.249.64.43'),
(132, '93.158.90.53'),
(133, '34.208.99.224'),
(134, '164.92.158.98'),
(135, '40.77.167.241'),
(136, '52.167.144.125'),
(137, '165.227.214.203'),
(138, '54.200.35.162'),
(139, '52.24.225.194'),
(140, '54.190.202.11'),
(141, '54.214.113.108'),
(142, '128.90.128.165'),
(143, '42.83.147.54'),
(144, '157.230.117.110'),
(145, '66.220.149.118'),
(146, '66.220.149.6'),
(147, '66.220.149.12'),
(148, '31.13.127.20'),
(149, '66.220.149.20'),
(150, '66.220.149.5'),
(151, '173.252.127.22'),
(152, '88.203.112.145'),
(153, '31.13.103.8'),
(154, '69.63.184.3'),
(155, '175.157.85.172'),
(156, '69.171.249.113'),
(157, '69.171.249.111'),
(158, '69.171.249.116'),
(159, '123.231.125.92'),
(160, '52.26.190.156'),
(161, '54.202.63.11'),
(162, '34.222.64.168'),
(163, '157.245.43.38'),
(164, '149.154.161.213'),
(165, '13.215.59.107'),
(166, '185.220.100.246'),
(167, '199.244.88.231'),
(168, '205.169.39.87'),
(169, '69.171.249.2'),
(170, '135.148.195.6'),
(171, '87.236.176.106'),
(172, '161.97.166.106'),
(173, '191.102.130.243'),
(174, '34.212.105.37'),
(175, '52.41.73.212'),
(176, '146.190.238.240'),
(177, '31.13.127.14'),
(178, '31.13.103.1'),
(179, '66.220.149.14'),
(180, '69.171.249.4'),
(181, '173.252.127.116'),
(182, '69.171.230.10'),
(183, '173.252.95.8'),
(184, '69.63.184.1'),
(185, '165.227.81.137'),
(186, '87.236.176.80'),
(187, '31.13.127.17'),
(188, '31.13.127.1'),
(189, '31.13.127.4'),
(190, '31.13.127.9'),
(191, '31.13.127.12'),
(192, '173.252.83.120'),
(193, '173.252.87.3'),
(194, '31.13.127.3'),
(195, '69.171.231.5'),
(196, '31.13.127.118'),
(197, '31.13.127.10'),
(198, '31.13.115.117'),
(199, '31.13.103.113'),
(200, '31.13.103.5'),
(201, '31.13.103.6'),
(202, '69.171.249.1'),
(203, '173.252.79.8'),
(204, '173.252.79.118'),
(205, '31.13.127.18'),
(206, '31.13.127.2'),
(207, '173.252.79.116'),
(208, '173.252.127.14'),
(209, '65.154.226.169'),
(210, '205.169.39.127'),
(211, '173.252.107.117'),
(212, '173.252.79.9'),
(213, '66.249.64.11'),
(214, '173.252.87.6'),
(215, '173.252.111.119'),
(216, '69.171.231.7'),
(217, '173.252.79.7'),
(218, '69.171.249.8'),
(219, '173.252.111.7'),
(220, '69.171.251.9'),
(221, '69.171.231.1'),
(222, '173.252.79.119'),
(223, '173.252.107.9'),
(224, '69.63.189.2'),
(225, '69.171.231.6'),
(226, '34.76.164.152'),
(227, '31.13.103.4'),
(228, '69.171.251.13'),
(229, '69.171.249.118'),
(230, '173.252.111.8'),
(231, '173.252.127.15'),
(232, '31.13.115.119'),
(233, '173.252.95.3'),
(234, '40.77.167.177'),
(235, '69.171.249.6'),
(236, '34.209.29.182'),
(237, '52.10.180.78'),
(238, '35.91.76.21'),
(239, '52.12.43.139'),
(240, '54.214.84.241'),
(241, '35.90.166.24'),
(242, '135.148.195.8'),
(243, '167.94.145.58'),
(244, '66.249.64.206'),
(245, '24.199.111.4'),
(246, '69.171.251.16'),
(247, '31.13.127.120'),
(248, '205.169.39.102'),
(249, '65.154.226.168'),
(250, '173.252.111.116'),
(251, '173.252.83.6'),
(252, '108.181.22.219'),
(253, '144.126.201.49'),
(254, '173.252.87.11'),
(255, '173.252.79.1'),
(256, '31.13.127.6'),
(257, '31.13.103.120'),
(258, '31.13.103.3'),
(259, '173.252.111.4'),
(260, '143.110.166.82'),
(261, '44.193.220.153'),
(262, '173.252.107.119'),
(263, '173.252.95.18'),
(264, '69.171.249.9'),
(265, '173.252.87.116'),
(266, '69.63.189.10'),
(267, '69.171.251.2'),
(268, '52.167.144.90'),
(269, '173.252.95.1'),
(270, '173.252.95.5'),
(271, '173.252.95.19'),
(272, '54.200.100.114'),
(273, '34.218.230.107'),
(274, '35.164.236.221'),
(275, '54.201.193.25'),
(276, '114.29.237.39'),
(277, '45.55.69.76'),
(278, '72.13.46.2'),
(279, '146.190.236.166'),
(280, '135.148.195.4'),
(281, '205.169.39.154'),
(282, '112.135.70.11'),
(283, '66.249.66.5'),
(284, '66.249.66.11'),
(285, '66.249.66.73'),
(286, '165.232.37.58'),
(287, '52.167.144.170'),
(288, '66.249.66.161'),
(289, '66.249.66.70'),
(290, '66.249.66.69'),
(291, '205.169.39.148'),
(292, '205.169.39.225'),
(293, '66.249.66.200'),
(294, '111.223.179.123'),
(295, '109.234.35.41'),
(296, '62.141.44.236'),
(297, '52.167.144.109'),
(298, '167.94.146.56'),
(299, '167.94.146.57'),
(300, '107.173.183.188'),
(301, '52.167.144.75'),
(302, '94.247.172.129'),
(303, '35.167.84.157'),
(304, '34.210.167.50'),
(305, '34.222.212.215'),
(306, '54.202.78.58'),
(307, '128.199.52.163'),
(308, '14.116.156.77'),
(309, '69.171.249.5'),
(310, '69.171.251.117'),
(311, '45.8.17.90'),
(312, '167.94.146.60'),
(313, '34.219.1.3'),
(314, '35.90.56.21'),
(315, '35.88.145.166'),
(316, '54.68.152.135'),
(317, '52.39.155.111'),
(318, '52.41.180.26'),
(319, '172.245.58.253'),
(320, '52.167.144.238'),
(321, '14.29.223.121'),
(322, '207.241.229.48'),
(323, '185.225.191.43'),
(324, '34.219.40.78'),
(325, '135.148.226.26'),
(326, '69.171.230.8'),
(327, '69.171.230.120'),
(328, '69.171.230.119'),
(329, '165.232.184.198'),
(330, '209.38.253.63'),
(331, '157.245.216.203'),
(332, '165.22.39.64'),
(333, '50.116.58.205'),
(334, '158.69.247.77'),
(335, '167.99.194.6'),
(336, '35.91.169.190'),
(337, '54.186.218.102'),
(338, '34.221.100.87'),
(339, '54.214.116.82'),
(340, '164.92.103.153'),
(341, '154.28.229.135'),
(342, '154.28.229.26'),
(343, '51.81.245.138'),
(344, '51.81.167.146'),
(345, '159.69.91.132'),
(346, '198.54.130.121'),
(347, '146.70.188.149'),
(348, '37.19.210.25'),
(349, '216.131.114.6'),
(350, '45.133.172.97'),
(351, '191.101.31.56'),
(352, '45.87.212.58'),
(353, '46.246.122.50'),
(354, '104.129.56.104'),
(355, '82.132.212.173'),
(356, '194.110.115.69'),
(357, '173.245.203.4'),
(358, '104.164.173.92'),
(359, '154.28.229.177'),
(360, '192.46.186.183'),
(361, '39.110.218.101'),
(362, '35.90.18.55'),
(363, '35.89.126.117'),
(364, '54.202.164.45'),
(365, '34.211.46.193'),
(366, '34.221.226.43'),
(367, '35.93.45.166'),
(368, '138.199.18.148'),
(369, '51.178.81.195'),
(370, '94.46.220.96'),
(371, '66.115.176.26'),
(372, '3.70.96.26'),
(373, '206.189.247.132'),
(374, '191.101.31.19'),
(375, '198.12.64.40'),
(376, '178.208.176.89'),
(377, '93.119.227.91'),
(378, '205.169.39.155'),
(379, '205.169.39.108'),
(380, '69.4.87.74'),
(381, '65.154.226.171'),
(382, '3.76.80.238'),
(383, '47.242.224.70'),
(384, '149.56.150.199'),
(385, '144.217.135.136'),
(386, '138.68.184.93'),
(387, '159.223.239.130'),
(388, '47.89.195.210'),
(389, '47.89.193.162'),
(390, '47.251.11.3'),
(391, '47.89.193.239'),
(392, '47.88.78.6'),
(393, '40.77.167.18'),
(394, '152.228.213.76'),
(395, '40.77.167.30'),
(396, '52.167.144.208'),
(397, '54.190.228.9'),
(398, '35.88.132.51'),
(399, '68.183.82.23'),
(400, '15.204.182.106'),
(401, '128.199.102.31'),
(402, '57.128.65.130'),
(403, '139.59.41.161'),
(404, '40.77.167.50'),
(405, '167.94.146.59'),
(406, '207.46.13.207'),
(407, '74.85.209.191'),
(408, '185.181.60.189'),
(409, '138.197.162.29'),
(410, '167.172.145.182'),
(411, '104.248.236.218'),
(412, '40.77.167.247'),
(413, '46.4.33.48'),
(414, '35.87.111.28'),
(415, '144.172.72.42'),
(416, '93.158.90.65'),
(417, '66.249.66.17'),
(418, '66.249.66.165'),
(419, '66.249.66.44'),
(420, '66.249.66.207'),
(421, '40.77.167.51'),
(422, '54.202.146.11'),
(423, '34.222.166.243'),
(424, '40.77.167.59'),
(425, '62.210.88.174'),
(426, '199.244.88.218'),
(427, '51.159.157.100'),
(428, '18.236.67.72'),
(429, '34.219.247.21'),
(430, '67.207.80.54'),
(431, '40.77.167.47'),
(432, '142.54.169.133'),
(433, '93.158.91.11'),
(434, '66.249.66.20'),
(435, '44.236.207.248'),
(436, '188.165.87.108'),
(437, '188.165.87.111'),
(438, '188.165.87.97'),
(439, '188.165.87.102'),
(440, '188.165.87.107'),
(441, '144.91.95.177'),
(442, '51.254.49.100'),
(443, '69.171.249.11'),
(444, '157.55.39.239'),
(445, '207.180.201.25'),
(446, '54.186.205.232'),
(447, '54.244.56.170'),
(448, '159.203.170.113'),
(449, '66.249.66.22'),
(450, '135.148.195.13'),
(451, '35.206.153.39'),
(452, '51.75.133.70'),
(453, '149.100.154.15'),
(454, '142.54.169.131'),
(455, '35.90.229.155'),
(456, '34.222.18.233'),
(457, '18.237.45.129'),
(458, '54.188.238.200'),
(459, '34.222.149.41'),
(460, '54.186.59.58'),
(461, '35.164.13.112'),
(462, '111.223.180.133'),
(463, '35.87.181.120'),
(464, '35.161.26.204'),
(465, '35.166.39.112'),
(466, '143.198.22.157'),
(467, '52.27.122.121'),
(468, '35.92.146.66'),
(469, '34.213.118.93'),
(470, '54.148.255.149'),
(471, '51.159.214.65'),
(472, '93.158.91.243'),
(473, '128.90.129.156'),
(474, '178.62.74.6'),
(475, '199.244.88.229'),
(476, '40.77.167.9'),
(477, '52.33.215.105'),
(478, '66.249.66.18'),
(479, '159.89.224.26'),
(480, '40.77.167.61'),
(481, '138.197.159.184'),
(482, '185.41.152.240'),
(483, '143.244.142.237'),
(484, '146.190.118.40'),
(485, '223.224.16.152'),
(486, '104.248.204.195'),
(487, '35.90.127.40'),
(488, '34.219.93.223'),
(489, '34.212.140.218'),
(490, '35.163.89.143'),
(491, '157.245.208.249'),
(492, '63.34.28.143'),
(493, '46.101.101.138'),
(494, '138.197.133.252'),
(495, '146.190.237.4'),
(496, '142.93.100.136'),
(497, '138.197.137.4'),
(498, '40.77.167.255'),
(499, '159.89.28.224'),
(500, '40.77.167.84'),
(501, '146.190.134.222'),
(502, '146.190.229.85'),
(503, '45.139.54.82'),
(504, '66.249.66.9'),
(505, '66.249.66.10'),
(506, '40.77.167.26'),
(507, '93.158.91.13'),
(508, '130.255.166.80'),
(509, '54.213.59.113'),
(510, '54.200.111.195'),
(511, '34.221.180.27'),
(512, '54.201.35.22'),
(513, '52.40.35.47'),
(514, '34.217.213.74'),
(515, '164.92.154.50'),
(516, '40.77.167.107'),
(517, '135.148.195.15'),
(518, '89.149.87.86'),
(519, '16.170.201.111'),
(520, '35.90.95.51'),
(521, '35.89.131.224'),
(522, '34.212.173.200'),
(523, '54.190.54.95'),
(524, '54.202.221.34'),
(525, '54.188.34.108'),
(526, '69.171.231.118'),
(527, '40.77.167.64'),
(528, '205.169.39.117'),
(529, '40.77.167.10'),
(530, '18.222.212.101'),
(531, '40.77.167.48'),
(532, '34.222.92.91'),
(533, '34.219.153.129'),
(534, '34.215.156.73'),
(535, '34.217.114.248'),
(536, '167.71.229.90'),
(537, '87.236.176.107'),
(538, '52.167.144.151'),
(539, '167.71.172.151'),
(540, '138.197.129.187'),
(541, '167.99.94.234'),
(542, '185.160.0.3'),
(543, '52.42.215.145'),
(544, '34.208.17.245'),
(545, '54.200.111.94'),
(546, '34.221.27.40'),
(547, '40.77.167.152'),
(548, '40.77.167.142'),
(549, '62.210.90.212'),
(550, '65.154.226.167'),
(551, '35.92.30.129'),
(552, '35.166.71.168'),
(553, '54.212.20.132'),
(554, '35.91.27.129'),
(555, '134.122.37.135'),
(556, '199.244.88.230'),
(557, '40.77.167.158'),
(558, '66.249.66.2'),
(559, '66.249.66.23'),
(560, '52.167.144.153'),
(561, '135.148.195.11'),
(562, '167.71.164.68'),
(563, '146.190.152.130'),
(564, '143.198.84.201'),
(565, '162.251.146.82'),
(566, '205.169.39.173'),
(567, '66.249.64.13'),
(568, '66.249.64.14'),
(569, '54.212.35.80'),
(570, '54.70.204.222'),
(571, '34.213.51.52'),
(572, '35.89.172.79'),
(573, '146.190.159.223'),
(574, '192.36.109.129'),
(575, '207.46.13.54'),
(576, '207.46.13.86'),
(577, '52.167.144.165'),
(578, '35.163.156.199'),
(579, '35.91.145.100'),
(580, '35.163.87.175'),
(581, '35.93.67.158'),
(582, '54.245.64.129'),
(583, '52.25.215.50'),
(584, '8.209.217.55'),
(585, '66.249.66.1'),
(586, '204.101.161.19'),
(587, '40.77.167.38'),
(588, '52.12.88.3'),
(589, '54.213.227.221'),
(590, '159.223.213.73'),
(591, '67.205.150.239'),
(592, '173.252.83.117'),
(593, '31.13.103.116'),
(594, '40.77.167.63'),
(595, '34.209.152.15'),
(596, '35.90.89.177'),
(597, '54.185.116.235'),
(598, '34.220.220.108'),
(599, '138.197.152.201'),
(600, '40.77.167.28'),
(601, '193.32.87.42'),
(602, '86.160.2.198'),
(603, '35.91.143.105'),
(604, '54.191.75.147'),
(605, '54.144.245.145'),
(606, '3.91.35.99'),
(607, '5.133.192.168'),
(608, '54.167.51.226'),
(609, '80.255.7.41'),
(610, '138.68.90.157'),
(611, '157.55.39.12'),
(612, '35.167.163.53'),
(613, '40.77.167.65'),
(614, '116.203.200.83'),
(615, '194.9.191.20'),
(616, '40.77.167.224'),
(617, '84.246.85.11'),
(618, '173.252.87.5'),
(619, '157.55.39.49'),
(620, '212.102.51.228'),
(621, '40.77.167.69'),
(622, '34.212.175.101'),
(623, '35.90.142.12'),
(624, '165.227.42.119'),
(625, '8.41.221.63'),
(626, '66.249.66.6'),
(627, '66.249.66.7'),
(628, '178.159.37.156'),
(629, '66.249.66.16'),
(630, '192.36.109.98'),
(631, '159.65.145.133'),
(632, '40.77.167.3'),
(633, '3.143.220.59'),
(634, '157.55.39.51'),
(635, '35.93.34.121'),
(636, '54.185.132.45'),
(637, '34.222.250.2'),
(638, '54.202.221.213'),
(639, '31.13.127.11'),
(640, '207.46.13.154'),
(641, '131.153.240.178'),
(642, '131.153.143.50'),
(643, '131.153.142.170'),
(644, '34.213.51.10'),
(645, '54.190.111.162'),
(646, '35.90.158.92'),
(647, '35.87.145.251'),
(648, '35.92.236.106'),
(649, '34.221.65.125'),
(650, '35.89.75.118'),
(651, '52.42.214.106'),
(652, '54.200.237.176'),
(653, '35.164.58.94'),
(654, '159.223.218.126'),
(655, '149.56.150.183'),
(656, '149.56.150.102'),
(657, '87.236.176.47'),
(658, '135.148.195.12'),
(659, '40.77.167.24'),
(660, '52.55.154.111'),
(661, '40.77.167.230'),
(662, '87.236.176.14'),
(663, '118.136.215.82'),
(664, '54.218.88.201'),
(665, '54.200.166.163'),
(666, '34.222.15.158'),
(667, '24.199.117.113'),
(668, '40.77.167.136'),
(669, '40.77.167.8'),
(670, '35.90.90.188'),
(671, '34.220.77.189'),
(672, '35.92.91.154'),
(673, '54.244.15.89'),
(674, '177.124.229.5'),
(675, '52.167.144.19'),
(676, '223.224.13.229'),
(677, '45.12.3.13'),
(678, '40.77.167.6'),
(679, '64.227.129.29'),
(680, '40.77.167.22'),
(681, '192.36.109.115'),
(682, '62.216.78.203'),
(683, '204.217.214.142'),
(684, '52.167.144.204'),
(685, '172.234.17.229'),
(686, '52.167.144.221'),
(687, '196.247.46.111'),
(688, '192.210.147.13'),
(689, '173.252.107.8'),
(690, '66.249.64.42'),
(691, '86.168.198.114'),
(692, '154.12.225.169'),
(693, '52.13.44.137'),
(694, '54.191.130.77'),
(695, '54.212.17.155'),
(696, '35.92.233.99'),
(697, '54.198.205.242'),
(698, '40.77.167.70'),
(699, '52.36.46.248'),
(700, '35.162.210.203'),
(701, '52.43.123.217'),
(702, '54.184.234.75'),
(703, '54.191.252.57'),
(704, '52.39.133.211'),
(705, '35.89.210.16'),
(706, '157.55.39.15'),
(707, '165.232.86.45'),
(708, '85.215.178.238'),
(709, '172.172.118.136'),
(710, '52.167.144.216'),
(711, '157.55.39.54'),
(712, '165.232.143.109'),
(713, '165.232.144.144'),
(714, '162.241.63.11'),
(715, '164.92.89.183'),
(716, '34.250.178.144'),
(717, '66.249.64.12'),
(718, '31.13.127.19'),
(719, '35.239.157.242'),
(720, '130.255.166.97'),
(721, '17.241.227.192'),
(722, '40.77.167.243'),
(723, '149.34.252.59'),
(724, '209.97.180.9'),
(725, '137.184.26.111'),
(726, '207.46.13.92'),
(727, '18.236.173.53'),
(728, '54.37.237.164'),
(729, '66.249.64.5'),
(730, '66.249.64.196'),
(731, '66.249.64.197'),
(732, '66.249.64.204'),
(733, '66.249.64.6'),
(734, '54.210.113.41'),
(735, '207.46.13.141'),
(736, '34.70.1.206'),
(737, '52.167.144.168'),
(738, '157.245.121.128'),
(739, '74.249.58.241'),
(740, '35.87.254.5'),
(741, '35.212.135.45'),
(742, '157.55.39.48'),
(743, '175.157.101.175'),
(744, '223.224.25.175'),
(745, '34.86.239.201'),
(746, '175.157.253.139'),
(747, '175.157.170.217'),
(748, '223.224.2.194'),
(749, '207.46.13.155'),
(750, '34.79.214.243'),
(751, '34.79.214.243'),
(752, '31.13.103.2'),
(753, '173.252.83.10'),
(754, '93.158.70.111'),
(755, '52.167.144.171'),
(756, '34.246.172.122'),
(757, '50.116.32.238'),
(758, '52.167.144.23'),
(759, '143.198.126.240'),
(760, '3.137.203.71'),
(761, '52.167.144.161'),
(762, '199.244.88.223'),
(763, '52.167.144.142'),
(764, '142.93.172.84'),
(765, '52.167.144.8'),
(766, '40.77.167.45'),
(767, '172.234.54.243'),
(768, '128.90.130.93'),
(769, '87.236.176.194'),
(770, '40.77.167.75'),
(771, '87.236.176.64'),
(772, '167.71.67.249'),
(773, '64.227.147.56'),
(774, '46.228.199.158'),
(775, '66.249.64.36'),
(776, '66.249.64.7'),
(777, '40.77.167.23'),
(778, '142.93.112.206'),
(779, '40.77.167.36'),
(780, '147.182.190.161'),
(781, '93.158.90.42'),
(782, '20.160.206.203'),
(783, '13.94.103.89'),
(784, '24.199.110.229'),
(785, '67.220.86.160'),
(786, '34.76.96.55'),
(787, '61.245.169.162'),
(788, '35.225.82.182'),
(789, '175.157.176.69'),
(790, '178.62.82.141'),
(791, '34.145.165.227'),
(792, '103.21.166.30'),
(793, '35.245.227.115'),
(794, '34.105.37.64'),
(795, '43.250.241.211'),
(796, '17.241.75.58'),
(797, '149.56.160.243'),
(798, '149.56.150.215'),
(799, '217.160.71.43'),
(800, '165.227.166.231'),
(801, '13.51.194.42'),
(802, '45.79.1.56'),
(803, '134.122.102.144'),
(804, '207.46.13.17'),
(805, '5.133.192.94'),
(806, '128.199.61.251'),
(807, '146.70.172.24'),
(808, '146.70.116.169'),
(809, '154.28.229.167'),
(810, '104.164.173.119'),
(811, '45.134.142.201'),
(812, '65.154.226.166'),
(813, '179.43.169.181'),
(814, '212.102.57.162'),
(815, '216.131.116.87'),
(816, '156.146.63.135'),
(817, '181.214.206.136'),
(818, '173.245.202.201'),
(819, '10.64.121.70'),
(820, '2.57.170.170'),
(821, '2.57.170.167'),
(822, '82.132.214.174'),
(823, '45.87.212.91'),
(824, '104.244.209.78'),
(825, '216.131.114.7'),
(826, '216.131.84.62'),
(827, '197.242.157.235'),
(828, '133.242.174.119'),
(829, '40.77.167.52'),
(830, '205.169.39.71'),
(831, '205.169.39.194'),
(832, '3.90.43.57'),
(833, '3.90.43.57'),
(834, '47.88.94.159'),
(835, '47.88.101.3'),
(836, '52.167.144.139'),
(837, '164.92.242.222'),
(838, '52.70.240.171'),
(839, '23.22.35.162'),
(840, '3.224.220.101'),
(841, '87.236.176.233'),
(842, '69.4.89.106'),
(843, '69.4.89.106'),
(844, '69.4.89.106'),
(845, '87.236.176.63'),
(846, '18.191.143.170'),
(847, '137.184.152.250'),
(848, '139.59.139.49'),
(849, '54.147.120.52'),
(850, '139.162.8.154'),
(851, '52.53.149.131'),
(852, '51.158.111.239'),
(853, '93.158.90.73'),
(854, '138.197.166.64'),
(855, '199.244.88.228'),
(856, '31.6.22.246'),
(857, '35.88.77.243'),
(858, '185.181.60.12'),
(859, '160.20.9.40'),
(860, '176.9.114.107'),
(861, '157.55.39.61'),
(862, '93.119.227.19'),
(863, '93.119.227.19'),
(864, '207.46.13.168'),
(865, '212.68.54.203'),
(866, '52.167.144.192'),
(867, '137.184.217.69'),
(868, '207.46.13.150'),
(869, '31.220.233.215'),
(870, '217.76.159.96'),
(871, '54.186.197.222'),
(872, '52.27.114.127'),
(873, '138.197.143.210'),
(874, '207.46.13.6'),
(875, '40.77.167.44'),
(876, '52.35.191.158'),
(877, '35.91.129.98'),
(878, '54.66.154.161'),
(879, '164.92.105.196'),
(880, '93.158.90.164'),
(881, '104.248.91.66'),
(882, '207.241.235.164'),
(883, '45.80.158.152'),
(884, '5.133.192.146'),
(885, '194.26.192.122'),
(886, '207.46.13.126'),
(887, '137.184.164.87'),
(888, '34.216.197.38'),
(889, '167.99.146.231'),
(890, '135.148.195.9'),
(891, '91.92.253.104'),
(892, '72.13.46.5'),
(893, '35.93.130.193'),
(894, '18.237.79.218'),
(895, '167.71.185.199'),
(896, '147.182.233.140'),
(897, '207.154.239.178'),
(898, '161.35.166.100'),
(899, '206.189.11.6'),
(900, '143.110.213.54'),
(901, '24.199.121.171'),
(902, '143.110.213.60'),
(903, '139.59.190.79'),
(904, '185.41.152.214'),
(905, '138.68.170.129'),
(906, '2.58.56.227'),
(907, '107.172.90.247'),
(908, '34.216.104.162'),
(909, '54.186.68.133'),
(910, '54.200.217.213'),
(911, '35.86.166.239'),
(912, '52.43.21.1'),
(913, '161.35.236.190'),
(914, '188.166.158.186'),
(915, '146.190.152.167'),
(916, '159.223.80.199'),
(917, '135.148.195.2'),
(918, '161.35.185.223'),
(919, '45.154.98.137'),
(920, '69.63.184.9'),
(921, '45.79.237.41'),
(922, '123.231.126.178'),
(923, '24.199.108.69'),
(924, '159.223.91.97'),
(925, '143.110.213.59'),
(926, '206.189.11.233'),
(927, '206.189.3.246'),
(928, '161.35.161.107'),
(929, '38.6.186.223'),
(930, '199.244.88.221'),
(931, '173.252.107.3'),
(932, '173.252.87.12'),
(933, '193.186.4.168'),
(934, '194.26.192.116'),
(935, '34.68.228.16'),
(936, '5.78.65.190'),
(937, '3.253.7.59'),
(938, '167.71.185.196'),
(939, '137.184.60.9'),
(940, '93.158.91.32'),
(941, '43.130.7.6'),
(942, '176.58.96.144'),
(943, '88.99.250.124'),
(944, '52.167.144.189'),
(945, '40.77.167.60'),
(946, '40.77.167.54'),
(947, '164.90.129.251'),
(948, '34.126.184.209'),
(949, '17.241.227.215'),
(950, '34.87.37.139'),
(951, '91.92.245.225'),
(952, '35.92.38.187'),
(953, '34.216.212.119'),
(954, '35.92.131.75'),
(955, '18.236.174.94'),
(956, '157.55.39.14'),
(957, '167.99.179.145'),
(958, '65.154.226.170'),
(959, '93.158.90.67'),
(960, '40.77.167.78'),
(961, '185.241.208.50'),
(962, '34.221.58.118'),
(963, '35.88.101.245'),
(964, '157.55.39.59'),
(965, '165.22.1.204'),
(966, '40.77.167.68'),
(967, '107.175.69.10'),
(968, '68.183.101.214'),
(969, '142.93.120.194'),
(970, '40.77.167.235'),
(971, '66.249.64.38'),
(972, '34.207.210.188'),
(973, '18.246.60.43'),
(974, '35.86.82.251'),
(975, '35.166.3.142'),
(976, '168.91.32.83'),
(977, '54.220.245.200'),
(978, '139.59.135.181'),
(979, '194.163.164.39'),
(980, '175.157.40.123'),
(981, '159.223.116.113'),
(982, '35.215.127.113'),
(983, '31.13.127.119'),
(984, '72.255.13.33'),
(985, '31.13.127.16'),
(986, '103.179.45.119'),
(987, '23.22.147.217'),
(988, '165.227.132.115'),
(989, '52.167.144.179'),
(990, '157.245.126.175'),
(991, '35.88.207.151'),
(992, '17.241.227.60'),
(993, '34.221.148.70'),
(994, '18.237.85.171'),
(995, '139.162.31.202'),
(996, '185.156.46.111'),
(997, '93.158.90.32'),
(998, '143.110.248.173'),
(999, '192.71.3.222'),
(1000, '65.109.168.147'),
(1001, '93.158.91.25'),
(1002, '63.141.48.16'),
(1003, '144.217.135.164'),
(1004, '149.56.160.167'),
(1005, '172.234.18.193'),
(1006, '2.57.122.44'),
(1007, '159.89.168.232'),
(1008, '45.141.215.138'),
(1009, '38.154.167.68'),
(1010, '3.79.255.57'),
(1011, '91.92.240.93'),
(1012, '51.159.133.29'),
(1013, '45.141.215.135'),
(1014, '165.232.110.107'),
(1015, '3.75.226.116'),
(1016, '145.220.91.19'),
(1017, '40.77.167.7'),
(1018, '54.191.224.77'),
(1019, '54.201.113.39'),
(1020, '35.89.160.112'),
(1021, '34.221.185.111'),
(1022, '103.195.7.214'),
(1023, '18.196.239.194'),
(1024, '157.245.137.242'),
(1025, '208.110.82.178'),
(1026, '172.241.242.233'),
(1027, '23.106.26.26'),
(1028, '93.158.91.30'),
(1029, '40.115.30.47'),
(1030, '52.167.144.163'),
(1031, '45.33.113.61'),
(1032, '179.43.191.18'),
(1033, '181.94.232.254'),
(1034, '199.244.88.227'),
(1035, '161.35.84.210'),
(1036, '17.241.219.167'),
(1037, '35.80.15.239'),
(1038, '178.62.212.82'),
(1039, '43.135.153.93'),
(1040, '40.77.167.254'),
(1041, '137.184.231.76'),
(1042, '198.23.196.55'),
(1043, '207.46.13.151'),
(1044, '198.46.233.18'),
(1045, '46.101.9.216'),
(1046, '139.59.13.228'),
(1047, '64.225.4.65'),
(1048, '43.153.108.194'),
(1049, '17.241.227.77'),
(1050, '159.203.113.206'),
(1051, '130.255.166.166'),
(1052, '3.110.236.102'),
(1053, '31.6.3.189'),
(1054, '63.135.161.170'),
(1055, '18.237.195.255'),
(1056, '54.245.134.62'),
(1057, '5.133.192.88'),
(1058, '172.233.157.36'),
(1059, '104.248.52.110'),
(1060, '52.17.231.251'),
(1061, '199.244.88.224'),
(1062, '52.40.3.237'),
(1063, '52.11.254.252'),
(1064, '34.221.131.18'),
(1065, '38.45.186.20'),
(1066, '178.128.241.1'),
(1067, '20.14.83.224'),
(1068, '43.133.77.208'),
(1069, '92.118.39.243'),
(1070, '172.241.152.89'),
(1071, '23.105.145.233'),
(1072, '129.226.146.179'),
(1073, '54.171.122.14'),
(1074, '165.227.67.79'),
(1075, '207.46.13.153'),
(1076, '157.55.39.52'),
(1077, '93.158.91.34'),
(1078, '192.144.39.104'),
(1079, '157.55.39.200'),
(1080, '139.59.248.197'),
(1081, '192.155.95.28'),
(1082, '23.106.18.195'),
(1083, '23.106.22.174'),
(1084, '157.55.39.6'),
(1085, '45.79.69.120'),
(1086, '5.133.192.105'),
(1087, '207.46.13.7'),
(1088, '137.184.202.65'),
(1089, '43.135.129.233'),
(1090, '31.13.103.119'),
(1091, '43.135.181.13'),
(1092, '207.46.13.116'),
(1093, '43.133.77.230'),
(1094, '52.37.19.11'),
(1095, '87.236.176.195'),
(1096, '91.229.239.128'),
(1097, '81.200.156.80'),
(1098, '143.110.162.49'),
(1099, '87.236.176.226'),
(1100, '143.244.185.202'),
(1101, '173.252.83.14'),
(1102, '43.157.40.112'),
(1103, '199.244.88.219'),
(1104, '54.149.139.246'),
(1105, '34.217.116.189'),
(1106, '52.37.191.14'),
(1107, '161.35.124.248'),
(1108, '184.75.221.43'),
(1109, '137.184.226.202'),
(1110, '167.99.185.192'),
(1111, '207.46.13.107'),
(1112, '43.134.228.33'),
(1113, '128.90.144.77'),
(1114, '192.36.109.70'),
(1115, '49.51.206.130'),
(1116, '157.55.39.202'),
(1117, '194.163.164.43'),
(1118, '66.249.79.133'),
(1119, '66.249.76.34'),
(1120, '66.249.76.237'),
(1121, '43.153.110.177'),
(1122, '66.249.76.238'),
(1123, '34.212.181.136'),
(1124, '5.133.192.167'),
(1125, '139.59.17.44'),
(1126, '104.248.124.121'),
(1127, '43.159.128.149'),
(1128, '52.167.144.223'),
(1129, '43.130.7.211'),
(1130, '178.254.12.183'),
(1131, '43.133.66.151'),
(1132, '157.55.39.53'),
(1133, '34.221.205.173'),
(1134, '54.213.43.84'),
(1135, '34.222.106.199'),
(1136, '35.92.19.198'),
(1137, '34.217.83.79'),
(1138, '34.219.182.15'),
(1139, '43.159.141.180'),
(1140, '34.22.229.13'),
(1141, '40.77.167.71'),
(1142, '83.97.79.35'),
(1143, '64.225.69.71');

-- --------------------------------------------------------

--
-- Table structure for table `WorkExperience`
--

CREATE TABLE `WorkExperience` (
  `Id` int(11) NOT NULL,
  `Title` text DEFAULT NULL,
  `Duration` text DEFAULT NULL,
  `descriptions` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `WorkExperience`
--

INSERT INTO `WorkExperience` (`Id`, `Title`, `Duration`, `descriptions`) VALUES
(1, 'Software Developer', '2018-2021', 'Worked as a software developer, responsible for designing and implementing web applications.'),
(9, 'breet', '2000-2023', 'try to live'),
(3, 'Project Coordinator', '2014-2016', 'Coordinated project activities, managed timelines, and facilitated communication among team members.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin_chat`
--
ALTER TABLE `Admin_chat`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Admin_login`
--
ALTER TABLE `Admin_login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `CreateProduct`
--
ALTER TABLE `CreateProduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Detila`
--
ALTER TABLE `Detila`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Education`
--
ALTER TABLE `Education`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Experience`
--
ALTER TABLE `Experience`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `MyBlog`
--
ALTER TABLE `MyBlog`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `MyWork`
--
ALTER TABLE `MyWork`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Project_count`
--
ALTER TABLE `Project_count`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Skill`
--
ALTER TABLE `Skill`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Views`
--
ALTER TABLE `Views`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `WorkExperience`
--
ALTER TABLE `WorkExperience`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin_chat`
--
ALTER TABLE `Admin_chat`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Admin_login`
--
ALTER TABLE `Admin_login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `CreateProduct`
--
ALTER TABLE `CreateProduct`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Detila`
--
ALTER TABLE `Detila`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Education`
--
ALTER TABLE `Education`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Experience`
--
ALTER TABLE `Experience`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `MyBlog`
--
ALTER TABLE `MyBlog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `MyWork`
--
ALTER TABLE `MyWork`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Project_count`
--
ALTER TABLE `Project_count`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Skill`
--
ALTER TABLE `Skill`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `Views`
--
ALTER TABLE `Views`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1144;

--
-- AUTO_INCREMENT for table `WorkExperience`
--
ALTER TABLE `WorkExperience`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
