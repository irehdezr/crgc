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

INSERT INTO `Region` (`id`,`name`,`image1`,`image_description1`,`image2`,`image_description2`,`image3`,`image_description3`,`description`,`organoleptic_characteristics`,`information`,`latitude`,`longitude`,`zoom`) VALUES 
(NULL, 'Central Valley', '/web/public/imgs/central_valley_panoramic.jpg', 'Panoramic view', '/web/public/imgs/central_valley_volcano.jpg', 'Poás Volcano', '/web/public/imgs/central_valley_juansantamaria.jpg', 'Juan Santa María', 'The Central Valley is made by the provinces San José, Heredia and Alajuela. It is the most populated region, where the capital San José is found and in which the coffee plantations began and latter were carried to the other producing regions in the country. In the Central Valley are familiar figures volcanoes such as Irazu, Barva and Poas, which nourish the soils where coffee is cultivated','The volcanic soils and the climate of the Central Valley produce a coffee of excellent characteristics of cup with a presence chocolate in its flavor.','This region has well-defined the wet and dry seasons, with a total rainfall of 3,000 mm in 155 days a year and a humidity of 84%. The temperature of 20ºC is in stable and sunshine average from 44 to 54% and 2,150 hours.The region extends from 800 to 1,600 meters above sea level, however more than 80% of the coffee trees are grown between 1,000 and 1,400 meters. The sub-regions are distributed among lower areas (below 1,000 meters) where coffee is lighter, and higher area (above 1,200 meters) with stronger or more acidic coffee and also more aromatic.The altitude of the Central Valley affects the size and hardness of the coffee bean and influences certain components of the quality of the drink, especially its acidity; these elements added to the characteristics of Arabica coffee, provide an aromatic, delicate and tasty drink.Soils in this region have a slight degree of tropical acidity product of the volcanic ashes; they are rich in organic matter which favors moisture retention, a good distribution of the roots, and facilitates oxygenation.  This combination favor vigor to the coffee plant, which contributes to its excellent quality.Cropping runs from November to mid-March.',10.023473, -83.741142,7),
(NULL, 'Dota/Tarrazú', '/web/public/imgs/central_valley_panoramic.jpg', 'Panoramic view', '/web/public/imgs/central_valley_volcano.jpg', 'Poás Volcano', '/web/public/imgs/central_valley_juansantamaria.jpg', 'Juan Santa María', 'The Central Valley is made by the provinces San José, Heredia and Alajuela. It is the most populated region, where the capital San José is found and in which the coffee plantations began and latter were carried to the other producing regions in the country. In the Central Valley are familiar figures volcanoes such as Irazu, Barva and Poas, which nourish the soils where coffee is cultivated','The volcanic soils and the climate of the Central Valley produce a coffee of excellent characteristics of cup with a presence chocolate in its flavor.','This region has well-defined the wet and dry seasons, with a total rainfall of 3,000 mm in 155 days a year and a humidity of 84%. The temperature of 20ºC is in stable and sunshine average from 44 to 54% and 2,150 hours.The region extends from 800 to 1,600 meters above sea level, however more than 80% of the coffee trees are grown between 1,000 and 1,400 meters. The sub-regions are distributed among lower areas (below 1,000 meters) where coffee is lighter, and higher area (above 1,200 meters) with stronger or more acidic coffee and also more aromatic.The altitude of the Central Valley affects the size and hardness of the coffee bean and influences certain components of the quality of the drink, especially its acidity; these elements added to the characteristics of Arabica coffee, provide an aromatic, delicate and tasty drink.Soils in this region have a slight degree of tropical acidity product of the volcanic ashes; they are rich in organic matter which favors moisture retention, a good distribution of the roots, and facilitates oxygenation.  This combination favor vigor to the coffee plant, which contributes to its excellent quality.Cropping runs from November to mid-March.',10.023473, -83.741142,7),
(NULL, 'Occidental Valley', '/web/public/imgs/central_valley_panoramic.jpg', 'Panoramic view', '/web/public/imgs/central_valley_volcano.jpg', 'Poás Volcano', '/web/public/imgs/central_valley_juansantamaria.jpg', 'Juan Santa María', 'The Central Valley is made by the provinces San José, Heredia and Alajuela. It is the most populated region, where the capital San José is found and in which the coffee plantations began and latter were carried to the other producing regions in the country. In the Central Valley are familiar figures volcanoes such as Irazu, Barva and Poas, which nourish the soils where coffee is cultivated','The volcanic soils and the climate of the Central Valley produce a coffee of excellent characteristics of cup with a presence chocolate in its flavor.','This region has well-defined the wet and dry seasons, with a total rainfall of 3,000 mm in 155 days a year and a humidity of 84%. The temperature of 20ºC is in stable and sunshine average from 44 to 54% and 2,150 hours.The region extends from 800 to 1,600 meters above sea level, however more than 80% of the coffee trees are grown between 1,000 and 1,400 meters. The sub-regions are distributed among lower areas (below 1,000 meters) where coffee is lighter, and higher area (above 1,200 meters) with stronger or more acidic coffee and also more aromatic.The altitude of the Central Valley affects the size and hardness of the coffee bean and influences certain components of the quality of the drink, especially its acidity; these elements added to the characteristics of Arabica coffee, provide an aromatic, delicate and tasty drink.Soils in this region have a slight degree of tropical acidity product of the volcanic ashes; they are rich in organic matter which favors moisture retention, a good distribution of the roots, and facilitates oxygenation.  This combination favor vigor to the coffee plant, which contributes to its excellent quality.Cropping runs from November to mid-March.',10.023473, -83.741142,7);

