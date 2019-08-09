<?php get_header(); /* Template Name: Home Page Template */ ?>
<div class="hero-cta banner fieldable-panels-pane container-fluid brick no-bottom-margin image-focus-center light no-bottom-margin">
	<div class="row vmiddle hcenter" style="background-image: url('<?php the_post_thumbnail_url( ); ?>'); box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.6);">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 hidden-md hidden-lg">
                    <img alt="<?php the_title(); ?>" class="img-responsive" src="<?php the_post_thumbnail_url(); ?>">
                </div>

				<div class="col-sm-12">
					<div class="cta-content cta-content-centre">
						<h2>Examining the effect of propinquity on the careers of Victorian writers, artists, editors and publishers.</h2>
						<div class="btn-wrapper btn-inline">
                            <button class="btn btn-ghost btn-lg" role="button" id="clickMap">Map</button>
                            <button class="btn btn-ghost btn-lg" role="button" id="clickList">List</button>
                        </div>
                        <hr>
												<div class="search-home">
													<?php echo do_shortcode('[wpv-form-view name="list-of-people" target_id="self"]'); ?>
												</div>
                        <div class="timeline-home">
                    			<form class="form-inline">
                            <div class="form-group">
                              <label>Year Range:</label>
                              <input type="text" class="form-control" id="amount" readonly style="border:0; color:#f6931f; background-color:transparent; font-size: 21px; width: 50%;">
                            </div>
                        	</form>
                          <div id="slider-range"></div>
                        </div>
                                <br>
                                <form class="form-inline">
                                    <div class="form-group">
                                      <select id="gender" class="form-control">
                                        <option>-- Gender --</option>
                                        <option id="Female">Female</option>
                                        <option id="Male">Male</option>
                                        <option id="Nonbinary">Non-Binary</option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <select id="profession" class="form-control">
                                        <option>-- Profession --</option>
                                        <option id="artist">Artist</option>
                                        <option id="author">Author</option>
                                        <option id="musician">Musician</option>Musician
                                        <option id="editor">Editor</option>
                                        <option id="publisher">Publisher</option>
																				<option id="theatre">Theatre</option>
                                      </select>
                                    </div>
                                </form>
															</div>
                						</div>
													</div>
												</div>
											</div>
										</div>
    <?php echo do_shortcode('[wpv-view name="map"]'); ?>
    <?php echo do_shortcode('[wpv-view name="list"]'); ?>
<div class="fieldable-panels-pane container-fluid brick drawer no-bottom-margin">
	<div class="row drawer-cta maroon-back">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
                    <?php while(have_posts()): the_post(); ?>
                    <?php the_content();
                    endwhile;
                    ?>
				</div>
			</div>
		</div>
    </div>
</div>

