
<?php

/* Template name: Blogg */

 get_header() ?>


		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Blogg</h1>


							<article>

                           
			
							<?php
$args = array(
  'post_type'      => 'post',
  'posts_per_page' => 4,
  'paged'          => $paged,
);
$wp_query = new WP_Query( $args );
?>

<?php if ( $wp_query->have_posts() ) : ?>
<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
<img src="<?php echo get_the_post_thumbnail_url();?>"  alt="picture here">
<h2 class="title"><?php the_title() ?></h2>
<ul class="meta">
	<li>
	<i class="fa fa-calendar"></i> <?php the_time('j F Y'); ?>
	</li>
	<li>
	<i class="fa fa-user"></i> <?php the_author(); ?></a>
	</li>
	<li>
	<i class="fa fa-tag"></i> <a><?php the_category(); ?></a>
	</li>
	</ul>
<p><?php the_content(); ?></p>
<?php endwhile; ?>
<?php endif; ?>

					

								
								
							</article>

							


														





					


							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>



						<aside id="secondary" class="col-xs-12 col-md-3">
						
						<?php get_sidebar() ?>
						</aside>
					</div>
				</div>

				
			</section>
		</main>










		
			<?php get_footer() ?>
