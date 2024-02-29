-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 28 fév. 2024 à 15:03
-- Version du serveur : 10.5.20-MariaDB
-- Version de PHP : 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id21932715_good_cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `tva` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `update_dat` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `name`, `type_id`, `country`, `tva`, `created_at`, `update_dat`) VALUES
(1, 'Becode', NULL, 'Belgique', 'BE0012345678', '2024-02-28 14:23:33', '2024-02-28 14:23:33'),
(2, 'InnovateTech Solutions', NULL, 'Belgique', 'BE0023456789', '2024-02-28 14:24:22', '2024-02-28 14:24:22'),
(3, 'BlueSky Enterprises', NULL, 'Belgique', 'BE0034567890', '2024-02-28 14:24:22', '2024-02-28 14:24:22'),
(4, 'Quantum Dynamics Ltd.', NULL, 'Espagne', 'ES0045678901', '2024-02-28 14:25:25', '2024-02-28 14:25:25'),
(5, 'VistaCraft Innovations', NULL, 'Espagne', 'ES0056789012', '2024-02-28 14:25:25', '2024-02-28 14:25:25'),
(6, 'StellarSynth Technologies', NULL, 'Espagne', 'ES0067890123', '2024-02-28 14:26:49', '2024-02-28 14:26:49'),
(7, 'Nexus Ventures Group', NULL, 'Lituanie', 'BE0078901234', '2024-02-28 14:26:49', '2024-02-28 14:26:49'),
(8, 'AlphaMatrix Solutions', NULL, 'Lituanie', 'LT0089012345', '2024-02-28 14:27:54', '2024-02-28 15:03:06'),
(9, 'Zenith Global Innovations', NULL, 'Lituanie', 'LT0090123456', '2024-02-28 14:27:54', '2024-02-28 14:27:54'),
(10, 'Horizon Nexus Industries', NULL, 'Allemagne', 'DE0011122334', '2024-02-28 14:28:42', '2024-02-28 14:28:42'),
(11, 'FusionWave Systems', NULL, 'Allemagne', 'DE0012233445', '2024-02-28 14:28:42', '2024-02-28 14:28:42');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `company_id`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Alice Dubois', 'alice.dubois@becode.be', 1, '071/ 31 32 33', '2024-02-28 14:31:31', '2024-02-28 14:31:31'),
(2, 'Julien Martin', 'julien.martin@innovtech.be', 2, '071/ 43 65 87', '2024-02-28 14:31:31', '2024-02-28 14:31:31'),
(3, 'Emilie Leroy', 'emilie.leroy@bsky.be', 3, '071/54 21 93', '2024-02-28 14:33:40', '2024-02-28 14:33:40'),
(4, 'Nicolas Lefevre', 'nicolas.lefevre@qdynamics.be', 4, '054/ 43 65 90', '2024-02-28 14:33:40', '2024-02-28 14:33:40'),
(5, 'Laura Dupont', 'laura.dupont@vci.es', 5, '054/ 54 67 76', '2024-02-28 14:35:50', '2024-02-28 14:35:50'),
(6, 'Victor Lambert', 'victor.lambert@sstn.es', 6, '054/ 32 14 23', '2024-02-28 14:35:50', '2024-02-28 14:35:50'),
(7, 'Chloé Rousseau', 'chloé.rousseau@nexusgroup.lt', 7, '099/ 56 43 78', '2024-02-28 14:38:50', '2024-02-28 14:38:50'),
(8, 'Gabriel Moreau', 'gabriel.moreau@ams.lt', 8, '099/ 78 93 42', '2024-02-28 14:38:50', '2024-02-28 14:38:50'),
(9, 'Emma Berger', 'emma.berger@globalinnov.lt', 9, '099/ 89 97 54', '2024-02-28 14:42:39', '2024-02-28 14:42:39'),
(10, 'Mathis Perrin', 'mathis.perrin@hni.de', 10, '010/ 44 55 77', '2024-02-28 14:42:39', '2024-02-28 14:42:39'),
(11, 'Alexis Lamenace', 'alexis.lamenace@fusionwsyst.de', 11, '010/ 87 54 24', '2024-02-28 14:43:46', '2024-02-28 14:43:46');

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(11) NOT NULL,
  `ref` varchar(50) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `invoices`
--

INSERT INTO `invoices` (`id`, `ref`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'INV2022001', 1, '2024-02-28 14:54:04', '2024-02-28 14:54:04'),
(2, 'FACT-458912', 2, '2024-02-28 14:54:04', '2024-02-28 14:54:04'),
(3, '2022-FAC-00789', 3, '2024-02-28 14:54:30', '2024-02-28 14:54:30'),
(4, 'RF210356', 4, '2024-02-28 14:54:30', '2024-02-28 14:54:30'),
(5, 'INV-12345', 5, '2024-02-28 14:55:29', '2024-02-28 14:55:29'),
(6, 'FACTURE-89021', 6, '2024-02-28 14:55:29', '2024-02-28 14:55:29'),
(7, '2022-INV-5432', 7, '2024-02-28 14:55:48', '2024-02-28 14:55:48'),
(8, 'RF-789012', 8, '2024-02-28 14:55:48', '2024-02-28 14:55:48'),
(9, 'INV2202-67890', 9, '2024-02-28 14:56:06', '2024-02-28 14:56:06'),
(10, 'FACT-112233', 10, '2024-02-28 14:56:06', '2024-02-28 14:56:06'),
(11, 'INV-87432', 11, '2024-02-28 14:56:39', '2024-02-28 14:56:39');

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `id` int(11) NOT NULL,
  `permission_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `role_id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Jean-Christian', 'Ranu', NULL, 'j-c.ranu@cogip.be', 'v4N1qu3rT4M3r3', '2024-02-28 14:48:47', '2024-02-28 14:48:47'),
(2, 'Harry', 'Potter', NULL, 'harry.potter@cogip.be', 'j3V1ss0usl35c4l13r', '2024-02-28 14:48:47', '2024-02-28 14:48:47');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type_id` (`type_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Index pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_id` (`permission_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Contraintes pour la table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD CONSTRAINT `roles_permissions_ibfk_1` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `roles_permissions_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
