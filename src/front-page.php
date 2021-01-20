<?php
/*

Template Name: Main Page

*/

get_header();

?>
			
<section class="container-fluid section-hero bg--white">
	<div class="grid grid-2">
		<div class="first-block text-block">
			<h2 class="lead"><span>\</span> <?php the_field('hero_alcim') ?></h2>
			<h1><?php the_field('hero_cim') ?></h1>
			<p><?php the_field('hero_szoveg') ?></p>
			<div class="buttons">
				<a href="#" class="btn btn-green">
					<div class="btn-text img-right">
						Beszéljünk
						<img src="<?php bloginfo('template_url') ?>/assets/img/headset.svg" alt="">
					</div>
				</a>
				<a href="" class="btn btn-transparent">
					<div class="btn-text img-right">
						Több információt szeretnék
						<img src="<?php bloginfo('template_url') ?>/assets/img/mouse.svg" alt="">
					</div>
				</a>
			</div>
		</div>
		<div class="last-block image-block">
			<img src="<?php the_field('hero_kep') ?>" alt="">
		</div>
	</div>
</section>

<section class="container bg--pureWhite">
	<div class="grid grid-2">
		<div class="first-block image-block">
			<img src="<?php bloginfo('template_url') ?>/assets/img/blocks/livingroom.png" alt="">
		</div>
		<div class="last-block text-block">
			<h2 class="lead"><span>\</span> Jövő a jelenben</h2>
			<h1>Környezetkímélő hőszigetelés, amelyre minden otthon vágyik</h1>
			<p>Hogy mitől különleges a NovaXell? Az alapanyagtól és a technológiától.</p>
			<p>A szabványosított feldolgozási folyamatokon átesett, darált újságpapírba fázisváltó anyagot (PCM) integrálunk, így a környezetterhelő hatás rendkívül alacsony. A befúvásos technológiának köszönhetően pedig gazdaságosan szállítható és egyszerűen, hulladékmentesen beépíthető.</p>
		</div>
	</div>
	<div class="grid grid-2 section section-icons">
		<div class="first-block text-block">
			
			<div class="icon-block">
				<div class="icon"><img src="<?php bloginfo('template_url') ?>/assets/img/icon/fire.png" alt=""></div>
				<div class="title">Maximális tűzállóság</div>
				<p>A cellulóz hőszigetelésünkben található önkioldó hatású bórax miatt a tűzzel szembeni védelem garantált.</p>
				<a href="" class="btn btn-plain">
					<div class="btn-text img-right">
						Tovább
						<img src="<?php bloginfo('template_url') ?>/assets/img/green-long-arrow-right.png" alt="">
					</div>
				</a>
			</div>
			<div class="icon-block">
				<div class="icon"><img src="<?php bloginfo('template_url') ?>/assets/img/icon/money.png" alt=""></div>
				<div class="title">Pénztárcakímélő megoldás</div>
				<p>A költség- és időhatékony szállítás, valamint kivitelezhetőség miatt a NovaXell igazán kedvező árú beruházás.</p>
				<a href="" class="btn btn-plain">
					<div class="btn-text img-right">
						Tovább
						<img src="<?php bloginfo('template_url') ?>/assets/img/green-long-arrow-right.png" alt="">
					</div>
				</a>
			</div>
			<div class="icon-block">
				<div class="icon"><img src="<?php bloginfo('template_url') ?>/assets/img/icon/leaf.png" alt=""></div>
				<div class="title">Csak (öko)tudatosan!</div>
				<p>Ha az alapanyagot, vagy a kapcsolódó munkavégzést nézzük, ez a cellulóz hőszigetelő anyag kiemelkedően környezetkímélő.</p>
				<a href="" class="btn btn-plain">
					<div class="btn-text img-right">
						Tovább
						<img src="<?php bloginfo('template_url') ?>/assets/img/green-long-arrow-right.png" alt="">
					</div>
				</a>
			</div>
			<div class="icon-block">
				<div class="icon"><img src="<?php bloginfo('template_url') ?>/assets/img/icon/house.png" alt=""></div>
				<div class="title">Télen-nyáron hatékony</div>
				<p>Hőcsillapítás és hővédelem együtt? A NovaXell akár 30%-kal képes csökkenteni a klimatizálási költségeket, télen és nyáron.</p>
				<a href="" class="btn btn-plain">
					<div class="btn-text img-right">
						Tovább
						<img src="<?php bloginfo('template_url') ?>/assets/img/green-long-arrow-right.png" alt="">
					</div>
				</a>
			</div>

			<div class="btn btn-green">
				<div class="btn-text img-right">
					Beszéljünk
					<img src="<?php bloginfo('template_url') ?>/assets/img/headset.svg" alt="">
				</div>
			</div>

		</div>
		<div class="last-block image-block">
			<img src="<?php bloginfo('template_url') ?>/assets/img/blocks/staircase.png" alt="">
		</div>
	</div>
</section>

<section class="bg--white section-knowledge">
	<div class="text-center container">
		<h2 class="lead"><span>\</span> NovaXell Tudástár</h2>
		<h1>Minőségi cikkek, minőségi anyagok</h1>
		<p class="subtitle">Minden, amit a praktikus, megtérülő és környezetkímélő hőszigetelésekről tudni érdemes.</p>
	</div>
	<div class="grid grid-3 container">
		<?php
			$loop = new WP_Query( array( 'post_type' => 'post' ) );
			
			while ( $loop->have_posts() ) : $loop->the_post(); 
			
				include get_theme_file_path( '/includes/card.php' );
			
			endwhile; wp_reset_query();
		?>
	</div>
	<div class="flex flex-center button-wrapper">
		<a href="" class="btn btn-green">
			<div class="btn-text img-right">
				Tovább a tudástárra
				<img src="<?php bloginfo('template_url') ?>/assets/img/long-arrow-right.svg" alt="">
			</div>
		</a>
	</div>
