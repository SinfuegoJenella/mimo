-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2017 at 07:57 PM
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
(1, 1, '', '', '', '', '', 1),
(2, 2, '', '', '', '', '', 0),
(3, 3, '', '', '', '', '', 2);

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
(1, 2, 'Sample Audio', ' Reggae', 'Sample Audio Description', '2017-10-22 03:45:15', 'http://localhost/mimo/assets/uploads/audios/2183459eba3c6524d5.mp3', 'https://i.imgur.com/oS8YXFQ.jpg', '', 2),
(2, 5, 'Upload an Audio Try', ' Pop (Popular music)', 'Upload an Audio Description', '2017-10-22 03:50:11', 'http://localhost/mimo/assets/uploads/audios/2577659eba4ef6e123.mp3', 'https://i.imgur.com/qb3twi6.jpg', '', 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `collection_songs`
--

CREATE TABLE `collection_songs` (
  `id` int(11) UNSIGNED NOT NULL,
  `collection_id` int(11) UNSIGNED NOT NULL,
  `post_id` int(11) UNSIGNED NOT NULL
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

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `posted_at`) VALUES
(1, 2, 2, '@sheiram nice', '2017-10-22 03:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `follower_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user_id`, `follower_id`) VALUES
(1, 1, 2),
(2, 3, 1),
(3, 3, 2);

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
(1, 5, 1, 2, 0, 'http://localhost/mimo/mimo/myStudio?username=SheiShei', '2017-10-22 03:47:15', 0),
(2, 2, 1, 2, 3, 'http://localhost/mimo/notification?pid=3', '2017-10-22 03:47:42', 1),
(3, 3, 1, 2, 2, 'http://localhost/mimo/notification?pid=2', '2017-10-22 03:47:58', 0),
(4, 4, 1, 2, 2, 'http://localhost/mimo/notification?pid=2', '2017-10-22 03:47:58', 0),
(5, 1, 3, 1, 7, 'http://localhost/mimo/notification?pid=7', '2017-10-22 03:54:34', 0),
(6, 5, 3, 1, 0, 'http://localhost/mimo/mimo/myStudio?username=SheiraM', '2017-10-22 03:54:48', 0),
(7, 5, 3, 2, 0, 'http://localhost/mimo/mimo/myStudio?username=SheiShei', '2017-10-22 03:56:38', 0);

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

--
-- Dumping data for table `oauth`
--

INSERT INTO `oauth` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture_url`, `profile_url`, `created`, `modified`) VALUES
(1, 'facebook', '902266013282229', 'Sheira', 'Man-awit', 'smanawit@yahoo.com', 'female', 'en_US', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.0.50.50/p50x50/10372793_290858291089674_5436196088137721648_n.jpg?oh=bae4ee7d7af3ab47b3eb3568c8afe0d3&oe=5A68ADC3', 'https://www.facebook.com/902266013282229', '2017-10-22 03:46:35', '2017-10-22 03:46:35');

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
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `likes`, `comments`, `posted_at`, `type`) VALUES
(1, 1, 0, 0, '2017-10-22 03:41:44', 1),
(2, 1, 0, 1, '2017-10-22 03:45:15', 2),
(3, 1, 1, 0, '2017-10-22 03:46:08', 3),
(4, 3, 0, 0, '2017-10-22 03:49:12', 1),
(5, 3, 0, 0, '2017-10-22 03:50:11', 2),
(6, 3, 0, 0, '2017-10-22 03:51:05', 3),
(7, 1, 0, 0, '2017-10-22 03:54:33', 1);

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
(1, 3, 2);

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
(1, 1, 'Try', ''),
(2, 4, 'Share a Thought #try', 'try,'),
(3, 7, '@mimo try mention notif', '');

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
(1, 'SheiraM', 'Sheira', 'Man-awit', '$2y$10$r.KJNVJXOzoniEvWZya2P.oxIzc/OeHRwQ85HxHxEOTUPvbFwogU6', 's.cmanawit@gmail.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 03:41:18', '2017-10-22 03:51:34'),
(2, 'SheiShei', 'Sheira', 'Man-awit', NULL, 'smanawit@yahoo.com', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c0.0.50.50/p50x50/10372793_290858291089674_5436196088137721648_n.jpg?oh=bae4ee7d7af3ab47b3eb3568c8afe0d3&oe=5A68ADC3', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 03:46:35', '2017-10-22 03:56:26'),
(3, 'Mimo', 'Mimo', 'Music', '$2y$10$TaY8HVrUD620zuIXTkP4YO7Tb7AcChqimwzc.2GEZ1cs7wC5G/ImC', 'thisismimomusic@gmail.com', 'https://i.imgur.com/LQq63AL.jpg', 'https://i.imgur.com/Np6wf8U.jpg', '2017-10-22 03:48:38', '2017-10-22 03:56:56');

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
(1, 3, 'Sample Video', 'Sample Video Description', '2017-10-22 03:46:09', 'http://localhost/mimo/assets/uploads/videos/2865959eba400e0db4.mp4', '', 1),
(2, 6, 'Upload a Video Try', 'Upload a Video Description', '2017-10-22 03:51:05', 'http://localhost/mimo/assets/uploads/videos/325959eba529be4cf.mp4', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
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
-- Indexes for table `login_tokens`
--
ALTER TABLE `login_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `videos`
--
ALTER TABLE `videos`
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
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_tokens`
--
ALTER TABLE `login_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `oauth`
--
ALTER TABLE `oauth`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `oauth_token`
--
ALTER TABLE `oauth_token`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `password_tokens`
--
ALTER TABLE `password_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `thoughts`
--
ALTER TABLE `thoughts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
