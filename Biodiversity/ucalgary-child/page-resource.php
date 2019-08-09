<?php get_header(); /* Template Name: Resource Page Template */ ?>
<div class="fieldable-panels-pane container-fluid brick main-title">
  <div class="row">
    <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <ul class="list-inline list-unstyled">
              <li><h2 class="display-3"><?php the_title(); ?></h2></li>
              <li>
                <button type="button" class="btn maroon-back btn-sm" data-toggle="modal" data-target="#resourceForm">
                    Submit a Resource
                </button>
              </li>
            </ul>
            <?php while(have_posts()): the_post(); ?>
            <?php the_content();
              endwhile;
            ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo do_shortcode('[wpv-form-view name="resources" target_id="self"]'); ?>
<?php echo do_shortcode('[wpv-view name="resources" view_display="layout"]'); ?>


        <!-- Modal -->
        <div class="modal fade" id="resourceForm" tabindex="-1" role="dialog" aria-labelledby="resourceFormLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="resourceFormLabel">Submit a Resource</h4>
              </div>
              <div class="modal-body">
                <?php echo do_shortcode('[cred_form form="biodiversity-resources-form"]'); ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn white-back" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
<?php get_footer(); ?>
