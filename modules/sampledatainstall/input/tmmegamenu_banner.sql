DROP TABLE IF EXISTS `ps_tmmegamenu_banner`;
CREATE TABLE `ps_tmmegamenu_banner` (
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `id_shop` int(11) NOT NULL DEFAULT '1',
  `specific_class` varchar(100) DEFAULT NULL,
  `blank` int(11) NOT NULL,
  PRIMARY KEY (`id_item`,`id_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

