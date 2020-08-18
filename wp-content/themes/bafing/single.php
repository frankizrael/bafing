<?php
set_query_var('ENTRY', 'index');
$blog_id = get_option( 'page_for_posts' );
get_header(); ?>
<?php get_template_part('include/nav'); ?>
<section class="init banner flex align-items-center" style="background-image: url(<?php echo get_field('background_header'); ?>);">
	<div class="x-container titlePrincipal">
		<div class="title title--white">
			<h1><?php the_title();?></h1>
			<div class="social">
				<a href="javascript: void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" class="facebookSocial">
					<i>
						<svg id="icon_facebook" data-name="icon/facebook" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
						  <rect id="caja" width="30" height="30" fill="none" opacity="0"/>
						  <path id="icon" d="M85.931,17.5V9.528h2.722l.389-3.111H85.931V4.472c0-.875.292-1.556,1.556-1.556h1.653V.1C88.75.1,87.778,0,86.708,0a3.753,3.753,0,0,0-3.986,4.083V6.417H80V9.528h2.722V17.5Z" transform="translate(-70 6.25)" fill="#2c2c2c" fill-rule="evenodd"/>
						</svg>

					</i>
				</a>
				<a id="twitter" href="javascript: void(0);" onclick="window.open('http://twitter.com/home?status=<?php the_permalink(); ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');" class="twitterSocial">
					<i>
						<svg id="icon_twitter" data-name="icon/twitter" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30">
						  <rect id="caja" width="30" height="30" fill="none"/>
						  <path id="icon" d="M43.542,16.194A10.118,10.118,0,0,0,53.75,5.986V5.5A7.9,7.9,0,0,0,55.5,3.653a8.071,8.071,0,0,1-2.042.583,3.783,3.783,0,0,0,1.556-1.944,8.918,8.918,0,0,1-2.236.875A3.472,3.472,0,0,0,50.153,2a3.653,3.653,0,0,0-3.6,3.6,1.9,1.9,0,0,0,.1.778,10.052,10.052,0,0,1-7.389-3.792,3.723,3.723,0,0,0-.486,1.847,3.863,3.863,0,0,0,1.556,3.014,3.278,3.278,0,0,1-1.653-.486h0a3.553,3.553,0,0,0,2.917,3.5,3,3,0,0,1-.972.1,1.654,1.654,0,0,1-.681-.1,3.683,3.683,0,0,0,3.4,2.528,7.34,7.34,0,0,1-4.472,1.556,2.692,2.692,0,0,1-.875-.1,9.177,9.177,0,0,0,5.542,1.75" transform="translate(-31.75 5.5)" fill="#2c2c2c" fill-rule="evenodd"/>
						</svg>
					</i>
				</a>
				<a id="whatsapp" href="whatsapp://send?text=Gracias%20por%20compartir%20<?php the_title();?>%20para%20ingresar <?php the_permalink(); ?>" data-action="share/whatsapp/share" class="wspSocial">
					<i>
						<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
							<path d="m439.277344 72.722656c-46.898438-46.898437-109.238282-72.722656-175.566406-72.722656-.003907 0-.019532 0-.023438 0-32.804688.00390625-64.773438 6.355469-95.011719 18.882812-30.242187 12.527344-57.335937 30.640626-80.535156 53.839844-46.894531 46.894532-72.71875 109.246094-72.71875 175.566406 0 39.550782 9.542969 78.855469 27.625 113.875l-41.734375 119.226563c-2.941406 8.410156-.859375 17.550781 5.445312 23.851563 4.410157 4.414062 10.214844 6.757812 16.183594 6.757812 2.558594 0 5.144532-.429688 7.667969-1.3125l119.226563-41.730469c35.019531 18.082031 74.324218 27.625 113.875 27.625 66.320312 0 128.667968-25.828125 175.566406-72.722656 46.894531-46.894531 72.722656-109.246094 72.722656-175.566406 0-66.324219-25.824219-128.675781-72.722656-175.570313zm-21.234375 329.902344c-41.222657 41.226562-96.035157 63.925781-154.332031 63.925781-35.664063 0-71.09375-8.820312-102.460938-25.515625-5.6875-3.023437-12.410156-3.542968-18.445312-1.429687l-108.320313 37.910156 37.914063-108.320313c2.113281-6.042968 1.589843-12.765624-1.433594-18.449218-16.691406-31.359375-25.515625-66.789063-25.515625-102.457032 0-58.296874 22.703125-113.109374 63.925781-154.332031 41.21875-41.21875 96.023438-63.921875 154.316406-63.929687h.019532c58.300781 0 113.109374 22.703125 154.332031 63.929687 41.226562 41.222657 63.929687 96.03125 63.929687 154.332031 0 58.300782-22.703125 113.113282-63.929687 154.335938zm0 0"/><path d="m355.984375 270.46875c-11.421875-11.421875-30.007813-11.421875-41.429687 0l-12.492188 12.492188c-31.019531-16.902344-56.121094-42.003907-73.027344-73.023438l12.492188-12.492188c11.425781-11.421874 11.425781-30.007812 0-41.429687l-33.664063-33.664063c-11.421875-11.421874-30.007812-11.421874-41.429687 0l-26.929688 26.929688c-15.425781 15.425781-16.195312 41.945312-2.167968 74.675781 12.179687 28.417969 34.46875 59.652344 62.761718 87.945313 28.292969 28.292968 59.527344 50.582031 87.945313 62.761718 15.550781 6.664063 29.695312 9.988282 41.917969 9.988282 13.503906 0 24.660156-4.058594 32.757812-12.15625l26.929688-26.933594v.003906c5.535156-5.535156 8.582031-12.890625 8.582031-20.714844 0-7.828124-3.046875-15.183593-8.582031-20.714843zm-14.5 80.792969c-4.402344 4.402343-17.941406 5.945312-41.609375-4.195313-24.992188-10.710937-52.886719-30.742187-78.542969-56.398437s-45.683593-53.546875-56.394531-78.539063c-10.144531-23.667968-8.601562-37.210937-4.199219-41.613281l26.414063-26.414063 32.625 32.628907-15.636719 15.640625c-7.070313 7.070312-8.777344 17.792968-4.242187 26.683594 20.558593 40.3125 52.734374 72.488281 93.046874 93.046874 8.894532 4.535157 19.617188 2.832032 26.6875-4.242187l15.636719-15.636719 32.628907 32.628906zm0 0"/>
						</svg>
					</i>
				</a>
			</div>
		</div>	
	</div>
