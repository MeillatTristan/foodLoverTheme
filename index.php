

<?php get_header() ?>


<div class="firstBlockHome">
    <img src="assets/images/breackfast.png" alt="Illustration contact us">
    <div class="containerText">
        <h2>Pour le meilleur petit déjeuner</h2>
        <p>Nous saurons te régaler et te donner le plein d'énergie pour ta journée</p>
        <a href="contact.html">Nous contacter</a>
    </div>
</div>
<div class="secondBlockHome">
    <img src="assets/images/cafeBreakfast.png" alt="illustration about us">
    <div class="containerText">
        <h2>A propos</h2>
        <p>Nous nous sommes donner pour mission depuis 2007 d'être présent avec vous dès le matin avec de succulents petits déjeuner. <br> Food Lover c'est la gourmandise d'un petit déjeuner savoureux. Nous vous proposons une large séléction de produits idéales pour vous accompagner dès le matin dans un cadre chaleureux et convivial.</p>
    </div>
</div>
<div class="thirdBlockHome">
    <img class="illutrationFirst" src="assets/images/illutrationThirdBlockHome.png" alt="illutration Third Block Home">
    <img class="shape" src="assets/images/Shape.png" alt="shape Third Block Home">
    <img class="illutrationSecond" src="assets/images/illutrationThirdBlockHome2.png" alt="illutration Third Block Home 2">
    <img class="illutrationThird" src="assets/images/illutrationThirdBlockHome3.png" alt="illutration Third Block Home 3">
    <div class="containerText">
        <h2>Notre qualité</h2>
        <p>Tous nos produits sont des produits d'excellences frais obtenus près de producteurs locales. <br> Nous servons côté viande uniquement des pièces d'origine française et issu d’un élevage responsable. Nous oeuvrons au quotidien pour améliorer durablement la qualité de nos filières d’approvisionnement et de notre logistique. Tout cela dans l’optique de vous offrir la meilleure expérience possible !</p>
    </div>
</div>
<div class="fourthBlockHome">
    <h2>Our Food Gallery</h2>
    <div class="galleryHome">
        <a href="gallery.html">
            <div class="containerPicture">
                <img src="assets/images/illustrationGallery1.png" alt="illustration gallery 1">
            </div>
        </a>
        <a href="gallery.html">
            <div class="containerPicture">
                <img src="assets/images/illustrationGallery2.png" alt="illustration gallery 2">
            </div>
        </a>
        <a href="gallery.html">
            <div class="containerPicture">
                <img src="assets/images/illustrationGallery3.png" alt="illustration gallery 3">
            </div>
        </a>
        <a href="gallery.html">
            <div class="containerPicture">
                <img src="assets/images/illustrationGallery4.png" alt="illustration gallery 4">
            </div>
        </a>
        <a href="gallery.html">
            <div class="containerPicture">
                <img src="assets/images/illustrationGallery5.png" alt="illustration gallery 5">
            </div>
        </a>
        <a href="gallery.html">
            <div class="containerPicture">
                <img src="assets/images/illustrationGallery6.png" alt="illustration gallery 6">
            </div>
        </a>
    </div>
</div>
<div class="fifthBlockHome">
    <div class="containerText">
        <h2>Notre gamme de produits</h2>
        <p>Notre gamme de produits va indéniablement vous séduire ! <br> Nous proposons tout d'abord de délicieux pancake, sois salé, sois sucré avec la garniture de votre choix. Nous proposons aussi des accompagnement tel que les toasts à l'avocat ou encore les oeuf bacons et champignons. A vous de faire le meilleur choix pour votre journée ! <br> On y trouve également de savoureux burgers préparés à la commande à partir de steaks de boeuf haché français pour votre déjeuner.</p>
    </div>
</div>
<div class="sixthBlockHome">
    <h2>Our Menu</h2>
    <div class="containerBlockMenu">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( in_category( 'formules' ) ) : ?>
        <div class="blockMenuHome">
            <?php the_post_thumbnail() ?>
            <h3> <?php the_title() ?> </h3>
            <p>Assortiment de vienoiseries accompagné de fruits ainsi que d'une boisson.</p>
            <span class="price">Price: $12.00</span>
        </div>
        <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
</div>
<div class="seventhBlockHome">
    <img src="assets/images/illustrationSeventhBlock.png" alt="illustration seventh block">
    <div class="containerText">
        <h2>Nos restaurants</h2>
        <p>Nos restaurants sont des lieux reposant au sein desquels vous pouvez passer des moments de partages entre amis, seul ou en famille. Nous veillons à proposer un cadre d’exception à nos clients, en mixant subtilement des espaces de restauration assise traditionnels et des zones plus chaleureuses.</p>
    </div>
</div>
<footer>
    <nav class="footer">
        <!-- liste a puces -->
        <img class="logoFooter" src="assets/images/logoFooter.png " alt="logo Footer">
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
            <li><a href="https://facebook.com" target="_blank"><img class="logoRS" src="assets/images/logoFB.png" alt="logo FB"></a></li>
            <li><a href="https://twitter.com" target="_blank"><img class="logoRS" src="assets/images/logoTW.png" alt="logo twitter"></a></li>
            <li><a href="https://instagram.com" target="_blank"><img class="logoRS" src="assets/images/logoINSTA.png" alt="logo instagram"></a></li>
            <li><a href="https://pinterest.com" target="_blank"><img class="logoRS" src="assets/images/logoPinterest.png" alt="logo pinterest"></a></li>
        </ul>
    </nav>
</footer>
</body>

</html>

<?php get_footer() ?>