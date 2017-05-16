-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 16, 2017 at 11:59 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `thenr1blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `Blogposts`
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
-- Dumping data for table `Blogposts`
--

INSERT INTO `Blogposts` (`id`, `userId`, `title`, `likes`, `content`, `datePosted`) VALUES
(16, 9, 'Joanna loves Lucas a LOT!', 5, 'Does your lorem ipsum text long for something a little meatier? Give our generator a try… it’s tasty!', '2017-05-04'),
(17, 7, 'Admin testing', 3, 'Does your lorem ipsum text long for something a little meatier? Give our generator a try… it’s tasty!', '2017-04-08'),
(29, 7, 'Admin testing a little bit more', 1, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-09'),
(31, 7, 'And another one...', 2, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-09'),
(35, 18, 'Owen first post', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-09'),
(44, 7, 'Samir testing', 3, 'Hello', '2017-05-10'),
(45, 7, 'Hello again', 1, 'Wazzup', '2017-05-10'),
(46, 7, 'Wazzzzzuuuup!', 1, 'Ball tip turkey leberkas boudin. Drumstick pancetta jerky, venison meatloaf ground round spare ribs kevin pig prosciutto. Kielbasa swine cow flank, pork t-bone spare ribs tri-tip doner venison drumstick pancetta pork chop tail. Beef tail chuck, prosciutto kevin ham hock shank hamburger cupim.', '2017-05-10'),
(47, 7, 'Wazzup Owen', 1, 'Ball tip turkey leberkas boudin. Drumstick pancetta jerky, venison meatloaf ground round spare ribs kevin pig prosciutto. Kielbasa swine cow flank, pork t-bone spare ribs tri-tip doner venison drumstick pancetta pork chop tail. Beef tail chuck, prosciutto kevin ham hock shank hamburger cupim.', '2017-05-10'),
(48, 7, 'Lucas & Patti', 0, 'Ball tip turkey leberkas boudin. Drumstick pancetta jerky, venison meatloaf ground round spare ribs kevin pig prosciutto. Kielbasa swine cow flank, pork t-bone spare ribs tri-tip doner venison drumstick pancetta pork chop tail. Beef tail chuck, prosciutto kevin ham hock shank hamburger cupim.', '2017-05-10'),
(50, 7, 'Bacon ipsum', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(51, 7, 'More bacon', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(52, 7, 'Bring the nuggets', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(55, 7, 'Bacon ipsum for everyone!', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(57, 7, 'sick of this shit', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(58, 7, 'Okokokok!', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(59, 7, 'Again and again', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(60, 7, 'Hello again okokok!', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(61, 7, 'Test post', 0, ' <p><a href=\"login.php\"><span class=\"glyphicon glyphicon-menu-left\"></span> Back to list</a></p>', '2017-05-10'),
(62, 7, 'Rocco in tha house', 2, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-11'),
(67, 9, 'test 123...', 0, 'hello', '2017-05-15'),
(68, 9, 'Joanna testing', 0, 'hello', '2017-05-15'),
(69, 9, 'Joanna testing', 0, 'Hello', '2017-05-15');

-- --------------------------------------------------------

--
-- Table structure for table `Likes`
--

CREATE TABLE `Likes` (
  `id` int(255) NOT NULL,
  `postId` int(255) NOT NULL,
  `userId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Likes`
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
(221, 17, 18),
(252, 0, 9),
(263, 8, 9),
(264, 16, 9),
(266, 22, 18),
(267, 29, 18),
(268, 31, 18),
(269, 27, 18),
(270, 33, 18),
(273, 31, 7),
(286, 62, 7),
(287, 37, 7),
(291, 44, 7),
(292, 46, 7),
(293, 47, 9),
(296, 44, 13),
(297, 62, 13),
(301, 45, 12),
(303, 27, 9),
(304, 63, 9),
(307, 44, 12);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userEmail` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Users`
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
(23, 'test', '$2y$10$1JqxncCbPwJ8rU.uPc4R9.1rv.KE3MJ.ChAsQQEhxPsst9Smd14ru', 'viewer', 'r@g'),
(24, 'test2', '$2y$10$vPv9pxpTQUCB3uGyrLfCee9k7jrc6ONZoB6d6O4vRkXDDY9LCp14O', 'viewer', 'tex@g.com'),
(25, 'rocco', '$2y$10$p7fTYEADFvaagUHdCgY.dOHy4g2MuuN3d9KFBzwd6kAzGi68mazMC', 'viewer', 'rocco@gmail.com'),
(26, 'jermaine', '$2y$10$qktjiSSl0jWcEXtCJ68sPOCC3QX5rYy.Y/sJxGz9sFeO7AXh/qhaC', 'viewer', 'jermaine@gmail.com'),
(27, 'testing', '$2y$10$MnoBlXc4WARpNuVcNAyBwOHAEc/LkCbLvFZNDcfg9QJwSsEET4irO', 'viewer', 'test@test.com'),
(28, 'rocco dog', '$2y$10$B0EFxK.0Q65vALyy8GnJ4eNfYi52m3YrCIc/uvELL8TG8bYeCdRvm', 'viewer', 'rocco@gmail.com'),
(29, 'orjan', '$2y$10$kgahYADwe9cgCe3jMsu4.OsX7HFLjt8pxSMmwS6i1OlogU2eWCRXG', 'viewer', 'orjan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Blogposts`
--
ALTER TABLE `Blogposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Likes`
--
ALTER TABLE `Likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Blogposts`
--
ALTER TABLE `Blogposts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `Likes`
--
ALTER TABLE `Likes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;