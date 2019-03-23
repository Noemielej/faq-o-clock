-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 31 Juillet 2018 à 22:30
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `FAQ-O-Clock`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `answer`
--

INSERT INTO `answer` (`id`, `user_id`, `question_id`, `author`, `title`, `body`, `created_at`) VALUES
(1, NULL, 9, 'Louis Roussel', 'Velit ut deserunt voluptatum sit consequatur minus consequatur.', 'Qui voluptatem accusantium voluptatum animi saepe laborum a molestiae. Et et incidunt totam. Placeat incidunt aperiam nemo repellat.', '1999-01-13 14:36:00'),
(2, NULL, 5, 'Gérard Tanguy', 'Qui autem perspiciatis veritatis aut.', 'Aut cum repellendus vel consequatur molestiae eveniet aut. Eos dolores nesciunt in et.', '1991-07-24 20:35:55'),
(3, NULL, 9, 'Margot Lombard', 'Dolore odio ut et quas perspiciatis.', 'Laborum quia suscipit unde in architecto dolorem quo perspiciatis. Suscipit voluptatem et qui amet aut. Dicta voluptatem et doloribus neque eveniet distinctio quae.', '1983-02-12 00:44:57'),
(4, NULL, 10, 'Marguerite Letellier', 'Dolor alias qui eos sed doloribus nisi.', 'Saepe hic vel quidem dolorum quia veritatis qui. Enim error quis dolor recusandae consequatur qui. Reiciendis ut provident cupiditate dolores suscipit. Id omnis vero voluptatum.', '1998-09-24 01:37:33'),
(5, NULL, 8, 'Paulette-Virginie Carpentier', 'Illum sit tempore dicta.', 'Non voluptatem nihil repudiandae rerum enim culpa. Mollitia nemo atque rerum consequatur consequuntur sed laboriosam. Et est pariatur officiis vel. Iusto facilis aliquam perspiciatis et.', '1987-01-20 04:36:43'),
(6, NULL, 4, 'Julie Jacob', 'Accusamus cupiditate nisi soluta explicabo minus.', 'Optio nemo ab magni in dolor omnis omnis. Nam laudantium fugit temporibus omnis. Cupiditate soluta odit numquam sint unde. Quo voluptas explicabo itaque cupiditate.', '2018-06-09 13:53:04'),
(7, NULL, 6, 'Julie-Margot Maurice', 'Officiis quae incidunt quibusdam vitae.', 'Omnis laborum enim quaerat. Vero natus ratione ullam debitis. Vel quam sunt harum itaque fugit expedita quia. Illum aut dolorem ab cum ratione magni. Commodi ut laborum aliquid.', '2010-04-14 02:59:07'),
(8, NULL, 1, 'Antoinette Gomes', 'Explicabo similique et eos.', 'Deleniti numquam rerum modi. Vel adipisci porro quae. Repellat eius voluptate magnam omnis culpa quia hic. Id eos id consectetur excepturi consequatur molestias.', '1975-09-30 21:36:41'),
(9, NULL, 2, 'Anne de la Giraud', 'Repellendus qui non esse commodi adipisci harum quod et.', 'Ratione nesciunt repellat consequatur iusto culpa. Voluptas cumque explicabo iure expedita nisi dolores. Sit natus ut quis sed tempora. Sint consectetur amet ut quae aut error porro.', '1983-12-22 10:39:33'),
(10, NULL, 4, 'René Rousset', 'Amet inventore consequatur optio.', 'Blanditiis dolor laudantium sit qui porro et. Nihil deserunt aliquam ab nam sint. Consequuntur sunt quae recusandae ipsum et. Culpa dolores voluptates id ea cum dolores.', '1976-03-01 04:50:50'),
(11, NULL, 9, 'Yves Robert', 'Enim est necessitatibus quae consequuntur amet aut eligendi.', 'Et nostrum debitis iusto inventore explicabo sint quam delectus. Nihil eum ad suscipit nemo pariatur. Quia eveniet voluptatem iure nulla qui ratione dolore.', '1985-10-29 14:28:32'),
(12, NULL, 4, 'Alix Le Goff', 'Rerum et cumque exercitationem ut velit commodi.', 'Atque et id necessitatibus quas. Beatae ratione temporibus magni maxime doloribus non et. Qui sint qui necessitatibus dolor aut. Non cumque reiciendis quae et quo totam.', '1999-01-18 18:14:45'),
(13, NULL, 4, 'Thomas-Gilbert Pages', 'Voluptatibus molestias sunt eos veritatis aut possimus.', 'Quibusdam non voluptatibus eum cupiditate nobis hic et suscipit. Ea nemo qui voluptatem tenetur ut nobis. Cupiditate autem explicabo ea.', '2006-11-12 17:25:25'),
(14, NULL, 4, 'Anouk Da Costa-Langlois', 'Dicta rem et neque aut nihil dolorum.', 'Velit qui reiciendis amet quos incidunt repellendus. Expedita sunt recusandae sapiente dolore numquam nihil veritatis est. Ad modi natus aut ut modi corrupti.', '1977-11-01 15:44:44'),
(15, NULL, 2, 'Adrien de Olivier', 'Inventore ut voluptatem et facere quis voluptates.', 'Rerum at voluptatem dolorem cumque sunt sed. Necessitatibus eum delectus aperiam excepturi voluptatem aut nihil tenetur. Sapiente sapiente consectetur enim recusandae sit. Ut sed aspernatur cumque.', '1977-09-01 01:34:00'),
(16, NULL, 4, 'Aurélie Rossi', 'Aut et eum non perspiciatis eius et.', 'Aut corrupti consequatur odio aut. Quam facere et unde asperiores id ad. Pariatur est aut non fugiat velit et. Est aut ullam quibusdam aut ut.', '1986-07-11 18:47:45'),
(17, NULL, 2, 'Xavier Loiseau', 'Eaque non consequatur dolores eos.', 'Sunt iure qui non recusandae velit. Consequatur voluptates quae quos. Eligendi dolores voluptas iste suscipit quod.', '1991-07-14 04:23:21'),
(18, NULL, 8, 'Caroline Bertin', 'Cupiditate ab eos voluptas ducimus magnam.', 'Alias dolor qui sed tenetur consequatur numquam totam veritatis. Sint qui sunt cupiditate qui dolor optio. Id nulla et tempora. Praesentium eligendi omnis quo impedit beatae vero.', '1999-06-03 14:10:41'),
(19, NULL, 8, 'François Leveque', 'Quo possimus necessitatibus eveniet rerum mollitia et sint.', 'Quasi ut nostrum earum ipsum totam eius. Eum natus quo culpa facilis. Quae tempora blanditiis vel sint.', '1978-04-06 22:03:25'),
(20, NULL, 1, 'Margot Le Meyer', 'Accusantium ab cum quo a est.', 'Error et fuga deleniti quia vitae nemo fugit. Qui magni asperiores fugiat quas quis aut. Optio accusantium nihil occaecati aut. Consequuntur placeat illum minima consequatur modi sed.', '1974-01-06 16:19:15');

