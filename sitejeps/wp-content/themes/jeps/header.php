<?php wp_head(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo WP_TEMPLATE ?>/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#335b32">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#335b32">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="#335b32">
	<link rel="shortcut icon" type="image/png" href="<?php echo WP_TEMPLATE ?>/image/icon-header.png">
	<script type="text/javascript">
		var template_url 	= "<?php echo WP_TEMPLATE ?>";
		var contato_url 	= "<?php echo WP_URL ?>/wp-content/contato.php";
	</script>
	<title><?php echo wp_title('|', true, 'right') . WP_NAME; ?></title>
</head>
<body>
<header>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<a href="<?php echo WP_URL ?>/">
					<img class="img-responsive" src="<?php echo WP_TEMPLATE ?>/image/logo.jpg">
				</a>
			</div>
			<nav id="menu-desktop">
				<div class="col-sm-9">
					<ul class="pull-right">
						<li>
							<a href="<?php bloginfo('url' ); ?>/"> <i class="fa fa-home"></i> HOME</a>
						</li>
						<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=20">REGULAMENTO</a>
						</li>
						<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=24">CRONOGRAMA</a>
						</li>
						<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=13">BOLETINS</a>
						</li>
						<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=22">NOTAS OFICIAIS</a>
						</li>						
						<li>
							<a href="<?php bloginfo('url' ); ?>//?page_id=26">RESULTADOS</a>
						</li>
						<!--<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=28">INSCRIÇÕES</a>
						</li>-->
						<li>
							<a href="<?php bloginfo('url' ); ?>/?page_id=30">CONTATO</a>
						</li>
<!-- 						<div class="midias pull-right">
						<li>
							<a href="<?php bloginfo('url' ); ?>/"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="<?php bloginfo('url' ); ?>/"><i class="fa fa-instagram"></i></a>
						</li>
						<li>
							<a href="<?php bloginfo('url' ); ?>/"><i class="fa fa-linkedin"></i></a>
						</li>
							
						</div> -->
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div id="btn-mobile">
		<span></span>
		<span></span>
		<span></span>
	</div>
</header>
<nav id="menu-gaveta">
	<ul>
		<li>
			<a 	href="<?php bloginfo('url' ); ?>/"> <i class="fa fa-home"></i> HOME</a>
		</li>
		<li>
			<a href="<?php bloginfo('url' ); ?>/?page_id=20">REGULAMENTO</a>
		</li>
		<li>
			<a href="<?php bloginfo('url' ); ?>/?page_id=24">CRONOGRAMA</a>
		</li>
		<li>
			<a href="<?php bloginfo('url' ); ?>/?page_id=13">BOLETINS</a>
		</li>
		<li>
			<a href="<?php bloginfo('url' ); ?>/?page_id=22">NOTAS OFICIAIS</a>
		</li>
		<li>
			<a href="<?php bloginfo('url' ); ?>//?page_id=26">RESULTADOS</a>
		</li>
		<!--<li>
			<a href="<?php bloginfo('url' ); ?>/?page_id=28">INSCRIÇÕES</a>
		</li>-->
		<li>
			<a href="<?php bloginfo('url' ); ?>/?page_id=30">CONTATO</a>
		</li>
	</ul>
</nav>