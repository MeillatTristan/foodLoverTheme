
<?php
/*
Template Name: Gallery
Template Post Type: post, page
*/
?>

<?php get_header() ?>
    
<!-- section gallery texte -->
<section class="galleryPhotos">
    <div class="galleryPicture">
        <div class="containerTitleGallery">
            <h2> <?php echo get_field('titre_containerTitleGallery') ?> </h2>
            <p> <?php echo get_field("contenu_containerTitleGallery") ?> </p>
        </div>
        <!-- Gallery -->
        <div class="gallery">
            <div class="containerPicture">
                <img src="<?php echo get_field('illustration_containerPicture1')['url'] ?> " alt="illustration gallery 1">
            </div>
            <div class="containerPicture">
                <img src="<?php echo get_field('illustration_containerPicture2')['url'] ?> " alt="illustration gallery 2">
            </div>
            <div class="containerPicture">
                <img src="<?php echo get_field('illustration_containerPicture3')['url'] ?> " alt="illustration gallery 3">
            </div>
            <div class="containerPicture">
                <img src="<?php echo get_field('illustration_containerPicture4')['url'] ?> " alt="illustration gallery 4">
            </div>
            <div class="containerPicture">
                <img src="<?php echo get_field('illustration_containerPicture5')['url'] ?> " alt="illustration gallery 5">
            </div>
            <div class="containerPicture">
                <img src="<?php echo get_field('illustration_containerPicture6')['url'] ?> " alt="illustration gallery 6">
            </div>
        </div>
    <div class="galleryPicture">
        <h2> <?php echo get_field('titre_galleryPicture') ?> </h2>
        <p> <?php echo get_field("contenu_galleryPicture") ?> </p>
        <!-- Gallery -->
        <div class="gallery">
            <div class="containerPicture">
                <img src="<?php echo get_field('illustration_containerPicture7')['url'] ?> " alt="illustration gallery 7">
            </div>
            <div class="containerPicture">
                <img src="<?php echo get_field('illustration_containerPicture8')['url'] ?> " alt="illustration gallery 8">
            </div>
            <div class="containerPicture">
                <img src="<?php echo get_field('illustration_containerPicture9')['url'] ?> " alt="illustration gallery 9">
            </div>
            <div class="containerPicture">
                <img src="<?php echo get_field('illustration_containerPicture10')['url'] ?> " alt="illustration gallery 10">
            </div>
            <div class="containerPicture">
                <img src="<?php echo get_field('illustration_containerPicture11')['url'] ?> " alt="illustration gallery 11">
            </div>
            <div class="containerPicture">
                <img src="<?php echo get_field('illustration_containerPicture12')['url'] ?> " alt="illustration gallery 12">
            </div>
        </div>
    </div>  
</section>

<?php get_footer() ?>