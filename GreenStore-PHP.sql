-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 03 fév. 2023 à 07:43
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `GreenStore1`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `ID_Cat` int(11) NOT NULL,
  `Nom_Cat` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`ID_Cat`, `Nom_Cat`) VALUES
(4337684, 'Fruits');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `ID_Com` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `ID_Prod` int(11) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Statut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `history`
--

CREATE TABLE `history` (
  `time` datetime NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `history`
--

INSERT INTO `history` (`time`, `Message`) VALUES
('2023-01-30 04:15:11', 'test tes'),
('2023-01-30 04:23:59', 'La Cat de ID : 9686800 a ete supprimé !'),
('2023-01-30 04:51:46', 'un Produit de ID : 5879547 a ete ajouté !'),
('2023-01-30 15:42:52', 'une CAT de ID : 2989448 ete ajouté  '),
('2023-01-30 23:25:38', 'une CAT de ID : 7787975 ete ajouté  '),
('2023-01-31 10:47:57', 'un Produit de ID : 2828688 a ete ajouté !'),
('2023-01-31 11:22:52', 'une CAT de ID : 4509213 ete ajouté  '),
('2023-01-31 13:41:42', 'La Cat de ID : 1 a ete supprimé !'),
('2023-01-31 13:41:49', 'une CAT de ID : 4337684 ete ajouté  '),
('2023-01-31 13:53:15', 'un Produit de ID : 5940561 a ete ajouté !'),
('2023-01-31 14:52:09', 'un Produit de ID : 5812183 a ete ajouté !'),
('2023-02-01 00:07:29', 'La Cat de ID : 9686801 a ete supprimé !'),
('2023-02-01 00:07:30', 'La Cat de ID : 7787975 a ete supprimé !'),
('2023-02-01 00:07:32', 'La Cat de ID : 4509213 a ete supprimé !'),
('2023-02-01 00:07:33', 'La Cat de ID : 2989448 a ete supprimé !');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `ID_Prod` int(11) NOT NULL,
  `ID_Cat` int(11) NOT NULL,
  `Nom_Prod` varchar(70) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `URL` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`ID_Prod`, `ID_Cat`, `Nom_Prod`, `Prix`, `Description`, `URL`) VALUES
(5812183, 4337684, 'Fraise', 200, 'ntg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsexF7hKhnEOr1EBH_q_gGZa1bf2iANr5hEivITmdo&s'),
(5940561, 4337684, 'Carote', 121, 'ntg', 'images/product-06.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID_User` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Role` tinyint(4) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Num_Tel` varchar(13) NOT NULL,
  `Country` varchar(56) NOT NULL,
  `Address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID_User`, `Email`, `Password`, `Role`, `Prenom`, `Nom`, `Num_Tel`, `Country`, `Address`) VALUES
(1, 'test@test.com', 'test', 0, 'Driss', 'Hadad', '0123456789', 'Maroc', 'Boukhalef, FSTT 9010'),
(2, 'admin@admin.com', 'admin', 1, 'Youssef', 'CHAABI', '9876543210', 'Maroc', 'Greenboys, Raja 210'),
(4, 'youssefchaabi55@gmail.com', 'youssef10', 0, 'youssef', 'CHAABI', '0690727529', 'Morocco', 'Tanger, Boukhalef');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_Cat`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`ID_Com`),
  ADD KEY `ID_Prod` (`ID_Prod`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`ID_Prod`),
  ADD KEY `ID_Cat` (`ID_Cat`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `ID_Cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9686802;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `ID_Com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `ID_Prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5940562;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`ID_Prod`) REFERENCES `produit` (`ID_Prod`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`ID_Cat`) REFERENCES `category` (`ID_Cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
