<?php  

//IMPEDI O ACESSO DIRETO.
defined('_JEXEC') or die("Essa página não pode ser acessada diretamente.");

?>

<form action="<?php echo JRoute::_('index.php?option=com_usuarioimagine&view=login&layout=edit'); ?>" method="post" id="adminForm" class="adminForm">
	
	<h2 class="titulo-formulario"><?php echo JText::_('COM_USUARIOIMAGINE_TITULO_FORMULARIO'); ?></h2>

	<div class="formulario">
		
		<?php echo $this->formulario->renderFieldset('detalhes_cadastro'); ?>

	</div>

	<div class="footer-botoes">
		
		<div class="row">
			
			<div class="col-md-6">
				<button class="btn btn-success" onclick="Joomla.submitbutton('controlador.save');"><?php echo JText::_('JSAVE'); ?></button>
			</div>
			<br>
			<div class="col-md-6">
				<button class="btn btn-cancel" onclick="Joomla.submitbutton('controlador.cancel');"><?php echo JText::_('JCANCEL'); ?></button>
			</div>

		</div>

	</div>

	<input type="hidden" name="task" />

	<?php echo JHtml::_('form.token'); ?>
	
</form>


<script type="text/javascript">
	$(".telefone").mask("(00) 0 0000-0000");
</script>