
<?php
/*
Template Name: Gallery
Template Post Type: post, page
*/
?>

<?php get_header() ?>
    
<!-- section gallery texte -->
<div class="galleryPicture">
    <div class="containerTitleGallery">
        <h2> <?php echo get_field('titre_containerTitleGallery') ?> </h2>
        <p> <?php echo get_field("contenu_containerTitleGallery") ?> </p>
    </div>
    <!-- Gallery -->
    <div class="gallery">
        <?php $images = get_field('illustration_Block1'); ?>
        <?php foreach ($images as $image) : ?>
            <div class="containerPicture">
            <img src="<?php echo esc_url($image['url']) ?>" alt="illustration gallery">
            </div>
        <?php endforeach; ?>
    </div>
<div class="galleryPicture">
    <h2> <?php echo get_field('titre_galleryPicture') ?> </h2>
    <p> <?php echo get_field("contenu_galleryPicture") ?> </p>
    <!-- Gallery -->
    <div class="gallery">
        <?php $images = get_field('illustration_Block2'); ?>
        <?php foreach ($images as $image) : ?>
            <div class="containerPicture">
            <img src="<?php echo esc_url($image['url']) ?>" alt="illustration gallery">
            </div>
        <?php endforeach; ?>
    </div>
</div>  

<?php get_footer() ?>