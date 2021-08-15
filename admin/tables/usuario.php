<?php  

//IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessa diretamente.');

class UsuarioImagineTableUsuario extends JTable{

	public function __construct($db){

		JObserverMapper::addObserverClassToClass('JTableObserverContenthistory', 'UsuarioImagineTableUsuario', array('typeAlias' => 'com_usuarioimagine.usuario'));

		parent::__construct('#__usuariosimagine', 'id', $db);

	}

	//SOBRECARREGAR MÉTODO PARA CARREGAR OS DADOS EM STRING
	public function bind($array, $ignore = ''){

		if(isset($array['params']) && is_array($array['params'])){

			//CONVERTER O CAMPO PARÂMETROS PARA STRING.
			$parametros = new JRegistry;
			$parametros->loadArray($array['params']);
			$array['params'] = (string) $parametros;
		}

		return parent::bind($array, $ignore);

	}

}

?>