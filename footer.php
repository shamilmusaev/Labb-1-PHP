
		<footer id="footer">
			
			<div class="container">
				<div class="row top">

			
					<div class="col-xs-12 col-sm-6 col-md-4">
					<?php dynamic_sidebar('bottom_sidebar') ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<?php dynamic_sidebar('bottom_sidebar2') ?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						
						
								<?php 
						wp_nav_menu( [
                          'theme_location' => 'bottom',
						  'container' => '',
						  'menu_class' => '',
						  'menu_id' => ''
						] );
						?>
							
							
						
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
		</footer>

	</div>

	<script src="js/script.js"></script>
<?php wp_footer(); ?>
</body>
</html>
