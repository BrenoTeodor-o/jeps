<?php wp_footer(); ?>
<footer>
	<div class="container">
		<div class="row itens-footer">
			<div class="col-sm-3">
				<h5>NAVEGAÇÃO</h5>
				<ul>
					<li>
					<a href="<?php bloginfo('url' ); ?>/"> <i class="fa fa-home"></i> HOME</a>
						</li>
						<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=20">REGULAMENTO</a>
						</li>
						<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=24">CRONOGRAMA</a>
						</li>
						
						
						
				</ul>
			</div>
			<div class="col-sm-3">
				<!--<h5>NAVEGAÇÃO</h5>-->
				<br>
				<ul>
						<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=13">BOLETINS</a>
						</li>
						<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=22">NOTAS OFICIAIS</a>
						</li>
					
						<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=26">RESULTADOS</a>
						</li>
						<!--<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=28">INSCRIÇÕES</a>
						</li>-->
						<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=30">CONTATO</a>
						</li>
				</ul>
			</div>
			<div class="col-sm-3">

			</div>
		</div>
	</div>
	<div id="copyright">
		<div class="container">
			<p class="text-center"><a href="http://ejes.com.br" target="_blank">Desenvolvido por Empresa Júnior de Engenharia de Software</a></p>
		</div>
	</div>
</footer>
<div class="script">
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCAKUTbamk1pEER1vty-_nB2UHYKnO37Y&libraries=places"></script>
	<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/script.min.js"></script>
</div>
</body>
</html>