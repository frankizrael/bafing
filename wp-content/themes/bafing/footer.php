<footer>
	<div class="x-container">
		<div class="top_footer">
			<div class="flex">
				<div class="left">
					<?php
						wp_nav_menu( array(
						    'menu' => 'Footer Menu'
						) );
					?>
				</div>
				<div class="right">
					<div class="top">
						<?php echo do_shortcode('[contact-form-7 id="60" title="suscripcion"]'); ?>	
					</div>
					<div class="bottom">
						<h4>Síguenos</h4>
						<ul>
						<?php
							$social = get_field('social','options');
							foreach ($social as $s) {
								?>
							<li>
								<a href="<?php echo $s['link']; ?>"><img src="<?php echo $s['img']; ?>"></a>
							</li>
								<?php
							}
						?>
						</ul>
					</div>	
				</div>
			</div>
		</div>
		<div class="bot_footer">
			<div class="flex">
				<div class="left">
					<ul>
						<?php
							$final = get_field('final_links','options');
							foreach ($final as $f) {
						?>
						<li>
							<?php echo $f['content']; ?>
						</li>
						<?php
							}
						?>
					</ul>
				</div>
				<div class="right">
					© Bafing, 1994-2020. Todos los Derechos Reservados
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer() ?>
</body>
</html>