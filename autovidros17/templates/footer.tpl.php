
<!-- FOOTER-->

<footer>
	<div class="container">
		<div class="col-sm-6">
			<div class="row">
				<div class="col-sm-12">
					<img class="img-responsive" src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/autovidros17/img/logo-rodape.png" />
				</div>
				<div class="col-sm-12">
					<p><strong>Horário de Funcionamento:</strong></p>
					<p>
						Segunda à Sexta das 8h30 às 18h00<br/>
						Sábado das 8h30 às 13h00
					</p>
					<p><strong>Telefone:</strong><br/>
					<p>(41) 3267-3342</p>
					<p>(41) 3266-9040</p>
					<p><strong>Endereço:</strong><br/>
					Rua Reinaldo Thá, 255  | Cajuru | Curitiba - PR</p>
				</div>

			</div>
		</div>
		<div class="col-sm-6">
			<h3>Contato</h3>
			<?php
				$block = module_invoke('webform', 'block_view', 'client-block-4');
				print render($block['content']);
			?>
		</div>
	</div>
</footer>

<!--/ CONTENT -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>

<script>
	AOS.init({
		easing: 'ease-out-back',
		duration: 1000,
		offset: 200
	});
</script>

<script src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/autovidros17/js/jquery.maskedinput.min.js" type="text/javascript"></script>

<script type="text/javascript">
jQuery(document).ready(function ($) {
	$.mask.definitions['~'] = "[+-]";
	$("#edit-submitted-data-de-preferencia").mask("99/99/9999");
});
</script>
