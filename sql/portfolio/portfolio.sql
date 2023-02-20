-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 20 fév. 2023 à 14:04
-- Version du serveur : 10.2.38-MariaDB
-- Version de PHP : 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `is_download` tinyint(1) NOT NULL,
  `file` text DEFAULT NULL,
  `is_link` tinyint(1) NOT NULL,
  `link` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `img_website` int(11) DEFAULT NULL,
  `project_desc` text NOT NULL,
  `use_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `title`, `is_download`, `file`, `is_link`, `link`, `icon`, `img_website`, `project_desc`, `use_desc`) VALUES
(0, 'Data-Analysis', 1, 'Data-Analysis.pbix', 0, NULL, 'data-analysis', NULL, 'Ce projet était un projet scolaire fait en groupe qui consistait à créer des graphiques (avec le logiciel Power BI) permettant de visualiser différents aspects d\'une base de données qui nous avait été donnée.', 'Lancez simplement le fichier à télécharger avec Power BI, vous pourrez alors voir la base de donnée utilisée ainsi que les graphiques crées.'),
(1, 'Graph-Analysis', 1, 'Graph-View.rar', 0, NULL, 'graph-analysis', NULL, 'Ce projet est un projet scolaire fait en groupe consistant à lire dans un fichier CSV différentes données qui représentent des villes (noeuds d\'un graphe), tout en travaillant avec ces données pour traiter le graphe de différents manières (l\'afficher, recuperer les noeuds voisins d\'un noeud en particulier, avoir le plus court chemin entre deux noeuds) \r\n', 'Il vous faut java d\'installé sur votre machine. Compilez les fichiers depuis le fichier Main.java puis vous pourrez executer le programme. Avec l\'interface graphique, il vous suffit de suivre les instructions.'),
(3, 'E-Ticket', 0, '', 1, 'e-ticket/', 'ticketing', NULL, 'Ce site est un projet scolaire de vente de tickets (concerts, spectacles ...).', 'Utilisation du php pour la connection à la base de données. Inscription, connection et administration de son compte possible.\r\nReception du billet en PDF par mail à la suite d\'un achat.'),
(4, 'Annuaire', 1, 'phone-book.rar', 0, NULL, 'phone-book', NULL, 'Ce projet de groupe du 1er semestre est un programme en C lisant un fichier CSV dont chaque ligne est un contact (décrit par un Nom, Prenom, Numéro, ...).\r\nLe but étant avec ce programme de pouvoir créer, supprimer, rechercher un contact selon une ou plusieurs informations, ainsi que de pouvoir trier les résultats selon un des attributs des contacts.', 'Le programme est sous forme de terminal. Il suffira simplement de suivre les instructions pour faire l\'action souhaité.'),
(5, 'Poster : Hack', 0, 'Project-Poster.pdf', 1, 'Project-Poster.pdf', 'poster', NULL, 'Ce projet était un projet scolaire de groupe de communication sur un sujet de notre choix en lien avec l\'informatique.\r\nJ\'ai travaillée sur la réalisation du design global du poster avec Photoshop et Illustrator (pour les formes), j\'ai donc trouvé interessant de l\'afficher dans les projets', NULL),
(6, 'Would You Play', 0, 'would-you-play/', 0, NULL, 'snake', NULL, 'Would you play est un projet personnel que j\'ai fait basé sur le HTML et le Javascript. Ce site (monopage) vous permet de jouer à différents jeux.', 'Séléctionner le jeu voulu (le Sticks game est encore en développement, seul le snake marche pour l\'instant). \r\nChargez le jeu puis choisissez d\'ignorer les instructions ou non. Le jeu apparait ensuite. Vous avez une page des préférences du jeu vous permettant de personnaliser votre mode de jeu, ces paramètres sont stockés avec des cookies permettant de les garder en mémoire (pendant une journée) et des les garder même avec un rechargement de page.\r\nAttention : Il arrive rarement que les instructions ne s\'affichent pas après avoir appuyé sur play ce qui bloque la page. Il suffit normalement de recharger la page pour règler cette erreur.'),
(7, 'Tree Viewer', 1, 'tree-viewer.rar', 0, NULL, 'tree', NULL, 'Tree Viewer est un projet visant à créer un ABR (Arbre binaire de recherche) et pouvoir le visualiser principalement, et d\'autres fonctionnalités.', 'Lancer le fichier exe de l\'application et suivez les instructions !'),
(8, 'GIT Cheat Sheet', 1, 'Git-Cheat-Sheet.pdf', 1, 'Git-Cheat-Sheet.pdf', 'git', NULL, 'Cet aide mémoire était un projet scolaire de groupe. Dans celui-ci , vous y verrez les commandes git les plus importantes ainsi que leur explication.', NULL),
(9, 'HTML CV', 1, 'cv-html.rar', 1, 'cv-html/', 'cv-html', NULL, 'Ce projet scolaire personnel a été fait en cours de Web au premier semestre du BUT1, basé uniquement sur le HTML et CSS. Les informations contenues dans celui-ci ne sont pas à jour.\r\nLe but principal de ce projet était de pouvoir travailler sur le positionnement css ainsi que les animations CSS.', NULL),
(10, 'Hangman Game', 1, 'hangman/', 1, 'hangman-game.rar', 'hangman', NULL, 'Ce projet scolaire était une mise à niveau en PHP. Il s\'agit d\'un jeu du pendu tout ce qu\'il y a de plus basique qui fonctionne avec les sessions et qui sauvegarde l\'ensemble des parties dans une base de données pour les afficher sur la page d\'accueil. Le jeu se joue à deux joueurs, l\'un donnera le mot et l\'autre le cherchera.', 'Démarrez une partie en donnant les pseudonymes des deux joueurs puis en validant.\r\nUn des deux joueurs choisis au hasard donnera le mot de son choix et validera ensuite.\r\nL\'autre joueur doit ensuite rentrer des lettres, si celles-ci est bonne, la lettre se découvrira dans le mot. Sinon, attention à ne pas trop faire d\'erreurs.');

-- --------------------------------------------------------

--
-- Structure de la table `sae`
--

CREATE TABLE `sae` (
  `UE` text NOT NULL,
  `TITRE` text NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `DATE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
