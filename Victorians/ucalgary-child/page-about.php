<?php get_header(); /* Template Name: About Page Template */ ?>
<div class="fieldable-panels-pane container-fluid brick main-title">
    <div class="container">
        <h1 class="mt-4 mb-3"><?php the_title() ?></h1>
        <div class="row">
            <!-- <div class="col-lg-6"><img alt="" class="img-fluid rounded mb-4" src="<?php //echo get_the_post_thumbnail_url(); ?>"></div> -->
            <div class="col-lg-12">
                <?php while(have_posts()): the_post(); ?>
                    <?php the_content();
                    endwhile;
                    ?>
            </div>
        </div><!-- /.row -->
    </div>
</div>
<?php
echo do_shortcode('[wpv-view name="the-team"]');
?>
<?php
//echo do_shortcode('[wpv-view name="contributors"]');
$contributorsSection = types_render_field( 'contributors-details', array() );

if($contributorsSection == true){
  echo"<h2>Contributors</h2>";
  echo(types_render_field( 'contributors-details', array() ));
}else{
  echo'';
}


?>
<!--?php  ?-->
<?php get_footer(); ?>
