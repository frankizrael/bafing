<?php 
set_query_var('ENTRY', 'index');
$frontpage_id = get_option( 'page_on_front' );
$blog_id = get_option( 'page_for_posts' );
get_header(); ?>
<!-- section index init -->
<?php get_template_part('include/nav'); ?>
<section class="init banner flex align-items-center" style="background-image: url(<?php echo get_the_post_thumbnail_url($blog_id); ?>);">
	<div class="x-container titlePrincipal">
		<div class="title title--white">
			<h1>Noticias</h1>
		</div>	
	</div>
</section>
<section class="index-section">
	<div class="x-container ">
		<div class="box">
			<div class="tags-title ">
				<h3>Entérate lo último en:</h3>
				<ul class="flex">
					<li><a href="<?php echo site_url(); ?>/noticias" class="active">Todos</a></li>
				    <?php wp_list_categories( array(
				    	'title_li' => '',
				        'orderby' => 'name'
				    ) ); ?> 
				</ul>
			</div>
			<div class="noticias posRelative">
				<div class="noticias__content">
					<div class="noticias__right">
						<div class="noticias__right__content">
							<div class="noticias__right__content__swiper">
								<?php
									if ( have_posts() ) : ?>
									<?php
									// Start the loop.
									while ( have_posts() ) :
										the_post();
										?>
										<div class="noticias__item posRelative" id="noticia_<?php echo get_the_ID(); ?>">
											<div class="noticias__item__img posRelative">
												<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
												<span class="noticias__item__date flex align-items-center posAbsolute">
													<svg id="tiempo" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
													  <path id="icon" d="M2.4,2.4A7.263,7.263,0,0,1,8,0a7.263,7.263,0,0,1,5.6,2.4A7.263,7.263,0,0,1,16,8a7.263,7.263,0,0,1-2.4,5.6A7.263,7.263,0,0,1,8,16a7.263,7.263,0,0,1-5.6-2.4A7.984,7.984,0,0,1,0,8,7.263,7.263,0,0,1,2.4,2.4Zm9.2,9.2.933-.933L9.2,7.333,8,2H6.667V8a1.21,1.21,0,0,0,.4.933.466.466,0,0,0,.267.133Z"/>
													</svg>
													<p><?php the_field('date',get_the_ID()); ?></p>
												</span>
											</div>
											<div class="noticias__item__content">
												<div class="tag">
													<?php
														$categories = get_the_terms( get_the_ID(), 'category' );
														foreach( $categories as $category ) {
														    echo '<a href="'.$category->slug.'">'.$category->name.'</a>';
														}
													?>
												</div>
												<div class="title title--little title--nopoint">
													<h3><?php echo get_the_title(get_the_ID()); ?></h3>
												</div>
												<div class="linkContent">
													<a href="<?php echo get_permalink(get_the_ID());?>" class="link">Ver más</a>
												</div>
											</div>
										</div>
										<?php
										endwhile;
									endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section index end -->
<?php get_footer(); ?>
