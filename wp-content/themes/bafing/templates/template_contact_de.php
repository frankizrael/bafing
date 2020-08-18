<?php /* Template Name: contact Min */
set_query_var('ENTRY', 'contact');
get_header();
?>
<?php get_template_part('include/nav'); 
$color_links = get_field('color_links');
$footer_background = get_field('footer_background');
$main_background = get_field('main_background');
$background_button = get_field('background_button');
$color_button = get_field('color_button');
?>
<style type="text/css">
	header.active .nav__right ul li a, header.active2 .nav__right ul li a { color: <?php echo $color_links; ?>;
    border-right: solid 1px <?php echo $color_links; ?> }
    header .nav__right ul li:last-child a { border: none !important; }
    .ss_banner .content li:before { border-right: solid 1px <?php echo $color_links; ?>; border-bottom: solid 1px <?php echo $color_links; ?> }
    a, .form .inputCrow label, .form .flexNotText label { color: <?php echo $color_links; ?> }
    .form .inputCrow input, .form .inputCrow select, .form .flexNotText textarea { border: solid 1px <?php echo $color_links; ?> }
    footer { background: <?php echo $footer_background; ?> }
    section.ss_banner { background: <?php echo $main_background; ?>}
    .fixedBar li a { background: <?php echo $color_links; ?>}
    .form .flexNotText button { background: <?php echo $background_button; ?>; color: <?php echo $color_button; ?>}
</style>
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
				<div class="donwloada">
					<a href="<?php the_field('download_file'); ?>" class="btn" download><?php the_field('download_text'); ?></a>
				</div>
			</div>
			<div class="right">
				<div class="boxBorder box">
					<div class="boxBorder__title">
						<h3><?php the_field('title'); ?></h3>
					</div>
					<div class="boxBorder__content">
						<div class="form formTable">
							<?php the_field('form'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>



