-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2022 at 02:44 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`name`, `email`, `message`) VALUES
('rayane_mrln', 'rayane.merlin8@gmail.com', 'zrt');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `title` text NOT NULL,
  `download` tinyint(1) NOT NULL,
  `icon` int(11) DEFAULT NULL,
  `img-website` int(11) DEFAULT NULL,
  `project-desc` text,
  `use-desc` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`title`, `download`, `icon`, `img-website`, `project-desc`, `use-desc`) VALUES
('Power BI', 1, NULL, NULL, 'Ce projet était un projet scolaire fait en groupe qui consistait à créer des graphiques (avec le logiciel Power BI) permettant de visualiser différents aspects d\'une base de données qui nous avait été donnée.', 'Lancez simplement le fichier à télécharger avec Power BI, vous pourrez alors voir la base de donnée utilisée ainsi que les graphiques crées.'),
('Graph-Analysis', 1, NULL, NULL, 'Ce projet est un projet scolaire fait en groupe consistant à lire dans un fichier CSV différentes données qui représentent des villes (noeuds d\'un graphe), tout en travaillant avec ces données pour traiter le graphe de différents manières (l\'afficher, recuperer les noeuds voisins d\'un noeud en particulier, avoir le plus court chemin entre deux noeuds) \r\n', 'A completer'),
('E-Ticket', 0, NULL, NULL, 'Ce site est un projet scolaire de vente de tickets (concerts, spectacles ...).', 'Utilisation du php pour la connection à la base de données. Inscription, connection et administration de son compte possible.\r\nReception du billet en PDF par mail à la suite d\'un achat.'),
('Annuaire', 1, NULL, NULL, 'Ce projet est un programme en C lisant un fichier CSV dont chaque ligne est un contact (décrit par un Nom, Prenom, Numéro, ...).\r\nLe but étant avec ce programme de pouvoir créer, supprimer, rechercher un contact selon une ou plusieurs informations, ainsi que de pouvoir trier les résultats selon un des attributs des contacts.', 'Le programme est sous forme de terminal. Il suffira simplement de suivre les instructions pour faire l\'action souhaité.'),
('Poster : Les failles du web', 0, NULL, NULL, 'Ce projet était un projet scolaire de groupe de communication sur un sujet de notre choix en lien avec l\'informatique.\r\nJ\'ai travaillée sur la réalisation du design global du poster avec Photoshop et Illustrator (pour les formes), j\'ai donc trouvé interessant de l\'afficher dans les projets', NULL),
('Would You Play', 0, NULL, NULL, 'Would you play est un projet personnel que j\'ai fait basé sur le HTML et le Javascript. Ce site (monopage) vous permet de jouer à différents jeux.', 'Séléctionner le jeu voulu (le Sticks game est encore en développement, seul le snake marche pour l\'instant). \r\nChargez le jeu puis choisissez d\'ignorer les instructions ou non. Le jeu apparait ensuite. Vous avez une page des préférences du jeu vous permettant de personnaliser votre mode de jeu, ces paramètres sont stockés avec des cookies permettant de les garder en mémoire (pendant une journée) et des les garder même avec un rechargement de page.\r\nAttention : Il arrive rarement que les instructions ne s\'affichent pas après avoir appuyé sur play ce qui bloque la page. Il suffit normalement de recharger la page pour règler cette erreur.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
