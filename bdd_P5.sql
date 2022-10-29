-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : sam. 22 oct. 2022 à 22:35
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_P5`
--

-- --------------------------------------------------------

--
-- Structure de la table `affichage_test`
--

CREATE TABLE `affichage_test` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `affichage_test`
--

INSERT INTO `affichage_test` (`id`, `number`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `commentAuthor` varchar(45) NOT NULL,
  `commentEmail` varchar(100) DEFAULT NULL,
  `commentContent` longtext NOT NULL,
  `isApprouved` tinyint(4) NOT NULL DEFAULT '0',
  `idPost` int(11) NOT NULL,
  `dateComment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`idcomment`, `commentAuthor`, `commentEmail`, `commentContent`, `isApprouved`, `idPost`, `dateComment`) VALUES
(6, 'Clément Grenier--Desrousseaux', 'clement@josette-tic.com', 'test avec mail', 1, 1, '2022-09-16 08:04:16'),
(7, 'Clément Grenier--Desrousseaux', 'clement@josette-tic.com', 'Wouaaaah !', 1, 1, '2022-09-16 08:04:44'),
(8, 'Clement', 'grenierclement@yahoo.fr', 'Article test en attent de validation', 1, 1, '2022-09-23 13:18:58'),
(9, 'Clément Grenier--Desrousseaux', 'grenierclement@yahoo.fr', 'azmbfaeilgvezgr', 1, 1, '2022-09-23 13:40:54'),
(10, 'Clément Grenier--Desrousseaux', 'grenierclement@yahoo.fr', 'azmbfaeilgvezgr', 1, 1, '2022-09-23 13:41:00'),
(11, 'clement', 'clem@mre.vcr', 'mkqzhfomeqnverg', 1, 1, '2022-09-23 13:43:23'),
(12, 'zelkgg', 'egzeg', 'zerg', 1, 1, '2022-09-23 13:44:24'),
(13, 'zeste', 'zeste', 'zzetrgztg', 1, 1, '2022-09-23 13:44:29'),
(14, 'setrgzetghrtzh', 'hrthzrt', 'ztherhperh', 1, 1, '2022-09-23 13:44:34'),
(15, 'rzegf', 'erg', 'ergerg', 1, 1, '2022-09-23 13:45:42'),
(20, 'zrthzrthrth', 'zrthzrthrzth', 'zrthztrhrzthrt', 1, 1, '2022-09-23 13:52:23'),
(21, 'setrgzetghrtzh', 'hrthzrt', 'ztherhperh', 1, 1, '2022-09-23 13:44:34'),
(23, 'zrthzrthrth', 'zrthzrthrzth', 'zrthztrhrzthrt', 1, 1, '2022-09-23 13:52:23'),
(26, 'Clément Grenier--Desrousseaux', 'grenierclement@yahoo.fr', 'Commentaire 3', 1, 1, '2022-09-23 16:08:29'),
(27, 'Clement', 'Article Test ', 'Suite au refactor de la page OneArticle', 0, 1, '2022-09-30 12:49:59'),
(28, 'test', 'test', 'test', 0, 1, '2022-09-30 12:53:32'),
(29, 'clement', 'clement@clement.clement', 'clement', 0, 4, '2022-10-07 16:38:24'),
(31, 'zrgz', 'zeg@zg', 'zeg', 0, 4, '2022-10-07 16:40:22'),
(32, 'Clement', 'clement@josette-tic.com', 'Message pour design ', 1, 4, '2022-10-13 15:59:18');

-- --------------------------------------------------------

--
-- Structure de la table `contactForm`
--

