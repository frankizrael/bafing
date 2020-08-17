<?php /* Template Name: experiencias */
set_query_var('ENTRY', 'multimedia');
get_header();
?>
<?php get_template_part('include/nav'); ?>
<section class="init banner flex align-items-center" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
	<div class="x-container titlePrincipal">
		<div class="title title--white">
			<h1><?php the_title(); ?></h1>
		</div>	
	</div>
</section>
<section class="index-section">
	<div class="x-container ">
		<div class="box">
			<div class="tags-title ">
				<div class="ssh3">
					<h3>Entérate lo último en: </h3>
					<div class="ss">
						<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
					</div>
				</div>				
			</div>
			<div class="noticias posRelative">
				<div class="noticias__content">
					<div class="noticias__full">
						<div class="noticias__right__content">
							<div class="noticias__right__content__swiper">
								<?php
									$lastposts = get_posts( array(
										'numberposts' => -1,
										'post_type'   => 'experiencia'
									) );
									if ( $lastposts ) : ?>
									<?php
										// Start the loop.
										foreach ( $lastposts as $post ) :
											setup_postdata( $post );
											?>
											<div class="noticias__item posRelative" id="noticia_<?php echo get_the_ID(); ?>">
												<div class="noticias__item__content experiencia_content">
													<div class="title title--little title--nopoint">
														<img src="<?php the_field('logo',get_the_ID()); ?>">
														<h3><?php echo get_the_title(get_the_ID()); ?></h3>
													</div>
													<div class="resumenContent">
														<div class="content-r">
															<?php the_field('resume',get_the_ID()); ?>
														</div>
														<div class="autors">
															<?php the_field('autor',get_the_ID()); ?>	
														</div>														
													</div>
												</div>
											</div>
											<?php
										endforeach;
        								wp_reset_postdata();
									endif;
								?>
							</div>
							<div class="pag-link">
								<?php bafing_pagination(); ?>
							</div>
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