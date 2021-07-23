-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 21 jan. 2021 à 13:28
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `achat`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idcateg` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idcateg`, `nom`, `description`) VALUES
(1, 'ordinateurs portables', ''),
(2, 'Ordinateurs portables', ''),
(3, 'Périphérique et Accessoires', ''),
(4, 'Composants Informatique', ''),
(5, 'Ordinateur de bureau', '');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `Pseudo` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Pseudo`, `Nom`, `Prenom`, `Email`, `Telephone`, `Adresse`, `genre`, `password`) VALUES
('mar', 'marwen', 'ben aouicha', 'marwen.benaouicha@enis.tn', 29864854, 'route gremda', 'male', 'Marwen@789'),
('marwa', 'marwa', 'baklouti', 'marwa.baklouti@enis.tn', 25103698, 'route tanyour km 3.5', 'male', 'Marwa@789'),
('mariem', 'mariem', 'smii', 'mariem.smii@enis.tn', 98741896, 'route gremda km 3.5', 'male', 'Mariem@789'),
('son', 'sonda', 'baklouti', 'marwa.baklouti66@gmail.com', 42566552, 'sonda@gmail.com', 'male', 'Sonda@123'),
('asma', 'asma', 'samet', 'asma.samet@gmail.com', 970000000, 'aa', 'male', 'Asma@123');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `client` varchar(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `client`, `total`) VALUES
(1, 'marwa', 3268),
(2, 'mayam', 2386),
(3, 'mayam', 1956),
(6, 'asma', 20),
(7, 'asma', 20),
(8, 'asma', 4887),
(9, 'asma', 20),
(10, 'marwa', 20),
(11, 'marwa', 40),
(12, 'marwa', 9852),
(13, 'marwa', 3897),
(14, 'marwa', 10),
(15, 'marwa', 20),
(16, 'mar', 30);

-- --------------------------------------------------------

--
-- Structure de la table `lignecommande`
--

CREATE TABLE `lignecommande` (
  `code` varchar(250) NOT NULL,
  `qtef` int(11) NOT NULL,
  `prixf` double NOT NULL,
  `Pseudo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lignecommande`
--

INSERT INTO `lignecommande` (`code`, `qtef`, `prixf`, `Pseudo`) VALUES
('', 0, 0, ''),
('0', 0, 0, 'marwen'),
('mayam', 0, 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `code` varchar(250) NOT NULL,
  `qte` int(11) NOT NULL,
  `prix` double NOT NULL,
  `description` varchar(250) NOT NULL,
  `idcateg` int(11) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`code`, `qte`, `prix`, `description`, `idcateg`, `image`) VALUES
('1', 30, 9.9, 'Souris', 3, 'images/4.jpg'),
('33', 30, 1629, 'ASUS2', 5, 'images/ASUS.jpg'),
('34', 30, 1655, 'HP1', 5, 'images/HP.jpg'),
('3', 20, 749, 'ASUS1', 1, 'images/product-9.jpg'),
('4', 20, 799, 'DELL1', 1, 'images/category.jpg'),
('5', 20, 7.5, 'Clavier', 3, 'images/6.jpg'),
('6', 20, 1149, 'LENOVO1', 2, 'images/category-2.jpg'),
('7', 20, 1229, 'LENOVO2', 1, 'images/product-7.jpg'),
('8', 20, 1239, 'DELL2', 1, 'images/7.jpg'),
('9', 20, 1299, 'ACER1', 2, 'images/8.jpg'),
('10', 20, 1399, 'ASUS2', 2, 'images/9.jpg'),
('11', 20, 1445, 'HP1', 1, 'images/product-5.jpg'),
('12', 20, 1559, 'HP2', 1, 'images/10.jpg'),
('13', 20, 1619, 'LENOVO3', 1, 'images/11.jpg'),
('45', 30, 85, 'Casque_GAMER', 3, 'images/casque1.jpg'),
('14', 20, 1635, 'ACER2', 2, 'images/12.jpg'),
('15', 20, 1679, 'ACER3', 2, 'images/13.jpg'),
('17', 20, 1729, 'HP3', 2, 'images/14.jpg'),
('43', 30, 25, 'REFROIDISSEUR', 3, 'images/refroidissement.jpg'),
('18', 20, 1759, 'DELL3', 1, 'images/image_2.jpg'),
('19', 20, 1849, 'ACER4', 1, 'images/15.jpg'),
('42', 30, 159, 'CLAVIER_GAMING_SPIRIT_OF_GAMER', 3, 'images/clavier1.jpg'),
('16', 20, 1969, 'HP4', 2, 'images/16.jpg'),
('20', 20, 2009, 'ACER5', 1, 'images/product-6.jpg'),
('21', 20, 2019, 'ACER6', 1, 'images/17.jpg'),
('40', 30, 35, 'Souris_HP', 3, 'images/sourishp.jpg'),
('22', 20, 2319, 'DELL4', 2, 'images/18.jpg'),
('39', 30, 2579, 'DELL3', 5, 'images/DELL3.jpg'),
('23', 20, 2499, 'LENOVO4', 2, 'images/19.jpg'),
('38', 30, 2019, 'HP2', 5, 'images/HP2.jpg'),
('24', 20, 2599, 'HP5', 2, 'images/20.jpg'),
('25', 20, 2889, 'MSI ', 1, 'images/product-1.jpg'),
('26', 100, 25, 'Ventilateur_Processeur ', 4, 'images/30.jpg'),
('27', 100, 69, 'Barrette_Memoire_4Go ', 4, 'images/21.jpg'),
('28', 100, 109, 'Pack_Gamer', 3, 'images/22.jpg'),
('36', 30, 1799, 'DELL1', 5, 'images/DELL.jpg'),
('29', 100, 62, 'Refroidisseur_GAMER', 3, 'images/23.jpg'),
('30', 100, 959, 'LENOVO1', 5, 'images/25.jpg'),
('35', 30, 1765, 'LENOVO2', 5, 'images/LENOVO.jpg'),
('31', 100, 1079, 'ASUS1', 5, 'images/24.jpg'),
('32', 100, 319, 'Carte Mère MSI', 4, 'images/26.jpg'),
('2', 20, 739, 'LENOVO5', 1, 'images/5.jpg'),
('44', 30, 23, 'Casque', 3, 'images/casque.jpg'),
('41', 30, 59, 'Clavier_Gaming', 3, 'images/clavier.jpg'),
('37', 30, 1875, 'DELL2', 5, 'images/DELL2.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcateg`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Pseudo`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lignecommande`
--
ALTER TABLE `lignecommande`
  ADD PRIMARY KEY (`code`),
  ADD KEY `code` (`code`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`code`),
  ADD KEY `idcateg` (`idcateg`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcateg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
