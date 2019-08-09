<?php get_header();
/*
Template Name: News
*/
?>
<div class="container">
  <div class="row"><!-- Blog Entries Column -->
    <h1><?php the_title(); ?></h1>
  </div>
</div>

  <div class='container'>
    <div class='row'>
        <?php echo do_shortcode('[wpv-view name="news"]'); ?>
    </div>
  </div>







<?php get_footer(); ?>
