-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2016 alle 11:52
-- Versione del server: 5.7.10
-- PHP Version: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `test` (
  `pk_test` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `test` (`pk_test`, `name`) VALUES
(1, 'Hello World!');

ALTER TABLE `test`
  ADD PRIMARY KEY (`pk_test`);

ALTER TABLE `test`
  MODIFY `pk_test` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
