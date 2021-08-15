<?php  

//IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

class UsuarioImagineViewUsuario extends JViewLegacy{

	protected $formulario = null;

	public function display($tpl = null){

		$this->formulario = $this->get('Form');
		$this->item = $this->get('Item');

		$this->state = $this->get('State');

		$this->setDocumento();
		$this->adicionarBarra();

		parent::display($tpl);
	}

	public function setDocumento(){

		//ESSA LINHA DE CÓDIGO É NECESSÁRIA PARA FAZER AS IMPORTAÇÕESA DE SCRIPTS.
		JHtml::_('behavior.framework');

		$documento = JFactory::getDocument();
		$documento->setTitle(JText::_('COM_USUARIOIMAGINE_TITULO_DOCUMENTO_ADMIN_GERENCIAR'));

		//IMPORTAR ARQUIVOS JS
		$documento->addScript('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
		$documento->addScript(JURI::root() . '/media/com_usuarioimagine/js/submitbutton.js');
		$documento->addScript('https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js');

	}

	protected function adicionarBarra(){

		$dadoNovo = ($this->item->id == 0);

		if($dadoNovo){

			$titulo = JText::_('COM_USUARIOIMAGINE_VIEW_GERENCIAR_TITULO_NOVO');

		}else{

			$titulo = JText::_('COM_USUARIOIMAGINE_VIEW_GERENCIAR_TITULO_EDITAR');

		}

		JToolbarHelper::title('Usuário Imagine: ' . $titulo, 'usuario');
		JToolbarHelper::apply('usuario.apply');
		JToolbarHelper::save('usuario.save', 'JTOOLBAR_SAVE');
		JToolbarHelper::cancel('usuario.cancel', $dadoNovo ? JText::_('JTOOLBAR_CLOSE') : JText::_('JTOOLBAR_CANCEL'));

		if(JComponentHelper::isEnabled('com_contenthistory') && $this->state->params->get('save_history', 0)){

			JToolbarHelper::versions('com_usuarioimagine.usuario', $this->item->id);

		}

	}

}

?>