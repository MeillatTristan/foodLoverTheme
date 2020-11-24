<footer>
    <?php wp_footer() ?>
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