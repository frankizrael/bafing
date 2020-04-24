<?php /* Template Name: contact */
set_query_var('ENTRY', 'contact');
get_header();
?>
<?php get_template_part('include/nav'); ?>
<section class="banner flex align-items-center" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
	<div class="x-container titlePrincipal">
		<div class="title title--white ">
			<h1><?php the_title();?></h1>
		</div>		
	</div>
</section>
<section class="ss_banner">
	<div class="x-container">
		<div class="flex justify-content-between">
			<div class="left">
				<div class="content">
					<?php
					if ( have_posts() ) : ?>
					<?php
					// Start the loop.
					while ( have_posts() ) :
						the_post();
						?>
					<?php the_content(); ?>
					<?php
							endwhile;
						endif;
					?>
				</div>
			</div>
			<div class="right">
				<div class="boxBorder box">
					<div class="boxBorder__title">
						<h3><?php the_field('title'); ?></h3>
					</div>
					<div class="boxBorder__content">
						<div class="form">
							<?php the_field('form'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div id="map_canvas"></div>
<?php
get_footer();
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIUoPmAtFVeqmsT2hd0pV3usTNAbRQ-a8&sensor=false&libraries=geometry,places,drawing&ext=.js" type="text/javascript"></script>
<script type="text/javascript">
	window.onload = function(){
	    var options = {
	        zoom: 17,
	        // center: new google.maps.LatLng(-12.103248051911464, -77.01072606859202)
	        center: new google.maps.LatLng(<?php the_field('lat');?>, <?php the_field('log');?>)
	    };
	    var map = new google.maps.Map(document.getElementById('map_canvas'), options);
	    new google.maps.Marker({
	        position: map.getCenter()
	        , map: map
	        , title: 'Bafing'
	        , icon: '<?php echo site_url(); ?>/wp-content/themes/bafing/pin.png'
	        , cursor: 'default'
	        , draggable: true
	    });
	};
</script>


