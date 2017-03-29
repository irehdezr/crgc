INSERT INTO `Award` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'Cup of Excellence');
 
  
INSERT INTO `Cultivar` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'Caturra'),
(NULL, 'Catuai'),
(NULL, 'Bourbon'),
(NULL, 'Geisha');

  
INSERT INTO `Certification` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'Organic');


INSERT INTO `Region` (`id`, `name`) VALUES 
(NULL, 'Central Valley'),
(NULL, 'Occidental Valley'),
(NULL, 'Dota/Tarrazú');


INSERT INTO `Grade` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'SHB');


INSERT INTO `Processing` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'Washed');


INSERT INTO `Flavor` (`id`, `notes`) VALUES 
(NULL, 'None'),
(NULL, 'Dried frutis and chocolate');


INSERT INTO `Farm_I` (`id`, `region_id`, `name`, `image`, `description`, `elevation`, `harvest`, `latitude`, `longitude`) VALUES
(NULL, 1, 'Tortuga', '/web/public/imgs/farms/tortuga.png', 'For more than a decade, the Caballero family has been providing Intelligentsia with beautiful coffees we are proud to offer as La Tortuga. We enjoy this coffee\'s syrupy body and clean flavors of plum, brown sugar, and tamarind.', '1200-1500', 'November-April', '10.3532151651', '10.3532151651'),
(NULL, 2, 'Yirgacheffe', '/web/public/imgs/farms/yirgacheffe.png', 'This estate was inherited from my grandfather Yirgacheffe, we named the farm after him. It is located in Heredia and it has belonged to the family for more than 80 years, going from generation to generation of the Yirgacheffe family. ', '1450-1600', 'November-March', '10.3532151651', '10.3532151651');

  
INSERT INTO `Roast` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'Light'),
(NULL, 'Medium'),
(NULL, 'Dark');


INSERT INTO `Grind` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'Whole Bean'),
(NULL, 'Ground');


INSERT INTO `Product_I` (`id`, `farm_id`, `cultivar_id`, `grade_id`, `processing_id`, `flavor_id`, `name`, `image`, `rank`, `reviews`, `description`) VALUES
(NULL, 1, 2, 2, 2, 2, 'Chumbal', '/web/public/imgs/coffeeBag1.png', 3, 15, 'Description'),
(NULL, 1, 3, 2, 2, 2, 'Solela', '/web/public/imgs/coffeeBag2.png', 4, 10, 'Description'),
(NULL, 1, 4, 2, 2, 2, 'Reeba', '/web/public/imgs/coffeeBag3.png', 2, 4, 'Description'),
(NULL, 1, 5, 2, 2, 2, 'Gevalia', '/web/public/imgs/coffeeBag2.png', 5, 5, 'Description'),
(NULL, 1, 2, 2, 2, 2, 'Folgers', '/web/public/imgs/coffeeBag3.png', 4, 20, 'Description'),
(NULL, 2, 3, 2, 2, 2, 'Sisel', '/web/public/imgs/coffeeBag1.png', 2, 5, 'Description');


INSERT INTO `Product_Presentation` (`id`, `product_id`, `roast_id`, `grind_id`, `price`, `weight`) VALUES
(NULL, '1', '2', '2', '20.00', '340'),
(NULL, '1', '3', '3', '15.50', '300'),
(NULL, '2', '4', '3', '18.25', '200'),
(NULL, '3', '2', '2', '21.75', '250'),
(NULL, '4', '3', '3', '22.99', '360'),
(NULL, '5', '4', '2', '14.00', '180'),
(NULL, '6', '1', '3', '30.00', '500');


INSERT INTO `Farm_Award` (`farm_id`, `award_id`, `place`, `year`) VALUES 
('1', '2', '2nd', '2015'),
('1', '2', '4th', '2014'),
('2', '2', '1st', '2015'),
('2', '2', '3ed', '2010');
	

INSERT INTO `Farm_Cultivar` (`farm_id`, `cultivar_id`) VALUES 
('1', '4'), 
('1', '5'), 
('2', '2'), 
('2', '3');


INSERT INTO `Farm_Certification` (`farm_id`, `certification_id`) VALUES 
('1', '2'),
('2', '2');


INSERT INTO `Product_T` (`id`, `page_title`, `farm_title`, `order_title`, `reviews_title`, `information_title`, `species_title`, `species_info`, `cultivar_title`, `grade_title`, `processing_title`, `flavor_notes_title`, `roast_title`, `weight_title`, `grind_title`, `cup_scoring_title`) VALUES
(1, 'Product Information', 'Farm', 'Order', 'Reviews', 'Information', 'Species', 'Arabica', 'Cultivar', 'Grade', 'Processing', 'Flavor notes', 'Roast', 'Weight', 'Grind', 'Cup scoring');


INSERT INTO `Farm_T` (`id`, `page_title`, `description_title`,`story_btn_title`, `information_title`, `awards_title`, `location_title`, `products_title`, `region_title`, `elevation_title`, `harvest_title`, `species_title`, `species_info`, `cultivar_title`, `certifications_title`,`order_title`,`more_info_title`,`reviews_title`) VALUES
(1, 'Farm Information', 'Description','Read story', 'Information', 'Awards', 'Location', 'Roasted Coffee', 'Region', 'Elevation', 'Harvest', 'Species', 'Arabica', 'Cultivar', 'Certifications','Order','More info/options','Reviews'),
(2, 'Información de Finca', 'Descripción','Leer historia', 'Información','Premios', 'Localización', 'Café tostado', 'Región', 'Elevación', 'Cosecha', 'Especie', 'Arabica',  'Cultivar', 'Certificaciones','Ordenar','Más info/opciones','Comentarios');


INSERT INTO `Home_T` (`id`, `farm_id`, `product_1`, `product_2`, `product_3`, `product_4`, `product_5`, `product_6`, `description_title`, `description_info`, `banner_image`, `featured_products_title`, `product_farm_title`) VALUES
(NULL, 2, 1, 2, 3, 4, 5, 6, 'We bring you the best coffee from Costa Rica.','Our site is operated by high-quality Costa Rican producers,\n who sell directly their own coffee without intermediaries.\n These producers have been winners of the Cup of Excellence\n – prestigous contest to reward coffee quality. ', '/web/public/imgs/coffeeGrains.png', 'Featured products', 'Farm');