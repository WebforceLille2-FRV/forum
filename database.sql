CREATE TABLE `users` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    /*`nom` VARCHAR(60) NOT NULL,
    `prenom` VARCHAR(60) NOT NULL,*/
    `username` VARCHAR(80) NOT NULL,
    `password` BINARY(40) NOT NULL,
    `email` VARCHAR(80) NOT NULL,
    `role` ENUM('Admin', 'Util') NOT NULL DEFAULT 'Util',
    `token` TINYINT(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`),
    UNIQUE KEY (`username`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE `posts` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    /*`nom` VARCHAR(60) NOT NULL,
    `prenom` VARCHAR(60) NOT NULL,*/
    `title` VARCHAR(80) NOT NULL,
    `content` VARCHAR(255) NOT NULL,
    `username` VARCHAR(80) NOT NULL,
    `answer` VARCHAR(80) NOT NULL,
    `date` DATE(y:m:s) NOT NULL,
    `token` TINYINT(1) NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`),
    UNIQUE KEY (`username`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

INSERT INTO `users`(`username`, `password`, `email`, `role`) VALUES('fredo', MD5('ronron', 'fredericsoude59000@gmail.com', 'admin');
















