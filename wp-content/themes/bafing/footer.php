<footer>
	<div class="x-container">
		<div class="top_footer">
			<div class="flex">
				<div class="left">
					<?php
						wp_nav_menu( array(
						    'menu' => 'Header Menu'
						) );
					?>
				</div>
				<div class="right">
					<?php echo do_shortcode('[contact-form-7 id="60" title="suscripcion"]'); ?>
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