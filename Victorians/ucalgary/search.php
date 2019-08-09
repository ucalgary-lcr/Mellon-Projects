<?php get_header(); ?>
<div class="fieldable-panels-pane container-fluid brick main-title">
  <div class="container">
    <div class="row">
    <br class="break" >
      <div class="col-md-12">
        <?php
        $postTitle = get_the_title();
        $sitesPostLink = get_post_permalink();
        $thumbnail = the_post_thumbnail_url();
        $excerpt = the_excerpt();      
        
        // Query posts if there are any
        if(have_posts()){ ?>
          <h1 class="page-title"><?php printf( esc_html__('Search Results for: %s', ''), '<span>' . get_search_query() . '</span>' ); ?></h1>

            <?php
              while(have_posts()){  the_post();
            ?>
            <div <?php post_class(); ?> id="post-results" >
              <div class="col-sm-4 col-md-4 col-lg-4">
                <?php
                  echo '<a href="' . $sitesPostLink . '"><img src="' . $thumbnail . '" class="img-thumbnail img-responsive search-img-size post-thumbnail" /></a>';
                ?>
              </div>
            <div class="col-sm-8 col-md-8 col-lg-8">
              <h3><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h3>
            <?php 
                echo $excerpt;
              ?>
              <p><a href="<?php the_permalink(); ?>" class="">continue reading</a></p>
              
            </div>
          </div>
        <?php }}else{ ?>
          <h2>Nothing Found</h2>
          <div class="alert alert-warning" role="alert"><p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p></div>
          <?php get_template_part( 'content', 'none' ); ?>
        <?php } ?>
        <?php theme_numeric_posts_nav(); ?>
      </div>

    </div>
  </div>
</div>
<?php get_footer(); ?>
