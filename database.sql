create database addbook;

use addbook;

CREATE TABLE `users` (
	`id` int(20) NOT NULL auto_increment,
	`nama` varchar(50) NOT NULL,
	`email` varchar(50) NOT NULL,
	`phone` varchar(15) NOT NULL,
	`kodepos` varchar(6) NOT NULL,
	`alamat` varchar(50) NOT NULL, 
	`kota` varchar(20) NOT NULL,
	PRIMARY KEY (`id`)
);
