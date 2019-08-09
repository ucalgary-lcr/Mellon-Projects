<?php
// The template for displaying all single posts and attachments
get_header(); ?>
<style>
  .brick.hero-cta > .row > .container > .row .cta-content {
      margin: 60px auto;
      text-align: center;
  }
</style>
<?php

  // Types toolset render variable
  $postTitle =  get_the_title();
  //
      $longitude = types_render_field( "map-location", array( 'format' => 'FIELD_LONGITUDE' ));
      $latitude = types_render_field( "map-location", array( 'format' => 'FIELD_LATITUDE' ));
        //Desktop tab navigation display section
          // $backgroundTab = "<li role='presentation' class='active'><a href='#background' aria-controls='background' role='tab' data-toggle='tab'>Background</a></li>";
          // $photoGalleryTab = "<li role='presentation'><a href='#photo-gallery' aria-controls='photo-gallery' role='tab' data-toggle='tab'>Photo Gallery</a></li>";
          // $mapTab = "<li role='presentation'><a href='#map' aria-controls='map' role='tab' data-toggle='tab'>Map</a></li>";
          // $captureTechniquesTab = "<li role='presentation'><a href='#capture-techniques' aria-controls='capture-techniques' role='tab' data-toggle='tab'>Capture Techniques</a></li>";
          // $dataFilesTab = "<li role='presentation'><a href='#data-files' aria-controls='data-files' role='tab' data-toggle='tab'>Data Files</a></li>";
          // $movieTab = "<li role='presentation'><a href='#movies' aria-controls='movies' role='tab' data-toggle='tab'>Video</a></li>";
          // $panoramaTab = "<li role='presentation'><a href='#panorama' aria-controls='panorama' role='tab' data-toggle='tab'>Panorama</a></li>";
          // $vrTab = "<li role='presentation'><a href='#vr' aria-controls='vr' role='tab' data-toggle='tab'>Virtual Reality</a></li>";
  //Types Toolset rendered content and foreach loops for tab content section
  $moviesTabRender = types_render_field( "video", array('output' => 'raw',  "separator" => "|"));
  $video = explode( "|", $moviesTabRender );
    function youtubeVideo($video){foreach( $video as $youTube){
        echo ("
        <div class='col-md-6' style='padding-bottom:25px;'>
          <div class='embed-responsive embed-responsive-16by9'>
            <iframe width='560' height='315' src='https://www.youtube.com/embed/$youTube' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>
          </div>
        </div>
          ");
        }
      }
  $panoramaTabRender = types_render_field( "panorama", array('output' => 'raw'));
    function panoramaLink($panoramaTabRender){
      echo (
        "
        <div class='embed-responsive embed-responsive-16by9'>
          <iframe src='https://h5.veer.tv/photo-player?pid=$panoramaTabRender' frameborder='0' allowfullscreen='true' width='560' height='315'></iframe>
        </div>
        "
      );
    }
  //Mobile tab variables
  $backgroundMobileTab = "
    <div class='panel panel-default'>
      <div class='panel-heading' role='tab' id='headingOne'>
        <h4 class='panel-title'><a role='button' data-toggle='collapse' data-parent='#accordion' href='#background-mobile' aria-expanded='true' aria-controls='collapseOne'>Background</a></h4>
      </div>
    </div>";

  $photoGalleryMobileTab = "<div class='panel panel-default'><div class='panel-heading' role='tab' id='headingTwo'><h4 class='panel-title'><a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#photo-gallery-mobile' aria-expanded='false' aria-controls='collapseTwo'>Photo Gallery</a></h4></div>";
  $mapMobileTab = "<div class='panel panel-default'><div class='panel-heading' role='tab' id='headingThree'><h4 class='panel-title'><a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#map-mobile' aria-expanded='false' aria-controls='collapseThree'>Map</a></h4></div>";
  $captureTechniquesMobileTab = "<div class='panel panel-default'><div class='panel-heading' role='tab' id='headingFour'><h4 class='panel-title'><a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#capture-techniques-mobile' aria-expanded='false' aria-controls='collapseFour'>Capture Techniques</a></h4></div>";
  $dataFilesMobileTab = "<div class='panel panel-default'><div class='panel-heading' role='tab' id='headingFive'><h4 class='panel-title'><a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#data-files-mobile' aria-expanded='false' aria-controls='collapseFive'>Data Files</a></h4></div>";
  $movieMobileTab = "<div class='panel panel-default'><div class='panel-heading' role='tab' id='headingSix'><h4 class='panel-title'><a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#movie-mobile' aria-expanded='false' aria-controls='collapseSix'>Video</a></h4></div>";
  $panoramaMobileTab = "<div class='panel panel-default'><div class='panel-heading' role='tab' id='headingSeven'><h4 class='panel-title'><a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#panorama-mobile' aria-expanded='false' aria-controls='collapseSeven'>Panorama</a></h4></div>";
  $vrMobileTab = "<div class='panel panel-default'><div class='panel-heading' role='tab' id='headingEight'><h4 class='panel-title'><a class='collapsed' role='button' data-toggle='collapse' data-parent='#accordion' href='#vr-mobile' aria-expanded='false' aria-controls='collapseSeven'>Virtual Reality</a></h4></div>";
?>

<!-- Banner content section -->
<div class="fieldable-panels-pane container-fluid brick hero-cta large top iframe-background">
    <div class="row hleft">
        <div class="hidden-xs hidden-sm">
            <iframe class="sketchfab" width="100%" height="1100" src="https://sketchfab.com/models/<?php echo(types_render_field( "sketchfab-id", array( ) )); ?>/embed?autostart=1" frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true"></iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 hidden-md hidden-lg">
                    <iframe class="" width="100%" height="400px" src="https://sketchfab.com/models/<?php echo(types_render_field( "sketchfab-id", array( ) )); ?>/embed?autostart=1" frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true"></iframe>
                </div>

                <div class="col-sm-12">
                    <div class="cta-content cta-content-left cta-content-boxed">
                        <p class="right"><i id="toggle-close" class="fas fa-angle-double-left fa-lg"></i></p>
                              <h1 id="building-title"><?php the_title(); ?></h1>
                        <div id="building-details">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <p><?php echo(types_render_field( "description", array( ) )); ?></p>
                              <p><strong>Region:</strong> <?php echo(types_render_field( "country", array( ) )); ?></p>
                              <p><strong>Field Documentation:</strong> <?php echo(types_render_field( "field-documentation", array( ) )); ?></p>
                              <p><strong>Field Documentation Type:</strong> <?php echo(types_render_field( "documentation-type", array( ) )); ?></p>
                              <p><strong>Culture:</strong> <?php echo(the_category( ', ' )); ?></p>
                              <p><strong>Historic Period:</strong> <?php echo(types_render_field( "historic-period", array( ) )); ?>CE</p>
                            </div>
                            <?php
                            if($latitude == true){
                              echo'<div class="col-lg-4 col-md-4 col-sm-4">
                                  <p><strong>Latitude</strong></p>
                                  <p>' . $latitude . '</p>
                              </div> ';
                            }else{echo'';}

                            ?>
                            <?php
                            if($longitude == true){
                              echo'
                              <div class="col-lg-4 col-md-4 col-sm-4">
                                  <p><strong>Longitude</strong></p>
                                  <p>' . $longitude . '</p>
                              </div>
                              ';
                            }else{echo'';}

                            ?>
                            <?php
                            $datumType = types_render_field( "datum-type", array( ) );
                            if($datumType == true){
                              echo'<div class="col-lg-4 col-md-4 col-sm-4">
                                  <p><strong>Datum Type</strong></p>
                                  <p>' . $datumType . '</p>
                              </div> ';
                            }else{echo'';}

                            ?>

                            <div class="col-sm-12 ">
                                <h3>Threat Level</h3>
                            </div>
                            <div class="col-xs-4 col-sm-4" style="background-color:green;height: 20px;">
                              <?php
                                $threatRender = types_render_field( "threat-level", array("output" => "raw" ) );
                                $green = "<span class='fas fa-angle-down fa-4x' aria-hidden='true' id='green-threat-arrow' style=''></span>";
                                $orange = "<span class='fas fa-angle-down fa-4x' aria-hidden='true' id='orange-threat-arrow' style=''></span>";
                                $red =  "<span class='fas fa-angle-down fa-4x' aria-hidden='true' id='red-threat-arrow' style=''></span>";
                                if ($threatRender == "0") {echo ($green);}  elseif ($threatRender == "1") {echo($orange);} else {echo($red);}
                              ?>
                            </div>
                            <div class="col-xs-4 col-sm-4" style="background-color:orange;height: 20px;"></div>
                            <div class="col-xs-4 col-sm-4" style="background-color:red;height: 20px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#toggle-close").on( 'click', function() {
      $('i').toggleClass('far fa-angle-double-right');
      $(".brick.hero-cta > .row > .container > .row > .col-sm-12 .cta-content-boxed ").toggleClass( "short");
      $("#building-details").toggle();
      $('#building-title').toggleClass('vertical-text');
    });
