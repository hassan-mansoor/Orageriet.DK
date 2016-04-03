DROP TABLE IF EXISTS `ps_tmmegamenu_items`;
CREATE TABLE `ps_tmmegamenu_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tab` int(11) NOT NULL,
  `row` int(11) NOT NULL DEFAULT '1',
  `col` int(11) NOT NULL DEFAULT '1',
  `width` int(11) NOT NULL,
  `class` varchar(100) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `is_mega` int(11) NOT NULL DEFAULT '0',
  `settings` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/* Scheme for table ps_tmmegamenu_items */
INSERT INTO `ps_tmmegamenu_items` VALUES
('12','4','1','1','2',NULL,'0','1','CAT21'),
('13','4','1','2','2',NULL,'0','1','CAT22'),
('14','4','1','3','2',NULL,'0','1','CAT23'),
('15','4','1','4','2',NULL,'0','1','CAT24');
