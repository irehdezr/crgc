DROP TABLE `Home_T`;
DROP TABLE `Farm_T`;
DROP TABLE `Product_T`;
DROP TABLE `Farm_Certification`;
DROP TABLE `Farm_Cultivar`;
DROP TABLE `Farm_Award`;
DROP TABLE `Product_Presentation`;
DROP TABLE `Product_I`;
DROP TABLE `Roast`;
DROP TABLE `Grind`;
DROP TABLE `Farm_I`;
DROP TABLE `Flavor`;
DROP TABLE `Processing`;
DROP TABLE `Grade`;
DROP TABLE `Region`;
DROP TABLE `Certification`;
DROP TABLE `Cultivar`;
DROP TABLE `Award`;
  
CREATE TABLE IF NOT EXISTS `Award` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL UNIQUE,
	PRIMARY KEY `PK_Award` (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;
  
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


CREATE TABLE IF NOT EXISTS `Region` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL UNIQUE,
	PRIMARY KEY `PK_Region` (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `Grade` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL UNIQUE,
	PRIMARY KEY `PK_Grade` (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `Processing` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL UNIQUE,
	PRIMARY KEY `PK_Processing` (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `Flavor` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`notes` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL UNIQUE,
	PRIMARY KEY `PK_Flavor` (`id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `Farm_I` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`region_id` int(11) NOT NULL,
	`name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
	`image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`elevation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`harvest` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`latitude` float(20) NOT NULL,
	`longitude` float(20) NOT NULL,
	PRIMARY KEY `PK_Farm_I` (`id`),
	FOREIGN KEY `FK_Farm_I_Region` (`region_id`) REFERENCES `Region` (`id`)
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
	`cultivar_id` int(11) NOT NULL,
	`grade_id` int(11) NOT NULL,
	`processing_id` int(11) NOT NULL,
	`flavor_id` int(11) NOT NULL,
	`name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
	`image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`rank` int(1) NOT NULL,
	`reviews` int(6) NOT NULL,
	`description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY `PK_Product_I` (`id`),
	FOREIGN KEY `FK_Product_Farm` (`farm_id`) REFERENCES `Farm_I` (`id`),
	FOREIGN KEY `FK_Product_Cultivar` (`cultivar_id`) REFERENCES `Cultivar` (`id`),
	FOREIGN KEY `FK_Product_Grade` (`grade_id`) REFERENCES `Grade` (`id`),
	FOREIGN KEY `FK_Product_Processing` (`processing_id`) REFERENCES `Processing` (`id`),
	FOREIGN KEY `FK_Product_Flavor` (`flavor_id`) REFERENCES `Flavor` (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `Product_Presentation`(
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`product_id` int(11) NOT NULL,
	`roast_id` int(11) NOT NULL,
	`grind_id` int(11) NOT NULL,
	`price` float(2) NOT NULL,
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


CREATE TABLE IF NOT EXISTS `Product_T` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `farm_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `order_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `reviews_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `information_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `species_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `species_info` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cultivar_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `grade_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `processing_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `flavor_notes_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `roast_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `weight_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `grind_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cup_scoring_title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `Farm_T` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`page_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`description_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`story_btn_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`information_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`awards_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`location_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`products_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`region_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`elevation_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`harvest_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`species_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
    `species_info` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
	`cultivar_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`certifications_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`order_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`more_info_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	`reviews_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY `PK_Farm_T` (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
  
  
CREATE TABLE IF NOT EXISTS `Home_T` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`farm_id` int(11) NOT NULL,
	`product_1` int(11) NOT NULL,
	`product_2` int(11) NOT NULL,
	`product_3` int(11) NOT NULL,
	`product_4` int(11) DEFAULT NULL,
	`product_5` int(11) DEFAULT NULL,
	`product_6` int(11) DEFAULT NULL,
	`description_title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
	`description_info` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
	`banner_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`featured_products_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	`product_farm_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
	PRIMARY KEY `PK_Home_T` (`id`),
	FOREIGN KEY `FK_Home_Farm` (`farm_id`) REFERENCES `Farm_I` (`id`),
	FOREIGN KEY `FK_Home_Product_1` (`product_1`) REFERENCES `Product_I` (`id`),
	FOREIGN KEY `FK_Home_Product_2` (`product_2`) REFERENCES `Product_I` (`id`),
	FOREIGN KEY `FK_Home_Product_3` (`product_3`) REFERENCES `Product_I` (`id`),
	FOREIGN KEY `FK_Home_Product_4` (`product_4`) REFERENCES `Product_I` (`id`),
	FOREIGN KEY `FK_Home_Product_5` (`product_5`) REFERENCES `Product_I` (`id`),
	FOREIGN KEY `FK_Home_Product_6` (`product_6`) REFERENCES `Product_I` (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;