CREATE TABLE IF NOT EXISTS `user_section` (
  `pk_user_section` int(11) unsigned NOT NULL,
  `section` varchar(250) NOT NULL,
  `flag_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `user_section`
  ADD PRIMARY KEY (`pk_user_section`);
ALTER TABLE `user_section`
  MODIFY `pk_user_section` int(11) NOT NULL AUTO_INCREMENT;
