<?php /* Template Name: About */ ?>
<?php get_header() ?>

    <main class="layout about">
        <?php
        $about = pf_get_about();
        if (($about)->have_posts()) : while ($about->have_posts()) : $about->the_post(); ?>
            <h1 class="about__title page__title">
                <?= __('A propos de Emmanuelle Vo', 'dw') ?>
            </h1>
            <div class="about__container">
                <img src="#" alt="Photo de Emmanuelle Vo" class="bio__img">
                <section class="about__bio bio">
                    <div class="bio__container">
                        <h2 class="bio__title"><?= __('Web Designer', 'pf') ?></h2>
                        <p class="bio__content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ex fuga maiores maxime
                            odit
                            possimus vero. A aut ea, eaque eius itaque, iure laborum mollitia, nesciunt nisi nostrum
                            provident quam.
                        </p>
                    </div>
                </section>
                <a href="#" class="button about__button"><?= __('Voir tous mes projets', 'pf') ?></a>
                <section class="about__competences competences">
                    <h2 class="competences__title"><?= __('Mes compétences', 'pf') ?></h2>
                    <ul class="competences__list">
                        <li class="competences__item">
                            Création de wireframe et de moodboard
                        </li>
                    </ul>
                </section>
                <?php include 'partials/_contact-section.php' ?>
            </div>
        <?php endwhile; else : ?>
            <p class="about__empty empty"><?= __('Il n’y a pas encore de projet pour le moment', 'pf') ?></p>
        <?php endif; ?>

        <?php include 'partials/_contact-section.php'?>
    </main>

<?php get_footer() ?>