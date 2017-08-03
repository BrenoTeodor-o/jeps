<?php get_header(); ?>
<!--?php /* Template name: boletins */ ?-->
<section id="page">
	<div class="wrapper">
		<h1 class="text-center title"><?php echo "Boletins"; ?></h1>
	</div>
	<?php  
		$args = array(
			'post_type'				 => 'boletins',
			'posts_per_page'         => -1,
		);
	
		$my_query = new WP_Query( $args );
	
		while($my_query->have_posts()) : $my_query->the_post(); 
	?>
		<!-- 
		<div class="wrapper">
			<h2 class="text-center title">< the_title(); ?></h2>
		</div> -->
		<div class="container">
			<!--the_post_thumbnail(full); ?>-->
			<?php the_content(); ?>
			<hr>
				<a class="btn btn-veja-mais" target="_blank" href="<?php the_field('arquivo') ?>">Veja mais</a>
				<hr>
		</div>
	<?php endwhile; ?>
</section>
<?php get_footer(); ?>