DROP TABLE IF EXISTS `ps_tmmegamenu_html`;
CREATE TABLE `ps_tmmegamenu_html` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_shop` int(11) NOT NULL DEFAULT '1',
  `specific_class` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

