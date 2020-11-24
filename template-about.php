<?php
/*
Template Name: About
Template Post Type: page
*/
?>

<?php get_header() ?>

<div class="containerAbout">
    <div class="firstBlockAbout">
        <div class="aboutText">
            <h2><?php echo get_field('titre_about') ?></h2>
            <p><?php echo get_field('description_about') ?></p>
            <p><?php echo get_field('description2_about') ?></p>
            <a href="<?php echo get_field('link_menu_about') ?>">NOTRE CARTE</a>
        </div>
        <video loop autoplay muted>
            <source src="<?php echo get_field('video_about')['url'] ?>" type="video/mp4">
        </video>
    </div>
</div>
<div class="slidein">
    <p>En raison du COVID-19 nous sommes actuellement fermé.</p>
</div>

<?php get_footer() ?>