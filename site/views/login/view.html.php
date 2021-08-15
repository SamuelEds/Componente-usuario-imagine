<?php  

//IMPEDIR O ACESSO DIRETO
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

class UsuarioImagineViewLogin extends JViewLegacy{

	protected $formulario = null;

	public function display($tpl = null){

		$this->formulario = $this->get('Form');

		//$this->mensagem = "Um olá mundo para o usuário!";

		$this->setDocumento();

		parent::display($tpl);

	}

	public function setDocumento(){

		//IMPORTAR DEPENDÊNCIAS.
		JHtml::_('behavior.framework');

		$documento = JFactory::getDocument();

		//IMPORTAR SCRIPTS
		$documento->addScript('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
		$documento->addScript(JURI::root() . '/media/com_usuarioimagine/js/submitbutton.js');
		$documento->addScript('https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js');

	}
}

?>