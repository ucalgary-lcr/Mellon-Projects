<?php get_header(); /* Template Name: Contact Page Template */ ?>
<div class="fieldable-panels-pane container-fluid brick main-title">
    <div class="container">
        <h1 class="mt-4 mb-3"><?php the_title() ?></h1>
        <div class="row">
            <div class="col-lg-8 mb-4">
                <?php echo do_shortcode('[cred_form form="contact-us-form"]'); ?>
            </div>
            <div class="col-lg-4 mb-4">
                <?php while(have_posts()): the_post(); ?>
                <?php the_content();
                endwhile;
                ?> 
            </div>
        </div><!-- /.row -->
    </div>
</div>


<?php get_footer(); ?>