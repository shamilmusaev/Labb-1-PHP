<?php

/* Template name: Undersida4 */

 get_header() ?>
		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
						<?php the_content() ?>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
						<img src="<?php echo get_the_post_thumbnail_url();?>"  alt="picture here"> 
						</div>
					</div>
				</div>
			</section>
		</main>
	<?php get_footer() ?>
