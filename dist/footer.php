</main>
		<footer class="bg--green">

			<div class="container">
				<div class="footer-content grid grid-5">
					<div class="footer-logo">
						<img src="<?php bloginfo('template_url') ?>/assets/img/footer-logo.svg" alt="">
						<p class="lead">Innováció a hőszigetelésben</p>
						<p>Új generációs, környezetkímélő hőszigetelés télen-nyáron</p>
					</div>
					<ul id="footer-menu-nav"><div class="lead">Navigáció</div>
						<li><a href="<?php echo esc_url( get_page_link( 23 ) ); ?>">Főoldal</a></li>
						<li><a href="<?php echo esc_url( get_page_link( 25 ) ); ?>">Technológia</a></li>
						<li><a href="<?php echo esc_url( get_page_link( 27 ) ); ?>">Tudástár</a></li>
						<li><a href="<?php echo esc_url( get_page_link( 21 ) ); ?>">Rólunk</a></li>
						<li><a href="<?php echo esc_url( get_page_link( 23 ) ); ?>">GyIK</a></li>
					</ul>
					<ul id="footer-menu-contact"><div class="lead">Elérhetőségünk</div>
						<li><a href="https://goo.gl/maps/nHCLvEJ3SmWnF1777"><img src="<?php bloginfo('template_url') ?>/assets/img/map-marker-.png" alt=""> <?php the_field('levelezesi_cim', 'option'); ?></a></li>
						<li><a href="tel:<?php the_field('telefonszam_1', 'option'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/phone.svg" alt=""> <?php the_field('telefonszam_1', 'option'); ?></a></li>
						<li><a href="tel:<?php the_field('telefonszam_2', 'option'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/phone.svg" alt=""> <?php the_field('telefonszam_2', 'option'); ?></a></li>
						<li><a href="mailto:<?php the_field('email_cim', 'option'); ?>"><img src="<?php bloginfo('template_url') ?>/assets/img/envelope.svg" alt=""> <?php the_field('email_cim', 'option'); ?></a></li>
					</ul>
				</div>
				<div class="copyright">
					<p>© Copyright 2020 NovaXell. All rights reserved.</p>
				</div>
			</div>
			<div class="hiventures">
				<img src="<?php bloginfo('template_url') ?>/assets/img/hiventures.png" alt="Hiventures">
			</div>

			<img src="<?php bloginfo('template_url') ?>/assets/img/eublokk.png" alt="Széchenyi 2020" class="eublock">
			
		</footer>
		<script src="<?php bloginfo('template_url') ?>/assets/js/scripts.js" type="text/javascript"></script>
		<?php wp_footer(); ?>
	</body>
</html>