<article id="sobre">
	<div class="container">
		<h1 class="text-center">Regulamento</h1>
		<?php  
			$args = array(
				'post_type'				 => 'regulamento',
				'posts_per_page'         => 1,
			);
		
			$my_query = new WP_Query( $args );
		
			while($my_query->have_posts()) : $my_query->the_post(); 
		?>
		<div class="row">
			<div class="col-sm-4">
				<?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?>
			</div>
			<div class="col-sm-8">
				<h2><?php the_title(); ?></h2>
				<p><?php echo conteudo(); ?></p>
				<hr>
				<a class="btn btn-veja-mais" target="_blank" href="<?php the_field('arquivo') ?>">Abrir PDF</a>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
</article>