<?php get_header(); ?>

<div class="container single-page">
    <div class="single-page-header">
        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="single-page-header-image">
        <?php the_title(); ?>
    </div>
    <div class="single-page-content">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer();