INSERT INTO `Grade` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'SHB');


INSERT INTO `Processing` (`id`, `description`) VALUES 
(NULL, 'None'),
(NULL, 'Washed');


INSERT INTO `Flavor` (`id`, `notes`) VALUES 
(NULL, 'None'),
(NULL, 'Dried fruits and chocolate');


INSERT INTO `Farm_I` (`id`, `region_id`, `name`, `image`, `description`, `elevation`, `harvest`, `latitude`, `longitude`) VALUES
(NULL, 1, 'Tortuga', '/web/public/imgs/farms/tortuga.png', 'For more than a decade, the Caballero family has been providing Intelligentsia with beautiful coffees we are proud to offer as La Tortuga. We enjoy this coffee\'s syrupy body and clean flavors of plum, brown sugar, and tamarind.', '1200-1500', 'November-April','9.991412', '-84.124289'),
(NULL, 2, 'Yirgacheffe', '/web/public/imgs/farms/yirgacheffe.png', 'This estate was inherited from my grandfather Yirgacheffe, we named the farm after him. It is located in Heredia and it has belonged to the family for more than 80 years, going from generation to generation of the Yirgacheffe family. ', '1450-1600', 'November-March', '9.702228', '-84.043551');

  
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
(NULL, '1', '2', '2', '10', '300'),
(NULL, '1', '2', '2', '14', '340'),
(NULL, '1', '2', '3', '13', '300'),
(NULL, '1', '2', '3', '17', '340'),
(NULL, '1', '3', '2', '15', '300'),
(NULL, '1', '3', '2', '19', '340'),
(NULL, '1', '3', '3', '18', '300'),
(NULL, '1', '3', '3', '22', '340'),
(NULL, '1', '4', '2', '20', '300'),
(NULL, '1', '4', '2', '24', '340'),
(NULL, '1', '4', '3', '23', '300'),
(NULL, '1', '4', '3', '27', '340'),

(NULL, '2', '2', '2', '20', '300'),
(NULL, '2', '2', '2', '24', '340'),
(NULL, '2', '2', '3', '23', '300'),
(NULL, '2', '2', '3', '27', '340'),
(NULL, '2', '3', '2', '25', '300'),
(NULL, '2', '3', '2', '29', '340'),
(NULL, '2', '3', '3', '28', '300'),
(NULL, '2', '3', '3', '32', '340'),
(NULL, '2', '4', '2', '30', '300'),
(NULL, '2', '4', '2', '34', '340'),
(NULL, '2', '4', '3', '33', '300'),
(NULL, '2', '4', '3', '37', '340'),

(NULL, '3', '2', '2', '30', '300'),
(NULL, '3', '2', '2', '34', '340'),
(NULL, '3', '2', '3', '33', '300'),
(NULL, '3', '2', '3', '37', '340'),
(NULL, '3', '3', '2', '35', '300'),
(NULL, '3', '3', '2', '39', '340'),
(NULL, '3', '3', '3', '38', '300'),
(NULL, '3', '3', '3', '42', '340'),
(NULL, '3', '4', '2', '40', '300'),
(NULL, '3', '4', '2', '44', '340'),
(NULL, '3', '4', '3', '43', '300'),
(NULL, '3', '4', '3', '47', '340'),

(NULL, '4', '2', '2', '40', '300'),
(NULL, '4', '2', '2', '44', '340'),
(NULL, '4', '2', '3', '43', '300'),
(NULL, '4', '2', '3', '47', '340'),
(NULL, '4', '3', '2', '45', '300'),
(NULL, '4', '3', '2', '49', '340'),
(NULL, '4', '3', '3', '48', '300'),
(NULL, '4', '3', '3', '52', '340'),
(NULL, '4', '4', '2', '50', '300'),
(NULL, '4', '4', '2', '54', '340'),
(NULL, '4', '4', '3', '53', '300'),
(NULL, '4', '4', '3', '57', '340'),

