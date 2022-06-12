<footer class="footer">
    <h2 class="footer__title sro"><?= __('Pied-de-page', 'pf') ?></h2>

    <div class="footer__container hidden">
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
            <?php foreach (pll_the_languages(['raw' => true]) as $code => $locale): ?>
                <a lang="<?= $locale['locale'] ?>"
                   hreflang="<?= $locale['locale'] ?>"
                   href="<?= $locale['url'] ?>"
                   title="<?= $locale['name'] ?>"
                   class="nav__locale <?php if ($locale['current_lang']): ?> current__lang <?php endif; ?>">
                    <?= strtoupper($code) ?></a>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="footer__social hidden">
        <div class="social__container">
            <a href="https://www.linkedin.com/in/emmanuelle-vo-bb01a3226/" class="footer__linkedin footer__logo"><span class="sro"><?= __('Linkedin', 'pf') ?></span></a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24.929" height="24.929"
                 viewBox="0 0 24.929 24.929">
                <title>LinkedIn</title>
                <desc>Lettres "i" et "n" dans un carré</desc>
                <path id="Icon_awesome-linkedin" data-name="Icon awesome-linkedin"
                      d="M23.149,2.25H1.775A1.788,1.788,0,0,0,0,4.047V25.382a1.788,1.788,0,0,0,1.775,1.8H23.149a1.793,1.793,0,0,0,1.781-1.8V4.047A1.793,1.793,0,0,0,23.149,2.25ZM7.534,23.618H3.84v-11.9h3.7v11.9ZM5.687,10.1A2.142,2.142,0,1,1,7.829,7.954,2.143,2.143,0,0,1,5.687,10.1Zm15.7,13.522H17.69V17.831c0-1.38-.028-3.155-1.92-3.155-1.925,0-2.22,1.5-2.22,3.055v5.887H9.855v-11.9H13.4v1.625h.05a3.892,3.892,0,0,1,3.5-1.92c3.739,0,4.435,2.465,4.435,5.67Z"
                      transform="translate(0 -2.25)" fill="#383f51"/>
            </svg>
        </div>
        <div class="social__container">
            <a href="https://github.com/EmmanuelleVo" class="footer__github footer__logo"><span class="sro"><?= __('GitHub', 'pf') ?></span></a>
            <svg xmlns="http://www.w3.org/2000/svg" width="24.929" height="24.306"
                 viewBox="0 0 24.929 24.306">
                <title>GitHub</title>
                <desc>Silhouette d'un chat dans un rond</desc>
                <path id="Icon_awesome-github" data-name="Icon awesome-github"
                      d="M8.338,20.134c0,.1-.116.181-.261.181-.166.015-.281-.065-.281-.181,0-.1.116-.181.261-.181C8.208,19.938,8.338,20.018,8.338,20.134Zm-1.563-.226c-.035.1.065.216.216.246a.236.236,0,0,0,.312-.1c.03-.1-.065-.216-.216-.261A.258.258,0,0,0,6.775,19.908ZM9,19.822c-.146.035-.246.131-.231.246.015.1.146.166.3.131s.246-.131.231-.231S9.142,19.807,9,19.822ZM12.3.563A12.052,12.052,0,0,0,0,12.826,12.6,12.6,0,0,0,8.519,24.848c.643.116.87-.281.87-.608,0-.312-.015-2.031-.015-3.086,0,0-3.518.754-4.257-1.5,0,0-.573-1.463-1.4-1.84,0,0-1.151-.789.08-.774a2.653,2.653,0,0,1,1.94,1.3A2.657,2.657,0,0,0,9.4,19.39a2.793,2.793,0,0,1,.8-1.694c-2.81-.312-5.644-.719-5.644-5.554A3.809,3.809,0,0,1,5.75,9.182,4.749,4.749,0,0,1,5.881,5.77c1.05-.327,3.468,1.357,3.468,1.357a11.874,11.874,0,0,1,6.313,0s2.418-1.689,3.468-1.357a4.746,4.746,0,0,1,.131,3.413,3.907,3.907,0,0,1,1.3,2.96c0,4.85-2.96,5.237-5.77,5.554a2.972,2.972,0,0,1,.854,2.332c0,1.694-.015,3.79-.015,4.2,0,.327.231.724.87.608a12.485,12.485,0,0,0,8.434-12.012A12.324,12.324,0,0,0,12.3.563ZM4.885,17.9c-.065.05-.05.166.035.261.08.08.2.116.261.05.065-.05.05-.166-.035-.261C5.066,17.867,4.951,17.832,4.885,17.9Zm-.543-.407c-.035.065.015.146.116.2a.15.15,0,0,0,.216-.035c.035-.065-.015-.146-.116-.2C4.458,17.425,4.378,17.44,4.343,17.49ZM5.971,19.28c-.08.065-.05.216.065.312.116.116.261.131.327.05.065-.065.035-.216-.065-.312C6.187,19.214,6.036,19.2,5.971,19.28ZM5.4,18.541c-.08.05-.08.181,0,.3s.216.166.281.116a.229.229,0,0,0,0-.312C5.609,18.526,5.478,18.475,5.4,18.541Z"
                      transform="translate(0 -0.563)" fill="#383f51"/>
            </svg>
        </div>
    </div>

    <p class="footer__copyright hidden"><?= __('Copyright © - Emmanuelle Vo - 2022.', 'pf') ?></p>
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