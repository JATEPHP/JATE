CREATE TABLE IF NOT EXISTS `user` (
  `pk_user` int(11) unsigned NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `surname` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `flag_active` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `user`
  ADD PRIMARY KEY (`pk_user`);
ALTER TABLE `user`
  MODIFY `pk_user` int(11) NOT NULL AUTO_INCREMENT;
