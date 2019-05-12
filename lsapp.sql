-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 01:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `chambres`
--

CREATE TABLE `chambres` (
  `id_chambre` bigint(20) UNSIGNED NOT NULL,
  `NumChambre` mediumint(9) NOT NULL,
  `Etage` smallint(6) NOT NULL,
  `Nblit` smallint(6) NOT NULL,
  `EtatOccup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demande_conseils`
--

CREATE TABLE `demande_conseils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FullName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telephone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `demande_conseils`
--

INSERT INTO `demande_conseils` (`id`, `FullName`, `email`, `Telephone`, `Message`, `created_at`, `updated_at`) VALUES
(6, 'ELHAYOUNI NAJIA', 'fatiha.elhayouni@gmail.com', '06565545674', 'test redirection', '2019-05-12 21:11:56', '2019-05-12 21:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `demande_r_d_v_s`
--

CREATE TABLE `demande_r_d_v_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NomPatient` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrenomPatient` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdrsPatient` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelPatient` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sexe` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateNaissance` date NOT NULL,
  `Profession` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EtatCivil` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Assurance` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Motif` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_patient` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `factures`
--

CREATE TABLE `factures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Modepayement` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pharmacie` double(10,2) NOT NULL,
  `Hospitalisation` double(10,2) NOT NULL,
  `Consultation` double(10,2) NOT NULL,
  `Montant` double(10,2) NOT NULL,
  `id_patient` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `NumFacture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medecins`
--

CREATE TABLE `medecins` (
  `id_medecin` bigint(20) UNSIGNED NOT NULL,
  `NomMedecin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrenomMedecin` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdrsMedecin` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelMedecin` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sexe` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateNaissance` date NOT NULL,
  `Prestation` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EtatCivil` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_10_221927_create_posts_table', 2),
(4, '2019_04_13_161457_create_chambres_table', 3),
(5, '2019_04_13_162754_create_demande_r_d_v_s_table', 4),
(6, '2019_04_13_165607_create_demande_conseils_table', 5),
(7, '2019_04_13_170136_create_patients_table', 6),
(8, '2019_04_13_171039_create_medecins_table', 7),
(9, '2019_04_13_172134_dropingstuff', 8),
(10, '2019_04_13_172720_create_patients_table', 9),
(11, '2019_04_13_172741_create_demande_r_d_v_s_table', 9),
(13, '2019_04_13_173054_create_r_d_v_s_table', 10),
(14, '2019_04_13_175926_create_factures_table', 11),
(15, '2019_04_13_180918_create_ordonances_table', 12),
(16, '2019_04_13_181303_create_occupe_chambres_table', 13),
(17, '2019_04_13_182922_create_pris_en_charges_table', 14),
(18, '2019_04_19_103655_addingconstraint', 15),
(19, '2019_04_23_103221_addingnumerofacturecolumn', 16),
(20, '2019_04_25_091355_adding_cover_images_to_posts', 17),
(21, '2019_05_02_110125_adding__patient_id_patient_to_demande_r_d_v_s', 18),
(22, '2019_05_05_142442_adding_foreignkey_constraint_to_demande_r_d_v_s', 19),
(23, '2019_05_05_223025_adding_date_to_factures', 20),
(24, '2019_05_07_095545_adding_date_numero_to_ordonanaces', 21);

-- --------------------------------------------------------

--
-- Table structure for table `occupe_chambres`
--

CREATE TABLE `occupe_chambres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `DateDebutOccup` date NOT NULL,
  `DateFinOccup` date NOT NULL,
  `id_chambre` bigint(20) UNSIGNED NOT NULL,
  `id_patient` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ordonances`
--

CREATE TABLE `ordonances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Titre` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Observation` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Traintement` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_patient` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Date` date NOT NULL,
  `NumOrdo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id_patient` bigint(20) UNSIGNED NOT NULL,
  `NomPatient` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrenomPatient` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AdrsPatient` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TelPatient` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sexe` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateNaissance` date NOT NULL,
  `Profession` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `EtatCivil` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Assurance` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id_patient`, `NomPatient`, `PrenomPatient`, `AdrsPatient`, `email`, `TelPatient`, `Sexe`, `DateNaissance`, `Profession`, `EtatCivil`, `Assurance`, `created_at`, `updated_at`) VALUES
(72, 'NAJIA', 'ELHAYOUNI', '706 LOT CHARAF MARRAKECH', 'fatiha.elhayouni@gmail.com', '06565545675', 'Masculin', '2019-05-12', 'Technicien', 'Celibataire', 'CNSS', '2019-05-12 20:05:37', '2019-05-12 20:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fbody` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mbody` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pris_en_charges`
--

CREATE TABLE `pris_en_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Type` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `id_medecin` bigint(20) UNSIGNED NOT NULL,
  `id_patient` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `r_d_v_s`
--

CREATE TABLE `r_d_v_s` (
  `id_rdv` bigint(20) UNSIGNED NOT NULL,
  `Date_RDV` datetime NOT NULL,
  `Motif` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_patient` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_medecin` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mouad', 'mouadnassif95@gmail.com', NULL, '$2y$10$eBBUMKrLJunjEsWf4m4EWuI6XxUl2oLtztcs/FN6IYb13/2LSGK0O', NULL, '2019-04-29 22:35:51', '2019-04-29 22:35:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`id_chambre`);

--
-- Indexes for table `demande_conseils`
--
ALTER TABLE `demande_conseils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demande_r_d_v_s`
--
ALTER TABLE `demande_r_d_v_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demande_r_d_v_s_id_patient_foreign` (`id_patient`);

--
-- Indexes for table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factures_id_patient_foreign` (`id_patient`);

--
-- Indexes for table `medecins`
--
ALTER TABLE `medecins`
  ADD PRIMARY KEY (`id_medecin`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupe_chambres`
--
ALTER TABLE `occupe_chambres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `occupe_chambres_id_patient_foreign` (`id_patient`),
  ADD KEY `occupe_chambres_id_chambre_foreign` (`id_chambre`);

--
-- Indexes for table `ordonances`
--
ALTER TABLE `ordonances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordonances_id_patient_foreign` (`id_patient`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id_patient`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pris_en_charges`
--
ALTER TABLE `pris_en_charges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pris_en_charges_id_patient_foreign` (`id_patient`),
  ADD KEY `pris_en_charges_id_medecin_foreign` (`id_medecin`);

--
-- Indexes for table `r_d_v_s`
--
ALTER TABLE `r_d_v_s`
  ADD PRIMARY KEY (`id_rdv`),
  ADD KEY `r_d_v_s_id_patient_foreign` (`id_patient`),
  ADD KEY `r_d_v_s_id_medecin_foreign` (`id_medecin`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chambres`
--
ALTER TABLE `chambres`
  MODIFY `id_chambre` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `demande_conseils`
--
ALTER TABLE `demande_conseils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `demande_r_d_v_s`
--
ALTER TABLE `demande_r_d_v_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `factures`
--
ALTER TABLE `factures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `medecins`
--
ALTER TABLE `medecins`
  MODIFY `id_medecin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `occupe_chambres`
--
ALTER TABLE `occupe_chambres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ordonances`
--
ALTER TABLE `ordonances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id_patient` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pris_en_charges`
--
ALTER TABLE `pris_en_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `r_d_v_s`
--
ALTER TABLE `r_d_v_s`
  MODIFY `id_rdv` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `demande_r_d_v_s`
--
ALTER TABLE `demande_r_d_v_s`
  ADD CONSTRAINT `demande_r_d_v_s_id_patient_foreign` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `factures_id_patient_foreign` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `occupe_chambres`
--
ALTER TABLE `occupe_chambres`
  ADD CONSTRAINT `occupe_chambres_id_chambre_foreign` FOREIGN KEY (`id_chambre`) REFERENCES `chambres` (`id_chambre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `occupe_chambres_id_patient_foreign` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ordonances`
--
ALTER TABLE `ordonances`
  ADD CONSTRAINT `ordonances_id_patient_foreign` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pris_en_charges`
--
ALTER TABLE `pris_en_charges`
  ADD CONSTRAINT `pris_en_charges_id_medecin_foreign` FOREIGN KEY (`id_medecin`) REFERENCES `medecins` (`id_medecin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pris_en_charges_id_patient_foreign` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `r_d_v_s`
--
ALTER TABLE `r_d_v_s`
  ADD CONSTRAINT `r_d_v_s_id_medecin_foreign` FOREIGN KEY (`id_medecin`) REFERENCES `medecins` (`id_medecin`),
  ADD CONSTRAINT `r_d_v_s_id_patient_foreign` FOREIGN KEY (`id_patient`) REFERENCES `patients` (`id_patient`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
