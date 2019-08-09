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

<div class="fieldable-panels-pane container-fluid brick more-info rounded-top">
	<div class="row">
		<div class="container margin-sm-top">
			<div class="col-md-12">
  			<?php
        		query_posts(array('order' => 'ASC'));
  					// Query posts if there are any
				if(have_posts()){
					while(have_posts()){  the_post(); ?>
				<p><?php the_content(); ?></p>
				<?php }} ?>
			<?php theme_numeric_posts_nav(); ?>
				</div>
			</div>
    	</div>
	</div>

<?php get_footer(); ?>
