-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 10:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mon_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `id_avis` int(3) NOT NULL,
  `note` enum('1','2','3','4','5') NOT NULL,
  `nom` varchar(100) NOT NULL,
  `date_avis` date NOT NULL,
  `content` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `avis`
--

INSERT INTO `avis` (`id_avis`, `note`, `nom`, `date_avis`, `content`, `status`) VALUES
(1, '4', 'Eyad', '2018-05-08', 'Super restaurant ! Les burgers sont délicieux !', 1),
(2, '5', 'Imane', '2018-05-11', 'Génial, super repas ! ', 1),
(3, '4', 'Client', '2018-05-22', 'parfait, on a vraiment super bien mangés dans ce restau !! ', 0),
(4, '4', 'Client 2', '2018-05-23', 'Bravo ! Rien à redire, vraiment le top. ', 0),
(5, '3', 'Ophélie', '2018-05-24', 'Le meilleur burger de ma vie !! *-* :p', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(3) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `sujet` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `sujet`, `email`, `message`) VALUES
(1, 'eyad', 'test1', 'toto@toto.com', 'bonjour salut ljkzadhdzajk dj d '),
(2, 'eyad', 'test1', 'toto@toto.com', 'bonjour salut ljkzadhdzajk dj d '),
(3, 'ALRAKOUKI', 'test3', 'toto@toto.com', 'JDQHZ LSQDH QLDSHG QD HG'),
(4, 'ALRAKOUKI', 'test3', 'toto@toto.com', 'JDQHZ LSQDH QLDSHG QD HG'),
(5, 'TEST', 'TEST', 'toto@toto.com', 'LKQSDH QD HJQDJG LKQSDH QD HJQDJG '),
(6, 'TEST', 'TEST', 'toto@toto.com', 'LKQSDH QD HJQDJG LKQSDH QD HJQDJG '),
(7, 'TEST2', 'TEST2', 'toto@toto.com', ' LSDHQG SQJ HGSQJ HLKQSDH QD HJQDJG LKQSDH QD HJQDJG '),
(8, 'TEST2', 'TEST2', 'toto@toto.com', ' LSDHQG SQJ HGSQJ HLKQSDH QD HJQDJG LKQSDH QD HJQDJG '),
(9, 'TEST3', 'TEST3', 'toto@toto.com', 'LKQSDH QD HJQDJG LKQSDH QD HJQDJG LKQSDH QD HJQDJG '),
(10, 'TEST3', 'TEST3', 'toto@toto.com', 'LKQSDH QD HJQDJG LKQSDH QD HJQDJG LKQSDH QD HJQDJG '),
(11, 'TEST4', 'test4', 'toto@toto.com', 'kld hgdlzkj hdzlkh qd hgdq hgqdlhj gq'),
(12, 'TEST4', 'test4', 'toto@toto.com', 'kld hgdlzkj hdzlkh qd hgdq hgqdlhj gq'),
(13, 'eyad', 'test5', 'eyad@eyad.com', 'lkhefjh ekj gefk gfekj gfejhfe g'),
(14, 'eyad', 'test5', 'eyad@eyad.com', 'lkhefjh ekj gefk gfekj gfejhfe g'),
(15, 'adithe', 'tzst', 'edith@edith.com', 'kjdzahg zreyu zfu kye uy'),
(16, 'adithe', 'tzst', 'edith@edith.com', 'kjdzahg zreyu zfu kye uy');

-- --------------------------------------------------------

--
-- Table structure for table `franchaise`
--

CREATE TABLE `franchaise` (
  `id_franchaise` int(3) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `nom_societe` varchar(100) NOT NULL,
  `local` enum('oui','non') NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `franchaise`
--

INSERT INTO `franchaise` (`id_franchaise`, `nom`, `prenom`, `email`, `ville`, `nom_societe`, `local`, `info`) VALUES
(1, 'basha', 'eyad', 'eyad@eyad.com', 'massy', '10mentionweb', 'oui', 'kjqh feiu hriu hreiut huh y ui'),
(2, 'basha', 'eyad', 'eyad@eyad.com', 'massy', '10mentionweb', 'oui', 'feuh iefzu hreui htriuhriopytj '),
(3, 'basha', 'eyad', 'eyad@eyad.com', 'massy', '10mentionweb', 'non', 'iudhe fezh fzeiu hzfei ufze fzei uzeui'),
(4, 'basha', 'eyad', 'eyad@eyad.com', 'massy', '10mentionweb', 'non', 'iudhe fezh fzeiu hzfei ufze fzei uzeui'),
(5, 'basha', 'eyad', 'eyad@eyad.com', 'massy', '10mentionweb', 'non', 'iudhe fezh fzeiu hzfei ufze fzei uzeui'),
(6, 'basha', 'eyad', 'eyad@eyad.com', 'massy', '10mentionweb', 'non', 'iudhe fezh fzeiu hzfei ufze fzei uzeui');

-- --------------------------------------------------------

--
-- Table structure for table `press`
--

CREATE TABLE `press` (
  `id_press` int(3) NOT NULL,
  `image` varchar(150) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reserver`
--

CREATE TABLE `reserver` (
  `id_reserver` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `cell` int(10) NOT NULL,
  `date_reserver` date NOT NULL,
  `no_perssonne` varchar(10) NOT NULL,
  `heure` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reserver`
--

INSERT INTO `reserver` (`id_reserver`, `nom`, `prenom`, `cell`, `date_reserver`, `no_perssonne`, `heure`, `message`) VALUES
(1, 'basha', 'eyad', 2147483647, '2018-06-21', '3', '21h45', 'oiprzu\" zepiu etpiu riu yio utrpuio '),
(2, 'Fatnie', 'Imane', 2147483647, '2018-06-08', '2', '21h15', 'liuzrh rzeiu rteui etriut '),
(3, 'Fatnie', 'Imane', 2147483647, '2018-06-07', '2', '20h45', 'miore riu ryiou ryopir u^pyo i'),
(4, 'Fatnie', 'Imane', 2147483647, '2018-06-07', '2', '20h45', 'miore riu ryiou ryopir u^pyo i');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_group` int(11) NOT NULL,
  `trustStatus` int(11) NOT NULL,
  `regStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `id_group`, `trustStatus`, `regStatus`) VALUES
(2, 'eyad', '601f1889667efaebb33b8c12572835da3f027f78', 'eyad.ali-basha@10mentionweb.org', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_avis`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `franchaise`
--
ALTER TABLE `franchaise`
  ADD PRIMARY KEY (`id_franchaise`);

--
-- Indexes for table `press`
--
ALTER TABLE `press`
  ADD PRIMARY KEY (`id_press`);

--
-- Indexes for table `reserver`
--
ALTER TABLE `reserver`
  ADD PRIMARY KEY (`id_reserver`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `id_avis` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `franchaise`
--
ALTER TABLE `franchaise`
  MODIFY `id_franchaise` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `press`
--
ALTER TABLE `press`
  MODIFY `id_press` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reserver`
--
ALTER TABLE `reserver`
  MODIFY `id_reserver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
