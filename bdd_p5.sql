-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 15 nov. 2022 à 15:52
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdd_p5`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `idcomment` int(11) NOT NULL AUTO_INCREMENT,
  `commentAuthor` varchar(45) NOT NULL,
  `commentEmail` varchar(100) DEFAULT NULL,
  `commentContent` longtext NOT NULL,
  `isApprouved` tinyint(4) NOT NULL DEFAULT '0',
  `idPost` int(11) NOT NULL,
  `dateComment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcomment`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`idcomment`, `commentAuthor`, `commentEmail`, `commentContent`, `isApprouved`, `idPost`, `dateComment`) VALUES
(1, 'ClÃ©ment', 'clement@grenier.com', 'Super article !', 1, 20, '2022-11-15 16:38:52'),
(2, 'Michel', 'michel@test.test', 'J&#039;ai adorÃ© cet article ! :)', 0, 20, '2022-11-15 16:39:20'),
(3, 'JosÃ©phine', 'josephine@test.test', 'TrÃ¨s intÃ©ressant, je vais m&#039;y mettre je pense !', 1, 19, '2022-11-15 16:42:44');

-- --------------------------------------------------------

--
-- Structure de la table `contactform`
--

DROP TABLE IF EXISTS `contactform`;
CREATE TABLE IF NOT EXISTS `contactform` (
  `idContactForm` int(11) NOT NULL AUTO_INCREMENT,
  `emailUserContactForm` varchar(50) NOT NULL,
  `nameUserContactForm` varchar(40) NOT NULL,
  `contentUserContactForm` text NOT NULL,
  `dateUserContactForm` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idContactForm`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contactform`
--

INSERT INTO `contactform` (`idContactForm`, `emailUserContactForm`, `nameUserContactForm`, `contentUserContactForm`, `dateUserContactForm`) VALUES
(6, 'grenierclement@yahoo.fr', 'ClÃ©ment Grenier', 'Message de contact', '2022-11-15 16:44:00');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `idPost` int(11) NOT NULL AUTO_INCREMENT,
  `titlePost` varchar(200) NOT NULL,
  `chapoPost` longtext NOT NULL,
  `contentPost` longtext NOT NULL,
  `datePost` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `authorPost` varchar(50) NOT NULL,
  PRIMARY KEY (`idPost`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`idPost`, `titlePost`, `chapoPost`, `contentPost`, `datePost`, `authorPost`) VALUES
(17, 'Comment trouver un emploi en tant que dÃ©veloppeur', 'Comment trouver du travail en tant que dÃ©veloppeur ? Junior, senior, en alternanceâ€¦ Mes astuces pour la recherche dâ€™emploi du dÃ©veloppeur.', 'Que tu sois dÃ©veloppeur junior ou senior, si tu recherches un emploi en tant que dÃ©veloppeur, tu es au bon endroit.\r\n\r\nDans cet article tu trouveras tous les points clÃ©s pour trouver un travail dans le dÃ©veloppement, et ce mÃªme si tu nâ€™as pas de diplÃ´me.\r\n\r\nComment trouver un emploi de dÃ©veloppeur (qui te plaise)\r\n\r\nTrouver du travail en tant que dÃ©veloppeur a lâ€™air simple en regardant de loin, mais lorsque lâ€™on sâ€™approche, câ€™est tout autre choseâ€¦\r\n\r\nEn tout cas, sache que câ€™est trouver ton premier emploi qui est le plus difficile.\r\n\r\nUne fois une certaine expÃ©rience obtenue, les recruteurs te sauteront dessus.\r\n\r\nJe vais te donner toutes les astuces que je connais pour que tu puisses trouver un emploi de dÃ©veloppeur.\r\n\r\nSi tu es en reconversion professionnelle pour devenir dÃ©veloppeur, cet article est aussi pour toi.\r\n\r\nTu nâ€™as pas de diplÃ´me ? Et alors ?\r\n\r\nLes plus grandes entreprises recherchent des cerveaux puissants.\r\n\r\nTout le monde sait que les diplÃ´mes sont dÃ©passÃ©s, surtout les grosses boÃ®tes amÃ©ricaines.\r\n\r\nTu es autodidacte ? Tu es sans doute aussi bon que nâ€™importe quel gars de la promo de ta ville, ne te bride pas.\r\n\r\nEn France, on jure sur les diplÃ´mes comme une garantieâ€¦', '2022-11-15 16:27:13', 'ClÃ©ment Grenier--Desrousseaux'),
(18, 'Le premier jour en tant que dÃ©veloppeur junior', 'La premiÃ¨re journÃ©e peut Ãªtre un moment que l&#039;on redoute, et oÃ¹ l&#039;on ne sait pas exactement Ã  quoi s&#039;attendre.', 'Aujourd&#039;hui, nous allons discuter d&#039;un sujet qui touche un peu tout le monde, quel que soit le domaine, mais plus particuliÃ¨rement les devs Ã  cause du syndrome de l&#039;imposteur trÃ¨s prÃ©sent en informatique...\r\n\r\nUn sujet que j&#039;ai expÃ©rimentÃ© plusieurs fois dans ma vie, notamment en intÃ©rim, mÃªme si les missions ont Ã©tÃ© gÃ©nÃ©ralement longue, car peu restaient Ã  cause de mauvaises conditions de travail (parfaitement comprÃ©hensible).\r\n\r\nDepuis maintenant un mois, j&#039;ai Ã  nouveau vÃ©cu cette expÃ©rience cas en tant que dÃ©veloppeur, et c&#039;est Ã  travers cette expÃ©rience que je vais vous partager mon expÃ©rience personnelle.\r\n\r\nLa thÃ©matique qui revient le plus souvent autour de ce sujet, c&#039;est &quot;l&#039;angoisse&quot;, et comprenant parfaitement ce ressenti, j&#039;espÃ¨re que cet article vous rendra plus serein face Ã  la premiÃ¨re journÃ©e d&#039;un dÃ©veloppeur.\r\n\r\n\r\nQu&#039;est-ce que j&#039;ai fait le premier jour ?\r\n\r\nMon expÃ©rience s&#039;est passÃ©e en deux Ã©tapes. \r\n\r\nEn premier lieu la configuration des outils que nous utilisons au quotidien, sur les diffÃ©rentes missions pour s&#039;assurer du fonctionnement du projet en local.\r\n\r\nEn tant que dev, et encore plus en full-remote, nous utilisons beaucoup d&#039;outils permettant une organisation/communication avec le minimum de friction possible.\r\n\r\nViens le moment ensuite d&#039;avoir un projet qui tourne sur notre propre machine...\r\n\r\nLes instructions Ã©taient dans le README pour mettre en service l&#039;API ainsi que la partie front-end. Jusqu&#039;ici tout vas bien, il ne reste plus qu&#039;a vÃ©rifier sur notre localhost que tout est fonctionnelle.\r\n\r\nL&#039;application tourne, se lance, mais j&#039;ai le droit a un fond vert sans rÃ©cupÃ©rer aucune autre information. Je cherche de mon cotÃ©, commence a tourner en rond, puis une sensation assez dÃ©sagrÃ©able s&#039;est faite sentir.\r\n\r\nLe retour de celui que je pensais avoir perdu en chemin, le fameux syndrome de l&#039;imposteur !\r\n\r\nMÃªme si c&#039;Ã©tait assez lÃ©ger et qu&#039;avec lâ€™expÃ©rience de vie on relativise plus rapidement, le fait de ne pas se sentir Ã  la hauteur dÃ¨s l&#039;installation du projet, on se dit tout de suite qu&#039;on risque de se faire &quot;dÃ©masquer&quot;.\r\n\r\nSouvenez-vous, avant de continuer, que si vous obtenez une mission ou un poste c&#039;est qu&#039;il y a une raison !\r\n\r\nC&#039;est a ce moment prÃ©cis, que j&#039;ai cru faire mon (premier) dernier jour.\r\n\r\nLa fin de journÃ©e commenÃ§ait Ã  arriver et je voulait Ã  tout prix rÃ©gler le problÃ¨me en autonomie, mais finalement, ce qui m&#039;a dÃ©bloquÃ© c&#039;est la COMMUNICATION.\r\n\r\nNon, poser des questions ne fait pas de vous un imposteur, une personne incompÃ©tentes bien au contraire. Cela vous apprendra a comprendre en profondeur, tout en Ã©claircissant les zones d&#039;ombres.\r\n\r\nJ&#039;ai communiquÃ© sur mon problÃ¨me, et j&#039;ai dÃ©couvert que le soucis ne venait pas de moi, mais d&#039;un problÃ¨me de dÃ©pendance que l&#039;application devait rÃ©cupÃ©rer et qui Ã©tait momentanÃ©ment cassÃ©e.\r\n\r\nEnsuite, tout a fonctionnÃ© !\r\n\r\nOn peut dÃ©jÃ  en conclure que communiquer sur un problÃ¨me le plus tÃ´t possible permet de gagner un temps considÃ©rable, surtout lors de sa premiÃ¨re journÃ©e.', '2022-11-15 16:34:49', 'ClÃ©ment Grenier--Desrousseaux'),
(19, 'Qu&#039;est-ce que l&#039;OSINT, ou &quot;Open-Source Intelligence&quot; ?', 'Vous Ãªtes passionnÃ©.e par l&#039;informatique et vous n&#039;avez jamais entendu, ou simplement jamais compris, en quoi consiste l&#039;OSINT ? Alors cet article est fait pour vous !', 'OSINT est un acronyme qui signifie &quot;Open-Source Intelligence&quot;, mais mÃªme en connaissant les mots derriÃ¨re cet acronyme, cela ne donne pas forcÃ©ment toutes les clÃ©s pour comprendre ce qui se cache derriÃ¨re ce concept !\r\n\r\nAllons-y mot Ã  mot...\r\n\r\nIci &quot;Intelligence&quot; ne fait pas rÃ©fÃ©rence Ã  nos capacitÃ©s intellectuelles, mais plutÃ´t Ã  la recherche et Ã  l&#039;investigation de renseignements. C&#039;est l&#039;utilisation amÃ©ricaine du mot, qui se retrouve d&#039;ailleurs dans l&#039;acronyme CIA pour &quot;Central Intelligence Agency&quot;.\r\n\r\nEt la partie &quot;Open-Source&quot; signifie que l&#039;investigation ne se fera pas grÃ¢ce Ã  des donnÃ©es, documents, informations confidentielles ou qui requiÃ¨rent des autorisations spÃ©ciales, mais avec des donnÃ©es disponibles au grand public.\r\n\r\nSi on devait rÃ©sumer en une phrase : L&#039;OSINT est une pratique de renseignement et d&#039;investigation basÃ©e sur des informations disponibles en accÃ¨s libre.\r\n\r\nÃ€ noter que certaines de ces informations en accÃ¨s libre, sont en rÃ©alitÃ© des donnÃ©es qui devraient Ãªtre confidentielles mais dont la sÃ©curitÃ© a Ã©tÃ© nÃ©gligÃ©e...\r\n\r\nÃ€ quoi cela sert ?\r\n\r\nDe la recherche de renseignements, on peut en avoir besoin pour tous les domaines, allant de sujets trÃ¨s sensibles (criminalitÃ©, terrorisme, gÃ©opolitique,...) jusqu&#039;Ã  des sujets de divertissement (jeu-vidÃ©o, musique, cinÃ©ma,...).\r\n\r\nC&#039;est une pratique professionnelle trÃ¨s prÃ©sente dans les forces de l&#039;ordre, mais Ã©galement dans la presse, pour recueillir des sujets exclusifs avant tout le monde !\r\n\r\nPar exemple, beaucoup d&#039;annonces de nouveautÃ©s dans le jeu vidÃ©o sont dÃ©tectÃ©es avant leur sortie, simplement en allant fouiller dans les fichiers du jeu en question !\r\n\r\nUn exemple d&#039;une problÃ©matique de renseignement : Retrouver la vÃ©ritable identitÃ© d&#039;un harceleur sur les rÃ©seaux pour l&#039;assigner en justice.\r\n\r\nSi vous voulez dÃ©couvrir de l&#039;OSINT en pratique, je vous recommande de regarder ce mini-reportage oÃ¹ l&#039;on retrouve l&#039;identitÃ© d&#039;une personne Ã  partir d&#039;une simple photo prise depuis un avion...\r\n\r\nCertaines personnes ont fait de l&#039;OSINT un mÃ©tier, tandis que certaines personnes apportent de l&#039;aide bÃ©nÃ©volement, ou le font simplement pour s&#039;amuser !', '2022-11-15 16:35:35', 'ClÃ©ment Grenier--Desrousseaux'),
(20, 'Les pires clichÃ©s / blagues sur les dÃ©veloppeurs', '  Un article plein dâ€™humour qui croise anecdotes, blagues, gifs, clichÃ©s et fun facts concernant les dÃ©veloppeursâ€¦', 'Eh oui, encore un article avec des blagues de dÃ©veloppeurâ€¦\r\n\r\nCet article humoriste a pour but de lister tous les clichÃ©s du monde de lâ€™informatique.\r\n\r\nCâ€™est un billet un peu plus fun que dâ€™habitude, Ã§a mâ€™arrive pas souventâ€¦\r\n\r\nAlors dÃ©solÃ© dâ€™avance, câ€™est de lâ€™humour de dÃ©veloppeur !\r\n\r\nTout le monde pense quâ€™on est incroyable\r\n\r\nEt quâ€™on rÃ©pare les imprimantes aussiâ€¦\r\n\r\nMais passons, je trouve que le mÃ©tier de dÃ©veloppeur est un mÃ©tier assez surcÃ´tÃ©.\r\n\r\n\r\nNous sommes tous des hackers\r\n\r\nSÃ©rieusement, câ€™est pas parce-quâ€™on doit lancer des commandes dans un terminal quâ€™on pirate des trucs.\r\n\r\nEn plus, paye le storytelling derriÃ¨re le Â« hacking Â».\r\n\r\nLes audits de sÃ©curitÃ© câ€™est moins palpitant quâ€™on veut nous le faire croireâ€¦\r\n\r\nOn rend souvent un fichier Excel avec une liste de point Ã  corriger ðŸ™‚\r\n\r\nIl y a peu de pentesters qui trouvent du 0-dayâ€¦\r\n\r\n\r\nLes dÃ©veloppeurs nâ€™utilisent pas la souris (comme dans les films)\r\n\r\nJe crois ne jamais avoir vu un dev utiliser uniquement son clavier !\r\n\r\nCâ€™est franchement, trÃ¨s trÃ¨s dur.\r\n\r\nApprendre Ã  coder sans souris Ã§a demande quand mÃªme un minimum de temps et dâ€™effort.\r\n\r\nMais il faut le reconnaÃ®tre, ce sont surtout les devs badass sous vim qui sont le plus proches dâ€™y arriver !\r\n\r\n\r\n\r\nLes boÃ®tes dans la tech sont cool\r\n\r\nNerf, baby-foot, ping-pong, balles en mousse, croissantsâ€¦ Tu peux mÃªme venir en claquette !\r\n\r\nMÃªme les boÃ®tes les plus archaÃ¯ques commencent Ã  adopter le Â« mode start-up Â».\r\n\r\nAlors certes ce nâ€™est pas Ã§a qui fait la diff Ã  lâ€™entretien, mais entre Ã§a et le milieu bancaire, yâ€™a un monde.\r\n\r\nAprÃ¨s il ne faut pas gÃ©nÃ©raliser, jâ€™ai des amis qui doivent venir en chemise au boulot.\r\n\r\nQui doivent pointer le matin en arrivantâ€¦\r\n\r\nOÃ¹ il nâ€™y a pas de pouf pour sâ€™installer entre midi et deux !', '2022-11-15 16:38:23', 'ClÃ©ment Grenier--Desrousseaux');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userId`, `userEmail`, `userPassword`) VALUES
(9, 'test@test.test', '$2y$12$lmWJmmnN.DbSeVW5v7l8wujrGKsSKuKZSrdkl26MooWNvYP2G0Z.e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
