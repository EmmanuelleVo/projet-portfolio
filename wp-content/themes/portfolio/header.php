<!doctype html>
<html lang="<?= __('fr', 'pf') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- TODO META-DESCRIPTION DIFFERENTES ET UNIQUES POUR TOUTES LES PAGES -->
    <meta name="description"
          content="<?= __('Portfolio de Emmanuelle Vo, web designer. Créé en 2022.', 'pf') ?>">
    <meta name="keywords"
          content="<?= __('portfolio, Vo, Emmanuelle, web, design, designer, développement, développeur, projet', 'pf') ?>">
    <meta name="author"
          content="Emmanuelle Vo">
    <title><?= is_front_page() ? bloginfo('name') : wp_title('Portfolio •') ?></title>
    <link rel="stylesheet" href="<?= pf_mix( 'css/theme.css' ) ?>">
    <script src="<?= pf_mix( 'js/app.js' ) ?>" type="text/javascript"></script>

    <?php wp_head(); ?>
    <!--Essayer de se passer de wp_head()-->
</head>
<body>

<header class="header">
    <h1 class="header__title sro"><?= is_front_page() ? bloginfo('description') : trim(wp_title('Emmanuelle Vo | ')); ?></h1>
    <div class="header__menu menu">
        <div class="menu__logo">
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
        <a title="<?= __('Ouvrir le menu de navigation', 'pf'); ?>" class="burger-js burger-hidden burger" >
            <p class="burger__lines"></p>
            <p class="burger__lines"></p>
            <p class="burger__lines"></p>
        </a>
        <div class="menu-js menu-nojs" style="display: none;">
            <nav class="menu__nav nav">
                <h2 class="nav__title sro"><?= __('Navigation principale', 'pf'); ?></h2>
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
            </nav>
            <div class="menu__lang lang">
                <h2 class="nav__lang-title sro"><?= __('Changer la langue', 'pf'); ?></h2>
                <?php foreach(pll_the_languages(['raw' => true]) as $code => $locale): ?>
                    <a lang="<?= $locale['locale'] ?>" hreflang="<?= $locale['locale'] ?>" href="<?= $locale['url'] ?>" title="<?= $locale['name'] ?>" class="nav__locale"><?= strtoupper($code) ?></a>
                <?php endforeach; ?>

                <p class="sro"><?= __('Le site est actuellement en', 'pf'); ?>
                    <strong><?= pf_current_language()['name'] ?></strong></p>

                <div class="lang__container">
                    <a href="/" class="lang__current"><?= pf_current_language()['slug'] ?></a>

                    <ul class="lang__other lang__hidden">
                        <?php foreach (pll_the_languages() as $lang): ?>
                            <li class="lang__li">
                                <a href="<?= $lang['url']; ?>" class="lang__link" hreflang="<?= $lang['locale']; ?>"
                                   title="<?= $lang['name']; ?>"
                                >
                                    <?= $lang['slug']; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</header>