-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 30 juin 2024 à 17:55
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `carweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `origin` varchar(191) NOT NULL,
  `image_url` varchar(191) NOT NULL,
  `paragraph` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cars`
--

INSERT INTO `cars` (`id`, `name`, `origin`, `image_url`, `paragraph`, `created_at`, `updated_at`) VALUES
(12, 'Hyundai Ioniq 5 N', '01', 'images/elecar1.png', '\"“Right now, the Ioniq 5 N is an electric car that\'s as involving as a really good petrol car.              In some ways it does that by brazenly impersonating a petrol drivetrain.               The surprising thng is that\'s absolutely not just a gimmick.             “Then in corners it has some original tricks of its own.              It\'s not just fast, it\'s confident and playful so it\'s fun               even when it\'s not going fast. It\'s useful and versatile too.               “So it has many of the talents you expect from an electric car,              and many more that so far are unique in EVs. Which makes us call it a new and brilliant chapter.”\"', '2024-06-30 14:30:32', '2024-06-30 14:30:32'),
(13, 'Rolls-Royce Spectre', '02', 'images/elecar2.png', 'Electric has enriched the Rolls-Royce.              It’s still a galloping, ocean-going, 24-carat indulgence,               but with a tasteful specification it’s just about possible                to swerve absolute vulgarity.             “It’s rich in the decadence of the so-called glory days but              gratifyingly simple to operate for a product of 2023. While              other manufacturers wrestle with the conundrum of transposing              their family heirloom values into an electric future, the age              of electric propulsion will suit Rolls-Royce very well indeed.”\"', '2024-06-30 14:31:23', '2024-06-30 14:31:23'),
(14, 'Porsche Taycan', '03', 'images/elecar3.png', 'The Taycan can absolutely entertain on the right road and is a delight to cruise              in - a GT with the heart of a sports car. More importantly,               it’s a proper Porsche that just happens to run on electricity.”\"', '2024-06-30 14:32:18', '2024-06-30 14:32:18'),
(15, 'MG4', '04', 'images/elecar4.jpg', 'The Taycan can absolutely entertain on the right road and is a delight to cruise              in - a GT with the heart of a sports car. More importantly,               it’s a proper Porsche that just happens to run on electricity.”\"', '2024-06-30 14:32:47', '2024-06-30 14:32:47'),
(16, 'Tesla Model 3 / Tesla Model Y', '05', 'images/elecar5.png', 'This is the future we were promised – a car with sentience,              a sense of humour, and a fresh take on the old norms. After trying this,               your old repmobile will just feel a bit dull. The Model 3 has been in                production since mid-2017, but even heading into old age, nothing on                the market has yet managed to beat it on all fronts. While not without                flaws, it is quite simply one of the most interesting, compelling cars                 in the world right now. We might even look back on it as the car that                  changed the way we all drive.”\"', '2024-06-30 14:33:49', '2024-06-30 14:33:49'),
(17, 'BMW i5', '06', 'images/elecar6.png', '\"“The BMW i5 is an exceptional new car. We’ll have to wait to try the              combustion versions of the new 5 Series, but if BMW’s stated aim here               was to combine 3 Series dynamism with 7 Series luxury, it’s mission               accomplished: this is the best-handling car in its class and makes                a Model S feel like a shopping trolley. Especially the M60. Yes it’s                 expensive, but it feels every penny of the billion-pound investment                 it surely was for its maker.”\"', '2024-06-30 14:34:25', '2024-06-30 14:34:25'),
(18, 'Dacia Spring', '07', 'images/elecar7.png', '\"“The Spring’s appeal is that it’s everything that many electric cars aren’t:              it’s not over-wrought or heavy-handed, it’s honest and enjoyable               and manages to keep the dream of a low impact electric car alive                and proves to everyone else it is possible for a battery electric                vehicle to weigh largely the same as its petrol equivalent. Well done Dacia,                let’s hope that where you lead, others will follow.”\"', '2024-06-30 14:35:00', '2024-06-30 14:35:00'),
(19, 'BMW i7', '08', 'images/elecar8.png', '\"“BMWs have always relied on their mostly great engines              for the soul and sensation we all crave, as well as their dynamics, but the focus is shifting elsewhere              now. The new 7 Series has arguably the finest interior in the automotive world, beautifully executed,              well-made and imaginative. You can argue among yourselves about the exterior design, but inside is a               knock-out.             “It’s blissfully smooth, fast and easy to drive, and impressively efficient for such a large car.              A lot of clever, highly motivated people have dug very deep here and you can tell. The i7 is one hell of a car.”\"', '2024-06-30 14:35:47', '2024-06-30 14:35:47'),
(20, 'Polestar 2', '09', 'images/elecar9.png', '\"“We love the Polestar 2 because               it’s handsome, the build quality will give Audi drivers PTSD, and there’s a real sense of humility about the car. It’s been designed to work               seamlessly, not to wow you with gimmicks then wind you up further down the line. Single Motor iterations make it more accessible for most too.”\"', '2024-06-30 14:37:19', '2024-06-30 14:37:19');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_23_235010_create_cars_table', 1),
(6, '2024_06_29_215502_create_cars_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('maryam@gmail.com', '$2y$10$.kijt/fwvdrBv8D1GJ4bhOOvzJXuGs1LXgoq5DRADCZD4s4mZ9akq', '2024-05-18 10:33:38'),
('moaad@gmail.com', '$2y$10$LN1OoU1Hzwv4EAzjIQaev.F6FfbzGKZwSX8ka7q5EZFGgbqdGQX6C', '2024-06-05 08:21:30');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `utype` varchar(191) NOT NULL DEFAULT 'USR',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `utype`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abdelghafour', 'abdelghafour@gmail.com', NULL, '$2y$10$sy1yVnDwKj/2hmgiBdyKZO9fnfKamTG8px4m4UjA85E0LKp.ECuWS', 'USR', 'KN4Qgw8atNEmSzXNVXzvJnPjn85uY5njmVQwNLZrc0DGDlftjr83WEzaTtSH', '2024-05-17 09:18:54', '2024-05-17 09:22:16'),
(2, 'oussama', 'oussama1@gmail.com', NULL, '$2y$10$kpvxS9hcXF6u/SMPtvNZy.SCBt10/jnmvMxk7pwKYU/66yuzLNVn6', 'ADM', 'z0Y2cvDPwcOyYIBMtJv4ahJkTWWGJaedwStx7qZJMSrWs9YXNMRsQNEoGSuw', '2024-05-17 09:23:03', '2024-05-17 09:24:35'),
(4, 'driss', 'driss@gmail.com', NULL, '$2y$10$Di72UB8DYJDEuY1HT9d8Duls34N9KC/1WQ6wEpam3Eooe7iR.k3Ei', 'USR', NULL, '2024-05-20 15:28:26', '2024-05-20 15:28:26'),
(5, 'IMAD', 'imad@test.com', NULL, '$2y$10$g4S/Aa0ein8JnSj.OXjfO.V.dSudhgjg6WbWXaOOMYxvNFvVWsJWO', 'ADM', NULL, '2024-05-21 08:38:25', '2024-05-21 08:38:25'),
(6, 'IMAD', 'imad@gmail.com', NULL, '$2y$10$oagOZ0P9XTcyGH3Yn.SxmeC2d/FvSwlt7Fp.C5K/xcTG2whvKa/Ga', 'USR', '8k8Blb8o9wjsKZY5Tw8TN1Wn0RTbVVkCuhWoe1RVwhN6uUNMfQ40thJM405s', '2024-05-21 09:00:45', '2024-06-29 20:40:16'),
(7, 'shinobi', 'shinobi@gmail.com', NULL, '$2y$10$Tn17IymA3uiw.Q/mxUgYLuzLkZQxBGEGZF/VniAKbZKbdyJk0cC2y', 'ADM', NULL, '2024-05-28 20:08:54', '2024-05-28 20:08:54'),
(8, 'moaad', 'moaad@gmail.com', NULL, '$2y$10$o1DRa/FvaXVn2VEHnZK1SeGW1mHTCwZLveKVitmQuM.6N/sGQP9Im', 'USR', NULL, '2024-06-05 08:21:08', '2024-06-05 08:21:08'),
(10, 'mohamed', 'mohamedbensalih46@gmail.com', NULL, '$2y$10$lBtL8IUsGyOXPy7SCqPCwOJ2ETYzeE7SOaRy2htpbsF8I5tmtGvIO', 'ADM', NULL, '2024-06-30 14:47:16', '2024-06-30 14:47:16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
