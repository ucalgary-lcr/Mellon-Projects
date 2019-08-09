<?php get_header(); /* */ ?>

<div class="fieldable-panels-pane container-fluid brick main-title">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="mt-4 mb-3"><?php the_title(); ?>, <?php echo(types_render_field( 'dob', array( 'output' => 'raw' ))); ?> - <?php echo(types_render_field( 'dod', array( 'output' => 'raw' ))); ?> </h1>
				<h2><?php echo(types_render_field( 'roles', array( 'seperator' => ', ' ))); ?></h2>
			</div>
			<div class="col-sm-12">
				<?php
						$showMyDetails = types_render_field( 'display-my-contributor-information-on-website', array( 'output' => 'raw' ));
						$contributorName = types_render_field( 'contributor-name', array( 'output' => 'raw' ));
						$contributorAffiliation = types_render_field( 'contributor-affiliation', array( 'output' => 'raw' ));
						$contributorSources = types_render_field( 'contributor-sources', array(  ));

						if($showMyDetails == true){
							echo( '<p>');
							echo('Submitted by '. $contributorName);
							echo(', ');
							echo($contributorAffiliation);
							echo('</p>');
						}else{}
					?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<hr>
			</div>
		</div>
	</div>
</div>
<div class="fieldable-panels-pane container-fluid brick">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">

				<div class="container">
					<div class="row">
						<?php echo do_shortcode('[wpv-view name="individuals-page-map"]'); ?>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<?php echo do_shortcode('[wpv-view name="where-i-lived"]'); ?>
					</div>
				</div>

				<div class="container">
					<div class="row">
						<?php
						if(types_render_field( 'work-consulted-wysiwyg') == true ){
							echo '<h3>Works Consulted</h3>';
							echo types_render_field( 'work-consulted-wysiwyg', array( ));
						}
						?>
					</div>
					<!-- <div class="row"> -->
						<?php
						// if(types_render_field( 'contributor-information') != "" ){
						// 	echo '<h3>Submitted By</h3>';
						// 	echo types_render_field( 'contributor-information', array());
						// }
						?>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="personimage">
					<?php
						$personPhoto =  get_the_post_thumbnail_url();
						$name = get_the_title();
						$photoCredit = types_render_field( 'photo-credit', array( 'output' => 'raw' ));

						if( $personPhoto == true ){
							echo('<img class="img-fluid rounded" src="'. $personPhoto .'" alt="'. $name .'">');
						}else{
							echo(' <div class="thumbnail text-center"><img class="img-fluid rounded" src="https://victorians.ucalgary.ca/wp-content/uploads/2019/02/user-1.png" alt="'. $name .'"></div>');
						}

					?>

				</div>
				<?php
					if( $photoCredit == true ){
						echo(
							'<p><strong>Credit:</strong> '.$photoCredit.'</p>'
						);

						}
						else{
							echo('');
						}
				?>
				<!-- <div class="container">
					<div class="row">
						<div class="table-responsive">
							<table class="table table-hover">
								<tbody> -->
									<?php
										// echo(types_render_field( 'field-slug', array( 'output' => 'raw' ) ));
										$forname = types_render_field( 'forename', array( 'output' => 'raw' ));
									    $middleName = types_render_field( 'middle-name', array( 'output' => 'raw' ));
										$maidendName = types_render_field( 'maiden-name', array( 'output' => 'raw' ));
										$marriedName = types_render_field( 'married-name', array( 'output' => 'raw' ));
										$penName = types_render_field( 'pen-name', array( 'output' => 'raw' ));
										$roles = types_render_field( 'roles', array( "separator" => ", " ));
										$viafLink = types_render_field( 'viaf_link', array( 'output' => 'raw' ));
										$viafId = types_render_field( 'viaf_id', array( 'output' => 'raw' ));
										$gender = types_render_field( 'gender', array( 'output' => 'raw' ));
										$dob = types_render_field( 'dob', array( 'output' => 'raw' ));
										$dod = types_render_field( 'dod', array( 'output' => 'raw' ));
										$toYear = types_render_field( 'to_year', array( 'output' => 'raw' ));
										$orlandoLink = types_render_field( 'orlando-link', array( 'output' => 'raw' ));
/*
									if( $roles == true ){
										echo '<tr>
											<th>Profession</th>
											<td>' . $roles . '</td>
										</tr>';
									}else{echo'';}*/

									// if( $gender == true ){
									// 	echo '<tr>
									// 		<th>Gender</th>
									// 		<td>' . $gender . '</td>
									// 	</tr>';
									// }else{echo'';}

									// if( $maidenName == true ){
									// 	echo '<tr>
									// 		<th>Maiden Name</th>
									// 		<td>'. $maidenName. '</td>
									// 	</tr>';
									// }

									// if( $marriedName == true ){
									// 	echo '<tr>
									// 		<th>Married Name</th>
									// 		<td>'. $marriedName. '</td>
									// 	</tr>';
									// }

								/*if( $orlandoLink == true ){
										echo '<tr>
											<th>Orlando Link</th>
											<td><a href="' . $orlandoLink . '" target="_blank">Link</a></td>
										</tr>';
									}else{echo'';}**/

									?>
								<!-- </tbody>
							</table>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
