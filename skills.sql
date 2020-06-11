-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 09:00 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skills`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `lesson_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `activity`, `lesson_id`) VALUES
(1, 'Write the structure of creating web site using HTML .', 1),
(2, 'Use “dir” property to change the direction of the web page.', 2),
(3, 'Use font properties and change font formatting in your codes.', 3),
(4, 'Change the back ground color of web site.', 4),
(5, 'Use HTML tags to insert an image and change its dimensions and align.', 5),
(6, 'Use HTML tags to insert sound as a background sound.\r\nand Use <embed> tag to insert video in web site', 6),
(7, 'Insert hyperlink to your website once as text and as an image again. ', 7),
(8, 'Use <embed> tag to insert video in web site.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_img` varchar(100) NOT NULL DEFAULT 'dist/img/user2-160x160.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `full_name`, `admin_email`, `admin_password`, `admin_img`) VALUES
(1, 'Heba Mohammed', 'admin@admin.com', '$2y$10$7sd.3ljbnzZZwBnQm1iss.XJ1hHar1uRcIw16W3D5D7KQdXntmhGG', '283061502847139_899761247755346_user2-160x160.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `answers_after_deep`
--

CREATE TABLE `answers_after_deep` (
  `answer_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `mark` tinyint(4) NOT NULL DEFAULT '0',
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `answers_after_surface`
--

CREATE TABLE `answers_after_surface` (
  `answer_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `mark` tinyint(4) NOT NULL DEFAULT '0',
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `answers_before_deep`
--

CREATE TABLE `answers_before_deep` (
  `answer_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `mark` tinyint(4) NOT NULL DEFAULT '0',
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `answers_before_surface`
--

CREATE TABLE `answers_before_surface` (
  `answer_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `mark` tinyint(4) NOT NULL DEFAULT '0',
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers_before_surface`
--

INSERT INTO `answers_before_surface` (`answer_id`, `answer`, `mark`, `student_id`, `question_id`) VALUES
(1, '.html', 1, 3, 1),
(2, '<head>', 0, 3, 2),
(3, 'Help Table Made Layout', 0, 3, 3),
(4, '<title dir=\"rtl\">', 0, 3, 4),
(5, '<i>', 0, 3, 5),
(6, 'font name', 0, 3, 6),
(7, 'background', 0, 3, 7),
(8, 'color', 0, 3, 8),
(9, '<u>', 0, 3, 9),
(10, '<a>', 0, 3, 10),
(11, '<bgsound>', 0, 3, 11),
(12, 'Add sound', 0, 3, 12),
(13, 'False', 1, 3, 13),
(14, 'False', 1, 3, 14),
(15, 'False', 0, 3, 15),
(16, 'False', 0, 3, 16),
(17, 'False', 0, 3, 17),
(18, 'False', 0, 3, 18),
(19, 'False', 1, 3, 19),
(20, 'False', 1, 3, 20),
(21, 'False', 1, 3, 21),
(22, 'False', 0, 3, 22);

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `choice_id` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `mark` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`choice_id`, `choice`, `question_id`, `mark`) VALUES
(1, '.docx', 1, 0),
(2, '.jpg', 1, 0),
(3, '.html', 1, 1),
(4, '.mpc', 1, 0),
(5, '<body>', 2, 1),
(6, '<head>', 2, 0),
(7, '<title>', 2, 0),
(8, '<table>', 2, 0),
(9, 'Hyper Text Markup Library', 3, 0),
(10, 'Help Table Made Layout', 3, 0),
(11, 'Hyper Text Markup Language', 3, 1),
(12, 'Help Table Markup Layout', 3, 0),
(13, '<body dir=\"ltr\">', 4, 1),
(14, '<title dir=\"rtl\">', 4, 0),
(15, '<title dir=\"ltr\">', 4, 0),
(16, '<u>', 5, 0),
(17, '<i>', 5, 0),
(18, '<t>', 5, 0),
(19, '<b>', 5, 1),
(20, 'size', 6, 0),
(21, 'font name', 6, 0),
(22, 'face', 6, 1),
(23, 'act', 6, 0),
(24, 'bgcolor', 7, 1),
(25, 'background', 7, 0),
(26, 'color', 7, 0),
(27, 'color background', 7, 0),
(28, 'soc', 8, 0),
(29, 'color', 8, 0),
(30, 'href', 8, 0),
(31, 'src', 8, 1),
(32, '<right>', 9, 1),
(33, '<u>', 9, 0),
(34, '<body>', 9, 0),
(35, '<left>', 9, 0),
(36, 'bgsound', 10, 1),
(37, '<a>', 10, 0),
(38, 'bgcolor', 10, 0),
(39, 'voice', 10, 0),
(40, '<embade>', 11, 1),
(41, '<bgsound>', 11, 0),
(42, '<bgcolor>', 11, 0),
(43, '<bedin>', 11, 0),
(44, 'Alignment text', 12, 0),
(45, 'Add sound', 12, 0),
(46, 'Add video', 12, 0),
(47, 'Add hyperlink', 12, 1),
(48, '<body dir=\"rtl\">', 4, 0),
(49, 'True', 13, 0),
(50, 'False', 13, 1),
(51, 'True', 14, 0),
(52, 'False', 14, 1),
(53, 'True', 15, 1),
(54, 'False', 15, 0),
(55, 'True', 16, 1),
(56, 'False', 16, 0),
(57, 'True', 17, 1),
(58, 'False', 17, 0),
(59, 'True', 18, 1),
(60, 'False', 18, 0),
(61, 'True', 19, 0),
(62, 'False', 19, 1),
(63, 'True', 20, 0),
(64, 'False', 20, 1),
(65, 'True', 21, 0),
(66, 'False', 21, 1),
(67, 'True', 22, 1),
(68, 'False', 22, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deep_measure_answers`
--

CREATE TABLE `deep_measure_answers` (
  `answer_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `mark` tinyint(4) NOT NULL DEFAULT '0',
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deep_measure_answers`
--

INSERT INTO `deep_measure_answers` (`answer_id`, `answer`, `mark`, `student_id`, `question_id`) VALUES
(1, 'na', 2, 3, 1),
(2, 'a', 3, 3, 2),
(3, 'a', 3, 3, 3),
(4, 'a', 3, 3, 4),
(5, 'a', 3, 3, 5),
(6, 'a', 3, 3, 6),
(7, 'a', 3, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `deep_measure_questions`
--

CREATE TABLE `deep_measure_questions` (
  `question_id` int(11) NOT NULL,
  `question_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deep_measure_questions`
--

INSERT INTO `deep_measure_questions` (`question_id`, `question_title`) VALUES
(1, 'الدراسة والعمل في محتويات هذه الموضوعات يمنحنى الشعور بالرضا'),
(2, 'اكتشفت أنني لو شعرت بالرضا فى موضوعات الدراسة لإضطررت للعمل بجد كى اكون قادراً على تخطيط ما أريد أن أتوصل إليه'),
(3, 'أعتقد أنه يمكن لأى موضوع من هذه الدراسة أن يكون مثيراً للاهتمام إذا أوليته كامل اهتمامك'),
(4, 'قضيت الكثير من الوقت فى التفكير بعمق وتوسع فيما يتعلق بملاحظات المعلم'),
(5, 'اكتشفت أنه يمكن وبشكل عام إثبات أن موضوعات هذه الدراسة موضوعات تكون مثيرة للاهتمام مثل كتاب جيد'),
(6, 'خصصت جزءاً من وقتى فى البحث عن المزيد من المعلومات فيما يتعلق بالموضوعات المثيرة للاهتمام التى تمت منااقشتها فى المحاضرة'),
(7, 'اعتدت على سؤال الاستاذ عن جوانب محددة من موضوعات المحتوى للوصول إلى فهم كامل لها');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(11) NOT NULL,
  `lesson_title` varchar(255) NOT NULL,
  `video_1` varchar(255) NOT NULL,
  `video_2` varchar(255) NOT NULL,
  `book` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `lesson_title`, `video_1`, `video_2`, `book`) VALUES
(1, 'HTML markup language basic concepts', 'https://www.youtube.com/embed/hQJ7Sw7AilE', 'https://www.youtube.com/embed/OCOxYgZFtsk', 'https://drive.google.com/open?id=1uDX6NRvz17a4h7zkOUslHgQCuPHnWV1E'),
(2, 'Adding a content to the web page', 'https://www.youtube.com/embed/nTe5BoOSYGA', 'https://www.youtube.com/embed/wS8M0d5yFu4', 'https://drive.google.com/open?id=1OHug4iifuYXS4WaFJSij7ZpEImGYbZ7s'),
(3, 'Web page formatting', 'https://www.youtube.com/embed/SDwh0QeF1xY', 'https://www.youtube.com/embed/flZc19YzpN0', 'https://drive.google.com/open?id=1Vx7g9FSsxfWPq35oeHlT0cayzehJ_nr-'),
(4, 'Formatting the background of the web page', 'https://www.youtube.com/embed/4IS_R2w0QlI', 'https://www.youtube.com/embed/ObZAdsjWASU', 'https://drive.google.com/open?id=1eVKAU15bV0zYaRcZxbrhuMdwfEEB_K92'),
(5, 'Dealing with the image in the web page', 'https://www.youtube.com/embed/dQJnEHBny1k', 'https://www.youtube.com/embed/-7bG8uI_CE8', 'https://drive.google.com/open?id=14Yl6H8yFfuIe0LijNeBDspCPfaRioRwq'),
(6, 'Dealing with the sound in the web page', 'https://www.youtube.com/embed/79uIGYDmvdM', 'https://www.youtube.com/embed/cLXY4cDrci0', 'https://drive.google.com/open?id=1A1oqwRQFN83prW_zKsOc8f4JihXh0IXR'),
(7, 'Insert hyperlink in the web page by <a>…..</a>', 'https://www.youtube.com/embed/hU_hx09fzI8', 'https://www.youtube.com/embed/tYr9Yo2gtMI', 'https://drive.google.com/open?id=1FPCS1x2-GvL38e4GcRjWy7iDz90kJs88');

-- --------------------------------------------------------

--
-- Table structure for table `lesson_goal`
--

CREATE TABLE `lesson_goal` (
  `id` int(11) NOT NULL,
  `goal` text NOT NULL,
  `lesson_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lesson_goal`
--

INSERT INTO `lesson_goal` (`id`, `goal`, `lesson_id`) VALUES
(1, 'Acknowledge definition of HTML-Realize HTML rules-Comprehend the structure of creating web page using HTML', 1),
(2, 'Comprehend the used code to add text for a web page-Can Change the direction of the web page using \"dir\" property-Apply the practical example for changing web page content direction from right to left', 2),
(3, 'Acknowledge the function of the <br> tag-Using the tag <center>…</center> to put the text in middle of the line-Apply the symbol &nbsp; to add blank space between words-Analyzing the properties of the <font> tag-Distinguish between (underline/ bold/italic) to format the font in the web page-Apply a practical example for formatting the font in the web page', 3),
(4, 'Can select the background color for the web page by the property bgcolor-Remember the used code to add image as a web page background', 4),
(5, 'Acknowledge the tag to insert image in the web page-Apply <img> tag to Control the image dimension in the web page-Using the <img> tag to align the image through the property align', 5),
(6, 'Acknowledge the used tag to Insert the sound as a background sound-Use <embed> tag to insert video in the web page', 6),
(7, 'Acknowledge definition of hyperlink-Realize the function of <a> …. </a> tag-Can insert hyperlink to an image', 7);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `question_title` varchar(255) NOT NULL,
  `lesson_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question_title`, `lesson_id`) VALUES
(1, 'We should save HTML file with extension ………', 1),
(2, 'Web page content written in the section...............', 1),
(3, 'HTML is short for ……………', 1),
(4, 'To Change the direction of the contents of the web page to become left to right, use …………', 2),
(5, 'To make the text bold in the web page, we use tag……', 3),
(6, 'To determine the font type in the command <Font>, use                   property.....................', 3),
(7, 'To select a background color of the web page, use property..............................', 4),
(8, 'The property that is related to the order <img> from the following properties is …………', 5),
(9, 'To align image to the far right of the web page, use ……………', 5),
(10, 'Inclusion voice as a background for the page, use …………', 6),
(11, 'Use ……………..to put a video for the web page.', 6),
(12, 'The <a> tag, is used to.................... inside the web page. ', 7),
(13, 'Web page content is written between the beginning and the end of <title> … </title>.  ', 1),
(14, 'To change the direction of web page content to be from right to left, use (img) property. ', 2),
(15, 'To control the number of spaces between words, we use the symbol &nbsp; ', 3),
(16, 'To put the text on the web page in the middle of the line, use tag <center>.', 3),
(17, 'The command <br>, used to divide the paragraph in several lines.', 3),
(18, 'To select the font size on a Web page, use the property size.', 3),
(19, 'To put a picture as a background, we use command Background which follows the command<title>.', 4),
(20, 'We use centimeter measuring unit to measure the image dimensions.', 5),
(21, '\"Hyperlink\" is to move to another place in the same location only.', 7),
(22, 'To insert a hyperlink to an image into the web page, type the next code: \r\n< a href=\"my school.html\"><img src=\"tools.jpg\"></a>.', 7);

-- --------------------------------------------------------

--
-- Table structure for table `quize`
--

CREATE TABLE `quize` (
  `question_id` int(11) NOT NULL,
  `question_title` varchar(255) NOT NULL,
  `lesson_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quize`
--

INSERT INTO `quize` (`question_id`, `question_title`, `lesson_id`) VALUES
(1, '……………… Extension is used to save a webpage with html code.', 1),
(2, 'To show the text on the web page to be written in the text area.................... ', 1),
(3, 'HTML shortcut refers................................. ', 1),
(4, 'User command to change the page orientation is', 2),
(5, 'To make the text appears on the Web page italic use................... ', 3),
(6, 'Command used to create a new line is …………', 3),
(7, 'Select an image to be the background of the web page choose.................... ', 4),
(8, 'Property associated with the order <img> is the property……….', 5),
(9, 'The measurement unit that used to measure the image dimensions is………', 5),
(10, 'You can insert the sound as a background sound by……', 6),
(11, 'You can insert video in the web page by ………', 6),
(12, 'It <A> is used in.................... within the web page.', 7),
(14, '…………… is the area in which he writes the content of the page', 2),
(15, 'To write text bold face are writing the letter', 3),
(19, 'To determine the background of the web page color we choose....................', 4),
(21, '………….. is a hyper image or a hypertext, connected to a title and when we click it, we move to this title and it can be in the same page or in another one, in the same site or in another one. ', 7);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_choices`
--

CREATE TABLE `quiz_choices` (
  `choice_id` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL,
  `mark` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz_choices`
--

INSERT INTO `quiz_choices` (`choice_id`, `choice`, `question_id`, `mark`) VALUES
(49, '.ttml', 1, 0),
(51, '.html', 1, 1),
(52, '.thml', 1, 0),
(53, '.hmtl', 1, 0),
(54, 'BODY', 2, 1),
(55, 'Head', 2, 0),
(56, 'Title', 2, 0),
(57, 'Paragraph', 2, 0),
(58, 'Hyper Text Mark-up Library', 3, 0),
(59, 'Help Table Made Layout ', 3, 0),
(60, 'Hyper Text Mark-up Language', 3, 1),
(61, 'Hyper Text Make-up Library', 3, 0),
(62, 'src', 4, 0),
(63, 'dir', 4, 1),
(64, 'img', 4, 0),
(65, 'ort', 4, 0),
(66, '<html>', 14, 0),
(67, '<head>', 14, 0),
(68, '<body>', 14, 1),
(69, '<title>', 14, 0),
(78, '<u>', 5, 0),
(79, '<i>', 5, 1),
(80, '<b>', 5, 0),
(81, '<t>', 5, 0),
(82, '<br>', 6, 1),
(83, '<rb>', 6, 0),
(84, '<rc>', 6, 0),
(85, '<pr>', 6, 0),
(86, '<u>', 15, 0),
(87, '<B>', 15, 1),
(88, '<c>', 15, 0),
(89, '<t>', 15, 0),
(90, 'bgcolor', 7, 0),
(91, 'background', 7, 1),
(92, 'color', 7, 0),
(93, 'ground', 7, 0),
(94, 'bgcolor', 19, 1),
(95, 'background', 19, 0),
(96, 'ground', 19, 0),
(97, 'color', 19, 0),
(98, 'path', 8, 0),
(99, 'src', 8, 1),
(100, 'prc', 8, 0),
(101, 'hrc', 8, 0),
(102, 'pixel', 9, 1),
(103, 'centimeter', 9, 0),
(104, 'meter', 9, 0),
(105, 'mega', 9, 0),
(106, '<bgsound>', 10, 1),
(107, '<bgvoice>', 10, 0),
(108, '<bgaudio>', 10, 0),
(109, '<backgroundsound>', 10, 0),
(110, '<bgvideo>', 11, 0),
(111, '<embed', 11, 1),
(112, '<insertvideo>', 11, 0),
(113, '<videobg>', 11, 0),
(114, 'Alignment of the text', 12, 0),
(115, 'Added a hyperlink', 12, 1),
(116, 'Video run', 12, 0),
(117, 'Added a Video', 12, 0),
(118, 'Hyperlink', 14, 1),
(119, 'Hypertitle', 14, 0),
(120, 'Hypermilk', 14, 0),
(121, 'Hyperbink', 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `robot`
--

CREATE TABLE `robot` (
  `id` int(11) NOT NULL,
  `short_cut` varchar(100) NOT NULL,
  `code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `robot`
--

INSERT INTO `robot` (`id`, `short_cut`, `code`) VALUES
(1, 'HTML', 'Hyper Text Markup Language'),
(2, 'Head', '<head>…..</head>'),
(3, 'Body', '<body>……</body>'),
(4, 'title', '<title> …..</title>'),
(5, 'change direction', 'dir'),
(6, 'direction from right to left', '<body dir=\"rtl\">'),
(7, 'direction from left to right', '<body dir=\"ltr\">'),
(8, 'text in middle', '<center>…</center>'),
(9, 'new line', '<br>'),
(10, 'space between words', '&nbsp;'),
(11, 'font', '<font>...</font>'),
(12, 'font type', '<font face=\"font type\">\r\nex:\r\n<font face=\"andalus\">'),
(13, 'font Color', '<font color=color name\">\r\nex:\r\n<font color=\"green\">'),
(14, 'font size', '<font size=\"font size\">\r\nex:\r\n<font size=\"6\">'),
(15, 'background color', '<body bgcolor=\"color name\">'),
(16, 'Background as image', '<body background=\"imag name1.extension\">'),
(17, 'image', '<img src=\"image name.extension\">'),
(18, 'image dimension', '<img src=\"image name.extension\" height= \"450\" width=\"800\">'),
(19, 'measure image dimensions', 'pixel'),
(20, 'Align image', '<img src=\"image name.extension\" align=\"middle\">'),
(21, 'background sound', '<bgsound src=\"audio file.extension\">'),
(22, 'Insert video', '<embed src=\" video file.extension\">'),
(23, 'Hyperlink', '<a href=\"URL web site\">\r\nthe text you want to appear\r\n</a>'),
(24, 'hyperlink as image', '<a href=\"URL web site\">\r\n<img src=\"imag name.extension\">\r\n</a>'),
(25, 'Italic', '<i>'),
(26, 'bold', '<b>'),
(27, 'under line', '<u>'),
(28, 'img', '<img src=\"image name.extension\">'),
(29, 'صباح الخير', 'صباح الخير'),
(30, 'صباح النور', 'صباح النور'),
(31, 'مرحبا', 'مرحبا بك'),
(32, 'مرحبا بك', 'مرحبا بك'),
(33, 'اهلا بك', 'اهلا بك ومرحبا'),
(34, 'اهلا', 'اهلا بك ومرحبا'),
(35, 'كيفك', 'بخير الحمد لله ... كيفك أنت!'),
(36, 'كيف حالك', 'بخير الحمد لله ... كيف حالك أنت!'),
(37, 'كيف اخبارك', 'بخير الحمد لله ... كيف أخبارك أنت!'),
(38, 'اخبارك', 'بخير الحمد لله ... كيف أخبارك أنت!'),
(39, 'ما اسمك', 'اسمي روبوت (HHM SYSTEM)'),
(40, 'اسمك ايه', 'اسمي روبوت (HHM SYSTEM)'),
(41, 'ماذا تعمل', 'لدي كمية من المعلومات تفيدك في دراستك'),
(42, 'ما هي وظيفتك', 'لدي كمية من المعلومات تفيدك في دراستك'),
(43, 'بتعمل ايه', 'لدي كمية من المعلومات تفيدك في دراستك'),
(44, 'بتشتغل ايه', 'لدي كمية من المعلومات تفيدك في دراستك');

-- --------------------------------------------------------

--
-- Table structure for table `robot_chat`
--

CREATE TABLE `robot_chat` (
  `chat_id` int(11) NOT NULL,
  `short_cut` varchar(100) NOT NULL,
  `code` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `chat_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `robot_chat`
--

INSERT INTO `robot_chat` (`chat_id`, `short_cut`, `code`, `student_id`, `chat_time`) VALUES
(1, 'HTML', 'Hyper Text Markup Language', 3, '2018:25:11 - 10:27:26'),
(2, 'image', '<img src=\"image name.extension\">', 3, '2018:25:11 - 10:27:35'),
(3, 'img', '<img src=\"image name.extension\">', 3, '2018:25:11 - 10:27:43'),
(4, 'image', '<img src=\"image name.extension\">', 3, '2018:25:11 - 10:27:48'),
(5, 'HTML', 'Hyper Text Markup Language', 3, '2018:25:11 - 10:29:06'),
(6, 'مرحبا', 'مرحبا بك', 3, '2018:28:12 - 10:40:35'),
(7, 'كيفك', 'بخير الحمد لله ... كيفك أنت!', 3, '2018:28:12 - 10:40:42'),
(8, 'كيف اخبارك', 'بخير الحمد لله ... كيف أخبارك أنت!', 3, '2018:28:12 - 10:41:23'),
(9, 'اسمك ايه', 'اسمي روبوت (HHM SYSTEM)', 3, '2018:28:12 - 10:43:07'),
(10, 'ما اسمك', 'اسمي روبوت (HHM SYSTEM)', 3, '2018:28:12 - 10:43:13'),
(11, 'ماذا تعمل', 'لدي كمية من المعلومات تفيدك في دراستك', 3, '2018:28:12 - 10:44:10'),
(12, 'ما هي وظيفتك', 'لدي كمية من المعلومات تفيدك في دراستك', 3, '2018:28:12 - 10:44:18'),
(13, 'بتشتغل ايه', '', 3, '2018:28:12 - 10:44:47'),
(14, 'بتشتغل ايه', '', 3, '2018:28:12 - 10:44:54'),
(15, 'بتعمل ايه', 'لدي كمية من المعلومات تفيدك في دراستك', 3, '2018:28:12 - 10:45:20'),
(16, 'بتشتغل ايه', 'لدي كمية من المعلومات تفيدك في دراستك', 3, '2018:28:12 - 10:45:24'),
(17, 'اسمك ايه', 'اسمي روبوت (HHM SYSTEM)', 3, '2018:28:12 - 10:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `site_desc`
--

CREATE TABLE `site_desc` (
  `desc_id` int(11) NOT NULL,
  `desc_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_deep_mesure`
--

CREATE TABLE `student_deep_mesure` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_surface_mesure`
--

CREATE TABLE `student_surface_mesure` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_surface_mesure`
--

INSERT INTO `student_surface_mesure` (`id`, `student_name`, `student_id`) VALUES
(1, 'Mohamed Sallam', 3);

-- --------------------------------------------------------

--
-- Table structure for table `surface_measure_answers`
--

CREATE TABLE `surface_measure_answers` (
  `answer_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `mark` tinyint(4) NOT NULL DEFAULT '0',
  `student_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `surface_measure_answers`
--

INSERT INTO `surface_measure_answers` (`answer_id`, `answer`, `mark`, `student_id`, `question_id`) VALUES
(1, 'ac', 4, 3, 1),
(2, 'a', 3, 3, 2),
(3, 'a', 3, 3, 3),
(4, 'a', 3, 3, 4),
(5, 'a', 3, 3, 5),
(6, 'a', 3, 3, 6),
(7, 'a', 3, 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `surface_measure_questions`
--

CREATE TABLE `surface_measure_questions` (
  `question_id` int(11) NOT NULL,
  `question_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `surface_measure_questions`
--

INSERT INTO `surface_measure_questions` (`question_id`, `question_title`) VALUES
(1, 'بشكل عام، أحجمت عملى بما هو متوقع منى فى موضوعات الدراسة؛ لأننى اعتقدت بأنه ليس هناك حاجة لبذل أى جهد إضافى'),
(2, 'حاولت أن لا أفعل أكثر مما هو متوقع منى، ولا أبذل أى جهد إضافى أكثر من الاحتياجات الملحة لموضوعات الدراسة'),
(3, 'تتلخص أهدافى فى موضوعات الدراسة فى الحصول على أعلى الدرجات بأقل جهد'),
(4, 'هدفى الرئيس هو النجاح فى موضوعات الدراسة، ولا يهمنى إن كنت قد حصلت على مزيد من المعلومات أم لا'),
(5, 'فى أثناء العمل فى هذه الدراسة، حاولت حفظ موضوع المحتوى مع اننى لم أفهمها فهماً كاملاً فى بعض الاحيان'),
(6, 'استنتجت من ذلك أن أفضل طريقة للحصول على أعلى الدرجات فى اختبار(اختبارات) هذه الدراسة هى طريقة الحفظ'),
(7, 'حاولت حفظ إجابات الأسئلة التى من المحتمل أن يتضمنها الاختبار');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `approve` tinyint(2) NOT NULL DEFAULT '1',
  `last_login` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `user_email`, `user_password`, `gender`, `approve`, `last_login`) VALUES
(3, 'Mohamed Sallam', 'mo@mo.com', '$2y$10$mt2Yu8rhnHjd0rjXPqUs5u6RMtacycOd7YtuWk07aY9ZHrmXy9qIm', 'male', 1, 1555450599),
(4, 'Ahmed Ali ', 'ah@ah.com', '$2y$10$/WPzQ5JWYjPmJU63i3iTiOIdk4UdBJP3HabpWrLeIKzWoYLYgKWf6', 'male', 1, 1543138552),
(5, 'Mai Ali', 'mai@mai.com', '$2y$10$GeqbexfiWPj/w.2TRCDDoeBKmle4UHKzIHlrDGPEnv4fFOxgBjTSi', 'female', 1, 0),
(6, 'Hanaa Ahmed ', 'hana@hana.com', '$2y$10$fQLDcdt36XL.Aq5sxeyxbejxApCOKT.nlheZtYlevMMA0Q1kUOOtC', 'female', 1, 1543138455),
(7, 'Saly Mohammed ', 'saly@saly.com', '$2y$10$diVFNN6Hymx//FAWg0mQge2eqfgt50e4O9LU/OnmKL2HcVqsNU9W2', 'female', 1, 0),
(8, 'Huda Ammar ', 'hua@huda.com', '$2y$10$KweXxnQQ9oqUiA/SdAa.bu8OR/tTAfGB8Y.r0CClmPhPYShjCF24y', 'female', 1, 0),
(9, 'Asmaa Khaled', 'asmaa@asmaa.com', '$2y$10$nEOmaqYLOj.9fYw2W41.qOquOr64zjYwbWjWDNvmwjcQVzMuWcM.S', 'female', 1, 1541640443),
(10, 'Sohaila mostafa ', 'sohaila@sohaila.com', '$2y$10$w0E.kn.UEg3I2MwD8s6eR.BiKUMtZjIGiYwLwIveR/Fk7rxbgp8LO', 'female', 1, 1541637372),
(11, 'dfgdfgdfg', 'dfgfdgdfg@gmail.com', '$2y$10$XKoM9ho5h1j/lO4.jDDUpes6qSD8iTIAlfTPlEzQJxJXuHl7I7jfa', 'male', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `answers_after_deep`
--
ALTER TABLE `answers_after_deep`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `answers_after_surface`
--
ALTER TABLE `answers_after_surface`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `answers_before_deep`
--
ALTER TABLE `answers_before_deep`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `answers_before_surface`
--
ALTER TABLE `answers_before_surface`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`choice_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deep_measure_answers`
--
ALTER TABLE `deep_measure_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `deep_measure_questions`
--
ALTER TABLE `deep_measure_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `lesson_goal`
--
ALTER TABLE `lesson_goal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Indexes for table `quize`
--
ALTER TABLE `quize`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Indexes for table `quiz_choices`
--
ALTER TABLE `quiz_choices`
  ADD PRIMARY KEY (`choice_id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `robot`
--
ALTER TABLE `robot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `robot_chat`
--
ALTER TABLE `robot_chat`
  ADD PRIMARY KEY (`chat_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `site_desc`
--
ALTER TABLE `site_desc`
  ADD PRIMARY KEY (`desc_id`);

--
-- Indexes for table `student_deep_mesure`
--
ALTER TABLE `student_deep_mesure`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `student_surface_mesure`
--
ALTER TABLE `student_surface_mesure`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `surface_measure_answers`
--
ALTER TABLE `surface_measure_answers`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `surface_measure_questions`
--
ALTER TABLE `surface_measure_questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `answers_after_deep`
--
ALTER TABLE `answers_after_deep`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answers_after_surface`
--
ALTER TABLE `answers_after_surface`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answers_before_deep`
--
ALTER TABLE `answers_before_deep`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `answers_before_surface`
--
ALTER TABLE `answers_before_surface`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `choice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deep_measure_answers`
--
ALTER TABLE `deep_measure_answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `deep_measure_questions`
--
ALTER TABLE `deep_measure_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lesson_goal`
--
ALTER TABLE `lesson_goal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `quize`
--
ALTER TABLE `quize`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `quiz_choices`
--
ALTER TABLE `quiz_choices`
  MODIFY `choice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `robot`
--
ALTER TABLE `robot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `robot_chat`
--
ALTER TABLE `robot_chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `site_desc`
--
ALTER TABLE `site_desc`
  MODIFY `desc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_deep_mesure`
--
ALTER TABLE `student_deep_mesure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_surface_mesure`
--
ALTER TABLE `student_surface_mesure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `surface_measure_answers`
--
ALTER TABLE `surface_measure_answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `surface_measure_questions`
--
ALTER TABLE `surface_measure_questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answers_after_deep`
--
ALTER TABLE `answers_after_deep`
  ADD CONSTRAINT `answers_after_deep_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answers_after_surface`
--
ALTER TABLE `answers_after_surface`
  ADD CONSTRAINT `answers_after_surface_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answers_before_deep`
--
ALTER TABLE `answers_before_deep`
  ADD CONSTRAINT `answers_before_deep_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answers_before_surface`
--
ALTER TABLE `answers_before_surface`
  ADD CONSTRAINT `answers_before_surface_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_before_surface_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `choices`
--
ALTER TABLE `choices`
  ADD CONSTRAINT `choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `deep_measure_answers`
--
ALTER TABLE `deep_measure_answers`
  ADD CONSTRAINT `deep_measure_answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `deep_measure_questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `deep_measure_answers_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lesson_goal`
--
ALTER TABLE `lesson_goal`
  ADD CONSTRAINT `lesson_goal_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quize`
--
ALTER TABLE `quize`
  ADD CONSTRAINT `quize_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiz_choices`
--
ALTER TABLE `quiz_choices`
  ADD CONSTRAINT `quiz_choices_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `quize` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `robot_chat`
--
ALTER TABLE `robot_chat`
  ADD CONSTRAINT `robot_chat_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_deep_mesure`
--
ALTER TABLE `student_deep_mesure`
  ADD CONSTRAINT `student_deep_mesure_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_surface_mesure`
--
ALTER TABLE `student_surface_mesure`
  ADD CONSTRAINT `student_surface_mesure_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surface_measure_answers`
--
ALTER TABLE `surface_measure_answers`
  ADD CONSTRAINT `surface_measure_answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `surface_measure_questions` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surface_measure_answers_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
