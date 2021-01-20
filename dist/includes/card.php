<div class="card">
    <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="card-image">
    <div class="card-text">
        <h3 class="title card-title"><?php the_title(); ?></h3>
        <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis qui</p>
    </div>
    <div class="card-buttons">
        <div class="btn btn-blue">
            <div class="btn-text img-right">
                9 Perc
                <img src="<?php bloginfo('template_url') ?>/assets/img/clock.svg" alt="">
            </div>
        </div>
        <a href="<?php echo get_permalink(); ?>" class="btn btn-plain">
            <div class="btn-text img-right">
                Elolvasom
                <img src="<?php bloginfo('template_url') ?>/assets/img/green-long-arrow-right.png" alt="">
            </div>
        </a>
    </div>
</div>