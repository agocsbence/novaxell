<?php
/*

Template Name: Tudástár

*/

get_header();

?>
			
<section class="bg--pureWhite section-knowledge-hero">
    <div class="container">
        <div class="grid grid-2 grid-reverse">
            <div class="first-block image-block">
                <img src="<?php bloginfo('template_url') ?>/assets/img/article/article-1.png" alt="">
            </div>
            <div class="last-block text-block">
                <h2 class="lead"><span>\</span> 2020.12.01 17:30</h2>
                <h1>Hőszigetelés ABC – Minden, amiről tudnod kell, de sosem merted megkérdezni</h1>
                <p>Ha már tele a fejed a hőszigeteléshez tartozó szakszavakkal és kétes lehetőségekkel, akkor itt az ideje, hogy tisztán láss! Sallangoktól és hatástalan megoldásoktól mentes cikkünkben mindent megtalálsz, ami segít a tökéletes választásban.</p>
                <div class="buttons">
                    <a href="#" class="btn btn-blue desktop-only">
                        <div class="btn-text img-left">
                            <img src="<?php bloginfo('template_url') ?>/assets/img/clock.svg" alt="">
                            9 Perc
                        </div>
                    </a>
                    <a href="" class="btn btn-green">
                        <div class="btn-text img-right">
                            Elolvasom
                            <img src="<?php bloginfo('template_url') ?>/assets/img/long-arrow-right.svg" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-knowledge bg--white">
    <div class="container">
        <div class="text-center">
            <h2 class="lead"><span>\</span> NovaXell Tudástár</h2>
            <h1>Minőségi cikkek, minőségi anyagok</h1>
            <p class="subtitle">Minden, amit a praktikus, megtérülő és környezetkímélő hőszigetelésekről tudni érdemes.</p>
        </div>
        <div class="grid grid-3 container">
            <?php
                $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'offset' => 1 ) );
                
                while ( $loop->have_posts() ) : $loop->the_post(); 
                
                    include get_theme_file_path( '/includes/card.php' );
                
                endwhile; wp_reset_query();
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>