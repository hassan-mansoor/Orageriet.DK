DROP TABLE IF EXISTS `ps_smart_blog_post_lang`;
CREATE TABLE `ps_smart_blog_post_lang` (
  `id_smart_blog_post` int(11) NOT NULL,
  `id_lang` varchar(45) NOT NULL DEFAULT '',
  `meta_title` varchar(150) DEFAULT NULL,
  `meta_keyword` varchar(200) DEFAULT NULL,
  `meta_description` varchar(450) DEFAULT NULL,
  `short_description` varchar(450) DEFAULT NULL,
  `content` text,
  `link_rewrite` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_smart_blog_post`,`id_lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/* Scheme for table ps_smart_blog_post_lang */
INSERT INTO `ps_smart_blog_post_lang` VALUES
('1','1','Lorem ipsum dolor sit amet  conse ctetur',NULL,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum erat at neque fermentum, in auctor justo hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id felis tempor, mollis ligula ac, iaculis massa. Aliquam nec mollis neque, eget laoreet nibh. Vivamus dictum tempor enim, a porttitor dui lacinia vitae.','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum erat at neque fermentum, in auctor justo hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id felis tempor, mollis ligula ac, iaculis massa. Aliquam nec mollis neque, eget laoreet nibh. Vivamus dictum tempor enim, a porttitor dui lacinia vitae.</p>','lorem-ipsum-dolor-sit-amet'),
('1','2','Lorem ipsum dolor sit amet  conse ctetur',NULL,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum erat at neque fermentum, in auctor justo hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id felis tempor, mollis ligula ac, iaculis massa. Aliquam nec mollis neque, eget laoreet nibh. Vivamus dictum tempor enim, a porttitor dui lacinia vitae.','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum erat at neque fermentum, in auctor justo hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id felis tempor, mollis ligula ac, iaculis massa. Aliquam nec mollis neque, eget laoreet nibh. Vivamus dictum tempor enim, a porttitor dui lacinia vitae.</p>','lorem-ipsum-dolor-sit-amet'),
('1','3','Lorem ipsum dolor sit amet  conse ctetur',NULL,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum erat at neque fermentum, in auctor justo hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id felis tempor, mollis ligula ac, iaculis massa. Aliquam nec mollis neque, eget laoreet nibh. Vivamus dictum tempor enim, a porttitor dui lacinia vitae.','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum erat at neque fermentum, in auctor justo hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id felis tempor, mollis ligula ac, iaculis massa. Aliquam nec mollis neque, eget laoreet nibh. Vivamus dictum tempor enim, a porttitor dui lacinia vitae.</p>','lorem-ipsum-dolor-sit-amet'),
('1','4','Lorem ipsum dolor sit amet  conse ctetur',NULL,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum erat at neque fermentum, in auctor justo hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id felis tempor, mollis ligula ac, iaculis massa. Aliquam nec mollis neque, eget laoreet nibh. Vivamus dictum tempor enim, a porttitor dui lacinia vitae.','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum erat at neque fermentum, in auctor justo hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id felis tempor, mollis ligula ac, iaculis massa. Aliquam nec mollis neque, eget laoreet nibh. Vivamus dictum tempor enim, a porttitor dui lacinia vitae.</p>','lorem-ipsum-dolor-sit-amet'),
('1','5','Lorem ipsum dolor sit amet  conse ctetur',NULL,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum erat at neque fermentum, in auctor justo hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id felis tempor, mollis ligula ac, iaculis massa. Aliquam nec mollis neque, eget laoreet nibh. Vivamus dictum tempor enim, a porttitor dui lacinia vitae.','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven','<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vestibulum erat at neque fermentum, in auctor justo hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id felis tempor, mollis ligula ac, iaculis massa. Aliquam nec mollis neque, eget laoreet nibh. Vivamus dictum tempor enim, a porttitor dui lacinia vitae.</p>','lorem-ipsum-dolor-sit-amet'),
('2','1','Lorem ipsum dolor sit amet  conse ctetur',NULL,'Cras in sem in arcu ultrices egestas sit amet nec metus. Suspendisse magna nisi, cursus ut condimentum eu, dapibus at dolor. Sed venenatis sapien quis urna consequat, quis tempor neque porttitor. Vivamus iaculis eleifend varius. Vestibulum quis justo massa. Mauris et eros mollis, placerat mauris nec, mattis purus.','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven','<p>Cras in sem in arcu ultrices egestas sit amet nec metus. Suspendisse magna nisi, cursus ut condimentum eu, dapibus at dolor. Sed venenatis sapien quis urna consequat, quis tempor neque porttitor. Vivamus iaculis eleifend varius. Vestibulum quis justo massa. Mauris et eros mollis, placerat mauris nec, mattis purus.</p>','cras-in-sem-in-arcu-ultrices'),
('2','2','Lorem ipsum dolor sit amet  conse ctetur',NULL,'Cras in sem in arcu ultrices egestas sit amet nec metus. Suspendisse magna nisi, cursus ut condimentum eu, dapibus at dolor. Sed venenatis sapien quis urna consequat, quis tempor neque porttitor. Vivamus iaculis eleifend varius. Vestibulum quis justo massa. Mauris et eros mollis, placerat mauris nec, mattis purus.','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven','<p>Cras in sem in arcu ultrices egestas sit amet nec metus. Suspendisse magna nisi, cursus ut condimentum eu, dapibus at dolor. Sed venenatis sapien quis urna consequat, quis tempor neque porttitor. Vivamus iaculis eleifend varius. Vestibulum quis justo massa. Mauris et eros mollis, placerat mauris nec, mattis purus.</p>','cras-in-sem-in-arcu-ultrices'),
('2','3','Lorem ipsum dolor sit amet  conse ctetur',NULL,'Cras in sem in arcu ultrices egestas sit amet nec metus. Suspendisse magna nisi, cursus ut condimentum eu, dapibus at dolor. Sed venenatis sapien quis urna consequat, quis tempor neque porttitor. Vivamus iaculis eleifend varius. Vestibulum quis justo massa. Mauris et eros mollis, placerat mauris nec, mattis purus.','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven','<p>Cras in sem in arcu ultrices egestas sit amet nec metus. Suspendisse magna nisi, cursus ut condimentum eu, dapibus at dolor. Sed venenatis sapien quis urna consequat, quis tempor neque porttitor. Vivamus iaculis eleifend varius. Vestibulum quis justo massa. Mauris et eros mollis, placerat mauris nec, mattis purus.</p>','cras-in-sem-in-arcu-ultrices'),
('2','4','Lorem ipsum dolor sit amet  conse ctetur',NULL,'Cras in sem in arcu ultrices egestas sit amet nec metus. Suspendisse magna nisi, cursus ut condimentum eu, dapibus at dolor. Sed venenatis sapien quis urna consequat, quis tempor neque porttitor. Vivamus iaculis eleifend varius. Vestibulum quis justo massa. Mauris et eros mollis, placerat mauris nec, mattis purus.','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven','<p>Cras in sem in arcu ultrices egestas sit amet nec metus. Suspendisse magna nisi, cursus ut condimentum eu, dapibus at dolor. Sed venenatis sapien quis urna consequat, quis tempor neque porttitor. Vivamus iaculis eleifend varius. Vestibulum quis justo massa. Mauris et eros mollis, placerat mauris nec, mattis purus.</p>','cras-in-sem-in-arcu-ultrices'),
('2','5','Lorem ipsum dolor sit amet  conse ctetur',NULL,'Cras in sem in arcu ultrices egestas sit amet nec metus. Suspendisse magna nisi, cursus ut condimentum eu, dapibus at dolor. Sed venenatis sapien quis urna consequat, quis tempor neque porttitor. Vivamus iaculis eleifend varius. Vestibulum quis justo massa. Mauris et eros mollis, placerat mauris nec, mattis purus.','Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven','<p>Cras in sem in arcu ultrices egestas sit amet nec metus. Suspendisse magna nisi, cursus ut condimentum eu, dapibus at dolor. Sed venenatis sapien quis urna consequat, quis tempor neque porttitor. Vivamus iaculis eleifend varius. Vestibulum quis justo massa. Mauris et eros mollis, placerat mauris nec, mattis purus.</p>','cras-in-sem-in-arcu-ultrices');
