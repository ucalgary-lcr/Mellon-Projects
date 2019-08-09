<?php get_header(); /*  */ ?>

<?php

  $collection = 'cmh';
  $pointer = types_render_field( 'contentdm-object-id', array( 'output' => 'raw' ));
  $xmlData = file_get_contents("https://server22007.contentdm.oclc.org/dmwebservices/index.php?q=dmGetCompoundObjectInfo/$collection/$pointer/xml"); // ?q=dmGetCompoundObjectInfo/$collection/$pointer/xml

  /** Create the document object **/

  $xml = simplexml_load_string($xmlData);
  // type
  $cpd_type = $xml->{"type"};
  // node
  $title = $xml->{"node"}->{"nodetitle"};
  $pagePointer = $xml->{"node"}->{"page"}[0]->{"pageptr"};
  // storage
  $result = array();
  $k = $j = 0;

  /** Get the <page> nodes and loop them **/

  if ($cpd_type == "Monograph") {
    /** Get page in node **/
      foreach ($xml->xpath('/cpd/node') as $nodel1_record) {
          //echo("node record: " . $k++ . " ; " . $nodel1_record->nodetitle . "<br/>");
          foreach ($nodel1_record->xpath('./page') as $pagel1_record) {
              //echo("----- pagel1 record: " . $pagel1_record->pagetitle . " , " . $pagel1_record->pagefile . " , " . $pagel1_record->pageptr . "<br/>");
              $result[] = array(
                  'nodeTitle' => (string)$nodel1_record->nodetitle,
                  'pageTitle' => (string)$pagel1_record->pagetitle,
                  'pageFile' => (string)$pagel1_record->pagefile,
                  'pagePtr' => (string)$pagel1_record->pageptr
              );
          }
      }

      /** Get node in node **/
      foreach ($xml->xpath('/cpd/node/node') as $nodel2_record) {
          //echo("node record: " . $k++ . " ; " . $nodel2_record->nodetitle . "<br/>");
          foreach ($nodel2_record->xpath('.//page') as $pagel2_record) {
              //echo("----- pagel2 record: " . $pagel2_record->pagetitle . " , " . $pagel2_record->pagefile . " , " . $pagel2_record->pageptr . "<br/>");
              $result[] = array(
                  'nodeTitle' => (string)$nodel2_record->nodetitle,
                  'pageTitle' => (string)$pagel2_record->pagetitle,
                  'pageFile' => (string)$pagel2_record->pagefile,
                  'pagePtr' => (string)$pagel2_record->pageptr
              );
          }
      }
  }  usort($result, function ($a, $b) {
      return $a['pagePtr'] - $b['pagePtr'];
  });
?>

<div class="fieldable-panels-pane container-fluid brick">
  <div class="row">
    <div class="container">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="equal-height-container">
           <h1 tabindex="0" ><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Original Translation Section -->
<div class="fieldable-panels-pane container-fluid brick">
  <div class="row">
    <div class="container">

      <div class="col-sm-12 col-md-6 col-lg-6">
        <div class="ruby-back">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="container">
                <p><span tabindex="0" class="translation-type-title">Original</span></p>
              </div>
            </div>
          </div>
        </div>

        <?php
          $originalTitle = types_render_field( 'original-title', array('output' => 'raw'));
          $contentdmObjectId = types_render_field( 'contentdm-object-id', array('output' => 'raw'));
          $originalItem = types_render_field( 'original-item', array('output' => 'raw'));
          $originalDescrition = types_render_field( 'original-description', array('output' => 'raw'));
        ?>

          <div class="translation-boxes">

            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12">
                <!--<h3 tabindex="0" id="contentDMTitleChange" ><?php //echo $originalTitle; ?></h3>-->
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 center">
              <a class="btn btn-default expland-modal-btn" data-toggle="modal" data-target="#originalModel"><i class="fal fa-expand-arrows"></i></a>
                <div id="carousel-original" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="item active" id="showOriginalDescritpion">
                      <img tabindex="0" src="<?php echo $originalItem; ?>" alt='<?php echo $originalDescrition; ?>' class="img-responsive center" data-toggle="modal" data-target="#originalModel">
                    </div>
        <?php

