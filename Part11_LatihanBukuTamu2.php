CREATE TABLE `bukutamu` (
	`id` int(11) NOT NULL auto_increment,
	`tanggal` int(11) NOT NULL,
	`nama` varchar(50) NOT NULL,
	`email` varchar(50) NOT NULL,
	`website` varchar(100) NOT NULL,
	`pesan` text NOT NULL,
	PRIMARY KEY  (`id`)