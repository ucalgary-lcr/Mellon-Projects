<?php get_header(); /* Template Name: Post Page Template */ ?>
<div class="fieldable-panels-pane container-fluid brick main-title">
<div class="container">
	<!-- Page Heading/Breadcrumbs -->
	<h1 class="mt-4 mb-3"><?php the_title(); ?> <small>by <a href="#">Author</a></small></h1>
	<div class="row">
		<!-- Post Content Column -->
		<div class="col-lg-8">
             <hr>
			<!-- Date/Time -->
			<p>Posted on January 1, 2017 at 12:00 PM</p>

			<!-- Preview Image -->
			<img alt="" class="img-fluid rounded" src="http://placehold.it/900x400">

			<!-- Post Content -->
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
			<blockquote class="blockquote">
				<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				<footer class="blockquote-footer">
					Someone famous in <cite title="Source Title">Source Title</cite>
				</footer>
			</blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>
			<hr>
        </div>

        
        <!-- Sidebar Widgets Column -->
		<div class="col-md-4">
            <?php get_sidebar(); ?>
		</div>
	</div><!-- /.row -->
</div>
</div>
<?php get_footer(); ?>