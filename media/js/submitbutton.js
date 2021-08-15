Joomla.submitbutton = function(task){

	tarefas = task.split('.');

	if(tarefas[1] != 'cancel' && tarefas[1] != 'close'){

		nome_usuario = $('.nome_usuario').val();
		nome_completo = $('.nome_completo').val();
		email = $('.email').val();
		telefone = $('.telefone').val();
		
		usuario = email.substring(0, email.indexOf('@'));
		dominio = email.substring(email.indexOf('@') + 1, email.length);

		if(nome_usuario.length != 0 && nome_completo.length != 0 
			&& email.length != 0){

			if(telefone != 0){

				if(telefone.length == 16){

					if(usuario.length >= 1 
						&& dominio.length >= 3 
						&& usuario.search('@') == -1 
						&& dominio.search('@') == -1
						&& usuario.search(' ') == -1
						&& dominio.search(' ') == -1
						&& usuario.search('.') != -1
						&& dominio.indexOf('.') >= 1
						&& dominio.lastIndexOf('.') < dominio.length - 1
						){

						Joomla.submitform(task);

						return true;
					
				}else{

					alert('E-mail inválido');

					return false;

				}
			}else{

				alert('Telefone inválido');

				return false;

			}
		}else{

			if(usuario.length >= 1 
				&& dominio.length >= 3 
				&& usuario.search('@') == -1 
				&& dominio.search('@') == -1
				&& usuario.search(' ') == -1
				&& dominio.search(' ') == -1
				&& usuario.search('.') != -1
				&& dominio.indexOf('.') >= 1
				&& dominio.lastIndexOf('.') < dominio.length - 1
				){

					Joomla.submitform(task);

					return true;
					
				}else{

					alert('E-mail inválido');

					return false;

				}

			}

		}else{

			alert('Campos em branco.');

			return false;

		}

	}else{

		Joomla.submitform(task);

	}

}