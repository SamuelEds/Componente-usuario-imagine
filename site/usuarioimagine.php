<?php  

//IMPEDIR O ACESSO DIRETO
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

$controle = JControllerLegacy::getInstance('UsuarioImagine');
$entrada = JFactory::getApplication()->input;

$controle->execute($entrada->getCmd('task'));
$controle->redirect();

?>
