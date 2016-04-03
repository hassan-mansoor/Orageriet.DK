DROP TABLE IF EXISTS `ps_tmmegamenu_html_lang`;
CREATE TABLE `ps_tmmegamenu_html_lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_item` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

