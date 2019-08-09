<?php get_header(); /* Template Name: Home Page Template */ ?>

<?php $title = get_the_title(); $featuredImage = get_the_post_thumbnail_url(); ?>
<div class="container-fluid brick hero-cta parallax top no-bottom-margin light image-focus-right ga-hero-cta">
	<div class="row vbottom hleft" style="background-image: url('<?php echo $featuredImage ?>'); background-position: 100% 0px;">
		<div class="container">
			<div class="row">

				<div class="col-sm-12 hidden-md hidden-lg">
					<img id="herobg1" class="img-responsive mainbanner" src="<?php echo $featuredImage ?>" alt="<?php echo $title ?>">
        </div>

          <div class="col-sm-12">
              <div class="cta-content cta-content-left">
                <h1><?php echo $title ?></h1>

                <?php while(have_posts()): the_post(); ?>
                <?php the_content();
                  endwhile;
                ?>

                <p><a href="<?php echo(types_render_field( 'banner-button-url', array( 'output' => 'raw' ) )); ?>" class="btn red-back" target="_blank"><?php echo(types_render_field( 'banner-button-content', array( ) )); ?></a>
              </div>
          </div>

			</div>
		</div>
	</div>
</div>
<div class="ucgy-core-layout-2-column-nopadding container-fluid brick multi-column">
	<div class="row row-sm-height row-md-height row-lg-height">
		<div class="col-sm-6 col-sm-height col-sm-middle col-md-height col-md-middle col-lg-height col-lg-middle maroon-back">
			<div class="container-fluid brick hero-cta impact-story banner graphic">
				<div class="row inherit-back">
					<div class="container">
						<div class="row contextual-links-region">
							<div class="col-sm-12">
								<div class="cta-content">
									<h2><?php echo(types_render_field( 'first-coloured-brick-title', array( 'output' => 'raw' ) )); ?></h2>
                  <p><?php echo(types_render_field( 'first-coloured-brick-content', array( 'output' => 'raw' ) )); ?></p>
                  <p><a class="btn btn-ghost btn-lg" href="<?php echo(types_render_field( 'first-coloured-brick-button-url', array( 'output' => 'raw' ) )); ?>" target="_blank"><?php echo(types_render_field( 'first-coloured-brick-button-content', array( ) )); ?></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-sm-height col-sm-middle col-md-height col-md-middle col-lg-height col-lg-middle red-back">
			<div class="container-fluid brick hero-cta impact-story banner graphic">
				<div class="row inherit-back">
					<div class="container">
						<div class="row contextual-links-region">
							<div class="col-sm-12">
								<div class="cta-content">
									<h2><?php echo(types_render_field( 'second-coloured-brick-title', array( 'output' => 'raw' ) )); ?></h2>
                  <p><?php echo(types_render_field( 'second-coloured-brick-content', array( 'output' => 'raw' ) )); ?></p>
                  <p><a class="btn btn-ghost btn-lg" href="<?php echo(types_render_field( 'second-coloured-brick-url', array( 'output' => 'raw' ) )); ?>" target="_blank"><?php echo(types_render_field( 'second-coloured-brick-button-content', array( ) )); ?></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container brick margin-lg-top margin-lg-bottom">
  <div class="row">
    <h2><?php echo(types_render_field( 'about-section-title', array( 'output' => 'raw' ) )); ?></h2>
    <hr>
  </div>
  <div class="row">
    <p><?php echo(types_render_field( 'about-section-content', array( 'output' => 'raw' ) )); ?></p>

  </div>
</div>
<div class="container brick margin-lg-top margin-lg-bottom">
	<div class="row">
	  <h2><?php echo(types_render_field( 'team-section-title', array( 'output' => 'raw' ) )); ?></h2>
	  <hr>
	</div>
  <div class="row">
		<?php echo do_shortcode('[wpv-view name="our-team-feed"]'); ?>
  </div>
</div>



<?php get_footer(); ?>
