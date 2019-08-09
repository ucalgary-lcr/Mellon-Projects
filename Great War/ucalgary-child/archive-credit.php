<?php get_header(); /* Template Name: Credit Template */ ?>
<div class="fieldable-panels-pane container-fluid brick text-cta">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="row-md-height">
          <div class="col-md-3 col-md-height col-md-middle vspacer-xs vspacer-sm headline">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="col-md-9 col-md-height col-md-middle description">
						<p>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
								the_content();
								endwhile; else: ?>
								<p>Sorry, no posts matched your criteria.</p>
							<?php endif; ?>
						</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="fieldable-panels-pane container-fluid brick margin-lg-top">
	<div class="row margin-md-bottom">
		<?php
		query_posts(array('post_type' => 'credit', 'posts_per_page' => 999, 'orderby' => 'title', 'order' => 'ASC'));
		if (have_posts()) {

			$counter = 1;
				while (have_posts() ) : the_post();
					$name = get_the_title();
					$content = get_the_content();
					$bioLink = post_permalink();
					$profileImage = get_the_post_thumbnail_url();

							echo ("
								<div class='col-md-3 text-center margin-sm-bottom'>
									<div class='img-container'>
										<a href='". $bioLink ."'><img src='$profileImage' tabindex='0' class='img-circle img-responsive center-block profile-img-size' alt='$name' /></a>
									</div>
									<h3 tabindex='0'><h3 tabindex='0'><a href='". $bioLink ."'>$name</a></h3></h3>
									<p tabindex='0'>$content</p>
								</div>
								");

							if ( $counter % 4 == 0 ){
								echo"</div><div class='row' style='margin-bottom:50px;margin-top:50px;'>";
							}
							$counter++;

					endwhile;
					}else{
							echo('Broken');
					}
   			?>
  </div>
</div>

<script>
var userAgent, ieReg, ie;
userAgent = window.navigator.userAgent;
ieReg = /msie|Trident.*rv[ :]*11\./gi;
ie = ieReg.test(userAgent);

if(ie) {
  $(".img-container").each(function () {
    var $container = $(this),
        imgUrl = $container.find("img").prop("src");
    if (imgUrl) {
			$container.css("backgroundImage", 'url(' + imgUrl + ')').addClass("custom-object-fit");
			$('.profile-img-size').addClass('hidden');
    }
  });
}
</script>

<?php get_footer(); ?>