</script>
<div class="fieldable-panels-pane container-fluid brick tasks hidden-xs hidden-sm hidden-md">
	<div class="row">
		<div class="col-sm-12">
			<div class="tabcordion tabs-left">
        <ul class="nav nav-tabs" role="tablist">
          <?php
          echo do_shortcode(
            "
            [wpv-conditional if='( $(wpcf-background) )']
            <li role='presentation' class='active'><a href='#background' aria-controls='background' role='tab' data-toggle='tab'>Background</a></li>
            [/wpv-conditional]
            [wpv-conditional if='( $(wpcf-photo) )']
            <li role='presentation'><a href='#photo-gallery' aria-controls='photo-gallery' role='tab' data-toggle='tab'>Photo Gallery</a></li>
            [/wpv-conditional]
            [wpv-conditional if='( $(wpcf-display) )']
            <li role='presentation'><a href='#map' aria-controls='map' role='tab' data-toggle='tab'>Map</a></li>
            [/wpv-conditional]
            [wpv-conditional if='( $(wpcf-details) )']
            <li role='presentation'><a href='#capture-techniques' aria-controls='capture-techniques' role='tab' data-toggle='tab'>Capture Techniques</a></li>
            [/wpv-conditional]
            [wpv-conditional if='( $(wpcf-data-details) )']
            <li role='presentation'><a href='#data-files' aria-controls='data-files' role='tab' data-toggle='tab'>Data Files</a></li>
            [/wpv-conditional]
            [wpv-conditional if='( $(wpcf-video) )']
            <li role='presentation'><a href='#movies' aria-controls='movies' role='tab' data-toggle='tab'>Video</a></li>
            [/wpv-conditional]
            [wpv-conditional if='( $(wpcf-panorama) )']
            <li role='presentation'><a href='#panorama' aria-controls='panorama' role='tab' data-toggle='tab'>Panorama</a></li>
            [/wpv-conditional]
            [wpv-conditional if='( $(wpcf-vr) )']
            <li role='presentation'><a href='#vr' aria-controls='vr' role='tab' data-toggle='tab'>Virtual Reality</a></li>
            [/wpv-conditional]
            "
          );
          ?>
        </ul>
				<div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="background">
            <div class="container">
              <div class="row">
                <div class="col-md-12 w-photo">
                  <?php echo do_shortcode('[wpv-view name="sites-background-view"]'); ?>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="photo-gallery">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <?php
                     $photos = do_shortcode('[types field="photo" alt="%%ALT%%" title="%%TITLE%%" separator="|" class="img-responsive img-thumbnail gallery-images"][/types]');
                     $photosArray = explode( "|", $photos );

                     if($photos == true){
                       echo'<h2>Photo Gallery</h2>';
                       $photoLiteTemplate = "
                       <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 margin-sm-bottom'>
                         <a href='%s' data-title='%s' data-lightbox='photo-gallery-images'>
                           %s
                         </a>
                       </div>
                       ";
                       foreach($photosArray as $photo){
                         $tag = new SimpleXMLElement($photo);
                         printf($photoLiteTemplate, $tag['src'], $tag['alt'], $photo);
                       }
                     }else{
                       echo'';
                     }

                  ?>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="map">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <?php echo do_shortcode('[wpv-view name="sites-map-view"]'); ?>

                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="capture-techniques">
            <?php echo do_shortcode('[wpv-view name="site-capture-techniques-view"]'); ?>
            <div class='container'>
              <div class='row'>
                  <?php
                     $locations = do_shortcode('[types field="locations" alt="%%ALT%%" title="%%TITLE%%" separator="|" class="img-responsive ct-location-images"][/types]');
                     $locationsArray = explode( "|", $locations );

                     if($locations == true){

                       $locationLiteTemplate = "
                       <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4 ct-img-gal'>
                         <a href='%s' data-title='%s' data-lightbox='location-images'>
                           %s
                         </a>
                         <div class='ct-location-images-numbers'>
                           <strong><section></section></strong>
                         </div>
                       </div>
                       ";
                       foreach($locationsArray as $location){
                         $tag = new SimpleXMLElement($location);
                         printf($locationLiteTemplate, $tag['src'], $tag['alt'], $location);
                       }
                     }else{
                       echo'';
                     }

                  ?>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="data-files">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <?php echo(types_render_field( "data-details", array( ) )); ?>
                  <?php

                    $dataFilesTabRender = types_render_field( "file", array('output' => 'raw', 'separator' => '|'));
                    $dataNameTabRender = types_render_field( "file-name", array('separator' => '|'));
                      $dataFilesArray= explode( "|", $dataFilesTabRender );
                      $dataNameArray = explode( "|", $dataNameTabRender );

                        //function dataLinks($dataNameArray, $dataFilesArray) {
                          foreach($dataNameArray as $key=>$dataTitle){
                            echo("<a href='$dataFilesArray[$key]' target='_blank'><h3>$dataTitle</h3></a>");
                          }
                        //}


                  ?>

                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="movies">
            <div class="container">
              <div class="row">
                <?php youtubeVideo($video); ?>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="panorama">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <?php panoramalink($panoramaTabRender); ?>
                </div>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="vr">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <?php echo types_render_field("vr", array()); ?>
                </div>
              </div>
            </div>
          </div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="fieldable-panels-pane container-fluid brick tasks hidden-lg">
	<div class="row">
		<div class="col-sm-12">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

            <?php
              $mobileBackground = types_render_field( "background", array());

              if($mobileBackground == true){
                echo'
                  <div class="panel panel-default">
                    <div class="panel-heading red-back" role="tab" id="headingOne">
                      <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#mobileBackgroundDetails" aria-expanded="true" aria-controls="mobileBackgroundDetails">
                          Background
                        </a>
                      </h4>
                    </div>
                    <div id="mobileBackgroundDetails" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                      '. $mobileBackground .'
                      </div>
                    </div>
                  </div>';
                }else{echo'';}


            ?>



                    <?php
                       $photos = do_shortcode('[types field="photo" alt="%%ALT%%" title="%%TITLE%%" separator="|" class="img-responsive img-thumbnail gallery-images"][/types]');
                       $photosArray = explode( "|", $photos );

                       if($photos == true){
                         echo'
                         <div class="panel panel-default">
                           <div class="panel-heading red-back" role="tab" id="headingTwo">
                             <h4 class="panel-title">
                               <a role="button" data-toggle="collapse" data-parent="#accordion" href="#photoGallery" aria-expanded="true" aria-controls="photoGallery">
                                 Photo Gallery
                               </a>
                             </h4>
                           </div>
                           <div id="photoGallery" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                             <div class="panel-body">
                         ';
                         $photoLiteTemplate = '
                           <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 margin-sm-bottom">
                             <a href="%s" data-title="%s" data-lightbox="photo-gallery-images">
                               %s
                             </a>
                          </div>';


                         foreach($photosArray as $photo){
                           $tag = new SimpleXMLElement($photo);
                           printf($photoLiteTemplate, $tag["src"], $tag["alt"], $photo);
                         }
                         echo'           </div>
                                       </div>
                                     </div>';
                       }else{
                         echo'';
                       }
                       ?>
            <?php
              $map =  do_shortcode('[wpv-view name="sites-map-view"]');
              echo'<div class="panel panel-default">
                <div class="panel-heading red-back" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#mapTab" aria-expanded="false" aria-controls="mapTab">
                      Map
                    </a>
                  </h4>
                </div>
                <div id="mapTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    '. $map .'
                  </div>
                </div>
              </div>';
              ?>
            <?php
                       $locations = do_shortcode('[types field="locations" alt="%%ALT%%" title="%%TITLE%%" separator="|" class="img-responsive ct-location-images"][/types]');
                       $locationsArray = explode( "|", $locations );

                       if($locations == true){

                         echo'
                         <div class="panel panel-default">
                           <div class="panel-heading red-back" role="tab" id="headingThree">
                             <h4 class="panel-title">
                               <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#captureTechniques" aria-expanded="false" aria-controls="captureTechniques">
                                   Capture Techniques
                               </a>
                             </h4>
                           </div>
                           <div id="captureTechniques" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                             <div class="panel-body">
                         ';
                         $locationLiteTemplate = '
                         <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ct-img-gal">
                           <a href="%s" data-title="%s" data-lightbox="location-images">
                             %s
                           </a>
                           <div class="ct-location-images-numbers">
                             <strong><section></section></strong>
                           </div>
                         </div>
                         ';
                         foreach($locationsArray as $location){
                           $tag = new SimpleXMLElement($location);
                           printf($locationLiteTemplate, $tag['src'], $tag['alt'], $location);
                         }
                         echo'
                         </div>
                       </div>
                     </div>';

                       }else{
                         echo'';
                       }
                    ?>
            <?php

                    $dataFilesTabRender = types_render_field( "file", array('output' => 'raw', 'separator' => '|'));
                    $dataNameTabRender = types_render_field( "file-name", array('separator' => '|'));
                      $dataFilesArray= explode( "|", $dataFilesTabRender );
                      $dataNameArray = explode( "|", $dataNameTabRender );

                       if($dataFilesTabRender == true){

                         echo'
                         <div class="panel panel-default">
                           <div class="panel-heading red-back" role="tab" id="headingFour">
                             <h4 class="panel-title">
                               <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#dataFiles" aria-expanded="false" aria-controls="dataFiles">
                                   Data Files
                               </a>
                             </h4>
                           </div>
                           <div id="dataFiles" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                             <div class="panel-body">
                         ';

                          echo(types_render_field( "data-details", array( ) ));

                            foreach($dataNameArray as $key=>$dataTitle){
                              echo("<a href='$dataFilesArray[$key]' target='_blank'><h3>$dataTitle</h3></a>");
                            }

                            echo'
                            </div>
                          </div>
                        </div>
                            ';
                      }
                      ?>
            <?php

                      if($video == true){

                        echo'
                        <div class="panel panel-default">
                          <div class="panel-heading red-back" role="tab" id="headingFive">
                            <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#video" aria-expanded="false" aria-controls="video">
                                  Video
                              </a>
                            </h4>
                          </div>
                          <div id="video" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">
                        ';
                        youtubeVideo($video);

                        echo'
                        </div>
                      </div>
                    </div>
                        ';

                      }
                      ?>
            <?php
                  if($panoramaTabRender == true){
                    echo'
                    <div class="panel panel-default">
                      <div class="panel-heading red-back" role="tab" id="headingSix">
                        <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#panoramaView" aria-expanded="false" aria-controls="panoramaView">
                              Panorama
                          </a>
                        </h4>
                      </div>
                      <div id="panoramaView" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                    ';

                    panoramalink($panoramaTabRender);

                    echo'
                    </div>
                  </div>
                </div>
                    ';
                  }
                  ?>
            <?php
                    $virtualReality = types_render_field("vr", array());

                      if($virtualReality == true){
                        echo'
                        <div class="panel panel-default">

                          <div class="panel-heading red-back" role="tab" id="headingSeven">
                            <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#virtualReality" aria-expanded="false" aria-controls="virtualReality">
                                  Virtual Reality
                              </a>
                            </h4>
                          </div>

                          <div id="virtualReality" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                            <div class="panel-body">
                            ' . $virtualReality . '
                            </div>
                          </div>

                        </div>
                        ';

                      }
                      ?>

      </div>
    </div>
  </div>
</div>
<script>
  //hero content functions
  $('.content-btn').click(function() {
    $('.location-content').toggle();
    $('.content-btn').toggleClass('fa-angle-double-left').animate();
    $('.content-btn').toggleClass('fa-angle-double-right').animate();
    $('.location-content-holder').toggleClass('hero-content-open').animate();
    $('.location-content-holder').toggleClass('hero-content-closed').animate();
  });
</script>
<?php get_footer(); ?>
