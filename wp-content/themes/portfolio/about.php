<?php /* Template Name: About */ ?>
<?php get_header() ?>

    <main class="layout about">
        <div class="big-screen">


        <?php
        $about = pf_get_about();
        if (($about)->have_posts()) : while ($about->have_posts()) : $about->the_post(); ?>
            <h1 class="about__title page__title">
                <span class="sro"><?= __('A propos de', 'pf') ?>></span> <?= __('Emmanuelle Vo', 'pf') ?>
            </h1>
            <div class="about__container">
                <?php ?>
                <figure class="about__fig">
                    <?= get_the_post_thumbnail(null, 'medium', [
                        'class' => 'about__img image',
                    ]) ?>
                </figure>
                <section class="about__bio bio">
                    <div class="bio__container">
                        <h2 class="bio__title"><?= __('Web Designer', 'pf') ?></h2>
                        <p class="bio__content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores ex fuga maiores maxime
                            odit
                            possimus vero. A aut ea, eaque eius itaque, iure laborum mollitia, nesciunt nisi nostrum
                            provident quam.
                        </p>
                        <a href="<?= get_post_type_archive_link('project') ?>" class="button about__button"><?= __('Voir tous mes projets', 'pf') ?></a>
                    </div>
                </section>

                <section class="about__competences competences">
                    <h2 class="competences__title"><?= __('Mes compétences', 'pf') ?></h2>
                    <ul class="competences__list">
                        <?php for ($i = 1; $i <= 5; $i++):
                            $competence = get_field('competences-' . $i);
                            if (!empty($competence)):
                                ?>
                                <li class="competences__item"><?= $competence ?></li>
                            <?php endif; endfor; ?>
                    </ul>
                </section>
            </div>
        <?php endwhile; else : ?>
            <p class="about__empty empty"><?= __('Il n’y a pas encore de projet pour le moment', 'pf') ?></p>
        <?php endif; ?>

        <?php include 'partials/_contact-section.php'?>
        </div>
    </main>

<?php get_footer() ?>