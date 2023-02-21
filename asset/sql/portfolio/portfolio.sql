-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 21 fév. 2023 à 18:30
-- Version du serveur : 5.7.24
-- Version de PHP : 8.1.0

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
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `icon` text,
  `use_desc` text,
  `project_desc` text NOT NULL,
  `is_download` tinyint(1) NOT NULL,
  `file` text,
  `is_link` tinyint(1) NOT NULL,
  `link` text,
  `image` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `project`
--

INSERT INTO `project` (`id`, `title`, `icon`, `use_desc`, `project_desc`, `is_download`, `file`, `is_link`, `link`, `image`) VALUES
(0, 'Graph-Analysis', 'graph-analysis', 'Il vous faut java d\'installé sur votre machine. Compilez les fichiers depuis le fichier Main.java puis vous pourrez executer le programme. Avec l\'interface graphique, il vous suffit de suivre les instructions.', 'Ce projet est un projet scolaire fait en groupe consistant à lire dans un fichier CSV différentes données qui représentent des villes (noeuds d\'un graphe), tout en travaillant avec ces données pour traiter le graphe de différents manières (l\'afficher, recuperer les noeuds voisins d\'un noeud en particulier, avoir le plus court chemin entre deux noeuds) \r\n', 1, 'Graph-View.rar', 0, NULL, NULL),
(1, 'Data-Analysis', 'data-analysis', 'Lancez simplement le fichier à télécharger avec Power BI, vous pourrez alors voir la base de donnée utilisée ainsi que les graphiques crées.', 'Ce projet était un projet scolaire fait en groupe qui consistait à créer des graphiques (avec le logiciel Power BI) permettant de visualiser différents aspects d\'une base de données qui nous avait été donnée.', 1, 'Data-Analysis.pbix', 0, NULL, NULL),
(2, 'HTML CV', 'cv-html', NULL, 'Ce projet scolaire personnel a été fait en cours de Web au premier semestre du BUT1, basé uniquement sur le HTML et CSS. Les informations contenues dans celui-ci ne sont pas à jour.\r\nLe but principal de ce projet était de pouvoir travailler sur le positionnement css ainsi que les animations CSS.', 1, 'cv-html.rar', 1, 'cv-html/', NULL),
(3, 'Annuaire', 'phone-book', 'Le programme est sous forme de terminal. Il suffira simplement de suivre les instructions pour faire l\'action souhaité.', 'Ce projet de groupe du 1er semestre est un programme en C lisant un fichier CSV dont chaque ligne est un contact (décrit par un Nom, Prenom, Numéro, ...).\r\nLe but étant avec ce programme de pouvoir créer, supprimer, rechercher un contact selon une ou plusieurs informations, ainsi que de pouvoir trier les résultats selon un des attributs des contacts.', 1, 'phone-book.rar', 0, NULL, NULL),
(4, 'Poster : Hack', 'poster', NULL, 'Ce projet était un projet scolaire de groupe de communication sur un sujet de notre choix en lien avec l\'informatique.\r\nJ\'ai travaillée sur la réalisation du design global du poster avec Photoshop et Illustrator (pour les formes), j\'ai donc trouvé interessant de l\'afficher dans les projets', 0, 'Project-Poster.pdf', 1, 'Project-Poster.pdf', NULL),
(5, 'GIT Cheat Sheet', 'git', NULL, 'Cet aide mémoire était un projet scolaire de groupe. Dans celui-ci , vous y verrez les commandes git les plus importantes ainsi que leur explication.', 1, 'Git-Cheat-Sheet.pdf', 1, 'Git-Cheat-Sheet.pdf', NULL),
(6, 'Tree Viewer', 'tree', 'Lancer le fichier exe de l\'application et suivez les instructions !', 'Tree Viewer est un projet visant à créer un ABR (Arbre binaire de recherche) et pouvoir le visualiser principalement, et d\'autres fonctionnalités.', 1, 'tree-viewer.rar', 0, NULL, NULL),
(7, 'Would You Play', 'snake', 'Séléctionner le jeu voulu. \r\nChargez le jeu puis choisissez d\'ignorer les instructions ou non. Le jeu apparait ensuite. Vous avez une page des préférences pour chacun des jeux. Pour le jeu du snake, cela vous permet de choisir entre différents points (taille du terrain, nombre de pommes...). Pour le jeu des batons, vous pouvez choisir la difficulté du robot, ainsi que le choix principal (choisir celui qui commence ou le nombre de batons).\r\nAttention : Il arrive rarement que les instructions ne s\'affichent pas après avoir appuyé sur play ce qui bloque la page. Il suffit de recharger la page pour règler cette erreur.', 'Would you play est un projet personnel que j\'ai fait basé sur le HTML et le Javascript. Ce site (monopage) vous permet de jouer à différents jeux. Actuellement, un snake avec différentes options ainsi qu\'un jeu des bâtons ont été faits.', 0, 'would-you-play/', 0, NULL, NULL),
(8, 'E-Ticket', 'ticketing', 'Utilisation du php pour la connection à la base de données. Inscription, connection et administration de son compte possible.\r\nReception du billet en PDF par mail à la suite d\'un achat.', 'Ce site est un projet scolaire de vente de tickets (concerts, spectacles ...).', 0, '', 1, 'e-ticket/', NULL),
(9, 'Hangman Game', 'hangman', 'Démarrez une partie en donnant les pseudonymes des deux joueurs puis en validant.\r\nUn des deux joueurs choisis au hasard donnera le mot de son choix et validera ensuite.\r\nL\'autre joueur doit ensuite rentrer des lettres, si celles-ci est bonne, la lettre se découvrira dans le mot. Sinon, attention à ne pas trop faire d\'erreurs.', 'Ce projet scolaire était une mise à niveau en PHP. Il s\'agit d\'un jeu du pendu tout ce qu\'il y a de plus basique qui fonctionne avec les sessions et qui sauvegarde l\'ensemble des parties dans une base de données pour les afficher sur la page d\'accueil. Le jeu se joue à deux joueurs, l\'un donnera le mot et l\'autre le cherchera.', 1, 'hangman/', 1, 'hangman-game.rar', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sae`
--

CREATE TABLE `sae` (
  `ue` text NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
