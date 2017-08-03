<?php get_header(); ?>
<!--?php /* Template name: Regulamento */ ?-->

<section id="page">
	<div class="wrapper">
		<h1 class="text-center title"><?php echo "REGULAMENTO jep 2017"; ?></h1>
	</div>
	<?php  
		$args = array(
			'post_type'				 => 'regulamento',
			'posts_per_page'         => -1,
		);
	
		$my_query = new WP_Query( $args );
	
		while($my_query->have_posts()) : $my_query->the_post(); 
	?>
		<!--<div class="wrapper">
			<h1 class="text-center title">< the_title(); ?></h1>
		</div>-->
		<div class="container">
			<div class="col-sm-4 col-xs-12">
				<?php the_post_thumbnail(full, array('class' => 'img-responsive')); ?>
			</div>
			<div class="col-sm-8 hidden-xs">
				<?php echo conteudo(600); ?>
			</div>

			<!--the_content(); ?>-->
			
				<a class="btn btn-veja-mais" target="_blank" href="<?php the_field('arquivo') ?>">Abrir PDF</a>
				<hr>
		</div>
	<?php endwhile; ?>
</section>
<?php get_footer(); ?>