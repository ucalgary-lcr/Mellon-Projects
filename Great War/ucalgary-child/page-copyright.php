<?php get_header(); /* Template Name: Copyright Template */ ?>
<div class="fieldable-panels-pane container-fluid brick text-cta">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="row-md-height">
          <div class="col-md-3 col-md-height col-md-middle vspacer-xs vspacer-sm headline">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="col-md-9 col-md-height col-md-middle description">
            <p>
          </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="fieldable-panels-pane container-fluid brick top-margin bottom-margin">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		  the_content();
		  endwhile; else: ?>
		  <p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>
		</div>
    </div>
  </div>
</div>




<?php get_footer(); ?>
