<?php

/* Template name: Undersida2 */

 get_header() ?>

		


		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
						<?php the_content() ?>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
							<ul class="side-menu">
								<li>
								<a <?php 
						wp_nav_menu( [
                          'theme_location' => 'left',
						  'container' => '',
						  'menu_class' => '',
						  'menu_id' => ''
						] );
						?>></a>
								</li>
								
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>
			<?php get_footer() ?>
