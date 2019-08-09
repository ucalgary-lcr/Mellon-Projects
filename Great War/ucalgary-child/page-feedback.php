<?php get_header(); /* Template Name: Feedback Template */ ?>
<div class="fieldable-panels-pane container-fluid brick text-cta">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="row-md-height">
          <div class="col-md-3 col-md-height col-md-middle vspacer-xs vspacer-sm headline">
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="col-md-9 col-md-height col-md-middle description">
            <p>
            <?php 		  
		  if(ICL_LANGUAGE_CODE=='en') 
			  echo "<p>Your comments will also be forwarded to the Canadian Museum of History (CMH), which has overall responsibility for the Virtual Museum of Canada (VMC), to be used as part of its audience research. Please see the <a href='http://www.virtualmuseum.ca/important-notices/'>VMC Privacy Policy</a> for more information.</p>";
		  else 
			  echo "<p>Vos commentaires seront également acheminés au Musée canadien de l’histoire (MCH), qui a la responsabilité globale du Musée virtuel du Canada (MVC). Ils seront utilisés à des fins de recherche sur le public. Veuillez consulter la Politique du <a href='http://www.museevirtuel.ca/avis-importants/'>MVC sur la protection</a> des renseignements personnels pour de plus amples renseignements.</p>";
?>
          </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="fieldable-panels-pane container-fluid brick top-margin margin-lg-bottom">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
       <?php 
		  echo do_shortcode('[cred_form form="feedback-form"]');
		  ?>
      </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>
