<?php  

//IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die("Essa página não pode ser acessada diretamente.");

JHtml::_('formbehavior.chosen', 'select');

$listaColuna = $this->escape($this->state->get('list.ordering'));
$listaDirecao = $this->escape($this->state->get('list.direction'));

?>

<form action="<?php echo JRoute::_('index.php?option=com_usuarioimagine&view=usuarios'); ?>" method="post" id="adminForm" name="adminForm">

	<div class="barra-filtros">
		
		<legend><?php echo JText::_('COM_USUARIOIMAGINE_LEGEND_TITULO_FILTROS'); ?></legend>

		<?php echo JLayoutHelper::render('joomla.searchtools.default', array('view' => $this)); ?>

	</div>
	
	<table class="table table-strippe-table-hover">
		
		<thead>
			<tr>
				<td><?php echo JText::_('COM_USUARIOIMAGINE_USUARIOS_NUMERACAO'); ?></td>
				<td><?php echo JHtml::_('grid.checkall'); ?></td>
				<td><?php echo JHtml::_('searchtools.sort', 'COM_USUARIOIMAGINE_USUARIOS_NOME_USUARIO', 'nome_usuario', $listaDirecao, $listaColuna); ?></td>
				<td><?php echo JHtml::_('searchtools.sort', 'COM_USUARIOIMAGINE_USUARIOS_NOME_COMPLETO', 'nome_completo', $listaDirecao, $listaColuna); ?></td>
				<td><?php echo JHtml::_('searchtools.sort', 'COM_USUARIOIMAGINE_USUARIOS_EMAIL', 'email', $listaDirecao, $listaColuna); ?></td>
				<td><?php echo JText::_('COM_USUARIOIMAGINE_USUARIOS_TELEFONE'); ?></td>
				<td><?php echo JHtml::_('searchtools.sort', 'COM_USUARIOIMAGINE_USUARIOS_ID', 'id', $listaDirecao, $listaColuna); ?></td>
			</tr>
		</thead>

		<tbody>
			
			<?php if(!empty($this->items)){ ?>

				<?php foreach($this->items as $i => $dados){ 

					$link = JRoute::_('index.php?option=com_usuarioimagine&task=usuario.edit&id=' . $dados->id);

					?>


					<tr>
						<td><?php echo $this->paginacao->getRowOffset($i); ?></td>
						<td><?php echo JHtml::_('grid.id', $i, $dados->id); ?></td>
						<td><a href="<?php echo $link; ?>"><?php echo $dados->nome_usuario; ?></a></td>
						<td><?php echo $dados->nome_completo; ?></td>
						<td><?php echo $dados->email; ?></td>
						<td><?php echo $dados->telefone; ?></td>
						<td><?php echo $dados->id; ?></td>
					</tr>

				<?php } ?>

			<?php } ?>

		</tbody>

		<tfoot>
			<?php echo $this->paginacao->getListFooter(); ?>
		</tfoot>

	</table>

	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />

	<?php echo JHtml::_('form.token'); ?>

</form>
