<?php
/*

Template Name: Rólunk

*/

get_header();

?>
			
<section class="container-fluid section-about-hero bg--white">
    <div class="grid grid-2">
        <div class="first-block text-block">
            <?php
            $hero = get_field('hero_blokk');
            if( $hero ): ?>
                <h2 class="lead"><span>\</span> <?php echo $hero["blokk_alcim"] ?></h2>
                <h1><?php echo $hero["blokk_cim"] ?></h1>
                <p><?php echo $hero["blokk_leiras"] ?></p>
            <?php endif; ?>
            <h2 class="lead"><span>\</span> A név kötelez</h2>
            <h1>Hagyomány és innováció</h1>
            <p>Minden a családunk 30 éves építőipari tapasztalatával kezdődöt, és egy közös TDK dolgozattal.</p>
            <p>Édesanyánk lakberendezői és Édesapánk építőmérnöki tudását is kamatoztatva alkottuk meg azt a dolgozatot, amelyből kinőtt a NovaXell hőszigetelés. Dr. Becker Gábor, a Budapesti Műszaki és Gazdaságtudományi Egyetem professzorának tanácsai és Imre bátyám tájépítész, építésvezetői kompetenciája segítségével sikerült a piac minden igényét figyelembe vennünk, amikor véglegesítettük a jövő hőszigetelő megoldását.</p>
        </div>
        <div class="last-block image-block">
            <img src="<?php bloginfo('template_url') ?>/assets/img/blocks/about.png" alt="">
        </div>
    </div>
</section>

<section class="container section-about-team bg--pureWhite">
    <div class="text-center">
        <h2 class="lead"><span>\</span> A NovaXell Alapítói</h2>
        <h1>Cégünket egy hiánypótló megoldás kifejlesztése érdekében alapítottuk meg.</h1>
        <p class="subtitle">Az ökologikus szemlélet kiemelkedően fontos számunkra: a fenntartható jövő hőszigetelését szeretnénk széles körben elérhetővé tenni. Ezért létrehoztuk a terméket, amely költséghatékonyan és környezetkímélően oldja meg a könnyűszerkezetes épületek nyári hővédelmi problémáit, és kiaknázza a cellulóz hőszigetelésben rejlő lehetőségeket.</p>
    </div>
    <div class="grid grid-2">
        <div class="image-card bordered">
            <div class="card-image">
                <img class="member" src="<?php bloginfo('template_url') ?>/assets/img/team-1.png" alt="">
                <img class="logo" src="<?php bloginfo('template_url') ?>/assets/img/logo-mini-white.png" alt="">
            </div>
            <div class="card-content">
                <h2 class="title">
                    Andrási Alex
                    <span>CEO</span>
                </h2>
                <p class="description">
                    Okleveles építészmérnök, főként épületszerkezeti tervezéssel foglalkozik. Elkötelezett az épületek energiahatékony és ökologikus szemléletű tervezése mellett. Az innovatív és fenntartható építőipari technológiákat részesíti előnyben, a kreatív műszaki megoldások kiaknázását és fejlesztését tekinti fő feladatának.
                </p>
            </div>
        </div>
        <div class="image-card bordered">
            <div class="card-image">
                <img class="member" src="<?php bloginfo('template_url') ?>/assets/img/team-2.png" alt="">
                <img class="logo" src="<?php bloginfo('template_url') ?>/assets/img/logo-mini.png" alt="">
            </div>
            <div class="card-content">
                <h2 class="title">
                    Andrási Imre Attila
                    <span>CTO</span>
                </h2>
                <p class="description">
                    Tájrendező-kertépítő mérnök, így az épített és természetes környezetünk harmóniájának megteremtése a szakmai hivatása. Építésvezetői tapasztalatai és kiváló szervezőképessége révén sikeres projektlebonyolító. Zöldterület- és épületfenntartásban, tervezésben és kivitelezésben is jártas. A környezettudatos, gazdaságos és kifogástalan minőségű építés számára az egyetlen járható út.
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>