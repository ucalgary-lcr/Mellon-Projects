<?php get_header(); /* Template Name: Home Page Templates */ ?>
<style>
.brick.checklist ol.checklist.max-items > li {margin-left: 15px;width: calc(33.3% - 15px) !important;}
.brick.hero-cta > .row > .container > .row > .col-sm-12 .cta-content-boxed {top: -100px;}
.brick.hero-cta.video {position: relative;height: 100% !important;max-height: 815px !important;}
.brick.hero-cta.video > .video-wrapper video {
	display: block;position: relative;height: 1623px;width: calc(106% + 2px);max-width: none;-moz-transform: none;-webkit-transform: none;-ms-transform: none;transform: none;left: 0;top: -350px;
}
@media (max-width: 5000px) and (min-width: 1201px){
	.brick.hero-cta.top.video {margin-top: -120px;}
}
@media (max-width: 1200px) and (min-width: 1024px){
	.brick.hero-cta.top.video {margin-top: -220px;}
}
@media (max-width: 1023px) and (min-width: 280px){
	.brick.hero-cta.video > .video-wrapper video {
	width: calc(110% + 2px);
}
	.brick.hero-cta.top.video {margin-top: -126px;}
}

@media (min-width: 992px){
	.brick.hero-cta > .row > .container > .row > .col-sm-12 .cta-content-boxed {max-width: 725px;}}
</style>
<div class="container-fluid brick container-fluid hero-cta video top home no-bottom-margin no-grad rounded-brick-below">
	<div class="row vbottom hleft" style="background-image: none;">
		<div class="container">
			<div class="row">
				<div class="hidden-md hidden-lg">
					<div id="herobg1">
						<div role="img" style="background-image: url('<?php the_post_thumbnail_url(); ?>');min-height: 500px;background-size: cover;width: 100%;background-repeat: no-repeat;" title="<?php the_title(); ?>"></div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="cta-content cta-content-left cta-content-boxed">
						<p>
							<?php while(have_posts()): the_post(); ?>
							<?php the_content();
									endwhile;
							?>
						</p>
						<p>
						<?php
						$ctaBtnurl = types_render_field( 'cta-button-url', array('output'=>'raw'));
						$ctaBtntext = types_render_field( 'cta-button-text', array('output'=>'raw'));
							if( $ctaBtnurl == true ){echo '
							<a class="btn btn-default btn-lg btn-fat maroon-back" href="'. $ctaBtnurl .'" role="button">'. $ctaBtntext .'</a>
							';}else{
								echo'';
							}
						?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hidden-xs hidden-sm video-wrapper">
		<video id="UCalgary1" title="<?php the_title(); ?>" muted="" autoplay loop>
			<source src="<?php echo(types_render_field( 'video-featured-all', array('output'=>'raw') )); ?>" type="video/mp4">
		</video>
	</div>
