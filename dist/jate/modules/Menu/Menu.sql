CREATE TABLE IF NOT EXISTS `menu` (
	`pk_menu` int(11) NOT NULL,
	`fk_menu` int(11) NOT NULL DEFAULT '0',
	`label` varchar(45) NOT NULL,
	`link` varchar(100) DEFAULT NULL,
	`flag_active` bit(1) DEFAULT b'1'
) ENGINE=MyISAM AUTO_INCREMENT DEFAULT CHARSET=utf8;