function carouselModal($activateModal, $result, $collection) {

    $startIndex = 1;
    if($activateModal){ $startIndex = 0; }

              for ($i = $startIndex; $i < count($result); $i++) {

              $nodeTitle = $result[$i]["nodeTitle"];
              $nodeTitle = (empty($nodeTitle) ? 'Null' : $nodeTitle);
              $pageTitle = $result[$i]["pageTitle"];
              $pageFile = $result[$i]["pageFile"];
              $pagePtr = $result[$i]["pagePtr"];
              $urlStr = "dmGetItemInfoWebPage.php?collection=$collection&pointer=$pagePtr";
              $imgStr = "https://cdm22007.contentdm.oclc.org/utils/ajaxhelper/?CISOROOT=$collection&CISOPTR=$pagePtr&action=2&DMSCALE=100&DMWIDTH=40000&DMHEIGHT=40000&DMX=0&DMY=0";


              printf('
              <div class="item%s">
                  <img tabindex="0" src="%s" alt="%s" class="%simg-responsive center "%s>
                </div>
              ',($activateModal && $i == $startIndex ? ' active' : ''), $imgStr, $pageTitle,  ($activateModal ? '' : 'translation-img-size '), ($activateModal ? '' : ' data-toggle="modal" data-target="#originalModel"'));
              }
            }
            carouselModal(false, $result, $collection);
            echo '</div>

                    <a class="left carousel-control" href="#carousel-original" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-original" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12" id="originalDescription">
                <p>' . $originalDescrition . '</p>
              </div>
            </div>

          </div>
          ';
        ?>
      </div>


<!-- Modern Translation Section -->
      <div class="col-sm-12 col-md-6 col-lg-6">

        <div class="ruby-back">
          <div class="row">
            <div class="container">
              <div class="col-sm-8 col-md-8 col-lg-8">
                  <p><span tabindex="0" class="translation-type-title">Modern Translations</span></p>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <p class="text-right padding-xs-top text-nowrap"><em><small><a href="#upload-your-own-photo">Create your translation <i class="immm immm-photo"></i></a></small></em></p>
                </div>
              </div>
            </div>
          </div>

          <div class="translation-boxes">

            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 margin-sm-bottom">
                <h3 id="memeTitleChange" ><?php echo(types_render_field( 'modern-title', array('output'=>'raw') )); ?></h3>
              </div>
            </div>

            <!-- Wrapper for slides -->
            <?php
              $modernTitle = types_render_field( 'modern-title', array('output' => 'raw'));
              $modernImage = types_render_field( 'modern-image', array('output' => 'raw'));
              $modernDescription = types_render_field( 'modern-description', array('output' => 'raw'));
            ?>


            <div id="carousel-modern" class="carousel slide" data-ride="false">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                <a class="btn btn-default expland-modal-btn" data-toggle="modal" data-target="#modernModel"><i class="fal fa-expand-arrows"></i></a>
                  <div class="carousel-inner">
                    <div class="item active" id="showDes">
                      <img tabindex="0" src="<?php echo(types_render_field( 'modern-image', array('output'=>'raw') )); ?>" class="translation-img-size img-responsive center" data-toggle="modal" data-target="#modernModel" alt="<?php echo $modernTitle; ?>">
                    </div>
                      <?php
                        $translationSlug = "translation-".basename(get_permalink());
                        $translationCategory = "Translation ".get_the_title();
                        $translationTitle = get_the_title();

                        query_posts(array('post_type' => 'mememe', 'mememe_category' => $translationSlug, 'posts_per_page' => 999, 'order' => 'DSC' ));
                          if (have_posts()) {
                            while (have_posts() ) : the_post();
                              $memeTitle = get_the_title();
                              $photoUrl = get_the_post_thumbnail_url();

                              echo ("
                                <div class='item'>
                                  <img src='$photoUrl' alt='$memeTitle' class='translation-img-size img-responsive center' data-toggle='modal' data-target='#modernModel'>
                                </div>
                                ");
                                endwhile;
                              }else{
                                  echo('');
                              }
                              wp_reset_query();
                        ?>
                  </div>
                </div>
              </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-modern" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-modern" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12"  id="memeDescription">
            <?php echo(types_render_field( 'modern-description', array())); ?>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- Original Translation Pop-up Section -->
<div class="modal fade model-margin-top" id="originalModel" tabindex="-1" role="dialog" aria-labelledby="originalModalLabel">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
              <a type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></a>
                <h4 class="modal-title" id="contentDMModalTitleChange">
                  <?php echo $originalTitle; ?>
                </h4>
              </div>

              <div class="modal-body">
                <div class="container">
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div id="carousel-original-model" class="carousel slide" data-ride="false">
                      <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          <div class="carousel-inner">
                              <?php carouselModal(true, $result, $collection); ?>
                          </div>
                        </div>
                      </div>
                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-original-model" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-original-model" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <?php  echo '<p>' . $originalDescrition . '</p>'; ?>
                  </div>
                </div>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


<!-- Modern Translation Pop-up Section -->
 <div class="modal fade model-margin-top" id="modernModel" tabindex="-1" role="dialog" aria-labelledby="modernModalLabel">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            <a type="button" class="close btn bnt-default" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></a>
              <h4 class="modal-title" id="memeModalTitleChange">
                <?php echo $modernTitle; ?>
              </h4>
            </div>
              <div class="modal-body">
                <div class="container">

                  <div class="col-sm-12 col-md-6 col-lg-6">
                      <div id="carousel-modern-model" class="carousel slide" data-ride="false">
                          <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                              <div class="carousel-inner">
                                <div class="item active">
                                  <img tabindex="0" src="<?php echo(types_render_field( 'modern-image', array('output'=>'raw') )); ?>" class="translation-img-size img-responsive center" data-toggle="modal" data-target="#modernModel" alt="<?php echo $modernTitle; ?>">
                                </div>
                                  <?php
                                    $translationSlug = "translation-".basename(get_permalink());
                                    $translationCategory = "Translation ".get_the_title();
                                    $translationTitle = get_the_title();

                                    query_posts(array('post_type' => 'mememe', 'mememe_category' => $translationSlug, 'posts_per_page' => 999, 'order' => 'DSC' ));
                                      if (have_posts()) {
                                        while (have_posts() ) : the_post();
                                          $memeTitle = get_the_title();
                                          $photoUrl = get_the_post_thumbnail_url();

                                          echo ("
                                            <div class='item'>
                                              <img src='$photoUrl' alt='$memeTitle' class='img-responsive center' data-toggle='modal' data-target='#modernModel'>
                                            </div>
                                            ");
                                            endwhile;
                                          }else{
                                              echo('');
                                          }
                                          wp_reset_query();
                                    ?>
                              </div>
                            </div>
                          </div>
                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-modern-model" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-modern-model" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>

                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <?php
                      echo '<p>' . $modernDescription . '</p>';
                    ?>
                  </div>
                </div>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->


  <div id="upload-your-own-photo"></div>

<div class="container-fluid margin-md-top">
  <hr class="pink-line-break">
</div>

<div class="container-fluid brick">

  <div class="row">
    <div class="container">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <h2>Your Translation</h2>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="container">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <p>Send us your translation for this item:</p>
        <ul>
          <li>Select an image from our library below and add your own text</li>
          <li>Uploading your own photo. <!-- <button class="btn ruby-back" data-mode="text" title="Meme Jump Link" aria-label="Meme jump link" type="button" role="button" value="button" aria-pressed="false"><i class="immm immm-photo"></i></button> --></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="container">
      <div class="col-sm-12 col-md-12 col-lg-12 "  >
        <br>
        <noscript>
            <style>
                #no-javaScript-hide {display:none;}
            </style>
            <?php echo do_shortcode('[cred_form form="meme-form"]'); ?>
        </noscript>
        <div id="no-javaScript-hide">
          <?php echo do_shortcode('[mememe]'); ?>
        </div>

        </div>
      </div>
    </div>

</div>


 <?php
        function mapTags($t){
          return $t->name;
        }
        $pageIdentifier = types_render_field( 'translation-category', array('output' => 'raw'));
        $pageTag = array_map("mapTags", get_the_tags());

        query_posts(array('post_type' => 'database-entries', 'tag' => $pageTag, 'posts_per_page' => 4, 'order' => 'DSC' ));
          if (have_posts()) {

          echo"
            <div class='container-fluid'>
              <hr class='pink-line-break'>
            </div>

            <div class='container-fluid brick'>
              <div class='row'>
                <div class='container'>
                  <div class='col-sm-12 col-md-12 col-lg-12'>
                    <h2 class='margin-sm-top'>See Others Like This</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class='container-fluid brick chicklets no-bottom-margin margin-md-top'>
              <div class='row'>
            ";

            while (have_posts() ) : the_post();
              $categoryColors = array(
                1 => array("backgroundColor" => "maroon-back", "color" => "maroon"),
                2 => array("backgroundColor" => "light-orange-back", "color" => "light-orange"),
                3 => array("backgroundColor" => "light-green-back", "color" => "light-green"),
                4 => array("backgroundColor" => "ruby-back", "color" => "ruby")
              );
              $postTitle = get_the_title();
              $dataDescription = types_render_field( 'alt-text', array('output' => 'raw'));
              $contentdmUrl = do_shortcode('[contentdm_imgurl]');
              $sitesPostLink = get_the_permalink();
              $shortenTitle = do_shortcode('[limit_content length="50"]' . $postTitle . '[/limit_content]');

              echo ("
                <div class='col-sm-6 col-md-3 box " . $pageIdentifier . " chicklet " . $categoryColors[$pageIdentifier]["backgroundColor"] . "' data-category='$pageIdentifier' style='background:url($contentdmUrl); box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.7);' title='$postTitle'>
                  <h4 tabindex='0'><a href='$sitesPostLink'><i class='fas fa-circle fa-lg " . $categoryColors[$pageIdentifier]["color"] . "'></i> $shortenTitle</a></h4>
                    <div class='" . $categoryColors[$pageIdentifier]["backgroundColor"] . "'>
                      <span tabindex='0' class='chickletTitle'>
                        $shortenTitle
                      </span>
                  <p><a href='$sitesPostLink' class='read-more'>View Translation</a></p>
                </div>
              </div>
                ");
                endwhile;
                echo"
                </div>
                </div>
                ";
              }else{
                  echo('');
              }
              wp_reset_query();
        ?>


<script>
  $('.cmb2-id-mememe-post-category').css('display', 'none');
  $(window).bind("load", function() {
    $(".mememe-switch-mode.active[data-mode='text']").attr("aria-label", "button");
    $(".mememe-menu").attr("tabindex", "0");
    $(".mememe-group").attr("tabindex", "0");
    $(".mememe-group button").attr("tabindex", "0");
    $(".mememe-add-text").attr("aria-label", "button");
    $(" button[data-mode='hand']").attr("aria-label", "button");
    $(".mememe-fake-up").attr("aria-label", "button");
    $(".mememe-clear-canvas").attr("aria-label", "button");
    $("input[type='text']").attr("aria-label", "Text-Box");
    $("button.mememe-set-outline").attr("aria-label", "button");
    $("button.mememe-set-outline").attr("aria-label", "button");
    $("button.mememe-set-outline").attr("aria-label", "button");
    $("button.mememe-set-outline").attr("aria-label", "button");
    $("button.mememe-set-outline").attr("aria-label", "button");
    $(".cmb-th label[for='mememe_post_title']").text('Translation Title (*Required) ');
    $(".cmb-th label[for='mememe_post_title']").addClass('required-translation-title');
  });
  jQuery(window).on("load", function () {
    $("img[crossorigin='Anonymous']").attr("alt", "Canvas Meme Default Image");
  });



  <?php
    echo '
      $(document).ready(function(){
        $("#mememe_post_category option[value='. $slug .']").attr("selected", "selected");
      });
    ';
  ?>

  $('.carousel').carousel({
    pause: true,
    interval: 0
  })

  $('#carousel-original').on('slid.bs.carousel', function (e) {
    $memeTitle = $(e.relatedTarget).children('img').attr('alt');
    $('#contentDMTitleChange').html( $memeTitle );

     if ($('#showOriginalDescritpion').hasClass('active')){
        $('#originalDescription').show();
      }else{$('#originalDescription').hide();}
  });
  $('#carousel-original-model').on('slid.bs.carousel', function (e) {
    $memeTitle = $(e.relatedTarget).children('img').attr('alt');
    $('#contentDMModalTitleChange').html( $memeTitle );
  });

  $('#carousel-modern').on('slid.bs.carousel', function (e) {
    $memeTitle = $(e.relatedTarget).children('img').attr('alt');
    $('#memeTitleChange').html( $memeTitle );

    if ($('#showDes').hasClass('active')){
          $('#memeDescription').show();
        }else{$('#memeDescription').hide();}
  });

  $('#carousel-modern-model').on('slid.bs.carousel', function (e) {
    $memeTitle = $(e.relatedTarget).children('img').attr('alt');
    $('#memeModalTitleChange').html( $memeTitle );
    });

</script>


<?php get_footer(); ?>
