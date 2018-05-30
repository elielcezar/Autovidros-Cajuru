<?php include "header.tpl.php"; ?>


<section class="banner">
<div id="banners" class="carousel slide" data-ride="carousel">        
	<?php print views_embed_view('banners_home', 'default'); ?>
</div>

</section>	

<section class="orcamento-online">
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<h3>Solicite um Orçamento</h3>
				<p>Preencha seus dados e retornaremos para agendarmos sua visita</p>
			</div>
			<div class="col-sm-8">
				<?php
					$block = module_invoke('webform', 'block_view', 'client-block-3');
					print render($block['content']);
				?>
			</div>
		</div>
	</div>
</section>
	


<div id="principal">
		

			<?php if ($messages): ?>
	          <div id="messages">
	            <?php print $messages; ?>
	          </div> <!-- /.section, /#messages -->          
	          <?php endif; ?>
	          <?php if ($tabs): ?>
	            <div class="tabs">
	              <?php print render($tabs); ?>
	            </div>
	        <?php endif; ?> 

	    <section class="sobre">
	    	<div class="container">
		    	<div class="row">
					<div class="col-sm-5" data-aos="fade-right">
						<h3>Há mais de 30 anos no mercado</h3>
						<p>A auto vidros cajuru iniciou suas atividades em 1985 atuando como especialista em vidros automotivos e trabalha com produtos originais para que seja mantida toda a segurança do automóvel. Contamos com o atendimento de profissionais treinados e aptos a atender nossos clientes com um serviço ágil e de qualidade.</p>
						<p>Executamos reparo e troca de vidros em veículos nacionais, importados, máquinas pesadas e caminhões. Além disso, realizamos a troca de acessórios automotivos como faróis, retrovisores e lanternas. Contando com uma grande variedade de produtos a empresa ingressa no mercado de distribuição de vidros automotivos e ferramentas para remoção e instalação.</p>
					</div>
					<div class="col-sm-7" data-aos="fade-left">
						<img class="img-responsive" src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/autovidros17/img/local.jpg" />
					</div>
				</div>
			</div><!-- container -->
	    </section>	

	    <section class="servicos">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-sm-6" data-aos="fade-right">
						<img class="img-responsive" src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/autovidros17/img/servicos.jpg" />
					</div>
					<div class="col-sm-6" data-aos="fade-left">
						<h3>Nossos Serviços</h3>
						<ul>
							<li>REPARO DE MAQUINAS ELETRICAS E MANUAIS </li>
							<li>CONSERTO DE FECHADURAS ELETRICAS E MANUAIS</li>
							<li>REPARO DE PARA-BRISA</li>
							<li>POLIMENTO DE VIDROS</li>
							<li>CRISTALIZAÇÃO PARA-BRISA E VIGIA</li>
							<li>VERIFICAÇÃO DE ENTRADA DE AGUA EM VEICULOS</li>
							<li>GRAVAÇÃO DO NUMERO CHASSI NO VIDRO</li>
							<li>POLIMENTO DE FAROIS </li>
							<li>CONSERTO ESPELHO RETROVISORES</li>
							<li>ANTIBAÇANTE PARA-BRISA</li>
							<li>INSTALAÇÃO DE MODULO DE LEVANTAMENTO DE VIDROS </li>
							<li>INSTALAÇÃO DE SENSOR DE RÉ</li>
						</ul>
					</div>				
				</div>
			</div><!-- container -->
	    </section>	

	    <section class="produtos">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-sm-5" data-aos="fade-right">
		    			<h3>Acessórios / Produtos</h3>
						<ul>
							<li>VIDROS PARA AUTOMOVEIS VANS E CAMINHOES NACIONAIS E IMPORTADOS </li>
							<li>BORRACHAS E CANALETAS DE VIDROS</li>
							<li>FRISOS</li>
							<li>ESPELHO RETROVISOR E LENTES</li>
							<li>PALHETAS DO LIMPADOR</li>
							<li>FAROIS LAMPADOS E LANTERNAS</li>
							<li>FECHADURAS E MAÇANETAS PARA PORTAS</li>
							<li>ALARMES E TRAVAS ELETRICAS CAMERA DE RÉ ANTI-FURTO</li>
							<li>MAQUINA DE VIDROS ELETRICAS E MANUAIS</li>
							<li>PELICULAS SOLAR ( INSULFILM)</li>
							<li>CALHA DE CHUVA</li>
						</ul>					
					</div>
					<div class="col-sm-7" data-aos="fade-left">
						<img class="img-responsive" src="<?php print $GLOBALS['base_path']; ?>sites/all/themes/autovidros17/img/produtos.jpg" />
					</div>				
				</div>
			</div><!-- container -->
	    </section>	

	    <section class="parceiros">
	    	<div class="container">
			    	<div class="row">	    		
						<div class="col-sm-12">
							
						</div>				
					</div>
			</div>
	    </section>	

	
</div><!-- principal -->
 
<div class="mapa">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.849843384148!2d-49.22159912787696!3d-25.443283168793908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce56d7c6a1c5f%3A0xb64dcfc7b3762380!2sR.+Reinaldo+Th%C3%A1%2C+255+-+Cajuru%2C+Curitiba+-+PR%2C+82900-210!5e0!3m2!1spt-BR!2sbr!4v1506703184544" width="100%" height="425" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

 <?php include "footer.tpl.php"; ?>