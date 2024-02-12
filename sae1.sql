-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 08 fév. 2024 à 12:10
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae1`
--

-- --------------------------------------------------------

--
-- Structure de la table `choixquestions`
--

CREATE TABLE `choixquestions` (
  `choixID` int(11) NOT NULL,
  `questionID` int(11) DEFAULT NULL,
  `choixTexte` varchar(255) DEFAULT NULL,
  `estCorrect` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `choixquestions`
--

INSERT INTO `choixquestions` (`choixID`, `questionID`, `choixTexte`, `estCorrect`) VALUES
(1, 1, 'Banane', 0),
(2, 1, 'Pomme', 1),
(3, 1, 'Raisin', 0),
(4, 1, 'Cerise', 0),
(5, 2, 'Book', 1),
(6, 2, 'Bookmark', 0),
(7, 2, 'Notebook', 0),
(8, 2, 'Magazine', 0),
(9, 3, 'Bonsoir', 0),
(10, 3, 'Bonjour', 1),
(11, 3, 'Bonne nuit', 0),
(12, 3, 'Salut', 0),
(13, 4, 'Bonjour', 0),
(14, 4, 'Derien', 0),
(15, 4, 'Merci', 1),
(16, 4, 'Avec plaisir', 0),
(17, 5, 'Bonjour', 0),
(18, 5, 'Merci', 0),
(19, 5, 'À plus tard', 1),
(20, 5, 'Bonne nuit', 0),
(21, 6, 'Je pense', 0),
(22, 6, 'Je ne sais pas', 1),
(23, 6, 'Je comprends', 0),
(24, 6, 'Je veux', 0),
(25, 7, 'Où est la sortie ?', 0),
(26, 7, 'Où est la salle de bain ?', 1),
(27, 7, 'Où est la bibliothèque ?', 0),
(28, 7, 'Où est le restaurant ?', 0),
(29, 8, 'Qui est tu ?', 0),
(30, 8, 'Comment vas-tu ?', 1),
(31, 8, 'Que fait tu ?', 0),
(32, 8, 'Ou est tu ?', 0),
(33, 9, 'Je suis fatigué', 0),
(34, 9, 'Je vais bien', 1),
(35, 9, 'Je suis là', 0),
(36, 9, 'Je suis perdu', 0),
(37, 10, 'Libro', 1),
(38, 10, 'Escritorio', 0),
(39, 10, 'Lápiz', 0),
(40, 10, 'Bolsa', 0),
(41, 11, 'Ventana', 0),
(42, 11, 'Mesa', 1),
(43, 11, 'Silla', 0),
(44, 11, 'Puerta', 0),
(45, 12, 'Vino', 0),
(46, 12, 'Agua', 1),
(47, 12, 'Cerveza', 0),
(48, 12, 'Leche', 0),
(49, 13, 'Estrella', 0),
(50, 13, 'Luna', 0),
(51, 13, 'Cielo', 1),
(52, 13, 'Sol', 0),
(53, 14, 'Bicicleta', 0),
(54, 14, 'Coche', 1),
(55, 14, 'Autobús', 0),
(56, 14, 'Tren', 0),
(57, 15, 'Buenas noches', 0),
(58, 15, 'Hola', 0),
(59, 15, 'Buenos días', 1),
(60, 15, 'Buenas tardes', 0),
(61, 16, 'Por favor', 0),
(62, 16, 'De nada', 0),
(63, 16, 'Gracias', 1),
(64, 16, 'Lo siento', 0),
(65, 17, 'Pronto', 0),
(66, 17, 'Después', 0),
(67, 17, 'Hasta luego', 1),
(68, 17, 'Ahora mismo', 0),
(69, 18, 'Entiendo', 0),
(70, 18, 'No sé', 1),
(71, 18, 'Creo', 0),
(72, 18, 'Olvidé', 0),
(73, 19, '¿Dónde está la cocina?', 0),
(74, 19, '¿Dónde está el baño?', 1),
(75, 19, '¿Dónde está la habitación?', 0),
(76, 19, '¿Dónde está la salida?', 0),
(77, 20, 'Banane', 0),
(78, 20, 'Apfel', 1),
(79, 20, 'Pfirsich', 0),
(80, 20, 'Kirsche', 0),
(81, 21, 'Hallo', 0),
(82, 21, 'Gute Nacht', 0),
(83, 21, 'Guten Abend', 0),
(84, 21, 'Guten Morgen', 1),
(85, 22, 'Entschuldigung', 0),
(86, 22, 'Gern geschehen', 0),
(87, 22, 'Danke', 1),
(88, 22, 'Bitte', 0),
(89, 23, 'Wo ist die Küche?', 0),
(90, 23, 'Wo ist das Schlafzimmer?', 0),
(91, 23, 'Wo ist das Badezimmer?', 1),
(92, 23, 'Wo ist der Ausgang?', 0),
(93, 24, 'Woher kommen Sie?', 0),
(94, 24, 'Wie geht es Ihnen?', 1),
(95, 24, 'Was machen Sie?', 0),
(96, 24, 'Wie alt sind Sie?', 0),
(97, 25, 'Madrid', 0),
(98, 25, 'Berlin', 0),
(99, 25, 'Paris', 1),
(100, 25, 'Londres', 0),
(101, 26, 'Suède', 0),
(102, 26, 'Russie', 1),
(103, 26, 'France', 0),
(104, 26, 'Allemagne', 0),
(105, 27, 'Istanbul', 0),
(106, 27, 'Athènes', 0),
(107, 27, 'Rome', 1),
(108, 27, 'Vienne', 0),
(109, 28, 'Séoul', 0),
(110, 28, 'Pékin', 0),
(111, 28, 'Shanghai', 0),
(112, 28, 'Tokyo', 1),
(113, 29, 'Gange', 0),
(114, 29, 'Mékong', 0),
(115, 29, 'Huang He', 1),
(116, 29, 'Yangtsé', 0),
(117, 30, 'Népal', 0),
(118, 30, 'Mongolie', 0),
(119, 30, 'Inde', 0),
(120, 30, 'Japon', 1),
(121, 31, 'Le Caire', 0),
(122, 31, 'Lagos', 1),
(123, 31, 'Kinshasa', 0),
(124, 31, 'Johannesburg', 0),
(125, 32, 'Kalahari', 0),
(126, 32, 'Sahara', 1),
(127, 32, 'Namib', 0),
(128, 32, 'Gobi', 0),
(129, 33, 'Le Cap', 0),
(130, 33, 'Bloemfontein', 0),
(131, 33, 'Pretoria', 1),
(132, 33, 'Durban', 0),
(133, 34, 'Canada', 1),
(134, 34, 'États-Unis', 0),
(135, 34, 'Mexique', 0),
(136, 34, 'Groenland', 0),
(137, 35, 'New York', 0),
(138, 35, 'Los Angeles', 0),
(139, 35, 'Chicago', 0),
(140, 35, 'Washington D.C.', 1),
(141, 36, 'Mexique', 1),
(142, 36, 'Bogota', 0),
(143, 36, 'Havana', 0),
(144, 36, 'San José', 0),
(145, 37, 'Amazonie', 1),
(146, 37, 'Congo', 0),
(147, 37, 'Forêt de Daintree', 0),
(148, 37, 'Sundarbans', 0),
(149, 38, 'São Paulo', 0),
(150, 38, 'Rio de Janeiro', 0),
(151, 38, 'Brasilia', 1),
(152, 38, 'Salvador', 0),
(153, 39, 'Alpes', 0),
(154, 39, 'Himalaya', 0),
(155, 39, 'Les Andes', 1),
(156, 39, 'Rocky Mountains', 0),
(157, 40, 'Sydney', 0),
(158, 40, 'Melbourne', 0),
(159, 40, 'Canberra', 1),
(160, 40, 'Brisbane', 0),
(161, 41, 'Maui', 0),
(162, 41, 'Aotearoa', 1),
(163, 41, 'Kiwi', 0),
(164, 41, 'Polynésie', 0),
(165, 42, 'Fidji', 0),
(166, 42, 'Samoa', 0),
(167, 42, 'Nouvelle-Zélande', 1),
(168, 42, 'Philippines', 0);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `commentaireID` int(11) NOT NULL,
  `publicationID` int(11) DEFAULT NULL,
  `utilisateurID` int(11) DEFAULT NULL,
  `texte` text DEFAULT NULL,
  `dateCreation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `continents`
