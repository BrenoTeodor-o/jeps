<article id="noticias">
	<div class="container">
		<h2 class="text-center">Notas Oficiais</h2>

		<div class="row">
				<?php  
			$args = array(
				'post_type'				 => 'notasOficiais',
				'posts_per_page'         => 3,
			);
		
			$my_query = new WP_Query( $args );
		
			while($my_query->have_posts()) : $my_query->the_post(); 
		?>
		<div class="col-sm-4">
				<div class="box">
					<a href="" class="post">
						<figure>
							<?php the_post_thumbnail(full, array('class' => 'img-responsive')); ?>
						</figure>
					</a>
					<div class="box-info">
						<h3><?php the_title(); ?></h3>

						<p><?php echo conteudo(); ?></p>
						<a class="btn btn-veja-mais" target="_blank" href="<?php the_permalink(); ?>">Veja mais</a>
					</div>
				</div>
			</div>
		<?php endwhile; ?>

		</div>
	</div>
</article>