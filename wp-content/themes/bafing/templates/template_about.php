<?php /* Template Name: nosotros */
set_query_var('ENTRY', 'nosotros');
get_header();
?>
<?php get_template_part('include/nav'); ?>
<section class="init" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="titlePrincipal x-container">
		<h1><?php the_title(); ?></h1>
	</div>
</section>
<section class="acercade">
	<div class="x-container">
		<div class="flex">
			<div class="left">
				<div class="box">
					<div class="title">
						<h2>Acerca de Bafing</h2>						
					</div>
					<div class="content_flex">
						<div class="content_left">
							<?php the_field('content_left'); ?>
						</div>
						<div class="content_right">
							<?php the_field('content_right'); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="right">
				<div class="experiencia">
					<?php the_field('experiencia'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="mision-vision">
	<div class="left-container">
		<div class="flex">
			<div class="left">
				<div class="content">
					<img src="<?php the_field('img_vision'); ?>">
				</div>
			</div>
			<div class="right">
				<div class="content">
					<?php the_field('vision'); ?>
				</div>
			</div>
		</div>
		<div class="flex">
			<div class="left">
				<div class="content">
					<img src="<?php the_field('img_mision'); ?>">
				</div>
			</div>
			<div class="right">
				<div class="content">
					<?php the_field('mision'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="valores">
	<div class="left-container">
		<div class="box">
			<div class="title">
				<h2>Valores</h2>
			</div>
			<div class="flex">
				<div class="left">
					<?php the_field('valores_content'); ?>
				</div>
				<div class="right">
					<div class="valores_c">
						<div class="img">
							<img src="<?php the_field('valores_imagen'); ?>">
						</div>
						<div class="list_valores">							
							<?php
								$list = get_field('valores_list');
								foreach ($list as $li) {
									?>
								<div class="list_item">
									<div class="header">
										<?php echo $li['header']; ?>
									</div>
									<div class="body">
										<?php echo $li['body']; ?>
									</div>
								</div>
									<?php
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="reconocimientos">
	<div class="x-container">
		<div class="box">
			<div class="premios" style="display: none;">
				<div class="title">
					<h2>Certificaciones</h2>
				</div>
				<div class="contenido">
					<ul>
					<?php 
						$certificaciones = get_field('certificaciones');
						foreach ($certificaciones as $ce) {
							?>
						<li>
							<img src="<?php echo $ce['imagen']; ?>">
							<span><?php echo $ce['text']; ?></span>
						</li>
							<?php
						}
					?>
					</ul>
				</div>
			</div>
			<div class="partners">
				<div class="title">
					<h2>Premios</h2>
				</div>
				<div class="contenido">
					<ul>
					<?php 
						$contenido = get_field('premios');
						foreach ($contenido as $con) {
							?>
						<li>
							<img src="<?php echo $con['imagen']; ?>">
							<span><?php echo $con['text']; ?></span>
						</li>
							<?php
						}
					?>
					</ul>
				</div>
			</div>
			<div class="certificaciones" style="display: none;">
				<div class="title">
					<h2>Partners</h2>
				</div>
				<div class="contenido">
					<ul>
					<?php 
						$partners = get_field('partners');
						foreach ($partners as $pp) {
							?>
						<li>
							<img src="<?php echo $pp['imagen']; ?>">
							<span><?php echo $pp['text']; ?></span>
						</li>
							<?php
						}
					?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>
