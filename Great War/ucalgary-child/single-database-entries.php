<?php get_header(); ?>
<?php
  $databaseTitle = get_the_title();
  $altText = types_render_field( 'alt-text', array( 'output' => 'raw'));
  $callNumber = types_render_field( 'callnumber', array( 'output' => 'raw'));
  $location = types_render_field( 'location', array( 'output' => 'raw'));
  $author = types_render_field( 'author', array( 'output' => 'raw'));
  $publisherData = types_render_field( 'publisher-data', array( 'output' => 'raw'));
  $year = types_render_field( 'year', array( 'output' => 'raw'));
  //$contentfmId = types_render_field( 'contentdm-id', array( 'output' => 'raw' ));

  $collection = 'cmh';
  $pointer = types_render_field( 'contentdm-id', array( 'output' => 'raw' ));
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
<div class="fieldable-panels-pane container-fluid brick text-cta">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="row-md-height">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="fieldable-panels-pane container-fluid brick top-margin">
  <div class="container">
    <div class="row">

      <div class="col-sm-12 col-md-3 col-lg-3">
      <a class="btn btn-default expland-modal-btn" data-toggle="modal" data-target="#databaseModel"><i class="fal fa-expand-arrows"></i></a>
          <img src="<?php echo do_shortcode('[contentdm_imgurl]'); ?>" data-toggle="modal" data-target="#databaseModel" class="img-responsive" alt='<?php echo $databaseTitle; ?>' />
      </div>

      <div class="col-sm-12 col-md-9 col-lg-9">
        <?php ?>
        <table class="table table-hover">
          <tbody>
            <tr>
              <th>Description</th>
              <td><?php echo $altText; ?></td>
            </tr>
            <tr>
              <th>Author</th>
              <td><?php echo $author; ?></td>
            </tr>
            <tr>
              <th>Publisher Data</th>
              <td><?php echo $publisherData; ?></td>
            </tr>
            <tr>
              <th>Location</th>
              <td><?php echo $location; ?></td>
            </tr>
            <tr>
              <th>Year</th>
              <td><?php echo $year; ?></td>
            </tr>
            <tr>
              <th>Call Number</th>
              <td><?php echo $callNumber; ?></td>
            </tr>

          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>


<!-- Original Translation Pop-up Section -->
<div class="modal fade model-margin-top" id="databaseModel" tabindex="-1" role="dialog" aria-labelledby="databaseModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="contentDMModalTitleChange">
          <?php echo $databaseTitle; ?>
        </h4>
      </div>

      <div class="modal-body">
        <div class="container">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div id="carousel-database-model" class="carousel slide" data-ride="false">
              <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="carousel-inner">
                    <div class="item active">
                        <img tabindex="0" src="<?php echo do_shortcode('[contentdm_imgurl]'); ?>" alt="<?php echo  $databaseTitle; ?>" class="img-responsive center">
                      </div>
                  <?php

                      for ($i = 1; $i < count($result); $i++) {

                        $nodeTitle = $result[$i]["nodeTitle"];
                        $nodeTitle = (empty($nodeTitle) ? 'Null' : $nodeTitle);
                        $pageTitle = $result[$i]["pageTitle"];
                        $pageFile = $result[$i]["pageFile"];
                        $pagePtr = $result[$i]["pagePtr"];
                        $urlStr = "dmGetItemInfoWebPage.php?collection=$collection&pointer=$pagePtr";
                        $imgStr = "https://cdm22007.contentdm.oclc.org/utils/ajaxhelper/?CISOROOT=$collection&CISOPTR=$pagePtr&action=2&DMSCALE=100&DMWIDTH=40000&DMHEIGHT=40000&DMX=0&DMY=0";

                      echo('
                      <div class="item">
                          <img tabindex="0" src="' . $imgStr . '" alt="' . $pageTitle . '" class="img-responsive center active">
                        </div>
                      ');

                        }

                    ?>

                  </div>
                </div>
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-database-model" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-database-model" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
  $('.carousel').carousel({
    pause: true,
    interval: 0
  })

  $('#carousel-database-model').on('slid.bs.carousel', function (e) {
    $memeTitle = $(e.relatedTarget).children('img').attr('alt');
    $('#contentDMModalTitleChange').html( $memeTitle );
  });
</script>
<?php get_footer(); ?>
