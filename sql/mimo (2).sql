-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2017 at 05:59 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mimo`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `about` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `genre1` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `genre2` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `genre3` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `career` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `followers` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `user_id`, `about`, `genre1`, `genre2`, `genre3`, `career`, `followers`) VALUES
(1, 1, '', '', '', '', '', 0),
(2, 2, '', '', '', '', '', 0),
(3, 3, '', '', '', '', '', 0),
(4, 4, '', 'Alternative Music', 'Classical Music', 'Country Music', 'Singer,Rockstar,Session Singer,', 0),
(5, 5, '', 'Dance Music', 'Reggae', 'New Age', 'Song Writer,Music Producer,DJ,', 0),
(6, 6, '', 'Indie Pop', 'Electronic Music', NULL, 'Rockstar,Instrumentalist,Band Member,', 0),
(7, 7, '', 'Latin Music', 'Blues', 'Indie Pop', 'Instrumentalist,Lyricist,Accompanist,', 0),
(8, 8, '', 'Opera', 'Jazz', NULL, 'Singer,', 0),
(9, 9, '', 'Inspirational (incl. Gospel)', NULL, NULL, 'Instrumentalist,', 0),
(10, 10, '', 'Country Music', 'Electronic Music', NULL, 'Composer,Band Member,', 0),
(11, 11, '', 'Electronic Music', NULL, NULL, 'Composer,DJ,', 0),
(12, 12, '', 'Easy Listening', 'Opera', NULL, 'Singer,Lyricist,', 0),
(13, 13, '', 'Hip Hop / Rap', 'Asian Pop (J-Pop, K-pop, OPM)', NULL, 'Singer,Rockstar,', 0),
(14, 14, '', 'Pop (Popular music)', 'Asian Pop (J-Pop, K-pop, OPM)', NULL, 'Band Member,Production Music Writer,', 0),
(15, 15, '', 'Inspirational (incl. Gospel)', NULL, NULL, 'Composer,Rockstar,', 0),
(16, 16, '', 'Alternative Music', 'Blues', NULL, 'Production Music Writer,', 0),
(17, 17, '', 'Blues', 'Jazz', 'Latin Music', 'DJ,Lyricist,', 0),
(18, 18, '', 'Blues', 'Reggae', NULL, 'Lyricist,Sound Designer,', 0),
(19, 19, '', 'Asian Pop (J-Pop, K-pop, OPM)', 'Blues', NULL, 'Sound Designer,Accompanist,', 0),
(20, 20, '', 'Latin Music', NULL, NULL, 'Composer,Session Musician,', 0),
(21, 21, '', 'Classical Music', 'Country Music', NULL, 'DJ,', 0),
(22, 22, '', 'New Age', 'Jazz', NULL, 'Rockstar,Instrumentalist,', 0),
(23, 23, '', 'Hip Hop / Rap', NULL, NULL, 'Music Designer,', 0),
(24, 24, '', 'Blues', NULL, NULL, 'Sound Designer,', 0),
(25, 25, '', 'Country Music', 'Asian Pop (J-Pop, K-pop, OPM)', 'Electronic Music', 'Singer,Song Writer,Music Producer,Composer,', 0),
(26, 26, '', 'Dance Music', NULL, NULL, 'Band Member,', 0),
(27, 27, '', 'Classical Music', 'Reggae', NULL, 'Song Writer,', 0),
(28, 28, '', 'Country Music', NULL, NULL, 'Singer,', 0),
(29, 29, '', 'Electronic Music', 'European Music (Folk / Pop)', NULL, 'Song Writer,Rockstar,', 0),
(30, 30, '', 'Blues', 'R&B / Soul', NULL, 'Lyricist,Sound Designer,', 0),
(31, 31, '', 'Country Music', NULL, NULL, 'Instrumentalist,', 0),
(32, 32, '', 'R&B / Soul', 'Opera', NULL, 'Background Singer,Lyricist,', 0),
(33, 33, '', 'Hip Hop / Rap', 'Dance Music', NULL, 'DJ,', 0),
(34, 34, '', 'Classical Music', 'Opera', NULL, 'Singer,Music Designer,', 0),
(35, 35, '', 'Alternative Music', 'Country Music', 'R&B / Soul', 'Singer,Band Member,', 0),
(36, 36, '', 'New Age', NULL, NULL, 'Singer,DJ,Background Singer,', 0),
(37, 37, '', 'Blues', 'New Age', NULL, 'Background Singer,Band Member,', 0),
(38, 38, '', 'Alternative Music', 'Asian Pop (J-Pop, K-pop, OPM)', NULL, 'Song Writer,Instrumentalist,', 0),
(39, 39, '', 'Jazz', 'Electronic Music', NULL, 'DJ,Sound Designer,', 0),
(40, 40, '', 'Blues', 'Jazz', NULL, 'Production Music Writer,Music Designer,', 0),
(41, 41, '', 'Opera', 'Indie Pop', NULL, 'Lyricist,Band Member,', 0),
(42, 42, '', 'Inspirational (incl. Gospel)', NULL, NULL, 'Composer,', 0),
(43, 43, '', 'Country Music', NULL, NULL, 'Singer,Song Writer,Composer,', 0),
(44, 44, '', 'Latin Music', 'Inspirational (incl. Gospel)', NULL, 'Instrumentalist,Background Singer,Music Designer,', 0),
(45, 45, '', 'Asian Pop (J-Pop, K-pop, OPM)', 'Indie Pop', NULL, 'Singer,DJ,Lyricist,', 0),
(46, 46, '', 'New Age', 'Electronic Music', 'Alternative Music', 'Music Producer,DJ,Session Singer,', 0),
(47, 47, '', 'New Age', 'Indie Pop', 'Blues', 'Singer,Song Writer,Music Producer,', 0),
(48, 48, '', 'Latin Music', 'Jazz', 'Blues', 'Rockstar,Band Member,Accompanist,', 0),
(49, 49, '', 'Latin Music', 'Indie Pop', 'European Music (Folk / Pop)', 'Singer,DJ,Lyricist,', 0),
(50, 50, '', 'Country Music', 'Pop (Popular music)', NULL, 'DJ,Lyricist,Band Member,', 0),
(51, 51, '', 'Opera', 'Inspirational (incl. Gospel)', 'Electronic Music', 'Music Producer,Instrumentalist,Production Music Writer,', 0),
(52, 52, '', 'New Age', 'Hip Hop / Rap', 'Jazz', 'Singer,DJ,Session Musician,', 0),
(53, 53, '', 'Easy Listening', 'Opera', NULL, 'Singer,Instrumentalist,Session Singer,', 0),
(54, 54, '', 'Jazz', 'European Music (Folk / Pop)', NULL, 'Singer,Production Music Writer,Music Designer,', 0),
(55, 55, '', 'Opera', 'Latin Music', NULL, 'DJ,Instrumentalist,Production Music Writer,', 0),
(56, 56, '', 'New Age', 'Inspirational (incl. Gospel)', 'European Music (Folk / Pop)', 'Rockstar,Band Member,Session Musician,', 0),
(57, 57, '', 'R&B / Soul', 'Reggae', 'Alternative Music', 'Music Producer,DJ,Background Singer,', 0),
(58, 58, '', 'R&B / Soul', 'Jazz', NULL, 'Singer,', 0),
(59, 59, '', 'Opera', 'Indie Pop', NULL, 'DJ,Band Member,Accompanist,', 0),
(60, 60, '', 'R&B / Soul', 'Jazz', 'Indie Pop', 'Singer,Production Music Writer,Music Designer,', 0),
(61, 61, '', 'Asian Pop (J-Pop, K-pop, OPM)', 'Inspirational (incl. Gospel)', NULL, 'Singer,Background Singer,Session Singer,', 0),
(62, 62, '', 'New Age', 'Indie Pop', NULL, 'Lyricist,Band Member,Production Music Writer,', 0),
(63, 63, '', 'Latin Music', 'Indie Pop', NULL, 'Music Producer,Rockstar,Lyricist,', 0),
(64, 64, '', 'Hip Hop / Rap', 'Opera', NULL, 'Lyricist,Band Member,Production Music Writer,', 0),
(65, 65, '', 'Asian Pop (J-Pop, K-pop, OPM)', 'Electronic Music', 'Blues', 'Singer,Background Singer,Session Musician,', 0),
(66, 66, '', 'Jazz', 'Electronic Music', 'Blues', 'Singer,Composer,Lyricist,', 0),
(67, 67, '', 'Jazz', 'Indie Pop', NULL, 'DJ,Instrumentalist,Accompanist,', 0),
(68, 68, '', 'European Music (Folk / Pop)', 'Classical Music', NULL, 'Singer,Song Writer,Lyricist,', 0),
(69, 69, '', 'Inspirational (incl. Gospel)', 'Classical Music', NULL, 'DJ,Rockstar,Production Music Writer,', 0),
(70, 70, '', 'Opera', NULL, NULL, 'Session Singer,', 0),
(71, 71, '', 'Latin Music', 'Indie Pop', 'Blues', 'Rockstar,Band Member,Accompanist,', 0),
(72, 72, '', 'Inspirational (incl. Gospel)', NULL, NULL, 'Singer,', 0),
(73, 73, '', 'Alternative Music', 'Blues', NULL, 'Singer,', 0),
(74, 74, '', 'Blues', 'Alternative Music', NULL, 'Song Writer,', 0),
(75, 75, '', 'Classical Music', 'Blues', 'Alternative Music', 'Music Producer,Composer,', 0),
(76, 76, '', 'Dance Music', 'Easy Listening', NULL, 'DJ,Rockstar,', 0),
(77, 77, '', 'Easy Listening', 'Electronic Music', NULL, 'Instrumentalist,Background Singer,', 0),
(78, 78, '', 'European Music (Folk / Pop)', 'Hip Hop / Rap', NULL, 'Instrumentalist,Background Singer,', 0),
(79, 79, '', 'Hip Hop / Rap', 'Indie Pop', NULL, 'Lyricist,Band Member,', 0),
(80, 80, '', 'Inspirational (incl. Gospel)', 'Asian Pop (J-Pop, K-pop, OPM)', NULL, 'Production Music Writer,Sound Designer,', 0),
(81, 81, '', 'Asian Pop (J-Pop, K-pop, OPM)', 'Jazz', NULL, 'Music Designer,Accompanist,', 0),
(82, 82, '', 'Jazz', 'Latin Music', NULL, 'Session Singer,Session Musician,', 0),
(83, 83, '', 'Latin Music', 'New Age', NULL, 'Singer,Session Musician,', 0),
(84, 84, '', 'New Age', 'Opera', 'Alternative Music', 'Song Writer,Session Singer,', 0),
(85, 85, '', 'Opera', 'Pop (Popular music)', 'Alternative Music', 'Music Producer,Music Designer,', 0),
(86, 86, '', 'Pop (Popular music)', 'R&B / Soul', 'Blues', 'Music Producer,Composer,Sound Designer,', 0),
(87, 87, '', 'Reggae', 'Alternative Music', 'Blues', 'Composer,DJ,Sound Designer,', 0),
(88, 88, '', 'Reggae', 'R&B / Soul', 'Country Music', 'Composer,Rockstar,Production Music Writer,', 0),
(89, 89, '', 'Pop (Popular music)', 'Latin Music', 'Country Music', 'Singer,Rockstar,Production Music Writer,', 0),
(90, 90, '', 'Electronic Music', 'Asian Pop (J-Pop, K-pop, OPM)', 'Jazz', 'Rockstar,Lyricist,Band Member,', 0),
(91, 91, '', 'Asian Pop (J-Pop, K-pop, OPM)', 'Easy Listening', 'Country Music', 'Rockstar,Lyricist,', 0),
(92, 92, '', 'New Age', 'Electronic Music', 'Classical Music', 'Song Writer,Lyricist,Session Singer,', 0),
(93, 93, '', 'Opera', 'European Music (Folk / Pop)', NULL, 'Lyricist,', 0),
(94, 94, '', 'Opera', 'Latin Music', NULL, 'Lyricist,Production Music Writer,Sound Designer,', 0),
(95, 95, '', 'Opera', 'Hip Hop / Rap', 'Blues', 'Song Writer,DJ,Band Member,', 0),
(96, 96, '', 'Opera', 'Asian Pop (J-Pop, K-pop, OPM)', NULL, 'DJ,Band Member,Session Musician,', 0),
(97, 97, '', 'R&B / Soul', 'Inspirational (incl. Gospel)', NULL, 'Rockstar,Lyricist,', 0),
(98, 98, '', 'Opera', 'European Music (Folk / Pop)', NULL, 'DJ,Background Singer,Lyricist,', 0),
(99, 99, '', 'Opera', 'Country Music', 'Easy Listening', 'DJ,Rockstar,Lyricist,', 0),
(100, 100, '', 'Inspirational (incl. Gospel)', 'Dance Music', 'Blues', 'DJ,Lyricist,Accompanist,', 0),
(101, 101, '', 'Asian Pop (J-Pop, K-pop, OPM)', 'Electronic Music', 'Jazz', 'Lyricist,', 0),
(102, 102, '', 'European Music (Folk / Pop)', 'Easy Listening', 'Inspirational (incl. Gospel)', 'Song Writer,Music Producer,DJ,', 0);

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(100) NOT NULL,
  `about` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `path` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `topics` varchar(200) NOT NULL,
  `views` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='upload audio';

--
-- Dumping data for table `audios`
--

INSERT INTO `audios` (`id`, `post_id`, `title`, `genre`, `about`, `date`, `path`, `cover`, `topics`, `views`) VALUES
(1, 2, 'Release Audio', ' Opera', '#Audio Description', '2017-10-22 22:01:35', 'http://localhost/mimo/assets/uploads/audios/97959eca4b9ba075.mp3', 'https://i.imgur.com/Us231DW.jpg', 'Audio,', 0),
(2, 6, 'Mimo Release Audio', ' None', 'Audio Description', '2017-10-22 22:18:07', 'http://localhost/mimo/assets/uploads/audios/3258559eca89fc897c.mp3', 'https://i.imgur.com/GZr4AiQ.jpg', '', 0),
(3, 7, 'Isa pang Audio', ' Latin Music', 'Sample Description', '2017-10-22 22:21:06', 'http://localhost/mimo/assets/uploads/audios/827059eca94d130b9.mp3', 'https://i.imgur.com/kOheYzP.jpg', '', 0),
(4, 8, 'Shaun Audio', ' None', 'Shaun Audio\'s Description', '2017-10-22 22:24:21', 'http://localhost/mimo/assets/uploads/audios/2463259ecaa12551fb.mp3', 'https://i.imgur.com/VQO6bCP.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `count` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='music play lists';

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `user_id`, `name`, `count`) VALUES
(1, 3, 'Mimo\'s Playlist', 14),
(2, 2, 'Shaun\'s Playlist', 13),
(4, 1, 'All Songs', 16);

-- --------------------------------------------------------

--
-- Table structure for table `collection_songs`
--

CREATE TABLE `collection_songs` (
  `id` int(11) UNSIGNED NOT NULL,
  `collection_id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection_songs`
--

INSERT INTO `collection_songs` (`id`, `collection_id`, `post_id`) VALUES
(1, 1, 7),
(2, 1, 6),
(3, 2, 8),
(5, 4, 2),
(6, 4, 6),
(7, 4, 7),
(8, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `posted_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `follower_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follower_id`) VALUES
(1, 1, 93),
(2, 2, 93),
(3, 1, 96);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='listahan ng genres';

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'None'),
(2, 'Alternative Music'),
(3, 'Blues'),
(4, 'Classical Music'),
(5, 'Country Music'),
(6, 'Dance Music'),
(7, 'Easy Listening'),
(8, 'Electronic Music'),
(9, 'European Music (Folk / Pop)'),
(10, 'Hip Hop / Rap'),
(11, 'Indie Pop'),
(12, 'Inspirational (incl. Gospel)'),
(13, 'Asian Pop (J-Pop, K-pop, OPM)'),
(14, 'Jazz'),
(15, 'Latin Music'),
(16, 'New Age'),
(17, 'Opera'),
(18, 'Pop (Popular music)'),
(19, 'R&B / Soul'),
(20, 'Reggae'),
(21, 'Rock'),
(22, 'World Music / Beats');

