<?php get_header(); /* Template Name: Game Template */ ?>
<div class="fieldable-panels-pane container-fluid brick text-cta">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="row-md-height">
          <div class="col-md-3 col-md-height col-md-middle vspacer-xs vspacer-sm headline">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="col-md-9 col-md-height col-md-middle description">
            <p>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
              the_content();
              endwhile; else: ?>
              <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
          </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="fieldable-panels-pane container-fluid brick top-margin">
  <div class="container margin-lg-bottom">
      <p>Below you will find links to three different storylines that you can explore, each one offers a different perspective.  Using interactive media is a good way to not only explore different perspectives by taking on different roles, but also of providing opportunities to reflect upon and apply lessons learned from the rest of the site. It provides a different mode which may or may not suit some learners aptitudes, interests, and inclinations better than other approaches to engaging with WWI propaganda and its modern equivalents.</p>
      <p>This section of the exhibit requires you have Minecraft installed on a device (table, PC, etc…).  This can be a trial version or a commercial, or even one licensed for your site.</p>
      <p>If you don’t have Minecraft <a href="https://minecraft.net/en-us/demo/" target="_blank">visit this link</a> for more information.</p>
      <p>If you don’t wish to play Minecraft, but don’t want to miss out check out the links below for videos you can watch of differents playthroughs of the three scenarios.</p>
      <p>NOTE: currently we have a pdf storyboard, videos will be uploaded once the game play experiences are finalized.</p>

    <div class="row">
      <div class="col-sm-12 col-md-4 col-lg-4">
        <p class="game-title" type="button" data-toggle="modal" data-target="#myModal">Alberta Farmer</p>
        <p>He enlists in 1916 and looks for his missing brother.</p>
        <img src="https://greatwar.ucalgary.ca/wp-content/uploads/2018/11/farmer.jpg" alt="Alberta Farmer" type="button" data-toggle="modal" data-target="#myModal" class="img-responsive interactive-img-size">
        <br>
        <p><button type="button" class="btn btn-default maroon-back btn-block" data-toggle="modal" data-target="#myModal">View Details</button></p><!-- Button trigger modal -->
      </div>

        <!-- Modal Start -->
        <div class="modal fade model-margin-top" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <p class="modal-title" id="myModalLabel"><strong>Alberta Farmer</strong></p>
              </div>
              <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/h7Ptq9HVL-4?rel=0&queue-enable=false&showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
              <div class="modal-footer">

              </div>
            </div>
          </div>
        </div>
        <!-- Modal End -->

      <div class="col-sm-12 col-md-4 col-lg-4">
        <p class="game-title">Story Board 2</p>
        <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
        <img src="https://via.placeholder.com/2000x2300" alt="Story Board 2" class="img-responsive interactive-img-size">
        <br>
        <p><a href="#" class="btn btn-default maroon-back btn-block" target="_blank">View Details</a></p>
      </div>

      <div class="col-sm-12 col-md-4 col-lg-4">
        <p class="game-title">Story Board 3</p>
        <p>Lorem ipsum dolor, consectetur adipiscing elit.</p>
        <img src="https://via.placeholder.com/2000x2300" alt="Story Board 3" class="img-responsive interactive-img-size">
        <br>
        <p><a href="#" class="btn btn-default maroon-back btn-block" target="_blank">View Details</a></p>
      </div>

    </div>
  </div>
</div>




<?php get_footer(); ?>
