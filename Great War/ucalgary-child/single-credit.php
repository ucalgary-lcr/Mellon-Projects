<?php get_header(); /*  */ ?>

<div class="fieldable-panels-pane container-fluid brick">
  <div class="row">
    <div class="container">

      <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="equal-height-container center">
           <img alt="<?php the_title(); ?>" class="img-responsive img-circle center-block profile-img-size" src="<?php the_post_thumbnail_url(); ?>">
        </div>
      </div>

      <div class="col-sm-12 col-md-8 col-lg-8 vcenter">
          <h1><?php the_title(); ?></h1>
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
