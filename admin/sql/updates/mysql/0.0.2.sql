#INSTALAR O BANCO DE DADOS

DROP TABLE IF EXISTS `#__usuariosimagine`;

CREATE TABLE `#__usuariosimagine` (

	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nome_usuario` VARCHAR(255) NOT NULL DEFAULT '',
	`nome_completo` VARCHAR(255) NOT NULL DEFAULT '',
	`email` VARCHAR(255) NOT NULL DEFAULT '',
	`telefone` VARCHAR(200) NOT NULL DEFAULT '',
	PRIMARY KEY(`id`)

) DEFAULT CHARSET = utf8;