--

CREATE TABLE `continents` (
  `continentID` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `continents`
--

INSERT INTO `continents` (`continentID`, `nom`) VALUES
(1, 'Afrique'),
(2, 'Asie'),
(3, 'Europe'),
(4, 'Océanie'),
(5, 'Amérique du Sud'),
(6, 'Amérique du Nord');

-- --------------------------------------------------------

--
-- Structure de la table `messagesprives`
--

CREATE TABLE `messagesprives` (
  `messageID` int(11) NOT NULL,
  `expediteurID` int(11) DEFAULT NULL,
  `destinataireID` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `dateEnvoi` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `messagesprives`
--

INSERT INTO `messagesprives` (`messageID`, `expediteurID`, `destinataireID`, `message`, `dateEnvoi`) VALUES
(1, 5, 1, 'Marie', '2024-01-28 18:43:38'),
(2, 7, 1, 'marie', '2024-01-28 19:01:03'),
(3, 7, 1, 'marie', '2024-01-28 19:01:10'),
(4, 8, 7, 'marie', '2024-01-28 19:03:02'),
(5, 8, 7, 'lolajbjgqhlsjfjhg hggsdfyhjk erctvybuni,o;p:;,knbhrxe erftgyhuji xexcrtvybuni,o erctvybuni;op: qsdfgyhujilpkjhfdsdxfvbn,k sedrgyhjkl;,gv ghghlsc hhzbjcbznq s', '2024-01-28 20:01:53'),
(6, 8, 7, 'marie', '2024-01-28 20:12:12'),
(7, 8, 7, 'naima', '2024-01-28 20:12:17'),
(8, 8, 7, 'naima', '2024-01-28 20:12:18'),
(9, 8, 7, 'naima', '2024-01-28 20:12:19'),
(10, 8, 7, 'lihq dvqljd hzt qojhdhz dv hd ljquhfd hqgdyxhksd ', '2024-01-28 20:12:32'),
(11, 8, 7, 'lihq dvqljd hzt qojhdhz dv hd ljquhfd hqgdyxhksd ', '2024-01-28 20:12:33'),
(12, 7, 1, 'marie est une princesse', '2024-01-28 20:26:58'),
(13, 8, 7, 'blabla', '2024-01-29 12:04:39'),
(14, 16, 12, 'Bonjour,', '2024-01-30 04:35:07');

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `profilID` int(11) NOT NULL,
  `utilisateurID` int(11) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `photoProfil` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

  CREATE TABLE `publications` (
    `publicationID` int(11) NOT NULL,
    `utilisateurID` int(11) DEFAULT NULL,
    `titre` varchar(255) DEFAULT NULL,
    `description` text DEFAULT NULL,
    `image` varchar(1000) DEFAULT NULL,
    `datePublication` datetime DEFAULT current_timestamp()
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `publications`
--

INSERT INTO `publications` (`publicationID`, `utilisateurID`, `titre`, `description`, `image`, `datePublication`) VALUES
(2, NULL, 'voyage a cuba', 'qqqq', '', '2024-01-27 02:59:51'),
(3, NULL, 'ssss', 'ssss', '', '2024-01-27 03:01:05'),
(4, NULL, 'sss', 'sss', '', '2024-01-27 17:07:22'),
(5, NULL, 'kais', 'waw dublin', '', '2024-01-27 17:07:38'),
(6, NULL, 'kais', 'ddd', '', '2024-01-27 17:18:59'),
(7, NULL, 'pour', 'zzzzzzz', '', '2024-01-27 17:25:38'),
(8, NULL, 'lille', 'zezaeae', '', '2024-01-27 17:28:25'),
(9, NULL, 'mosq', 'ssss', 'uploads/65b534e58a550-Capture-d-cran-2024-01-15-202337.png', '2024-01-27 17:52:53'),
(10, NULL, 'cuba ', 'magnifique ', 'uploads/65b54d2886453-Capture-d-cran-2024-01-15-205734.png', '2024-01-27 19:36:24');

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `questionID` int(11) NOT NULL,
  `rubriqueID` int(11) DEFAULT NULL,
  `texte` text DEFAULT NULL,
  `utilisateurID` int(11) DEFAULT NULL,
  `dateCreation` datetime DEFAULT current_timestamp(),
  `titre` varchar(255) NOT NULL,
  `continentID` int(11) DEFAULT NULL,
  `chemin_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`questionID`, `rubriqueID`, `texte`, `utilisateurID`, `dateCreation`, `titre`, `continentID`, `chemin_photo`) VALUES
(53, NULL, 'Quelle a été votre destination de voyage préférée et pourquoi ?', NULL, '2024-01-30 04:11:32', 'Destination de voyage', NULL, NULL),
(54, NULL, 'Quelles sont les expériences culinaires les plus mémorables que vous avez eues en voyage ?', NULL, '2024-01-30 04:11:55', 'Expériences culinaires', NULL, NULL),
(55, NULL, 'Quels sont les pays les plus accueillants que vous avez visités et pourquoi les recommanderiez-vous ?', NULL, '2024-01-30 04:12:28', 'Pays les plus accueillants', NULL, NULL),
(56, NULL, 'Quelles sont vos astuces pour voyager de manière responsable et respectueuse de l\'environnement ?', NULL, '2024-01-30 04:12:52', 'Environnement', NULL, NULL),
(57, NULL, 'Quelles sont les destinations à ne pas manquer pour les amoureux de la nature ?', NULL, '2024-01-30 04:13:21', 'Nature', NULL, NULL),
(58, NULL, 'Quels sont les défis auxquels vous avez été confronté lors de vos voyages et comment les avez-vous surmontés ?', NULL, '2024-01-30 04:13:48', 'Défis ', NULL, NULL),
(59, NULL, 'Comment est la nourriture au congo?', NULL, '2024-01-30 04:32:36', 'Comment est la nourriture au congo?', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `questionsquiz`
--

CREATE TABLE `questionsquiz` (
  `questionID` int(11) NOT NULL,
  `quizID` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `reponseCorrecte` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `questionsquiz`
--

INSERT INTO `questionsquiz` (`questionID`, `quizID`, `question`, `reponseCorrecte`) VALUES
(1, 1, 'Comment dit-on \"apple\" en français ?', 'Pomme'),
(2, 1, 'Quel est le mot anglais pour livre ?', 'Book'),
(3, 1, 'Que signifie \"Good morning\" ?', 'Bonjour'),
(4, 1, 'Comment dit-on \"Thank you\" en Francais ?', 'Merci'),
(5, 1, 'Que signifie \"See you later\" ?', 'À plus tard'),
(6, 1, 'Quelle est la traduction de \"I don’t know\" ?', 'Je ne sais pas'),
(7, 1, 'Comment dit-on \"Where is the bathroom?\" en français ?', 'Où est la salle de bain ?'),
(8, 1, 'Que signifie \"How are you?\" ?', 'Comment vas-tu ?'),
(9, 1, 'Que signifie \"I am fine.\" ?', 'Je vais bien'),
(10, 2, 'Comment dit-on \"livre\" en espagnol ?', 'Libro'),
(11, 2, 'Quel est le mot espagnol pour \"table\" ?', 'Mesa'),
(12, 2, 'Comment traduit on eau en espagnol ?', 'Agua'),
(13, 2, 'Quel est le mot espagnol pour \"ciel\" ?', 'Cielo'),
(14, 2, 'Comment dit-on \"voiture\" en espagnol ?', 'Coche'),
(15, 2, 'Comment dit-on \"Bonjour\" en espagnol ?', 'Buenos días'),
(16, 2, 'Quelle est la traduction de \"Merci\" en espagnol ?', 'Gracias'),
(17, 2, 'Comment traduit-on \"À plus tard\" en espagnol ?', 'Hasta luego'),
(18, 2, 'Quelle est la traduction espagnole de \"Je ne sais pas\" ?', 'No sé'),
(19, 2, 'Comment demande-t-on \"Où est la salle de bain ?\" en espagnol ?', '¿Dónde está el baño?'),
(20, 3, 'Comment dit-on \"pomme\" en allemand ?', 'Apfel'),
(21, 3, 'Que signifie \"Guten Morgen\" en allemand ?', 'Bonjour'),
(22, 3, 'Comment traduit-on \"Thank you\" en allemand ?', 'Danke'),
(23, 3, 'Comment demande-t-on \"Où est la salle de bain ?\" en allemand ?', 'Wo ist das Badezimmer?'),
(24, 3, 'Comment dit-on \"Comment ça va ?\" en allemand ?', 'Wie geht es Ihnen?'),
(25, 4, 'Quelle ville est la capitale de la France ?', 'Paris'),
(26, 4, 'Quel est le plus grand pays d\'Europe ?', 'Russie'),
(27, 4, 'Où se trouve le Colisée ?', 'Rome'),
(28, 5, 'Quelle est la capitale du Japon ?', 'Tokyo'),
(29, 5, 'Quel fleuve est connu comme le fleuve Jaune ?', 'Huang He'),
(30, 5, 'Dans quel pays se trouve le mont Fuji ?', 'Japon'),
(31, 6, 'Quelle est la plus grande ville d\'Afrique ?', 'Lagos'),
(32, 6, 'Quel désert couvre une grande partie de l\'Afrique du Nord ?', 'Sahara'),
(33, 6, 'Quelle est la capitale de l\'Afrique du Sud ?', 'Pretoria'),
(34, 7, 'Quel est le plus grand pays en Amérique du Nord ?', 'Canada'),
(35, 7, 'Quelle ville est la capitale des États-Unis ?', 'Washington D.C.'),
(36, 7, 'Dans quel pays se trouve la ville de Mexico ?', 'Mexique'),
(37, 8, 'Quelle est la plus grande forêt tropicale en Amérique du Sud ?', 'Amazonie'),
(38, 8, 'Quelle ville est la capitale du Brésil ?', 'Brasilia'),
(39, 8, 'Quelle chaîne de montagnes traverse l\'Amérique du Sud ?', 'Les Andes'),
(40, 9, 'Quelle est la capitale de l\'Australie ?', 'Canberra'),
(41, 9, 'Quel est le nom indigène de la Nouvelle-Zélande ?', 'Aotearoa'),
(42, 9, 'Quel pays est constitué de deux grandes îles et de nombreuses petites îles ?', 'Nouvelle-Zélande');

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `quizID` int(11) NOT NULL,
  `sujet` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `quiz`
--

INSERT INTO `quiz` (`quizID`, `sujet`, `description`) VALUES
(1, 'Anglais', 'Quiz sur le vocabulaire anglais.'),
(2, 'Espagnol', 'Quiz sur le vocabulaire espagnol.'),
(3, 'Allemand', 'Quiz sur le vocabulaire allemand.'),
(4, 'Europe', 'Testez vos connaissances sur l\'Europe'),
(5, 'Asie', 'Testez vos connaissances sur l\'Asie'),
(6, 'Afrique', 'Testez vos connaissances sur l\'Afrique'),
(7, 'Amérique du Nord', 'Testez vos connaissances sur l\'Amérique du Nord'),
(8, 'Amérique du Sud', 'Testez vos connaissances sur l\'Amérique du Sud'),
(9, 'Oceanie', 'Testez vos connaissances sur l\'Océanie');

-- --------------------------------------------------------

--
-- Structure de la table `reponses`
--

CREATE TABLE `reponses` (
  `reponseID` int(11) NOT NULL,
  `questionID` int(11) DEFAULT NULL,
  `texte` text DEFAULT NULL,
  `utilisateurID` int(11) DEFAULT NULL,
  `dateCreation` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reponses`
--

INSERT INTO `reponses` (`reponseID`, `questionID`, `texte`, `utilisateurID`, `dateCreation`) VALUES
(45, 58, 'Choisissez des compagnies de transport écologiques : Optez pour des compagnies aériennes, ferroviaires ou de bus qui ont mis en place des initiatives pour réduire leur empreinte carbone, comme l\'utilisation de biocarburants ou l\'investissement dans des projets de compensation carbone.', NULL, '2024-01-30 04:14:29'),
(46, 58, 'Réduisez votre consommation d\'eau : Prenez des douches courtes, réutilisez vos serviettes et évitez le gaspillage d\'eau en général.', NULL, '2024-01-30 04:14:42'),
(47, 57, 'Le Maroc', NULL, '2024-01-30 04:32:48');

-- --------------------------------------------------------

--
-- Structure de la table `reponsesutilisateurs`
--

CREATE TABLE `reponsesutilisateurs` (
  `reponseID` int(11) NOT NULL,
  `questionID` int(11) DEFAULT NULL,
  `utilisateurID` int(11) DEFAULT NULL,
  `reponseDonnee` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rubriques`
--

CREATE TABLE `rubriques` (
  `rubriqueID` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `utilisateurID` int(11) DEFAULT NULL,
  `dateCreation` datetime DEFAULT current_timestamp(),
  `continentID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `scores`
--

CREATE TABLE `scores` (
  `scoreID` int(11) NOT NULL,
  `utilisateurID` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `dateScore` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `translations`
--

CREATE TABLE `translations` (
  `id` int(11) NOT NULL,
  `original_text` text NOT NULL,
  `translated_text` text NOT NULL,
  `target_language` varchar(10) NOT NULL,
  `date_translation` timestamp NOT NULL DEFAULT current_timestamp(),
  `utilisateurID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `utilisateurID` int(11) NOT NULL,
  `nomUtilisateur` varchar(50) NOT NULL,
  `motDePasse` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dateInscription` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`utilisateurID`, `nomUtilisateur`, `motDePasse`, `email`, `dateInscription`) VALUES
(1, 'kaisdu93', '$2y$10$mHQGZbbFq/HGKYh9FmjtqOaTV4YBpTkm1nG6ddfud4C', 'kais@gmail.com', '2024-01-23 12:00:09'),
(2, 'eeee', '$2y$10$aZtyYrZUI5F0AMBRoT/poez3wg9q2LEau9uQYNQwPKB', 'zhzhzhz@gmail.com', '2024-01-23 12:30:41'),
(3, 'nom_d_utilisateur', 'mot_de_passe', 'email@example.com', '2024-01-26 00:43:23'),
(4, 'nom_d_utilisateur', 'mot_de_passe', 'email@example.com', '2024-01-26 00:43:25'),
(5, 'gqsd', '$2y$10$rlrvL1txx9Xg1qJYHNts/.AktdApzT4H0n2TALJEOmNuqERv2Um0a', 'margie@gmail.com', '2024-01-28 18:43:27'),
(6, 'gqsd', '$2y$10$rkV9ygnJSSrz.bA1LI9i2OChjaJJELsBjtO5ori4Rk/rNkJk6sUFW', 'maie@gmail.com', '2024-01-28 18:53:23'),
(7, 'mina', '$2y$10$lZft6PfnivTsgV3VrPLT6.9BljB94fJriO0Vs61m3IAM4v4Mwa6Vq', 'camesaoul@gmail.com', '2024-01-28 18:57:55'),
(8, 'orore', '$2y$10$mPhgul0KU3wfYipR6TpWL.z9uFr2HFTuhA5tqJmKxll6e0ieTwzae', 'orore@gmail.com', '2024-01-28 19:02:45'),
(9, 'dfhjk', '$2y$10$UXPANrMNwOgH8zfNFzZWVuxq0lWS2a1uVtnf859hgkCGVUfj1dxbu', 'rshf@gmail.com', '2024-01-30 01:16:22'),
(10, 'michel', '$2y$10$oRK0A/QDkomdJqTEkPHvYuETwGrelW0HakgKC/8ZyrUqWjuXb3GxS', 'michel@gmail.com', '2024-01-30 04:03:36'),
(11, 'mich', '$2y$10$sUZadcl.auE7SDusW8gTUeBAOz4Fk8i1JZq0WU8JpquEYDBcmhA/.', 'mich@gmail.com', '2024-01-30 04:07:00'),
(12, 'Mateo', '$2y$10$YXuZ1Ce/nYmmRBMd2qcUuOMDitpcrQXFPK7MSmVFcLoQxqKNquLIu', 'Mateo@gmail.com', '2024-01-30 04:16:40'),
(13, 'Lina', '$2y$10$aG5YoFR5C1/2hk8HsFh5feYN2rbazr0wIOLrrUEx6F2kStDfpJOZS', 'Lola@gmail.com', '2024-01-30 04:18:10'),
(14, 'Nattou', '$2y$10$dMyeqSK7Ghzore4yPqPpSuvvDKCXZaNOyoKzj6tUDJGCGAUAgsyHW', 'Nat@gmail.com', '2024-01-30 04:24:09'),
(15, 'Jola', '$2y$10$P5amd7kG9q8Gwz5JswHnkuydkP/afkyiXSMeVq/GhV8pSbuG6lc1W', 'Jola@gmail.com', '2024-01-30 04:29:21'),
(16, 'Miguel', '$2y$10$xzTYbDgeE7vq9yMEE5UEv.WhDBKp4s/0aHGSRLXHPrTmhxsxCrE5m', 'Miguel@gmail.com', '2024-01-30 04:31:30');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `choixquestions`
--
ALTER TABLE `choixquestions`
  ADD PRIMARY KEY (`choixID`),
  ADD KEY `questionID` (`questionID`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`commentaireID`),
  ADD KEY `publicationID` (`publicationID`),
  ADD KEY `utilisateurID` (`utilisateurID`);

--
-- Index pour la table `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`continentID`);

--
-- Index pour la table `messagesprives`
--
ALTER TABLE `messagesprives`
  ADD PRIMARY KEY (`messageID`),
  ADD KEY `expediteurID` (`expediteurID`),
  ADD KEY `destinataireID` (`destinataireID`);

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`profilID`),
  ADD KEY `utilisateurID` (`utilisateurID`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`publicationID`),
  ADD KEY `utilisateurID` (`utilisateurID`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionID`),
  ADD KEY `rubriqueID` (`rubriqueID`);

--
-- Index pour la table `questionsquiz`
--
ALTER TABLE `questionsquiz`
  ADD PRIMARY KEY (`questionID`),
  ADD KEY `quizID` (`quizID`);

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizID`);

--
-- Index pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD PRIMARY KEY (`reponseID`),
  ADD KEY `questionID` (`questionID`);

--
-- Index pour la table `reponsesutilisateurs`
--
ALTER TABLE `reponsesutilisateurs`
  ADD PRIMARY KEY (`reponseID`),
  ADD KEY `questionID` (`questionID`),
  ADD KEY `utilisateurID` (`utilisateurID`);

--
-- Index pour la table `rubriques`
--
ALTER TABLE `rubriques`
  ADD PRIMARY KEY (`rubriqueID`),
  ADD KEY `continentID` (`continentID`);

--
-- Index pour la table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`scoreID`),
  ADD KEY `utilisateurID` (`utilisateurID`);

--
-- Index pour la table `translations`
--
ALTER TABLE `translations`
  ADD KEY `utilisateurID` (`utilisateurID`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`utilisateurID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `choixquestions`
--
ALTER TABLE `choixquestions`
  MODIFY `choixID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `commentaireID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `continents`
--
ALTER TABLE `continents`
  MODIFY `continentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `messagesprives`
--
ALTER TABLE `messagesprives`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `profilID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `publicationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT pour la table `questionsquiz`
--
ALTER TABLE `questionsquiz`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `reponses`
--
ALTER TABLE `reponses`
  MODIFY `reponseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `reponsesutilisateurs`
--
ALTER TABLE `reponsesutilisateurs`
  MODIFY `reponseID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rubriques`
--
ALTER TABLE `rubriques`
  MODIFY `rubriqueID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `scores`
--
ALTER TABLE `scores`
  MODIFY `scoreID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `utilisateurID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `choixquestions`
--
ALTER TABLE `choixquestions`
  ADD CONSTRAINT `choixquestions_ibfk_1` FOREIGN KEY (`questionID`) REFERENCES `questionsquiz` (`questionID`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`publicationID`) REFERENCES `publications` (`publicationID`),
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`utilisateurID`) REFERENCES `utilisateurs` (`utilisateurID`);

--
-- Contraintes pour la table `messagesprives`
--
ALTER TABLE `messagesprives`
  ADD CONSTRAINT `messagesprives_ibfk_1` FOREIGN KEY (`expediteurID`) REFERENCES `utilisateurs` (`utilisateurID`),
  ADD CONSTRAINT `messagesprives_ibfk_2` FOREIGN KEY (`destinataireID`) REFERENCES `utilisateurs` (`utilisateurID`);

--
-- Contraintes pour la table `profils`
--
ALTER TABLE `profils`
  ADD CONSTRAINT `profils_ibfk_1` FOREIGN KEY (`utilisateurID`) REFERENCES `utilisateurs` (`utilisateurID`);

--
-- Contraintes pour la table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`utilisateurID`) REFERENCES `utilisateurs` (`utilisateurID`);

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`rubriqueID`) REFERENCES `rubriques` (`rubriqueID`);

--
-- Contraintes pour la table `questionsquiz`
--
ALTER TABLE `questionsquiz`
  ADD CONSTRAINT `questionsquiz_ibfk_1` FOREIGN KEY (`quizID`) REFERENCES `quiz` (`quizID`);

--
-- Contraintes pour la table `reponses`
--
ALTER TABLE `reponses`
  ADD CONSTRAINT `reponses_ibfk_1` FOREIGN KEY (`questionID`) REFERENCES `questions` (`questionID`);

--
-- Contraintes pour la table `reponsesutilisateurs`
--
ALTER TABLE `reponsesutilisateurs`
  ADD CONSTRAINT `reponsesutilisateurs_ibfk_1` FOREIGN KEY (`questionID`) REFERENCES `questionsquiz` (`questionID`),
  ADD CONSTRAINT `reponsesutilisateurs_ibfk_2` FOREIGN KEY (`utilisateurID`) REFERENCES `utilisateurs` (`utilisateurID`);

--
-- Contraintes pour la table `rubriques`
--
ALTER TABLE `rubriques`
  ADD CONSTRAINT `rubriques_ibfk_1` FOREIGN KEY (`continentID`) REFERENCES `continents` (`continentID`);

--
-- Contraintes pour la table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `scores_ibfk_1` FOREIGN KEY (`utilisateurID`) REFERENCES `utilisateurs` (`utilisateurID`);

--
-- Contraintes pour la table `translations`
--
ALTER TABLE `translations`
  ADD CONSTRAINT `translations_ibfk_1` FOREIGN KEY (`utilisateurID`) REFERENCES `utilisateurs` (`utilisateurID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