-- --------------------------------------------------------

--
-- Structure de la table `app_user`
--

CREATE TABLE `app_user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `app_user`
--

INSERT INTO `app_user` (`id`, `role_id`, `username`, `email`, `password`, `is_active`) VALUES
(1, 1, 'admin', 'admin@admin.fr', '$2y$13$xouRcDQKcLFE.pfdHj4HxORWK.RoizZhzEfNE/ySOmcBo8td0mVE6', 1),
(2, 2, 'user', 'user@user.fr', '$2y$13$QD3vo.vhCvF8N4XO78i1YOOsX0NoGID5TAERfANYkrENQR2uNsbZe', 1),
(3, 3, 'momo', 'momo@momo.fr', '$2y$13$wRk27fK8u.oIduaYJerXfe72Hg4ioDPOeiSdIblFfWshQB0JJEl2a', 1);

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20180731202815');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`id`, `user_id`, `author`, `title`, `body`, `created_at`) VALUES
(1, NULL, 'David Gauthier', 'Voluptatum eius soluta ipsum qui.', 'Ea reiciendis dicta ad commodi dolor ea corporis. Saepe necessitatibus sit dolor numquam corrupti eum. Dolores sequi eveniet nihil quia voluptate id.', '1976-11-05 22:22:21'),
(2, NULL, 'Noël Joseph', 'Maxime earum deleniti rerum.', 'Culpa esse at et dolorum officia. Iusto iusto ullam optio odio voluptatem corporis. Vitae eos est reiciendis cupiditate modi. Sequi et expedita excepturi architecto.', '1983-08-04 19:19:27'),
(3, NULL, 'Pierre Garnier', 'Iste aut recusandae eos.', 'Sit aut laudantium eius nam. Voluptatem voluptas ut et at tenetur rerum suscipit. Totam nihil quia expedita autem nemo commodi soluta.', '2017-01-26 22:29:59'),
(4, NULL, 'Emmanuel Caron-Hernandez', 'Totam nostrum fugiat quia et dolorum quam.', 'Totam qui qui delectus consequatur. Quia sapiente voluptatem consequuntur velit nisi dolorum eos. Nam repellendus eos et rerum veritatis et placeat.', '1984-05-21 22:43:39'),
(5, NULL, 'Claire Gauthier', 'Deleniti non et voluptatem et vitae rerum consectetur at.', 'Velit omnis corrupti occaecati iure dolores voluptates. Excepturi rerum autem rerum enim quibusdam. Molestias aliquid vitae saepe.', '1999-06-04 06:58:13'),
(6, NULL, 'Thérèse Guilbert-Renaud', 'Praesentium magni et non nam quia ratione.', 'Ipsam qui reiciendis soluta voluptatem nobis asperiores numquam. Qui quaerat veniam inventore deleniti beatae.', '2003-05-06 07:16:03'),
(7, NULL, 'Manon Boyer', 'Quae rerum quia qui ratione ex dolor quis.', 'Ipsam nihil quo suscipit eos architecto rerum est. Ipsa saepe laudantium omnis cum expedita cupiditate. Dolor corrupti aut et amet tempore ab aperiam. Odio voluptatibus consequatur soluta.', '2001-07-22 01:21:47'),
(8, NULL, 'Guy Renaud', 'Autem non quibusdam molestiae fugiat qui.', 'Vitae cupiditate dolorum autem accusantium ut ipsam amet. Repellendus minus qui modi ut vitae. Aut officiis quaerat aliquid. Nobis provident tenetur molestias doloribus. Sed modi officiis ex.', '2010-08-30 18:29:10'),
(9, NULL, 'Matthieu David', 'Consequatur voluptatem quod nulla saepe non numquam.', 'Tenetur cum distinctio quasi velit ad harum quo. Nihil omnis porro odio earum eaque. Quia alias sit velit velit.', '2002-03-13 06:44:45'),
(10, NULL, 'Anaïs Fernandez', 'Rem ullam est voluptatem.', 'Omnis earum quia quia illum iste quibusdam. Dolores corporis nesciunt totam non consequatur omnis. Et repellendus non qui at sequi est similique.', '1998-02-17 07:46:14');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id`, `code`, `name`) VALUES
(1, 'ROLE_ADMINISTRATOR', 'Administrateur'),
(2, 'ROLE_USER', 'Utilisateur'),
(3, 'ROLE_MODERATOR', 'Modérateur');

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `tag`
--

