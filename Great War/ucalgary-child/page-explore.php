<?php get_header(); /* Template Name: Explore Template */ ?>
<?php //while(have_posts()): the_post(); ?>
<?php //the_content();
    //endwhile;
?>

<?php echo do_shortcode('[wpv-view name="explore" cached="off"]'); ?>
<script>
// $( 'div[data-chicklet="1"]' ).removeClass('red-back').addClass('maroon-back');
$( 'div[data-type="1"]' ).removeClass('red-back');
$( 'span[data-category="1"]' ).removeClass('red').addClass('maroon');

// $( 'div[data-chicklet="2"]' ).removeClass('red-back').addClass('chocolate-back');
$( 'div[data-type="2"]' ).removeClass('red-back');
$( 'span[data-category="2"]' ).removeClass('red').addClass('chocolate');

// $( 'div[data-chicklet="3"]' ).removeClass('red-back').addClass('dark-green-back');
$( 'div[data-type="3"]' ).removeClass('red-back');
$( 'span[data-category="3"]' ).removeClass('red').addClass('dark-green');

// $( 'div[data-chicklet="4"]' ).removeClass('red-back').addClass('ruby-back');
$( 'div[data-type="4"]' ).removeClass('red-back');
$( 'span[data-category="4"]' ).removeClass('red').addClass('ruby');



// the id used us to be #parent for the view it generates an id that must be used...
  var $filter = $('.btn-filter').click(function() {

    if (this.id == 'all') {
    	$('#wpv-view-layout-943-TCPID157 > div').fadeIn(450);
    } else {
    var $chicklets = $('.' + this.id).fadeIn(450);
		$('#wpv-view-layout-943-TCPID157 > div').not($chicklets).hide();
    }

      $filter.removeClass('active');
      $(this).addClass('active');

    });

  $('#MHAE').click(function() {
    $('div[data-chicklet="1"]').css("display", "block");
    $('.MHAE').removeClass('far').addClass('fas');
    $('.IN').removeClass('fas').addClass('far');
    $('.MPAH').removeClass('fas').addClass('far');
    $('.DE').removeClass('fas').addClass('far');

    $("#MHAEintro").prependTo('#description-area').css("display", "block");
    $("#INintro").css("display", "none");
    $("#MPAHintro").css("display", "none");
    $("#DEintro").css("display", "none");
  });

  $('#IN').click(function() {
    $('div[data-chicklet="2"]').css("display", "block");
    $('.MHAE').removeClass('fas').addClass('far');
    $('.IN').removeClass('far').addClass('fas');
    $('.MPAH').removeClass('fas').addClass('far');
    $('.DE').removeClass('fas').addClass('far');

    $("#MHAEintro").css("display", "none");
    $("#INintro").prependTo('#description-area').css("display", "block");
    $("#MPAHintro").css("display", "none");
    $("#DEintro").css("display", "none");
  });
  $('#MPAH').click(function() {
    $('div[data-chicklet="3"]').css("display", "block");
    $('.MHAE').removeClass('fas').addClass('far');
    $('.IN').removeClass('fas').addClass('far');
    $('.MPAH').removeClass('far').addClass('fas');
    $('.DE').removeClass('fas').addClass('far');

    $("#MHAEintro").css("display", "none");
    $("#INintro").css("display", "none");
    $("#MPAHintro").prependTo('#description-area').css("display", "block");
    $("#DEintro").css("display", "none");
  });

  $('#DE').click(function() {
    $('div[data-chicklet="4"]').css("display", "block");
    $('.MHAE').removeClass('fas').addClass('far');
    $('.IN').removeClass('fas').addClass('far');
    $('.MPAH').removeClass('fas').addClass('far');
    $('.DE').removeClass('far').addClass('fas');

    $("#MHAEintro").css("display", "none");
    $("#INintro").css("display", "none");
    $("#MPAHintro").css("display", "none");
    $("#DEintro").prependTo('#description-area').css("display", "block");
  });

  $('.btn-reset').click(function() {
    $('.MHAE').removeClass('fas').addClass('far');
    $('.IN').removeClass('fas').addClass('far');
    $('.MPAH').removeClass('fas').addClass('far');
    $('.DE').removeClass('fas').addClass('far');

    $("#MHAEintro").css("display", "none");
    $("#INintro").css("display", "none");
    $("#MPAHintro").css("display", "none");
    $("#DEintro").css("display", "none");
  });


function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[[]]/g, '$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));

  //the backslash might remove it's self .replace(/\+/g, " ")

}

  var q = getParameterByName('q');
    if (q=='MobilizingHatredAgainsttheEnemy'){
      document.getElementById("MHAE").click();
    }
    if (q=='InfluencingNeutrals'){
      document.getElementById("IN").click();
    }
    if (q=='InfluencingAlliesatHomeandAbroad'){
      document.getElementById("MPAH").click();
    }
    if (q=='DemoralizingtheEnemy'){
      document.getElementById("DE").click();
    }

</script>
<?php get_footer(); ?>

<!--<div class="col-sm-6 col-md-4 box chicklet red-back" data-chicklet="[types field='translation-category' output='raw'][/types]" role="img" style="background:url([types field='original-item' size='full' url='true'][/types]);box-shadow: inset 0 0 0 1000px rgba(0,0,0,0.4);" title="[wpv-post-title]">

<h4 tabindex="0">
    <a href="[wpv-post-url]" title="[wpv-post-title]"><i class="fas fa-circle fa-lg red" data-category="[types field='translation-category' output='raw'][/types]"></i> [wpv-post-title]</a>
  </h4>

  <div class="red-back" data-type="[types field='translation-category' output='raw'][/types]">
   <a href='[wpv-post-url]' title="[wpv-post-title]"> <span class="chickletTitle">[wpv-post-title]</span>
    <div class='desc-overflow'><p>
      [limit_content length="200"]
         [types field='original-description' output='raw'][/types]
      [/limit_content]
      </p></div>
    <p> View Propaganda</p></a>
  </div>
</div>-->
