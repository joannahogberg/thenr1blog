-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 24, 2017 at 11:20 AM
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
(16, 9, 'Joanna loves Lucas a LOT!', 6, 'Does your lorem ipsum text long for something a little meatier? Give our generator a try… it’s tasty!', '2017-05-04'),
(29, 7, 'Admin testing a little bit more', 1, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-09'),
(35, 18, 'Owen first post', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-09'),
(45, 7, 'Hello again', 1, 'Wazzup', '2017-05-10'),
(46, 7, 'Wazzzzzuuuup!', 1, 'Ball tip turkey leberkas boudin. Drumstick pancetta jerky, venison meatloaf ground round spare ribs kevin pig prosciutto. Kielbasa swine cow flank, pork t-bone spare ribs tri-tip doner venison drumstick pancetta pork chop tail. Beef tail chuck, prosciutto kevin ham hock shank hamburger cupim.', '2017-05-10'),
(47, 7, 'Wazzup Owen', 1, 'Ball tip turkey leberkas boudin. Drumstick pancetta jerky, venison meatloaf ground round spare ribs kevin pig prosciutto. Kielbasa swine cow flank, pork t-bone spare ribs tri-tip doner venison drumstick pancetta pork chop tail. Beef tail chuck, prosciutto kevin ham hock shank hamburger cupim.', '2017-05-10'),
(48, 7, 'Lucas & Patti', 0, 'Ball tip turkey leberkas boudin. Drumstick pancetta jerky, venison meatloaf ground round spare ribs kevin pig prosciutto. Kielbasa swine cow flank, pork t-bone spare ribs tri-tip doner venison drumstick pancetta pork chop tail. Beef tail chuck, prosciutto kevin ham hock shank hamburger cupim.', '2017-05-10'),
(50, 7, 'Bacon ipsum', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(51, 7, 'More bacon', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(52, 7, 'Bring the nuggets', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(55, 7, 'Bacon ipsum for everyone!', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(59, 7, 'Again and again', 0, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-10'),
(62, 7, 'Rocco in tha house', 3, 'Kielbasa sausage brisket, bacon meatloaf jerky shoulder picanha. Ground round chuck beef kevin swine pastrami cow meatball pork chop pig. Beef tenderloin andouille alcatra shank brisket. Ham beef ribs kielbasa, spare ribs pastrami jerky burgdoggen jowl pig. Cupim turkey picanha pork swine chuck salami spare ribs tenderloin tri-tip sirloin chicken. Kevin sausage pastrami corned beef bresaola venison. Drumstick cupim pork belly hamburger burgdoggen beef spare ribs.', '2017-05-11'),
(75, 7, 'Admin getting down with it', 3, 'Corned beef fatback meatball, frankfurter andouille biltong turkey pancetta turducken kielbasa pastrami bacon jowl meatloaf. Venison corned beef porchetta bresaola, ribeye ham hock pancetta cupim kevin fatback flank leberkas shankle t-bone jerky. Ham hock ham shank tri-tip alcatra. Jowl hamburger chicken swine ribeye pork belly venison meatloaf drumstick chuck shank fatback kielbasa. Flank shoulder tenderloin short ribs jerky bresaola. Ball tip porchetta swine pig kielbasa.', '2017-05-23'),
(78, 9, 'Cold as Ice..', 4, 'Shankle filet mignon short ribs turkey pork loin pork boudin alcatra. Pork loin ribeye chicken, drumstick chuck beef ribs ball tip fatback sausage alcatra ground round. Tenderloin ribeye corned beef pig meatloaf chicken doner ball tip venison chuck filet mignon jowl turkey prosciutto hamburger. Meatloaf spare ribs filet mignon kevin biltong sirloin andouille tail. Ribeye leberkas pork andouille, burgdoggen fatback ball tip pig capicola picanha ham hock shank.', '2017-05-23');

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
(307, 44, 12),
(308, 67, 9),
(309, 67, 12),
(317, 73, 9),
(321, 75, 12),
(324, 75, 13),
(325, 77, 9),
(326, 78, 9),
(327, 77, 13),
(328, 78, 13),
(329, 77, 12),
(330, 78, 12),
(331, 77, 18),
(332, 78, 18),
(333, 77, 8),
(334, 77, 30),
(335, 62, 11),
(336, 16, 11),
(337, 75, 32);

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
(29, 'orjan', '$2y$10$kgahYADwe9cgCe3jMsu4.OsX7HFLjt8pxSMmwS6i1OlogU2eWCRXG', 'viewer', 'orjan@gmail.com'),
(30, 'anneli', '$2y$10$s7Mp/bVgRGvsp.BOwN6MP.FTvu9mebtHvG1/OpagmAEgGgfIZ/wrK', 'viewer', 'anneli@gmail.com'),
(31, 'magnus', '$2y$10$OYyGuEVwOyQ6Ex6qMol51ulbp0xzlD/6rc76AIJt3mqkyg8DdNWOi', 'viewer', 'magnus@gmail.com'),
(32, 'cilla', '$2y$10$A3MclEb5vldWpBDEYcdO7.s8JgTWsnUNV8xsGDVNQJANna5v/0Qo6', 'viewer', 'cilla@gmail.com');

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `Likes`
--
ALTER TABLE `Likes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;