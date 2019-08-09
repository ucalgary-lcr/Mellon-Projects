</main>
<footer class="container-fluid">
	<div id="footer" class="row">
		<div class="container">
			<div class="row">
				<div id="footer-special" class="col-md-4 col-md-push-4">

				</div>
				<div id="footer-links" class="col-md-4 col-md-pull-4">
				<?php //do_action( 'wpml_footer_language_selector'); ?>

				</div>
				<div id="footer-deets" class="col-md-4">
					<p class="small address"><a href="<?php if(ICL_LANGUAGE_CODE=='en') echo '/site-map'; else echo '/carte-site/?lang=fr'; ?>">Site Map</a><br></p>
					<p class="small copyright">
						<a href="<?php if(ICL_LANGUAGE_CODE=='en') echo '/copyright'; else echo '/droits-dauteur/?lang=fr'; ?>">&copy; University of Calgary <?php echo date("Y"); ?>. All Rights Reserved.</a>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
<script>
	jQuery(function($) {
		$('.navbar .dropdown').hover(function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
		}, function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
		});
		$('.navbar .dropdown > a').click(function(){
			location.href = this.href;
		});
	});
	// $('#menu-item-443 a').html( "<i class='fas fa-user'></i> Client Portal" );
	jQuery(document).ready(function($){
		$('.nav li a').removeAttr('title');
	});
	jQuery(window).load(function() {
      
  	});
</script>
<script src="/wp-content/themes/ucalgary/bootstrap/js/mustache.min.js"></script>

		<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>
</html>