(NULL, '5', '2', '2', '50', '300'),
(NULL, '5', '2', '2', '54', '340'),
(NULL, '5', '2', '3', '53', '300'),
(NULL, '5', '2', '3', '57', '340'),
(NULL, '5', '3', '2', '55', '300'),
(NULL, '5', '3', '2', '59', '340'),
(NULL, '5', '3', '3', '58', '300'),
(NULL, '5', '3', '3', '62', '340'),
(NULL, '5', '4', '2', '60', '300'),
(NULL, '5', '4', '2', '64', '340'),
(NULL, '5', '4', '3', '63', '300'),
(NULL, '5', '4', '3', '67', '340'),

(NULL, '6', '2', '2', '60', '300'),
(NULL, '6', '2', '2', '64', '340'),
(NULL, '6', '2', '3', '63', '300'),
(NULL, '6', '2', '3', '67', '340'),
(NULL, '6', '3', '2', '65', '300'),
(NULL, '6', '3', '2', '69', '340'),
(NULL, '6', '3', '3', '68', '300'),
(NULL, '6', '3', '3', '72', '340'),
(NULL, '6', '4', '2', '70', '300'),
(NULL, '6', '4', '2', '74', '340'),
(NULL, '6', '4', '3', '73', '300'),
(NULL, '6', '4', '3', '74', '340');


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


INSERT INTO `User` (`email`, `username`,`lastname`, `password`) VALUES 
('admin@gmail.com', 'CRgourmet','Coffee', '$2y$12$JUcCH2ESdVVDw4LyDZiLtuDJZUuxZonom9gg0ynZ6FGDbYbUYOrrq'),
('carlos@gmail.com', 'Carlos','Herrera', '$2y$12$t9LLBvfK1b84GDdWROZFLeHojdRP2vH9mhuY36ivx310g7wmtMC2i');

INSERT INTO `Shopping_Cart_T` (`id`, `page_title`, `cart_title`, `product_title`, `farm_title`, `description_title`, `weight_title`, `roast_title`, `grind_title`, `unit_price_title`, `quantity_title`, `sub_total_title`, `total_title`, `action_title`, `remove_button`, `shipping_title`, `continue_button`, `check_out_button`, `empty_cart_title`) VALUES
(1, 'Shopping Cup', 'Your products', 'Product', 'Farm', 'Description', 'Weight','Roast','Grind','Unit Price', 'Quantity', 'Sub total', 'Total', 'Action', 'Remove', 'Shipping is not included', 'Continue Shopping', 'Check out', 'You have no products on your shopping cup');


INSERT INTO `Product_T` (`id`, `page_title`, `farm_title`, `order_title`, `reviews_title`, `information_title`, `species_title`, `species_info`, `cultivar_title`, `grade_title`, `processing_title`, `flavor_notes_title`, `roast_title`, `weight_title`, `grind_title`, `cup_scoring_title`) VALUES
(1, 'Product Information', 'Farm', 'Order', 'Reviews', 'Information', 'Species', 'Arabica', 'Cultivar', 'Grade', 'Processing', 'Flavor notes', 'Roast', 'Weight', 'Grind', 'Cup scoring');


INSERT INTO `Farm_T` (`id`, `page_title`, `description_title`,`story_btn_title`, `information_title`, `awards_title`, `location_title`, `products_title`, `region_title`, `elevation_title`, `harvest_title`, `species_title`, `species_info`, `cultivar_title`, `certifications_title`,`order_title`,`more_info_title`,`reviews_title`,`contact_btn_title`) VALUES
(1, 'Farm Information', 'Description','Read story', 'Information', 'Awards', 'Location', 'Roasted Coffee', 'Region', 'Elevation', 'Harvest', 'Species', 'Arabica', 'Cultivar', 'Certifications','Order','Options','Reviews','Contact farm'),
(2, 'Información de Finca', 'Descripción','Leer historia', 'Información','Premios', 'Localización', 'Café tostado', 'Región', 'Elevación', 'Cosecha', 'Especie', 'Arabica',  'Cultivar', 'Certificaciones','Ordenar','Opciones','Comentarios','Contactar finca');


INSERT INTO `Home_T` (`id`, `farm_id`, `product_1`, `product_2`, `product_3`, `product_4`, `product_5`, `product_6`, `description_title`, `description_info`, `banner_image`, `featured_products_title`, `product_farm_title`) VALUES
(NULL, 2, 1, 2, 3, 4, 5, 6, 'We bring you the best coffee from Costa Rica.','Our site is operated by high-quality Costa Rican producers,\n who sell directly their own coffee without intermediaries.\n These producers have been winners of the Cup of Excellence\n – prestigous contest to reward coffee quality. ', '/web/public/imgs/coffeeGrains.png', 'Featured products', 'Farm');