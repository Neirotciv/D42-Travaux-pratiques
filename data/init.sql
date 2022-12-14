-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

USE `dfs`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `idUser` int DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idUser` (`idUser`),
  CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `courses` (`id`, `code`, `title`, `img`, `description`, `idUser`, `alt`) VALUES
(3,	'D41',	'Consolidation des compétences Réseau',	'network_logo.svg',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec ex lectus. Cras euismod laoreet leo ut dapibus. Morbi cursus augue eu mi feugiat vestibulum. In laoreet nunc sit amet elit volutpat, at facilisis arcu imperdiet. Sed gravida velit ut urna porta, in porttitor tellus ornare. Proin blandit sodales nisl, vitae lacinia ligula porttitor id. Nunc magna velit, ultrices sit amet nisi sit amet, ultrices malesuada justo. Pellentesque laoreet felis ex, ac tempus ipsum accumsan vel. Vestibulum hendrerit neque eu lorem semper vulputate.\r\n\r\nVivamus ullamcorper magna urna, eu rutrum ipsum consectetur in. Ut ligula sem, tincidunt et dolor in, accumsan suscipit ante. Integer erat lacus, mollis nec tincidunt vitae, semper at velit. Quisque scelerisque ipsum quis enim rutrum, eget aliquam justo semper. Morbi porta placerat mauris, ac ullamcorper libero tincidunt quis. Ut euismod vehicula metus, vitae dictum mauris luctus et. Praesent non scelerisque enim. Praesent ultricies nibh eu erat dictum elementum. Curabitur sagittis eros at nulla malesuada placerat. Donec at elementum sapien, id suscipit nisl.',	3,	'Logo représentant un réseau d\'ordinateurs'),
(4,	'D12',	'Consolidation des compétences en intégration web (HMTL / CSS / UX)',	'js_logo.svg',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec ex lectus. Cras euismod laoreet leo ut dapibus. Morbi cursus augue eu mi feugiat vestibulum. In laoreet nunc sit amet elit volutpat, at facilisis arcu imperdiet. Sed gravida velit ut urna porta, in porttitor tellus ornare. Proin blandit sodales nisl, vitae lacinia ligula porttitor id. Nunc magna velit, ultrices sit amet nisi sit amet, ultrices malesuada justo. Pellentesque laoreet felis ex, ac tempus ipsum accumsan vel. Vestibulum hendrerit neque eu lorem semper vulputate.\r\n\r\nVivamus ullamcorper magna urna, eu rutrum ipsum consectetur in. Ut ligula sem, tincidunt et dolor in, accumsan suscipit ante. Integer erat lacus, mollis nec tincidunt vitae, semper at velit. Quisque scelerisque ipsum quis enim rutrum, eget aliquam justo semper. Morbi porta placerat mauris, ac ullamcorper libero tincidunt quis. Ut euismod vehicula metus, vitae dictum mauris luctus et. Praesent non scelerisque enim. Praesent ultricies nibh eu erat dictum elementum. Curabitur sagittis eros at nulla malesuada placerat. Donec at elementum sapien, id suscipit nisl.',	2,	'Logo du langage JavaScript'),
(5,	'AD9',	'Consolidation des compétences système',	'linux_logo.svg',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec ex lectus. Cras euismod laoreet leo ut dapibus. Morbi cursus augue eu mi feugiat vestibulum. In laoreet nunc sit amet elit volutpat, at facilisis arcu imperdiet. Sed gravida velit ut urna porta, in porttitor tellus ornare. Proin blandit sodales nisl, vitae lacinia ligula porttitor id. Nunc magna velit, ultrices sit amet nisi sit amet, ultrices malesuada justo. Pellentesque laoreet felis ex, ac tempus ipsum accumsan vel. Vestibulum hendrerit neque eu lorem semper vulputate.\r\n\r\nVivamus ullamcorper magna urna, eu rutrum ipsum consectetur in. Ut ligula sem, tincidunt et dolor in, accumsan suscipit ante. Integer erat lacus, mollis nec tincidunt vitae, semper at velit. Quisque scelerisque ipsum quis enim rutrum, eget aliquam justo semper. Morbi porta placerat mauris, ac ullamcorper libero tincidunt quis. Ut euismod vehicula metus, vitae dictum mauris luctus et. Praesent non scelerisque enim. Praesent ultricies nibh eu erat dictum elementum. Curabitur sagittis eros at nulla malesuada placerat. Donec at elementum sapien, id suscipit nisl.',	1,	'Logo du manchot Tux, mascotte des systèmes Linux'),
(6,	'D42',	'Consolidation des compétences en programmation',	'php_logo.svg',	'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec ex lectus. Cras euismod laoreet leo ut dapibus. Morbi cursus augue eu mi feugiat vestibulum. In laoreet nunc sit amet elit volutpat, at facilisis arcu imperdiet. Sed gravida velit ut urna porta, in porttitor tellus ornare. Proin blandit sodales nisl, vitae lacinia ligula porttitor id. Nunc magna velit, ultrices sit amet nisi sit amet, ultrices malesuada justo. Pellentesque laoreet felis ex, ac tempus ipsum accumsan vel. Vestibulum hendrerit neque eu lorem semper vulputate.\r\n\r\nVivamus ullamcorper magna urna, eu rutrum ipsum consectetur in. Ut ligula sem, tincidunt et dolor in, accumsan suscipit ante. Integer erat lacus, mollis nec tincidunt vitae, semper at velit. Quisque scelerisque ipsum quis enim rutrum, eget aliquam justo semper. Morbi porta placerat mauris, ac ullamcorper libero tincidunt quis. Ut euismod vehicula metus, vitae dictum mauris luctus et. Praesent non scelerisque enim. Praesent ultricies nibh eu erat dictum elementum. Curabitur sagittis eros at nulla malesuada placerat. Donec at elementum sapien, id suscipit nisl.',	4,	'Logo du langage PHP');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `avatar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `trigram` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alt` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `firstname`, `lastname`, `avatar`, `address`, `phone`, `trigram`, `role`, `alt`) VALUES
(1,	'Fabien',	'Simon',	'avatar_2.svg',	'861-2631 Tempor Road\r\n53886 Reims',	'01 65 22 48 37',	'FSI',	'Professeur',	'Avatar d\'un d\'homme'),
(2,	'Jihane',	'Haddad',	'avatar_1.svg',	'861-2631 Tempor Road\r\n53886 Reims',	'01 65 22 48 37',	'JHA',	'Professeur',	'Avatar d\'une femme'),
(3,	'Martial',	'Berger',	'avatar_3.svg',	'861-2631 Tempor Road\r\n53886 Reims',	'01 65 22 48 37',	'MBE',	'Professeur',	'Avatar d\'un d\'homme'),
(4,	'Julio',	'Ribeiro',	'avatar_4.svg',	'861-2631 Tempor Road\r\n53886 Reims',	'01 65 22 48 37',	'JRI',	'Professeur',	'Avatar d\'un d\'homme');

-- 2022-11-23 22:23:45