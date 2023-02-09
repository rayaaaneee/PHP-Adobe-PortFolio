-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 09, 2023 at 10:41 AM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `ID_ANSWER` int(11) NOT NULL,
  `ID_COMMENT` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_EVENT` int(11) NOT NULL,
  `CONTENT` text NOT NULL,
  `DATE` date NOT NULL,
  `TIME` time NOT NULL,
  `NUMBER_LIKES` int(11) NOT NULL,
  `NUMBER_DISLIKES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`ID_ANSWER`, `ID_COMMENT`, `ID_USER`, `ID_EVENT`, `CONTENT`, `DATE`, `TIME`, `NUMBER_LIKES`, `NUMBER_DISLIKES`) VALUES
(3, 2, 2, 0, 'ctfyvguijbnop,^', '2023-02-05', '19:40:11', 0, 0),
(3, 2, 2, 0, 'c\'est ton gars coco jojo', '2023-02-06', '21:17:14', 0, 0),
(3, 2, 2, 0, 'enitèr', '2023-02-06', '21:17:25', 0, 0),
(3, 2, 2, 0, 'entièrement pas d\'accord', '2023-02-06', '21:17:35', 0, 0),
(3, 2, 2, 0, 'entièrement pas d\'accord', '2023-02-06', '21:17:44', 0, 0),
(3, 2, 2, 0, 'entièrement pas d\'accord', '2023-02-06', '21:19:16', 0, 0),
(3, 2, 2, 0, 'wow??', '2023-02-06', '21:37:02', 0, 0),
(4, 3, 2, 0, 'j\'ai juré tabuse', '2023-02-06', '21:37:28', 0, 0),
(4, 3, 2, 0, 'fils de pute', '2023-02-06', '21:37:37', 0, 0),
(4, 3, 2, 0, 'va bien niquer ta grand mere fumier', '2023-02-06', '21:37:52', 0, 0),
(4, 3, 2, 0, 'tu me degoutes', '2023-02-06', '21:38:02', 0, 0),
(4, 3, 2, 0, 'va baiser t', '2023-02-06', '21:41:32', 0, 0),
(6, 2, 2, 0, 'petit fumier', '2023-02-07', '14:32:40', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `ID_ARTIST` int(11) NOT NULL,
  `ARTIST_LAST_NAME` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ARTIST_FIRST_NAME` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `STAGE_NAME` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `BIOGRAPHY` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`ID_ARTIST`, `ARTIST_LAST_NAME`, `ARTIST_FIRST_NAME`, `STAGE_NAME`, `BIOGRAPHY`) VALUES
(1, 'DJ', 'Thierry', 'Frére rodrigue n°1', 'DJ Thierry est un passionné de musique et un grand entrepreneur qui a su se faire un nom dans le monde de la musique électronique. Depuis son plus jeune âge, il a été fasciné par les sonorités électroniques et a rapidement commencé à expérimenter avec la musique et les platines.\n\nAvec une soif insatiable d\'apprendre et de se perfectionner, DJ Thierry a travaillé dur pour devenir l\'un des DJ les plus respectés de sa génération. Sa technique de mixage impeccable et sa sélection de morceaux toujours innovante lui ont valu une grande reconnaissance dans le milieu de la musique électronique.\n\nEn plus de sa passion pour la musique, DJ Thierry est également un entrepreneur avisé. Il a lancé sa propre entreprise de production de musique et organise régulièrement des événements de musique électronique à travers le pays. Sa détermination et son talent lui ont permis de construire un empire de la musique qui continue de croître chaque jour.\n\nSur scène, DJ Thierry est connu pour son énergie contagieuse et sa capacité à enflammer le dancefloor. Ses sets sont toujours remplis de surprises et de nouveaux morceaux, ce qui en fait un DJ incontournable pour tous ceux qui cherchent à passer une soirée inoubliable.'),
(2, 'LAFFINE', 'Melvyn', 'Miel-vigne', 'Miel-vigne est un DJ passionné de musique et originaire d\'un petit village de Haute-Savoie. Depuis son plus jeune âge, il a été fasciné par les sonorités électroniques et a rapidement commencé à expérimenter avec la musique et les platines.\n\nIl a travaillé dur pour devenir l\'un des DJ les plus respectés de sa région, grâce à sa technique de mixage impeccable et sa sélection de morceaux toujours innovante. Sa passion pour la musique et son talent lui ont permis de se faire un nom dans le monde de la musique électronique et de se produire dans les clubs et les festivals les plus renommés de Haute-Savoie.\n\nSur scène, Miel-vigne est connu pour son énergie contagieuse et sa capacité à mettre l\'ambiance. Ses sets sont toujours remplis de surprises et de nouveaux morceaux, ce qui en fait un DJ incontournable pour tous ceux qui cherchent à passer une soirée inoubliable. En plus de sa carrière de DJ, Miel-vigne est également un entrepreneur avisé et a lancé sa propre entreprise de production de musique. Sa détermination et son talent lui ont permis de construire un empire de la musique qui continue de croître chaque jour.'),
(3, 'LUCAS', 'Liam', 'Wayark', 'Liam LUCAS, connu sous le nom de scène \"Wayark\", est un guitariste passionné et talentueux originaire de la région lyonnaise. Depuis son plus jeune âge, il a été fasciné par la musique et a commencé à apprendre la guitare dès l\'âge de 8 ans.\n\nAvec une soif insatiable d\'apprendre et de se perfectionner, Liam a travaillé dur pour devenir l\'un des guitaristes les plus respectés de sa génération. Sa technique de jeu impeccable et son style unique lui ont valu une grande reconnaissance dans le monde de la musique.\n\nEn plus de sa carrière de musicien, Liam est également un entrepreneur avisé. Il a lancé sa propre entreprise de production de musique et organise régulièrement des concerts et des festivals de musique à travers le pays. Sa détermination et son talent lui ont permis de construire un empire de la musique qui continue de croître chaque jour.\n\nSur scène, Liam est connu pour sa présence captivante et son talent exceptionnel à la guitare. Ses performances sont toujours remplies d\'énergie et de passion, ce qui en fait un musicien incontournable pour tous ceux qui cherchent à passer une soirée inoubliable.'),
(4, 'Rayane', 'Merlin', 'wayark', '                    salut');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ID_USER` int(11) NOT NULL,
  `ID_TICKET_PRICING` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ID_USER`, `ID_TICKET_PRICING`, `QUANTITY`) VALUES
(2, 4, 1),
(2, 5, 2),
(2, 7, 1),
(2, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID_COMMENT` int(11) NOT NULL,
  `ID_EVENT` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `CONTENT` text NOT NULL,
  `DATE` date NOT NULL,
  `TIME` time NOT NULL,
  `NUMBER_LIKES` int(11) NOT NULL,
  `NUMBER_DISLIKES` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID_COMMENT`, `ID_EVENT`, `ID_USER`, `CONTENT`, `DATE`, `TIME`, `NUMBER_LIKES`, `NUMBER_DISLIKES`) VALUES
(1, 2, 2, '        inputComment = document.createElement(&#039;input&#039;);         inputComment.setAttribute(&#039;type&#039;, &#039;hidden&#039;);         inputComment.setAttribute(&#039;name&#039;, &#039;commentId&#039;);         form.parentNode.appendChild(inputComment);        inputComment = document.createElement(&#039;input&#039;);         inputComment.setAttribute(&#039;type&#039;, &#039;hidden&#039;);         inputComment.setAttribute(&#039;name&#039;, &#039;commentId&#039;);         form.parentNode.appendChild(inputComment);        inputComment = document.createElement(&#039;input&#039;);         inputComment.setAttribute(&#039;type&#039;, &#039;hidden&#039;);         inputComment.setAttribute(&#039;name&#039;, &#039;commentId&#039;);      ', '2023-02-05', '19:32:18', 0, 0),
(2, 2, 2, 'tcyvubhin', '2023-02-05', '19:40:04', 5, 0),
(3, 3, 2, 'WESH MON REUF????', '2023-02-06', '21:37:20', 1, 0),
(4, 3, 2, '** va baiser ta maman sale pd', '2023-02-06', '21:41:45', 1, 0),
(5, 2, 2, 'xfcghjgkuh', '2023-02-07', '14:32:31', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ID_EVENT` int(11) NOT NULL,
  `ID_LOCATION` int(11) NOT NULL,
  `ID_EVENT_TYPE` int(11) NOT NULL,
  `ID_ORGANIZER` int(11) NOT NULL,
  `ID_ARTIST` int(11) NOT NULL,
  `EVENT_NAME` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `EVENT_DATE` datetime NOT NULL,
  `EVENT_DESCRIPTION` text COLLATE utf8mb4_unicode_ci,
  `PICTURE_PATH` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'users/unnamed.png',
  `PICTURE_DESCRIPTION` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID_EVENT`, `ID_LOCATION`, `ID_EVENT_TYPE`, `ID_ORGANIZER`, `ID_ARTIST`, `EVENT_NAME`, `EVENT_DATE`, `EVENT_DESCRIPTION`, `PICTURE_PATH`, `PICTURE_DESCRIPTION`) VALUES
(1, 3, 1, 2, 3, 'Le grand retour de Wayark', '2023-01-22 00:00:00', '\"Le grand retour de Wayark\" est un événement incontournable pour tous les fans de musique et de guitar hero. Organisé par le célèbre guitariste Liam LUCAS, connu sous le nom de scène \"Wayark\", cet événement promet d\'être une soirée inoubliable pleine de surprises et de talent.<br>\n\nAu programme de la soirée, vous pourrez découvrir les derniers hits de Wayark interprétés par le guitariste lui-même, ainsi que ses invités de renom. La scène sera animée par un show de lumières et de lasers, et vous pourrez profiter de la puissance et de la maîtrise de Wayark à la guitare.<br>\n\nEn plus de la musique, \"Le grand retour de Wayark\" propose également un large choix de boissons et de snacks pour vous sustenter tout au long de la nuit. Alors n\'hésitez pas à vous laisser emporter par la magie de la musique et de la fête. \"Le grand retour de Wayark\" vous attend !', 'events/wayark.jpg', 'Wayark en concert'),
(2, 1, 2, 1, 1, 'La bête de soirée mousse', '2023-03-17 22:00:00', 'La bête de soirée mousse organisée par DJ Thierry est un événement incontournable pour tous les amateurs de musique électronique. Cette soirée unique en son genre est remplie d\'énergie et de surprises, et promet de faire bouger les foules jusqu\'au petit matin.<br>\n\nAu programme de la soirée, vous pourrez découvrir les derniers hits de la musique électronique interprétés par DJ Thierry et ses invités de renom. La piste de danse sera animée par un show de lumières et de lasers, et vous pourrez profiter de jets de mousse fraîche pour vous rafraîchir toute la nuit.<br>\n\nEn plus de la musique, la soirée mousse de DJ Thierry propose également un large choix de boissons et de snacks pour vous sustenter tout au long de la nuit. Alors n\'hésitez pas à vous habiller en blanc et à vous laisser emporter par la magie de la musique et de la fête. La bête de soirée mousse de DJ Thierry vous attend !', 'events/bdsmousse.jpg', 'La bête de soirée mousse !'),
(3, 2, 4, 1, 2, 'Miel-vigne et cie', '2023-04-01 20:00:00', 'Miel-vigne et cie est un événement unique en son genre. Il s\'agit d\'une soirée de dégustation de vins et de miels, animée par un DJ et des animations. Vous pourrez ainsi découvrir les saveurs de la région et vous laisser emporter par la musique et la fête.', 'events/mielvigne.jpg', 'Miel-vigne et cie'),
(4, 4, 1, 2, 4, 'super event', '2023-01-29 08:30:00', '                cool', '', 'super event');

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `ID_EVENT_TYPE` int(11) NOT NULL,
  `EVENT_TYPE_NAME` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`ID_EVENT_TYPE`, `EVENT_TYPE_NAME`) VALUES
(1, 'Concert'),
(2, 'Soirée'),
(3, 'Festival'),
(4, 'Exposition'),
(5, 'Autre');

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE `friend_request` (
  `ID_USER_SENDER` int(11) NOT NULL,
  `ID_USER_RECEIVER` int(11) NOT NULL,
  `REQUEST_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `ID_LOCATION` int(11) NOT NULL,
  `COUNTRY` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CITY` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ADDRESS` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PLACE_NAME` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`ID_LOCATION`, `COUNTRY`, `CITY`, `ADDRESS`, `PLACE_NAME`) VALUES
(1, 'France', 'Paris', '1 Place de la Concorde', 'Place de la Concorde'),
(2, 'France', 'Villeurbanne', '3 Bd de Stalingrad', 'Le transbordeur'),
(3, 'France', 'Lyon', '7 place des Terreaux', 'Crazy dogs'),
(4, 'France', 'Lyon', '411 allée du 11 novembre 1918', 'Transborder');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `ID_PAYMENT_METHOD` int(11) NOT NULL,
  `PAYMENT_METHOD_NAME` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`ID_PAYMENT_METHOD`, `PAYMENT_METHOD_NAME`) VALUES
(1, 'Aucun'),
(2, 'Carte'),
(3, 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `ID_PRICING` int(11) NOT NULL,
  `ID_EVENT` int(11) NOT NULL,
  `PRICE_AMOUNT` float NOT NULL,
  `PRICING_NAME` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`ID_PRICING`, `ID_EVENT`, `PRICE_AMOUNT`, `PRICING_NAME`) VALUES
(1, 1, 20.5, 'Tarif normal'),
(2, 1, 10, 'Tarif jeune'),
(3, 2, 15, 'Tarif normal'),
(4, 2, 5, 'Tarif étudiant'),
(5, 0, 10, 'Tarif normal'),
(6, 0, 5, 'Tarif étudiant'),
(7, 0, 15, 'Tarif groupe'),
(8, 0, 10, 'Tarif jeune');

-- --------------------------------------------------------

--
-- Table structure for table `role_type`
--

CREATE TABLE `role_type` (
  `ID_ROLE_TYPE` int(11) NOT NULL,
  `ROLE_NAME` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_type`
--

INSERT INTO `role_type` (`ID_ROLE_TYPE`, `ROLE_NAME`) VALUES
(1, 'User'),
(2, 'Organizer');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ID_TICKET` int(11) NOT NULL,
  `ID_EVENT` int(11) NOT NULL,
  `ID_PAYMENT_METHOD` int(11) NOT NULL,
  `ID_TICKET_PRICING` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `TICKET_NUMBER` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ID_TICKET`, `ID_EVENT`, `ID_PAYMENT_METHOD`, `ID_TICKET_PRICING`, `ID_USER`, `TICKET_NUMBER`) VALUES
