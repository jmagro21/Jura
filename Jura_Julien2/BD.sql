CREATE TABLE `jeu`.`utilisateur` (
    `id` INT(11) NOT NULL AUTO_INCREMENT , 
    `pseudo` TEXT NOT NULL ,
    `mdp` TEXT NOT NULL ,
    PRIMARY KEY (`id`)) 
    ENGINE = InnoDB;

CREATE TABLE `chambre` (
  `id` int(11) NOT NULL AUTO_INCREMENT , 
  `nom` text NOT NULL,
  `lit` int(3) NOT NULL,
  `descript` longtext NOT NULL,
  `special` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT , 
  `id_utilisateur` int(11) NOT NULL,
  `id_chambre` int(11) NOT NULL,
  `dated` date NOT NULL,
  `datef` date NOT NULL,
  `paye` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
