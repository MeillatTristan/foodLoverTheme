<?php
/*
Template Name: Homepage
Template Post Type: post, page
*/
?>

<?php get_header() ?>


<div class="firstBlockHome">
    <?php $image = get_field('illustration_first_block'); ?>
    <img src="<?php echo esc_url($image['url']) ?>" alt="Illustration contact us">
    <div class="containerText">
        <h2> <?php echo get_field('titre_first_block') ?> </h2>
        <p> <?php echo get_field("contenu_first_block") ?> </p>
        <a href="<?php echo get_field('link_contact_first_block') ?>">Nous contacter</a>
    </div>
</div>
<div class="secondBlockHome">
    <img src="<?php echo get_field('illustration_second_block')['url'] ?> " alt="illustration about us">
    <div class="containerText">
        <h2> <?php echo get_field('titre_second_block') ?> </h2>
        <p> <?php echo get_field('contenu_second_block') ?> </p>
    </div>
</div>
<div class="thirdBlockHome">
    <?php $images = get_field('illustrations_third_block') ?>
    <img class="illutrationFirst" src="<?php echo esc_url($images[0]['url']) ?> " alt="illutration Third Block Home">
    <img class="shape" src="<?php echo get_template_directory_uri() . '/assets/images/Shape.png'; ?>" alt="shape Third Block Home">
    <img class="illutrationSecond" src="<?php echo esc_url($images[1]['url']) ?>" alt="illutration Third Block Home 2">
    <img class="illutrationThird" src="<?php echo esc_url($images[2]['url']) ?>" alt="illutration Third Block Home 3">
    <div class="containerText">
        <h2><?php echo get_field('titre_third_block') ?></h2>
        <p> <?php echo get_field('contenu_third_block') ?></p>
    </div>
</div>
<div class="fourthBlockHome">
    <h2><?php echo get_field('titre_fourth_block') ?></h2>
    <div class="galleryHome">
        <?php $images = get_field('gallerie_fourth_block'); ?>
        <?php foreach ($images as $image) : ?>
            <a href="gallery.html">
                <div class="containerPicture">
                    <img src="<?php echo esc_url($image['url']) ?>" alt="illustration gallery">
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</div>
<div class="fifthBlockHome">
    <div class="containerText">
        <h2><?php echo get_field('titre_fifth_block') ?></h2>
        <p><?php echo get_field('contenu_fifth_block') ?></p>
    </div>
</div>
<?php
    $image = get_field('illustration_seventh_block');
    $url_image_seventh = esc_url($image['url']);
    $titre_seventh = get_field('titre_seventh_block');
    $contenu_seventh = get_field('contenu_seventh_block')
?>
<div class="sixthBlockHome">
    <h2><?php echo get_field("titre_sixth_block") ?></h2>
    <div class="containerBlockMenu">
        <?php
            $args = array(
                'post_type' => 'post',
                'category_name' => 'formules',
            );

            $query = new WP_Query( $args );
        ?>
        <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                <div class="blockMenuHome">
                    <?php $image_sixth = get_field('illustration_formule'); ?>
                    <img src="<?php echo esc_url($image_sixth['url']) ?>" alt="illustration formule">
                    <h3> <?php echo get_field('titre_formule') ?> </h3>
                    <p><?php echo get_field('description_formule') ?></p>
                    <span class="price"><?php echo get_field('prix_formule') ?></span>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<div class="seventhBlockHome">
    <img src="<?php echo $url_image_seventh ?>" alt="illustration seventh block">
    <div class="containerText">
        <h2><?php echo $titre_seventh ?></h2>
        <p><?php echo $contenu_seventh ?></p>
    </div>
</div>
<footer>
    <nav class="footer">
        <!-- liste a puces -->
        <img class="logoFooter" src="<?php echo get_template_directory_uri() . "/assets/images/logoFooter.png" ?>" alt="logo Footer">
        <ul class="blockFooter">
            <li>
                <a href="index.html" title="Accueil">ACCUEIL</a>
            </li>
            <li>
                <a href="menu.html" title="Menu">LA CARTE</a>
            </li>
            <li>
                <a href="gallery.html">GALLERIE</a>
            </li>
            <li>
                <a href="contact.html">CONTACT</a>
            </li>
            <li>
                <a href="about.html" title="Menu">A PROPOS</a>
            </li>
        </ul>
        <ul class="listRS">
            <li><a href="https://facebook.com" target="_blank"><img class="logoRS" src="<?php echo get_template_directory_uri() . "/assets/images/logoFB.png" ?>" alt="logo FB"></a></li>
            <li><a href="https://twitter.com" target="_blank"><img class="logoRS" src="<?php echo get_template_directory_uri() . "/assets/images/logoTW.png" ?> " alt="logo twitter"></a></li>
            <li><a href="https://instagram.com" target="_blank"><img class="logoRS" src="<?php echo get_template_directory_uri() . "/assets/images/logoINSTA.png" ?>" alt="logo instagram"></a></li>
            <li><a href="https://pinterest.com" target="_blank"><img class="logoRS" src="<?php echo get_template_directory_uri() . "/assets/images/logoPinterest.png" ?>" alt="logo pinterest"></a></li>
        </ul>
    </nav>
</footer>
</body>

</html>

<?php get_footer() ?>