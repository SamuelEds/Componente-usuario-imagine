# ARQUIVO DE DESINSTALAÇÃO DO BANCO DE DADOS

DROP TABLE IF EXISTS `#__usuariosimagine`;

DELETE FROM `#__ucm_history` WHERE `ucm_type_id` IN
(SELECT `type_id` FROM `#__content_types` WHERE `type_alias` = 'com_usuarioimagine.usuario');

DELETE FROM `#__content_types` WHERE `type_alias` = 'com_usuarioimagine.usuario';