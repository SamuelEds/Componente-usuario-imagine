#INSTALAR O BANCO DE DADOS

DROP TABLE IF EXISTS `#__usuariosimagine`;

CREATE TABLE `#__usuariosimagine` (

	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`nome_usuario` VARCHAR(255) NOT NULL DEFAULT '',
	`nome_completo` VARCHAR(255) NOT NULL DEFAULT '',
	`description` VARCHAR(255) NOT NULL DEFAULT '',
	`email` VARCHAR(255) NOT NULL DEFAULT '',
	`telefone` VARCHAR(200) NOT NULL DEFAULT '',
	`params` VARCHAR(255) NOT NULL DEFAULT '',
	PRIMARY KEY(`id`)

) DEFAULT CHARSET = utf8;

INSERT INTO `#__usuariosimagine` (`nome_usuario`, `nome_completo`, `email`, `telefone`)
VALUES 
('Samuca Gameplays', 'Samuel Edson Ribeiro Sampaio', 'samuel@gmail.com', '(56) 3 3216-3256');

INSERT INTO `#__content_types` (`type_title`, `type_alias`, `content_history_options`)
VALUES 
('UsuarioImagine', 'com_usuarioimagine.usuario',
	'{"formFile": "administrator\\/components\\/com_usuarioimagine\\/models\\/forms\\/usuario.xml",
			"hideFields": ["nome_usuario", "email", "telefone"],
			"ignoreChanges": [],
			"convertToInt": [],
			"displayLookup": [

			{"sourceColumn": "created_by", "targetTable": "#__users", "targetColumn": "id", "displayColumn": "name"},
			{"sourceColumn": "id", "targetTable": "#__usuariosimagine", "targetColumn": "id", "displayColumn": "nome_completo"}

		]
	}'

);