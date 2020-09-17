-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 10 juil. 2019 à 14:10
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `saramaster`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(70) NOT NULL,
  `login` varchar(70) NOT NULL,
  `mot_passe` varchar(255) NOT NULL,
  `type` enum('admin','logistique') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `login`, `mot_passe`, `type`) VALUES
(1, 'SARA', 'sara@gmaiL.com', '123123', 'admin'),
(2, 'Sara2', 'sara2@ff.com', '321321', 'logistique');

-- --------------------------------------------------------

--
-- Structure de la table `chauffeure`
--

DROP TABLE IF EXISTS `chauffeure`;
CREATE TABLE IF NOT EXISTS `chauffeure` (
  `id_chauff` int(11) NOT NULL AUTO_INCREMENT,
  `id_transp` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `categorie_prm` varchar(50) NOT NULL,
  PRIMARY KEY (`id_chauff`),
  KEY `id_transp` (`id_transp`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chauffeure`
--

INSERT INTO `chauffeure` (`id_chauff`, `id_transp`, `nom`, `prenom`, `email`, `tel`, `categorie_prm`) VALUES
(1, 3, 'Ait', 'Smail', 'dd@dd.fr', '0654213636', 'Permis C2');

-- --------------------------------------------------------

--
-- Structure de la table `etablissement`
--

DROP TABLE IF EXISTS `etablissement`;
CREATE TABLE IF NOT EXISTS `etablissement` (
  `id_etab` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `denomination` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `categorie` varchar(70) NOT NULL,
  `email` varchar(80) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  PRIMARY KEY (`id_etab`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etablissement`
--

INSERT INTO `etablissement` (`id_etab`, `name`, `denomination`, `adresse`, `categorie`, `email`, `tel`, `fax`) VALUES
(1, 'Algérie Télécom organise la première édition du forum « KOODWATIC »', 'l’opéra Boualem Bessaih.', 'alger', 'opéra', 'opera@gmail.com', '', '0000'),
(3, 'Algérie Telecom réédite son opération annuelle de don de sang', 'AT', 'bejaia', 'Local', 'sara@gmail.com', '', '0000');

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id_even` int(11) NOT NULL AUTO_INCREMENT,
  `type_even` varchar(255) NOT NULL,
  `context_even` enum('Externe','Interne') NOT NULL,
  `titre_even` varchar(255) NOT NULL,
  `date_deb` date NOT NULL,
  `date_fin` date NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `budjet` varchar(20) NOT NULL,
  `nbr_particip` int(10) NOT NULL,
  `descriptt_even` text NOT NULL,
  `date_added` timestamp NOT NULL,
  PRIMARY KEY (`id_even`),
  KEY `titre_even` (`titre_even`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_even`, `type_even`, `context_even`, `titre_even`, `date_deb`, `date_fin`, `localisation`, `budjet`, `nbr_particip`, `descriptt_even`, `date_added`) VALUES
(1, 'autre', 'Externe', 'Algérie Telecom réédite son opération annuelle de don de sang', '2019-07-18', '2019-07-19', 'Algérie Telecom', '0', 10, 'Algérie télécom réédite son opération annuelle de don de sang qui se déroulera en collaboration avec l’agence nationale du sang, le 18 et 19 juin 2019 et ce dans les 48 wilayas du pays.  L’opération aura lieu au niveau du siège de la Direction Général d’Algérie Télécom, et d’ans l’ensemble des directions opérationnelles sur le territoire nationale.  Cette initiative s’inscrit dans le cadre des actions solidaires et citoyennes d’Algérie Télécom, et à travers cette opération de don de sang, Algérie Télécom confirme, une fois encore, que ce geste de générosité est une valeur sure parmi ses employés et bien ancré dans sa culture d’entreprise', '2019-07-09 12:06:51'),
(2, 'siminaire', 'Interne', 'soutenqnce', '2019-07-10', '2019-07-11', 'tharga', '2000', 10, 'événementiel de soutenance....', '2019-07-09 14:24:32'),
(3, 'Reportage', 'Externe', 'lancement d\'un produit', '2019-07-23', '2019-07-24', 'la foire de bejaia', '0', 1000000, 'Dans cette partie, on a dimensionné  notre fusée  par  rapport  au  cahier  des  charges,  le choix du type du  cône  et  des  ailerons  est  lié  aux  performances  aérodynamiques.  Pareil  pour les parachutes pour minimiser les dégâts lors d’atterrissage au sol. Un calcul théorique  des coefficients aérodynamiques de la fusée et  ces  performances  est fait,  les  résultats  sont valablement corrects par apport à celles obtenues par Open rochet.', '2019-07-09 14:38:52'),
(5, 'colloque', 'Externe', 'Algérie Télécom organise la première édition du forum « KOODWATIC »', '2019-07-01', '2019-07-01', 'l’opéra Boualem Bessaih', '0', 1000, 'Description : Algérie télécom annonce la tenue de la première édition du forum « KOODWATIC », prévue pour le samedi 05 janvier 2019 au niveau de l’opéra Boualem Bessaih. « KOODWATIC » sera un espace de partage d’expérience et de motivation pour les étudiants dans le domaine des technologies de l’information et de la communication et de l’entrepreneuriat.  Le Pr Belkacem HABBA sera l’invité d’honneur de cette première édition.  A cet effet, Algérie Télécom invite tous les étudiants universitaires, toutes spécialités confondues, intéressés par cet événement à s’inscrire via le site web www.at.dz, en remplissant la fiche de renseignements et en justifiant l’affiliation à un établissement universitaire.  Ce forum réunira plus de 1000 étudiants universitaires en compagnie du Pr Belkacem HABBA, scientifique et chercheur algérien, diplômé en physique de l’université Houari Boumediene d’Alger. Il a travaillé pour plusieurs entreprises de technologie numérique mondiales.  Le Pr Belkacem HABBA figure dans la liste des cent meilleurs inventeurs, totalisant 1400 brevets d’invention dans le domaine de l’informatique, de l’internet et des technologies de l’information et de la communication en Amérique, au Japon et dans d’autres pays.', '2019-07-10 03:29:20'),
(6, 'communiqué de presse', 'Externe', 'Algérie Télécom présente ses meilleurs vœux aux Algériens à l\'occasion du  Mawlid Nabawi Charif', '2019-07-02', '2019-07-02', 'Agences Commerciales', '0', 1, 'A l\'occasion de la fête du &quot; Mawlid Nabaoui Charif&quot;, Algérie Télécom présente ses meilleurs vœux de santé et de prospérité à tous les musulmans et au peuple algérien.    Par la même occasion, Algérie Télécom informe son aimable clientèle que les Agences Commerciales (ACTELs) seront ouvertes de 10h00 à 15h00 afin de garantir la continuité du service.  Les Agences Commerciales concernées par cet horaire sont les suivantes:  Au niveau d\'Alger: Badjarah, Bordj El Bahri, Bab Ezzouar,  Aissat Idir, Ben M\'hidi, Bir Mourad Rais, Chéraga, Bab El Oued et Zeralda.  Les autres Wilayas : les Agences Commerciales des Chefs de lieux.', '2019-07-10 03:31:37'),
(7, 'réunion', 'Interne', 'étude du projet fibre optique', '2019-07-30', '2019-07-30', 'algerie telecom', '0', 1000, 'Madame Monsieur, nous avons le plaisir de vous à participer a notre prochaine reunion qui aura lieu le 30 juin 2019 à la salle de réunion.', '2019-07-10 03:32:58');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `id_fac` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  PRIMARY KEY (`id_fac`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `hebergement`
--

DROP TABLE IF EXISTS `hebergement`;
CREATE TABLE IF NOT EXISTS `hebergement` (
  `id_heb` int(11) NOT NULL AUTO_INCREMENT,
  `nom_res` varchar(255) NOT NULL,
  `type_piece` varchar(80) NOT NULL,
  `nom_piece` varchar(80) NOT NULL,
  `besoin_heb` varchar(80) NOT NULL,
  `budjet` varchar(70) NOT NULL,
  PRIMARY KEY (`id_heb`),
  KEY `nom_res` (`nom_res`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hebergement`
--

INSERT INTO `hebergement` (`id_heb`, `nom_res`, `type_piece`, `nom_piece`, `besoin_heb`, `budjet`) VALUES
(1, 'Algérie Telecom réédite son opération annuelle de don de sang', 'double', 'A4', '', '100');

-- --------------------------------------------------------

--
-- Structure de la table `participantext`
--

DROP TABLE IF EXISTS `participantext`;
CREATE TABLE IF NOT EXISTS `participantext` (
  `id_ext` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur` varchar(50) NOT NULL,
  `nationality` enum('Algeria','foreign') NOT NULL,
  `lieu_trav` varchar(70) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `added` timestamp NOT NULL,
  PRIMARY KEY (`id_ext`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `participantext`
--

INSERT INTO `participantext` (`id_ext`, `utilisateur`, `nationality`, `lieu_trav`, `Email`, `added`) VALUES
(1, 'sarita', 'Algeria', 'bejaia', 'sarita@gmail.com', '2019-07-09 11:26:21'),
(2, 'Mr Ait AA Ahmed', 'Algeria', 'bejaia', 'ait@gmail.com', '2019-07-10 03:35:47'),
(3, 'Mme Bara souhila', 'Algeria', 'bejaia', 'souhila@gmail.fr', '2019-07-10 03:36:34');

-- --------------------------------------------------------

--
-- Structure de la table `piece_jointe`
--

DROP TABLE IF EXISTS `piece_jointe`;
CREATE TABLE IF NOT EXISTS `piece_jointe` (
  `ide_pj` int(11) NOT NULL AUTO_INCREMENT,
  `id_evnt` int(11) NOT NULL,
  `titre` varchar(70) NOT NULL,
  `type` varchar(70) NOT NULL,
  PRIMARY KEY (`ide_pj`),
  KEY `piecej` (`id_evnt`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `ide_res` int(11) NOT NULL AUTO_INCREMENT,
  `nom_res` varchar(255) NOT NULL,
  `titre_even` varchar(255) NOT NULL,
  `date_arriv` date NOT NULL,
  `datte_dep` date NOT NULL,
  `added_time` timestamp NOT NULL,
  PRIMARY KEY (`ide_res`),
  KEY `titre_even` (`titre_even`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`ide_res`, `nom_res`, `titre_even`, `date_arriv`, `datte_dep`, `added_time`) VALUES
(3, 'etablissement', 'Algérie Télécom organise la première édition du forum « KOODWATIC »', '2019-07-01', '2019-07-01', '2019-07-10 03:38:24'),
(11, 'etablissement', 'étude du projet fibre optique', '2019-07-17', '2019-07-17', '2019-07-10 11:36:16'),
(12, 'etablissement', 'soutenqnce', '2019-07-10', '2019-07-25', '2019-07-10 11:36:28'),
(13, 'etablissement', 'Algérie Télécom présente ses meilleurs vœux aux Algériens à l', '2019-07-12', '2019-07-09', '2019-07-10 12:44:04'),
(14, 'etablissement', 'Algérie Telecom réédite son opération annuelle de don de sang', '2019-07-16', '2019-07-17', '2019-07-10 12:52:13');

-- --------------------------------------------------------

--
-- Structure de la table `resturation`
--

DROP TABLE IF EXISTS `resturation`;
CREATE TABLE IF NOT EXISTS `resturation` (
  `id_rest` int(11) NOT NULL AUTO_INCREMENT,
  `nom_res` varchar(255) NOT NULL,
  `nombre_palce` varchar(10) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `besoin_rest` varchar(255) NOT NULL,
  `budjet_rest` varchar(255) NOT NULL,
  PRIMARY KEY (`id_rest`),
  KEY `nom_res` (`nom_res`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `resturation`
--

INSERT INTO `resturation` (`id_rest`, `nom_res`, `nombre_palce`, `menu`, `besoin_rest`, `budjet_rest`) VALUES
(1, 'Algérie Télécom organise la première édition du forum « KOODWATIC »', '20', 'salade', '', '100');

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `id_sale` int(11) NOT NULL AUTO_INCREMENT,
  `nom_res` varchar(255) NOT NULL,
  `capacity` varchar(200) NOT NULL,
  `besoin_sale` varchar(200) NOT NULL,
  `budjet_sale` varchar(200) NOT NULL,
  PRIMARY KEY (`id_sale`),
  KEY `nom_res` (`nom_res`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_sale`, `nom_res`, `capacity`, `besoin_sale`, `budjet_sale`) VALUES
(1, 'Algérie Télécom organise la première édition du forum « KOODWATIC »', '1500', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `transport`
--

DROP TABLE IF EXISTS `transport`;
CREATE TABLE IF NOT EXISTS `transport` (
  `id_transp` int(11) NOT NULL AUTO_INCREMENT,
  `nom_res` varchar(255) NOT NULL,
  `immatriculation` varchar(70) NOT NULL,
  `type_transport` varchar(70) NOT NULL,
  `marque` varchar(70) NOT NULL,
  `modele` varchar(70) NOT NULL,
  `nbr_place` int(11) NOT NULL,
  `frais` varchar(70) NOT NULL,
  PRIMARY KEY (`id_transp`),
  KEY `nom_res` (`nom_res`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `transport`
--

INSERT INTO `transport` (`id_transp`, `nom_res`, `immatriculation`, `type_transport`, `marque`, `modele`, `nbr_place`, `frais`) VALUES
(3, 'Algérie Télécom organise la première édition du forum « KOODWATIC »', '11623222653', 'Bus', 'Toyota', 'Toyota', 30, '8000');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_util` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(70) NOT NULL,
  `prenom` varchar(70) NOT NULL,
  `civilite` varchar(40) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `email` varchar(70) NOT NULL,
  `date_naiss` date NOT NULL,
  `lieu_naiss` varchar(255) DEFAULT NULL,
  `diplom` varchar(70) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `date_emp` date NOT NULL,
  `mot_passe` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL,
  PRIMARY KEY (`id_util`),
  KEY `id_util` (`id_util`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_util`, `nom`, `prenom`, `civilite`, `adresse`, `tel`, `email`, `date_naiss`, `lieu_naiss`, `diplom`, `fonction`, `statut`, `date_emp`, `mot_passe`, `date_added`) VALUES
(1, 'Sara', 'Targa', 'Feminin', 'bejaia ville', '012-012-012-1', 'sarabejaia@gmail.com', '1994-01-05', 'sidi Aich', 'master', 'new', 'derection', '2019-07-02', '123sara', '2019-07-09 11:25:33'),
(2, 'OUAB', 'Katia', 'Feminin', 'bejaia', '410-410-410-1', 'katia@yahoo.dz', '1994-07-14', 'akvo', 'Master', 'Etudiante', 'Employer', '2019-07-26', '123katia', '2019-07-09 15:02:18');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chauffeure`
--
ALTER TABLE `chauffeure`
  ADD CONSTRAINT `chauffeure_ibfk_1` FOREIGN KEY (`id_transp`) REFERENCES `transport` (`id_transp`);

--
-- Contraintes pour la table `etablissement`
--
ALTER TABLE `etablissement`
  ADD CONSTRAINT `etablissement_ibfk_1` FOREIGN KEY (`name`) REFERENCES `reservation` (`titre_even`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`id_fac`) REFERENCES `reservation` (`ide_res`);

--
-- Contraintes pour la table `hebergement`
--
ALTER TABLE `hebergement`
  ADD CONSTRAINT `hebergement_ibfk_1` FOREIGN KEY (`nom_res`) REFERENCES `etablissement` (`name`);

--
-- Contraintes pour la table `piece_jointe`
--
ALTER TABLE `piece_jointe`
  ADD CONSTRAINT `piece_jointe_ibfk_1` FOREIGN KEY (`id_evnt`) REFERENCES `evenement` (`id_even`) ON DELETE CASCADE;

--
-- Contraintes pour la table `resturation`
--
ALTER TABLE `resturation`
  ADD CONSTRAINT `resturation_ibfk_1` FOREIGN KEY (`nom_res`) REFERENCES `etablissement` (`name`);

--
-- Contraintes pour la table `salle`
--
ALTER TABLE `salle`
  ADD CONSTRAINT `salle_ibfk_1` FOREIGN KEY (`nom_res`) REFERENCES `etablissement` (`name`);

--
-- Contraintes pour la table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`nom_res`) REFERENCES `etablissement` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
