DROP TABLE IF EXISTS `ps_tmmegamenu_lang`;
CREATE TABLE `ps_tmmegamenu_lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_item` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `badge` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

/* Scheme for table ps_tmmegamenu_lang */
INSERT INTO `ps_tmmegamenu_lang` VALUES
('56','7','1','Women\'s',NULL),
('57','7','2','Women\'s',NULL),
('58','7','3','Women\'s',NULL),
('59','7','4','Women\'s',NULL),
('60','7','5','Women\'s',NULL),
('66','9','1','Uniforms',NULL),
('67','9','2','Uniforms',NULL),
('68','9','3','Uniforms',NULL),
('69','9','4','Uniforms',NULL),
('70','9','5','Uniforms',NULL),
('71','8','1','Brand',NULL),
('72','8','2','Brand',NULL),
('73','8','3','Brand',NULL),
('74','8','4','Brand',NULL),
('75','8','5','Brand',NULL),
('76','4','1','Gear',NULL),
('77','4','2','Gear',NULL),
('78','4','3','Gear',NULL),
('79','4','4','Gear',NULL),
('80','4','5','Gear',NULL),
('81','5','1','Shop by sport',NULL),
('82','5','2','Shop by sport',NULL),
('83','5','3','Shop by sport',NULL),
('84','5','4','Shop by sport',NULL),
('85','5','5','Shop by sport',NULL),
('86','6','1','Men\'s',NULL),
('87','6','2','Men\'s',NULL),
('88','6','3','Men\'s',NULL),
('89','6','4','Men\'s',NULL),
('90','6','5','Men\'s',NULL);
