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


<div class="container brick margin-lg-top">
	 <div class="row margin-md-bottom">
     <?php echo do_shortcode('[wpv-view name="credit-view"]'); ?>
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
    }
  });
}
</script>


<?php get_footer(); ?>
