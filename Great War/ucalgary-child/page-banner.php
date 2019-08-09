<?php get_header(); /* Template Name: Banner Template */ ?>

<div class="fieldable-panels-pane container-fluid brick hero-cta large top rounded-brick-below no-bottom-margin">
	<div class="row hleft" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 hidden-md hidden-lg"><img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></div>
				<div class="col-sm-12">
					<div class="cta-content cta-content-left cta-content-boxed">
						<p>
              <?php while(have_posts()): the_post(); ?>
              <?php the_content();
                    endwhile;
              ?>
            </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="fieldable-panels-pane container-fluid brick more-info rounded-top">
	<div class="row">
		<div class="container">
			<div class="row header">
				<div class="col-sm-12">
					<?php
						$bannerContent = types_render_field( 'banner-content', array());
							echo $bannerContent;
						?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
