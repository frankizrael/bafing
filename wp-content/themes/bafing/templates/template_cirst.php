<?php /* Template Name: csirt */
set_query_var('ENTRY', 'csirt');
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
						<h2>¿Quiénes Somos?</h2>						
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
					<?php the_field('team'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="vision-mision-3">
	<div class="x-container">
		<div class="box">
			<div class="flex">
				<div class="left">
					<div class="contenido_vym">
						<div class="content">
							<?php the_field('mision'); ?>
						</div>
						<div class="content">
							<?php the_field('vision'); ?>
						</div>						
					</div>
				</div>
				<div class="right">
					<div class="accordeon_right box">
						<h2>Información del CSIRT</h2>
						<div class="accordeon ">
							<?php
								$accordeon = get_field('accordeon');
								foreach ($accordeon as $ac) {
									?>
							<div class="accordeon__item">
								<div class="accordeon__header">
									<h3><?php echo $ac['title']; ?></h3>
								</div>
								<div class="accordeon__body">
									<div class="content_body">
										<div class="center">
											<?php echo $ac['center']; ?>
										</div>
										<?php
											$rep = $ac['repeat'];
											if ($rep) { ?>
												<div class="repeat_data">
												<?php 
													foreach ($rep as $re) {
												?>
													<div class="content_repeat_data">
														<?php echo $re['content']; ?>
													</div>
												<?php
												}
												?>
												</div>
												<?php
											}
										?>										
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
</section>
<section class="contact">
	<div class="x-container">
		<div class="title"><h2>Contáctenos</h2></div>
		<div class="contact-precept">
			<div class="flex">
				<div class="left">
					<?php the_field('contactenos_info'); ?>
				</div>
				<div class="right">
					<div class="detailData">
					<?php
						$detail = get_field('datos_contacto');
						if ($detail) {
							foreach ($detail as $de) {
								?>
						<div class="de_detail">
							<h4><?php echo $de['title']; ?></h4>
							<div class="content">
								<?php echo $de['content']; ?>
							</div>
						</div>
								<?php
							}
						}
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
?>
