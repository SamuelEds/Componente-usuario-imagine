<?php  

//IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die("Essa página não pode ser acessada diretamente.");

class UsuarioImagineModelLogin extends JModelAdmin{

	public function getTable($name = 'Usuario', $prefix = 'UsuarioImagineTable', $config = array()){

		return JTable::getInstance($name, $prefix, $config);

	}

	public function getForm($dados = array(), $carregarDados = true){

		$formulario = $this->loadForm('com_usuarioimagine.login', 'cadastro', array('control' => 'jform', 'load_data' => $carregarDados));

		if(empty($formulario)){
			$erros = $this->getErrors();
			throw new Exception(implode('<br/>', $erros));
			throw new Exception('Formulário não foi encontrado!');
		}

		return $formulario;
	}

	protected function loadFormData(){

		$dados = JFactory::getApplication()->getUserState('com_usuarioimagine.edit.controlador.data', array());

		if(empty($dados)){
			$dados = $this->getItem();
		}

		return $dados;

	}

}

?>