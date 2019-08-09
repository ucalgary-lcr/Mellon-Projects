<?php get_header(); ?>

<div class="fieldable-panels-pane container-fluid brick">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="row-md-height">
          <div class="col-md-12 col-md-height col-md-middle vspacer-xs vspacer-sm headline">
              <h1 class="page-title">
                <?php
                if(have_posts()){
                  if ( is_category() ) :
                    single_cat_title();

                  elseif ( is_tag() ) :
                    single_tag_title();

                  else :
                    esc_html_e('Search Results:', '');

                  endif;
                }
                ?>
              </h1>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="fieldable-panels-pane container-fluid brick top-margin bottom-margin">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
          <div class="input-group input-group-lg">
            <input type="search" class="form-control" style="width:100% !important;" placeholder="Search for..." name="s" id="search-input" value="<?php echo esc_attr(get_search_query()); ?>" />
            <input type="hidden" name="post_type" value="translation" />
            <span class="input-group-btn">
              <input class="btn btn-default btn-lg maroon-back" type="submit" alt="Search" value="Search" type="button" />
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="fieldable-panels-pane container-fluid brick top-margin bottom-margin">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php get_search_form(); ?>

          <?php
              query_posts(array('post_type' => 'translation', 'posts_per_page' => 999, 'order' => 'DSC'));
              if (have_posts()) {

                while (have_posts()) :
                  the_post() ;

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

                  echo'
                    <div class="search-result-translation">
                        <div class="col-md-6">
                            <a href="'. $sitesPostLink .'"><img src="'. $modernImage .'" class="img-responsive" /></a>
                        </div>

                        <div class="col-md-6">
                            <h2><a href="'. $sitesPostLink .'">'. $modernTitle .'</a></h2>
                            <p>'. $modernDescription .'</p>
                            <p><a href="'. $sitesPostLink .'">continue reading</a></p>
                        </div>
                    </div>
                  ';
               endwhile;
               }
             else{
                echo('Broken');
             }
          ?>
      </div>
    </div>
  </div>
</div>



<?php get_footer(); ?>
