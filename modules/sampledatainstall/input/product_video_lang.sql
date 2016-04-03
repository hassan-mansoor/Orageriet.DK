DROP TABLE IF EXISTS `ps_product_video_lang`;
CREATE TABLE `ps_product_video_lang` (
  `id_video` int(10) unsigned NOT NULL,
  `id_shop` int(10) unsigned NOT NULL,
  `id_product` int(10) unsigned NOT NULL,
  `id_lang` int(10) unsigned NOT NULL,
  `link` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `sort_order` int(10) unsigned NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_video`,`id_lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Scheme for table ps_product_video_lang */
INSERT INTO `ps_product_video_lang` VALUES
('1','1','1','1','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'2','1'),
('1','1','1','2','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('1','1','1','3','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('1','1','1','4','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('1','1','1','5','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('2','1','2','1','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('2','1','2','2','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('2','1','2','3','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('2','1','2','4','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('2','1','2','5','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('3','1','3','1','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('3','1','3','2','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('3','1','3','3','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('3','1','3','4','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('3','1','3','5','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('4','1','4','1','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('4','1','4','2','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('4','1','4','3','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('4','1','4','4','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('4','1','4','5','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('5','1','5','1','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('5','1','5','2','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('5','1','5','3','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('5','1','5','4','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('5','1','5','5','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('6','1','6','1','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('6','1','6','2','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('6','1','6','3','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('6','1','6','4','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('6','1','6','5','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('8','1','8','1','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('8','1','8','2','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('8','1','8','3','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('8','1','8','4','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('8','1','8','5','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('9','1','9','1','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('9','1','9','2','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('9','1','9','3','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('9','1','9','4','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1'),
('9','1','9','5','https://www.youtube.com/embed/2sMW_W08VNc','Secret Lk Pk ',NULL,'1','1');
