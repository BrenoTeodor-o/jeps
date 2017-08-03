<?php get_header(); ?>
<!--?php /* Template name: Notas Oficiais */ ?-->
<section id="page">
		<div class="wrapper">
			<h1 class="text-center title">Notas Oficiais</h1>
		</div>
	<?php  
		$args = array(
			'post_type'				 => 'notasOficiais',
			'posts_per_page'         => -1,
		);
	
		$my_query = new WP_Query( $args );
	
		while($my_query->have_posts()) : $my_query->the_post(); 
	?>
			<h2 class="text-center title"><?php the_title(); ?></h2>
		<div class="container">
			<?php the_content(); ?>
			<hr>
				<a class="btn btn-veja-mais" target="_blank" href="<?php the_field('arquivo') ?>">Veja mais</a>
			<hr>
		</div>
	<?php endwhile; ?>
</section>
<?php get_footer(); ?>