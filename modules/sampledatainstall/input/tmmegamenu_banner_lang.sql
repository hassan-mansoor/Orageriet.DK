DROP TABLE IF EXISTS `ps_tmmegamenu_banner_lang`;
CREATE TABLE `ps_tmmegamenu_banner_lang` (
  `id_item` int(10) unsigned NOT NULL,
  `id_lang` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id_item`,`id_lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

