<?php  

//IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

class UsuarioImagineModelUsuario extends JModelAdmin{

	public $typeAlias = 'com_usuarioimagine.usuario';

	public function getTable($nome = 'Usuario', $prefix = 'UsuarioImagineTable', $config = array()){

		return JTable::getInstance($nome, $prefix, $config);

	}

	public function getForm($dados = array(), $carregarDados = true){

		$formulario = $this->loadForm('com_usuarioimagine.usuario', 'usuario', array('control' => 'jform', 'load_data' => $carregarDados));

		if(empty($formulario) || !isset($formulario)){

			$formulario = null;

			return "Formulário não encontrado";

		}

		return $formulario;

	}

	protected function loadFormData(){

		$dados = JFactory::getApplication()->getUserState('com_usuarioimagine.edit.usuario.data', array());

		if(empty($dados) || !isset($dados)){

			$dados = $this->getItem();

		}

		return $dados;

	}

}

?>