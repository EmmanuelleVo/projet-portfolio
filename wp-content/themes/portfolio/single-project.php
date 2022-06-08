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
                    <figure class="project__fig">
                        <?= get_the_post_thumbnail( null, 'large', [
                            'class' => 'project__img image',
                        ] ) ?>
                    </figure>

                    <div class="project__description">
                        <?= get_field('presentation') ?>
                        <a href="<?= get_field('website_url') ?>" class="project__link button"><?= __('Lien vers site du projet', 'pf') ?></a>
                    </div>
                </div>
            </header>

            <section class="project__objectives objectives">
                <h3 class="objectives__title"><?= __('Objectifs', 'pf') ?></h3>

                <ul class="objectives__list">
                    <?php for ($i = 1; $i <= 4; $i++):
                        $objective = get_field('objective-' . $i);
                        if (!empty($objective)):
                            ?>
                            <li class="objectives__item"><?= $objective ?></li>
                        <?php endif; endfor; ?>
                </ul>
            </section>

            <div class="project__photos">
                <?php $fullSizeImg = get_field('img-full-size');
                if (!empty($fullSizeImg)):?>
                    <img width="100%" height="auto"
                         class="project__photo full-size"
                         src="<?= $fullSizeImg['sizes']['medium']; ?>" alt="<?= $fullSizeImg['alt']; ?>"
                         srcset="<?= $fullSizeImg['sizes']['medium']; ?> 300w,
                         <?= $fullSizeImg['sizes']['medium_large']; ?> 768w">
                <?php endif; ?>
                <?php for ($i = 1; $i <= 10; $i++):
                    $mobileImg = get_field('img-phone-' . $i);
                    if (!empty($mobileImg)):
                        ?>
                        <img width="100%" height="auto"
                             class="project__photo"
                             id="<?= $i ?>"
                             src="<?= $mobileImg['sizes']['medium']; ?>" alt="<?= $mobileImg['alt']; ?>"
                             srcset="<?= $mobileImg['sizes']['medium']; ?> 300w,
                         <?= $mobileImg['sizes']['medium_large']; ?> 768w">
                    <?php endif; endfor; ?>
            </div>


            <section class="project__languages">
                <h3 class="project__languages--title"><?= __('Langages utilisés', 'pf') ?></h3>
                <ul class="project__languages--list">
                    <?php for ($i = 1; $i <= 10; $i++):
                        $logo = get_field('logo-' . $i);
                        if (!empty($logo)):
                            ?>
                            <li class="project__languages--item">
                                <img width="150" height="auto"
                                     class="project__languages--logo"
                                     id="<?= $i ?>"
                                     src="<?= $logo['sizes']['medium']; ?>" alt="<?= $logo['alt']; ?>"
                                     srcset="<?= $logo['sizes']['medium']; ?> 300w,
                         <?= $logo['sizes']['medium_large']; ?> 768w">
                            </li>
                        <?php endif; endfor; ?>
                </ul>
            </section>
        </article>
        <div class="single-project__actions">
            <div class="actions__container">
                <?php previous_post_link('%link', __('Précédent', 'pf')) ?>
                <?php next_post_link('%link', __('Suivant', 'pf')) ?>
                <a href="<?= get_post_type_archive_link('project') ?>"
                   class="button single-project__button see-all"><?= __('Voir tous les projets', 'pf') ?></a>
            </div>
        </div>

        <?php include 'partials/_contact-section.php' ?>
    </main>
<?php endwhile; endif; ?>

<?php get_footer() ?>