CREATE TABLE IF NOT EXISTS `accounts` (
	`id` int(20) NOT NULL AUTO_INCREMENT,
  	`username` varchar(20) NOT NULL,
  	`password` varchar(255) NOT NULL,
  	`email` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `accounts` (`id`, `username`, `password`) VALUES (1, 'admin', 'admin')