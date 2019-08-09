<?php get_header(); ?>

<div class="fieldable-panels-pane container-fluid brick text-cta">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="row-md-height">
          <div class="col-md-4 col-md-height col-md-middle vspacer-xs vspacer-sm headline">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="col-md-8 col-md-height col-md-middle description">
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
<div class="fieldable-panels-pane container-fluid brick tasks">
	<div class="row margin-md-top">
    <div class="container">
      <div class="col-md-12">
        <?php echo(types_render_field( 'default-template-content', array( 'output' => 'raw' ) )); ?> 
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
