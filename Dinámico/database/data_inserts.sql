INSERT INTO `Award` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'Cup of Excellence');
  
  
INSERT INTO `Species` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'Arabica');
  
  
INSERT INTO `Cultivar` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'Caturra'),
(NULL, 'Catuai'),
(NULL, 'Bourbon'),
(NULL, 'Geisha');

  
INSERT INTO `Certification` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'Organic');


INSERT INTO `Farm_I` (`id`, `name`, `image`, `description`, `elevation`, `harvest`, `latitude`, `longitude`) VALUES
(NULL, 'Tortuga', '/web/public/imgs/farms/tortuga.png', 'For more than a decade, the Caballero family has been providing Intelligentsia with beautiful coffees we are proud to offer as La Tortuga. We enjoy this coffee\'s syrupy body and clean flavors of plum, brown sugar, and tamarind.', '1200-1500', 'November-April', '10.3532151651', '10.3532151651'),
(NULL, 'Yirgacheffe', '/web/public/imgs/farms/yirgacheffe.png', 'This estate was inherited from my grandfather Yirgacheffe, we named the farm after him. It is located in Heredia and it has belonged to the family for more than 80 years, going from generation to generation of the Yirgacheffe family. ', '1450-1600', 'November-March', '10.3532151651', '10.3532151651');


INSERT INTO `Product_I` (`id`, `farm_id`, `name`, `image`, `rank`, `reviews`, `description`) VALUES
(NULL, 1, 'Chumbal', '/web/public/imgs/coffeeBag1.png', 3, 15, 'Whole Bean'),
(NULL, 1, 'Solela', '/web/public/imgs/coffeeBag2.png', 4, 10, 'Whole Bean'),
(NULL, 1, 'Reeba', '/web/public/imgs/coffeeBag3.png', 2, 4, 'Ground'),
(NULL, 1, 'Gevalia', '/web/public/imgs/coffeeBag2.png', 5, 5, 'Whole Bean'),
(NULL, 1, 'Folgers', '/web/public/imgs/coffeeBag3.png', 4, 20, 'Ground'),
(NULL, 2, 'Sisel', '/web/public/imgs/coffeeBag1.png', 2, 5, 'Whole Bean');


INSERT INTO `Farm_Award` (`farm_id`, `award_id`, `place`, `year`) VALUES 
('1', '2', '2nd', '2015'),
('1', '2', '4th', '2014'),
('2', '2', '1st', '2015'),
('2', '2', '3ed', '2010');


INSERT INTO `Farm_Species` (`farm_id`, `species_id`) VALUES 
('1', '2'), 
('2', '2');


INSERT INTO `farm_cultivar` (`farm_id`, `cultivar_id`) VALUES 
('1', '4'), 
('1', '5'), 
('2', '2'), 
('2', '3');


INSERT INTO `Farm_Certification` (`farm_id`, `certification_id`) VALUES 
('1', '2'),
('2', '2');


INSERT INTO `Farm_T` (`id`, `description_title`, `information_title`, `awards_title`, `location_title`, `products_title`, `elevation_title`, `harvest_title`, `species_title`, `cultivar_title`, `certifications_title`) VALUES
(1, 'Description', 'Information', 'Awards', 'Location', 'Roasted Coffee', 'Elevation', 'Harvest', 'Species', 'Cultivar', 'Certifications'),
(2, 'Descripción', 'Información', 'Premios', 'Localización', 'Café tostado', 'Elevación', 'Cosecha', 'Especie', 'Cultivar', 'Certificaciones');


INSERT INTO `Home_T` (`id`, `description_info`, `banner_image`, `farm_id`, `product_1`, `product_2`, `product_3`, `product_4`, `product_5`, `product_6`, `description_title`) VALUES
(NULL, 'Our site is operated by high-quality Costa Rican producers,\n who sell directly their own coffee without intermediaries.\n These producers have been winners of the Cup of Excellence\n – prestigous contest to reward coffee quality. ', '/web/public/imgs/coffeeGrains.png', 2, 1, 2, 3, 4, 5, 6, 'We bring you the best coffee from Costa Rica.');