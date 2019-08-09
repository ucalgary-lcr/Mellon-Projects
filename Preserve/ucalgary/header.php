<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>
<meta name="description" content="<?php echo(types_render_field( 'description-metadata', array( 'output' => 'raw' ) )); ?>" />
<?php
if(is_singular()){ wp_enqueue_script('comment-reply'); }
wp_head();
?>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-Bx4pytHkyTDy3aJKjGkGoHPt3tvv6zlwwjc3iqN7ktaiEMLDPqLSZYts2OjKcBx1" crossorigin="anonymous">
</head>
<?php echo '<body class="'.join(' ', get_body_class()).'">'.PHP_EOL; ?>
<a href="#content" class="hidden">Skip to main content</a>
	<header class="container-fluid">
			<div class="group" id="navigation">
				<div class="row uc-logo-container">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="uc-logo">
									<ul class="list-unstyled list-inline">
										<li><a href="https://www.ucalgary.ca" target="_blank"><img class="img-responsive" alt="University of Calgary Logo" src="https://libapps.ucalgary.ca/Springshare/src/img/Master/4-White/UC-horz-white.png"></a></li>
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
										<a  href="<?php echo home_url(); ?>"><div id="title"><?php bloginfo('name'); ?></div></a>
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
										  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										  </button>
										</div>
											<?php

												wp_nav_menu( array(
												'menu'              => 'primary',
												'theme_location'    => 'primary',
												'depth'             => 2,
												'container'         => 'div',
												'container_class'   => 'navbar-collapse collapse',
												'container_id'      => 'navbar',
												'menu_class'        => 'nav navbar-nav navbar-left',
												'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
												'walker'            => new wp_bootstrap_navwalker())
												);

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
   		<div id="header-image"><img class="img-responsive center-block" src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>"/></div>
   <?php } ?>
<main id="content">
