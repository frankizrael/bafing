<?php /* Template Name: multimedia */
set_query_var('ENTRY', 'multimedia');
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



