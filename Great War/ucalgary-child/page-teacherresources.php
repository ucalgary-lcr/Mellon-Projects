<?php get_header(); /* Template Name: Teacher Resources Template */ ?>
<div class="fieldable-panels-pane container-fluid brick text-cta">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="row-md-height">
          <div class="col-md-4 col-md-height col-md-middle vspacer-xs vspacer-sm headline">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="col-md-8 col-md-height col-md-middle description">
            <p><?php echo types_render_field( 'header-right-side-content-teachers-resources', array('output' => 'raw')); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="fieldable-panels-pane container-fluid brick checklist container-fluid">
	<div class="row maroon-back">
		<div class="container">
			<div class="row header">
				<div class="col-sm-12">
          <h2><?php echo types_render_field( 'checkbox-banner-intro-content-tr', array('output' => 'raw')); ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-12 col-md-4 col-lg-4">
						<p><i class="far fa-check-square fa-4x"></i> <span class="number">1</span></p>
            <p><?php echo types_render_field( 'checkbox-list-item-one-content-tr', array('output' => 'raw')); ?></p>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<p><i class="far fa-check-square fa-4x"></i> <span class="number">2</span></p>
            <p><?php echo types_render_field( 'checkbox-list-item-two-content-tr', array('output' => 'raw')); ?></p>
					</div>
					<div class="col-sm-12 col-md-4 col-lg-4">
						<p><i class="far fa-check-square fa-4x"></i> <span class="number">3</span></p>
            <p><?php echo types_render_field( 'checkbox-list-item-three-content-tr', array('output' => 'raw')); ?></p>
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
      <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
          endwhile; else: ?>
          <p>Sorry, no posts matched your criteria.</p>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="fieldable-panels-pane container-fluid brick margin-md-top margin-md-bottom">
  <div class="container margin-md-bottom">
    <div class="row">
      <div class="col-sm-12 col-md-8 col-lg-8">
        <div class="container">
          <?php echo do_shortcode('[wpv-view name="teachers-resources-view"]'); ?>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 col-lg-4 hidden-xs hidden-sm visible-md visible-lg">
          <?php echo(types_render_field( 'teacher-resources-form-field', array( ) )); ?>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-12 hidden-md hidden-lg visible-xs visible-sm">
      <?php
          if(ICL_LANGUAGE_CODE=='en')
            echo "
            <hr>
            <h4>Teacher's Resource Submission</h4>
            <p><a class='btn btn-default btn-lg btn-block maroon-back' href='mailto:tmmlibrary@ucalgary.ca?cc=infovmc@historymuseum.ca&subject=Great%20War%20in%20Translation%20Teacher%20Resource%20Submission'>Email</a></p>
            ";
          else
            echo "
            <hr>
            <h4>Teacher's Resource Submission</h4>
            <p><a class='btn btn-default btn-lg btn-block maroon-back' href='mailto:tmmlibrary@ucalgary.ca?cc=infomvc@museedelhistoire.ca&subject=Great%20War%20in%20Translation%20Teacher%20Resource%20Submission'>Email</a></p>";
          ?>
      </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>
