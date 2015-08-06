<?php get_header(); ?>

<?php include (TEMPLATEPATH. '/slideshow.php'); ?>



	
	<?php query_posts("paged=$paged"); ?>
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
		<p><?php the_excerpt(); ?></p>
	</article>

 	<?php endwhile; else: ?>
 	<h1>no se encontro articulos</h1>
 	<?php endif; ?>

 	<div id="pagination">
 		<p>
 			<?php next_post_link('>') ?>
 			<?php previous_post_link('<') ?>
 		</p>
	</div>
<?php get_footer(); ?>
      <section class="home">

        <div id="slider2" >
            <img class="img-slider2" src="<?php bloginfo('template_url')?>/images/bolso.png">
            <img class="img-slider2" src="<?php bloginfo('template_url')?>/images/vaticano.jpg">
        </div>
    </section>
    <section class="home">

        <div id="slider3" >
            <img class="img-slider2" src="<?php bloginfo('template_url')?>/images/vaticano.jpg">
            <img class="img-slider2" src="<?php bloginfo('template_url')?>/images/bolso.png">
        </div>
    </section>
<?php get_sidebar(); ?>


</body>
</html>