</section>
<section class="single-blog ">
	<div class="x-container">
		<div class="box flex justify-content-between">
			<div class="left">
				<div class="tags">
					<div class="flex justify-content-between align-items-center">
						<div class="left_a flex">
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
						<div class="right_a">
							<?php
								if (get_field('destacado',get_the_ID())){
							?>
							<div class="desct">
								<i>
									<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
										<path style="fill:#FFDC64;" d="M452.71,157.937l-133.741-12.404L265.843,22.17c-3.72-8.638-15.967-8.638-19.686,0l-53.126,123.362
											L59.29,157.937c-9.365,0.868-13.149,12.516-6.084,18.723l100.908,88.646l-29.531,131.029c-2.068,9.175,7.841,16.373,15.927,11.572
											L256,339.331l115.49,68.576c8.087,4.802,17.994-2.397,15.927-11.572l-29.532-131.029l100.909-88.646
											C465.859,170.453,462.074,158.805,452.71,157.937z"/>
										<g>
											<path style="fill:#FFF082;" d="M119.278,17.923c6.818,9.47,26.062,50.14,37.064,73.842c1.73,3.726-2.945,7.092-5.93,4.269
												C131.425,78.082,98.96,46.93,92.142,37.459c-5.395-7.493-3.694-17.941,3.8-23.336C103.435,8.728,113.883,10.43,119.278,17.923z"/>
											<path style="fill:#FFF082;" d="M392.722,17.923c-6.818,9.47-26.062,50.14-37.064,73.842c-1.73,3.726,2.945,7.092,5.93,4.269
												c18.987-17.952,51.451-49.105,58.27-58.575c5.395-7.493,3.694-17.941-3.8-23.336C408.565,8.728,398.117,10.43,392.722,17.923z"/>
											<path style="fill:#FFF082;" d="M500.461,295.629c-11.094-3.618-55.689-9.595-81.612-12.875c-4.075-0.516-5.861,4.961-2.266,6.947
												c22.873,12.635,62.416,34.099,73.51,37.717c8.778,2.863,18.215-1.932,21.078-10.711
												C514.034,307.928,509.239,298.492,500.461,295.629z"/>
											<path style="fill:#FFF082;" d="M11.539,295.629c11.094-3.618,55.689-9.595,81.612-12.875c4.075-0.516,5.861,4.961,2.266,6.947
												c-22.873,12.635-62.416,34.099-73.51,37.717c-8.778,2.863-18.215-1.932-21.078-10.711S2.761,298.492,11.539,295.629z"/>
											<path style="fill:#FFF082;" d="M239.794,484.31c0-11.669,8.145-55.919,13.065-81.582c0.773-4.034,6.534-4.034,7.307,0
												c4.92,25.663,13.065,69.913,13.065,81.582c0,9.233-7.485,16.718-16.718,16.718C247.279,501.029,239.794,493.543,239.794,484.31z"/>
										</g>
										<path style="fill:#FFC850;" d="M285.161,67.03l-19.319-44.86c-3.72-8.638-15.967-8.638-19.686,0L193.03,145.532L59.29,157.937
											c-9.365,0.868-13.149,12.516-6.084,18.723l100.908,88.646l-29.531,131.029c-2.068,9.175,7.841,16.373,15.927,11.572l15.371-9.127
											C181.08,235.66,251.922,115.918,285.161,67.03z"/>
										</svg>
								</i>
								<p>Destacado</p>
							</div>
							<?php
								}
							?>
						</div>
					</div>					
				</div>
				<div class="contenido">
					<?php
									if (have_posts()) {
						   			while (have_posts()) {
								        the_post();
								        ?>
								        <?php the_content(); ?>
								    <?php 
										} 
									} 
								?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="comments">
	<div class="x-container">
		<div class="c-comments box">
			<?php echo do_shortcode('[fbcomments]'); ?>
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
				$args2 = array('post__not_in' => array($id), 'order' => 'ASC', 'posts_per_page' => 3 );
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