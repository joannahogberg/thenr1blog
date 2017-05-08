-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Värd: localhost:8889
-- Tid vid skapande: 08 maj 2017 kl 10:48
-- Serverversion: 5.6.34
-- PHP-version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databas: `thenr1blog`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `Blogposts`
--

CREATE TABLE `Blogposts` (
  `id` int(11) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `likes` int(255) NOT NULL,
  `content` text NOT NULL,
  `datePosted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `Blogposts`
--

INSERT INTO `Blogposts` (`id`, `userId`, `title`, `likes`, `content`, `datePosted`) VALUES
(8, 8, 'More Testing', 8, 'Strip steak turkey venison prosciutto jerky leberkas alcatra. Pork shoulder salami landjaeger ball tip turkey pork belly. Jerky sirloin bacon meatloaf, pork belly ground round t-bone ham pork loin strip steak boudin andouille prosciutto filet mignon. Ribeye tri-tip bacon prosciutto short ribs jerky shankle capicola biltong tail t-bone swine turducken spare ribs ball tip. Doner spare ribs capicola flank pork belly jerky. Pork jerky ball tip shank meatball pork chop pancetta bacon ground round chuck doner. Cupim frankfurter sausage doner, pork chop tri-tip t-bone bresaola venison burgdoggen.', '2017-05-03'),
(9, 9, 'Joannas first post', 6, 'Doner filet mignon frankfurter, meatball kevin landjaeger corned beef tenderloin leberkas. Tenderloin pork belly frankfurter kevin. Ham hock strip steak jowl, cupim beef ball tip tongue brisket salami sirloin cow t-bone drumstick pork chop prosciutto. Shoulder venison swine pancetta, short loin pork loin fatback tenderloin meatloaf. Brisket tail t-bone, capicola swine shankle cow hamburger pork bacon kevin shoulder turducken fatback. Pig shoulder pork, leberkas boudin landjaeger pork loin flank burgdoggen cupim.', '2017-05-03'),
(16, 9, 'Joanna loves Lucas', 5, 'Does your lorem ipsum text long for something a little meatier? Give our generator a try… it’s tasty!', '2017-05-02'),
(17, 7, 'Admin testing', 4, 'Does your lorem ipsum text long for something a little meatier? Give our generator a try… it’s tasty!', '2017-04-08');

-- --------------------------------------------------------

--
-- Tabellstruktur `Likes`
--

CREATE TABLE `Likes` (
  `id` int(255) NOT NULL,
  `postId` int(255) NOT NULL,
  `userId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `Likes`
--

INSERT INTO `Likes` (`id`, `postId`, `userId`) VALUES
(119, 8, 0),
(135, 16, 0),
(140, 17, 0),
(156, 16, 0),
(162, 9, 0),
(163, 8, 0),
(189, 16, 0),
(193, 9, 12),
(194, 16, 12),
(196, 8, 13),
(197, 9, 13),
(198, 16, 13),
(199, 8, 12),
(200, 17, 12),
(201, 17, 17),
(202, 16, 17),
(203, 9, 17),
(204, 8, 17),
(208, 16, 7),
(210, 9, 7),
(215, 8, 9),
(219, 17, 9),
(220, 9, 9),
(221, 17, 18);

-- --------------------------------------------------------

--
-- Tabellstruktur `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userEmail` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumpning av Data i tabell `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`, `role`, `userEmail`) VALUES
(7, 'admin', '$2y$10$RiC/BMpKRjKNBJkbkzV6hOiPyLu9wnarut18KKy4VpmbMdeLhawXi', 'admin', 'admin@admin.com'),
(8, 'Samir', '$2y$10$RK3NVmcrpDJnlrS9JTe9/OAVm1yZSZH8N9LhQLkNbi58ZZJSkcgWG', 'user', '4886talga@gmail.com'),
(9, 'joanna', '$2y$10$TY9c23tdscnz0ni00Xqg4eGMcS1q7naTeYVxK8W.QJcgbWNWLzVVW', 'user', 'joanna.hogberg@gmail'),
(11, 'jesper', '$2y$10$xkPLhKFeF1lzQ75G6LGh7ekHff9FeSROBAMfX1yK.H37KTrj09Ici', 'viewer', 'jesper@test.com'),
(12, 'lucas', '$2y$10$wSNIwgGDQMwTrEM.YBh.7u20tB2ltPGF8cd0AnPKJw3CQewPtd4xe', 'viewer', 'lucas@gmail.com'),
(13, 'danja', '$2y$10$9fWTCYtANKO6u2F5/.DTJu1w4nOWCfdyiTv2Gk1vhNi9WrUkU0fE.', 'viewer', 'danja@gmail.com'),
(17, 'Denzil', '$2y$10$ALiPGnYTAek/NimB6e3KCuSk7tt03jzV5/pOliMHB8y68MAfbz9ey', 'viewer', 'denzil@denzil.com'),
(18, 'owen', '$2y$10$M8YZpK/WnSoXs79zEQr23eskMiJl1qUpHCF5gAEsuZnaaSzeet4BK', 'user', 'owen@owen.com'),
(23, 'test', '$2y$10$1JqxncCbPwJ8rU.uPc4R9.1rv.KE3MJ.ChAsQQEhxPsst9Smd14ru', 'viewer', 'r@g');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `Blogposts`
--
ALTER TABLE `Blogposts`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `Likes`
--
ALTER TABLE `Likes`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `Blogposts`
--
ALTER TABLE `Blogposts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT för tabell `Likes`
--
ALTER TABLE `Likes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
--
-- AUTO_INCREMENT för tabell `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;