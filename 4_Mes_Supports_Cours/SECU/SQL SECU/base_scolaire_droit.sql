use base_scolaire;
--
-- Base de données : `base_scolaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id_classe` int(11) NOT NULL,
  `nom_classe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `nom_classe`) VALUES
(1, '6G7'),
(2, '6G5'),
(3, '5G9'),
(4, '5G1'),
(5, '3G11');

-- --------------------------------------------------------

--
-- Structure de la table `detail`
--

CREATE TABLE `detail` (
  `id_detail` int(11) NOT NULL,
  `note_detail` int(11) NOT NULL,
  `commentaire_seance` varchar(255) NOT NULL,
  `materiel_oublie_detail` tinyint(1) DEFAULT 0,
  `id_seance` int(11) NOT NULL,
  `id_eleve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `detail`
--

INSERT INTO `detail` (`id_detail`, `note_detail`, `commentaire_seance`, `materiel_oublie_detail`, `id_seance`, `id_eleve`) VALUES
(1, 18, 'Bon travail', 0, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `eleve`
--

CREATE TABLE `eleve` (
  `id_eleve` int(11) NOT NULL,
  `nom_eleve` varchar(50) NOT NULL,
  `prenom_eleve` varchar(50) NOT NULL,
  `age_eleve` int(11) NOT NULL,
  `sexe_eleve` varchar(50) NOT NULL,
  `boursier_eleve` tinyint(1) DEFAULT 0,
  `id_classe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `eleve`
--

INSERT INTO `eleve` (`id_eleve`, `nom_eleve`, `prenom_eleve`, `age_eleve`, `sexe_eleve`, `boursier_eleve`, `id_classe`) VALUES
(1, 'BERNARD', 'Emmanuelle', 11, 'F', 1, 1),
(2, 'TURNER', 'Rodrigue', 12, 'G', 0, 3),
(4, 'MARJOLAINE', 'Faucher', 11, 'F', 1, 1),
(8, 'test', 'test', 0, '', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `participer`
--

CREATE TABLE `participer` (
  `id_seance` int(11) NOT NULL,
  `id_eleve` int(11) NOT NULL,
  `presence` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `participer`
--

INSERT INTO `participer` (`id_seance`, `id_eleve`, `presence`) VALUES
(1, 1, 1),
(1, 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `role_utilisateur`
--

CREATE TABLE `role_utilisateur` (
  `id_role` int(11) NOT NULL,
  `nom_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role_utilisateur`
--

INSERT INTO `role_utilisateur` (`id_role`, `nom_role`) VALUES
(1, 'utilisateur'),
(2, 'moderateur'),
(3, 'admin'),
(4, 'super admin'),
(5, 'vendeur');

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `id_seance` int(11) NOT NULL,
  `nom_seance` varchar(50) NOT NULL,
  `date_seance` datetime NOT NULL,
  `id_type` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `seance`
--

INSERT INTO `seance` (`id_seance`, `nom_seance`, `date_seance`, `id_type`, `id_utilisateur`) VALUES
(1, 'étude', '2022-10-06 17:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type_seance`
--

CREATE TABLE `type_seance` (
  `id_type` int(11) NOT NULL,
  `nom_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_seance`
--

INSERT INTO `type_seance` (`id_type`, `nom_type`) VALUES
(1, 'études'),
(2, 'sport'),
(3, 'club');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom_utilisateur` varchar(50) NOT NULL,
  `prenom_utilisateur` varchar(50) NOT NULL,
  `login_utilisateur` varchar(50) NOT NULL,
  `mail_utilisateur` varchar(50) NOT NULL,
  `password_utilisateur` varchar(100) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom_utilisateur`, `prenom_utilisateur`, `login_utilisateur`, `mail_utilisateur`, `password_utilisateur`, `id_role`) VALUES
(1, 'Tétrault', 'Guilllaume', 'Gtétrault', 'gt@free.fr', 'test', 3),
(3, 'Labbé', 'Nadine', 'nLabbé', 'ln@free.fr', 'test', 3),
(7, 'John', '', '', '', 'test', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id_classe`);

--
-- Index pour la table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_noter_eleve` (`id_eleve`),
  ADD KEY `fk_completer_seance` (`id_seance`);

--
-- Index pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id_eleve`),
  ADD KEY `fk_appartenir_classe` (`id_classe`);

--
-- Index pour la table `participer`
--
ALTER TABLE `participer`
  ADD PRIMARY KEY (`id_seance`,`id_eleve`),
  ADD KEY `fk_participer_eleve` (`id_eleve`);

--
-- Index pour la table `role_utilisateur`
--
ALTER TABLE `role_utilisateur`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`id_seance`),
  ADD KEY `fk_detailler_type` (`id_type`),
  ADD KEY `fk_diriger_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `type_seance`
--
ALTER TABLE `type_seance`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD KEY `fk_posseder_role` (`id_role`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id_classe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `id_eleve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `role_utilisateur`
--
ALTER TABLE `role_utilisateur`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `seance`
--
ALTER TABLE `seance`
  MODIFY `id_seance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type_seance`
--
ALTER TABLE `type_seance`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `fk_completer_seance` FOREIGN KEY (`id_seance`) REFERENCES `seance` (`id_seance`),
  ADD CONSTRAINT `fk_noter_eleve` FOREIGN KEY (`id_eleve`) REFERENCES `eleve` (`id_eleve`);

--
-- Contraintes pour la table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `fk_appartenir_classe` FOREIGN KEY (`id_classe`) REFERENCES `classe` (`id_classe`);

--
-- Contraintes pour la table `participer`
--
ALTER TABLE `participer`
  ADD CONSTRAINT `fk_participer_eleve` FOREIGN KEY (`id_eleve`) REFERENCES `eleve` (`id_eleve`),
  ADD CONSTRAINT `fk_participer_seance` FOREIGN KEY (`id_seance`) REFERENCES `seance` (`id_seance`);

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `fk_detailler_type` FOREIGN KEY (`id_type`) REFERENCES `type_seance` (`id_type`),
  ADD CONSTRAINT `fk_diriger_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_posseder_role` FOREIGN KEY (`id_role`) REFERENCES `role_utilisateur` (`id_role`);

CREATE USER 'modo'@'%' identified by '1234';

GRANT SELECT ON base_scolaire . * TO 'modo'@'%';
GRANT INSERT ON base_scolaire . participer TO 'modo'@'%';
GRANT INSERT ON base_scolaire . seance TO 'modo'@'%';
GRANT INSERT ON base_scolaire . detail TO 'modo'@'%';
GRANT DELETE ON base_scolaire . participer TO 'modo'@'%';
FLUSH PRIVILEGES;

CREATE VIEW vwliste_seance AS
SELECT nom_seance AS Seance , 
date_seance AS "Date", 
nom_type AS "Type", 
concat(nom_utilisateur," ",prenom_utilisateur) AS Utilisateur
FROM seance INNER JOIN type_seance 
ON seance.id_seance = type_seance.id_type INNER JOIN utilisateur
ON seance.id_seance = utilisateur.id_utilisateur GROUP BY seance.id;