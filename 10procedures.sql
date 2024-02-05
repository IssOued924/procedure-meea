-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 29 jan. 2024 à 06:49
-- Version du serveur :  8.0.35-0ubuntu0.20.04.1
-- Version de PHP : 8.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `10procedures`
--

-- --------------------------------------------------------

--
-- Structure de la table `affectations`
--

CREATE TABLE `affectations` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `affectation_p001_s`
--

CREATE TABLE `affectation_p001_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p001_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `affectation_p0010_s`
--

CREATE TABLE `affectation_p0010_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p0010_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `affectation_p0011_s`
--

CREATE TABLE `affectation_p0011_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p0011_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `affectation_p0012_s`
--

CREATE TABLE `affectation_p0012_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p0012_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `affectation_p002_s`
--

CREATE TABLE `affectation_p002_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p002_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `affectation_p003_s`
--

CREATE TABLE `affectation_p003_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p003_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `affectation_p004_s`
--

CREATE TABLE `affectation_p004_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p004_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `affectation_p005_s`
--

CREATE TABLE `affectation_p005_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p005_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `affectation_p006_s`
--

CREATE TABLE `affectation_p006_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p006_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `affectation_p007_s`
--

CREATE TABLE `affectation_p007_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p007_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `affectation_p008_s`
--

CREATE TABLE `affectation_p008_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p008_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `affectation_p009_s`
--

CREATE TABLE `affectation_p009_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p009_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE `agents` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fonction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_affectation` date DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `date_prise_service` date DEFAULT NULL,
  `lieu_naissance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `agents`
--

