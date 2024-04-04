-- Création de la BDD
CREATE DATABASE IF NOT EXISTS `05042024`;
USE `05042024`;

-- Création de la table recipes
CREATE TABLE IF NOT EXISTS `recipes` (
    `recipe_id` int(11) NOT NULL AUTO_INCREMENT,
    `title` varchar(128) NOT NULL,
    `recipe` TEXT NOT NULL,
    `author` varchar(255) NOT NULL,
    `is_enabled` BOOLEAN NOT NULL,
    PRIMARY KEY (`recipe_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Création de la table users
CREATE TABLE IF NOT EXISTS `users` (
    `user_id` int(11) NOT NULL AUTO_INCREMENT,
    `full_name` varchar(64) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `age` INT NOT NULL,
    PRIMARY KEY (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Suppression des données existantes dans la table `users`
DELETE FROM `users`;

-- Insertion des nouvelles données dans la table `users`
INSERT INTO `users` (`full_name`, `email`, `age`, `password`) VALUES 
('Lucas Dupont', 'lucas.dupont@exemple.com', 34, 'test'),
('Sophie Lefevre', 'sophie.lefevre@exemple.com', 34, 'test'),
('Maxime Bernard', 'maxime.bernard@exemple.com', 28, 'test');

-- Suppression des données existantes dans la table `recipes`
DELETE FROM `recipes`;

-- Insertion des nouvelles données dans la table `recipes`
INSERT INTO `recipes` (`author`, `is_enabled`, `recipe`, `title`) VALUES 
('mickael.andrieu@exemple.com', 1, "Le cassoulet est une spécialité régionale du Languedoc, à base de haricots secs, généralement blancs, et de viande. À son origine, il était à base de fèves. Le cassoulet tient son nom de la cassole en terre cuite émaillée dite caçòla1 en occitan et fabriquée à Issel.\n", 'Cassoulet'),
('mickael.andrieu@exemple.com', 0, "Le couscous est d'une part une semoule de blé dur préparée à l'huile d'olive (un des aliments de base traditionnel de la cuisine des pays du Maghreb) et d'autre part, une spécialité culinaire issue de la cuisine berbère, à base de couscous, de légumes, d'épices, d'huile d'olive et de viande (rouge ou de volaille) ou de poisson.", 'Couscous'),
('laurene.castor@exemple.com', 0, "La salade César est une recette de cuisine de salade composée de la cuisine américaine, traditionnellement préparée en salle à côté de la table, à base de laitue romaine, œuf dur, croûtons, parmesan et de « sauce César » à base de parmesan râpé, huile d'olive, pâte d'anchois, ail, vinaigre de vin, moutarde, jaune d'œuf et sauce Worcestershire.", 'Salade Romaine'),
('mathieu.nebra@exemple.com', 1, "L'escalope à la milanaise, ou escalope milanaise est une escalope panée, de viande de veau, traditionnellement prise dans le faux-filet. Historiquement, on la cuit avec du beurre. Elle est généralement servie avec salade ou frites, accompagnée de sauce mayonnaise. On peut y ajouter un filet de jus de citron.\n\nEn Italie, ce mets ne se sert pas avec des pâtes.", 'Escalope milanaise');
