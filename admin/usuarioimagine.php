<?php  

//IMPEDIR O ACESSO DIRETO
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

$controle = JControllerLegacy::getInstance('UsuarioImagine');
$input = JFactory::getApplication()->input;

$controle->execute($input->get('task'));
$controle->redirect();

?>