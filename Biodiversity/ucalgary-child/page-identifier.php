<?php get_header(); /* Template Name: Digital Collection Page Template */ ?>
<div class="container-fluid brick hero-cta impact-story no-bottom-margin">
  <div class="row vmiddle hleft contextual-links-region" style="background-image: url('<?php the_post_thumbnail_url(); ?>');" title="">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 hidden-md hidden-lg"><img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>"></div>
        <div class="col-sm-12">
          <div class="cta-content">
            <h2><?php the_title(); ?></h2>
            <br>
            <?php echo apply_filters('the_content', $post->post_content); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php echo do_shortcode('[wpv-view name="digital-collection-feed"]'); ?>

<?php get_footer(); ?>
