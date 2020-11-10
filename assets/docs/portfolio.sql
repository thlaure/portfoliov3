-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 10, 2020 at 09:13 AM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

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
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20201104082723', '2020-11-04 08:27:46', 39),
('DoctrineMigrations\\Version20201104101609', '2020-11-04 10:16:30', 31),
('DoctrineMigrations\\Version20201104102323', '2020-11-04 10:23:58', 27),
('DoctrineMigrations\\Version20201109141119', '2020-11-09 14:11:41', 50),
('DoctrineMigrations\\Version20201109151241', '2020-11-09 15:12:55', 68),
('DoctrineMigrations\\Version20201109151332', '2020-11-09 15:13:35', 67),
('DoctrineMigrations\\Version20201109172317', '2020-11-09 17:23:31', 84),
('DoctrineMigrations\\Version20201109172750', '2020-11-09 17:27:53', 58),
('DoctrineMigrations\\Version20201109185128', '2020-11-09 18:51:47', 72),
('DoctrineMigrations\\Version20201109185225', '2020-11-09 18:52:39', 70);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
CREATE TABLE IF NOT EXISTS `project` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `files` json DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `description`, `tag`, `files`, `slug`, `context`, `start_date`, `end_date`) VALUES
(1, 'GSB', 'Galaxy Swiss Bourdin est une entreprise du secteur pharmaceutique qui est issue de la fusion entre le géant américain Galaxy et le conglomérat européen Swiss Bourdin. Suite à cette fusion, le groupe cherche à optimiser son activité en uniformisant la gestion des frais professionnels des visiteurs médicaux par le biais d\'une application de type client léger. Cette dernière est utilisée par les visiteurs médicaux pour renseigner leurs frais, et par les comptables qui se chargent de la gestion de ces frais. Il existe deux types de frais, les frais forfaitaires (déplacement, hébergement, restauration) et les autres : les frais hors-forfait.\r\nL\'objectif ici était de développer la partie comptable, mais aussi de développer un service Windows qui gérerait la clôture des fiches de frais non clôturées du mois courant des visiteurs médicaux au début de la campagne de validation par les comptables.\r\nL\'application est hébergée sur un serveur Apache 2 avec MariaDB et PhpMyAdmin. Le tout sur une machine Debian 9.\r\n\r\nTâches réalisées :\r\n- Installation et configuration du serveur web\r\n- Développement du module permettant aux visiteurs médicaux de télécharger leurs fiches de frais des mois précédents, et stockage d\'une copie sur le serveur\r\n- Veiller au respect des normes d\'écriture sur l\'ensemble du code PHP\r\n- Pour le service Windows, développement de la classe métier de gestion des dates et développement d\'une classe d\'accès aux données réutilisable\r\n\r\nTechnologies :\r\n- Environnement : NetBeans 8.2 - Visual Studio 2017 - MySQL Workbench - Wamp - phpDocumentor\r\n- Langages : PHP - HTML - CSS - JavaScript - Bootstrap - C# - SQL\r\n- Serveur : Apache 2 - MariaDB - PhpMyAdmin - Debian 9 - Git\r\n- Autres : Trello - Git - GitHub', 'Projet BTS SIO', '{\"cover\": \"gsb/gsb.png\", \"files\": {}, \"links\": {}, \"images\": [\"gsb/cpt_accueil.png\", \"gsb/cpt_mep.png\", \"gsb/cpt_valid.png\", \"gsb/vis_fiches.png\", \"gsb/vis_pdf.png\"]}', 'gsb', NULL, '2017-09-01', '2018-06-01'),
(2, 'Maison des Ligues', 'La Maison des Ligues de Lorraine (M2L) a pour mission de fournir des espaces et des services aux différentes ligues sportives régionales et à d’autres structures hébergées. La M2L est une structure financée par le Conseil Régional de Lorraine dont l\'administration est déléguée au Comité Régional Olympique et Sportif de Lorraine (CROSL).\r\n\r\nTâches réalisées :\r\n- Installation de Oracle XE sur Windows Server 2012 R2\r\n- Ecriture du trigger pour le contrôle des dates de vacation\r\n- Vidage des zones de saisie après l\'inscription d\'une personne\r\n- Envoi d\'un mail de confirmation après l\'inscription d\'une personne à un atelier\r\n- Développement de l\'API permettant de générer un QR Code contenant l\'ID du participant\r\n- Développement de la méthode de génération de la clé Wi-Fi au moment de l\'enregistrement de l\'arrivée d\'un participant\r\n- Manipulation de la base de données Oracle dans le but d\'y intégrer les statistiques\r\n- Développement de l\'application de type client léger en Symfony 4 permettant aux participants de saisir leur avis sur les ateliers\r\n- Développement de l\'application de type client riche en C# permettant d\'afficher les graphiques des statistiques\r\n- Documentation technique\r\n\r\nTechnologies :\r\n- Environnement : Visual Studio 2017 - PhpStorm - Wamp - Oracle SQL Developer\r\n- Langages : C# - PHP - Symfony 4 - HTML - CSS - JavaScript - Bootstrap - Twig - SQL - PL/SQL\r\n- Serveur : Windows Server 2012 R2 - Oracle XE\r\n- Autres : Trello - Git - Microsoft Team Service - GitHub', 'Projet BTS SIO', '{\"cover\": \"m2l/m2l.png\", \"files\": {}, \"links\": {\"0\": {\"path\": \"https://github.com/thlaure/SymfonyM2L\", \"title\": \"Lien vers le GitHub de la partie web du projet\"}, \"1\": {\"path\": \"https://github.com/thlaure/MaisonDesLigues\", \"title\": \"Lien vers le GitHub de la partie client lourd du projet\"}}, \"images\": []}', 'maison-des-ligues-de-lorraine', NULL, '2017-09-01', '2018-06-01'),
(3, 'Oxford', 'Projet agile réalisé par toute la promotion dans l\'objectif d\'une présentation pour le forum des métiers du numérique de Toulon.\r\nCette réalisation est un projet de reconnaissance faciale utilisant l\'API Face de Microsoft.\r\nNous travaillions dans un faux contexte d\'entreprise qui devait mettre en place un système d\'identification des employés. La solution retenue était la mise en place d\'un système de reconnaissance faciale avec un enregistrement préalable des employés en base de données.\r\nTrois équipes étaient sur ce projet : une équipe sur la partie PHP pour développer une application web d\'administration et de gestion des employés, et deux équipes sur la partie C# : une pour la partie inscription de l\'employé, et la seconde pour la partie correspondance du profil avec un profil stocké dans une base de données MySQL.\r\nL\'organisation du projet était la suivante : chaque mardi soir nous avions une réunion en visio conférence pour parler de l\'avancée du projet et des difficultés rencontrées, nous utilisions Trello pour que tout le monde puisse suivre l\'avancement global du projet, et nous utilisions pour la même raison des kanbans en classe. Chaque étape du projet était définie dans un sprint.\r\n\r\nTechnologies utilisées :\r\n- Environnement : Visual Studio 2017 - Windows 10\r\n- Langages : C# - SQL\r\n- Autres : Git - GitHub - GitKraken - Trello - Scrum\r\n', 'Projet BTS SIO', '{\"cover\": \"oxford/oxford.png\", \"files\": {\"0\": {\"path\": \"btssio/presentation_projet_oxford.pdf\", \"title\": \"Support de présentation du projet Oxford\"}}, \"links\": {}, \"images\": []}', 'oxford', NULL, '2017-09-01', '2017-12-01'),
(4, 'Siomag', 'SIOMAG est un magazine d\'informatique écrit par les étudiants de première année de BTS SIO du lycée Bonaparte. Ils sont aidés par l\'équipe pédagogique qui les entoure, à savoir les professeurs d\'informatique et la documentaliste du CDI du lycée.\r\nCe projet de magazine a été lancé lors de l\'année scolaire 2016/2017, la promotion de 2017/2018 a donc sorti le deuxième numéro de ce magazine.\r\nIl est réalisé à l\'aide d\'un outil de publication de magazines Madmagz. Cet outil permet de créer des magazines au format web, PDF et aussi papier.\r\nChaque étudiant a écrit un ou deux articles sur un sujet qui l\'intéressait dans le domaine de l\'informatique. Ensuite, les articles sont répartis dans six catégories d\'articles.\r\nIl a pour but de faire parler du BTS SIO dans la région toulonnaise, de le faire découvrir, et de permettre aux étudiants d\'avoir un aperçu du déroulement d\'une édition de magazine.', 'Projet BTS SIO', '{\"cover\": \"siomag/siomag.png\", \"files\": {}, \"links\": {\"0\": {\"path\": \"https://madmagz.com/fr/magazine/1031220#/page/1\", \"title\": \"Lien vers le Siomag 2\"}}, \"images\": []}', 'siomag', NULL, '2017-10-01', '2017-11-01'),
(5, 'Gestion de parc informatique', 'Ensemble de TP ayant pour objectif de mettre en place une petite infrastructure réseau comprenant un serveur web, un routeur et trois machines clientes. Le but de nous donner plus de notions dans le domaine de l\'administration réseau ainsi que dans l\'amortissement du matériel.\r\n\r\nTechnologies :\r\n- Environnement : VirtualBox, Debian 9, Windows 10, Ubuntu 17\r\n- Serveur : Apache 2, MariaDB, PhpMyAdmin, ProFTPD, GLPI, OCS Inventory NG\r\n\r\nL\'installation s\'est faite selon les étapes suivantes :\r\n- Installation et configuration du serveur web sous Debian 9 : Apache 2, PhpMyAdmin, MariaDB, ProFTPD\r\n- Installation des clients graphiques : Debian 9, Windows 10, Ubuntu 17\r\n- Installation et configuration du routeur Debian 9\r\n- Configuration des interfaces réseau de chaque machine\r\n- Installation de GLPI et de OCS Inventory sur le serveur web\r\n- Installation des agents OCS sur les machines clientes\r\n- Remontée des informations sur les clients graphiques\r\n- Calcul du coût de l\'amortissement du matériel\r\n- Installation et configuration d\'un serveur de sauvegarde\r\n- Configuration de HeartBeat et DRBD entre deux serveurs web dans le but de mettre en place un système de tolérance de panne transparente', 'Projet BTS SIO', '{\"cover\": \"si7/si7.png\", \"files\": {}, \"links\": {}, \"images\": [\"si7/infrastructure.png\", \"si7/glpi.png\"]}', 'gestion-de-parc-informatique', NULL, '2017-09-01', '2018-01-01'),
(6, 'Gestion Mobilité Bancaire', 'Développement d\'une application web utilisant des technologies Java EE. L\'objectif était de comparer deux fichiers PDF : le premier contenait la liste des assurés débiteurs, et le second contenait la liste des assurés ayant changé de banque ainsi que leurs informations. Si des assurés étaient présents dans les deux fichiers, ils étaient signalés au service comptable de la CPAM à l\'aide d\'un mail afin qu\'il traite ce signalement. Lorsqu\'il y a signalement, celui-ci est enregistré en base de données. L\'application web était là pour le traitement des signalements.\r\nLors de ce projet, un cahier des charges a été produit et modifié à l\'issue de chaque réunion avec les clients.\r\nActuellement, cette application est en service au sein de la CPAM de Toulon.\r\nL\'ensemble du projet s\'appuie sur une architecture MVC avec le framework JSF (JavaServer Faces) avec l\'utilisation de PrimeFaces et tourne sur un serveur GlassFish. EclipseLink et JPA ont été utilisés pour la partie persistance des données dans une base de données SQL Server.', 'Stage 1ère année BTS SIO', '{\"cover\": \"gmb/gmb.png\", \"files\": {\"0\": {\"path\": \"btssio/cahier_des_charges_stage1.pdf\", \"title\": \"Cahier des charges\"}}, \"links\": {}, \"images\": []}', 'gestion-mobilite-bancaire', 'Service développement de la CPAM du Var de Toulon', '2017-05-01', '2017-06-01'),
(7, 'Rezone', 'Rezone est une application web de cartographie dont le but est d\'aider les professionnels de santé à trouver un bassin d\'installation et de les inviter à s\'installer dans des endroits où ils sont peu présents par rapport à la population locale.\r\nMais cette application est en réalité décomposée en deux partie :\r\n- L\'application pour les professionnels de santé qui une application web exportable sur n\'importe quelle infrastructure, et donc écrite en HTML, CSS, et JavaScript.\r\n- L\'application client léger développée en Java EE suivant le framework MVC JSF tournant sur un serveur Payara permettant aux internes de la CPAM de gérer les demandes d\'installation des professionnels de santé.\r\n\r\nLe fonctionnement des technologies utilisées entre elles a été assez compliqué à comprendre au début, et je vais l\'expliquer ici après les avoir listées :\r\n- PostGIS : Extension de PostgreSQL qui active la manipulation d’informations géographiques sous forme de géométries (des polygones par exemple) en respectant les standards établis par l’OGS (Open Geospacial Consortium). Il permet donc à PostgreSQL d’être un SGBD spatial en stockant des objets graphiques, et de permettre de réaliser des opérations sur les zones enregistrées (comme faire des fusions). Les polygones importés dans PostgreSQL sont ceux fournis par Data Gouv.\r\n- Protocole WMS (Web Map Service) : Protocole de communication standard permettant d’obtenir des cartes de données géoréférencées à partir de serveur de donnée. Cela permet de mettre en place un réseau de serveurs cartographiques à partir desquels des clients peuvent construire des cartes interactives.\r\n- GeoServer  : Serveur Open Source écrit en Java qui permet aux utilisateurs de partager et modifier des données géographiques. Il implémente le protocole WMS (Web Map Service) qui permet, au moyen du URL formatée, d’interroger des API cartographiques telles que OpenLayers et Leaflet. Il va chercher les géométries qui sont stockées dans PostgreSQL et les transforme en images/tuiles.\r\n- OpenStreetMap  : Projet qui a pour but de constituer une base de données du monde permettant de créer une carte.\r\n- OpenLayers : Bibliothèque JavaScript sous licence BSD avec un noyau de fonctionnalités destiné à la mise en place d’applications web cartographiques dynamiques. Cette API utilise la carte fournie par OpenStreetMap. OpenLayers récupère les tuiles qui sont sur GeoServer et les affiche.\r\n\r\nGeoServer implémente le protocole WMS (Web Map Service) qui permet, au moyen d’une URL formatée, d’interroger des API cartographiques telles que OpenLayers et Leaflet qui utilisent la carte fournie par OpenStreetMap.\r\nGeoServer va diffuser les données (dessiner et générer des images ou calques) depuis la base de données PostgreSQL (les données de type Geometry implémentées par PostGIS fournies par Data Gouv), et OpenLayers va récupérer ces données pour les assembler. Le principe est d’utiliser plusieurs calques de tuiles.\r\nChacun de ces calques correspond à une requête dans la base de données PostgreSQL. PostGIS permet de fusionner des zones (ou communes) afin de créer les bassins.', 'Stage 2ème année BTS SIO', '{\"cover\": \"rezone/rezone.png\", \"files\": {}, \"links\": {\"0\": {\"path\": \"http://rezone.ameli.fr/rezone/\", \"title\": \"Lien vers Rezone\"}}, \"images\": []}', 'rezone', 'Service développement de la CPAM du Var de Toulon', '2018-01-01', '2018-03-01'),
(8, 'GolfPrintStore', 'Site e-commerce pour RM Concept, ayant pour but de vendre des balles de golf personnalisables à des particuliers et à des entreprises.\r\n\r\nMissions :\r\n- Création du magasin (ou catalogue) où seront affichés les produits. Lorsqu\'on clique sur un produit, une nouvelle page s\'ouvre avec la description de celui-ci, le lien permettant de le personnaliser, la quantité à ajouter, et le bouton d\'ajout au panier.\r\n- Formulaire de création de compte client avec chiffrage du mot de passe en base de données.\r\n- Formulaire de login sécurisé.\r\n- Compte client sur lequel l\'intéressé peut modifier ses informations et avoir le détail de ses commandes.\r\n- Accès au détail du panier.\r\n- Création d\'une commande (possibilité de l\'annuler) avec choix du transporteur et du moyen de paiement, puis validation.\r\n- Module de personnalisation des balles en JavaScript. Le client a la possibilité d\'ajouter du texte ou une image.\r\n- Interface d\'administration pour le propriétaire du site lui permettant de gérer ses stocks, d\'ajouter des produits, d\'avoir accès aux informations des clients ainsi qu\'à leurs commandes.\r\n\r\nTechnologies :\r\n- Environnement : VS Code - MySQL Workbench - Wamp\r\n- Langages : HTML - CSS - JavaScript - jQuery - Symfony - Twig\r\n- Autres : Git - Kanban\r\n\r\nLes images suivantes ne sont pas fidèles à ce qui a été fait dernièrement, depuis le déploiement du site, il y a eu des modifications auxquelles je n\'ai pas participé.', 'Expérience freelance', '{\"cover\": \"rmconcept/rmconcept.png\", \"files\": {}, \"links\": {\"0\": {\"path\": \"https://www.golfprintstore.fr/\", \"title\": \"Lien vers GolfPrintStore\"}}, \"images\": [\"rmconcept/login.png\", \"rmconcept/magasin.png\", \"rmconcept/panier.png\", \"rmconcept/produit.png\"]}', 'golfprintstore', 'RM Concept', '2018-07-01', '2018-09-01'),
(9, 'TP Symfony', 'TP Symfony écrit pour le BTS SIO option SLAM du lycée Bonaparte de Toulon, supervisé par les professeurs de développement de celui-ci.\r\nLe but était d\'offrir aux étudiants une approche différente par rapport à celle que j\'ai eue quand j\'étais à leur place.\r\nCe TP s\'appuie sur la version 4.1 du framework, je l\'ai rédigé au moment où celle-ci venait de paraître.', 'Projet personnel', '{\"cover\": \"rmconcept/rmconcept.png\", \"files\": {\"0\": {\"path\": \"btssio/symfony4_tp.pdf\", \"title\": \"TP Symfony au format PDF\"}}, \"links\": {\"0\": {\"path\": \"https://github.com/thlaure/tp_symfony\", \"title\": \"Lien vers le GitHub du TP\"}}, \"images\": []}', 'tp-symfony', NULL, '2018-07-01', '2018-10-01'),
(10, 'Stamina', 'Projet de groupe réalisé dans le cadre du cours de gestion de projet Agile pendant lequel nous devions développer un jeu sous Unity3D. J\'étais responsable de la communication de la promotion de celui-ci à travers un site web qui comprenait les éléments suivants :\r\n- Une page de présentation du jeu\r\n- Une page bestiaire\r\n- Une page décrivant les cartes du jeu\r\n- Un espace utilisateur sécurisé\r\nJ\'assurai également le rôle de Scrum Master.\r\n\r\nTechnologies utilisées :\r\n- Environnement : VS Code - MySQL\r\n- Langages : HTML - CSS - JavaScript - Symfony - Twig\r\n- Autres : Git - Scrum', 'Projet CNAM', '{\"cover\": \"stamina/stamina.png\", \"files\": {}, \"links\": {\"0\": {\"path\": \"https://github.com/thlaure/stamina\", \"title\": \"Lien vers le GitHub du projet\"}}, \"images\": []}', 'stamina', NULL, '2018-11-01', '2019-04-01'),
(11, 'Espace d\'administration du BDE', 'Ce projet a été réalisé dans le cadre du cours de base de données. Le but était de mettre en place un site web avec une base de données avec l\'aide de Docker.\r\nNous avons choisi de travailler sur l\'espace d\'administration de l\'application du BDE pour la communication d\'événements et d\'informations car nous en avions besoin.\r\nLe projet a été réalisé à deux, je m\'occupais de la partie web tandis que mon collègue s\'occupait de la partie intégration avec Docker.\r\nNous devions réaliser un dictionnaire des données, une matrice de dépendances fonctionnelles, ainsi que les modèles associés : Modèle Logique des Données et Modèle Entité Association.\r\n\r\nDans le cadre général du développement de l\'application cliente du BDE, j\'ai réalisé le dossier de spécifications, et participé à la création du logo (Photoshop).\r\n\r\nTechnologies utilisées :\r\n- Environnement : VS Code - Docker - PostgreSQL\r\n- Langages : HTML - CSS - JavaScript - Symfony\r\n- Autres : Git', 'Projet CNAM', '{\"cover\": \"bde/logo_bde.png\", \"files\": {\"0\": {\"path\": \"cnam/dossier_de_specifications.pdf\", \"title\": \"Dossier de spécifications\"}}, \"links\": {\"0\": {\"path\": \"https://github.com/thlaure/projet_bdd_cnam\", \"title\": \"Lien vers le GitHub du projet\"}}, \"images\": []}', 'espace-administration-bde', NULL, '2019-09-01', '2019-12-01'),
(12, 'Feel IT', 'Projet de groupe réalisé dans le cadre du module projet pluridisciplinaire. Le thème était de faire une représentation de données traitées. Nous avons donc pris le thème de l\'analyse de sentiments à travers de textes fictifs récupérés dans Google Colab.\r\nNous avons traité et nettoyé les données avec Python dans un environnement Anaconda grâce à Jupyter. Les données étaient ensuite stockées dans une base de données MySQL. Les données stockées étaient récupérées depuis une API Flask pour être redirigées vers l\'UI et représentées avec Chart.js.\r\nLe projet était mené suivant la méthode Scrumban.\r\n\r\nTechnologies :\r\n- Environnement : VS Code - Anaconda - MySQL\r\n- Langages : Python - HTML - CSS - JavaScript\r\n- Autres : Git - Scrumban', 'Projet CNAM', '{\"cover\": \"feelit/feelit.png\", \"files\": {\"0\": {\"path\": \"cnam/presentation_feelit.pdf\", \"title\": \"Présentation du projet Feel IT\"}}, \"links\": {}, \"images\": []}', 'feel-it', NULL, '2019-09-01', '2019-12-01'),
(13, 'Patoketchup', 'Projet de groupe réalisé dans le cadre du cours de développement web. Le but était de développer un site du type Marmiton répondant aux besoins suivants :\r\n- Consultation de recettes\r\n- Créer des ingrédients, ustensiles et allergènes\r\n- Création de recettes\r\n- Recherche de recettes\r\n- Modération\r\n- Création de compte utilisateur\r\n- Création de tickets incident\r\n- Confirmation de création de compte depuis un lien envoyé par mail\r\n- Laisser des commentaires sur les recettes\r\n\r\nNous ne devions pas utiliser de framework PHP. Les technologies utilisées étaient :\r\n- Environnement : VS Code - MariaDB - Wamp\r\n- Langages : HTML - CSS - JavaScript - jQuery - PHP\r\n- Autres : Git - Agilité', 'Projet CNAM', '{\"cover\": \"patoketchup/patoketchup.png\", \"files\": {}, \"links\": {\"0\": {\"path\": \"https://thomaslaure.alwaysdata.net/patoketchup/index.php/home\", \"title\": \"Lien vers le site\"}, \"1\": {\"path\": \"https://github.com/thlaure/Patoketchup\", \"title\": \"Lien vers le GitHub du projet\"}}, \"images\": []}', 'patoketchup', NULL, '2020-03-01', '2020-06-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
