DROP TABLE IF EXISTS `ps_tmmegamenu`;
CREATE TABLE `ps_tmmegamenu` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_shop` int(11) NOT NULL DEFAULT '1',
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `specific_class` varchar(100) DEFAULT NULL,
  `is_mega` int(11) NOT NULL DEFAULT '0',
  `is_simple` int(11) NOT NULL DEFAULT '0',
  `is_custom_url` int(11) NOT NULL DEFAULT '0',
  `url` varchar(100) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/* Scheme for table ps_tmmegamenu */
INSERT INTO `ps_tmmegamenu` VALUES
('4','1','11',NULL,'1','0','0','CAT12','1'),
('5','1','12',NULL,'0','0','0','CAT13','1'),
('6','1','13',NULL,'0','0','0','CAT14','1'),
('7','1','14',NULL,'0','0','0','CAT15','1'),
('8','1','15',NULL,'0','0','0','CAT17','1'),
('9','1','16',NULL,'0','0','0','CAT20','1');
