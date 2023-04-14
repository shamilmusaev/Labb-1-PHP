<?php

/* Template name: Undersida */

 get_header() ?>
 <div id="wrap">
		

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
						<?php the_content() ?>
						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
								<li >
									<a <?php 
						wp_nav_menu( [
                          'theme_location' => 'right',
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
		</div>



			<?php get_footer() ?>
