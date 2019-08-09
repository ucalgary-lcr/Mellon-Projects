<?php get_header();
/*
Template Name: Home
*/
?>

<?php $twitterPost = do_shortcode("[tweets max='1' user='capture2preserv']"); ?>
<style>
.brick.quote.image-quote {margin-top:0;margin-bottom:0;}
.brick.quote.image-quote .quote-image, .brick.quote.image-quote .quote-text {z-index: 5;}
.brick.hero-cta > .row > .container > .row > .col-sm-12 .cta-content-boxed {width: 100%;max-width: 526px;padding: 25px;background-color: rgba(109, 100, 93, 0.8);border-radius: 15px;}
.brick.hero-cta > .row > .container > .row > .col-sm-12 .cta-content p {font-size: 16px;font-weight: 100;line-height: 1.25em;text-shadow: 0 0 0 transparent;}
.brick.hero-cta > .row > .container > .row .cta-content >:first-child {margin-top: 0;text-shadow: none;}
.home-content-details{bottom: 0;color:#fff;position: absolute;background-color:rgba(109, 100, 93, 0.8);width:100%;}
.home-content-details h3{padding-left:15px;}
.home-content-details p{padding-left:15px;padding-top:10px;text-shadow: 0 0 0 transparent;}
.sites-feed-link a{color:#fff;}
.sites-feed-link a:hover{color:#e30c00;}
.no-style-list ul{padding:0 0 0 0;}
.no-style-list ul li{list-style: none;}
.desc-overflow{display: block;display: -webkit-box;height: 70px;margin: 0 auto;line-height: 1.4;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;}
</style>


<div class="fieldable-panels-pane container-fluid brick hero-cta video top home no-bottom-margin no-grad rounded-brick-below">
  <div class="row vmiddle hleft" style="background-image: none;">
    <div class="container">
      <div class="row">
          <div class="col-sm-12 hidden-md hidden-lg">
            <img id="herobg1" class="img-responsive" src="https://preserve.ucalgary.ca/wp-content/uploads/2018/02/rocks.png" alt="Let the journey begin">
          </div>
          <div class="col-sm-12">
  					<div class="cta-content cta-content-left cta-content-boxed">

              <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
                endwhile; else: ?>
                <p>Sorry, no posts matched your criteria.</p>
              <?php endif; ?>

  					</div>
  				</div>
        </div>
      </div>
    </div>
    <div class="hidden-xs hidden-sm video-wrapper">
      <video id="UCalgary1" title="" muted="" autoplay loop>
        <source src="https://preserve.ucalgary.ca/wp-content/uploads/2018/03/DP-Video.mp4" type="video/mp4">
      </video>
    </div>
  </div>



<div class="fieldable-panels-pane container-fluid brick quote image-quote ">
  <div class="row red-back">
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-md-3 quote-image alignment">
          <img class="img-responsive img-circle valign-middle halign-center red-back" src="https://preserve.ucalgary.ca/wp-content/uploads/2018/02/twitter.jpg" alt="">
        </div>
        <div class="col-sm-8 col-md-9 quote-text alignment">
          <div class="valign-middle left no-style-list">
            <h1>@capture2preserv</h1>
            <h4><?php echo($twitterPost) ?></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="fieldable-panels-pane container-fluid brick chicklets no-bottom-margin rounded-brick-above">
  <div class="row">
    <?php echo do_shortcode('[wpv-view name="home-page-site-feed"]'); ?>
  </div>
</div>
<?php get_footer(); ?>
