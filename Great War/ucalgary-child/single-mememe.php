<?php get_header(); ?>
<div class="fieldable-panels-pane container-fluid brick hero-cta parallax top rounded-brick-below light image-focus-right ga-hero-cta">
	<div class="row vbottom hleft" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 hidden-md hidden-lg">
					<img id="herobg1" class="img-responsive mainbanner" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
				</div>
				<div class="col-sm-12">
				<div class="cta-content cta-content-left">
					<h1><?php the_title(); ?></h1>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="fieldable-panels-pane container-fluid brick image rounded-top">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="image-wrapper">
						<p class="image"><img alt="This is the alt tag - only shows if the image doesn't load." class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>"></a></p>
						<!-- <p class="caption">Pretty, pretty campus picture!</p>
						<p class="credit">Some photographer</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="fieldable-panels-pane container-fluid brick more-info ">
	<div class="row">
		<div class="container margin-sm-top">
    <div class="col-md-4"></div>
			<div class="col-md-4">
      <a class="mememe-btn btn btn-default red-back center-block" target="_blank" href="<?php the_post_thumbnail_url(); ?>">Download image</a>
      <?php //if ( have_posts() ) : while ( have_posts() ) : the_post();
            //the_content();
            //endwhile; else: ?>
            <!-- <p>Sorry, no posts matched your criteria.</p> -->
          <?php //endif; ?>
				</div>
        <div class="col-md-4"></div>
			</div>
    </div>
	</div>

<script>

// $(document).ready(function() {
//   $('a.mememe-btn').addClass('btn btn-default red-back center pull-left').removeClass('pull-right');
//   $('img.alignleft').hide();
// });
  

</script>




<?php get_footer(); ?>

