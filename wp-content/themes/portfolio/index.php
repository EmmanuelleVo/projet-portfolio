<?php get_header() ?>

    <main class="layout">
        <section class="layout__intro intro">
            <h2 class="intro__title sro"><span>Emmanuelle Vo</span>, <?= __('Web Designer', 'pf') ?></h2>
            <a href="#" class="intro__button button"><?= __('En savoir plus', 'pf') ?></a>
        </section>

        <section class="layout__last-project project">
            <h2 class="intro__title"><?= __('Mes projets', 'pf') ?></h2>
            <a href="#" class="last-project__button button"><?= __('Voir tous les projets', 'pf') ?></a>
        </section>

        <?php include 'partials/_contact-section.php'?>
    </main>

<?php get_footer() ?>