<?php
set_query_var('ENTRY', 'index');
$blog_id = get_option( 'page_for_posts' );
get_header(); ?>
<?php get_template_part('include/nav'); ?>
<section class="init banner flex align-items-center" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
	<div class="x-container titlePrincipal">
		<div class="title title--white">
			<h1><?php the_title();?></h1>
		</div>	
	</div>
</section>
<section class="single-blog ">
	<div class="x-container">
		<div class="box flex justify-content-between">
			<div class="left">
				<div class="tags">
					<div class="flex justify-content-between align-items-center">
						<div class="tag">
							<?php
								$categories = get_the_terms( $noticia['id'], 'category' );
								foreach( $categories as $category ) {
								    echo '<a href="'.$category->slug.'">'.$category->name.'</a>';
								}
							?>
						</div>
						<div class="date">
							<svg id="tiempo" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
							  <path id="icon" d="M2.4,2.4A7.263,7.263,0,0,1,8,0a7.263,7.263,0,0,1,5.6,2.4A7.263,7.263,0,0,1,16,8a7.263,7.263,0,0,1-2.4,5.6A7.263,7.263,0,0,1,8,16a7.263,7.263,0,0,1-5.6-2.4A7.984,7.984,0,0,1,0,8,7.263,7.263,0,0,1,2.4,2.4Zm9.2,9.2.933-.933L9.2,7.333,8,2H6.667V8a1.21,1.21,0,0,0,.4.933.466.466,0,0,0,.267.133Z"/>
							</svg>
							<p><?php the_field('date'); ?></p>
						</div>
					</div>					
				</div>
				<div class="contenido">
					<?php the_content();?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="related">
	<div class="x-container">
		<div class="title">
			<h2>Esto también te puede interesar</h2>
		</div>
		<div class="related_c">
			<?php
				$id = get_the_ID();
				$args2 = array('post__not_in' => array($id), 'order' => 'ASC' );
				$q2 = new WP_query($args2);
				if($q2->have_posts()) :
				    while($q2->have_posts()) : $q2->the_post();
				        ?>
				        <div class="noticias__item posRelative" id="noticia_<?php echo get_the_ID(); ?>">
							<div class="noticias__item__img posRelative">
								<a href="<?php echo get_permalink(get_the_ID()); ?>">
									<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
									<span class="noticias__item__date flex align-items-center posAbsolute">
										<svg id="tiempo" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
										  <path id="icon" d="M2.4,2.4A7.263,7.263,0,0,1,8,0a7.263,7.263,0,0,1,5.6,2.4A7.263,7.263,0,0,1,16,8a7.263,7.263,0,0,1-2.4,5.6A7.263,7.263,0,0,1,8,16a7.263,7.263,0,0,1-5.6-2.4A7.984,7.984,0,0,1,0,8,7.263,7.263,0,0,1,2.4,2.4Zm9.2,9.2.933-.933L9.2,7.333,8,2H6.667V8a1.21,1.21,0,0,0,.4.933.466.466,0,0,0,.267.133Z"/>
										</svg>
										<p><?php the_field('date',get_the_ID()); ?></p>
									</span>
								</a>
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
								<div class="title--nopoint">
									<h3><a href="<?php echo get_permalink(get_the_ID()); ?>"><?php echo get_the_title(get_the_ID()); ?></a></h3>
								</div>
								<div class="linkContent">
									<a href="<?php echo get_permalink(get_the_ID());?>" class="btn">Ver más </a>
								</div>
							</div>
						</div>
				        <?php
				    endwhile;
				endif;
			?>
		</div>
	</div>
</section>
<?php get_footer(); ?>