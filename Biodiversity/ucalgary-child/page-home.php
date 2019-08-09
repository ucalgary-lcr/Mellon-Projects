<?php get_header(); /* Template Name: Home Page Template */ ?>

<div class="fieldable-panels-pane container-fluid brick container-fluid hero-cta video top home no-bottom-margin no-grad rounded-brick-below">
	<div class="row vbottom hleft" style="background-image: none;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 hidden-md hidden-lg">
					<img class="img-responsive" id="herobg1" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
				</div>
				<div class="col-sm-12">
					<div class="cta-content cta-content-left cta-content-boxed">
						<?php echo apply_filters('the_content', $post->post_content); ?>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
						<?php endwhile; endif; ?>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hidden-xs hidden-sm video-wrapper">
		<video id="UCalgary1" title="<?php the_title(); ?>" muted="" autoplay loop>
			<source src="<?php echo (types_render_field( 'video-banner-upload', array('output' => 'raw') ) ); ?>" type="video/mp4">
		</video>
	</div>
</div>

<div class="container-fluid brick checklist">
	<div class="row maroon-back">
		<div class="container">
			<div class="row header">
				<div class="col-sm-12 center">
					<h2><?php echo(types_render_field( 'our-collection-main-title', array( ) )); ?></h2>
        </div>

			</div>
			<div class="row">
		        <div class="col-sm-12 col-md-4 col-lg-4 center portfolio-item">
					<p><i class="fal fa-bug fa-4x"></i></p>
					<h3><?php echo(types_render_field( 'red-banner-title-one', array( ) )); ?></h3>
					<?php echo(types_render_field( 'red-banner-description-one', array( ) )); ?>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4 center portfolio-item">
					<p><i class="fal fa-fish fa-4x"></i></p>
					<h3><?php echo(types_render_field( 'red-banner-title-two', array( ) )); ?></h3>
					<?php echo(types_render_field( 'red-banner-description-two', array( ) )); ?>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4 center portfolio-item">
					<p><i class="fab fa-pagelines fa-4x"></i></p>
					<h3><?php echo(types_render_field( 'red-banner-title-three', array( ) )); ?></h3>
						<?php echo(types_render_field( 'red-banner-description-three', array( ) )); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid brick">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-3 col-lg-3 margin-sm-bottom">
				  <div class="event-background hvr-float">
				     <img alt="<?php echo(types_render_field( 'collection-one-title', array( 'output' => 'raw' ) )); ?>" class="img-responsive event-img-size" src="<?php echo(types_render_field( 'collection-one-image', array( 'output' => 'raw' ) )); ?>" width="100%">
				    <div class="event-padding">
				      <h4><a href="<?php echo(types_render_field( 'collection-one-url', array( 'output' => 'raw' ) )); ?>"><?php echo(types_render_field( 'collection-one-title', array( 'output' => 'raw' ) )); ?></a></h4>
				      <p><?php echo(types_render_field( 'collection-one-description', array( 'output' => 'raw' ) )); ?></p>
				      <p class="vbottom margin-sm-top event-readmore-btn"><a class="read-more red" href="<?php echo(types_render_field( 'collection-one-url', array( 'output' => 'raw' ) )); ?>">Explore</a></p>
				    </div>
				  </div>
				</div>
				<div class="col-sm-4 col-md-3 col-lg-3 margin-sm-bottom">
				  <div class="event-background hvr-float">
					  <img alt="<?php echo(types_render_field( 'collection-two-title', array( 'output' => 'raw' ) )); ?>" class="img-responsive event-img-size" src="<?php echo(types_render_field( 'collection-two-image', array( 'output' => 'raw' ) )); ?>" width="100%">
				    <div class="event-padding">
				      <h4><a href="<?php echo(types_render_field( 'collection-two-url', array( 'output' => 'raw' ) )); ?>"><?php echo(types_render_field( 'collection-two-title', array( 'output' => 'raw' ) )); ?></a></h4>
				      <p><?php echo(types_render_field( 'collection-two-description', array( 'output' => 'raw' ) )); ?></p>
				      <p class="vbottom margin-sm-top event-readmore-btn">
								<a class="read-more red" href="<?php echo(types_render_field( 'collection-two-url', array( 'output' => 'raw' ) )); ?>">Explore</a>
							</p>
				    </div>
				  </div>
				</div>
				<div class="col-sm-4 col-md-3 col-lg-3 margin-sm-bottom">
				  <div class="event-background hvr-float">
					  <img alt="<?php echo(types_render_field( 'collection-three-title', array( 'output' => 'raw' ) )); ?>" class="img-responsive event-img-size" src="<?php echo(types_render_field( 'collection-three-image', array( 'output' => 'raw' ) )); ?>" width="100%">
				    <div class="event-padding">
				      <h4><a href="<?php echo(types_render_field( 'collection-three-url', array( 'output' => 'raw' ) )); ?>"><?php echo(types_render_field( 'collection-three-title', array( 'output' => 'raw' ) )); ?></a></h4>
				      <p><?php echo(types_render_field( 'collection-three-description', array( 'output' => 'raw' ) )); ?></p>
				      <p class="vbottom margin-sm-top event-readmore-btn">
								<a class="read-more red" href="<?php echo(types_render_field( 'collection-three-url', array( 'output' => 'raw' ) )); ?>">Explore</a>
							</p>
				    </div>
				  </div>
				</div>
				<div class="col-sm-4 col-md-3 col-lg-3 margin-sm-bottom">
				 <div class="event-background hvr-float">
				   	<img alt="<?php echo(types_render_field( 'collection-four-title', array( 'output' => 'raw' ) )); ?>" class="img-responsive event-img-size" src="<?php echo(types_render_field( 'collection-four-image', array( 'output' => 'raw' ) )); ?>" width="100%">
				    <div class="event-padding">
				      <h4><a href="<?php echo(types_render_field( 'collection-four-url', array( 'output' => 'raw' ) )); ?>"><?php echo(types_render_field( 'collection-four-title', array( 'output' => 'raw' ) )); ?></a></h4>
				      <p><?php echo(types_render_field( 'collection-four-description', array( 'output' => 'raw' ) )); ?></p>
				      <p class="vbottom margin-sm-top event-readmore-btn">
								<a class="read-more red" href="<?php echo(types_render_field( 'collection-four-url', array( 'output' => 'raw' ) )); ?>">Explore</a>
							</p>
				    </div>
				  </div>
				</div>
      </div>

			<div class="row">
				<?php
				$collectionFiveImg = types_render_field( 'collection-six-image', array( 'output' => 'raw' ) );
				$collectionFiveUrl = types_render_field( 'collection-six-url', array( 'output' => 'raw' ) );
				$collectionFiveTitle = types_render_field( 'collection-six-title', array( 'output' => 'raw' ) );
				$collectionFiveDescription = types_render_field( 'collection-six-description', array( 'output' => 'raw' ) );

				$collectionSixImg = types_render_field( 'collection-six-image', array( 'output' => 'raw' ) );
				$collectionSixUrl = types_render_field( 'collection-six-url', array( 'output' => 'raw' ) );
				$collectionSixTitle = types_render_field( 'collection-six-title', array( 'output' => 'raw' ) );
				$collectionSixDescription = types_render_field( 'collection-six-description', array( 'output' => 'raw' ) );

				if( $collectionFiveImg == true ){
					echo'
			 			<div class="col-sm-4 col-md-3 col-md-offset-3 col-lg-3 col-md-offset-3 margin-sm-bottom">
							<div class="event-background hvr-float">
								<img alt="'. $collectionFiveTitle .'" class="img-responsive event-img-size" src="'. $collectionFiveImg .'" width="100%">
								<div class="event-padding">
									<h4><a href="' . $collectionFiveUrl . '"> ' . $collectionFiveTitle . ' </a></h4>
									<p>'. $collectionFiveDescription .'</p>
									<p class="vbottom margin-sm-top event-readmore-btn"><a class="read-more red" href="'. $collectionFiveUrl .'">Explore</a></p>
								</div>
							</div>
					</div>';
				}else{echo'';}

			if( $collectionSixImg == true ){
				echo'
				<div class="col-sm-4 col-md-3 col-lg-3  margin-sm-bottom">
					<div class="event-background hvr-float">
						<img alt="'. $collectionSixTitle .'" class="img-responsive event-img-size" src="'. $collectionSixImg .'" width="100%">
						<div class="event-padding">
							<h4><a href="'. $collectionSixUrl .'">'. $collectionSixTitle .'</a></h4>
							<p>'. $collectionSixDescription .'</p>
							<p class="vbottom margin-sm-top event-readmore-btn">
								<a class="read-more red" href="' . $collectionSixUrl . '">Explore</a>
							</p>
						</div>
					</div>
				</div>';
			}else{echo'';}

				?>
			</div>
    </div>
  </div>
</div>


<div class="hero-cta banner container-fluid brick rounded-top image-focus-center sliver-cta light matching-rounded-brick-below">
  <div class="row vmiddle hcenter" style="background-image: url('https://biodiversity.ucalgary.ca/wp-content/uploads/iNaturalist.jpg'); background-position: center center;">
    <div class="container">
      <div class="row">
      	<div class="col-sm-12 hidden-md hidden-lg">
          <img class="img-responsive" src="https://biodiversity.ucalgary.ca/wp-content/uploads/iNaturalist.jpg" alt="">
        </div>
        <div class="col-sm-12">
          <div class="cta-content cta-content-centre">
            <h2>Contribute your own biodiversity observations through iNaturalist</h2>
						<div class="btn-wrapper btn-inline">
            	<a class="btn btn-ghost btn-lrg" target="_blank" href="https://www.inaturalist.org/projects/university-of-calgary-bioinventory" role="button" target="_blank">University of Calgary Bioinventory</a>
							<a class="btn btn-ghost btn-lrg" target="_blank" href="https://www.inaturalist.org/places/calgary-ab-canada-calgary-ab-ca" role="button" target="_blank">Calgary Observations</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