</div>
<div class="container-fluid brick">
	<div class="row">
		<div class="container">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h2>Types of Propaganda</h2>
				<h3>Arranged into four categories suggested by the work of Harold Lasswell, an early scholar on the propaganda of WWI</h3>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid brick">
	<div class="row">
		<div class="container">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
				<?php
					$firstImg = types_render_field( 'first-square-image', array('output' => 'raw'));
					$firstTitle = types_render_field( 'first-square-title', array('output' => 'raw'));
					$firstText = types_render_field( 'first-square-text', array('output' => 'raw'));
					$firstBtnText = types_render_field( 'first-square-button-text', array('output' => 'raw'));
					$firstBtnUrl = types_render_field( 'first-square-button-url', array('output' => 'raw'));
						echo '
						<a href="'. $firstBtnUrl .'?q=MobilizingHatredAgainsttheEnemy" title="'. $firstTitle .'" class="focus" tabindex="0">
							<div class="event-background hvr-float">
								<img src="'. $firstImg .'" alt="'. $firstTitle .'" class="img-responsive event-img-size" height="" width="100%">
								<div class="event-padding">
									<h3>'. $firstTitle .'</h3>
									<p>'. $firstText .'</p>
									<p class="vbottom margin-sm-top event-readmore-btn"><button class="btn btn-default maroon-back">'. $firstBtnText .'</button></p>
								</div>
							</div>
						</a>
						';
				?>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
				<?php
					$secondImg = types_render_field( 'second-square-image', array('output' => 'raw'));
					$secondTitle = types_render_field( 'second-square-title', array('output' => 'raw'));
					$secondText = types_render_field( 'second-square-text', array('output' => 'raw'));
					$secondBtnText = types_render_field( 'second-square-button-text', array('output' => 'raw'));
					$secondBtnUrl = types_render_field( 'second-square-button-url', array('output' => 'raw', 'separator' => ''));
						echo '
						<a href="'. $secondBtnUrl .'?q=InfluencingNeutrals" title="'. $secondTitle .'" class="focus" tabindex="0">
							<div class="event-background hvr-float">
								<img src="'. $secondImg .'" alt="'. $secondTitle .'" class="img-responsive event-img-size" height="" width="100%">
								<div class="event-padding">
									<h3>'. $secondTitle .'</h3>
									<p>'. $secondText .'</p>
									<p class="vbottom margin-sm-top event-readmore-btn"><button class="btn btn-default btn-block chocolate-back">'. $secondBtnText .'</button></p>
								</div>
							</div>
						</a>
						';
				?>
			</div>


			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				<?php
					$thirdImg = types_render_field( 'third-square-image', array('output' => 'raw'));
					$thirdTitle = types_render_field( 'third-square-title', array('output' => 'raw'));
					$thirdText = types_render_field( 'third-square-text', array('output' => 'raw'));
					$thirdBtnText = types_render_field( 'third-square-button-text', array('output' => 'raw'));
					$thirdBtnUrl = types_render_field( 'third-square-button-url', array('output' => 'raw'));
						echo '
						<a href="'. $thirdBtnUrl .'?q=DemoralizingtheEnemy" title="'. $thirdTitle .'" class="focus" tabindex="0">
							<div class="event-background hvr-float">
								<img src="'. $thirdImg .'" alt="'. $thirdTitle .'" class="img-responsive event-img-size" height="" width="100%">
								<div class="event-padding">
									<h3>'. $thirdTitle .'</h3>
									<p>'. $thirdText .'</p>
									<p class="vbottom margin-sm-top event-readmore-btn"><button class="btn btn-default ruby-back">'. $thirdBtnText .'</button></p>
								</div>
							</div>
						</a>
						';
				?>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 ">
				<?php
					$fourthImg = types_render_field( 'fourth-square-image', array('output' => 'raw'));
					$fourthTitle = types_render_field( 'fourth-square-title', array('output' => 'raw'));
					$fourthText = types_render_field( 'fourth-square-text', array('output' => 'raw'));
					$fourthBtnText = types_render_field( 'fourth-square-button-text', array('output' => 'raw'));
					$fourthBtnUrl = types_render_field( 'fourth-square-button-url', array('output' => 'raw'));
						echo '
						<a href="'. $fourthBtnUrl .'?q=InfluencingAlliesatHomeandAbroad" title="'. $fourthTitle .'" class="focus" tabindex="0">
							<div class="event-background hvr-float">
								<img src="'. $fourthImg .'" alt="'. $fourthTitle .'" class="img-responsive event-img-size" height="" width="100%">
								<div class="event-padding">
									<h3>'. $fourthTitle .'</h3>
									<p>'. $fourthText .'</p>
									<p class="vbottom margin-sm-top event-readmore-btn"><button class="btn btn-default dark-green-back">'. $fourthBtnText .'</button></p>
								</div>
							</div>
						</a>
						';
				?>
			</div>

		</div>
	</div>
</div>


<div class="container-fluid brick checklist container-fluid no-bottom-margin">
	<div class="row maroon-back">
		<div class="container">
			<div class="row header">
				<div class="col-sm-12">
					<h2><?php echo types_render_field( 'intro-banner-home-page', array('output' => 'raw')); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<p><i class="far fa-check-square fa-4x"></i> <span class="number">1</span></p>
						<p><?php echo types_render_field( 'check-point-one-home', array('output' => 'raw')); ?></p>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<p><i class="far fa-check-square fa-4x"></i> <span class="number">2</span></p>
						<p><?php echo types_render_field( 'check-point-two-home', array('output' => 'raw')); ?></p>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<p><i class="far fa-check-square fa-4x"></i> <span class="number">3</span></p>
						<p><?php echo types_render_field( 'check-point-three-home', array('output' => 'raw')); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>
