<?php get_header(); ?>
<?php
  $posts_page = get_option( 'page_for_posts' );
  $post_thumbnail_id = get_post_thumbnail_id( $posts_page );
  $url = wp_get_attachment_image_src( $post_thumbnail_id, 'full' )[0];
?>

<div class="fieldable-panels-pane container-fluid brick hero-cta parallax top rounded-brick-below light image-focus-right ga-hero-cta">
	<div class="row vbottom hleft" style="background-image: url('<?php echo $url ?>');">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 hidden-md hidden-lg">
					<img id="herobg1" class="img-responsive mainbanner" src="<?php echo $url ?>" alt="<?php $posts_page = get_option( 'page_for_posts' ); $title = get_post_field( 'post_title', $posts_page ); if ( ! is_wp_error( $title ) ) { echo $title; } ?>">
				</div>
				<div class="col-sm-12">
				<div class="cta-content cta-content-left">
          <h2><?php
            $posts_page = get_option( 'page_for_posts' );
            $title = get_post_field( 'post_title', $posts_page );
            if ( ! is_wp_error( $title ) ) {
            echo $title;
            }
          ?></h2>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="fieldable-panels-pane container-fluid brick more-info rounded-top">
	<div class="row">
		<div class="container">
			<div class="col-md-9">
			<?php
      query_posts(array('order' => 'ASC'));
			// Query posts if there are any
			if(have_posts()){
				while(have_posts()){  the_post(); ?>
						<div class="row" <?php post_class(); ?>>
							<?php if (has_post_thumbnail()){ ?>
								<div class="col-md-12">
									<a href="<?php the_permalink(); ?>">
										<img class="img-responsive blog-images" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
									</a>
								</div>
								<?php } ?>
								<div class="col-md-12">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p><?php posted_on(); ?></p>
									<p><?php the_excerpt(); ?></p>
									<a href="<?php the_permalink(); ?>" class="btn red-back">Read More &rarr;</a>
								</div>
							</div>
						<?php }} ?>
					<?php theme_numeric_posts_nav(); ?>
				</div>


      <div class="col-md-3">
          <!-- Categories Widget -->
          <div class="card my-4">
            <h3 class="card-header">Categories</h3>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#" class="btn red-back btn-lg btn-block">Link</a>
                    </li>
                    <li>
                      <a href="#" class="btn red-back btn-lg  btn-block">Link</a>
                    </li>
                    <li>
                      <a href="#" class="btn red-back btn-lg btn-block">Link</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Side Widget -->
          <div class="card my-4">
            <h3 class="card-header">Side Widget</h3>
            <div class="card-body">
              Content
            </div>
          </div>
				</div>
      </div>
		</div>

<?php get_footer(); ?>
