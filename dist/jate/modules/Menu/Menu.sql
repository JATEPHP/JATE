CREATE TABLE IF NOT EXISTS `menu` (
  `pk_menu` int(11) NOT NULL AUTO_INCREMENT,
  `fk_menu` int(11) NOT NULL DEFAULT '0',
	`icon` varchar(45) NOT NULL,
  `label` varchar(45) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `flag_active` bit(1) DEFAULT b'1',
  `order` int(11) DEFAULT '1',
  UNIQUE KEY `pk_menu_UNIQUE` (`pk_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
ALTER TABLE `menu`
  ADD PRIMARY KEY (`pk_menu`);
ALTER TABLE `menu`
  MODIFY `pk_menu` int(11) NOT NULL AUTO_INCREMENT;
