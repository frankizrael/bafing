<?php /* Template Name: soluciones */
set_query_var('ENTRY', 'soluciones');
get_header();
?>
<?php get_template_part('include/nav'); ?>
<section class="init" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
	<div class="titlePrincipal x-container">
		<div class="tt">
			<img src="<?php the_field('icon'); ?>">
			<h1><?php the_title(); ?></h1>
			<p><?php the_field('subtitle'); ?></p>
		</div>
		<div class="fixedMenu">
			<ul>
				<li>
					<a href="#acerca"><?php the_title(); ?></a>
				</li>
				<li>
					<a href="#servicios"><?php the_field('title_servicios');?></a>
				</li>
				<li>
					<a href="#experiencia">Nuestra experiencia</a>
				</li>
				<li>
					<a href="#clientes">Clientes</a>
				</li>
				<li>
					<a href="#partners">Partners</a>
				</li>				
				<li>
					<a href="#noticias">Noticias</a>
				</li>
			</ul>
		</div>
	</div>
</section>
<section class="acerca" id="acerca">
	<div class="menu-container">
		<div class="box">
			<div class="flex">
				<div class="left">
					<div class="contenido_left">
						<?php the_field('contenido_principal'); ?>
					</div>
				</div>
				<div class="right">
					<div class="content_right">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="servicios" id="servicios">
	<div class="menu-container">
		<div class="notbox">
			<div class="title">
				<h2><?php the_field('title_servicios');?></h2>
			</div>
			<div class="box">
				<div class="flex">
					<div class="left">
						<div class="contenido_left">
							<?php the_field('contenido_servicios'); ?>
						</div>
					</div>
					<div class="right">
						<div class="accordeon_right">
							<div class="accordeon">
								<?php
									$accordeon = get_field('accordeon');
									foreach ($accordeon as $ac) {
										?>
								<div class="accordeon__item">
									<div class="accordeon__header">
										<img src="<?php echo $ac['img']; ?>">
										<h3><?php echo $ac['title']; ?></h3>
									</div>
									<div class="accordeon__body">
										<div class="flex">
											<div class="left">
												<?php echo $ac['left']; ?>
											</div>
											<div class="right">
												<?php echo $ac['right']; ?>
											</div>
										</div>
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
	</div>
</section>
<section class="experiencia" id="experiencia">
	<div class="menu-container-full">
		<div class="right-container">
			<div class="title">
				<h2>Nuestra Experiencia</h2>
			</div>
			<div class="listColums">
				<ul>
					<?php
						$list = get_field('list');
						foreach ($list as $li) {
					?>
					<li>
						<?php echo $li['text']; ?>
					</li>
					<?php
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="clientes" id="clientes">
	<div class="menu-container">
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
<section class="partners" id="partners">
	<div class="menu-container box">
		<div class="title">
			<h2>Nuestros Partners</h2>
		</div>
		<div class="content_partners">
			<ul>
				<?php
					$partners = get_field('partners');
					foreach ($partners as $pa) {
						?>
				<li>
					<div class="contentf">
						<div class="left">
							<?php echo $pa['nivel']; ?>
						</div>
						<div class="right">
							<?php
								foreach ($pa['partner'] as $pr) {
									?>
							<img src="<?php echo $pr['imagen']; ?>">
									<?php
								}
							?>
						</div>
					</div>
				</li>
						<?php
					}
				?>
			</ul>
		</div>
	</div>
</section>
<section class="noticias" id="noticias">
	<div class="menu-container">
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