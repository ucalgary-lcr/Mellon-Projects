<?php get_header(); ?>
<style>
@media  (min-width:376px) and (max-width:450px){
main .brick.rounded-brick-below > div[class$="-back"].row:last-child, main .brick.hero-cta.rounded-brick-below > div.row:last-child {padding-bottom: 32px;}
.brick.hero-cta.top { margin-top: -85px;}
}
@media (min-width: 992px){.brick.hero-cta.top.home, .brick.hero-cta.large {height: 1205px;}}
</style>

<div class="fieldable-panels-pane container-fluid brick hero-cta large top rounded-brick-below no-bottom-margin">
	<div class="row hleft" style="background-image: url('https://images.unsplash.com/photo-1481399319277-1289301d7c31?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2a6112a4373be6d71ed4d148d153a1df&auto=format&fit=crop&w=4433&q=80%204433w');">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 hidden-md hidden-lg"><img class="img-responsive" src="https://images.unsplash.com/photo-1481399319277-1289301d7c31?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=2a6112a4373be6d71ed4d148d153a1df&auto=format&fit=crop&w=4433&q=80%204433w" alt="404 lost page"></div>
				<div class="col-sm-12">
					 <div class="cta-content cta-content-center cta-content-boxed">
						 <h2 class="page-title">Oops! That page can't be found.</h2>
						 <p>It looks like nothing was found at this location. Maybe try the main menu above or a search?</p>


						<form class="form-inline" method="get" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-align: center;">
						  <div class="input-group input-group-lg">
						    <input type="search" class="form-control" style="width:100% !important;" placeholder="<?php echo esc_attr_x( 'Search…', 'placeholder' ) ?>" name="" id="search-input" value="<?php echo get_search_query() ?>" />
						    <span class="input-group-btn">
						      <button class="btn btn-default maroon-back" type="button" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"><i class="fa fa-search" id="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"></i></button>
						    </span>
						  </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>