INSERT INTO `agents` (`uuid`, `matricule`, `nom`, `prenom`, `telephone`, `fonction`, `date_affectation`, `date_naissance`, `date_prise_service`, `lieu_naissance`, `service_id`, `created_at`, `updated_at`, `role_id`, `created_by`, `updated_by`, `deleted_by`, `province_id`, `commune_id`) VALUES
('228b55e6-9bde-4ed3-9bdd-82cf5dc59560', '782255G', 'MEEA', 'MEEA', NULL, NULL, NULL, NULL, NULL, NULL, '9a35c182-d21f-4383-a761-963037257f06', '2023-12-26 09:48:26', '2023-12-26 09:48:26', 'c413726f-038e-492b-a569-6a2d4f7dd001', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `base_juridiques`
--

CREATE TABLE `base_juridiques` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_usager` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_p001_s`
--

CREATE TABLE `commentaire_p001_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p001_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_p0010_s`
--

CREATE TABLE `commentaire_p0010_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p0010_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_p0011_s`
--

CREATE TABLE `commentaire_p0011_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p0011_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_p0012_s`
--

CREATE TABLE `commentaire_p0012_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p0012_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_p002_s`
--

CREATE TABLE `commentaire_p002_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p002_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_p003_s`
--

CREATE TABLE `commentaire_p003_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p003_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_p004_s`
--

CREATE TABLE `commentaire_p004_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p004_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_p005_s`
--

CREATE TABLE `commentaire_p005_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p005_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_p006_s`
--

CREATE TABLE `commentaire_p006_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p006_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_p007_s`
--

CREATE TABLE `commentaire_p007_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p007_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_p008_s`
--

CREATE TABLE `commentaire_p008_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p008_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_p009_s`
--

CREATE TABLE `commentaire_p009_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p009_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `communes`
--

CREATE TABLE `communes` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `communes`
--

INSERT INTO `communes` (`uuid`, `libelle`, `province_id`, `statut`, `created_at`, `updated_at`, `code`, `created_by`, `updated_by`, `deleted_by`) VALUES
('003b7693-cccc-444d-95ea-18895c3af6a7', 'Boromo', '0db972e1-8708-43bb-8df9-6c092c9c2524', 0, '2023-12-26 09:47:47', '2023-12-26 09:47:47', NULL, NULL, NULL, NULL),
('0047b8ad-6e94-413c-9837-a80e9c155e79', 'Bobo Dioulasso', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 1, '2023-12-26 09:48:11', '2023-12-26 09:48:11', NULL, NULL, NULL, NULL),
('00d0a29f-44ac-498a-9e8f-aa7e5168b799', 'Tambaga', 'dc1e28ba-2a1d-4278-9dc9-68933c67b35d', 0, '2023-12-26 09:48:09', '2023-12-26 09:48:09', NULL, NULL, NULL, NULL),
('02e8710d-3f70-495c-a9b1-941a14b36ff1', 'Pabre', '6482443e-b1d9-4a05-839d-b72fb121ea20', 0, '2023-12-26 09:47:53', '2023-12-26 09:47:53', NULL, NULL, NULL, NULL),
('03624cd3-cb67-42a5-bd29-79dd3ad714ed', 'Baraboule', '5d3b5ced-d973-444f-960f-1c69ac131b8c', 0, '2023-12-26 09:48:20', '2023-12-26 09:48:20', NULL, NULL, NULL, NULL),
('04825c04-a749-48d3-9c2c-af9397f5eacb', 'Liptougou', '8db0e601-c95b-4ddb-997a-ee22b2bcb6d1', 0, '2023-12-26 09:48:06', '2023-12-26 09:48:06', NULL, NULL, NULL, NULL),
('05124fc3-3a00-493c-866b-4087428da4c8', 'Balave', '98115280-064d-410b-a972-772f67fd203b', 0, '2023-12-26 09:47:47', '2023-12-26 09:47:47', NULL, NULL, NULL, NULL),
('062f64a6-709a-4907-9637-4ace34b7b046', 'Partiaga', 'dc1e28ba-2a1d-4278-9dc9-68933c67b35d', 0, '2023-12-26 09:48:09', '2023-12-26 09:48:09', NULL, NULL, NULL, NULL),
('064bfa4f-3b5f-45ab-bbdc-0835f832b3be', 'Dokuy', 'dcbea669-7d63-4045-a143-a77e922013b2', 0, '2023-12-26 09:47:48', '2023-12-26 09:47:48', NULL, NULL, NULL, NULL),
('0780edb2-4480-4194-9378-d94a065d265e', 'Matiacoali', '5338147d-e318-4e21-82ba-2c4a22b72b7a', 0, '2023-12-26 09:48:07', '2023-12-26 09:48:07', NULL, NULL, NULL, NULL),
('097c9b20-14cd-4ce6-830e-07b28995449b', 'Andemtenga', '529731d9-4207-4ea2-b4b1-c18c7473ae84', 0, '2023-12-26 09:47:56', '2023-12-26 09:47:56', NULL, NULL, NULL, NULL),
('0a677699-d203-4f3f-b150-c7244347feeb', 'Dablo', '39aba444-6835-4920-a1e1-d7a6fef54702', 0, '2023-12-26 09:47:59', '2023-12-26 09:47:59', NULL, NULL, NULL, NULL),
('0a8a282a-f510-4cf4-b5c5-2e813f709396', 'Titabe', 'e8180ac5-cc07-4213-a2dd-9fb914a4707b', 0, '2023-12-26 09:48:21', '2023-12-26 09:48:21', NULL, NULL, NULL, NULL),
('0ab3751d-0b92-48ce-9e2a-4a0d8b5fc1a3', 'Solenzo', '98115280-064d-410b-a972-772f67fd203b', 0, '2023-12-26 09:47:48', '2023-12-26 09:47:48', NULL, NULL, NULL, NULL),
('0adf20a2-3bc2-4d82-a19c-3df17d1ce27d', 'Bourzanga', 'eb28755d-87a7-4256-be2a-8971436b81d5', 0, '2023-12-26 09:47:57', '2023-12-26 09:47:57', NULL, NULL, NULL, NULL),
('0b0a0195-6be6-4416-82a4-7f12f1bf3ee6', 'Bana', '0db972e1-8708-43bb-8df9-6c092c9c2524', 0, '2023-12-26 09:47:47', '2023-12-26 09:47:47', NULL, NULL, NULL, NULL),
('0c342ab4-be73-4c2f-a904-cf45767b4a94', 'Dande', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 0, '2023-12-26 09:48:09', '2023-12-26 09:48:09', NULL, NULL, NULL, NULL),
('0d8db885-0fea-40b6-b39b-2931d3781c03', 'Legmoin', 'c659b48f-1b73-4272-ac87-5d3e3f4412ae', 0, '2023-12-26 09:48:23', '2023-12-26 09:48:23', NULL, NULL, NULL, NULL),
('0eb65cfb-088d-4160-9f3b-031a7ec31e08', 'Pouni', '2c4f618d-bfcc-451b-997c-8cb33f9435f6', 0, '2023-12-26 09:48:02', '2023-12-26 09:48:02', NULL, NULL, NULL, NULL),
('0eb76d91-6ef5-41d3-88a4-76feb8998e79', 'Banh', '8c6431d3-f1c7-4cc0-a2e3-5b65938443c6', 0, '2023-12-26 09:48:13', '2023-12-26 09:48:13', NULL, NULL, NULL, NULL),
('0ecca0a7-8ae0-42ca-ae9a-fc79bc225d5c', 'Sapone', '3d652b01-3d93-42c6-a373-8c5597716f4e', 0, '2023-12-26 09:48:04', '2023-12-26 09:48:04', NULL, NULL, NULL, NULL),
('0f614d16-6e37-4684-af11-38ac589f56a9', 'Mane', '39aba444-6835-4920-a1e1-d7a6fef54702', 0, '2023-12-26 09:47:59', '2023-12-26 09:47:59', NULL, NULL, NULL, NULL),
('0fc192e4-bb0f-4380-af5c-7d1acd840ef5', 'Diapaga', 'dc1e28ba-2a1d-4278-9dc9-68933c67b35d', 0, '2023-12-26 09:48:08', '2023-12-26 09:48:08', NULL, NULL, NULL, NULL),
('108704ed-61e2-46c4-9e9f-4b1229620cf6', 'Binde', '80a9960e-c749-40f2-a406-b3ea1ca3a351', 0, '2023-12-26 09:48:05', '2023-12-26 09:48:05', NULL, NULL, NULL, NULL),
('113657fb-e955-41d2-9928-1a2c3a606e6e', 'Bouroum-bouroum', '017cd7b2-4acb-4b6f-9dd7-cc15c69487d6', 0, '2023-12-26 09:48:24', '2023-12-26 09:48:24', NULL, NULL, NULL, NULL),
('113c2724-1acf-419a-9fb3-ecc02418490d', 'Wolokonto', 'b9ba3f8c-5e22-4c3a-87ae-68823723bca0', 0, '2023-12-26 09:47:53', '2023-12-26 09:47:53', NULL, NULL, NULL, NULL),
('12216afe-4e97-43d1-b80e-5f8c6ce5f2f5', 'Gounghin', '529731d9-4207-4ea2-b4b1-c18c7473ae84', 0, '2023-12-26 09:47:56', '2023-12-26 09:47:56', NULL, NULL, NULL, NULL),
('12c49f1f-1545-42d5-8fde-00df8cc5de82', 'Sanaba', '98115280-064d-410b-a972-772f67fd203b', 0, '2023-12-26 09:47:48', '2023-12-26 09:47:48', NULL, NULL, NULL, NULL),
('13fc9946-7991-4f45-a1fa-882d5bb1b08b', 'Gomponsom', '54ef6dcc-cc6a-4421-8a4b-99cc606606ff', 0, '2023-12-26 09:48:14', '2023-12-26 09:48:14', NULL, NULL, NULL, NULL),
('142232e6-d7f5-47bf-b5e7-406cc6b1cf7d', 'Fara', '0db972e1-8708-43bb-8df9-6c092c9c2524', 0, '2023-12-26 09:47:47', '2023-12-26 09:47:47', NULL, NULL, NULL, NULL),
('1437bfb2-85ac-4cc0-821a-234921c47854', 'Zeguedeguin', '04e9d9f7-c1cf-49cd-8607-0e0327fc816a', 0, '2023-12-26 09:47:58', '2023-12-26 09:47:58', NULL, NULL, NULL, NULL),
('153137b4-73a2-47f2-8de5-1b20fa156dcf', 'Gossina', '8034d22d-8ef8-458d-a400-609f57c76115', 0, '2023-12-26 09:47:50', '2023-12-26 09:47:50', NULL, NULL, NULL, NULL),
('1561f274-db4d-4e28-a1e1-53a5d7dc17a2', 'Niou', 'ecf35f08-f676-4b4b-a2cb-6a65052deab1', 0, '2023-12-26 09:48:17', '2023-12-26 09:48:17', NULL, NULL, NULL, NULL),
('16225705-070f-401c-b9fc-96ae285aa133', 'Lena', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 0, '2023-12-26 09:48:10', '2023-12-26 09:48:10', NULL, NULL, NULL, NULL),
('17ee0135-0f0f-4cbc-8d12-6b45717cb194', 'Tansarga', 'dc1e28ba-2a1d-4278-9dc9-68933c67b35d', 0, '2023-12-26 09:48:09', '2023-12-26 09:48:09', NULL, NULL, NULL, NULL),
('195d6b31-2a8d-464e-b8cb-3dd7651d5485', 'Arbinda', '5d3b5ced-d973-444f-960f-1c69ac131b8c', 0, '2023-12-26 09:48:20', '2023-12-26 09:48:20', NULL, NULL, NULL, NULL),
('1a008d77-f2b2-47ae-b782-24fab263ebf4', 'Bassi', '650d00e0-a5f0-45f7-a721-0481710b2072', 0, '2023-12-26 09:48:16', '2023-12-26 09:48:16', NULL, NULL, NULL, NULL),
('1a2dabf9-379d-42bb-87af-7bea8406aad3', 'Mogtedo', 'b102b659-128b-4e04-b5cd-0d41f42f9e27', 0, '2023-12-26 09:48:17', '2023-12-26 09:48:17', NULL, NULL, NULL, NULL),
('1c1ff3b0-98cf-4dac-9610-eca603a45647', 'Boala', '04e9d9f7-c1cf-49cd-8607-0e0327fc816a', 0, '2023-12-26 09:47:58', '2023-12-26 09:47:58', NULL, NULL, NULL, NULL),
('1c8457e9-a919-4a09-bc28-05ab2b39688f', 'Zonse', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:55', '2023-12-26 09:47:55', NULL, NULL, NULL, NULL),
('1c883154-9f1d-403f-83a4-efa93520bc1d', 'Arbolle', '54ef6dcc-cc6a-4421-8a4b-99cc606606ff', 0, '2023-12-26 09:48:13', '2023-12-26 09:48:13', NULL, NULL, NULL, NULL),
('1cb906dd-08c8-4c38-9634-7b8e276f3e6e', 'Kayan', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:11', '2023-12-26 09:48:11', NULL, NULL, NULL, NULL),
('1ea37966-ecc4-41d3-add4-15bfa3206602', 'Bousse', 'ecf35f08-f676-4b4b-a2cb-6a65052deab1', 0, '2023-12-26 09:48:17', '2023-12-26 09:48:17', NULL, NULL, NULL, NULL),
('1ea72c31-4a31-44d9-b9fd-6fa41bb64e82', 'Zogore', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:16', '2023-12-26 09:48:16', NULL, NULL, NULL, NULL),
('1fdeee79-dd30-4c75-a66c-a2420c4e112e', 'Solle', '8c6431d3-f1c7-4cc0-a2e3-5b65938443c6', 0, '2023-12-26 09:48:13', '2023-12-26 09:48:13', NULL, NULL, NULL, NULL),
('1ffb1d0e-9116-46e2-b092-dabf3d667455', 'Saaba', '6482443e-b1d9-4a05-839d-b72fb121ea20', 0, '2023-12-26 09:47:53', '2023-12-26 09:47:53', NULL, NULL, NULL, NULL),
('230f4d87-504b-4eff-a9e3-9db68da08d46', 'Pama', '4c8d6dbe-4950-4502-835b-78c0e71f502c', 0, '2023-12-26 09:48:08', '2023-12-26 09:48:08', NULL, NULL, NULL, NULL),
('231a8e65-b2e6-41d7-8226-febcb992d74d', 'Pella', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:00', '2023-12-26 09:48:00', NULL, NULL, NULL, NULL),
('23892d62-1d40-46fd-b582-1c2f3fea3990', 'Diapangou', '5338147d-e318-4e21-82ba-2c4a22b72b7a', 0, '2023-12-26 09:48:07', '2023-12-26 09:48:07', NULL, NULL, NULL, NULL),
('23d9b3c0-4322-4bbd-b453-a4f25e70dade', 'Bani', 'fbab03a0-6074-4b9b-9d43-061ef0ea40ba', 0, '2023-12-26 09:48:19', '2023-12-26 09:48:19', NULL, NULL, NULL, NULL),
('242762f4-fe36-4b2a-b7b0-e31a5791beec', 'Bomborokuy', 'dcbea669-7d63-4045-a143-a77e922013b2', 0, '2023-12-26 09:47:48', '2023-12-26 09:47:48', NULL, NULL, NULL, NULL),
('2769cf7a-9c01-4e00-b44f-e4a6e8b35b43', 'Ouargaye', '6b8792f7-79bf-432b-9ea5-78f2f2299cef', 0, '2023-12-26 09:47:55', '2023-12-26 09:47:55', NULL, NULL, NULL, NULL),
('285e466e-19ca-4815-a427-d4bd7769f050', 'Djibo', '5d3b5ced-d973-444f-960f-1c69ac131b8c', 0, '2023-12-26 09:48:20', '2023-12-26 09:48:20', NULL, NULL, NULL, NULL),
('28a59a83-c527-433c-8456-ae32b15e413d', 'Leba', '650d00e0-a5f0-45f7-a721-0481710b2072', 0, '2023-12-26 09:48:16', '2023-12-26 09:48:16', NULL, NULL, NULL, NULL),
('29cd1c39-f6e0-4d2c-999e-06c46ebcdff3', 'Padema', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 0, '2023-12-26 09:48:10', '2023-12-26 09:48:10', NULL, NULL, NULL, NULL),
('2aaa34e9-56f5-4042-bcb5-4803e37d51e8', 'Dourtenga', '6b8792f7-79bf-432b-9ea5-78f2f2299cef', 0, '2023-12-26 09:47:55', '2023-12-26 09:47:55', NULL, NULL, NULL, NULL),
('2bc3c188-1588-4b6f-935e-c4348ffa13ce', 'Guiaro', 'd4aa516b-7c48-48f3-94ff-9e9b3e43780e', 0, '2023-12-26 09:48:05', '2023-12-26 09:48:05', NULL, NULL, NULL, NULL),
('2c252882-951d-4d85-b388-0ae7a9731d77', 'Boudry', 'b102b659-128b-4e04-b5cd-0d41f42f9e27', 0, '2023-12-26 09:48:16', '2023-12-26 09:48:16', NULL, NULL, NULL, NULL),
('2cb4ec2b-93f9-4c85-ba34-f6a0de1a9a4c', 'Gaoua', '017cd7b2-4acb-4b6f-9dd7-cc15c69487d6', 0, '2023-12-26 09:48:24', '2023-12-26 09:48:24', NULL, NULL, NULL, NULL),
('2cf520b4-3872-4db6-b596-98e76eb7b8e3', 'Faramana', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 0, '2023-12-26 09:48:09', '2023-12-26 09:48:09', NULL, NULL, NULL, NULL),
('2d216fa6-718a-41b7-b5b9-28796810226d', 'Banfora', 'c2861f17-ecf6-45e7-b008-92e578d5d029', 0, '2023-12-26 09:47:51', '2023-12-26 09:47:51', NULL, NULL, NULL, NULL),
('2de8018c-4b69-445f-8394-e60465e1dee9', 'Koti', 'e2b3ade4-6709-4c51-bae7-31128bf929ab', 0, '2023-12-26 09:48:13', '2023-12-26 09:48:13', NULL, NULL, NULL, NULL),
('2e103887-3b5c-44e4-9c3a-75b8cd0db595', 'Bakata', '3c537ca2-1494-43f5-b202-7e9454b5858f', 0, '2023-12-26 09:48:03', '2023-12-26 09:48:03', NULL, NULL, NULL, NULL),
('3039a4a1-7993-4cd5-aa8e-f0c31c7a7d65', 'Toma', '8034d22d-8ef8-458d-a400-609f57c76115', 0, '2023-12-26 09:47:50', '2023-12-26 09:47:50', NULL, NULL, NULL, NULL),
('304982b7-f388-40c9-86c4-cd4cbd911b74', 'Yako', '54ef6dcc-cc6a-4421-8a4b-99cc606606ff', 0, '2023-12-26 09:48:14', '2023-12-26 09:48:14', NULL, NULL, NULL, NULL),
('32586bcf-d602-4198-a880-74da03ac98ab', 'Seytenga', 'fbab03a0-6074-4b9b-9d43-061ef0ea40ba', 0, '2023-12-26 09:48:20', '2023-12-26 09:48:20', NULL, NULL, NULL, NULL),
('337d558e-bd8f-4aa6-8276-3c670a9461ae', 'Poa', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:00', '2023-12-26 09:48:00', NULL, NULL, NULL, NULL),
('33eef0ea-11de-46b5-8f59-c9e6d5ab2d57', 'Kindi', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:00', '2023-12-26 09:48:00', NULL, NULL, NULL, NULL),
('352a373d-c1bb-4a3c-9190-409c49904c2a', 'Banzon', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:11', '2023-12-26 09:48:11', NULL, NULL, NULL, NULL),
('3653276b-d924-4906-a01e-a2f19466e665', 'Kourinion', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:11', '2023-12-26 09:48:11', NULL, NULL, NULL, NULL),
('36982561-4f28-45b7-b381-d8c482e62c2b', 'Soudougui', '6b8792f7-79bf-432b-9ea5-78f2f2299cef', 0, '2023-12-26 09:47:55', '2023-12-26 09:47:55', NULL, NULL, NULL, NULL),
('36e40be5-c79e-4623-8636-02009ba7b577', 'Founzan', 'e2b3ade4-6709-4c51-bae7-31128bf929ab', 0, '2023-12-26 09:48:12', '2023-12-26 09:48:12', NULL, NULL, NULL, NULL),
('38e95aa8-0334-402c-8653-2bdd71a86d9e', 'Gomboro', '188761e2-fa5e-473f-a3bb-f8f818dce8da', 0, '2023-12-26 09:47:50', '2023-12-26 09:47:50', NULL, NULL, NULL, NULL),
('3911fa01-8470-4c41-a783-5d89c2be9021', 'Zitenga', '57471fa2-d305-4653-a8ca-c1bfec85cf1d', 0, '2023-12-26 09:48:18', '2023-12-26 09:48:18', NULL, NULL, NULL, NULL),
('394be600-8f21-487b-9a94-ca55114163ec', 'Zawara', '2c4f618d-bfcc-451b-997c-8cb33f9435f6', 0, '2023-12-26 09:48:02', '2023-12-26 09:48:02', NULL, NULL, NULL, NULL),
('39bd9e69-2668-4dea-9439-8597b264f170', 'Gorom-gorom', '9206b213-50d9-47f4-abdb-2648721bc8b8', 0, '2023-12-26 09:48:19', '2023-12-26 09:48:19', NULL, NULL, NULL, NULL),
('3a76acd8-17a4-4581-9634-133754bf8747', 'Kampti', '017cd7b2-4acb-4b6f-9dd7-cc15c69487d6', 0, '2023-12-26 09:48:24', '2023-12-26 09:48:24', NULL, NULL, NULL, NULL),
('3b1489ec-ebae-4687-bdc4-e07afaa85cf7', 'Titao', '8c6431d3-f1c7-4cc0-a2e3-5b65938443c6', 0, '2023-12-26 09:48:13', '2023-12-26 09:48:13', NULL, NULL, NULL, NULL),
('3ba23038-c8d6-446f-ad54-a2ac0977c25b', 'Dakoro', 'b9ba3f8c-5e22-4c3a-87ae-68823723bca0', 0, '2023-12-26 09:47:52', '2023-12-26 09:47:52', NULL, NULL, NULL, NULL),
('3bcf7937-1260-4fac-a235-03c838a27468', 'Kpuere', 'c659b48f-1b73-4272-ac87-5d3e3f4412ae', 0, '2023-12-26 09:48:23', '2023-12-26 09:48:23', NULL, NULL, NULL, NULL),
('3c3ef90c-c8c9-4d1d-a80c-f18c4c59d727', 'Koutougou', '5d3b5ced-d973-444f-960f-1c69ac131b8c', 0, '2023-12-26 09:48:20', '2023-12-26 09:48:20', NULL, NULL, NULL, NULL),
('3c63e9d9-5de4-456b-9844-c0a0b13df4d5', 'Zabre', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:55', '2023-12-26 09:47:55', NULL, NULL, NULL, NULL),
('3c756a19-9f05-4905-9b90-6d05a9954f07', 'Tougan', '188761e2-fa5e-473f-a3bb-f8f818dce8da', 0, '2023-12-26 09:47:51', '2023-12-26 09:47:51', NULL, NULL, NULL, NULL),
('3d4de735-b483-4d3e-9b65-d5b443ab2735', 'Koudougou', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:00', '2023-12-26 09:48:00', NULL, NULL, NULL, NULL),
('3da56641-739f-4b4a-8c54-af00aba0ce24', 'Sindou', 'b9ba3f8c-5e22-4c3a-87ae-68823723bca0', 0, '2023-12-26 09:47:53', '2023-12-26 09:47:53', NULL, NULL, NULL, NULL),
('3e3c756a-d1ea-4ab7-b7c0-d3828c656918', 'Barani', 'dcbea669-7d63-4045-a143-a77e922013b2', 0, '2023-12-26 09:47:48', '2023-12-26 09:47:48', NULL, NULL, NULL, NULL),
('3ec3c6d7-5af4-423b-a578-c7bef1ad677b', 'Pilimpikou', '54ef6dcc-cc6a-4421-8a4b-99cc606606ff', 0, '2023-12-26 09:48:14', '2023-12-26 09:48:14', NULL, NULL, NULL, NULL),
('3f50b150-0f31-4dc3-9318-649a2ad4d13d', 'Cassou', '3c537ca2-1494-43f5-b202-7e9454b5858f', 0, '2023-12-26 09:48:03', '2023-12-26 09:48:03', NULL, NULL, NULL, NULL),
('3f6cd09e-cf4e-4d70-a5e1-147fd37c8668', 'Peni', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 0, '2023-12-26 09:48:10', '2023-12-26 09:48:10', NULL, NULL, NULL, NULL),
('3fd4238d-ad9e-4041-984a-0a700ae5a498', 'Dori', 'fbab03a0-6074-4b9b-9d43-061ef0ea40ba', 0, '2023-12-26 09:48:19', '2023-12-26 09:48:19', NULL, NULL, NULL, NULL),
('405fffa0-a5e0-45ac-8883-5a0bc2b7396f', 'Tenado', '2c4f618d-bfcc-451b-997c-8cb33f9435f6', 0, '2023-12-26 09:48:02', '2023-12-26 09:48:02', NULL, NULL, NULL, NULL),
('41004f9c-b97d-4281-ae25-b0a26c84b4d0', 'Boussoumah', '39aba444-6835-4920-a1e1-d7a6fef54702', 0, '2023-12-26 09:47:59', '2023-12-26 09:47:59', NULL, NULL, NULL, NULL),
('41481f30-bd3e-4d6d-b1f3-341f7f0672ba', 'Kombissiri', '3d652b01-3d93-42c6-a373-8c5597716f4e', 0, '2023-12-26 09:48:04', '2023-12-26 09:48:04', NULL, NULL, NULL, NULL),
('41f83729-a167-4014-8e19-7085ea5f65ce', 'Nobere', '80a9960e-c749-40f2-a406-b3ea1ca3a351', 0, '2023-12-26 09:48:06', '2023-12-26 09:48:06', NULL, NULL, NULL, NULL),
('44dbae9e-29b7-4bce-9a3b-a4237cdfeeee', 'Mangodara', 'c2861f17-ecf6-45e7-b008-92e578d5d029', 0, '2023-12-26 09:47:51', '2023-12-26 09:47:51', NULL, NULL, NULL, NULL),
('4510df92-241c-47ea-a1ec-30169c5f0a8b', 'Yaho', '0db972e1-8708-43bb-8df9-6c092c9c2524', 0, '2023-12-26 09:47:47', '2023-12-26 09:47:47', NULL, NULL, NULL, NULL),
('46378407-eb4a-4cf3-a715-b2f8da71d0cd', 'Leo', '8561b1e1-094f-44bb-9bcf-c165e276f8cb', 0, '2023-12-26 09:48:03', '2023-12-26 09:48:03', NULL, NULL, NULL, NULL),
('47345217-87de-42fd-948a-85c923be16c1', 'Boussouma', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:54', '2023-12-26 09:47:54', NULL, NULL, NULL, NULL),
('47430bbf-34c9-4227-87e7-23266d5ec571', 'Kaya', '39aba444-6835-4920-a1e1-d7a6fef54702', 0, '2023-12-26 09:47:59', '2023-12-26 09:47:59', NULL, NULL, NULL, NULL),
('4879343b-d225-480d-8477-d83d9be740cf', 'Rollo', 'eb28755d-87a7-4256-be2a-8971436b81d5', 0, '2023-12-26 09:47:57', '2023-12-26 09:47:57', NULL, NULL, NULL, NULL),
('48def19c-e199-4f68-9993-1fe3309f17e5', 'Iolonioro', '696a36cc-23f5-42d7-921c-118888cba93b', 0, '2023-12-26 09:48:22', '2023-12-26 09:48:22', NULL, NULL, NULL, NULL),
('49ecbb96-f947-4c8d-91b1-8d9860a8975a', 'Bissiga', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:54', '2023-12-26 09:47:54', NULL, NULL, NULL, NULL),
('4acb65dc-3cb2-41ef-b9ff-a0e8eb50200c', 'Dialgaye', '529731d9-4207-4ea2-b4b1-c18c7473ae84', 0, '2023-12-26 09:47:56', '2023-12-26 09:47:56', NULL, NULL, NULL, NULL),
('4aed0da7-01d7-4212-b088-0db4595c3338', 'Dapelogo', '57471fa2-d305-4653-a8ca-c1bfec85cf1d', 0, '2023-12-26 09:48:18', '2023-12-26 09:48:18', NULL, NULL, NULL, NULL),
('4b0ab7d1-8f80-4c46-8fa9-081ad33a3e97', 'Ouindigui', '8c6431d3-f1c7-4cc0-a2e3-5b65938443c6', 0, '2023-12-26 09:48:13', '2023-12-26 09:48:13', NULL, NULL, NULL, NULL),
('4b976f29-8870-44d3-8fc2-58cc6337f6df', 'Bagassi', '0db972e1-8708-43bb-8df9-6c092c9c2524', 0, '2023-12-26 09:47:47', '2023-12-26 09:47:47', NULL, NULL, NULL, NULL),
('4cde47a2-3f6b-4773-8086-881366a5af0d', 'Dissin', '29375a5c-641a-4a4c-b721-d1a5c065e844', 0, '2023-12-26 09:48:22', '2023-12-26 09:48:22', NULL, NULL, NULL, NULL),
('4cf2d341-4ec9-4362-93f2-3b510153e524', 'Ye', '8034d22d-8ef8-458d-a400-609f57c76115', 0, '2023-12-26 09:47:50', '2023-12-26 09:47:50', NULL, NULL, NULL, NULL),
('4d856e42-451b-4268-8c7a-e21f68dafd49', 'Boussera', '017cd7b2-4acb-4b6f-9dd7-cc15c69487d6', 0, '2023-12-26 09:48:24', '2023-12-26 09:48:24', NULL, NULL, NULL, NULL),
('4da08b9d-8117-4fa9-8a57-e5d539cf4d22', 'Tibga', '5338147d-e318-4e21-82ba-2c4a22b72b7a', 0, '2023-12-26 09:48:07', '2023-12-26 09:48:07', NULL, NULL, NULL, NULL),
('4ddda375-0ed6-4687-ae4a-4a592a7d00aa', 'Doumbala', 'dcbea669-7d63-4045-a143-a77e922013b2', 0, '2023-12-26 09:47:48', '2023-12-26 09:47:48', NULL, NULL, NULL, NULL),
('4f3641e2-b5a1-47bd-a8ce-2756d711733a', 'Niego', '29375a5c-641a-4a4c-b721-d1a5c065e844', 0, '2023-12-26 09:48:23', '2023-12-26 09:48:23', NULL, NULL, NULL, NULL),
('50288097-4e9d-4dcb-93b5-ad48c00433c5', 'Safane', 'cc8d0dd5-1d13-4c23-92c1-9306467ec8f1', 0, '2023-12-26 09:47:49', '2023-12-26 09:47:49', NULL, NULL, NULL, NULL),
('50c6af68-a3ea-43fd-a039-77415e9cd8cc', 'Tougo', '650d00e0-a5f0-45f7-a721-0481710b2072', 0, '2023-12-26 09:48:16', '2023-12-26 09:48:16', NULL, NULL, NULL, NULL),
('51037b19-fdd5-498a-b594-c211f2530cd8', 'Sindo', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:12', '2023-12-26 09:48:12', NULL, NULL, NULL, NULL),
('517aced4-b4a4-4ae0-ab8e-db2cddd7a85c', 'Guibare', 'eb28755d-87a7-4256-be2a-8971436b81d5', 0, '2023-12-26 09:47:57', '2023-12-26 09:47:57', NULL, NULL, NULL, NULL),
('51bb5a7a-f223-413a-93ed-5807decc4883', 'Yargatenga', '6b8792f7-79bf-432b-9ea5-78f2f2299cef', 0, '2023-12-26 09:47:56', '2023-12-26 09:47:56', NULL, NULL, NULL, NULL),
('52293034-9625-4b1c-83e7-69142cd326f1', 'Kando', '529731d9-4207-4ea2-b4b1-c18c7473ae84', 0, '2023-12-26 09:47:56', '2023-12-26 09:47:56', NULL, NULL, NULL, NULL),
('54a91a78-83ec-4e5e-8740-af6d2f09079e', 'Yaba', '8034d22d-8ef8-458d-a400-609f57c76115', 0, '2023-12-26 09:47:50', '2023-12-26 09:47:50', NULL, NULL, NULL, NULL),
('55220266-6c65-43b7-ba5e-ceaee9b1f220', 'Oula', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:15', '2023-12-26 09:48:15', NULL, NULL, NULL, NULL),
('56120d79-c69f-4466-bacc-aaae1e476e5d', 'Bane', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:54', '2023-12-26 09:47:54', NULL, NULL, NULL, NULL),
('568c047a-80d3-4c65-89ac-9226bea01fab', 'Sigle', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:01', '2023-12-26 09:48:01', NULL, NULL, NULL, NULL),
('5703b27d-2097-41cf-8149-411a99490c2f', 'Loumbila', '57471fa2-d305-4653-a8ca-c1bfec85cf1d', 0, '2023-12-26 09:48:18', '2023-12-26 09:48:18', NULL, NULL, NULL, NULL),
('572e5596-14be-4d45-b640-8b043a3a17fb', 'Poura', '0db972e1-8708-43bb-8df9-6c092c9c2524', 0, '2023-12-26 09:47:47', '2023-12-26 09:47:47', NULL, NULL, NULL, NULL),
('574a3815-91f7-447d-be73-e371be7bfa6f', 'Thion', '8db0e601-c95b-4ddb-997a-ee22b2bcb6d1', 0, '2023-12-26 09:48:07', '2023-12-26 09:48:07', NULL, NULL, NULL, NULL),
('57866a28-dc91-417e-98cc-3c796a54a343', 'Sourgou', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:01', '2023-12-26 09:48:01', NULL, NULL, NULL, NULL),
('582bf9a6-9547-48c8-a481-e4de8c9699eb', 'Kossouka', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:15', '2023-12-26 09:48:15', NULL, NULL, NULL, NULL),
('589ffdba-c992-4703-9d10-f3442dafa29b', 'Kelbo', '5d3b5ced-d973-444f-960f-1c69ac131b8c', 0, '2023-12-26 09:48:20', '2023-12-26 09:48:20', NULL, NULL, NULL, NULL),
('58a5507f-517d-4578-9f91-705f10d847eb', 'Koubri', '6482443e-b1d9-4a05-839d-b72fb121ea20', 0, '2023-12-26 09:47:53', '2023-12-26 09:47:53', NULL, NULL, NULL, NULL),
('59a94dc3-0b67-4dd6-bd02-b52edeeb1b9d', 'Madjoari', '4c8d6dbe-4950-4502-835b-78c0e71f502c', 0, '2023-12-26 09:48:08', '2023-12-26 09:48:08', NULL, NULL, NULL, NULL),
('59ed4ce6-c8ff-467f-874d-8bb89566cad7', 'Nanoro', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:00', '2023-12-26 09:48:00', NULL, NULL, NULL, NULL),
('5bc65fa4-02a9-49c5-a116-fbcb6304bddc', 'Pobe-mengao', '5d3b5ced-d973-444f-960f-1c69ac131b8c', 0, '2023-12-26 09:48:21', '2023-12-26 09:48:21', NULL, NULL, NULL, NULL),
('5be81b5c-c302-4c04-a674-4b500be51b5a', 'Didyr', '2c4f618d-bfcc-451b-997c-8cb33f9435f6', 0, '2023-12-26 09:48:01', '2023-12-26 09:48:01', NULL, NULL, NULL, NULL),
('5bfc741f-920e-4b10-8687-ecf2e695def6', 'Toeghin', 'ecf35f08-f676-4b4b-a2cb-6a65052deab1', 0, '2023-12-26 09:48:18', '2023-12-26 09:48:18', NULL, NULL, NULL, NULL),
('5c24d756-ef43-4ef0-b8f2-915643f62bef', 'Kantchari', 'dc1e28ba-2a1d-4278-9dc9-68933c67b35d', 0, '2023-12-26 09:48:08', '2023-12-26 09:48:08', NULL, NULL, NULL, NULL),
('5c32d444-c83a-4974-a229-885e9bed5885', 'Ramongo', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:01', '2023-12-26 09:48:01', NULL, NULL, NULL, NULL),
('5ca8b473-be77-42df-9719-27d8867ba2c4', 'Fo', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 0, '2023-12-26 09:48:09', '2023-12-26 09:48:09', NULL, NULL, NULL, NULL),
('5dc040f3-266e-4d1f-8c35-79e2f5ffb373', 'Tiebele', 'd4aa516b-7c48-48f3-94ff-9e9b3e43780e', 0, '2023-12-26 09:48:05', '2023-12-26 09:48:05', NULL, NULL, NULL, NULL),
('5dcbe82b-03e7-4fd9-abf8-01b4eb423842', 'Ouo', 'c2861f17-ecf6-45e7-b008-92e578d5d029', 0, '2023-12-26 09:47:51', '2023-12-26 09:47:51', NULL, NULL, NULL, NULL),
('5e475f9b-a2c7-49a9-ba71-ff776cc19283', 'Ziga', '39aba444-6835-4920-a1e1-d7a6fef54702', 0, '2023-12-26 09:48:00', '2023-12-26 09:48:00', NULL, NULL, NULL, NULL),
('5f1c825e-5d8d-471a-a371-2b628b01adf8', 'Oury', '0db972e1-8708-43bb-8df9-6c092c9c2524', 0, '2023-12-26 09:47:47', '2023-12-26 09:47:47', NULL, NULL, NULL, NULL),
('603faac0-1de7-41ff-9844-f5dc2d3a1e02', 'Ouessa', '29375a5c-641a-4a4c-b721-d1a5c065e844', 0, '2023-12-26 09:48:23', '2023-12-26 09:48:23', NULL, NULL, NULL, NULL),
('607f115f-91f6-43fc-b26b-2fad736ae175', 'Bagare', '54ef6dcc-cc6a-4421-8a4b-99cc606606ff', 0, '2023-12-26 09:48:13', '2023-12-26 09:48:13', NULL, NULL, NULL, NULL),
('6181d8b6-da66-499f-bff8-202c2db75e36', 'Yonde', '6b8792f7-79bf-432b-9ea5-78f2f2299cef', 0, '2023-12-26 09:47:56', '2023-12-26 09:47:56', NULL, NULL, NULL, NULL),
('619486a9-3dc8-40ce-9b50-1483356091ba', 'To', '8561b1e1-094f-44bb-9bcf-c165e276f8cb', 0, '2023-12-26 09:48:03', '2023-12-26 09:48:03', NULL, NULL, NULL, NULL),
('62a78fb7-9e24-4a9b-b039-445114cd305a', 'Yamba', '5338147d-e318-4e21-82ba-2c4a22b72b7a', 0, '2023-12-26 09:48:07', '2023-12-26 09:48:07', NULL, NULL, NULL, NULL),
('62eb76e0-0c5f-46ec-9a9a-5fa2dbb7e706', 'Nagreongo', '57471fa2-d305-4653-a8ca-c1bfec85cf1d', 0, '2023-12-26 09:48:18', '2023-12-26 09:48:18', NULL, NULL, NULL, NULL),
('634cc24f-9077-44c8-b0a9-234c490c83b5', 'Kona', 'cc8d0dd5-1d13-4c23-92c1-9306467ec8f1', 0, '2023-12-26 09:47:49', '2023-12-26 09:47:49', NULL, NULL, NULL, NULL),
('635a9df7-51fc-4a5b-92b1-b4c9c7bc47e3', 'Gourcy', '650d00e0-a5f0-45f7-a721-0481710b2072', 0, '2023-12-26 09:48:16', '2023-12-26 09:48:16', NULL, NULL, NULL, NULL),
('6678fb66-efb6-4ea0-b1e6-d322fe8bb98b', 'Barga', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:14', '2023-12-26 09:48:14', NULL, NULL, NULL, NULL),
('66ff75ef-b33e-46a5-bd3c-fc8c23b61004', 'Godyr', '2c4f618d-bfcc-451b-997c-8cb33f9435f6', 0, '2023-12-26 09:48:02', '2023-12-26 09:48:02', NULL, NULL, NULL, NULL),
('67e55968-740a-4d61-83f4-5d9d5bc0320d', 'Siby', '0db972e1-8708-43bb-8df9-6c092c9c2524', 0, '2023-12-26 09:47:47', '2023-12-26 09:47:47', NULL, NULL, NULL, NULL),
('68b2027a-0769-48c3-86b2-6e26087eac89', 'Toeni', '188761e2-fa5e-473f-a3bb-f8f818dce8da', 0, '2023-12-26 09:47:51', '2023-12-26 09:47:51', NULL, NULL, NULL, NULL),
('69932e7a-11c5-4afc-866e-0bfebb6dff51', 'Tiankoura', '696a36cc-23f5-42d7-921c-118888cba93b', 0, '2023-12-26 09:48:22', '2023-12-26 09:48:22', NULL, NULL, NULL, NULL),
('69c32db1-68bc-4bb8-bc9e-7e0dd1bd9202', 'Ouahigouya', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:15', '2023-12-26 09:48:15', NULL, NULL, NULL, NULL),
('6bda4554-b6b4-4a3b-8102-d8ee95d932dd', 'Oursi', '9206b213-50d9-47f4-abdb-2648721bc8b8', 0, '2023-12-26 09:48:19', '2023-12-26 09:48:19', NULL, NULL, NULL, NULL),
('6bf6fd12-6c09-42e3-9f1c-79a480914d9a', 'Imasgo', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:00', '2023-12-26 09:48:00', NULL, NULL, NULL, NULL),
('6dd3f95f-fca8-4a9b-b769-a39e7bf48a4f', 'Zorgho', 'b102b659-128b-4e04-b5cd-0d41f42f9e27', 0, '2023-12-26 09:48:17', '2023-12-26 09:48:17', NULL, NULL, NULL, NULL),
('6ef8fce6-146c-4827-8737-388e5eedd759', 'Sami', '98115280-064d-410b-a972-772f67fd203b', 0, '2023-12-26 09:47:48', '2023-12-26 09:47:48', NULL, NULL, NULL, NULL),
('70181cea-7e93-4494-bd87-0efe04e201cd', 'Rouko', 'eb28755d-87a7-4256-be2a-8971436b81d5', 0, '2023-12-26 09:47:57', '2023-12-26 09:47:57', NULL, NULL, NULL, NULL),
('7191fdfb-b5d7-4393-b8a4-8e943073179e', 'Sideradougou', 'c2861f17-ecf6-45e7-b008-92e578d5d029', 0, '2023-12-26 09:47:52', '2023-12-26 09:47:52', NULL, NULL, NULL, NULL),
('719b1bbc-53b8-43c5-8a35-b5c18ded5345', 'Malba', '017cd7b2-4acb-4b6f-9dd7-cc15c69487d6', 0, '2023-12-26 09:48:24', '2023-12-26 09:48:24', NULL, NULL, NULL, NULL),
('7267cae4-5951-40fc-8cca-23701972a715', 'Botou', 'dc1e28ba-2a1d-4278-9dc9-68933c67b35d', 0, '2023-12-26 09:48:08', '2023-12-26 09:48:08', NULL, NULL, NULL, NULL),
('72c5c42d-ac08-455f-a8bd-ee7007d544d0', 'Kyon', '2c4f618d-bfcc-451b-997c-8cb33f9435f6', 0, '2023-12-26 09:48:02', '2023-12-26 09:48:02', NULL, NULL, NULL, NULL),
('731ce5e4-4f2c-44c5-883a-eb98c3e5164a', 'Diguel', '5d3b5ced-d973-444f-960f-1c69ac131b8c', 0, '2023-12-26 09:48:20', '2023-12-26 09:48:20', NULL, NULL, NULL, NULL),
('74c36fe9-3f04-4752-bf8e-0de4a7a905e2', 'Tenkodogo', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:54', '2023-12-26 09:47:54', NULL, NULL, NULL, NULL),
('753afb91-d2bf-4caf-86d4-dab676914cda', 'Tougouri', '04e9d9f7-c1cf-49cd-8607-0e0327fc816a', 0, '2023-12-26 09:47:58', '2023-12-26 09:47:58', NULL, NULL, NULL, NULL),
('7545171b-d229-446c-b505-12bef93e0f8c', 'Toece', '3d652b01-3d93-42c6-a373-8c5597716f4e', 0, '2023-12-26 09:48:05', '2023-12-26 09:48:05', NULL, NULL, NULL, NULL),
('76c15b59-6310-4a9e-82c0-3e18d397299f', 'Samorogouan', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:12', '2023-12-26 09:48:12', NULL, NULL, NULL, NULL),
('76f08883-97c4-491d-a8f2-603a2bd37041', 'Djigouera', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:11', '2023-12-26 09:48:11', NULL, NULL, NULL, NULL),
('795e1c5d-c92a-439e-bc2c-28d1e2c5f514', 'Laye', 'ecf35f08-f676-4b4b-a2cb-6a65052deab1', 0, '2023-12-26 09:48:17', '2023-12-26 09:48:17', NULL, NULL, NULL, NULL),
('7a90661c-b36b-46f5-94fb-3676cb9f51af', 'Garango', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:54', '2023-12-26 09:47:54', NULL, NULL, NULL, NULL),
('7aadeaca-b70f-4fcc-9bc7-e00d839f93b1', 'Comin-yanga', '6b8792f7-79bf-432b-9ea5-78f2f2299cef', 0, '2023-12-26 09:47:55', '2023-12-26 09:47:55', NULL, NULL, NULL, NULL),
('7b00f716-7094-43cf-97ec-aece480bbf98', 'Bougnounou', '3c537ca2-1494-43f5-b202-7e9454b5858f', 0, '2023-12-26 09:48:03', '2023-12-26 09:48:03', NULL, NULL, NULL, NULL),
('7b5f39c2-1530-46f5-a525-2568f834a8e3', 'Gonboussougou', '80a9960e-c749-40f2-a406-b3ea1ca3a351', 0, '2023-12-26 09:48:06', '2023-12-26 09:48:06', NULL, NULL, NULL, NULL),
('7b6f193f-35b0-4714-a63d-41d9d18045c9', 'Samba', '54ef6dcc-cc6a-4421-8a4b-99cc606606ff', 0, '2023-12-26 09:48:14', '2023-12-26 09:48:14', NULL, NULL, NULL, NULL),
('7bc48629-35d7-409e-aa57-236d9b1eb570', 'Dano', '29375a5c-641a-4a4c-b721-d1a5c065e844', 0, '2023-12-26 09:48:22', '2023-12-26 09:48:22', NULL, NULL, NULL, NULL),
('7be7fc44-61e8-4834-84c1-bce62e709e01', 'Koloko', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:11', '2023-12-26 09:48:11', NULL, NULL, NULL, NULL),
('7cb6e6bb-1ae9-488a-9688-d88ad8b93707', 'Loropeni', '017cd7b2-4acb-4b6f-9dd7-cc15c69487d6', 0, '2023-12-26 09:48:24', '2023-12-26 09:48:24', NULL, NULL, NULL, NULL),
('7d3c25f0-00c2-4dbb-af22-e92444d83a88', 'Soaw', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:01', '2023-12-26 09:48:01', NULL, NULL, NULL, NULL),
('7e365f3d-92b3-4999-ac61-fd9985e3ffb1', 'Tcheriba', 'cc8d0dd5-1d13-4c23-92c1-9306467ec8f1', 0, '2023-12-26 09:47:49', '2023-12-26 09:47:49', NULL, NULL, NULL, NULL),
('7e37c934-d419-4cb2-afee-0528936dd6f7', 'Madouba', 'dcbea669-7d63-4045-a143-a77e922013b2', 0, '2023-12-26 09:47:49', '2023-12-26 09:47:49', NULL, NULL, NULL, NULL),
('7e64f6dd-4d19-43e6-ade3-b7749a039e57', 'Absouya', '57471fa2-d305-4653-a8ca-c1bfec85cf1d', 0, '2023-12-26 09:48:18', '2023-12-26 09:48:18', NULL, NULL, NULL, NULL),
('8010cca3-640e-4a99-b544-26215d415446', 'Ouagadougou', '6482443e-b1d9-4a05-839d-b72fb121ea20', 1, '2023-12-26 09:47:53', '2023-12-26 09:47:53', NULL, NULL, NULL, NULL),
('80572671-b39b-4dd3-8c25-6962ee460690', 'Manga', '80a9960e-c749-40f2-a406-b3ea1ca3a351', 0, '2023-12-26 09:48:06', '2023-12-26 09:48:06', NULL, NULL, NULL, NULL),
('80a1d0db-7268-4b78-85d1-c18cf53ec182', 'Niankorodougou', 'b9ba3f8c-5e22-4c3a-87ae-68823723bca0', 0, '2023-12-26 09:47:52', '2023-12-26 09:47:52', NULL, NULL, NULL, NULL),
('826c75ed-0bd2-47a9-937c-53667ae0420d', 'Nagbingou', '04e9d9f7-c1cf-49cd-8607-0e0327fc816a', 0, '2023-12-26 09:47:58', '2023-12-26 09:47:58', NULL, NULL, NULL, NULL),
('82b33c4f-9d1b-45bc-96ee-812f6ae05995', 'Salogo', 'b102b659-128b-4e04-b5cd-0d41f42f9e27', 0, '2023-12-26 09:48:17', '2023-12-26 09:48:17', NULL, NULL, NULL, NULL),
('835fbf0e-8ae3-459e-8245-267095adf631', 'Kordie', '2c4f618d-bfcc-451b-997c-8cb33f9435f6', 0, '2023-12-26 09:48:02', '2023-12-26 09:48:02', NULL, NULL, NULL, NULL),
('83b57622-a4e8-4c4f-8a6a-dddeb7f08fc0', 'Kangala', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:11', '2023-12-26 09:48:11', NULL, NULL, NULL, NULL),
('844d4af9-a3a2-45e4-9d99-449917ed272a', 'Zamo', '2c4f618d-bfcc-451b-997c-8cb33f9435f6', 0, '2023-12-26 09:48:02', '2023-12-26 09:48:02', NULL, NULL, NULL, NULL),
('862ae7e3-9609-41a3-a805-bad06b9dd480', 'Kirsi', '54ef6dcc-cc6a-4421-8a4b-99cc606606ff', 0, '2023-12-26 09:48:14', '2023-12-26 09:48:14', NULL, NULL, NULL, NULL),
('86b00983-c768-4e06-b1a7-7164a6008151', 'Bittou', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:54', '2023-12-26 09:47:54', NULL, NULL, NULL, NULL),
('8881202d-6df4-4d2a-b38c-e98f080ea752', 'Tanghin-dassouri', '6482443e-b1d9-4a05-839d-b72fb121ea20', 0, '2023-12-26 09:47:53', '2023-12-26 09:47:53', NULL, NULL, NULL, NULL),
('89d3c389-b6f4-46da-8eda-5a3cf323a370', 'Bilanga', '8db0e601-c95b-4ddb-997a-ee22b2bcb6d1', 0, '2023-12-26 09:48:06', '2023-12-26 09:48:06', NULL, NULL, NULL, NULL),
('8a098d7e-e73d-4036-94cf-b38791294262', 'Midebdo', 'c659b48f-1b73-4272-ac87-5d3e3f4412ae', 0, '2023-12-26 09:48:24', '2023-12-26 09:48:24', NULL, NULL, NULL, NULL),
('8c8a2889-ede8-4272-8259-0e2844157967', 'Lankoue', '188761e2-fa5e-473f-a3bb-f8f818dce8da', 0, '2023-12-26 09:47:51', '2023-12-26 09:47:51', NULL, NULL, NULL, NULL),
('8ef5fb8b-f187-4177-bff8-1bdc79aeedb1', 'Sapouy', '3c537ca2-1494-43f5-b202-7e9454b5858f', 0, '2023-12-26 09:48:04', '2023-12-26 09:48:04', NULL, NULL, NULL, NULL),
('8f7354e1-d895-4ca3-97e2-4db2dc9cf4c3', 'Bama', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 0, '2023-12-26 09:48:09', '2023-12-26 09:48:09', NULL, NULL, NULL, NULL),
('8f8fac1e-9804-4cbf-9deb-dd869be59df4', 'Yargo', '529731d9-4207-4ea2-b4b1-c18c7473ae84', 0, '2023-12-26 09:47:56', '2023-12-26 09:47:56', NULL, NULL, NULL, NULL),
('8f964979-abbc-4350-88f6-13686f79c866', 'Silly', '8561b1e1-094f-44bb-9bcf-c165e276f8cb', 0, '2023-12-26 09:48:03', '2023-12-26 09:48:03', NULL, NULL, NULL, NULL),
('8fc451f9-7c6a-4529-85fb-43cbb49b393c', 'Sono', 'dcbea669-7d63-4045-a143-a77e922013b2', 0, '2023-12-26 09:47:49', '2023-12-26 09:47:49', NULL, NULL, NULL, NULL),
('90a7d0ca-f896-4564-ac68-1ca5c502c4f5', 'Komki-ipala', '6482443e-b1d9-4a05-839d-b72fb121ea20', 0, '2023-12-26 09:47:53', '2023-12-26 09:47:53', NULL, NULL, NULL, NULL),
('90b24010-a9b8-4993-bb9d-bed474d826d4', 'Niangoloko', 'c2861f17-ecf6-45e7-b008-92e578d5d029', 0, '2023-12-26 09:47:51', '2023-12-26 09:47:51', NULL, NULL, NULL, NULL),
('91ddd775-c2b3-495a-8f7f-04f3872121bc', 'Bere', '80a9960e-c749-40f2-a406-b3ea1ca3a351', 0, '2023-12-26 09:48:05', '2023-12-26 09:48:05', NULL, NULL, NULL, NULL),
('92d9477a-ced9-4d1b-9c2b-50b774d7fdb6', 'Zoungou', 'b102b659-128b-4e04-b5cd-0d41f42f9e27', 0, '2023-12-26 09:48:17', '2023-12-26 09:48:17', NULL, NULL, NULL, NULL),
('92fb09e8-2a54-4e1e-b06c-e2900e693ce7', 'Gaongo', '3d652b01-3d93-42c6-a373-8c5597716f4e', 0, '2023-12-26 09:48:04', '2023-12-26 09:48:04', NULL, NULL, NULL, NULL),
('93b50919-226e-4b16-9cd5-afd7d7cb2534', 'Boni', 'e2b3ade4-6709-4c51-bae7-31128bf929ab', 0, '2023-12-26 09:48:12', '2023-12-26 09:48:12', NULL, NULL, NULL, NULL),
('9606c82c-dae1-4f2b-88ac-706cb287bb62', 'Zimtanga', 'eb28755d-87a7-4256-be2a-8971436b81d5', 0, '2023-12-26 09:47:58', '2023-12-26 09:47:58', NULL, NULL, NULL, NULL),
('964fecda-4f97-4456-91dc-420e1c8ea667', 'Kain', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:14', '2023-12-26 09:48:14', NULL, NULL, NULL, NULL),
('96e5b364-78c9-4e18-8412-d5efc77a4377', 'Ipelce', '3d652b01-3d93-42c6-a373-8c5597716f4e', 0, '2023-12-26 09:48:04', '2023-12-26 09:48:04', NULL, NULL, NULL, NULL),
('9707f8ac-140a-4294-adc9-42df0f4bb415', 'Douna', 'b9ba3f8c-5e22-4c3a-87ae-68823723bca0', 0, '2023-12-26 09:47:52', '2023-12-26 09:47:52', NULL, NULL, NULL, NULL),
('9726ff2a-1a9e-4d05-8acc-d26f1b028435', 'Sampelga', 'fbab03a0-6074-4b9b-9d43-061ef0ea40ba', 0, '2023-12-26 09:48:20', '2023-12-26 09:48:20', NULL, NULL, NULL, NULL),
('985d531a-d6ab-4116-bf00-c0b8bb55c8d5', 'Manni', '8db0e601-c95b-4ddb-997a-ee22b2bcb6d1', 0, '2023-12-26 09:48:06', '2023-12-26 09:48:06', NULL, NULL, NULL, NULL),
('9b39ca04-6a93-4f3b-8c5f-cfb079c531d7', 'Kouka', '98115280-064d-410b-a972-772f67fd203b', 0, '2023-12-26 09:47:47', '2023-12-26 09:47:47', NULL, NULL, NULL, NULL),
('9c1f4de3-6a2c-4ea0-ab7c-209ed20335e5', 'Batie', 'c659b48f-1b73-4272-ac87-5d3e3f4412ae', 0, '2023-12-26 09:48:23', '2023-12-26 09:48:23', NULL, NULL, NULL, NULL),
('9c4743ee-f33d-4d7d-be79-4f8ca9a388f7', 'Tongomayel', '5d3b5ced-d973-444f-960f-1c69ac131b8c', 0, '2023-12-26 09:48:21', '2023-12-26 09:48:21', NULL, NULL, NULL, NULL),
('9d35eefe-91ee-4f77-b996-feb825591ca7', 'Seguenega', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:15', '2023-12-26 09:48:15', NULL, NULL, NULL, NULL),
('9de01ca0-c72a-4cdc-a665-fa39d939639d', 'Bokin', '54ef6dcc-cc6a-4421-8a4b-99cc606606ff', 0, '2023-12-26 09:48:13', '2023-12-26 09:48:13', NULL, NULL, NULL, NULL),
('a10550ab-d06a-498a-9bb1-4d8c9d312983', 'Baskoure', '529731d9-4207-4ea2-b4b1-c18c7473ae84', 0, '2023-12-26 09:47:56', '2023-12-26 09:47:56', NULL, NULL, NULL, NULL),
('a12dfb6e-547c-46dc-825c-97bc2a2f5455', 'Samogohiri', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:12', '2023-12-26 09:48:12', NULL, NULL, NULL, NULL),
('a1d0b345-0177-4033-86f4-8a7786e6c39c', 'Bogande', '8db0e601-c95b-4ddb-997a-ee22b2bcb6d1', 0, '2023-12-26 09:48:06', '2023-12-26 09:48:06', NULL, NULL, NULL, NULL),
('a1e9efd0-e842-4f6e-a9ae-740ec7e5857c', 'Boussoukoula', 'c659b48f-1b73-4272-ac87-5d3e3f4412ae', 0, '2023-12-26 09:48:23', '2023-12-26 09:48:23', NULL, NULL, NULL, NULL),
('a64a2bb1-da62-45ab-82c8-87193a1b6705', 'Piela', '8db0e601-c95b-4ddb-997a-ee22b2bcb6d1', 0, '2023-12-26 09:48:07', '2023-12-26 09:48:07', NULL, NULL, NULL, NULL),
('a6d2b864-2fc9-4d3d-b377-19128b6690f3', 'Ziniare', '57471fa2-d305-4653-a8ca-c1bfec85cf1d', 0, '2023-12-26 09:48:18', '2023-12-26 09:48:18', NULL, NULL, NULL, NULL),
('a7040279-93ae-4a99-bbdd-228fca859498', 'Pibaore', '39aba444-6835-4920-a1e1-d7a6fef54702', 0, '2023-12-26 09:47:59', '2023-12-26 09:47:59', NULL, NULL, NULL, NULL),
('a72febe5-8a81-4e49-95de-e5c420562dd2', 'Namounou', 'dc1e28ba-2a1d-4278-9dc9-68933c67b35d', 0, '2023-12-26 09:48:09', '2023-12-26 09:48:09', NULL, NULL, NULL, NULL),
('a740f83d-9eb3-4cea-837d-71ebcf0cb670', 'Djibasso', 'dcbea669-7d63-4045-a143-a77e922013b2', 0, '2023-12-26 09:47:48', '2023-12-26 09:47:48', NULL, NULL, NULL, NULL),
('a79e41e9-8622-4e75-ad97-b898e6d755af', 'Soubakaniedougou', 'c2861f17-ecf6-45e7-b008-92e578d5d029', 0, '2023-12-26 09:47:52', '2023-12-26 09:47:52', NULL, NULL, NULL, NULL),
('a7f57d7f-bb50-435f-9ec7-353350465055', 'Gueguere', '29375a5c-641a-4a4c-b721-d1a5c065e844', 0, '2023-12-26 09:48:22', '2023-12-26 09:48:22', NULL, NULL, NULL, NULL),
('a92d841c-292b-459a-b145-cee500478c70', 'Koper', '29375a5c-641a-4a4c-b721-d1a5c065e844', 0, '2023-12-26 09:48:22', '2023-12-26 09:48:22', NULL, NULL, NULL, NULL),
('a94368ad-3ff4-4720-9809-4e8963d0f01f', 'Boussou', '650d00e0-a5f0-45f7-a721-0481710b2072', 0, '2023-12-26 09:48:16', '2023-12-26 09:48:16', NULL, NULL, NULL, NULL),
('a95e2a5c-a10f-47c2-9b1f-5410aa32e522', 'Bekuy', 'e2b3ade4-6709-4c51-bae7-31128bf929ab', 0, '2023-12-26 09:48:12', '2023-12-26 09:48:12', NULL, NULL, NULL, NULL),
('a9713e70-8db3-4fb5-8aa1-9d4e521af69b', 'Bingo', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:00', '2023-12-26 09:48:00', NULL, NULL, NULL, NULL),
('a9833e4a-faf5-4477-94aa-3caf7f7a2d3d', 'Zoaga', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:55', '2023-12-26 09:47:55', NULL, NULL, NULL, NULL),
('aa8399e5-effa-428d-aaa1-66d557f25e79', 'Nebielianayou', '8561b1e1-094f-44bb-9bcf-c165e276f8cb', 0, '2023-12-26 09:48:03', '2023-12-26 09:48:03', NULL, NULL, NULL, NULL),
('aad5eceb-9381-4657-8c0a-1c4d2e413ab9', 'Bereba', 'e2b3ade4-6709-4c51-bae7-31128bf929ab', 0, '2023-12-26 09:48:12', '2023-12-26 09:48:12', NULL, NULL, NULL, NULL),
('aae749fd-e0f8-466c-97fe-59d6cfb6165e', 'Kokologho', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:00', '2023-12-26 09:48:00', NULL, NULL, NULL, NULL),
('ab27eade-0a02-4eeb-a408-b64933fb3f1d', 'Di', '188761e2-fa5e-473f-a3bb-f8f818dce8da', 0, '2023-12-26 09:47:50', '2023-12-26 09:47:50', NULL, NULL, NULL, NULL),
('ab31ef74-2690-4096-9b1f-d396f2c62b3d', 'Po', 'd4aa516b-7c48-48f3-94ff-9e9b3e43780e', 0, '2023-12-26 09:48:05', '2023-12-26 09:48:05', NULL, NULL, NULL, NULL),
('ab3dce62-0eb3-4fc3-a601-0f297bce3953', 'Djigoue', '017cd7b2-4acb-4b6f-9dd7-cc15c69487d6', 0, '2023-12-26 09:48:24', '2023-12-26 09:48:24', NULL, NULL, NULL, NULL),
('abf3e7e1-eff9-415b-86d7-4ff2b28fd93d', 'Dargo', '04e9d9f7-c1cf-49cd-8607-0e0327fc816a', 0, '2023-12-26 09:47:58', '2023-12-26 09:47:58', NULL, NULL, NULL, NULL),
('ac337645-1ff8-4d74-a893-d48f5b2d8be4', 'Tin-akoff', '9206b213-50d9-47f4-abdb-2648721bc8b8', 0, '2023-12-26 09:48:19', '2023-12-26 09:48:19', NULL, NULL, NULL, NULL),
('ad44c075-8d25-44ff-a500-bf007ee8f233', 'Zam', 'b102b659-128b-4e04-b5cd-0d41f42f9e27', 0, '2023-12-26 09:48:17', '2023-12-26 09:48:17', NULL, NULL, NULL, NULL),
('ae3ca326-74c8-4d74-a6f7-72eae95d64fb', 'Sangha', '6b8792f7-79bf-432b-9ea5-78f2f2299cef', 0, '2023-12-26 09:47:55', '2023-12-26 09:47:55', NULL, NULL, NULL, NULL),
('afb929c0-f51a-4bc9-9a08-9b5c89f5d3c8', 'Perigban', '017cd7b2-4acb-4b6f-9dd7-cc15c69487d6', 0, '2023-12-26 09:48:25', '2023-12-26 09:48:25', NULL, NULL, NULL, NULL),
('b0c31161-14d7-47bb-8def-ecc252cebdd5', 'Koumbia', 'e2b3ade4-6709-4c51-bae7-31128bf929ab', 0, '2023-12-26 09:48:13', '2023-12-26 09:48:13', NULL, NULL, NULL, NULL),
('b22132b2-3437-4507-b912-86d93ef627f2', 'Bouroum', '04e9d9f7-c1cf-49cd-8607-0e0327fc816a', 0, '2023-12-26 09:47:58', '2023-12-26 09:47:58', NULL, NULL, NULL, NULL),
('b2307c70-b3bf-4f04-9b1c-2c601a8856d6', 'Deou', '9206b213-50d9-47f4-abdb-2648721bc8b8', 0, '2023-12-26 09:48:19', '2023-12-26 09:48:19', NULL, NULL, NULL, NULL),
('b27987a8-b641-4e9c-87c8-b4579b5ac42f', 'Tikare', 'eb28755d-87a7-4256-be2a-8971436b81d5', 0, '2023-12-26 09:47:57', '2023-12-26 09:47:57', NULL, NULL, NULL, NULL),
('b29b5e69-687e-402f-b1ac-bd9d838d2cba', 'Korsimoro', '39aba444-6835-4920-a1e1-d7a6fef54702', 0, '2023-12-26 09:47:59', '2023-12-26 09:47:59', NULL, NULL, NULL, NULL),
('b2c3f114-a9b7-4569-898f-bd6285e6fd57', 'Tensobentenga', '529731d9-4207-4ea2-b4b1-c18c7473ae84', 0, '2023-12-26 09:47:56', '2023-12-26 09:47:56', NULL, NULL, NULL, NULL),
('b363656a-a966-4bed-9651-69d44c736d82', 'Yalgo', '04e9d9f7-c1cf-49cd-8607-0e0327fc816a', 0, '2023-12-26 09:47:58', '2023-12-26 09:47:58', NULL, NULL, NULL, NULL),
('b37ed920-be25-4245-a146-513ae94db31e', 'Pissila', '39aba444-6835-4920-a1e1-d7a6fef54702', 0, '2023-12-26 09:47:59', '2023-12-26 09:47:59', NULL, NULL, NULL, NULL),
('b3f08e9a-2e25-42cd-9890-897b1ba14fa7', 'Gorgadji', 'fbab03a0-6074-4b9b-9d43-061ef0ea40ba', 0, '2023-12-26 09:48:20', '2023-12-26 09:48:20', NULL, NULL, NULL, NULL),
('b4a32f69-3f7a-4e40-999d-c42644be5895', 'N\'dorola', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:12', '2023-12-26 09:48:12', NULL, NULL, NULL, NULL),
('b4cd6fde-1d13-4efb-89a0-dca90b61261c', 'Bondoukuy', 'cc8d0dd5-1d13-4c23-92c1-9306467ec8f1', 0, '2023-12-26 09:47:49', '2023-12-26 09:47:49', NULL, NULL, NULL, NULL),
('b51fbad2-9d62-455e-8a88-bb704d4ad50a', 'Thyou', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:01', '2023-12-26 09:48:01', NULL, NULL, NULL, NULL),
('b58dac7c-d31a-4963-b141-2ca9159b6817', 'Ouarkoye', 'cc8d0dd5-1d13-4c23-92c1-9306467ec8f1', 0, '2023-12-26 09:47:49', '2023-12-26 09:47:49', NULL, NULL, NULL, NULL),
('b5b66c87-79a8-4f19-ae9b-cc1215cd3cc6', 'Gbomblora', '017cd7b2-4acb-4b6f-9dd7-cc15c69487d6', 0, '2023-12-26 09:48:24', '2023-12-26 09:48:24', NULL, NULL, NULL, NULL),
('b66a2085-3292-4041-b7b2-e245ffd8105b', 'Beguedo', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:54', '2023-12-26 09:47:54', NULL, NULL, NULL, NULL),
('b81a517e-0668-4a95-8582-517aeee0f172', 'Gao', '3c537ca2-1494-43f5-b202-7e9454b5858f', 0, '2023-12-26 09:48:04', '2023-12-26 09:48:04', NULL, NULL, NULL, NULL),
('b940a44f-1318-405e-a032-bfb3b68ac3c0', 'Lanfiera', '188761e2-fa5e-473f-a3bb-f8f818dce8da', 0, '2023-12-26 09:47:51', '2023-12-26 09:47:51', NULL, NULL, NULL, NULL),
('b9cbf847-c21a-4386-b3a3-02cabf177725', 'Gayeri', 'b9ef0d8c-dc3e-44b2-9efa-f8cfe4c099a2', 0, '2023-12-26 09:48:08', '2023-12-26 09:48:08', NULL, NULL, NULL, NULL),
('ba39df64-30c3-4e8d-a882-d92d29a3d047', 'Hounde', 'e2b3ade4-6709-4c51-bae7-31128bf929ab', 0, '2023-12-26 09:48:12', '2023-12-26 09:48:12', NULL, NULL, NULL, NULL),
('bb82acf0-80d1-4221-b2db-96fe0504184a', 'Dalo', '3c537ca2-1494-43f5-b202-7e9454b5858f', 0, '2023-12-26 09:48:04', '2023-12-26 09:48:04', NULL, NULL, NULL, NULL),
('bc3aef5a-c6d3-409f-9ad3-6a762a38d413', 'Pa', '0db972e1-8708-43bb-8df9-6c092c9c2524', 0, '2023-12-26 09:47:47', '2023-12-26 09:47:47', NULL, NULL, NULL, NULL),
('bde05870-0df0-4573-9237-f783baf2dbe1', 'Barthiebougou', 'b9ef0d8c-dc3e-44b2-9efa-f8cfe4c099a2', 0, '2023-12-26 09:48:07', '2023-12-26 09:48:07', NULL, NULL, NULL, NULL),
('bde6add9-23ea-4088-8560-8d07b865275a', 'Kougny', '8034d22d-8ef8-458d-a400-609f57c76115', 0, '2023-12-26 09:47:50', '2023-12-26 09:47:50', NULL, NULL, NULL, NULL),
('bf4bf813-74d0-494f-bff6-0c7cefb4b9cc', 'Bieha', '8561b1e1-094f-44bb-9bcf-c165e276f8cb', 0, '2023-12-26 09:48:02', '2023-12-26 09:48:02', NULL, NULL, NULL, NULL),
('bf5f8248-d97c-4f56-874d-f578e590dc49', 'Diebougou', '696a36cc-23f5-42d7-921c-118888cba93b', 0, '2023-12-26 09:48:22', '2023-12-26 09:48:22', NULL, NULL, NULL, NULL),
('bf62a7f1-d00b-49a9-bf40-0cfdac2146a8', 'Kombori', 'dcbea669-7d63-4045-a143-a77e922013b2', 0, '2023-12-26 09:47:49', '2023-12-26 09:47:49', NULL, NULL, NULL, NULL),
('c0f6f3d4-b834-4650-a471-087c6deca314', 'Pouytenga', '529731d9-4207-4ea2-b4b1-c18c7473ae84', 0, '2023-12-26 09:47:56', '2023-12-26 09:47:56', NULL, NULL, NULL, NULL),
('c2e68dd8-5309-474f-a358-9d24061279b7', 'Niaogho', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:54', '2023-12-26 09:47:54', NULL, NULL, NULL, NULL),
('c3845a56-9eba-4d60-91c5-d83a56c5e28e', 'Karangasso sambla', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 0, '2023-12-26 09:48:09', '2023-12-26 09:48:09', NULL, NULL, NULL, NULL),
('c3b17b70-74e6-4526-939a-2c48a2d33a79', 'Guiba', '80a9960e-c749-40f2-a406-b3ea1ca3a351', 0, '2023-12-26 09:48:06', '2023-12-26 09:48:06', NULL, NULL, NULL, NULL),
('c45b03aa-73ce-4239-adf0-c9f5ed652b73', 'Nassoumbou', '5d3b5ced-d973-444f-960f-1c69ac131b8c', 0, '2023-12-26 09:48:21', '2023-12-26 09:48:21', NULL, NULL, NULL, NULL),
('c518ccce-c57b-4139-bdf9-ef6ea0893cf5', 'Kiembara', '188761e2-fa5e-473f-a3bb-f8f818dce8da', 0, '2023-12-26 09:47:50', '2023-12-26 09:47:50', NULL, NULL, NULL, NULL),
('c5b70d4e-3786-46c4-aabb-3b6aa3332db9', 'Falagountou', 'fbab03a0-6074-4b9b-9d43-061ef0ea40ba', 0, '2023-12-26 09:48:19', '2023-12-26 09:48:19', NULL, NULL, NULL, NULL),
('c630b61a-700d-4032-97b9-4b7fb5e6d6f3', 'Toussiana', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 0, '2023-12-26 09:48:11', '2023-12-26 09:48:11', NULL, NULL, NULL, NULL),
('c6b35689-ff3f-45c0-a545-2e5296e93c87', 'Tankougounadie', 'e8180ac5-cc07-4213-a2dd-9fb914a4707b', 0, '2023-12-26 09:48:21', '2023-12-26 09:48:21', NULL, NULL, NULL, NULL),
('c98d20d1-44d3-4221-8286-4f21611792c5', 'Boulsa', '04e9d9f7-c1cf-49cd-8607-0e0327fc816a', 0, '2023-12-26 09:47:58', '2023-12-26 09:47:58', NULL, NULL, NULL, NULL),
('c9bf1107-bc5b-480e-9644-d2026ad8486a', 'La-todin', '54ef6dcc-cc6a-4421-8a4b-99cc606606ff', 0, '2023-12-26 09:48:14', '2023-12-26 09:48:14', NULL, NULL, NULL, NULL),
('cb7d00fe-3078-4d39-bfe5-738154246253', 'Boura', '8561b1e1-094f-44bb-9bcf-c165e276f8cb', 0, '2023-12-26 09:48:03', '2023-12-26 09:48:03', NULL, NULL, NULL, NULL),
('cbb8bd0b-9d46-4ea3-af42-75898e27a140', 'Nandiala', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:00', '2023-12-26 09:48:00', NULL, NULL, NULL, NULL),
('cc08445c-06a6-447e-9d7d-e78fa1ee9401', 'Doulougou', '3d652b01-3d93-42c6-a373-8c5597716f4e', 0, '2023-12-26 09:48:04', '2023-12-26 09:48:04', NULL, NULL, NULL, NULL),
('ccd7ddc1-8457-4f49-bb85-3be65dcad364', 'Thiou', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:16', '2023-12-26 09:48:16', NULL, NULL, NULL, NULL),
('cda07901-e515-4e0f-b36b-b2c95e2280e4', 'Nassere', 'eb28755d-87a7-4256-be2a-8971436b81d5', 0, '2023-12-26 09:47:57', '2023-12-26 09:47:57', NULL, NULL, NULL, NULL),
('ce518fe6-b24e-49f6-82c2-59b5e8431ddc', 'Sebba', 'e8180ac5-cc07-4213-a2dd-9fb914a4707b', 0, '2023-12-26 09:48:21', '2023-12-26 09:48:21', NULL, NULL, NULL, NULL),
('cf4258a3-e288-43d6-8dd4-d67f0a6bd079', 'Bondigui', '696a36cc-23f5-42d7-921c-118888cba93b', 0, '2023-12-26 09:48:22', '2023-12-26 09:48:22', NULL, NULL, NULL, NULL),
('d178e360-44a1-4971-b66d-b020516e1d2b', 'Bourasso', 'dcbea669-7d63-4045-a143-a77e922013b2', 0, '2023-12-26 09:47:48', '2023-12-26 09:47:48', NULL, NULL, NULL, NULL),
('d252086a-4085-4029-a361-bddf439052fc', 'Beregadougou', 'c2861f17-ecf6-45e7-b008-92e578d5d029', 0, '2023-12-26 09:47:51', '2023-12-26 09:47:51', NULL, NULL, NULL, NULL),
('d2ea7630-c7f9-40e2-841c-3eb9c851e35f', 'Boundore', 'e8180ac5-cc07-4213-a2dd-9fb914a4707b', 0, '2023-12-26 09:48:21', '2023-12-26 09:48:21', NULL, NULL, NULL, NULL),
('d39679eb-b37b-4870-aa12-7c47403baee6', 'Nako', '017cd7b2-4acb-4b6f-9dd7-cc15c69487d6', 0, '2023-12-26 09:48:25', '2023-12-26 09:48:25', NULL, NULL, NULL, NULL),
('d42f88ce-aac9-40d9-a951-e0067369d7b3', 'Dassa', '2c4f618d-bfcc-451b-997c-8cb33f9435f6', 0, '2023-12-26 09:48:01', '2023-12-26 09:48:01', NULL, NULL, NULL, NULL),
('d4e7f3d5-3530-4616-8283-c84dfd55153b', 'Bagre', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:54', '2023-12-26 09:47:54', NULL, NULL, NULL, NULL),
('d51add37-5bb6-409d-a3f1-d01b8b6504bc', 'Oueleni', 'b9ba3f8c-5e22-4c3a-87ae-68823723bca0', 0, '2023-12-26 09:47:53', '2023-12-26 09:47:53', NULL, NULL, NULL, NULL),
('d6187bc1-3789-4296-9038-470f90abaa36', 'Namissiguimah', '39aba444-6835-4920-a1e1-d7a6fef54702', 0, '2023-12-26 09:47:59', '2023-12-26 09:47:59', NULL, NULL, NULL, NULL),
('d7cb1373-2821-4ba6-b163-2a2c2e18e35f', 'Dedougou', 'cc8d0dd5-1d13-4c23-92c1-9306467ec8f1', 0, '2023-12-26 09:47:49', '2023-12-26 09:47:49', NULL, NULL, NULL, NULL),
('d9449fb8-0621-48b9-939b-a143db3bac74', 'Oronkua', '29375a5c-641a-4a4c-b721-d1a5c065e844', 0, '2023-12-26 09:48:23', '2023-12-26 09:48:23', NULL, NULL, NULL, NULL),
('d96a71cc-4424-4037-8122-512f3be3a5b3', 'Sabou', 'ce119724-9606-4cad-af88-d5f38c385eeb', 0, '2023-12-26 09:48:01', '2023-12-26 09:48:01', NULL, NULL, NULL, NULL),
('da0156a8-4589-4fe6-a1b8-dbd3c4031e74', 'Lalgaye', '6b8792f7-79bf-432b-9ea5-78f2f2299cef', 0, '2023-12-26 09:47:55', '2023-12-26 09:47:55', NULL, NULL, NULL, NULL),
('da94e5a3-4697-4e31-b626-ba115783c42a', 'Koumbri', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:15', '2023-12-26 09:48:15', NULL, NULL, NULL, NULL),
('dae23a6a-5cb2-4f46-a16c-8172c288147b', 'Solhan', 'e8180ac5-cc07-4213-a2dd-9fb914a4707b', 0, '2023-12-26 09:48:21', '2023-12-26 09:48:21', NULL, NULL, NULL, NULL);
INSERT INTO `communes` (`uuid`, `libelle`, `province_id`, `statut`, `created_at`, `updated_at`, `code`, `created_by`, `updated_by`, `deleted_by`) VALUES
('dc271e5a-4240-4072-ba24-74a30865d342', 'Zecco', 'd4aa516b-7c48-48f3-94ff-9e9b3e43780e', 0, '2023-12-26 09:48:05', '2023-12-26 09:48:05', NULL, NULL, NULL, NULL),
('dd7336ac-65d0-4c07-8845-db41a3989eec', 'Orodara', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:12', '2023-12-26 09:48:12', NULL, NULL, NULL, NULL),
('deaf16f5-c987-4a5b-af47-153eb3a5bd53', 'Sourgoubila', 'ecf35f08-f676-4b4b-a2cb-6a65052deab1', 0, '2023-12-26 09:48:18', '2023-12-26 09:48:18', NULL, NULL, NULL, NULL),
('ded25368-ac0f-4994-a2fc-60683c718a72', 'Moussodougou', 'c2861f17-ecf6-45e7-b008-92e578d5d029', 0, '2023-12-26 09:47:51', '2023-12-26 09:47:51', NULL, NULL, NULL, NULL),
('dede6c40-5ed3-483d-871d-fd9f23441e13', 'Tangaye', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:15', '2023-12-26 09:48:15', NULL, NULL, NULL, NULL),
('df830f28-3ae4-4699-be98-95b1a2c0da44', 'Gogo', '80a9960e-c749-40f2-a406-b3ea1ca3a351', 0, '2023-12-26 09:48:06', '2023-12-26 09:48:06', NULL, NULL, NULL, NULL),
('dfd9020d-b5d4-4ec1-8665-16bfeac119ed', 'Niabouri', '8561b1e1-094f-44bb-9bcf-c165e276f8cb', 0, '2023-12-26 09:48:03', '2023-12-26 09:48:03', NULL, NULL, NULL, NULL),
('e0825a14-8eb0-489a-bd16-9d441b083755', 'Reo', '2c4f618d-bfcc-451b-997c-8cb33f9435f6', 0, '2023-12-26 09:48:02', '2023-12-26 09:48:02', NULL, NULL, NULL, NULL),
('e0eace67-a9a2-433e-88a1-ad31626819b8', 'Foutouri', 'b9ef0d8c-dc3e-44b2-9efa-f8cfe4c099a2', 0, '2023-12-26 09:48:08', '2023-12-26 09:48:08', NULL, NULL, NULL, NULL),
('e105db24-b003-4460-b0cf-ee27cbfde023', 'Tiefora', 'c2861f17-ecf6-45e7-b008-92e578d5d029', 0, '2023-12-26 09:47:52', '2023-12-26 09:47:52', NULL, NULL, NULL, NULL),
('e24974f0-8ddc-4ae0-804a-84b508c34cf3', 'Koupela', '529731d9-4207-4ea2-b4b1-c18c7473ae84', 0, '2023-12-26 09:47:56', '2023-12-26 09:47:56', NULL, NULL, NULL, NULL),
('e4098e5c-d9e0-4dca-98e2-eca096ea181c', 'Logobou', 'dc1e28ba-2a1d-4278-9dc9-68933c67b35d', 0, '2023-12-26 09:48:08', '2023-12-26 09:48:08', NULL, NULL, NULL, NULL),
('e4d3f229-1e33-4b67-8e67-87e96a3cb365', 'Loumana', 'b9ba3f8c-5e22-4c3a-87ae-68823723bca0', 0, '2023-12-26 09:47:52', '2023-12-26 09:47:52', NULL, NULL, NULL, NULL),
('e51ad844-28ff-4aeb-9ed8-ab43c1e04afe', 'Kogho', 'b102b659-128b-4e04-b5cd-0d41f42f9e27', 0, '2023-12-26 09:48:16', '2023-12-26 09:48:16', NULL, NULL, NULL, NULL),
('e6723f2f-0ec9-499d-9c3e-5936f82c8b58', 'Markoye', '9206b213-50d9-47f4-abdb-2648721bc8b8', 0, '2023-12-26 09:48:19', '2023-12-26 09:48:19', NULL, NULL, NULL, NULL),
('e67880be-dff2-4b73-9ad0-50b89d7d5d6e', 'Meguet', 'b102b659-128b-4e04-b5cd-0d41f42f9e27', 0, '2023-12-26 09:48:17', '2023-12-26 09:48:17', NULL, NULL, NULL, NULL),
('e6cc951d-3f69-411d-8250-0abffd57b73b', 'Namissiguima', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:15', '2023-12-26 09:48:15', NULL, NULL, NULL, NULL),
('e74b74ae-fb72-418b-a25b-a2dd8de27fc9', 'Ziou', 'd4aa516b-7c48-48f3-94ff-9e9b3e43780e', 0, '2023-12-26 09:48:05', '2023-12-26 09:48:05', NULL, NULL, NULL, NULL),
('e7ce42e4-ead0-4214-89df-165906c7718d', 'Kongoussi', 'eb28755d-87a7-4256-be2a-8971436b81d5', 0, '2023-12-26 09:47:57', '2023-12-26 09:47:57', NULL, NULL, NULL, NULL),
('ea905cd5-dfe0-4fb5-b337-0734925719c6', 'Dolo', '696a36cc-23f5-42d7-921c-118888cba93b', 0, '2023-12-26 09:48:22', '2023-12-26 09:48:22', NULL, NULL, NULL, NULL),
('eaa3751d-8442-47ee-bac0-4607895dcafa', 'Kayao', '3d652b01-3d93-42c6-a373-8c5597716f4e', 0, '2023-12-26 09:48:04', '2023-12-26 09:48:04', NULL, NULL, NULL, NULL),
('eb09ee4e-3708-42d4-a6ca-86a99b62d4b6', 'Kourouma', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:11', '2023-12-26 09:48:11', NULL, NULL, NULL, NULL),
('eb0cd622-ad0b-44ac-b486-19ddc8a86134', 'Nouna', 'dcbea669-7d63-4045-a143-a77e922013b2', 0, '2023-12-26 09:47:49', '2023-12-26 09:47:49', NULL, NULL, NULL, NULL),
('eb9d1cfe-834e-4554-8910-19f3de27fd46', 'Satiri', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 0, '2023-12-26 09:48:10', '2023-12-26 09:48:10', NULL, NULL, NULL, NULL),
('ebe796d5-f56e-42d0-8e7c-deff34222ddf', 'Tansila', '98115280-064d-410b-a972-772f67fd203b', 0, '2023-12-26 09:47:48', '2023-12-26 09:47:48', NULL, NULL, NULL, NULL),
('eceefe3f-4fbd-40ce-95cd-c823a56e789d', 'Mansila', 'e8180ac5-cc07-4213-a2dd-9fb914a4707b', 0, '2023-12-26 09:48:21', '2023-12-26 09:48:21', NULL, NULL, NULL, NULL),
('eda7e488-d9d9-447f-b7de-670ad7031b9a', 'Pompoi', '0db972e1-8708-43bb-8df9-6c092c9c2524', 0, '2023-12-26 09:47:47', '2023-12-26 09:47:47', NULL, NULL, NULL, NULL),
('f19810cf-742a-4772-9f03-6f4a443f68cb', 'Morolaba', '77b415e0-7fed-4825-a381-f5263561a72b', 0, '2023-12-26 09:48:11', '2023-12-26 09:48:11', NULL, NULL, NULL, NULL),
('f5167f08-902d-4839-b61e-aa4e42352b7b', 'Kalsaka', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:15', '2023-12-26 09:48:15', NULL, NULL, NULL, NULL),
('f548a001-b6f4-4a96-8e09-5895f25d6290', 'Gassan', '8034d22d-8ef8-458d-a400-609f57c76115', 0, '2023-12-26 09:47:50', '2023-12-26 09:47:50', NULL, NULL, NULL, NULL),
('f5a51354-20e3-4aa7-8386-f66aa63f8a69', 'Fada Ngourma', '5338147d-e318-4e21-82ba-2c4a22b72b7a', 0, '2023-12-26 09:48:07', '2023-12-26 09:48:07', NULL, NULL, NULL, NULL),
('f5ec6718-10bb-4ffc-84d5-8fdea049d6dd', 'Karangasso-vigue', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 0, '2023-12-26 09:48:10', '2023-12-26 09:48:10', NULL, NULL, NULL, NULL),
('f61e46d7-da74-4d76-9cad-10be1b47c22d', 'Coalla', '8db0e601-c95b-4ddb-997a-ee22b2bcb6d1', 0, '2023-12-26 09:48:06', '2023-12-26 09:48:06', NULL, NULL, NULL, NULL),
('f6711b22-2aaf-4b73-8ae7-14cc38bd6fca', 'Diabo', '5338147d-e318-4e21-82ba-2c4a22b72b7a', 0, '2023-12-26 09:48:07', '2023-12-26 09:48:07', NULL, NULL, NULL, NULL),
('f673d016-06c4-4ab7-8303-53de9cbaf798', 'Kompienga', '4c8d6dbe-4950-4502-835b-78c0e71f502c', 0, '2023-12-26 09:48:08', '2023-12-26 09:48:08', NULL, NULL, NULL, NULL),
('f678f27c-7718-4f59-a34a-263a2724ea3c', 'Douroula', 'cc8d0dd5-1d13-4c23-92c1-9306467ec8f1', 0, '2023-12-26 09:47:49', '2023-12-26 09:47:49', NULL, NULL, NULL, NULL),
('f7577869-e18e-4a47-af55-bb9902ca2661', 'Rambo', 'e1d045e7-86db-4ef1-b3e0-787f430056b4', 0, '2023-12-26 09:48:15', '2023-12-26 09:48:15', NULL, NULL, NULL, NULL),
('f8ac12a3-e2c0-47fb-89c5-0abbb9bafdc7', 'Komtoega', 'ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 0, '2023-12-26 09:47:54', '2023-12-26 09:47:54', NULL, NULL, NULL, NULL),
('f8f33b10-49b6-45f8-ab8a-accbda0c1932', 'Kassoum', '188761e2-fa5e-473f-a3bb-f8f818dce8da', 0, '2023-12-26 09:47:50', '2023-12-26 09:47:50', NULL, NULL, NULL, NULL),
('f9184cbe-5a2f-465f-9779-18208023eeb3', 'Pensa', '39aba444-6835-4920-a1e1-d7a6fef54702', 0, '2023-12-26 09:47:59', '2023-12-26 09:47:59', NULL, NULL, NULL, NULL),
('f9f8cb9f-6769-4896-8990-98eb62fea65c', 'Koundougou', '428474b9-3171-48a7-b775-85bb5eb2c4ea', 0, '2023-12-26 09:48:10', '2023-12-26 09:48:10', NULL, NULL, NULL, NULL),
('faf13ee8-b5b5-4403-aa6b-3670cab1cec7', 'Ourgou-manega', '57471fa2-d305-4653-a8ca-c1bfec85cf1d', 0, '2023-12-26 09:48:18', '2023-12-26 09:48:18', NULL, NULL, NULL, NULL),
('fbf18c6e-6241-4a44-b728-3e4491ec3c6e', 'Komsilga', '6482443e-b1d9-4a05-839d-b72fb121ea20', 0, '2023-12-26 09:47:53', '2023-12-26 09:47:53', NULL, NULL, NULL, NULL),
('fc3e309d-11da-4f53-a62e-69d3658494dd', 'Zambo', '29375a5c-641a-4a4c-b721-d1a5c065e844', 0, '2023-12-26 09:48:23', '2023-12-26 09:48:23', NULL, NULL, NULL, NULL),
('fd1efa4a-3f33-49d5-8582-5900dc011cc7', 'Barsalogho', '39aba444-6835-4920-a1e1-d7a6fef54702', 0, '2023-12-26 09:47:58', '2023-12-26 09:47:58', NULL, NULL, NULL, NULL),
('fd1faa68-9379-41a2-aeec-16b3afadbc8b', 'Kankalaba', 'b9ba3f8c-5e22-4c3a-87ae-68823723bca0', 0, '2023-12-26 09:47:52', '2023-12-26 09:47:52', NULL, NULL, NULL, NULL),
('ff1431c8-a3dc-43ba-b4f1-81d0eea501c9', 'Sabce', 'eb28755d-87a7-4256-be2a-8971436b81d5', 0, '2023-12-26 09:47:57', '2023-12-26 09:47:57', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_certif` date DEFAULT NULL,
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certified` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_categorie_p002_s`
--

CREATE TABLE `demande_categorie_p002_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_categorie_p002_s`
--

INSERT INTO `demande_categorie_p002_s` (`uuid`, `libelle_court`, `libelle_long`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
('522d7924-39e9-4a28-86cb-fa84014360e6', 'Travaux', 'Travaux', NULL, NULL, NULL, '2023-12-26 09:48:58', '2023-12-26 09:48:58'),
('f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', 'Etudes et contrôle', 'Etudes et contrôle', NULL, NULL, NULL, '2023-12-26 09:48:58', '2023-12-26 09:48:58');

-- --------------------------------------------------------

--
-- Structure de la table `demande_domaine_p002_s`
--

CREATE TABLE `demande_domaine_p002_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_domaine_p002_s`
--

INSERT INTO `demande_domaine_p002_s` (`uuid`, `libelle_court`, `libelle_long`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
('73a3f517-ad2e-4992-974b-2f41a16119e5', 'AEUE', 'Assainissement des Eaux Usées et Excréta', NULL, NULL, NULL, '2023-12-26 09:48:57', '2023-12-26 09:48:57'),
('9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'AEP', 'Approvisionnement en Eau Potable', NULL, NULL, NULL, '2023-12-26 09:48:57', '2023-12-26 09:48:57'),
('cc0aedee-5d32-4e29-8943-3e334d929a88', 'BAHA', 'Barrage et Aménagement Hydro-Agricole', NULL, NULL, NULL, '2023-12-26 09:48:57', '2023-12-26 09:48:57');

-- --------------------------------------------------------

--
-- Structure de la table `demande_p001_s`
--

CREATE TABLE `demande_p001_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_producteur` tinyint(1) NOT NULL DEFAULT '0',
  `is_distributeur` tinyint(1) NOT NULL DEFAULT '0',
  `is_importateur` tinyint(1) NOT NULL DEFAULT '0',
  `is_utilisateur` tinyint(1) NOT NULL DEFAULT '0',
  `pays_fournisseur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_produit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appelation_commercial` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formule_chimique` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination_pays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utilisation_produit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aspect_produit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conditionnement_produit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poids` double(15,8) NOT NULL DEFAULT '0.00000000',
  `quantite` double UNSIGNED NOT NULL DEFAULT '0',
  `is_corrosif` tinyint(1) NOT NULL DEFAULT '0',
  `is_iritant` tinyint(1) NOT NULL DEFAULT '0',
  `is_toxic` tinyint(1) NOT NULL DEFAULT '0',
  `is_inflammable` tinyint(1) NOT NULL DEFAULT '0',
  `is_danger_env` tinyint(1) NOT NULL DEFAULT '0',
  `type_local_stockage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacite_stockage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_certif` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `denomination_sociale_demandeur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `denomination_sociale_fournisseur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse_postale_demandeur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse_fournisseur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autre_danger` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_local_stockage_autre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `systeme_transport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agrement_transport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certified` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `output_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_etude_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paiement` tinyint(1) DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_agent_assign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_p0010_s`
--

CREATE TABLE `demande_p0010_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_quittance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_delivrance_quittance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_quittance` date DEFAULT NULL,
  `date_delivrance_quittance` date DEFAULT NULL,
  `adresse_destination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moyen_transport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature_produit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unite_mesure` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree_validite_permis` int DEFAULT NULL,
  `adresse_origine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_coupe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `superficie_lieu_coupe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `espece_coupe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_certif` date DEFAULT NULL,
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certified` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_agent_assign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_p0011_s`
--

CREATE TABLE `demande_p0011_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_quittance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_delivrance_quittance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_quittance` date DEFAULT NULL,
  `date_delivrance_quittance` date DEFAULT NULL,
  `adresse_destination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moyen_transport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature_produit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unite_mesure` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree_validite_permis` int DEFAULT NULL,
  `espece_coupe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_certif` date DEFAULT NULL,
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certified` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `superficie` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depot` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exploitant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `output_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_etude_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paiement` tinyint(1) DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_agent_assign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_p0012_s`
--

CREATE TABLE `demande_p0012_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `date_certif` date DEFAULT NULL,
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_photographique` tinyint(1) NOT NULL DEFAULT '0',
  `is_touristique` tinyint(1) NOT NULL DEFAULT '0',
  `is_cinematographique` tinyint(1) NOT NULL DEFAULT '0',
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `output_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_etude_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paiement` tinyint(1) DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_agent_assign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_p002_s`
--

CREATE TABLE `demande_p002_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_certif` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certified` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `output_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domaine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sous_domaine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note_etude_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paiement` tinyint(1) DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_agent_assign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_p003_s`
--

CREATE TABLE `demande_p003_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_certif` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certified` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `output_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_etude_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paiement` tinyint(1) DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_agent_assign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_p004_s`
--

CREATE TABLE `demande_p004_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_commun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_scientifique` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classe_age_animal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe_animal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_provenance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condition_acquisition` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motif_detention` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_quittance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_delivrance_quittance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_quittance` date DEFAULT NULL,
  `date_delivrance_quittance` date DEFAULT NULL,
  `numero_permis_pdas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_certif` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certified` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `output_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_etude_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paiement` tinyint(1) DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_agent_assign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_p004_s`
--

INSERT INTO `demande_p004_s` (`uuid`, `libelle_court`, `libelle_long`, `etat`, `date_demande`, `identite`, `beneficiaire`, `beneficiaire_piece_jointe`, `montant`, `delai`, `code`, `nom_commun`, `nom_scientifique`, `classe_age_animal`, `sexe_animal`, `lieu_provenance`, `condition_acquisition`, `motif_detention`, `email`, `numero_quittance`, `lieu_delivrance_quittance`, `date_quittance`, `date_delivrance_quittance`, `numero_permis_pdas`, `procedure_id`, `type_demande_id`, `commune_id`, `date_certif`, `created_at`, `updated_at`, `usager_id`, `last_modified_by`, `is_certified`, `adresse_beneficiaire`, `reference`, `output_file`, `note_etude_file`, `paiement`, `created_by`, `updated_by`, `deleted_by`, `last_agent_assign`, `commentaire`, `province_id`) VALUES
('3844b57a-7bae-4742-bb23-157907b4bdfa', '', NULL, 'D', NULL, NULL, NULL, NULL, 0, '0000-00-00', NULL, 'test', 'test', '12', NULL, '018fcd73-7cb2-455c-9c16-b3ca5cf3b52f', 'azerty', 'test', NULL, NULL, NULL, NULL, NULL, NULL, '627ee1eb-1246-47cf-ac20-ffa053cf449a', NULL, '4b976f29-8870-44d3-8fc2-58cc6337f6df', NULL, '2024-01-26 22:54:16', '2024-01-26 22:54:16', '19d9f144-53ba-4b29-9391-496ea91fe587', NULL, 1, NULL, 'DOCP00420240126225416', NULL, NULL, 1, '5b20071f-ca22-456e-8ecc-5f563ebd066e', '5b20071f-ca22-456e-8ecc-5f563ebd066e', NULL, NULL, NULL, '0db972e1-8708-43bb-8df9-6c092c9c2524');

-- --------------------------------------------------------

--
-- Structure de la table `demande_p005_s`
--

CREATE TABLE `demande_p005_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_quittance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_delivrance_quittance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_quittance` date DEFAULT NULL,
  `date_delivrance_quittance` date DEFAULT NULL,
  `adresse_destination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moyen_transport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature_produit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unite_mesure` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree_validite_permis` int DEFAULT NULL,
  `date_certif` date DEFAULT NULL,
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certified` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantite_produit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse_demandeur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `immatriculation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree_parcours` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origine_produit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destination_produit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `output_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_etude_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paiement` tinyint(1) DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_agent_assign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_p006_s`
--

CREATE TABLE `demande_p006_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_producteur` tinyint(1) NOT NULL DEFAULT '0',
  `is_distributeur` tinyint(1) NOT NULL DEFAULT '0',
  `is_importateur` tinyint(1) NOT NULL DEFAULT '0',
  `pays_producteur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_adresse_producteur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `micronage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poids` double(15,8) NOT NULL DEFAULT '0.00000000',
  `description_physique` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantite_annuel` double(15,8) NOT NULL DEFAULT '0.00000000',
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_certif` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certified` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `output_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_etude_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paiement` tinyint(1) DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_agent_assign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_p007_s`
--

CREATE TABLE `demande_p007_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_producteur` tinyint(1) NOT NULL DEFAULT '0',
  `is_distributeur` tinyint(1) NOT NULL DEFAULT '0',
  `is_importateur` tinyint(1) NOT NULL DEFAULT '0',
  `pays_producteur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse_producteur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_producteur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `micronage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `poids` double(15,8) NOT NULL DEFAULT '0.00000000',
  `description_physique` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantite_annuel` double(15,8) NOT NULL DEFAULT '0.00000000',
  `date_certif` date DEFAULT NULL,
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certified` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `output_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_etude_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paiement` tinyint(1) DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_agent_assign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delai_traitement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_p008_s`
--

CREATE TABLE `demande_p008_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_certif` date DEFAULT NULL,
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certified` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siege_social` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boite_postale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `output_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_etude_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paiement` tinyint(1) DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_agent_assign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activite_menes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_p009_s`
--

CREATE TABLE `demande_p009_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_demande` date DEFAULT NULL,
  `identite` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiaire_piece_jointe` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `delai` date DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_quittance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lieu_delivrance_quittance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_quittance` date DEFAULT NULL,
  `date_delivrance_quittance` date DEFAULT NULL,
  `adresse_destination` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moyen_transport` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nature_produit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unite_mesure` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duree_validite_permis` int DEFAULT NULL,
  `tarif_bois` bigint NOT NULL DEFAULT '0',
  `tarif_charbon` bigint NOT NULL DEFAULT '0',
  `date_certif` date DEFAULT NULL,
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_certified` tinyint(1) NOT NULL DEFAULT '0',
  `adresse_beneficiaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_agent_assign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_pieces`
--

CREATE TABLE `demande_pieces` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_piece_p001_s`
--

CREATE TABLE `demande_piece_p001_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p001_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autre_danger` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_piece_p0010_s`
--

CREATE TABLE `demande_piece_p0010_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p0010_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_piece_p0011_s`
--

CREATE TABLE `demande_piece_p0011_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p0011_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_piece_p0012_s`
--

CREATE TABLE `demande_piece_p0012_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p0012_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_piece_p002_s`
--

CREATE TABLE `demande_piece_p002_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p002_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_piece_p003_s`
--

CREATE TABLE `demande_piece_p003_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p003_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_piece_p004_s`
--

CREATE TABLE `demande_piece_p004_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p004_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_piece_p004_s`
--

INSERT INTO `demande_piece_p004_s` (`uuid`, `libelle`, `chemin`, `piece_jointe_id`, `demande_p004_id`, `created_at`, `updated_at`, `last_modified_by`, `created_by`, `updated_by`, `deleted_by`) VALUES
('b7f1a6a0-f0e8-4e3b-b750-a4811fc05610', 'Certificat Sanitaire', 'public/demandeP004/1706309656m6vC.pdf', NULL, '3844b57a-7bae-4742-bb23-157907b4bdfa', '2024-01-26 22:54:17', '2024-01-26 22:54:17', NULL, '5b20071f-ca22-456e-8ecc-5f563ebd066e', '5b20071f-ca22-456e-8ecc-5f563ebd066e', NULL),
('d04c3089-8f10-4a01-87f9-3be4c20dbaed', 'Certificat Origine', 'public/demandeP004/1706309656xKYL.pdf', NULL, '3844b57a-7bae-4742-bb23-157907b4bdfa', '2024-01-26 22:54:17', '2024-01-26 22:54:17', NULL, '5b20071f-ca22-456e-8ecc-5f563ebd066e', '5b20071f-ca22-456e-8ecc-5f563ebd066e', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `demande_piece_p005_s`
--

CREATE TABLE `demande_piece_p005_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p005_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_piece_p006_s`
--

CREATE TABLE `demande_piece_p006_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p006_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_piece_p007_s`
--

CREATE TABLE `demande_piece_p007_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p007_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_piece_p008_s`
--

CREATE TABLE `demande_piece_p008_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p008_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_piece_p009_s`
--

CREATE TABLE `demande_piece_p009_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chemin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_p009_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `demande_sous_domaine_p002_s`
--

CREATE TABLE `demande_sous_domaine_p002_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_domaine_p002_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_categorie_p002_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_sous_domaine_p002_s`
--

INSERT INTO `demande_sous_domaine_p002_s` (`uuid`, `libelle_court`, `libelle_long`, `demande_domaine_p002_id`, `demande_categorie_p002_id`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
('028491c1-869f-4928-b061-038c4ba5b54f', 'EE', 'EE', 'cc0aedee-5d32-4e29-8943-3e334d929a88', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:04', '2023-12-26 09:49:04'),
('0785d2c3-1912-4a93-9d56-4891faf7f376', 'Fi1', 'Fi1', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:01', '2023-12-26 09:49:01'),
('0beef347-c4f6-4434-83fd-d6d0b8b34b58', 'Fs3', 'Fs3', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:00', '2023-12-26 09:49:00'),
('100e9b20-4530-496b-aff3-723073012740', 'Eu1', 'Eu1', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:02', '2023-12-26 09:49:02'),
('13576398-da8a-43c3-875c-a9f2260ac659', 'Fa3', 'Fa3', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:58', '2023-12-26 09:48:58'),
('16e2d6bb-2b06-4c63-959c-7fe73e63d890', 'U1', 'U1', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:59', '2023-12-26 09:48:59'),
('1ba5044d-a5d6-4966-a5b6-6ebcb9e928de', 'R1', 'R1', '73a3f517-ad2e-4992-974b-2f41a16119e5', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:49:02', '2023-12-26 09:49:02'),
('22978f05-77c6-40aa-ad90-044d6fad96f8', 'Lp', 'Lp', '73a3f517-ad2e-4992-974b-2f41a16119e5', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:49:02', '2023-12-26 09:49:02'),
('23305304-6a5c-44ef-89bc-01bbd6e4ca9f', 'Fc3', 'Fc3', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:01', '2023-12-26 09:49:01'),
('32e0e582-8ba1-4616-bf45-a8aa9352f8d5', 'Fsic3', 'Fsic3', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:02', '2023-12-26 09:49:02'),
('33023226-1ba9-4a1f-9121-5051b097fa33', 'TC', 'TC', 'cc0aedee-5d32-4e29-8943-3e334d929a88', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:49:03', '2023-12-26 09:49:03'),
('3a3f031f-9149-4ff0-b546-fbe80e92776b', 'ED', 'ED', 'cc0aedee-5d32-4e29-8943-3e334d929a88', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:04', '2023-12-26 09:49:04'),
('3b82d409-cbf1-47f2-af25-b460dcf27c47', 'Ac', 'Ac', '73a3f517-ad2e-4992-974b-2f41a16119e5', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:03', '2023-12-26 09:49:03'),
('3ebfe307-14ed-4b79-9e08-ee4ff36a881d', 'Fa1', 'Fa1', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:58', '2023-12-26 09:48:58'),
('400190ff-7a92-4025-82cb-5abfec9c39e0', 'R2', 'R2', '73a3f517-ad2e-4992-974b-2f41a16119e5', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:49:03', '2023-12-26 09:49:03'),
('50c198e6-e29d-4940-acae-b45d655357cc', 'Fsic1', 'Fsic1', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:01', '2023-12-26 09:49:01'),
('5d926e94-1365-40a6-bca8-67fad58f8fc8', 'Fs1', 'Fs1', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:00', '2023-12-26 09:49:00'),
('627f4f97-ee23-4593-942e-8afc38db2664', 'Fd2', 'Fd2', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:58', '2023-12-26 09:48:58'),
('628e13ff-d529-4f23-a9b4-4e8041b5a693', 'Fi3', 'Fi3', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:01', '2023-12-26 09:49:01'),
('67063f86-63c6-47bf-acbb-46eb33a11867', 'Fa2', 'Fa2', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:58', '2023-12-26 09:48:58'),
('6e554d4b-5f26-4988-9401-1b9e0b45411c', 'EA', 'EA', 'cc0aedee-5d32-4e29-8943-3e334d929a88', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:04', '2023-12-26 09:49:04'),
('89e6fd9d-34f8-4729-aa31-8f48eeb69c07', 'Fs2', 'Fs2', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:00', '2023-12-26 09:49:00'),
('8bed26f2-5606-487e-9643-74d4081cf472', 'Fd1', 'Fd1', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:58', '2023-12-26 09:48:58'),
('8e0020b2-1122-48ab-a4e0-9fedd397d550', 'Fn3', 'Fn3', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:59', '2023-12-26 09:48:59'),
('8edc3b9a-dee2-46f1-8564-b445592a3c5f', 'TB', 'TB', 'cc0aedee-5d32-4e29-8943-3e334d929a88', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:49:03', '2023-12-26 09:49:03'),
('98aa7475-3573-416c-a11e-87cf9a0e0fbf', 'Eu4', 'Eu4', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:02', '2023-12-26 09:49:02'),
('9b8ab1f5-bbf3-41a6-9bec-5569ae3faa53', 'EC', 'EC', 'cc0aedee-5d32-4e29-8943-3e334d929a88', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:04', '2023-12-26 09:49:04'),
('a77e6c63-c2b0-4172-bc7f-652e3d64a808', 'Fe2', 'Fe2', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:00', '2023-12-26 09:49:00'),
('a89743b4-72eb-48c5-9d64-733a332e98e8', 'Fi4', 'Fi4', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:01', '2023-12-26 09:49:01'),
('a8a82940-3b42-4855-9818-9869860d9f09', 'Fc2', 'Fc2', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:01', '2023-12-26 09:49:01'),
('aba783b8-fe1d-404c-bb7f-1a75d8308568', 'Fn1', 'Fn1', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:58', '2023-12-26 09:48:58'),
('b3a5a80e-f58c-4b84-a944-7469cf5bbafd', 'TE', 'TE', 'cc0aedee-5d32-4e29-8943-3e334d929a88', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:49:04', '2023-12-26 09:49:04'),
('b96fb06b-4c4a-4baa-9f34-21af6ff17a52', 'U2', 'U2', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:49:00', '2023-12-26 09:49:00'),
('ba78a913-aa4f-4cf2-8af0-5ee3a7671496', 'TA', 'TA', 'cc0aedee-5d32-4e29-8943-3e334d929a88', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:49:03', '2023-12-26 09:49:03'),
('bc08af1c-837b-46a8-8fc8-3b91cd241bb0', 'Eu3', 'Eu3', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:02', '2023-12-26 09:49:02'),
('bd1eea10-a33a-4c5d-b81e-21f6dae65c7d', 'Fd3', 'Fd3', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:58', '2023-12-26 09:48:58'),
('be1282a0-80fd-4987-b2f9-2b1f466e3839', 'P2', 'P2', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:59', '2023-12-26 09:48:59'),
('bff03686-8159-47ba-b79b-0f8af41bc327', 'TD', 'TD', 'cc0aedee-5d32-4e29-8943-3e334d929a88', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:49:03', '2023-12-26 09:49:03'),
('c017d0fe-861a-4002-980a-eef666280ff0', 'Fi2', 'Fi2', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:01', '2023-12-26 09:49:01'),
('c3c1235c-a089-4ac5-a097-d8d988646b6c', 'Eu2', 'Eu12', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:02', '2023-12-26 09:49:02'),
('caca38c1-f738-4ec8-92bb-30811bbf63af', 'Fc1', 'Fc1', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:01', '2023-12-26 09:49:01'),
('cd5cfbc0-9850-4a7b-bd5d-11938fac10db', 'Aac', 'Aac', '73a3f517-ad2e-4992-974b-2f41a16119e5', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:03', '2023-12-26 09:49:03'),
('cf854e9b-ac34-4758-bb37-93babfde4ab6', 'P1', 'P1', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:59', '2023-12-26 09:48:59'),
('d26e0ef7-bf6b-4d3b-ab98-92ff28fa563d', 'Fsic2', 'Fsic2', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:02', '2023-12-26 09:49:02'),
('d2dffab4-f7fc-460e-aeda-cf7430709d0c', 'Fn2', 'Fn2', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:59', '2023-12-26 09:48:59'),
('f573c580-f97e-4775-9f32-0aa2f47ebb98', 'Fe1', 'Fe1', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:00', '2023-12-26 09:49:00'),
('f7e13b04-22ca-4c27-ab6c-4a67d713f57a', 'R3', 'R3', '73a3f517-ad2e-4992-974b-2f41a16119e5', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:49:03', '2023-12-26 09:49:03'),
('f9238406-37a1-49b4-b19a-4da532231e21', 'Ap', 'Ap', '73a3f517-ad2e-4992-974b-2f41a16119e5', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:03', '2023-12-26 09:49:03'),
('fbb46c69-773a-4b6d-bcdf-d6e1248da46b', 'EB', 'EB', 'cc0aedee-5d32-4e29-8943-3e334d929a88', 'f2a3206f-0a3d-4a1c-bc9f-d213ad35b859', NULL, NULL, NULL, '2023-12-26 09:49:04', '2023-12-26 09:49:04'),
('fc6b93d5-abd1-4702-8ffc-5eb5f3ab8244', 'P3', 'P3', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:48:59', '2023-12-26 09:48:59'),
('fe0063e9-c0b0-4d5c-9115-7581ab212f72', 'U3', 'U3', '9260dd87-d4e0-4e44-8fb2-17c8d5cf2897', '522d7924-39e9-4a28-86cb-fa84014360e6', NULL, NULL, NULL, '2023-12-26 09:49:00', '2023-12-26 09:49:00');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `localites`
--

CREATE TABLE `localites` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`, `created_by`, `updated_by`, `deleted_by`) VALUES
(1, '2014_10_11_000000_create_type_usagers_table', 1, NULL, NULL, NULL),
(2, '2014_10_11_090642_create_type_identites_table', 1, NULL, NULL, NULL),
(3, '2014_10_12_000000_create_users_table', 1, NULL, NULL, NULL),
(4, '2014_10_12_100000_create_password_reset_tokens_table', 1, NULL, NULL, NULL),
(5, '2019_08_19_000000_create_failed_jobs_table', 1, NULL, NULL, NULL),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1, NULL, NULL, NULL),
(7, '2021_12_07_111416_create_regions_table', 1, NULL, NULL, NULL),
(8, '2021_12_07_111828_create_provinces_table', 1, NULL, NULL, NULL),
(9, '2022_01_18_101110_create_communes_table', 1, NULL, NULL, NULL),
(10, '2022_01_18_101450_create_villages_table', 1, NULL, NULL, NULL),
(11, '2023_09_28_090103_create_base_juridiques_table', 1, NULL, NULL, NULL),
(12, '2023_09_28_090532_create_categories_table', 1, NULL, NULL, NULL),
(13, '2023_09_28_090704_create_piece_jointes_table', 1, NULL, NULL, NULL),
(14, '2023_09_28_090847_create_type_demandes_table', 1, NULL, NULL, NULL),
(15, '2023_09_28_090923_create_structures_table', 1, NULL, NULL, NULL),
(16, '2023_09_28_090924_create_services_table', 1, NULL, NULL, NULL),
(17, '2023_09_28_090925_create_procedures_table', 1, NULL, NULL, NULL),
(18, '2023_09_28_090939_create_demandes_table', 1, NULL, NULL, NULL),
(19, '2023_09_28_095220_create_demande_p001_s_table', 1, NULL, NULL, NULL),
(20, '2023_09_28_095228_create_demande_p002_s_table', 1, NULL, NULL, NULL),
(21, '2023_09_28_095237_create_demande_p003_s_table', 1, NULL, NULL, NULL),
(22, '2023_09_28_095244_create_demande_p004_s_table', 1, NULL, NULL, NULL),
(23, '2023_09_28_095253_create_demande_p005_s_table', 1, NULL, NULL, NULL),
(24, '2023_09_28_095303_create_demande_p006_s_table', 1, NULL, NULL, NULL),
(25, '2023_09_28_095312_create_demande_p007_s_table', 1, NULL, NULL, NULL),
(26, '2023_09_28_095319_create_demande_p008_s_table', 1, NULL, NULL, NULL),
(27, '2023_09_28_095326_create_demande_p009_s_table', 1, NULL, NULL, NULL),
(28, '2023_09_28_095335_create_demande_p0010_s_table', 1, NULL, NULL, NULL),
(29, '2023_09_28_095342_create_demande_p0011_s_table', 1, NULL, NULL, NULL),
(30, '2023_09_28_095343_create_commentaires_p0010_table', 1, NULL, NULL, NULL),
(31, '2023_09_28_095343_create_commentaires_p0011_table', 1, NULL, NULL, NULL),
(32, '2023_09_28_095343_create_commentaires_p001_table', 1, NULL, NULL, NULL),
(33, '2023_09_28_095343_create_commentaires_p002_table', 1, NULL, NULL, NULL),
(34, '2023_09_28_095343_create_commentaires_p003_table', 1, NULL, NULL, NULL),
(35, '2023_09_28_095343_create_commentaires_p004_table', 1, NULL, NULL, NULL),
(36, '2023_09_28_095343_create_commentaires_p005_table', 1, NULL, NULL, NULL),
(37, '2023_09_28_095343_create_commentaires_p006_table', 1, NULL, NULL, NULL),
(38, '2023_09_28_095343_create_commentaires_p007_table', 1, NULL, NULL, NULL),
(39, '2023_09_28_095343_create_commentaires_p008_table', 1, NULL, NULL, NULL),
(40, '2023_09_28_095343_create_commentaires_p009_table', 1, NULL, NULL, NULL),
(41, '2023_09_28_095343_create_commentaires_table', 1, NULL, NULL, NULL),
(42, '2023_09_28_095343_create_tarifs_p0010_table', 1, NULL, NULL, NULL),
(43, '2023_09_28_095343_create_tarifs_p0011_table', 1, NULL, NULL, NULL),
(44, '2023_09_28_095343_create_tarifs_p001_table', 1, NULL, NULL, NULL),
(45, '2023_09_28_095343_create_tarifs_p002_table', 1, NULL, NULL, NULL),
(46, '2023_09_28_095343_create_tarifs_p003_table', 1, NULL, NULL, NULL),
(47, '2023_09_28_095343_create_tarifs_p004_table', 1, NULL, NULL, NULL),
(48, '2023_09_28_095343_create_tarifs_p005_table', 1, NULL, NULL, NULL),
(49, '2023_09_28_095343_create_tarifs_p006_table', 1, NULL, NULL, NULL),
(50, '2023_09_28_095343_create_tarifs_p007_table', 1, NULL, NULL, NULL),
(51, '2023_09_28_095343_create_tarifs_p008_table', 1, NULL, NULL, NULL),
(52, '2023_09_28_095343_create_tarifs_p009_table', 1, NULL, NULL, NULL),
(53, '2023_09_28_095343_create_tarifs_table', 1, NULL, NULL, NULL),
(54, '2023_09_28_113001_create_demande_pieces_p0010_table', 1, NULL, NULL, NULL),
(55, '2023_09_28_113001_create_demande_pieces_p0011_table', 1, NULL, NULL, NULL),
(56, '2023_09_28_113001_create_demande_pieces_p001_table', 1, NULL, NULL, NULL),
(57, '2023_09_28_113001_create_demande_pieces_p002_table', 1, NULL, NULL, NULL),
(58, '2023_09_28_113001_create_demande_pieces_p003_table', 1, NULL, NULL, NULL),
(59, '2023_09_28_113001_create_demande_pieces_p004_table', 1, NULL, NULL, NULL),
(60, '2023_09_28_113001_create_demande_pieces_p005_table', 1, NULL, NULL, NULL),
(61, '2023_09_28_113001_create_demande_pieces_p006_table', 1, NULL, NULL, NULL),
(62, '2023_09_28_113001_create_demande_pieces_p007_table', 1, NULL, NULL, NULL),
(63, '2023_09_28_113001_create_demande_pieces_p008_table', 1, NULL, NULL, NULL),
(64, '2023_09_28_113001_create_demande_pieces_p009_table', 1, NULL, NULL, NULL),
(65, '2023_09_28_113001_create_demande_pieces_table', 1, NULL, NULL, NULL),
(66, '2023_09_28_113858_procedure_base_juridiques', 1, NULL, NULL, NULL),
(67, '2023_09_28_114603_piece_jointe_procedures', 1, NULL, NULL, NULL),
(68, '2023_09_28_130118_add_localite_to_user_table', 1, NULL, NULL, NULL),
(69, '2023_10_03_123430_add_column_to_demande_poo1_s_table', 1, NULL, NULL, NULL),
(70, '2023_10_03_125135_drop_column_to_demande_p001_s_table', 1, NULL, NULL, NULL),
(71, '2023_10_04_135931_create_agents_table', 1, NULL, NULL, NULL),
(72, '2023_10_04_140038_create_usagers_table', 1, NULL, NULL, NULL),
(73, '2023_10_04_140107_create_mode_paiements_table', 1, NULL, NULL, NULL),
(74, '2023_10_04_140108_create_paiements_table', 1, NULL, NULL, NULL),
(75, '2023_10_04_141514_create_affectations_table', 1, NULL, NULL, NULL),
(76, '2023_10_04_151150_create_affectation_p001_s_table', 1, NULL, NULL, NULL),
(77, '2023_10_04_151155_create_affectation_p002_s_table', 1, NULL, NULL, NULL),
(78, '2023_10_04_151158_create_affectation_p003_s_table', 1, NULL, NULL, NULL),
(79, '2023_10_04_151202_create_affectation_p004_s_table', 1, NULL, NULL, NULL),
(80, '2023_10_04_151205_create_affectation_p005_s_table', 1, NULL, NULL, NULL),
(81, '2023_10_04_151209_create_affectation_p006_s_table', 1, NULL, NULL, NULL),
(82, '2023_10_04_151213_create_affectation_p007_s_table', 1, NULL, NULL, NULL),
(83, '2023_10_04_151216_create_affectation_p008_s_table', 1, NULL, NULL, NULL),
(84, '2023_10_04_151219_create_affectation_p009_s_table', 1, NULL, NULL, NULL),
(85, '2023_10_04_151225_create_affectation_p0010_s_table', 1, NULL, NULL, NULL),
(86, '2023_10_04_151229_create_affectation_p0011_s_table', 1, NULL, NULL, NULL),
(87, '2023_10_05_131604_drop_froreign_key_to_agent_table', 1, NULL, NULL, NULL),
(88, '2023_10_05_132252_drop_froreign_key_to_usagers_table', 1, NULL, NULL, NULL),
(89, '2023_10_05_132502_add_agent_i_d_and_usager_id_column_to_users_table', 1, NULL, NULL, NULL),
(90, '2023_10_05_133435_add_column_to_demandes_table', 1, NULL, NULL, NULL),
(91, '2023_10_05_140120_add_code_column_to_regions_table', 1, NULL, NULL, NULL),
(92, '2023_10_05_140827_add_last_modified_to_demande_pieces_table', 1, NULL, NULL, NULL),
(93, '2023_10_05_143156_add_enterprise_item_to_usagers_table', 1, NULL, NULL, NULL),
(94, '2023_10_05_143616_create_localites_table', 1, NULL, NULL, NULL),
(95, '2023_10_05_144147_create_statut_demandes_table', 1, NULL, NULL, NULL),
(96, '2023_10_05_144203_create_roles_table', 1, NULL, NULL, NULL),
(97, '2023_10_05_144530_link_role_to_usagers_table', 1, NULL, NULL, NULL),
(98, '2023_10_05_154123_add_column_to_demande_p005_table', 1, NULL, NULL, NULL),
(99, '2023_10_06_130728_create_table_demande_p0012', 1, NULL, NULL, NULL),
(100, '2023_10_06_130729_create_demande_pieces_p0012_table', 1, NULL, NULL, NULL),
(101, '2023_10_06_130730_add_column_to_demande_poo12_s_table ', 1, NULL, NULL, NULL),
(102, '2023_10_10_140043_add_column_to_procedures_table', 1, NULL, NULL, NULL),
(103, '2023_10_10_145804_create_pays_table', 1, NULL, NULL, NULL),
(104, '2023_10_10_145846_add_field_autre_danger_to_procedure_p001_table', 1, NULL, NULL, NULL),
(105, '2023_10_11_140257_add_enterprise_to_usagers_table', 1, NULL, NULL, NULL),
(106, '2023_10_11_185525_add_enterprise_to_demande_p008_table', 1, NULL, NULL, NULL),
(107, '2023_10_12_141650_add_usager_id_instead_of_user_id_to_demande_p0012s_table', 1, NULL, NULL, NULL),
(108, '2023_10_12_144504_add_column_code_color_to_procedure_table', 1, NULL, NULL, NULL),
(109, '2023_10_20_142228_add_column_to_demande_p0011_s_table', 1, NULL, NULL, NULL),
(110, '2023_10_20_144852_add_column_to_base_juridiques_table', 1, NULL, NULL, NULL),
(111, '2023_10_23_142021_add_column_to_demande_p0011_s_table', 1, NULL, NULL, NULL),
(112, '2023_10_23_164922_add_columns_identite_animal_to_table', 1, NULL, NULL, NULL),
(113, '2023_10_25_141542_add_column_to_agents_table', 1, NULL, NULL, NULL),
(114, '2023_10_26_134316_create_commentaires_p0012_table', 1, NULL, NULL, NULL),
(115, '2023_10_26_134317_add_column_to_demande_p001_s_table', 1, NULL, NULL, NULL),
(116, '2023_10_26_134318_add_column_to_demande_p002_s_table', 1, NULL, NULL, NULL),
(117, '2023_10_26_134319_add_column_to_demande_p003_s_table', 1, NULL, NULL, NULL),
(118, '2023_10_26_134320_add_column_to_demande_p004_s_table', 1, NULL, NULL, NULL),
(119, '2023_10_26_134321_add_column_to_demande_p005_s_table', 1, NULL, NULL, NULL),
(120, '2023_10_26_134322_add_column_to_demande_p006_s_table', 1, NULL, NULL, NULL),
(121, '2023_10_26_134323_add_column_to_demande_p007_s_table', 1, NULL, NULL, NULL),
(122, '2023_10_26_134324_add_column_to_demande_p008_s_table', 1, NULL, NULL, NULL),
(123, '2023_10_26_134325_add_column_to_demande_p0011_s_table', 1, NULL, NULL, NULL),
(124, '2023_10_26_134326_add_column_to_demande_p0012_s_table', 1, NULL, NULL, NULL),
(125, '2023_10_30_142837_add_column_role_id_to_users_table', 1, NULL, NULL, NULL),
(126, '2023_11_03_115816_create_contacts_table', 1, NULL, NULL, NULL),
(127, '2023_11_06_102634_add_column_to_demande_p002_s_table', 1, NULL, NULL, NULL),
(128, '2023_11_07_103134_add_column_to_demande_p001_s_table', 1, NULL, NULL, NULL),
(129, '2023_11_12_100716_create_plaintes_table', 1, NULL, NULL, NULL),
(130, '2023_11_13_104945_add_column_to_demande_p002_s_table', 1, NULL, NULL, NULL),
(131, '2023_11_13_105038_add_column_to_demande_p003_s_table', 1, NULL, NULL, NULL),
(132, '2023_11_13_105140_add_column_to_demande_p004_s_table', 1, NULL, NULL, NULL),
(133, '2023_11_13_105230_add_column_to_demande_p005_s_table', 1, NULL, NULL, NULL),
(134, '2023_11_13_105312_add_column_to_demande_p006_s_table', 1, NULL, NULL, NULL),
(135, '2023_11_13_105347_add_column_to_demande_p007_s_table', 1, NULL, NULL, NULL),
(136, '2023_11_13_105415_add_column_to_demande_p008_s_table', 1, NULL, NULL, NULL),
(137, '2023_11_13_105446_add_column_to_demande_p0011_s_table', 1, NULL, NULL, NULL),
(138, '2023_11_13_105517_add_column_to_demande_p0012_s_table', 1, NULL, NULL, NULL),
(139, '2023_11_22_134932_add_column_to_demande_p0012_s_table', 1, NULL, NULL, NULL),
(140, '2023_11_22_144302_add_column_to_demande_p001_s_table', 1, NULL, NULL, NULL),
(141, '2023_11_22_151305_add_column_to_demande_p002_s_table', 1, NULL, NULL, NULL),
(142, '2023_11_22_152302_add_column_to_demande_p003_s_table', 1, NULL, NULL, NULL),
(143, '2023_11_22_174452_add_column_to_demande_p004_s_table', 1, NULL, NULL, NULL),
(144, '2023_11_22_174526_add_column_to_demande_p005_s_table', 1, NULL, NULL, NULL),
(145, '2023_11_22_174551_add_column_to_demande_p006_s_table', 1, NULL, NULL, NULL),
(146, '2023_11_22_174619_add_column_to_demande_p007_s_table', 1, NULL, NULL, NULL),
(147, '2023_11_22_174643_add_column_to_demande_p008_s_table', 1, NULL, NULL, NULL),
(148, '2023_11_22_174709_add_column_to_demande_p0011_s_table', 1, NULL, NULL, NULL),
(149, '2023_12_05_151209_add_category_to_plaintes', 1, NULL, NULL, NULL),
(150, '2023_12_05_163414_add_update_by_and_create', 1, NULL, NULL, NULL),
(151, '2023_12_05_163728_add_column_to_users_table', 1, NULL, NULL, NULL),
(152, '2023_12_05_170523_add_column_to_procedure', 1, NULL, NULL, NULL),
(153, '2023_12_06_121305_update_column_in_users_table', 1, NULL, NULL, NULL),
(154, '2023_12_06_124135_create_demande_domaine_p002_s_table', 1, NULL, NULL, NULL),
(155, '2023_12_06_124203_create_demande_categorie_p002_s_table', 1, NULL, NULL, NULL),
(156, '2023_12_06_124248_create_demande_sous_domaine_p002_s_table', 1, NULL, NULL, NULL),
(157, '2023_12_06_141601_add_category_to_plaintes', 1, NULL, NULL, NULL),
(158, '2023_12_06_151229_create_affectation_p0012_s_table', 1, NULL, NULL, NULL),
(159, '2023_12_06_151230_add_agent_assign_to_demande_table', 1, NULL, NULL, NULL),
(160, '2023_12_06_152820_add_periodique_procedure_to_procedures', 1, NULL, NULL, NULL),
(161, '2023_12_07_101102_add_column_to_demande_p007_s_table', 1, NULL, NULL, NULL),
(162, '2023_12_07_145553_add_usager_to_plaintes', 1, NULL, NULL, NULL),
(163, '2023_12_07_153836_add_column_to_demande_p008_s_table', 1, NULL, NULL, NULL),
(164, '2023_12_07_163627_add_tarif_to_procedures_table', 1, NULL, NULL, NULL),
(165, '2023_12_08_153836_add_commentaire_to_affectation_table', 1, NULL, NULL, NULL),
(166, '2023_12_08_153836_add_commentaire_to_demande_table', 1, NULL, NULL, NULL),
(167, '2023_12_12_145551_add_column_to_demandes_table', 1, NULL, NULL, NULL),
(168, '2023_12_12_153054_add_column_province_commune_to_agents_table', 1, NULL, NULL, NULL),
(169, '2023_12_14_161038_add_colum_telephone_to_agents_table', 1, NULL, NULL, NULL),
(170, '2023_12_20_092101_add_column_etat_to_users_table', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `mode_paiements`
--

CREATE TABLE `mode_paiements` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE `paiements` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ref_paiement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_paiement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_paiement` date DEFAULT NULL,
  `mode_paiement_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_procedure` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `last_modified_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`uuid`, `code`, `libelle`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
('00c32c41-f0bc-49aa-80d0-a5c7d91c4e25', 'BRA', 'BrÃ©sil', '2023-12-26 09:48:31', '2023-12-26 09:48:31', NULL, NULL, NULL),
('018fcd73-7cb2-455c-9c16-b3ca5cf3b52f', 'KAZ', 'Kazakhstan', '2023-12-26 09:48:41', '2023-12-26 09:48:41', NULL, NULL, NULL),
('01bff647-0ab2-4dc2-b9b8-68d49fa5778f', 'YEM', 'YÃ©men', '2023-12-26 09:48:55', '2023-12-26 09:48:55', NULL, NULL, NULL),
('0220f756-2d87-4d10-8043-c0a7eef23bf1', 'FRO', 'ÃŽles FÃ©roÃ©', '2023-12-26 09:48:35', '2023-12-26 09:48:35', NULL, NULL, NULL),
('02f24bf3-db93-4c14-8493-06104f8ad628', 'GHA', 'Ghana', '2023-12-26 09:48:37', '2023-12-26 09:48:37', NULL, NULL, NULL),
('0448ec82-0b24-4e26-b7c3-2bf14f4fa202', 'IMN', 'ÃŽle de Man', '2023-12-26 09:48:54', '2023-12-26 09:48:54', NULL, NULL, NULL),
('04713973-da71-46f6-8136-063694aefb71', 'NLD', 'Pays-Bas', '2023-12-26 09:48:45', '2023-12-26 09:48:45', NULL, NULL, NULL),
('05e32746-0f4a-4a6c-81ec-fb08db6f32cb', 'SAU', 'Arabie Saoudite', '2023-12-26 09:48:50', '2023-12-26 09:48:50', NULL, NULL, NULL),
('062511aa-4693-4a7b-a141-a92bcdd960d1', 'PLW', 'Palaos', '2023-12-26 09:48:47', '2023-12-26 09:48:47', NULL, NULL, NULL),
('0638a491-fe8f-4fbd-9e21-b5e8f9bc122c', 'CUB', 'Cuba', '2023-12-26 09:48:34', '2023-12-26 09:48:34', NULL, NULL, NULL),
('08a10ce1-bd70-4c4e-94f3-564d75803c90', 'LTU', 'Lituanie', '2023-12-26 09:48:43', '2023-12-26 09:48:43', NULL, NULL, NULL),
('094b96d5-d8a3-42e4-98d3-b77c90165d26', 'SJM', 'Svalbard etÃŽle Jan Mayen', '2023-12-26 09:48:52', '2023-12-26 09:48:52', NULL, NULL, NULL),
('0c662ae1-2399-4b1d-bf0b-7dbdddc7fb68', 'NOR', 'NorvÃ¨ge', '2023-12-26 09:48:46', '2023-12-26 09:48:46', NULL, NULL, NULL),
('0d1bab2e-2f03-49fa-bcd2-32fefe3a085e', 'BDI', 'Burundi', '2023-12-26 09:48:32', '2023-12-26 09:48:32', NULL, NULL, NULL),
('0d903b0e-d4fb-447b-8cec-239c9421fc84', 'KNA', 'Saint-Kitts-et-Nevis', '2023-12-26 09:48:49', '2023-12-26 09:48:49', NULL, NULL, NULL),
('0e54f9e1-352e-45d0-85f5-5ec68d476484', 'LBY', 'Jamahiriya Arabe Libyenne', '2023-12-26 09:48:42', '2023-12-26 09:48:42', NULL, NULL, NULL),
('105aba1d-cbb4-4728-a3c3-47c784e0c0a8', 'HMD', 'ÃŽles Heard et Mcdonald', '2023-12-26 09:48:39', '2023-12-26 09:48:39', NULL, NULL, NULL),
('129083d0-4dca-489e-ad6f-b4547f60acb2', 'VNM', 'Viet Nam', '2023-12-26 09:48:51', '2023-12-26 09:48:51', NULL, NULL, NULL),
('12f58de6-586c-4580-9476-04f24b981952', 'CPV', 'Cap-vert', '2023-12-26 09:48:32', '2023-12-26 09:48:32', NULL, NULL, NULL),
('15562ff6-27b5-4c71-8de9-5fedea18444f', 'LKA', 'Sri Lanka', '2023-12-26 09:48:33', '2023-12-26 09:48:33', NULL, NULL, NULL),
('15580b58-1fef-4117-a967-939737d3b762', 'SGS', 'GÃ©orgie du Sud et les ÃŽles Sandwich du Sud', '2023-12-26 09:48:35', '2023-12-26 09:48:35', NULL, NULL, NULL),
('15d8b4d5-5455-4cc7-9c1f-d7df54b861a6', 'AIA', 'Anguilla', '2023-12-26 09:48:49', '2023-12-26 09:48:49', NULL, NULL, NULL),
('15e877dc-daeb-401f-bc81-193420fb79b2', 'UMI', 'ÃŽles Mineures Ã‰loignÃ©es des Ã‰tats-Unis', '2023-12-26 09:48:47', '2023-12-26 09:48:47', NULL, NULL, NULL),
('16e287c5-6528-4fd4-894e-3ffd89529eea', 'HKG', 'Hong-Kong', '2023-12-26 09:48:39', '2023-12-26 09:48:39', NULL, NULL, NULL),
('17127266-6338-45af-a420-07461be163f6', 'LBN', 'Liban', '2023-12-26 09:48:42', '2023-12-26 09:48:42', NULL, NULL, NULL),
('1789f9c2-e8e4-4da5-acd4-1819ce43cf44', 'MLT', 'Malte', '2023-12-26 09:48:43', '2023-12-26 09:48:43', NULL, NULL, NULL),
('19120ab2-b809-4720-8fe4-b15d20d28d77', 'COD', 'RÃ©publique DÃ©mocratique du Congo', '2023-12-26 09:48:34', '2023-12-26 09:48:34', NULL, NULL, NULL),
('1946424f-0b41-4105-97d3-6c879d0c2d21', 'MNG', 'Mongolie', '2023-12-26 09:48:44', '2023-12-26 09:48:44', NULL, NULL, NULL),
('19ec1592-030d-4921-82d9-437662acc093', 'DJI', 'Djibouti', '2023-12-26 09:48:36', '2023-12-26 09:48:36', NULL, NULL, NULL),
('1b02ae16-2aa5-4f66-951a-c77f909b1ecf', 'GNQ', 'GuinÃ©e Ã‰quatoriale', '2023-12-26 09:48:35', '2023-12-26 09:48:35', NULL, NULL, NULL),
('1b87b06b-de20-4b29-a1de-7d1368fb8b04', 'PSE', 'Territoire Palestinien OccupÃ©', '2023-12-26 09:48:37', '2023-12-26 09:48:37', NULL, NULL, NULL),
('1c3a0217-8ecb-486b-b01c-02a2f980e458', 'MOZ', 'Mozambique', '2023-12-26 09:48:45', '2023-12-26 09:48:45', NULL, NULL, NULL),
('1d645e3c-98b8-4c14-8471-841160c9585f', 'MLI', 'Mali', '2023-12-26 09:48:43', '2023-12-26 09:48:43', NULL, NULL, NULL),
('1e5d606e-d2c6-4f14-8c42-257cca95e8f1', 'PER', 'PÃ©rou', '2023-12-26 09:48:47', '2023-12-26 09:48:47', NULL, NULL, NULL),
('1f0ffe8e-dbf1-44af-bf8d-324c407c8b40', 'KEN', 'Kenya', '2023-12-26 09:48:41', '2023-12-26 09:48:41', NULL, NULL, NULL),
('2387cb9e-37d1-46b4-8b7d-73aa5a02d500', 'MTQ', 'Martinique', '2023-12-26 09:48:44', '2023-12-26 09:48:44', NULL, NULL, NULL),
('2420aaa4-02ba-406f-9080-b5557a73b896', 'CMR', 'Cameroun', '2023-12-26 09:48:32', '2023-12-26 09:48:32', NULL, NULL, NULL),
('247c364d-dd64-4341-ace3-e35efa7c3d49', 'ABW', 'Aruba', '2023-12-26 09:48:45', '2023-12-26 09:48:45', NULL, NULL, NULL),
('24c57366-684b-4756-a25c-90fa4df36d7c', 'LBR', 'LibÃ©ria', '2023-12-26 09:48:42', '2023-12-26 09:48:42', NULL, NULL, NULL),
('2559e587-8e5c-4998-b041-ecbf864bced3', 'PRY', 'Paraguay', '2023-12-26 09:48:47', '2023-12-26 09:48:47', NULL, NULL, NULL),
('25e06de3-6e15-4793-9c43-45bbaa05f337', 'SUR', 'Suriname', '2023-12-26 09:48:52', '2023-12-26 09:48:52', NULL, NULL, NULL),
('27ba4aca-8fa5-4daf-84e8-87fe16dc5764', 'BHR', 'BahreÃ¯n', '2023-12-26 09:48:30', '2023-12-26 09:48:30', NULL, NULL, NULL),
('28d8ca9f-bd97-4758-ab28-aa80d59f78bc', 'MKD', 'L\'ex-RÃ©publique Yougoslave de MacÃ©doine', '2023-12-26 09:48:54', '2023-12-26 09:48:54', NULL, NULL, NULL),
('2a969f65-338e-4b94-a48f-854a30859771', 'MDA', 'RÃ©publique de Moldova', '2023-12-26 09:48:44', '2023-12-26 09:48:44', NULL, NULL, NULL),
('2aff756e-fbb9-4403-9678-8f545f0f05d5', 'HTI', 'HaÃ¯ti', '2023-12-26 09:48:39', '2023-12-26 09:48:39', NULL, NULL, NULL),
('2bda0ab4-aede-462b-b3cd-e06be691d596', 'LSO', 'Lesotho', '2023-12-26 09:48:42', '2023-12-26 09:48:42', NULL, NULL, NULL),
('2bda7565-63fa-4503-9c8e-59b7157dc751', 'EGY', 'Ã‰gypte', '2023-12-26 09:48:54', '2023-12-26 09:48:54', NULL, NULL, NULL),
('2c754a06-8f41-4311-aba3-cb21e195409f', 'ISL', 'Islande', '2023-12-26 09:48:39', '2023-12-26 09:48:39', NULL, NULL, NULL),
('2d57d8a6-27f2-4bd8-9aeb-379f348e7efe', 'MEX', 'Mexique', '2023-12-26 09:48:44', '2023-12-26 09:48:44', NULL, NULL, NULL),
('2d8ec977-b978-48fd-9557-c01ccc6dea07', 'BTN', 'Bhoutan', '2023-12-26 09:48:30', '2023-12-26 09:48:30', NULL, NULL, NULL),
('2f562d90-80be-4224-9243-0590073c8eec', 'LIE', 'Liechtenstein', '2023-12-26 09:48:42', '2023-12-26 09:48:42', NULL, NULL, NULL),
('3125066e-931f-46e9-98fd-7aade45fb126', 'PNG', 'Papouasie-Nouvelle-GuinÃ©e', '2023-12-26 09:48:47', '2023-12-26 09:48:47', NULL, NULL, NULL),
('31bb89b4-6948-442f-8ae0-7c1988008440', 'MYS', 'Malaisie', '2023-12-26 09:48:43', '2023-12-26 09:48:43', NULL, NULL, NULL),
('31e0bf50-5714-413a-a92c-4bb5922be01b', 'AUS', 'Australie', '2023-12-26 09:48:29', '2023-12-26 09:48:29', NULL, NULL, NULL),
('331fa966-35b8-4276-a341-0dae1b3d6da8', 'BOL', 'Bolivie', '2023-12-26 09:48:30', '2023-12-26 09:48:30', NULL, NULL, NULL),
('33958a24-222a-47a2-b741-dc8c8d9c1c4c', 'TUN', 'Tunisie', '2023-12-26 09:48:53', '2023-12-26 09:48:53', NULL, NULL, NULL),
('34d0c013-bda0-4832-a51d-6659941208ed', 'TZA', 'RÃ©publique-Unie de Tanzanie', '2023-12-26 09:48:54', '2023-12-26 09:48:54', NULL, NULL, NULL),
('34dd8f74-655a-4eb2-a62d-c357f215be5c', 'FSM', 'Ã‰tats FÃ©dÃ©rÃ©s de MicronÃ©sie', '2023-12-26 09:48:47', '2023-12-26 09:48:47', NULL, NULL, NULL),
('352b218e-09bf-48ca-b493-df8ea2d3bda1', 'PRI', 'Porto Rico', '2023-12-26 09:48:48', '2023-12-26 09:48:48', NULL, NULL, NULL),
('35db77f9-7183-45e5-abb8-b202c335b3e9', 'SEN', 'SÃ©nÃ©gal', '2023-12-26 09:48:50', '2023-12-26 09:48:50', NULL, NULL, NULL),
('3651413a-bac2-42d4-9f3d-3ce4834187ba', 'ALB', 'Albanie', '2023-12-26 09:48:28', '2023-12-26 09:48:28', NULL, NULL, NULL),
('371bc19e-f726-4c9b-99d6-7ed16b5d23ed', 'SVN', 'SlovÃ©nie', '2023-12-26 09:48:51', '2023-12-26 09:48:51', NULL, NULL, NULL),
('39b0bd92-7e69-412a-9cf7-187dc1ae46b3', 'TKL', 'Tokelau', '2023-12-26 09:48:53', '2023-12-26 09:48:53', NULL, NULL, NULL),
('3abba2df-15aa-4d69-8cef-0d6a88f0c8e7', 'PHL', 'Philippines', '2023-12-26 09:48:48', '2023-12-26 09:48:48', NULL, NULL, NULL),
('3cddc218-2d73-40c5-81e9-1df1dc5722c8', 'SWZ', 'Swaziland', '2023-12-26 09:48:52', '2023-12-26 09:48:52', NULL, NULL, NULL),
('3e0c98e7-5e2f-428c-b937-6a39b0052caa', 'MDG', 'Madagascar', '2023-12-26 09:48:43', '2023-12-26 09:48:43', NULL, NULL, NULL),
('3ec811f9-6633-4fad-b2d1-08484c1087ba', 'SCG', 'Serbie-et-MontÃ©nÃ©gro', '2023-12-26 09:48:55', '2023-12-26 09:48:55', NULL, NULL, NULL),
('3f852ddb-5a12-46e5-9144-2ff8667def72', 'CCK', 'ÃŽles Cocos (Keeling)', '2023-12-26 09:48:33', '2023-12-26 09:48:33', NULL, NULL, NULL),
('421b60ed-69f3-46d6-8387-ea5eb60522a4', 'REU', 'RÃ©union', '2023-12-26 09:48:48', '2023-12-26 09:48:48', NULL, NULL, NULL),
('42aaa072-2b3f-4fdc-a4e7-a43af5d9176f', 'ALA', 'ÃŽles Ã…land', '2023-12-26 09:48:36', '2023-12-26 09:48:36', NULL, NULL, NULL),
('441f8755-80dc-44ae-a016-8f6213e3ac59', 'AUT', 'Autriche', '2023-12-26 09:48:29', '2023-12-26 09:48:29', NULL, NULL, NULL),
('44eb10f1-6614-4a84-a716-805ee4abc4f5', 'GRC', 'GrÃ¨ce', '2023-12-26 09:48:38', '2023-12-26 09:48:38', NULL, NULL, NULL),
('453ed28d-7e16-4f9c-b16d-682ddc9e66bf', 'COM', 'Comores', '2023-12-26 09:48:33', '2023-12-26 09:48:33', NULL, NULL, NULL),
('48a0c162-ab16-4f54-914d-2080edd72dfc', 'ANT', 'Antilles NÃ©erlandaises', '2023-12-26 09:48:45', '2023-12-26 09:48:45', NULL, NULL, NULL),
('4e8aca03-076c-44ef-9604-bfb77adac1a3', 'IRN', 'RÃ©publique Islamique d\'Iran', '2023-12-26 09:48:40', '2023-12-26 09:48:40', NULL, NULL, NULL),
('50921929-b4d6-4d50-8025-9f43c7c9ad3d', 'HUN', 'Hongrie', '2023-12-26 09:48:39', '2023-12-26 09:48:39', NULL, NULL, NULL),
('529415a0-c076-44ff-9210-8bb766962490', 'CIV', 'CÃ´te d\'Ivoire', '2023-12-26 09:48:40', '2023-12-26 09:48:40', NULL, NULL, NULL),
('52b0749c-2002-4e26-b068-c9880d28ef19', 'CXR', 'ÃŽle Christmas', '2023-12-26 09:48:33', '2023-12-26 09:48:33', NULL, NULL, NULL),
('53c6fd74-4da6-4895-a60c-559ca79d8da7', 'ARM', 'ArmÃ©nie', '2023-12-26 09:48:30', '2023-12-26 09:48:30', NULL, NULL, NULL),
('54b57099-0120-4684-9af4-48f3d4996340', 'ASM', 'Samoa AmÃ©ricaines', '2023-12-26 09:48:29', '2023-12-26 09:48:29', NULL, NULL, NULL),
('55778fdc-0512-4262-b4ff-1a362a9bc1c7', 'AGO', 'Angola', '2023-12-26 09:48:29', '2023-12-26 09:48:29', NULL, NULL, NULL),
('57411be5-bd39-4a84-9790-984f5141ec00', 'URY', 'Uruguay', '2023-12-26 09:48:55', '2023-12-26 09:48:55', NULL, NULL, NULL),
('58babf07-9900-41f9-a10a-8b2c57b6b2c6', 'DZA', 'AlgÃ©rie', '2023-12-26 09:48:28', '2023-12-26 09:48:28', NULL, NULL, NULL),
('5b7c260c-d396-40e2-916f-d7a1c295cd8c', 'VUT', 'Vanuatu', '2023-12-26 09:48:46', '2023-12-26 09:48:46', NULL, NULL, NULL),
('5bd965ac-e34e-40ca-a8a0-4e5c7472914a', 'GIB', 'Gibraltar', '2023-12-26 09:48:37', '2023-12-26 09:48:37', NULL, NULL, NULL),
('5c718e14-48e6-4166-8e6e-5665dc34c57c', 'PYF', 'PolynÃ©sie FranÃ§aise', '2023-12-26 09:48:36', '2023-12-26 09:48:36', NULL, NULL, NULL),
('5caf0afd-3656-43a9-944c-0467012a226f', 'TUV', 'Tuvalu', '2023-12-26 09:48:54', '2023-12-26 09:48:54', NULL, NULL, NULL),
('5d7000ff-0d12-4c41-992a-c3286457f659', 'ATA', 'Antarctique', '2023-12-26 09:48:28', '2023-12-26 09:48:28', NULL, NULL, NULL),
('5f15baf0-15f9-4c5e-bca6-e8b3e7199f14', 'TUR', 'Turquie', '2023-12-26 09:48:53', '2023-12-26 09:48:53', NULL, NULL, NULL),
('5f89c3d6-3966-4656-8021-bf9eb2d7abd4', 'ERI', 'Ã‰rythrÃ©e', '2023-12-26 09:48:35', '2023-12-26 09:48:35', NULL, NULL, NULL),
('5f943b09-097d-41ff-b68e-70882227f131', 'NRU', 'Nauru', '2023-12-26 09:48:45', '2023-12-26 09:48:45', NULL, NULL, NULL),
('5fa2b28c-b120-4507-a7d1-7ee1669036fa', 'BHS', 'Bahamas', '2023-12-26 09:48:30', '2023-12-26 09:48:30', NULL, NULL, NULL),
('60945cb4-9599-4d11-af22-a4d9d654adca', 'NIC', 'Nicaragua', '2023-12-26 09:48:46', '2023-12-26 09:48:46', NULL, NULL, NULL),
('614a3d05-c6ee-4548-9665-35be7c03b79c', 'AZE', 'AzerbaÃ¯djan', '2023-12-26 09:48:29', '2023-12-26 09:48:29', NULL, NULL, NULL),
('619de753-18a4-4e97-90fa-cce5971bf89d', 'CYM', 'ÃŽles CaÃ¯manes', '2023-12-26 09:48:32', '2023-12-26 09:48:32', NULL, NULL, NULL),
('62dcad0f-3c9a-4c0d-9d1c-174b7b5dcbad', 'CHL', 'Chili', '2023-12-26 09:48:33', '2023-12-26 09:48:33', NULL, NULL, NULL),
('65d0cdc5-21f8-4071-8b4f-f45a59369a34', 'BLR', 'BÃ©larus', '2023-12-26 09:48:32', '2023-12-26 09:48:32', NULL, NULL, NULL),
('66c58dd5-590b-40fd-affa-def7badf724c', 'BVT', 'ÃŽle Bouvet', '2023-12-26 09:48:31', '2023-12-26 09:48:31', NULL, NULL, NULL),
('67063477-4ee0-473e-a7f9-cf9d848f8b03', 'NGA', 'NigÃ©ria', '2023-12-26 09:48:46', '2023-12-26 09:48:46', NULL, NULL, NULL),
('691e2a65-e925-4874-8634-fe8773be6c95', 'COL', 'Colombie', '2023-12-26 09:48:33', '2023-12-26 09:48:33', NULL, NULL, NULL),
('6aea6595-a7f5-4e0d-b294-44471fcd046a', 'ZAF', 'Afrique du Sud', '2023-12-26 09:48:51', '2023-12-26 09:48:51', NULL, NULL, NULL),
('6d5541f0-2a41-4e13-b198-ccc7faccded6', 'KWT', 'KoweÃ¯t', '2023-12-26 09:48:42', '2023-12-26 09:48:42', NULL, NULL, NULL),
('6daae55d-64dc-4776-91e0-d2a85b4f7a96', 'BGR', 'Bulgarie', '2023-12-26 09:48:31', '2023-12-26 09:48:31', NULL, NULL, NULL),
('6dabbe9f-1abc-4293-b624-b0a4fb772f3f', 'COK', 'ÃŽles Cook', '2023-12-26 09:48:34', '2023-12-26 09:48:34', NULL, NULL, NULL),
('6dcd3dbf-d6f7-461c-8816-2998a86782e8', 'SYR', 'RÃ©publique Arabe Syrienne', '2023-12-26 09:48:52', '2023-12-26 09:48:52', NULL, NULL, NULL),
('70bf62c0-ff96-48cf-963a-0d4e675ffd7d', 'RUS', 'FÃ©dÃ©ration de Russie', '2023-12-26 09:48:49', '2023-12-26 09:48:49', NULL, NULL, NULL),
('71373a10-1740-49a5-82a0-1e9ff94e5e81', 'UZB', 'OuzbÃ©kistan', '2023-12-26 09:48:55', '2023-12-26 09:48:55', NULL, NULL, NULL),
('71de5412-4fee-4e2d-809f-5fb0e4199a91', 'GAB', 'Gabon', '2023-12-26 09:48:37', '2023-12-26 09:48:37', NULL, NULL, NULL),
('747f1c44-8773-4a35-b074-ae45f798e607', 'POL', 'Pologne', '2023-12-26 09:48:48', '2023-12-26 09:48:48', NULL, NULL, NULL),
('74d61919-e6f4-4378-8052-db33ffa2e3e0', 'MAC', 'Macao', '2023-12-26 09:48:43', '2023-12-26 09:48:43', NULL, NULL, NULL),
('75007a97-583e-43f8-b3c5-0ab4c84a2b25', 'KGZ', 'Kirghizistan', '2023-12-26 09:48:42', '2023-12-26 09:48:42', NULL, NULL, NULL),
('761f88a2-7487-4cb3-8da7-eecfebf049ed', 'HRV', 'Croatie', '2023-12-26 09:48:34', '2023-12-26 09:48:34', NULL, NULL, NULL),
('76b34a30-ab23-4b21-88f6-db55f6b3b009', 'MHL', 'ÃŽles Marshall', '2023-12-26 09:48:47', '2023-12-26 09:48:47', NULL, NULL, NULL),
('7700bda3-6b07-4a1d-bd92-4409c16472d5', 'ARG', 'Argentine', '2023-12-26 09:48:29', '2023-12-26 09:48:29', NULL, NULL, NULL),
('773ebf44-b774-479e-84d0-cc35212761b9', 'GIN', 'GuinÃ©e', '2023-12-26 09:48:38', '2023-12-26 09:48:38', NULL, NULL, NULL),
('7ac0dd31-4407-432d-a844-dad76ac5457e', 'VEN', 'Venezuela', '2023-12-26 09:48:55', '2023-12-26 09:48:55', NULL, NULL, NULL),
('7e0eda4d-3c71-488f-9d07-ed4ad5364cbd', 'VCT', 'Saint-Vincent-et-les Grenadines', '2023-12-26 09:48:50', '2023-12-26 09:48:50', NULL, NULL, NULL),
('7e380818-b1d1-4e2d-bb16-bf2b23ff84b4', 'NZL', 'Nouvelle-ZÃ©lande', '2023-12-26 09:48:46', '2023-12-26 09:48:46', NULL, NULL, NULL),
('7eb2bdd9-c02d-4f90-9347-922d31653a13', 'LCA', 'Sainte-Lucie', '2023-12-26 09:48:49', '2023-12-26 09:48:49', NULL, NULL, NULL),
('7f4e2036-66da-46c3-b90a-7030094c19f8', 'GLP', 'Guadeloupe', '2023-12-26 09:48:38', '2023-12-26 09:48:38', NULL, NULL, NULL),
('7f84f58f-2306-4bb8-ad11-25859df68e1e', 'SOM', 'Somalie', '2023-12-26 09:48:51', '2023-12-26 09:48:51', NULL, NULL, NULL),
('7fbc8c62-3417-4695-96e1-f1e9daeba72e', 'OMN', 'Oman', '2023-12-26 09:48:45', '2023-12-26 09:48:45', NULL, NULL, NULL),
('816c5ab9-fbc8-4e71-b573-0aff05d720f9', 'BMU', 'Bermudes', '2023-12-26 09:48:30', '2023-12-26 09:48:30', NULL, NULL, NULL),
('819faa7e-cfe2-4a82-96c7-1f6f6b5d0372', 'CAF', 'RÃ©publique Centrafricaine', '2023-12-26 09:48:32', '2023-12-26 09:48:32', NULL, NULL, NULL),
('8434182c-f0ee-4140-830a-37bf1dee269c', 'GUY', 'Guyana', '2023-12-26 09:48:38', '2023-12-26 09:48:38', NULL, NULL, NULL),
('84b45dd4-fa24-4b68-b5d8-08c345bd3db1', 'GNB', 'GuinÃ©e-Bissau', '2023-12-26 09:48:48', '2023-12-26 09:48:48', NULL, NULL, NULL),
('86f48718-3450-4db4-b3b4-866ef0019a4a', 'LAO', 'RÃ©publique DÃ©mocratique Populaire Lao', '2023-12-26 09:48:42', '2023-12-26 09:48:42', NULL, NULL, NULL),
('88eb2964-60a2-4b22-a63f-526b4effe01d', 'ITA', 'Italie', '2023-12-26 09:48:40', '2023-12-26 09:48:40', NULL, NULL, NULL),
('898f6c3e-8c31-4277-959e-b9593793c6e4', 'TCD', 'Tchad', '2023-12-26 09:48:33', '2023-12-26 09:48:33', NULL, NULL, NULL),
('89d0d4a0-df4f-4e77-a8c4-44ac60898888', 'WSM', 'Samoa', '2023-12-26 09:48:55', '2023-12-26 09:48:55', NULL, NULL, NULL),
('8ac29679-dcb4-4449-9c66-366a6b38f46c', 'TGO', 'Togo', '2023-12-26 09:48:53', '2023-12-26 09:48:53', NULL, NULL, NULL),
('8bc33677-6496-4119-9157-b03c64ec2777', 'CRI', 'Costa Rica', '2023-12-26 09:48:34', '2023-12-26 09:48:34', NULL, NULL, NULL),
('8d419843-eb07-434a-83ed-5e49c1f66a7e', 'JPN', 'Japon', '2023-12-26 09:48:40', '2023-12-26 09:48:40', NULL, NULL, NULL),
('8dfac21d-1013-41ee-839a-1b95ba33df9b', 'RWA', 'Rwanda', '2023-12-26 09:48:49', '2023-12-26 09:48:49', NULL, NULL, NULL),
('8e907ee4-f183-4feb-93b2-e55329ebb934', 'MMR', 'Myanmar', '2023-12-26 09:48:32', '2023-12-26 09:48:32', NULL, NULL, NULL),
('8eeede0a-5ce6-4a6f-a767-76d8a4861965', 'STP', 'Sao TomÃ©-et-Principe', '2023-12-26 09:48:50', '2023-12-26 09:48:50', NULL, NULL, NULL),
('8f3a1a37-e220-4584-ba2a-2bf366268f67', 'BEN', 'BÃ©nin', '2023-12-26 09:48:34', '2023-12-26 09:48:34', NULL, NULL, NULL),
('9184c075-03b4-4fd4-adad-88edecfb7e89', 'BFA', 'Burkina Faso', '2023-12-26 09:48:55', '2023-12-26 09:48:55', NULL, NULL, NULL),
('9265acdd-588b-4278-bec2-d599d592ca4b', 'GUM', 'Guam', '2023-12-26 09:48:38', '2023-12-26 09:48:38', NULL, NULL, NULL),
('9275719e-3e23-4be5-ab38-28ee93192573', 'SMR', 'Saint-Marin', '2023-12-26 09:48:50', '2023-12-26 09:48:50', NULL, NULL, NULL),
('941c8427-2e3a-4575-98ac-f017ad8baabf', 'COG', 'RÃ©publique du Congo', '2023-12-26 09:48:34', '2023-12-26 09:48:34', NULL, NULL, NULL),
('95537302-c35b-4ebd-85b5-27b2b5e292ba', 'VGB', 'ÃŽles Vierges Britanniques', '2023-12-26 09:48:31', '2023-12-26 09:48:31', NULL, NULL, NULL),
('980adb37-26a6-43ad-b6e9-e411afd8528a', 'BRN', 'BrunÃ©i Darussalam', '2023-12-26 09:48:31', '2023-12-26 09:48:31', NULL, NULL, NULL),
('98636d21-6b7b-43ff-bd50-3b0121178ebd', 'MSR', 'Montserrat', '2023-12-26 09:48:44', '2023-12-26 09:48:44', NULL, NULL, NULL),
('9946e95d-2f3e-4c23-b324-db5b51faad62', 'BEL', 'Belgique', '2023-12-26 09:48:30', '2023-12-26 09:48:30', NULL, NULL, NULL),
('99a32e98-7701-45c6-a43f-98cb5aa90737', 'NPL', 'NÃ©pal', '2023-12-26 09:48:45', '2023-12-26 09:48:45', NULL, NULL, NULL),
('99a6f32e-dd97-4738-8c63-3c8ac21d35c8', 'CHN', 'Chine', '2023-12-26 09:48:33', '2023-12-26 09:48:33', NULL, NULL, NULL),
('9a447fe7-539f-4862-ba98-8748cb0b52a6', 'TCA', 'ÃŽles Turks et CaÃ¯ques', '2023-12-26 09:48:53', '2023-12-26 09:48:53', NULL, NULL, NULL),
('9b35dd94-3f58-463e-abec-398cb6681abb', 'AND', 'Andorre', '2023-12-26 09:48:29', '2023-12-26 09:48:29', NULL, NULL, NULL),
('9c4e5955-044b-433f-81ce-747bcd9c0ef7', 'ATF', 'Terres Australes FranÃ§aises', '2023-12-26 09:48:36', '2023-12-26 09:48:36', NULL, NULL, NULL),
('9d5ca050-2875-435e-b282-a1236194bd47', 'SLE', 'Sierra Leone', '2023-12-26 09:48:50', '2023-12-26 09:48:50', NULL, NULL, NULL),
('9dcab42d-fb80-4a38-b825-3e007dea51fe', 'LUX', 'Luxembourg', '2023-12-26 09:48:43', '2023-12-26 09:48:43', NULL, NULL, NULL),
('9f36b686-55bf-428d-9ebc-650b226d189c', 'IOT', 'Territoire Britannique de l\'OcÃ©an Indien', '2023-12-26 09:48:31', '2023-12-26 09:48:31', NULL, NULL, NULL),
('9fdd1ff3-403c-4cfe-a110-ad1a12725b89', 'BWA', 'Botswana', '2023-12-26 09:48:31', '2023-12-26 09:48:31', NULL, NULL, NULL),
('a102439d-d891-408c-97fc-bc0b1729e114', 'ECU', 'Ã‰quateur', '2023-12-26 09:48:35', '2023-12-26 09:48:35', NULL, NULL, NULL),
('a25763be-e491-4247-bbea-21945e95c07c', 'GRL', 'Groenland', '2023-12-26 09:48:38', '2023-12-26 09:48:38', NULL, NULL, NULL),
('a400be34-3990-452b-91de-bc1b4aabda91', 'BGD', 'Bangladesh', '2023-12-26 09:48:30', '2023-12-26 09:48:30', NULL, NULL, NULL),
('a463f1ba-e71d-4509-923c-0acc68aad02a', 'VAT', 'Saint-SiÃ¨ge (Ã©tat de la CitÃ© du Vatican)', '2023-12-26 09:48:39', '2023-12-26 09:48:39', NULL, NULL, NULL),
('a52c745b-2474-4ae8-8f54-d99139910b8e', 'FIN', 'Finlande', '2023-12-26 09:48:36', '2023-12-26 09:48:36', NULL, NULL, NULL),
('a7212d74-6d1e-41cf-bbf2-8d92b32bc1ec', 'EST', 'Estonie', '2023-12-26 09:48:35', '2023-12-26 09:48:35', NULL, NULL, NULL),
('a7813cb8-ea34-4064-8c92-329af7f87b9d', 'JOR', 'Jordanie', '2023-12-26 09:48:41', '2023-12-26 09:48:41', NULL, NULL, NULL),
('ab1d72ba-5d4b-40e6-9e35-de630cdc8744', 'PRK', 'RÃ©publique Populaire DÃ©mocratique de CorÃ©e', '2023-12-26 09:48:41', '2023-12-26 09:48:41', NULL, NULL, NULL),
('ad0d7f08-c068-4bfd-9e05-747461a875b5', 'USA', 'Ã‰tats-Unis', '2023-12-26 09:48:54', '2023-12-26 09:48:54', NULL, NULL, NULL),
('ae908b68-9393-4af1-8743-d263c52cf4b7', 'BRB', 'Barbade', '2023-12-26 09:48:30', '2023-12-26 09:48:30', NULL, NULL, NULL),
('af6b5bb2-cde9-4036-9e95-9fe4a6587f1b', 'MRT', 'Mauritanie', '2023-12-26 09:48:44', '2023-12-26 09:48:44', NULL, NULL, NULL),
('b157ffae-f7b9-4a77-9c17-8c443c6a336a', 'NCL', 'Nouvelle-CalÃ©donie', '2023-12-26 09:48:45', '2023-12-26 09:48:45', NULL, NULL, NULL),
('b25f7bd0-9f0c-4dde-8fa7-3c1c0aab9d7b', 'ESH', 'Sahara Occidental', '2023-12-26 09:48:52', '2023-12-26 09:48:52', NULL, NULL, NULL),
('b334bc5f-9ac8-42e8-bde0-8d7c5ed276f1', 'ETH', 'Ã‰thiopie', '2023-12-26 09:48:35', '2023-12-26 09:48:35', NULL, NULL, NULL),
('b34c21b1-72ed-42af-9720-2cb6e9bf558d', 'PAN', 'Panama', '2023-12-26 09:48:47', '2023-12-26 09:48:47', NULL, NULL, NULL),
('b4d8a9e9-580b-4243-8479-5d9a65feac69', 'BIH', 'Bosnie-HerzÃ©govine', '2023-12-26 09:48:30', '2023-12-26 09:48:30', NULL, NULL, NULL),
('b5247862-5be8-49d6-8426-651bacf86216', 'GUF', 'Guyane FranÃ§aise', '2023-12-26 09:48:36', '2023-12-26 09:48:36', NULL, NULL, NULL),
('b548f76c-ec2a-4c48-8bc3-2c21ae80eee3', 'UGA', 'Ouganda', '2023-12-26 09:48:54', '2023-12-26 09:48:54', NULL, NULL, NULL),
('b559c6d3-4fc6-4da9-9f1d-e924ca254ff1', 'QAT', 'Qatar', '2023-12-26 09:48:48', '2023-12-26 09:48:48', NULL, NULL, NULL),
('b71c2a4d-61cb-4945-a310-7aea43dc4858', 'NAM', 'Namibie', '2023-12-26 09:48:45', '2023-12-26 09:48:45', NULL, NULL, NULL),
('b8ab9bba-f34e-4a71-bf88-8eb734502e7c', 'BLZ', 'Belize', '2023-12-26 09:48:31', '2023-12-26 09:48:31', NULL, NULL, NULL),
('b8da2c70-72cd-4f28-8d86-bd5b02564e9c', 'GEO', 'GÃ©orgie', '2023-12-26 09:48:37', '2023-12-26 09:48:37', NULL, NULL, NULL),
('b8e8426d-9977-4fb2-97f5-5f3f9b46f338', 'ISR', 'IsraÃ«l', '2023-12-26 09:48:40', '2023-12-26 09:48:40', NULL, NULL, NULL),
('ba3504da-10a8-4384-b767-c1e12c76d910', 'HND', 'Honduras', '2023-12-26 09:48:39', '2023-12-26 09:48:39', NULL, NULL, NULL),
('bbe7fa08-01f6-4faf-9a6b-eb2a0a97ff82', 'FLK', 'ÃŽles (malvinas) Falkland', '2023-12-26 09:48:35', '2023-12-26 09:48:35', NULL, NULL, NULL),
('bdb8b946-ca2e-4387-a2fc-01b2828661ae', 'SGP', 'Singapour', '2023-12-26 09:48:50', '2023-12-26 09:48:50', NULL, NULL, NULL),
('c00d6bd9-649c-4906-a42b-d63393681847', 'MCO', 'Monaco', '2023-12-26 09:48:44', '2023-12-26 09:48:44', NULL, NULL, NULL),
('c0b86e6b-32ef-4527-8b47-4212734f4c41', 'FRA', 'France', '2023-12-26 09:48:36', '2023-12-26 09:48:36', NULL, NULL, NULL),
('c42d509c-ffe7-4d71-ada3-3314c01cb6c4', 'TKM', 'TurkmÃ©nistan', '2023-12-26 09:48:53', '2023-12-26 09:48:53', NULL, NULL, NULL),
('c5822d8e-c3cd-472a-b2bc-54aef25c763f', 'ESP', 'Espagne', '2023-12-26 09:48:51', '2023-12-26 09:48:51', NULL, NULL, NULL),
('c67c3523-1b18-49d2-a419-123e875d8908', 'PAK', 'Pakistan', '2023-12-26 09:48:47', '2023-12-26 09:48:47', NULL, NULL, NULL),
('c9de4cd8-bdc4-4e16-b5a4-3bbd17695f6d', 'CAN', 'Canada', '2023-12-26 09:48:32', '2023-12-26 09:48:32', NULL, NULL, NULL),
('ca881a63-3a8b-47d3-a597-229177e52d1e', 'ATG', 'Antigua-et-Barbuda', '2023-12-26 09:48:29', '2023-12-26 09:48:29', NULL, NULL, NULL),
('cc863039-08e0-4f2b-b650-4df8f7d47b13', 'MDV', 'Maldives', '2023-12-26 09:48:43', '2023-12-26 09:48:43', NULL, NULL, NULL),
('ccd26131-fc2c-4a82-8420-41e3d2819fe1', 'DMA', 'Dominique', '2023-12-26 09:48:34', '2023-12-26 09:48:34', NULL, NULL, NULL),
('cd645034-832c-4cf2-b478-b106f34e8387', 'KOR', 'RÃ©publique de CorÃ©e', '2023-12-26 09:48:41', '2023-12-26 09:48:41', NULL, NULL, NULL),
('d33170e2-1254-400e-95e7-4d73267abc76', 'NER', 'Niger', '2023-12-26 09:48:46', '2023-12-26 09:48:46', NULL, NULL, NULL),
('d352738a-c2cd-4b89-a13e-4fb65fedf458', 'NIU', 'NiuÃ©', '2023-12-26 09:48:46', '2023-12-26 09:48:46', NULL, NULL, NULL),
('d3db135b-c11a-4760-97a3-1db31fac0cdf', 'SLB', 'ÃŽles Salomon', '2023-12-26 09:48:31', '2023-12-26 09:48:31', NULL, NULL, NULL),
('d427c4d5-a5dd-42d8-9ee4-454cbfb51f54', 'TLS', 'Timor-Leste', '2023-12-26 09:48:48', '2023-12-26 09:48:48', NULL, NULL, NULL),
('d4caab0b-c480-4d61-a336-1173335e9e00', 'TTO', 'TrinitÃ©-et-Tobago', '2023-12-26 09:48:53', '2023-12-26 09:48:53', NULL, NULL, NULL),
('d5173cd7-b29f-45ac-bba8-72d75c0b791f', 'TON', 'Tonga', '2023-12-26 09:48:53', '2023-12-26 09:48:53', NULL, NULL, NULL),
('d63263c0-234e-4fcb-9206-39cfcc3d0345', 'PCN', 'Pitcairn', '2023-12-26 09:48:48', '2023-12-26 09:48:48', NULL, NULL, NULL),
('d8bd362d-06f1-446c-b671-5f9607702504', 'UKR', 'Ukraine', '2023-12-26 09:48:54', '2023-12-26 09:48:54', NULL, NULL, NULL),
('da03a45d-6d38-4923-8f33-40f735d28dc2', 'SLV', 'El Salvador', '2023-12-26 09:48:35', '2023-12-26 09:48:35', NULL, NULL, NULL),
('da7bc6fe-8da1-4c9a-8afc-18b2a7690f92', 'ROU', 'Roumanie', '2023-12-26 09:48:49', '2023-12-26 09:48:49', NULL, NULL, NULL),
('db688892-9e7f-452c-9607-8ac69d409d76', 'CHE', 'Suisse', '2023-12-26 09:48:52', '2023-12-26 09:48:52', NULL, NULL, NULL),
('db70c026-2a50-4471-ae53-dc16d5183415', 'VIR', 'ÃŽles Vierges des Ã‰tats-Unis', '2023-12-26 09:48:55', '2023-12-26 09:48:55', NULL, NULL, NULL),
('dba37bd6-7593-4f06-b97a-73ed434317bc', 'THA', 'ThaÃ¯lande', '2023-12-26 09:48:52', '2023-12-26 09:48:52', NULL, NULL, NULL),
('ddb6653c-5628-4acc-a01f-cab7beb2fc26', 'DNK', 'Danemark', '2023-12-26 09:48:34', '2023-12-26 09:48:34', NULL, NULL, NULL),
('ddfdc10f-cf65-4b27-9014-3c34db5ccba4', 'DEU', 'Allemagne', '2023-12-26 09:48:37', '2023-12-26 09:48:37', NULL, NULL, NULL),
('df9f69fd-d884-49d8-87b3-be3d75895aeb', 'CZE', 'RÃ©publique TchÃ¨que', '2023-12-26 09:48:34', '2023-12-26 09:48:34', NULL, NULL, NULL),
('dfe9c27a-2071-43c6-9c91-b81fa8efc9ab', 'MWI', 'Malawi', '2023-12-26 09:48:43', '2023-12-26 09:48:43', NULL, NULL, NULL),
('e035e25f-9798-49c7-96b0-87d36a09284f', 'SPM', 'Saint-Pierre-et-Miquelon', '2023-12-26 09:48:50', '2023-12-26 09:48:50', NULL, NULL, NULL),
('e0457146-e7f5-4c58-8d13-4f1d4fd7b77e', 'SVK', 'Slovaquie', '2023-12-26 09:48:51', '2023-12-26 09:48:51', NULL, NULL, NULL),
('e10bb4ef-f6c9-46c3-a95a-ce06bdb29dbc', 'IRQ', 'Iraq', '2023-12-26 09:48:40', '2023-12-26 09:48:40', NULL, NULL, NULL),
('e2287f5c-ae3c-4d1c-b6dc-76be40f96378', 'ZWE', 'Zimbabwe', '2023-12-26 09:48:51', '2023-12-26 09:48:51', NULL, NULL, NULL),
('e3d47b08-298c-403a-8cd1-30a86426187a', 'DOM', 'RÃ©publique Dominicaine', '2023-12-26 09:48:35', '2023-12-26 09:48:35', NULL, NULL, NULL),
('e518b67e-b54f-4127-94e0-aa9f5393d475', 'MNP', 'ÃŽles Mariannes du Nord', '2023-12-26 09:48:46', '2023-12-26 09:48:46', NULL, NULL, NULL),
('e5b6403c-0ee2-46e5-a61b-2198100f24e7', 'MAR', 'Maroc', '2023-12-26 09:48:44', '2023-12-26 09:48:44', NULL, NULL, NULL),
('ea87fb3c-dbf0-4012-8352-a0a53999532c', 'FJI', 'Fidji', '2023-12-26 09:48:36', '2023-12-26 09:48:36', NULL, NULL, NULL),
('ed2182b2-31ba-4dcb-a885-1b68c46f705f', 'TJK', 'Tadjikistan', '2023-12-26 09:48:52', '2023-12-26 09:48:52', NULL, NULL, NULL),
('ed736f33-8755-47ea-a422-933de7f7dd16', 'LVA', 'Lettonie', '2023-12-26 09:48:42', '2023-12-26 09:48:42', NULL, NULL, NULL),
('ed9212d9-575b-465c-be16-997e1e10d032', 'MUS', 'Maurice', '2023-12-26 09:48:44', '2023-12-26 09:48:44', NULL, NULL, NULL),
('ee76f63c-2fde-402a-a7ed-b50e84332cbd', 'IDN', 'IndonÃ©sie', '2023-12-26 09:48:40', '2023-12-26 09:48:40', NULL, NULL, NULL),
('ef028b15-d821-49cf-942c-d1ff578b5bec', 'SYC', 'Seychelles', '2023-12-26 09:48:50', '2023-12-26 09:48:50', NULL, NULL, NULL),
('f00839ba-1baf-4628-8229-db7db6f34122', 'MYT', 'Mayotte', '2023-12-26 09:48:33', '2023-12-26 09:48:33', NULL, NULL, NULL),
('f15a3a6d-74a5-4480-bc95-bebcd9f2408b', 'GMB', 'Gambie', '2023-12-26 09:48:37', '2023-12-26 09:48:37', NULL, NULL, NULL),
('f1c1afa8-6f13-4cd7-abb4-578fa49e7abc', 'SHN', 'Sainte-HÃ©lÃ¨ne', '2023-12-26 09:48:49', '2023-12-26 09:48:49', NULL, NULL, NULL),
('f1cbfae9-e44d-4283-aa0b-ba9a23d4023c', 'GTM', 'Guatemala', '2023-12-26 09:48:38', '2023-12-26 09:48:38', NULL, NULL, NULL),
('f24c8635-cbfa-467b-a828-6d39bd94a3a6', 'WLF', 'Wallis et Futuna', '2023-12-26 09:48:55', '2023-12-26 09:48:55', NULL, NULL, NULL),
('f2d77373-9144-4918-8649-a5c27086a8aa', 'GRD', 'Grenade', '2023-12-26 09:48:38', '2023-12-26 09:48:38', NULL, NULL, NULL),
('f67be536-0c2d-49ab-b327-0cf6b233ebc5', 'TWN', 'TaÃ¯wan', '2023-12-26 09:48:33', '2023-12-26 09:48:33', NULL, NULL, NULL),
('f6ca61c9-ec21-4a5c-8228-a529f78c62a3', 'CYP', 'Chypre', '2023-12-26 09:48:34', '2023-12-26 09:48:34', NULL, NULL, NULL),
('f875edc3-1cd1-4551-95a0-45ee7441aeb5', 'GBR', 'Royaume-Uni', '2023-12-26 09:48:54', '2023-12-26 09:48:54', NULL, NULL, NULL),
('f9821e8e-35bb-4f7d-afe4-2a181380c93f', 'NFK', 'ÃŽle Norfolk', '2023-12-26 09:48:46', '2023-12-26 09:48:46', NULL, NULL, NULL),
('f9916ca0-3379-4e5a-aed1-b2908ebeac27', 'JAM', 'JamaÃ¯que', '2023-12-26 09:48:40', '2023-12-26 09:48:40', NULL, NULL, NULL),
('f993cad8-fa5b-4121-b79a-1aeef0613548', 'ARE', 'Ã‰mirats Arabes Unis', '2023-12-26 09:48:53', '2023-12-26 09:48:53', NULL, NULL, NULL),
('f9ee3406-ab65-4251-b43d-f6c3f4ac381f', 'AFG', 'Afghanistan', '2023-12-26 09:48:28', '2023-12-26 09:48:28', NULL, NULL, NULL),
('f9ef37dd-8804-4709-b6ef-aae242f1d475', 'SWE', 'SuÃ¨de', '2023-12-26 09:48:52', '2023-12-26 09:48:52', NULL, NULL, NULL),
('faa933e3-ab2d-4743-9adb-3f93f649e4b3', 'SDN', 'Soudan', '2023-12-26 09:48:52', '2023-12-26 09:48:52', NULL, NULL, NULL),
('fb5a1570-9bd6-4432-8f89-1a08312a15ab', 'IND', 'Inde', '2023-12-26 09:48:39', '2023-12-26 09:48:39', NULL, NULL, NULL),
('fce1f075-7f80-4a76-b1e8-d69d36aec61f', 'PRT', 'Portugal', '2023-12-26 09:48:48', '2023-12-26 09:48:48', NULL, NULL, NULL),
('fd148028-6554-460b-896d-7f75adaf0048', 'KIR', 'Kiribati', '2023-12-26 09:48:37', '2023-12-26 09:48:37', NULL, NULL, NULL),
('fd5a44b8-7651-4a08-89c3-b6a80702fe3a', 'IRL', 'Irlande', '2023-12-26 09:48:40', '2023-12-26 09:48:40', NULL, NULL, NULL),
('fe72521f-8362-46b4-8cde-db143f4ecb6e', 'KHM', 'Cambodge', '2023-12-26 09:48:32', '2023-12-26 09:48:32', NULL, NULL, NULL),
('fe7da16b-8314-4f94-a9ba-333f14bfb292', 'ZMB', 'Zambie', '2023-12-26 09:48:56', '2023-12-26 09:48:56', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `piece_jointes`
--

CREATE TABLE `piece_jointes` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` bigint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `plaintes`
--

CREATE TABLE `plaintes` (
  `id` bigint UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `procedure` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` tinyint(1) DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentaire` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `procedures`
--

CREATE TABLE `procedures` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schemas` json DEFAULT NULL,
  `service_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delai` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_debut` date DEFAULT NULL,
  `session_fin` date DEFAULT NULL,
  `estperiodique` tinyint(1) NOT NULL DEFAULT '0',
  `tarif` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `procedures`
--

INSERT INTO `procedures` (`uuid`, `libelle_court`, `libelle_long`, `description`, `img`, `code_color`, `code`, `schemas`, `service_id`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`, `delai`, `session_debut`, `session_fin`, `estperiodique`, `tarif`) VALUES
('0373d0d1-e975-4122-81e8-251e18c4df26', 'PCBCB', 'Permis de coupe du bois et charbon de bois', 'Description de la coupe du bois', 'img/10.png', '#b7703d', 'P0011', NULL, '4778e5f5-ec2e-494f-b1b0-89d488bb88d6', '2023-12-26 09:48:28', '2023-12-26 09:48:28', NULL, NULL, NULL, '8', NULL, NULL, 0, 1500),
('043d2c5b-ede0-46f5-9873-6e06e9f804b9', 'PETE', 'Permis d\'écotourisme ou de tourisme écologique', 'Document administratif autorisant une personne physique à pénétrer\n                dans une aire protégée et à y observer, photographier ou filmer à l’aide d’appareils\n                amateur', 'img/3.png', '#d3b521', 'P0012', NULL, '4778e5f5-ec2e-494f-b1b0-89d488bb88d6', '2023-12-26 09:48:27', '2023-12-26 09:48:27', NULL, NULL, NULL, '7', NULL, NULL, 0, 1300),
('0835820e-baa2-443d-8676-51c587dbb8a0', 'PCBCB2', 'Permis de circulation du bois et charbon de bois', 'Permis pour tout transport de bois et charbon de bois en vue de consommation/distribution.', 'img/camion.png', '#14b522', 'P005', NULL, '4778e5f5-ec2e-494f-b1b0-89d488bb88d6', '2023-12-26 09:48:28', '2023-12-26 09:48:28', NULL, NULL, NULL, '8', NULL, NULL, 0, 1000),
('627ee1eb-1246-47cf-ac20-ffa053cf449a', 'CDAS', 'Certificat de détention d\'un animal sauvage', 'Acte administratif autorisant une personne physique ou morale nationale,\n                expatriée résidente ou expatriée non-résidente à détenir un animal sauvage ou une partie\n             ', 'img/dff.png', '#e2853d', 'P004', NULL, '4778e5f5-ec2e-494f-b1b0-89d488bb88d6', '2023-12-26 09:48:28', '2023-12-26 09:48:28', NULL, NULL, NULL, '40', NULL, NULL, 0, 1200),
('67ef4792-4901-4d79-9554-012a1774c6aa', 'CHESPB', 'Certificat d\'Homologation des emballages et sachets plastiques biodégradables', 'Description des homologations', 'img/9.png', '#bf6e12', 'P007', NULL, '696ed21c-ef8b-4579-bce1-2ea6ba3bf420', '2023-12-26 09:48:27', '2023-12-26 09:48:27', NULL, NULL, NULL, '32', NULL, NULL, 0, 1800),
('7a71f788-3d1f-4f05-8bef-74980913e3f7', 'ADDMC', 'Autorisation donnant droit à mener la chasse', 'Acte administratif autorisant une tierce personne à effectuer la chasse\n                (de tuer, blesser, poursuivre, rechercher, inquiéter, viser un animal en liberté ou détruire).', 'img/gfd.png', '#629449', 'P003', NULL, '4778e5f5-ec2e-494f-b1b0-89d488bb88d6', '2023-12-26 09:48:28', '2023-12-26 09:48:28', NULL, NULL, NULL, '7', NULL, NULL, 0, 1100),
('891f6981-d06b-4271-a59a-971520c4e880', 'AGDS', 'Autorisation de gestion des déchets Solide', 'A propos de ce service La Demande d\'autorisation de gestion des dechets est une autorisation officielle officiel qui certifie le lieu de résidence d\'une personne au moment de la demande. Le d', 'img/dechet.png', '#359b27', 'P008', NULL, '696ed21c-ef8b-4579-bce1-2ea6ba3bf420', '2023-12-26 09:48:27', '2023-12-26 09:48:27', NULL, NULL, NULL, '32', NULL, NULL, 0, 1500),
('9ef65a5a-0eac-4c3c-a60c-988dd71ea3d5', 'CEESPNB', 'Certificat d\'exemption des emballages et sachets plastiques non biodégradables', 'Description des exemptions', 'img/degra.png', '#2274bb', 'P006', NULL, '696ed21c-ef8b-4579-bce1-2ea6ba3bf420', '2023-12-26 09:48:27', '2023-12-26 09:48:27', NULL, NULL, NULL, '32', NULL, NULL, 0, 1700),
('bbc98940-6dde-4cee-92a9-a8207e56dad9', 'OATEA', 'Octroit d\'agrément technique eau et assainissement', 'L’exercice des entreprises et bureaux d’études dans le domaine de\n                l’eau et de l’assainissement est soumis à la possession d’un agrément\n                technique échelonné en ', 'img/fg.png', '#abd9fe', 'P002', NULL, '67de231d-9b9b-4ca7-9c29-d7f7fe65aeb5', '2023-12-26 09:48:27', '2023-12-26 09:48:27', NULL, NULL, NULL, '75', NULL, NULL, 0, 1400),
('fbac1222-8779-4fc8-bd67-f39b740f409c', 'DATIPC', 'Délivrance d\'avis technique d\'importation de produits chimiques ', 'Description de produit chimique', 'img/chim.png', '#f26b56', 'P001', NULL, '696ed21c-ef8b-4579-bce1-2ea6ba3bf420', '2023-12-26 09:48:27', '2023-12-26 09:48:27', NULL, NULL, NULL, '32', NULL, NULL, 0, 1600);

-- --------------------------------------------------------

--
-- Structure de la table `procedure_base_juridiques`
--

CREATE TABLE `procedure_base_juridiques` (
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `base_juridique_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `procedure_piece_jointes`
--

CREATE TABLE `procedure_piece_jointes` (
  `procedure_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `piece_jointe_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `provinces`
--

CREATE TABLE `provinces` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `provinces`
--

INSERT INTO `provinces` (`uuid`, `libelle`, `region_id`, `created_at`, `updated_at`, `code`, `created_by`, `updated_by`, `deleted_by`) VALUES
('017cd7b2-4acb-4b6f-9dd7-cc15c69487d6', 'Poni', '2ba17602-4242-48ee-87f4-abfed0308c52', '2023-12-26 09:47:46', '2023-12-26 09:47:46', NULL, NULL, NULL, NULL),
('04e9d9f7-c1cf-49cd-8607-0e0327fc816a', 'Namentenga', '57726671-33ba-4a90-8812-b0db1c265efb', '2023-12-26 09:47:43', '2023-12-26 09:47:43', NULL, NULL, NULL, NULL),
('0db972e1-8708-43bb-8df9-6c092c9c2524', 'Balé', '1244947c-6374-4598-8efa-69c5b3e0cb27', '2023-12-26 09:47:42', '2023-12-26 09:47:42', NULL, NULL, NULL, NULL),
('188761e2-fa5e-473f-a3bb-f8f818dce8da', 'Sourou', '1244947c-6374-4598-8efa-69c5b3e0cb27', '2023-12-26 09:47:42', '2023-12-26 09:47:42', NULL, NULL, NULL, NULL),
('29375a5c-641a-4a4c-b721-d1a5c065e844', 'Ioba', '2ba17602-4242-48ee-87f4-abfed0308c52', '2023-12-26 09:47:46', '2023-12-26 09:47:46', NULL, NULL, NULL, NULL),
('2c4f618d-bfcc-451b-997c-8cb33f9435f6', 'Sanguié', 'c3a77af9-f314-42c2-b14f-86ca5f91c0c1', '2023-12-26 09:47:44', '2023-12-26 09:47:44', NULL, NULL, NULL, NULL),
('39aba444-6835-4920-a1e1-d7a6fef54702', 'Sanmatenga', '57726671-33ba-4a90-8812-b0db1c265efb', '2023-12-26 09:47:43', '2023-12-26 09:47:43', NULL, NULL, NULL, NULL),
('3c537ca2-1494-43f5-b202-7e9454b5858f', 'Ziro', 'c3a77af9-f314-42c2-b14f-86ca5f91c0c1', '2023-12-26 09:47:44', '2023-12-26 09:47:44', NULL, NULL, NULL, NULL),
('3d652b01-3d93-42c6-a373-8c5597716f4e', 'Bazèga', '4fb89a13-59ad-45cb-bb23-80f56e95f7c2', '2023-12-26 09:47:44', '2023-12-26 09:47:44', NULL, NULL, NULL, NULL),
('428474b9-3171-48a7-b775-85bb5eb2c4ea', 'Houet', 'b8849b97-ee65-4ac9-827a-108f1c2d50f4', '2023-12-26 09:47:45', '2023-12-26 09:47:45', NULL, NULL, NULL, NULL),
('4c8d6dbe-4950-4502-835b-78c0e71f502c', 'Kompienga', 'cfa1187a-8b45-4207-87ea-6d1b8e607357', '2023-12-26 09:47:44', '2023-12-26 09:47:44', NULL, NULL, NULL, NULL),
('529731d9-4207-4ea2-b4b1-c18c7473ae84', 'Kouritenga', 'b4d60ebb-2206-4408-a3bb-dbce0a5b0018', '2023-12-26 09:47:43', '2023-12-26 09:47:43', NULL, NULL, NULL, NULL),
('5338147d-e318-4e21-82ba-2c4a22b72b7a', 'Gourma', 'cfa1187a-8b45-4207-87ea-6d1b8e607357', '2023-12-26 09:47:44', '2023-12-26 09:47:44', NULL, NULL, NULL, NULL),
('54ef6dcc-cc6a-4421-8a4b-99cc606606ff', 'Passoré', 'e4481cf2-92c6-43dc-a9d6-a6ca327f76e5', '2023-12-26 09:47:45', '2023-12-26 09:47:45', NULL, NULL, NULL, NULL),
('57471fa2-d305-4653-a8ca-c1bfec85cf1d', 'Oubritenga', 'd845f536-fbc4-4b2e-98ef-9f427a50a31f', '2023-12-26 09:47:46', '2023-12-26 09:47:46', NULL, NULL, NULL, NULL),
('5d3b5ced-d973-444f-960f-1c69ac131b8c', 'Soum', '3a2231d2-692d-4788-8838-fcc23ead08f9', '2023-12-26 09:47:46', '2023-12-26 09:47:46', NULL, NULL, NULL, NULL),
('6482443e-b1d9-4a05-839d-b72fb121ea20', 'Kadiogo', '797163c0-b5d4-4348-a906-fa679d9b24d6', '2023-12-26 09:47:43', '2023-12-26 09:47:43', NULL, NULL, NULL, NULL),
('650d00e0-a5f0-45f7-a721-0481710b2072', 'Zondoma', 'e4481cf2-92c6-43dc-a9d6-a6ca327f76e5', '2023-12-26 09:47:45', '2023-12-26 09:47:45', NULL, NULL, NULL, NULL),
('696a36cc-23f5-42d7-921c-118888cba93b', 'Bougouriba', '2ba17602-4242-48ee-87f4-abfed0308c52', '2023-12-26 09:47:46', '2023-12-26 09:47:46', NULL, NULL, NULL, NULL),
('6b8792f7-79bf-432b-9ea5-78f2f2299cef', 'Koulpélogo', 'b4d60ebb-2206-4408-a3bb-dbce0a5b0018', '2023-12-26 09:47:43', '2023-12-26 09:47:43', NULL, NULL, NULL, NULL),
('77b415e0-7fed-4825-a381-f5263561a72b', 'Kenedougou', 'b8849b97-ee65-4ac9-827a-108f1c2d50f4', '2023-12-26 09:47:45', '2023-12-26 09:47:45', NULL, NULL, NULL, NULL),
('8034d22d-8ef8-458d-a400-609f57c76115', 'Nayala', '1244947c-6374-4598-8efa-69c5b3e0cb27', '2023-12-26 09:47:42', '2023-12-26 09:47:42', NULL, NULL, NULL, NULL),
('80a9960e-c749-40f2-a406-b3ea1ca3a351', 'Zoundwéogo', '4fb89a13-59ad-45cb-bb23-80f56e95f7c2', '2023-12-26 09:47:44', '2023-12-26 09:47:44', NULL, NULL, NULL, NULL),
('8561b1e1-094f-44bb-9bcf-c165e276f8cb', 'Sissili', 'c3a77af9-f314-42c2-b14f-86ca5f91c0c1', '2023-12-26 09:47:44', '2023-12-26 09:47:44', NULL, NULL, NULL, NULL),
('8c6431d3-f1c7-4cc0-a2e3-5b65938443c6', 'Loroum', 'e4481cf2-92c6-43dc-a9d6-a6ca327f76e5', '2023-12-26 09:47:45', '2023-12-26 09:47:45', NULL, NULL, NULL, NULL),
('8db0e601-c95b-4ddb-997a-ee22b2bcb6d1', 'Gnagna', 'cfa1187a-8b45-4207-87ea-6d1b8e607357', '2023-12-26 09:47:44', '2023-12-26 09:47:44', NULL, NULL, NULL, NULL),
('9206b213-50d9-47f4-abdb-2648721bc8b8', 'Oudalan', '3a2231d2-692d-4788-8838-fcc23ead08f9', '2023-12-26 09:47:46', '2023-12-26 09:47:46', NULL, NULL, NULL, NULL),
('98115280-064d-410b-a972-772f67fd203b', 'Banwa', '1244947c-6374-4598-8efa-69c5b3e0cb27', '2023-12-26 09:47:42', '2023-12-26 09:47:42', NULL, NULL, NULL, NULL),
('b102b659-128b-4e04-b5cd-0d41f42f9e27', 'Ganzourgou', 'd845f536-fbc4-4b2e-98ef-9f427a50a31f', '2023-12-26 09:47:45', '2023-12-26 09:47:45', NULL, NULL, NULL, NULL),
('b9ba3f8c-5e22-4c3a-87ae-68823723bca0', 'Léraba', '0d8832a4-ce7b-4d18-8fb8-c5587cbe3b43', '2023-12-26 09:47:43', '2023-12-26 09:47:43', NULL, NULL, NULL, NULL),
('b9ef0d8c-dc3e-44b2-9efa-f8cfe4c099a2', 'Komondjari', 'cfa1187a-8b45-4207-87ea-6d1b8e607357', '2023-12-26 09:47:44', '2023-12-26 09:47:44', NULL, NULL, NULL, NULL),
('c2861f17-ecf6-45e7-b008-92e578d5d029', 'Comoé', '0d8832a4-ce7b-4d18-8fb8-c5587cbe3b43', '2023-12-26 09:47:43', '2023-12-26 09:47:43', NULL, NULL, NULL, NULL),
('c659b48f-1b73-4272-ac87-5d3e3f4412ae', 'Noumbiel', '2ba17602-4242-48ee-87f4-abfed0308c52', '2023-12-26 09:47:46', '2023-12-26 09:47:46', NULL, NULL, NULL, NULL),
('cc8d0dd5-1d13-4c23-92c1-9306467ec8f1', 'Mouhoun', '1244947c-6374-4598-8efa-69c5b3e0cb27', '2023-12-26 09:47:42', '2023-12-26 09:47:42', NULL, NULL, NULL, NULL),
('ce119724-9606-4cad-af88-d5f38c385eeb', 'Boulkiemdé', 'c3a77af9-f314-42c2-b14f-86ca5f91c0c1', '2023-12-26 09:47:43', '2023-12-26 09:47:43', NULL, NULL, NULL, NULL),
('d4aa516b-7c48-48f3-94ff-9e9b3e43780e', 'Nahouri', '4fb89a13-59ad-45cb-bb23-80f56e95f7c2', '2023-12-26 09:47:44', '2023-12-26 09:47:44', NULL, NULL, NULL, NULL),
('dc1e28ba-2a1d-4278-9dc9-68933c67b35d', 'Tapoa', 'cfa1187a-8b45-4207-87ea-6d1b8e607357', '2023-12-26 09:47:45', '2023-12-26 09:47:45', NULL, NULL, NULL, NULL),
('dcbea669-7d63-4045-a143-a77e922013b2', 'Kossi', '1244947c-6374-4598-8efa-69c5b3e0cb27', '2023-12-26 09:47:42', '2023-12-26 09:47:42', NULL, NULL, NULL, NULL),
('e1d045e7-86db-4ef1-b3e0-787f430056b4', 'Yatenga', 'e4481cf2-92c6-43dc-a9d6-a6ca327f76e5', '2023-12-26 09:47:45', '2023-12-26 09:47:45', NULL, NULL, NULL, NULL),
('e2b3ade4-6709-4c51-bae7-31128bf929ab', 'Tuy', 'b8849b97-ee65-4ac9-827a-108f1c2d50f4', '2023-12-26 09:47:45', '2023-12-26 09:47:45', NULL, NULL, NULL, NULL),
('e8180ac5-cc07-4213-a2dd-9fb914a4707b', 'Yagha', '3a2231d2-692d-4788-8838-fcc23ead08f9', '2023-12-26 09:47:46', '2023-12-26 09:47:46', NULL, NULL, NULL, NULL),
('ea5f3cd6-5fee-4bba-b703-4c60b8dda5d3', 'Boulgou', 'b4d60ebb-2206-4408-a3bb-dbce0a5b0018', '2023-12-26 09:47:43', '2023-12-26 09:47:43', NULL, NULL, NULL, NULL),
('eb28755d-87a7-4256-be2a-8971436b81d5', 'Bam', '57726671-33ba-4a90-8812-b0db1c265efb', '2023-12-26 09:47:43', '2023-12-26 09:47:43', NULL, NULL, NULL, NULL),
('ecf35f08-f676-4b4b-a2cb-6a65052deab1', 'Kourwéogo', 'd845f536-fbc4-4b2e-98ef-9f427a50a31f', '2023-12-26 09:47:45', '2023-12-26 09:47:45', NULL, NULL, NULL, NULL),
('fbab03a0-6074-4b9b-9d43-061ef0ea40ba', 'Séno', '3a2231d2-692d-4788-8838-fcc23ead08f9', '2023-12-26 09:47:46', '2023-12-26 09:47:46', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`uuid`, `libelle`, `created_at`, `updated_at`, `code`, `created_by`, `updated_by`, `deleted_by`) VALUES
('0d8832a4-ce7b-4d18-8fb8-c5587cbe3b43', 'Cascades', '2023-12-26 09:47:41', '2023-12-26 09:47:41', NULL, NULL, NULL, NULL),
('1244947c-6374-4598-8efa-69c5b3e0cb27', 'Boucle du Mouhoun', '2023-12-26 09:47:41', '2023-12-26 09:47:41', NULL, NULL, NULL, NULL),
('2ba17602-4242-48ee-87f4-abfed0308c52', 'Sud-Ouest', '2023-12-26 09:47:41', '2023-12-26 09:47:41', NULL, NULL, NULL, NULL),
('3a2231d2-692d-4788-8838-fcc23ead08f9', 'Sahel', '2023-12-26 09:47:41', '2023-12-26 09:47:41', NULL, NULL, NULL, NULL),
('4fb89a13-59ad-45cb-bb23-80f56e95f7c2', 'Centre-Sud', '2023-12-26 09:47:42', '2023-12-26 09:47:42', NULL, NULL, NULL, NULL),
('57726671-33ba-4a90-8812-b0db1c265efb', 'Centre-Nord', '2023-12-26 09:47:41', '2023-12-26 09:47:41', NULL, NULL, NULL, NULL),
('797163c0-b5d4-4348-a906-fa679d9b24d6', 'Centre', '2023-12-26 09:47:40', '2023-12-26 09:47:40', NULL, NULL, NULL, NULL),
('b4d60ebb-2206-4408-a3bb-dbce0a5b0018', 'Centre-Est', '2023-12-26 09:47:41', '2023-12-26 09:47:41', NULL, NULL, NULL, NULL),
('b8849b97-ee65-4ac9-827a-108f1c2d50f4', 'Hauts-Bassins', '2023-12-26 09:47:41', '2023-12-26 09:47:41', NULL, NULL, NULL, NULL),
('c3a77af9-f314-42c2-b14f-86ca5f91c0c1', 'Centre-Ouest', '2023-12-26 09:47:41', '2023-12-26 09:47:41', NULL, NULL, NULL, NULL),
('cfa1187a-8b45-4207-87ea-6d1b8e607357', 'Est', '2023-12-26 09:47:40', '2023-12-26 09:47:40', NULL, NULL, NULL, NULL),
('d845f536-fbc4-4b2e-98ef-9f427a50a31f', 'Plateau-Central', '2023-12-26 09:47:41', '2023-12-26 09:47:41', NULL, NULL, NULL, NULL),
('e4481cf2-92c6-43dc-a9d6-a6ca327f76e5', 'Nord', '2023-12-26 09:47:41', '2023-12-26 09:47:41', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`uuid`, `code`, `libelle`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
('387cb95f-5d5c-484d-8afa-f2b5960e3f1b', 'GRE', 'Gestionnaire', '2023-12-26 09:48:57', '2023-12-26 09:48:57', NULL, NULL, NULL),
('822d4ff0-14f4-474d-9a7d-1131ea0a942d', 'RCT', 'Reception', '2023-12-26 09:48:57', '2023-12-26 09:48:57', NULL, NULL, NULL),
('8b4aabdb-921d-49e8-9fd7-d3a58f124b9d', 'ETDS', 'Etudes', '2023-12-26 09:48:57', '2023-12-26 09:48:57', NULL, NULL, NULL),
('c413726f-038e-492b-a569-6a2d4f7dd001', 'ADMIN', 'Administration', '2023-12-26 09:48:26', '2023-12-26 09:48:26', NULL, NULL, NULL),
('f5b23787-4350-4db1-b0fe-9204b3c63645', 'ADMIN', 'administration', '2023-12-26 09:48:57', '2023-12-26 09:48:57', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordre` int UNSIGNED DEFAULT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '1',
  `structure_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`uuid`, `libelle_court`, `libelle_long`, `type`, `ordre`, `etat`, `structure_id`, `created_at`, `updated_at`, `code`, `created_by`, `updated_by`, `deleted_by`) VALUES
('4778e5f5-ec2e-494f-b1b0-89d488bb88d6', 'DGEF', 'Direction Générale des Eaux et Forêts', NULL, NULL, 1, '2a95c6df-e364-4cc7-ae9d-84eac26d64bf', '2023-12-26 09:48:26', '2023-12-26 09:48:26', NULL, NULL, NULL, NULL),
('67de231d-9b9b-4ca7-9c29-d7f7fe65aeb5', 'DGRE', 'Direction Générale des Ressources en Eaux', NULL, NULL, 1, 'fbf7211f-e239-4f70-a5a7-66c829090f37', '2023-12-26 09:48:27', '2023-12-26 09:48:27', NULL, NULL, NULL, NULL),
('696ed21c-ef8b-4579-bce1-2ea6ba3bf420', 'DGPE', 'Direction Générale de la Proctection de L\'Environnement', NULL, NULL, 1, '1547813b-da37-4696-91af-cbfd2fe80d09', '2023-12-26 09:48:27', '2023-12-26 09:48:27', NULL, NULL, NULL, NULL),
('9a35c182-d21f-4383-a761-963037257f06', 'DSI', 'Direction des Services Informatiques', NULL, NULL, 1, 'f5633871-1ea5-4751-a974-9ceef7f7f17c', '2023-12-26 09:48:26', '2023-12-26 09:48:26', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `statut_demandes`
--

CREATE TABLE `statut_demandes` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statut` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `statut_demandes`
--

INSERT INTO `statut_demandes` (`uuid`, `etat`, `libelle`, `statut`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
('28be6f0d-b819-4ae8-8cf5-b41b189eee44', 'S', 'Actes signé', 'Demande signée', '2023-12-26 09:48:25', '2023-12-26 09:48:25', NULL, NULL, NULL),
('2de84ff2-13ee-426e-a8e4-0e914b57f5b3', 'A', 'Demande archivée', 'Demande archivée', '2023-12-26 09:48:56', '2023-12-26 09:48:56', NULL, NULL, NULL),
('54e7ad30-a10b-4ce8-a9ff-345d15a9ceba', 'V', 'En attente de visa', 'Demande validée', '2023-12-26 09:48:56', '2023-12-26 09:48:56', NULL, NULL, NULL),
('5c7ed16d-11f0-42ef-afc3-ad017cea9d49', 'S', 'Actes signé', 'Demande signée', '2023-12-26 09:48:56', '2023-12-26 09:48:56', NULL, NULL, NULL),
('7eb0bea6-77ce-456a-882d-f9f6fdb089eb', 'E', 'En cours d\'étude', 'Demande en étude', '2023-12-26 09:48:56', '2023-12-26 09:48:56', NULL, NULL, NULL),
('95d40e6b-3865-4895-b441-0ca2d2866efa', 'C', 'Attente de complément de dossier', 'Demande de complément de dossier', '2023-12-26 09:48:25', '2023-12-26 09:48:25', NULL, NULL, NULL),
('97e0e366-bed3-480f-9816-65046b87a327', 'A', 'Demande archivée', 'Demande archivée', '2023-12-26 09:48:25', '2023-12-26 09:48:25', NULL, NULL, NULL),
('b33017e0-1360-4f13-bd0a-92966dc1e804', 'D', 'Attente de vérification', 'Demande déposée', '2023-12-26 09:48:56', '2023-12-26 09:48:56', NULL, NULL, NULL),
('bdf55f92-0bec-4a16-8c27-3519642bfa2f', 'R', 'Demande réjetée', 'Demande réjetée', '2023-12-26 09:48:56', '2023-12-26 09:48:56', NULL, NULL, NULL),
('c89748e4-e1e2-4537-a782-5628656778f4', 'C', 'Attente de complément de dossier', 'Demande de complément de dossier', '2023-12-26 09:48:56', '2023-12-26 09:48:56', NULL, NULL, NULL),
('cd3f4f92-e899-4182-b162-a6bd44fa2224', 'V', 'En attente de visa', 'Demande validée', '2023-12-26 09:48:25', '2023-12-26 09:48:25', NULL, NULL, NULL),
('d2787973-92b1-4b8a-8ad3-43ddd6d078f2', 'D', 'Attente de vérification', 'Demande déposée', '2023-12-26 09:48:25', '2023-12-26 09:48:25', NULL, NULL, NULL),
('db497902-4fae-4531-ae3c-f531f6e340e3', 'R', 'Demande réjetée', 'Demande réjetée', '2023-12-26 09:48:25', '2023-12-26 09:48:25', NULL, NULL, NULL),
('e920d958-093d-46cf-9a3b-29404960de08', 'E', 'En cours d\'étude', 'Demande en étude', '2023-12-26 09:48:25', '2023-12-26 09:48:25', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `structures`
--

CREATE TABLE `structures` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordre` int UNSIGNED DEFAULT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `structures`
--

INSERT INTO `structures` (`uuid`, `libelle_court`, `libelle_long`, `type`, `ordre`, `etat`, `created_at`, `updated_at`, `code`, `created_by`, `updated_by`, `deleted_by`) VALUES
('1547813b-da37-4696-91af-cbfd2fe80d09', 'DGPE', 'Direction Générale de la Proctection de L\'Environnement', NULL, NULL, 1, '2023-12-26 09:48:27', '2023-12-26 09:48:27', NULL, NULL, NULL, NULL),
('2a95c6df-e364-4cc7-ae9d-84eac26d64bf', 'DGEF', 'Direction Générale des Eaux et Forêts', NULL, NULL, 1, '2023-12-26 09:48:25', '2023-12-26 09:48:25', NULL, NULL, NULL, NULL),
('f5633871-1ea5-4751-a974-9ceef7f7f17c', 'DSI', 'Direction des Services Informatiques', NULL, NULL, 1, '2023-12-26 09:48:25', '2023-12-26 09:48:25', NULL, NULL, NULL, NULL),
('fbf7211f-e239-4f70-a5a7-66c829090f37', 'DGRE', 'Direction Générale des Ressources en Eaux', NULL, NULL, 1, '2023-12-26 09:48:26', '2023-12-26 09:48:26', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tarifs`
--

CREATE TABLE `tarifs` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout` bigint NOT NULL DEFAULT '0',
  `demande_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarif_p001_s`
--

CREATE TABLE `tarif_p001_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout` bigint NOT NULL DEFAULT '0',
  `demande_p001_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarif_p0010_s`
--

CREATE TABLE `tarif_p0010_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout` bigint NOT NULL DEFAULT '0',
  `demande_p0010_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarif_p0011_s`
--

CREATE TABLE `tarif_p0011_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout` bigint NOT NULL DEFAULT '0',
  `demande_p0011_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarif_p002_s`
--

CREATE TABLE `tarif_p002_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout` bigint NOT NULL DEFAULT '0',
  `demande_p002_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarif_p003_s`
--

CREATE TABLE `tarif_p003_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout` bigint NOT NULL DEFAULT '0',
  `demande_p003_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarif_p004_s`
--

CREATE TABLE `tarif_p004_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout` bigint NOT NULL DEFAULT '0',
  `demande_p004_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarif_p005_s`
--

CREATE TABLE `tarif_p005_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout` bigint NOT NULL DEFAULT '0',
  `demande_p005_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarif_p006_s`
--

CREATE TABLE `tarif_p006_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout` bigint NOT NULL DEFAULT '0',
  `demande_p006_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarif_p007_s`
--

CREATE TABLE `tarif_p007_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout` bigint NOT NULL DEFAULT '0',
  `demande_p007_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarif_p008_s`
--

CREATE TABLE `tarif_p008_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout` bigint NOT NULL DEFAULT '0',
  `demande_p008_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tarif_p009_s`
--

CREATE TABLE `tarif_p009_s` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cout` bigint NOT NULL DEFAULT '0',
  `demande_p009_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_demandes`
--

CREATE TABLE `type_demandes` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarif` bigint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categorie_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_identites`
--

CREATE TABLE `type_identites` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_usagers`
--

CREATE TABLE `type_usagers` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_court` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle_long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `type_usagers`
--

INSERT INTO `type_usagers` (`uuid`, `libelle_court`, `libelle_long`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
('c74f3c85-3d67-48d5-bdc1-3eb56418fec7', 'PM', 'Personne morale', '2023-12-26 09:48:56', '2023-12-26 09:48:56', NULL, NULL, NULL),
('eafb5730-8144-4847-afb6-22da17d69449', 'PP', 'Personne physique', '2023-12-26 09:48:57', '2023-12-26 09:48:57', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `usagers`
--

CREATE TABLE `usagers` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `lieu_naisssance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_pere` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_mere` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profession` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domicile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse_bf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ref_identite` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom_entreprise` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_identite_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_origine_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_residence_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rccm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `siege_social` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `boite_postale` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `usagers`
--

INSERT INTO `usagers` (`uuid`, `nom`, `prenom`, `date_naissance`, `lieu_naisssance`, `nom_pere`, `nom_mere`, `pays`, `profession`, `domicile`, `adresse_bf`, `telephone`, `etat`, `code`, `ref_identite`, `nom_entreprise`, `type_usager_id`, `type_identite_id`, `commune_origine_id`, `commune_residence_id`, `created_at`, `updated_at`, `rccm`, `ifu`, `role_id`, `siege_social`, `boite_postale`, `created_by`, `updated_by`, `deleted_by`) VALUES
('19d9f144-53ba-4b29-9391-496ea91fe587', 'OUEDRAOGO', 'Josue', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '75509104', NULL, NULL, NULL, NULL, 'eafb5730-8144-4847-afb6-22da17d69449', NULL, NULL, NULL, '2023-12-26 10:51:08', '2023-12-26 10:51:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `commune_origine_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commune_residence_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usager_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `must_reset_password` tinyint(1) NOT NULL DEFAULT '1',
  `etat` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`uuid`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `commune_origine_id`, `commune_residence_id`, `agent_id`, `usager_id`, `role_id`, `created_by`, `updated_by`, `deleted_by`, `must_reset_password`, `etat`) VALUES
('3d9730e4-0aa7-483f-b70c-d7dba2273030', 'adminMeea', 'admin@gmail.com', NULL, '$2y$10$aeitYwLLIIDnB6SxaUvb8OAZnUgQku/0/.jd3HfnIONzJs.28ZUC.', NULL, '2023-12-26 09:48:26', '2023-12-26 10:13:53', NULL, NULL, '228b55e6-9bde-4ed3-9bdd-82cf5dc59560', NULL, 'c413726f-038e-492b-a569-6a2d4f7dd001', NULL, '3d9730e4-0aa7-483f-b70c-d7dba2273030', NULL, 0, 1),
('5b20071f-ca22-456e-8ecc-5f563ebd066e', 'Josue OUEDRAOGO', 'jos.weder@gmail.com', NULL, '$2y$10$TsDFOeKMJWK/PCIyFATjG.nVoTfIfM/8SR6xP5KurovNx/glZVhVO', NULL, '2023-12-26 10:51:08', '2023-12-26 10:51:08', NULL, NULL, NULL, '19d9f144-53ba-4b29-9391-496ea91fe587', NULL, NULL, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `villages`
--

CREATE TABLE `villages` (
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `libelle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `affectations`
--
ALTER TABLE `affectations`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectations_agent_id_foreign` (`agent_id`),
  ADD KEY `affectations_demande_id_foreign` (`demande_id`);

--
-- Index pour la table `affectation_p001_s`
--
ALTER TABLE `affectation_p001_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectation_p001_s_agent_id_foreign` (`agent_id`),
  ADD KEY `affectation_p001_s_demande_p001_id_foreign` (`demande_p001_id`);

--
-- Index pour la table `affectation_p0010_s`
--
ALTER TABLE `affectation_p0010_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectation_p0010_s_agent_id_foreign` (`agent_id`),
  ADD KEY `affectation_p0010_s_demande_p0010_id_foreign` (`demande_p0010_id`);

--
-- Index pour la table `affectation_p0011_s`
--
ALTER TABLE `affectation_p0011_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectation_p0011_s_agent_id_foreign` (`agent_id`),
  ADD KEY `affectation_p0011_s_demande_p0011_id_foreign` (`demande_p0011_id`);

--
-- Index pour la table `affectation_p0012_s`
--
ALTER TABLE `affectation_p0012_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectation_p0012_s_agent_id_foreign` (`agent_id`),
  ADD KEY `affectation_p0012_s_demande_p0012_id_foreign` (`demande_p0012_id`);

--
-- Index pour la table `affectation_p002_s`
--
ALTER TABLE `affectation_p002_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectation_p002_s_agent_id_foreign` (`agent_id`),
  ADD KEY `affectation_p002_s_demande_p002_id_foreign` (`demande_p002_id`);

--
-- Index pour la table `affectation_p003_s`
--
ALTER TABLE `affectation_p003_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectation_p003_s_agent_id_foreign` (`agent_id`),
  ADD KEY `affectation_p003_s_demande_p003_id_foreign` (`demande_p003_id`);

--
-- Index pour la table `affectation_p004_s`
--
ALTER TABLE `affectation_p004_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectation_p004_s_agent_id_foreign` (`agent_id`),
  ADD KEY `affectation_p004_s_demande_p004_id_foreign` (`demande_p004_id`);

--
-- Index pour la table `affectation_p005_s`
--
ALTER TABLE `affectation_p005_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectation_p005_s_agent_id_foreign` (`agent_id`),
  ADD KEY `affectation_p005_s_demande_p005_id_foreign` (`demande_p005_id`);

--
-- Index pour la table `affectation_p006_s`
--
ALTER TABLE `affectation_p006_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectation_p006_s_agent_id_foreign` (`agent_id`),
  ADD KEY `affectation_p006_s_demande_p006_id_foreign` (`demande_p006_id`);

--
-- Index pour la table `affectation_p007_s`
--
ALTER TABLE `affectation_p007_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectation_p007_s_agent_id_foreign` (`agent_id`),
  ADD KEY `affectation_p007_s_demande_p007_id_foreign` (`demande_p007_id`);

--
-- Index pour la table `affectation_p008_s`
--
ALTER TABLE `affectation_p008_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectation_p008_s_agent_id_foreign` (`agent_id`),
  ADD KEY `affectation_p008_s_demande_p008_id_foreign` (`demande_p008_id`);

--
-- Index pour la table `affectation_p009_s`
--
ALTER TABLE `affectation_p009_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `affectation_p009_s_agent_id_foreign` (`agent_id`),
  ADD KEY `affectation_p009_s_demande_p009_id_foreign` (`demande_p009_id`);

--
-- Index pour la table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `agents_service_id_foreign` (`service_id`),
  ADD KEY `agents_role_id_foreign` (`role_id`),
  ADD KEY `agents_province_id_foreign` (`province_id`),
  ADD KEY `agents_commune_id_foreign` (`commune_id`);

--
-- Index pour la table `base_juridiques`
--
ALTER TABLE `base_juridiques`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaires_demande_id_foreign` (`demande_id`);

--
-- Index pour la table `commentaire_p001_s`
--
ALTER TABLE `commentaire_p001_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaire_p001_s_demande_p001_id_foreign` (`demande_p001_id`);

--
-- Index pour la table `commentaire_p0010_s`
--
ALTER TABLE `commentaire_p0010_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaire_p0010_s_demande_p0010_id_foreign` (`demande_p0010_id`);

--
-- Index pour la table `commentaire_p0011_s`
--
ALTER TABLE `commentaire_p0011_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaire_p0011_s_demande_p0011_id_foreign` (`demande_p0011_id`);

--
-- Index pour la table `commentaire_p0012_s`
--
ALTER TABLE `commentaire_p0012_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaire_p0012_s_demande_p0012_id_foreign` (`demande_p0012_id`);

--
-- Index pour la table `commentaire_p002_s`
--
ALTER TABLE `commentaire_p002_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaire_p002_s_demande_p002_id_foreign` (`demande_p002_id`);

--
-- Index pour la table `commentaire_p003_s`
--
ALTER TABLE `commentaire_p003_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaire_p003_s_demande_p003_id_foreign` (`demande_p003_id`);

--
-- Index pour la table `commentaire_p004_s`
--
ALTER TABLE `commentaire_p004_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaire_p004_s_demande_p004_id_foreign` (`demande_p004_id`);

--
-- Index pour la table `commentaire_p005_s`
--
ALTER TABLE `commentaire_p005_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaire_p005_s_demande_p005_id_foreign` (`demande_p005_id`);

--
-- Index pour la table `commentaire_p006_s`
--
ALTER TABLE `commentaire_p006_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaire_p006_s_demande_p006_id_foreign` (`demande_p006_id`);

--
-- Index pour la table `commentaire_p007_s`
--
ALTER TABLE `commentaire_p007_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaire_p007_s_demande_p007_id_foreign` (`demande_p007_id`);

--
-- Index pour la table `commentaire_p008_s`
--
ALTER TABLE `commentaire_p008_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaire_p008_s_demande_p008_id_foreign` (`demande_p008_id`);

--
-- Index pour la table `commentaire_p009_s`
--
ALTER TABLE `commentaire_p009_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `commentaire_p009_s_demande_p009_id_foreign` (`demande_p009_id`);

--
-- Index pour la table `communes`
--
ALTER TABLE `communes`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `communes_province_id_foreign` (`province_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demandes_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demandes_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demandes_commune_id_foreign` (`commune_id`),
  ADD KEY `demandes_usager_id_foreign` (`usager_id`);

--
-- Index pour la table `demande_categorie_p002_s`
--
ALTER TABLE `demande_categorie_p002_s`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `demande_domaine_p002_s`
--
ALTER TABLE `demande_domaine_p002_s`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `demande_p001_s`
--
ALTER TABLE `demande_p001_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_p001_s_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demande_p001_s_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demande_p001_s_commune_id_foreign` (`commune_id`),
  ADD KEY `demande_p001_s_usager_id_foreign` (`usager_id`),
  ADD KEY `demande_p001_s_province_id_foreign` (`province_id`);

--
-- Index pour la table `demande_p0010_s`
--
ALTER TABLE `demande_p0010_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_p0010_s_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demande_p0010_s_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demande_p0010_s_commune_id_foreign` (`commune_id`),
  ADD KEY `demande_p0010_s_usager_id_foreign` (`usager_id`),
  ADD KEY `demande_p0010_s_province_id_foreign` (`province_id`);

--
-- Index pour la table `demande_p0011_s`
--
ALTER TABLE `demande_p0011_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_p0011_s_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demande_p0011_s_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demande_p0011_s_commune_id_foreign` (`commune_id`),
  ADD KEY `demande_p0011_s_usager_id_foreign` (`usager_id`),
  ADD KEY `demande_p0011_s_province_id_foreign` (`province_id`);

--
-- Index pour la table `demande_p0012_s`
--
ALTER TABLE `demande_p0012_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_p0012_s_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demande_p0012_s_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demande_p0012_s_commune_id_foreign` (`commune_id`),
  ADD KEY `demande_p0012_s_usager_id_foreign` (`usager_id`),
  ADD KEY `demande_p0012_s_province_id_foreign` (`province_id`);

--
-- Index pour la table `demande_p002_s`
--
ALTER TABLE `demande_p002_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_p002_s_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demande_p002_s_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demande_p002_s_commune_id_foreign` (`commune_id`),
  ADD KEY `demande_p002_s_usager_id_foreign` (`usager_id`),
  ADD KEY `demande_p002_s_province_id_foreign` (`province_id`);

--
-- Index pour la table `demande_p003_s`
--
ALTER TABLE `demande_p003_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_p003_s_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demande_p003_s_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demande_p003_s_commune_id_foreign` (`commune_id`),
  ADD KEY `demande_p003_s_usager_id_foreign` (`usager_id`),
  ADD KEY `demande_p003_s_province_id_foreign` (`province_id`);

--
-- Index pour la table `demande_p004_s`
--
ALTER TABLE `demande_p004_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_p004_s_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demande_p004_s_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demande_p004_s_commune_id_foreign` (`commune_id`),
  ADD KEY `demande_p004_s_usager_id_foreign` (`usager_id`),
  ADD KEY `demande_p004_s_province_id_foreign` (`province_id`);

--
-- Index pour la table `demande_p005_s`
--
ALTER TABLE `demande_p005_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_p005_s_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demande_p005_s_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demande_p005_s_commune_id_foreign` (`commune_id`),
  ADD KEY `demande_p005_s_usager_id_foreign` (`usager_id`),
  ADD KEY `demande_p005_s_province_id_foreign` (`province_id`);

--
-- Index pour la table `demande_p006_s`
--
ALTER TABLE `demande_p006_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_p006_s_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demande_p006_s_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demande_p006_s_commune_id_foreign` (`commune_id`),
  ADD KEY `demande_p006_s_usager_id_foreign` (`usager_id`),
  ADD KEY `demande_p006_s_province_id_foreign` (`province_id`);

--
-- Index pour la table `demande_p007_s`
--
ALTER TABLE `demande_p007_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_p007_s_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demande_p007_s_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demande_p007_s_commune_id_foreign` (`commune_id`),
  ADD KEY `demande_p007_s_usager_id_foreign` (`usager_id`),
  ADD KEY `demande_p007_s_province_id_foreign` (`province_id`);

--
-- Index pour la table `demande_p008_s`
--
ALTER TABLE `demande_p008_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_p008_s_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demande_p008_s_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demande_p008_s_commune_id_foreign` (`commune_id`),
  ADD KEY `demande_p008_s_usager_id_foreign` (`usager_id`),
  ADD KEY `demande_p008_s_province_id_foreign` (`province_id`);

--
-- Index pour la table `demande_p009_s`
--
ALTER TABLE `demande_p009_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_p009_s_procedure_id_foreign` (`procedure_id`),
  ADD KEY `demande_p009_s_type_demande_id_foreign` (`type_demande_id`),
  ADD KEY `demande_p009_s_commune_id_foreign` (`commune_id`),
  ADD KEY `demande_p009_s_usager_id_foreign` (`usager_id`),
  ADD KEY `demande_p009_s_province_id_foreign` (`province_id`);

--
-- Index pour la table `demande_pieces`
--
ALTER TABLE `demande_pieces`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_pieces_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_pieces_demande_id_foreign` (`demande_id`);

--
-- Index pour la table `demande_piece_p001_s`
--
ALTER TABLE `demande_piece_p001_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_piece_p001_s_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_piece_p001_s_demande_p001_id_foreign` (`demande_p001_id`);

--
-- Index pour la table `demande_piece_p0010_s`
--
ALTER TABLE `demande_piece_p0010_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_piece_p0010_s_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_piece_p0010_s_demande_p0010_id_foreign` (`demande_p0010_id`);

--
-- Index pour la table `demande_piece_p0011_s`
--
ALTER TABLE `demande_piece_p0011_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_piece_p0011_s_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_piece_p0011_s_demande_p0011_id_foreign` (`demande_p0011_id`);

--
-- Index pour la table `demande_piece_p0012_s`
--
ALTER TABLE `demande_piece_p0012_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_piece_p0012_s_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_piece_p0012_s_demande_p0012_id_foreign` (`demande_p0012_id`);

--
-- Index pour la table `demande_piece_p002_s`
--
ALTER TABLE `demande_piece_p002_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_piece_p002_s_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_piece_p002_s_demande_p002_id_foreign` (`demande_p002_id`);

--
-- Index pour la table `demande_piece_p003_s`
--
ALTER TABLE `demande_piece_p003_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_piece_p003_s_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_piece_p003_s_demande_p003_id_foreign` (`demande_p003_id`);

--
-- Index pour la table `demande_piece_p004_s`
--
ALTER TABLE `demande_piece_p004_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_piece_p004_s_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_piece_p004_s_demande_p004_id_foreign` (`demande_p004_id`);

--
-- Index pour la table `demande_piece_p005_s`
--
ALTER TABLE `demande_piece_p005_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_piece_p005_s_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_piece_p005_s_demande_p005_id_foreign` (`demande_p005_id`);

--
-- Index pour la table `demande_piece_p006_s`
--
ALTER TABLE `demande_piece_p006_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_piece_p006_s_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_piece_p006_s_demande_p006_id_foreign` (`demande_p006_id`);

--
-- Index pour la table `demande_piece_p007_s`
--
ALTER TABLE `demande_piece_p007_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_piece_p007_s_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_piece_p007_s_demande_p007_id_foreign` (`demande_p007_id`);

--
-- Index pour la table `demande_piece_p008_s`
--
ALTER TABLE `demande_piece_p008_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_piece_p008_s_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_piece_p008_s_demande_p008_id_foreign` (`demande_p008_id`);

--
-- Index pour la table `demande_piece_p009_s`
--
ALTER TABLE `demande_piece_p009_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_piece_p009_s_piece_jointe_id_foreign` (`piece_jointe_id`),
  ADD KEY `demande_piece_p009_s_demande_p009_id_foreign` (`demande_p009_id`);

--
-- Index pour la table `demande_sous_domaine_p002_s`
--
ALTER TABLE `demande_sous_domaine_p002_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `demande_sous_domaine_p002_s_demande_domaine_p002_id_foreign` (`demande_domaine_p002_id`),
  ADD KEY `demande_sous_domaine_p002_s_demande_categorie_p002_id_foreign` (`demande_categorie_p002_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `localites`
--
ALTER TABLE `localites`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `localites_commune_id_foreign` (`commune_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mode_paiements`
--
ALTER TABLE `mode_paiements`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `paiements_mode_paiement_id_foreign` (`mode_paiement_id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `piece_jointes`
--
ALTER TABLE `piece_jointes`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `plaintes`
--
ALTER TABLE `plaintes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plaintes_user_id_foreign` (`user_id`),
  ADD KEY `plaintes_usager_id_foreign` (`usager_id`);

--
-- Index pour la table `procedures`
--
ALTER TABLE `procedures`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `procedures_service_id_foreign` (`service_id`);

--
-- Index pour la table `procedure_base_juridiques`
--
ALTER TABLE `procedure_base_juridiques`
  ADD KEY `procedure_base_juridiques_procedure_id_foreign` (`procedure_id`),
  ADD KEY `procedure_base_juridiques_base_juridique_id_foreign` (`base_juridique_id`);

--
-- Index pour la table `procedure_piece_jointes`
--
ALTER TABLE `procedure_piece_jointes`
  ADD KEY `procedure_piece_jointes_procedure_id_foreign` (`procedure_id`),
  ADD KEY `procedure_piece_jointes_piece_jointe_id_foreign` (`piece_jointe_id`);

--
-- Index pour la table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `provinces_region_id_foreign` (`region_id`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `services_structure_id_foreign` (`structure_id`);

--
-- Index pour la table `statut_demandes`
--
ALTER TABLE `statut_demandes`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `structures`
--
ALTER TABLE `structures`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `tarifs`
--
ALTER TABLE `tarifs`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `tarifs_demande_id_foreign` (`demande_id`);

--
-- Index pour la table `tarif_p001_s`
--
ALTER TABLE `tarif_p001_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `tarif_p001_s_demande_p001_id_foreign` (`demande_p001_id`);

--
-- Index pour la table `tarif_p0010_s`
--
ALTER TABLE `tarif_p0010_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `tarif_p0010_s_demande_p0010_id_foreign` (`demande_p0010_id`);

--
-- Index pour la table `tarif_p0011_s`
--
ALTER TABLE `tarif_p0011_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `tarif_p0011_s_demande_p0011_id_foreign` (`demande_p0011_id`);

--
-- Index pour la table `tarif_p002_s`
--
ALTER TABLE `tarif_p002_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `tarif_p002_s_demande_p002_id_foreign` (`demande_p002_id`);

--
-- Index pour la table `tarif_p003_s`
--
ALTER TABLE `tarif_p003_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `tarif_p003_s_demande_p003_id_foreign` (`demande_p003_id`);

--
-- Index pour la table `tarif_p004_s`
--
ALTER TABLE `tarif_p004_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `tarif_p004_s_demande_p004_id_foreign` (`demande_p004_id`);

--
-- Index pour la table `tarif_p005_s`
--
ALTER TABLE `tarif_p005_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `tarif_p005_s_demande_p005_id_foreign` (`demande_p005_id`);

--
-- Index pour la table `tarif_p006_s`
--
ALTER TABLE `tarif_p006_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `tarif_p006_s_demande_p006_id_foreign` (`demande_p006_id`);

--
-- Index pour la table `tarif_p007_s`
--
ALTER TABLE `tarif_p007_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `tarif_p007_s_demande_p007_id_foreign` (`demande_p007_id`);

--
-- Index pour la table `tarif_p008_s`
--
ALTER TABLE `tarif_p008_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `tarif_p008_s_demande_p008_id_foreign` (`demande_p008_id`);

--
-- Index pour la table `tarif_p009_s`
--
ALTER TABLE `tarif_p009_s`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `tarif_p009_s_demande_p009_id_foreign` (`demande_p009_id`);

--
-- Index pour la table `type_demandes`
--
ALTER TABLE `type_demandes`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `type_demandes_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `type_identites`
--
ALTER TABLE `type_identites`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `type_usagers`
--
ALTER TABLE `type_usagers`
  ADD PRIMARY KEY (`uuid`);

--
-- Index pour la table `usagers`
--
ALTER TABLE `usagers`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `usagers_type_usager_id_foreign` (`type_usager_id`),
  ADD KEY `usagers_type_identite_id_foreign` (`type_identite_id`),
  ADD KEY `usagers_commune_origine_id_foreign` (`commune_origine_id`),
  ADD KEY `usagers_commune_residence_id_foreign` (`commune_residence_id`),
  ADD KEY `usagers_role_id_foreign` (`role_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_commune_origine_id_foreign` (`commune_origine_id`),
  ADD KEY `users_commune_residence_id_foreign` (`commune_residence_id`),
  ADD KEY `users_agent_id_foreign` (`agent_id`),
  ADD KEY `users_usager_id_foreign` (`usager_id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Index pour la table `villages`
--
ALTER TABLE `villages`
  ADD PRIMARY KEY (`uuid`),
  ADD KEY `villages_commune_id_foreign` (`commune_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `plaintes`
--
ALTER TABLE `plaintes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `affectations`
--
ALTER TABLE `affectations`
  ADD CONSTRAINT `affectations_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectations_demande_id_foreign` FOREIGN KEY (`demande_id`) REFERENCES `demandes` (`uuid`);

--
-- Contraintes pour la table `affectation_p001_s`
--
ALTER TABLE `affectation_p001_s`
  ADD CONSTRAINT `affectation_p001_s_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectation_p001_s_demande_p001_id_foreign` FOREIGN KEY (`demande_p001_id`) REFERENCES `demande_p001_s` (`uuid`);

--
-- Contraintes pour la table `affectation_p0010_s`
--
ALTER TABLE `affectation_p0010_s`
  ADD CONSTRAINT `affectation_p0010_s_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectation_p0010_s_demande_p0010_id_foreign` FOREIGN KEY (`demande_p0010_id`) REFERENCES `demande_p0010_s` (`uuid`);

--
-- Contraintes pour la table `affectation_p0011_s`
--
ALTER TABLE `affectation_p0011_s`
  ADD CONSTRAINT `affectation_p0011_s_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectation_p0011_s_demande_p0011_id_foreign` FOREIGN KEY (`demande_p0011_id`) REFERENCES `demande_p0011_s` (`uuid`);

--
-- Contraintes pour la table `affectation_p0012_s`
--
ALTER TABLE `affectation_p0012_s`
  ADD CONSTRAINT `affectation_p0012_s_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectation_p0012_s_demande_p0012_id_foreign` FOREIGN KEY (`demande_p0012_id`) REFERENCES `demande_p0012_s` (`uuid`);

--
-- Contraintes pour la table `affectation_p002_s`
--
ALTER TABLE `affectation_p002_s`
  ADD CONSTRAINT `affectation_p002_s_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectation_p002_s_demande_p002_id_foreign` FOREIGN KEY (`demande_p002_id`) REFERENCES `demande_p002_s` (`uuid`);

--
-- Contraintes pour la table `affectation_p003_s`
--
ALTER TABLE `affectation_p003_s`
  ADD CONSTRAINT `affectation_p003_s_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectation_p003_s_demande_p003_id_foreign` FOREIGN KEY (`demande_p003_id`) REFERENCES `demande_p003_s` (`uuid`);

--
-- Contraintes pour la table `affectation_p004_s`
--
ALTER TABLE `affectation_p004_s`
  ADD CONSTRAINT `affectation_p004_s_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectation_p004_s_demande_p004_id_foreign` FOREIGN KEY (`demande_p004_id`) REFERENCES `demande_p004_s` (`uuid`);

--
-- Contraintes pour la table `affectation_p005_s`
--
ALTER TABLE `affectation_p005_s`
  ADD CONSTRAINT `affectation_p005_s_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectation_p005_s_demande_p005_id_foreign` FOREIGN KEY (`demande_p005_id`) REFERENCES `demande_p005_s` (`uuid`);

--
-- Contraintes pour la table `affectation_p006_s`
--
ALTER TABLE `affectation_p006_s`
  ADD CONSTRAINT `affectation_p006_s_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectation_p006_s_demande_p006_id_foreign` FOREIGN KEY (`demande_p006_id`) REFERENCES `demande_p006_s` (`uuid`);

--
-- Contraintes pour la table `affectation_p007_s`
--
ALTER TABLE `affectation_p007_s`
  ADD CONSTRAINT `affectation_p007_s_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectation_p007_s_demande_p007_id_foreign` FOREIGN KEY (`demande_p007_id`) REFERENCES `demande_p007_s` (`uuid`);

--
-- Contraintes pour la table `affectation_p008_s`
--
ALTER TABLE `affectation_p008_s`
  ADD CONSTRAINT `affectation_p008_s_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectation_p008_s_demande_p008_id_foreign` FOREIGN KEY (`demande_p008_id`) REFERENCES `demande_p008_s` (`uuid`);

--
-- Contraintes pour la table `affectation_p009_s`
--
ALTER TABLE `affectation_p009_s`
  ADD CONSTRAINT `affectation_p009_s_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`),
  ADD CONSTRAINT `affectation_p009_s_demande_p009_id_foreign` FOREIGN KEY (`demande_p009_id`) REFERENCES `demande_p009_s` (`uuid`);

--
-- Contraintes pour la table `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `agents_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `agents_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`uuid`),
  ADD CONSTRAINT `agents_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`uuid`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_demande_id_foreign` FOREIGN KEY (`demande_id`) REFERENCES `demandes` (`uuid`);

--
-- Contraintes pour la table `commentaire_p001_s`
--
ALTER TABLE `commentaire_p001_s`
  ADD CONSTRAINT `commentaire_p001_s_demande_p001_id_foreign` FOREIGN KEY (`demande_p001_id`) REFERENCES `demande_p001_s` (`uuid`);

--
-- Contraintes pour la table `commentaire_p0010_s`
--
ALTER TABLE `commentaire_p0010_s`
  ADD CONSTRAINT `commentaire_p0010_s_demande_p0010_id_foreign` FOREIGN KEY (`demande_p0010_id`) REFERENCES `demande_p0010_s` (`uuid`);

--
-- Contraintes pour la table `commentaire_p0011_s`
--
ALTER TABLE `commentaire_p0011_s`
  ADD CONSTRAINT `commentaire_p0011_s_demande_p0011_id_foreign` FOREIGN KEY (`demande_p0011_id`) REFERENCES `demande_p0011_s` (`uuid`);

--
-- Contraintes pour la table `commentaire_p0012_s`
--
ALTER TABLE `commentaire_p0012_s`
  ADD CONSTRAINT `commentaire_p0012_s_demande_p0012_id_foreign` FOREIGN KEY (`demande_p0012_id`) REFERENCES `demande_p0012_s` (`uuid`);

--
-- Contraintes pour la table `commentaire_p002_s`
--
ALTER TABLE `commentaire_p002_s`
  ADD CONSTRAINT `commentaire_p002_s_demande_p002_id_foreign` FOREIGN KEY (`demande_p002_id`) REFERENCES `demande_p002_s` (`uuid`);

--
-- Contraintes pour la table `commentaire_p003_s`
--
ALTER TABLE `commentaire_p003_s`
  ADD CONSTRAINT `commentaire_p003_s_demande_p003_id_foreign` FOREIGN KEY (`demande_p003_id`) REFERENCES `demande_p003_s` (`uuid`);

--
-- Contraintes pour la table `commentaire_p004_s`
--
ALTER TABLE `commentaire_p004_s`
  ADD CONSTRAINT `commentaire_p004_s_demande_p004_id_foreign` FOREIGN KEY (`demande_p004_id`) REFERENCES `demande_p004_s` (`uuid`);

--
-- Contraintes pour la table `commentaire_p005_s`
--
ALTER TABLE `commentaire_p005_s`
  ADD CONSTRAINT `commentaire_p005_s_demande_p005_id_foreign` FOREIGN KEY (`demande_p005_id`) REFERENCES `demande_p005_s` (`uuid`);

--
-- Contraintes pour la table `commentaire_p006_s`
--
ALTER TABLE `commentaire_p006_s`
  ADD CONSTRAINT `commentaire_p006_s_demande_p006_id_foreign` FOREIGN KEY (`demande_p006_id`) REFERENCES `demande_p006_s` (`uuid`);

--
-- Contraintes pour la table `commentaire_p007_s`
--
ALTER TABLE `commentaire_p007_s`
  ADD CONSTRAINT `commentaire_p007_s_demande_p007_id_foreign` FOREIGN KEY (`demande_p007_id`) REFERENCES `demande_p007_s` (`uuid`);

--
-- Contraintes pour la table `commentaire_p008_s`
--
ALTER TABLE `commentaire_p008_s`
  ADD CONSTRAINT `commentaire_p008_s_demande_p008_id_foreign` FOREIGN KEY (`demande_p008_id`) REFERENCES `demande_p008_s` (`uuid`);

--
-- Contraintes pour la table `commentaire_p009_s`
--
ALTER TABLE `commentaire_p009_s`
  ADD CONSTRAINT `commentaire_p009_s_demande_p009_id_foreign` FOREIGN KEY (`demande_p009_id`) REFERENCES `demande_p009_s` (`uuid`);

--
-- Contraintes pour la table `communes`
--
ALTER TABLE `communes`
  ADD CONSTRAINT `communes_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`);

--
-- Contraintes pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD CONSTRAINT `demandes_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demandes_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demandes_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demandes_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_p001_s`
--
ALTER TABLE `demande_p001_s`
  ADD CONSTRAINT `demande_p001_s_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demande_p001_s_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demande_p001_s_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `demande_p001_s_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demande_p001_s_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_p0010_s`
--
ALTER TABLE `demande_p0010_s`
  ADD CONSTRAINT `demande_p0010_s_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demande_p0010_s_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demande_p0010_s_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `demande_p0010_s_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demande_p0010_s_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_p0011_s`
--
ALTER TABLE `demande_p0011_s`
  ADD CONSTRAINT `demande_p0011_s_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demande_p0011_s_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demande_p0011_s_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `demande_p0011_s_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demande_p0011_s_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_p0012_s`
--
ALTER TABLE `demande_p0012_s`
  ADD CONSTRAINT `demande_p0012_s_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demande_p0012_s_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demande_p0012_s_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `demande_p0012_s_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demande_p0012_s_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_p002_s`
--
ALTER TABLE `demande_p002_s`
  ADD CONSTRAINT `demande_p002_s_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demande_p002_s_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demande_p002_s_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `demande_p002_s_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demande_p002_s_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_p003_s`
--
ALTER TABLE `demande_p003_s`
  ADD CONSTRAINT `demande_p003_s_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demande_p003_s_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demande_p003_s_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `demande_p003_s_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demande_p003_s_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_p004_s`
--
ALTER TABLE `demande_p004_s`
  ADD CONSTRAINT `demande_p004_s_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demande_p004_s_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demande_p004_s_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `demande_p004_s_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demande_p004_s_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_p005_s`
--
ALTER TABLE `demande_p005_s`
  ADD CONSTRAINT `demande_p005_s_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demande_p005_s_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demande_p005_s_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `demande_p005_s_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demande_p005_s_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_p006_s`
--
ALTER TABLE `demande_p006_s`
  ADD CONSTRAINT `demande_p006_s_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demande_p006_s_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demande_p006_s_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `demande_p006_s_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demande_p006_s_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_p007_s`
--
ALTER TABLE `demande_p007_s`
  ADD CONSTRAINT `demande_p007_s_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demande_p007_s_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demande_p007_s_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `demande_p007_s_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demande_p007_s_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_p008_s`
--
ALTER TABLE `demande_p008_s`
  ADD CONSTRAINT `demande_p008_s_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demande_p008_s_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demande_p008_s_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `demande_p008_s_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demande_p008_s_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_p009_s`
--
ALTER TABLE `demande_p009_s`
  ADD CONSTRAINT `demande_p009_s_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `demande_p009_s_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`),
  ADD CONSTRAINT `demande_p009_s_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `demande_p009_s_type_demande_id_foreign` FOREIGN KEY (`type_demande_id`) REFERENCES `type_demandes` (`uuid`),
  ADD CONSTRAINT `demande_p009_s_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`);

--
-- Contraintes pour la table `demande_pieces`
--
ALTER TABLE `demande_pieces`
  ADD CONSTRAINT `demande_pieces_demande_id_foreign` FOREIGN KEY (`demande_id`) REFERENCES `demandes` (`uuid`),
  ADD CONSTRAINT `demande_pieces_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_piece_p001_s`
--
ALTER TABLE `demande_piece_p001_s`
  ADD CONSTRAINT `demande_piece_p001_s_demande_p001_id_foreign` FOREIGN KEY (`demande_p001_id`) REFERENCES `demande_p001_s` (`uuid`),
  ADD CONSTRAINT `demande_piece_p001_s_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_piece_p0010_s`
--
ALTER TABLE `demande_piece_p0010_s`
  ADD CONSTRAINT `demande_piece_p0010_s_demande_p0010_id_foreign` FOREIGN KEY (`demande_p0010_id`) REFERENCES `demande_p0010_s` (`uuid`),
  ADD CONSTRAINT `demande_piece_p0010_s_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_piece_p0011_s`
--
ALTER TABLE `demande_piece_p0011_s`
  ADD CONSTRAINT `demande_piece_p0011_s_demande_p0011_id_foreign` FOREIGN KEY (`demande_p0011_id`) REFERENCES `demande_p0011_s` (`uuid`),
  ADD CONSTRAINT `demande_piece_p0011_s_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_piece_p0012_s`
--
ALTER TABLE `demande_piece_p0012_s`
  ADD CONSTRAINT `demande_piece_p0012_s_demande_p0012_id_foreign` FOREIGN KEY (`demande_p0012_id`) REFERENCES `demande_p0012_s` (`uuid`),
  ADD CONSTRAINT `demande_piece_p0012_s_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_piece_p002_s`
--
ALTER TABLE `demande_piece_p002_s`
  ADD CONSTRAINT `demande_piece_p002_s_demande_p002_id_foreign` FOREIGN KEY (`demande_p002_id`) REFERENCES `demande_p002_s` (`uuid`),
  ADD CONSTRAINT `demande_piece_p002_s_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_piece_p003_s`
--
ALTER TABLE `demande_piece_p003_s`
  ADD CONSTRAINT `demande_piece_p003_s_demande_p003_id_foreign` FOREIGN KEY (`demande_p003_id`) REFERENCES `demande_p003_s` (`uuid`),
  ADD CONSTRAINT `demande_piece_p003_s_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_piece_p004_s`
--
ALTER TABLE `demande_piece_p004_s`
  ADD CONSTRAINT `demande_piece_p004_s_demande_p004_id_foreign` FOREIGN KEY (`demande_p004_id`) REFERENCES `demande_p004_s` (`uuid`),
  ADD CONSTRAINT `demande_piece_p004_s_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_piece_p005_s`
--
ALTER TABLE `demande_piece_p005_s`
  ADD CONSTRAINT `demande_piece_p005_s_demande_p005_id_foreign` FOREIGN KEY (`demande_p005_id`) REFERENCES `demande_p005_s` (`uuid`),
  ADD CONSTRAINT `demande_piece_p005_s_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_piece_p006_s`
--
ALTER TABLE `demande_piece_p006_s`
  ADD CONSTRAINT `demande_piece_p006_s_demande_p006_id_foreign` FOREIGN KEY (`demande_p006_id`) REFERENCES `demande_p006_s` (`uuid`),
  ADD CONSTRAINT `demande_piece_p006_s_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_piece_p007_s`
--
ALTER TABLE `demande_piece_p007_s`
  ADD CONSTRAINT `demande_piece_p007_s_demande_p007_id_foreign` FOREIGN KEY (`demande_p007_id`) REFERENCES `demande_p007_s` (`uuid`),
  ADD CONSTRAINT `demande_piece_p007_s_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_piece_p008_s`
--
ALTER TABLE `demande_piece_p008_s`
  ADD CONSTRAINT `demande_piece_p008_s_demande_p008_id_foreign` FOREIGN KEY (`demande_p008_id`) REFERENCES `demande_p008_s` (`uuid`),
  ADD CONSTRAINT `demande_piece_p008_s_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_piece_p009_s`
--
ALTER TABLE `demande_piece_p009_s`
  ADD CONSTRAINT `demande_piece_p009_s_demande_p009_id_foreign` FOREIGN KEY (`demande_p009_id`) REFERENCES `demande_p009_s` (`uuid`),
  ADD CONSTRAINT `demande_piece_p009_s_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`);

--
-- Contraintes pour la table `demande_sous_domaine_p002_s`
--
ALTER TABLE `demande_sous_domaine_p002_s`
  ADD CONSTRAINT `demande_sous_domaine_p002_s_demande_categorie_p002_id_foreign` FOREIGN KEY (`demande_categorie_p002_id`) REFERENCES `demande_categorie_p002_s` (`uuid`),
  ADD CONSTRAINT `demande_sous_domaine_p002_s_demande_domaine_p002_id_foreign` FOREIGN KEY (`demande_domaine_p002_id`) REFERENCES `demande_domaine_p002_s` (`uuid`);

--
-- Contraintes pour la table `localites`
--
ALTER TABLE `localites`
  ADD CONSTRAINT `localites_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`);

--
-- Contraintes pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD CONSTRAINT `paiements_mode_paiement_id_foreign` FOREIGN KEY (`mode_paiement_id`) REFERENCES `mode_paiements` (`uuid`);

--
-- Contraintes pour la table `plaintes`
--
ALTER TABLE `plaintes`
  ADD CONSTRAINT `plaintes_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `plaintes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`uuid`);

--
-- Contraintes pour la table `procedures`
--
ALTER TABLE `procedures`
  ADD CONSTRAINT `procedures_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`uuid`);

--
-- Contraintes pour la table `procedure_base_juridiques`
--
ALTER TABLE `procedure_base_juridiques`
  ADD CONSTRAINT `procedure_base_juridiques_base_juridique_id_foreign` FOREIGN KEY (`base_juridique_id`) REFERENCES `base_juridiques` (`uuid`),
  ADD CONSTRAINT `procedure_base_juridiques_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`);

--
-- Contraintes pour la table `procedure_piece_jointes`
--
ALTER TABLE `procedure_piece_jointes`
  ADD CONSTRAINT `procedure_piece_jointes_piece_jointe_id_foreign` FOREIGN KEY (`piece_jointe_id`) REFERENCES `piece_jointes` (`uuid`),
  ADD CONSTRAINT `procedure_piece_jointes_procedure_id_foreign` FOREIGN KEY (`procedure_id`) REFERENCES `procedures` (`uuid`);

--
-- Contraintes pour la table `provinces`
--
ALTER TABLE `provinces`
  ADD CONSTRAINT `provinces_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`uuid`);

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_structure_id_foreign` FOREIGN KEY (`structure_id`) REFERENCES `structures` (`uuid`);

--
-- Contraintes pour la table `tarifs`
--
ALTER TABLE `tarifs`
  ADD CONSTRAINT `tarifs_demande_id_foreign` FOREIGN KEY (`demande_id`) REFERENCES `demandes` (`uuid`);

--
-- Contraintes pour la table `tarif_p001_s`
--
ALTER TABLE `tarif_p001_s`
  ADD CONSTRAINT `tarif_p001_s_demande_p001_id_foreign` FOREIGN KEY (`demande_p001_id`) REFERENCES `demande_p001_s` (`uuid`);

--
-- Contraintes pour la table `tarif_p0010_s`
--
ALTER TABLE `tarif_p0010_s`
  ADD CONSTRAINT `tarif_p0010_s_demande_p0010_id_foreign` FOREIGN KEY (`demande_p0010_id`) REFERENCES `demande_p0010_s` (`uuid`);

--
-- Contraintes pour la table `tarif_p0011_s`
--
ALTER TABLE `tarif_p0011_s`
  ADD CONSTRAINT `tarif_p0011_s_demande_p0011_id_foreign` FOREIGN KEY (`demande_p0011_id`) REFERENCES `demande_p0011_s` (`uuid`);

--
-- Contraintes pour la table `tarif_p002_s`
--
ALTER TABLE `tarif_p002_s`
  ADD CONSTRAINT `tarif_p002_s_demande_p002_id_foreign` FOREIGN KEY (`demande_p002_id`) REFERENCES `demande_p002_s` (`uuid`);

--
-- Contraintes pour la table `tarif_p003_s`
--
ALTER TABLE `tarif_p003_s`
  ADD CONSTRAINT `tarif_p003_s_demande_p003_id_foreign` FOREIGN KEY (`demande_p003_id`) REFERENCES `demande_p003_s` (`uuid`);

--
-- Contraintes pour la table `tarif_p004_s`
--
ALTER TABLE `tarif_p004_s`
  ADD CONSTRAINT `tarif_p004_s_demande_p004_id_foreign` FOREIGN KEY (`demande_p004_id`) REFERENCES `demande_p004_s` (`uuid`);

--
-- Contraintes pour la table `tarif_p005_s`
--
ALTER TABLE `tarif_p005_s`
  ADD CONSTRAINT `tarif_p005_s_demande_p005_id_foreign` FOREIGN KEY (`demande_p005_id`) REFERENCES `demande_p005_s` (`uuid`);

--
-- Contraintes pour la table `tarif_p006_s`
--
ALTER TABLE `tarif_p006_s`
  ADD CONSTRAINT `tarif_p006_s_demande_p006_id_foreign` FOREIGN KEY (`demande_p006_id`) REFERENCES `demande_p006_s` (`uuid`);

--
-- Contraintes pour la table `tarif_p007_s`
--
ALTER TABLE `tarif_p007_s`
  ADD CONSTRAINT `tarif_p007_s_demande_p007_id_foreign` FOREIGN KEY (`demande_p007_id`) REFERENCES `demande_p007_s` (`uuid`);

--
-- Contraintes pour la table `tarif_p008_s`
--
ALTER TABLE `tarif_p008_s`
  ADD CONSTRAINT `tarif_p008_s_demande_p008_id_foreign` FOREIGN KEY (`demande_p008_id`) REFERENCES `demande_p008_s` (`uuid`);

--
-- Contraintes pour la table `tarif_p009_s`
--
ALTER TABLE `tarif_p009_s`
  ADD CONSTRAINT `tarif_p009_s_demande_p009_id_foreign` FOREIGN KEY (`demande_p009_id`) REFERENCES `demande_p009_s` (`uuid`);

--
-- Contraintes pour la table `type_demandes`
--
ALTER TABLE `type_demandes`
  ADD CONSTRAINT `type_demandes_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`uuid`);

--
-- Contraintes pour la table `usagers`
--
ALTER TABLE `usagers`
  ADD CONSTRAINT `usagers_commune_origine_id_foreign` FOREIGN KEY (`commune_origine_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `usagers_commune_residence_id_foreign` FOREIGN KEY (`commune_residence_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `usagers_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`uuid`),
  ADD CONSTRAINT `usagers_type_identite_id_foreign` FOREIGN KEY (`type_identite_id`) REFERENCES `type_identites` (`uuid`),
  ADD CONSTRAINT `usagers_type_usager_id_foreign` FOREIGN KEY (`type_usager_id`) REFERENCES `type_usagers` (`uuid`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_agent_id_foreign` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`uuid`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_commune_origine_id_foreign` FOREIGN KEY (`commune_origine_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `users_commune_residence_id_foreign` FOREIGN KEY (`commune_residence_id`) REFERENCES `communes` (`uuid`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`uuid`),
  ADD CONSTRAINT `users_usager_id_foreign` FOREIGN KEY (`usager_id`) REFERENCES `usagers` (`uuid`) ON DELETE CASCADE;

--
-- Contraintes pour la table `villages`
--
ALTER TABLE `villages`
  ADD CONSTRAINT `villages_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`uuid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