-- --------------------------------------------------------

--
-- Table structure for table `login_tokens`
--

CREATE TABLE `login_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `token` char(64) NOT NULL,
  `login_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tokens`
--

INSERT INTO `login_tokens` (`id`, `user_id`, `token`, `login_time`) VALUES
(21, 1, '0d31da0475185ea6205284397d0e5906f9c57382', '2017-10-22 22:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` int(11) UNSIGNED NOT NULL,
  `receiver` int(11) UNSIGNED NOT NULL,
  `sender` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `notifurl` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `receiver`, `sender`, `post_id`, `notifurl`, `date`, `status`) VALUES
(1, 1, 1, 2, 4, 'http://localhost/mimo/notification?pid=4', '2017-10-22 22:06:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `oauth`
--

CREATE TABLE `oauth` (
  `id` int(11) UNSIGNED NOT NULL,
  `oauth_provider` varchar(255) NOT NULL,
  `oauth_uid` varchar(255) NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) NOT NULL,
  `picture_url` varchar(255) NOT NULL,
  `profile_url` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_token`
--

CREATE TABLE `oauth_token` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(32) NOT NULL,
  `token` char(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_tokens`
--

CREATE TABLE `password_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `token` char(64) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `likes` int(11) UNSIGNED NOT NULL,
  `comments` int(11) UNSIGNED NOT NULL,
  `posted_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` tinyint(4) NOT NULL,
  `reports` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `likes`, `comments`, `posted_at`, `type`, `reports`) VALUES
(1, 1, 0, 0, '2017-10-22 21:57:22', 1, 0),
(2, 1, 1, 0, '2017-10-22 22:01:35', 2, 0),
(4, 2, 0, 0, '2017-10-22 22:06:25', 1, 0),
(5, 2, 0, 0, '2017-10-22 22:10:47', 3, 0),
(6, 3, 0, 0, '2017-10-22 22:18:07', 2, 0),
(7, 3, 0, 0, '2017-10-22 22:21:05', 2, 0),
(8, 2, 0, 0, '2017-10-22 22:24:21', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--

CREATE TABLE `post_likes` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_likes`
--

INSERT INTO `post_likes` (`id`, `post_id`, `user_id`) VALUES
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thoughts`
--

CREATE TABLE `thoughts` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `body` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `topics` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thoughts`
--

INSERT INTO `thoughts` (`id`, `post_id`, `body`, `topics`) VALUES
(1, 1, 'Share a Post Sample', ''),
(2, 4, 'Shaun Share a thought @SheiraM', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `picture`, `header`, `created`, `modified`) VALUES
(1, 'SheiraM', 'Sheira', 'Man-awit', '$2y$10$lzeI/Bn6PHpDRTHZ0S42b.dXy5cxGZaGyE1oPOxDDor6p1DVSzgOK', 's.cmanawit@gmail.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 21:56:35', '2017-10-22 22:25:38'),
(2, 'Shaun', 'Shaun', 'Xander', '$2y$10$K59I1u4OkRToaB/4KmMkhekZHWTAO7qNigXA3b3k.mIeKdmNrM3yK', 'shaun@xander.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 22:05:53', '2017-10-22 22:23:17'),
(3, 'Mimo', 'Mimo', 'Music', '$2y$10$BlIkp9PffEdoycUMCyCroe4Lu15RO15otc0EnehOZSFgT9WMerpnu', 'thisismimomusic@gmail.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 22:12:26', '2017-10-22 22:12:26'),
(4, 'Aspectkraken', 'Sophia', 'Smith', '$2y$10$n/nWi3/UbukNzGjLbSjD5u5doQb1obUijnCVUOV5C1.I3vBLXoBR2', 'Aspectkraken@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:12:16', '2017-10-22 23:12:16'),
(5, 'Benderlynch', 'Emma', 'Johnson', '$2y$10$GJEpNIw2LB7zveD2OCahk.wNjao8.zrEQGdZqmWbny..s1g94gi5S', 'Benderlynch@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:14:02', '2017-10-22 23:14:02'),
(6, 'MadDog', 'Olivia', 'Williams', '$2y$10$GbtXU3KhZ.k.PfCmf0jiTOVMuw7AlQ0W/jxAiyryHwo7eh/vsLKTa', 'MadDog@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:15:33', '2017-10-22 23:15:33'),
(7, 'Psycho', 'Mia', 'Jones', '$2y$10$kfI1ycMbj8fegQaFdaJi/uocb4JySmcuvKvRDJTkjCU9WcjyotTwG', 'Psycho@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:16:50', '2017-10-22 23:17:36'),
(8, 'CannonRanger', 'Isabella', 'Brown', '$2y$10$Hgidl3y95bRs7NTS24R/g.VqolI6EohWL0pcdKT/6atlUlfcmeiHy', 'CannonRanger@gmail.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:18:22', '2017-10-22 23:18:22'),
(9, 'ClinkRatchet', 'Riley', 'Davis', '$2y$10$yHO9c06gYP4tHOhP8iU7V.cL7yrMWPIAKSpwf8SPyblzC/priwc2y', 'ClinkRatchet@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:19:18', '2017-10-22 23:19:18'),
(10, 'CobraReaper', 'Aria', 'Miller', '$2y$10$wc5NEO8ldcYwJwbbAv1op.WM0xcpsz5f4uaWn1R.Qp8mGhN/we6Wm', 'CobraReaper@yahoo.com', 'https://i.imgur.com/TksIy7u.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:22:43', '2017-10-22 23:22:43'),
(11, 'ColtRigs', 'Zoe', 'Wilson', '$2y$10$waP0g7CcZFUVj2TKFcfiyeFmNxyPXQjksDH8BN7qMDfI.0qLpJcc.', 'ColtRigs@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:26:25', '2017-10-22 23:26:25'),
(12, 'CrankRipley', 'Charlotte', 'Moore', '$2y$10$Sua57bQ53qwhAQEJ8heFpuy/5SqOPS0hC/wc3tkZ3Olto1ChM4ax2', 'CrankRipley@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:27:24', '2017-10-22 23:27:24'),
(13, 'Roadkill', 'Jackson', 'Taylor', '$2y$10$RLPw/jcna/K.spIOoInIou18etiZvQaenliaqvw3QFrag0UsvHLmS', 'Roadkill@yahoo.com', 'https://i.imgur.com/wQgvZ4I.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:28:19', '2017-10-22 23:28:19'),
(14, 'DaemonRonin', 'Aiden', 'Anderson', '$2y$10$peKoiSit/T4cqyCLFbWjxOQIAmGa4WrF6GugkySXh5VRGQ2/4RHca', 'DaemonRonin@yahoo.com', 'https://i.imgur.com/tKnPPr5.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:30:40', '2017-10-22 23:30:40'),
(15, 'DecayRubble', 'Lucas', 'Thomas', '$2y$10$s6mXwP7tiChWWo8Kw/lD0.8rKT2yfXEuiSPF86xb5EEmB2n9xFZ0i', 'DecayRubble@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:32:34', '2017-10-22 23:32:34'),
(16, 'Sasquatch', 'Liam', 'Jackson', '$2y$10$2tYVOZ6Y4cRRCTQ1TECpQ.NL7OV9geUr4fBt7OmMr7x.DiehCB2zu', 'Sasquatch@yahoo.com', 'https://i.imgur.com/O1uuPS8.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:33:55', '2017-10-22 23:33:55'),
(17, 'DraculaShiver', 'Ethan', 'Harris', '$2y$10$z5HUDQlAwKchQWIYCxuHBejckRrP.xAwaRwT/yDcKX0Qy58cRRkwu', 'DraculaShiver@yahoo.com', 'https://i.imgur.com/LTzU2uR.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:37:01', '2017-10-22 23:37:01'),
(18, 'DoomScar', 'Noah', 'White', '$2y$10$ih5JpRHTQBwkjttdHJbsC.XIYO0tMyH/vPnp2SpnGSo.4lWzEWtQm', 'DoomScar@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:39:37', '2017-10-22 23:39:37'),
(19, 'DragonSkinner', 'Mason', 'Martin', '$2y$10$ktM7e9EUtOP7HGeNcivQeuDa7prsyPQG8dPZIoi1F1o93jkQ5qXq.', 'DragonSkinner@yahoo.com', 'https://i.imgur.com/Blzo4qd.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:40:36', '2017-10-22 23:40:36'),
(20, 'SkullCrusher', 'Caden', 'Thompson', '$2y$10$FaEsGGkUTv47Bfmd75Wolew9rm0L0D8Y2laZkoLNLsFxVBgP2nfGK', 'SkullCrusher@yahoo.com', 'https://i.imgur.com/ww819C3.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:43:13', '2017-10-22 23:43:13'),
(21, 'FesterSlasher', 'Oliver', 'Garcia', '$2y$10$hztkIOWGhyhk32oUEs0p1uL7MxmzFm6D/epIQP0CVXb2SHhUYdkDu', 'FesterSlasher@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:45:07', '2017-10-22 23:45:07'),
(22, 'FisheyeSteelshot', 'Elijah', 'Martinez', '$2y$10$flNptWnhAElRLEF.TQlnou/SoazB7MAaIHk44hHuwe3MqozqLtQl.', 'FisheyeSteelshot@yahoo.com', 'https://i.imgur.com/ZV8OS2Y.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:46:09', '2017-10-22 23:46:09'),
(23, 'FlackSurge', 'Lily', 'Robinson', '$2y$10$oZ5CLKAtqEimPvf.WpJNR.t2kgwldrYyPZ.UUqI9xEwCeupMUpPGS', 'FlackSurge@yahoo.com', 'https://i.imgur.com/mKF3QuU.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:49:04', '2017-10-22 23:49:04'),
(24, 'GargoyleSythe', 'Layla', 'Clark', '$2y$10$KC54wNvTsfon30KXPmPguuSJn3hVCezGT/hc5DYA6aqSld40glQmK', 'GargoyleSythe@yahoo.com', 'https://i.imgur.com/9Cm7Iqn.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:50:45', '2017-10-22 23:50:45'),
(25, 'GraveTrip', 'Amelia', 'Rodriguez', '$2y$10$xX34z4.TWe6vaiVLHvBjoey3Etcnwd57Y4LpNww7eKPSAMItQHFrO', 'GraveTrip@yahoo.com', 'https://i.imgur.com/pBHHf85.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:52:41', '2017-10-22 23:52:41'),
(26, 'GunnerTrooper', 'Emily', 'Lewis', '$2y$10$c8VEqp8hRdJtNEjkBZtxP.qbPCvWetsYtFh2Iwk7AKJ4xZETn9kze', 'GunnerTrooper@yahoo.com', 'https://i.imgur.com/VfJpUDu.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:55:32', '2017-10-22 23:55:32'),
(27, 'HashTweek', 'Madelyn', 'Lee', '$2y$10$tIp/C93jCysopaXVtui7g.BiSjzigTOaAC2fKP5KVc2ZiMiKq3cOG', 'HashTweek@yahoo.com', 'https://i.imgur.com/fg9vEeu.png', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:57:07', '2017-10-22 23:57:07'),
(28, 'HashtagVein', 'Aubrey', 'Walker', '$2y$10$I5HcogOcUQdAmRX6JZ1aOu6YyiNhPVqlJDhcaZFOWbJ1fcQS..dEG', 'HashtagVein@yahoo.com', 'https://i.imgur.com/8gzwzRy.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 23:59:29', '2017-10-22 23:59:29'),
(29, 'IndominusVoid', 'Adalyn', 'Hall', '$2y$10$D9ZdPBgHyB80f2tfwVJjKOa7vl7RWCsL7dpn7PVk/QHpCgayiir66', 'IndominusVoid@yahoo.com', 'https://i.imgur.com/QX7zw59.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:01:54', '2017-10-23 00:01:54'),
(30, 'IronClad', 'Madison', 'Allen', '$2y$10$eEdXdpjwjf9VTVnkcaR68OBor86zDIKzm0QAtMDM/m36UPNXYWCJ6', 'IronClad@yahoo.com', 'https://i.imgur.com/Justo8D.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:03:02', '2017-10-23 00:03:02'),
(31, 'KillerWraith', 'Chloe', 'Young', '$2y$10$UGO0o7hoRzpsd1JoePnfreM2WE45ROpItK9DB6o15R7tU9Ud/hNri', 'KillerWraith@yahoo.com', 'https://i.imgur.com/4GaLGOl.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:04:41', '2017-10-23 00:04:53'),
(32, 'KnucklesZero', 'Harvey', 'Hernandez', '$2y$10$KOG.9ubmYRfRJqXhjSv/7eUtoPmjlvqYnzjTZGmFwU/ku3R7Ao/4S', 'KnucklesZero@yahoo.com', 'https://i.imgur.com/aHZpKYd.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:11:25', '2017-10-23 00:11:25'),
(33, 'Bulletproof', 'Grayson', 'King', '$2y$10$xAJm4HAr3/vif0YM4so9A.ebJCcLKBMWXTNE05pspcQTr1aaHcewy', 'Bulletproof@yahoo.com', 'https://i.imgur.com/K7iHS1O.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:12:39', '2017-10-23 00:12:39'),
(34, 'Steelforge', 'Jacob', 'Wright', '$2y$10$nEhibuAUdfpos4jZTWdA5eDJ14YgwrqzdIkM43KtqBKSIYaQ5POF6', 'Steelforge@yahoo.com', 'https://i.imgur.com/ecWmJ4x.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:14:12', '2017-10-23 00:14:12'),
(35, 'IronHeart', 'Michael', 'Lopez', '$2y$10$9xXheiJqM15he3aqbfYp/.4w7ub4yJC3TAO2K3ziulE0j9e1EJ.Yy', 'IronHeart@yahoo.com', 'https://i.imgur.com/74IhfSO.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:15:12', '2017-10-23 00:15:12'),
(36, 'SteelFoil', 'Benjamin', 'Hill', '$2y$10$K2CB0QRRjXibWpT5f2f6DOFsOasa8V2WmBeUYotq5DuGLtuEkEP1y', 'SteelFoil@yahoo.com', 'https://i.imgur.com/eil6Rs2.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:16:45', '2017-10-23 00:16:45'),
(37, 'Ironsides', 'Carter', 'Scott', '$2y$10$P0nPwNwHJmKDITCc3PWcgOiBulnXD63XI.chWxll0daF/6scy6/Iq', 'Ironsides@yahoo.com', 'https://i.imgur.com/WEG3F0s.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:18:09', '2017-10-23 00:18:09'),
(38, 'Firebred', 'James', 'Green', '$2y$10$AINke.n21UDfboyMlOm2m.8GaljvXw5cVmA5of3nRzT.t19gLCQ5a', 'Firebred@yahoo.com', 'https://i.imgur.com/Kp6M6FN.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:20:34', '2017-10-23 00:20:34'),
(39, 'Lightning', 'Jayden', 'Adams', '$2y$10$z7kPC5Xo9cOB1UWuYkXjCu5bAOR3qr5K9pArq5Y7o7ZrS1FqfIRKq', 'Lightning@yahoo.com', 'https://i.imgur.com/gRUQfDd.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:21:55', '2017-10-23 00:21:55'),
(40, 'Upsurge', 'Alex', 'Baker', '$2y$10$Exko8RsPRe2fkNUyjW8sme6XAC0JzzmVBmspQlnO5s6Q3hdz6jD5C', 'Upsurge@yahoo.com', 'https://i.imgur.com/nNdvQ3r.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:23:01', '2017-10-23 00:23:01'),
(41, 'Sabotage', 'Alexander', 'Gonzalez', '$2y$10$adTQWk0RwvJusbzVafHpr.OpdM7nrZi567fTwo6pPWOhrORZnRVie', 'Sabotage@yahoo.com', 'https://i.imgur.com/rmzmIyC.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:24:11', '2017-10-23 00:24:11'),
(42, 'Subversion', 'Caleb', 'Nelson', '$2y$10$R5iquzYzGP6tMVJot0AVCO8JNB3/W9qnnU5v8aHT.vztGW4kP07T2', 'Subversion@yahoo.com', 'https://i.imgur.com/XKLmLly.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:25:29', '2017-10-23 00:25:29'),
(43, 'Rebellion', 'Abigail', 'Carter', '$2y$10$Yy43bpz9J3ph1QsOzaVvMeGpvPHHiLZqCSgnOdIWzR3C5eAICFBgC', 'Rebellion@yahoo.com', 'https://i.imgur.com/8USbnBo.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:26:50', '2017-10-23 00:26:50'),
(44, 'Manticore', 'Aaliyah', 'Mitchell', '$2y$10$H69.ehwZXdIR14shm41Gq.UuFAUr0nlNZoa3q60eWjCfU6WBIZHMu', 'Manticore@yahoo.com', 'https://i.imgur.com/gJXbZlU.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:28:12', '2017-10-23 00:28:12'),
(45, 'Behemoth', 'Avery', 'Perz', '$2y$10$NqOSisiEh.JjQJ4WuIYANuMZvX3rso7WrkAeVW90CLDpAFMxlL/7O', 'Behemoth@yahoo.com', 'https://i.imgur.com/9FA9HiK.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:30:12', '2017-10-23 00:30:12'),
(46, 'Leviathan', 'Evelyn', 'Roberts', '$2y$10$yfm5q81jfh8K/.8fyTMIxe7tEXydHlCy62dBCCZKBxCdkNYmdjZdu', 'Leviathan@gmail.com', 'https://i.imgur.com/yrlI3Ro.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:31:31', '2017-10-23 00:31:31'),
(47, 'Frenzy', 'Kaylee', 'Turner', '$2y$10$ub6v4qi4ck5kmMe0CbQ3h.9OqmYxyt5bvSLoXQ0z4TscBSWNRQBY6', 'Frenzy@yahoo.com', 'https://i.imgur.com/fdgPdlE.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:33:00', '2017-10-23 00:33:00'),
(48, 'Derange', 'Ryan', 'Phillips', '$2y$10$rdkmtMKPvrTqIJ8OVzBoSOlBeNjjBNs65vrC8S7dxVQcaEojtJX.2', 'Derange@yahoo.com', 'https://i.imgur.com/OQYYMIV.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:34:25', '2017-10-23 00:34:25'),
(49, 'Demented', 'Luke', 'Campbell', '$2y$10$cdo338J0KDWY61txeI2ZA.FYHHKTn2PAgfDWy1uNdf3DfW5GuzZLG', 'Demented@yahoo.com', 'https://i.imgur.com/IsjhshS.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:37:08', '2017-10-23 00:37:08'),
(50, 'Madness', 'Danel', 'Parker', '$2y$10$ELng1vr0wIfs331uXRJep.idq6ZZ.RTJu286RdzUh/QSGAxU47wcG', 'Madness@yahoo.com', 'https://i.imgur.com/MzE8Cd3.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:38:01', '2017-10-23 00:38:01'),
(51, 'Terminator', 'Jack', 'Evans', '$2y$10$i6buph/3lUELJz/cqq9alOdIo5V4dICtuwnkvhUShIP6uuWbo/Xv.', 'Terminator@yahoo.com', 'https://i.imgur.com/OBfLfQP.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:39:25', '2017-10-23 00:39:25'),
(52, 'Conqueror', 'William', 'Edwards', '$2y$10$itkJlCcHIlnJqR4vxpw7PutBCB6GuIYhX3c81Ivr2iGeqQ2k.lBjC', 'Conqueror@yahoo.com', 'https://i.imgur.com/7lTSoG2.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:40:40', '2017-10-23 00:40:40'),
(53, 'MadMax', 'Ella', 'Collins', '$2y$10$fLEG1GCdDpyLQ.olFfM2SeZAQjBX3Wfqlu5QySolTpatLiv.WJQNq', 'MadMax@yahoo.com', 'https://i.imgur.com/OfmPmhF.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:41:42', '2017-10-23 00:41:42'),
(54, 'Matrix', 'Ellie', 'Stewart', '$2y$10$Q3zgXeSKMoTyUBjmOea7I.NahgUFyfVFW2yBdgyWYYf9n1rp8uKtO', 'Matrix@yahoo.com', 'https://i.imgur.com/og3G1Oq.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:42:50', '2017-10-23 00:42:50'),
(55, 'Agrippa', 'Scarlett', 'Sanchez', '$2y$10$wjUXEfj21wcmTxjE0e8dH.9Ll5E8AvdIklrhHq5UW6CDE1KXsMOfu', 'Agrippa@yahoo.com', 'https://i.imgur.com/7UZPzpP.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:43:49', '2017-10-23 00:43:49'),
(56, 'Hannibal', 'Arianna', 'Morris', '$2y$10$6jNy.W84UVN043NfkSTkouekAi/8LGd4vOM0VHUaH/lIoeIwAl1Oy', 'Hannibal@yahoo.com', 'https://i.imgur.com/D8zVs58.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:44:51', '2017-10-23 00:44:51'),
(57, 'Leonidas', 'Hailey', 'Roggers', '$2y$10$MAw5e2AR8mOciT9Zk.TIqejpq.e9DQXDWb/vWFy4Wc9sjPqD0G022', 'Leonidas@yahoo.com', 'https://i.imgur.com/Vx0DyAZ.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:46:05', '2017-10-23 00:46:05'),
(58, 'JesseJames', 'Owen', 'Reed', '$2y$10$jO87nxLL1mD72INvBlj/3.0kOZ2NclZdQlzwTu0JPk3CXFS7UiaFW', 'JesseJames@yahoo.com', 'https://i.imgur.com/dxs1b9E.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:47:51', '2017-10-23 00:47:51'),
(59, 'BillyTheButcher', 'Gabriel', 'Cook', '$2y$10$L3i.PGzwK//G83c8FcCUleBRgA/Ii91hXVMvO40B4gdg.XnkgYpWO', 'BillyTheButcher@yahoo.com', 'https://i.imgur.com/fKRC4Qa.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:49:20', '2017-10-23 00:49:20'),
(60, 'Geronimo', 'Matthew', 'Morgana', '$2y$10$AuzCQZnBvJrl4LiXAZ4Q6e8ZKkWGSNNLddx6yrDIcf8zYjG5LSr.6', 'Geronimo@yahoo.com', 'https://i.imgur.com/GXD4voG.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:50:29', '2017-10-23 00:50:37'),
(61, 'Darko', 'Connor', 'Bell', '$2y$10$FvG4Bqojvr5szkrN.RKO0ekeWduUXAe8tyca2OeRluQ4Bfm9bVzQ2', 'Darkoo@yahoo.com', 'https://i.imgur.com/r8aDeEs.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:52:17', '2017-10-23 00:52:17'),
(62, 'Dux', 'Jayce', 'Murphy', '$2y$10$EzVlhu9ALMTo2lQWLhioWeQ1ETN3yTjGe5NyA7B1JKMN/tAYF.anO', 'Duxeee@yahoo.com', 'https://i.imgur.com/uEwyszm.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:53:33', '2017-10-23 00:53:33'),
(63, 'Thor', 'Nora', 'Bailey', '$2y$10$vdq9v1k4pykRaFRZ1ovJCuItQtLbZlQiqhOpvtiE1ZJJ81tTCch7e', 'Thor@yahoo.com', 'https://i.imgur.com/iu4UtWD.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:54:45', '2017-10-23 00:54:45'),
(64, 'Jawbone', 'Addison', 'Rivera', '$2y$10$Kj3Osgz93x4PjGQXcOyfsueGbcwyqKTuvgKNo6eIh3nvZHOyqjclK', 'Jawbone@yahoo.com', 'https://i.imgur.com/DTO4WkD.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 00:56:05', '2017-10-23 00:56:05'),
(65, 'xSkull', 'Brooklyn', 'Cooper', '$2y$10$V4P4OIkilfCUH27.J.9r7uVJLf97hn6ywkzpksH8WcTheZ8rF5KGW', 'x-Skull@yahoo.com', 'https://i.imgur.com/8kpSvzQ.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:02:17', '2017-10-23 01:02:17'),
(66, 'Socket', 'Hannah', 'Richardson', '$2y$10$W41SHNj2Wm.pmyroIMXOJe1jEtA/3RNm/oQa/GV9VFn7Hw0/pVg/S', 'Socket@yahoo.com', 'https://i.imgur.com/RQvoD29.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:03:43', '2017-10-23 01:03:43'),
(67, 'HeadKnocker', 'Mila', 'Cox', '$2y$10$sjpcApAz657f76Sfb4trz.M5O7elVUncBBXqOqlzbW/u/z6DRdUP.', 'HeadKnocker@yahoo.com', 'https://i.imgur.com/BUWRpz0.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:05:01', '2017-10-23 01:05:01'),
(68, 'Razor', 'Leah', 'Howard', '$2y$10$IY13Z17UuJ32lqc/Cnvx.O21.dCn67u4AjPwR2ggS.TlziMWKizxS', 'Razor@yahoo.com', 'https://i.imgur.com/elQWDQH.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:06:10', '2017-10-23 01:06:10'),
(69, 'Slaughter', 'Elizabeth', 'Ward', '$2y$10$FMKG8wPXsposyfS9uwdnYuVi3V6SjquEErUV3m6MD7vX4LK7F3h3.', 'Slaughter@yahoo.com', 'https://i.imgur.com/xsJZ7Xd.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:07:28', '2017-10-23 01:07:28'),
(70, 'Torque', 'Sarah', 'Torres', '$2y$10$VuF3vCNv6S6a6Y5Zf2zZlu8X1MgRQwKoTmYqizcgmVXs8NkFLRvLS', 'Torque@yahoo.com', 'https://i.imgur.com/OF11Pzm.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:08:28', '2017-10-23 01:08:28'),
(71, 'Skeleton', 'Elian', 'Peterson', '$2y$10$sWGb8kaN5NVPmZu/S1GnVe2LLY9zhi8/2AROV7ovCEelDSz/ytE5O', 'Skeleton@yahoo.com', 'https://i.imgur.com/uPBDYxB.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:09:27', '2017-10-23 01:09:27'),
(72, 'CutScab', 'Mackenzie', 'Gray', '$2y$10$lp8.6AxoZjhsrO/R5opDeOo5DAY.iSvnVNSBf/JNNK.pAKRlcZ7US', 'CutScab@yahoo.com', 'https://i.imgur.com/brg2ISE.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:10:47', '2017-10-23 01:10:47'),
(73, 'NailGut', 'Isaac', 'Ramirez', '$2y$10$38JbfZ48.K2bYoh43wpra.OKNJPezOZXW7nHtPK6ACAGcDU4L09b2', 'NailGut@yahoo.com', 'https://i.imgur.com/lVziZ2j.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:12:03', '2017-10-23 01:12:03'),
(74, 'Wracker', 'Sebastian', 'James', '$2y$10$3zhph2uWlem.1byu4nURc.WxeJ4s6AXvuBA0/vgk5fDfws30bamie', 'Wracker@yahoo.com', 'https://i.imgur.com/opyCAOQ.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:12:57', '2017-10-23 01:12:57'),
(75, 'Stabber', 'Henry', 'Watson', '$2y$10$H0U5NxnWq2VW2BWP33VKdOACKeEX7lTUjYN1x2kBm01fSkDEcECoO', 'Stabber@yahoo.com', 'https://i.imgur.com/z9ptDzj.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:13:57', '2017-10-23 01:13:57'),
(76, 'Destroyer', 'Muhammad', 'Brooks', '$2y$10$Kq59QlUlWYxrXxz63um6ae.cI2c9Z58QI.9eoi8UThSjHtkd1iOAW', 'Destroyer@yahoo.com', 'https://i.imgur.com/PXdm9Ug.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:15:10', '2017-10-23 01:15:10'),
(77, 'Overtaker', 'Cameron', 'Kelly', '$2y$10$fm8X6ulk9RiD9pKOG84UX.ToVUh0hIJO2XvrAXEAVFmfNrtlWLcWW', 'Overtaker@yahoo.com', 'https://i.imgur.com/e4mN2ly.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:16:17', '2017-10-23 01:16:17'),
(78, 'Sanders', 'Wyatt', 'Sanders', '$2y$10$gLNekWGljPNYcvkScB.IP.fCTgtBKHouqNVLnd2HX29S4clDWeRDK', 'Sanders@yahoo.com', 'https://i.imgur.com/hEFBQlc.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:17:17', '2017-10-23 01:17:17'),
(79, 'Rebel', 'Dylan', 'Price', '$2y$10$zSYKE9/qCG5XCX7MWst//e53iVYwVlpSN6XAZ9iIg3wBaV6BlCt0y', 'Rebel@yahoo.com', 'https://i.imgur.com/MKzExGe.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:19:04', '2017-10-23 01:19:04'),
(80, 'Trsher', 'Nicholas', 'Bennett', '$2y$10$QUL0FNOevJMyI6PA1pa0FONEVvB2.OeAOwMB8Cuhr2rTVFsuJtMDi', 'Trsher@yahoo.com', 'https://i.imgur.com/FHYFJkr.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:20:13', '2017-10-23 01:20:13'),
(81, 'Cannon', 'Nicholas', 'Wood', '$2y$10$PYfd4wl5XZFVBvoz4oPfXOqYQ6tmslKDjcIOqUtwiB1wCMz7baB0C', 'Cannon@yahoo.com', 'https://i.imgur.com/bhAadWf.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:21:39', '2017-10-23 01:21:39'),
(82, 'StrikeEagle', 'Julian', 'Barnes', '$2y$10$2ntlWmuKiwQJXuqnyt8P3ebX7FBNG8/ay6zus2pbuWL3Jkc2YWSxS', 'StrikeEagle@yahoo.com', 'https://i.imgur.com/PqIdzlJ.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:23:00', '2017-10-23 01:23:00'),
(83, 'Rimfire', 'Peyton', 'Ross', '$2y$10$bqrYV/VpVRP.TjoigktQU.s4r9j872/hyUWPJcgXqnahftgR3l7yW', 'Rimfire@yahoo.com', 'https://i.imgur.com/V22DhRw.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:24:16', '2017-10-23 01:24:16'),
(84, 'Avenger', 'Maria', 'Henderson', '$2y$10$8AnaovOkdNH5azYVH7Sf8OdArjDufNJEfLrMz4SrZJmVce1.GHqIC', 'Avenger@yahoo.com', 'https://i.imgur.com/DKjkwED.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:26:05', '2017-10-23 01:26:05'),
(85, 'Carbine', 'Grace', 'Coleman', '$2y$10$KnhZDBNaNKOM5U4NQl8S9ePY37KIELdMrW3nafXKDXULAXoeLe1hi', 'Carbine@yahoo.com', 'https://i.imgur.com/tRSYy4G.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:27:10', '2017-10-23 01:27:10'),
(86, 'Javelin', 'Adeline', 'Jenkins', '$2y$10$yRp6T6nJ94vbevDbJ8gCLeBUu83fzd402oiPTEI6JIUVoXiYlJ9ye', 'Javelin@yahoo.com', 'https://i.imgur.com/LYCDpWX.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:28:48', '2017-10-23 01:28:48'),
(87, 'Hornet', 'Elena', 'Perry', '$2y$10$Y8CmorPdNblx27V./90AceLMEj3ekppuL2yS5b3T8vwTSfNztNAtq', 'Hornet@yahoo.com', 'https://i.imgur.com/nGp3BPZ.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:29:51', '2017-10-23 01:29:51'),
(88, 'Excavator', 'Anna', 'Powell', '$2y$10$5F3ulDSaJFao.askLtptKOOieP5ETri/xdHFXT58rIc.dyvNyCskW', 'Excavator@yahoo.com', 'https://i.imgur.com/lfNhYzO.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:31:13', '2017-10-23 01:31:13'),
(89, 'PowerTrain', 'Victoria', 'Long', '$2y$10$xPhWihax/BvEOuCX/UAN0eRIcDJHqDnbTM3k2cVp2GdNf5iZEkjjK', 'PowerTrain@yahoo.com', 'https://i.imgur.com/7kHzYKd.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:32:32', '2017-10-23 01:32:32'),
(90, 'Hollowman', 'Camilla', 'Patterson', '$2y$10$3upWhLunbyeO.aP5P/84wOst1FLuAnMyPEUygVMKiT2pJ9dfZBWgS', 'Hollowman@yahoo.com', 'https://i.imgur.com/RMHur4M.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:35:11', '2017-10-23 01:35:11'),
(91, 'Phantom', 'Lilian', 'Hughes', '$2y$10$e9NtG4NUq7mAJPKwJTqya.4O8wnqFKqAYcZItBPXDLFN7tpP0ttBa', 'Phantom@yahoo.com', 'https://i.imgur.com/FrUDQlh.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:37:52', '2017-10-23 01:37:52'),
(92, 'Sepulcher', 'Natalie', 'Flores', '$2y$10$ti3FTMCc6OJ2V2R./nKbgeghFU7ihYiRus7rG51JfY6yPGwJTyEd6', 'Sepulcher@yahoo.com', 'https://i.imgur.com/pFiW9CM.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:39:07', '2017-10-23 01:39:07'),
(93, 'Nightshade', 'Eli', 'Washigton', '$2y$10$8lJQFYyyH6/9Bqei3kauuOU8itW6SG3qbwhpTmYesQVB9V1BFUI9i', 'Nightshade@yahoo.com', 'https://i.imgur.com/GmQXt3e.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:40:27', '2017-10-23 01:40:27'),
(94, 'Excutioner', 'Levi', 'Butler', '$2y$10$RlMGcX5Q.uoRgH5YpioohuqHh.7KOEjONFVrzdqxmOaRtww4/xEnq', 'Excutioner@yahoo.com', 'https://i.imgur.com/uKkp7jp.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:43:17', '2017-10-23 01:43:17'),
(95, 'Sledgehammer', 'Landon', 'Foster', '$2y$10$0VdIoW5SbI6zeI5SKQhGVuybWrJ8KX8YZD.WXiNPjL3FXqJOe51mK', 'Sledgehammer@yahoo.com', 'https://i.imgur.com/zHXgivT.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:45:20', '2017-10-23 01:45:20'),
(96, 'BrassKnuckle', 'David', 'Gonnzales', '$2y$10$1zagHL9MSfUqfFznUS6bme74.o5wimsdEXTh0m873mroZVFxkoWxG', 'BrassKnuckle@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:46:32', '2017-10-23 01:46:32'),
(97, 'QuarterStaff', 'Christian', 'Bryant', '$2y$10$uKc/N08aHw7Ww8NfdIkA3uS1sgvGA0Kc2rDzFmEzFOgL5TgD6hhM.', 'QuarterStaff@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:54:56', '2017-10-23 01:54:56'),
(98, 'Broadsword', 'Andrew', 'Alexander', '$2y$10$oh9ppNnL0GPxYiXzteftlOwLFMtW0B.CM5oFvUuItC7e8LPbKwlt.', 'Broadsword@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:55:35', '2017-10-23 01:55:35'),
(99, 'FlyingClaw', 'Brayden', 'Russell', '$2y$10$So3IgKjAWb/pviT8hEWmTOGPB0dg2iOI.94aHcpWSjW0oCg2aA0QG', 'FlyingClaw@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:56:15', '2017-10-23 01:56:15'),
(100, 'TigerClaw', 'John', 'Griffin', '$2y$10$TGg1ZtGFgGdPBrE6DzS7ie/vA1LPhSOm89ajoYuxcktd9ERIrHqPq', 'TigerClaw@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:57:01', '2017-10-23 01:57:01'),
(101, 'Bullwhip', 'lincoln', 'diaz', '$2y$10$p0NQCysn/VNLhOuAEGgM9OZkHll2mh07UHKscJ71u/RXnw77mY5dq', 'Bullwhip@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:57:48', '2017-10-23 01:57:48'),
(102, 'Falchion', 'Abraham', 'hayes', '$2y$10$lufh3Nx5qcwmVDXdwdsTKeOY9fUDg3V5BNZgMtSM.ZHkzBpTGXfay', 'Falchion@yahoo.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-23 01:58:34', '2017-10-23 01:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `topics` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `plays` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='for uploading video';

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `post_id`, `name`, `description`, `date`, `url`, `topics`, `plays`) VALUES
(2, 5, 'Shaun - Share a video', '#video ulit?', '2017-10-22 22:10:47', 'http://localhost/mimo/assets/uploads/videos/2910659eca6e765c5e.mp4', 'video,', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `collection_songs`
--
ALTER TABLE `collection_songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collection_id` (`collection_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `follower_id` (`follower_id`);

--
-- Indexes for table `login_tokens`
--
ALTER TABLE `login_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `receiver` (`receiver`),
  ADD KEY `sender` (`sender`);

--
-- Indexes for table `oauth`
--
ALTER TABLE `oauth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_token`
--
ALTER TABLE `oauth_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_tokens`
--
ALTER TABLE `password_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `thoughts`
--
ALTER TABLE `thoughts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `collection_songs`
--
ALTER TABLE `collection_songs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_tokens`
--
ALTER TABLE `login_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `oauth`
--
ALTER TABLE `oauth`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `oauth_token`
--
ALTER TABLE `oauth_token`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `password_tokens`
--
ALTER TABLE `password_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thoughts`
--
ALTER TABLE `thoughts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `about`
--
ALTER TABLE `about`
  ADD CONSTRAINT `about_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `audios`
--
ALTER TABLE `audios`
  ADD CONSTRAINT `audios_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `collections`
--
ALTER TABLE `collections`
  ADD CONSTRAINT `collections_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `collection_songs`
--
ALTER TABLE `collection_songs`
  ADD CONSTRAINT `collection_songs_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `collection_songs_ibfk_3` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `followers_ibfk_2` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login_tokens`
--
ALTER TABLE `login_tokens`
  ADD CONSTRAINT `login_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`receiver`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_2` FOREIGN KEY (`sender`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_ibfk_3` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `password_tokens`
--
ALTER TABLE `password_tokens`
  ADD CONSTRAINT `password_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD CONSTRAINT `post_likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_likes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `thoughts`
--
ALTER TABLE `thoughts`
  ADD CONSTRAINT `thoughts_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
