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
						<a href="<?php echo $ss['link']; ?>" style="background-image: url(<?php echo $ss['imagen']; ?>)">
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
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?php
						$clientes = get_field('clientes');
							foreach ($clientes as $cli) {
									?>
							<div class="swiper-slide">
								<div class="clientes_img">
									<img src="<?php echo $cli['imagen']; ?>">
								</div>
							</div>
									<?php
								}
							?>
				</div>
			</div>
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
			<h2>Nuestra experiencia</h2>
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
								<div class="text">
									<div class="tit">
										<img src="<?php echo get_field('logo',$hi['id']); ?>">
										<h3><?php echo get_the_title($hi['id']); ?></h3>
									</div>									
									<div class="content">
										<?php echo get_field('resume',$hi['id']); ?>
									</div>
									<div class="autor">
										<?php echo get_field('autor',$hi['id']); ?>
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
			<a href="<?php echo site_url();?>/noticias" class="btn">Ver más noticias</a>
		</div>
		<div class="blogsContent">
			<?php
				$blog = get_field('blog');
				$aux = 0;
				foreach ($blog as $b) {
					?>
					<div class="blogsContentItem <?php if ($aux == 0) { ?>destacada_h<?php } ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($b['id']); ?>');">
						<a href="<?php the_permalink($b['id']); ?>">
							<?php
								if ($aux == 0) {
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
					$aux++;
				}
			?>
		</div>
	</div>
</section>
<section class="noticias">
	<div class="x-container">
		<div class="title">
			<h2>Multimedia</h2>
			<a href="<?php echo site_url();?>/multimedia" class="btn">Ver más noticias</a>
		</div>
		<div class="blogsContent blogsMultimedia">
			<?php
				$blog = get_field('multimedia');
				$aux = 0;
				foreach ($blog as $b) {
					?>
					<div class="blogsContentItem <?php if ($aux == 0) { ?>destacada_h<?php } ?>" style="background-image: url('<?php echo get_the_post_thumbnail_url($b['id']); ?>');">
						<a href="<?php the_permalink($b['id']); ?>">
							<?php
								if ($aux == 0) {
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
					$aux++;
				}
			?>
		</div>
	</div>
</section>
<section class="rrss noticias">
	<div class="x-container">
		<div class="title">
			<h2><?php the_field('title_social'); ?></h2>
		</div>
		<div class="rss-content ">
			<div class="rss-fb box">
				<div class="fb-page" data-href="https://www.facebook.com/bafingsac/" data-tabs="timeline, events, messages" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bafingsac/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bafingsac/">Bafing S.A.C.</a></blockquote></div>
			</div>
			<div class="rss-tweet box">
				<a class="twitter-timeline" href="https://twitter.com/BafingSAC?ref_src=twsrc%5Etfw">Tweets by BafingSAC</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			<div class="eventoDesu box">
				<div class="content_eventos">	
					<div class="titleDesu">Próximos Eventos</div>				
					<?php
						$eventos = get_field('eventos');
						foreach ($eventos as $ev) {
							?>
						<div class="evento_item">
							<a href="<?php echo $ev['link']; ?>" target="_blank">
								<div class="evento_item__img">
									<img src="<?php echo $ev['img']; ?>">
								</div>
								<div class="evento_item__text">
									<div class="date"><?php echo $ev['date']; ?></div>
									<div class="text"><?php echo $ev['text']; ?></div>
									<div class="link">
										<p>Ver más</p>
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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v7.0&appId=481644492198975&autoLogAppEvents=1"></script>
<?php
get_footer();
?>
