<?php get_header(); /* Template Name: Database Entries Page */ ?>
<div class="fieldable-panels-pane container-fluid brick text-cta">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="row-md-height">
          <div class="col-md-3 col-md-height col-md-middle vspacer-xs vspacer-sm headline">
            <h1>Originals</h1>
          </div>
          <div class="col-md-9 col-md-height col-md-middle description">
            <p>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
              the_content();
              endwhile; else: ?>
              <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
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
			<?php echo do_shortcode('[wpv-view name="database-entries"]'); ?>
		</div>
  </div>
</div>
<?php get_footer(); ?>
