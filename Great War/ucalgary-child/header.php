<!DOCTYPE html>
<html <?php $lang = get_bloginfo( 'language' );
if ($lang == "en-US") { echo'lang="en-CA"'; } elseif ($lang == "fr-FR") { echo'lang="fr-CA"'; }else{} ?> ng-app="dmApp" ng-controller="dmController">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
	$category = types_render_field('translation-category', array());
	$title = get_the_title();
?>
<title><?php /*echo(types_render_field( 'title-metadata', array( 'output' => 'raw' ) )); */ echo $title; ?><?php if( $category == true ){ echo " | $category"; }else{ echo ""; } ?> | <?php bloginfo('name'); ?></title>
<meta name="description" content="<?php echo(types_render_field( 'description-metadata', array( 'output' => 'raw' ) )); ?>" />
<meta name="dcterms.title" content="<?php echo "$title"; ?>" />
<meta name="dcterms.creator" content="<?php echo(types_render_field( 'dc-element-creator-metadata', array( 'output' => 'raw' ) )); ?>" />
<meta name="dcterms.subject" title="gccore" content="<?php echo(types_render_field( 'dc-element-subject-metadata', array( 'output' => 'raw' ) )); ?>" />
<meta name="dcterms.issued" title="W3CDTF" content="<?php echo get_the_date("Y-m-d"); ?>" />
<meta name="dcterms.modified" title="W3CDTF" content="<?php the_modified_date("Y-m-d"); ?>" />
<?php $language = get_bloginfo('language'); ?>
<meta name="dcterms.language" title="ISO639-2/T" content="<?php if($language == "en-US"){ echo "eng"; }else{ echo "fra"; } ?>" />

<?php
if(is_singular()){ wp_enqueue_script('comment-reply'); }
wp_head();

?>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-87DrmpqHRiY8hPLIr7ByqhPIywuSsjuQAfMXAE0sMUpY3BM7nXjf+mLIUSvhDArs" crossorigin="anonymous">

</head>

<?php //echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
<a class="skip-main" href="#content">Skip to main content</a>
<body data-spy="scroll" data-target=".navbar">
	<header class="container-fluid">
			<div class="group" id="navigation">
				<div class="row uc-logo-container">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="E-F-link">
									<?php do_action('wpml_add_language_selector'); ?>
								</div>
								<div class="uc-logo">
									<ul class="list-unstyled list-inline">
										<li><a href="https://www.ucalgary.ca" target="_blank"><img class="img-responsive" alt="University of Calgary Logo" src="/wp-content/uploads/2019/02/UC-logo.png"></a></li>
										<?php
										if(isset($_GET['lang']))
										{
										echo'<li><a href="http://www.museevirtuel.ca" target="_blank"><img class="img-responsive" alt="Virtual Museum Logo" src="/wp-content/uploads/2019/02/vmc-logo-fr.png"></a></li>';
										}else{
										echo'<li><a href="https://www.virtualmuseum.ca" target="_blank"><img class="img-responsive" alt="Virtual Museum Logo" src="/wp-content/uploads/2019/02/vmc-logo-en.png"></a></li>';
										}
										?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row uc-nav-container">
					<div class="container">
						<div class="row division">
							<div class="col-sm-12">
								<ul>
									<li class="group">
										<a  href="<?php echo home_url(); ?>" <?php //echo get_bloginfo('description'); ?>><div id="title"><?php bloginfo('name'); ?></div></a>
									</li>
								</ul>
							</div>
						</div>

						<div class="row menus">
							<div class="col-sm-12">
								<div class="uc-nav">
									<nav class="navbar navbar-default navbar-static-top">
									  <div class="container">
										<div class="navbar-header">
										  <a type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										  </a>
										</div>
										<?php
											// if ( is_front_page() ) {

											// 	} else {
													wp_nav_menu( array(
													'menu'              => 'primary',
													'theme_location'    => 'primary',
													'depth'             => 3,
													'container'         => 'div',
													'container_class'   => 'navbar-collapse collapse scrollable-menu',
													'container_id'      => 'navbar',
													'menu_class'        => 'nav navbar-nav navbar-left',
													'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
													'walker'            => new wp_bootstrap_navwalker())
												);
												// }
										?>

									  </div>
									</nav>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>


   <?php if(get_header_image() != ''){ ?>
   <div id="header-image">
		 <img class="img-responsive center-block" src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>"/>
	 </div>
   <?php } ?>
<main id="content">