(6, 2, 2, 4, 2, '2-6-2'),
(5, 3, 2, 7, 2, '3-5-2'),
(4, 2, 2, 3, 2, '2-4-2'),
(3, 1, 2, 1, 2, '1-3-2'),
(2, 3, 2, 5, 2, '3-2-2'),
(1, 1, 2, 1, 2, '1-1-2'),
(7, 2, 2, 4, 2, '2-7-2'),
(8, 3, 2, 5, 2, '3-8-2'),
(9, 1, 2, 1, 2, '1-9-2'),
(10, 2, 2, 4, 2, '2-10-2');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_pricing`
--

CREATE TABLE `ticket_pricing` (
  `ID_TICKET_PRICING` int(11) NOT NULL,
  `ID_EVENT` int(11) NOT NULL,
  `NAME_TICKET_PRICING` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PRICE` float NOT NULL,
  `MAX_TICKET_NUMBER` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_pricing`
--

INSERT INTO `ticket_pricing` (`ID_TICKET_PRICING`, `ID_EVENT`, `NAME_TICKET_PRICING`, `PRICE`, `MAX_TICKET_NUMBER`) VALUES
(1, 1, 'Fosse', 13.43, 50),
(2, 1, 'Gradin', 20, 30),
(3, 2, 'Accès à la piste de danse', 10, 100),
(4, 2, 'Accès à la piste de danse + jet de mousse', 15, 50),
(5, 3, 'Accès à la soirée', 10, 100),
(6, 3, 'Accès à la soirée + 1 verre de vin', 15, 50),
(7, 3, 'Accès à la soirée + 1 verre de vin + 1 pot de miel', 20, 30),
(8, 4, 'gradin', 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_type`
--

