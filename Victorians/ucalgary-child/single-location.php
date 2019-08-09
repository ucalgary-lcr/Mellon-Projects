<?php get_header(); /* */ ?>
<!-- <div class="fieldable-panels-pane container-fluid brick main-title">
<div class="container">
	<h1 class="mt-4 mb-3"><?php //the_title(); ?></h1>
	<div class="row">
		<div class="col-lg-8">
             <hr>
			<img alt="" class="img-fluid rounded" src="<?php //echo get_the_post_thumbnail_url(); ?>">

		<div class="container">
			<div class="row">
			<hr>
				<div class="table-responsive">
						<table class="table table-hover">
							<tbody> -->
								<?php

									// echo(types_render_field( 'field-slug', array( 'output' => 'raw' ) ));

								// 	$historicalHouseName = types_render_field( 'historical-house-name', array( 'output' => 'raw' ));
								// 	$currentHouseName = types_render_field( 'current-house-name', array( 'output' => 'raw' ));
								// 	$historicBuildingNumber = types_render_field( 'historic-building-number', array( 'output' => 'raw' ));
								// 	$historicStreetName = types_render_field( 'historic-street-name', array( 'output' => 'raw' ));
								// 	$currentBuildingNumber = types_render_field( 'current-building-number', array( 'output' => 'raw' ));
								// 	$currentStreetName = types_render_field( 'current-street-name', array( 'output' => 'raw' ));
								// 	$historicVillageName = types_render_field( 'historic-village-name', array( 'output' => 'raw' ));
								// 	$historicTown = types_render_field( 'historic-town', array( 'output' => 'raw' ));
								// 	$historicBoroughSuburb = types_render_field( 'historic-borough-suburb', array( 'output' => 'raw' ));
								// 	$city = types_render_field( 'city', array( 'output' => 'raw' ));
								// 	$county = types_render_field( 'county', array( 'output' => 'raw' ));
								// 	$country = types_render_field( 'country', array( 'output' => 'raw' ));
								// 	$parish = types_render_field( 'parish', array( 'output' => 'raw' ));
								// 	$latitude = types_render_field( 'latitude', array( 'output' => 'raw' ));
								// 	$longitude = types_render_field( 'longitude', array( 'output' => 'raw' ));
								// 	$currentCountry = types_render_field( 'current-country', array( 'output' => 'raw' ));
								// 	$generalPrecision = types_render_field( 'general-precision', array( 'output' => 'raw' ));
								// 	$estimatedSpatialPrecision = types_render_field( 'estimated-spatial-precision', array( 'output' => 'raw' ));
								// 	$reverseGeocode = types_render_field( 'reverse-geocode', array( 'output' => 'raw' ));
								// 	$latLongSource = types_render_field( 'lat-long-source', array( 'output' => 'raw' ));
								// 	$historicBuildingExists = types_render_field( 'historic-building-exists', array( 'output' => 'raw' ));
								// 	$multipleAddressesFound = types_render_field( 'multiple-addresses-found', array( 'output' => 'raw' ));
								// 	$currentGoogleAddress = types_render_field( 'current-google-address', array( 'output' => 'raw' ));
								// 	$currentOpenStreetMapAddressOSM = types_render_field( 'current-open-street-map-address-osm', array( 'output' => 'raw' ));
								// 	$currentVillageName = types_render_field( 'current-village-name', array( 'output' => 'raw' ));
								// 	$currentTown = types_render_field( 'current-town', array( 'output' => 'raw' ));
								// 	$currentBoroughSuburb = types_render_field( 'current-borough-suburb', array( 'output' => 'raw' ));
								// 	$currentCounty = types_render_field( 'current-county', array( 'output' => 'raw' ));
								// 	$currentParish = types_render_field( 'current-parish', array( 'output' => 'raw' ));
								// 	$contributorOne = types_render_field( 'contributor-1', array( 'output' => 'raw' ));
								// 	$contributorTwo = types_render_field( 'contributor-2', array( 'output' => 'raw' ));
								// 	$contributorAffiliation = types_render_field( 'contributor-affiliation', array( 'output' => 'raw' ));
								// 	$dateOfEntry = types_render_field( 'date-of-entry', array( 'output' => 'raw' ));
								// 	$historicHouseName = types_render_field( 'historic-house-name', array( 'output' => 'raw' ));



								// if( $historicalHouseName == true ){
								// 	echo "<tr>
								// 			<th>Historical House Name</th>
								// 			<td>" . $historicalHouseName . "</td>
								// 		</tr>";
								// }else{echo'';} 

								// if( $currentHouseName == true ){
								// 	echo '<tr>
								// 		<th>Current House Name</th>
								// 		<td>' . $currentHouseName . '</td>
								// 	</tr>';
								// }else{echo'';} 

								// if( $historicBuildingNumber == true ){
								// 	echo '<tr>
								// 			<th>Historic Building Number</th>
								// 			<td>' . $historicBuildingNumber . '</td>
								// 		</tr>';
								// }else{echo'';}

								// if( $historicStreetName == true ){
								// 	echo '<tr>
								// 		<th>Historic Street Name</th>
								// 		<td>' . $historicStreetName . '</td>
								// 	</tr>';
								// }else{echo'';} 

								// if( $currentBuildingNumber == true ){
								// 	echo '<tr>
								// 		<th>Current Building Number</th>
								// 		<td>' . $currentBuildingNumber . '</td>
								// 	</tr>';
								// }else{echo'';} 

								// if( $historicVillageName == true ){
								// 	echo '<tr>
								// 		<th>Historic Village Name</th>
								// 		<td>' . $historicVillageName . '</td>
								// 	</tr>';
								// }else{echo'';} 

								// if( $historicTown == true ){
								// 	echo '<tr>
								// 		<th>Historic Town</th>
								// 		<td>' . $historicTown . '</td>
								// 	</tr>';
								// }else{echo'';} 

								// if( $historicBoroughSuburb == true ){
								// 	echo '<tr>
								// 		<th>Historic Borough / Suburb</th>
								// 		<td>' . $historicBoroughSuburb . '</td>
								// 	</tr>';
								// }else{echo'';} 

								// if( $city == true ){
								// 	echo '<tr>
								// 		<th>City</th>
								// 		<td>' . $city . '</td>
								// 	</tr>';
								// }else{echo'';} 

								// if( $county == true ){
								// 	echo '<tr>
								// 		<th>County</th>
								// 		<td>' . $county . '</td>
								// 	</tr>';
								// }else{echo'';} 

								// if( $country == true ){
								// 	echo '<tr>
								// 		<th>Country</th>
								// 		<td>' . $country . '</td>
								// 	</tr>';
								// }else{echo'';} 

								// if( $parish == true ){
								// 	echo '<tr>
								// 		<th>Parish</th>
								// 		<td>' . $parish . '</td>
								// 	</tr>';
								// }else{echo'';} 

								// if( $latitude ==  true ){
								// 	echo '<tr>
								// 		<th>Latitude</th>
								// 		<td>' . $latitude . '</td>
								// 	</tr>';
								// }else{echo'';} 

								// if( $longitude == true ){
								// 	echo '<tr>
								// 		<th>Longitude</th>
								// 		<td>' . $longitude . '</td>
								// 	</tr>';
								// }else{echo'';} 

								// if( $currentCountry == true ){
								// 	echo '<tr>
								// 		<th>Currebt Country</th>
								// 		<td>' . $currentCountry . '</td>
								// 	</tr>';
								// }else{echo'';} 
								
								// if( $generalPrecision == true ){
								// 	echo '<tr>
								// 		<th>General Precision</th>
								// 		<td>' . $generalPrecision . '</td>
								// 	</tr>';
								// }else{echo'';} 
								
								// if( $estimatedSpatialPrecision == true ){
								// 	echo '<tr>
								// 		<th>Estimate Spatial Precision</th>
								// 		<td>' . $estimatedSpatialPrecision . '</td>
								// 	</tr>';
								// }else{echo'';} 
								
								// if( $reverseGeocode == true ){
								// 	echo '<tr>
								// 		<th>Reverse Geocode</th>
								// 		<td>' . $reverseGeocode . '</td>
								// 	</tr>';
								// }else{echo'';} 
								
								// if( $latLongSource == true ){
								// 	echo '<tr>
								// 		<th>Latitude / Longitude Source</th>
								// 		<td>' . $latLongSource . '</td>
								// 	</tr>';
								// }else{echo'';} 
								
								// if( $historicBuildingExists == true ){
								// 	echo '<tr>
								// 		<th>Historic Building Exists</th>
								// 		<td>' . $historicBuildingExists . '</td>
								// 	</tr>';
								// }else{echo'';} 
								
								// if( $multipleAddressesFound == true ){
								// 	echo '<tr>
								// 		<th>Multiple Addresses Found</th>
								// 		<td>' . $multipleAddressesFound . '</td>
								// 	</tr>';
								// }else{echo'';} 
								
								// if( $currentGoogleAddress == true ){
								// 	echo '<tr>
								// 		<th>Current Google Address</th>
								// 		<td>' . $currentGoogleAddress . '</td>
								// 	</tr>';
								// }else{echo'';} 
								
								// if( $currentOpenStreetMapAddressOSM == true ){
								// 	echo '<tr>
								// 		<th>Current Open Street Map Address (OSM)</th>
								// 		<td>' . $currentOpenStreetMapAddressOSM . '</td>
								// 	</tr>';
								// }else{echo'';} 
								
								// if( $currentVillageName == true ){
								// 	echo '<tr>
								// 		<th>Current Village Name</th>
								// 		<td>' . $currentVillageName . '</td>
								// 	</tr>';
								// }else{echo'';} 
								
								// if( $currentTown == true ){
								// 	echo '<tr>
								// 		<th>Current Town</th>
								// 		<td>' . $currentTown . '</td>
								// 	</tr>';
								// }else{echo'';} 
								
								// if( $currentBoroughSuburb == true ){
								// 	echo '<tr>
								// 		<th>Current Borough / Suburb</th>
								// 		<td>' . $currentBoroughSuburb . '</td>
								// 	</tr>';
								// }else{echo'';} 
																
								// if( $currentCounty == true ){
								// 	echo '<tr>
								// 		<th>Current County</th>
								// 		<td>' . $currentCounty . '</td>
								// 	</tr>';
								// }else{echo'';} 
																
								// if( $currentParish == true ){
								// 	echo '<tr>
								// 		<th>Current Parish</th>
								// 		<td>' . $currentParish . '</td>
								// 	</tr>';
								// }else{echo'';} 
																
								// if( $contributorOne == true ){
								// 	echo '<tr>
								// 		<th>Contributor 1</th>
								// 		<td>' . $contributorOne . '</td>
								// 	</tr>';
								// }else{echo'';}
																
								// if( $contributorTwo == true ){
								// 	echo '<tr>
								// 		<th>Contributor 2</th>
								// 		<td>' . $contributorTwo . '</td>
								// 	</tr>';
								// }else{echo'';}
																
								// if( $contributorAffiliation == true ){
								// 	echo '<tr>
								// 		<th>Contributor Affiliation</th>
								// 		<td>' . $contributorAffiliation . '</td>
								// 	</tr>';
								// }else{echo'';}
																
								// if( $dateOfEntry == true ){
								// 	echo '<tr>
								// 		<th>Date of Entry</th>
								// 		<td>' . $dateOfEntry . '</td>
								// 	</tr>';
								// }else{echo'';}
																
								// if( $historicHouseName == true ){
								// 	echo '<tr>
								// 		<th>Historic House Name</th>
								// 		<td>' . $historicHouseName . '</td>
								// 	</tr>';
								// }else{echo'';}



								?>
							<!-- </tbody>
						</table>
				</div>
			</div>
		</div>

	</div> -->

			<!-- <div class="col-md-4">
				<?php //get_sidebar(); ?>
				<hr>
				<h3>Who Lived Here:</h3>
				<ul class="list-unstyled">
					<?php //echo do_shortcode('[wpv-view name="who-lived-here"]'); ?>
				</ul>
			</div>
		</div>
	</div>
</div> -->
<?php get_footer(); ?>