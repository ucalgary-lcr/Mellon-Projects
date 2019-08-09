<?php get_header(); /* Template Name: Submit Page Template */ ?>
<div class="fieldable-panels-pane container-fluid brick main-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4">
                <h1 class="mt-4 mb-3"><?php the_title() ?></h1>
            </div>
        </div><!-- /.row -->
    </div>
</div>
<div id="myGroup">
  <div class="fieldable-panels-pane container-fluid brick text">
  	<div class="row left">
  		<div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
              <p><?php echo(types_render_field( 'submission-intro-content', array( 'output' => 'raw' ) )); ?></p>
          </div>
        </div>
  			<div class="row">
          <div class="col-sm-12 col-md-6 col-lg-6 center">
              <p><i class="fal fa-user fa-4x"></i></p>
              <p><strong>Submit a person and address</strong></p>
              <p><?php echo(types_render_field( 'submit-a-person-content', array( 'output' => 'raw' ) )); ?></p>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-6 center">
              <p><i class="fal fa-map-marked-alt fa-4x"></i></p>
              <p><strong>Submit an address for a person already in the database</strong></p>
              <p><?php echo(types_render_field( 'submit-a-location-content', array( 'output' => 'raw' ) )); ?></p>
          </div>
  			</div>
  		</div>
  	</div>
  </div>

  <div class="fieldable-panels-pane container-fluid brick">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mb-4">
          <p class="mt-4 mb-3">
              <?php while(have_posts()): the_post(); ?>
              <?php the_content();
              endwhile;
              ?>
          </p>
        </div>
      </div><!-- /.row -->
    </div>
  </div>
</div>


<script>
  var $myGroup = $('#myGroup');
  $myGroup.on('show.bs.collapse','.collapse', function() { $myGroup.find('.collapse.in').collapse('hide'); });




</script>
<?php get_footer(); ?>
