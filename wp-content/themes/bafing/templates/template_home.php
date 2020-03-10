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
										<span></span>
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
<?php
get_footer();
?>
