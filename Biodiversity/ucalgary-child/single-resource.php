<?php get_header(); /* */ ?>

<?php

 $featuredImageUrl = get_the_post_thumbnail_url();
 $postTitle = get_the_title();

if ( $featuredImageUrl == true ){
    echo '<div class="hero-cta banner fieldable-panels-pane container-fluid brick image-focus-center light">
      <div class="row vbottom hleft" style="background-image: url(' . $featuredImageUrl . '); ">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 hidden-md hidden-lg">
              <img id="herobg1" class="img-responsive mainbanner" src="'. $featuredImageUrl. '" alt="Visiting">
            </div>
            <div class="col-sm-12">
              <div class="cta-content cta-content-left">
              <h1>' . $postTitle . '</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>';
}else{
      echo '<div class="fieldable-panels-pane container-responsive brick main-title">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <h1>' . $postTitle . '</h1>
            </div>
          </div>
        </div>
      </div>';
}

?>

<div class="fieldable-panels-pane container-responsive brick margin-xl-bottom">
  <div class="container">
    <?php while(have_posts()): the_post(); ?>
      <?php the_content();
        endwhile;
      ?> 
  </div>
</div>
<?php get_footer(); ?>