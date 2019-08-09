<?php get_header(); ?>
<div class="fieldable-panels-pane container-fluid brick main-title">
  <div class="row">
    <div class="container">
      <div class="row header">
        <div class="col-sm-12">
          <h2><?php the_title(); ?></h2>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="fieldable-panels-pane container-fluid brick">
  <div class="container">
    <?php while(have_posts()): the_post(); ?>
      <?php the_content();
        endwhile;
      ?> 
  </div>
</div>
<?php get_footer(); ?>