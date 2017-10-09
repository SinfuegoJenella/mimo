-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 05:30 PM
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
  `about` text,
  `genre1` varchar(50) DEFAULT NULL,
  `genre2` varchar(50) DEFAULT NULL,
  `genre3` varchar(50) DEFAULT NULL,
  `career` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `user_id`, `about`, `genre1`, `genre2`, `genre3`, `career`) VALUES
(1, 50, NULL, NULL, NULL, NULL, NULL),
(2, 51, NULL, NULL, NULL, NULL, NULL),
(3, 52, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `about` text,
  `numsongs` int(11) UNSIGNED NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='list of albums';

-- --------------------------------------------------------

--
-- Table structure for table `album_song`
--

CREATE TABLE `album_song` (
  `id` int(11) UNSIGNED NOT NULL,
  `album_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `path` varchar(200) NOT NULL,
  `genre_id` int(11) UNSIGNED NOT NULL,
  `origin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='listahan ng kanta sa bawat album';

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='music play lists';

-- --------------------------------------------------------

--
-- Table structure for table `collection_songs`
--

CREATE TABLE `collection_songs` (
  `id` int(11) UNSIGNED NOT NULL,
  `collection_id` int(11) UNSIGNED NOT NULL,
  `song_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `follower_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Alternative Music'),
(2, 'Blues'),
(3, 'Classical Music'),
(4, 'Country Music'),
(5, 'Dance Music'),
(6, 'Easy Listening'),
(7, 'Electronic Music'),
(8, 'European Music (Folk/Pop)'),
(9, 'Hip Hop / Rap'),
(10, 'Indie Pop'),
(11, 'Inspirational (incl. Gospel)'),
(12, 'Asian Pop(J-Pop, K-Pop)'),
(13, 'Jazz'),
(14, 'Latin Music'),
(15, 'New Age'),
(17, 'Opera'),
(18, 'Pop (Popular Music)'),
(19, 'R&B / Soul'),
(20, 'Reggae'),
(21, 'Rock'),
(22, 'Folks'),
(23, 'World Music / Beats');

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
(138, 47, '0c2702ba76a745f920f6156ccdf82ce67eb39c8f', '2017-10-06 18:50:34'),
(143, 48, '08d04d4de571dc14261a435aa531eca02367b075', '2017-10-07 12:55:03'),
(144, 48, '575792399ee2431e22749e6e4764ef1ba57e105e', '2017-10-07 13:47:37'),
(145, 48, 'b206d6b12820c8a5bf90def62dc08156704a6f31', '2017-10-07 14:15:27'),
(160, 47, 'aefc24f0ad81e81e7fe8f957be035b888f5de793', '2017-10-08 09:11:42'),
(188, 48, '924b0e9693ec0cd5da330171a2562d1498c00229', '2017-10-08 22:28:07'),
(200, 48, '74edec9c0d76b2abd3f8f190c652da800aab252b', '2017-10-09 20:30:40');

-- --------------------------------------------------------

--
-- Table structure for table `oauth`
--

CREATE TABLE `oauth` (
  `id` int(11) UNSIGNED NOT NULL,
  `oauth_provider` varchar(255) NOT NULL,
  `oauth_uid` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `locale` varchar(10) NOT NULL,
  `picture_url` varchar(255) NOT NULL,
  `profile_url` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oauth`
--

INSERT INTO `oauth` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture_url`, `profile_url`, `created`, `modified`) VALUES
(5, 'facebook', '902266013282229', 'Sheira', 'Man-awit', 'smanawit@yahoo.com', 'female', 'en_US', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.0.50.50/p50x50/10372793_290858291089674_5436196088137721648_n.jpg?oh=93ed39f93a87ab5afb2308d1f3b05a7f&oe=5A4120C3', 'https://www.facebook.com/902266013282229', '2017-10-06 18:44:46', '2017-10-06 18:44:46'),
(6, 'facebook', '1139145586215594', 'Eleanor', 'Man-awit', 'eleanormanawit@yahoo.com', 'female', 'en_US', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/20953366_1116149321848554_2137654736217083012_n.jpg?oh=89f2f726e154caa8fe45c903f9925f28&oe=5A40E309', 'https://www.facebook.com/1139145586215594', '2017-10-09 20:08:03', '2017-10-09 20:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `password_tokens`
--

CREATE TABLE `password_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `token` char(64) NOT NULL
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
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `likes`, `comments`, `posted_at`, `type`) VALUES
(35, 48, 0, 0, '2017-10-10 01:11:30', 1),
(36, 48, 0, 0, '2017-10-10 01:14:14', 1),
(37, 48, 0, 0, '2017-10-10 01:14:50', 1),
(38, 48, 0, 0, '2017-10-10 01:16:20', 1),
(39, 48, 0, 0, '2017-10-10 01:18:23', 1),
(40, 48, 0, 0, '2017-10-10 01:20:23', 1),
(41, 48, 0, 0, '2017-10-10 01:23:12', 1),
(42, 48, 0, 0, '2017-10-10 01:24:23', 1),
(43, 48, 0, 0, '2017-10-10 01:24:56', 1),
(44, 48, 0, 0, '2017-10-10 01:25:24', 1),
(45, 48, 0, 0, '2017-10-10 01:25:44', 1),
(46, 48, 0, 0, '2017-10-10 01:26:28', 1),
(47, 48, 0, 0, '2017-10-10 01:26:57', 1),
(48, 48, 0, 0, '2017-10-10 01:29:01', 1),
(49, 48, 0, 0, '2017-10-10 01:29:15', 1),
(50, 48, 0, 0, '2017-10-10 01:29:39', 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--

CREATE TABLE `post_likes` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `single_songs`
--

CREATE TABLE `single_songs` (
  `id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre_id` int(11) UNSIGNED NOT NULL,
  `about` text,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `path` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `origin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='para sa single upload na audio';

-- --------------------------------------------------------

--
-- Table structure for table `song_favorites`
--

CREATE TABLE `song_favorites` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `song_id` int(11) UNSIGNED NOT NULL
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
(30, 35, 'SheiShei First Post', ''),
(31, 36, 'SheiShei Second Post', ''),
(32, 37, 'SheiShei Third Post', ''),
(33, 38, 'SheiShei Fourth Post', ''),
(34, 39, 'SheiShei Fifth Post', ''),
(35, 40, 'SheiShei Sixth Post', ''),
(36, 41, 'asdad', ''),
(37, 42, 'das', ''),
(38, 43, 'das', ''),
(39, 44, 'asd', ''),
(40, 45, 'asd', ''),
(41, 46, 'aa', ''),
(42, 47, 'as', ''),
(43, 48, 'sas', ''),
(44, 49, 'sasad', ''),
(45, 50, 'df', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(32) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `email` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `picture`, `header`, `created`) VALUES
(48, 'SheiShei', 'Shei', 'Shei', '$2y$10$3ZYRhiYMgeFWjoqsarytteG6JLcURTN5sa/gTnNjZXXzIDwR3E2Aa', 's.cmanawit@gmail.com', 'https://yt3.ggpht.com/-H7Ofqi47o70/AAAAAAAAAAI/AAAAAAAAAAA/cTBdlRrGTMU/s900-c-k-no-mo-rj-c0xffffff/photo.jpg', 'https://www.moooi.com/sites/default/files/styles/large/public/product-images/random_detail.jpg', '2017-10-06 22:22:10'),
(49, 'Stage Name', 'First Name', 'Last Name', '$2y$10$BOYM3zEAJmd1dhx1p5J6H.EOcqmpWULJP3qYpN1vvL3GjFETlUUvS', 'you@email.com', NULL, NULL, '2017-10-07 17:33:51'),
(50, 'NewAccount', 'New', 'Account', '$2y$10$wWB/nf75hnkBC.06TyxvE.Ggwk/XW4yIwIvYDWuXR9TNacJmPSWdK', 'new@account.com', NULL, NULL, '2017-10-07 21:19:07'),
(51, 'FirstName', 'First', 'Name', '$2y$10$aHjWMcWNEXzKm4xpB9dT3OtNu2tp.zxkyo0yzLp.d8.p0P9mqestO', 'First@Name.com', NULL, NULL, '2017-10-08 08:40:45'),
(52, '1139145586215594', 'Eleanor', 'Man-awit', NULL, 'eleanormanawit@yahoo.com', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/20953366_1116149321848554_2137654736217083012_n.jpg?oh=89f2f726e154caa8fe45c903f9925f28&oe=5A40E309', NULL, '2017-10-09 20:08:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album_song`
--
ALTER TABLE `album_song`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collection_songs`
--
ALTER TABLE `collection_songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tokens`
--
ALTER TABLE `login_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth`
--
ALTER TABLE `oauth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_tokens`
--
ALTER TABLE `password_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_songs`
--
ALTER TABLE `single_songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `song_favorites`
--
ALTER TABLE `song_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thoughts`
--
ALTER TABLE `thoughts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `album_song`
--
ALTER TABLE `album_song`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `collection_songs`
--
ALTER TABLE `collection_songs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `login_tokens`
--
ALTER TABLE `login_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT for table `oauth`
--
ALTER TABLE `oauth`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `password_tokens`
--
ALTER TABLE `password_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `single_songs`
--
ALTER TABLE `single_songs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `song_favorites`
--
ALTER TABLE `song_favorites`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thoughts`
--
ALTER TABLE `thoughts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