CREATE TABLE `contactForm` (
  `idContactForm` int(11) NOT NULL,
  `emailUserContactForm` varchar(50) NOT NULL,
  `nameUserContactForm` varchar(40) NOT NULL,
  `contentUserContactForm` text NOT NULL,
  `dateUserContactForm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contactForm`
--

INSERT INTO `contactForm` (`idContactForm`, `emailUserContactForm`, `nameUserContactForm`, `contentUserContactForm`, `dateUserContactForm`) VALUES
(3, 'clement@josette-tic.com', 'Clément Grenier', 'Message formulaire de contact', '2022-10-07 12:22:59'),
(4, 'clement@josette-tic.com', 'Clément Grenier--Desrousseaux', 'Message après ajout de la colonne Date dans la base de données', '2022-10-07 12:24:41');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `idPost` int(11) NOT NULL,
  `titlePost` varchar(200) NOT NULL,
  `chapoPost` longtext NOT NULL,
  `contentPost` longtext NOT NULL,
  `datePost` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `authorPost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`idPost`, `titlePost`, `chapoPost`, `contentPost`, `datePost`, `authorPost`) VALUES
(1, 'Premier article', 'test', 'test', '2022-09-10 15:15:40', 'Clément'),
(2, 'Le premier jour en tant que développeur junior\r\n', 'La première journée peut être un moment que l\'on redoute, et où l\'on ne sait pas exactement à quoi s\'attendre.', 'Aujourd\'hui, nous allons discuter d\'un sujet qui touche un peu tout le monde, quel que soit le domaine, mais plus particulièrement les devs à cause du syndrome de l\'imposteur très présent en informatique...\r\n\r\nLa \"pression\" du premier jour...\r\n\r\nUn sujet que j\'ai expérimenté plusieurs fois dans ma vie, notamment en intérim, même si les missions ont été généralement longue, car peu restaient à cause de mauvaises conditions de travail (parfaitement compréhensible).\r\n\r\nDepuis maintenant un mois, j\'ai à nouveau vécu cette expérience cas en tant que développeur, et c\'est à travers cette expérience que je vais vous partager mon expérience personnelle.\r\nLa thématique qui revient le plus souvent autour de ce sujet, c\'est \"l\'angoisse\", et comprenant parfaitement ce ressenti, j\'espère que cet article vous rendra plus serein face à la première journée d\'un développeur.\r\n\r\nQu\'est-ce que j\'ai fait le premier jour ?\r\nMon expérience s\'est passée en deux étapes.\r\n\r\nPréparation\r\nEn premier lieu la configuration des outils que nous utilisons au quotidien, sur les différentes missions pour s\'assurer du fonctionnement du projet en local.\r\nEn tant que dev, et encore plus en full-remote, nous utilisons beaucoup d\'outils permettant une organisation/communication avec le minimum de friction possible.\r\n\r\nDonc on commence par rejoindre :\r\nl\'espace de travail sur Trello pour l\'organisation des tâches\r\nle serveur Discord pour les appels quotidiens et les échanges par message\r\nGithub ou Bitbucket pour gérer notre code en équipe et récupérer ou mettre à jour le projet.\r\nPour avoir le moins de soucis possible, assurez-vous d\'avoir un minimum de connaissances sur les outils, le terminal, et le versioning Git\r\nLancement\r\nViens le moment ensuite d\'avoir un projet qui tourne sur notre propre machine...\r\n\r\nLes instructions étaient dans le README pour mettre en service l\'API ainsi que la partie front-end. Jusqu\'ici tout vas bien, il ne reste plus qu\'a vérifier sur notre localhost que tout est fonctionnelle.\r\nÉvidemment comme tout setup qui se respecte, cela fonctionne a moitié...\r\n\r\nL\'application tourne, se lance, mais j\'ai le droit a un fond vert sans récupérer aucune autre information. Je cherche de mon coté, commence a tourner en rond, puis une sensation assez désagréable s\'est faite sentir.\r\nLe retour de celui que je pensais avoir perdu en chemin, le fameux syndrome de l\'imposteur !\r\n\r\nMême si c\'était assez léger et qu\'avec l’expérience de vie on relativise plus rapidement, le fait de ne pas se sentir à la hauteur dès l\'installation du projet, on se dit tout de suite qu\'on risque de se faire \"démasquer\".\r\nSouvenez-vous, avant de continuer, que si vous obtenez une mission ou un poste c\'est qu\'il y a une raison !\r\nC\'est a ce moment précis, que j\'ai cru faire mon (premier) dernier jour.\r\n\r\nLa fin de journée commençait à arriver et je voulait à tout prix régler le problème en autonomie, mais finalement, ce qui m\'a débloqué c\'est la COMMUNICATION.\r\nNon, poser des questions ne fait pas de vous un imposteur, une personne incompétentes bien au contraire. Cela vous apprendra a comprendre en profondeur, tout en éclaircissant les zones d\'ombres.\r\n\r\nJ\'ai communiqué sur mon problème, et j\'ai découvert que le soucis ne venait pas de moi, mais d\'un problème de dépendance que l\'application devait récupérer et qui était momentanément cassée.\r\n\r\nEnsuite, tout a fonctionné !\r\nOn peut déjà en conclure que communiquer sur un problème le plus tôt possible permet de gagner un temps considérable, surtout lors de sa première journée.\r\n', '2022-09-24 13:26:19', 'Clément'),
(3, 'Qu\'est-ce que l\'OSINT, ou \"Open-Source Intelligence\" ?', 'Vous êtes passionné.e par l\'informatique et vous n\'avez jamais entendu, ou simplement jamais compris, en quoi consiste l\'OSINT ? Alors cet article est fait pour vous !\r\n', 'OSINT est un acronyme qui signifie \"Open-Source Intelligence\", mais même en connaissant les mots derrière cet acronyme, cela ne donne pas forcément toutes les clés pour comprendre ce qui se cache derrière ce concept !\r\n\r\nIci \"Intelligence\" ne fait pas référence à nos capacités intellectuelles, mais plutôt à la recherche et à l\'investigation de renseignements. C\'est l\'utilisation américaine du mot, qui se retrouve d\'ailleurs dans l\'acronyme CIA pour \"Central Intelligence Agency\".\r\n\r\nEt la partie \"Open-Source\" signifie que l\'investigation ne se fera pas grâce à des données, documents, informations confidentielles ou qui requièrent des autorisations spéciales, mais avec des données disponibles au grand public.\r\nSi on devait résumer en une phrase : L\'OSINT est une pratique de renseignement et d\'investigation basée sur des informations disponibles en accès libre.\r\n\r\nÀ quoi cela sert ?\r\nDe la recherche de renseignements, on peut en avoir besoin pour tous les domaines, allant de sujets très sensibles (criminalité, terrorisme, géopolitique,...) jusqu\'à des sujets de divertissement (jeu-vidéo, musique, cinéma,...).\r\n\r\nCertaines personnes ont fait de l\'OSINT un métier, tandis que certaines personnes apportent de l\'aide bénévolement, ou le font simplement pour s\'amuser !', '2022-09-24 13:26:19', 'Clément'),
(4, 'Comment trouver un emploi en tant que développeur', 'Que tu sois développeur junior ou senior, si tu recherches un emploi en tant que développeur, tu es au bon endroit.\r\n\r\nDans cet article tu trouveras tous les points clés pour trouver un travail dans le développement, et ce même si tu n’as pas de diplôme.', 'Trouver du travail en tant que développeur a l’air simple en regardant de loin, mais lorsque l’on s’approche, c’est tout autre chose…\r\n\r\nEn tout cas, sache que c’est trouver ton premier emploi qui est le plus difficile.\r\n\r\nUne fois une certaine expérience obtenue, les recruteurs te sauteront dessus.\r\n\r\nJe vais te donner toutes les astuces que je connais pour que tu puisses trouver un emploi de développeur.\r\n\r\nSi tu es en reconversion professionnelle pour devenir développeur, cet article est aussi pour toi.\r\n\r\nFaut-il avoir un master pour trouver un travail en tant que développeur ?\r\n\r\nSi il y a bien quelque chose qui m’énerve dans notre milieu, c’est bien celui des diplômes en France !\r\n\r\nIl est loin d\'être rare de voir deux développeurs avec un niveau d\'étude différent embauchés pour faire la même chose se retrouvant avec un salaire différent.\r\nEt ça pourrait ne pas être anormal s’il y avait une vraie différence de niveau !\r\n\r\nLa plupart du temps, il n’y en a pas.\r\n\r\nLes développeurs avec un BTS est quasiment toujours moins bien payé que le développeur avec un MASTER.\r\n\r\nDonc…\r\n\r\nSi jamais tu te poses la question de savoir si tu dois continuer tes études après le BAC, le BTS ou la licence ?\r\n\r\nLa réponse est OUI !\r\n\r\n', '2022-09-30 14:21:24', 'Clément');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userId`, `userEmail`, `userPassword`) VALUES
(2, 'clement@josette-tic.com', '$2y$12$H6EcLdC8e/SZ/QRxcm8o5.IhVzwfPxI/VfCbpEYZ7JOLTAOUykHti'),
(7, 'grenierclement@yahoo.fr', 'test1234'),
(8, 'clement.grenier.desrousseaux@gmail.com', '$2y$12$XPM1z49RxC1.2dalqZNYIecdaeLFYKnIRfjDd.VsYSIY0/6bIEIeS'),
(9, 'test@test.test', '$2y$12$lmWJmmnN.DbSeVW5v7l8wujrGKsSKuKZSrdkl26MooWNvYP2G0Z.e');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affichage_test`
--
ALTER TABLE `affichage_test`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Index pour la table `contactForm`
--
ALTER TABLE `contactForm`
  ADD PRIMARY KEY (`idContactForm`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idPost`) USING BTREE;

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `affichage_test`
--
ALTER TABLE `affichage_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `contactForm`
--
ALTER TABLE `contactForm`
  MODIFY `idContactForm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
