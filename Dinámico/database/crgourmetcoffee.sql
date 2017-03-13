DROP TABLE `Home_T`;
DROP TABLE `Farm_T`;
DROP TABLE `Farm_Certification`;
DROP TABLE `Farm_Cultivar`;
DROP TABLE `Farm_Species`;
DROP TABLE `Farm_Award`;
DROP TABLE `Product_Presentation`;
DROP TABLE `Product_I`;
DROP TABLE `Roast`;
DROP TABLE `Grind`;
DROP TABLE `Farm_I`;
DROP TABLE `Certification`;
DROP TABLE `Cultivar`;
DROP TABLE `Species`;
DROP TABLE `Award`;
  
CREATE TABLE IF NOT EXISTS `Award` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL UNIQUE,
	PRIMARY KEY `PK_Award` (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;
  
  
CREATE TABLE IF NOT EXISTS `Species` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL UNIQUE,
	PRIMARY KEY `PK_Species` (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `Cultivar` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL UNIQUE,
	PRIMARY KEY `PK_Cultivar` (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `Certification` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL UNIQUE,
	PRIMARY KEY `PK_Certification` (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `Farm_I` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`elevation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`harvest` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`latitude` float(20) NOT NULL,
	`longitude` float(20) NOT NULL,
	PRIMARY KEY `PK_Farm_I` (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Roast` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL UNIQUE,
	PRIMARY KEY `PK_Roast` (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Grind` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL UNIQUE,
	PRIMARY KEY `PK_Grind` (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;

  
CREATE TABLE IF NOT EXISTS `Product_I` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`farm_id` int(11) NOT NULL,
	`name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
	`image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`rank` int(1) NOT NULL,
	`reviews` int(6) NOT NULL,
	`description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY `PK_Product_I` (`id`),
	FOREIGN KEY `FK_Product_Farm` (`farm_id`) REFERENCES `Farm_I` (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Product_Presentation`(
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`product_id` int(11) NOT NULL,
	`roast_id` int(11) NOT NULL,
	`grind_id` int(11) NOT NULL,
	`price` int(11) NOT NULL,
	`weight` int(11) NOT NULL,
	PRIMARY KEY `PK_Product_Presentation` (`id`),
	FOREIGN KEY `FK_Product_Presentation_Product_I` (`product_id`) REFERENCES `Product_I` (`id`),
	FOREIGN KEY `FK_Product_Presentation_Roast` (`roast_id`) REFERENCES `Roast` (`id`),
	FOREIGN KEY `FK_Product_Presentation_Grind` (`grind_id`) REFERENCES `Grind` (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Farm_Award` (
	`farm_id` int(11) NOT NULL,
	`award_id` int(11) NOT NULL,
	`place` varchar(4) COLLATE utf8mb4_spanish_ci NOT NULL,
	`year` int(4) NOT NULL,
	PRIMARY KEY `FK_Farm_Award`  (`award_id`,`place`,`year`),
	FOREIGN KEY `FK_Farm_Award_Farm`  (`farm_id`) REFERENCES `Farm_I` (`id`),
	FOREIGN KEY `FK_Farm_Award_Award` (`award_id`) REFERENCES `Award` (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;



CREATE TABLE IF NOT EXISTS `Farm_Species` (
	`farm_id` int(11) NOT NULL,
	`species_id` int(11) NOT NULL,
	PRIMARY KEY `FK_Farm_Species`  (`farm_id`,`species_id`),
	FOREIGN KEY `FK_Farm_Species_Farm`  (`farm_id`) REFERENCES `Farm_I` (`id`),
	FOREIGN KEY `FK_Farm_Species_Species` (`species_id`) REFERENCES `Species` (`id`)
)	ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


CREATE TABLE IF NOT EXISTS `Farm_Cultivar` (
	`farm_id` int(11) NOT NULL,
	`cultivar_id` int(11) NOT NULL,
	PRIMARY KEY `FK_Farm_Cultivar`  (`farm_id`,`cultivar_id`),
	FOREIGN KEY `FK_Farm_Cultivar_Farm`  (`farm_id`) REFERENCES `Farm_I` (`id`),
	FOREIGN KEY `FK_Farm_Cultivar_Cultivar` (`cultivar_id`) REFERENCES `Cultivar` (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


CREATE TABLE IF NOT EXISTS `Farm_Certification` (
	`farm_id` int(11) NOT NULL,
	`certification_id` int(11) NOT NULL,
	PRIMARY KEY `FK_Farm_Certification`  (`farm_id`,`certification_id`),
	FOREIGN KEY `FK_Farm_Certification_Farm`  (`farm_id`) REFERENCES `Farm_I` (`id`),
	FOREIGN KEY `FK_Farm_Certification_Certification` (`certification_id`) REFERENCES `Certification` (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;


CREATE TABLE IF NOT EXISTS `Farm_T` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`information_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`awards_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`location_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`products_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`elevation_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`harvest_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`species_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`cultivar_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`certifications_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY `PK_Farm_T` (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
  
  
CREATE TABLE IF NOT EXISTS `Home_T` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description_info` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	`banner_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`farm_id` int(11) NOT NULL,
	`product_1` int(11) NOT NULL,
	`product_2` int(11) NOT NULL,
	`product_3` int(11) NOT NULL,
	`product_4` int(11) DEFAULT NULL,
	`product_5` int(11) DEFAULT NULL,
	`product_6` int(11) DEFAULT NULL,
	`description_title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
	PRIMARY KEY `PK_Home_T` (`id`),
	FOREIGN KEY `FK_Home_Farm` (`farm_id`) REFERENCES `Farm_I` (`id`),
	FOREIGN KEY `FK_Home_Product_1` (`product_1`) REFERENCES `Product_I` (`id`),
	FOREIGN KEY `FK_Home_Product_2` (`product_2`) REFERENCES `Product_I` (`id`),
	FOREIGN KEY `FK_Home_Product_3` (`product_3`) REFERENCES `Product_I` (`id`),
	FOREIGN KEY `FK_Home_Product_4` (`product_4`) REFERENCES `Product_I` (`id`),
	FOREIGN KEY `FK_Home_Product_5` (`product_5`) REFERENCES `Product_I` (`id`),
	FOREIGN KEY `FK_Home_Product_6` (`product_6`) REFERENCES `Product_I` (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;