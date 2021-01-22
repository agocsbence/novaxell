<?php
/*

Template Name: Technológia

*/

get_header();

?>
			
<section class="container-fluid section-tech-hero bg--white">
    <div class="grid grid-2">
        <div class="first-block text-block">
            <?php
            $hero = get_field('hero_blokk');
            if( $hero ): ?>
                <h2 class="lead"><span>\</span> <?php echo $hero["blokk_alcim"] ?></h2>
                <h1><?php echo $hero["blokk_cim"] ?></h1>
                <p><?php echo $hero["blokk_leiras"] ?></p>
            <?php endif; ?>
        </div>
        <div class="last-block image-block">
            <img src="<?php bloginfo('template_url') ?>/assets/img/blocks/tech-hero.png" alt="">
        </div>
    </div>
</section>

<section class="container bg--pureWhite">
    <?php
    $properties = get_field('tulajdonsagok_blokk');
    if( $hproperties ): ?>
        <div class="grid grid-2 grid-reverse">
            <div class="first-block image-block">
                <img src="<?php bloginfo('template_url') ?>/assets/img/blocks/tech-chair.png" alt="">
            </div>
            <div class="last-block text-block">
                <h2 class="lead"><span>\</span> <?php echo $properties["blokk_alcim"] ?></h2>
                <h1><?php echo $properties["blokk_cim"] ?></h1>
                <p><?php echo $properties["blokk_leiras"] ?></p>
            </div>
        </div>
        <p><?php echo $properties["blokk_leiras_2"] ?></p>
    <?php endif; ?>
</section>

<section class="container bg--pureWhite section-tech-icon-cards">
    <div class="grid grid-3">

        <?php if( have_rows('tulajdonsagok') ): ?>
			<?php while( have_rows('tulajdonsagok') ): the_row();  ?>
                <div class="icon-card">
                    <div class="card-title">
                        <img src="<?php the_sub_field('ikon') ?>" alt="<?php the_sub_field('cim') ?>">
                        <div class="title"><?php the_sub_field('cim') ?></div>
                    </div>
                    <p><?php the_sub_field('leírás') ?></p>
            </div>
			<?php endwhile; ?>
		<?php endif; ?>

    </div>
</section>

<section class="bg--white">
    <div class="container">
        <div class="grid grid-2">
            <div class="first-block text-block">
                <h2 class="lead"><span>\</span> A cellulóz titka</h2>
                <h1>A hatékonyság az alapoknál kezdődik</h1>
                <p>A cellulóz hőszigetelés használt újságpapírból készül. A válogatott hulladékpapír alapanyagot több lépésben darálják és finomítják, így cellulóz rostokból álló pelyhesített anyag születik, mely kiváló hőszigetelő. A cellulózba a kártevők elleni védelem miatt, illetve a tűzállóság biztosítása érdekében bórsókat kevernek. </p>
            </div>
            <div class="last-block image-block">
                <img src="<?php bloginfo('template_url') ?>/assets/img/blocks/tech-efficiency.png" alt="">
            </div>
        </div>
        <p>A cellulóz hőszigetelés tehát az alapanyagot és az előállítást tekintve is az egyik legkörnyezetkímélőbb, legköltséghatékonyabb hőszigetelési megoldás. Az alkalmazástechnikát tekintve szintén elmondható, hogy gazdaságos megoldásról van szó, hiszen a cellulóz hőszigetelés befúvásos technológiával készül. A kivitelezéshez mindössze 2-3 fő szükséges, hiszen a munkaterületen az anyag a befúvó berendezés csövén keresztül közlekedik, a beépítés pedig a befúvás miatt gyorsan elvégezhető. A kivitelezés sebessége miatt kiemelkedően költséghatékony eljárásról van szó.</p>
    </div>
</section>

<section class="bg--pureWhite section-tech-details">
    <div class="container">
        <div class="text-center">
            <h2 class="lead"><span>\</span> Dokumentumok és műszaki adatok</h2>
            <h1>Hatékonyság a számok nyelvén</h1>
            <p class="subtitle">A számok is mellettünk állnak. Ismerd meg közelebbről a NovaXell egyedülálló tulajdonságait!</p>
        </div>
        <div class="grid grid-2-3">
            <?php include get_theme_file_path( '/includes/tech-details.php' ); ?>
            <div class="downloads">
                <a href="" class="btn btn-download" download>
                    <div class="btn-text img-right">
                        Tűzveszélyességi osztály besorolás.pdf
                        <img src="<?php bloginfo('template_url') ?>/assets/img/icon/download.svg" alt="">
                    </div>
                </a>
                <a href="" class="btn btn-download" download>
                    <div class="btn-text img-right">
                        Tűzveszélyességi osztály besorolás.pdf
                        <img src="<?php bloginfo('template_url') ?>/assets/img/icon/download.svg" alt="">
                    </div>
                </a>
                <a href="" class="btn btn-download" download>
                    <div class="btn-text img-right">
                        Tűzveszélyességi osztály besorolás.pdf
                        <img src="<?php bloginfo('template_url') ?>/assets/img/icon/download.svg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>