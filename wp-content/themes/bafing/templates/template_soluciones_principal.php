<?php /* Template Name: solucionesPrincipal */
set_query_var('ENTRY', 'soluciones_principal');
get_header();
?>
<?php get_template_part('include/nav'); ?>
<div class="NavChild posFixed">
	<div class="x-container">
		<div class="flex justify-content-between align-items-center">
			<?php 
				$soluciones = get_field('soluciones');
				foreach ($soluciones as $ss) {
					?>
					<div class="NavChild__item">
						<a href="#<?php echo $ss['id'];?>">
							<img src="<?php the_field('icon',$ss['id']); ?>">
							<span><?php echo get_the_title($ss['id']);?></span>
						</a>
					</div>
					<?php
				}
			?>
		</div>
	</div>
</div>
<?php 
	$solucionesContent = get_field('soluciones');
	foreach ($solucionesContent as $ssc) {
?>
<section id="<?php echo $ssc['id']; ?>" class="section">
	<article class="banner backImagen backImagen--center backImagen--fixed" style="background-image: url('<?php echo get_the_post_thumbnail_url($ssc['id']); ?>');">
		<div class="x-container fullheight posRelative">
			<div class="posAbsolute banner__title">
				<h2><?php echo get_the_title($ssc['id']);?></h2>
				<p><?php echo get_field('subtitle',$ssc['id']);?></p>
				<a href="<?php the_permalink($ssc['id']);?>" class="btn">Ver más</a>
			</div>
			<div class="anchor anchor--white">
				<a href="#<?php echo $ssc['id']; ?>_detail">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16.556" viewBox="0 0 20 16.556"><defs><style>.svg_fa{fill:none;}.svg_fb,.svg_fc{stroke:none;}.svg_fc{fill:#fff;}</style></defs><g class="svg_fa" transform="translate(20 16.556) rotate(180)"><path class="svg_fb" d="M8.288,2.834a2,2,0,0,1,3.424,0l6.455,10.687a2,2,0,0,1-1.712,3.034H3.545a2,2,0,0,1-1.712-3.034Z"/><path class="svg_fc" d="M 10 3.268259048461914 C 9.873559951782227 3.268259048461914 9.638710021972656 3.305908203125 9.486419677734375 3.558048248291016 L 3.031009674072266 14.24533843994141 C 2.873390197753906 14.50628852844238 2.957729339599609 14.7364387512207 3.022029876708984 14.85040855407715 C 3.086339950561523 14.96436882019043 3.239730834960938 15.15555858612061 3.544589996337891 15.15555858612061 L 16.45541000366211 15.15555858612061 C 16.76026916503906 15.15555858612061 16.91366004943848 14.96436882019043 16.97797012329102 14.85040855407715 C 17.04227066040039 14.7364387512207 17.12660980224609 14.50628852844238 16.96899032592773 14.24533843994141 L 10.51358032226562 3.558038711547852 C 10.36128997802734 3.305908203125 10.12644004821777 3.268259048461914 10 3.268259048461914 M 10 1.868261337280273 C 10.66148471832275 1.868261337280273 11.32297039031982 2.190243721008301 11.71193981170654 2.834208488464355 L 18.16735076904297 13.52149868011475 C 18.97248077392578 14.85443878173828 18.01263999938965 16.5555591583252 16.45541000366211 16.5555591583252 L 3.544589996337891 16.5555591583252 C 1.987360000610352 16.5555591583252 1.027519226074219 14.85443878173828 1.832649230957031 13.52149868011475 L 8.288060188293457 2.834208488464355 C 8.677029609680176 2.190243721008301 9.338515281677246 1.868261337280273 10 1.868261337280273 Z"/></g></svg>
				</a>
			</div>
		</div>
	</article>
	<article class="detail" id="<?php echo $ssc['id']; ?>_detail">
		<div class="detail__top">
			<div class="left-container">
				<div class="title">
					<h2><?php echo get_field('title_servicios',$ssc['id']); ?></h2>
				</div>
			</div>
		</div>
		<div class="detail__items">
			<div class="x-container">				
				<div class="box">
					<div class="flex">
						<div class="left">
							<div class="contenido_left">
								<?php the_field('contenido_servicios',$ssc['id']); ?>
							</div>
						</div>
						<div class="right">
							<div class="accordeon_right">
								<div class="accordeon box">
									<?php
										$accordeon = get_field('accordeon',$ssc['id']);
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
	</article>
</section>
<?php
				}
			?>
<?php
get_footer();
?>