</main>
<footer class="container-fluid">
	<div id="footer" class="row">
		<div class="container">
			<div class="row">
				<div id="footer-special" class="col-md-4 col-md-push-4">
					<p class="small">Historic maps derived from Ordnance Survey (1919-1947) Map Series (One-inch to the mile – 1:1 million) by the <a href="https://www.nls.uk/" taget="_blank">National Library of Scotland</a></p>

					<?php
					if(is_front_page() == true) {echo'
						<hr>
					<p class="small">
					Banner image shows an early panoramic photograph of Piccadilly Circus, London. Anonymous, The Premier Photographic View Album of London, 1907. Image courtesy of Lee Jackson, <a href="https://www.victorianlondon.org" target="_blank">www.victorianlondon.org</a>.
					</p>';}
						else{echo'';}
					?>
				</div>
				<div id="footer-links" class="col-md-4 col-md-pull-4">

				</div>
				<div id="footer-deets" class="col-md-4">
					<p class="small address"><a href="/site-map">Site Map</a><br></p>
					<p class="small copyright">
						<a href="/copyright">© University of Calgary. All Rights Reserved.</a>
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
	jQuery(document).ready(function($){
  	$('.nav li a').removeAttr('title');
});
$(".card ul").addClass("list-unstyled list-inline");
$(".card ul").css("padding-left","10px");
</script>

<script src="https://libapps.ucalgary.ca/Springshare/src/js/mustache.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular.min.js"></script>
<script src="https://libapps.ucalgary.ca/Springshare/cdm/app.js"></script>
<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>
