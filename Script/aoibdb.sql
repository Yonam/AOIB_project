-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2019 at 07:02 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aoibdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

DROP TABLE IF EXISTS `actions`;
CREATE TABLE IF NOT EXISTS `actions` (
  `IDACTION` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `LIBELLEACTION` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDACTION`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `autorisations`
--

DROP TABLE IF EXISTS `autorisations`;
CREATE TABLE IF NOT EXISTS `autorisations` (
  `IDACTION` int(11) NOT NULL,
  `IDPRIVILEGE` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `autorisations_idaction_index` (`IDACTION`),
  KEY `autorisations_idprivilege_index` (`IDPRIVILEGE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demandes`
--

DROP TABLE IF EXISTS `demandes`;
CREATE TABLE IF NOT EXISTS `demandes` (
  `IDDEMANDE` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NBRENFANT` int(11) DEFAULT NULL,
  `DATEDEMANTE` datetime DEFAULT NULL,
  `DATECLOTURE` datetime DEFAULT NULL,
  `ETATDEMANDE` int(11) DEFAULT NULL,
  `IDPART` int(11) NOT NULL,
  PRIMARY KEY (`IDDEMANDE`),
  KEY `demandes_idpart_index` (`IDPART`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enfants`
--

DROP TABLE IF EXISTS `enfants`;
CREATE TABLE IF NOT EXISTS `enfants` (
  `IDENFANT` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `MATRICULE` int(11) DEFAULT NULL,
  `NOMENF` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRENOMENF` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SEXE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PHOTOPASS` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NATIONALITE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATENAISS` date DEFAULT NULL,
  `LIEUNAISS` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TYPEFORMATION` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ETATENF` int(11) DEFAULT NULL,
  `STATUEENF` int(11) DEFAULT NULL,
  `ACTENAISS` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NOMPERE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATEDECESPERE` date DEFAULT NULL,
  `CAUSEDECESPERE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIEUDECESPERE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ACTEDECESPERE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NOMMERE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ETATMERE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATEDECESMERE` date DEFAULT NULL,
  `CAUSEDECESMERE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIEUDECESMERE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NOMTUTEUR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTTUTEUR` int(11) DEFAULT NULL,
  `NBREFRERE` tinyint(4) DEFAULT NULL,
  `NBRESOEUR` tinyint(4) DEFAULT NULL,
  `NBRFRERETRAVAIL` int(11) DEFAULT NULL,
  `ADRESSEENF` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GAINFAMILLE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LANGUEENF` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IDUSERSCAN` int(11) DEFAULT NULL,
  `IDUSERVALIDER` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDENFANT`),
  UNIQUE KEY `enfants_idenfant_unique` (`IDENFANT`),
  UNIQUE KEY `enfants_matricule_unique` (`MATRICULE`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enfants`
--

INSERT INTO `enfants` (`IDENFANT`, `MATRICULE`, `NOMENF`, `PRENOMENF`, `SEXE`, `PHOTOPASS`, `NATIONALITE`, `DATENAISS`, `LIEUNAISS`, `TYPEFORMATION`, `ETATENF`, `STATUEENF`, `ACTENAISS`, `NOMPERE`, `DATEDECESPERE`, `CAUSEDECESPERE`, `LIEUDECESPERE`, `ACTEDECESPERE`, `NOMMERE`, `ETATMERE`, `DATEDECESMERE`, `CAUSEDECESMERE`, `LIEUDECESMERE`, `NOMTUTEUR`, `CONTACTTUTEUR`, `NBREFRERE`, `NBRESOEUR`, `NBRFRERETRAVAIL`, `ADRESSEENF`, `GAINFAMILLE`, `LANGUEENF`, `IDUSERSCAN`, `IDUSERVALIDER`, `created_at`, `updated_at`) VALUES
(1, NULL, 'AGORO', 'sadath', NULL, 'documentsEnfants/photo/face23.jpg', NULL, NULL, NULL, NULL, NULL, 0, 'documentsEnfants/document/', 'AGORO LATIF', NULL, NULL, NULL, 'documentsEnfants/document/Chapitre 2 Installation et Configuration de SQL Server 2016.pdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 14145263, 'TSAKA', 'Colley', 'M', NULL, 'Togolais', '1999-03-15', NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 15152020, 'TCHAGNAOU', 'Ahmed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enfant_ims`
--

DROP TABLE IF EXISTS `enfant_ims`;
CREATE TABLE IF NOT EXISTS `enfant_ims` (
  `NOMENFIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRENOMENFIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SEXEIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATENAISSIM` date DEFAULT NULL,
  `NATIONALITEIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIEUNAISSIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TYPEFORMATIONIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NOMPEREIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATEDECESPEREIM` date DEFAULT NULL,
  `CAUSEDECESPEREIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIEUDECESPEREIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NOMMEREIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ETATMEREIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DATEDECESMEREIM` date DEFAULT NULL,
  `CAUSEDECESMEREIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LIEUDECESMEREIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NOMTUTEURIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTTUTEURIM` int(11) DEFAULT NULL,
  `NBREFREREIM` tinyint(4) DEFAULT NULL,
  `NBRESOEURIM` tinyint(4) DEFAULT NULL,
  `NBRFRERETRAVAILIM` int(11) DEFAULT NULL,
  `ADRESSEENFIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GAINFAMILLEIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LANGUEENFIM` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IDUSERVALIDERTRADUCTION` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `IDENFANT` int(11) DEFAULT NULL,
  KEY `enfant_ims_idenfant_index` (`IDENFANT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_02_01_230041_create_enfants_table', 1),
(2, '2019_02_01_230323_create_partenaires_table', 2),
(3, '2019_02_01_230451_create_privileges_table', 2),
(4, '2019_02_01_230519_create_selectionnes_table', 2),
(5, '2019_02_01_230608_create_utilisateurs_table', 2),
(6, '2019_02_19_143703_create_enfant_ims_table', 3),
(7, '2019_02_20_090129_create_actions_table', 3),
(8, '2019_02_20_091117_create_autorisations_table', 3),
(9, '2019_02_20_095041_create_demandes_table', 3),
(10, '2019_02_21_230039_create_photos_table', 3),
(11, '2019_02_23_095539_create_posseders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `partenaires`
--

DROP TABLE IF EXISTS `partenaires`;
CREATE TABLE IF NOT EXISTS `partenaires` (
  `IDPART` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TYPEPART` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NOMPART` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PAYSPARTENAIRE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTPART` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDPART`),
  UNIQUE KEY `partenaires_idpart_unique` (`IDPART`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `IDPHOTO` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `CHEMAIN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IDENFANT` int(11) NOT NULL,
  PRIMARY KEY (`IDPHOTO`),
  KEY `photos_idenfant_index` (`IDENFANT`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posseders`
--

DROP TABLE IF EXISTS `posseders`;
CREATE TABLE IF NOT EXISTS `posseders` (
  `IDPRIVILEGE` int(11) NOT NULL,
  `IDUSER` int(11) NOT NULL,
  KEY `posseders_idprivilege_index` (`IDPRIVILEGE`),
  KEY `posseders_iduser_index` (`IDUSER`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

DROP TABLE IF EXISTS `privileges`;
CREATE TABLE IF NOT EXISTS `privileges` (
  `IDPRIVILEGE` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `LIBELLEPRIVILEGE` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LEVELPRIVILEGE` int(11) DEFAULT NULL,
  PRIMARY KEY (`IDPRIVILEGE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `selectionnes`
--

DROP TABLE IF EXISTS `selectionnes`;
CREATE TABLE IF NOT EXISTS `selectionnes` (
  `IDSELEC` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NBRENFANTSELEC` int(11) DEFAULT NULL,
  `DATEENVOIE` datetime DEFAULT NULL,
  `ETATSELECTION` int(11) DEFAULT NULL,
  `IDDEMANDE` int(11) NOT NULL,
  `IDUSER` int(11) NOT NULL,
  PRIMARY KEY (`IDSELEC`),
  KEY `selectionnes_iddemande_index` (`IDDEMANDE`),
  KEY `selectionnes_iduser_index` (`IDUSER`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `IDUSER` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NOMUSER` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PRENOMUSER` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CONTACTUSER` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LOGIN` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PASSWORD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TYPEUSER` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HEURECONNEXION` datetime DEFAULT NULL,
  `HEUREDECONNEXION` datetime DEFAULT NULL,
  PRIMARY KEY (`IDUSER`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`IDUSER`, `NOMUSER`, `PRENOMUSER`, `CONTACTUSER`, `LOGIN`, `PASSWORD`, `TYPEUSER`, `HEURECONNEXION`, `HEUREDECONNEXION`) VALUES
(1, 'Kiffanxx', 'Romis', '93569573', 'Kiffanxx', '123456789', 'Admin', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
