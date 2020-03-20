<?php /* Template Name: home */
set_query_var('ENTRY', 'home');
get_header();
?>
<?php get_template_part('include/nav'); ?>
<!-- section home init -->
<section class="heightH init" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="x-container heightH">
		<div class="title">
			<h1><?php the_title(); ?></h1>
			<a href="#" class="btn">Contáctanos</a>
		</div>
	</div>
</section>
<!-- section donar end -->
<section class="soluciones">
	<div class="x-container">
		<div class="not-x-padd-container">
			<div class="box">
				<div class="title">
					<h2>Nuestras soluciones</h2>
				</div>
				<div class="soluciones_box">
					<div class="flex">
						<div class="left">
							<div class="content">
								<?php the_field('content'); ?>
							</div>
						</div>
						<div class="right">
							<div class="flex-soluciones">
								<?php
									$soluciones = get_field('soluciones');
									foreach ($soluciones as $ss) {
										?>
								<div class="soluciones_item soluciones-<?php echo sanitize_title($ss['title']); ?>">
									<div class="imagen_s">
										<img src="<?php echo $ss['imagen']; ?>">
										<span><img src="<?php echo $ss['icon']; ?>"></span>
									</div>
									<div class="content_s">
										<h3><?php echo $ss['title']; ?></h3>
										<div class="contet">
											<?php echo $ss['contenido']; ?>
										</div>
										<div class="link">
											<a href="#" class="btn">Ver más</a>
										</div>
									</div>
								</div>
										<?php
									}
								?>
								<div class="soluciones_item soluciones-seemore">
									<div class="heightFull">
										<a href="#">
											Ver todas nuestras soluciones
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
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
