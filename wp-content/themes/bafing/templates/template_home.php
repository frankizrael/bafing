<?php /* Template Name: home */
set_query_var('ENTRY', 'home');
get_header();
?>
<?php get_template_part('include/nav'); ?>
<!-- section home init -->
<section class="heightH init" >
	<div class="swiper-container heightH">
		<div class="swiper-wrapper">
			<div class="swiper-slide">
				<div class="heightH initCore" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
					<div class="x-container heightH">
						<div class="title">
							<h1><?php the_title(); ?></h1>
							<p><?php the_field('subtitle'); ?></p>
							<a href="#" class="btn">Contáctanos</a>
						</div>
					</div>
				</div>
			</div>
			<?php
				$banner = get_field('banner');
					if ($banner){
						foreach($banner as $ban) {
			?>
				<div class="swiper-slide">
					<div class="heightH initCore" style="background-image: url('<?php echo $ban['img']; ?>');">
						<div class="x-container heightH">
							<div class="title">
								<h1><?php echo $ban['title']; ?></h1>
								<a href="<?php echo $ban['link']; ?>" class="btn"><?php echo $ban['link_text']; ?></a>
							</div>
						</div>
					</div>
				</div>
			<?php
					}
				}
			?>
		</div>
		<div class="swiper-pagination"></div>
	</div>
	<div class="anchor anchor--white">
		<a href="#soluciones">
			<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16.556" viewBox="0 0 20 16.556"><defs><style>.svg_fa{fill:none;}.svg_fb,.svg_fc{stroke:none;}.svg_fc{fill:#fff;}</style></defs><g class="svg_fa" transform="translate(20 16.556) rotate(180)"><path class="svg_fb" d="M8.288,2.834a2,2,0,0,1,3.424,0l6.455,10.687a2,2,0,0,1-1.712,3.034H3.545a2,2,0,0,1-1.712-3.034Z"/><path class="svg_fc" d="M 10 3.268259048461914 C 9.873559951782227 3.268259048461914 9.638710021972656 3.305908203125 9.486419677734375 3.558048248291016 L 3.031009674072266 14.24533843994141 C 2.873390197753906 14.50628852844238 2.957729339599609 14.7364387512207 3.022029876708984 14.85040855407715 C 3.086339950561523 14.96436882019043 3.239730834960938 15.15555858612061 3.544589996337891 15.15555858612061 L 16.45541000366211 15.15555858612061 C 16.76026916503906 15.15555858612061 16.91366004943848 14.96436882019043 16.97797012329102 14.85040855407715 C 17.04227066040039 14.7364387512207 17.12660980224609 14.50628852844238 16.96899032592773 14.24533843994141 L 10.51358032226562 3.558038711547852 C 10.36128997802734 3.305908203125 10.12644004821777 3.268259048461914 10 3.268259048461914 M 10 1.868261337280273 C 10.66148471832275 1.868261337280273 11.32297039031982 2.190243721008301 11.71193981170654 2.834208488464355 L 18.16735076904297 13.52149868011475 C 18.97248077392578 14.85443878173828 18.01263999938965 16.5555591583252 16.45541000366211 16.5555591583252 L 3.544589996337891 16.5555591583252 C 1.987360000610352 16.5555591583252 1.027519226074219 14.85443878173828 1.832649230957031 13.52149868011475 L 8.288060188293457 2.834208488464355 C 8.677029609680176 2.190243721008301 9.338515281677246 1.868261337280273 10 1.868261337280273 Z"/></g></svg>
		</a>
	</div>
</section>
<!-- section donar end -->
<section class="soluciones" id="soluciones">
	<div class="x-container">
		<div class="not-x-padd-container">
			<div class="box">
				<div class="title">
					<h2>Nuestras soluciones</h2>
				</div>
				<div class="soluciones__title">
					<?php the_field('content'); ?>
				</div>
				<div class="soluciones__content">
					<?php
						$soluciones = get_field('soluciones');
						foreach ($soluciones as $ss) {
							?>
					<div class="soluciones__content__item soluciones-<?php echo sanitize_title($ss['title']); ?>">
						<a href="<?php echo $ss['link']; ?>">
							<div class="imagen_s" style="display: none">
								<img src="<?php echo $ss['imagen']; ?>">
							</div>
							<div class="content_s">
								<h3>
								<span><img src="<?php echo $ss['icon']; ?>"></span><?php echo $ss['title']; ?></h3>
								<div class="contet">
									<?php echo $ss['contenido']; ?>
								</div>
								<div class="link">
									<p class="link_l">Ver más</p>
								</div>
							</div>
						</a>
					</div>
							<?php
						}
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="clientes">
	<div class="x-container">
		<div class="title">
			<h2>Nuestros clientes</h2>
		</div>
		<div class="content_clientes">
			<ul>
				<?php
					$clientes = get_field('clientes');
					foreach ($clientes as $cli) {
						?>
				<li>
					<img src="<?php echo $cli['imagen']; ?>">
				</li>
						<?php
					}
				?>
			</ul>
		</div>
	</div>
</section>
<section class="banner-in">
	<div class="banner-in__background" style="background-image: url('<?php the_field('banner_imagen'); ?>');">
		<div class="banner_title">
			<h2><?php the_field('banner_title'); ?></h2>
			<p><?php the_field('banner_content'); ?></p>
			<a href="#" class="btn">Deseo saber más</a>
		</div>
	</div>
</section>
<section class="testimonios">
	<div class="left-container box">
		<div class="title">
			<h2>Historias de éxito</h2>
		</div>
		<div class="content_testimonios">
			<article class="swiper-projects " id="testimonios_slider">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php
							$historias = get_field('historias');
							foreach ($historias as $hi) {
								?>
						<div class="swiper-slide">
							<div class="item_historia">
								<div class="img">
									<img src="<?php echo $hi['imagen']; ?>">
								</div>
								<div class="text">
									<h3><?php echo $hi['title']; ?></h3>
									<div class="content">
										<?php echo $hi['content']; ?>
									</div>
									<div class="autor">
										<?php echo $hi['autor']; ?>
									</div>
								</div>
							</div>
						</div>
								<?php
							}
						?>
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</article>
		</div>
	</div>
</section>
<section class="noticias">
	<div class="x-container">
		<div class="title">
			<h2>Últimas noticias</h2>
			<a href="#" class="btn">Ver más noticias</a>
		</div>
		<div class="blogsContent">
			<?php
				$blog = get_field('blog');
				foreach ($blog as $b) {
					?>
					<div class="blogsContentItem" style="background-image: url('<?php echo get_the_post_thumbnail_url($b['id']); ?>');">
						<a href="<?php the_permalink($b['id']); ?>">
							<div class="title-top">
								<?php the_field('date',$b['id']); ?>
							</div>
							<div class="title-bot">
								<h3><?php echo get_the_title($b['id']); ?></h3>
								<span>Leer más</span>
							</div>
						</a>
					</div>
					<?php
				}
			?>
		</div>
	</div>
</section>
<?php
get_footer();
?>
