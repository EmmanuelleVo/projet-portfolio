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
    <link rel="stylesheet" href="<?= pf_mix('css/theme.css') ?>">
    <script src="<?= pf_mix('js/app.js') ?>" type="text/javascript"></script>

    <?php wp_head(); ?>
    <!--Essayer de se passer de wp_head()-->
</head>
<body>
<header class="header">
    <h1 class="header__title sro"><?= is_front_page() ? bloginfo('description') : trim(wp_title('Emmanuelle Vo | ')); ?></h1>
    <div class="header__menu menu">
        <div class="menu__logo">
            <a href="<?= site_url(); ?>" class="top__logo-link all" title="<?= __('Retour à l’Accueil', 'pf') ?>"
               itemprop="mainEntityOfPage"></a>
            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="75" viewBox="0 0 40 45">
                <title>Logo du portfolio de Emmanuelle Vo</title>
                <desc>La lettre V suivi d'un rond coloré, ce qui forme "VO"</desc>
                <g id="Groupe_22" data-name="Groupe 22" transform="translate(-230 -13)">
                    <circle id="Ellipse_4" data-name="Ellipse 4" cx="13.5" cy="13.5" r="13.5" transform="translate(243 23)" fill="#ffc0b8"/>
                    <text id="V" transform="translate(230 49)" fill="#383f51" font-size="37" font-family="Montserrat-Light, Montserrat" font-weight="300"><tspan x="0" y="0">V</tspan></text>
                </g>
            </svg>

        </div>
        <a title="<?= __('Ouvrir le menu de navigation', 'pf'); ?>" class="burger-js burger-hidden burger">
            <p class="burger__lines"></p>
            <p class="burger__lines"></p>
            <p class="burger__lines"></p>
        </a>
        <div class="menu-js menu-nojs menu__wrapper" style="display: none;">
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
                <?php foreach (pll_the_languages(['raw' => true]) as $code => $locale): ?>
                <div class="lang__container">
                    <?php if ($locale['current_lang']): ?>
                        <p class="sro"><?= __('Le site est actuellement en', 'pf'); ?> <?= $locale['name'] ?></p>
                        <a href="/" class="lang__current"><?= strtoupper($code) ?><span class="arrow-down arrow-js"></span></a>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    <ul class="lang__other lang__hidden">
                        <?php foreach (pll_the_languages(['raw' => true]) as $code => $locale): ?>
                            <li class="lang__li">
                                <a lang="<?= $locale['locale'] ?>" hreflang="<?= $locale['locale'] ?>"
                                   href="<?= $locale['url'] ?>" title="<?= $locale['name'] ?>"
                                   class="nav__locale <?php if ($locale['current_lang']): ?> current__lang <?php endif; ?>">
                                        <?= strtoupper($code) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>