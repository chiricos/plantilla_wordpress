<?php get_header(); ?>


<?php get_footer(); ?>

	<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<article>
		<div class="thumb">
			<a href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail('list_articles_thumbs'); } ?>
			</a>
			
		</div>
		
		<a href="<?php the_permalink(); ?>">
			<h2><?php the_title();?></h2>
		</a>
		<p><span>fecha:</span><?php the_date(); ?></p>
		<p><span>categoria:</span><?php the_category(); ?></p>
		<p><?php the_content(); ?></p>
	</article>

 	<?php endwhile; else: ?>
 	<h1>no se encontro articulos</h1>
 	<?php endif; ?>


</body>
</html>