CREATE TABLE `ticket_type` (
  `ID_TICKET_TYPE` int(11) NOT NULL,
  `TICKET_TYPE_NAME` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `ID_FAVORITE_PAYMENT_METHOD` int(11) NOT NULL,
  `ID_ROLE_TYPE` int(11) NOT NULL,
  `USER_LAST_NAME` text COLLATE utf8mb4_unicode_ci,
  `USER_FIRST_NAME` text COLLATE utf8mb4_unicode_ci,
  `DATE_OF_BIRTH` date DEFAULT NULL,
  `USER_ADDRESS` text COLLATE utf8mb4_unicode_ci,
  `EMAIL` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HASHED_PASSWORD` text COLLATE utf8mb4_unicode_ci,
  `PICTURE_PATH` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `ID_FAVORITE_PAYMENT_METHOD`, `ID_ROLE_TYPE`, `USER_LAST_NAME`, `USER_FIRST_NAME`, `DATE_OF_BIRTH`, `USER_ADDRESS`, `EMAIL`, `HASHED_PASSWORD`, `PICTURE_PATH`) VALUES
(1, 1, 1, 'Mn', 'Jonathan', '2003-07-05', '3 rue de la paix', 'jmn@omg.com', '$2y$10$bFajhuKOnKBPMjiPZlNcB.NYmyqzAKGiExSVySMHxB3lLuoAehmai', 'users/unnamed.jpg'),
(2, 2, 1, 'Liam', 'Liam', '2003-03-25', 'Rue de la rue la vraie', 'cc@liam.org', '$2y$10$bFajhuKOnKBPMjiPZlNcB.NYmyqzAKGiExSVySMHxB3lLuoAehmai', 'users/unnamed.jpg'),
(3, 0, 1, 'Julien', 'Linget', '0000-00-00', '', 'julien.linget@proton.me', '$2y$10$doapGzh522y81nE6ES7jUudoD7WGG9SToW6CImlVKXI8g6G/j9Av6', 'users/unnamed.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`ID_ARTIST`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID_USER`,`ID_TICKET_PRICING`),
  ADD KEY `FK_HAS_TICKETS_IN_CART` (`ID_TICKET_PRICING`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID_EVENT`),
  ADD KEY `FK_ARTIST_PERFORMING` (`ID_ARTIST`),
  ADD KEY `FK_EVENT_CATEGORY` (`ID_EVENT_TYPE`),
  ADD KEY `FK_EVENT_LOCATION` (`ID_LOCATION`),
  ADD KEY `FK_ORGANIZER` (`ID_ORGANIZER`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`ID_EVENT_TYPE`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`ID_LOCATION`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`ID_PAYMENT_METHOD`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`ID_PRICING`),
  ADD KEY `FK_TICKET_PRICES` (`ID_EVENT`);

--
-- Indexes for table `role_type`
--
ALTER TABLE `role_type`
  ADD PRIMARY KEY (`ID_ROLE_TYPE`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ID_TICKET`),
  ADD KEY `FK_PAYMENT_METHOD_USED` (`ID_PAYMENT_METHOD`),
  ADD KEY `FK_TICKER_OWNER` (`ID_USER`),
  ADD KEY `FK_TICKET_IS_FOR` (`ID_TICKET_PRICING`),
  ADD KEY `FK_TICKET_OF_EVENT` (`ID_EVENT`);

--
-- Indexes for table `ticket_pricing`
--
ALTER TABLE `ticket_pricing`
  ADD PRIMARY KEY (`ID_TICKET_PRICING`),
  ADD KEY `FK_IS_PRICING_OF` (`ID_EVENT`);

--
-- Indexes for table `ticket_type`
--
ALTER TABLE `ticket_type`
  ADD PRIMARY KEY (`ID_TICKET_TYPE`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD UNIQUE KEY `UNIQUE_EMAIL_USER` (`EMAIL`),
  ADD KEY `FK_FAVORITE_PAYMENT_METHOD` (`ID_FAVORITE_PAYMENT_METHOD`),
  ADD KEY `FK_USER_ROLE` (`ID_ROLE_TYPE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `ID_ARTIST` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ID_EVENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event_type`
--
ALTER TABLE `event_type`
  MODIFY `ID_EVENT_TYPE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `ID_LOCATION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `ID_PAYMENT_METHOD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `ID_PRICING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role_type`
--
ALTER TABLE `role_type`
  MODIFY `ID_ROLE_TYPE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ID_TICKET` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ticket_pricing`
--
ALTER TABLE `ticket_pricing`
  MODIFY `ID_TICKET_PRICING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
