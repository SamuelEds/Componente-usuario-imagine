<?php  

//IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die("Essa página não pode ser acessada diretamente.");

class UsuarioImagineViewUsuarios extends JViewLegacy{

	public function display($tpl = null){

		$this->items = $this->get('Items');
		$this->paginacao = $this->get('Pagination');

		//$this->mensagem = "Um olá mundo para o administrador!";

		//DELCARAR VARIÁVEIS DE FILTRO.
		$this->state = $this->get('State');
		$this->filterForm = $this->get('FilterForm');
		$this->activeFilters = $this->get('ActiveFilters');

		parent::display($tpl);

		$this->setDocumento();
		$this->barraTarefas();
	}

	protected function setDocumento(){

		$documento = JFactory::getDocument();

		$documento->setTitle(JText::_('COM_USUARIOIMAGINE_TITULO_DOCUMENTO_ADMIN'));

	}

	protected function barraTarefas(){

		JToolbarHelper::title(JText::_('COM_USUARIOIMAGINE_TITULO_PRINCIPAL'));
		JToolbarHelper::addNew('usuario.add');
		JToolbarHelper::editList('usuario.edit');
		JToolbarHelper::deleteList('', 'usuarios.delete');
		JToolbarHelper::preferences('com_usuarioimagine');

	}

}

?>