<?php  

//IMPEDIR O ACESSO DIRETO.
defined('_JEXEC') or die('Essa página não pode ser acessada diretamente.');

?>

<form action="<?php echo JRoute::_('index.php?option=com_usuarioimagine&layout=edit&id=' . (int) $this->item->id); ?>" method="post" id="adminForm" name="adminForm" class="form-validate">
	
	<div class="formulario-corpo usuario">
		<legend><?php echo JText::_('COM_USUARIOSIMAGINE_FIELDSET_EDIT_GERENCIAR'); ?></legend>
		<div class="campos">
			<?php echo $this->formulario->renderFieldset('editar'); ?>
		</div>
	</div>

	<div class="formulario-corpo configuracoes">
		<legend><?php echo JText::_('COM_USUARIOSIMAGINE_FIELDSET_PARAMS_GERENCIAR');?></legend>
		<div class="campos">
			
			<?php echo $this->formulario->renderFieldset('params'); ?>
				
		</div>
	</div>

	<div>
		
		<?php echo $this->formulario->getInput('description'); ?>

	</div>

	<input type="hidden" name="task" value="usuario.edit" />

	<?php echo JHtml::_('form.token'); ?>

</form>

<script type="text/javascript">
	$(".telefone").mask("(00) 0 0000-0000");
</script>