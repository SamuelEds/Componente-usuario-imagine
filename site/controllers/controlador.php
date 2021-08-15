<?php  

//IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

class UsuarioImagineControllerControlador extends JControllerAdmin{

	public function cancel($key = null){

		//parent::cancel($key);
		$aplicacao = JFactory::getApplication();
		$url = JUri::getInstance();
		
		$aplicacao->setUserState($this->option . '.edit.' . $this->context . '.data', null);
		$this->setRedirect((string) $url, JText::_('COM_USUARIOIMAGINE_REDIRECT_URL_CANCELAR'), 'cancel');

	}

	public function save($key = null, $urlVar = null){

		JSession::checkToken() or jexit(JText('JINVALID_TOKEN'));

		$aplicacao = JFactory::getApplication();
		$input = $aplicacao->input;
		$modelo = $this->getModel('login');
		$formulario = $modelo->getForm();
		$dados = $input->get('jform', array(), 'ARRAY');
		$context = "$this->option.edit.$this->context";

		$validarDados = $modelo->validate($formulario, $dados);

		if(!$validarDados){

			$this->setRedirect((string) JUri::getInstance(), JText::_('COM_USUARIOIMAGINE_REDIRECT_URL_INVALID_DATA'), 'error');

			$aplicacao->setUserState($context.'.data', $dados);

			return false;

		}

		if(!$modelo->save($validarDados)){

			$aplicacao->setUserState($context . '.data', $validarDados);

			$this->setRedirect((string) JUri::getInstance(), JText::_('COM_USUARIOIMAGINE_REDIRECT_URL_ERROR_SALVAR'), 'error');

			return false;
		}


		$aplicacao->setUserState($context . '.data', null);
		$this->setRedirect((string) JUri::getInstance(), JText::_('COM_USUARIOIMAGINE_DADOS_SALVOS'), 'message');

		return true;

	}

}

?>