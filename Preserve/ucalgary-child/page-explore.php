<?php get_header();
/*
Template Name: Explore
*/
?>
<style>
.ui-widget-header{background:#f6931f;border: 1px solid #f6931f;}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {border: 1px solid #f6931f;background: #f6931f;font-weight: 400;color: #555;}
.ui-widget.ui-widget-content {border: 1px solid #f6931f;}
.ui-slider-horizontal .ui-slider-handle {top: -0.4em;margin-left: -.4em;}
.ui-slider .ui-slider-handle {position: absolute;z-index: 2;width: 1.6em;height: 1.6em;cursor: default;-ms-touch-action: none;touch-action: none;}
.explore-content-details{bottom: 0;position: absolute;color:#fff;}
.explore-circle-style{font-size: 26px;}

.desc-overflow{display: block;display: -webkit-box;height: 70px;margin: 0 auto;line-height: 1.4;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;}

</style>

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
            <div class="row">
              <!-- Search Section -->
              <div class="col-lg-6">
                <div class="input-group">
                  <span class="input-group-btn">
                    <button class="btn btn-default maroon-back" id='culture-option' style="border-radius: 0;" type="button">Culture Filter</button>
                  </span>
                  <select class="form-control" id="culture-filter">
                    <option>Select</option>
                      <?php
                      $args = array(
                                 'orderby' => 'ID',
                                 'order'=> 'ASC',
                                 'exclude' => array(1)
                              );

                      $categories = get_categories($args);
                      foreach ( $categories as $category ) {
                          $term_link = get_category_link($category->term_id );
                          $term_link = esc_url( $term_link );
                          echo '<option value="'.$category->term_id.'" id="'.$category->cat_name.'"><a href="'.$term_link.'">'.$category->cat_name.'</a></option>';
                      }
                      ?>
                  </select>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="input-group">
                  <span class="input-group-btn">
                    <button class="btn btn-default maroon-back" id='threat-option' style="border-radius: 0;" type="button">Threat Filter</button>
                  </span>
                  <select class="form-control" id='threat-filter'>
                    <option>Select</option>
                    <option id="Low">Low</option>
                    <option id="Medium">Medium</option>
                    <option id="High">High</option>
                  </select>
                </div>
              </div>
            </div>

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
        <div id="slider-range"></div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h2 style="margin-top:25px;">
            <label for="amount">Year range:</label>
            <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
          </h2>
        </div>
      </div>
    </div>
  </div>

<!-- <div class="fieldable-panels-pane container-fluid brick top-margin bottom-margin">
  <div class="container">
    <div class="row">
      <div class="col-md-12">-->

      <!-- <form role="search" action="<?php //echo site_url('/'); ?>" method="get" id="searchform">
          <div class="input-group input-group-lg">
            <input type="text" class="form-control" placeholder="Search for...">
            <input type="hidden" name="post_type" value="sites" />
            <span class="input-group-btn">
              <input class="btn btn-default btn-lg maroon-back" type="submit" alt="Search" value="Search" type="button" />
            </span>
          </div>
        </form> -->
      <!--</div>
    </div>
  </div>
</div> -->

<?php echo do_shortcode('[wpv-view name="explore"]'); ?>

<!-- <div class="fieldable-panels-pane container-fluid brick chicklets no-bottom-margin">
  <div class="row filter">
    <?php //echo do_shortcode('[wpv-view name="explore-page-featured-post-one"]'); ?>
    <?php //echo do_shortcode('[wpv-view name="explore-page-featured-post-two"]'); ?>
    <?php //echo do_shortcode('[wpv-view name="explore-page-featured-post-three"]'); ?>
  </div>
</div> -->
    <script>

    var years = $(".all").map(function() {
      var allYears = $.makeArray($(this).attr('data-year'));
        return allYears;
      });
    var highestYear = Math.max.apply(Math, years);
    var lowestYear = Math.min.apply(Math, years);

    function filterContents(beginYear, endYear) {

      beginYear = beginYear || $("#slider-range").slider("values")[0];
      endYear = endYear || $("#slider-range").slider("values")[1];

      var cultureSelection = $("#culture-filter option:selected").text();
      var re = new RegExp(cultureSelection);
      var threatSelection = $("#threat-filter option:selected").text();

      $(".all").hide().filter(function () {
              var year = $(this).attr("data-year");
              var returnVal =
                  (year >= beginYear && year <= endYear)
                  && (cultureSelection == "Select" || re.test($(this).attr("data-culture")))
                  && (threatSelection == "Select" || $(this).attr("data-threat") == threatSelection)
                  ;

              return returnVal;
          })
          .show();
        }

        $('#culture-filter').change(function() {
          filterContents();
        });

        $('#threat-filter').change(function() {
          filterContents();
        });

    $(function () {
        $("#slider-range").slider({
            range: true,
            min: lowestYear,
            max: highestYear,
            values: [lowestYear, highestYear],
            slide: function (event, ui) {
                $("#amount").val( ui.values[0] + " - " + ui.values[1]);
                filterContents(ui.values[0], ui.values[1]);
            }
        });
        $("#amount").val( $("#slider-range").slider("values", 0) + " - " + $("#slider-range").slider("values", 1));
    });
    </script>

<?php get_footer(); ?>
