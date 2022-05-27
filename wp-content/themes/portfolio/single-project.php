<?php /* Template Name: Single-Project */ ?>
<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="layout single-project">
        <article class="project">
            <h2 class="layout__title project__title"><?= get_the_title() ?></h2>
            <header class="project__head">
                <p class="project__data">
                    <time class="project__date" datetime="<?= date('c', strtotime(get_field('date', false, false))) ?>">
                        <?= ucwords(date_i18n('l, j F Y', strtotime(get_field('date', false, false)))) ?>
                    </time>
                </p>
                <div class="project__container">
                    <img src="#" alt="Image du projet" class="project__img">
                    <p class="project__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur distinctio impedit ipsam, magnam nemo sequi sunt voluptas? Dolore ducimus eligendi error, hic neque quibusdam quis repellendus tenetur. Eos, et nam.</p>
                    <a href="#" class="project__link"><?= __('Voir le site du projet', 'pf') ?></a>
                </div>
            </header>

            <section class="project__objectives objectives">
                <h3 class="objectives__title"><?= __('Objectifs', 'pf') ?></h3>
                <ul class="objectives__list">
                    <li class="objectives__item">Objectif 1</li>
                </ul>
                <p class="objectives__content"><?= get_field('objectif') ?></p>
            </section>

            <!-- TODO : add images -->


            <section class="project__languages">
                <h3 class="project__languages--title"><?= __('Langages utilisés', 'pf') ?></h3>
                <ul class="project__languages--list">
                    <li class="project__languages--item">
                        <img src="#" alt="Logo de HTML" class="project__languages--img">
                    </li>
                </ul>
            </section>

            <div class="project__excerpt">
                <p><?= the_content() ?></p>
            </div>

            <div class="single-project__actions">
                <div class="actions__container">
                    <a href="#" class="button single-project__button"><?= __('Précédent', 'pf') ?></a>
                    <a href="#" class="button single-project__button"><?= __('Suivant', 'pf') ?></a>
                </div>
                <a href="#" class="button single-project__button"><?= __('Voir tous les projets', 'pf') ?></a>
            </div>
        </article>

        <?php include 'partials/_contact-section.php'?>
    </main>
<?php endwhile; endif; ?>

<?php get_footer() ?>