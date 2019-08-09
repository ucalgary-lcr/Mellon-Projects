<?php get_header(); ?>
<div class="container">
  <div class="row">
   <br class="break" >
    <div class="col-md-12">
      <?php
      $originalTitle = types_render_field( 'original-title', array('output' => 'raw'));
      $contentdmObjectId = types_render_field( 'contentdm-object-id', array('output' => 'raw'));
      $originalItem = types_render_field( 'original-item', array('output' => 'raw'));
      $originalDescrition = types_render_field( 'original-description', array('output' => 'raw'));
      $modernTitle = types_render_field( 'modern-title', array('output' => 'raw'));
      $modernImage = types_render_field( 'modern-image', array('output' => 'raw'));
      $modernDescription = types_render_field( 'modern-description', array('output' => 'raw'));
      $category = types_render_field( 'translation-category', array('output' => 'raw'));
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
              // if ( $thumbnail == true ){
              //     echo '<a href="' . the_permalink(); . '"> ' . the_post_thumbnail('thumbnail', array('class' => 'img-thumbnail img-responsive news-photo post-thumbnail')); . '</a>';
              //  }else
              if ( $modernImage == true ){
                  echo '<a href="' . $sitesPostLink . '"><img src="' . $modernImage . '" class="img-thumbnail img-responsive search-img-size post-thumbnail" /></a>';
               }else{
                  echo '<a href="' . $sitesPostLink . '"><img src="' . $thumbnail . '" class="img-thumbnail img-responsive search-img-size post-thumbnail" /></a>';
               }
                 ?>
            </div>
          <div class="col-sm-8 col-md-8 col-lg-8">
            <h2><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h2>
           <?php 
              if ( $modernImage == true ){
                echo "<p>"$modernDescription"</p>";
              }else{
                echo "<p>"$modernDescription"</p>"; 
              }
            ?>
            <p><a href="<?php the_permalink(); ?>" class="">continue reading</a></p>
            
          </div>
        </div>
      <?php }}else{ ?>
        <h1>Nothing Found</h1>
        <div class="alert alert-warning" role="alert"><p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p></div>
        <?php get_template_part( 'content', 'none' ); ?>
      <?php } ?>
      <?php theme_numeric_posts_nav(); ?>
    </div>

  </div>
</div>
<?php get_footer(); ?>