</section>

<section class="section-faq bg--white">
	<div class="text-center container">
		<h2 class="lead"><span>\</span> Gyakori kérdések</h2>
		<h1>Nálunk találkoznak a piaci és tervezői igények</h1>
		<p class="subtitle">Tudj meg mindent, mielőtt meghozod a jó döntést! A kérdésekből és válaszokból kiderül, miért a NovaXell a legjobb dolog, ami fázisváltó anyaggal csak történhet</p>
	</div>
	<div class="container accordions-wrapper">
		<div class="accordion-wrapper">
			<div class="accordion">Section 1</div>
			<div class="panel">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cumque repudiandae omnis facere maiores. Ipsa voluptatibus eaque eum facere perspiciatis, corrupti blanditiis totam odio repellendus perferendis. Vero, quidem autem. Modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cumque repudiandae omnis facere maiores. Ipsa voluptatibus eaque eum facere perspiciatis, corrupti blanditiis totam odio repellendus perferendis. Vero, quidem autem. Modi.</p>
			</div>
		</div>
		<div class="accordion-wrapper">
			<div class="accordion">Section 2</div>
			<div class="panel">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cumque repudiandae omnis facere maiores. Ipsa voluptatibus eaque eum facere perspiciatis, corrupti blanditiis totam odio repellendus perferendis. Vero, quidem autem. Modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cumque repudiandae omnis facere maiores. Ipsa voluptatibus eaque eum facere perspiciatis, corrupti blanditiis totam odio repellendus perferendis. Vero, quidem autem. Modi.</p>
			</div>
		</div>
		<div class="accordion-wrapper">
			<div class="accordion">Section 3</div>
			<div class="panel">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cumque repudiandae omnis facere maiores. Ipsa voluptatibus eaque eum facere perspiciatis, corrupti blanditiis totam odio repellendus perferendis. Vero, quidem autem. Modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cumque repudiandae omnis facere maiores. Ipsa voluptatibus eaque eum facere perspiciatis, corrupti blanditiis totam odio repellendus perferendis. Vero, quidem autem. Modi.</p>
			</div>
		</div>
		<div class="accordion-wrapper">
			<div class="accordion">Section 4</div>
			<div class="panel">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cumque repudiandae omnis facere maiores. Ipsa voluptatibus eaque eum facere perspiciatis, corrupti blanditiis totam odio repellendus perferendis. Vero, quidem autem. Modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cumque repudiandae omnis facere maiores. Ipsa voluptatibus eaque eum facere perspiciatis, corrupti blanditiis totam odio repellendus perferendis. Vero, quidem autem. Modi.</p>
			</div>
		</div>
		<div class="accordion-wrapper">
			<div class="accordion">Section 5</div>
			<div class="panel">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cumque repudiandae omnis facere maiores. Ipsa voluptatibus eaque eum facere perspiciatis, corrupti blanditiis totam odio repellendus perferendis. Vero, quidem autem. Modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium cumque repudiandae omnis facere maiores. Ipsa voluptatibus eaque eum facere perspiciatis, corrupti blanditiis totam odio repellendus perferendis. Vero, quidem autem. Modi.</p>
			</div>
		</div>
	</div>
</section>

<section class="section-contact bg--pureWhite">
	<div class="text-center container">
		<h2 class="lead"><span>\</span> Kapcsolat</h2>
		<h1>Ugorj szintet a hőszigetelésben!</h1>
		<p class="subtitle">Professzionális csapatunk rendelkezésedre áll, ha bármilyen kérdésed/kérésed merülne fel.</p>
	</div>
	<div class="container-fluid">
		<div class="grid grid-2">
			<div class="contact-form first-block text-block">
				<h1 class="small">Írj nekünk</h1>
				<p>Ha megbízható partnerre van szükséged, ránk számíthatsz. Dobj egy üzenetet, és szakértőnk hamarosan válaszol.</p>
				<form action="" method="post" class="grid grid-2">
					<div class="field field-short">
						<label for="fname">Név</label>
						<input type="text" name="fname" id="fname">
					</div>
					<div class="field field-short">
						<label for="fphone">Telefonszám</label>
						<input type="tel" name="fphone" id="fphone" value="+36 ">
					</div>
					<div class="field field-long">
						<label for="femail">E-mail cím</label>
						<input type="text" name="femail" id="femail">
					</div>
					<div class="field field-long">
						<label for="fmessage">Üzenet</label>
						<textarea name="fmessage" id="fmessage" cols="30" rows="10"></textarea>
					</div>
					<div class="field field-long">
						<input type="submit" value="Küldés" id="submitBtn" class="hide">
						<label for="submitBtn" class="btn btn-green">
							<div class="btn-text img-right">
								Küldés
								<img src="<?php bloginfo('template_url') ?>/assets/img/paper-plane.svg" alt="">
							</div>
						</label>
					</div>
				</form>
			</div>
			<div class="contact-image last-block image-block">
				<img src="<?php bloginfo('template_url') ?>/assets/img/blocks/contact.png" alt="">
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