INSERT INTO `tag` (`id`, `name`) VALUES
(1, 'Laravel'),
(2, 'Intégration'),
(3, 'Wordpress'),
(4, 'Php'),
(5, 'Boostrap'),
(6, 'HTML'),
(7, 'Node JS'),
(8, 'React'),
(9, 'Symfony'),
(10, 'CSS');

-- --------------------------------------------------------

--
-- Structure de la table `tag_question`
--

CREATE TABLE `tag_question` (
  `tag_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DADD4A25A76ED395` (`user_id`),
  ADD KEY `IDX_DADD4A251E27F6BF` (`question_id`);

--
-- Index pour la table `app_user`
--
ALTER TABLE `app_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_88BDF3E9D60322AC` (`role_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B6F7494EA76ED395` (`user_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag_question`
--
ALTER TABLE `tag_question`
  ADD PRIMARY KEY (`tag_id`,`question_id`),
  ADD KEY `IDX_80C63295BAD26311` (`tag_id`),
  ADD KEY `IDX_80C632951E27F6BF` (`question_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `app_user`
--
ALTER TABLE `app_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `FK_DADD4A251E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`),
  ADD CONSTRAINT `FK_DADD4A25A76ED395` FOREIGN KEY (`user_id`) REFERENCES `app_user` (`id`);

--
-- Contraintes pour la table `app_user`
--
ALTER TABLE `app_user`
  ADD CONSTRAINT `FK_88BDF3E9D60322AC` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `FK_B6F7494EA76ED395` FOREIGN KEY (`user_id`) REFERENCES `app_user` (`id`);

--
-- Contraintes pour la table `tag_question`
--
ALTER TABLE `tag_question`
  ADD CONSTRAINT `FK_80C632951E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `question` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_80C63295BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
