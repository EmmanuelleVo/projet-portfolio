<header class="header">
    <h1 class="header__title page__title sro"><?= get_bloginfo('name'); ?></h1>

    <div class="header__logo">
        <a href="<?= site_url(); ?>" class="top__logo-link all" title="<?= __('Retour à l’Accueil', 'pf') ?>" itemprop="mainEntityOfPage"></a>
        <svg xmlns="http://www.w3.org/2000/svg" width="117.478" height="76.797" viewBox="0 0 117.478 76.797">
            <g id="Groupe_22" data-name="Groupe 22" transform="translate(-231.522 -32.203)">
                <ellipse id="Ellipse_4" data-name="Ellipse 4" cx="43" cy="38" rx="43" ry="38"
                         transform="translate(263 33)" fill="#a4d4ed"/>
                <path id="Tracé_11" data-name="Tracé 11" d="M4213.8,33.226l33.458,74.61,33.3-74.61"
                      transform="translate(-3980)" fill="none" stroke="#000" stroke-linejoin="bevel"
                      stroke-width="5"/>
            </g>
        </svg>
    </div>

    <a title="<?= __('Ouvrir le menu de navigation', 'p'); ?>" class="burger-js burger-hidden" >
        <p class="burger__lines"></p>
        <p class="burger__lines"></p>
        <p class="burger__lines"></p>
    </a>

    <nav class="header__nav nav menu-js menu-nojs">
        <h2 class="nav__title sro"><?= __('Navigation principale', 'pf') ?></h2>
        <!--<label for="toggle">☰</label>
        <input type="checkbox" id="toggle">-->
        <div class="nav__container">
            <ul class="nav__list">
                <?php foreach (pf_get_menu_items('main') as $link): ?>
                    <li class="<?= $link->getBemClasses('nav__item') ?>">
                        <a href="<?= $link->url ?>" class="nav__link"><?= $link->label ?></a>
                        <?php if ($link->hasSubItems()): ?>
                            <ul class="nav__sublist">
                                <?php foreach ($link->subitems as $sub): ?>
                                    <li class="<?= $link->getBemClasses('nav__subitem') ?>">
                                        <a href="<?= $sub->url ?>" class="nav__link"><?= $sub->label ?></a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>

            <div class="nav__languages">
                <?php foreach(pll_the_languages(['raw' => true]) as $code => $locale): ?>
                    <a lang="<?= $locale['locale'] ?>" hreflang="<?= $locale['locale'] ?>" href="<?= $locale['url'] ?>" title="<?= $locale['name'] ?>" class="nav__locale"><?= strtoupper($code) ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </nav>
</header>