<script>
    $("#list-items").hide();
		$( ".search-home" ).hide();
    $( "#clickMap" ).click(function() {
        $( "#map-brick" ).show();
        $( ".timeline-home" ).show();
				$( ".search-home" ).hide();
        $( "#map-filter").show();
        $( "#list-items" ).hide();
        $( "#list-filter").hide();
        $('#clickMap').addClass('red-back');
        $('#clickList').removeClass('red-back');
    });
    $( "#clickList" ).click(function() {
        $( "#list-items" ).show();
        $( "#list-filter" ).show();
				$( ".search-home" ).show();
        $('#clickMap').removeClass('red-back');
        $('#clickList').addClass('red-back');
        $( ".timeline-home" ).hide();
        $( "#map-brick" ).hide();
        $( "#map-filter").hide();
    });

    var years = $(".filter-map").map(function() {
        var resTo = $.makeArray($(this).attr('data-resto'));
        var resFrom = $.makeArray($(this).attr('data-resfrom'));
        var notAfter = $.makeArray($(this).attr('data-notafter'));
        var notBefore = $.makeArray($(this).attr('data-notbefore'));
        return  $.merge( resTo, resFrom, notAfter, notBefore );
        });

         //console.log(years);

        var highestYear = Math.max.apply(Math, years);
        var lowestYear = Math.min.apply(Math, years);



    function filterContents(beginYear, endYear) {

            beginYear = beginYear || $("#slider-range").slider("values")[0];
            endYear = endYear || $("#slider-range").slider("values")[1];

            function showTarget(filterTarget, targetDropdownValue) {
                var show = false;

                if ( typeof targetDropdownValue == 'undefined' ) {
                    show = true;
                }
                else {
                    show = filterTarget.hasClass(targetDropdownValue);
                }
                    return show;
                }


// This is a filter for the map code
            $(".filter-map").hide().filter(function () {

                    var resFrom = $(this).attr('data-resfrom');
                    var notBefore = $(this).attr('data-notbefore');

                    var resTo = $(this).attr('data-resto');
                    var notAfter = $(this).attr('data-notafter');

                    // console.log($(this));
                    // console.log(showTarget( $(this), $('#gender').children(":selected").attr("id")) && showTarget( $(this), $('#profession').children(":selected").attr("id")));
										// console.log(resFrom);
										// console.log(resTo);
										// console.log(notBefore);
										// console.log(notAfter);

                    var returnVal = (( resFrom >= beginYear || notBefore >= beginYear ) && (resTo <= endYear || notAfter <= endYear) && showTarget( $(this), $('#gender').children(":selected").attr("id")) && showTarget( $(this), $('#profession').children(":selected").attr("id")) );

                    // console.log(returnVal);

                    try {
                        var map = WPViews.view_addon_maps.markers.map;
                        var mapMarkerId = $(this).attr("data-marker");
												 // console.log(mapMarkerId);
                        returnVal ? map[mapMarkerId].setVisible(true) : map[mapMarkerId].setVisible(false);
                    }
                    catch (err) { }
                    // console.log('--------------------------------------');
                    return returnVal;

            }).show();

            // This is a filter for the people code
        $(".filter-people").hide().filter(function () {

            var returnVal = ( showTarget( $(this), $('#gender').children(":selected").attr("id")) && showTarget( $(this), $('#profession').children(":selected").attr("id")) );
            return returnVal;

            }).show();
        }




        $('#gender').change(function(){
            filterContents();
        });
        $('#profession').change(function(){
            filterContents();
        });

        $('#profession').change(function(){
            var selector = '.' + $(this).children(":selected").attr("id");
                $(selector).show();
                $( ".filter:not(" + selector + ")" ).hide();
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


								jQuery( document ).on( 'js_event_wpv_addon_maps_init_map_completed', function( event, data ) {

								  	var mapMinZoom = 0;
								    var mapMaxZoom = 20;
								    var nlsmap = new google.maps.ImageMapType({
								    getTileUrl:function(tile,zoom) { return NLSTileUrlOS(tile.x,tile.y,zoom);},
								    tileSize:new google.maps.Size(256,256),
								    maxZoom:mapMaxZoom,
								    minZoom:mapMinZoom,
								    isPng:false,
								    name: 'Historic'
								    });

								    var opts = {
								      streetViewControl: false,
								      center: new google.maps.LatLng(53.2653,-4.4291),
								      zoom: 12,
								      mapTypeControlOptions:{mapTypeIds:[google.maps.MapTypeId.SATELLITE,google.maps.MapTypeId.ROADMAP,'historic']},
								      mapTypeControl:true,
								      style:google.maps.MapTypeControlStyle.HORIZONTAL_BAR
								    };

									map = WPViews.view_addon_maps.maps.map;
									map.setOptions(opts);
									map.mapTypes.set('historic',nlsmap,opts);
									map.setMapTypeId('roadmap');

								  var markerRE = /\d+-\d+$/;
								$.each(
								    $('.wpv-addon-maps-marker')
								        .filter(function () {
								            return markerRE.test($(this).data('marker').toString());
								        })
								        .map(function () {
								            return $(this).data('marker').toString();
								        }),

								    function ( key, value ) {
								        WPViews.view_addon_maps.markers.map[value].setVisible(false);
								    }
								)
								  });

</script>
<?php get_footer(); ?>
