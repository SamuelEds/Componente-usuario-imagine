<?php  

//IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

class UsuarioImagineControllerUsuarios extends JControllerAdmin{

	public function getModel($nome = 'Usuario', $prefix = 'UsuarioImagineModel', $config = array('ignore_request' => true)){

		$model = parent::getModel($nome, $prefix, $config);

		return $model;

	}

}

?>