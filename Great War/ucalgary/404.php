<?php get_header(); ?>

<style>
@media  (min-width:280px) and (max-width:375px){}
@media  (min-width:376px) and (max-width:450px){
main .brick.rounded-brick-below > div[class$="-back"].row:last-child, main .brick.hero-cta.rounded-brick-below > div.row:last-child {padding-bottom: 32px;}
.brick.hero-cta.top { margin-top: -85px;}
}
@media  (min-width:451px) and (max-width:768px){}
@media (min-width: 992px){.brick.hero-cta.top.home, .brick.hero-cta.large {height: 1205px;}}
@media  (min-width:1024px) and (max-width:1100px){}
</style>

<div class="fieldable-panels-pane container-fluid brick hero-cta large top rounded-brick-below no-bottom-margin">
	<div class="row hleft" style="background-image: url('https://136.159.200.25/wp-content/uploads/2018/07/wrong-right-door.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 hidden-md hidden-lg"><img class="img-responsive" src="https://136.159.200.25/wp-content/uploads/2018/07/wrong-right-door.jpg" alt="404 lost page"></div>
				<div class="col-sm-12">
					 <div class="cta-content cta-content-center cta-content-boxed">
						 <h1 class="page-title">Oops! That page can't be found.</h1>
						 <p>It looks like nothing was found at this location. Maybe try the main menu above or a search?</p>


						<form class="form-inline" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-align: center;">
						  <div class="input-group input-group-lg">
						    <input type="search" class="form-control" style="width:100% !important;" placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder' ) ?>" name="" id="search-input" value="<?php echo get_search_query() ?>" />
						    <span class="input-group-btn">
						      <button class="btn btn-default maroon-back" type="button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"><i class="fa fa-search" id="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"></i></button>
						    </span>
						  </div>
						</form>
						<?php //echo do_shortcode('[wpv-form-view name="explore" target_id="157"]'); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>