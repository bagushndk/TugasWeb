create database crud_web;
 
use crud_web;
 
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `email` varchar(100),
  `telepon` varchar(15),
  `message` varchar(150),
  PRIMARY KEY  (`id`)
);