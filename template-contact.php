<?php
/*
Template Name: contacte page
Template Post Type: post, page
*/
?>

<?php get_header() ?>


<!-- section Renseignement -->
<div class="containerBlockContact">
    <div class="form">
        <h2><?php echo get_field('titre_section_form_contact') ?></h2>
        <form>
            <?php if (have_rows('form_contact')) : ?>
                <?php while (have_rows('form_contact')) : the_row(); ?>
                    <?php $placeholderField = get_sub_field('titre_champ_contact'); ?>
                    <?php $typeField = get_sub_field('type_champs_contact'); ?>
                    <?php if ($typeField == "textarea") { ?>
                        <textarea name="message" placeholder="<?php echo $placeholderField ?>" cols="30" rows="10" required></textarea>
                    <?php } else { ?>
                        <input type="<?php echo $typeField ?>" placeholder="<?php echo $placeholderField ?>">
                    <?php } ?>
                <?php endwhile; ?>
            <?php endif ?>
            <input type="submit" value="Envoyer">
        </form>
    </div>
    <div class="blockInformation">
        <h2><?php echo get_field('titre_section_information_contact') ?></h2>
        <?php if (have_rows('informations_contact')) : ?>
            <?php while (have_rows('informations_contact')) : the_row(); ?>
            <p> <?php echo get_sub_field('text_information_contact') ?></p>
            <?php endwhile; ?>
        <?php endif ?>
        <!-- section Google Maps -->
        <h2>Nous Retrouver</h2>
        <?php $location = get_field('map_contact'); ?>
        <div class="containerMap">
            <div class="acf-map">
                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
            </div>
        </div>
    </div>
</div>
<footer>
    <nav class="footer">
        <!-- liste a puces -->
        <img class="logoFooter" src="<?php echo get_template_directory_uri() . "/assets/images/logoFooter.png" ?> " alt="logo Footer">
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
            <li><a href="https://twitter.com" target="_blank"><img class="logoRS" src="<?php echo get_template_directory_uri() . "/assets/images/logoTW.png" ?>" alt="logo twitter"></a></li>
            <li><a href="https://instagram.com" target="_blank"><img class="logoRS" src="<?php echo get_template_directory_uri() . "/assets/images/logoINSTA.png" ?>" alt="logo instagram"></a></li>
            <li><a href="https://pinterest.com" target="_blank"><img class="logoRS" src="<?php echo get_template_directory_uri() . "/assets/images/logoPinterest.png" ?>" alt="logo pinterest"></a></li>
        </ul>
    </nav>
</footer>
</body>

</html>

<?php get_footer() ?>