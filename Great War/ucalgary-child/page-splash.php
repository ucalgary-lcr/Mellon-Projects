<?php get_header(); /* Template Name: Splash Page Template */ ?>
<style>
main#content{background-size: cover; padding-top: 0px;}
.brick.hero-cta.video > .video-wrapper video {display: block;position: relative;height: 2000px;width: calc(180% + 2px);max-width: none;-moz-transform: none;-webkit-transform: none;-ms-transform: none;transform: none;left: 0;top: -300px;}
.brick.hero-cta.video {position: relative;height: 100% !important;max-height: 1500px !important;min-height: 1500px !important;}
.brick.hero-cta > .row > .container > .row > .col-sm-12 .cta-content-boxed {top: -250px;}
.navbar-default .navbar-toggle {display: none;}
header #navigation.group .row.uc-nav-container .row.division ul li:last-child {margin-left: 0px;}
@media  (min-width:100px) and (max-width:2600px){
	.brick.hero-cta.video {position: relative;height: 100% !important;max-height: 1200px !important;min-height: 1200px !important;}
  .brick.hero-cta > .row > .container > .row > .col-sm-12 .cta-content-boxed {top: -50px;}
  .brick.hero-cta.video > .video-wrapper video {top: -1720px;min-height: 5000px !important;}
}

</style>
<div class="fieldable-panels-pane container-fluid brick container-fluid hero-cta video top home no-bottom-margin no-grad">
  <div class="row vbottom hleft" style="background-image: none;">
      <div class="container">
          <div class="row">
              <div class="col-sm-12 hidden-md hidden-lg">
								<?php if ( has_post_thumbnail() ) : ?>
									<img id="herobg1" class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" />
								<?php endif; ?>

              </div>
              <div class="col-sm-12">
                <div class="cta-content cta-content-left cta-content-boxed">

                  <?php while(have_posts()): the_post(); ?>
                  <?php the_content(); endwhile; ?>
									<?php
										$urlEnglish = types_render_field( 'english-button-url', array('output' => 'raw' ) );
										$contentEnglish = types_render_field( 'english-button-content', array() );
										echo '<a target="_self" class="btn btn-default red-back" href="' . $urlEnglish . '">' . $contentEnglish . '</a>';
									?>


									<hr>

									<?php echo(types_render_field( 'french-banner-content', array() )); ?>
									<?php
										$urlFrench = types_render_field( 'french-button-url', array( 'output' => 'raw' ) );
										$contentFrench = types_render_field( 'french-button-content', array() );

										echo '<a href=" ' . $urlFrench . ' " target="_self" class="btn btn-default red-back">' . $contentFrench . '</a>';
									?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hidden-xs hidden-sm video-wrapper">
        <video id="UCalgary1" title="" muted="" autoplay loop >
          <source src="<?php echo(types_render_field( 'featured-video', array('output'=>'raw') )); ?>" type="video/mp4">
          </video>
        </div>
      </div>


<?php get_footer(); ?>
