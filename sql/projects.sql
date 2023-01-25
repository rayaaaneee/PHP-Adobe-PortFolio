-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 22, 2023 at 06:24 PM
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `title` text NOT NULL,
  `download` tinyint(1) NOT NULL,
  `icon` text NOT NULL,
  `file` text NOT NULL,
  `img_website` int(11) DEFAULT NULL,
  `project_desc` text,
  `use_desc` text,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`title`, `download`, `icon`, `file`, `img_website`, `project_desc`, `use_desc`, `id`) VALUES
('Data-Analysis', 1, 'data-analysis', 'Data-Analysis.pbix', NULL, 'Ce projet était un projet scolaire fait en groupe qui consistait à créer des graphiques (avec le logiciel Power BI) permettant de visualiser différents aspects d\'une base de données qui nous avait été donnée.', 'Lancez simplement le fichier à télécharger avec Power BI, vous pourrez alors voir la base de donnée utilisée ainsi que les graphiques crées.', NULL),
('Graph-Analysis', 1, 'graph-analysis', 'Graph-View.rar', NULL, 'Ce projet est un projet scolaire fait en groupe consistant à lire dans un fichier CSV différentes données qui représentent des villes (noeuds d\'un graphe), tout en travaillant avec ces données pour traiter le graphe de différents manières (l\'afficher, recuperer les noeuds voisins d\'un noeud en particulier, avoir le plus court chemin entre deux noeuds) \r\n', 'A completer', NULL),
('E-Ticket', 0, 'ticketing', 'e-ticket/', NULL, 'Ce site est un projet scolaire de vente de tickets (concerts, spectacles ...).', 'Utilisation du php pour la connection à la base de données. Inscription, connection et administration de son compte possible.\r\nReception du billet en PDF par mail à la suite d\'un achat.', NULL),
('Annuaire', 1, 'phone-book', '', NULL, 'Ce projet est un programme en C lisant un fichier CSV dont chaque ligne est un contact (décrit par un Nom, Prenom, Numéro, ...).\r\nLe but étant avec ce programme de pouvoir créer, supprimer, rechercher un contact selon une ou plusieurs informations, ainsi que de pouvoir trier les résultats selon un des attributs des contacts.', 'Le programme est sous forme de terminal. Il suffira simplement de suivre les instructions pour faire l\'action souhaité.', NULL),
('Poster : Hack', 0, 'poster', 'Project-Poster.pdf', NULL, 'Ce projet était un projet scolaire de groupe de communication sur un sujet de notre choix en lien avec l\'informatique.\r\nJ\'ai travaillée sur la réalisation du design global du poster avec Photoshop et Illustrator (pour les formes), j\'ai donc trouvé interessant de l\'afficher dans les projets', NULL, NULL),
('Would You Play', 0, 'snake', 'would-you-play/', NULL, 'Would you play est un projet personnel que j\'ai fait basé sur le HTML et le Javascript. Ce site (monopage) vous permet de jouer à différents jeux.', 'Séléctionner le jeu voulu (le Sticks game est encore en développement, seul le snake marche pour l\'instant). \r\nChargez le jeu puis choisissez d\'ignorer les instructions ou non. Le jeu apparait ensuite. Vous avez une page des préférences du jeu vous permettant de personnaliser votre mode de jeu, ces paramètres sont stockés avec des cookies permettant de les garder en mémoire (pendant une journée) et des les garder même avec un rechargement de page.\r\nAttention : Il arrive rarement que les instructions ne s\'affichent pas après avoir appuyé sur play ce qui bloque la page. Il suffit normalement de recharger la page pour règler cette erreur.', NULL),
('Tree Viewer', 1, 'tree', 'tree-viewer.rar', NULL, 'Tree Viewer est un projet visant à créer un ABR (Arbre binaire de recherche) et pouvoir le visualiser principalement, et d\'autres fonctionnalités.', 'Lancer le fichier exe de l\'application et suivez les instructions !', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
