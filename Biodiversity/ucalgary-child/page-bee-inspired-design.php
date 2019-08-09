<?php get_header(); /* Template Name: Bee Inspired Design Template */ ?>
<div class="container-fluid brick main-title">
  <div class="row">

    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <ul class="list-inline list-unstyled">
              <li><h2 class="display-3"><?php the_title(); ?></h2></li>
              <li>
                <button type="button" class="btn maroon-back btn-sm" data-toggle="modal" data-target="#bioInspiredDesign">
                     Submit a functional morphology page
                </button>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <?php while(have_posts()): the_post(); ?>
            <?php the_content();
              endwhile;
            ?>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-3 col-lg-3">
            <img src="/wp-content/uploads/2018/11/bees.svg" height="75px" width="75px" alt="Move or Stay Put" class="img-responsive center-block">
            <p class="text-center"><strong>Move or Stay Put</strong></p>
            <p class="text-center">How to move or stay still within the environment</p>
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3">
            <img src="/wp-content/uploads/2018/11/flowers.svg" alt="Modify" height="75px" width="75px" class="img-responsive center-block">
            <p class="text-center"><strong>Modify</strong></p>
            <p class="text-center">Methods of modify physical, chemical or energetic resources</p>
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3">
            <img src="/wp-content/uploads/2018/11/hive.svg" alt="Make" height="75px" width="75px" class="img-responsive center-block">
            <p class="text-center"><strong>Make</strong></p>
            <p class="text-center">The production of physical or chemical elements, or self-replication</p>
          </div>
          <div class="col-sm-12 col-md-3 col-lg-3">
            <img src="/wp-content/uploads/2018/11/broken-stick.svg" alt="reak Down" height="75px" width="75px" class="img-responsive center-block">
            <p class="text-center"><strong>Break Down</strong></p>
            <p class="text-center">Breaking down physical or checmical resources</p>
          </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3">
          <img src="/wp-content/uploads/2018/11/bee-spring.svg" alt="Protect from Harm" height="75px" width="75px" class="img-responsive center-block">
          <p class="text-center"><strong>Protect from Harm</strong></p>
          <p class="text-center">Protection from physical harm, including from living, non-living, structural and physiological threats</p>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
          <img src="/wp-content/uploads/2018/11/bees-multiple.svg" alt="Maintain Community" height="75px" width="75px" class="img-responsive center-block">
          <p class="text-center"><strong>Maintain Community</strong></p>
          <p class="text-center">Maintaining communication and cooperation within a community</p>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
          <img src="/wp-content/uploads/2018/11/bee-close.svg" alt="Process Information" height="75px" width="75px" class="img-responsive center-block">
          <p class="text-center"><strong>Process Information</strong></p>
          <p class="text-center">Sending and precessing signals, environmental cues, navigation and computation</p>
        </div>
        <div class="col-sm-12 col-md-3 col-lg-3">
          <img src="/wp-content/uploads/2018/11/honey-pot.svg" alt="Get, Store or Distribute Resources" height="75px" width="75px" class="img-responsive center-block">
          <p class="text-center"><strong>Get, Store or Distribute Resources</strong></p>
          <p class="text-center">The management and transport of resources available</p>
        </div>
    </div>
      </div>
    </div>

  </div>
</div>

<?php echo do_shortcode('[wpv-view name="bee-inspired-page-resources"]'); ?>
<!-- Modal -->
<div class="modal fade" id="bioInspiredDesign" tabindex="-1" role="dialog" aria-labelledby="bioInspiredDesignLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="bioInspiredDesignLabel">Submit a functional morphology page</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[cred_form form="bio-inspired-design"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn white-back" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
