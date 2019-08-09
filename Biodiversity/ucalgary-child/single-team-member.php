<?php get_header(); /* */ ?>

<?php
 $featuredImageUrl = get_the_post_thumbnail_url();
?>

<div class="fieldable-panels-pane container-responsive brick main-title">
  <div class="container">
      <div class="row padding-md-bottom">

      <div class="col-lg-4 col-md-4 col-sm-12 portfolio-item">
        <img alt="" class="img-circle img-responsive d-block mx-auto" src="<?php echo $featuredImageUrl; ?>">
      </div>

      <div class="col-lg-8 col-md-8 col-sm-12 portfolio-item vcenter hmiddle">
        <h3><?php the_title(); ?></h3>
        <p><strong><?php echo(types_render_field( 'job-title', array( 'output' => 'raw' ) )); ?></strong></p>
        <p>
          <?php while(have_posts()): the_post(); ?>
            <?php the_content();
              endwhile;
            ?>
        </p>

        <div class="row">
          <div class="col-sm-6">
            <a class="btn maroon-back btn-block" type="button" href="mailto:<?php echo(types_render_field( 'email', array( 'output' => 'raw' ) )); ?>"><i class="far fa-envelope fa-2x"></i></a>
          </div>
          <div class="col-sm-6">
            <a class="btn maroon-back btn-block" type="button" href="tel:+<?php echo(types_render_field( 'phone-number', array( 'output' => 'raw' ) )); ?>"><i class="fas fa-phone fa-2x"></i></a>
          </div>
        </div>
    </div>

  </div>
</div>

<?php get_footer(); ?>
