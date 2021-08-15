<?php  

//IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessada diretaeemte.');

class UsuarioImagineModelUsuarios extends JModelList{

	public function __construct($config = array()){

		if(empty($config['filter_fields'])){

			$config['filter_fields'] = array(
				'id',
				'nome_usuario',
				'nome_completo',
				'email'
			);

		}

		parent::__construct($config);

	}

	public function getListQuery(){

		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		$query->select('*')->from('#__usuariosimagine');

		//CONFIGURAÇÕES DE FILTRO.

		//FILTRAR POR PESQUISA
		$filtroPesquisa = $this->getState('filter.search');
		if(!empty($filtroPesquisa)){

			$query->where('nome_completo LIKE '. $db->quote('%' . $filtroPesquisa . '%'));
		
		}

		$ordenarColuna = $this->state->get('list.ordering', 'nome_completo');
		$ordenarDirecao = $this->state->get('list.direction', 'ASC');

		$query->order($db->escape($ordenarColuna) . ' ' . $db->escape($ordenarDirecao));

		return $query;

	}

}

?>