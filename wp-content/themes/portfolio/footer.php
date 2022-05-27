<footer class="footer">
    <h2 class="footer__title sro"><?= __('Pied-de-page', 'pf') ?></h2>
    <div class="footer__social">
        <div class="social__container">
            <a href="#" class="footer__linkedin footer__logo"><?= __('Linkedin', 'pf') ?></a>
            <!-- TODO : add svg -->
        </div>
        <div class="social__container">
            <a href="#" class="footer__github footer__logo"><?= __('GitHub', 'pf') ?></a>
            <!-- TODO : add svg -->
        </div>
    </div>
    <nav class="footer__nav">
        <h2 class="nav__title sro"><?= __('Navigation de pied-de-page', 'pf') ?></h2>
        <ul class="nav__list">
            <?php foreach (pf_get_menu_items('footer') as $link): ?>
                <li class="<?= $link->getBemClasses('nav__item') ?>">
                    <a href="<?= $link->url ?>" class="nav__link"><?= $link->label ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <div class="footer__languages">
        <?php foreach(pll_the_languages(['raw' => true]) as $code => $locale): ?>
            <a lang="<?= $locale['locale'] ?>" hreflang="<?= $locale['locale'] ?>" href="<?= $locale['url'] ?>" title="<?= $locale['name'] ?>" class="nav__locale"><?= strtoupper($code) ?></a>
        <?php endforeach; ?>
    </div>
    <p class="footer__copyright"><?= __('Copyright © - Emmanuelle Vo - 2022.', 'pf') ?></p>
</footer>

<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "WebSite",
        "name": "Portfolio de Emmanuelle Vo",
        "alternateName": "Emmanuelle Vo's portfolio",
        "url": "https://emmanuelle-vo.be",
        "author": {
            "@type": "Person",
            "@id": "#emmanuellevo"
        }
    }
</script>

<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Person",
        "@id": "#emmanuellevo",
        "name": "Emmanuelle Vo",
        "jobTitle": "Web Designer",
        "email": "emmanuelle.vo@gmail.com",
        "url": "https://emmanuelle-vo.be"
    }
</script>

</body>
</html>