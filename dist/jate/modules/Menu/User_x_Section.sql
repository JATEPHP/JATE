CREATE TABLE IF NOT EXISTS `user_x_section` (
  `pk_user_x_section` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `fk_user_section` int(11) NOT NULL,
  `preference` varchar(45) DEFAULT NULL,
  `flag_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
ALTER TABLE `user_x_section`
  ADD PRIMARY KEY (`pk_user_x_section`);
ALTER TABLE `user_x_section`
  MODIFY `pk_user_x_section` int(11) NOT NULL AUTO_INCREMENT;
